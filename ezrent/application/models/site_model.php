<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Site_model extends CI_Model{

/*************************************************************************/	
function metaTags($id,$table)
{
	$default_seo = $this->fct->getonerow('static_seo_pages',array('id_static_seo_pages'=>1));
	$seo = $this->fct->getonerow($table,array('id_'.$table=>$id));
	
    if(isset($seo['meta_title'.getFieldLanguage()]) && $seo['meta_title'.getFieldLanguage()] != "")
	$default_seo['meta_title'.getFieldLanguage()] = $seo['meta_title'.getFieldLanguage()];
	
	if(isset($seo['meta_description'.getFieldLanguage()]) && $seo['meta_description'.getFieldLanguage()] != "")
	$default_seo['meta_description'.getFieldLanguage()] = $seo['meta_description'.getFieldLanguage()];
	
	if(isset($seo['meta_keywords'.getFieldLanguage()]) && $seo['meta_keywords'.getFieldLanguage()] != "")
	$default_seo['meta_keywords'.getFieldLanguage()] = $seo['meta_keywords'.getFieldLanguage()];
	
	return $default_seo;
}
/*************************************************************************/
function getMenuSections($position = '',$footer = FALSE)
{
	$this->db->select("*");
	$this->db->from("sections");
	$this->db->where("deleted",0);
	$this->db->where("status",1);
	if($footer)
	$this->db->where("display_in_footer",1);
	if($position != "")
	$this->db->where("menu_position",$position);
	//$this->db->group_by("");
	$this->db->order_by("sort_order");
	$query = $this->db->get();
	$results = $query->result_array();
	if(!empty($results)) {
		foreach($results as $k => $res) {
			$results[$k]['sub_levels'] = $this->getSubMenus($res['id_sections']);
		}
	}
	return $results;
}
function getOneSection($id,$section = 'sections')
{
	$this->db->select("*");
	$this->db->from($section);
	$this->db->where("deleted",0);
	$this->db->where("status",1);
	$this->db->where("id_".$section,$id);
	$query = $this->db->get();
	$results = $query->row_array();
	return $results;
}
/*************************************************************************/
function getSubMenus($id_section)
{
	$this->db->select("*");
	$this->db->from("sections_pages");
	$this->db->where("deleted",0);
	$this->db->where("status",1);
	$this->db->where("id_sections",$id_section);
	$this->db->order_by("sort_order");
	$query = $this->db->get();
	$results = $query->result_array();
	if(!empty($results)) {
		foreach($results as $k => $v) {
			$this->db->select("*");
			$this->db->from("sections_pages_details");
			$this->db->where("deleted",0);
			$this->db->where("status",1);
			$this->db->where("id_sections_pages",$v['id_sections_pages']);
			$this->db->order_by("sort_order");
			$query = $this->db->get();
			$sub_results = $query->result_array();
			$results[$k]['sub_levels'] = $sub_results;
		}
	}
	return $results;
}
/*************************************************************************/
function getModuleData($id,$type,$module,$order = "sort_order")
{
	$data = array();
	$ignore = array("adverse_drug_form","investors_b2b_form","login");
	if(!empty($module) && !in_array($module,$ignore)) {
		if($module == "executive_team" || $module == "board_of_directors" || $module == "facilities") {
			$url = route_to('pages/sub/'.$id).'?pagination=on';
			$cond = array();
			$like = array();
			if($module == "facilities")
			$cond['id_sections_pages'] = $id;
			$cc = $this->site_model->getModuleInfo($module,$cond,$like,$order);
			$config['base_url'] = $url;
			$config['total_rows'] = $cc;
			$config['num_links'] = '8';
			$config['use_page_numbers'] = TRUE;
			$config['page_query_string'] = TRUE;
			$config['per_page'] = 8;
			$this->pagination->initialize($config);
			if($this->input->get('per_page') != "") {
				$page = $this->input->get('per_page');
			}
			else {
				$page = 0;
			}
			$data['count'] = $cc;
			$data['info'] = $this->site_model->getModuleInfo($module,$cond,$like,$order,$config['per_page'],$page);
		}
		elseif($module == "events" || $module == "press_releases") {
			$url = route_to('pages/sub/'.$id).'?pagination=on';
			if($this->uri->segment(2) == "arabic" || $this->uri->segment(4) == "arabic")
			$url = route_to('pages/sub/'.$id.'/arabic').'?pagination=on';
			$cond = array();
			$like = array();
			$lang = "en";
			//echo $this->uri->segment(2) ;exit;
			if($this->uri->segment(2) == "arabic" || $this->uri->segment(4) == "arabic")
			$lang = "ar";
			$cc = $this->site_model->getEventsInfo($module,$lang);
			$config['base_url'] = $url;
			$config['total_rows'] = $cc;
			$config['num_links'] = '8';
			$config['use_page_numbers'] = TRUE;
			$config['page_query_string'] = TRUE;
			$config['per_page'] = 8;
			$this->pagination->initialize($config);
			if($this->input->get('per_page') != "") {
				$page = $this->input->get('per_page');
			}
			else {
				$page = 0;
			}
			$data['count'] = $cc;
			$data['info'] = $this->site_model->getEventsInfo($module,$lang,$config['per_page'],$page);
			//print '<pre>'; print_r($data['info']); exit;
			//echo count($data['info']).' AAA '.$cc;exit;
		}
		elseif($module == "awards") {
			$data['info']['awards'] = $this->site_model->getAwards();
			$data['info']['accreditations'] = $this->fct->getAll("accreditations",$order);
		}
		elseif($module == "investors_reports") {
			$lang = "en";
			//echo $this->uri->segment(2) ;exit;
			if($this->uri->segment(2) == "arabic" || $this->uri->segment(4) == "arabic")
			$lang = "ar";
			$data['info'] = $this->site_model->getInvestorsReports($id,$lang);
		}
		elseif($module == "contact") {
			$data['info'] = $this->fct->getonerow("settings",array("id_settings"=>1));
		}
		elseif($module == "photos") {
			$photos = $this->fct->getAll("photos","sort_order");
			if(!empty($photos)) {
				$data['info']['photos'] = $photos;
				$arr = $this->uri->ruri_to_assoc(3);
				//print '<pre>';print_r($arr);exit;
				if(!empty($arr)) {
					foreach($arr as $ar) {
						$id = $ar;
						break;
					}
				}// media-library-photos-products
				if(!isset($id) || (isset($id) && ($id == '' || $id == 0))) {
					$id = $photos[0]['id_photos'];
				}
				$data['info']['photo_id'] = $id;
				$data['info']['photo_selected'] = $this->fct->getonerow("photos",array("id_photos"=>$id));
				$data['info']['gallery'] = $this->fct->getAll_cond("photos_gallery","sort_order",array("id_photos"=>$id));
				//print '<pre>'; print_r($data['info']['gallery']); exit;
			}
		}
		elseif($module == "products") {
			$data['info'] = $this->fct->getAll_cond($module,$order,array("id_sections_pages"=>$id));
		}
		else {
			$data['info'] = $this->fct->getAll($module,$order);
		}
	}
	//print '<pre>'; print_r($data); exit;
	return $data;
}
function getModuleInfo($module,$cond = array(), $like = array(), $order = "sort_order", $limit = "", $offset = "")
{
	$this->db->select("*");
	$this->db->from($module);
	$this->db->where("deleted",0);
	$this->db->where("status",1);
	if(!empty($cond))
	$this->db->where($cond);
	if(!empty($like))
	$this->db->where($like);
	$this->db->order_by($order);
	if($limit != "")
	$this->db->limit($limit,$offset);
	$query = $this->db->get();
	//echo $this->db->last_query();exit;
	if($limit != "")
	$results = $query->result_array();
	else
	$results = $query->num_rows();
	return $results;
}
function getSectionModule($module)
{
	$q = "SELECT title, id_sections AS id, 'sections' AS type, 'index' AS method FROM sections WHERE module = '".$module."'";
	$q .= " UNION(SELECT title, id_sections_pages AS id, 'sections_pages' AS type, 'sub' AS method FROM sections_pages WHERE module = '".$module."')";
	$q .= " UNION(SELECT title, id_sections_pages_details AS id, 'sections_pages_details' AS type, 'details' AS method FROM sections_pages_details WHERE module = '".$module."')";
	$query = $this->db->query($q);
	$res = $query->row_array();
	return $res;
}

/*************************************************************************/
function getParentSections($id_page_details) 
{
	$q = 'SELECT s.id_sections, s.title'.getFieldLanguage().' AS section_title, p.id_sections_pages, p.title'.getFieldLanguage().' AS page_title FROM sections_pages p';
	$q .= ' JOIN sections s ON p.id_sections = s.id_sections';
	$q .= ' JOIN sections_pages_details d ON p.id_sections_pages = d.id_sections_pages';
	$q .= ' WHERE d.id_sections_pages_details = '.$id_page_details;
	$query = $this->db->query($q);
	$results = $query->row_array();
	return $results;
}
function getParentLevel($id_page_details) 
{
	$q = 'SELECT s.id_sections, s.title'.getFieldLanguage().' AS title, p.id_sections_pages, p.title'.getFieldLanguage().' AS page_title FROM sections_pages p';
	$q .= ' JOIN sections s ON p.id_sections = s.id_sections';
	//$q .= ' JOIN sections_pages_details d ON p.id_sections_pages = d.id_sections_pages';
	$q .= ' WHERE p.id_sections_pages = '.$id_page_details;
	$query = $this->db->query($q);
	$results = $query->row_array();
	return $results;
}

function getLatestUpdatedContent()
{
$q = "SELECT * FROM content_log ORDER BY id_content_log DESC";
$query = $this->db->query($q);
$res = $query->row_array();
return $res;
}
/*************************************************************************/

function getAllPagesForJsonImport($limit = "", $offset = 0)
{
	$this->db->select("c.*");
	$this->db->from("content c");
	$this->db->where("c.deleted",0);
	//if(!empty($cond))
	//$this->db->where($cond);
	//if(!empty($like))
	//$this->db->like($like);
	//$this->db->where("c.id_parent",$id_category);
	$this->db->order_by("c.sort_order");
	if(!empty($limit))
	$this->db->limit($limit,$offset);
	$query = $this->db->get();
	//echo $this->db->last_query();exit;
	if(!empty($limit)) {
		$results = $query->result_array();
		foreach($results as $k => $res) {
			$imgUrl = '';
			if(!empty($res['image'])) {
				$imgUrl = $this->return_url().'uploads/content/'.$res['image'];
			}
			$results[$k]['imageUrl'] = $imgUrl;
			if($this->router->class == "request") {
				$results[$k]['description'] = cleanJsonContent($res['description']);
			}
			// get gallery
			$results[$k]['gallery'] = $this->getContentGallery($res['id_content']);
// get listing
			$results[$k]['listing'] = $this->getContentListing($res['id_content']);
		}
	}
	else {
		$results = $query->num_rows();
	}
	return $results;
}

function getContentPages($id_category = 0,$cond = array(), $like = array(), $limit = "", $offset = 0,$json = FALSE)
{
	$this->db->select("c.*");
	$this->db->from("content c");
	$this->db->where("c.deleted",0);
	if(!empty($cond))
	$this->db->where($cond);
	if(!empty($like))
	$this->db->like($like);
	$this->db->where("c.id_parent",$id_category);
	$this->db->order_by("c.sort_order");
	if(!empty($limit))
	$this->db->limit($limit,$offset);
	$query = $this->db->get();
	//echo $this->db->last_query();exit;
	if(!empty($limit)) {
		$results = $query->result_array();
		
		foreach($results as $k => $res) {
			$imgUrl = '';
			if(!empty($res['image'])) {
				$imgUrl = $this->return_url().'uploads/content/'.$res['image'];
			}
			$results[$k]['imageUrl'] = $imgUrl;
			if($this->router->class == "request") {
				$results[$k]['description'] = cleanJsonContent($res['description']);
			}
			// get gallery
			$results[$k]['gallery'] = $this->getContentGallery($res['id_content']);
// get listing
			$results[$k]['listing'] = $this->getContentListing($res['id_content']);
if($json){
$results[$k]['sub_levels'] = $this->getOnlyOneLevelSub($res['id_content'],$cond,$like,$limit,$offset);
}
if(!$json){
			// get sub levels
			$results[$k]['sub_levels'] = $this->getContentPages($res['id_content'],array(),array(),$limit,$offset);

			// get parent levels
			$results[$k]['parent_level'] = $this->getContentTreeParentLevels($res['id_parent']);
			$results[$k]['parent_level'] = arrangeParentLevels($results[$k]['parent_level']);
		}	
		}
	}
	else {
		$results = $query->num_rows();
	}
	return $results;
}
function getOnlyOneLevelSub($id_category = 0,$cond = array(), $like = array(), $limit = "", $offset = 0,$json = FALSE)
{
$this->db->select("c.*");
	$this->db->from("content c");
	$this->db->where("c.deleted",0);
	if(!empty($cond))
	$this->db->where($cond);
	if(!empty($like))
	$this->db->like($like);
	$this->db->where("c.id_parent",$id_category);
	$this->db->order_by("c.sort_order");
	if(!empty($limit))
	$this->db->limit($limit,$offset);
	$query = $this->db->get();
	//echo $this->db->last_query();exit;
	if(!empty($limit)) {
		$results = $query->result_array();
		
		foreach($results as $k => $res) {
			$imgUrl = '';
			if(!empty($res['image'])) {
				$imgUrl = $this->return_url().'uploads/content/'.$res['image'];
			}
			$results[$k]['imageUrl'] = $imgUrl;
			if($this->router->class == "request") {
				$results[$k]['description'] = cleanJsonContent($res['description']);
			}
			// get gallery
			$results[$k]['gallery'] = $this->getContentGallery($res['id_content']);
// get listing
			$results[$k]['listing'] = $this->getContentListing($res['id_content']);
	
		}
	}
	else {
		$results = $query->num_rows();
	}
	return $results;
}
function getContentListing($id)
{
	$q = "SELECT id_content_listing AS id, title, sort_order FROM content_listing WHERE id_content = ".$id." ORDER BY sort_order";
	$query = $this->db->query($q);
	$results = $query->result_array();
if(!empty($results)) {
foreach($results as $k => $v) {
$q1 = "SELECT id_content_listing_sub AS id, title, sort_order FROM content_listing_sub WHERE id_content_listing = ".$v['id']." ORDER BY sort_order";
	$query1 = $this->db->query($q1);
	$results[$k]['sub'] = $query1->result_array();
}
}
	return $results;
}
function getContentGallery($id)
{
	$url = $this->return_url();
	$q = "SELECT *, CONCAT(IF(LENGTH(image), '".$url."uploads/content/gallery/300x280/', ''), `image`) AS image_url FROM content_gallery WHERE id_content = ".$id." ORDER BY sort_order";
	$query = $this->db->query($q);
	$results = $query->result_array();
	return $results;
}
function getContentTreeParentLevels($id)
{
	$this->db->select("*");
	$this->db->from("content");
	$this->db->where("id_content",$id);
//$this->db->where("deleted",0);
	$query = $this->db->get();
	$row = $query->row_array();
	if(!empty($row) && $row['id_parent'] != 0) {
		$row['parent_level'] = $this->getContentTreeParentLevels($row['id_parent']);
	}
	return $row;
}
/*************************************************************************/
public function return_url()
{
  $base_url = str_replace('http://','',base_url());
  $protocol = 'http';
  $url = $protocol.'://'.$base_url;
  return $url;
}
/*************************************************************************/
function getRegions()
{
$q = "SELECT * FROM regions WHERE deleted = 0 ORDER BY sort_order";
$query = $this->db->query($q);
$results = $query->result_array();
if(!empty($results)) {
foreach($results as $k => $res) {

$q1 = "SELECT * FROM regions_countries WHERE deleted = 0 AND id_regions = ".$res['id_regions']." ORDER BY sort_order";
$query1 = $this->db->query($q1);
$results1 = $query1->result_array();
$results[$k]['countries'] = $results1;
}
}
return $results;
}
function getBranches($arr,$limit,$offset)
{
$q = "SELECT * FROM branches";
$q .= " WHERE deleted = 0";
if(!empty($arr)) {
foreach($arr as $k => $v) {
if($k == "region_id")
$q .= " AND id_regions = ".$v;
if($k == "country_id")
$q .= " AND id_regions_countries = ".$v;
}
}
$q .= " ORDER BY sort_order";
if($limit != "")
$q .= " LIMIT ".$limit." OFFSET ".$offset;
$query = $this->db->query($q);
if($limit != "") {
$result = $query->result_array();
if(!empty($result)) {
foreach($result as $k1 => $v1) {
$result[$k1]['address'] = cleanJsonContent($v1['address']);
}
}
}
else
$result = $query->num_rows();
return $result;
}
/*************************************************************************/
function deleteFullCategoryContent($id)
{
	$getAllLevels = $this->getContentPages($id,array(), array(), 1000,0);
	print '<pre>'; print_r($getAllLevels); exit;
}
/*************************************************************************/
function getLatesNews()
{
$q = "SELECT * FROM news WHERE deleted = 0 AND status = 1 ORDER BY sort_order";
$query = $this->db->query($q);
$results = $query->row_array();
return $results;
}
/*************************************************************************/
/*************************************************************************/
/*************************************************************************/
/*************************************************************************/
/*************************************************************************/
}