<?php
session_start();
// Controller required 
require '../controller/controller.php';

// Get the object 
$obj = new MarketPlace();

$obj->RemoveRecentlyViewProduct('sku');
