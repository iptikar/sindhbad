<?php
class Blog extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		$data['recent_blog'] = $this->front_model->getAllRecords('blog','','blog_date','',2);
		$data['popular_blog'] = $this->front_model->getAllRecords('blog',array('is_popular'=>TRUE),'blog_date','',5);
		$data['blog_category'] = $this->front_model->getAllRecords('blog_category','','sort_order');
		$data['blog_tags'] = $this->front_model->getAllRecords('blog_tags','','sort_order');
		$data['seo'] = $this->front_model->getRecord('static_seo_pages',array('id_static_seo_pages'=>6),TRUE);
		//pagination
		$all_blogs = $this->front_model->getAllRecords('blog');
		$config['base_url'] = base_url().'blog/index';
		$config['total_rows'] = count($all_blogs);
		$config['per_page'] = '4';
		$config['num_links'] = '3';
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config); 
		$data['blog'] = $this->front_model->getAllRecords('blog','','blog_date DESC','',$config['per_page'],$this->uri->segment(3));
		$data['pagination_links'] = $this->pagination->create_links();
		//end of the pagination
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/blog",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}
    public function details($id){
		$header['current_page'] = 'blog';
		$footer['current_page'] = 'blog';
		//
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		$data['blog'] = $this->front_model->getRecord('blog',array('id_blog'=>$id),TRUE);
		$data['recent_blog'] = $this->front_model->getAllRecords('blog','','blog_date','',2);
		$data['popular_blog'] = $this->front_model->getAllRecords('blog',array('is_popular'=>TRUE),'blog_date','',5);
		$data['blog_category'] = $this->front_model->getAllRecords('blog_category','','sort_order');
		$data['blog_tags'] = $this->front_model->getAllRecords('blog_tags','','sort_order');
		$data['seo']['meta_title'] = $data['blog']['meta_title'];
		$data['seo']['meta_keywords'] = $data['blog']['meta_keywords'];
		$data['seo']['meta_description'] = $data['blog']['meta_description'];
		//print '<pre>'; print_r($data['blog']); exit;
		if(!empty($data['blog']['picture'])){
			$data['og_image'] = base_url().'uploads/blog/736x329/'.$data['blog']['picture'];}
		//
		$data['url'] = "http" . (($_SERVER['SERVER_PORT']==443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		//
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/blog-details",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}
    public function category($id_category=0){
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		$data['blog'] = $this->front_model->getAllRecords('blog',"find_in_set('".$id_category."',id_blog_category) <> 0",'blog_date');
		$data['recent_blog'] = $this->front_model->getAllRecords('blog','','blog_date','',2);
		$data['popular_blog'] = $this->front_model->getAllRecords('blog',array('is_popular'=>TRUE),'blog_date');
		$data['blog_category'] = $this->front_model->getAllRecords('blog_category','','sort_order');
		$data['blog_tags'] = $this->front_model->getAllRecords('blog_tags','','sort_order');
		$data['seo'] = $this->front_model->getRecord('static_seo_pages',array('id_static_seo_pages'=>6),TRUE);
		//
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/blog",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}
    public function tags($id_tag=0){
		$header['settings'] = $this->front_model->getRecord('settings',array('id_settings'=>1));
		$footer['settings'] = $header['settings'];
		$data['blog'] = $this->front_model->getAllRecords('blog',"find_in_set('".$id_tag."',id_blog_tags) <> 0",'blog_date');
		$data['recent_blog'] = $this->front_model->getAllRecords('blog','','blog_date','',2);
		$data['popular_blog'] = $this->front_model->getAllRecords('blog',array('is_popular'=>TRUE),'blog_date');
		$data['blog_category'] = $this->front_model->getAllRecords('blog_category','','sort_order');
		$data['blog_tags'] = $this->front_model->getAllRecords('blog_tags','','sort_order');
		$data['seo'] = $this->front_model->getRecord('static_seo_pages',array('id_static_seo_pages'=>6),TRUE);
		//
		$this->template->write_view("header","front/header",$header);
		$this->template->write_view("content","front/blog",$data);
		$this->template->write_view("footer","front/footer",$footer);
		$this->template->render();
	}
}