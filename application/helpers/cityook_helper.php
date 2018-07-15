
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('printArray')) {
    function printArray($array = array()) {
        echo "<pre>";
        print_r($array);
    }
}