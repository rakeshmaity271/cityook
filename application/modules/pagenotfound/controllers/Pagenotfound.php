<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pagenotfound extends MX_Controller {
    public function index() {
        $data['message'] = 'Page not found';
        $data['head'] 		= Modules::run('layouts/site-layout/head/index');
        $data['header'] 		= Modules::run('layouts/site-layout/header/index');
        $data['footer'] 		= Modules::run('layouts/site-layout/footer/index');
        $data['script'] 	= Modules::run('layouts/site-layout/script/index');

        $this->load->view('index', $data);
    }
}

