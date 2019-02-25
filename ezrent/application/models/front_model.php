<?php
class Front_model extends CI_Model {
	function getAllRecords($table,$cond="",$order_by="created_date",$order_type="desc",$limit="",$offset=0){
		if(!empty($cond))
			$this->db->where($cond);
		if(!empty($limit))
			$this->db->limit($limit,$offset);
		$this->db->where('deleted',FALSE);
		//$this->db->order_by($order_by,'sort_order');
$this->db->order_by($order_by);
		$q = $this->db->get($table);
		return $q->result_array();
	}
	function getRelatedNews($id){
		$q = "SELECT n.*,nr.id_related FROM news n JOIN news_related nr ON nr.id_related = n.id_news WHERE n.deleted = 0 AND nr.id_news = ".$id." GROUP BY n.id_news ORDER BY n.sort_order";
		$query = $this->db->query($q);
		$results = $query->result_array();
		return $results;
	}
	function getRecord($table,$cond="",$return_array=FALSE){
		if(!empty($cond))
			$this->db->where($cond);
		$q = $this->db->get($table);
		if($return_array)
			return $q->row_array();
		else
			return $q->row();
	}
    function insertRecord($table,$data){
		$this->db->set("created_date", "NOW()", FALSE);
		$this->db->insert($table, $data);
	}
	function IsEmailExisted($email){
		$this->db->where('email',$email);
		$this->db->from('newsletter');
		if($this->db->count_all_results()==0)
			return FALSE;
		else
			return TRUE;
	}
	function getFleet($cond='',$single_record=FALSE,$limit=''){
if(!empty($cond))
$this->db->select('fleet.*,category.title as category_title');
else
		$this->db->select('fleet.*, "all" AS category_title',false);
		$this->db->from('fleet');
if(!empty($cond))
		$this->db->join('category','fleet.id_category=category.id_category');
		if(!empty($limit))
			$this->db->limit($limit);
		if(!empty($cond))
			$this->db->where($cond);
		$this->db->where('fleet.deleted',FALSE);
		$this->db->order_by('sort_order');
		$q = $this->db->get();
		if($single_record)
			return $q->row_array();
		else
			return $q->result_array();
	}
	public function sendEmailMessage($name,$email,$phone,$subject,$message,$admin_email){
		$m = "<div style='color:#ed6323'><b>The following user has submitted a form in EZ Website:</b></div><br>";
		$m .= "<table cellspacing='0' cellpadding='5'><tr><td>Name :</td><td>".$name."</td></tr><tr><td>Email :</td><td>".$email."</td></tr><tr><td>phone :</td><td>".$phone."</td></tr><tr><td>Subject:</td><td>".$subject."</td></tr><tr><td>Message :</td><td>".$message."</td></tr></table>";
		$config= Array(
			'mailtype'  => 'html'
		);
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
        $this->email->from($email, $name);
        $this->email->to($admin_email);
if($admin_email != "info@ezrent.ae")
$this->email->cc("info@ezrent.ae");
        $this->email->subject($subject);
        $this->email->message($m);
        $this->email->send();
	}
	public function sendAutoReply($user_email,$subject,$message,$admin_email){
		$config= Array(
			'mailtype'  => 'html'
		);
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
        $this->email->from($admin_email, 'EZ Rent');
        $this->email->to($user_email);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
	}
}


