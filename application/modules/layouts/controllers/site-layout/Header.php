<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Header extends MX_Controller {



	private $data;

	public function __construct() {

        parent::__construct();
        $this->load->database();
        $this->load->model('Service_model', 'service');

	}
	public function index()

	{

		/**
        * Breadcrumbs
        */
        $this->data['home'] = [
            'link'  => base_url(),
            'text'  => 'Home'
        ];
		$this->data['services'] = $this->service->all();
		return $this->load->view('site-layout/header', $this->data);

	}

}

