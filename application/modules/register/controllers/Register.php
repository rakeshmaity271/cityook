<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MX_Controller {

	public $data;
	public function __construct()
	{

		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','render', 'form_validation'));
		$this->load->helper(array('url', 'language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

	}
	public function index()
	{
		$data['head'] 		= Modules::run('layouts/site-layout/head/index');
		$data['header'] 	= Modules::run('layouts/site-layout/header/index');
		$data['footer'] 	= Modules::run('layouts/site-layout/footer/index');
		$data['script'] 	= Modules::run('layouts/site-layout/script/index');

		$this->load->view('index', $data);
	}
	public function sendOtp() {

	}
	public function receive() {
		$data['head'] 		= Modules::run('layouts/site-layout/head/index');
		$data['header'] 	= Modules::run('layouts/site-layout/header/index');
		$data['footer'] 	= Modules::run('layouts/site-layout/footer/index');
		$data['script'] 	= Modules::run('layouts/site-layout/script/index');
		$this->load->view('otp', $data);
	}
	

	public function generateOtp() {
		$email 				= ($this->input->post('email')) ? strtolower($this->input->post('email')) : '';
		$identity_column 	= $this->config->item('identity', 'ion_auth');
		$identity 			= ($identity_column === 'email') ? $email : $this->input->post('identity');
		$password 			= $this->input->post('password');

		$additional_data = array(
				'fullname' => $this->input->post('fullname'),
				'phone' => $this->input->post('phone'),
			);

		if($this->ion_auth->register($identity, $password, $email, $additional_data)) {

			return $this->output
	            ->set_content_type('application/json')
	            ->set_status_header(200)
	            ->set_output(json_encode(array(
	                    'text' => '200',
	                    'type' => 'danger',
	                    'error' => false,
	                    'message' => 'success'
	            )));

		} else {
			return $this->output
	            ->set_content_type('application/json')
	            ->set_status_header(500)
	            ->set_output(json_encode(array(
	                    'text' => '500',
	                    'type' => 'danger',
	                    'error' => false,
	                    'message' => 'success'
	            )));
		}
	}
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
