<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Import_model extends CI_Model{
	
public function import($section,$arr)
{
	$data = array();
	if($section == "historicaldata")
	$data = $this->importHistoricalData($arr);

	if($section == "dmehistoricaldata")
	$data = $this->importDMEHistoricalData($arr);

if($section == "news")
	$data = $this->importNewsData($arr);
	return $data;
}
/////////////////////////////////////////////////////////////////////////
private function importHistoricalData($arr)
{
	$arrayCount = count($arr);
	$stock_no = array();
	//print '<pre>';print_r($arr);exit;
	$id_cat = 20;
	for($i=2;$i<=$arrayCount;$i++){
		$tradeData = changeDate(trim($arr[$i]["A"]),"Y-m-d");
		$markerPrice = trim($arr[$i]["B"]);
		$settlementPrice = trim($arr[$i]["C"]);
		$contractVolume = trim($arr[$i]["D"]);
		$OpenInterest = trim($arr[$i]["E"]);
		$cond = array("trade_date"=>$tradeData,"id_sections_pages_details"=>$id_cat);
		$check = $this->fct->getonerow("historical_data",$cond);
		
		$insert['dme_marker_price'] = $markerPrice;
		$insert['dme_settlement_price'] = $settlementPrice;
		$insert['contract_volume'] = $contractVolume;
		$insert['open_interest'] = $OpenInterest;
		
		if(empty($check)) {
			$insert['id_sections_pages_details'] = $id_cat;
			$insert['trade_date'] = $tradeData;
			$insert['created_date'] = date("Y-m-d H:i:s");
			$this->db->insert("historical_data",$insert);
		}
		else {
			$insert['updated_date'] = date("Y-m-d H:i:s");
			$this->db->update("historical_data",$insert,$cond);
		}
	}

	return TRUE;
}
/////////////////////////////////////////////////////////////////////////
private function importDMEHistoricalData($arr)
{
	$arrayCount = count($arr);
	$stock_no = array();
	//print '<pre>';print_r($arr);exit;
	$id_cat = 20;
	for($i=2;$i<=$arrayCount;$i++){
		$tradeData = trim($arr[$i]["B"]);
list($m,$d,$y) = explode("-",$tradeData);
$tradeData = "20".$y."-".$m."-".$d;
		$vol_oq = trim($arr[$i]["F"]);
		$oldFile = trim($arr[$i]["P"]);
		//$contractVolume = trim($arr[$i]["D"]);
		//$OpenInterest = trim($arr[$i]["E"]);
		//$cond = array("trade_date"=>$tradeData,"id_sections_pages_details"=>$id_cat);
		//$check = $this->fct->getonerow("historical_data",$cond);
		
		//$insert['dme_marker_price'] = $markerPrice;
		//$insert['dme_settlement_price'] = $settlementPrice;
		//$insert['contract_volume'] = $contractVolume;
		//$insert['open_interest'] = $OpenInterest;
		
		//if(empty($check)) {
			$insert['old_file'] = $oldFile;
			$insert['date'] = $tradeData;
$insert['vol_oq'] = $vol_oq;
			$insert['created_date'] = date("Y-m-d H:i:s");
			$this->db->insert("dme_historical_data",$insert);
		//}
		//else {
			//$insert['updated_date'] = date("Y-m-d H:i:s");
			//$this->db->update("historical_data",$insert,$cond);
		//}
	}

	return TRUE;
}
/////////////////////////////////////////////////////////////////////////
private function importNewsData($arr)
{
	$arrayCount = count($arr);
	//print '<pre>';print_r($arr);exit;
	for($i=2;$i<=$arrayCount;$i++){
		$sortOrder = trim($arr[$i]["B"]);
		$title = trim($arr[$i]["C"]);
		$newsDate = changeDate(trim($arr[$i]["E"]),"Y-m-d");
		$description = trim($arr[$i]["F"]);
		$created_date = changeDate(trim($arr[$i]["K"]),"Y-m-d H:i:s");
		
		$NewsThumb = trim($arr[$i]["G"]);
		$NewsImage = trim($arr[$i]["H"]);
		$DownloadLinks = trim($arr[$i]["I"]);
		$Nid = trim($arr[$i]["A"]);
		
		$insert['sort_order'] = $sortOrder;
		$insert['title'] = $title;
		$insert['meta_title'] = $title;
		$insert['meta_keywords'] = $title;
		$insert['meta_description'] = $title;
		$insert['title_url'] = $this->fct->cleanURL("news_and_events",url_title($title));
		$insert['created_date'] = $created_date;
		$insert['description'] = $description;
		$insert['date'] = $newsDate;
		
		$insert['NewsThumb'] = $NewsThumb;
		$insert['NewsImage'] = $NewsImage;
		$insert['DownloadLinks'] = $DownloadLinks;
		$insert['Nid'] = $Nid;

		$this->db->insert("news_and_events",$insert);

	}

	return TRUE;
}
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
}