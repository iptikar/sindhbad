<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auto_reply_messages_m extends CI_Model{

public function get_auto_reply_messages($id){
$this->db->where('id_auto_reply_messages',$id);
$this->db->where('deleted',0);
$query = $this->db->get('auto_reply_messages');
return $query->row_array();
}


public function list_paginate($order,$limit, $offset){
$this->db->where('deleted',0);
if ($this->db->field_exists($order, 'auto_reply_messages')){
$this->db->order_by($order); }
$this->db->limit($limit,$offset);
$query=$this->db->get('auto_reply_messages');
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