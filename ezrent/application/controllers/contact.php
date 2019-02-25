<?php
class Contact extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		$data['settings'] = $header['settings'];
		$data['seo'] = $this->front_model->getRecord('static_seo_pages',array('id_static_seo_pages'=>8),TRUE);
		//
		$vals = array(
				'img_path'      => './captcha/',
        		'img_url'       => base_url().'captcha/',
				'img_width'     => '200',
				'img_height'    => 30,
				'expiration'    => 7200,
				'font_size'     => 14,
				'colors'        => array(
						'background' => array(255, 255, 255),
						'border' => array(255, 255, 255),
						'text' => array(0, 0, 0),
						'grid' => array(255, 40, 40)
				)
		);
		$cap = create_captcha($vals);
		$capArray = array(
        	'captcha_time'  => $cap['time'],
        	'ip_address'    => $this->input->ip_address(),
        	'word'          => $cap['word']
		);
		$query = $this->db->insert_string('captcha', $capArray);
		$this->db->query($query);
		$data['captcha'] = $cap['image'];
		//
		$this->template->add_js('js/front/contact.js');
		$this->template->add_css('css/front/font-awesome.min.css');
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/contact",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}
	public function submitForm(){		
		$this->form_validation->set_rules("name", "name", "trim|required|xss_clean");
		$this->form_validation->set_rules("phone", "phone", "trim|xss_clean");
		$this->form_validation->set_rules("email", "email", "required|valid_email|xss_clean");
		$this->form_validation->set_rules("subject", "subject", "trim|xss_clean");
		$this->form_validation->set_rules("message", "message", "required|xss_clean");
		$this->form_validation->set_rules("captcha", "captcha", "required|xss_clean");
		
		// Captcha Validation
		$captcha = $this->input->post('captcha');
		$expiration = time() - 7200;
		$this->db->where('captcha_time < ', $expiration)->delete('captcha');
		$sql = 'SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?';
		$binds = array($captcha, $this->input->ip_address(), $expiration);
		$query = $this->db->query($sql, $binds);
		$row = $query->row();
		//
		
		if($this->form_validation->run() && $row->count != 0){
			$auto_reply = $this->front_model->getRecord('auto_reply_messages',array('id_auto_reply_messages'=>1));
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');
			$data['name'] = $name;
			$data['phone'] = $phone;
			$data['email'] = $email;
			$data['subject'] = $subject;
			$data['message'] = $message;
			$this->front_model->insertRecord('contactform',$data);
			$this->front_model->sendEmailMessage($name,$email,$phone,'Contact Form',$message,$auto_reply->email);
			$this->front_model->sendAutoReply($email,$auto_reply->title,$auto_reply->message,$auto_reply->email);
			$json['valid'] = 'yes';
		}
		else{
			$json['name_error'] = form_error('name');
			$json['email_error'] = form_error('email');
			$json['message_error'] = form_error('message');
			$json['captcha_error'] = form_error('captcha');
			if($row->count == 0){
				$json['captcha_error'] = 'Wrong code';
			}
			$json['valid'] = 'no';
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}
}