<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH."modules/cart/controllers/Cart.php";
include_once APPPATH."modules/payment/controllers/Payment.php";
class Checkout extends MX_Controller {
	
	public  $data;
	private $cart;
	private $payment;
	public function __construct() {
		parent::__construct();
		$this->cart = new Cart();
		$this->payment = new Payment();
	}
	
	public function index() {

		$this->data['head'] 		= Modules::run('layouts/site-layout/head/index');
		$this->data['header'] 		= Modules::run('layouts/site-layout/header/index');
		$this->data['footer'] 		= Modules::run('layouts/site-layout/footer/index');
		$this->data['script'] 		= Modules::run('layouts/site-layout/script/index');
		
		$this->load->model('User_model', 'user');
		if($this->session->userdata('user_id')) {
			$id = $this->session->userdata('user_id');
		}
		$user = $this->user->get($id);
		//printArray($user);
		if(isset($user) && count($user) > 0) {
			$this->data['billingAddress'] = [
				'fullname' 	=> $user->fullname,
				'email' 	=> $user->email,
				'mobile' 	=> $user->mobile,
				'address' 	=> $user->address,
				'city' 		=> $user->city,
				'pincode' 	=> $user->pincode,
				'state' 	=> $user->state
			];
		}

		$this->data['action'] = base_url().'checkout/preview_order';
		
		$this->load->view('index', $this->data);
	}

	// public function submitBillingAddressForm() {

	// }

	public function previewOrder() {
		$this->data['head'] 		= Modules::run('layouts/site-layout/head/index');
		$this->data['header'] 		= Modules::run('layouts/site-layout/header/index');
		$this->data['footer'] 		= Modules::run('layouts/site-layout/footer/index');
		$this->data['script'] 		= Modules::run('layouts/site-layout/script/index');
		
		//printArray($_POST);

		$shippingAddress = ($this->input->post('shippingAddress')) ? $this->input->post('shippingAddress') : [];

		if($shippingAddress) {
			$this->data['shippingAddress'] = $shippingAddress;
		}

		$billingAddress = ($this->input->post('billingAddress')) ? $this->input->post('billingAddress') : [];

		if($billingAddress) {
			$this->data['billingAddress'] = $billingAddress;
		}
		$paymentMethod = ($this->input->post('payment_method')) ? $this->input->post('payment_method') : '';
		
		$this->data['paymentMethod'] = $paymentMethod;
		$this->data['isPayumoney'] = false;
		if($paymentMethod === 'payumoney') {
			$this->data['isPayumoney'] = true;
			//
		}

		if($this->data['isPayumoney']) {
			$this->data['hiddenFields'] = $this->payment->process_payu();
		}
		$this->data['total'] = $this->cart->getTotal();
		$this->data['items'] = $this->cart->getCartItem();
		
		/**
		 * set data for template
		 */
		$this->session->set_userdata(array('htmlTemplateData' => [
			'billingAddress' 	=> $billingAddress,
			'shippingAddress' 	=> $shippingAddress,
			'items' 			=> $this->cart->getCartItem(),
			'payment_method'	=>	$paymentMethod
		]));
		//printArray($this->data);
		//exit();
		$this->load->view('preview_order', $this->data);
	}

}
