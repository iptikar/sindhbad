<?php 

class UniteTest 
{
	public static function AssertBoolens($expectedValue, $returnedValue) {
		
		if($expectedValue !== $returnedValue) {
			
			return $returnedValue;
		}
		
		return 'OK (1 test, 1 assertion)';
	}
	
	public static function AsserEquals($expectedValue, $returnedValue) {
		
		if($expectedValue !== $returnedValue) {
			
			return $returnedValue;
		}
		
		return true;
		
	}
}


