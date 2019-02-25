<?php
//echo $_COOKIE['lanSindhbad'];


echo "<pre>";
print_R($_SERVER);
echo "</pre>";
/*
// Open the file 
$en = fopen('languages/categories/categories.txt', 'r');
$ar = fopen('languages/categories/arabic-category.txt', 'r');
$enar = fopen('languages/categories/english-to-arabic.txt', 'a+');

$enlen = 0;
$arlen = 0;

$data = '';

if($en) {
	while(($enline = fgets($en)) !== false && ($arline = fgets($ar)) !== false) {

		$arline = preg_replace( "/\r|\n/", "", $arline);
		$enline = preg_replace( "/\r|\n/", "", $enline);
		//echo "$enline=$arline<br/>";
		$data .= "$enline=$arline".PHP_EOL;

		
	}
}


fwrite($enar, $data);




fclose($en);
fclose($ar);
*/

//echo $enlen;
//echo "<br/>";
//echo $arlen



//echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";