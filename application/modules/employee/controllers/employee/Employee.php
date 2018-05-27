<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends MX_Controller {

	// public function __construct() {
	// 	$this->load->database();
	// 	$this->load->library(array('ion_auth'));
	// 	$this->load->helper(array('url', 'language'));

	// 	if (!$this->ion_auth->logged_in())
	// 	{
	// 		// redirect them to the login page
	// 		redirect('/login', 'refresh');
	// 	}
	// 	else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
	// 	{
	// 		// redirect them to the home page because they must be an administrator to view this
	// 		return show_error('You must be an administrator to view this page.');
	// 	}
	// 	else
	// 	{
	// 		//$this->index();
	// 		//$this->_render_page('employees' . DIRECTORY_SEPARATOR . 'index', $this->data);
	// 	}
	// }
	public function index()
	{
		
		$data['head'] 		= Modules::run('layouts/app-layout/head/index');
		$data['header'] 	= Modules::run('layouts/app-layout/header/index');
		$data['sidebar'] 	= Modules::run('layouts/app-layout/sidebar/index');
		$data['script'] 	= Modules::run('layouts/app-layout/script/index');
		$data['footer'] 	= Modules::run('layouts/app-layout/footer/index');
		$this->load->view('/employee/index', $data);
	}
	public function profile()
	{
		$data['head'] 		= Modules::run('layouts/app-layout/head/index');
		$data['header'] 	= Modules::run('layouts/app-layout/header/index');
		$data['sidebar'] 	= Modules::run('layouts/app-layout/sidebar/index');
		$data['script'] 	= Modules::run('layouts/app-layout/script/index');
		$data['footer'] 	= Modules::run('layouts/app-layout/footer/index');
		$this->load->view('/employee/profile', $data);
	}
	// public function edit()
	// {
	// 	$this->load->view('edit');
	// }

	
	

}
