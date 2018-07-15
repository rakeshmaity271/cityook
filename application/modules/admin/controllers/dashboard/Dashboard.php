<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Dashboard extends MX_Controller {

    private $data;

    public function __construct() {
        $this->load->database();
		$this->load->library('ion_auth');
		$this->load->library('Flash_lib', NULL, 'flash');
    }
    public function index() {
        if (!$this->ion_auth->logged_in()) {
			redirect('/login', 'refresh');
		} else if (!$this->ion_auth->isAdmin()) {
			$this->flash->error('Error', 'You must be an admin to view this page.');
			redirect('/unauthorized');
		} else {
            $this->data['title'] = 'Dashboard';

            $this->data['head'] 		= Modules::run('layouts/app-layout/head/index');

            $this->data['header'] 	    = Modules::run('layouts/app-layout/header/index');

            $this->data['sidebar'] 	    = Modules::run('layouts/app-layout/sidebar/index');

            $this->data['script'] 	    = Modules::run('layouts/app-layout/script/index');

            $this->data['footer'] 	    = Modules::run('layouts/app-layout/footer/index');

            $this->load->view('dashboard/index', $this->data);
        }
        

    }

}