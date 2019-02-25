<?
class B2b_submissions extends CI_Controller{

public function __construct()
{
parent::__construct();
$this->table="b2b_submissions";
$this->load->model("b2b_submissions_m");
 $this->lang->load("admin"); 
 $this->fct->validateCorrelationID();
}


public function index($order=""){
$this->session->unset_userdata("admin_redirect_url");
if ($this->acl->has_permission('b2b_submissions','index')){	
if($order == "")
$order ="sort_order";
$data["title"]="List b2b submissions";
$data["content"]="back_office/b2b_submissions/list";
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
$count_news = $this->b2b_submissions_m->getAll($this->table,$order);
$show_items = ($show_items == 'All') ? $count_news : $show_items;
$this->load->library('pagination');
$config['base_url'] = site_url("back_office/b2b_submissions/index/".$order);
$config['total_rows'] = $count_news;
$config['per_page'] = $this->config->item("admin_per_page");
$config['uri_segment'] = 5;
$this->pagination->initialize($config);
$data['info'] = $this->b2b_submissions_m->list_paginate($order,$config['per_page'],$this->uri->segment(5));
// end pagination .
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}


public function add(){
if ($this->acl->has_permission('b2b_submissions','add')){	
$data["title"]="Add b2b submissions";
$data["content"]="back_office/b2b_submissions/add";
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
} 

public function view($id,$obj = ""){
if ($this->acl->has_permission('b2b_submissions','index')){	
$data["title"]="View b2b submissions";
$data["content"]="back_office/b2b_submissions/add";
$cond=array("id_b2b_submissions"=>$id);
$data["id"]=$id;
$data["info"]=$this->fct->getonerecord($this->table,$cond);
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}

public function edit($id,$obj = ""){
if ($this->acl->has_permission('b2b_submissions','edit')){	
$data["title"]="Edit b2b submissions";
$data["content"]="back_office/b2b_submissions/add";
$cond=array("id_b2b_submissions"=>$id);
$data["id"]=$id;
$data["info"]=$this->fct->getonerecord($this->table,$cond);
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}

public function delete($id){
if ($this->acl->has_permission('b2b_submissions','delete')){
$_data=array("deleted"=>1,
"deleted_date"=>date("Y-m-d h:i:s"));
$this->db->where("id_b2b_submissions",$id);
$this->db->update($this->table,$_data);
$this->session->set_userdata("success_message","Information was deleted successfully");
redirect(site_url("back_office/b2b_submissions/".$this->session->userdata("back_link")));
} else {
	redirect(site_url("home/dashboard"));
}
}

public function delete_all(){
if ($this->acl->has_permission('b2b_submissions','delete_all')){
$cehcklist= $this->input->post("cehcklist");
$check_option= $this->input->post("check_option");
if($check_option == "delete_all"){
if(count($cehcklist) > 0){
for($i = 0; $i < count($cehcklist); $i++){
if($cehcklist[$i] != ""){
$_data=array("deleted"=>1,
"deleted_date"=>date("Y-m-d h:i:s"));
$this->db->where("id_b2b_submissions",$cehcklist[$i]);
$this->db->update($this->table,$_data);	
}
} } 
$this->session->set_userdata("success_message","Informations were deleted successfully");
}
redirect(site_url("back_office/b2b_submissions/".$this->session->userdata("back_link")));	
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
$this->db->where("id_b2b_submissions",$sort[$i]);
$this->db->update($this->table,$_data);	
}
}

public function submit(){
$lang = "";
if($this->config->item("language_module")) {
	$lang = getFieldLanguage($this->lang->lang());
}
$data["title"]="Add / Edit b2b submissions";
$this->form_validation->set_rules("title".$lang, "TITLE", "trim|required");
$this->form_validation->set_rules("meta_title".$lang, "PAGE TITLE", "trim|max_length[65]");
$this->form_validation->set_rules("title_url".$lang, "TITLE URL", "trim");
$this->form_validation->set_rules("meta_description".$lang, "META DESCRIPTION", "trim|max_length[160]");
$this->form_validation->set_rules("meta_keywords".$lang, "META KEYWORDS", "trim|max_length[160]");
$this->form_validation->set_rules("first_name", "first name"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("last_name", "last name"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("primary_phone", "primary phone"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("secondary_phone", "secondary phone"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("fax_number", "fax number"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("email", "email"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("country", "country"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("city", "city"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("address", "address"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("postal_code", "postal code"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("product_service_description", "product service description"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("details", "details"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("old_work", "old work"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("old_work_brief", "old work brief"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("company_name", "company name"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("company_website", "company website"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("business_type", "business type"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("number_of_employees", "number of employees"."(".$this->lang->lang().")", "trim");
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
$_data["first_name"]=$this->input->post("first_name");
$_data["last_name"]=$this->input->post("last_name");
$_data["primary_phone"]=$this->input->post("primary_phone");
$_data["secondary_phone"]=$this->input->post("secondary_phone");
$_data["fax_number"]=$this->input->post("fax_number");
$_data["email"]=$this->input->post("email");
$_data["country"]=$this->input->post("country");
$_data["city"]=$this->input->post("city");
$_data["address"]=$this->input->post("address");
$_data["postal_code"]=$this->input->post("postal_code");
$_data["product_service_description"]=$this->input->post("product_service_description");
$_data["details"]=$this->input->post("details");
$_data["old_work"]=$this->input->post("old_work");
$_data["old_work_brief"]=$this->input->post("old_work_brief");
$_data["company_name"]=$this->input->post("company_name");
$_data["company_website"]=$this->input->post("company_website");
$_data["business_type"]=$this->input->post("business_type");
$_data["number_of_employees"]=$this->input->post("number_of_employees");

	if($this->input->post("id")!=""){
	$_data["updated_date"]=date("Y-m-d h:i:s");
	$this->db->where("id_b2b_submissions",$this->input->post("id"));
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
   	    redirect(site_url("back_office/b2b_submissions/".$this->session->userdata("back_link")));
	}
	
}
	
}

public function delete_file(){
$field = $this->input->post('field');
$image = $this->input->post('image');
$id = $this->input->post('id');
if(file_exists("./uploads/b2b_submissions/".$image)){
unlink("./uploads/b2b_submissions/".$image); }
$q=" SELECT thumb,thumb_val
FROM `content_type_attr`
WHERE id_content = (SELECT id_content FROM `content_type` WHERE name = 'b2b submissions')
AND name = '".$field."'";
$query=$this->db->query($q);
$res=$query->row_array();
if($res["thumb"] == 1){
$sumb_val1=explode(",",$res["thumb_val"]);
foreach($sumb_val1 as $key => $value){
if(file_exists("./uploads/b2b_submissions/".$value."/".$image)){
unlink("./uploads/b2b_submissions/".$value."/".$image);	 }								
} } 
$_data[$field]="";
$this->db->where("id_b2b_submissions",$id);
$this->db->update("b2b_submissions",$_data);
echo 'Done!';
}

}