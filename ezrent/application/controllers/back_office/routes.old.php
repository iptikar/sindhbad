<?
class Routes extends CI_Controller{

public function __construct()
{
parent::__construct();
$this->table="routes";
$this->load->model("routes_m");
$this->fct->validateCorrelationID();
}


public function index($order=""){
$this->session->unset_userdata("admin_redirect_url");
if ($this->acl->has_permission('routes','index')){	
if($order == "")
$order ="sort_order";
$data["title"]="List routes";
$data["content"]="back_office/routes/list";
//
$this->session->unset_userdata("back_link");
//
if($this->input->post('show_items')){
$show_items  =  $this->input->post('show_items');
$this->session->set_userdata('show_items',$show_items);
} elseif($this->session->userdata('show_items')) {
$show_items  = $this->session->userdata('show_items'); 	}
else {
$show_items = "25";	
}
$this->session->set_userdata('back_link','index/'.$order.'/'.$this->uri->segment(5));
$data["show_items"] = $show_items;
// pagination  start :
$count_news = $this->routes_m->getAll($this->table,$order);
$show_items = ($show_items == 'All') ? $count_news : $show_items;
$this->load->library('pagination');
$config['base_url'] = site_url("back_office/routes/index/".$order);
$config['total_rows'] = $count_news;
$config['per_page'] = $this->config->item("admin_per_page");
$config['uri_segment'] = 5;
$this->pagination->initialize($config);
$data['info'] = $this->routes_m->list_paginate($order,$config['per_page'],$this->uri->segment(5));
// end pagination .
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}


public function add(){
if ($this->acl->has_permission('routes','add')){	
$data["title"]="Add routes";
$data["content"]="back_office/routes/add";
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
} 

public function view($id,$obj = ''){
if ($this->acl->has_permission('routes','index')){	
$data["title"]="View routes";
$data["content"]="back_office/routes/add";
$cond=array("id_routes"=>$id);
$data["id"]=$id;
$data["info"]=$this->fct->getonerecord($this->table,$cond);
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}

public function edit($id,$obj = ''){
if ($this->acl->has_permission('routes','edit')){	
$data["title"]="Edit routes";
$data["content"]="back_office/routes/add";
$cond=array("id_routes"=>$id);
$data["id"]=$id;
$data["info"]=$this->fct->getonerecord($this->table,$cond);
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}

public function delete($id){
if ($this->acl->has_permission('routes','delete')){
$_data=array("deleted"=>1,
"deleted_date"=>date("Y-m-d h:i:s"));
$this->db->where("id_routes",$id);
//$this->db->update($this->table,$_data);
$this->db->delete($this->table);
$this->session->set_userdata("success_message","Information was deleted successfully");
redirect(site_url("back_office/routes/".$this->session->userdata("back_link")));
} else {
	redirect(site_url("home/dashboard"));
}
}

public function delete_all(){
if ($this->acl->has_permission('routes','delete_all')){
$cehcklist= $this->input->post("cehcklist");
$check_option= $this->input->post("check_option");
if($check_option == "delete_all"){
if(count($cehcklist) > 0){
for($i = 0; $i < count($cehcklist); $i++){
if($cehcklist[$i] != ""){
$_data=array("deleted"=>1,
"deleted_date"=>date("Y-m-d h:i:s"));
$this->db->where("id_routes",$cehcklist[$i]);
//$this->db->update($this->table,$_data);	
$this->db->delete($this->table);
}
} } 
$this->session->set_userdata("success_message","Informations were deleted successfully");
}
redirect(site_url("back_office/routes/".$this->session->userdata("back_link")));	
} else {
	redirect(site_url("home/dashboard"));
}
}

public function sorted(){
$sort=array();
foreach($this->input->get("table-1") as $key => $val){
if(!empty($val))
$sort[]=$val;	
}
$i=0;
for($i=0; $i<count($sort); $i++){
$_data=array("sort_order"=>$i+1);
$this->db->where("id_routes",$sort[$i]);
$this->db->update($this->table,$_data);		
}
}

public function submit(){
$lang = "";
if($this->config->item("language_module")) {
	$lang = getFieldLanguage($this->lang->lang());
}
$data["title"]="Add / Edit routes";
$this->form_validation->set_rules("title", "TITLE", "trim|required");
$this->form_validation->set_rules("meta_title", "PAGE TITLE", "trim|max_length[65]");
$this->form_validation->set_rules("title_url", "TITLE URL", "trim");
$this->form_validation->set_rules("meta_description", "META DESCRIPTION", "trim|max_length[160]");
$this->form_validation->set_rules("meta_keywords", "META KEYWORDS", "trim|max_length[160]");
$this->form_validation->set_rules("route_index", "route index", "trim|required");
$this->form_validation->set_rules("route_rule", "route rule", "trim|required");
if ($this->form_validation->run() == FALSE){

if($this->input->post("id")!="")
$this->edit($this->input->post("id"));
else
$this->add();

}
else
{

$_data["id_user"]=$this->session->userdata("uid");
$_data["title"]=$this->input->post("title");
$_data["meta_title"]=$this->input->post("meta_title");
if($this->input->post("title_url") == "")
$title_url = $this->input->post("title");
else
$title_url = $this->input->post("title_url");
$_data["title_url"]=$this->fct->cleanURL("routes",url_title($title_url),$this->input->post("id"));
$_data["meta_description"]=$this->input->post("meta_description");
$_data["meta_keywords"]=$this->input->post("meta_keywords");	
$_data["route_index"]=$this->input->post("route_index");
$_data["route_rule"]=$this->input->post("route_rule");
$_data["sub_page"]=0;
if(isset($_POST['sub_page']))
$_data["sub_page"]=$this->input->post("sub_page");

	if($this->input->post("id")!=""){
	$_data["updated_date"]=date("Y-m-d h:i:s");
	$this->db->where("id_routes",$this->input->post("id"));
	$this->db->update($this->table,$_data);
	$new_id = $this->input->post("id");
	$this->session->set_userdata("success_message","Information was updated successfully");
	} else {
	$_data["created_date"]=date("Y-m-d h:i:s");
	$this->db->insert($this->table,$_data); 
	$new_id = $this->db->insert_id();	
	$this->session->set_userdata("success_message","Information was inserted successfully");
	}
	if($this->session->userdata("admin_redirect_url")) {
		redirect($this->session->userdata("admin_redirect_url"));
	}
	else {
		redirect(site_url("back_office/".$this->table."/".$this->session->userdata("back_link")));
	}
}
	
}

public function delete_file(){
$field = $this->input->post('field');
$image = $this->input->post('image');
$id = $this->input->post('id');
if(file_exists("./uploads/routes/".$image)){
unlink("./uploads/routes/".$image); }
$q=" SELECT thumb,thumb_val
FROM `content_type_attr`
WHERE id_content = (SELECT id_content FROM `content_type` WHERE name = 'routes')
AND name = '".$field."'";
$query=$this->db->query($q);
$res=$query->row_array();
if(isset($res["thumb"]) && $res["thumb"] == 1){
$sumb_val1=explode(",",$res["thumb_val"]);
foreach($sumb_val1 as $key => $value){
if(file_exists("./uploads/routes/".$value."/".$image)){
unlink("./uploads/routes/".$value."/".$image);	 }								
} } 
$_data[$field]="";
$this->db->where("id_routes",$id);
$this->db->update("routes",$_data);
echo 'Done!';	
}
public function updateAll()
{
	$code = "<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');";
	

	$result = $this->fct->getAll("routes","sort_order");
	if(!empty($result)) {
	foreach( $result as $row )
	{
		 $code .= "
		 route[ '".strtolower($row['route_rule'])."' ]                        = '".$row['route_index']."';";
		 //$code .= " route[ '^en/'.row['route_rule'] ]                 = row['route_index'];";
	}
	}


	$result = $this->fct->getAll_cond("sections","sort_order",array("status"=>1));
	if(!empty($result)) {
	$code .= "
	/////////////////////////////////////////////////////////////////////////////////";
	foreach( $result as $row )
	{
		 $code .= "
		 route[ '".strtolower($row['title_url'])."' ]                        = 'pages/index/".$row['id_sections']."';";
		 
		/* $code .= "
		 route[ '".strtolower($row['title_url'])."/register' ]                        = 'pages/index/".$row['id_sections']."/register';";
		 
		 $code .= "
		 route[ '".strtolower($row['title_url'])."/password' ]                        = 'pages/index/".$row['id_sections']."/password';";*/
		 //$code .= " route[ '^en/'.row['route_rule'] ]                 = row['route_index'];";
	}
	}
	
	$result = $this->fct->getAll_cond("sections_pages","sort_order",array("status"=>1));
	if(!empty($result)) {
	$code .= "
	/////////////////////////////////////////////////////////////////////////////////";
	foreach( $result as $row )
	{
		 $code .= "
		 route[ '".strtolower($row['title_url'])."' ]                        = 'pages/sub/".$row['id_sections_pages']."';";
		 $code .= "
		 route[ '".strtolower($row['title_url'])."/details' ]                        = 'pages/sub/".$row['id_sections_pages']."/details';";
		 $code .= "
		 route[ '".strtolower($row['title_url'])."/arabic' ]                        = 'pages/sub/".$row['id_sections_pages']."/arabic';";
		 //$code .= " route[ '^en/'.row['route_rule'] ]                 = row['route_index'];";
	}
	}
	
	$result = $this->fct->getAll_cond("sections_pages_details","sort_order",array("status"=>1));
	if(!empty($result)) {
	$code .= "
	/////////////////////////////////////////////////////////////////////////////////";
	foreach( $result as $row )
	{
		 $code .= "
		 route[ '".strtolower($row['title_url'])."' ]                        = 'pages/details/".$row['id_sections_pages_details']."';";
		 //$code .= " route[ '^en/'.row['route_rule'] ]                 = row['route_index'];";
	}
	}
	
	$result = $this->fct->getAll_cond("content_pages","sort_order",array("status"=>1));
	if(!empty($result)) {
	$code .= "
	/////////////////////////////////////////////////////////////////////////////////";
	foreach( $result as $row )
	{
		 $code .= "
		 route[ '".strtolower($row['title_url'])."' ]                        = 'pages/content/".$row['id_content_pages']."';";
		 //$code .= " route[ '^en/'.row['route_rule'] ]                 = row['route_index'];";
	}
	}
	
	$result = $this->fct->getAll_cond("executive_team","sort_order",array("status"=>1));
	if(!empty($result)) {
	$code .= "
	/////////////////////////////////////////////////////////////////////////////////";
	foreach( $result as $row )
	{
		 $code .= "
		 route[ '".strtolower($row['title_url'])."' ]                        = 'pages/inside/executive_team/".$row['id_executive_team']."';";
		 //$code .= " route[ '^en/'.row['route_rule'] ]                 = row['route_index'];";
	}
	}
	
	$result = $this->fct->getAll_cond("board_of_directors","sort_order",array("status"=>1));
	if(!empty($result)) {
	$code .= "
	/////////////////////////////////////////////////////////////////////////////////";
	foreach( $result as $row )
	{
		 $code .= "
		 route[ '".strtolower($row['title_url'])."' ]                        = 'pages/inside/board_of_directors/".$row['id_board_of_directors']."';";
		 //$code .= " route[ '^en/'.row['route_rule'] ]                 = row['route_index'];";
	}
	}
	
	$result = $this->fct->getAll_cond("facilities","sort_order",array("status"=>1));
	if(!empty($result)) {
	$code .= "
	/////////////////////////////////////////////////////////////////////////////////";
	foreach( $result as $row )
	{
		 $code .= "
		 route[ '".strtolower($row['title_url'])."' ]                        = 'pages/inside/facilities/".$row['id_facilities']."';";
		 //$code .= " route[ '^en/'.row['route_rule'] ]                 = row['route_index'];";
	}
	}
	
	$result = $this->fct->getAll_cond("press_releases","date DESC",array("status"=>1));
	if(!empty($result)) {
	$code .= "
	/////////////////////////////////////////////////////////////////////////////////";
	foreach( $result as $row )
	{
		 $code .= "
		 route[ '".strtolower($row['title_url'])."' ]                        = 'pages/inside/press_releases/".$row['id_press_releases']."';";
		 //$code .= " route[ '^en/'.row['route_rule'] ]                 = row['route_index'];";
	}
	}
	
	$result = $this->fct->getAll_cond("events","date DESC",array("status"=>1));
	if(!empty($result)) {
	$code .= "
	/////////////////////////////////////////////////////////////////////////////////";
	foreach( $result as $row )
	{
		 $code .= "
		 route[ '".strtolower($row['title_url'])."' ]                        = 'pages/inside/events/".$row['id_events']."';";
		 //$code .= " route[ '^en/'.row['route_rule'] ]                 = row['route_index'];";
	}
	}
	
	
	$getPhotoSection = $this->site_model->getSectionModule("photos");
	if(!empty($getPhotoSection)) {
	$result = $this->fct->getAll("photos","sort_order");
	if(!empty($result)) {
	$code .= "
	/////////////////////////////////////////////////////////////////////////////////";
	foreach( $result as $row )
	{
		 $code .= "
		 route[ '".strtolower($row['title_url'])."' ]                        = 'pages/".$getPhotoSection['method']."/".$getPhotoSection['id']."/".$row['id_photos']."';";
		 //$code .= " route[ '^en/'.row['route_rule'] ]                 = row['route_index'];";
	}
	}}
	
	
	$code .= "
	/////////////////////////////////////////////////////////////////////////////////";
	$code .= "
	route['default_controller'] = 'home/index';";
	
	$code .= "
	route['back_office'] = 'back_office/home';";
	
	$code .= "
	route['404_override'] = 'error404';";
	
	$code .= "
	//route['^ar/(.+)$'] = '$1';
	//route['^fr/(.+)$'] = '$1';
	route['^en/(.+)$'] = '$1';
	//route['^fr$'] = route['default_controller'];
	//route['^ar$'] = route['default_controller'];
	route['^en$'] = route['default_controller'];";
	$find = array("route[","row[");
	$replace = array('$route[','$row[');
	
	$path = "./application/config/routes.php";
	
	$code = str_replace($find,$replace,$code);
	$this->fct->write_file($path,$code);

	$this->session->set_userdata("success_message","Routes are published successfully..");
	redirect(site_url("back_office/routes"));
	
}
}