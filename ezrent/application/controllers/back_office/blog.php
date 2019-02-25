<?
class Blog extends CI_Controller{

public function __construct()
{
parent::__construct();
$this->table="blog";
$this->load->model("blog_m");
 $this->lang->load("admin"); 
}


public function index($order=""){
    
$this->session->unset_userdata("admin_redirect_url");
if ($this->acl->has_permission('blog','index')){	
if($order == "")
$order ="sort_order";
$data["title"]="List blog";
$data["content"]="back_office/blog/list";
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
$count_news = $this->blog_m->getAll($this->table,$order);
$show_items = ($show_items == 'All') ? $count_news : $show_items;
$this->load->library('pagination');
$config['base_url'] = site_url("back_office/blog/index/".$order);
$config['total_rows'] = $count_news;
$config['per_page'] = $show_items;
$config['uri_segment'] = 5;
$this->pagination->initialize($config);
$data['info'] = $this->blog_m->list_paginate($order,$config['per_page'],$this->uri->segment(5));
// end pagination .
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}


public function add(){
if ($this->acl->has_permission('blog','add')){	
$data["title"]="Add blog";
$data["content"]="back_office/blog/add";
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
} 

public function view($id,$obj = ""){
if ($this->acl->has_permission('blog','index')){	
$data["title"]="View blog";
$data["content"]="back_office/blog/add";
$cond=array("id_blog"=>$id);
$data["id"]=$id;
$data["info"]=$this->fct->getonerecord($this->table,$cond);
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}

public function edit($id,$obj = ""){
if ($this->acl->has_permission('blog','edit')){	
$data["title"]="Edit blog";
$data["content"]="back_office/blog/add";
$cond=array("id_blog"=>$id);
$data["id"]=$id;
$data["info"]=$this->fct->getonerecord($this->table,$cond);
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}

public function delete($id){
if ($this->acl->has_permission('blog','delete')){
$_data=array("deleted"=>1,
"deleted_date"=>date("Y-m-d h:i:s"));
$this->db->where("id_blog",$id);
$this->db->update($this->table,$_data);
$this->session->set_userdata("success_message","Information was deleted successfully");
redirect(site_url("back_office/blog/".$this->session->userdata("back_link")));
} else {
	redirect(site_url("home/dashboard"));
}
}

public function delete_all(){
if ($this->acl->has_permission('blog','delete_all')){
$cehcklist= $this->input->post("cehcklist");
$check_option= $this->input->post("check_option");
if($check_option == "delete_all"){
if(count($cehcklist) > 0){
for($i = 0; $i < count($cehcklist); $i++){
if($cehcklist[$i] != ""){
$_data=array("deleted"=>1,
"deleted_date"=>date("Y-m-d h:i:s"));
$this->db->where("id_blog",$cehcklist[$i]);
$this->db->update($this->table,$_data);	
}
} } 
$this->session->set_userdata("success_message","Informations were deleted successfully");
}
redirect(site_url("back_office/blog/".$this->session->userdata("back_link")));	
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
$this->db->where("id_blog",$sort[$i]);
$this->db->update($this->table,$_data);	
}
}

public function submit(){
$lang = "";
if($this->config->item("language_module")) {
	$lang = getFieldLanguage($this->lang->lang());
}
$data["title"]="Add / Edit blog";
$this->form_validation->set_rules("title".$lang, "TITLE", "trim|required");
$this->form_validation->set_rules("meta_title".$lang, "PAGE TITLE", "trim|max_length[65]");
$this->form_validation->set_rules("title_url".$lang, "TITLE URL", "trim");
$this->form_validation->set_rules("meta_description".$lang, "META DESCRIPTION", "trim|max_length[160]");
$this->form_validation->set_rules("meta_keywords".$lang, "META KEYWORDS", "trim|max_length[160]");
$this->form_validation->set_rules("blog_date", "blog_date"."(".$this->lang->lang().")", "trim");

$this->form_validation->set_rules("image_alt", "image_alt", "trim");
$this->form_validation->set_rules("image_title", "image_title", "trim");

$this->form_validation->set_rules("description", "description"."(".$this->lang->lang().")", "trim|required");
$this->form_validation->set_rules("picture", "picture"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("is_popular", "is_popular"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("blog_category", "blog_category"."(".$this->lang->lang().")", "trim");
$this->form_validation->set_rules("blog_tags", "blog_tags"."(".$this->lang->lang().")", "trim");
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

$_data["blog_date"]=$this->fct->date_in_formate($this->input->post("blog_date"));
$_data["description"]=$this->input->post("description");
if(!empty($_FILES["picture"]["name"])) {
if($this->input->post("id")!=""){
$cond_image=array("id_blog"=>$this->input->post("id"));
$old_image=$this->fct->getonecell("blog","picture",$cond_image);
if(!empty($old_image) && file_exists('./uploads/blog/'.$old_image)){
unlink("./uploads/blog/".$old_image);
$sumb_val1=explode(",","354x188,736x329");
foreach($sumb_val1 as $key => $value){
if(file_exists("./uploads/blog/".$value."/".$old_image)){
unlink("./uploads/blog/".$value."/".$old_image);	 }							
} 
 } }
$image1= $this->fct->uploadImage("picture","blog");
$this->fct->createthumb($image1,"blog","354x188,736x329");$_data["picture"]=$image1;	
}
$_data["is_popular"]=$this->input->post("is_popular");
$_data["id_blog_category"]=$this->input->post("blog_category"); 
$_data["id_blog_tags"]=$this->input->post("blog_tags"); 

	if($this->input->post("id")!=""){
	$_data["updated_date"]=date("Y-m-d h:i:s");
	$this->db->where("id_blog",$this->input->post("id"));
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
   	    redirect(site_url("back_office/blog/".$this->session->userdata("back_link")));
	}
	
}
	
}

public function delete_file(){
$field = $this->input->post('field');
$image = $this->input->post('image');
$id = $this->input->post('id');
if(file_exists("./uploads/blog/".$image)){
unlink("./uploads/blog/".$image); }
$q=" SELECT thumb,thumb_val
FROM `content_type_attr`
WHERE id_content = (SELECT id_content FROM `content_type` WHERE name = 'blog')
AND name = '".$field."'";
$query=$this->db->query($q);
$res=$query->row_array();
if($res["thumb"] == 1){
$sumb_val1=explode(",",$res["thumb_val"]);
foreach($sumb_val1 as $key => $value){
if(file_exists("./uploads/blog/".$value."/".$image)){
unlink("./uploads/blog/".$value."/".$image);	 }								
} } 
$_data[$field]="";
$this->db->where("id_blog",$id);
$this->db->update("blog",$_data);
echo 'Done!';
}

}