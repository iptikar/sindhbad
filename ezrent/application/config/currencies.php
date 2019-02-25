<?php
$config["default_currency"] = "GBP";
require_once( BASEPATH .'database/DB'. EXT );
$db =& DB();
$db->where('deleted',0);
$db->order_by('sort_order');
$query = $db->get( 'currency_rates' );
$rates = $query->result();
foreach($rates as $rate) {
	$config[$config["default_currency"].'_to_'.$rate->currency_to] = $rate->rate;
}
/*print '<pre>';
print_r($config);exit*/;