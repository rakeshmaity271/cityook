<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends MX_Controller {
    public function __construct() {
        parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth'));
    }

    /**
	 * Log the user out
	 */
	public function index()
	{
	
		$logout = $this->ion_auth->logout();

		// redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect('/login', 'refresh');
	}


}