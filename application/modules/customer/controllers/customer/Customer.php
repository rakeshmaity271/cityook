<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MX_Controller {
    private $data;
    public function account()
    {
        $this->data['head'] 		= Modules::run('layouts/site-layout/head/index');
		$this->data['header'] 		= Modules::run('layouts/site-layout/header/index');
		$this->data['footer'] 		= Modules::run('layouts/site-layout/footer/index');
		$this->data['script'] 	    = Modules::run('layouts/site-layout/script/index');

		$this->load->view('/customer/account', $this->data);
    }
}