<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
class Register extends MX_Controller {

	public $data;
	public function __construct()
	{

		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','render', 'form_validation'));
		$this->load->library('SMSGETWAYHUB_lib', null, 'SMSGETWAYHUB');
		$this->load->helper(array('url', 'language'));
		$this->load->model('Register_model');
		$this->load->model('Ion_auth_model');
		//$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		
	}
	public function index()
	{
		if(count($this->SMSGETWAYHUB->all()) > 0) {
			redirect('/register/step-2');
		} else {
			//redirect('/register');
		}
		$data['head'] 		= Modules::run('layouts/site-layout/head/index');
		$data['header'] 	= Modules::run('layouts/site-layout/header/index');
		$data['footer'] 	= Modules::run('layouts/site-layout/footer/index');
		$data['script'] 	= Modules::run('layouts/site-layout/script/index');

		$this->load->view('index', $data);
	}
	public function sendOtp() {
		$mobile = ($this->input->post('mobile')) ? $this->input->post('mobile') : '';
		$user = $this->Register_model->getUserByMobile($mobile);
		//print_r($user);
		if(count($user) > 0) {
			return $this->output
						->set_content_type('application/json')
						->set_status_header(200)
						->set_output(json_encode(array(
								'error' => true,
								'status' => 200,
								'message' => 'User already exists!'
						))); 
		}
		$this->data = $this->SMSGETWAYHUB->sendOtp($this->config->item('SMSGETWAYHUB_URL'),$this->config->item('SMSGETWAYHUB_APIKEY'), false, false, $mobile, '', true);
		return $this->output
						->set_content_type('application/json')
						->set_status_header(200)
						->set_output(json_encode(array(
								'error' => false,
								'status' => 200,
								'mobile' => $mobile,
								'data' => $this->data,
								'type' => 'success',
								'message' => 'Verification code has been send in your phone'
						))); 
	}
	public function stepTwo() {
		$d = $this->SMSGETWAYHUB->all();
		
		if(count($d) > 0) {
			$data['mobile'] = $d[0]->mobile;
		} else {
			redirect('/register');
		}
		$data['head'] 		= Modules::run('layouts/site-layout/head/index');
		$data['header'] 	= Modules::run('layouts/site-layout/header/index');
		$data['footer'] 	= Modules::run('layouts/site-layout/footer/index');
		$data['script'] 	= Modules::run('layouts/site-layout/script/index');
		$this->load->view('step_2', $data);
	}

	public function submit() {
		$firstFetch = $this->SMSGETWAYHUB->all();
		
		if(count($firstFetch) > 0) {
			$mobile = $firstFetch[0]->mobile;
		}

		//$mobile = ($this->input->post('mobile')) ? $this->input->post('mobile') : '';
		$fullname = ($this->input->post('fullname')) ? $this->input->post('fullname') : '';
		$email = ($this->input->post('email')) ? strtolower($this->input->post('email')) : '';
		$password = ($this->input->post('password')) ? $this->input->post('password') : '';

		
		$verificationDetails = $this->SMSGETWAYHUB->getVerificationDetailsMobile($mobile);
		//print_r($verificationDetails);
		$userInputVerificationCode = ($this->input->post('verificationCode')) ? $this->input->post('verificationCode') : '';
		$currentTime = time();
		$expiredTime = 60;
	
		$this->data = array(
			'fullname' 		=> $fullname,
			'email' 		=> $email,
			'mobile' 		=> $mobile,
			'password' 		=> $this->Ion_auth_model->hash_password($password),
			'user_type' 	=> '3',
			'active'		=>	1
		);
		if($verificationDetails) {
			if((time() - $verificationDetails->expired_time) > $expiredTime) {
				$this->SMSGETWAYHUB->destroyExpiredCode($mobile);
				return $this->output
						->set_content_type('application/json')
						->set_status_header(200)
						->set_output(json_encode(array(
								'error' => true,
								'status' => 200,
								'message' => 'Verification code is expired!',
								'type' => 'expired'
						))); 
			} else {
				if($userInputVerificationCode == $verificationDetails->code) {

					if($this->Register_model->customerRegister($this->data)) {

						$this->SMSGETWAYHUB->destroyExpiredCode($mobile);

						return $this->output
									->set_content_type('application/json')
									->set_status_header(200)
									->set_output(json_encode(array(
											'error' => false,
											'status' => 200,
											'message' => 'Successfully Registration',
											'type' => 'success'
									))); 
					} else {
						return $this->output
									->set_content_type('application/json')
									->set_status_header(200)
									->set_output(json_encode(array(
											'error' => true,
											'status' => 200,
											'message' => 'Somethings went to wrong!',
											'type' => 'error'
									))); 
					}
					
					
				} else {
					return $this->output
									->set_content_type('application/json')
									->set_status_header(200)
									->set_output(json_encode(array(
											'error' => true,
											'status' => 200,
											'message' => 'Verification code does not match!',
											'type' => 'error'
									))); 
				}
			}
		}else {
			return $this->output
							->set_content_type('application/json')
							->set_status_header(200)
							->set_output(json_encode(array(
									'error' => true,
									'status' => 200,
									'message' => 'Data not availabe',
									'type' => 'error'
							))); 
		}
		
	}
	

