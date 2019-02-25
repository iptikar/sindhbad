<?php
class Fleet extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		$data['fleet'] = $this->front_model->getFleet(array('not_fleet'=>0));
		$data['categories'] = $this->front_model->getAllRecords('category','','sort_order');
		$data['seo'] = $this->front_model->getRecord('static_seo_pages',array('id_static_seo_pages'=>3),TRUE);
		//
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/fleet",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}
    public function category($id=0){
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		$data['fleet'] = $this->front_model->getFleet(array('fleet.id_category'=>$id,'not_fleet'=>0));
		$data['categories'] = $this->front_model->getAllRecords('category','','sort_order');
		$data['seo'] = $this->front_model->getRecord('static_seo_pages',array('id_static_seo_pages'=>3),TRUE);
if($id != "" && $id != 0) {
$data['seo'] = $this->front_model->getRecord('category',array('id_category'=>$id),TRUE);
$data['category'] = $data['seo'];
}
		//
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/fleet",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}
    public function details($id){
		$header['current_page'] = 'fleet';
		$footer['current_page'] = 'fleet';
		//
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		$data['fleet'] = $this->front_model->getFleet(array('id_fleet'=>$id),TRUE);
		$data['similar_cars'] = $this->front_model->getAllRecords('fleet',array('id_fleet <> '=>$id,'id_category'=>$data['fleet']['id_category']));
		$data['gallery'] = $this->front_model->getAllRecords('fleet_gallery',array('id_fleet'=>$id));
		//
		$data['pickup_location'] = $this->front_model->getAllRecords('pickup_location','','sort_order');
		$data['dropoff_location'] = $this->front_model->getAllRecords('dropoff_location','','sort_order');
		//
		$data['pickup_location_sess'] = $this->session->userdata('pickup_location');
		$data['dropoff_location_sess'] = $this->session->userdata('dropoff_location');
		$data['pickup_date_sess'] = $this->session->userdata('pickup_date');
		$data['dropoff_date_sess'] = $this->session->userdata('dropoff_date');
		//
		$data['seo']['meta_title'] = $data['fleet']['meta_title'];
		$data['seo']['meta_keywords'] = $data['fleet']['meta_keywords'];
		$data['seo']['meta_description'] = $data['fleet']['meta_description'];
		if(!empty($data['fleet']['picture']))
			$data['og_image'] = base_url().'uploads/fleet/700x417/'.$data['fleet']['picture'];
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
		$this->template->add_js('js/front/newsletter.js');
		$this->template->add_js('js/front/fleetdetails.js');
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/fleet-details",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}
    public function booking($id_fleet=0){
		$header['current_page'] = 'fleet';
		$footer['current_page'] = 'fleet';
		//
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		//
		$data['pickup_location'] = $this->front_model->getAllRecords('pickup_location','','sort_order');
		$data['dropoff_location'] = $this->front_model->getAllRecords('dropoff_location','','sort_order');
		//
		$data['fleet'] = $this->front_model->getFleet();
		$data['seo'] = $this->front_model->getRecord('static_seo_pages',array('id_static_seo_pages'=>9),TRUE);
		//
		if ($this->input->server("REQUEST_METHOD") === "POST" || $id_fleet==0){
			$data['is_submitted'] = TRUE;
			$data['pickup_location']=$this->input->post('pickup_location');
			$data['dropoff_location']=$this->input->post('dropoff_location');
			$data['pickup_date']=$this->input->post('pickup_date');
			$data['dropoff_date']=$this->input->post('dropoff_date');
			$this->session->set_userdata(
				array(
					'pickup_location'=>$this->input->post('pickup_location'),
					'dropoff_location'=>$this->input->post('dropoff_location'),
					'pickup_date'=>$this->input->post('pickup_date'),
					'dropoff_date'=>$this->input->post('dropoff_date')
				)
			);
		}
		else{
			$data['is_submitted'] = FALSE;
			$data['selected_fleet'] = $this->front_model->getRecord('fleet',array('id_fleet'=>$id_fleet));
			$this->session->set_userdata('id_fleet',$id_fleet);
		}
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
		$this->template->add_js('js/front/booking.js');
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/booking",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}
	public function confirmBooking(){
		$this->form_validation->set_rules("name", "name", "trim|required|xss_clean");
		$this->form_validation->set_rules("phone", "phone", "trim|required|xss_clean");
		$this->form_validation->set_rules("email", "email", "trim|required|valid_email|xss_clean");
		$this->form_validation->set_rules("address", "address", "trim|xss_clean");
		$this->form_validation->set_rules("details", "details", "trim|xss_clean");
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
			//Data from sessions
			$id_fleet = $this->session->userdata('id_fleet');
			$pickup_location = $this->session->userdata('pickup_location');
			$dropoff_location = $this->session->userdata('dropoff_location');
			$pickup_date = $this->session->userdata('pickup_date');
			$dropoff_date = $this->session->userdata('dropoff_date');
			$this->session->set_userdata(
				array(
					'pickup_location'=>'',
					'dropoff_location'=>'',
					'pickup_date'=>'',
					'dropoff_date'=>''
				)
			);
			//
			$auto_reply = $this->front_model->getRecord('auto_reply_messages',array('id_auto_reply_messages'=>2));
			//
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$address = $this->input->post('address');
			$details = $this->input->post('details');
			//
			$data['id_fleet'] = $id_fleet;
			$data['pickup_location'] = $pickup_location;
			$data['dropoff_location'] = $dropoff_location;
			$data['pickup_date'] = $pickup_date;
			$data['dropoff_date'] = $dropoff_date;
			$data['name'] = $name;
			$data['phone'] = $phone;
			$data['email'] = $email;
			$data['address'] = $address;
			$data['details'] = $details;
			$this->front_model->insertRecord('bookings',$data);
			//
			$fleet = $this->front_model->getRecord('fleet',array('id_fleet'=>$id_fleet));
			$message = "<table>";
			$message .= "<tr><td>Fleet: </td><td>".$fleet->title."</td></tr>";
			$message .= "<tr><td>Name: </td><td>".$name."</td></tr>";
			$message .= "<tr><td>Phone: </td><td>".$phone."</td></tr>";
			$message .= "<tr><td>Email: </td><td>".$email."</td></tr>";
			$message .= "<tr><td>Address: </td><td>".$address."</td></tr>";
			$message .= "<tr><td>Details: </td><td>".$details."</td></tr>";
			$message .= "<tr><td>Pickup location: </td><td>".$pickup_location."</td></tr>";
			$message .= "<tr><td>Dropoff location: </td><td>".$dropoff_location."</td></tr>";
			$message .= "<tr><td>Pickup date: </td><td>".$pickup_date."</td></tr>";
			$message .= "<tr><td>Dropoff date: </td><td>".$dropoff_date."</td></tr>";
			$message .= "</table>";
			$this->front_model->sendEmailMessage($name,$email,$phone,'New Fleet Booking',$message,$auto_reply->email);
			$this->front_model->sendAutoReply($email,$auto_reply->title,$auto_reply->message,$auto_reply->email);
			//
			$json['valid'] = 'yes';
		}
		else{
			$json['name_error'] = form_error('name');
			$json['email_error'] = form_error('email');
			$json['phone_error'] = form_error('phone');
			$json['captcha_error'] = form_error('captcha');
			if($row->count == 0){
				$json['captcha_error'] = 'Wrong code';
			}
			$json['valid'] = 'no';
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}
	public function enquire(){
		$this->form_validation->set_rules("name", "name", "trim|required|xss_clean");
		$this->form_validation->set_rules("phone", "phone", "trim|required|xss_clean");
		$this->form_validation->set_rules("email", "email", "trim|required|valid_email|xss_clean");
		$this->form_validation->set_rules("address", "address", "trim|xss_clean");
		$this->form_validation->set_rules("details", "details", "trim|xss_clean");
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
			$auto_reply = $this->front_model->getRecord('auto_reply_messages',array('id_auto_reply_messages'=>3));
			//
			$id_fleet = $this->input->post('id_fleet');
			$fleet = $this->front_model->getRecord('fleet',array('id_fleet'=>$id_fleet));
			//
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$address = $this->input->post('address');
			$details = $this->input->post('details');
			//
			$data['name'] = $name;
			$data['phone'] = $phone;
			$data['email'] = $email;
			$data['address'] = $address;
			$data['message'] = "Enquiry about ".$fleet->title.":<br><br>".$details;
			$this->front_model->insertRecord('contactform',$data);
			//
			$message = "<table>";
			$message .= "<tr><td>Fleet: </td><td>".$fleet->title."</td></tr>";
			$message .= "<tr><td>Name: </td><td>".$name."</td></tr>";
			$message .= "<tr><td>Phone: </td><td>".$phone."</td></tr>";
			$message .= "<tr><td>Email: </td><td>".$email."</td></tr>";
			$message .= "<tr><td>Address: </td><td>".$address."</td></tr>";
			$message .= "<tr><td>Details: </td><td>Enquiry about ".$fleet->title.":<br><br>".$details."</td></tr>";
			$message .= "</table>";
			$this->front_model->sendEmailMessage($name,$email,$phone,'New Fleet Enquiury About '.$fleet->title,$message,$auto_reply->email);
			$this->front_model->sendAutoReply($email,$auto_reply->title,$auto_reply->message,$auto_reply->email);
			//
			$json['valid'] = 'yes';
		}
		else{
			$json['name_error'] = form_error('name');
			$json['email_error'] = form_error('email');
			$json['phone_error'] = form_error('phone');
			$json['captcha_error'] = form_error('captcha');
			if($row->count == 0){
				$json['captcha_error'] = 'Wrong code';
			}
			$json['valid'] = 'no';
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}
	public function saveDates(){
		$pickup_location = $this->input->post('pickup_location');
		$dropoff_location = $this->input->post('dropoff_location');
		$pickup_date = $this->input->post('pickup_date');
		$dropoff_date = $this->input->post('dropoff_date');
		$this->session->set_userdata(
			array(
				'pickup_location'=>$pickup_location,
				'dropoff_location'=>$dropoff_location,
				'pickup_date'=>$pickup_date,
				'dropoff_date'=>$dropoff_date
			)
		);
		$json['pickup_location'] = $pickup_location;
		$json['dropoff_location'] = $dropoff_location;
		$json['pickup_date'] = $pickup_date;
		$json['dropoff_date'] = $dropoff_date;
		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}
	public function saveFleet(){
		$id_fleet = $this->input->post('id_fleet');
		$this->session->set_userdata(
			array(
				'id_fleet'=>$id_fleet
			)
		);
		$fleet = $this->front_model->getRecord('fleet',array('id_fleet'=>$id_fleet));
		$json['title'] = $fleet->title;
		$json['picture'] = $fleet->picture;
		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}

	function ChangeCaptcha(){
		$new_img = $this->fct->createNewCaptcha();
		$json['result'] = 1;	
		$json['img'] = $new_img;
		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}
}