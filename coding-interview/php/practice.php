<?php
function Missing() {

	$number = range(1, 100);

	unset($number[55]);
	unset($number[0]);

	return array_diff(range(1 , 100) , $number);
	
}