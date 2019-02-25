<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$cards   = [

["from" => "Barcelona", "to" =>  "New York", "instruction" => "a"], // 3
["from"=> "Barcelona", "to" => "Gerona", "instruction" => "d" ], // 1
["from" =>  "Madrid",    "to" => "Barcelona", "instruction" => "c"], // 0
["from" => "Gerona",    "to" => "Barcelona", "instruction" => "m"] // 2
];

echo "<pre>";

print_R($cards);

foreach($cards as $card) {
    usort($cards, function ($a, $b) {
                      return ( $a["to"] === $b["from"] ) ? 0 : 1;
                  });
}


//echo "<pre>";

//print_R($cards);
//echo "</pre>";


// Testing 

$newarray = array_slice($cards, 1, -1);


//echo "<pre>";

print_R($newarray);
//echo "</pre>";

foreach($newarray as $key => $value) {
	
		
	}
