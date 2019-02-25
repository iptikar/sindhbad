<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Excel_c extends CI_Controller {

public function __construct()
{
parent::__construct();
$this->load->model("export_model");
$this->limit = 2000;
$this->fct->validateCorrelationID();
}

function export($section)
{
//if($this->acl->has_permission($section,'export')) {
$url = $this->generate_url($section);
$cond = array();
$cc= $this->export_model->getCount($section); 
if($cc > 0) {
$limit = $this->limit;
$ratio = $cc / $limit;
if(round($ratio) < $ratio) {
	$ratio = round($ratio) + 1;
}
elseif(round($ratio) > $ratio) {
	$ratio = round($ratio);
}
if(isset($_GET['offset'])) {
$offset = $_GET['offset'];
$newoffset = $offset + $limit;
$url .= '&offset='.$newoffset;
$data = $this->export_model->getRecords($section,$limit,$offset);
if(intval($offset) + count($data['arr']) > $cc) {echo count($data['arr']);exit;
	$f['url'] = base_url().'back_office/excel_c/download';
	$this->load->view('back_office/excel_c/finish',$f);
}
else {
	$this->do_export($section,$data['title'],$data['keys'],$data['arr']);
	if($cc <= ($limit + $offset)) {
		$f['url'] = base_url().'back_office/excel_c/download/'.$section;
		$this->load->view('back_office/excel_c/finish',$f);
	}
	else {
		$data['url'] = $url;
		$data['step'] = ($offset / $limit) + 2;
		$data['ratio'] = $ratio;
		$this->load->view('back_office/excel_c/redirect',$data);
	}
	}
}
else {
	$offset = 0;
	$url .= '&offset='.$offset;
	$data['url'] = $url;
	$data['ratio'] = $ratio;
	$data['step'] = ($offset / $limit) + 1;
	$this->load->view('back_office/excel_c/redirect',$data);
}
}
else {
	echo 'No records found...';
}
/*}
else {
	$this->load->view("back_office/no_permission");
}*/
}
//////////////////////////////////////////////////////////////////////////////////////////
private function generate_url($section)
{
	$url = site_url('back_office/excel_c/export/'.$section);
	$url .= '?pagination=on';
	if(!empty($_GET)) {
		foreach($_GET as $kt => $vt) {
			if($kt != "offset" && $kt != "pagination") {
				if(is_array($vt)) {
					foreach($vt as $vt_sub) {
						$url .= '&'.$kt.'[]='.$vt_sub;
					}
				}
				else {
					$url .= '&'.$kt.'='.$vt;
				}
			}
		}
	}
	return $url;
}
//////////////////////////////////////////////////////////////////////////////////////////
private function do_export($section,$title,$keys,$arr)
{
	if($this->session->userdata("sid_".$section) == "")
	$this->session->set_userdata("sid_".$section,$this->session->userdata("session_id")."_".$section);
	require_once './Classes/PHPExcel.php';
	$objPHPExcel = new PHPExcel();
	if(isset($arr['style']) && !empty($arr['style']))
	$styleArray1 = $arr['style'];
	$styleArray1['font']= array(
			'bold' => TRUE,
			'size'  => 13,
			'name'  => 'Verdana',
			'color' => array('rgb' => '000000'),
	);
	$styleArray1['alignment']= array(
			'wrap'       => true,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
	);
	$sheet = $objPHPExcel->getActiveSheet();
	$sheet->setCellValueByColumnAndRow(0, 1, $title);
	$sheet->mergeCells('A1:'.$this->toAlpha(count($keys)).'1');
	$sheet->getStyle('A1')->applyFromArray($styleArray1);
	
/*	$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
		->setLastModifiedBy("Maarten Balliauw")
		->setTitle("PHPExcel Test Document")
		->setSubject("PHPExcel Test Document")
		->setDescription("Test document for PHPExcel, generated using PHP classes.")
		->setKeywords("office PHPExcel php")
		->setCategory("Test result file");*/
		$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");
		
	$in=0;foreach($keys as $key => $val) {$in++;
		$objPHPExcel->setActiveSheetIndex(0)->setCellValue($this->toAlpha($in).'2', $val);
	}
	  $i=2;
	foreach($arr as $key_1 => $val_1) {
		$i++;
		$j=0;
		foreach($val_1 as $key_2 => $val_2) {$j++;
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue($this->toAlpha($j).''.$i.'', $val_2);
		}
	}
	
	$objPHPExcel->getActiveSheet()->setTitle($title);
	$in=0;foreach($keys as $key => $val) {$in++;
		$objPHPExcel->getActiveSheet()->getStyle($this->toAlpha($in).'2')->applyFromArray($styleArray1);
		$objPHPExcel->getActiveSheet()->getColumnDimension($this->toAlpha($in))->setAutoSize(true);
	}
	// Set active sheet index to the first sheet, so Excel opens this as the first sheet
	$objPHPExcel->setActiveSheetIndex(0);
	// Redirect output to a client's web browser (Excel5)
	$step = ($this->input->get('offset') / $this->limit) + 1;
	$filename = $title.'-'.$step.'.xlsx';
	$this->db->insert('excel_files',array('name'=>$filename,'session_id'=>$this->session->userdata("sid_".$section)));
	/*header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
	header('Cache-Control: max-age=0');*/
	
	
	$structure = './export_files/'.$this->session->userdata("sid_".$section);
	if(!is_dir($structure)) {
	if (!mkdir($structure, 0755, true)) {
		die('Failed to create folders...');
	}
	}
	//exit;
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	$objWriter->save('./export_files/'.$this->session->userdata("sid_".$section).'/'.$filename);
}
//////////////////////////////////////////////////////////////////////////////////////////////
public function download($section)
{
 $this->load->library('zip');
$this->db->where("session_id",$this->session->userdata("sid_".$section));
 $query = $this->db->get('excel_files');
 $files = $query->result_array();
 if(!empty($files)) {
	 foreach($files as $file) {
	 	$path = './export_files/'.$file['session_id'].'/'.$file['name'];
     	$this->zip->read_file($path,false);
		unlink('./export_files/'.$file['session_id'].'/'.$file['name']);
	 }
	 $structure = "./export_files/".$this->session->userdata("sid_".$section);
     $this->deleteDirectory($structure);
	 $q = 'DELETE FROM excel_files WHERE session_id = "'.$this->session->userdata("sid_".$section).'"';
	 $this->db->query($q);
	 $this->zip->download('download.zip');
 }
 else {
	 echo 'No files available...';
 }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
private function toAlpha($n,$case = 'upper'){
    $alphabet   = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    //$n = $n-1;
   // Util::error_log('N'.$n);
    if($n <= 26){
        $alpha =  $alphabet[$n-1];
    } elseif($n > 26) {
        $dividend   = ($n);
        $alpha      = '';
        $modulo;
        while($dividend > 0){
            $modulo     = ($dividend - 1) % 26;
            $alpha      = $alphabet[$modulo].$alpha;
            $dividend   = floor((($dividend - $modulo) / 26));
        }
    }
    if($case=='lower'){
        $alpha = strtolower($alpha);
    }
   // Util::error_log("**************".$alpha);
    return $alpha;

}
///////////////////////////////////////////////////////////////////////////////////////////////////////////
private function deleteDirectory($dir){
	if (!file_exists($dir)) return true;
	if (!is_dir($dir)) return unlink($dir);
	foreach (scandir($dir) as $item) {
		if ($item == '.' || $item == '..') continue;
		if (!self::deleteDirectory($dir.DIRECTORY_SEPARATOR.$item)) return false;
	}
	return rmdir($dir);
}
// IMPORT /////////////////////////////////////////////////////////////////////////////////////////////////////////
public function import()
{
	$this->load->view("back_office/excel_c/import.php");
	
}
public function do_import()
{
	
//print '<pre>'; print_r($_FILES); exit;
$data = array();
if(!empty($_FILES)) {
include './Classes/PHPExcel/IOFactory.php';
	$inputFileName = $_FILES['file']['tmp_name']; 
//echo $inputFileName;exit;
	$section = $this->input->get("sec");
	try {
		$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
		
		$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);	
		$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet
		//print '<pre>';print_r($allDataInSheet);exit;
		
		$this->load->model("title_url_ar");
		$this->load->model("import_model");
		
		$data['success'] = 'Data imported successfully.';
	
		$this->import_model->import($section,$allDataInSheet);
		
	} catch(Exception $e) {
		//die("Something went wrong, please contact the administrator");
		$data['error'] = 'Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage();exit;
		//echo $data['error'];exit;
		//$this->load->view("back_office/import_excel",$data);
		//break;
	}
}
	$this->load->view("back_office/excel_c/import",$data);
}
public function do_import1()
{
	$data = array();
	
	if((!empty($_FILES["file"])) && ($_FILES['file']['error'] == 0)) {
	$limitSize	= 4000000; //(15 kb) - Maximum size of uploaded file, change it to any size you want
	$fileName	= basename($_FILES['file']['name']);
	$fileSize	= $_FILES["file"]["size"];
	$fileExt	= substr($fileName, strrpos($fileName, '.') + 1);
	$section = $this->input->post("section");
	//if (($fileExt == "xlsx") && ($fileSize < $limitSize)) {
		if (($fileExt == "xlsx") && ($fileSize < $limitSize)) {

		require_once "./Classes/simplexlsx.class.php";
		$getWorksheetName = array();
		$xlsx = new SimpleXLSX( $_FILES['file']['tmp_name'] );
		/*print '<pre>';
		print_r($xlsx);exit;*/
		//$getWorksheetName = $xlsx->getWorksheetName();
	/*	echo '	<hr>
				<div id="datacontent">
				<h1>Result</h1>
		';
		echo '<h2>File Info:</h1><ul>';
		echo '<li><b>File Name:</b> '.$fileName.'</li>';
		echo '<li><b>File Size:</b> '.($fileSize/1000).' kb</li></li>';
		echo '</ul>
		
		<h2>Worksheets:</h1><ul>';
		foreach ($getWorksheetName as $value) {
			echo '<li>'.$value.'</li>';
		}
		echo '</ul>';
		
		echo '<h2>Display data in table format:</h2>
		<div id="datacontent">';
		for($j=1;$j <= $xlsx->sheetsCount();$j++){
			echo '<h3>Worksheet Name: '.$getWorksheetName[$j-1].'</h1>';
			echo '<table id="xlsxTable">';
			list($cols,) = $xlsx->dimension($j);
			//Prepare table
			foreach( $xlsx->rows($j) as $k => $r) {
				if ($k == 0){
					$trOpen		= '<th';
					$trClose	= '</th>';
					$tbOpen		= '<thead>';
					$tbClose	= '</thead>';
				}else{
					$trOpen		= '<td';
					$trClose	= '</td>';
					$tbOpen		= '<tbody>';
					$tbClose	= '</tbody>';
				}
				echo $tbOpen;
				echo '<tr>';
				for( $i = 0; $i < $cols; $i++)
					//Display data
					echo $trOpen.'>'.( (isset($r[$i])) ? $r[$i] : '&nbsp;' ).$trClose;
				echo '</tr>';
				echo $tbClose;
			}
			echo '</table>';
		}
		echo '</div>';*/
		/*
		echo '<h2>Display as Array:</h2>
		<div id="datacontent" style="overflow: auto; height: 400px; width: 550px; border: 1px #008080 solid;">';
		echo '<h3>$xlsx->getWorksheetName()</h1>';
		echo '<pre>';
		print_r($xlsx->getWorksheetName());
		echo '</pre>';
		for($j=1;$j <= $xlsx->sheetsCount();$j++){
			echo '<h3>$xlsx->rows('.$j.')</h1>';*/
			
		$data = $xlsx->rows(1);
		$this->load->model("title_url_ar");
		$this->load->model("import_model");
	//	echo 'test';exit;
	echo 'test<pre>';
	//echo $section;exit;
		print_r($data);
		exit;
		$this->import_model->import($section,$data);
		//echo 'test45';exit;
		/*echo '<pre>';
		print_r($data);
		exit;*/
		//$this->load->model("title_url_ar");
		/*for($i=1;$i<count($data);$i++) {
			$ar = $data[$i];
				$checkCat = $this->fct->getonerow("programs_categories",array("title"=>$ar[1]));
				if(empty($checkCat)) {
					$cat['created_date'] = date("Y-m-d H:i:s");
					$cat['title'] = $ar[1];
					$cat['meta_title'] = $ar[1];
					$cat['meta_description'] = $ar[1];
					$cat['meta_keywords'] = $ar[1];
					$cat['title_url'] = $this->title_url_ar->cleanURL("programs_categories",$ar[1],"","title_url");
					$cat['title_en'] = $ar[1];
					$cat['meta_title_en'] = $ar[1];
					$cat['meta_description_en'] = $ar[1];
					$cat['meta_keywords_en'] = $ar[1];
					$cat['title_url_en'] = $this->title_url_ar->cleanURL("programs",$ar[2],"","title_url");
					$cat['id_user'] = 1;
					$cat['brief'] = $ar[4];
					$cat['brief_en'] = $ar[4];
					$cat['version'] = "ar";
					$cat['activate_normal'] = 1;
					$cat['activate_with_doctor'] = 1;
					$cat['activate_use_code'] = 1;
					$this->db->insert("programs_categories",$cat);
					$cat_id = $this->db->insert_id();
				}
				else {
					$cat_id = $checkCat['id_programs_categories'];
				}
				
				$prog['created_date'] = date("Y-m-d H:i:s");
				$prog['title'] = $ar[2];
				$prog['meta_title'] = $ar[2];
				$prog['meta_description'] = $ar[2];
				$prog['meta_keywords'] = $ar[2];
				$prog['title_url'] = $this->title_url_ar->cleanURL("programs",$ar[2],"","title_url");
				$prog['title_en'] = $ar[2];
				$prog['meta_title_en'] = $ar[2];
				$prog['meta_description_en'] = $ar[2];
				$prog['meta_keywords_en'] = $ar[2];
				$prog['title_url_en'] = $this->title_url_ar->cleanURL("programs",$ar[2],"","title_url");
				$prog['brief'] = $ar[4];
				$prog['brief_en'] = $ar[4];
				$prog['dnp_ingredients'] = $ar[3];
				$prog['dnp_ingredients_en'] = $ar[3];
				$prog['market_ingredients'] = $ar[4];
				$prog['market_ingredients_en'] = $ar[4];
				$prog['program_id'] = $ar[0];
				$prog['duration'] = 7;
				$cat['id_user'] = 1;
				$this->db->insert("programs",$prog);
				$program_id = $this->db->insert_id();
				
				$rel['id_programs_categories'] = $cat_id;
				$rel['id_programs'] = $program_id;
				$this->db->insert("programs_categories_relation",$rel);
		}*/
		
		$data['success'] = "Done!";
		
		//print '<br />';
		//print_r($null);
		//echo '<h3>$xlsx->rowsEx('.$j.')</h1>';
		//echo '<pre>';
		//print_r( $xlsx->rowsEx($j) );
		//echo '</pre>';
		}
		else {
			$data['error'] = "Something went wrong, please try again or contact the administrator.";
		}
	}
	else {
		$data['error'] = "something went wrong, please try again or contact the administrator.";
	}
	$this->load->view("back_office/import_excel",$data);
}
}