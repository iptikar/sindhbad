<?php
session_start();
//session_destroy();
//exit();
//unset($_COOKIE['buyershipping7522']);
//setcookie('buyershipping7522',$_POST['shipping-details-52'] ,time() -3600, '/', $_SERVER['SERVER_NAME'] );
//session_destroy();
		
$dato = '2018-09-20 13:53:29';	
//$str = '[{"area":"Al falah","street_no":"Al Falah Street","building_no":"Al Qusaily Tower","floor_no":"M3","landmark":"Habibi Bank","location_type":"business","mobile_no":"0565973854","land_line_no":"0","latitude":"0","longititude":"0","shipping_note":"asdf","document_link":null,"country":"AE","city":"abhu dhbai","firstname":"bharat","lastname":"shah"}]';

//print_R(json_decode($str, true));
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

