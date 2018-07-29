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
        $this->data['numOfCartItems'] = $this->getNumofCartItems();
		$this->data['cartitems'] = $this->getCartItems();
                $this->data['services'] = $this->service->all();
                // echo "<pre>";
                // print_r($this->data);
                // exit();
		return $this->load->view('site-layout/header', $this->data);

    }
    
    
    private function getNumofCartItems() {
            $total = 0;
            return ($this->session->userdata('cart_item')) ? $total += count($this->session->userdata('cart_item')) : $total;
    }
        
    
    private function getCartItems() {
            return ($this->session->userdata('cart_item')) ? $this->session->userdata('cart_item') : [];
    }
    

}

