<?php
	
	// Check if there is any view 
	require 'application/controller/PassengerBoardingSorter.php';
	
	require 'application/controller/controller.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
  <h2>Your Trip Details</h2>
  <ul class="list-group">
	 
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
		
		$obj = new PassengerBoardingSorterOOP($cards);
		
		$obj->startMessage = 'Your journey start from here ';
		
		// End message 
		$obj->endMessage = 'Your journey ends here';
		
		$obj->ArrageBoardingTicket('from', 'to', 'instruction');
		
		// Form a template so you can get template list 
		$template = '<li class="list-group-item">{{&instruction}}Take {{&transport}} From {{&from}} To {{&to}},
		 {{&transport}} No  {{&transportno}}, {{&transport}} Departure Date {{&time}}. Seat Number {{&seatno}}.</li>';
		$regrex = '/{{&(.*?)}}/';
		
		$obj->GetEmbededHTMlTemplate($template, $regrex);
		
		echo $obj->getTemplate;
		
	
		
	  
	  ?>
	  
	 <!--- Getting each data to view -->
	 
	 
    
    
  </ul>
</div>

</body>
</html>
