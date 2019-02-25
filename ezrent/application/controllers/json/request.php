<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Request extends CI_Controller {
	public function __construct()
{
	  parent::__construct();
}
   public function content()
   {
$cat_id = 0;
$response['time'] = '';
if($this->input->post("cat_id") != "")
$cat_id = $this->input->post("cat_id");
	   $content = $this->site_model->getContentPages($cat_id,array(),array(),100000,0,TRUE);
if($cat_id == 0) {
$latestUpdate = $this->site_model->getLatestUpdatedContent();
if(!empty($latestUpdate))
$response['time'] = strtotime($latestUpdate['date']);
}
	   $response['content'] = $content;
		if(isset($_GET['callback'])) {
			echo $_GET["callback"]."(".json_encode($response).")";
		}
		else {
			echo json_encode($response);
		}
   }


   public function contentForImport()
   {
$response['time'] = '';
$limit = $this->input->post("limit");
$offset = 0;
if($this->input->post("offset") != "")
$offset = $this->input->post("offset");

$latestUpdate = $this->site_model->getLatestUpdatedContent();
if(!empty($latestUpdate))
$response['time'] = strtotime($latestUpdate['date']);
$response['sync'] = 1;
	   $content = $this->site_model->getAllPagesForJsonImport($limit,$offset);
	   $response['content'] = $content;
		if(isset($_GET['callback'])) {
			echo $_GET["callback"]."(".json_encode($response).")";
		}
		else {
			echo json_encode($response);
		}
   }

public function latestNews()
   {
	   $res = $this->site_model->getLatesNews();
	   $response['latest_news'] = $res;
		if(isset($_GET['callback'])) {
			echo $_GET["callback"]."(".json_encode($response).")";
		}
		else {
			echo json_encode($response);
		}
   }

public function regions()
   {
	   $regions = $this->site_model->getRegions();
	   $response['regions'] = $regions;
		if(isset($_GET['callback'])) {
			echo $_GET["callback"]."(".json_encode($response).")";
		}
		else {
			echo json_encode($response);
		}
   }

public function branches()
   {
$offset = 0;
if($this->input->post("offset") != "")
$offset = $this->input->post("offset");
$limit = $this->input->post("limit");

$region_id = $this->input->post("rid");
$country_id = $this->input->post("cid");

$arr = array();
if(!empty($region_id))
$arr['region_id'] = $region_id;

if(!empty($country_id))
$arr['country_id'] = $country_id;

	   $branches = $this->site_model->getBranches($arr,$limit,$offset);
	   $response['branches'] = $branches;
		if(isset($_GET['callback'])) {
			echo $_GET["callback"]."(".json_encode($response).")";
		}
		else {
			echo json_encode($response);
		}
   }

public function search()
   {
$keywords = $this->input->post("keywords");
if(empty($keywords)) exit("empty field");
$data = array();
$limit = $this->input->post("limit");
$offset = 0;
if($this->input->post("offset") != "")
$offset = $this->input->post("offset");
	   $results = $this->fct->searchWebsite($keywords,$limit,$offset);
if($limit != "" && !empty($results)) {
foreach($results as $k => $v) {

// get parent levels
$parent_levels = $this->site_model->getContentTreeParentLevels($v['id_parent']);
$parent_levels = arrangeParentLevels($parent_levels);
$valid = TRUE;
foreach($parent_levels as $v1) {
if($v1['deleted'] == 1) {
$valid = FALSE;
break;
}
}
if($valid) {
$newData = array();
//$record = $this->fct->getonerow("");
$newData = $v;
$newData['parent_level'] = $parent_levels;
$newData['listing'] = $this->site_model->getContentListing($v['id_content']);
$newData['sub_levels'] = $this->site_model->getContentPages($v['id_content'],array(),array(),100000,0);
$newData['description'] = cleanJsonContent($v['description']);
$newData['gallery'] = $this->site_model->getContentGallery($v['id_content']);
array_push($data,$newData);
}
}
}
	   $response['results'] = $data;
		if(isset($_GET['callback'])) {
			echo $_GET["callback"]."(".json_encode($response).")";
		}
		else {
			echo json_encode($response);
		}
   }

public function sendInquiry()
   {
		$allPostedVals = $this->input->post(NULL, TRUE);
		$this->form_validation->set_rules('name','Name','trim|required');	
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
                $this->form_validation->set_rules('phone','Phone','trim');
$this->form_validation->set_rules('subject','Subject','trim|required');
		$this->form_validation->set_rules('message','Message','trim|required');
		if($this->form_validation->run() == FALSE) {
$find =array('<p>','</p>');
			$replace =array('',',');
			$return['result'] = 0;
			$return['message'] = str_replace($find,$replace,validation_errors());
		}
		else {
			$_data['name'] = $this->input->post('name');
			$_data['phone'] = $this->input->post('phone');
			$_data['email'] = $this->input->post('email');
$_data['subject'] = $this->input->post('subject');
	                $_data['message'] = $this->input->post('message');
			$_data['created_date'] = date('Y-m-d H:i:s');
			$_data['lang'] = $this->lang->lang();
			$this->db->insert('contactform',$_data);
			// send emails
			$this->load->model('send_emails');
			$this->send_emails->sendContactToAdmin($_data);
			$this->send_emails->sendContactReplyToUser($_data);
		
	                $return['result'] = 1;
			$return['message'] = 'Message is submitted successfully, thank you!';
		
		}
		echo json_encode($return);
	}
	
	
	
	function checkIfEmailExists()
{
	$email = $this->input->post("email");

	$check = $this->fct->getonerow("newsletter",array("email"=>$email));
	if(!empty($check)) {
		$this->form_validation->set_message("checkIfEmailExists",lang("Email exists, please try another one."));
		return FALSE;
	}
	else {
		return TRUE;
	}
}
	public function subscribeToNewsletter()
	{
		$allPostedVals = $this->input->post(NULL, TRUE);
		$this->form_validation->set_rules('name','Name','trim|required|xss_clean');
		$this->form_validation->set_rules('company','Company','trim|required|xss_clean');
		$this->form_validation->set_rules('phone','Phone','trim|xss_clean');
		$this->form_validation->set_rules('email',lang('email'),'trim|required|valid_email|callback_checkIfEmailExists[]|xss_clean');
		$this->form_validation->set_rules('address',lang('address'),'trim|xss_clean');
		if($this->form_validation->run() == FALSE) {
			$find =array('<p>','</p>');
			$replace =array('','');
			$return['result'] = 0;
			$return['message'] = str_replace($find,$replace,validation_errors());
		}
		else {
			$_data['name'] = $this->input->post('name');
			$_data['company'] = $this->input->post('company');
			$_data['phone'] = $this->input->post('phone');
			$_data['email'] = $this->input->post('email');
			$_data['address'] = $this->input->post('address');
			$_data['created_date'] = date('Y-m-d H:i:s');
			$_data['lang'] = $this->lang->lang();
			$this->db->insert('newsletter',$_data);
			// send emails
			$this->load->model('send_emails');
			$this->send_emails->sendSubscriptionToAdmin($_data);
			$this->send_emails->sendSubscriptionReplyToUser($_data);

			$return['result'] = 1;
			$return['message'] = lang('Your information has been submitted successfully.');
		}
		echo json_encode($return);
	}

}