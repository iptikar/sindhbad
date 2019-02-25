<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Export_model extends CI_Model{

public function getCount($section)
{
	$cc = 0;
	if($section == "newsletter")
	$cc = $this->getnewsletter();
	return $cc;
}
public function getRecords($section,$limit,$offset)
{
	$data = array();
	if($section == "newsletter")
	$data = $this->getnewsletter($limit,$offset);
	return $data;
}
/////////////////////////////////////////////////////////////////////////
private function getnewsletter($limit = '',$offset = '') {
	$data['title'] = 'list of subscribers';
	$results = array();
	$data['keys'][0] = 'Full Name';
$data['keys'][1] = 'Email';
	$data['keys'][2] = 'Company';
	//$data['keys'][2] = 'Position';
	$data['keys'][3] = 'Phone';
	$data['keys'][4] = 'Address';
	//$data['keys'][5] = 'Country';
	//$data['keys'][6] = 'City';
	//$data['keys'][7] = 'State';
	//$data['keys'][8] = 'Postal Code';
	//$data['keys'][9] = 'Targets';
	$data['arr'] = array();
	$q = 'SELECT * FROM newsletter WHERE deleted = 0 AND exported = 0';
	if($limit != '')
	$q .= ' LIMIT '.$limit.' OFFSET '.$offset;
	$query = $this->db->query($q);
	if($limit != '')$results = $query->result_array();
	else $data = $query->num_rows();
	if(!empty($results)) {
		$tobedeleted = array();
		foreach($results as $key => $val) {
			array_push($tobedeleted,$val['id_newsletter']);
			$data['arr'][$key]['full_name'] = $val['name'];
$data['arr'][$key]['email'] = $val['email'];
			$data['arr'][$key]['company'] = $val['company'];
			//$data['arr'][$key]['position'] = $val['position'];
			$data['arr'][$key]['phone'] = $val['phone'];
			$data['arr'][$key]['address'] = $val['address'];
			//$data['arr'][$key]['country'] = $val['country'];
			//$data['arr'][$key]['city'] = $val['city'];
			//$data['arr'][$key]['state'] = $val['state'];
			//$data['arr'][$key]['postal_code'] = $val['postal_code'];
			//$data['arr'][$key]['subscription_target'] = str_replace("|",",",$val['subscription_target']);
		}
		if(!empty($tobedeleted)) {
			$q1 = "UPDATE newsletter SET exported = 1, exported_date = '".date("Y-m-d H:i:s")."' WHERE id_newsletter IN (".implode(",",$tobedeleted).")";
			$this->db->query($q1);
		}
	}
	return $data;
}
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
}