<?php

$cards   = [	
				[
					"from" => "Barcelona", 
					"to" =>  "New York", 
					"instruction" => "", 
					'time' => '2018-02-02 20:05',
					'transport' => 'Flight' , 
					'transportno' => 'B33',
					'seatno' => 'Y15'
				], 
					
				[
					"from"=> "Barcelona", 
					"to" => "Gerona", 
					"instruction" => "", 
					'time' => '2018-02-02 20:05', 
					'transport' => 'Bus' , 
					'transportno' => 'M31, M32, M33','seatno' => 'Any'
				], // 1
				
				[
					"from" => "Madrid",    
					"to" => "Barcelona", 
					"instruction" => "", 
					'time' => '2018-02-02 20:05', 
					'transport' => 'Bus' , 
					'transportno' => 'M31, M32, M33',
					'seatno' => 'Any'
				],
				
				["from" => "New York",    
				"to" => "Stockholm", 
				"instruction" => "", 
				'time' => '2018-02-02 20:05', 'transport' => 'Flight' , 
				'transportno' => 'M31, M32, M33','seatno' => 'Any'
				], // 0
				
				[
					"from" => "Gerona",    
					"to" => "Barcelona", 
					"instruction" => "", 
					'time' => '2018-02-02 20:05', 
					'transport' => 'Bus' , 
					'transportno' => 'M31, M32, M33',
					'seatno' => 'Any'
				], // 2
		];
		

echo json_encode($cards);


exit();
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
       'last_name' => 'Doe',
    ),
    
    array(
        'id' => 1,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

$required_column = ['id', 'first_name'];
 
// With pagination 

function array_column_multi(array $input, 
							array $column_keys, 
							int $perpage, 
							int $startfrom,
							string $sortby
							) {
    $result = array();
    $column_keys = array_flip($column_keys);
    foreach($input as $key => $el) {
        
        $result[$key] = array_intersect_key($el, $column_keys);
    }
    
    // $getFrom range 
    $result = array_splice($result, $perpage, $startfrom);
    
    if($sortby !== '') {
		
		usort($result, function ($a, $b) use ($sortby){
			
			if(array_key_exists($sortby, $a)) {
				
				return $a[$sortby] - $b[$sortby];
			}
			
		});
	}
   
    return $result;
}




echo "<pre>";
print_R(array_column_multi($records, $required_column, 0 , 2, 'id'));
echo "</pre>";


echo "<pre>";
print_R($records);
echo "</pre>";


