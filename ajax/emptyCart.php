<?php

// Controller required 
require ('../controller/controller.php');

// Create new object 
$obj = new MarketPlace();

// Get the empty method 
echo $obj->emptyCart();
