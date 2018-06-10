<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Name: Common Library
 * Author: Rakesh Maity
 * Email: rakeshmaity271@gmail.com
 */

class Common_lib {

    //private $table;
    private $CI;
    private $options;
    private $query;
    private $row;
    private $rows;
    private $result;
    private $numOfRecords;

    public function __construct() {
        $this->CI = &get_instance();
        $this->CI->load->database();
    }

    public function insert($table, $data = array()) {
        $this->CI->db->insert($table, $data);
        return $this->CI->db->insert_id();
        
    }

    public function update($table, $data = array(), $conditions) {
        $this->CI->db->where($conditions);
        $this->CI->db->update($table, $data);
        return $this->CI->db->insert_id();
    }

    private function get($table, $id) {
        $this->CI->db->select('*');
        $this->CI->db->from($table);
        $this->CI->db->where('id', $id);
        $this->query = $this->CI->db->get();
        $this->row = $this->query->row();
        return $this->row;
    }

    public function row($table, $id) {
        return $this->get($table, $id);
    }

    public function rows($table, $options = array()) {
        return $this->gets($table, $options);
    }

    public function counts($table) {

    }

    private function gets($table, $options = array()) {

        if(isset($options['columns']) || !empty($options['columns'])) {
            $this->options['columns'] = $options['columns'];
        } else {
            $this->options['columns'] = '*';
        }

        $this->CI->db->select($this->options['columns']);
        $this->CI->db->from($table);

        if(isset($options['where']) || !empty($options['where'])) {
            $this->options['where'] = $options['where'];
        } else {
            $this->options['where'] = '';
        }

        if(isset($options['order_by']) || !empty($options['order_by'])) {
            $this->options['order_by'] = $options['order_by'];
        } else {
            $this->options['order_by'] = '';
        }

        if(isset($options['limit']) || !empty($options['limit'])) {
            $this->options['limit'] = $options['limit'];
        } else {
            $this->options['limit'] = '';
        }

        if($this->options['where']) {
            $this->CI->db->where($this->options['where']);
        }
        if($this->options['limit']) {
            $this->CI->db->limit($this->options['limit']);
        }

        if($this->options['order_by']) {
            $this->CI->db->order_by($this->options['order_by']);
        }
       
        $this->query = $this->CI->db->get();
        $this->rows = $this->query->result();
        return $this->rows;
    }

    public function delete($table, $id) {
        $this->CI->db->where('id', $id);
        $this->CI->db->delete($table);
        return true;
    }
    
    // protected function setTable($table) {
    //     return $this->table = $table;
    // }

    // public function getTable() {
    //     return $this->table;
    // }

    public function count($table) {
        $this->query = $this->db->count_all_results($table);
        $this->numOfRecords = $this->query->result();
        return $this->numOfRecords;
    }

    public function slugify($string) {
        // replace non letter or digits by -
        $string = preg_replace('~[^\pL\d]+~u', '-', $string);

        // transliterate
        $string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);

        // remove unwanted characters
        $string = preg_replace('~[^-\w]+~', '', $string);

        // trim
        $string = trim($text, '-');

        // remove duplicate -
        $string = preg_replace('~-+~', '-', $string);

        // lowercase
        $string = strtolower($string);

        if (empty($string)) {
            return 'n-a';
        }

        return $string;
    }


}