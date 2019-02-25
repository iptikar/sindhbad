<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Routes_m extends CI_Model{

public function get_routes($id){
$this->db->where('id_routes',$id);
$this->db->where('deleted',0);
$query = $this->db->get('routes');
return $query->row_array();
}


public function list_paginate($order,$limit, $offset){
$this->db->where('deleted',0);
if ($this->db->field_exists($order, 'routes')){
$this->db->order_by($order); }
$this->db->limit($limit,$offset);
$query=$this->db->get('routes');
return $query->result_array();	
}

public function getAll($table,$order){
$this->db->where('deleted',0);
if ($this->db->field_exists($order, $table)){
$this->db->order_by($order); }
$query=$this->db->get($table);
return $query->num_rows();
}

}