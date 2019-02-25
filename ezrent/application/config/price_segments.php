<?php
$config['price_segments'] = array();
require_once( BASEPATH .'database/DB'. EXT );
$db =& DB();
$db->join('product_price_segments','products.id_products = product_price_segments.id_products');
$db->where('products.deleted',0);
$db->order_by('products.id_products DESC');
$query = $db->get( 'products' );
$products = $query->result_array();
if(!empty($products)) {
	foreach($products as $prod) {
		$db->where('deleted',0);
		$db->where('id_stock',0);
		$db->where('id_products',$prod['id_products']);
		$db->order_by('min_qty');
		$query = $db->get( 'product_price_segments' );
		$segments = $query->result_array();
		
		$config['price_segments'][$prod['id_products']]['prices'] = $segments;
		
		$db->where('deleted',0);
		$db->where('id_products',$prod['id_products']);
		$query = $db->get( 'products_stock' );
		$stock = $query->result_array();
		if(!empty($stock)) {
			foreach($stock as $key => $stk) {
				$db->where('deleted',0);
				$db->where('id_stock',$stk['id_products_stock']);
				$db->where('id_products',$prod['id_products']);
				$db->order_by('min_qty');
				$query = $db->get( 'product_price_segments' );
				$stock_segments = $query->result_array();
				$config['price_segments'][$prod['id_products']]['stock'][$stk['id_products_stock']] = $stock_segments;
			}
		}
	}
}
/*print '<pre>';
print_r($config);exit;*/