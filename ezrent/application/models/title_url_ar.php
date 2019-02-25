<?
class Title_url_ar extends CI_Model {
// url generate
public function cleanURL($table, $url_name , $id = '',$field_url = 'title_url_ar')
 {
  $find = array(' ','(',')',','); 
  $replace = array('-','-','-','-');
  $url_name = str_replace($find,$replace,$url_name);
  $cond = array($field_url => $url_name);
  if($id != '')
  $cond["id_".$table." != "] = $id;
  $check_exist = $this->if_existings($table, $cond);
  if ($check_exist == false)
  {
   return $url_name;
  }

  $new_url_name = '';
  for ($i = 1; $i < 2000; $i++)
  {
   $new_url_name = $url_name.$i;
   $cond = array($field_url =>  $new_url_name);
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

}