<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Fct extends CI_Model{
	
function write_file($path,$data){
if ( ! write_file($path, $data))
{
echo 'Unable to write the file';exit;
}
else
{
//echo 'File written!';
}
}

 public function uploadImage_texteditor($image, $path)
    {
        $config                  = array();
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['upload_path']   = './uploads/' . $path;
        $config['max_size']      = '8000';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($image, true)) {
            echo $this->upload_err = $this->upload->display_errors();
            return "";
        } else {
            $path = $this->upload->data();
            return $path['file_name'];
        }
    }
public function select_many_to_many($field,$id,$table_1,$table_2,$order = 'title')
{
	$this->db->select($table_1.'.*');
	$this->db->from($table_1);
	$this->db->join($table_2,$table_1.'.id_'.$table_1.' = '.$table_2.'.id_'.$table_1);
	$cond = array(
		$table_2.'.'.$field=>$id,
	);
	$this->db->where($cond);
	$this->db->group_by($table_1.'.id_'.$table_1);
	$this->db->order_by($table_1.'.'.$order);
	$query = $this->db->get();
	$arr = $query->result_array();
	$results = array();
	foreach($arr as $ar) {
		array_push($results,$ar['id_'.$table_1]);
	}
	return $results;
}
public function insert_many_to_many($field,$id,$arr,$table_1,$table_2)
{
	$old_ids = array();
	$new_ids = array();
	$deleted_ids = array();
	$this->db->select('*');
	$this->db->from($table_2);
	$cond = array($field=>$id);
	$this->db->where($cond);
	$this->db->order_by($table_2.'.id_'.$table_2);
	$query = $this->db->get();
	$results = $query->result_array();
	if(!empty($results)) {
		foreach($results as $res) {
			array_push($old_ids,$res['id_'.$table_1]);
		}
	}
	foreach($arr as $ar) {
		if(!in_array($ar,$old_ids)) {
			array_push($new_ids,$ar);
		}
	}
	if(!empty($old_ids)) {
		foreach($old_ids as $id11) {
			if(!in_array($id11,$arr)) {
				array_push($deleted_ids,$id11);
			}
		}
	}
	if(!empty($deleted_ids)) {
		$q = 'DELETE FROM '.$table_2.' WHERE '.$field.' = '.$id.' AND id_'.$table_1.' IN ('.implode(',',$deleted_ids).')';
		$this->db->query($q);
	}
	if(!empty($new_ids)) {
		foreach($new_ids as $new_id) {
			$data['created_date'] = date('Y-m-d h:i:s');
			$data['id_'.$table_1] = $new_id;
			$data[$field] = $id;
			$this->db->insert($table_2,$data);
			//echo $this->db->last_query();exit;
		}
	}
}

function getonecell($table,$select,$cond){
$this->db->where($cond);
$query=$this->db->get($table);
$res=$query->row_array();
if(count($res) >0)
return $res[$select];
}

function getonerow($table,$condition){
$this->db->where($condition);
$query=$this->db->get($table);
if($query->num_rows() > 0 ){
return $query->row_array();
} 
}

function getoneuser($condition){
$this->db->where($condition);
$query=$this->db->get('user');
return $query->row_array();
}

function getonerecord($table,$condition){
$this->db->where('deleted',0);
$this->db->where($condition);
$query=$this->db->get($table);
if($query->num_rows() > 0 ){
return $query->row_array();
} 
}

function getAll_1($table,$order){
//$this->db->where('deleted',0);
$this->db->order_by($order);
$query=$this->db->get($table);
return $query->result_array();
}
function getAll($table,$order){
$this->db->where('deleted',0);
//if ($this->db->field_exists($order, $table)){
$this->db->order_by($order); 
//}
$query=$this->db->get($table);
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}
function getAllHere($table,$order){
$this->db->where('deleted',0);
$this->db->where('id_locations',$this->session->userdata('country'));
if ($this->db->field_exists($order, $table)){
$this->db->order_by($order); }
$query=$this->db->get($table);
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}
function getAllHere1($table,$order){
$this->db->where('deleted',0);
$this->db->where('active',1);
$this->db->where('id_locations',$this->session->userdata('country'));
if ($this->db->field_exists($order, $table)){
$this->db->order_by($order); }
$query=$this->db->get($table);
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}

function getAll_orderdate($table){
$this->db->where('deleted',0); 
$this->db->order_by('created_date','DESC');
$query=$this->db->get($table);
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}

function getAll_orderdate1($table){
$this->db->where('deleted',0); 
$this->db->where('active',1);
$this->db->where('id_locations',$this->session->userdata('country'));
$this->db->order_by('created_date','DESC');
$query=$this->db->get($table);
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}

function getAll_orderdate2($table){
$this->db->where('deleted',0); 
$this->db->where('id_locations',$this->session->userdata('country'));
$this->db->order_by('created_date','DESC');
$query=$this->db->get($table);
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}

function getAll_cond($table,$order,$cond){
$this->db->where('deleted',0);
$this->db->where($cond);
if ($this->db->field_exists($order, $table)){
$this->db->order_by($order); }
$query=$this->db->get($table);
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}


function getAll_cond_1($table,$order,$cond){
$this->db->where($cond);
if ($this->db->field_exists($order, $table)){
$this->db->order_by($order); }
$query=$this->db->get($table);
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}


function getAll_limit($table,$order,$des,$limit){
$this->db->where('deleted',0);
if ($this->db->field_exists($order, $table)){
$this->db->order_by($order,$des); }
$query=$this->db->get($table,$limit);
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}

function getAll_limit_cond($table,$order,$des,$limit,$cond){
$this->db->where('deleted',0);
$this->db->where($cond);
if ($this->db->field_exists($order, $table)){
$this->db->order_by($order,$des); }
$query=$this->db->get($table,$limit);
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}


function getAll_001($table,$order){
if ($this->db->field_exists($order, $table)){
$this->db->order_by($order); }
$query=$this->db->get($table);
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}

function getAll_desc($table,$order,$cond){
$this->db->where('deleted',0);
$this->db->where($cond);
if ($this->db->field_exists($order, $table)){
$this->db->order_by($order,'desc'); }
$query=$this->db->get($table);
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}

function getto_do_list(){
$yesterday = date("Y-m-d", time()-86400);
$q="SELECT * FROM `do_it` WHERE Deadline > '".$yesterday."' AND deleted = 0 ORDER BY  Deadline LIMIT 4";
$query=$this->db->query($q);
return $query->result_array();
}
function getto_do_list_completed(){
$yesterday = date("Y-m-d", time()-86400);
$q="SELECT * FROM `do_it` WHERE  deleted = 0  AND completed = 1 ORDER BY  Deadline LIMIT 4";
$query=$this->db->query($q);
return $query->result_array();
}

function module($id){
$this->db->where('id_module',$id);
$query=$this->db->get('module');
$res = $query->row_array();	
return $res["activate"];
}


function get_unreaded_emails(){
	$this->db->where('deleted',0); 
	$this->db->where('readed',0);
	$this->db->order_by('created_date','DESC');
	$query=$this->db->get('contactform');
	return $query->result_array();
}

// Delete Directory and all related
public static function deleteDirectory($dir){
if (!file_exists($dir)) return true;
if (!is_dir($dir)) return unlink($dir);
foreach (scandir($dir) as $item) {
if ($item == '.' || $item == '..') continue;
if (!self::deleteDirectory($dir.DIRECTORY_SEPARATOR.$item)) return false;
}
return rmdir($dir);
}
// upload file 
public function uploadCV($image,$path){
$config = array();
$config['allowed_types'] = 'txt|pdf|docx|doc';
$config['upload_path'] ='./uploads/'.$path;
$config['max_size'] = '24048';
$this->load->library('upload',$config);

if(!$this->upload->do_upload($image,true)){
echo $this->upload_err = $this->upload->display_errors();
exit;
//return "";
}
else{
$path = $this->upload->data();
return  $path['file_name'];
}
}

/*public function uploadVideo($name,$path){
	
	$videoData = $_FILES[$name];	
	$videoName = $_FILES[$name]['name'];
	if(file_exists('./uploads/'.$path.'/'.$videoName)) {
		return '';
	}
	else {
		move_uploaded_file($_FILES["file"]["tmp_name"],'./uploads/'.$path.'/'.$videoName);
		return $videoName;
	}
}*/

public function uploadVideo($image,$path){
$config = array();
$config['allowed_types'] = 'mp4';
$config['upload_path'] ='./uploads/'.$path;
$config['max_size'] = '24048';
$this->load->library('upload');
$this->upload->initialize($config);
//print_r($config);exit;
if(!$this->upload->do_upload($image,true)){
echo $this->upload_err = $this->upload->display_errors();
exit;
//return "";
}
else{
$path = $this->upload->data();
return  $path['file_name'];
}
}

public function uploadImage($image,$path){
$config = array();
$config['allowed_types'] = 'jpg|png|gif|txt|pdf|docx|doc|csv|xlsx|xls';
$config['upload_path'] ='./uploads/'.$path;

$config['max_size'] = '240480';
//echo $config['max_size'];exit;
$this->load->library('upload');
$this->upload->initialize($config);
if(!$this->upload->do_upload($image,true)){
echo $this->upload_err = $this->upload->display_errors();
exit;
//return "";
}
else{
$path = $this->upload->data();
return  $path['file_name'];
}
}
// create thumbs crop
public function createthumb($name,$table,$thumb_value){
$path = 'uploads/'.$table.'/';
// Create an array that holds the various image sizes
$configs = array();
$sumb_val=explode(",",$thumb_value);
foreach($sumb_val as $key => $value){
list($width,$height) = explode("x",$value);
$configs[] = array('source_image' => $name, 'new_image' => $value."/".$name, 'width' => $width, 'height' => $height, 'maintain_ratio' => FALSE);
}
$this->load->library('image_lib');
foreach ($configs as $config) {
$this->image_lib->thumb($config, FCPATH.''.$path);
}
}

// create thumbs resize
public function createthumb1($name,$table,$thumb_value){
$path = 'uploads/'.$table.'/';
// Create an array that holds the various image sizes
$configs = array();
$sumb_val=explode(",",$thumb_value);
foreach($sumb_val as $key => $value){
list($width,$height) = explode("x",$value);
$configs[] = array('source_image' => $name, 'new_image' => $value."/".$name, 'width' => $width, 'height' => $height, 'maintain_ratio' => TRUE);
}
$this->load->library('image_lib');
foreach ($configs as $config) {
$this->image_lib->thumb($config, FCPATH.''.$path);
}
}

