<?php
class SessionStorage
{
	protected $username = 'bharatrose';
	
	protected $password = 'ThisIsMyFuckingLife';
  
  public function GetUsers(array $data) {
	  
		
		
		return json_encode($data, true);
	  
	  }

  // ...
}
