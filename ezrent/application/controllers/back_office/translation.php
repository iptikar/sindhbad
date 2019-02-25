<?
class Translation extends CI_Controller{

public function __construct()
{
parent::__construct();
 $this->lang->load("admin"); 
 $this->fct->validateCorrelationID();
}

public function section($section,$id)
{
	if ($this->config->item('language_module')){
		$data["title"]="Translate ".$section;
		$data["content"]="back_office/translation/list";
		$data["id"] = $id;
		$data["record"] = $this->fct->getonerow($section,array("id_".$section=>$id));
	    $data["languages"] = $this->fct->getAll("languages","sort_order");
		$data["section"] = $section;
		$data['uri_string'] = 'back_office/'.$section.'/edit/'.$id;
		$url = "http" . (($_SERVER['SERVER_PORT']==443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		//echo $url;exit;
		$this->session->set_userdata('admin_redirect_url',$url);
		$this->load->view('back_office/template',$data);
	}
	else {
		redirect(site_url('back_office/home/dashboard'));
	}
}
public function create($section,$id,$lang)
{
	$record = $this->fct->getonerow($section,array("id_".$section=>$id));
	$content_type = $this->fct->getonerow('content_type',array('used_name'=>$section));
	$fields = $this->fct->getAll_cond('content_type_attr','sort_order',array('id_content'=>$content_type['id_content'],'translated'=>1));
	$q = 'UPDATE `'.$section.'` SET ';
	$q .= ' `title'.getFieldLanguage($lang).'` = `title`,';
	$q .= ' `meta_title'.getFieldLanguage($lang).'` = `meta_title`,';
	$q .= ' `meta_description'.getFieldLanguage($lang).'` = `meta_description`,';
	$q .= ' `meta_keywords'.getFieldLanguage($lang).'` = `meta_keywords`,';
	$q .= ' `title_url'.getFieldLanguage($lang).'` = `title_url`';
	$i=0;
	if(!empty($fields)) {
		$c = count($fields);
		foreach($fields as $value) {
			$i++;
			if($i == 1) $q .= ',';
			$q .= ' `'.str_replace(' ','_',$value['name']).getFieldLanguage($lang).'` = `'.str_replace(' ','_',$value['name']).'`';
			if($i != $c) $q .= ',';
		}
		//echo $q;exit;
	}
	$q .= ' WHERE `id_'.$section.'` = '.$id;
	//if($i == 0) $q .= ',';
	$this->db->query($q);
	$uri_string = 'back_office/'.$section.'/edit/'.$id;
	redirect($this->lang->switch_uri($lang,$uri_string));
}

/*public function create($section,$id,$lang){
if ($this->config->item('language_module')){
	$info = $this->fct->getonerow($section,array('id_'.$section=>$id));
	if($info['id_parent_translate'] == 0) {
	$create_translation = array();
	foreach($info as $field => $value) {
		if($field != 'id_'.$section) {
			$new_value = $this->getFieldValue($section,$field,$value);
			$create_translation[$field] = $new_value;
		}
	}
	//$data = $this->translation_lib->get_view_data($section,$id,$lang);
	//$this->load->view("back_office/template",$data);
	$info = $create_translation;
	$info['created_date'] = date('Y-m-d h:i:s');
	$info['lang'] = $lang;
	$info['id_parent_translate'] = $id;
	$info['id_user'] = $this->session->userdata('uid');
	$this->db->insert($section,$info);
	$last_id = $this->db->insert_id();
	// check if record has gallery and create its gallery
	$this->db->select('content_type.*');
	$this->db->from('content_type');
	$cond = array(
		'content_type.used_name'=>$section
	);
	$this->db->where($cond);
	$query = $this->db->get();
	$result = $query->row_array();
	if($result['gallery'] == 1) {
		$this->db->select('*');
		$this->db->from($section.'_gallery');
		$cond = array(
			'id_'.$section=>$id
		);
		$this->db->where($cond);
		$query = $this->db->get();
		$gallery = $query->result_array();
		if(!empty($gallery)) {
			if(!empty($result['thumb_val_gal'])) {
				$thumb_vals = explode(',',$result['thumb_val_gal']);
			}
			foreach($gallery as $gal) {
				$ImageCopy = $this->fct->createImageCopy('uploads/'.$section.'/gallery',$gal['image']);
				$this->fct->createthumb1($ImageCopy,$section.'/gallery','120x120');
				if(!empty($thumb_vals)) {
					foreach($thumb_vals as $valthumb) {
						if($result['resize_status'] == 1) {
							$this->fct->createthumb1($ImageCopy,$section.'/gallery',$valthumb);
						}
						else {
							$this->fct->createthumb($ImageCopy,$section.'/gallery',$valthumb);
						}
					}
				}
				$create_gal_value = array();
				$create_gal_value['created_date'] = date('Y-m-d h:i:s');
				$create_gal_value['image'] = $ImageCopy;
				$create_gal_value['sort_order'] = $gal['sort_order'];
				$create_gal_value['id_'.$section] = $last_id;
				$this->db->insert($section.'_gallery',$create_gal_value);
			}
		}
	}
	}
	// end gallery part
	redirect(site_url('back_office/'.$section.'/edit/'.$last_id.'/translate'));
} 
else {
	redirect(site_url("back_office/home/dashboard"));
}
}
private function getFieldValue($section,$field,$value)
{
	$new_value = '';
	$attr_name = str_replace('_',' ',$field);
	$cond = array(''=>$attr_name);
	$this->db->select('content_type_attr.*');
	$this->db->from('content_type_attr');
	$this->db->join('content_type','content_type.id_content = content_type_attr.id_content');
	$cond = array(
		'content_type.used_name'=>$section,
		'content_type_attr.name'=>$attr_name
	);
	$this->db->where($cond);
	$this->db->group_by('content_type_attr.id_attr');
	$query = $this->db->get();
	$result = $query->row_array();
	if(!empty($result)) {
		if($result['type'] == 4) {
			if($value != '') {
				$ImageCopy = $this->fct->createImageCopy('uploads/'.$section,$value);
				$new_value = $ImageCopy;
				if($result['thumb'] == 1 && !empty($result['thumb_val'])) {
					$thumb_vals = explode(',',$result['thumb_val']);
					if(!empty($thumb_vals)) {
						foreach($thumb_vals as $thumb_val) {
							if(!empty($thumb_val)) {
								if($result['resize_status'] == 1) {
									$this->fct->createthumb1($ImageCopy,$section,$thumb_val);
								}
								else {
									$this->fct->createthumb($ImageCopy,$section,$thumb_val);
								}
							}
						}
					}
				}
			}
		}
		elseif($result['type'] == 5) {
			if($value != '') {
				$ImageCopy = $this->fct->createImageCopy('uploads/'.$section,$value);
				$new_value = $ImageCopy;
			}
		}
		elseif($result['type'] == 7) {
			$new_value = 0;
		}
		else {
			$new_value = $value;
		}
	}
	else {
		$new_value = $value;
	}
	return $new_value;
}*/


}