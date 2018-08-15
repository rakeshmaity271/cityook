
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    if(!function_exists('printArray')) {
        function printArray($array = array()) {
            echo "<pre>";
            print_r($array);
        }
    }
    if(!function_exists('getImage')) {
        function getImage($image) {
            if($image) {
                return base_url().'uploads/'.$image;
            }
            return base_url().'uploads/no-image.jpg';
        }
    }

    if(!function_exists('href')) {
        function href($link) {
            if($link) {
                 return base_url().$link;
            }
           
        }
    }



