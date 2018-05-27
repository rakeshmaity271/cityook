<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {
    private $data;
    public function index() {
        $this->data['title'] = 'Dashboard';
        $this->data['head'] 		= Modules::run('layouts/app-layout/head/index');
		$this->data['header'] 	    = Modules::run('layouts/app-layout/header/index');
		$this->data['sidebar'] 	    = Modules::run('layouts/app-layout/sidebar/index');
		$this->data['script'] 	    = Modules::run('layouts/app-layout/script/index');
		$this->data['footer'] 	    = Modules::run('layouts/app-layout/footer/index');
        $this->load->view('dashboard/index', $this->data);
    }
}