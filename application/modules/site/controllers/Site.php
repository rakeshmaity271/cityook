<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MX_Controller {
	private $categories;
	private $data;
	public function __construct() {
		parent::__construct();
		$this->load->model('Category_model', 'category');
	}
	public function index()
	{
		$this->data = array();
		/**
		* @description
		* @return object of array()
		* List of category
		*/
		$this->data['categories'] = $this->getCategories();

		$this->data['head'] 		= Modules::run('layouts/site-layout/head/index');
		$this->data['header'] 		= Modules::run('layouts/site-layout/header/index');
		$this->data['footer'] 		= Modules::run('layouts/site-layout/footer/index');
		$this->data['script'] 	= Modules::run('layouts/site-layout/script/index');

		$this->load->view('index', $this->data);
	}

	private function getCategories() {
		$this->categories = array();
		$this->categories = $this->category->all();
		if(count($this->categories) > 0) {
			return $this->categories;
		}
		return false;
	}
}
