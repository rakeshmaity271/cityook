<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Service extends MX_Controller {


    private $data;
    private $id_categories;
    private $id;
	public function __construct() {

        parent::__construct();
        $this->load->database();
        $this->load->model('Service_model', 'service');
        $this->load->model('Category_model', 'category');

	}



	public function index()

	{
	    $slug = $this->uri->segment(1);

        $this->id_categories = $this->category->find($options = ['slug' => $slug]);

        
        //$this->data['image'] = base_url().'uploads/'.$this->id_categories[0]->image;
        $this->data['description'] = $this->id_categories[0]->description;
        $this->data['heading'] = $this->id_categories[0]->name;

        $this->data['services'] = $this->service->find($options = ['id_categories' => $this->id_categories[0]->id]);


		$this->data['head'] 		= Modules::run('layouts/site-layout/head/index');

		$this->data['header'] 		= Modules::run('layouts/site-layout/header/index');

		$this->data['footer'] 		= Modules::run('layouts/site-layout/footer/index');

		$this->data['script'] 	= Modules::run('layouts/site-layout/script/index');



		$this->load->view('index', $this->data);

    }

    public function show()

    {

        $slug = $this->uri->segment(2);
        $this->data['service'] = $this->service->find($options = ['slug' => $slug]);

        $this->data['head'] 		= Modules::run('layouts/site-layout/head/index');

        $this->data['header'] 		= Modules::run('layouts/site-layout/header/index');

        $this->data['footer'] 		= Modules::run('layouts/site-layout/footer/index');

        $this->data['script'] 	= Modules::run('layouts/site-layout/script/index');



        $this->load->view('show', $this->data);

    }



}

