<?php
$config['discounts'] = array();
require_once( BASEPATH .'database/DB'. EXT );
$db =& DB();
$q = 'SELECT user.id_user, discount_groups.discount FROM user';
$q .= ' JOIN discount_groups ON discount_groups.id_discount_groups = user.id_discount_groups';
$q .= ' WHERE user.deleted = 0 AND discount_groups.deleted = 0 AND (discount_groups.expiry_date >= "'.date("Y-m-d").'" OR discount_groups.expiry_date = "0000-00-00")';
$q .= ' ORDER BY user.id_user';
$query = $db->query($q);
$discounts = $query->result_array();
foreach($discounts as $dt) {
	$config['discounts'][$dt['id_user']] = $dt['discount'];
}