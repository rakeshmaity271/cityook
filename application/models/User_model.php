<?php

/**

 * Name:    User Model

 * Author:  Ajnish Kumar

 * Email: 

 * */

defined('BASEPATH') OR exit('No direct script access allowed');



class User_model extends CI_Model

{

    protected $table = 'users';

    public function __construct() {

        $this->load->database();

    }

    public function all() {
		
        //$query =  $this->db->select('*')->from($this->table)->get();
		$query =  $this->db->select('*')->from($this->table)->where('user_type',3)->get();
		return $query->result();

    }

    public function getUserByForgotPassowordCode($code) {

        $query =  $this->db->select('*')->from($this->table)->where('forgotten_password_code', $code)->get();

        return $query->row();

    }

    public function updateForgottenPasswordFieldsByUserId($data, $id) {
        $this->db->where('id', $id)->update($this->table, $data);
        return true;
    }
    public function updatePasswordByUserId($data, $id) {
        $this->db->where('id', $id)->update($this->table, $data);
        return true;
    }

}