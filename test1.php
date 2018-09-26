<?php
session_start();
//session_destroy();
//exit();
//unset($_COOKIE['buyershipping7522']);
//setcookie('buyershipping7522',$_POST['shipping-details-52'] ,time() -3600, '/', $_SERVER['SERVER_NAME'] );
//session_destroy();
		
$dato = '2018-09-20 13:53:29';	

echo "<pre>";
print_R($_COOKIE);
echo "</pre>";

echo "<pre>";
print_R($_SESSION);
echo "</pre>";


	
	
$var = 'name';

${$var} = 'Hello';

echo $name;	
//print_r(get_func_argNames('test'));

