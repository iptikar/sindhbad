<?
$controllers='<?
class '.ucfirst($table_name).' extends CI_Controller{

public function __construct()
{
parent::__construct();
$this->table="'.$table_name.'";
$this->load->model("'.$table_name.'_m");
 $this->lang->load("admin"); 
}


public function index($order=""){
$this->session->unset_userdata("admin_redirect_url");
if ($this->acl->has_permission(\''.$table_name.'\',\'index\')){	
if($order == "")
$order ="sort_order";
$data["title"]="List '.str_replace("_"," ",$content_type).'";
$data["content"]="back_office/'.$table_name.'/list";
//
$this->session->unset_userdata("back_link");
//
if($this->input->post(\'show_items\')){
$show_items  =  $this->input->post(\'show_items\');
$this->session->set_userdata(\'show_items\',$show_items);
} elseif($this->session->userdata(\'show_items\')) {
$show_items  = $this->session->userdata(\'show_items\'); 	}
else {
$show_items = "25";	
}
$this->session->set_userdata(\'back_link\',\'index/\'.$order.\'/\'.$this->uri->segment(5));
$data["show_items"] = $show_items;
// pagination  start :
$count_news = $this->'.$table_name.'_m->getAll($this->table,$order);
$show_items = ($show_items == \'All\') ? $count_news : $show_items;
$this->load->library(\'pagination\');
$config[\'base_url\'] = site_url("back_office/'.$table_name.'/index/".$order);
$config[\'total_rows\'] = $count_news;
$config[\'per_page\'] = $show_items;
$config[\'uri_segment\'] = 5;
$this->pagination->initialize($config);
$data[\'info\'] = $this->'.$table_name.'_m->list_paginate($order,$config[\'per_page\'],$this->uri->segment(5));
// end pagination .
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}


public function add(){
if ($this->acl->has_permission(\''.$table_name.'\',\'add\')){	
$data["title"]="Add '.str_replace("_"," ",$content_type).'";
$data["content"]="back_office/'.$table_name.'/add";
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
} 

public function view($id,$obj = ""){
if ($this->acl->has_permission(\''.$table_name.'\',\'index\')){	
$data["title"]="View '.str_replace("_"," ",$content_type).'";
$data["content"]="back_office/'.$table_name.'/add";
$cond=array("id_'.$table_name.'"=>$id);
$data["id"]=$id;
$data["info"]=$this->fct->getonerecord($this->table,$cond);
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}

public function edit($id,$obj = ""){
if ($this->acl->has_permission(\''.$table_name.'\',\'edit\')){	
$data["title"]="Edit '.str_replace("_"," ",$content_type).'";
$data["content"]="back_office/'.$table_name.'/add";
$cond=array("id_'.$table_name.'"=>$id);
$data["id"]=$id;
$data["info"]=$this->fct->getonerecord($this->table,$cond);
$this->load->view("back_office/template",$data);
} else {
	redirect(site_url("home/dashboard"));
}
}

public function delete($id){
if ($this->acl->has_permission(\''.$table_name.'\',\'delete\')){
$_data=array("deleted"=>1,
"deleted_date"=>date("Y-m-d h:i:s"));
$this->db->where("id_'.$table_name.'",$id);
$this->db->update($this->table,$_data);
$this->session->set_userdata("success_message","Information was deleted successfully");
redirect(site_url("back_office/'.$table_name.'/".$this->session->userdata("back_link")));
} else {
	redirect(site_url("home/dashboard"));
}
}

public function delete_all(){
if ($this->acl->has_permission(\''.$table_name.'\',\'delete_all\')){
$cehcklist= $this->input->post("cehcklist");
$check_option= $this->input->post("check_option");
if($check_option == "delete_all"){
if(count($cehcklist) > 0){
for($i = 0; $i < count($cehcklist); $i++){
if($cehcklist[$i] != ""){
$_data=array("deleted"=>1,
"deleted_date"=>date("Y-m-d h:i:s"));
$this->db->where("id_'.$table_name.'",$cehcklist[$i]);
$this->db->update($this->table,$_data);	
}
} } 
$this->session->set_userdata("success_message","Informations were deleted successfully");
}
redirect(site_url("back_office/'.$table_name.'/".$this->session->userdata("back_link")));	
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
$this->db->where("id_'.$table_name.'",$sort[$i]);
$this->db->update($this->table,$_data);	
}
}

public function submit(){
$lang = "";
if($this->config->item("language_module")) {
	$lang = getFieldLanguage($this->lang->lang());
}
$data["title"]="Add / Edit '.str_replace("_"," ",$content_type).'";';

$controllers.='
$this->form_validation->set_rules("title".$lang, "TITLE", "trim|required");
$this->form_validation->set_rules("meta_title".$lang, "PAGE TITLE", "trim|max_length[65]");
$this->form_validation->set_rules("title_url".$lang, "TITLE URL", "trim");
$this->form_validation->set_rules("meta_description".$lang, "META DESCRIPTION", "trim|max_length[160]");
$this->form_validation->set_rules("meta_keywords".$lang, "META KEYWORDS", "trim|max_length[160]");
';
/*print '<pre>';
print_r($attrrr);exit;*/
foreach($attrrr as $val){
$d_lang = "";	
if($val['translated'] == 1) {
	$d_lang = ".\$lang";	
	//echo $d_lang;exit;
}
$controllers.='$this->form_validation->set_rules("'.str_replace(" ","_",$val["name"]).'"'.$d_lang.', "'.$val["name"].'"."(".$this->lang->lang().")", "'.$val["validation"].'");
';
}
$controllers.='if ($this->form_validation->run() == FALSE){
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
';
foreach($attrrr as $val){
$d_lang = "";	
if($val['translated'] == 1) {
	$d_lang = ".\$lang";	
}
// Date
if($val["type"]==1){
$controllers.='
$_data["'.str_replace(" ","_",$val["name"]).'"'.$d_lang.']=$this->fct->date_in_formate($this->input->post("'.str_replace(" ","_",$val["name"]).'"'.$d_lang.'));
';
}
// foreign_key
elseif($val["type"]==7){
$cond=array("id_content" => $val["foreign_key"]);
$content001 = $this->fct->getonecell("content_type","name",$cond);
if(str_replace(" ","_",$content001) == $table_name)
$frn="parent";
else
$frn=str_replace(" ","_",$content001);
$controllers.='$_data["id_'.$frn.'"]=$this->input->post("'.str_replace(" ","_",$val["name"]).'"'.$d_lang.'); 
';
}
// Image	
elseif($val["type"]==4){
$controllers.='if(!empty($_FILES["'.str_replace(" ","_",$val["name"]).'"'.$d_lang.']["name"])) {
if($this->input->post("id")!=""){
$cond_image=array("id_'.$table_name.'"=>$this->input->post("id"));
$old_image=$this->fct->getonecell("'.$table_name.'","'.str_replace(" ","_",$val["name"]).'"'.$d_lang.',$cond_image);
if(!empty($old_image) && file_exists(\'./uploads/'.$table_name.'/\'.$old_image)){
unlink("./uploads/'.$table_name.'/".$old_image);
';	
if($val["thumb"] == 1){
$controllers.='$sumb_val1=explode(",","'.$val["thumb_val"].'");
foreach($sumb_val1 as $key => $value){
if(file_exists("./uploads/'.$table_name.'/".$value."/".$old_image)){
unlink("./uploads/'.$table_name.'/".$value."/".$old_image);	 }							
} 
';
} 
$controllers.=' } }
$image1= $this->fct->uploadImage("'.str_replace(" ","_",$val["name"]).'"'.$d_lang.',"'.$table_name.'");
';
if($val["thumb"] == 1){
if($val["resize_status"] == 1){
$controllers.='$this->fct->createthumb1($image1,"'.$table_name.'","'.$val["thumb_val"].'");';	
} else {	
$controllers.='$this->fct->createthumb($image1,"'.$table_name.'","'.$val["thumb_val"].'");';
	}
}
$controllers.='$_data["'.str_replace(" ","_",$val["name"]).'"'.$d_lang.']=$image1;	
}
';
}
// File 
elseif($val["type"] == 5){
$controllers.='
if(!empty($_FILES["'.str_replace(" ","_",$val["name"]).'"'.$d_lang.']["name"])) {
if($this->input->post("id")!=""){
$cond_file=array("id_'.$table_name.'"=>$this->input->post("id"));
$old_file=$this->fct->getonecell("'.$table_name.'","'.str_replace(" ","_",$val["name"]).'"'.$d_lang.',$cond_file);
if(!empty($old_file))
unlink("./uploads/'.$table_name.'/".$old_file);	
}
$file1= $this->fct->uploadImage("'.str_replace(" ","_",$val["name"]).'"'.$d_lang.',"'.$table_name.'");
$_data["'.str_replace(" ","_",$val["name"]).'"'.$d_lang.']=$file1;	
}
';		
}
// others
else {
$controllers.='$_data["'.str_replace(" ","_",$val["name"]).'"'.$d_lang.']=$this->input->post("'.str_replace(" ","_",$val["name"]).'"'.$d_lang.');
';
}
// end foreach 
}
$controllers.='
	if($this->input->post("id")!=""){
	$_data["updated_date"]=date("Y-m-d h:i:s");
	$this->db->where("id_'.$table_name.'",$this->input->post("id"));
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
   	    redirect(site_url("back_office/'.$table_name.'/".$this->session->userdata("back_link")));
	}
	
}
	
}

public function delete_file(){
$field = $this->input->post(\'field\');
$image = $this->input->post(\'image\');
$id = $this->input->post(\'id\');
if(file_exists("./uploads/'.$table_name.'/".$image)){
unlink("./uploads/'.$table_name.'/".$image); }
$q=" SELECT thumb,thumb_val
FROM `content_type_attr`
WHERE id_content = (SELECT id_content FROM `content_type` WHERE name = \''.str_replace("_"," ",$table_name).'\')
AND name = \'".$field."\'";
$query=$this->db->query($q);
$res=$query->row_array();
if($res["thumb"] == 1){
$sumb_val1=explode(",",$res["thumb_val"]);
foreach($sumb_val1 as $key => $value){
if(file_exists("./uploads/'.$table_name.'/".$value."/".$image)){
unlink("./uploads/'.$table_name.'/".$value."/".$image);	 }								
} } 
$_data[$field]="";
$this->db->where("id_'.$table_name.'",$id);
$this->db->update("'.$table_name.'",$_data);
echo \'Done!\';
}

}';




?>