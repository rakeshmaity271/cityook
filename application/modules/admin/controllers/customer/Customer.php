<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Customer extends MX_Controller {


    private $data;
    public function __construct() {

        parent::__construct();
        $this->load->database();
        $this->load->library('ion_auth');
        $this->load->library('Flash_lib', NULL, 'flash');
        $this->load->model('Customer_model', 'customer');
        

    }

    

    public function index() {
        $this->data['head'] 		= Modules::run('layouts/app-layout/head/index');

		$this->data['header'] 	    = Modules::run('layouts/app-layout/header/index');

		$this->data['sidebar'] 	    = Modules::run('layouts/app-layout/sidebar/index');

		$this->data['script'] 	    = Modules::run('layouts/app-layout/script/index');

        $this->data['footer'] 	    = Modules::run('layouts/app-layout/footer/index');

        $this->data['title']        = 'Manage Customers';
        $customers = $this->customer->all();
        $this->data['customers'] = [];
        foreach ($customers as $customer) {
            $this->data['customers'][] = [
                'id'            => $customer->id,
                'profile_pic'         => getImage($customer->profile_picture),
                'fullname'      => $customer->fullname,
                'email'         => $customer->email,
                'phone'         => $customer->mobile,
                'adhar_no'      => $customer->adhar_no,
                'state'         => $customer->state,
                'address'       => $customer->address,
                'status'        => $customer->active,
                'created_at'    => $customer->created_at,
                'updated_at'    => $customer->updated_at
               
            ];
        }
        // printArray($customers);
        // exit();
        $this->load->view('/customer/index', $this->data);


    }

    

    

   

    public function delete($id) {
        $customer  = $this->customer->get($id);
        $this->customer->delete($customer->id);
        
        return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array(
                        'message' => 'Successfully Deleted',
                        'error' => false,
                        'status' => 200
                )));

    }
    private function getStatus() {
        
        return ($this->input->post('status') === 'true') ? 1 : 0;
    }
    private function getId() {
        return ($this->input->post('id')) ? $this->input->post('id') : '';
    }

    public function updateStatus() {
        $isAjax = ($this->input->is_ajax_request()) ?  true : false ;
        if($isAjax) {
            $customer = $this->customer->find(['id' => $this->getId()]);
            if(count($customer) > 0) {
                $this->data['active'] = $this->getStatus();
                
                $this->customer->update($customer[0]->id, $this->data);
                   
                    return $this->output
                            ->set_content_type('application/json')
                            ->set_status_header(200)
                            ->set_output(json_encode(array(
                                    'error' => false,
                                    'status' => 200,
                                    'message' => 'customer Successfully Updated'
                            )));
               
            }
            return $this->output
                            ->set_content_type('application/json')
                            ->set_status_header(200)
                            ->set_output(json_encode(array(
                                    'error' => true,
                                    'status' => 200,
                                    'message' => 'Not found any record'
                            )));
        }
    }

}