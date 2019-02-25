<?
class Roles extends CI_Controller{

public function __construct()
{
parent::__construct();
$this->table="roles";
$this->fct->validateCorrelationID();
}


public function index($order=""){
$this->session->unset_userdata("admin_redirect_url");
if ($this->acl->has_permission('roles','index')){
if($order == "")
$order ="sort_order";
$data["title"]="List Levels";
$data["content"]="back_office/roles/list";
$data["info"]=$this->fct->getAll($this->table,$order);
$this->load->view("back_office/template",$data);
} else {
$this->load->view('back_office/no_permssion');	
}
}

public function add(){
if ($this->acl->has_permission('roles','add')){
$data["title"]="Add Level";
$data["content"]="back_office/roles/add";
$this->load->view("back_office/template",$data);
} else {
$this->load->view('back_office/no_permssion');	
}
} 

public function manage($id = ""){
if ($this->acl->has_permission('roles','add')){
$data["title"]="Levels Resources";
$data["id"] = $id;
$data["roles"] = $this->fct->getAll('roles','sort_order');
$data["current_role"]=$this->fct->getonecell('roles','title',array('id_roles' => $id));
$data["resources"] = $this->fct->getAll('roles_resource','sort_order');
$data["content"]="back_office/roles/roles";
$data["footer_scripts"]="includes/inner_js/roles";
$this->load->view("back_office/template",$data);
} else {
$this->load->view('back_office/no_permssion');	
}
} 

public function edit($id=""){
if ($this->acl->has_permission('roles','edit')){
$data["title"]="Edit Level";
$data["content"]="back_office/roles/add";
$cond=array("id_roles"=>$id);
$data["id"]=$id;
$data["info"]=$this->fct->getonerecord($this->table,$cond);
$this->load->view("back_office/template",$data);
} else {
$this->load->view('back_office/no_permssion');	
}
}

public function delete($id=""){
if ($this->acl->has_permission('roles','delete')){
// check roles before delete 
/*$check_if = $this->fct->getAll_cond('roles','sort_order',array('id_roles' => $id ));				

if(count($check_if) > 0){
$this->session->set_userdata("error_message","Not Allowed to delete this Level.");
redirect(site_url("back_office/roles"));
exit;
}*/
$_data=array("deleted"=>1,
"deleted_date"=>date("Y-m-d h:i:s"));
$this->db->where("id_roles",$id);
$this->db->update($this->table,$_data);
$this->session->set_userdata("success_message","Information was deleted successfully");
redirect(site_url("back_office/roles"));
} else {
$this->load->view('back_office/no_permssion');	
}
}

public function delete_all(){
if ($this->acl->has_permission('roles','delete_all')){
$cehcklist= $this->input->post("cehcklist");
$check_option= $this->input->post("check_option");
if($check_option == "delete_all"){
if(count($cehcklist) > 0){
for($i = 0; $i < count($cehcklist); $i++){
if($cehcklist[$i] != ""){
$check_if = $this->fct->getAll_cond('employee','sort_order',array('id_roles' => $cehcklist[$i] ));				
if(count($check_if) > 0){
$this->session->set_userdata("error_message","Not Allowed to delete this / these Level(s).");
}	else {
$_data=array("deleted"=>1,
"deleted_date"=>date("Y-m-d h:i:s"));
$this->db->where("id_roles",$cehcklist[$i]);
$this->db->update($this->table,$_data);	
}

}
} } 
$this->session->set_userdata("success_message","Informations were deleted successfully");
}
redirect(site_url("back_office/roles"));
} else {
$this->load->view('back_office/no_permssion');	
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
$_data=array("sort_order"=>$i);
$this->db->where("id_roles",$sort[$i]);
$this->db->update($this->table,$_data);	
}
}

public function submit(){
$lang = "";
if($this->config->item("language_module")) {
	$lang = getFieldLanguage($this->lang->lang());
}
$data["title"]="Add / Edit Level";
$this->form_validation->set_rules("title", "title", "trim|required|unique[roles.title.".$this->input->post("id")."]");
if ($this->form_validation->run() == FALSE){
if($this->input->post("id")!=""){
$cond=array("id_roles"=>$this->input->post("id"));
$data["id"]=$this->input->post("id");
$data["info"]=$this->fct->getonerecord("roles",$cond); }
$data["content"]="back_office/roles/add";
$this->load->view("back_office/template",$data);
}
else
{
$_data["title"]=str_replace(' ','_',$this->input->post("title"));

	if($this->input->post("id")!=""){
	$_data["updated_date"]=date("Y-m-d h:i:s");
	$this->db->where("id_roles",$this->input->post("id"));
	$this->db->update($this->table,$_data);
	$this->session->set_userdata("success_message","Information was updated successfully");
	} else {
	$_data["created_date"]=date("Y-m-d h:i:s");
	$this->db->insert($this->table,$_data); 	
	$this->session->set_userdata("success_message","Information was inserted successfully");
	}
	redirect(site_url("back_office/roles"));
}
	
}



// submit roles
public function submit_roles(){
$count_resources = $this->input->post('count_resources');
$roles =$this->fct->getAll('roles','sort_order');
$roles_resource =$this->fct->getAll('roles_resource','sort_order');
$current_role = $this->input->post('current_role');
$resources = $this->input->post('resources');
$roles_options = array('view','add','edit','delete','delete_all','manage','export','print','activate');
/*echo "<hr />1).&nbsp;";
echo "<pre>";
print_r($roles);
echo "</pre>";
echo "<hr />2).&nbsp;"; echo "<pre>";
print_r($roles_resource); echo "</pre>";
echo "<hr />3).&nbsp;"; echo "<pre>";
print_r($roles_options); echo "</pre>";
echo "<hr />4).&nbsp;"; echo "<pre>";
print_r($resources); echo "</pre>";*/

for($i = 0; $i < $count_resources; $i++){
$cehcklist= $this->input->post("cehcklist".$i);
/*echo "<pre>";
print_r($cehcklist); echo "</pre>";*/

//echo $i."-";

if(empty($cehcklist) || $cehcklist == '' )
{ 	 
$cehcklist = array(); 
}
//if(count($cehcklist) > 0){
$title = $roles_resource[$i]["title"];
$index = explode(',',$roles_resource[$i]["view"]);
$add = explode(',',$roles_resource[$i]["add"]);
$edit = explode(',',$roles_resource[$i]["edit"]);
$delete = explode(',',$roles_resource[$i]["delete"]);
$delete_all = explode(',',$roles_resource[$i]["delete_all"]);
$manage = explode(',',$roles_resource[$i]["manage"]);
$export = explode(',',$roles_resource[$i]["export"]);
$print = explode(',',$roles_resource[$i]["print"]);
$activate = explode(',',$roles_resource[$i]["activate"]);
//print_r($index);
for($j = 0; $j < count($roles_options); $j++){
$key="";
$key1="";
$role_value = $roles_options[$j];

switch ($role_value){
	case "view":
	$stack = $index;
	break;
	case "add":
	$stack = $add;
	break;
	case "edit":
	$stack = $edit;
	break;
	case "delete":
	$stack = $delete;
	break;
	case "delete_all":
	$stack = $delete_all;
	break;
	case "manage":
	$stack = $manage;
	break;
	case "export":
	$stack = $export;
	break;
	case "print":
	$stack = $print;
	break;
	case "activate":
	$stack = $activate;
	break;
}
$key = array_search($role_value, $cehcklist);
$key1 = array_search($current_role, $stack);

if($key !== FALSE ){
if($key1 === FALSE){ 
array_push($stack, $current_role);	 }
}
else {
if($key1 !== FALSE){
unset($stack[$key1]); } 
}
$_data=array($role_value => join(',',$stack));
// update table 
$this->db->where('id_roles_resource',$roles_resource[$i]["id_roles_resource"]);
$this->db->update('roles_resource',$_data);
}
//}
}
// write in the acl page .
$roles_resource =$this->fct->getAll('roles_resource','sort_order');
$ghada='<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

$config[\'roles\'] = array(';
$i=0;
foreach($roles as $val1){ $i++;
$ghada.='\''.$val1["title"].'\''; 
if($i < count($roles)){
$ghada.=','; }
}
$ghada.=');

$config[\'permission\'] = array(
';
foreach($roles_resource as $val){
$ghada.='\''.$val["title"].'\' => array( 
\'index\' => array(\''.str_replace(",","','",$val["view"]).'\'),
\'add\' => array(\''.str_replace(",","','",$val["add"]).'\'),
\'edit\' => array(\''.str_replace(",","','",$val["edit"]).'\'),
\'delete\' => array(\''.str_replace(",","','",$val["delete"]).'\'),
\'delete_all\' => array(\''.str_replace(",","','",$val["delete_all"]).'\'),
\'manage\' => array(\''.str_replace(",","','",$val["manage"]).'\'),
\'export\' => array(\''.str_replace(",","','",$val["export"]).'\'),
\'print\' => array(\''.str_replace(",","','",$val["print"]).'\'),
\'activate\' => array(\''.str_replace(",","','",$val["activate"]).'\'),
),
';
}
$ghada .=');
?>';

$this->load->helper('file');
$path= './application/config/';
write_file($path.'acl.php', $ghada);
$this->session->set_userdata("success_message","Information was inserted successfully");
redirect(site_url("back_office/roles"));	
	
}

}