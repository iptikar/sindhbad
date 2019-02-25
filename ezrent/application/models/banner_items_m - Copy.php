<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Banner_items_m extends CI_Model{

public function get_banner_items($id){
$this->db->where('id_banner_items',$id);
$this->db->where('deleted',0);
$query = $this->db->get('banner_items');
return $query->row_array();
}


public function list_paginate($order,$limit, $offset){
$this->db->where('deleted',0);
if ($this->db->field_exists($order, 'banner_items')){
$this->db->order_by($order); }
$this->db->limit($limit,$offset);
$query=$this->db->get('banner_items');
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