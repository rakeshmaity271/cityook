<?php

/**

 * Name:    Postcode Model

 * Author:  Rakesh maity

 * Email: rakeshmaity271@gmail.com

 * */

defined('BASEPATH') OR exit('No direct script access allowed');

class Postcode_model extends CI_Model

{

    //private $table = 'services';
    private $common;
    private $table;
    private $t;
    
    public function __construct() {
        parent::__construct();
        $this->common = new Common_lib();
        $this->t = new Table();
        $this->t->setTable('postcodes');
        $this->table = $this->t->getTable();

    }

    public function save($data) {
        return $this->common->insert($this->table, $data);
    }
    public function all() {
        $query =  $this->db->select('postcodes.*')
                    ->from($this->table)
                    ->get();
        return $query->result();

    }
    public function get($id) {
        return $this->common->row($this->table, $id);
    }
    public function update($id, $data) {
        return $this->common->update($this->table, $data, ['id' => $id]);
    }
    public function delete($id) {
        return $this->common->delete($this->table, $id);
    }
    public function find($options = array()) {
        return $this->common->find($this->table, '', $options);
    }
    public function isValidPostCode($options) {
        return $this->common->find($this->table, '', $options);
    }

}