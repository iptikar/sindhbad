<?php
class Offers extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		$data['fleet'] = $this->front_model->getFleet(array('is_offer'=>TRUE));
	//	echo $this->db->last_query();exit;
	//	echo "<pre>";print_r($data['fleet']);exit;
		//
		$data['pickup_location'] = $this->front_model->getAllRecords('pickup_location','','sort_order');
		$data['dropoff_location'] = $this->front_model->getAllRecords('dropoff_location','','sort_order');
		//
		$data['seo'] = $this->front_model->getRecord('static_seo_pages',array('id_static_seo_pages'=>4),TRUE);
		//
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/offers",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}
}