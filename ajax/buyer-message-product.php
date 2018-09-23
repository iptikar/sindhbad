<?php
session_start();

// Using controller 
require('../controller/controller.php');

// Get the object 
$obj = new MarketPlace();


// start the message from here 
echo $obj->ProductMessageBySku();


