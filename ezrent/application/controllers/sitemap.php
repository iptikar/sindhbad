<?php
class Sitemap extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		$data['services'] = $this->front_model->getAllRecords('services');
$data['categories'] = $this->front_model->getAllRecords('category');

		$data['seo'] = $this->front_model->getRecord('static_seo_pages',array('id_static_seo_pages'=>11),TRUE);
		//
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/sitemap",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}


}