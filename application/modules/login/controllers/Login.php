<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

	public $data;
	public function __construct()
	{

		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','render', 'form_validation'));
		$this->load->helper(array('url', 'language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		//$redirect = '/';
		if (!$this->ion_auth->logged_in())
		{
			//redirect('/login', 'refresh');
		} else {
			if($this->ion_auth->isAdmin()) {
				redirect('/admin/dashboard', 'refresh');
			}elseif($this->ion_auth->isEmployee()) {
				redirect('/employee/profile/'. $this->ion_auth->get_user_id(), 'refresh');
			} else {
				redirect('/customer/my-account/'. $this->ion_auth->get_user_id(), 'refresh');
			}
		}
				
	}
	
	public function index()
	{
		
		$data['head'] 		= Modules::run('layouts/site-layout/head/index');
		$data['header'] 		= Modules::run('layouts/site-layout/header/index');
		$data['footer'] 		= Modules::run('layouts/site-layout/footer/index');
		$data['script'] 	= Modules::run('layouts/site-layout/script/index');

		$this->load->view('index', $data);
	}
	public function submit()
	{
		$this->data['head'] 		= Modules::run('layouts/app-layout/head/index');
		$this->data['script'] 	= Modules::run('layouts/app-layout/script/index');
		$this->data['title'] = $this->lang->line('login_heading');

		// validate form input
		$this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
		$this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

		if ($this->form_validation->run() === TRUE)
		{
			// check to see if the user is logging in
			// check for "remember me"
			$remember = (bool)$this->input->post('remember');

			if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
			{
				//if the login is successful
				//redirect them back to the home page
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				
				//print_r($this->ion_auth->in_group(1));
				$userType =$this->ion_auth->getUserType();
				if($userType === '1') {
					redirect('/admin/dashboard', 'refresh');
				}elseif($userType === '2') {
					redirect('/employee/profile/'. $this->ion_auth->get_user_id(), 'refresh');
				} else {
					redirect('/customer/my-account/'. $this->ion_auth->get_user_id(), 'refresh');
				}
				//redirect('/employees', 'refresh');
			}
			else
			{
				// if the login was un-successful
				// redirect them back to the login page
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('login', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
		else
		{
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect('login', 'refresh');
		}
	}

	/**
	 * Log the user out
	 */
	public function logout()
	{
		

		// log the user out
		$logout = $this->ion_auth->logout();

		// redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect('login', 'refresh');
	}
}
