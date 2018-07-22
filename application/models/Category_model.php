<?php

/**

 * Name:    Service Category Model

 * Author:  Rakesh maity

 * Email: rakeshmaity271@gmail.com

 * */

defined('BASEPATH') OR exit('No direct script access allowed');



class Category_model extends CI_Model
{

    
    private $common;
    private $table;
    private $t;
    public function __construct() {

        parent::__construct();
        $this->common = new Common_lib();
        $this->t = new Table();
        $this->t->setTable('categories');
        $this->table = $this->t->getTable();

    }

    public function save($data) {

        $this->db->insert($this->table, $data);

        return true;

    }

    public function update($data, $id) {

        $this->db->where('id', $id)->update($this->table, $data);

        return true;

    }

    public function delete($id) {

        $this->db->where('id', $id)

                 ->delete($this->table);

        return true;

    }

    public function all() {

        $query =  $this->db->select('*')->from($this->table)->get();

        return $query->result();

    }

    public function getCategoryBySlug($slug) {

        $query = $this->db->select('*')

                            ->from($this->table)

                            ->where('slug', $slug)

                            ->get();

        

        return $query->row();

    }

    public function getCategoryById($id) {

        $query = $this->db->select('*')

                            ->from($this->table)

                            ->where('id', $id)

                            ->get();



        return $query->row();

    }

    public function generateSlug($value) {

        $slug = '';

        if(!empty($value)) {

            return $sulg = str_replace(' ', '-',strtolower($value));

        }

        $slug = '';

    }
    public function find($options = array()) {
        return $this->common->find($this->table, '', $options);
    }


}