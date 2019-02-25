<?php
ob_start();
// Start the session
session_start();

// Require controller 
require('../controller/controller.php');

// Get the object 
$obj = new MarketPlace();

// Run the admin logout 
$obj->LogOutByer();
