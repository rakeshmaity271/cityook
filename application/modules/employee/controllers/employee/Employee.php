<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Employee extends MX_Controller {



	public function __construct() {
        $this->load->database();
		$this->load->library('ion_auth');
		$this->load->library('Flash_lib', NULL, 'flash');
    }

	public function index()	{
		if (!$this->ion_auth->logged_in()) {
			redirect('/login', 'refresh');
		} else if (!$this->ion_auth->isEmployee()) {
			$this->flash->error('Error', 'You must be an employee to view this page.');
			redirect('/unauthorized');
		} else {
			$data['head'] 		= Modules::run('layouts/app-layout/head/index');
			$data['header'] 	= Modules::run('layouts/app-layout/header/index');
			$data['sidebar'] 	= Modules::run('layouts/app-layout/sidebar/index');
			$data['script'] 	= Modules::run('layouts/app-layout/script/index');
			$data['footer'] 	= Modules::run('layouts/app-layout/footer/index');
			$this->load->view('/employee/index', $data);
		}
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

