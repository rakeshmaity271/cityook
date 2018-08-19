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
    private $common;
    public function __construct() {
        $this->load->database();
        $this->common = new Common_lib();

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

    public function get($id) {
        return $this->common->row($this->table, $id);
    }

    public function getUserFirstnameByUserId($id) {
        $query = $this->common->row($this->table, $id);
        return (isset($query->firstname)) ? $query->firstname : '';
    }
    public function getUserLastnameByUserId($id) {
        $query = $this->common->row($this->table, $id);
        return (isset($query->lastname)) ? $query->lastname : '';
    }

    public function getUserFullnameByUserId($id) {
        $query = $this->common->row($this->table, $id);
        return (isset($query->fullname)) ? $query->fullname : '';
    }

}