<?
class Images extends CI_Controller{

public function __construct()
{
parent::__construct();
$this->table="images";
$this->fct->validateCorrelationID();
}


public function index($order=""){
$this->session->unset_userdata("admin_redirect_url");
if($order == "")
$order ="sort_order";
$data["title"]="List images";
$data["content"]="back_office/images/list";
$data["info"]=$this->fct->getAll($this->table,$order);
$this->load->view("back_office/template",$data);
}

public function add(){
$data["title"]="Add images";
$data["content"]="back_office/images/add";
$this->load->view("back_office/template",$data);
} 

public function edit($id){
$data["title"]="Edit images";
$data["content"]="back_office/images/add";
$cond=array("id_images"=>$id);
$data["id"]=$id;
$data["info"]=$this->fct->getonerecord($this->table,$cond);
$this->load->view("back_office/template",$data);
}

public function delete($id){
$_data=array("deleted"=>1,
"deleted_date"=>date("Y-m-d h:i:s"));
$this->db->where("id_images",$id);
$this->db->update($this->table,$_data);
$this->session->set_userdata("success_message","Information was deleted successfully");
redirect(site_url("back_office/images"));
}

public function delete_all(){
$cehcklist= $this->input->post("cehcklist");
$check_option= $this->input->post("check_option");
if($check_option == "delete_all"){
if(count($cehcklist) > 0){
for($i = 0; $i < count($cehcklist); $i++){
if($cehcklist[$i] != ""){
$_data=array("deleted"=>1,
"deleted_date"=>date("Y-m-d h:i:s"));
$this->db->where("id_images",$cehcklist[$i]);
$this->db->update($this->table,$_data);	
}
} } 
$this->session->set_userdata("success_message","Informations were deleted successfully");
}
redirect(site_url("back_office/images"));	
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
$this->db->where("id_images",$sort[$i]);
$this->db->update($this->table,$_data);	
}
}

public function submit(){
$lang = "";
if($this->config->item("language_module")) {
	$lang = getFieldLanguage($this->lang->lang());
}
$data["title"]="Add / Edit images";
$this->form_validation->set_rules("title", "title", "trim|required");
$this->form_validation->set_rules("image", "image", "trim");
if ($this->form_validation->run() == FALSE){
if($this->input->post("id")!=""){
$cond=array("id_images"=>$this->input->post("id"));
$data["id"]=$this->input->post("id");
$data["info"]=$this->fct->getonerecord("images",$cond); }
$data["content"]="back_office/images/add";
$this->load->view("back_office/template",$data);
}
else
{
$_data["title"]=$this->input->post("title");
if(!empty($_FILES["image"]["name"])) {
if($this->input->post("id")!=""){
$cond_image=array("id_images"=>$this->input->post("id"));
$old_image=$this->fct->getonecell("images","image",$cond_image);
if(!empty($old_image) && file_exists('./uploads/images/'.$old_image)){
unlink("./uploads/images/".$old_image);
 } }
$image1= $this->fct->uploadImage("image","images");
$_data["image"]=$image1;	
}

	if($this->input->post("id")!=""){
	$_data["updated_date"]=date("Y-m-d h:i:s");
	$this->db->where("id_images",$this->input->post("id"));
	$this->db->update($this->table,$_data);
	$this->session->set_userdata("success_message","Information was updated successfully");
	} else {
	$_data["created_date"]=date("Y-m-d h:i:s");
	$this->db->insert($this->table,$_data); 	
	$this->session->set_userdata("success_message","Information was inserted successfully");
	}
	redirect(site_url("back_office/images"));
}
	
}

public function delete_image($field,$image,$id){
if(file_exists("./uploads/images/".$image)){
unlink("./uploads/images/".$image); }
$q=" SELECT thumb,thumb_val
FROM `content_type_attr`
WHERE id_content = (SELECT id_content FROM `content_type` WHERE name = 'images')
AND name = '".$field."'";
$query=$this->db->query($q);
$res=$query->row_array();
if(isset($res["thumb"]) && $res["thumb"] == 1){
$sumb_val1=explode(",",$res["thumb_val"]);
foreach($sumb_val1 as $key => $value){
if(file_exists("./uploads/images/".$value."/".$image)){
unlink("./uploads/images/".$value."/".$image);	 }								
} } 
$_data[$field]="";
$this->db->where("id_images",$id);
$this->db->update("images",$_data);
redirect(site_url("back_office/images"));	
}

}