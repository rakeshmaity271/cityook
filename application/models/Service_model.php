<?php

/**

 * Name:    Service Model

 * Author:  Rakesh maity

 * Email: rakeshmaity271@gmail.com

 * */

defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends CI_Model

{

    //private $table = 'services';
    private $common;
    private $table;
    private $t;
    
    public function __construct() {
        parent::__construct();
        $this->common = new Common_lib();
        $this->t = new Table();
        $this->t->setTable('services');
        $this->table = $this->t->getTable();

    }

    public function save($data) {
        return $this->common->insert($this->table, $data);
    }
    public function all() {
        return $this->common->rows($this->table);
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
    public function slug($productName) {
        return $this->common->slugify($productName);
    }

    public function getRelatedServicesByServiceID($serviceID) {
       
        $data = array();
        $related_services = $this->common->rows('related_services', array('where' => array('id_services' => $serviceID), 'columns' => 'related_id_services'));
        
        foreach ($related_services as $value) {
            $data[] = $value->related_id_services;
        }
       
        return $data;
        //print_r($data);

    }
    // public function getRelatedServicesByServiceID($serviceID) {
    //     $options = array(
    //         'order_by' => array('id', 'DESC'),
    //         'where' => array('id_services' , $serviceID)
    //     );
    //     return $this->common->join($this->table, $cond = array('related_services', 'related_services.id_services = '.$this->table.'.id', 'left', $options));
    // }
    public function setRelatedServices($data) {
        return $this->common->insert('related_services', $data);
    }

    public function find($options = array()) {
        return $this->common->find($this->table, '', $options);
    }


    

}