public function createImageCopy($path,$filename)
{
	$this->load->library('image_lib');
	$path = './'.$path.'/';
	$config['create_thumb'] = FALSE;
	$config['source_image'] = $path.$filename;
	// explode file name from extension
	$parts		= explode('.', $filename);
	$ext		= array_pop($parts);
	$file_name	= array_shift($parts);
	// explode extension from file name
	$x = explode('.', $filename);
	$extension = end($x);
	$new_file_name = '';
	for($i=1;$i<=1000;$i++) {
	//	echo $path.$file_name.$i.$extension;exit;
		if(!file_exists($path.$file_name.$i.'.'.$extension)) {
			$new_file_name = $file_name.$i.'.'.$extension;
			break;
		}
	}
	$config['new_image'] = $path.$new_file_name;
    $this->image_lib->clear();
	// Set your config up
	$this->image_lib->initialize($config);
	// Do your manipulation
	if ( !$this->image_lib->resize())
	{
		echo $this->image_lib->display_errors();
		exit;
	}
	return $new_file_name;
}


public function date_in_formate($date ){
if($date !=""){
list($d,$m,$y)=explode('/',$date);
$date=$y."-".$m."-".$d;
} else {
$date = "0000-00-00";
}
return $date;	
}

public function date_out_formate($date){
if(!empty($date) && $date !="0000-00-00" ){
list($y,$m,$d)=explode('-',$date);
$date=$d."/".$m."/".$y;
} else {
$date ="";	
}
return $date;	
}

public function date_in_formate1($date){
if($date !=""){
list($d,$m,$y)=explode('/',$date);
$date=$y."-".$m."-".$d;
} else {
$date = "0000-00-00";
}
return $date;	
}

public function date_out_formate1($date){
if(!empty($date) && $date !="0000-00-00" ){
list($y,$m,$d)=explode('-',$date);
$date=$d."/".$m."/".$y;
} else {
$date ="";	
}
return $date;	
}

// Delete Related images when delete any items from the recycle Bin .
public function deleter_related_images($content_type,$id){
$tables=str_replace(" ","_",$content_type);
$q1="SELECT * FROM `".$tables."` WHERE id_".$tables." = ".$id;
$query1=$this->db->query($q1);
$row= $query1->row_array();
$q="SELECT name,thumb_val,thumb FROM `content_type_attr` WHERE id_content = (SELECT id_content FROM `content_type` WHERE name ='".$content_type."') AND (type = 4 OR type =5)";
$query=$this->db->query($q);
$related= $query->result_array();

foreach($related as $vv){
if($row[$vv["name"]] != ''){
if(file_exists('./uploads/'.$tables.'/'.$row[$vv["name"]])){
unlink('./uploads/'.$tables.'/'.$row[$vv["name"]]);  }
if($vv["thumb"] == 1){
$sumb_val0=explode(",",$vv["thumb_val"]);
foreach($sumb_val0 as $key => $value){
	if(file_exists('./uploads/'.$tables.'/'.$value.'/'.$row[$vv["name"]])){
unlink("./uploads/".$tables."/".$value."/".$row[$vv["name"]]); }								
} }  }

}
}




public function outputKey()  
{  
$ip = $_SERVER['REMOTE_ADDR'];
$uniqid = uniqid(mt_rand(), true); 
$formKey = md5($ip . $uniqid);
$this->session->set_userdata('formKey',$formKey);
echo  "<input type='hidden' name='form_key' id='form_key' value='".$formKey."' />";  
}  

public function check_token(){
$token = $this->session->userdata('formKey');
if($this->input->post('form_key') == $token){
$res = true;	
}
else { 
$res =  false;
}
$this->session->unset_userdata('formKey');
return $res;
}

function getcountry($id_locations){
$this->db->select('locations.*, countries.*');
$this->db->from('locations');
$this->db->join('countries','countries.id_countries = locations.id_countries');
$this->db->where('locations.id_locations' , $id_locations);
$this->db->where('locations.deleted' , 0);
$query=$this->db->get();
$res = $query->result_array();
return $res;
}


function getmaxsort($table,$array){
$this->db->select_max('sort_order');
$this->db->where_in('id_'.$table,$array);
$query=$this->db->get($table);
$res = $query->row_array();
return $res["sort_order"];
}

function get_first_row($table,$where=array()){
if(count($where) > 0)
$query = $this->db->get_where($table,$where);		
else
$query = $this->db->get($table);
if($query->num_rows() > 0)
{
	return $query->first_row();
} else { return array(); }	
}

function get_last_row($table,$where=array()){
if(count($where) > 0)
$query = $this->db->get_where($table,$where);		
else
$query = $this->db->get($table);
if($query->num_rows() > 0)
{
	return $query->last_row();
} else { return array(); }	
}

function union_tables($tabel1 , $table2){
$this->db->select('title, description, created_date');
$this->db->from($tabel1);
$subQuery1 = $this->db->_compile_select();
$this->db->_reset_select();	
$this->db->select('title, destination AS description, created_date');
$this->db->from($table2);
$subQuery2 = $this->db->_compile_select();
$this->db->_reset_select();
$query = $this->db->query($subQuery1." UNION ".$subQuery2);
return $query->result_array();
}

function another_way_for_union(){
$this->db->select('title, content, date');
$this->db->from('mytable1');
$query1 = $this->db->get()->result();

$this->db->select('title, content, date');
$this->db->from('mytable2');
$query2 = $this->db->get()->result();
// Merge both query results
$query = array_merge($query1, $query2);
}


function soso(){
//$fields = $this->db->list_fields('maintenance');
$query = $this->db->query('SELECT deleted FROM maintenance'); 
$fields = $query->list_fields();
foreach ($fields as $field)
{
   echo $field."<br />";
} 
$fields = $this->db->field_data('maintenance');
foreach ($fields as $field)
{
   echo $field->name;
   echo $field->type;
   echo $field->max_length;
   echo $field->primary_key;
   echo "<br />";
} 	
}

function to_excel($query, $filename = 'exceloutput')
{
    $headers = ''; // just creating the var for field headers to append to below
    $data = ''; // just creating the var for field data to append to below

    $obj = &get_instance();
$query = $this->db->query($query);
    $fields = $query->field_data();
    if ($query->num_rows() == 0)
    {
        #echo '<p>The table appears to have no data.</p>';
        return 'empty';
    }
    else
    {
        # Headers array
        $headers_array = array();
        
        foreach ($fields as $field)
        {
            # Add to headers
            if (!in_array($field->name,$headers_array))
            {
                $headers .= $field->name . "\t";
                $headers_array[] = $field->name;
            }

        }

        foreach ($query->result() as $row)
        {
            $line = '';
            foreach ($row as $value)
            {
                if ((!isset($value)) or ($value == ""))
                {
                    $value = "\t";
                }
                else
                {
                    $value = str_replace('"', '""', $value);
                    $value = '"' . $value . '"' . "\t";
                }
                $line .= $value;
            }
            $data .= trim($line) . "\n";
        }

        $data = str_replace("\r", "", $data);

        header("Content-type: application/x-msdownload");
        header("Content-Disposition: attachment; filename=$filename.xls");
        echo "$headers\n$data";
    }
} 



public function GetRestRequestOrder(){
$q= "SELECT * FROM request_order WHERE  deleted = 0 AND id_request_order NOT IN ( SELECT id_request_order FROM request_quotaion ) AND id_request_order NOT IN ( SELECT id_request_order FROM purchase_order ) AND id_locations = ".$this->session->userdata('country')." ORDER BY sort_order";
$query = $this->db->query($q);	
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}

public function check_subqoutation($id){
$this->db->where('id_sb',$id);
$query = $this->db->get('request_quot_sb');
if($query->num_rows() == 0)
return false; 
else 
return true;
}

public function GetRestQoutation(){
$q= "SELECT * FROM request_quotaion WHERE  deleted = 0 AND id_request_quotaion NOT IN ( SELECT id_request_quotaion FROM purchase_order ) AND id_locations = ".$this->session->userdata('country')." ORDER BY sort_order";
$query = $this->db->query($q);
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }	
}
 
 
public function select_currency(){
$this->db->select('countries.currency_code');
$this->db->from('countries');
$this->db->join('locations','locations.id_countries = countries.id_countries');
$this->db->group_by('locations.id_countries');
$this->db->order_by('locations.sort_order');
$query=$this->db->get();	
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}

public function GetPurchaseOrder(){ 
$q= "SELECT * FROM purchase_order WHERE  deleted = 0 AND id_purchase_order NOT IN ( SELECT id_purchase_order FROM receving_po ) AND id_locations = ".$this->session->userdata('country')." ORDER BY sort_order";
$query = $this->db->query($q);
if($query->num_rows() > 0 ){
return $query->result_array();	
} else { return array(); }
}

public function check_subreceiving($id){
$this->db->where('id_purchase_order_sb',$id);
$query = $this->db->get('receving_po_sb');
if($query->num_rows() > 0)
return $query->row_array(); 
else 
return array();
}


function GetBirthdaysThisMonth(){
$month =  date('m');
$q= "SELECT *  FROM clients WHERE dob LIKE '%-".$month."-%' AND active = 1 AND deleted = 0";
$query = $this->db->query($q);
$result = $query->result_array();
if($query->num_rows() > 0 ){
	return $query->num_rows();
}else{
	 return '';
}
}


function getAll_calls($handled){
$this->db->where('deleted',0); 
$this->db->where('handled',$handled); 
$this->db->order_by('created_date','DESC');
$query=$this->db->get('call_center');
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}

function getAll_complains($solved){
$this->db->where('deleted',0); 
$this->db->where('solved',$solved); 
$this->db->order_by('created_date','DESC');
$query=$this->db->get('complains');
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}

function get_temp_list($id){
	$this->db->select('newsletter_recipients.*,newsletter_temp_list.id_temp_list');
	$this->db->from('newsletter_temp_list');
	$this->db->join('newsletter_recipients','newsletter_recipients.id_recipients = newsletter_temp_list.id_recipients');
	$this->db->where('newsletter_temp_list.id_template',$id);
	$this->db->where('newsletter_recipients.deleted',0);
	$query = $this->db->get();
if($query->num_rows() > 0 ){
return $query->result_array();
} else { return array(); }
}

public function upload_ajax($file,$path){
$actual_image_name='';
$valid_formats = array("jpg", "png", "gif", "bmp","txt","pdf","doc","docx","xls","xlsx");
$name = $_FILES[$file]['name'];
$size = $_FILES[$file]['size'];	
if(strlen($name))
{
list($txt, $ext) = explode(".", $name);
if(in_array($ext,$valid_formats))
{
if($size<(1024*1024))
{
//$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
$actual_image_name = str_replace(" ", "_", $txt).time().".".$ext;
$tmp = $_FILES[$file]['tmp_name'];
if(move_uploaded_file($tmp, $path.$actual_image_name))
{
//mysql_query("UPDATE users SET profile_image='$actual_image_name' WHERE uid='$session_id'");

//echo "<img src='".$path.$actual_image_name."'  class='preview' width='50' height='50'>";
//echo "<img src='".base_url()."images/activate.png' />&nbsp;&nbsp;<span style='color:#5ac43f'>file was uploaded successfully</span>";
return $actual_image_name;
exit;
}
else
echo "<img src='".base_url()."images/icon-error.gif' />&nbsp;&nbsp;<span style='color:#A5000B'>failed</span>";
exit;
}
else
echo "<img src='".base_url()."images/icon-error.gif' />&nbsp;&nbsp;<span style='color:#A5000B'>Image file size max 1 MB</span>";	
exit;				
}
else
echo "<img src='".base_url()."images/icon-error.gif' />&nbsp;&nbsp;<span style='color:#A5000B'>Invalid file format..</span>";
exit;	
}

else{
echo "<img src='".base_url()."images/icon-error.gif' />&nbsp;&nbsp;<span style='color:#A5000B'>Please select image..!</span>";
exit;
}	
}


