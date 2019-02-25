<?php

function my_autoloader($class) {
    include  $class . '.php';
}


my_autoloader('SessionStorage');




class User
{
  protected $storage;
  
  protected $name = 'Yes';

  public function GetUsersAccount(SessionStorage $users) {
	  
	  // Lets say i do have data from here 
	  $data = ['name' => 'Dick Head',
				'address' => 'hell'];
				
		return $users->GetUsers( $data);
	}

 
}


$var = new User;
$obj = $var->GetUsersAccount(new SessionStorage());
echo $obj;
