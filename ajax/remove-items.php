<?php

// Required controller  
require '../controller/controller.php';

// Get the object 

$obj = new MarketPlace();

// 
if($obj->RemoveCartItem('id') === true) {
	
	// If cart is not set 
	if(count($obj->GetCart()) !== 1) {
		
		echo $obj->DisplySuccessMsg1('Shopping cart item removed sucessfully.');
		
	
	} else {
		
		echo '<div class="message notice"><div>Buy something, Shopping cart is empty.  </div></div>';
	}
}



?>

