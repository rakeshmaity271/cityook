<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Table {

    private $table;

    public function __construct() {
        //$this->table = $table;
    }
    public function setTable($table) {
        $this->table = $table;
    }
    public function getTable() {
        return $this->table;
    }
}