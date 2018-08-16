<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Servicecms extends MX_Controller {


    private $data;
    public function __construct() {

        parent::__construct();
        $this->load->database();
        $this->load->library('ion_auth');
        $this->load->library('Flash_lib', NULL, 'flash');
        $this->load->model('Service_model', 'service');
        $this->load->model('Servicecms_model', 'servicecms');

    }

    public function index() {
        $this->data['head']         = Modules::run('layouts/app-layout/head/index');

        $this->data['header']       = Modules::run('layouts/app-layout/header/index');

        $this->data['sidebar']      = Modules::run('layouts/app-layout/sidebar/index');

        $this->data['script']       = Modules::run('layouts/app-layout/script/index');

        $this->data['footer']       = Modules::run('layouts/app-layout/footer/index');

        $this->data['title']        = 'Manage Serivces';
        $this->data['service_cms'] = $this->servicecms->all();
        $this->load->view('/service/cms/index', $this->data);


    }

    public function create() {
        $this->data['head']         = Modules::run('layouts/app-layout/head/index');

        $this->data['header']       = Modules::run('layouts/app-layout/header/index');

        $this->data['sidebar']      = Modules::run('layouts/app-layout/sidebar/index');

        $this->data['script']       = Modules::run('layouts/app-layout/script/index');

        $this->data['footer']       = Modules::run('layouts/app-layout/footer/index');

        $this->data['title']        = 'Manage Service Cms';

        $this->data['form']         = 'Add Service Cms';

        $this->data['form']         = 'Service Cms Information';
        $this->data['action']        = base_url().'admin/service/cms/store';
        $this->data['services'] = $this->service->all();
        
        $this->load->view('/service/cms/create', $this->data);
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
        
        $this->data['id_services']        = ($this->input->post('id_services')) ? $this->input->post('id_services') : '';
        $this->data['heading']            = ($this->input->post('heading')) ? $this->input->post('heading') : '';
        $this->data['content']            = ($this->input->post('content')) ? $this->input->post('content') : '0';
        //$this->data['middle_section_heading']          = ($this->input->post('middle_section_heading')) ? $this->input->post('middle_section_heading') : '';
        
        $this->data['image']                =  $image;

        // printArray($this->data);
        // exit();

        $this->servicecms->save($this->data);        
        
        $this->flash->success('Success', 'Record added');
        redirect('/admin/service/cms', 'refresh');


    }

    public function edit($id) {

        $this->data['head']         = Modules::run('layouts/app-layout/head/index');

        $this->data['header']       = Modules::run('layouts/app-layout/header/index');

        $this->data['sidebar']      = Modules::run('layouts/app-layout/sidebar/index');

        $this->data['script']       = Modules::run('layouts/app-layout/script/index');

        $this->data['footer']       = Modules::run('layouts/app-layout/footer/index');

        $this->data['title']        = 'Manage Serivces';
        $this->data['form']         = 'Create Form';

        if(!empty($id)) {
            $this->data['action']        = base_url().'admin/service/cms/update';
        } else {
            $this->data['action']        = base_url().'admin/service/cms/store';
        }
        
        
        $this->data['servicecms'] = $this->servicecms->get($id);
        $this->data['services'] = $this->service->all();
     
        $this->load->view('/service/cms/edit', $this->data);


    }

    public function show($id) {



    }

    public function update() {
        $image = null;

        $id = ($this->input->post('id')) ? $this->input->post('id') : '';
        $servicecms = $this->servicecms->get($id);

        $filename = strtolower(str_replace(' ', '-', $_FILES['file']['name']));

        if($filename) {

            unlink(FCPATH.'uploads/'.$servicecms->image);

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
            $image = $servicecms->image;
        }
        $this->data['id_services']        = ($this->input->post('id_services')) ? $this->input->post('id_services') : $servicecms->id_services;

        $this->data['heading']             = ($this->input->post('heading')) ? $this->input->post('heading') : $servicecms->name;
        $this->data['content']           = ($this->input->post('content')) ? $this->input->post('content') : $servicecms->content;
        //$this->data['middle_section_heading']           = ($this->input->post('middle_section_heading')) ? $this->input->post('middle_section_heading') : $servicecms->middle_section_heading;

        $this->data['image']                =  $image;

       
        $this->servicecms->update($id, $this->data);
        $this->flash->success('Success', 'Record added');
        redirect('/admin/service/cms', 'refresh');


    }

    public function delete($id) {
        $servicecms  = $this->servicecms->get($id);
        $this->servicecms->delete($servicecms->id);
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