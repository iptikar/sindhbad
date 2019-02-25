<?
class Pages extends CI_Controller{

public function __construct()
{
parent::__construct();
$this->table="dynamic_pages";
$this->fct->validateCorrelationID();
}


public function index(){
$data["title"]="List Pages";
$data["content"]="back_office/pages/list";
$data["info"]=$this->fct->getAll($this->table,'sort_order');
$this->load->view('back_office/template',$data);
}

public function add(){
$data["title"]="Add Page";
$data["content"]="back_office/pages/add";
$this->load->view('back_office/template',$data);
} 

public function edit($id,$obj = ''){
$data["title"]="Edit Page";
$data["content"]="back_office/pages/add";
$cond=array('id_dynamic_pages'=>$id);
$data["id"]=$id;
$data["info"]=$this->fct->getonerecord($this->table,$cond);
if($this->config->item("language_module")) {
  $data["language"]=$this->fct->getonerecord("languages",array("index"=>$data["info"]["lang"]));
  $data["lang"] = $data["info"]["lang"];
  if($obj == 'translate') {
	  $data["id_parent_translate"] = $this->translation_lib->getDefaultRowLangID($this->table,$id,TRUE);
  }
}
$this->load->view('back_office/template',$data);
}

public function delete($id){
$_data=array('deleted'=>1,
'deleted_date'=>date("Y-m-d h:i:s"));
$this->db->where('id_dynamic_pages',$id);
$this->db->update($this->table,$_data);
if($this->config->item("language_module")) {
	$this->db->where("id_parent_translate",$id);
	$this->db->update($this->table,$_data);
}
$this->session->set_userdata('success_message','Information was deleted successfully');
redirect(site_url('back_office/pages'));
}

public function delete_all(){
$cehcklist= $this->input->post('cehcklist');
$check_option= $this->input->post('check_option');
if($check_option == "delete_all"){
if(count($cehcklist) > 0){
for($i = 0; $i < count($cehcklist); $i++){
if($cehcklist[$i] != ''){
$_data=array('deleted'=>1,
'deleted_date'=>date("Y-m-d h:i:s"));
$this->db->where('id_dynamic_pages',$cehcklist[$i]);
$this->db->update($this->table,$_data);	
if($this->config->item("language_module")) {
	$this->db->where("id_parent_translate",$cehcklist[$i]);
	$this->db->update($this->table,$_data);
}
}
} } 
$this->session->set_userdata('success_message','Informations were deleted successfully');
}
redirect(site_url('back_office/pages'));	
}

public function sorted(){
$sort=array();
foreach($this->input->get('table-1') as $key => $val){
if(!empty($val))
$sort[]=$val;	
}
$i=0;
for($i=0; $i<count($sort); $i++){
$_data=array('sort_order'=>$i+1);
$this->db->where('id_dynamic_pages',$sort[$i]);
$this->db->update($this->table,$_data);
if($this->config->item("language_module")) {
	$this->db->where("id_parent_translate",$sort[$i]);
	$this->db->update($this->table,$_data);
}		
}
}


public function submit(){
$lang = "";
if($this->config->item("language_module")) {
	$lang = getFieldLanguage($this->lang->lang());
}
$this->form_validation->set_rules('title', 'Page Title', 'trim|required');
$this->form_validation->set_rules("meta_title", "PAGE TITLE", "trim|max_length[65]");
$this->form_validation->set_rules("title_url", "TITLE URL", "trim");
$this->form_validation->set_rules("meta_description", "META DESCRIPTION", "trim|max_length[160]");
$this->form_validation->set_rules("meta_keywords", "META KEYWORDS", "trim|max_length[160]");
$this->form_validation->set_rules('description', 'Description', 'trim');

if ($this->form_validation->run() == FALSE){


$data["title"]="Add Page";
if($this->input->post('id')!=''){
$cond=array('id_dynamic_pages'=>$this->input->post('id'));
$data["id"]=$this->input->post('id');
$data["info"]=$this->fct->getonerecord($this->table,$cond);
}
	
$data["content"]="back_office/pages/add";
$this->load->view('back_office/template',$data);
}
else
{
	if($this->config->item("language_module")) {
$_data["lang"]=$this->input->post("lang");
}
$_data["id_user"]=$this->session->userdata("uid");
if($this->config->item("language_module") && isset($_POST["id_parent_translate"])) {
	if($this->input->post("id") != "" && $this->input->post("id") == $this->input->post("id_parent_translate")) {
		$_data["id_parent_translate"] = 0;
	}
	else {
		$_data["id_parent_translate"]=$this->input->post("id_parent_translate");
	}
}
$_data["title"]=$this->input->post("title");
$_data["meta_title"]=$this->input->post("meta_title");
if($this->input->post("title_url") == "")
$title_url = $this->input->post("title");
else
$title_url = $this->input->post("title_url");
$_data["title_url"]=$this->fct->cleanURL("dynamic_pages",url_title($title_url),$this->input->post("id"));
$_data["meta_description"]=$this->input->post("meta_description");
$_data["meta_keywords"]=$this->input->post("meta_keywords");
$_data["description"]=$this->input->post("description");

	if($this->input->post('id')!=''){
	$_data["updated_date"]=date("Y-m-d h:i:s");
	$this->db->where('id_dynamic_pages',$this->input->post('id'));
	$this->db->update($this->table,$_data);
	$this->session->set_userdata('success_message','Information was updated successfully');
	} else {
	$_data["created_date"]=date("Y-m-d h:i:s");
	if($this->config->item("language_module") && isset($_POST["id_parent_translate"])) {
		$parent_record = $this->fct->getonerow($this->table,array("id_".$this->table=>$_POST["id_parent_translate"]));
		$_data["sort_order"]= $parent_record["sort_order"];
	}
	$this->db->insert($this->table,$_data); 	
	$this->session->set_userdata('success_message','Information was inserted successfully');
	}
	
	if($this->config->item("language_module") && isset($_POST["id_parent_translate"])) {
		redirect(site_url("back_office/translation/section/".$this->table."/".$this->input->post("id_parent_translate")));
	}
	else {
		redirect(site_url('back_office/pages'));
	}
}
}


}