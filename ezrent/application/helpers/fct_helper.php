<?php // test_helper.php
if(!defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('getAll')){
function getAll($table,$order){
	$CI =& get_instance();
$CI->db->where('deleted',0);
if ($CI->db->field_exists($order, $table)){
$CI->db->order_by($order); }
if ($CI->db->field_exists('created_date', $table)){
$CI->db->order_by('created_date','desc'); }
$query=$CI->db->get($table);
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}
}

if ( ! function_exists('date_in_formate')){
function date_in_formate($date){
if($date !=""){
list($d,$m,$y)=explode('/',$date);
$date=$y."-".$m."-".$d;
} else {
$date = "0000-00-00";
}
return $date;	
}
}

if ( ! function_exists('date_out_formate')){
function date_out_formate($date){
if(!empty($date) && $date !="0000-00-00" ){
list($y,$m,$d)=explode('-',$date);
$date=$d."/".$m."/".$y;
} else {
$date ="";	
}
return $date;	
}
}

if ( ! function_exists('date_difference')){
function new_date_format($date){
if($date != "" && $date != "0000-00-00"){
list($y,$m,$d) = explode('-',$date);
$new_date = $d.".".$m.".".$y;
}
else{
$new_date = "";	
}
return  $new_date;
}
}

if ( ! function_exists('date_difference')){
function date_difference($d1,$d2){
return (int)abs((strtotime($d1) - strtotime($d2))/(60*60*24)); 	
}
}

if ( ! function_exists('getonerecord')){
function getonerecord($table,$condition){
$CI =& get_instance();
$CI->db->where('deleted',0);
$CI->db->where($condition);
$query=$CI->db->get($table);
if($query->num_rows() > 0 ){
return $query->row_array();
} 
}
}





if ( ! function_exists('getonecell')){
function getonecell($table,$select,$cond){
$CI =& get_instance();
$CI->db->select($select);
$CI->db->from($table);
$CI->db->where($cond);
$query=$CI->db->get();
$res=$query->row_array();
if(count($res) >0)
return $res[$select];
}
}

if ( ! function_exists('getonerow')){
function getonerow($table,$condition){
$CI =& get_instance();
$CI->db->where($condition);
$query=$CI->db->get($table);
if($query->num_rows() > 0 ){
return $query->row_array();
} 
}
}



if ( ! function_exists('number_word')){
function number_word($x){
$word = array(
'1' => 'one',
'2' => 'two',
'3' => 'three',
'4' => 'four',
'5' => 'five',
'6' => 'six',
'7' => 'seven',
'8' => 'eight',
'9' => 'nine',
'10' => 'ten',
'11' => 'eleven',
'12' => 'twelve',
);
return $word[$x];	
}
}

if ( ! function_exists('getAll_cond')){
function getAll_cond($table,$order,$cond,$cond1= array()){
$CI =& get_instance();  
$CI->db->where('deleted',0);
$CI->db->where($cond);
$CI->db->where_in($cond1);
if ($CI->db->field_exists($order, $table)){
$CI->db->order_by($order); }
if ($CI->db->field_exists('created_date', $table)){
$CI->db->order_by('created_date','desc'); }
$query=$CI->db->get($table);
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}
}

if ( ! function_exists('getAll_cond2')){
function getAll_cond2($table,$order,$cond){
$CI =& get_instance();  
$CI->db->where('deleted',0);
$CI->db->where('id_locations',$CI->session->userdata('country'));
$CI->db->where($cond);
if ($CI->db->field_exists($order, $table)){
$CI->db->order_by($order); }
if ($CI->db->field_exists('created_date', $table)){
$CI->db->order_by('created_date','desc'); }
$query=$CI->db->get($table);
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}
}

if(!function_exists('check_if_exist')){
function check_if_exist($table,$cond){
$CI =& get_instance();
$CI->db->where($cond);
$query = $CI->db->get($table);
if($query->num_rows() == 0)
return false; 
else 
return true;
}
}


if(!function_exists('get_first_row')){
function get_first_row($table,$where=array()){
$CI =& get_instance();
if(count($where) > 0)
$query = $CI->db->get_where($table,$where);		
else
$query = $CI->db->get($table);
if($query->num_rows() > 0)
{
	return $query->first_row();
} else { return array(); }	
}
}

if(!function_exists('get_last_row')){
function get_last_row($table,$where=array()){
$CI =& get_instance();
if(count($where) > 0)
$query = $CI->db->get_where($table,$where);		
else
$query = $CI->db->get($table);
if($query->num_rows() > 0)
{
	return $query->last_row();
} 
}
}

if(!function_exists('date_formate')){
function date_formate($date){
if(!empty($date) && $date !="0000-00-00" ){
$date_timestamp = strtotime($date);
$new_date = date('d M Y', $date_timestamp); 	
} else {
$new_date ="";	
}
return $new_date;		
}
}


if(!function_exists('getTranslationID_byLang')){
function getTranslationID_byLang($section,$id,$onlyID = TRUE){
	$CI =& get_instance();
	if($CI->config->item('language_module')) {
		$res = $CI->translation_lib->getTranslationID_byLang($section,$id,$CI->lang->lang(),$onlyID);
	}
	else {
		$res = $id;
	}
	return $res;
}
}

if(!function_exists('getDefaultRowLangID')){
function getDefaultRowLangID($section,$id,$onlyID = TRUE){
	$CI =& get_instance();
	if($CI->config->item('language_module')) {
		$res = $CI->translation_lib->getDefaultRowLangID($section,$id,$onlyID);
	}
	else {
		$res = $id;
	}
	return $res;
}
}

if(!function_exists('getCurrentLangDirection')){
function getCurrentLangDirection(){
	$CI =& get_instance();
	$lang = $CI->lang->lang();
	$language = $CI->fct->getonerow('languages',array('index'=>$lang));
	return $language['direction'];
}
}




?>