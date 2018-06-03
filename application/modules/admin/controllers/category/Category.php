<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Category extends MX_Controller {

    private $data;

    private $redirect;
    private $CI;
    public function __construct() {

        parent::__construct();


        $this->CI = &get_instance();
        $this->load->database();
        $this->load->library('ion_auth');
        $this->load->model('Service_model', 'service_model');

        $this->load->model('Category_model', 'category_model');

        $this->load->library('Flash_lib', NULL, 'flash');
        $this->load->library('Image_lib', NULL, 'Image_lib');
        

        $this->redirect = '/admin/service';

    }



    public function index() {
        if (!$this->ion_auth->logged_in()) {
			redirect('/login', 'refresh');
		} else if (!$this->ion_auth->isAdmin()) {
			$this->flash->error('Error', 'You must be an admin to view this page.');
			redirect('/unauthorized');
		} else {
        $this->data['head'] 		= Modules::run('layouts/app-layout/head/index');

		$this->data['header'] 	    = Modules::run('layouts/app-layout/header/index');

		$this->data['sidebar'] 	    = Modules::run('layouts/app-layout/sidebar/index');

		$this->data['script'] 	    = Modules::run('layouts/app-layout/script/index');

        $this->data['footer'] 	    = Modules::run('layouts/app-layout/footer/index');

        $categories = $this->category_model->all();

       // print_r($categories);

        //exit();

        $this->data['categories'] = $categories;

        $this->load->view('/category/index', $this->data);
        }

    }

    public function create() {

        $this->data['head'] 		= Modules::run('layouts/app-layout/head/index');

		$this->data['header'] 	    = Modules::run('layouts/app-layout/header/index');

		$this->data['sidebar'] 	    = Modules::run('layouts/app-layout/sidebar/index');

		$this->data['script'] 	    = Modules::run('layouts/app-layout/script/index');

        $this->data['footer'] 	    = Modules::run('layouts/app-layout/footer/index');

        $this->data['title']        = 'Manage Category';

        $this->data['formHeading']    = 'Add Category';

        $this->data['categoryInformation']    = 'Category Information';

        

        

        $this->load->view('/category/create', $this->data);

    }

    public function store() {

        $slug = $this->category_model->generateSlug($this->input->post('name'));

        $category = $this->category_model->getCategoryBySlug($slug);



        if(count($category) > 0) {

            $this->flash->error('Error', 'Category Already Exists!');

            redirect($this->redirect.'/category/create');

        } 
        // if( ! is_dir($this->config->item('upload_path').'uploads') ) {
		// 	mkdir($this->config->item('upload_path').'uploads',0777,TRUE); 
        // }
        
        // if( ! is_dir($this->config->item('thumb_path').'thumbs') ) {
		// 	mkdir($this->config->item('thumb_path').'thumbs',0777,TRUE); 
		// }

        $filename = strtolower(str_replace(' ', '-', $_FILES['file']['name']));
        // $temp = explode(".", $_FILES["file"]["name"]);
        // $newfilename = round(microtime(true)) . '.' . end($temp);

		if(isset($filename)) {
           
            $this->Image_lib->setFilename($filename);
            foreach($this->config->item('file')['original'] as $key => $value) {
                $config[$key] = $value;
            }
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('file')) {
                            
            } else {
                $uploadedData = $this->upload->data();
                

                foreach($this->config->item('file')['resize'] as $key => $value) {
                    $resize[$key] = $value;
                    if($key === 'source_image') {
                        $resize['source_image'] = $this->config->item('file')['resize']['source_image'].'/'.$this->Image_lib->getFilename();
                    }
                    if($key === 'new_image') {
                        $resize['new_image'] = $this->config->item('file')['resize']['new_image'].'/'.$this->Image_lib->getFilename();
                    }
                }

               
               $image = $this->Image_lib->getFilename();
                // $this->CI->load->library('image_lib', $resize);
                // if(!$this->CI->image_lib->resize()) {
                //     $this->flash->error('Error', 'Resize method not working');
                //     redirect($this->redirect.'/category/create');
                // }
                
            }
		} else {
			$image = 'no-image.png';
		}


        $this->data['name']     = ($this->input->post('name')) ? $this->input->post('name') : '';

        $this->data['slug']     = ($this->input->post('name')) ? $this->category_model->generateSlug($this->input->post('name')) : '';

        $this->data['status']   = ($this->input->post('status')) ? $this->input->post('status') : '0';

        $this->data['description']   = ($this->input->post('description')) ? $this->input->post('description') : '';

       $this->data['image'] = $image;

        $this->category_model->save($this->data);

       

        $this->flash->success('Success', 'Record added');

        redirect($this->redirect.'/categories');

    }

    public function edit($id) {



        $this->data['head'] 		= Modules::run('layouts/app-layout/head/index');

		$this->data['header'] 	    = Modules::run('layouts/app-layout/header/index');

		$this->data['sidebar'] 	    = Modules::run('layouts/app-layout/sidebar/index');

		$this->data['script'] 	    = Modules::run('layouts/app-layout/script/index');

        $this->data['footer'] 	    = Modules::run('layouts/app-layout/footer/index');

        $this->data['title']        = 'Manage Category';

        $this->data['formHeading']    = 'Edit Category';

        $this->data['categoryInformation']    = 'Category Information';



        $this->data['category'] = $this->category_model->getCategoryById($id);

        $this->load->view('/category/edit', $this->data);



    }

    public function show($id) {

        $this->data['head'] 		= Modules::run('layouts/app-layout/head/index');

		$this->data['header'] 	    = Modules::run('layouts/app-layout/header/index');

		$this->data['sidebar'] 	    = Modules::run('layouts/app-layout/sidebar/index');

		$this->data['script'] 	    = Modules::run('layouts/app-layout/script/index');

        $this->data['footer'] 	    = Modules::run('layouts/app-layout/footer/index');

        $this->data['category'] = $this->category_model->getCategoryById($id);

        $this->load->view('/category/show', $this->data);

    }

    public function update($id) {

        $category = $this->category_model->getCategoryById($id);



        $this->data['name']         = ($this->input->post('name')) ? $this->input->post('name') : $category->name;

        $this->data['slug']         = ($this->input->post('name')) ? $this->category_model->generateSlug($this->input->post('name')) : $category->slug;

        $this->data['status']       = ($this->input->post('status')) ? $this->input->post('status') : $category->status;

        $this->data['description']  = ($this->input->post('description')) ? $this->input->post('description') : $category->description;

        //$this->data['image']    = $image;

        $this->data['updated_at']  = date('Y-m-d H:m:s', time());

       

        $this->category_model->update($this->data, $id);

        $this->flash->success('Success', 'Record Updated');

        redirect($this->redirect.'/categories');

    }

    public function delete($id) {

        $category  = $this->category_model->getCategoryById($id);
        // print_r($category);
        // exit();
        if(count($category) > 0) {
            $imageName = $category->image;
            $imageWithFullPath = $this->config->item('file')['original']['upload_path'].$imageName;
            unlink($imageWithFullPath);
            $this->category_model->delete($id);

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

}