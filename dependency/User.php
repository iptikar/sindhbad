<?php

function my_autoloader($class) {
    include  $class . '.php';
}


my_autoloader('SessionStorage');




class User
{
  protected $storage;

  public function GetUsersAccount(SessionStorage $users) {
	  
		return $users->GetUsers();
	}

 
}


$var = new User;
$obj = $var->GetUsersAccount(new SessionStorage());
echo $obj;
