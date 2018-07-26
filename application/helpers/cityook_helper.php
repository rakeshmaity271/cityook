
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH .'../system/core/Controller.php');
require_once( APPPATH .'../system/core/Loader.php');
if(!function_exists('printArray')) {
    function printArray($array = array()) {
        echo "<pre>";
        print_r($array);
    }
}

if(!function_exists('dynamicRoutes')) {
    function dynamicRoutes() {
        $CI=& get_instance();
        $CI->load->database(); 
        $CI->load->model('Category_model', 'category');
        $CI->load->model('Service_model', 'service');
        $categories = [];
        $categories = $CI->Category_model->all();
      
        $index = [];
        foreach ($categories as $category) {
            foreach ($CI->service->find($options = ['id_categories' => $category->id]) as $value) {
                $index[] = $category->slug.'/'.$value->slug;
            }
        }

        return $index;
      
    }
}