public function parent_rows($id = 0, $arr){
$q = "SELECT * FROM testing WHERE id_parent = ".$id;
$query = $this->db->query($q);
if($query->num_rows() > 0){
$res = $query->result_array();
foreach($res as $val){
$arr[] = $val;
$arr = $this->parent_rows($val["id"],$arr);	
}
}
return $arr;
}

// url generate

public function cleanURL($table, $url_name , $id = '')
	{
		$cond = array('title_url' => $url_name);
		if($id != '')
		$cond["id_".$table." != "] = $id;
		$check_exist = $this->if_existings($table, $cond);
		if ($check_exist == false)
		{
			return $url_name;
		}

		$new_url_name = '';
		for ($i = 1; $i < 1000; $i++)
		{
			$new_url_name = $url_name.$i;
			$cond = array('title_url' =>  $new_url_name);
			if($id != '')
			$cond["id_".$table." != "] = $id;
			$check_exist = $this->if_existings($table, $cond);
			if ($check_exist == false)
			{
				$return_url = $new_url_name;
				break;
			}
		}
		return $return_url;
}
function if_existings($table, $cond){
$this->db->where($cond);
$query = $this->db->get($table);
return ($query->num_rows() > 0)? true : false;
}
// custom //////////////////////////////////////////////////////////////////////////////////////////////////
public function GetCountries()
{
	$this->db->select('countries.*');
	$this->db->from('countries');
	$this->db->join('branches','branches.id_countries = countries.id_countries');
	$cond = array(
		'countries.deleted'=>0
	);
	$this->db->where($cond);
	$this->db->group_by('countries.id_countries');
	$this->db->order_by('countries.sort_order');
	$query = $this->db->get();
	$results = $query->result_array();
	return $results;
}

public function GetBranches($countryURL = '')
{
	$data = array();
	$this->db->select('cities.*');
	$this->db->from('cities');
	$this->db->join('countries','cities.id_countries = countries.id_countries');
	$this->db->join('branches','branches.id_cities = cities.id_cities');
	$cond = array(
		'cities.deleted'=>0
	);
	if($countryURL != '')
	$cond['countries.title_url'.getUrlFieldLanguage($this->lang->lang())] = $countryURL;
	$this->db->where($cond);
	$this->db->group_by('cities.id_cities');
	$this->db->order_by('cities.sort_order');
	$query = $this->db->get();
	$cities = $query->result_array();
	$i=0;
	foreach($cities as $city) {
		$this->db->select('branches.*');
		$this->db->from('branches');
		$cond = array(
			'branches.deleted'=>0,
			'branches.id_cities'=>$city['id_cities']
		);
		$this->db->where($cond);
		$this->db->order_by('branches.sort_order');
		$query = $this->db->get();
		$branches = $query->result_array();
		$data[$i] = $city;
		$data[$i]['branches'] = $branches;
		$i++;
	}
	return $data;
}
public function getCertificates($cond = array(),$limit = '',$offset = '')
{
	$this->db->select('certificates.*');
	$this->db->from('certificates');
	$cond['deleted'] = 0;
	$this->db->where($cond);
	$this->db->order_by('sort_order');
	if($limit != '')
	$this->db->limit($limit,$offset);
	$query = $this->db->get();
	if($limit != '')
	$results = $query->result_array();
	else
	$results = $query->num_rows();
	return $results;
}
public function getLectures($cond = array(),$limit = '',$offset = '')
{
	$data = array();
	$this->db->select('*');
	$this->db->from('lectures');
	$cond['deleted'] = 0;
	$this->db->where($cond);
	$this->db->order_by('sort_order');
	if($limit != ''){
		$this->db->limit($limit,$offset);
	}
	$query = $this->db->get();
	if($limit == ''){
		$data = $query->num_rows();
	}
	else {
		$results = $query->result_array();
		if(!empty($results)) {
				$i=0;
				foreach($results as $res) {
					$this->db->select('*');
					$this->db->from('lectures_gallery');
					$cond1['id_lectures'] = $res['id_lectures'];
					$this->db->where($cond1);
					$this->db->order_by('sort_order');
					$query1 = $this->db->get();
					$gallery = $query1->result_array();
					$data[$i] = $res;
					$data[$i]['gallery'] = $gallery;
					$i++;
				}
		}
	}
	return $data;
}
public function getTablePagination($table,$cond = array(),$limit = '',$offset = '')
{
	$data = array();
	$this->db->select('*');
	$this->db->from($table);
	$cond['deleted'] = 0;
	$this->db->where($cond);
	$this->db->order_by('sort_order');
	if($limit != ''){
		$this->db->limit($limit,$offset);
	}
	$query = $this->db->get();
	if($limit == ''){
		$data = $query->num_rows();
	}
	else {
		$data = $query->result_array();
	}
	return $data;
}


public function getOneProduct($product_url)
{
	$data = array();
	$this->db->select('products.*');
	$this->db->from('products');
	if(is_numeric($product_url))
	$cond['products.id_products'] = $product_url;
	else
	$cond['products.title_url'.getUrlFieldLanguage($this->lang->lang())] = $product_url;
	$this->db->where($cond);
	//$this->db->group_by('products.id_products');
	$this->db->order_by('products.sort_order');
	$query = $this->db->get();
	/*echo $this->db->last_query();
	exit;*/
	$results = $query->row_array();
	$data = $results;
	if(!empty($results)) {
		$this->db->select('categories.*');
		$this->db->from('categories');
		//$this->db->join('products_categories','products_categories.id_categories = categories.id_categories');
		$cnd = array('id_categories'=>$results['id_categories']);
		$this->db->where($cnd);
		//$this->db->order_by('categories.sort_order');
		$query = $this->db->get();
		$category = $query->row_array();
		$data['category'] = $category;
		// product sub category
		$this->db->select('categories_sub.*');
		$this->db->from('categories_sub');
		//$this->db->join('products_categories','products_categories.id_categories = categories.id_categories');
		$cnd = array('id_categories_sub'=>$results['id_categories_sub']);
		$this->db->where($cnd);
		//$this->db->order_by('categories.sort_order');
		$query = $this->db->get();
		$sub_category = $query->row_array();
		$data['sub_category'] = $sub_category;
		// product type
		$this->db->select('types.*');
		$this->db->from('types');
		//$this->db->join('products_categories','products_categories.id_categories = categories.id_categories');
		$cnd = array('id_types'=>$results['id_types']);
		$this->db->where($cnd);
		//$this->db->order_by('categories.sort_order');
		$query = $this->db->get();
		$type = $query->row_array();
		$data['type'] = $type;
		// get gallery
		$this->db->select('*');
		$this->db->from('products_gallery');
		$cnd = array('id_products'=>$results['id_products']);
		$this->db->where($cnd);
		$this->db->order_by('sort_order');
		$query = $this->db->get();
		$gallery = $query->result_array();
		$data['gallery'] = $gallery;
		// get attributes
		$this->db->select('attributes.*');
		$this->db->from('attributes');
		$this->db->join('product_attributes','product_attributes.id_attributes = attributes.id_attributes');
		$cnd = array(
			'product_attributes.id_products'=>$results['id_products']
		);
		$this->db->where($cnd);
		$this->db->group_by('attributes.id_attributes');
		$this->db->order_by('attributes.sort_order');
		$query = $this->db->get();
		$attributes = $query->result_array();
		$data['attributes'] = $attributes;
		if(!empty($attributes)) {
			$k=0;
			foreach($attributes as $attr) {
				// get product attribute options
				$this->db->select('attribute_options.*');
				$this->db->from('attribute_options');
				//$this->db->join('product_options','product_options.id_attribute_options = attribute_options.id_attribute_options');
				$cnd = array(
					//'product_options.id_products'=>$results['id_products'],
					'attribute_options.id_attributes'=>$attr['id_attributes'],
					//'product_options.status'=>1
				);
				$this->db->where($cnd);
				$this->db->group_by('attribute_options.id_attribute_options');
				$this->db->order_by('attribute_options.sort_order');
				$query = $this->db->get();
				$options = $query->result_array();
				$data['attributes'][$k]['options'] = $options;
				$k++;
			}
			// get first available stock
			$data['first_available_stock'] = $this->fct->getonerow('products_stock',array('status'=>1,'id_products'=>$data['id_products'],'quantity !='=>0));
			if(empty($data['first_available_stock']))
			$data['first_available_stock'] = $this->fct->getonerow('products_stock',array('status'=>1,'id_products'=>$data['id_products']));
			
		}
	}
	/*print '<pre>';
	print_r($data);
	exit;*/
	return $data;
}
public function getProducts($cond = array(),$limit = '',$offset = '',$order = 'products.sort_order')
{
	$data = array();
	$this->db->select('products.*');
	$this->db->from('products');
	//print_r($cond);exit;
	if(isset($cond['categories.title_url'.getUrlFieldLanguage($this->lang->lang())])) {
		//$this->db->join('products_categories','products_categories.id_products = products.id_products');
		$this->db->join('categories','categories.id_categories = products.id_categories');
	}
	if(isset($cond['categories_sub.title_url'.getUrlFieldLanguage($this->lang->lang())])) {
		$this->db->join('categories_sub','categories_sub.id_categories_sub = products.id_categories_sub');
	}
	if(isset($cond['products.title'])) {
		$this->db->like('UPPER(products.title'.getFieldLanguage().')',strtoupper($cond['products.title'.getFieldLanguage()]));
		unset($cond['products.title'.getFieldLanguage()]);
	}
	$cond['products.deleted'] = 0;
	//$cond['products.lang'] = $this->lang->lang();
	//print_r($cond);exit;
	$this->db->where($cond);
	$this->db->group_by('products.id_products');
	$this->db->order_by($order);
	if($limit != ''){
		$this->db->limit($limit,$offset);
	}
	$query = $this->db->get();
	//echo $this->db->last_query();exit;
	
	if($limit == ''){
		$data = $query->num_rows();
	}
	else {
		//echo $this->db->last_query(); exit;
		$results = $query->result_array();
		if(!empty($results)) {
			$j=0;
			foreach($results as $res) {
				// get gallery
				$this->db->select('*');
				$this->db->from('products_gallery');
				$cnd = array('id_products'=>$res['id_products']);
				$this->db->where($cnd);
				$this->db->order_by('sort_order');
				$query = $this->db->get();
				$gallery = $query->result_array();
				$data[$j] = $res;
				$data[$j]['gallery'] = $gallery;
				// get attributes
				$attributes = $this->getProductAttributes($res['id_products']);
				//print_r($attributes);
			    $data[$j]['attributes'] = $attributes;
				// get stock
				if(!empty($attributes)) {
					$data[$j]['first_available_stock'] = $this->fct->getonerow('products_stock',array('status'=>1,'id_products'=>$data[$j]['id_products'],'quantity !='=>0));
					if(empty($data[$j]['first_available_stock']))
					$data[$j]['first_available_stock'] = $this->fct->getonerow('products_stock',array('status'=>1,'id_products'=>$data[$j]['id_products']));
				}
				$j++;
			}
		}
	}
	return $data;
}

