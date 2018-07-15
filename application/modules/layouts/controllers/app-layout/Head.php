<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Head extends MX_Controller {

	
	public function index()
	{
		return $this->load->view('app-layout/head');
	}
}
