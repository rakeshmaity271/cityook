<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Service extends MX_Controller {


    private $data;
    private $categories;
    private $id;
	public function __construct() {

        parent::__construct();
        $this->load->database();
        $this->load->model('Service_model', 'service');
        $this->load->model('Category_model', 'category');
        $this->load->model('Catcms_model', 'categorycms');

	}



	public function index()

	{
	    $slug = $this->uri->segment(1);

        $this->categories = $this->category->find($options = ['slug' => $slug]);

        
        //$this->data['image'] = base_url().'uploads/'.$this->id_categories[0]->image;
        /**
        * Breadcrumbs
        */
        $this->data['home'] = [
            'link'  => base_url(),
            'text'  => 'Home'
        ];

        $categories = [];

        $categorycms = $this->categorycms->find(['id_categories' => $this->categories[0]->id]);

        $this->data['category_cms'] = [];

        if(count($categorycms) > 0) {
            
                $this->data['category_cms'] = [
                    'heading' => ($categorycms[0]->heading) ? $categorycms[0]->heading : '',
                    'content' => $categorycms[0]->content,
                    'middle_section_heading' => $categorycms[0]->middle_section_heading,
                    'image'   => (!file_exists(base_url().'uploads/'.$categorycms[0]->image)) ? base_url().'uploads/'.$categorycms[0]->image : 'no-image.jpg'
                ];
            
        }
        

        
        
       
        $services = [];
        $services = $this->service->find($options = ['id_categories' => $this->categories[0]->id]);
        $this->data['services'] = [];
        if(count($services) > 0) {
            
            foreach ($services as $service) {
                $this->data['services'][] = [
                    'url'       => base_url().$this->categories[0]->slug.'/'.$service->slug,
                    'service'   => (isset($service->name)) ? $service->name : '',
                    'image'     => (!file_exists(base_url().'/uploads/'.$service->image)) ? base_url().'/uploads/'.$service->image : 'no-image.jpg' 
                ];
            }
        }

        

       // printArray($this->data['services']);
       // exit();

        

        //printArray($this->data['services']);
        $this->data['categories'] = $this->category->all();


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

