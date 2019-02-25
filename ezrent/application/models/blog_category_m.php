<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog_category_m extends CI_Model{

public function get_blog_category($id){
$this->db->where('id_blog_category',$id);
$this->db->where('deleted',0);
$query = $this->db->get('blog_category');
return $query->row_array();
}


public function list_paginate($order,$limit, $offset){
$this->db->where('deleted',0);
if ($this->db->field_exists($order, 'blog_category')){
$this->db->order_by($order); }
$this->db->limit($limit,$offset);
$query=$this->db->get('blog_category');
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