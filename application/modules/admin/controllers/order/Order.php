<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends MX_Controller {


    private $data;
    public function __construct() {

        parent::__construct();
        $this->load->database();
        $this->load->library('ion_auth');
        $this->load->library('Flash_lib', NULL, 'flash');
        $this->load->model('Order_model', 'order');
        
    }

    public function transactions() {
        $this->data['head'] 		= Modules::run('layouts/app-layout/head/index');

        $this->data['header'] 	    = Modules::run('layouts/app-layout/header/index');

        $this->data['sidebar'] 	    = Modules::run('layouts/app-layout/sidebar/index');

        $this->data['script'] 	    = Modules::run('layouts/app-layout/script/index');

        $this->data['footer'] 	    = Modules::run('layouts/app-layout/footer/index');
        $this->data['transactions'] = $this->order->getTransactions();
        $this->load->view('order/transactions', $this->data);
    }
}