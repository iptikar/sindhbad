<?php
function IsDataValid( array $data ) : array {

		// Set all valid
		$allvalid = true;

		// Set the index
		$i = 0;

		// Loop each data
		foreach( $data as $items ) {

				// If data post
				if( isset ( $_POST['index'] )) {

						// Valid with regres
						if( !preg_match( $items['regrex'], $_POST['index'])) {

							// Check all the valid post
							$allvalid = $_POST[ $items['index'] ];

							// Break
							break;
						}
				}

				// increase i
				$i++;
		}

		// Data
		$data = [];

		// check if variable is not true
		if($allvalid !== true ) {

			// Return all indexx
			$data = ['error' => 'Please enter valid?'];
		}

		// Return the data
		return $data;
}


function is_power_of_three( int $n) {

	// Defining variable
	$x = $n;

	// While
	while ($x % 3 == 0) {

		// Return
		return $x /= 3;
	}
}

// Finding missing number
function MissingNumber1( arrray $array ): array {

	// Sort array
	sort($array);
	
	// Construct a new array
	$new_array = range( min($array), max($array));

	// Return missing number
	return array_diff( $new_array, $array);
}





