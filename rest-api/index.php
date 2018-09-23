<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
//header("Access-Control-Max-Age: 3600");
//header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Get the json file 
$file = file_get_contents('../static-product/product-cataloges.json');

$DE = json_decode($file);

$my = json_encode($DE, JSON_PRETTY_PRINT);

echo $my;
