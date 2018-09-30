<?php 
// required connection 
require 'connection.php';

class AdminLoginController {
	
	// Defining properties 
	protected $mysqli; 
	public    $username; 
	protected $password;
	
	// Protected 
	public static $loginSuccess;
	
	public static $usernames;
	
	
		public function __construct($username, $password) {
			
				//$this->mysqli     =   $mysqli;
				$this->username   =   $username;
				$this->password   =   $password;
				
				// Set the value to the methods 
				return self::LoginAsAdmin( $username, $password);
				
				
			}
		
		public static function LoginAsAdmin($username, $password) {
			
				// If username and password post 
				if(isset ($_POST[$username]) && isset ($_POST[$password])) {
					
						// Get the username and password 
						$username = $_POST[$username];
						
						// Password 
						$password = $_POST[$password];
						
						self::$loginSuccess = true;
						$mysqli = Database::getInstance();
						print_R($mysqli);
						//self::$loginSuccess = true;
						
				}
		}
		
	
	
	}
