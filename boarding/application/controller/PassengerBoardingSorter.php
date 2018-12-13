<?php
class PassengerBoardingSorter {
	
		public $index;
		public $index2;
		public $boardingLists;
		
		
		public function __construct(string $index, string $index2, array $boardingLists)
		{
			return self::ArangeBordingList($index, $index2, $boardingLists);
		}
		
		public static function ArangeBordingList(string $index, string $index2, array $boardingLists, string $instruction)
		
		{
			
			
			// Get access to each index 
			foreach($boardingLists as $boardingList)
			{
				
				usort($boardingLists, function ($a, $b) use ($index, $index2){
					
                      return ($a[$index2] === $b[$index] ) ? 0 : 1;
				});
			}
			
			// We are adding some string by detecting where journey start 
			// And where journey ends 
			
			// Defining index 
			$i = 0;
			
			$coutboarding = count($boardingLists);
			
		
			$boardingLists[0][$instruction] = 'Your journey starts here. ';
			$boardingLists[$coutboarding - 1 ][$instruction] = 'Your journey ends here ';
			// Return bording list 
			return $boardingLists;
			
		}

		
		public static function getTemplate($template,$data,$regrex)
		{
	$result = '';

	/* Go and loop each data and replace with it's value */
	$returndata = '';



	/* Loop each data */
	for($j = 0; $j < count($data); $j++)
	{
	/* Get the template  */
	$output = $template;
	/* where indexs matches in template  */
	foreach($data[$j] as $key => $value)
	{
		$reg = str_replace('(.*?)',$key, $regrex);

		/* Check with regular expression */
		if(preg_match($reg,$template))
		{
			/* Replace with */
			$output = preg_replace($reg,$value,$output);
			

		}			
		
	//echo $ReplacedData ;	
	//echo "<br/>";
	}

	 $result .= $output;
}


	return $result;

}


}
