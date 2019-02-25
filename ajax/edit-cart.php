<?php
// Controller 
require '../controller/controller.php';

// Get the new object 
$obj = new MarketPlace();

if($obj->EditCart('sku', 'id', 'qty') === true) {
	
	echo $obj->DisplySuccessMsg1('Shopping cart updated sucessfully.');
}


