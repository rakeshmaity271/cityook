<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment extends MX_Controller {
    private $formArray;
    private $txnid;
    private $baseUrl;
    private $action;
    private $productionMode;
    private $sandboxMode;
    
    private $hash;
    private $hashSequence;
    private $formError;
    private $hashString;
    public function __construct() {
        parent::__construct();

		$this->load->library('Payumoney_lib', NULL, 'payumoney');
		$this->load->library('Cart_lib', NULL, 'cart');
		$this->load->library('Render', 'render');
		$this->load->library('ion_auth');
        $this->setConfig();
    }
    private function setConfig() {
        $this->sandboxMode = true;
        $this->productionMode = false;
        $this->formError = false;
        //$this->action = $this->payumoney->getBaseUrl(). '/_payment';
        $this->hashSequence = 'key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10';
    }
    private function getAction() {
        if($this->sandboxMode) {
            $this->action = 'https://sandboxsecure.payu.in/_payment.php';
        } else {
            $this->action = 'https://secure.payu.in/_payment.php';
        }
        return $this->action;
    }
	public function index()	{
        if (!$this->ion_auth->logged_in()) {
			redirect('/login', 'refresh');
		} else if (!$this->ion_auth->isEmployee()) {
			$this->flash->error('Error', 'You must be an employee to view this page.');
			redirect('/unauthorized');
		} else {
			$data['head'] 		= Modules::run('layouts/site-layout/head/index');
			$data['header'] 	= Modules::run('layouts/site-layout/header/index');
			$data['footer'] 	= Modules::run('layouts/site-layout/footer/index');
			$data['script'] 	= Modules::run('layouts/site-layout/script/index');
			
			$data = $this->process_payu();
			$this->load->view('index', $data);

		}
		
    }
    
    private function process_payu() {
        $data['button_confirm'] = 'Confirm';
        $data['merchant']       = $this->config->item('pumcp_payu_merchant');
        $this->load->model('User_model', 'user');
		$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
		$userId = $this->session->userdata('user_id');
		if(isset($userId)) {
			$user = $this->user->get($this->session->userdata('user_id'));
		} 
        $data['key']            = $this->config->item('pumcp_payu_merchant');
        $data['action']         = $this->getAction();
        $data['txnid']          = $txnid;
        $data['amount']         = '1.00';//$this->cart->getAmount(); // Amount should be in float
		$data['productinfo']    = $this->cart->productinfo();
		
        $data['firstname']      = $user->firstname;
        $data['lastname']       = $user->lastname;
        $data['zipcode']        = $user->pincode;
        $data['email']          = $user->email;
		$data['phone']          = $user->mobile;
		$data['address']        = $user->address;
        $data['state']          = $user->state;
        $data['city']           = $user->city;
        $data['country']        = $user->country;
        $data['pg']             = 'CC';
        
        $data['surl']           = base_url().'payment/callback_payu';//HTTP_SERVER.'/index.php?route=payment/payu/callback';
		$data['furl']           = base_url().'payment/callback_payu'; //HTTP_SERVER.'/index.php?route=payment/payu/callback';
		$data['curl']           = base_url().'payment/callback_payu'; 
		$key                    = $this->config->item('pumcp_payu_merchant');
		$amount                 = $data['amount'];
		$productInfo            = $data['productinfo'];
	    $firstname              = $user->firstname;
		$email                  = $user->email;
		$salt                   = $this->config->item('pumcp_payu_salt');
		$udf5 		            = "Opencart_v_2.3";
		$hash                   = hash('sha512', $key.'|'.$txnid.'|'.$amount.'|'.$productInfo.'|'.$firstname.'|'.$email.'|||||'.$udf5.'||||||'.$salt); 
		//$data['user_credentials'] = $this->data['key'].':'.$this->data['email'];
		$data['udf5']           = $udf5;
		$data['hash']           = $hash;
		$service_provider       = 'payu_paisa';
		$data['service_provider'] = $service_provider;
		$data['hashSequence']                   = $key.'|'.$txnid.'|'.$amount.'|'.$productInfo.'|'.$firstname.'|'.$email.'|||||'.$udf5.'||||||'.$salt; 
        return $data;
	}
	
	//public function callback_payu() {}
    public function callback_payu() {
		if ($this->input->post('key') && ($this->input->post('key') == $this->config->item('pumcp_payu_merchant'))) {
			//$this->language->load('extension/payment/pumcp');
			
			//$this->load->model('checkout/order', 'model_checkout_order');
     		//$orderid = $this->input->post('txnid');
		
			// $data['charset'] 				= $this->language->get('charset');
			// $data['language'] 				= $this->language->get('code');
			// $data['direction'] 				= $this->language->get('direction');
			//$data['heading_title'] 			= sprintf($this->language->get('heading_title'), $order_info['payment_method']);
			$data['text_response'] 			= 'Response from Payment Gateway:';
			$data['text_success'] 			= 'Your payment was successfully received.';
			$data['text_success_wait'] 		= sprintf('<b><span style="color: #FF0000">Please wait...</span></b> whilst we finish processing your order.<br>If you are not automatically re-directed in 10 seconds, please click <a href="%s">here</a>.', href("checkout/success"));
			$data['text_failure'] 			= 'Your payment has been failed';
			$data['text_cancelled'] 		= 'Your payment has been cancelled';
			$data['text_cancelled_wait'] 	= sprintf('<b><span style="color: #FF0000">Please wait...</span></b><br>If you are not automatically re-directed in 10 seconds, please click <a href="%s">here</a>', href("checkout/cart"));
			$data['text_pending'] 			= 'Your payment has been pending';
			$data['text_failure_wait'] 		= sprintf('<b><span style="color: #FF0000">Please wait...</span></b><br>If you are not automatically re-directed in 10 seconds, please click <a href="%s">here</a>', href("checkout/cart"));
			 
				$key          		=  	$this->input->post('key');
				$amount      		= 	$this->input->post('amount');
				$productInfo  		= 	$this->input->post('productinfo');
				$firstname    		= 	$this->input->post('firstname');
				$email        		=	$this->input->post('email');
				$salt        		= 	$this->config->item('pumcp_payu_salt');
				$txnid		 		=   $this->input->post('txnid');
				$udf5		 		=   $this->input->post('udf5');
				$keyString 	  		=  	$key.'|'.$txnid.'|'.$amount.'|'.$productInfo.'|'.$firstname.'|'.$email.'|||||'.$udf5.'|||||';
				$keyArray 	  		= 	explode("|",$keyString);
				$reverseKeyArray 	= 	array_reverse($keyArray);
				$reverseKeyString	=	implode("|",$reverseKeyArray);
			 
			 
			 if ($this->input->post('status') && $this->input->post('status') == 'success') {
			 	$saltString     = $salt.'|'.$this->input->post('status').'|'.$reverseKeyString;
				$sentHashString = strtolower(hash('sha512', $saltString));
			 	$responseHashString = $this->input->post('hash');
				
				$order_id = $this->input->post('txnid');
				$message = '';
				$message .= 'orderId: ' . $this->input->post('txnid') . "\n";
				$message .= 'Transaction Id: ' . $this->input->post('mihpayid') . "\n";
				foreach($this->input->post as $k => $val){
					$message .= $k.': ' . $val . "\n";
				}

				
					if($sentHashString==$this->input->post('hash')){
						$this->load->model('Order_model', 'order');
							$id_transactions = $this->order->addTransaction([
								'mihpayid' 	=> ($this->input->post('mihpayid')) ? $this->input->post('mihpayid') : '',
								'amount' 	=> ($this->input->post('amount')) ? $this->input->post('amount') : '',
								'status' 	=> $this->input->post('status'),
								'response' 	=> json_encode($message)
							]);

							if($id_transactions) {

								foreach ($this->cart->cartItems() as $key => $value) {
									$this->order->addOrderHistory([
										'order_id' 	=> ($this->input->post('txnid')) ? $this->input->post('txnid') : '',
										'id_transactions' => $id_transactions,
										'id_users' => ($this->session->userdata('user_id')) ? $this->session->userdata('user_id') : '',
										'code_services' => $key,
										'order_date' => $this->order->getTransactionDateById($id_transactions)
									]);
								}
								
							}
							$this->cart->emptyCart();
							

							
							$data['continue'] = href("checkout/success");
							
							$this->render->_render_page('pumcp_success', $data);
					}			 
			 
			 }else {
				
				$data['continue'] = href("checkout/cart");

		        if($this->input->post('status') && $this->input->post('unmappedstatus') == 'userCancelled') {
					$this->render->_render_page('pumcp_cancelled', $data);
				} else {
					$this->render->_render_page('pumcp_failure', $data);
				}					
			}
		}
	}

}

