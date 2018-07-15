<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Categorycms extends MX_Controller {


    private $data;
    public function __construct() {

        parent::__construct();
        $this->load->database();
        $this->load->library('ion_auth');
        $this->load->library('Flash_lib', NULL, 'flash');
        $this->load->model('Category_model', 'category');
        $this->load->model('Catcms_model', 'categorycms');

    }

    public function index() {
        $this->data['head']         = Modules::run('layouts/app-layout/head/index');

        $this->data['header']       = Modules::run('layouts/app-layout/header/index');

        $this->data['sidebar']      = Modules::run('layouts/app-layout/sidebar/index');

        $this->data['script']       = Modules::run('layouts/app-layout/script/index');

        $this->data['footer']       = Modules::run('layouts/app-layout/footer/index');

        $this->data['title']        = 'Manage Serivces';
        $this->data['listOfcms'] = $this->categorycms->all();
        $this->load->view('/category/cms/index', $this->data);


    }

    public function create() {
        $this->data['head']         = Modules::run('layouts/app-layout/head/index');

        $this->data['header']       = Modules::run('layouts/app-layout/header/index');

        $this->data['sidebar']      = Modules::run('layouts/app-layout/sidebar/index');

        $this->data['script']       = Modules::run('layouts/app-layout/script/index');

        $this->data['footer']       = Modules::run('layouts/app-layout/footer/index');

        $this->data['title']        = 'Manage Category Cms';

        $this->data['form']         = 'Add Category Cms';

        $this->data['form']         = 'Category Cms Information';
        $this->data['action']        = base_url().'admin/service/category/cms/store';
        $this->data['categories'] = $this->category->all();
        
        $this->load->view('/category/cms/create', $this->data);
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
        $this->data['heading']                 = ($this->input->post('heading')) ? $this->input->post('heading') : '';
        $this->data['content']               = ($this->input->post('content')) ? $this->input->post('content') : '0';
        $this->data['middle_section_heading']          = ($this->input->post('middle_section_heading')) ? $this->input->post('middle_section_heading') : '';
        
        $this->data['image']                =  $image;

        // printArray($this->data);
        // exit();

        $this->categorycms->save($this->data);        
        
        $this->flash->success('Success', 'Record added');
        redirect('/admin/service/category/cms', 'refresh');


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
            $this->data['action']        = base_url().'admin/service/category/cms/update';
        } else {
            $this->data['action']        = base_url().'admin/service/category/cms/store';
        }
        
        
        $this->data['cms'] = $this->categorycms->get($id);
        $this->data['categories'] = $this->category->all();
     
        $this->load->view('/category/cms/edit', $this->data);


    }

    public function show($id) {



    }

    public function update() {
        $image = null;

        $id = ($this->input->post('id')) ? $this->input->post('id') : '';
        $categorycms = $this->categorycms->get($id);

        $filename = strtolower(str_replace(' ', '-', $_FILES['file']['name']));

        if($filename) {

            unlink(FCPATH.'uploads/'.$categorycms->image);

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
            $image = $categorycms->image;
        }
        $this->data['id_categories']        = ($this->input->post('id_categories')) ? $this->input->post('id_categories') : $categorycms->id_categories;

        $this->data['heading']             = ($this->input->post('heading')) ? $this->input->post('heading') : $categorycms->name;
        $this->data['content']           = ($this->input->post('content')) ? $this->input->post('content') : $categorycms->content;
        $this->data['middle_section_heading']           = ($this->input->post('middle_section_heading')) ? $this->input->post('middle_section_heading') : $categorycms->middle_section_heading;

        $this->data['image']                =  $image;

       
        $this->categorycms->update($id, $this->data);
        $this->flash->success('Success', 'Record added');
        redirect('/admin/service/category/cms', 'refresh');


    }

    public function delete($id) {
        $categorycms  = $this->categorycms->get($id);
        $this->categorycms->delete($categorycms->id);
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