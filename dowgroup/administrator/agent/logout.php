<?php
session_start();


if(!isset($_SESSION['3vmigUCQdJGRrvG-username-agent'])) {

	header('Location:http://'.$_SERVER["HTTP_HOST"].'/dowgroup');
}

// Require controller 
require('../controller/controller.php');

// Get the object 
$obj = new DowGroup();

// Run the admin logout 
$obj->LogOutAgent();
