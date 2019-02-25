<?php 




$_POST['product_name'] =  'Mick';
$_POST['product_discription'] = '5656';


$data = [
			['index' => 'product_name', 'regrex' => '/[a-zA-Z]$/'],
			['index' => 'product_discription', 'regrex' => '/[0-9]$/'],
		];
		
// you key must be store in db


function IsDataValid(array $data):array {
	
		// All valid 
		$allvalid = true;
		
		// Set the index 
		$i = 0;
		
		// Loop each data 
		foreach($data as $items) {
			
				
				// If data post 
				if(isset ($_POST[$items['index']]) ) {
					
						// Validate with regres 
						if(!preg_match($items['regrex'], $_POST[$items['index']])) {
							
							$allvalid = $_POST[$items['index']];
							// Break data 
							break;
								
							}
					}	
			// Increase 
			$i++;
			}
			
		$data = [];
		
		// Check if variable is not false 
		if($allvalid !== true) {
			
			// Return index 
			$data = ['error' => 'Please enter valid '.ucwords(strtolower(preg_replace('/[^a-zA-Z0-9]/' , ' ', $items['index']))).' '.'Invalid '.$allvalid.''];
		}
		
		// Return array 
		return $data;
		
	}
	
	
//print_r(IsDataValid($data ));
//print_R(IsDataValid($data));

function is_power_of_tow($n) {
	
		if(($n & ($n - 1)) == 0) {
			
				return "$n is power of 2";
			} else {
				
					return "$n is not power of tow";
				}
			
	}
	
	
function is_power_of_three($n) {
	
		$x = $n;
		
		while($x % 3 == 0) {
			
				// Return 
				$x /= 3;
			}
	}

//var_dump(16%4 === 0);

//var_dump(is_power_of_three('9'));
// Find the missing number in array 
function MissingNumber1(array $array):int {
	
		// Construct a new array 
		$new_array = range($array[0], max($array));
		
		// Return missing number 
		return array_diff($new_array, $array);
	}
	
// Fund the Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal to zero.

//Input : (-1,0,1,2,-1,-4)


function IfArraySum( array $array, int $sum) {
	
		// coun the array 
		$count = count($array) - 1;
		
		// sort 
		sort($array);
		
		// Result 
		$result = [];
		
		// Loop each data 
		for($x = 0; $x < $count; ++$x) {
				
				// Check if data is equal to secound argument 
				if($array[$x] + $array[$x + 1] + $array[$x + 2] == $sum) {
					
						// Return true 
						return true;
					} 
			}
	}


// Missing number in array
function MissingNumber(array $array) :int {
	
		// Sort the array 
		sort($array);
		
		// Get the range of array 
		$range = range(min($array), max($array));
		
		// Intersect the array 
		$missing = array_diff($range, $range);
		
		// Return missing number 
		return $missing;
	}
	
// Three sum of zero 
function tree_sum_zero(array $array) : array {
	
	// Coun the array 
	$count = count($array) - 2;
	
	// Result 
	$result = [];
	
	// Sort the array 
	sort($array);
	
	// Loop each 
	for($x = 0; $x < $count; ++$x) {
		
			// Check variable is true 
			if($array[$x] + $array[$x + 1] + $array[$x + 2] === 0) {
				
					// Return true 
					return true;
				}
		}
	
	}
	
	
function Reverse(int $n):int {
	
		// Reverse string 
		$r = strrev($n);
		
		return (int) $r;
	
	}
	
	
function is_arithmetic(array $arr):bool {
	
	// Get the first different 
	$diff = $arr[1] - $arr[0];
	
	// All good 
	$allgood = true;
	
	$c = count($arr) - 1;
	// Loop each index 
	for($i = 0; $i < $c; ++$i) {
		
			if(($arr[$i + 1] - $arr[$i]) !== $diff) {
				
					$allgood = false;
					
					break;
				}
		}
		
	if($allgood) {
		
			return true;
		}
		
	return false;
	
	}

	
function is_geometric( array $arr ) {
	
	// Get the different 
	$div = $arr[1]/ $arr[0];
	
	// All good 
	$allgood = true;
	
	// Loop each 
	for($i = 0; $i < count($arr) - 1; ++$i) {
		
			// Devide each of theme 
			if($arr[$i+1]/ $arr[$i] !== $div) {
				
					// All good return false 
					$allgood = false;
					
					// Break
					break;
				}
		}
		
	// Return false 
	return $allgood;
	
	}

//$my_arr1 = array(2, 6, 18, 54);
//$my_arr2 = array(10, 5, 2.5, 1.20);

//print_r(is_geometric($my_arr1)."\n");
//print_r(is_geometric($my_arr2)."\n");

function reverse_sum($n, $n1) {
	
	// Reverse both string 
	$n = strrev($n);
	
	$n1 = strrev($n1);
	
	// Sum both 
	$sum = $n + $n1;
	
	// Reverse the number 
	return strrev($sum);
		
	}


function is_ugly($num) {
	
	
		$z = $num;
		
		// Check if num is ugaly
		if($num == 0) {
			
				return "$num is not ugly number";
			}
			
			
		$x = array(2, 3, 5);
		
		$isUgly = false;
		// Loop each number 
		foreach($x as $number) {
			
				if($num % $number === 0) {
					
					$isUgly = true;
						
					}
			
			}
			
			
			
		if($isUgly) {
			
				// Return something 
				return "$z is an ugly number ";
			} else {
				
				return "$z is not ugly number ";
				}
	}



function is_anagram($a, $b) {
	
		// Count chr code 
		if(count_chars($a, 1) == count_chars($b, 1)) {
			
				// Return the string 
				return "This tow string is count char. ";
			}  else {
				
					return "This two string er not anagram";
				}
	}


// Push zero 
function move_zero($arr) {
	
	
	// Count  =
	$count = 0;
	
	// Select 
	$n = count($arr);
	
	// Loop each array 
	for($i = 0; $i < $n; $i++) {
		
			// If value is zero 
			if($arr[$i] !== 0) {
				
					$arr[$count++] = $arr[$i];
				}
			
		}
		
	while($count < $n) {
		
			$arr[$count++] = 0;
		}

return $arr;
}


function odd_occurrence( $arr ) {
	
		// Cout the array value 
		$count_values = array_count_values($arr);
		
		// Array ( [4] => 5 [5] => 3 [2] => 3 [3] => 2 )
		
		// Odd numbers 
		$oddNumbers =  [1, 3, 5, 7, 9];
		
		// If value can be devieded by these numbers 
		
		$oddNumbers = [];
		
		foreach($count_values as $key => $value ) {
			
				// Now starting deviding value 
				if(($value) === 1) {
					
					$oddNumbers[$key] = $value ;
					
				} elseif (($value % 3) === 0 ) {
					
					$oddNumbers[$key] = $value ;
					
				} elseif (( $value % 5) === 0 ) {
					
					$oddNumbers[$key] = $value ;
					
				} elseif (($value % 7) === 0 ) {
				
					$oddNumbers[$key] = $value ;
					
				} elseif (($value % 9 ) === 0) {
					
					$oddNumbers[$key] = $value ;
				}
			}
		
		return $oddNumbers;
		
	}



$num1 = array(4, 5, 4, 4, 5, 5, 2, 2, 3, 3, 2, 4, 4, 100, 500, 500);
print_r(odd_occurrence($num1));
