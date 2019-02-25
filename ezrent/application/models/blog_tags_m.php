<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog_tags_m extends CI_Model{

public function get_blog_tags($id){
$this->db->where('id_blog_tags',$id);
$this->db->where('deleted',0);
$query = $this->db->get('blog_tags');
return $query->row_array();
}


public function list_paginate($order,$limit, $offset){
$this->db->where('deleted',0);
if ($this->db->field_exists($order, 'blog_tags')){
$this->db->order_by($order); }
$this->db->limit($limit,$offset);
$query=$this->db->get('blog_tags');
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