<?
class Settings extends CI_Controller{
public function __construct()
{
parent::__construct();
// Your own constructor code
$this->headers='back_office/includes/header';
$this->footer='back_office/includes/footer';
$this->load->helper('file');
$this->load->helper('date');
$this->load->helper('directory');
$this->fct->validateCorrelationID();

}

/*function _remap($method)
{
if(method_exists($this, $method))
{
$arrUrl = $this->uri->segments;
if(count($arrUrl) > 0)
{
foreach($arrUrl as $key => $url)
{
if(in_array($method, $arrUrl))
{
unset($arrUrl[$key]);
}
}
}
}
else
{
$this->load->helper('url');
$error404 = site_url($this->router->routes['404_override']);
redirect($error404);
}
}
*/
public function index(){
$data["title"]="Settings";
$cond=array('id_settings'=>1);
$data["admin"]= $this->fct->getonerow('settings',$cond);
$data["content"]="back_office/setting";
$this->load->view('back_office/template',$data);		
}

public function submit_user(){
$this->form_validation->set_rules('name', 'Full Name', 'trim|required|min_length[5]');
$this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[5]|max_length[12]|xss_clean');
$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]|xss_clean');
$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
$this->form_validation->set_rules('address', 'address', 'trim');
$this->form_validation->set_rules('phone', 'phone', 'trim');
if ($this->form_validation->run() == FALSE){
$data["title"]="Settings";
$cond=array('id_user'=>$this->session->userdata('user_id'));
$data["id"]=$this->session->userdata('user_id');
$data["info"]=$this->fct->getonerecord('user',$cond);
$data["content"]="back_office/setting";
$this->load->view('back_office/template',$data);		
}
else
{
	$_data=array(
	'name'=>$this->input->post('name'),
	'username'=>$this->input->post('username'),
	'password'=>$this->input->post('password'),
	'email'=>$this->input->post('email'),
	'phone'=>$this->input->post('phone'),
	'address'=>$this->input->post('address'));
	if($this->input->post('id')!=''){
	$_data["updated_date"]=date("Y-m-d h:i:s");
	$this->db->where('id_user ',$this->input->post('id'));
	$this->db->update('user',$_data);
	$this->session->set_userdata('success_message','Information was updated successfully');
	}
	redirect(site_url('back_office/settings'));	
}
}
public function submit(){
$lang = "";
if($this->config->item("language_module")) {
	$lang = getFieldLanguage($this->lang->lang());
}
$this->form_validation->set_rules('email', 'Email Address', 'trim|required');
if ($this->form_validation->run() == FALSE){
$data["title"]="Settings";
$cond=array('id_settings'=>1);
$data["admin"]= $this->fct->getonerow('settings',$cond);
$data["content"]="back_office/setting";
$this->load->view('back_office/template',$data);		
}
else
{
	$_data=array(
	'toll_free'=>$this->input->post('toll_free'),
	'facebook'=>$this->input->post('facebook'),
	'twitter'=>$this->input->post('twitter'),
	'skype'=>$this->input->post('skype'),
	'youtube'=>$this->input->post('youtube'),
	'phone'=>$this->input->post('phone'),
	'fax'=>$this->input->post('fax'),
	'mobile'=>$this->input->post('mobile'),
	'website'=>$this->input->post('website'),
	'address'=>$this->input->post('address'),
	'linkedin'=>$this->input->post('linkedin'),
	'google_map'=>$this->input->post('google_map'),
	'google_plus'=>$this->input->post('google_plus'),
	'instagram'=>$this->input->post('instagram'),
	'website_title'=>$this->input->post('website_title'),
	'website_title_en'=>$this->input->post('website_title_en'),
	'email'=>$this->input->post('email'),
	'call_us_now'=>$this->input->post('call_us_now'),
	'email_us_about_this'=>$this->input->post('email_us_about_this'),
	'address_footer'=>$this->input->post('address_footer'),
	'checkout_notice'=>$this->input->post('checkout_notice'),
	'google_analytic' =>$this->input->post('google_analytic'));
if(!empty($_FILES['image']['name'])) {
if($this->input->post("id")!=""){
$cond_image=array("id_settings"=>1);
$old_image=$this->fct->getonecell("settings",'image',$cond_image);
if(!empty($old_image))
unlink("./uploads/website/".$old_image);	
unlink("./uploads/website/45x45/".$old_image);									
}
$image1= $this->fct->uploadImage('image','website');
$this->fct->createthumb($image1,"website","45x45");
$_data["image"]=$image1;	
}
	
$this->db->where('id_settings',1);
$this->db->update('settings',$_data);
$this->session->set_userdata('success_message','Information was updated successfully');
redirect(site_url('back_office/settings'));
}

}


//delete logo 
public function delete_image($field,$image,$id){
unlink("./uploads/website/".$image);
unlink("./uploads/website/45x45/".$image);									
$_data[$field]="";
$this->db->where("admin_id",$id);
$this->db->update("admin",$_data);
redirect(site_url("back_office/settings"));	
}	
	
	
}