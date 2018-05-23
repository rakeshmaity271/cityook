<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MX_Controller {
    private $data;
    public function __construct() {
        parent::__construct();
    }

    public function index() {

    }
    public function create() {
        $this->data['title']        = 'Manage Category';
        $this->data['formHeading']    = 'Add Category';
        $this->data['categoryInformation']    = 'Category Information';
        $this->data['head'] 		= Modules::run('layouts/app-layout/head/index');
		$this->data['header'] 	    = Modules::run('layouts/app-layout/header/index');
		$this->data['sidebar'] 	    = Modules::run('layouts/app-layout/sidebar/index');
		$this->data['script'] 	    = Modules::run('layouts/app-layout/script/index');
        $this->data['footer'] 	    = Modules::run('layouts/app-layout/footer/index');
        
        $this->load->view('/category/create', $this->data);
    }
    public function store() {

    }
    public function edit($id) {

    }
    public function show($id) {

    }
    public function update($id) {

    }
    public function delete($id) {

    }
}