<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Header extends MX_Controller {

	
	public function index()
	{
		//print_r($_SESSION);
		return $this->load->view('app-layout/header');
	}
}
