<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Translation_lib {
   
   public function get_view_data($section,$id,$lang)
   {
	   $CI =& get_instance();
	    // $CI->db->select('*');
	    $data["title"]="Translate ".$section;
		$data["content"]="back_office/".$section."/add";
		$data["id_parent_translate"]=$id;
		$data["lang"]=$lang;
		$data["language"]=$CI->fct->getonerecord("languages",array("index"=>$lang));
		$cond=array("id_".$section=>$id);
		$data["parent_record"]=$CI->fct->getonerecord($section,$cond);
		//echo $id;exit;
		print '<pre>';print_r($data["parent_record"]);exit;
		$data["id"] = $data["parent_record"]["id_".$section];
		echo $id;exit;
		$data["info"] = $data["parent_record"];
		$breadcrumbs = '';
		$breadcrumbs .= '<ul class="breadcrumb">';
		$breadcrumbs .= '<li>';
		$breadcrumbs .= '<a href="'.site_url("back_office/".$section).'">List of '.$section.'</a>';
		$breadcrumbs .= '</li>';
		$breadcrumbs .= '<span class="divider">/</span>';
		$breadcrumbs .= '<li>';
		$breadcrumbs .= '<a href="'.site_url("back_office/".$section."/edit/".$data["parent_record"]["id_".$section]).'">'.$data["parent_record"]["title"].'</a>';
		$breadcrumbs .= '</li>';
		$breadcrumbs .= '<span class="divider">/</span>';
		
		$breadcrumbs .= '<li class="active">'.$data["language"]["title"].' Translation</li>';
		$breadcrumbs .= '</ul>';
		$data['breadcrumbs'] = $breadcrumbs;
		
		return $data;
   }
   function getDefaultRowLangID($section,$id,$onlyID = TRUE) {
	  $CI =& get_instance();
	  $defaultRecord = array();
	  $record = $CI->fct->getonerow($section,array("id_".$section=>$id));
	  if($record['id_parent_translate'] == 0) {
		  $defaultRecord = $record;
	  }
	  else {
		  $defaultRecord = $CI->fct->getonerow($section,array("id_".$section=>$record['id_parent_translate']));
	  }
	  if($onlyID) {
		  return $defaultRecord["id_".$section];
	  }
	  else {
		  return $defaultRecord;
	  }
	}
	function getTranslationID_byLang($section,$id,$lang,$onlyID = FALSE) {
		$return = 0;
		$CI =& get_instance();
		$getDefaultID = $this->getDefaultRowLangID($section,$id,TRUE);
		$check = $CI->fct->getonerow($section,array('id_'.$section=>$getDefaultID,'lang'=>$lang));
		if(!empty($check)) {
			$result = $check;
		}
		else {
			$CI->db->select('*');
			$CI->db->from($section);
			$cond = array(
				'id_parent_translate'=>$getDefaultID,
				'lang'=>$lang
			);
			$CI->db->where($cond);
			$query = $CI->db->get();
			$result = $query->row_array();
		}
		if(!empty($result)) {
			if($onlyID) {
				$return = $result['id_'.$section];
			}
			else {
				$return = $result;
			}
		}
		else {
			$return = $id;
		}
		return $return;
	}
   
}
