<?php
/**
 * Name:    Service Category Model
 * Author:  Rakesh maity
 * Email: rakeshmaity271@gmail.com
 * */
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model
{
    protected $table = 'categories';
    public function __construct() {
        $this->load->database();
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
}