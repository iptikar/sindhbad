<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$CI =& get_instance();
if($CI->uri->segment(1) == "back_office") {
$config['first_link'] = 'First';
$config['first_tag_open'] = '<li>';
$config['first_tag_close'] = '</li>';
$config['last_link'] = 'Last';
$config['last_tag_open'] = '<li>';
$config['last_tag_close'] = '</li>';
$config['next_link'] = '&raquo;';
$config['next_tag_open'] = '<li>';
$config['next_tag_close'] = '</li>';
$config['prev_link'] = '&laquo;';
$config['prev_tag_open'] = '<li>';
$config['prev_tag_close'] = '</li>';
$config['cur_tag_open'] = '<li class="active"><span>';
$config['cur_tag_close'] = '</span></li>';
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';
$config['full_tag_open'] = '<div class="pagination pagination-mini"><ul>';
$config['full_tag_close'] = '</ul></div>';
}
else {
$config['first_link'] = 'First';
$config['first_tag_open'] = '<li>';
$config['first_tag_close'] = '</li>';
$config['last_link'] = 'Last';
$config['last_tag_open'] = '<li>';
$config['last_tag_close'] = '</li>';
$config['next_link'] = 'Next';
$config['next_tag_open'] = '<li>';
$config['next_tag_close'] = '</li>';
$config['prev_link'] = 'Previous';
$config['prev_tag_open'] = '<li>';
$config['prev_tag_close'] = '</li>';
$config['cur_tag_open'] = '<li class="currentPage simplePageNav1"><span>';
$config['cur_tag_close'] = '</span></li>';
$config['num_tag_open'] = '<li class="simplePageNav2">';
$config['num_tag_close'] = '</li>';
$config['full_tag_open'] = '<ul class="pagination">';
$config['full_tag_close'] = '</ul>';
}