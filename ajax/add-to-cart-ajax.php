<?php 

// Require controller 
require '../controller/controller.php';

// Get nee object 
$obj = new MarketPlace();

if(isset($_COOKIE['lanSindhbad']) && $_COOKIE['lanSindhbad'] === 'ar')
    $translate = new Translator($_COOKIE['lanSindhbad']);
else
    $translate = new Translator('en');


$product = $translate->__('Product');
$added = $translate->__('is sucessfully added to the cart.'); 

// sku:sku, name:p_name, image:p_p_img, qty:qty
if( $obj->AddToCart('sku', 'name', 'image', 'qty', 'price', 'id') ==1) {
	
		// Get the name of the product 
		$name = $_POST['name'] ?? '';
		// <div class="message notice"><div>Buy something, Shopping cart is empty.  </div></div>
		// Product is sucessfully added to the cart 
		
	
		echo $product.' '.$name.' '.$added;
		
	} else { echo "Product was unable to add to the cart";}


