<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Order extends MX_Controller {

    private $data;

    public function __construct() {
        $this->load->database();
        $this->load->library('ion_auth');
        $this->load->library('Flash_lib', NULL, 'flash');
    }
    public function accountdetail()
    {

        if (!$this->ion_auth->logged_in())

		{

			// redirect them to the login page

			redirect('/login', 'refresh');

		}

		else if (!$this->ion_auth->isCustomer()) // remove this elseif if you want to enable this for non-admins

		{

			// redirect them to the home page because they must be an administrator to view this

			$this->flash->error('Error', 'You must be an customer to view this page.');
			redirect('/unauthorized');

		}

		else

		{

            $this->data['head'] 		= Modules::run('layouts/site-layout/head/index');

            $this->data['header'] 		= Modules::run('layouts/site-layout/header/index');

            $this->data['footer'] 		= Modules::run('layouts/site-layout/footer/index');

            $this->data['script'] 	    = Modules::run('layouts/site-layout/script/index');



            $this->load->view('order', $this->data);
		}
        

    }

}