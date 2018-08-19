<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends MX_Controller {
	
	public  $data;
	public function __construct() {
		parent::__construct();
		$this->load->model('Service_model', 'service');
	}
	
	public function index() {

		$this->data['head'] 		= Modules::run('layouts/site-layout/head/index');
		$this->data['header'] 		= Modules::run('layouts/site-layout/header/index');
		$this->data['footer'] 		= Modules::run('layouts/site-layout/footer/index');
		$this->data['script'] 		= Modules::run('layouts/site-layout/script/index');
			
		$this->load->view('index', $this->data);
	}

}
