<?
class Home extends CI_Controller{
public function __construct()
{
parent::__construct();
}

public function index(){
if(!$this->session->userdata('user_id'))	
$this->load->view('back_office/login');
else
redirect(site_url('back_office/home/dashboard'));
}

public function login_validate(){
$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[15]|xss_clean');
$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[5]|max_length[15]|xss_clean');
if ($this->form_validation->run() == FALSE){
 $this->load->view('back_office/login'); 
}else{
$username= $this->input->post('username');
$password=$this->input->post('pass');
// check in user table 
$this->db->where('username',$username);
$this->db->where('password',md5($password));
$this->db->where('deleted',0);
$query=$this->db->get('user');
$user=$query->row_array();
if($query->num_rows() >0 ){
$cid = $this->fct->GenerateCorrelationID();
$u['correlation_id'] = $cid;
$this->db->where("id_user",$user['id_user']);
$this->db->update("user",$u);
$this->session->set_userdata('cid' , $cid);
$role = $this->fct->getonecell('roles','title',array('id_roles' => $user["id_roles"]));
$this->session->set_userdata('user_id',$user["id_user"]);
$this->session->set_userdata('user_name',$user["first_name"].' '.$user["surname"]);
$this->session->set_userdata('level',$user["level"]);
$this->session->set_userdata('uid',$user["id_user"]);
$this->session->set_userdata('roles' , array($role));
$this->session->set_userdata('login_date',date("d M Y - h:i:s A"));
redirect(site_url('back_office/home/dashboard'));	
} 
else{
$this->session->set_userdata('login_error','check your username or password .');
$this->load->view('back_office/login'); 	
}


}
}
public function dashboard(){
$data["title"] = "Dashboard";
$data["content"]="back_office/dashboard";
$data["content_type"]=$this->fct->getAll('content_type','sort_order'); 
$data["messages"]=$this->fct->getAll_orderdate('contactform');
$data["new_message"]=$this->fct->get_unreaded_emails();
$data["newsletter_emails"]=$this->fct->getAll_orderdate('newsletter');
$data["users"]=$this->fct->getAll_orderdate('user');
$this->load->view('back_office/template', $data);	
}

public function complete_todo($id){
$cond=array('id_do'=>$id);
$do_it=$this->fct->getonerow('do_it',$cond);
echo '<a class="cur" onclick="completed('.$id.');">';
if($do_it["completed"] == 1){
$action = 0;
echo "<span class='label label-important'>Pending</span>";
}
else{
echo "<span class='label label-success'>Completed</span>";
$action = 1;
}
echo '</a>';
$_data["completed"] = $action ; 
$this->db->where('id_do',$id);
$this->db->update('do_it',$_data);
}

public function do_it_pop_up($id){
$cond=array('id_do'=>$id);
$do_it=$this->fct->getonerow('do_it',$cond);
?>
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel"><?= $do_it["title"]; ?>&nbsp;&nbsp;<small><?= $do_it["Deadline"]; ?></small></h3>
</div>
<div class="modal-body" id="modal-body">
<p><?= $do_it["description"]; ?></p>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
</div>
<?
//echo '<div style="height:auto;"><h2 style="font-size:160%; font-weight:bold; margin:10px 0;">'.$do_it["title"].'&nbsp;&nbsp;<span style="color:#AE9A62">Deadline:'.$do_it["Deadline"].'</span> </h2>
//<p>'.$do_it["description"].'</p></div>';	
}

public function message_popup($id){
$cond=array('id'=>$id);
$do_it=$this->fct->getonerow('contactform',$cond);
echo '<div style="height:auto;"><h2 style="font-size:160%; font-weight:bold; margin:10px 0;">'.$do_it["subject"].'&nbsp;&nbsp;<span style="color:#AE9A62">Date:'.$do_it["created_date"].'</span> </h2>
<p>'.$do_it["message"].'</p></div>';	
}

public function logout(){
$this->session->unset_userdata('user_id');
$this->session->unset_userdata('user_name');
$this->session->unset_userdata('cid');
redirect(site_url('back_office/home'));	 
}

///////////////////////////////////////////////////////////////////////////////////////////////////

public function validate_email()
	{
		$email = $this->input->post('email');
		$cond = array(
			'email'=>$email
		);
		$user = $this->fct->getonerow('user',$cond);
		//print_r($user);exit;
		if(empty($user)) {
			$this->form_validation->set_message('validate_email',"Account does not exist.");
			return false;
		}
		else {
			if($user['status'] == 0) {
				$this->form_validation->set_message('validate_email',"Account is blocked.");
				return false;
			}
			else {
				$this->load->model('send_emails');
				$request = $this->fct->create_password_request($user);
				$this->send_emails->sendPasswordRequest($user,$request);
				$this->session->set_flashdata('success_message','Password request is sent to: '.'<a href="mailto:'.$user['email'].'">'.$user['email'].'</a>');
				return true;
			}
		}
	}
	public function password()
	{
		if(isset($_POST) && !empty($_POST)) {
			//echo 'test';exit;
			$this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean|callback_validate_email[]');
			if($this->form_validation->run() == FALSE) {
				$data['error_messages'] = validation_errors();
				$this->load->view('back_office/password',$data);
			}
			else {
				redirect(site_url('back_office/home/password'));
			}
		}
		else {
			$this->load->view('back_office/password');
		}
	}
function loginbypassword()
{
	if(isset($_GET['token'])) {
		$token = $_GET['token'];
		$cond = array('token'=>$token);
		$check_token = $this->fct->getonerow('password_requests',$cond);
		/*print '<pre>';
		print_r($check_token);
		exit;*/
		if(empty($check_token)) {
			$this->session->set_flashdata('error_messages','invalid token');
			redirect(site_url('back_office/home/password'));
		}
		else {
			if($check_token['expiration_date'] < date('Y-m-d h:i:s')) {
				$this->session->set_flashdata('error_messages','Token is expired');
				redirect(site_url('back_office/home/password'));
			}
			else {
				if($check_token['logged'] == 1) {
					$this->session->set_flashdata('error_messages','Token is expired');
					redirect(site_url('back_office/home/password'));
				}
				else {
					$data['logged'] = 1;
					$data['used_date'] =date('Y-m-d h:i:s');
					$this->db->where('id_password_requests',$check_token['id_password_requests']);
					$this->db->update('password_requests',$data);
					//print_r($check_token);exit;
					$user = $this->fct->getonerow('user',array('id_user'=>$check_token['id_user']));
					$role = $this->fct->getonecell('roles','title',array('id_roles' => $user["id_roles"]));
					
					$this->session->set_userdata('user_id',$user["id_user"]);
					$this->session->set_userdata('user_name',$user["name"]);
					$this->session->set_userdata('level',$user["level"]);
					$this->session->set_userdata('uid',$user["id_user"]);
					$this->session->set_userdata('roles' , array($role));
					$this->session->set_userdata('login_date',date("d M Y - h:i:s A"));
					
					$this->load_loginbypassword($check_token['id_user']);
				}
			}
		}
	}
	else {
		reirect(site_url());
	}
	}
	function load_loginbypassword($id_user,$data = array())
	{
		if(!isset($data['error_messages'])) {
			$data['success_messages'] = 'You are now logged in, you can change your password below.';
		}		
		$data['id_user'] = $id_user;
		$this->load->view('back_office/fillnewpassword',$data);
}
function update_password()
{
	if(isset($_POST) && !empty($_POST)) {
		$this->form_validation->set_rules('id_user',"user id",'trim|required|xss_clean');
		$this->form_validation->set_rules('password',"password",'trim|required|xss_clean');
		$this->form_validation->set_rules('confirm_password',"confirm password",'trim|required|xss_clean|matches[password]');
		if($this->form_validation->run() == FALSE) {
			$data['error_messages'] = validation_errors();
			$this->load_loginbypassword($this->input->post('id_user'),$data);
		}
		else {
			$cid = $this->fct->GenerateCorrelationID();
			$id_user = $this->input->post('id_user');
			$password = $this->input->post('password');
			$password = md5($password);
			$data['password'] = $password;
			$data['correlation_id'] = $cid;
			$data['updated_date'] = date('Y-m-d h:i:s');
			$data['last_login'] = date('Y-m-d h:i:s');
			$this->db->where('id_user',$id_user);
			$this->db->update('user',$data);
			

$this->session->set_userdata('cid' , $cid);
			
			$this->session->set_userdata('success_message','Passwords are updated successfully.');
			redirect(site_url('back_office/profile'));
		}
	}
	else {
		$this->session->set_flashdata('error_message','The link is expired.');
		redirect(site_url('back_office/home/password'));
	}
}
	
function ChangeRecordStatus()
{
	$content_type = $this->input->post("content_type");
	$id = $this->input->post("id");
	$oldStatus = $this->input->post("st");
	$u['updated_date'] = date("Y-m-d H:i:s");
	if($oldStatus == 0)
	$u['status'] = 1;
	else
	$u['status'] = 0;
	$this->db->where("id_".$content_type,$id);
	$this->db->update($content_type,$u);
	$return['result'] = 1;
	$return['st'] = $u['status'];
	if($u['status'] == 1)
	$return['label'] = 'Published';
	else
	$return['label'] = 'UnPublished';
	//print_r($return); exit;
	echo json_encode($return);
}
	
}