<?php 
class Auth0 {
    static private $lock = 'v10';
}



$obj = new Auth0;

$clo = function($obj) {
		
		return $obj::$lock;
	};

$getPrivateProperty = $clo->call($obj, 'Auth0');

echo $getPrivateProperty;
