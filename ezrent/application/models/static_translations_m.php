<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Static_translations_m extends CI_Model{

public function get_static_translations($id){
$this->db->where('id_static_translations',$id);
$this->db->where('deleted',0);
$query = $this->db->get('static_translations');
return $query->row_array();
}


public function list_paginate($order,$limit, $offset){
$this->db->where('deleted',0);
if ($this->db->field_exists($order, 'static_translations')){
$this->db->order_by($order); }
$this->db->limit($limit,$offset);
$query=$this->db->get('static_translations');
return $query->result_array();	
}

public function getAll($table,$order){
$this->db->where('deleted',0);
if ($this->db->field_exists($order, $table)){
$this->db->order_by($order); }
$query=$this->db->get($table);
return $query->num_rows();
}
public function getStaticTranslations($cond = array(),$like = array(),$limit = "",$offset = "")
{
	$this->db->select("*");
	$this->db->from("static_translations");
	if(!empty($cond))
	$this->db->where($cond);
	if(!empty($like))
	$this->db->like($like);
	$this->db->order_by("sort_order");
	if($limit != "")
	$this->db->limit($limit,$offset);
	$query = $this->db->get();
	//echo $this->db->last_query();exit;
	if($limit != "")
	$results = $query->result_array();
	else
	$results = $query->num_rows();
	return $results;
}
}