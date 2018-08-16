<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Cart_lib
{
	public $data;
	private $CI;
	public function __construct()
	{
		$this->CI= &get_instance();
    }

    public function cartItems() {
        return ($this->CI->session->userdata('cart_item')) ? $this->CI->session->userdata('cart_item') : [];
	}
	
	public function productinfo() {
		$productinfo = '';
		if(count($this->cartItems()) > 0) {
			foreach ($this->cartItems() as $value) {
				$productinfo .= $value['name'].',';
			}
			
		} else {
			$productinfo = 'Empty cart!';
		}
		return $productinfo;
	}
	public function getAmount() {
		$amount = 0;
		if(count($this->cartItems()) > 0) {
			foreach ($this->cartItems() as $value) {
				$amount += $value['price'].',';
			}
		}
		return $amount;
	}

	public function emptyCart() {
		unset($_SESSION["cart_item"]);
	}
    
}