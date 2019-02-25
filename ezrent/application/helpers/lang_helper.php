<?php // test_helper.php
if(!defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('getFieldLanguage')){
function getFieldLanguage($lang11 = ''){
	$field = '';
	if($lang11 == '') {
		$CI =& get_instance();
		$lng = $CI->lang->lang();
	}
	else {
		$lng = $lang11;
	}
	switch($lng) {
		case 'en':
			$field = '';
			break;
		case 'ar':
			$field = '_ar';
		case 'fr':
			$field = '_fr';
	}
	return $field;
}
}

if ( ! function_exists('getUrlFieldLanguage')){
function getUrlFieldLanguage($lang11 = ''){
	$field = '';
	if($lang11 == '') {
		$CI =& get_instance();
		$lng = $CI->lang->lang();
	}
	else {
		$lng = $lang11;
	}
	switch($lng) {
		case 'en':
			$field = '';
			break;
		case 'ar':
			$field = '_ar';
		case 'fr':
			$field = '_fr';
	}
	return $field;
}
}