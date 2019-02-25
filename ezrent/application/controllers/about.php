<?php
class About extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		$data['about'] = $this->front_model->getRecord('dynamic_pages',array('id_dynamic_pages'=>1));
		$data['our_fleet'] = $this->front_model->getRecord('dynamic_pages',array('id_dynamic_pages'=>2));
		$data['our_philosophy'] = $this->front_model->getRecord('dynamic_pages',array('id_dynamic_pages'=>3));
		$data['our_value'] = $this->front_model->getAllRecords('our_value');
		$data['our_clients'] = $this->front_model->getAllRecords('our_clients');
		//
		$data['pickup_location'] = $this->front_model->getAllRecords('pickup_location','','sort_order');
		$data['dropoff_location'] = $this->front_model->getAllRecords('dropoff_location','','sort_order');
		//
		$data['seo'] = $this->front_model->getRecord('static_seo_pages',array('id_static_seo_pages'=>2),TRUE);
		//
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/about",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}
}