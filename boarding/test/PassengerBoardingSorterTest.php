<?php 

// Required controller 
require '../application/controller/PassengerBoardingSorter.php';
require 'UniteTest.php';

class PassengerBoardingSorterTest extends UniteTest {
	
	public static function BoordingIsArrangedOrNot(string $index, string $index1, array $bordinglist, $from, $to):bool
	{
		// Count bording ticket 
		
		$countColumn = count($bordinglist);
		
		// Is all good 
		$isAllGood = true;
		
		for($i = 0; $i < $countColumn-1 ; $i++) 
		{
			if($bordinglist[$i][$to] !== $bordinglist[$i + 1][$from]) 
			{
			
				// Change variable 
				$isAllGood = false;
				
				// Break 
				break;
			}
		}
	
	
	return $isAllGood;
		
	}
	
	public function AddTest() {
		
		// Set up data 
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

		// Sort the boarding list 
		$sortBoardingList = PassengerBoardingSorter::ArangeBordingList('from', 'to', $cards, 'instruction');
		
		// Return data 
		$dataToTest = PassengerBoardingSorterTest::BoordingIsArrangedOrNot('to', 'from', $sortBoardingList, 'from', 'to') ;
		
		// Result check weather data is return true of not 
		$result = self::AssertBoolens(true, $dataToTest);
		
		return $result;
		
}
	
	
	
}


echo PassengerBoardingSorterTest::AddTest();
