<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Postcode extends MX_Controller {


    private $data;
    public function __construct() {

        parent::__construct();
        $this->load->database();
        $this->load->library('ion_auth');
        $this->load->library('Flash_lib', NULL, 'flash');
        $this->load->model('Postcode_model', 'postcode');
    }

    public function index() {
        $this->data['head']         = Modules::run('layouts/app-layout/head/index');
        $this->data['header']       = Modules::run('layouts/app-layout/header/index');
        $this->data['sidebar']      = Modules::run('layouts/app-layout/sidebar/index');
        $this->data['script']       = Modules::run('layouts/app-layout/script/index');
        $this->data['footer']       = Modules::run('layouts/app-layout/footer/index');

        $this->data['heading']      = 'Manage Postcodes';
        $this->data['postcodes']    = $this->postcode->all();
        $this->load->view('/postcodes/index', $this->data);


    }

    public function create() {
        $this->data['head']         = Modules::run('layouts/app-layout/head/index');
        $this->data['header']       = Modules::run('layouts/app-layout/header/index');
        $this->data['sidebar']      = Modules::run('layouts/app-layout/sidebar/index');
        $this->data['script']       = Modules::run('layouts/app-layout/script/index');
        $this->data['footer']       = Modules::run('layouts/app-layout/footer/index');

        $this->data['title']        = 'Manage Postcode';
        $this->data['form']         = 'Add Postcode';
        $this->data['heading']      = 'Postcode Information';
        $this->data['action']        = base_url().'admin/postcode/store';
        
        $this->load->view('/postcodes/create', $this->data);
    }

    

    public function store() {
        $this->data['postcode'] = ($this->input->post('postcode')) ? $this->input->post('postcode') : '';
        $this->data['status']   = ($this->input->post('status')) ? $this->input->post('status') : '0';
        $this->postcode->save($this->data);        
        $this->flash->success('Success', 'Postcode Successfully Added');
        redirect('/admin/postcodes', 'refresh');
    }

    public function edit($id) {

        $this->data['head']         = Modules::run('layouts/app-layout/head/index');
        $this->data['header']       = Modules::run('layouts/app-layout/header/index');
        $this->data['sidebar']      = Modules::run('layouts/app-layout/sidebar/index');
        $this->data['script']       = Modules::run('layouts/app-layout/script/index');
        $this->data['footer']       = Modules::run('layouts/app-layout/footer/index');
        $this->data['heading']      = 'Postcodes';
        $this->data['form']         = 'Edit Form';

        if(!empty($id)) {
            $this->data['action']        = base_url().'admin/postcodes/update';
        } else {
            $this->data['action']        = base_url().'admin/postcodes/store';
        }
        
        
        $this->data['postcode'] = $this->postcode->get($id);
     
        $this->load->view('/postcodes/edit', $this->data);


    }

    public function show($id) {}

    public function update() {
        $this->data['postcode'] = ($this->input->post('postcode')) ? $this->input->post('postcode') : $postcode->postcode;
        $this->data['status']   = ($this->input->post('status')) ? $this->input->post('status') : $categorycms->status;
        $this->postcode->update($id, $this->data);
        $this->flash->success('Success', 'Successfully updated postcode');
        redirect('/admin/postcodes', 'refresh');
    }

    public function delete($id) {
        $postcode  = $this->postcode->get($id);
        $this->postcode->delete($postcode->id);
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