<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends MX_Controller {
      private $data;	  	  public function __construct() {      parent::__construct();      $this->load->model('Employee_model', 'employee_model');      $this->load->library('Flash_lib', NULL, 'flash');      //$this->load->library('Commonlib', 'commonlib');      // $this->redirect = '/admin/user';    }
    public function index() {
        $this->data['title'] = 'Users';
        $this->data['head'] 		= Modules::run('layouts/app-layout/head/index');
		$this->data['header'] 	    = Modules::run('layouts/app-layout/header/index');
		$this->data['sidebar'] 	    = Modules::run('layouts/app-layout/sidebar/index');
		$this->data['script'] 	    = Modules::run('layouts/app-layout/script/index');
		$this->data['footer'] 	    = Modules::run('layouts/app-layout/footer/index');
		// $this->load->view('user/index', $this->data);				$emp = $this->employee_model->all();		//$count($users);	  // print_r(count($users));		//exit();        $this->data['employee'] = $emp;        $this->load->view('employee/index', $this->data);		}
}