	// public function generateOtp() {
	// 	$email 				= ($this->input->post('email')) ? strtolower($this->input->post('email')) : '';
	// 	$identity_column 	= $this->config->item('identity', 'ion_auth');
	// 	$identity 			= ($identity_column === 'email') ? $email : $this->input->post('identity');
	// 	$password 			= $this->input->post('password');

	// 	$additional_data = array(
	// 			'fullname' => $this->input->post('fullname'),
	// 			'phone' => $this->input->post('phone'),
	// 		);

	// 	if($this->ion_auth->register($identity, $password, $email, $additional_data)) {

	// 		return $this->output
	//             ->set_content_type('application/json')
	//             ->set_status_header(200)
	//             ->set_output(json_encode(array(
	//                     'text' => '200',
	//                     'type' => 'danger',
	//                     'error' => false,
	//                     'message' => 'success'
	//             )));

	// 	} else {
	// 		return $this->output
	//             ->set_content_type('application/json')
	//             ->set_status_header(500)
	//             ->set_output(json_encode(array(
	//                     'text' => '500',
	//                     'type' => 'danger',
	//                     'error' => false,
	//                     'message' => 'success'
	//             )));
	// 	}
	// }
	// public function register()
	// {
	// 	$this->data['title'] = $this->lang->line('create_user_heading');

	// 	$tables = $this->config->item('tables', 'ion_auth');
	// 	$identity_column = $this->config->item('identity', 'ion_auth');
	// 	$this->data['identity_column'] = $identity_column;

	// 	// validate form input
	// 	$this->form_validation->set_rules('fullname', $this->lang->line('create_user_validation_fname_label'), 'trim|required');
		
	// 	if ($identity_column !== 'email')
	// 	{
	// 		$this->form_validation->set_rules('identity', $this->lang->line('create_user_validation_identity_label'), 'trim|required|is_unique[' . $tables['users'] . '.' . $identity_column . ']');
	// 		$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'trim|required|valid_email');
	// 	}
	// 	else
	// 	{
	// 		$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'trim|required|valid_email|is_unique[' . $tables['users'] . '.email]');
	// 	}
	// 	$this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'trim');
	
	// 	$this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
	// 	//$this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

	// 	if ($this->form_validation->run() === TRUE)
	// 	{
	// 		$email = strtolower($this->input->post('email'));
	// 		$identity = ($identity_column === 'email') ? $email : $this->input->post('identity');
	// 		$password = $this->input->post('password');

	// 		$additional_data = array(
	// 			'fullname' => $this->input->post('fullname'),
	// 			'phone' => $this->input->post('phone'),
	// 		);
	// 	}

	// 	print_r($this->data);
	// 	if ($this->form_validation->run() === TRUE && $this->ion_auth->register($identity, $password, $email, $additional_data))
	// 	{
			
	// 		return json_encode($data = array(
	// 			'error' => FALSE,
	// 			'message' => 'success'
	// 		));

	// 	}
	// 	else
	// 	{
			
	// 		$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

	// 		return json_encode([
	// 			'error' => TRUE,
	// 			'message' => $this->data['message']

	// 		]);
	// 	}
	// }
	
}
