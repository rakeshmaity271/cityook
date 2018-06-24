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
    private $join;
    private $table;
    private $columns;
    private $cond;
    private $escape;
    private $limit;
    private $direction;
    private $offset;
    private $where;
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

    public function find($table, $id = null, $options = array()) {
        $where = array();
        $this->CI->db->select('*');
        $this->CI->db->from($table);
        if(isset($options)) {
            foreach ($options as $key => $value) {
                $where[$key] = $value;
            }
        } else {
            $where['id'] = $id;
        }

        $this->CI->db->where($where);
        $this->query = $this->CI->db->get();
        //$this->rows = array();
        $this->rows = $this->query->result();
        return $this->rows;
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
        $string = trim($string, '-');

        // remove duplicate -
        $string = preg_replace('~-+~', '-', $string);

        // lowercase
        $string = strtolower($string);

        if (empty($string)) {
            return 'n-a';
        }

        return $string;
    }

    
    public function join($table, $cond = array(), $columns = null, $joinType = null, $options = array(), $escape = false) {

        if(isset($table)) {
            $this->table = $table;
        } else {
            $this->table = '';
        }
        // From
        if($this->table) {
            $this->CI->db->from($this->table);
        } else {
             $this->CI->db->from('');
        }

        //Columns
        if(isset($columns)) {
            $this->columns = $columns;
        } else {
            $this->columns = '';
        }

        if($this->columns) {
            $this->CI->db->select($this->columns);
        } else {
            $this->CI->db->select('*');
        }
       

        // Options
        if(isset($options) && is_array($options)) {

            // Where Clouse
            if(isset($options['where']) && $options['where'] !== NULL) {

                $this->options['where'] = $options['where'];
            } else {
                $this->options['where'] = array();
            }
            // or_where
            if(isset($options['or_where']) && $options['or_where'] !== NULL) {

                $this->options['or_where'] = $options['or_where'];
            } else {
                $this->options['or_where'] = array();
            }

            // or_where_in
            if(isset($options['or_where_in']) && $options['or_where_in'] !== NULL) {

                $this->options['or_where_in'] = $options['or_where_in'];
            } else {
                $this->options['or_where_in'] = array();
            }
            // or_where_not_in

            if(isset($options['or_where_not_in']) && $options['or_where_not_in'] !== NULL) {

                $this->options['or_where_not_in'] = $options['or_where_not_in'];
            } else {
                $this->options['or_where_not_in'] = array();
            }

            // where_in

            if(isset($options['where_in']) && $options['where_in'] !== NULL) {

                $this->options['where_in'] = $options['where_in'];
            } else {
                $this->options['where_in'] = array();
            }

            // where_not_in

            if(isset($options['where_not_in']) && $options['where_not_in'] !== NULL) {

                $this->options['where_not_in'] = $options['where_not_in'];
            } else {
                $this->options['where_not_in'] = array();
            }
            // group_by
            if(isset($options['group_by']) && $options['group_by'] !== NULL) {

                $this->options['group_by'] = $options['group_by'];
            } else {
                $this->options['group_by'] = array();
            }
            // order_by
            if(isset($options['order_by']) && $options['order_by'] !== NULL) {

                if(is_array($options['order_by'])) {
                    if(isset($options['order_by']['direction']) && $options['order_by']['direction'] === 'DESC') {
                        $this->direction = 'DESC';
                    } else if(isset($options['order_by']['direction']) && $options['order_by']['direction'] === 'ASC') {
                        $this->direction = 'ASC';
                    }else if(isset($options['order_by']['direction']) && $options['order_by']['direction'] === 'RANDOM') {
                        $this->direction = 'RANDOM';
                    } else {
                        $this->direction = 'ASC';
                    }

                    $this->options['order_by'] = array($options['order_by']['orderby'], $this->direction);
                } else {
                    $this->options['order_by'] = $options['order_by'];
                }

            } else {
                $this->options['order_by'] = '';
            }

            // limit
            if(isset($options['limit']) && $options['limit'] !== NULL) {
                $this->options['limit'] = $options['limit'];
            } else {
                $this->options['limit'] = array();
            }

            if(isset($this->options['limit'])) {

             
                    if(isset($this->options['limit']['limit'])) {
                        $this->limit = $this->options['limit']['limit'];
                    } else {
                        $this->limit = 20;
                    }
                

               
                    if(isset($this->options['limit']['offset'])) {
                        $this->offset = $this->options['limit']['offset'];
                    } else {
                        $this->offset = 0;
                    }
                

                $this->options['limit'] = array($this->limit, $this->offset);

            } else {
                $this->options['limit'] = '';
            }   

            if($this->options['where']) {

                $this->CI->db->where($this->options['where']);
            }

            if($this->options['or_where']) {

                $this->CI->db->or_where($this->options['or_where']);
            }

            if($this->options['or_where_in']) {

                $this->CI->db->or_where_in($this->options['or_where_in']);
            }

            if($this->options['or_where_not_in']) {

                $this->CI->db->or_where_not_in($this->options['or_where_not_in']);
            }

            if($this->options['where_in']) {

                $this->CI->db->where_in($this->options['where_in']);
            }

            if($this->options['where_not_in']) {

                $this->CI->db->where_not_in($this->options['where_not_in']);
            }

            if($this->options['where_not_in']) {

                $this->CI->db->group_by($this->options['group_by']);
            }
            if($this->options['order_by']) {

                $this->CI->db->order_by($this->options['order_by']);
            }

            if($this->options['limit']) {

                $this->CI->db->limit($this->options['limit']);
            }
            
        }

        /**
            * [
                0 => [
                        'table' => string,
                        'cond' => string,
                    ],
                 1 => [
                        'table' => string,
                        'cond' => string,
                    ],
              ]
            */
            if(isset($cond)) {

                $this->cond = $cond;
            } else {
                $this->cond = array();
            }
            if($this->cond) {
                 for ($i=0; $i < count($this->cond); $i++) { 
                    if(isset($this->cond[$i]['table']) && isset($this->cond[$i]['cond'])) {
                        $this->CI->db->join($this->cond[$i]['table'], $this->cond[$i]['cond']);
                    }
                    
                }
            }

            if(isset($joinType)) {

                $this->joinType = $joinType;
            } else {
                $this->joinType = 'left';
            }

            if(isset($escape)) {

                $this->escape = $escape;
            } else {
                $this->escape = false;
            }

        $this->query = $this->CI->db->get();
        $this->rows = $this->query->result();
        return $this->rows;
        
    }


}