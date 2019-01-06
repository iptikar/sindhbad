<?php

 
// With pagination 

function array_column_multi(array $input, 
							array $column_keys, 
							int $perpage, 
							int $startfrom,
							array $sortby
							) {
    $result = array();
    
    $column_keys = array_flip($column_keys);
    
    foreach($input as $key => $el) {
        
        $result[$key] = array_intersect_key($el, $column_keys);
    }
    
    // $getFrom range 
    $result = array_splice($result, $perpage, $startfrom);
    
    if(!is_array($sortby)) {
		
			return false;
		}
		
	
	// Index to sort 
	$indextosort = $sortby['field'];
	
	
	    
    if($sortby !== '') {
		
		usort($result, function ($a, $b) use ($sortby, $indextosort){
			
			if(array_key_exists($indextosort, $a)) {
				
				// Switch 
		switch($sortby['order']) {
		
			case 'ASC':
			return $a[$indextosort] - $b[$indextosort];
			break;
			
			case 'DESC':
			return $b[$indextosort] - $a[$indextosort];
			break;
			
			default:
			break;
		}
				
				
			}
			
		});
	}
   
    return $result;
}


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

$sortby = ['field' => 'id', 'order' =>  'DESC'];


echo "<pre>";
print_R(array_column_multi($records, $required_column, 0 , 2, $sortby));
echo "</pre>";


echo "<pre>";
print_R($records);
echo "</pre>";


