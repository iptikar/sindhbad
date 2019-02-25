<?php
class News extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		$data['seo'] = $this->front_model->getRecord('static_seo_pages',array('id_static_seo_pages'=>5),TRUE);
		//pagination
		$all_news = $this->front_model->getAllRecords('news');
		$config['base_url'] = base_url().'news/index';
		$config['total_rows'] = count($all_news);
		$config['per_page'] = '6';
		$config['num_links'] = '3';
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config); 
		$data['news'] = $this->front_model->getAllRecords('news','','news_date','',$config['per_page'],$this->uri->segment(3));
		$data['pagination_links'] = $this->pagination->create_links();
		//end of the pagination
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/news",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}
    public function details($id){
		$header['current_page'] = 'news';
		$footer['current_page'] = 'news';
		//
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		$data['news'] = $this->front_model->getRecord('news',array('id_news'=>$id),TRUE);
		$data['popular_news'] = $this->front_model->getAllRecords('news',array('is_popular'=>TRUE,'id_news <> '=>$id),'news_date','',3);
		$data['related_news'] = $this->front_model->getRelatedNews($id);
		$data['seo']['meta_title'] = $data['news']['meta_title'];
		$data['seo']['meta_keywords'] = $data['news']['meta_keywords'];
		$data['seo']['meta_description'] = $data['news']['meta_description'];
		if(!empty($data['news']['picture']))
			$data['og_image'] = base_url().'uploads/news/736x329/'.$data['news']['picture'];
		//
		$data['url'] = "http" . (($_SERVER['SERVER_PORT']==443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		//
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/news-details",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}
}