public function RecentlyViewed($id = "")
{
	$data = array();
	$id_user = 0;
	if($this->session->userdata('login_id') != "") {
		$id_user = $this->session->userdata('login_id');
	}
	$session_id = $this->session->userdata('session_id');
	$q = 'SELECT products.* FROM products JOIN visits ON visits.record = products.id_products WHERE products.deleted = 0';
	$q .= ' AND visits.section = "products"';
if($id != "")
	$q .= ' AND products.id_products != '.$id;
	if($id_user != 0) {
		$q .= ' AND (visits.session_id = "'.$session_id.'" OR visits.id_user = '.$id_user.')';
	}
	else {
		$q .= ' AND visits.session_id = "'.$session_id.'"';
	}
	$q .= ' GROUP BY products.id_products ORDER BY products.sort_order';
	//echo $q;exit;
	$query = $this->db->query($q);
	$results = $query->result_array();
	if(!empty($results)) {
		$j=0;
		foreach($results as $res) {
			// get gallery
			$this->db->select('*');
			$this->db->from('products_gallery');
			$cnd = array('id_products'=>$res['id_products']);
			$this->db->where($cnd);
			$this->db->order_by('sort_order');
			$query = $this->db->get();
			$gallery = $query->result_array();
			$data[$j] = $res;
			$data[$j]['gallery'] = $gallery;
			// get attributes
			$attributes = $this->getProductAttributes($res['id_products']);
			//print_r($attributes);
			$data[$j]['attributes'] = $attributes;
			// get stock
			if(!empty($attributes)) {
				$data[$j]['first_available_stock'] = $this->fct->getonerow('products_stock',array('status'=>1,'id_products'=>$data[$j]['id_products'],'quantity !='=>0));
				if(empty($data[$j]['first_available_stock']))
				$data[$j]['first_available_stock'] = $this->fct->getonerow('products_stock',array('status'=>1,'id_products'=>$data[$j]['id_products']));
			}
			$j++;
		}
	}
	return $data;
}


