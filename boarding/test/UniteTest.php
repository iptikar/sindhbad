<?php 

class UniteTest 
{
	public static function AssertBoolens($expectedValue, $returnedValue) {
		
		if($expectedValue !== $returnedValue) {
			
			return $returnedValue;
		}
		
		return 'OK (1 test, 1 assertion)'.PHP_EOL;
	}
	
	public static function AsserEquals($expectedValue, $returnedValue) {
		
		if($expectedValue !== $returnedValue) {
			
			return $returnedValue.PHP_EOL;
		}
		
		return true;
		
	}
}


