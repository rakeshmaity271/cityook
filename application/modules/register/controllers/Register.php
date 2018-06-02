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



		// foreach(array_keys($this->session->userdata) as $key) {
		// 	if($key === 'register') {
		// 		$this->session->unset_userdata($key);
		// 	} else {
				
		// 	}
		// }

	}

	public function index()

	{
		$mobile = ($this->session->userdata('register')['mobile']) ? $this->session->userdata('register')['mobile'] : '';
		$form = ($this->session->userdata('register')['form']) ? $this->session->userdata('register')['form'] : '';
		if($mobile !== "" && $form === 1) {
			redirect('/register/step-2');
		} 

		$data['head'] 		= Modules::run('layouts/site-layout/head/index');

		$data['header'] 	= Modules::run('layouts/site-layout/header/index');

		$data['footer'] 	= Modules::run('layouts/site-layout/footer/index');

		$data['script'] 	= Modules::run('layouts/site-layout/script/index');



		$this->load->view('index', $data);

	}

	public function sendOtp() {

		$mobile = ($this->input->post('mobile')) ? $this->input->post('mobile') : '';
		if(!is_numeric($mobile)) {
			return $this->output
						->set_content_type('application/json')
						->set_status_header(200)
						->set_output(json_encode(array(
								'error' => true,
								'status' => 200,
								'message' => $mobile.' this is not a numaric value, enter 10 digit valid mobile number',
								'type' => 'error'

						))); 
		}
		/**
		 * mobile no verificaiton from otp table
		 */
		$verificationDetails = $this->SMSGETWAYHUB->getVerificationDetailsMobile($mobile);

		if(count($verificationDetails) > 0) {

			if(($this->SMSGETWAYHUB->getCurrentTime() - $verificationDetails->expired_time) > $this->SMSGETWAYHUB->getExpiredTime()) {
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
				return $this->output
						->set_content_type('application/json')
						->set_status_header(200)
						->set_output(json_encode(array(
								'error' => true,
								'status' => 200,
								'message' => 'You have already otp',
								'type' => 'exists_otp'

						))); 
						
			}
		}
		$user = $this->Register_model->getUserByMobile($mobile);
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
				$formData = array(
					'form_name' => 1
				);
					$this->data = $this->SMSGETWAYHUB->sendOtp($this->config->item('SMSGETWAYHUB_URL'),$this->config->item('SMSGETWAYHUB_APIKEY'), false, false, $mobile, '', true, $formData);
					$this->session->set_userdata('register', array('mobile' => $mobile, 'form' => 1));
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
		$mobile = ($this->session->userdata('register')['mobile']) ? $this->session->userdata('register')['mobile'] : '';
		$form = ($this->session->userdata('register')['form']) ? $this->session->userdata('register')['form'] : '';
		if($mobile === "" && $form === '') {
			redirect('/register');
		}

		$data['head'] 		= Modules::run('layouts/site-layout/head/index');

		$data['header'] 	= Modules::run('layouts/site-layout/header/index');

		$data['footer'] 	= Modules::run('layouts/site-layout/footer/index');

		$data['script'] 	= Modules::run('layouts/site-layout/script/index');

		$this->load->view('step_2', $data);

	}


	
	public function submit() {

		$mobile = ($this->input->post('mobile')) ? $this->input->post('mobile') : '';
		/**
		 * mobile no verificaiton from otp table
		 */
		$verificationDetails = $this->SMSGETWAYHUB->getVerificationDetailsMobile($mobile);

		if(count($verificationDetails) > 0) {
			/**
			 * Match with user input mobile number and otp mobile 
			 */
			if($verificationDetails->mobile === $mobile) {
				if(($this->SMSGETWAYHUB->getCurrentTime() - $verificationDetails->expired_time) > $this->SMSGETWAYHUB->getExpiredTime()) {
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
					
					redirect('/register');
				} else {
					$fullname = ($this->input->post('fullname')) ? $this->input->post('fullname') : '';
					$email = ($this->input->post('email')) ? strtolower($this->input->post('email')) : '';
					$password = ($this->input->post('password')) ? $this->input->post('password') : '';
					$userInputVerificationCode = ($this->input->post('verificationCode')) ? $this->input->post('verificationCode') : '';
					if(strlen($password) >= 10) {
						$this->data = array(
							'fullname' 		=> $fullname,
							'email' 		=> $email,
							'mobile' 		=> $mobile,
							'password' 		=> $this->Ion_auth_model->hash_password($password),
							'user_type' 	=> '3',
							'active'		=>	1
						);
						/**
						 * match with User input and mobile otp 
						 * IF Match
						 */
						if($userInputVerificationCode == $verificationDetails->code) {
							if($this->Register_model->register($this->data)) {
								$this->SMSGETWAYHUB->destroyExpiredCode($mobile);
								
								/**
								 * Destroy register session
								 */
								foreach(array_keys($this->session->userdata) as $key) {
									if($key === 'register') {
										$this->session->unset_userdata($key);
									} else {
										
									}
								}
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
					} else {
						return $this->output
									->set_content_type('application/json')
									->set_status_header(200)
									->set_output(json_encode(array(
											'error' => true,
											'status' => 200,
											'message' => 'Password must be > 10 digit',
											'type' => 'error'
			
									))); 
					}
					
				}
			}
		} else {
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

}

