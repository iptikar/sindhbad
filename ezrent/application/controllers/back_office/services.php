<?
class Services extends CI_Controller{

public function __construct()
{
parent::__construct();
$this->table="services";
$this->load->model("services_m");
 $this->lang->load("admin"); 
}


public function index($order=""){
$this->session->unset_userdata("admin_redirect_url");
if ($this->acl->has_permission('services','index')){	
if($order == "")
$order ="sort_order";
$data["title"]="List services";
$data["content"]="back_office/services/list";
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
$count_news = $this->services_m->getAll($this->table,$order);
$show_items = ($show_items == 'All') ? $count_news : $show_items;
$this->load->library('pagination');
$config['base_url'] = site_url("back_office/services/index/".$order);
$config['total_rows'] = $count_news;
$config['per_page'] = $show_items;
$config['uri_segment'] = 5;
$this->pagination->initialize($config);
$data['info'] = $this->services_m->list_paginate($order,$config['per_page'],$this->uri->segment(5));
// end pagination .
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}


public function add(){
if ($this->acl->has_permission('services','add')){	
$data["title"]="Add services";
$data["content"]="back_office/services/add";
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
} 

public function view($id,$obj = ""){
if ($this->acl->has_permission('services','index')){	
$data["title"]="View services";
$data["content"]="back_office/services/add";
$cond=array("id_services"=>$id);
$data["id"]=$id;
$data["info"]=$this->fct->getonerecord($this->table,$cond);
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}

public function edit($id,$obj = ""){
if ($this->acl->has_permission('services','edit')){	
$data["title"]="Edit services";
$data["content"]="back_office/services/add";
$cond=array("id_services"=>$id);
$data["id"]=$id;
$data["info"]=$this->fct->getonerecord($this->table,$cond);
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}

public function delete($id){
if ($this->acl->has_permission('services','delete')){
$_data=array("deleted"=>1,
"deleted_date"=>date("Y-m-d h:i:s"));
$this->db->where("id_services",$id);
$this->db->update($this->table,$_data);
$this->session->set_userdata("success_message","Information was deleted successfully");
redirect(site_url("back_office/services/".$this->session->userdata("back_link")));
} else {
	redirect(site_url("home/dashboard"));
}
}

public function delete_all(){
if ($this->acl->has_permission('services','delete_all')){
$cehcklist= $this->input->post("cehcklist");
$check_option= $this->input->post("check_option");
if($check_option == "delete_all"){
if(count($cehcklist) > 0){
for($i = 0; $i < count($cehcklist); $i++){
if($cehcklist[$i] != ""){
$_data=array("deleted"=>1,
"deleted_date"=>date("Y-m-d h:i:s"));
$this->db->where("id_services",$cehcklist[$i]);
$this->db->update($this->table,$_data);	
}
} } 
$this->session->set_userdata("success_message","Informations were deleted successfully");
}
redirect(site_url("back_office/services/".$this->session->userdata("back_link")));	
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
$this->db->where("id_services",$sort[$i]);
$this->db->update($this->table,$_data);	
}
}

public function submit(){
$lang = "";
if($this->config->item("language_module")) {
	$lang = getFieldLanguage($this->lang->lang());
}
$data["title"]="Add / Edit services";
$this->form_validation->set_rules("title".$lang, "TITLE", "trim|required");
$this->form_validation->set_rules("meta_title".$lang, "PAGE TITLE", "trim|max_length[65]");
$this->form_validation->set_rules("title_url".$lang, "TITLE URL", "trim");
$this->form_validation->set_rules("meta_description".$lang, "META DESCRIPTION", "trim|max_length[160]");
$this->form_validation->set_rules("image_alt", "image_alt", "trim");
$this->form_validation->set_rules("image_title", "image_title", "trim");
$this->form_validation->set_rules("meta_keywords".$lang, "META KEYWORDS", "trim|max_length[160]");
$this->form_validation->set_rules("description", "description"."(".$this->lang->lang().")", "trim|required");
$this->form_validation->set_rules("picture", "picture"."(".$this->lang->lang().")", "trim");
if ($this->form_validation->run() == FALSE){
if($this->input->post("id")!="")
$this->edit($this->input->post("id"));
else
$this->add();
}
else
{	
$_data["id_user"]=$this->session->userdata("uid");
$_data["title".$lang]=$this->input->post("title".$lang);
$_data["image_title"]=$this->input->post("image_title");
$_data["image_alt"]=$this->input->post("image_alt");
$_data["meta_title".$lang]=$this->input->post("meta_title".$lang);
if($this->input->post("title_url".$lang) == "")
$title_url = $this->input->post("title".$lang);
else
$title_url = $this->input->post("title_url".$lang);
if($this->input->post("lang") == "ar") {
	$this->load->model("title_url_ar");
	$_data["title_url".$lang] = $this->title_url_ar->cleanURL($this->table,$title_url,$this->input->post("id"),"title_url".$lang);
}
else {
$_data["title_url".$lang]=$this->fct->cleanURL($this->table,url_title($title_url),$this->input->post("id"));
}
$_data["meta_description".$lang]=$this->input->post("meta_description".$lang);
$_data["meta_keywords".$lang]=$this->input->post("meta_keywords".$lang);	
$_data["description"]=$this->input->post("description");
if(!empty($_FILES["picture"]["name"])) {
if($this->input->post("id")!=""){
$cond_image=array("id_services"=>$this->input->post("id"));
$old_image=$this->fct->getonecell("services","picture",$cond_image);
if(!empty($old_image) && file_exists('./uploads/services/'.$old_image)){
unlink("./uploads/services/".$old_image);
$sumb_val1=explode(",","382x166");
foreach($sumb_val1 as $key => $value){
if(file_exists("./uploads/services/".$value."/".$old_image)){
unlink("./uploads/services/".$value."/".$old_image);	 }							
} 
 } }
$image1= $this->fct->uploadImage("picture","services");
$this->fct->createthumb($image1,"services","382x166");$_data["picture"]=$image1;	
}

	if($this->input->post("id")!=""){
	$_data["updated_date"]=date("Y-m-d h:i:s");
	$this->db->where("id_services",$this->input->post("id"));
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
   	    redirect(site_url("back_office/services/".$this->session->userdata("back_link")));
	}
	
}
	
}

public function delete_file(){
$field = $this->input->post('field');
$image = $this->input->post('image');
$id = $this->input->post('id');
if(file_exists("./uploads/services/".$image)){
unlink("./uploads/services/".$image); }
$q=" SELECT thumb,thumb_val
FROM `content_type_attr`
WHERE id_content = (SELECT id_content FROM `content_type` WHERE name = 'services')
AND name = '".$field."'";
$query=$this->db->query($q);
$res=$query->row_array();
if($res["thumb"] == 1){
$sumb_val1=explode(",",$res["thumb_val"]);
foreach($sumb_val1 as $key => $value){
if(file_exists("./uploads/services/".$value."/".$image)){
unlink("./uploads/services/".$value."/".$image);	 }								
} } 
$_data[$field]="";
$this->db->where("id_services",$id);
$this->db->update("services",$_data);
echo 'Done!';
}

}