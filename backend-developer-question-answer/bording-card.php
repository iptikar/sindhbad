<?php
error_reporting(E_ALL);
$cards   = [

["from" => "Barcelona", "to" =>  "New York", "instruction" => "It will containe information", 'time' => '2018-02-02 20:05','transport' => 'Flight' , 'transportno' => 'B33','seatno' => 'Y15'], // 3
["from"=> "Barcelona", "to" => "Gerona", "instruction" => "It will containe information", 'time' => '2018-02-02 20:05', 'transport' => 'Bus' , 'transportno' => 'M31, M32, M33','seatno' => 'Any'], // 1
["from" =>  "Madrid",    "to" => "Barcelona", "instruction" => "It will containe information", 'time' => '2018-02-02 20:05', 'transport' => 'Bus' , 'transportno' => 'M31, M32, M33','seatno' => 'Any'],
["from" => "New York",    "to" => "Stockholm", "instruction" => "It will containe information", 'time' => '2018-02-02 20:05', 'transport' => 'Bus' , 'transportno' => 'M31, M32, M33','seatno' => 'Any'], // 0
["from" => "Gerona",    "to" => "Barcelona", "instruction" => "It will containe information", 'time' => '2018-02-02 20:05', 'transport' => 'Bus' , 'transportno' => 'M31, M32, M33','seatno' => 'Any'], // 2
];

$cl = $cards;

echo "<pre>";

print_R($cards);

foreach($cards as $card) {
    usort($cards, function ($a, $b) {
                      return ( $a["to"] === $b["from"] ) ? 0 : 1;
                  });
}


echo "<pre>";

print_R($cards);
echo "</pre>";


// Testing 

//$newarray = array_slice($cards, 1, -1);


//echo "<pre>";

//print_R($newarray);
//echo "</pre>";

// coun array column 
$countColumn = count($cards);


for($i = 0; $i < $countColumn-1 ; $i++) {
	
	
		if($cards[$i]['to'] !== $cards[$i + 1] ['from']) {
			
			// Break
			echo "Somethong went wrong";
			break;
		}
	}

	
