<?php // test_helper.php
if(!defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('serializeStock')){
function serializeStock($options,$id_product){
	$arr = array();
	$str = '';
	$text = '';
	$id = $id_product;
	if(!empty($options)) {
	  $str .= '{';
	  $i=0;
	  $c = count($options);
	  foreach($options as $k => $v) {
		  
		  $i++;
		  foreach($v as $y => $s) {
			  $str .= $y.':'.$s;
			  $text .= $s;
			  $id .= $y;
		  }
		  if($i != $c)  {
			  $str .=',';
			  $text.= ' - ';
		  }
	  }
	  $str .= '}';
	}
	$arr['str'] = $str;
	$arr['text'] = $text;
	$arr['id'] = intval($id);
	//print'<pre>';print_r($arr);exit;
	return $arr;
}
}

if ( ! function_exists('unSerializeStock')){
function unSerializeStock($options){
	$arr = array();
	$find = array('{','}');
	$replace = array('','');
	$options = str_replace($find,$replace,$options);
	$options = explode(',',$options);
	//print '<pre>';print_r($options);exit;
	if(!empty($options)) {
	  foreach($options as $opt) {
		    $d = explode(':',$opt);
			$arr[$d[0]] = $d[1];
	  }
	}
	return $arr;
}
}

if ( ! function_exists('arrangeStockIds')){
function arrangeStockIds($options){
	$arr = array();
	if(!empty($options)) {
	  foreach($options as $key => $opt) {
			array_push($arr,$key);
	  }
	}
	return $arr;
}
}

if ( ! function_exists('serializecartOptions')){
function serializecartOptions($options,$field = ''){
	$arr = array();
	$str = '';
	if(!empty($options)) {
	  $str .= '{';
	  $i=0;
	  $c = count($options);
	  foreach($options as $k => $v) {
		  $i++;
		  $str .= $v['id_attribute_options'].':'.$v['title'.$field];
		  if($i != $c)  {
			  $str .=',';
		  }
	  }
	  $str .= '}';
	}
	return $str;
}
}


if ( ! function_exists('getAllCount')){
function getAllCount($attributes) {
	
	$count_all = 1;
	foreach($attributes as $attr) {
		$count_all = $count_all * count($attr['options']);
	}
	return $count_all;
}
}

if ( ! function_exists('PrepareAttributes')){
function PrepareAttributes($attributes,$arr,$c,$i=0,$new1=array(),$new2 = array()){
$i++;
if($i <= $c){
	$old = $new1;
	foreach($arr as $k => $v){
	$new1[] = array($v['id_attribute_options']=>$v['title']);	
	if($i == $c){
	$new2[] = $new1;
	$new1 = $old;	
	} else {
	$new2 = PrepareAttributes($attributes,$attributes[$i]['options'],$c,$i,$new1,$new2);
			array_splice($new1, ($i-1));
	}
	}
	return $new2;
} else { return false; }
}
}

if ( ! function_exists('getCartIds')){
function getCartIds($array){
	$ids = array();
	foreach($array as $arr) {
		array_push($ids,$arr['id']);
	}
	return $ids;
}
}

if ( ! function_exists('arrangeCartProducts')){
function arrangeCartProducts($cart_items,$productsData){
	$products = array();
		$i=0;
		//print '<pre>';print_r($productsData);exit;
		if(!empty($cart_items)) {
			foreach($cart_items as $item) {
				$products[$i] = $item;
				foreach($productsData as $prod) {
					if($prod['id_products'] == $item['id']) {
						$products[$i]['product_info'] = $prod;
						$i++;
						break;
					}
				}
			}
		}
	return $products;
}
}

if ( ! function_exists('changeCurrency')){
function changeCurrency($price,$with_currency = 1,$currency_to = ''){
	$CI =& get_instance();
	$default_currency = $CI->config->item("default_currency");
	$currency_from = $default_currency;
	if($currency_to == '') {
		if($CI->session->userdata('currency')) {
			$currency_to = $CI->session->userdata('currency');
		}
		else {
			$currency_to = $default_currency;
			$CI->session->set_userdata('currency',$default_currency);
		}
	}
	//echo $currency_from.'_to_'.$currency_to;exit;
	$rate= $CI->config->item($currency_from.'_to_'.$currency_to);
	//echo 'rate '.$rate;exit;
	if($rate != '')
	$price = $rate * $price;
	
	$n_price = round($price, 2);
	if($n_price != $price) {
		if($n_price < $price)
		$n_price = $n_price + 1;
	}
	//echo $n_price;exit;
	if($with_currency == 1)
	return displayCurrencyByLang($currency_to).''.$n_price;
	else
	return $n_price;
}
}

if ( ! function_exists('displayCurrencyByLang')){
function displayCurrencyByLang($cur){
	if(lang($cur) == '')
	return $cur;
	else
	return lang($cur);
}
}

if ( ! function_exists('displayDiscount')){
function displayDiscount($discount){
	return $discount.' %<br />'.lang('off');
}
}

if ( ! function_exists('cartTotalItems')){
function cartTotalItems(){
	$CI =& get_instance();
	$total = 0;
	$cart_items = $CI->cart->contents();
	foreach($cart_items as $item) {
		$total = $total + $item['qty'];
	}
	return $total;
}
}
