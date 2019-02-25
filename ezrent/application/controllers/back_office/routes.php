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
$this->form_validation->set_rules("route_rule_ar", "route rule (arabic)", "trim");
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
$_data["route_rule"]=$this->fct->cleanURL("routes",url_title($this->input->post("route_rule")),$this->input->post("id"),"route_rule");
//$_data["route_rule_ar"]=$this->input->post("route_rule_ar");
$this->load->model("title_url_ar");
$_data["route_rule_ar"] = $this->title_url_ar->cleanURL("routes",$this->input->post("route_rule_ar"),$this->input->post("id"),"route_rule_ar");
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
public function updateAll1()
{
    $this->updateAll();
}
public function updateAll()
{
	$code_routers = "<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');";
	$code_configs = "<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');";
	$find = array("'","\"");
$replace = array("","");
$this->load->model("title_url_ar");

$custom_routers = array();
$custom_configs = array();
$custom_arr = array();


/*$code .= "
		 route[ '".strtolower($row['title_url_ar'])."' ]                        = 'ar/pages/details/".$row['id_sections_pages_details']."';";*/
	$result = $this->fct->getAll("routes","sort_order");
	if(!empty($result)) {
	foreach( $result as $row )
	{
		$custom_arr['en'][strtolower($row['route_rule'])] = $row['route_index'];
		//if(!empty($row['route_rule_ar']))
		//$custom_arr['ar'][strtolower($row['route_rule_ar'])] = $row['route_index'];
	}
	}

$custom_arr['en']['privacy-policy'] = "privacy";

	$result = $this->fct->getAll("news","id_news");
	if(!empty($result)) {
	foreach( $result as $row )
	{
		$custom_arr['en'][strtolower($row['title_url'])] = "news/details/".$row['id_news'];
	}
	}

	$result = $this->fct->getAll("services","id_services");
	if(!empty($result)) {
	foreach( $result as $row )
	{
		$custom_arr['en'][strtolower($row['title_url'])] = "services/details/".$row['id_services'];
	}
	}

$result = $this->fct->getAll("category","id_category");
	if(!empty($result)) {
	foreach( $result as $row )
	{
		$custom_arr['en'][strtolower($row['title_url'])] = "fleet/category/".$row['id_category'];
	}
	}

	
	$result = $this->fct->getAll("fleet","id_fleet");
	if(!empty($result)) {
	foreach( $result as $row )
	{
		$custom_arr['en'][strtolower($row['title_url'])] = "fleet/details/".$row['id_fleet'];
$custom_arr['en']["book-".strtolower($row['title_url'])] = "fleet/booking/".$row['id_fleet'];
	}
	}
	
	$result = $this->fct->getAll("blog","id_blog");
	if(!empty($result)) {
	foreach( $result as $row )
	{
		$custom_arr['en'][strtolower($row['title_url'])] = "blog/details/".$row['id_blog'];
	}
	}

	
	
	//print '<pre>'; print_r($custom_arr); exit;
	if(!empty($custom_arr)) {
$f = array("%2Farabic","%2Fdetails");
$r = array("/arabic","/details");
		if(isset($custom_arr['en'])) {
			$en_arrays = $custom_arr['en'];
			foreach($en_arrays as $k_en => $v_en) {
if(!empty($k_en)) {
				$code_routers .= "
route['".str_replace($f,$r,urlencode($k_en))."']='".$v_en."';";
$code_routers .= "
route['^en/".str_replace($f,$r,urlencode($k_en))."']='".$v_en."';";
				$code_configs .= "
config['custom_routers']['en']['".$v_en."']='".str_replace($f,$r,urlencode($k_en))."';";
}
			}
		}
	/*	if(isset($custom_arr['ar'])) {
			$ar_arrays = $custom_arr['ar'];
			foreach($ar_arrays as $k_ar => $v_ar) {
if(!empty($k_ar)) {
				$code_routers .= "
route['".str_replace($f,$r,urlencode($k_ar))."']='".$v_ar."';";
$code_routers .= "
route['^ar/".str_replace($f,$r,urlencode($k_ar))."']='".$v_ar."';";
				$code_configs .= "
config['custom_routers']['ar']['".$v_ar."']='".str_replace($f,$r,urlencode($k_ar))."';";
}
			}
		}*/
	}
	
	$code_routers .= "
/////////////////////////////////////////////////////////////////////////////////";
	$code_routers .= "
route['default_controller'] = 'home/index';";
	
	$code_routers .= "
route['back_office'] = 'back_office/home';";
	
	$code_routers .= "
route['404_override'] = 'error404';";
	
	$code_routers .= "
route['^ar/(.+)$'] = '$1';
//route['^fr/(.+)$'] = '$1';
route['^en/(.+)$'] = '$1';
//route['^fr$'] = route['default_controller'];
route['^ar$'] = route['default_controller'];
route['^en$'] = route['default_controller'];";
	
	//echo $code_routers;exit;

	$find = array("route[","row[");
	$replace = array('$route[','$row[');
	
	$find1 = array("config[");
	$replace1 = array('$config[');
	
	$path_routers = "./application/config/routes.php";
	$path_configs = "./application/config/url_routers.php";
	
	$code_routers = str_replace($find,$replace,$code_routers);
	$this->fct->write_file($path_routers,$code_routers);
	
	$code_configs = str_replace($find1,$replace1,$code_configs);
	$this->fct->write_file($path_configs,$code_configs);

	$this->session->set_userdata("success_message","Routes are published successfully..");
	redirect(site_url("back_office/routes"));
	
}
}