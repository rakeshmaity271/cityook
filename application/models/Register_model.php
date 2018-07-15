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

    private $fullname;
    private $email;
    private $password;
    private $address;
    private $city;
    private $state;
    private $pincode;
    private $adharNo;
    private $file;
    private $otp;
    private $mobile;

    public function __construct() {

        parent::__construct();

        $this->load->database();

        $this->table = 'users';

    }

    public function setFullName($value) {
        $this->fullname = $value;
    }
    public function getFullName() {
        return $this->fullname;
    }
    public function setEmail($value) {
        $this->email = $value;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setPassword($value) {
        $this->password = $value;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setAddress($value) {
        $this->address = $value;
    }
    public function getAddress() {
        return $this->address;
    }
    public function setCity($value) {
        $this->city = $value;
    }
    public function getCity() {
        return $this->city;
    }

    public function setState($value) {
        $this->state = $value;
    }
    public function getState() {
       return $this->state;
    }
    
    public function setPincode($value) {
        $this->pincode = $value;
    }
    public function getPincode() {
       return $this->pincode;
    }
    public function setAdharno($value) {
        $this->adharNo = $value;
    }
    public function getAdharno() {
       return $this->adharNo;
    }

    public function setFile($value) {
        $this->file = $value;
    }
    public function getFile() {
       return $this->file;
    }

    public function setOtp($value) {
        $this->otp = $value;
    }
    public function getOtp() {
       return $this->otp;
    }
    public function setMobile($value) {
        $this->mobile = $value;
    }
    public function getMobile() {
       return $this->mobile;
    }




    public function register($data) {

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