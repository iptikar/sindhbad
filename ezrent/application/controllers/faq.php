<?php
class Faq extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		$data['faq'] = $this->front_model->getAllRecords('faq');
		$data['seo'] = $this->front_model->getRecord('static_seo_pages',array('id_static_seo_pages'=>7),TRUE);
		//
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/faq",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}
}