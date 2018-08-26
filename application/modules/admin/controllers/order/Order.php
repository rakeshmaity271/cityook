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
        $this->load->model('User_model', 'user');
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

    public function getOrderByTransactionId($transactionId) {

        $this->data['head']       = Modules::run('layouts/app-layout/head/index');
        $this->data['header']     = Modules::run('layouts/app-layout/header/index');
        $this->data['sidebar']    = Modules::run('layouts/app-layout/sidebar/index');
        $this->data['script']     = Modules::run('layouts/app-layout/script/index');
        $this->data['footer']       = Modules::run('layouts/app-layout/footer/index');

        $order = $this->order->getOrderByTransactionId($transactionId);
        $this->data['order'] = array();
        foreach ($order as $value) {
            $this->data['order'][] = [
                'txnid' => $value->id_transactions,
                'orderId' => $value->order_id,
                'customerName' => $this->user->getUserFullnameByUserId($value->id_users),
                'productCode' => $value->code_services,
                'orderDateTime' => $value->order_datetime
            ];
        }

        

        $this->load->view('order/order', $this->data);
    }

    public function getOrders() {

        $this->data['head']       = Modules::run('layouts/app-layout/head/index');
        $this->data['header']     = Modules::run('layouts/app-layout/header/index');
        $this->data['sidebar']    = Modules::run('layouts/app-layout/sidebar/index');
        $this->data['script']     = Modules::run('layouts/app-layout/script/index');
        $this->data['footer']       = Modules::run('layouts/app-layout/footer/index');

        $orders = $this->order->all();
        $this->data['orders'] = array();
        foreach ($orders as $value) {
            $this->data['orders'][] = [
                'txnid' => $value->id_transactions,
                'orderId' => $value->order_id,
                'customerName' => $this->user->getUserFullnameByUserId($value->id_users),
                'shipping_address' => $value->shipping_address,
                'productCode' => $value->code_services,
                'quantity' => $value->quantity,
                'amount' => number_format($value->amount,2),
                'orderDateTime' => $value->order_datetime
            ];
        }

        

        $this->load->view('order/orders', $this->data);
    }
}