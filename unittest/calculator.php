<?php

// Posting some data here 
$_POST['username'] = '';

$_POST['password'] = '';


class Calculator
{
 
    public function add($a, $b)
    {
        return $a + $b;
    }
 
}


class Login {
	
	
		public function LoginIn(string $username , string $password, string $u, string $p) {
			
				if(!filter_var($username, FILTER_VALIDATE_EMAIL)) {
					
					return false;
				}
				
				// Password must be eight length more 
				if(strlen($password) < 8 ) {
					
					// return false 
					return 'Password must be 8 length longer';
				}
				
				// Check username and password 
				if(!isset($_POST[$u]) && !isset($_POST[$p])) {
					
					return false;
				}
				
				return true;
			}
	
	}
