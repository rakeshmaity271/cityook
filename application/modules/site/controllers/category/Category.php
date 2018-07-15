<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MX_Controller {

	public function __construct() {
		parent::__construct();
	}
	public function index()
	{
		$data['head'] 		= Modules::run('layouts/site-layout/head/index');
		$data['header'] 		= Modules::run('layouts/site-layout/header/index');
		$data['footer'] 		= Modules::run('layouts/site-layout/footer/index');
		$data['script'] 	= Modules::run('layouts/site-layout/script/index');

		$this->load->view('category/category', $data);
	}
}
