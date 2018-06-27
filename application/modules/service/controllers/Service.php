<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Service extends MX_Controller {


    private $data;
    private $id_categories;
	public function __construct() {

        parent::__construct();
        $this->load->database();
        $this->load->model('Service_model', 'service');
        $this->load->model('Category_model', 'category');

	}



	public function index($slug)

	{

        $this->id_categories = $this->category->find($options = ['slug' => $slug]);
       
        $this->data['services'] = $this->service->find($options = ['id_categories' => $this->id_categories[0]->slug]);

        //  echo "<pre>";
        // print_r($this->data['services']);
        // echo "</pre>";


		$this->data['head'] 		= Modules::run('layouts/site-layout/head/index');

		$this->data['header'] 		= Modules::run('layouts/site-layout/header/index');

		$this->data['footer'] 		= Modules::run('layouts/site-layout/footer/index');

		$this->data['script'] 	= Modules::run('layouts/site-layout/script/index');



		$this->load->view('index', $this->data);

    }

    public function show($slug)

    {


        $this->data['service'] = $this->service->find($options = ['slug' => $slug]);
         echo "<pre>";
        print_r($this->data['service']);
        echo "</pre>";

        $this->data['head'] 		= Modules::run('layouts/site-layout/head/index');

        $this->data['header'] 		= Modules::run('layouts/site-layout/header/index');

        $this->data['footer'] 		= Modules::run('layouts/site-layout/footer/index');

        $this->data['script'] 	= Modules::run('layouts/site-layout/script/index');



        $this->load->view('show', $this->data);

    }



}

