<?php
class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		$data['settings'] = $header['settings'];
		$data['blog'] = $this->front_model->getAllRecords('blog','picture <> ""','id_blog DESC','',3);
		$data['categories'] = $this->front_model->getAllRecords('category','','title');
		$data['slider'] = $this->front_model->getFleet(array('picture_offer <> '=>'','is_offer'=>1),FALSE,8);
		$data['fleet'] = $this->front_model->getFleet(array('not_fleet'=>0),FALSE,50);
		$data['about'] = $this->front_model->getRecord('dynamic_pages',array('id_dynamic_pages'=>1));
		//
		$data['pickup_location'] = $this->front_model->getAllRecords('pickup_location','','sort_order');
		$data['dropoff_location'] = $this->front_model->getAllRecords('dropoff_location','','sort_order');
		//
		$data['seo'] = $this->front_model->getRecord('static_seo_pages',array('id_static_seo_pages'=>1),TRUE);
		//
		$this->template->add_js('js/front/newsletter.js');
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/home",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}
public function index1(){
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		$data['settings'] = $header['settings'];
		$data['blog'] = $this->front_model->getAllRecords('blog','picture <> ""','id_blog DESC','',3);
		$data['categories'] = $this->front_model->getAllRecords('category','','title');
		$data['slider'] = $this->front_model->getFleet(array('picture_offer <> '=>'','is_offer'=>1),FALSE,8);
		$data['fleet'] = $this->front_model->getFleet(array('not_fleet'=>0 ),FALSE,50);
	//	echo $this->db->last_query();
	//	exit;
		$data['about'] = $this->front_model->getRecord('dynamic_pages',array('id_dynamic_pages'=>1));
		//
		$data['pickup_location'] = $this->front_model->getAllRecords('pickup_location','','sort_order');
		$data['dropoff_location'] = $this->front_model->getAllRecords('dropoff_location','','sort_order');
		//
		$data['seo'] = $this->front_model->getRecord('static_seo_pages',array('id_static_seo_pages'=>1),TRUE);
		//
		$this->template->add_js('js/front/newsletter.js');
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/home",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}
	public function submitNewsletter(){
		$this->form_validation->set_rules("name", "name", "trim|required|xss_clean");
		$this->form_validation->set_rules("email", "email", "trim|required|valid_email|xss_clean");
		if($this->form_validation->run()){
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$is_existed = $this->front_model->IsEmailExisted($email);
			if(!$is_existed){
				$json['name_error'] = '';
				$json['email_error'] = '';
				$this->front_model->insertRecord('newsletter',array(
					'name'=>$name,
					'email'=>$email
				));
			}
			else {
				$json['email_error'] = 'existed';
			}
		}
		else{
			$json['name_error'] = form_error('name');
			$json['email_error'] = form_error('email');
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}
}