<?php
function isGeoValid($type, $value) {
	// Select the pattern 
	
    $pattern = ($type == 'latitude')
        ? '/^(\+|-)?(?:90(?:(?:\.0{1,8})?)|(?:[0-9]|[1-8][0-9])(?:(?:\.[0-9]{1,8})?))$/'
        : '/^(\+|-)?(?:180(?:(?:\.0{1,8})?)|(?:[0-9]|[1-9][0-9]|1[0-7][0-9])(?:(?:\.[0-9]{1,8})?))$/';
    
    // Return preg match 
    return  preg_match($pattern, $value); 
       
}
 
//echo isGeoValid('latitude', '-90.00');
//echo PHP_EOL;
//echo isGeoValid('longitude', '-180.00000000');

$string = '<p>Hell World dfsdf</p>';

libxml_use_internal_errors(true);
libxml_clear_errors();
$validate =  simplexml_load_string($string);
var_dump($validate);
