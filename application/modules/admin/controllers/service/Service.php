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
        $this->data['name'] = ($this->input->post('name')) ? $this->input->post('name') : '';
        $this->data['status'] = ($this->input->post('status')) ? $this->input->post('status') : '0';
        $this->service->save($this->data);
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
        

        $this->data['service'] = $this->service->get($id);

        $this->load->view('/service/edit', $this->data);


    }

    public function show($id) {



    }

    public function update() {

        $id = ($this->input->post('id')) ? $this->input->post('id') : $service->name;
        $service = $this->service->get($id);
        $this->data['name']             = ($this->input->post('name')) ? $this->input->post('name') : $service->name;
        $this->data['status']           = ($this->input->post('status')) ? $this->input->post('status') : '0';
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