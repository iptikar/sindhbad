<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('displayCustomerPrice')){
function displayCustomerPrice($list_price,$discount_expiration,$price){
	$CI =& get_instance();
	if($discount_expiration != '' && $discount_expiration != '0000-00-00' && $discount_expiration < date("Y-m-d")) {
		$price = $list_price;
	}
	if($CI->session->userdata('login_id') != '') {
		$id_user = $CI->session->userdata('login_id');
		$discounts = $CI->config->item('discounts');
		if(isset($discounts[$id_user])) {
			$dsc = $discounts[$id_user];
			$newprice = round($list_price - ($list_price * ($dsc / 100)), 2);
			//echo $newprice;exit;
			if($newprice > $price)
			$newprice = $price;
		}
		else {
			$newprice = $price;
		}
	}
	else {
		$newprice = $price;
	}
	//echo $newprice;exit;
	return $newprice;
}
}


if ( ! function_exists('displayWasCustomerPrice')){
function displayWasCustomerPrice($list_price){
	$CI =& get_instance();
	if($CI->session->userdata('login_id') != '') {
		$id_user = $CI->session->userdata('login_id');
		$discounts = $CI->config->item('discounts');
		if(isset($discounts[$id_user])) {
			$dsc = $discounts[$id_user];
			$newprice = round($list_price - ($list_price * ($dsc / 100)), 2);
		}
		else {
			$newprice = $list_price;
		}
	}
	else {
		$newprice = $list_price;
	}
	//echo $newprice;exit;
	return $newprice;
}
}

if ( ! function_exists('addDiscount')){
function addDiscount($price,$dis){
	return round($price - ($price * ($dis / 100)), 2);
}
}



