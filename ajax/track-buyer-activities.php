<?php 
session_start();
// Required controller 
require('../controller/controller.php');

// Get the object 
$obj = new MarketPlace();

// Run the method 
$obj->TrackBuyerActivities();

?>
