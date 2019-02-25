<?php
class A
{    
	public static $name = "Juan";
	public $lastName = "Lopez"  
	 
	public static function saySomething()
	{    
		echo self::$name . " ";      
		$f = new self();        
		echo $f->lastName;  
	}
   
}
$obj = new A;
