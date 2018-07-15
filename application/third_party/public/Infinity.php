<?php
/**
 * Created by PhpStorm.
 * User: Rakesh-Maity
 * Date: 7/8/2018
 * Time: 8:37 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Infinity {

    private $CI;
    private $common;
    private $table;
    private $t;

    public function __construct() {
        //$this->CI = &get_instance();
        $this->common = new Common_lib();
        $this->t = new Table();
    }

    public function getCategories() {
        $this->t->setTable('categories');
        return $this->common->rows($this->t->getTable());
    }

}