<?php
/**
 * Name:    Service Category Model
 * Author:  Rakesh maity
 * Email: rakeshmaity271@gmail.com
 * */
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model
{
    private $table;
    private $data;

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->table = 'users';
    }

    public function customerRegister($data) {
        $query = $this->db->insert($this->table, $data);
        return true;
    }

    public function getUserByMobile($mobile) {
        $query = $this->db->select('*')
                            ->from($this->table)
                            ->where('mobile', $mobile)
                            ->get();
        return $query->row();
    }
}