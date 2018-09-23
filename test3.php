<?php

require 'RedBeanPHP5_1_0/rb.php';
//turns debugging ON (recommended way)
R::setup('mysql:host=localhost;dbname=test', 'root', 'a');
R::fancyDebug( TRUE );

$date = date("Y-m-d H:i:s");

$user = R::dispense('tracker');

// Beans 
$user->buyeremail = 'akashche72@gmail.com';
$user->seen = $date;
$user->product_sku = 'SDFDF565656';
$user->category_id = 314;

// Check the store vairable 
R::store($user);




//$u = R::load('tracker', 1);
//$u->buyeremail = 'akashche72@gmail.com';
//R::store($u);



//$u = R::load('tracker', 1);



//$user = R::findAll('tracker');

echo "<pre>";
print_r($user);

?>
