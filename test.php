<?php
//echo $_COOKIE['lanSindhbad'];

// Complete this function to return either
// "Hello, [name]!" or "Hello there!"
// based on the input

function array_packing($integer) {

	// Set integer 
	$decBin = 0;

	// Iritate each integer 
	foreach($integer as $key => $value) {

		// If the value is less then 256 and >=0
		if($value < 256 || $value >= 0) {

			// Conver to binar and 8 digit number and add to variable 
			$decBin += $value << 8 * $key;
		}
		
	}

	// Return integer 
	return $decBin;
}

//$arra = [24,       85,       0       ];

//print_R(array_packing($arra));


function first_non_repeating_letter ($str) {

	// Split the string and then counts unique value and search 

	$dump = array_search(1, array_count_values(str_split(strtolower($str))));

	// Find the first occurance 
	$firstocc = stripos($str, $dump);

	// Return empty string is nothing false or else string 
	return $dump === false ? "" : $str[$firstocc];

}






//var_dump(first_non_repeating_letter('STreSS'));

//var_dump(first_non_repeating_letter('stress'));
//$a = (float)(0.1 + 0.7);
//echo $a;


// Writing morse code 

$abc = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';



function possibilities ($signals) {

	// Morse code 
	$morsecode =[
    '.-', '-...', '-.-.', '-..', '.', '..-.', '--.', '....',
    '..', '.---', '-.-', '.-..', '--', '-.', '---', '.--.',
    '--.-', '.-.', '...', '-', '..-', '...-', '.--', '-..-',
    '-.--', '--..'
  ];

  // Alpha 
  $abc = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

  // Split abc
  $split_abc = str_split($abc);

  // Singal not more then 3 
  if(count($signals) > 3 || count($signals) < 0) {

  	return false;
  }

  // Code found 
  $codefound = false;


  foreach($morsecode as $key => $value) {

  		if($signals === $value) {

  			$codefound = true;
  			
  			break;
  		}
  }

  
  if($codefound === true ) {

  	return  [$abc[$key]];

  } else {

  	if($signals == '?') {

  		return ["E","T"];
  	} 
  	
  }

  	
  

}

echo "<pre>";

 print_R(possibilities ("?"));


//$sum = (float)3.1234566768;
//$rounded = round($sum, 2);

//echo $rounded;
//echo "<pre>";
//print_R($_SERVER);
//echo "</pre>";
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