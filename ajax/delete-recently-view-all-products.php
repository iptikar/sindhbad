<?php
session_start();

// Require controller 
require('../controller/controller.php');

// Get the object
$obj = new MarketPlace();

$obj-> DeleteRecentlyViewAllProducts();
