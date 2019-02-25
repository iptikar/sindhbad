<?php 

// Require controller 
require '../controller/controller.php';

// Get nee object 
$obj = new MarketPlace();


// sku:sku, name:p_name, image:p_p_img, qty:qty
if( $obj->AddToCart('sku', 'name', 'image', 'qty', 'price', 'id') ==1) {
	
		// Get the name of the product 
		$name = $_POST['name'] ?? '';
		// <div class="message notice"><div>Buy something, Shopping cart is empty.  </div></div>
		// Product is sucessfully added to the cart 
		$string = '<br/><div class="message success">
		<div>
  <strong>Success ! </strong>Product '.$name.' is sucessfully added to the cart.
</div></div>';
	
		echo $string;
		
	} else { echo "Product was unable to add to the cart";}


