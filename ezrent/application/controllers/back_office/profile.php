<?
class Profile extends CI_Controller{
public function __construct()
{
parent::__construct();
// Your own constructor code
//$this->headers='back_office/includes/header';
//$this->footer='back_office/includes/footer';
$this->fct->validateCorrelationID();

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
public function index(){
$data["title"]="Edit Profile";
$data["content"]="back_office/profile";
$data["id"] = $this->session->userdata('user_id');
$data["info"]=$this->fct->getonerow('user',array('id_user' => $this->session->userdata('user_id')));
$this->load->view('back_office/template',$data);
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
$this->form_validation->set_rules('name', 'Full Name', 'trim|required');
$this->form_validation->set_rules('username', 'User Name', 'trim|callback_validateusernameexistance[]');
if($this->input->post('password') != '') {
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
	}
$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|callback_validateemailexistance[]');
$this->form_validation->set_rules('address', 'address', 'trim');
//$this->form_validation->set_rules('how_did_you_find_us', 'How did you know about us', 'trim');
//$this->form_validation->set_rules('other', 'other', 'trim');
$this->form_validation->set_rules('phone', 'phone', 'trim');
$this->form_validation->set_rules('roles', 'Level', 'trim');
if ($this->form_validation->run() == FALSE){
	$data["title"]="Edit Profile";
$data["content"]="back_office/profile";
$data["id"] = $this->session->userdata('user_id');
$data["info"]=$this->fct->getonerow('user',array('id_user' => $this->session->userdata('user_id')));
$this->load->view('back_office/template',$data);	
}
else
{
$cond=array('username' => $this->input->post('username'), 'password'=>$this->input->post('password'));
$check_user=$this->fct->getonerow('user',$cond);
if(count($check_user) > 0 && $this->input->post('id') == '')
{
$data["title"]="Edit Profile";
$data["content"]="back_office/profile";
if($this->input->post('id')!=''){
$cond=array('id_user'=>$this->input->post('id'));
$data["id"]=$this->input->post('id');
$data["info"]=$this->fct->getonerecord('user',$cond); }
$this->session->set_userdata('error_message','This username and password are already exist .');
$this->load->view('back_office/template',$data);		
} else {
	$_data=array(
	'name'=>$this->input->post('name'),
	'username'=>$this->input->post('username'),
	//'password'=>$this->input->post('password'),
	'email'=>$this->input->post('email'),
	'phone'=>$this->input->post('phone'),
	'address'=>$this->input->post('address'));
	$_data["updated_date"]=date("Y-m-d h:i:s");
	if($this->input->post('password') != '') {
		$_data['password'] = md5($this->input->post('password'));
	}
	//$_data['company_name'] = $this->input->post("company_name");
	//$_data['vat_number'] = $this->input->post("vat_number");
	//$_data['salutation'] = $this->input->post("salutation");
	//$_data['first_name'] = $this->input->post("first_name");
	//$_data['surname'] = $this->input->post("surname");
	//if($this->input->post("how_did_you_find_us") != "")
	//$_data['how_did_you_find_us'] = $this->input->post("how_did_you_find_us");
	//else {
		//$_data['how_did_you_find_us'] = "other";
		//$_data['other'] = $this->input->post("other");
	//}
	$this->db->where('id_user ',$this->input->post('id'));
	$this->db->update('user',$_data);
	$this->session->set_userdata('success_message','Information was updated successfully');
	redirect(site_url('back_office/profile'));
}
}
}

}