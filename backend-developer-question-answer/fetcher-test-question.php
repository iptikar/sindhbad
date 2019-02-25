<?php
function jobOffers($scores, $lowerLimits, $upperLimits) {
	
		// first sort the array 
		sort($scores);
		
		// Append array 
		$result = [];
		
		// Count range var 
		$countRange  = count($lowerLimits) ;
		// Loop each array 
		for( $i = 0; $i < $countRange; ++$i) {
			
				// Get the range for each 
				$range = range($lowerLimits[$i], $upperLimits[$i]);
				
				// Intersect 
				$intersect = array_intersect($range, $scores);
				
				// Sort 
				sort($intersect);
				
				// Get the intersect 
				$result[] = count($intersect);
				
				
			}
	
		// Return the result 
		return $result;
		
}

// Get the range number from lower to higher 
// And then check if those intersect 
// Then Return the value 
	
echo memory_get_usage();
$scores = [4, 9, 3, 2, 5, 6];

$lowerLimits = [4, 1];

$higherLimit = [6, 5];


echo "<pre>";
print_r(jobOffers($scores, $lowerLimits, $higherLimit));

echo memory_get_usage();


exit();

/*
 * Have no idea wich version of php they are using to compile because 
 * in my screpit as i am using php 7 1128 byetes is used when i start memory useage was 
 * 363120 and and the end of the script memory was 364248
 * */


function HATNOR (){
    
    // Open the file r mode 
    $resource = fopen('hosts_access_log_00.txt', 'r');
    
    // Host in array 
    $hostInArray = [];
    
    // If resource found 
    if($resource) {
		
			// Loop each line 
			while(($line = fgets($resource)) !== false ) {
				
					// Explode with -- 0 index containe hostname 
					$getHostname = explode(' - - ', $line)[0];
					
					// Get host in array
					$hostInArray[] = $getHostname;
				}
		}
    // Close the resource 
   fclose($resource);
   
   // Array count the value 
   $countHost = array_count_values($hostInArray);
   
   // Creating output file records_hosts_access_log_00.txt for write 
   $document = '';
   
   foreach($countHost as $key => $value) {
	   
		// Append docuemtn 
		$document .= "$key $value". PHP_EOL;
	   
	   }
	   
	   // If we can use file_get_contents then memory can be
	   // Saved 
	   
	  // Open the file 
	  $resource = fopen('records_hosts_access_log_00.txt', 'w');
	  
	  // write the file 
	  fwrite($resource, $document);
	  
	  // Close the resource 
	  fclose($resource);
	  
	return true;
    
}


function isPowerof2($nums) {
	
		// Return array value 
		$returnValue = [];
		
		// Count the valud of array 
		$cvof = count($nums);
		
		// Check that the function 
		for($i = 0; $i < $cvof; ++$i) {
			
				// Check that if true then 
				$PowerOF2 = ($nums[$i] & ($nums[$i] - 1)) == 0;
				
				// As fale will not print to the user 0
				
				// As custom way adding string 
				$data = $PowerOF2 == true ? '1' : '0';
				// False will not show 0 as true = 1
				// Append to array 
				$returnValue[] =  $data;
			}
			
			
			return $returnValue;
	}


//The time required to search an element in a linked list of length n is
// Ans Wer is 0(n)

//If each node in a binary tree has a value greater than every value in its left subtree and less than every value in its right subtree, it is known as
// Thread tree

//The vertices of every planar graph can be colored with at most x colors so that no two adjacent vertices receive the same color.
// Ans 4 Color

// The vertices of every planar graph can be colored with at most x colors so that no two adjacent vertices receive the same color.
// 4 colour

// Pseudocode for the Mystery Algorithm
// 2437

// Which of the following operations is performed more efficiently by doubly linked list than by linear linked list?
// Deleting a node whose location is given

// Which of the following sorting algorithms has the best asymptotic runtime complexity 

function oddNumbers($l, $r) {

	// Retrun data 
	$return = [];
	
	// Get the range number 
	$range = range($l, $r);
	
	// count the valu 
	$count = count($range);
	
	for($i = 0; $i < $count; ++$i) {
		
			if($range [$i] % 2 !== 0) {
				
					// Append everything 
					$return[] = $range [$i];
				}
		}
		
	// Find the odd number 
	
	return $return;
}

