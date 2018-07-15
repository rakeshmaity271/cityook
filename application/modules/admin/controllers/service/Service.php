<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Service extends MX_Controller {


    private $data;
    public function __construct() {

        parent::__construct();
        $this->load->database();
        $this->load->library('ion_auth');
        $this->load->library('Flash_lib', NULL, 'flash');
        $this->load->model('Service_model', 'service');
        $this->load->model('Category_model', 'category');

    }

    public function create() {
        $this->data['head'] 		= Modules::run('layouts/app-layout/head/index');

		$this->data['header'] 	    = Modules::run('layouts/app-layout/header/index');

		$this->data['sidebar'] 	    = Modules::run('layouts/app-layout/sidebar/index');

		$this->data['script'] 	    = Modules::run('layouts/app-layout/script/index');

        $this->data['footer'] 	    = Modules::run('layouts/app-layout/footer/index');

        $this->data['title']        = 'Manage Serivces';

        $this->data['form']    = 'Add Serivce';

        $this->data['form']    = 'Service Information';
        $this->data['action']        = base_url().'admin/service/store';
        $this->data['categories'] = $this->category->all();
        $this->data['related_services'] = $this->service->all();
        $this->load->view('/service/create', $this->data);
    }

    public function index() {
        $this->data['head'] 		= Modules::run('layouts/app-layout/head/index');

		$this->data['header'] 	    = Modules::run('layouts/app-layout/header/index');

		$this->data['sidebar'] 	    = Modules::run('layouts/app-layout/sidebar/index');

		$this->data['script'] 	    = Modules::run('layouts/app-layout/script/index');

        $this->data['footer'] 	    = Modules::run('layouts/app-layout/footer/index');

        $this->data['title']        = 'Manage Serivces';
        $this->data['services'] = $this->service->all();
        $this->load->view('/service/index', $this->data);


    }

    public function store() {

        $image = null;
        $filename = strtolower(str_replace(' ', '-', $_FILES['file']['name']));
		if($filename) {
            foreach($this->config->item('file')['original'] as $key => $value) {
                $config[$key] = $value;
            }
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('file')) {
                            
            } else {
                $uploadedData = $this->upload->data();
                // printArray($uploadedData);
                // exit();
                $image = $uploadedData['file_name']; //$this->Image_lib->getFilename();
            }
		} else {
			$image = 'no-image.jpg';
        }
        
        $this->data['id_categories']        = ($this->input->post('id_categories')) ? $this->input->post('id_categories') : '';
        $this->data['name']                 = ($this->input->post('name')) ? $this->input->post('name') : '';
        $this->data['status']               = ($this->input->post('status')) ? $this->input->post('status') : '0';
        $this->data['description']          = ($this->input->post('description')) ? $this->input->post('description') : '';
        $this->data['service_type']         = ($this->input->post('service_type')) ? $this->input->post('service_type') : '';
        $this->data['service_time']         = ($this->input->post('service_time')) ? $this->input->post('service_time') : '';
        $this->data['no_of_service_men']    = ($this->input->post('no_of_service_men')) ? $this->input->post('no_of_service_men') : '';
        $this->data['no_of_bhk']            = ($this->input->post('no_of_bhk')) ? $this->input->post('no_of_bhk') : '';
        $this->data['note']                 = ($this->input->post('note')) ? $this->input->post('note') : '';
        $this->data['frequency']            = ($this->input->post('frequency')) ? $this->input->post('frequency') : '';
        $this->data['price']                = ($this->input->post('price')) ? $this->input->post('price') : '';
        $this->data['package']              = ($this->input->post('package')) ? $this->input->post('package') : '';
        $this->data['video_url']            = ($this->input->post('video_url')) ? $this->input->post('video_url') : '';
        $this->data['slug']                 = $this->service->slug($this->data['name']);
        $this->data['image']                =  $image;

        $related_services     = ($this->input->post('related_services')) ? $this->input->post('related_services') : '';

        $lastInsertedID = $this->service->save($this->data);

        if(isset($related_services)) {
            foreach ($related_services as $value) {
                $this->service->setRelatedServices(array(
                    'id_services' => $lastInsertedID,
                    'related_id_services' => $value
                ));
            }
        }
        
        
        $this->flash->success('Success', 'Record added');
        redirect('/admin/services', 'refresh');


    }

    public function edit($id) {

        $this->data['head'] 		= Modules::run('layouts/app-layout/head/index');

		$this->data['header'] 	    = Modules::run('layouts/app-layout/header/index');

		$this->data['sidebar'] 	    = Modules::run('layouts/app-layout/sidebar/index');

		$this->data['script'] 	    = Modules::run('layouts/app-layout/script/index');

        $this->data['footer'] 	    = Modules::run('layouts/app-layout/footer/index');

        $this->data['title']        = 'Manage Serivces';
        $this->data['form']         = 'Create Form';

        if(!empty($id)) {
            $this->data['action']        = base_url().'admin/service/update';
        } else {
            $this->data['action']        = base_url().'admin/service/store';
        }
        
        $this->data['categories'] = $this->category->all();
        $this->data['related_services'] = $this->service->getRelatedServicesByServiceID($id);

        $this->data['services'] = $this->service->all();
        $this->data['service'] = $this->service->get($id);
     
        $this->load->view('/service/edit', $this->data);


    }

    public function show($id) {



    }

    public function update() {
        $image = null;
        $id = ($this->input->post('id')) ? $this->input->post('id') : '';
        $service = $this->service->get($id);

        $filename = strtolower(str_replace(' ', '-', $_FILES['file']['name']));

        if($filename) {

            unlink(FCPATH.'uploads/'.$service->image);

            foreach($this->config->item('file')['original'] as $key => $value) {
                $config[$key] = $value;
            }

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('file')) {
                            
            } else {
                $uploadedData = $this->upload->data();
                $image = $uploadedData['file_name'];
            }
        } else {
            $image = $service->image;
        }

        $this->data['name']             = ($this->input->post('name')) ? $this->input->post('name') : $service->name;
        $this->data['status']           = ($this->input->post('status')) ? $this->input->post('status') : '0';
        $this->service->update($id, $this->data);

        $this->data['id_categories']        = ($this->input->post('id_categories')) ? $this->input->post('id_categories') : $service->id_categories;
      
        $this->data['description']          = ($this->input->post('description')) ? $this->input->post('description') : $service->description;
        $this->data['service_type']         = ($this->input->post('service_type')) ? $this->input->post('service_type') : $service->service_type;
        $this->data['service_time']         = ($this->input->post('service_time')) ? $this->input->post('service_time') : $service->service_time;
        $this->data['no_of_service_men']    = ($this->input->post('no_of_service_men')) ? $this->input->post('no_of_service_men') : $service->no_of_service_men;
        $this->data['no_of_bhk']            = ($this->input->post('no_of_bhk')) ? $this->input->post('no_of_bhk') : $service->no_of_bhk;
        $this->data['note']                 = ($this->input->post('note')) ? $this->input->post('note') : $service->note;
        $this->data['frequency']            = ($this->input->post('frequency')) ? $this->input->post('frequency') : $service->frequency;
        $this->data['price']                = ($this->input->post('price')) ? $this->input->post('price') : $service->price;
        $this->data['package']              = ($this->input->post('package')) ? $this->input->post('package') : $service->package;
        $this->data['video_url']            = ($this->input->post('video_url')) ? $this->input->post('video_url') : $service->video_url;
        $this->data['slug']                 = $this->service->slug($this->data['name']);
        $this->data['image']                =  $image;

       

        $related_id_services     = ($this->input->post('related_id_services')) ? $this->input->post('related_id_services') : $this->service->getRelatedServicesByServiceID($id);

        //print_r($this->data['related_id_services']);
        if(isset($related_id_services)) {
            foreach ($related_id_services as $value) {
                $this->service->setRelatedServices(array(
                    'id_services' => $id,
                    'related_id_services' => $value
                ));
            }
        }

        $this->service->update($id, $this->data);
        $this->flash->success('Success', 'Record added');
        redirect('/admin/services', 'refresh');


    }

    public function delete($id) {
        $service  = $this->service->get($id);
        // print_r($service);
        // exit();
        $this->service->delete($service->id);
        return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array(
                        'message' => 'Successfully Deleted',
                        'error' => false,
                        'status' => 200
                )));

    }

}