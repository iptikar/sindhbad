<?
class Fleet extends CI_Controller{

public function __construct()
{
parent::__construct();
$this->table="fleet";
$this->load->model("fleet_m");
 $this->lang->load("admin"); 
}


public function index($order=""){
$this->session->unset_userdata("admin_redirect_url");
if ($this->acl->has_permission('fleet','index')){	
if($order == "")
$order ="sort_order";
$data["title"]="List fleet";
$data["content"]="back_office/fleet/list";
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
$count_news = $this->fleet_m->getAll($this->table,$order);
$show_items = ($show_items == 'All') ? $count_news : $show_items;
$this->load->library('pagination');
$config['base_url'] = site_url("back_office/fleet/index/".$order);
$config['total_rows'] = $count_news;
$config['per_page'] = $show_items;
$config['uri_segment'] = 5;
$this->pagination->initialize($config);
$data['info'] = $this->fleet_m->list_paginate($order,$config['per_page'],$this->uri->segment(5));
// end pagination .
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}


public function add(){
if ($this->acl->has_permission('fleet','add')){	
$data["title"]="Add fleet";
$data["content"]="back_office/fleet/add";
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
} 

public function view($id,$obj = ""){
if ($this->acl->has_permission('fleet','index')){	
$data["title"]="View fleet";
$data["content"]="back_office/fleet/add";
$cond=array("id_fleet"=>$id);
$data["id"]=$id;
$data["info"]=$this->fct->getonerecord($this->table,$cond);
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}

public function edit($id,$obj = ""){
if ($this->acl->has_permission('fleet','edit')){	
$data["title"]="Edit fleet";
$data["content"]="back_office/fleet/add";
$cond=array("id_fleet"=>$id);
$data["id"]=$id;
$data["info"]=$this->fct->getonerecord($this->table,$cond);
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}

public function delete($id){
if ($this->acl->has_permission('fleet','delete')){
$_data=array("deleted"=>1,
"deleted_date"=>date("Y-m-d h:i:s"));
$this->db->where("id_fleet",$id);
$this->db->update($this->table,$_data);
$this->session->set_userdata("success_message","Information was deleted successfully");
redirect(site_url("back_office/fleet/".$this->session->userdata("back_link")));
} else {
	redirect(site_url("home/dashboard"));
}
}

public function delete_all(){
if ($this->acl->has_permission('fleet','delete_all')){
$cehcklist= $this->input->post("cehcklist");
$check_option= $this->input->post("check_option");
if($check_option == "delete_all"){
if(count($cehcklist) > 0){
for($i = 0; $i < count($cehcklist); $i++){
if($cehcklist[$i] != ""){
$_data=array("deleted"=>1,
"deleted_date"=>date("Y-m-d h:i:s"));
$this->db->where("id_fleet",$cehcklist[$i]);
$this->db->update($this->table,$_data);	
}
} } 
$this->session->set_userdata("success_message","Informations were deleted successfully");
}
redirect(site_url("back_office/fleet/".$this->session->userdata("back_link")));	
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
$this->db->where("id_fleet",$sort[$i]);
$this->db->update($this->table,$_data);	
}
}

public function submit(){
$lang = "";
if($this->config->item("language_module")) {
	$lang = getFieldLanguage($this->lang->lang());
}
$data["title"]="Add / Edit fleet";
$this->form_validation->set_rules("title".$lang, "TITLE", "trim|required");
$this->form_validation->set_rules("meta_title".$lang, "PAGE TITLE", "trim|max_length[65]");
$this->form_validation->set_rules("title_url".$lang, "TITLE URL", "trim");
$this->form_validation->set_rules("meta_description".$lang, "META DESCRIPTION", "trim|max_length[160]");
$this->form_validation->set_rules("meta_keywords".$lang, "META KEYWORDS", "trim|max_length[160]");
$this->form_validation->set_rules("category", "category"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("description", "description"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("daily_cost", "daily_cost"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("weekly_cost", "weekly_cost"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("monthly_cost", "monthly_cost"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("km_per_day", "km_per_day"."(".$this->lang->lang().")", "trim");

$this->form_validation->set_rules("image_alt", "image_alt", "trim");
$this->form_validation->set_rules("image_title", "image_title", "trim");

$this->form_validation->set_rules("characteristics", "characteristics"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("picture", "picture"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("is_offer", "is_offer"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("daily_offer_details", "daily_offer_details"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("weekly_offer_details", "weekly_offer_details"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("monthly_offer_details", "monthly_offer_details"."(".$this->lang->lang().")", "trim");
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
$_data["id_category"]=$this->input->post("category"); 
$_data["description"]=$this->input->post("description");
$_data["daily_cost"]=$this->input->post("daily_cost");
$_data["weekly_cost"]=$this->input->post("weekly_cost");
$_data["monthly_cost"]=$this->input->post("monthly_cost");
$_data["km_per_day"]=$this->input->post("km_per_day");
$_data["characteristics"]=$this->input->post("characteristics");
if(!empty($_FILES["picture"]["name"])) {
if($this->input->post("id")!=""){
$cond_image=array("id_fleet"=>$this->input->post("id"));
$old_image=$this->fct->getonecell("fleet","picture",$cond_image);
if(!empty($old_image) && file_exists('./uploads/fleet/'.$old_image)){
unlink("./uploads/fleet/".$old_image);
$sumb_val1=explode(",","255x127,700x417");
foreach($sumb_val1 as $key => $value){
if(file_exists("./uploads/fleet/".$value."/".$old_image)){
unlink("./uploads/fleet/".$value."/".$old_image);	 }							
} 
 } }
$image1= $this->fct->uploadImage("picture","fleet");
$this->fct->createthumb($image1,"fleet","255x127,700x417");$_data["picture"]=$image1;	
}
$_data["is_offer"]=$this->input->post("is_offer");
$_data["daily_offer_details"]=$this->input->post("daily_offer_details");
$_data["weekly_offer_details"]=$this->input->post("weekly_offer_details");
$_data["monthly_offer_details"]=$this->input->post("monthly_offer_details");

if(!empty($_FILES["picture_offer"]["name"])) {
if($this->input->post("id")!=""){
$cond_image=array("id_fleet"=>$this->input->post("id"));
$old_image=$this->fct->getonecell("fleet","picture_offer",$cond_image);
if(!empty($old_image) && file_exists('./uploads/fleet/'.$old_image)){
unlink("./uploads/fleet/".$old_image);
$sumb_val1=explode(",","255x127,700x417");
foreach($sumb_val1 as $key => $value){
if(file_exists("./uploads/fleet/".$value."/".$old_image)){
unlink("./uploads/fleet/".$value."/".$old_image);	 }							
} 
 } }
$image1= $this->fct->uploadImage("picture_offer","fleet");
$this->fct->createthumb($image1,"fleet","255x127,700x417");$_data["picture_offer"]=$image1;	
}
$not_fleet = 0;
if($this->input->post("not_fleet") == 1)
$not_fleet = 1;
$_data["not_fleet"] = $not_fleet;

	if($this->input->post("id")!=""){
	$_data["updated_date"]=date("Y-m-d h:i:s");
	$this->db->where("id_fleet",$this->input->post("id"));
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
   	    redirect(site_url("back_office/fleet/".$this->session->userdata("back_link")));
	}
	
}
	
}

public function delete_file(){
$field = $this->input->post('field');
$image = $this->input->post('image');
$id = $this->input->post('id');
if(file_exists("./uploads/fleet/".$image)){
unlink("./uploads/fleet/".$image); }
$q=" SELECT thumb,thumb_val
FROM `content_type_attr`
WHERE id_content = (SELECT id_content FROM `content_type` WHERE name = 'fleet')
AND name = '".$field."'";
$query=$this->db->query($q);
$res=$query->row_array();
if($res["thumb"] == 1){
$sumb_val1=explode(",",$res["thumb_val"]);
foreach($sumb_val1 as $key => $value){
if(file_exists("./uploads/fleet/".$value."/".$image)){
unlink("./uploads/fleet/".$value."/".$image);	 }								
} } 
$_data[$field]="";
$this->db->where("id_fleet",$id);
$this->db->update("fleet",$_data);
echo 'Done!';
}

}