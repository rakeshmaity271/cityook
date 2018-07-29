<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MX_Controller {
	private $isAjax;
	private $getSerivceByCode;
	private $item;
	private $total;
	public  $data;
	public function __construct() {
		parent::__construct();
		$this->load->model('Service_model', 'service');
	}
	private function getTotal() {
		return ($this->session->userdata('cart_item')) ? $this->total = 0 : '';
	}
	public function index() {

		$this->data['head'] 		= Modules::run('layouts/site-layout/head/index');
		$this->data['header'] 		= Modules::run('layouts/site-layout/header/index');
		$this->data['footer'] 		= Modules::run('layouts/site-layout/footer/index');
		$this->data['script'] 		= Modules::run('layouts/site-layout/script/index');
		
		$this->data['total'] = $this->getTotal();
		$this->data['items'] = $this->getCartItem();

		
		$this->load->view('index', $this->data);
	}
	private function getQuantity() {
		return ($this->input->post('quantity'))  ? $this->input->post('quantity') : '';
	}
	private function getAction() {
		return ($this->input->post('action'))  ? $this->input->post('action') : '';
	}
	private function getCode() {
		return ($this->input->post('code'))  ? $this->input->post('code') : '';
	}
	private function getSerivceByCode() {
		return $this->service->getSerivceByCode($this->getCode());
	}
	private function getCartItem() {
		return ($this->session->userdata('cart_item')) ? $this->session->userdata('cart_item') : [];
	}

	private function getItems() {
		$this->getSerivceByCode = $this->getSerivceByCode();
		
		$this->item = array($this->getSerivceByCode[0]->code => [
			'name' => $this->getSerivceByCode[0]->name,
			'description' => $this->getSerivceByCode[0]->description,
			'code' => $this->getSerivceByCode[0]->code,
			'quantity' => $this->getQuantity(),
			'price' => $this->getSerivceByCode[0]->price,
			'image' => base_url().'uploads/'.$this->getSerivceByCode[0]->image
		]);
		return $this->item;
	}

	private function getItem() {
		$this->item = $this->getSerivceByCode();
		return $this->item;
	}

	public function updateCart() {
		// switch($this->getAction()) {
		// 	case "update":
		// 	if($this->getQuantity()) {
		// 		$this->item = $this->getItem();
		// 		if($this->getCartItem()) {
		// 			if(in_array($this->item['code'], $this->getCartItem())) {
		// 				foreach($this->getCartItem() as $key => $value) {
		// 					if($this->items['code'] === $k) 
		// 						#update quantity
		// 						$_SESSION["cart_item"][$key]['quantity'] = $this->getQuantity();
		// 				}
		// 			} else {
		// 				$_SESSION["cart_item"] = array_merge($this->getCartItem(), $this->getItems());
		// 			}
		// 		} else {
		// 			$_SESSION["cart_item"] = $this->getItems();
		// 		}
		// 	}
		// 	break;
		// }
	}
	public function cart() {
		switch($this->getAction()) {
			case "add":
			if($this->getQuantity()) {
				$this->item = $this->getItem();

				if(count($this->item) > 0) {
					
					if($this->getCartItem()) {
						if(array_key_exists($this->item[0]->code, $this->getCartItem())) {
							foreach($this->getCartItem() as $key => $value) {
								if($this->item[0]->code == $key)  {
									#update quantity
									$_SESSION["cart_item"][$key]['quantity'] = $this->getQuantity();
									return $this->output
												->set_content_type('application/json')
												->set_status_header(200)
												->set_output(json_encode(array(
														'error' => false,
														'status' => 302,
														'message' => 'The service has been added to your cart'
												))); 
								} 
									
							}
						} else {
							
							$_SESSION["cart_item"] = array_merge($this->getCartItem(), $this->getItems());
							return $this->output
												->set_content_type('application/json')
												->set_status_header(200)
												->set_output(json_encode(array(
														'error' => false,
														'status' => 200,
														'message' => 'The service has been added to your cart'
												))); 
						}
					} else {
						$_SESSION["cart_item"] = $this->getItems();
						return $this->output
												->set_content_type('application/json')
												->set_status_header(200)
												->set_output(json_encode(array(
														'error' => false,
														'status' => 200,
														'message' => 'The service has been added to your cart'
												))); 
					}
				}
				
			}
			break;
			case "remove":
				if($this->getCartItem()) {
					foreach($this->getCartItem() as $k => $v) {
							if($this->getCode() == $k)
								unset($_SESSION["cart_item"][$k]);
								return $this->output
											->set_content_type('application/json')
											->set_status_header(200)
											->set_output(json_encode(array(
														'error' => false,
														'status' => 200,
														'message' => 'The service has been removed from your cart'
											))); 
							if(!$this->getCartItem())
								unset($_SESSION["cart_item"]);
								 
					}
				}
			break;
			case "empty":
				unset($_SESSION["cart_item"]);
				// return $this->output
				// 								->set_content_type('application/json')
				// 								->set_status_header(200)
				// 								->set_output(json_encode(array(
				// 										'error' => false,
				// 										'status' => 200,
				// 										'message' => 'Your cart is empty'
				// 								)));
			break;		
				
		}
	}

	public function clearItems() {
		unset($_SESSION["cart_item"]);
	}

}
