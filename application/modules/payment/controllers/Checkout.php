<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checkout extends MX_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function success() {
        $data['head'] 		= Modules::run('layouts/site-layout/head/index');
		$data['header'] 	= Modules::run('layouts/site-layout/header/index');
		$data['footer'] 	= Modules::run('layouts/site-layout/footer/index');
		$data['script'] 	= Modules::run('layouts/site-layout/script/index');
        $data['text_success'] 			= 'Your payment was successfully received.';
        $this->load->view('checkout/success', $data);
    }
}