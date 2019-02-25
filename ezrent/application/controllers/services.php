<?php
class Services extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		$data['services'] = $this->front_model->getAllRecords('services');
		$data['our_clients'] = $this->front_model->getAllRecords('our_clients');
		$data['seo'] = $this->front_model->getRecord('static_seo_pages',array('id_static_seo_pages'=>10),TRUE);
		//
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/services",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}

    public function details($id_services=''){
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
$header['serv']=1;
		$data['services'] = $this->front_model->getAllRecords('services');
		$data['our_clients'] = $this->front_model->getAllRecords('our_clients');
		$data['seo'] = $this->front_model->getRecord('services',array('id_services'=>$id_services),TRUE);
	
		//
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/services_details",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}

}