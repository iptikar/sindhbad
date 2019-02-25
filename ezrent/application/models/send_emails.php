<?
class Send_emails extends CI_Model {

public function sendSubscriptionToAdmin($data)
{
	  $config= Array(
	  	'mailtype'  => 'html'
	  );
	  
	  $condition1 = array('id_settings'=>1);
	  $admindata =$this->fct->getonerow('settings',$condition1);
	  $adminemail = $admindata['email'];
	  $adminname = $admindata['website_title'.getFieldLanguage($this->lang->lang())];
	  
	  $subject = 'New subscription received on '.$data['created_date'].' Name: '.$data['name'];

	  $condition2 = array('id_auto_reply_messages'=>2);
	  $replymessage =$this->fct->getonerecord('auto_reply_messages',$condition2);
	  if(isset($replymessage['email']) && !empty($replymessage['email'])) $adminemail = $replymessage['email'];
	  
	  $sysdata = date("Y-m-d h:i:s");
	  
	  $body = '<p>'.$subject.'.</p>
	  <p>
	  <u><strong>Details :</strong></u></p>';
	  

	  
	  if(!empty($data['name'])) {
	  $body.='<p>
	  	<strong>Name: </strong>'.$data['name'].'</p>';
	  }

if(!empty($data['phone'])) {
 $body.='<p>
	  	<strong>Phone: </strong>'.$data['phone'].'</p>';
	  }
	  
	  if(!empty($data['company'])) {
	  $body.='<p>
	  	<strong>Company: </strong>'.$data['company'].'</p>';
	  }
	  
	 /* if(!empty($data['position'])) {
	  $body.='<p>
	  	<strong>Position: </strong>'.$data['position'].'</p>';
	  }*/
	  
	  if(!empty($data['email'])) {
	  $body.='<p>
	  	<strong>Email : </strong><a href="mailto:'.$data['email'].'">'.$data['email'].'</a></p>';
	  }
	  
	  if(!empty($data['address'])) {
	  $body.='<p>
	  	<strong>Address: </strong>'.$data['address'].'</p>';
	  }
	  
	 /* if(!empty($data['country'])) {
	  $body.='<p>
	  	<strong>Country: </strong>'.$data['country'].'</p>';
	  }*/
	  
	 /* if(!empty($data['city'])) {
	  $body.='<p>
	  	<strong>City: </strong>'.$data['city'].'</p>';
	  }*/
	  
	/*  if(!empty($data['state'])) {
	  $body.='<p>
	  	<strong>State / province: </strong>'.$data['state'].'</p>';
	  }*/
	  
	 /* if(!empty($data['postal_code'])) {
	  $body.='<p>
	  	<strong>Zip / postal code: </strong>'.$data['postal_code'].'</p>';
	  }*/
	  
	  /*if(!empty($data['subscription_target'])) {
	  $body.='<p>
	  	<strong>Target of Subscription: </strong>'.$data['subscription_target'].'</p>';
	  }*/
	  
      $body.='<p><strong>Thank you, '.$adminname.'</strong></p>';
 $body.='<p><img src="'.base_url().'uploads/website/logo.png" /></p>';
	
	  // get admin email
	  $this->email->clear(TRUE);
	  $this->email->initialize($config);
	  $this->email->set_newline("\r\n");
	  $this->email->from($data['email'],$data['name']);
	  $this->email->to($adminemail);
 	  $this->email->subject($subject);
	  $this->email->message($body);
	  $this->email->send();
}	
public function sendSubscriptionReplyToUser($data)
{
	 $config= Array(
	  'mailtype'  => 'html'
	  );
	  $condition1 = array('id_settings'=>1);
	  $admindata =$this->fct->getonerow('settings',$condition1);
	  $adminemail = $admindata['email'];
	  $adminname = $admindata['website_title'.getFieldLanguage()];

	  $condition2 = array('id_auto_reply_messages'=>2);
	  $replymessage =$this->fct->getonerecord('auto_reply_messages',$condition2);
	  if(isset($replymessage['email']) && !empty($replymessage['email'])) $adminemail = $replymessage['email'];
	  $message = '';
	  $message = $replymessage['message'.getFieldLanguage()];
	  // get reply message
	  $body = '
	  <p '.getDir().'>'.lang('dear').' '.$data['name'].'</span>,</p>
	  <p '.getDir().'>'.$message.'</p>';
 $body.='<p><img src="'.base_url().'uploads/website/logo.png" /></p>';
	 // $body.='<p '.getDir($this->lang->lang()).'><strong>'.lang('thank_you').' '.$adminname.'</strong></p>';
	  // get admin email
	  $this->email->clear(TRUE);
	  $this->email->initialize($config);
	  $this->email->set_newline("\r\n");
	  $this->email->from($adminemail,$adminname);
	  $this->email->to($data['email']);
	  $this->email->subject($replymessage['title'.getFieldLanguage()]);
	  $this->email->message($body);
	  $this->email->send();
}	

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function sendContactToAdmin($data)
{
	  $config= Array(
	  	'mailtype'  => 'html'
	  );
	  
	  $condition1 = array('id_settings'=>1);
	  $admindata =$this->fct->getonerow('settings',$condition1);
	  $adminemail = $admindata['email'];
	  $adminname = $admindata['website_title'.getFieldLanguage()];
	  
	  $name = $data['name'];
	  $subject = 'New inquiry form submitted on '.$data['created_date'].' Name: '.$name;

	  $condition2 = array('id_auto_reply_messages'=>1);
	  $replymessage =$this->fct->getonerecord('auto_reply_messages',$condition2);
	  if(isset($replymessage['email']) && !empty($replymessage['email'])) $adminemail = $replymessage['email'];
	  
	  $sysdata = date("Y-m-d h:i:s");
	  
	  $body = '<p>'.$subject.'.</p>';

	  $body .= '<p><u><strong>Details :</strong></u></p>';
	  
	  if(!empty($data['name']))
	  $body.='<p><strong>Name: </strong>'.$data['name'].'</p>';
	  
	  if(!empty($data['email']))
	  $body.='<p><strong>Email: </strong><a href="mailto:'.$data['email'].'">'.$data['email'].'</p>';

if(!empty($data['phone']))
	  $body.='<p><strong>Phone: </strong>'.$data['phone'].'</p>';

if(!empty($data['subject']))
	  $body.='<p><strong>Subject: </strong>'.$data['subject'].'</p>';
	  
	  if(!empty($data['message']))
	  $body.='<p><strong>Message: </strong>'.$data['message'].'</p>';

	 
   //   $body.='<p><strong>Thank you, <a href="'.base_url().'" target="_blank">'.$adminname.'</a></strong></p>';
  $body.='<p><strong>Thank you, '.$adminname.'</strong></p>';
 $body.='<p><img src="'.base_url().'uploads/website/logo.png" /></p>';


	  // get admin email
	  $this->email->clear(TRUE);
	  $this->email->initialize($config);
	  $this->email->set_newline("\r\n");
	  $this->email->from($data['email'],$name);
	  $this->email->to($adminemail);
 	  $this->email->subject($subject);
	  $this->email->message($body);
	  if(!$this->email->send()) {
	  echo $this->email->print_debugger();
	  exit;
	  }
}	
public function sendContactReplyToUser($data)
{
	 $config= Array(
	  'mailtype'  => 'html'
	  );
	  $condition1 = array('id_settings'=>1);
	  $admindata =$this->fct->getonerow('settings',$condition1);
	  $adminemail = $admindata['email'];
	  $adminname = $admindata['website_title'.getFieldLanguage()];
 $name = $data['name'];
	  $condition2 = array('id_auto_reply_messages'=>1);
	  $replymessage =$this->fct->getonerecord('auto_reply_messages',$condition2);
	  if(isset($replymessage['email']) && !empty($replymessage['email'])) $adminemail = $replymessage['email'];
	  $message = '';
	  $message = $replymessage['message'.getFieldLanguage()];
	  // get reply message
	  $body = $this->userReplytemplate($name,$message,$adminname);
	 $body.='<p><img src="'.base_url().'uploads/website/logo.png" /></p>';
	  // get admin email
	  $this->email->clear(TRUE);
	  $this->email->initialize($config);
	  $this->email->set_newline("\r\n");
	  $this->email->from($adminemail,$adminname);
	  $this->email->to($data['email']);
	  $this->email->subject($replymessage['title'.getFieldLanguage()]);
	  $this->email->message($body);
	  if(!$this->email->send()) {
	  echo $this->email->print_debugger();
	  exit;
	  }
	 // $this->email->send();
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function userReplytemplate($name,$message,$adminname)
{
	$body = '<p>Dear '.$name.'</p>';
	$body .= '<p>'.$message.'</p>';
	//$body.='<p><strong>Thank you, <a href="'.base_url().'" target="_blank">'.$adminname.'</a></strong></p>';
  $body.='<p><strong>Thank you, '.$adminname.'</strong></p>';
	$body.='<p><img src="'.base_url().'uploads/website/logo.png" /></p>';
	return $body;
}
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
		
/////////////////////////////////////////////////////////////////////////////
public function sendUserToAdmin($data)
{
	 $config= Array(
	  'mailtype'  => 'html'
	  );
	  
	  $condition1 = array('id_settings'=>1);
	  $admindata =$this->fct->getonerow('settings',$condition1);
	  $adminemail = $admindata['email'];
	  $adminname = $admindata['website_title'.getFieldLanguage()];
	  
	  $condition2 = array('id_auto_reply_messages'=>3);
	  $replymessage =$this->fct->getonerecord('auto_reply_messages',$condition2);
	  if(isset($replymessage['email']) && !empty($replymessage['email'])) $adminemail = $replymessage['email'];
	  
	  $sysdata = date("Y-m-d h:i:s");
	  $subject = 'New user registered on '.$data['created_date'];
	  $body = '<p>'.$subject.'.</p>
	  <p>
	  <u><strong>Details :</strong></u></p>';
	  
	   if(!empty($data['company_name'])) {
	  $body.='<p><strong>Company Name : </strong>'.$data['company_name'].'</p>';
	  }
	  
	  if(!empty($data['vat_number'])) {
	  $body.='<p><strong>Vat Number : </strong>'.$data['vat_number'].'</p>';
	  }
	  
	
	  
	  if(!empty($data['first_name']) && !empty($data['surname']) && !empty($data['salutation'])) {
	  $body.='<p><strong>Name : </strong>'.$data['salutation'].' '.$data['first_name'].' '.$data['surname'].'</p>';
	  }
	  
	  if(!empty($data['username'])) {
	  $body.='<p><strong>Username : </strong>'.$data['username'].'</p>';
	  }
	  
	   if(!empty($data['email'])) {
	  $body.='<p>
	  	<strong>Email : </strong><a href="mailto:'.$data['email'].'">'.$data['email'].'</a></p>';
	   }
	   
	   if(!empty($data['phone'])) {
	  $body.='<p><strong>Phone : </strong>'.$data['phone'].'</p>';
	  }
	    
	  
	   if(!empty($data['address'])) {
	  $body.='<p><strong>Address : </strong>'.$data['address'].'</p>';
	  }
	
 
	   if(!empty($data['how_did_you_find_us'])) {
		     if($data['how_did_you_find_us'] == "other") {
				 	$body.='<p><strong>How did client find G-tech : </strong>'.$data['other'].'</p>';
			 }
			 else {
				  $body.='<p><strong>How did client find G-tech : </strong>'.$data['how_did_you_find_us'].'</p>';
			 }
	  }
	
	  $link = site_url('back_office/users/edit/'.$data['id']);   
	  $body.='<p><strong>Link to view and publish user: </strong><a href="'.$link.'">'.$link.'</a></p>';
	  
	//  $body.='<p><strong>'.lang('thank_you').' <a href="'.base_url().'" target="_blank">'.$adminname.'</a></strong></p>';
	  // get admin email
if($this->get_domain($adminemail)) {
//echo 'aaaaaaa';exit;
		$config = $this->getSMTPConfig();
	}
	  $this->email->clear(TRUE);
	  $this->email->initialize($config);
	  $this->email->set_newline("\r\n");
	  
	  //$this->email->from($data['email'],$data['salutation'].' '.$data['first_name'].' '.$data['surname']);
	  $this->email->from($this->defaultEmail(),$data['salutation'].' '.$data['first_name'].' '.$data['surname']);
	  $this->email->to($adminemail);
	  $this->email->subject($subject);
	  $this->email->message($body);
	  $this->email->send();
}	
public function sendUserReply($data)
{
	 $config= Array(
	  'mailtype'  => 'html'
	  );
	 
	  $condition1 = array('id_settings'=>1);
	  $admindata =$this->fct->getonerow('settings',$condition1);
	  $adminemail = $admindata['email'];
	  $adminname = $admindata['website_title'.getFieldLanguage($this->lang->lang())];
	 // echo $admindata['website_title'.getFieldLanguage($this->lang->lang())];exit;
	  
	  $condition2 = array('id_auto_reply_messages'=>3);
	  $replymessage =$this->fct->getonerecord('auto_reply_messages',$condition2);
	  if(isset($replymessage['email']) && !empty($replymessage['email'])) $adminemail = $replymessage['email'];
	  $message = '';
	  $message = $replymessage['message'.getFieldLanguage($this->lang->lang())];
	  // get reply message
	  $body = '<p '.getDir().'>'.lang('dear').' '.ucfirst($data['salutation'].' '.$data['surname']).'</span>,</p><p '.getDir().'>'.$message.'</p>';
	//  $body.='<p><strong>'.lang('thank_you').' <a href="'.base_url().'" target="_blank">'.$adminname.'</a></strong></p>';
	  // get admin email
	  $this->email->clear(TRUE);
	  $this->email->initialize($config);
	  $this->email->set_newline("\r\n");
	  $this->email->from($adminemail,$adminname);
	  $this->email->to($data['email']);
	  $this->email->subject($replymessage['title'.getFieldLanguage()]);
	  $this->email->message($body);
	  $this->email->send();
}
/////////////////////////////////////////////////////////////////////////////
public function sendPasswordRequest($data,$request)
{
	$config= Array(
	  'mailtype'  => 'html'
	  );
	  $condition1 = array('id_settings'=>1);
	  $admindata =$this->fct->getonerow('settings',$condition1);
	  $adminemail = $admindata['email'];
	  $adminname = $admindata['website_title'.getFieldLanguage($this->lang->lang())];

	  // get reply message
	  $reset_link = route_to('back_office/home/loginbypassword').'?token='.$request['token'];
	  if($this->lang->lang()=='ar') {
		  $body = '<p '.getDir().'>'.lang('dear').' '.$data['salutation'].' '.$data['first_name'].' '.$data['surname'].',</p>';
	  	  $body .= '<p '.getDir().'> تم تقديم طلب لإعادة تعيين كلمة المرور لحسابك في مركز '.$adminname.'.</p>';
      	  $body .= '<p '.getDir().'>تستطيع الآن تسجيل الدخول من خلال النقر على هذا الرابط أو نسخ ولصق إلى المتصفح الخاص بك:<br /><a href="'.$reset_link.'">'.$reset_link.'</a></p>';
          $body .= '<p '.getDir().'>يمكن استخدام هذا الرابط مرة واحدة فقط للدخول وسوف يقودك إلى صفحة حيث يمكنك تعيين كلمة المرور الجديدة الخاصة بك. يرجى الأخذ بعين الإعتبار بانتهاء صلاحية الرابط بعد خمسة أيام.</p>';
	  }
	  else {
		  $body = '<p>'.lang('dear').' '.$data['salutation'].' '.$data['surname'].',</p>';
	  	  $body .= '<p>A request to reset the password for your account has been made at '.$adminname.'.</p>';
      	  $body .= '<p>You may now log in by clicking this link or copying and pasting it to your browser:<br /><a href="'.$reset_link.'">'.$reset_link.'</a></p>';
          $body .= '<p>This link can only be used once to log in and will lead you to a page where you can set your password. It expires after five days and nothing will happen if it\'s not used.</p>';
	  }
	  if($this->get_domain($data['email'])) {
		$config = $this->getSMTPConfig();
	}
	 // $body.='<p><strong>'.lang('thank_you').' <a href="'.base_url().'" target="_blank">'.$adminname.'</a></strong></p>';
	  // get admin email
	  $this->email->clear(TRUE);
	  $this->email->initialize($config);
	  $this->email->set_newline("\r\n");
	  if($this->get_domain($data['email'])) {
		  $this->email->from($this->defaultEmail(),$adminname);
	  }
	  else {
		  $this->email->from($adminemail,$adminname);
	  }
	  $this->email->to($data['email']);
	  $this->email->subject($adminname.', '.lang('password_request'));
	  $this->email->message($body); 
	  $this->email->send();
}
/////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////
public function inform_client($data,$id)
{
	 $config= Array(
	  'mailtype'  => 'html'
	  );
	  $condition1 = array('id_settings'=>1);
	  $admindata =$this->fct->getonerow('settings',$condition1);
	  $adminemail = $admindata['email'];
	  $adminname = $admindata['website_title'.getFieldLanguage()];
	  
	  $condition2 = array('id_auto_reply_messages'=>$id);
	  $replymessage =$this->fct->getonerecord('auto_reply_messages',$condition2);
	  if(isset($replymessage['email']) && !empty($replymessage['email'])) $adminemail = $replymessage['email'];
	  $message = '';
	  $message = $replymessage['message'.getFieldLanguage()];
	  // get reply message
	  $body = '<p '.getDir().'>'.lang('dear').' '.$data['salutation'].' '.$data['surname'].',</p>';
	  $body .= '<p '.getDir().'>'.$message.'</p>';
	 // $body.='<p '.getDir($this->lang->lang()).'><strong>'.lang('thank_you').' <a href="'.base_url().'" target="_blank">'.$adminname.'</a></strong></p>';
	 if($this->get_domain($data['email'])) {
		$config = $this->getSMTPConfig();
	}
	  // get admin email
	  $this->email->clear(TRUE);
	  $this->email->initialize($config);
	  $this->email->set_newline("\r\n");
	  $this->email->from($adminemail,$adminname);
	  $this->email->to($data['email']);
	  $this->email->subject($replymessage['title'.getFieldLanguage()]);
	  $this->email->message($body);
	  $this->email->send();
}
//////////////////////////////////////////////////////////////////
function getSMTPConfig()
{
$config['protocol'] = "smtp";
$config['smtp_host'] = "gtecsecurity.co.uk";
$config['smtp_port'] = "25";
$config['smtp_user'] = "marketing@gtecsecurity.co.uk"; 
$config['smtp_pass'] = "AbWbCTU=^IBV";
$config['charset'] = "utf-8";
$config['mailtype'] = "html";
$config['newline'] = "\r\n";

return $config;
}
function defaultEmail()
{
	return "marketing@gtecsecurity.co.uk";
}
function get_domain($email)
{
       if (strrpos($email, '.') == strlen($email) - 3)
          $num_parts = 3;
       else
          $num_parts = 2;

       $domain = implode('.',
            array_slice( preg_split("/(\.|@)/", $email), - $num_parts)
        );
 if ($domain == "gtecsecurity.co.uk") {
	 return true;
	}
	else {
		return false;
	}
        //return strtolower($domain);
    }	

}