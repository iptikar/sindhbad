<?
class Users extends CI_Controller{
public function __construct()
{
parent::__construct();
// Your own constructor code
//$this->headers='back_office/includes/header';
//$this->footer='back_office/includes/footer';
$this->fct->validateCorrelationID();
}


public function index(){
$data["title"]="List Users";
$data["content"]="back_office/users";
$cond = array();
$like = array();
if($this->input->get("user_id") != "") {
	$cond['user.id_user'] =  $this->input->get("user_id");
}
if($this->input->get("first_name") != "") {
	$like['UPPER(user.first_name)'] =  strtoupper($this->input->get("first_name"));
}
if($this->input->get("surname") != "") {
	$like['UPPER(user.surname)'] =  strtoupper($this->input->get("surname"));
}
if($this->input->get("user_email") != "") {
	$like['UPPER(user.email)'] =  strtoupper($this->input->get("user_email"));
}
if($this->input->get("role") != "") {
	$cond['user.id_roles'] =  $this->input->get("role");
}
if($this->input->get("discount_group") != "") {
	if($this->input->get("discount_group") == 'not_assigned')
	$cond['user.id_discount_groups'] =  0;
	else
	$cond['user.id_discount_groups'] =  $this->input->get("discount_group");
}
if($this->input->get("status") != "") {
	if($this->input->get("status") == 'blocked')
	$cond['user.status'] =  0;
	else
	$cond['user.status'] =  1;
}

$url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$this->session->set_userdata('admin_redirect_link',$url);
$data["info"]=$this->fct->getUsers($cond,$like);
$this->load->view('back_office/template',$data);
}

public function add(){
$data["title"]="Add New User";
$data["content"]="back_office/add_users";
$data["roles"] = $this->fct->getAll('roles','sort_order');
$this->load->view('back_office/template',$data);
}
public function edit($id){
if(($id == 1 || $id == 2) && $this->session->userdata('level') == 0 )
redirect(site_url('back_office/users'));
$data["title"]="Edit User";
$data["content"]="back_office/add_users";
$cond=array('id_user'=>$id);
$data["id"]=$id;
$data["info"]=$this->fct->getonerecord('user',$cond);
$data["roles"] = $this->fct->getAll('roles','sort_order');
$this->load->view('back_office/template',$data);	
}

public function priviledge($id){
$data["title"]="Set User's Privileges";
$data["content"]="back_office/priviledge";
$data["id"]=$id;
$data["attr"]= $this->fct->getAll('content_type','sort_order');
$this->load->view('back_office/template',$data);	
}
public function validateemailexistance()
{
	$email = $this->input->post('email');
	$cond = array('email'=>$email);
	if($this->input->post('id')!=''){
		$cond['id_user !='] = $this->input->post('id');
	}
	$check = $this->fct->getonerow('user',$cond);
	if(empty($check)) {
		return true;
	}
	else {
		$this->form_validation->set_message('validateemailexistance','Email exists, please try another email.');
		return false;
	}
}
public function validateusernameexistance()
{
	$username = $this->input->post('username');
	$cond = array('username'=>$username);
	if($this->input->post('id')!=''){
		$cond['id_user !='] = $this->input->post('id');
	}
	$check = $this->fct->getonerow('user',$cond);
	if(empty($check)) {
		return true;
	}
	else {
		$this->form_validation->set_message('validateusernameexistance','Username exists, please try another username.');
		return false;
	}
}
public function submit(){
$lang = "";
if($this->config->item("language_module")) {
	$lang = getFieldLanguage($this->lang->lang());
}
//$this->form_validation->set_rules('company_name', 'Company Name', 'trim|required');
//$this->form_validation->set_rules('vat_number', 'Vat Number', 'trim');
//$this->form_validation->set_rules('salutation', 'Salutation', 'trim|required');
//$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
//$this->form_validation->set_rules('surname', 'Surame', 'trim|required');
$this->form_validation->set_rules('name', 'name', 'trim|required');
$this->form_validation->set_rules('username', 'User Name', 'trim|callback_validateusernameexistance[]');
if($this->input->post('id')!=''){
	if($this->input->post('password') != '') {
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[5]|max_length[15]|matches[password]');
	}
}
else {
	$this->form_validation->set_rules('password', 'Password', 'trim|required');
	$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
}

$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|callback_validateemailexistance[]');
$this->form_validation->set_rules('address', 'address', 'trim');
//$this->form_validation->set_rules('how_did_you_find_us', 'How did you know about us', 'trim');
//$this->form_validation->set_rules('other', 'other', 'trim');
$this->form_validation->set_rules('phone', 'phone', 'trim');
$this->form_validation->set_rules('roles', 'Level', 'trim');
//$this->form_validation->set_rules('discount_group', 'Discount Group', 'trim');
$this->form_validation->set_rules('status', 'Status', 'trim');

if ($this->form_validation->run() == FALSE){
$data["title"]="Add / Edit New User";
$data["content"]="back_office/add_users";
if($this->input->post('id')!=''){
$cond=array('id_user'=>$this->input->post('id'));
$data["id"]=$this->input->post('id');
$data["info"]=$this->fct->getonerecord('user',$cond); }
$data["roles"] = $this->fct->getAll('roles','sort_order');
$this->load->view('back_office/template',$data);	
}
else
{
	$_data=array(
	'name'=>$this->input->post('name'),
	'username'=>$this->input->post('username'),
	//'password'=>$this->input->post('password'),
	'status'=>$this->input->post('status'),
	'email'=>$this->input->post('email'),
	'phone'=>$this->input->post('phone'),
	'address'=>$this->input->post('address'),
	'id_discount_groups'=>$this->input->post('discount_group'),
	'id_roles' => $this->input->post('roles'));
	if($this->input->post('id')!=''){
		if($this->input->post('password') != '') {
			$_data['password'] = md5($this->input->post('password'));
		}
	}
	else {
		$_data['password'] = md5($this->input->post('password'));
	}
	//$_data['company_name'] = $this->input->post("company_name");
	//$_data['vat_number'] = $this->input->post("vat_number");
	//$_data['salutation'] = $this->input->post("salutation");
	//$_data['first_name'] = $this->input->post("first_name");
	//$_data['surname'] = $this->input->post("surname");
	/*if($this->input->post("how_did_you_find_us") != "")
	$_data['how_did_you_find_us'] = $this->input->post("how_did_you_find_us");
	else {
		$_data['how_did_you_find_us'] = "other";
		$_data['other'] = $this->input->post("other");
	}*/

	if($this->input->post('id')!=''){
	$_data["updated_date"]=date("Y-m-d h:i:s");
	$this->db->where('id_user ',$this->input->post('id'));
	$this->db->update('user',$_data);
	$new_id = $this->input->post('id');
	$this->session->set_userdata('success_message','Information was updated successfully');
	if(isset($_POST['inform_client']) && $_POST['inform_client'] == 1) {
		$user = $this->fct->getonerow("user",array("id_user"=>$new_id));
		if($this->input->post('status') == 1) {
			$id = 8;
		}
		else {
			$id = 7;
		}
		$this->load->model("send_emails");
		$this->send_emails->inform_client($user,$id);
	}
	} else {
		$_data["created_date"]=date("Y-m-d h:i:s");
		$this->db->insert('user',$_data);
	 	$new_id = $this->db->insert_id();
		$this->session->set_userdata('success_message','Information was inserted successfully');
	}
	if($this->session->userdata('admin_redirect_link') != "")
	redirect($this->session->userdata('admin_redirect_link'));
	else
	redirect(site_url('back_office/users'));
}
}

public function delete($id){
	
	/*$_data=array('deleted'=>1,
	'deleted_date'=>date("Y-m-d h:i:s"));
	$this->db->where('id_user',$id);
	$this->db->update('user',$_data);*/
	$this->deleteUser($id);
	$this->session->set_userdata('success_message','Information was deleted successfully');
	redirect(site_url('back_office/users'));
	
}
	
public function delete_all(){
$cehcklist= $this->input->post('cehcklist');
$check_option= $this->input->post('check_option');

if($check_option == "delete_all"){
if(count($cehcklist) > 0){
for($i = 0; $i < count($cehcklist); $i++){
	if($cehcklist[$i] != ''){
	/*$_data=array('deleted'=>1,
	'deleted_date'=>date("Y-m-d h:i:s"));
	$this->db->where('id_user',$cehcklist[$i]);
	$this->db->update('user',$_data);	*/
	$this->deleteUser($cehcklist[$i]);
	}
} } 
$this->session->set_userdata('success_message','Informations were deleted successfully');
}
	redirect(site_url('back_office/users'));	
}
function deleteUser($id_user)
{
	$cond = array("id_user"=>$id_user);
	$this->db->delete("user",$cond);
	$q = "DELETE FROM line_items WHERE id_orders IN (SELECT id_orders FROM orders WHERE id_user = ".$id_user.")";
	$this->db->query($q);
	$this->db->delete("orders",$cond);
	$this->db->delete("address_book",$cond);
	$this->db->delete("compare_products",$cond);
	$this->db->delete("favorites",$cond);
	$this->db->delete("shopping_cart",$cond);
	return TRUE;
}
public function sorted(){
$sort=array();
foreach($this->input->get('table-1') as $key => $val){
if(!empty($val))
$sort[]=$val;	
}
$i=0;
for($i=0; $i<count($sort); $i++){
$_data=array('sort_order'=>$i);
$this->db->where('id_user',$sort[$i]);
$this->db->update('user',$_data);	
}
}


public function submit_privi(){
$id=$this->input->post('id');
$cehcklist= $this->input->post('cehcklist');
$content_type = $this->fct->getAll_1('content_type','sort_order');
if(count($cehcklist) > 0){
for($j = 0; $j < 11; $j++){
//if($cehcklist[$i] != ''){

 //$j= $cehcklist[$i];
 $section = $this->input->post('section'.$j);
 $read = $this->input->post('read'.$j);
 $write = $this->input->post('write'.$j);
 $delete = $this->input->post('delete'.$j);

$_data=array(
'read_p'=>$read,
'write_p'=>$write,
'delete_p'=>$delete);
$this->db->where("`id_user` = '".$id."' AND `id_content` = '".$section."'");
$this->db->update('priviledge',$_data);	
//}
} 
$this->session->set_userdata('success_message','Informations were updated successfully');	
} 
redirect(site_url('back_office/users/priviledge/'.$id));	
}

}