public function select_product_categories($id_products)
{
	//echo $id_products;exit;
	$this->db->select('categories.*');
	$this->db->from('categories');
	$this->db->join('products_categories','categories.id_categories = products_categories.id_categories');
	$cond = array(
		'products_categories.id_products'=>$id_products,
	);
	$this->db->where($cond);
	$this->db->group_by('categories.id_categories');
	$this->db->order_by('categories.title');
	$query = $this->db->get();
	//echo $this->db->last_query();exit;
	$categories = $query->result_array();
	$results = array();
	foreach($categories as $category) {
		array_push($results,$category['id_categories']);
	}
	return $results;
}
public function insert_product_categories($id_products,$categories)
{
	$old_ids = array();
	$new_ids = array();
	$deleted_ids = array();
	$this->db->select('*');
	$this->db->from('products_categories');
	$cond = array('id_products'=>$id_products);
	$this->db->where($cond);
	$this->db->order_by('products_categories.id_products_categories');
	$query = $this->db->get();
	$results = $query->result_array();
	if(!empty($results)) {
		foreach($results as $res) {
			array_push($old_ids,$res['id_categories']);
		}
	}
	foreach($categories as $category) {
		if(!in_array($category,$old_ids)) {
			array_push($new_ids,$category);
		}
	}
	if(!empty($old_ids)) {
		foreach($old_ids as $id) {
			if(!in_array($id,$categories)) {
				array_push($deleted_ids,$id);
			}
		}
	}
	if(!empty($deleted_ids)) {
		$q = 'DELETE FROM products_categories WHERE id_products = '.$id_products.' AND id_categories IN ('.implode(',',$deleted_ids).')';
		$this->db->query($q);
	}
	if(!empty($new_ids)) {
		foreach($new_ids as $new_id) {
			$data['created_date'] = date('Y-m-d h:i:s');
			$data['id_categories'] = $new_id;
			$data['id_products'] = $id_products;
			$this->db->insert('products_categories',$data);
		}
	}
}
public function getProductsCategories()
{
	$this->db->select('*');
	$this->db->from('categories');
	$cond = array(
		'deleted'=>0
	);
	$this->db->where($cond);
	$this->db->order_by('sort_order');
	$query = $this->db->get();
	$results = $query->result_array();
	if(!empty($results)) {
		foreach($results as $key => $res) {
			// get sub categories
			$this->db->select('categories_sub.*');
			$this->db->from('categories_sub');
			$this->db->join('categories_sub_categories','categories_sub_categories.id_categories_sub = categories_sub.id_categories_sub');
			$cond = array(
				'categories_sub.deleted'=>0,
				'categories_sub_categories.id_categories'=>$res['id_categories']
			);
			$this->db->where($cond);
			$this->db->order_by('categories_sub.sort_order');
			$query = $this->db->get();
			$subs = $query->result_array();
			$results[$key]['categories_sub'] = $subs;
			// get types
			$this->db->select('types.*');
			$this->db->from('types');
			$this->db->join('types_categories','types_categories.id_types = types.id_types');
			$cond = array(
				'types.deleted'=>0,
				'types_categories.id_categories'=>$res['id_categories']
			);
			$this->db->where($cond);
			$this->db->order_by('types.sort_order');
			$query = $this->db->get();
			$types = $query->result_array();
			$results[$key]['types'] = $types;
		}
	}
	return $results;
}
public function getCartProducts($cart_items)
{
	$data = array();
	if(!empty($cart_items)) {
		$i=0;
		foreach($cart_items as $item) {
			$product = $this->getOneProduct($item['id']);
			$gallery = $this->getAll_cond('products_gallery','sort_order',array('id_products'=>$item['id']));
			$options = array();
			if(!empty($item['options'])) {
				$opts = $item['options'];
				foreach($opts as $opt) {
					$dd = $this->getCartProductOption($opt);
					array_push($options,$dd);
				}
			}
			$data[$i] = $item;
			$data[$i]['product_info'] = $product;
			$data[$i]['product_info']['gallery'] = $gallery;
			$data[$i]['cart_options'] = $options;
			$i++;
		}
	}
	return $data;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
function generate_password($length) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);
}
function checktoken($token)
{
	$cond = array('token'=>md5($token));
	$check = $this->getonerow('password_requests',$cond);
	if(!empty($check)) {
		$token = $this->generate_password(8);
		$this->checktoken($token);
	}
	else {
		return $token;
	}
}
function create_password_request($user)
{
	$token = $this->generate_password(8);
	$token = $this->checktoken($token);
	//echo 'test: '.$token;exit;
	$created_date = date('Y-m-d h:i:s');
	$time = strtotime($created_date);
	$expiration_date = strtotime("+5 day", $time);
	$expiration_date = date('Y-m-d h:i:s',$expiration_date);
	$data = array(
		'id_user' => $user['id_user'],
		'created_date' => $created_date,
		'expiration_date' => $expiration_date,
		'token' => md5($token)
	);
	$this->db->insert('password_requests',$data);
	//print_r($data);exit;
	return $data;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getUserInfo($id_user)
{
	$data = array();
	$this->db->select('user.*');
	$this->db->from('user');
	$cond = array(
		'id_user'=>$id_user
	);
	$this->db->where($cond);
	$query = $this->db->get();
	$results = $query->row_array();
	
	$this->db->select('orders.*');
	$this->db->from('orders');
	$cond = array(
		'id_user'=>$id_user
	);
	$this->db->where($cond);
	$query = $this->db->get();
	$orders = $query->result_array();
	$data = $results;
	$data['orders'] = $orders;
	return $data;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getAddressBook($id_user = '')
{
	$this->db->select('address_book.*,countries.title'.getFieldLanguage($this->lang->lang()).' AS country_name');
	$this->db->from('address_book');
	$this->db->join('countries','countries.id_countries = address_book.id_countries');
	if($id_user != '') {
		$cond['address_book.id_user'] = $id_user;
		$this->db->where($cond);
	}
	$this->db->group_by('address_book.id_address_book');
	$this->db->order_by('address_book.id_address_book DESC');
	$query = $this->db->get();
	$results = $query->result_array();
	return $results;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getUserOrders($id_user)
{
	$this->db->select('orders.*');
	$this->db->from('orders');
	$cond = array(
		'id_user'=>$id_user
	);
	$this->db->where($cond);
	$this->db->order_by('id_orders DESC');
	$query = $this->db->get();
	$results = $query->result_array();
	
	return $results;
}
public function checkIfUserOrder($id_orders,$id_user)
{
	$cond = array(
		'id_orders'=>$id_orders,
		'id_user'=>$id_user
	);
	$check = $this->fct->getonerow('orders',$cond);
	return $check;
}
public function getOrders($cond = array(),$limit = '',$offset = '')
{
	$this->db->select('orders.*,user.name,user.first_name,user.surname');
	$this->db->from('orders');
	$this->db->join('user','orders.id_user = user.id_user');
	/*if(isset($cond['user.name'])) {
		$this->db->like('UPPER(name)',strtoupper($cond['user.name']));
		unset($cond['user.name']);
	}*/
	if(isset($cond['user.first_name'])) {
		$this->db->like('UPPER(first_name)',strtoupper($cond['user.first_name']));
		unset($cond['user.first_name']);
	}
	if(isset($cond['user.surname'])) {
		$this->db->like('UPPER(surname)',strtoupper($cond['user.surname']));
		unset($cond['user.surname']);
	}
	if(!empty($cond)) {
		$this->db->where($cond);
	}
	$this->db->group_by('orders.id_orders');
	$this->db->order_by('id_orders DESC');
	if($limit != '') {
		$this->db->limit($limit,$offset);
	}
	$query = $this->db->get();
	if($limit != '') {
		$result = $query->result_array();
	}
	else {
		$result = $query->num_rows();
	}
	return $result;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getOrder($order_id)
{
	$data = array();
	$this->db->select('orders.*');
	$this->db->from('orders');
	$this->db->where('id_orders',$order_id);
	$query = $this->db->get();
	$order = $query->row_array();
	//get payment method
	$this->db->select('payment_methods.*');
	$this->db->from('payment_methods');
	$this->db->where('index',$order['payment_method']);
	$query = $this->db->get();
	$paymentmethod = $query->row_array();
	//get user
	$this->db->select('user.*');
	$this->db->from('user');
	$this->db->where('id_user',$order['id_user']);
	$query = $this->db->get();
	$user = $query->row_array();
	// get billing information
	$this->db->select('address_book.*');
	$this->db->from('address_book');
	$this->db->where('id_address_book',$order['billing_id']);
	$query = $this->db->get();
	$billing = $query->row_array();
	// get billing country
	$this->db->select('countries.*');
	$this->db->from('countries');
	$this->db->where('id_countries',$billing['id_countries']);
	$query = $this->db->get();
	$country = $query->row_array();
	$billing['country'] = $country;
	// get delivery information
	$this->db->select('address_book.*');
	$this->db->from('address_book');
	$this->db->where('id_address_book',$order['delivery_id']);
	$query = $this->db->get();
	$delivery = $query->row_array();
	// get delivery country
	$this->db->select('countries.*');
	$this->db->from('countries');
	$this->db->where('id_countries',$delivery['id_countries']);
	$query = $this->db->get();
	$country = $query->row_array();
	$delivery['country'] = $country;
	// line items
	$line_items = array();
	$this->db->select('line_items.*');
	$this->db->from('line_items');
	$this->db->where('id_orders',$order['id_orders']);
	$query = $this->db->get();
	$items = $query->result_array();
	$i=0;
	foreach($items as $item) {
		$this->db->select('products.*');
		$this->db->from('products');
		$this->db->where('id_products',$item['id_products']);
		$query = $this->db->get();
		$res = $query->row_array();
		// product gallery
		$this->db->select('*');
		$this->db->from('products_gallery');
		$this->db->where('id_products',$item['id_products']);
		$query = $this->db->get();
		$gallery = $query->result_array();
		$line_items[$i] = $item;
		$line_items[$i]['product'] = $res;
		$line_items[$i]['product']['gallery'] = $gallery;
		$i++;
	}
	// set data
	$data = $order;
	$data['user'] = $user;
	$data['billing'] = $billing;
	$data['delivery'] = $delivery;
	$data['line_items'] = $line_items;
	$data['paymentmethod'] = $paymentmethod;
	/*print '<pre>';
	print_r($data);
	exit;*/
	return $data;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getUserCompareProducts($id_user = 0,$session_id = '')
{
	$data = array();
	$this->db->select('products.*');
	$this->db->from('products');
	$this->db->join('compare_products','compare_products.id_products = products.id_products');
	$cond = array (
		'compare_products.id_user'=>$id_user
	);
	$this->db->where("compare_products.session_id",$session_id);
	if($id_user != 0) {
		$this->db->or_where("compare_products.id_user",$id_user);
	}
	$this->db->group_by('compare_products.id_products');
	$this->db->order_by('products.sort_order');
	$query = $this->db->get();
	$results = $query->result_array();
	if(!empty($results)) {
		$i=0;
		foreach($results as $res) {
			$this->db->select('*');
			$this->db->from('products_gallery');
			$cond = array (
				'id_products'=>$res['id_products']
			);
			$this->db->where($cond);
			$this->db->order_by('sort_order');
			$query = $this->db->get();
			$gallery = $query->result_array();
			$data[$i] = $res;
			$data[$i]['gallery'] = $gallery;
			$attributes = $this->getProductAttributes($res['id_products']);
			// get stock
			$this->db->select('*');
			$this->db->from('products_stock');
			$cond = array (
				'id_products'=>$res['id_products']
			);
			$this->db->where($cond);
			$this->db->order_by('id_products_stock');
			$query = $this->db->get();
			$stock = $query->result_array();
			$data[$i]['attributes'] = $attributes;
			$data[$i]['stock'] = $stock;
			$i++;
		}
	}
	/*print '<pre>';
	print_r($data);exit;*/
	return $data;
}
public function checkUserCompareProduct($id_user = 0,$session_id = '',$id_product)
{
	$q = 'SELECT * FROM compare_products WHERE id_products = '.$id_product.' AND ( session_id = "'.$session_id.'"';
	if($id_user != 0)
	$q .= ' OR id_user = '.$id_user;
	$q .= ' )';
	$query = $this->db->get();
	$results = $query->row_array();
	return $results;
}
public function getProductAttributes($id_products)
{
	// get attributes
	$this->db->select('attributes.*');
	$this->db->from('attributes');
	$this->db->join('product_attributes','product_attributes.id_attributes = attributes.id_attributes');
	$cnd = array(
		'product_attributes.id_products'=>$id_products
	);
	$this->db->where($cnd);
	$this->db->group_by('attributes.id_attributes');
	$this->db->order_by('attributes.sort_order');
	$query = $this->db->get();
	$attributes = $query->result_array();
	if(!empty($attributes)) {
		$k=0;
		foreach($attributes as $attr) {
			// get product attribute options
			$this->db->select('attribute_options.*');
			$this->db->from('attribute_options');
			//$this->db->join('product_options','product_options.id_attribute_options = attribute_options.id_attribute_options');
			$cnd = array(
				//'product_options.id_products'=>$results['id_products'],
				'attribute_options.id_attributes'=>$attr['id_attributes'],
				//'product_options.status'=>1
			);
			$this->db->where($cnd);
			$this->db->group_by('attribute_options.id_attribute_options');
			$this->db->order_by('attribute_options.sort_order');
			$query = $this->db->get();
			$options = $query->result_array();
			$attributes[$k]['options'] = $options;
			$k++;
		}
	}
	return $attributes;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getUserFavorites($id_user)
{
	$data = array();
	$this->db->select('products.*,favorites.options');
	$this->db->from('products');
	$this->db->join('favorites','favorites.id_products = products.id_products');
	$cond = array (
		'favorites.id_user'=>$id_user
	);
	$this->db->where($cond);
	$this->db->group_by('favorites.id_products');
	$this->db->order_by('products.sort_order');
	$query = $this->db->get();
	$results = $query->result_array();
	if(!empty($results)) {
		$i=0;
		foreach($results as $res) {
			// get gallery
			$this->db->select('*');
			$this->db->from('products_gallery');
			$cond = array (
				'id_products'=>$res['id_products']
			);
			$this->db->where($cond);
			$this->db->order_by('sort_order');
			$query = $this->db->get();
			$gallery = $query->result_array();
			// get options
			$options = array();
			if(!empty($res['options'])) {
				$opts = explode(',',$res['options']);
			}
			if(!empty($opts)) {
				foreach($opts as $opt) {
					$dd = $this->getCartProductOption($opt);
					array_push($options,$dd);
				}
			}
			$data[$i] = $res;
			$data[$i]['gallery'] = $gallery;
			$data[$i]['cart_options'] = $options;
			$i++;
		}
	}
	return $data;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getNotSelectedAttributes_byProduct($id_product)
{
	$q = 'SELECT * FROM attributes WHERE deleted = 0 AND id_attributes NOT IN(SELECT id_attributes FROM product_attributes WHERE id_products = '.$id_product.')';
	$query = $this->db->query($q);
	$result = $query->result_array();
	return $result;
}
public function getSelectedAttributes_byProduct($id_product)
{
	$q = 'SELECT attributes.*, product_attributes.id_product_attributes FROM product_attributes';
	$q .= ' JOIN attributes ON attributes.id_attributes = product_attributes.id_attributes';
	$q .= ' WHERE product_attributes.id_products = '.$id_product;
	$q .= ' GROUP BY product_attributes.id_attributes';
	$q .= ' ORDER BY attributes.sort_order';
	$query = $this->db->query($q);
	$result = $query->result_array();
	return $result;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getAllOptions_byProductAttribute($id_product,$id_attribute)
{
	$data = array();
	$this->db->select('*');
	$this->db->from('attribute_options');
	$cond = array('id_attributes'=>$id_attribute);
	$this->db->where($cond);
	$this->db->order_by('sort_order');
	$query = $this->db->get();
	$result = $query->result_array();
	if(!empty($result)) {
		$i=0;
		foreach($result as $res) {
			$this->db->select('*');
			$this->db->from('product_options');
			$cond1['id_attributes'] = $id_attribute;
			$cond1['id_products'] = $id_product;
			$cond1['id_attribute_options'] = $res['id_attribute_options'];
			$this->db->where($cond1);
			$query1 = $this->db->get();
			$selected_option = $query1->row_array();
			$data[$i] = $res;
			$data[$i]['selected_option'] = $selected_option;
			$i++;
		}
	}
	//print '<pre>';print_r($data);exit;
	return $data;
}
public function getAttributeByOption($id_option)
{
	$this->db->select('attributes.*');
	$this->db->from('attributes');
	$this->db->join('attribute_options','attribute_options.id_attributes = attributes.id_attributes');
	$cond = array(
		'attribute_options.id_attribute_options'=>$id_option
	);
	$this->db->where($cond);
	$query = $this->db->get();
	//echo $this->db->last_query();exit;
	$result = $query->row_array();
	return $result;
}
public function getCartProductOption($id_option)
{
	$this->db->select('attributes.title AS attr_title,attributes.label AS attr_label,attributes.label AS attr_label_en,attribute_options.*');
	$this->db->from('attributes');
	$this->db->join('attribute_options','attribute_options.id_attributes = attributes.id_attributes');
	$cond = array(
		'attribute_options.id_attribute_options'=>$id_option
	);
	$this->db->where($cond);
	$query = $this->db->get();
	//echo $this->db->last_query();exit;
	$result = $query->row_array();
	return $result;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getBanners($section = '')
{
	$banners = array();
	$this->db->select('*');
	$this->db->from('banner');
	$cond = array(
		'deleted'=>0,
		'display'=>0
		//'version'=>$this->lang->lang()
	);
	$this->db->where($cond);
	if($section != '') {
		$this->db->like('pages',$section);
	}
	$this->db->order_by('sort_order');
	$query = $this->db->get();
	$results = $query->result_array();
	if(!empty($results)) {
		$i=0;
		foreach($results as $res) {
			$this->db->select('*');
			$this->db->from('banner_items');
			$cond1 = array(
				'deleted'=>0,
				'id_banner'=>$res['id_banner']
			);
			$this->db->where($cond1);
			$this->db->order_by('sort_order');
			$query = $this->db->get();
			$items = $query->result_array();
			$banners[$i] = $res;
			$banners[$i]['items'] = $items;
			$i++;
		}
	}
	return $banners;
}
public function getOptionsByIds($ids)
{
	$q = 'SELECT attribute_options.* FROM attribute_options JOIN attributes ON attributes.id_attributes = attribute_options.id_attributes WHERE attribute_options.id_attribute_options IN ('.implode(',',$ids).') GROUP BY attribute_options.id_attribute_options ORDER BY attributes.sort_order';
	$query = $this->db->query($q);
	$results = $query->result_array();
	return $results;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getUsers($cond = array(),$like = array())
{
	$this->db->select('user.*,roles.title');
	$this->db->from('user');
	$this->db->join('roles','roles.id_roles = user.id_roles','left');
	$this->db->where('user.deleted',0);
	if(!empty($cond))
	$this->db->where($cond);
	$roles= array(3);
	$this->db->where_not_in('user.id_roles',$roles);
	if(!empty($like))
	$this->db->like($like);
	$this->db->group_by('user.id_user');
	$this->db->order_by('user.sort_order');
	$query = $this->db->get();
	//echo $this->db->last_query();exit;
	$results = $query->result_array();
	return $results;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function UpdateProductStockInDatabase($id_products,$defaultQty,$oldQty,$newQty,$combination = '')
{
	if($newQty > $oldQty) {
		$updatedQty = $defaultQty - ($newQty - $oldQty);
	}
	elseif($newQty < $oldQty) {
		$updatedQty = $defaultQty + ($oldQty - $newQty);
	}
	else {
		$updatedQty = $defaultQty;
	}
	//echo $updatedQty;exit;
	if($combination != '') {
		$q = 'UPDATE products_stock SET quantity = '.$updatedQty.' WHERE id_products = '.$id_products.' AND combination = "'.$combination.'"';
		//echo $q;exit;
		$this->db->query($q);
		return TRUE;
	}
	else {
		$q = 'UPDATE products SET quantity = '.$updatedQty.' WHERE id_products = '.$id_products;
		//echo $q;exit;
		$this->db->query($q);
		return TRUE;
	}
}
public function UpdateQuantityInStock($id_products,$combination,$qty)
{
	$q = 'UPDATE products_stock SET quantity = quantity - '.$qty.' WHERE id_products = '.$id_products.' AND combination = "'.$combination.'"';
	$this->db->query($q);
	return TRUE;
}
public function UpdateQuantityInProducts($id_products,$qty)
{
	$q = 'UPDATE products SET quantity = quantity - '.$qty.' WHERE id_products = '.$id_products;
	$this->db->query($q);
	return TRUE;
}
public function loadUserCart()
{
	$cart_items = array();
	if($this->session->userdata('login_id') != '') {
		$id_user = $this->session->userdata('login_id');
		$q = 'DELETE FROM shopping_cart WHERE id_user = '.$id_user.' AND DATE_FORMAT(created_date, "%Y-%m-%d") < "'.date('Y-m-d', strtotime(date('Y-m-d'). ' - 14 days')).'"';
		$query = $this->db->query($q);
		$shopping_cart = $this->getAll_cond('shopping_cart','id_shopping_cart',array('id_user'=>$id_user));
		foreach($shopping_cart as $cart) {
			$data = array();
			$data['rowid'] = $cart['rowid'];
			$data['id'] = $cart['id_products'];
			$data['qty'] = $cart['qty'];
			$data['price'] = $cart['price'];
			$data['name'] = $cart['name'];
			$data['sub_total'] = $cart['sub_total'];
			$data['sub_total'] = $cart['sub_total'];
			$options = array();
			if(!empty($cart['options'])) {
				$dd = unSerializeStock($cart['options']);
				foreach($dd as $kk => $d)
				array_push($options,$kk);
				//$dd = explode(',',$cart['options']);
			}
			 $data['options'] = $options;
			$this->cart->insert($data);
		}
		$cart_items = $this->cart->contents();
	}
	return $cart_items;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function generateInvoiceTemplate($orderData)
{
	$condition1 = array('id_settings'=>1);
	$admindata =$this->fct->getonerow('settings',$condition1);
	$adminemail = $admindata['email'];
	$adminname = $admindata['website_title'];
	$dir = 'ltr';
	$logo = '';
	if($orderData['lang'] == 'ar') {
		$dir = 'rtl';
		$logo = '-rtl';
	}
	$body = '';
	$body .= '<table dir="'.$dir.'" width="95%" border="0" cellspacing="0" cellpadding="1" align="center" bgcolor="#ff8500" style="font-family: verdana, arial, helvetica; font-size: small;">';
	$body .= '<tr>';
	$body .= '<td>';
	$body .= '<table width="100%" border="0" cellspacing="2" cellpadding="5" align="center" bgcolor="#FFFFFF" style="font-family: verdana, arial, helvetica; font-size: small;">';
	$body .= '<tr valign="top">';
	$body .= '<td>';
	$body .= '<table width="100%" style="font-family: verdana, arial, helvetica; font-size: small;">';
	$body .= '<tr>';
	$body .= '<td align="center">';
	$body .= '<a href="'.site_url().'"><img src="'.base_url().'front/img/logo'.$logo.'.png" alt="'.$adminname.'" title="'.$adminname.'" />';
	$body .= '</td>';
	$body .= '</tr>';
	$body .= '</table>';
	$body .= '</td>';
	$body .= '</tr>';
	$body .= '<tr><td>&nbsp;</td></tr>';
	$body .= '<tr valign="top">';
	$body .= '<td>';
	$body .= '<p><b>'.lang('thank_you_for_your_order').' '.$orderData['user']['salutation'].' '.$orderData['user']['first_name'].' '.$orderData['user']['surname'].'</b></p>';
	$link = site_url();
	$body .= '<p><b>'.lang('want_to_manage_order_online').'</b><br />'.$this->lang->line('to_check_status',$adminname,$link).'</p>';
	$body .= '<table cellpadding="4" cellspacing="0" border="0" width="100%" style="font-family: verdana, arial, helvetica; font-size: small;">';
	$body .= '<tr>';
	$body .= '<td colspan="2" bgcolor="#ff8500" style="color: white;">';
	$body .= '<b>'.lang('purchasing_information').'</b>';
	$body .= '</td>';
	$body .= '</tr>';
	$body .= '<tr>';
	$body .= '<td nowrap="nowrap">';
	$body .= '<b>'.lang('email').'</b>';
	$body .= '</td>';
	$body .= '<td width="98%"><a href="mailto:'.$orderData['user']['email'].'">'.$orderData['user']['email'].'</a></td>';
	$body .= '</tr>';
	$body .= '<tr>';
	$body .= '<td colspan="2">';
	$body .= '<table width="100%" cellspacing="0" cellpadding="0" style="font-family: verdana, arial, helvetica; font-size: small;">';
	$body .= '<tr>';
	$body .= '<td valign="top" width="50%">';
	$body .= '<b>'.lang('billing_information').'</b><br />
	'.$orderData['billing']['first_name'].' '.$orderData['billing']['last_name'].'<br />
	<a href="mailto:'.$orderData['billing']['email'].'">'.$orderData['billing']['email'].'</a><br />
	'.$orderData['billing']['phone'].'<br />
	'.$orderData['billing']['company'].'<br />
	'.$orderData['billing']['postal_code'].'<br />
	'.$orderData['billing']['country']['title'].'<br />
	'.$orderData['billing']['state'].'<br />
	'.$orderData['billing']['city'].'<br />
	'.$orderData['billing']['street_address'].'<br />
	</td>';
	$body .= '<td valign="top" width="50%">
	<b>'.lang('delivery_information').'</b><br />
	'.$orderData['delivery']['first_name'].' '.$orderData['delivery']['last_name'].'<br />
	<a href="mailto:'.$orderData['billing']['email'].'">'.$orderData['delivery']['email'].'</a><br />
	'.$orderData['delivery']['phone'].'<br />
	'.$orderData['delivery']['company'].'<br />
	'.$orderData['delivery']['postal_code'].'<br />
	'.$orderData['delivery']['country']['title'].'<br />
	'.$orderData['delivery']['state'].'<br />
	'.$orderData['delivery']['city'].'<br />
	'.$orderData['delivery']['street_address'].'<br />
	</td>';
	$body .= '</tr>';
	$body .= '</table>';
	$body .= '</td>';
	$body .= '</tr>';
/*	$body .= '<tr>';
	$body .= '<td nowrap="nowrap">';
	$body .= '<b>'.lang('cart_net_price').'</b>';
	$body .= '</td>';
	$body .= '<td width="98%">'.changeCurrency($orderData['amount']).'</td>';
	$body .= '</tr>';*/
	$body .= '<tr>';
	$body .= '<td nowrap="nowrap">';
	$body .= '<b>'.lang('payment_method').'</b>';
	$body .= '</td>';
	$body .= '<td width="98%">'.$orderData['payment_method'].'</td>';
	$body .= '</tr>';
	$body .= '<tr><td>&nbsp;</td></tr>';
	$body .= '<tr>';
	$body .= '<td colspan="2" bgcolor="#ff8500" style="color: white;">';
	$body .= '<b>'.lang('order_details').'</b>';
	$body .= '</td>';
	$body .= '</tr>';
	$body .= '<tr>';
	$body .= '<td colspan="2">';
	$body .= '<table border="0" cellpadding="1" cellspacing="0" width="100%" style="font-family: verdana, arial, helvetica; font-size: small;">';
	$body .= '<tr>';
	$body .= '<td nowrap="nowrap">';
	$body .= '<b>'.lang('order_id').'</b>';
	$body .= '</td>';
	$body .= '<td width="98%">'.$orderData['id_orders'].'</td>';
	$body .= '</tr>';
	$body .= '<tr>';
	$body .= '<td nowrap="nowrap">';
	$body .= '<b>'.lang('created_date').'</b>';
	$body .= '</td>';
	$body .= '<td width="98%">'.$orderData['created_date'].'</td>';
	$body .= '</tr>';
	$body .= '<tr>';
	$body .= '<td nowrap="nowrap"><b>'.lang('cart_total_price').'</b></td>';
	$body .= '<td width="98%">'.$orderData['total_price_currency'].' '.lang($orderData['currency']).'</td>';
	$body .= '</tr>';
	$body .= '<tr>';
	$body .= '<td nowrap="nowrap"><b>'.lang('discount').'</b></td>';
	$body .= '<td width="98%">'.$orderData['discount'].' '.lang($orderData['currency']).'</td>';
	$body .= '</tr>';
	$body .= '<tr>';
	$body .= '<td nowrap="nowrap"><b>'.lang('amount').'</b></td>';
	$body .= '<td width="98%">'.$orderData['amount_currency'].' '.lang($orderData['currency']).'</td>';
	$body .= '</tr>';
	if($orderData['default_currency'] != $orderData['currency']) {
	$body .= '<tr>';
	$body .= '<td nowrap="nowrap"><b>'.lang('amount').' in '.$orderData['default_currency'].'</b></td>';
	$body .= '<td width="98%">'.$orderData['amount'].' '.lang($orderData['default_currency']).'</td>';
	$body .= '</tr>';
	}
	$body .= '<tr>';
	$body .= '<td nowrap="nowrap"><b>'.lang('status').'</b></td>';
	$body .= '<td width="98%">'.lang($orderData['status']).'</td>';
	$body .= '</tr>';
	if($orderData['status'] == 'paid'){
		$body .= '<td nowrap="nowrap">';
		$body .= '<b>'.lang('payment_date').'</b>';
		$body .= '</td>';
		$body .= '<td width="98%">'.$orderData['payment_date'].'</td>';
		$body .= '</tr>';
	}
	$body .= '<tr>';
	$body .= '<td colspan="2">';
	$body .= '<br /><br /><b>'.lang('products_on_order').'&nbsp;</b>';
	$body .= '<table width="100%" border="1" style="font-family: verdana, arial, helvetica; font-size: small; border:1px solid #ff8500">';
	$products = $orderData['line_items'];
	$body .= '<tr>';
	$body .= '<td><b>'.lang('cart_product_name').'</b></td>';
	$body .= '<td><b>'.lang('cart_product_price').'</b></td>';
	$body .= '<td><b>'.lang('cart_product_quantity').'</b></td>';
	$body .= '<td><b>'.lang('cart_total_price').'</b></td>';
	$body .= '</tr>';
	
	foreach ($products as $product){
    $product_name = '';
	if(empty($product['product']['sku'])) 
	$product_name .= $product['product']['title'.getFieldLanguage()];
	else
	$product_name .= $product['product']['sku'].', '.$product['product']['title'.getFieldLanguage()];
	if(!empty($product['options_en'])) {
		$options = $product['options_en'];
		$options = unSerializeStock($options);
		$product_name .= '<br />';
		$c = count($options);
		$i=0;
		foreach($options as $key => $opt) {
			$i++;
			$product_name .= $opt;
			if($i != $c) $product_name .= ' - ';
		}
	}
	$body .= '<tr>';
	$body .= '<td>'.$product_name.'</td>';
	$body .= '<td>'.$product['price_currency'].' '.lang($product['currency']).'</td>';
	$body .= '<td>'.$product['quantity'].'</td>';
	$body .= '<td>'.$product['total_price_currency'].' '.lang($product['currency']).'</td>';
	$body .= '</tr>';
	}
	$body .= '</table>';
	$body .= '</td>';
	$body .= '</tr>';
	$body .= '</table>';
	$body .= '</td>';
	$body .= '</tr>';
	$body .= '<tr>';
	$body .= '<td colspan="2">';
	$body .= '<hr noshade="noshade" size="1" /><br />';
	$body .= '<p>'.lang('order_email_note').'</p>';
	$body .= '</td>';
	$body .= '</tr>';
	$body .= '</table>';
	$body .= '</td>';
	$body .= '</tr>';
	$body .= '</table>';
	$body .= '</td>';
	$body .= '</tr>';
	$body .= '</table>';
	return $body;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function getNews($cond = array(),$limit = '',$offset = '')
{
	$this->db->select('*');
	$this->db->from('news');
	$this->db->where('deleted',0);
	if(!empty($cond)) {
		$this->db->where($cond);
	}
	$this->db->order_by('date DESC');
	if($limit != '')
	$this->db->limit($limit,$offset);
	$query = $this->db->get();
	if($limit != '')
	$result = $query->result_array();
	else
	$result = $query->num_rows();
	return $result;
}
public function getCareers($cond = array(),$limit = '',$offset = '')
{
	$this->db->select('*');
	$this->db->from('careers');
	$this->db->where('deleted',0);
	if(!empty($cond)) {
		$this->db->where($cond);
	}
	$this->db->order_by('sort_order');
	if($limit != '')
	$this->db->limit($limit,$offset);
	$query = $this->db->get();
	if($limit != '')
	$result = $query->result_array();
	else
	$result = $query->num_rows();
	return $result;
}
public function getPartners($cond = array(),$limit = '',$offset = '')
{
	$this->db->select('*');
	$this->db->from('reseller_partners');
	$this->db->where('deleted',0);
	if(!empty($cond)) {
		$this->db->where($cond);
	}
	$this->db->order_by('sort_order');
	if($limit != '')
	$this->db->limit($limit,$offset);
	$query = $this->db->get();
	if($limit != '')
	$result = $query->result_array();
	else
	$result = $query->num_rows();
	return $result;
}
public function getVideos($cond = array(),$limit = '',$offset = '')
{
	$this->db->select('*');
	$this->db->from('videos');
	$this->db->where('deleted',0);
	if(!empty($cond)) {
		$this->db->where($cond);
	}
	$this->db->order_by('sort_order');
	if($limit != '')
	$this->db->limit($limit,$offset);
	$query = $this->db->get();
	if($limit != '')
	$result = $query->result_array();
	else
	$result = $query->num_rows();
	return $result;
}
public function getSheets($cond = array(),$limit = '',$offset = '')
{
	$this->db->select('*');
	$this->db->from('products');
	$this->db->where('deleted',0);
	$this->db->where('pdf !=','');
	if(!empty($cond)) {
		$this->db->where($cond);
	}
	$this->db->order_by('sort_order');
	if($limit != '')
	$this->db->limit($limit,$offset);
	$query = $this->db->get();
	if($limit != '')
	$result = $query->result_array();
	else
	$result = $query->num_rows();
	if($limit != '' && !empty($result)) {
		foreach($result as $key => $res1) {
			$this->db->select('*');
			$this->db->from('products_gallery');
			$this->db->where('deleted',0);
			$this->db->where('id_products',$res1['id_products']);
			$this->db->order_by('sort_order');
			$query = $this->db->get();
			$gals = $query->result_array();
			$result[$key]['gallery'] = $gals;
		}
	}
	
	return $result;
}
public function getSupportItems($id_category)
{
	$this->db->select('*');
	$this->db->from('support_sub_categories');
	$cond = array(
		'id_support_categories'=>$id_category,
		'deleted'=>0
	);
	$this->db->where($cond);
	$this->db->order_by('sort_order');
	$query = $this->db->get();
	$result = $query->result_array();
	if(!empty($result)) {
		foreach($result as $key => $res) {
			$this->db->select('*');
			$this->db->from('support');
			$cond = array(
				'id_support_sub_categories'=>$res['id_support_sub_categories'],
				'deleted'=>0
			);
			$this->db->where($cond);
			$this->db->order_by('sort_order');
			$query = $this->db->get();
			$items = $query->result_array();
			$result[$key]['items'] = $items;
		}
	}
	return $result;
}
public function searchSupportItems($id_category,$keyword)
{
	$q = 'SELECT support_sub_categories.* FROM support_sub_categories JOIN support ON support.id_support_sub_categories = support_sub_categories.id_support_sub_categories';
	$q .= ' WHERE support_sub_categories.deleted = 0 AND support.deleted = 0';
	$q .= ' AND support_sub_categories.id_support_categories = '.$id_category;
	$q .= ' AND (';
		$q .= ' UPPER(support_sub_categories.title'.getFieldLanguage().') LIKE "%'.strtoupper($keyword).'%"';
		$q .= ' OR UPPER(support.title'.getFieldLanguage().') LIKE "%'.strtoupper($keyword).'%"';
	$q .= ' )';
	$q .= ' GROUP BY support_sub_categories.id_support_sub_categories';
	$q .= ' ORDER BY support_sub_categories.sort_order';
	$query = $this->db->query($q);
	$result = $query->result_array();
	if(!empty($result)) {
		foreach($result as $key => $res) {
			$this->db->select('*');
			$this->db->from('support');
			$cond = array(
				'id_support_sub_categories'=>$res['id_support_sub_categories'],
				'deleted'=>0
			);
			$this->db->where($cond);
			$this->db->order_by('sort_order');
			$query = $this->db->get();
			$items = $query->result_array();
			$result[$key]['items'] = $items;
		}
	}
	return $result;
}
public function getFAQS()
{
	$this->db->select('*');
	$this->db->from('faqs_categories');
	$cond = array(
		'deleted'=>0,
		'id_faqs_categories !='=>3,
	);
	$this->db->where($cond);
	$this->db->order_by('sort_order');
	$query = $this->db->get();
	$result = $query->result_array();
	if(!empty($result)) {
		foreach($result as $key => $res) {
			$this->db->select('*');
			$this->db->from('faqs');
			$cond = array(
				'id_faqs_categories'=>$res['id_faqs_categories'],
				'deleted'=>0
			);
			$this->db->where($cond);
			$this->db->order_by('sort_order');
			$query = $this->db->get();
			$items = $query->result_array();
			$result[$key]['faqs'] = $items;
		}
	}
	return $result;
}
public function getCatalogues($id_category = '')
{
	if($id_category == '') {
		
		$this->db->where('deleted',0);
		$this->db->order_by('sort_order');
		$query = $this->db->get('catalogue_categories');
		$res = $query->row_array();
		$id_category = $res['id_catalogue_categories'];
	}
	$this->db->select('*');
	$this->db->from('catalogues');
	$cond = array('deleted'=>0,'id_catalogue_categories'=>$id_category);
	$this->db->where($cond);
	$this->db->order_by('sort_order');
	$query = $this->db->get();
	$results = $query->result_array();
	return $results;
}
//////////////////////////////////////////////////////////////////////////////
public function getSubCategoriesByCategory($id_categories)
{
	$this->db->select('categories_sub.*');
	$this->db->from('categories_sub');
	$this->db->join('categories_sub_categories','categories_sub_categories.id_categories_sub = categories_sub.id_categories_sub');
	$cond = array(
		'categories_sub.deleted'=>0,
		'categories_sub_categories.id_categories'=>$id_categories
	);
	$this->db->where($cond);
	$this->db->group_by('categories_sub.id_categories_sub');
	$this->db->order_by('categories_sub.sort_order');
	$query = $this->db->get();
	$results = $query->result_array();
	return $results;
}
public function getSubCategoriesByMultipleCategories($id_categories = array())
{
	$this->db->select('categories_sub.*');
	$this->db->from('categories_sub');
	if(!empty($id_categories))
	$this->db->join('categories_sub_categories','categories_sub_categories.id_categories_sub = categories_sub.id_categories_sub');
	$cond = array(
		'categories_sub.deleted'=>0
	);
	$this->db->where($cond);
	if(!empty($id_categories))
	$this->db->where_in('categories_sub_categories.id_categories',$id_categories);
	$this->db->group_by('categories_sub.id_categories_sub');
	$this->db->order_by('categories_sub.sort_order');
	$query = $this->db->get();
	$results = $query->result_array();
	return $results;
}
public function getTypesByCategory($id_categories,$id_categories_sub = '')
{
	$this->db->select('types.*');
	$this->db->from('types');
	$this->db->join('types_categories','types_categories.id_types = types.id_types');
	if($id_categories_sub != '')
	$this->db->join('types_categories_sub','types_categories_sub.id_types = types.id_types');
	$cond = array(
		'types.deleted'=>0,
		'types_categories.id_categories'=>$id_categories
	);
	if($id_categories_sub != '')
	$cond['types_categories_sub.id_categories_sub'] = $id_categories_sub;
	$this->db->where($cond);
	$this->db->group_by('types.id_types');
	$this->db->order_by('types.sort_order');
	$query = $this->db->get();
	//echo $this->db->last_query();exit;
	$results = $query->result_array();
	return $results;
}
//////////////////////////////////////////////////////////////////////////////
public function addVisit($section,$session_id,$id = "")
{
 $q = 'SELECT * FROM visits WHERE section = "'.$section.'" AND session_id = "'.$session_id.'"';
 if($id != "")
 $q .= ' AND record = '.$id;
 $query = $this->db->query($q);
 $result = $query->row_array();
 if(empty($result)) {
  $insert['created_date'] = date("Y-m-d h:i:s");
  $insert['section'] = $section;
  $insert['session_id'] = $session_id;
  if($id != "")
  $insert['record'] = $id;
  if($this->session->userdata('login_id') != '') {
	   $insert['id_user'] = $this->session->userdata('login_id');
  }
  $this->db->insert("visits",$insert);
  if($id != "") {
   $q1 = 'UPDATE '.$section.' SET visits = visits + 1 WHERE id_'.$section.' = '.$id;
   $this->db->query($q1);
  }
 }
 return "";
}
//////////////////////////////////////////////////////////////////////////////
public function checkPriceSegment($id_products,$id_stock,$qty)
{
	$p = '';
	$q = 'SELECT * FROM product_price_segments WHERE id_products = '.$id_products.' AND id_stock = '.$id_stock.' HAVING MAX(min_qty) <= '.$qty;
	//echo $q.'<br />';
	$query = $this->db->query($q);
	$result = $query->row_array();
	if(!empty($result))
	$p = $result['price'];
	return $p;
}
public function getDiscountByCode($code)
{
	$q = 'SELECT discount_groups.* FROM discount_groups WHERE discount_groups.deleted = 0 AND discount_groups.code = "'.$code.'" AND (expiry_date = "" OR expiry_date = "0000-00-00" OR expiry_date >= "'.date('Y-m-d').'")';
	$query = $this->db->query($q);
	$res = $query->row_array();
	return $res;
}
//////////////////////////////////////////////////////////////////////////////
public function createNewCaptcha()
{
	$img = '';
	 $vals = array(
		  'img_path' => './captcha/',
		  'img_url' => base_url().'captcha/',
		  'img_width'     => '200',
				'img_height'    => 30,
				'expiration'    => 7200,
				'font_size'     => 14,
				'colors'        => array(
						'background' => array(255, 255, 255),
						'border' => array(255, 255, 255),
						'text' => array(0, 0, 0),
						'grid' => array(255, 40, 40)
				)
		  );
		  $cap = create_captcha($vals);
		  if($cap != '') {
		  $data = array(
		  'captcha_time' => $cap['time'],
		  'ip_address' => $this->input->ip_address(),
		  'word' => $cap['word']
		  );

		  $query = $this->db->insert_string('captcha', $data);
		  $this->db->query($query);
		  $img = $cap['image'];
	  }
	  return $img;
}
////////////////////////////////////////////////////////////////////////////////////
public function getProductsTabs()
{
	$q = 'SELECT * FROM dynamic_pages WHERE id_dynamic_pages IN(14,15,16) ORDER BY id_dynamic_pages';
	$query = $this->db->query($q);
	$results = $query->result_array();
	return $results;
}
////////////////////////////////////////////////////////////////////////////////////
public function getCategoriesBySub($id_sub)
{
	$q = 'SELECT categories.* FROM categories JOIN categories_sub_categories ON categories_sub_categories.id_categories = categories.id_categories WHERE categories.deleted = 0 AND categories_sub_categories.id_categories_sub = '.$id_sub.' GROUP BY categories.id_categories ORDER BY categories.sort_order';
	$query = $this->db->query($q);
	$results = $query->result_array();
	return $results;
}
public function getCategoriesByType($id_type)
{
	$q = 'SELECT categories.* FROM categories JOIN types_categories ON types_categories.id_categories = categories.id_categories WHERE categories.deleted = 0 AND types_categories.id_types = '.$id_type.' GROUP BY categories.id_categories ORDER BY categories.sort_order';
	$query = $this->db->query($q);
	$results = $query->result_array();
	return $results;
}
public function getSupportCategoryBySub($id_sub)
{
	$q = 'SELECT support_categories.* FROM support_categories JOIN support_sub_categories ON support_sub_categories.id_support_categories = support_categories.id_support_categories WHERE support_categories.deleted = 0 AND support_sub_categories.id_support_sub_categories = '.$id_sub.' GROUP BY support_categories.id_support_categories ORDER BY support_categories.sort_order';
	$query = $this->db->query($q);
	$results = $query->row_array();
	return $results;
}
public function getUserComparedProducts($id_user = 0,$session_id = '')
{
	$ids = array();
	//if($this->session->userdata('login_id') != "") {
	//$id_user = $this->session->userdata('login_id');
	$q = 'SELECT * FROM compare_products WHERE session_id = "'.$session_id.'"';
	if($id_user != 0)
	$q .= ' OR id_user = '.$id_user;
	$query = $this->db->query($q);
	$result = $query->result_array();
	if(!empty($result)) {
		foreach($result as $res) {
			if(!in_array($res['id_products'],$ids)) array_push($ids,$res['id_products']);
		}
	}
	//}
	return $ids;
}
public function searchWebsite($keywords,$limit = "",$offset = "")
{
$url = $this->site_model->return_url();
	$sqla="SELECT concat(id_content,'s:content','s:Content') as id, id_content, id_parent ,title, created_date , description, CONCAT(IF(LENGTH(image), '".$url."uploads/content/', ''), `image`) AS imageUrl FROM content where deleted = 0 ";
	$sqla.="AND (UPPER(content.title) like '%".strtoupper($keywords)."%' OR UPPER(content.description) like '%".strtoupper($keywords)."%') ";	
	
	/*$sqla.=" UNION (SELECT concat(id_sections_pages,'s:sections_pages','s:Sections Pages') as id, title_url , title, created_date , description FROM sections_pages where deleted = 0 ";
	$sqla.="AND (UPPER(sections_pages.title) like '%".strtoupper($keywords)."%' OR UPPER(sections_pages.description) like '%".strtoupper($keywords)."%')) ";
	
	$sqla.=" UNION (SELECT concat(id_sections_pages_details,'s:sections_pages_details','s:Sections Pages Details') as id, title_url , title, created_date , description FROM sections_pages_details where deleted = 0 ";
	$sqla.="AND (UPPER(sections_pages_details.title) like '%".strtoupper($keywords)."%' OR UPPER(sections_pages_details.description) like '%".strtoupper($keywords)."%')) ";
	
	$sqla.=" UNION (SELECT concat(id_board_of_directors,'s:board_of_directors','s:Members of the Board') as id, title_url , title, created_date , description FROM board_of_directors where deleted = 0 ";
	$sqla.="AND (UPPER(board_of_directors.title) like '%".strtoupper($keywords)."%' OR UPPER(board_of_directors.meta_description) like '%".strtoupper($keywords)."%')) ";
	
	$sqla.=" UNION (SELECT concat(id_events,'s:events','s:Events') as id, title_url , title, created_date , description FROM events where deleted = 0 ";
	$sqla.="AND (UPPER(events.title) like '%".strtoupper($keywords)."%' OR UPPER(events.description) like '%".strtoupper($keywords)."%')) ";
	
	$sqla.=" UNION (SELECT concat(id_executive_team,'s:executive_team','s:Executive Team') as id, title_url , title, created_date , description FROM executive_team where deleted = 0 ";
	$sqla.="AND (UPPER(executive_team.title) like '%".strtoupper($keywords)."%' OR UPPER(executive_team.description) like '%".strtoupper($keywords)."%')) ";
	
	$sqla.=" UNION (SELECT concat(id_facilities,'s:facilities','s:Facilities') as id, title_url , title, created_date , description FROM facilities where deleted = 0 ";
	$sqla.="AND (UPPER(facilities.title) like '%".strtoupper($keywords)."%' OR UPPER(facilities.description) like '%".strtoupper($keywords)."%')) ";
	
	$sqla.=" UNION (SELECT concat(id_press_releases,'s:press_releases','s:Press Releases') as id, title_url , title, created_date , description FROM press_releases where deleted = 0 ";
	$sqla.="AND (UPPER(press_releases.title) like '%".strtoupper($keywords)."%' OR UPPER(press_releases.description) like '%".strtoupper($keywords)."%')) ";
	
	$sqla.=" UNION (SELECT concat(id_products,'s:products','s:Products') as id, title_url , title, created_date , description FROM products where deleted = 0 ";
	$sqla.="AND (UPPER(products.title) like '%".strtoupper($keywords)."%' OR UPPER(products.description) like '%".strtoupper($keywords)."%')) ";*/
	
	$sqla .= " ORDER BY created_date DESC";
	if($limit != "") {
		$sqla .= " LIMIT ".$limit." OFFSET ".$offset;
	}
	

	$query = $this->db->query($sqla);
	if($limit != "") {
		$results = $query->result_array();
	}
	else {
		$results = $query->num_rows();
	}
	return $results;
}


function getRelatedNews($id)
{
$q = "SELECT n.* FROM news n JOIN news_related nr ON nr.id_related = n.id_news WHERE n.deleted = 0 AND nr.id_news = ".$id." GROUP BY n.id_news ORDER BY n.sort_order";
$query = $this->db->query($q);
$results = $query->result_array();
return $results;
}
///////////////////////////////////////////////////////////////////////////////////
public function GenerateCorrelationID()
{
$password = $this->input->post("password");
 $string_date= date('Y-m-d H:i:s');
// $generated_CorrelationID =  base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $password,  $string_date, MCRYPT_MODE_ECB) ) ;
 return md5($password);
}
public function validateCorrelationID()
{
 $cid = $this->session->userdata("cid");
 $uid = $this->session->userdata("user_id");
 $cond = array(
  'id_user'=>$uid,
  'correlation_id'=>$cid
 );
 $checkUser = $this->fct->getonerow("user",$cond);
 if(empty($checkUser)) {
  $this->session->unset_userdata('user_id');
  $this->session->unset_userdata('cid');
  echo 'You are not authorized to access this section, please <a href="'.site_url("back_office").'">login</a>.';
  exit;
 }
 else {
  return TRUE;
 }
}
}