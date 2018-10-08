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
	
	public static $key1 = '3vmigUCQdJGRrvG';
	
	
	
		
		public static function LoginAsAdmin($username, $password) {
			
				// If username and password post 
				if(isset ($_POST[$username]) && isset ($_POST[$password])) {
					
						// Get the username and password 
						$username = $_POST[$username];
						
						// Password 
						$password = $_POST[$password];
						
						
						$db = Database::getInstance();
					
						// Get the instance of connection
					
						$mysqli = $db->getConnection(); 
						
						//self::$loginSuccess = true;				
						
						
						// Escape password 

						$sql = "SELECT password FROM admin_user WHERE username = ?";
						$bindDataleft = "s"; 
						$bindDataright = $username;
						
						
						// Get the password 
						
						$getPassword =  SelectStoreProcedure::basicSelectpreparedStatement($mysqli, $sql, $bindDataleft, $bindDataright);
						
						
						// Check password return 
						if(isset($getPassword['result'][0]['password'])) {
							
								// Get the password 
								$Hashedpassword = $getPassword['result'][0]['password'];
								
								// Verified 
								if (password_verify($password, $Hashedpassword)) {
									
									// Start the session 
									session_regenerate_id();
									
									$_SESSION[self::$key1.'-admin-username'] = $username;
									$_SESSION[self::$key1.'-admin-password'] = $password;
									$_SESSION[self::$key1.'-admin-lgin-at'] = date('Y-m-d H:i:s');
									
									// Get clean the buffer 
									ob_get_clean();
									
									// Resend the header to the client 
									header('Location:http://localhost/admin-14e1813e3d0cf9da1a9dafc6afadff37');
									
								}
								
							} else {
								
									return false;
								}
						
					
				}
		}
		
	
		// Check if admin is logged in 
		public static function IsUserIsLoggedIn() {
			
			if(
				isset ( $_SESSION[self::$key1.'-admin-username']) &&
				isset ($_SESSION[self::$key1.'-admin-password']) &&
				isset ($_SESSION[self::$key1.'-admin-lgin-at'])) {
				
					// Return true 
					return true ;
				}
				
				return false;
		}
	
		// Logout 
		public static function LogOut() {
			
				// If method is true 
				if(self::IsUserIsLoggedIn() === true ) {
					
						// Unset session vairables 
						unset ( $_SESSION[self::$key1.'-admin-username']);
						unset ($_SESSION[self::$key1.'-admin-password']);
						unset ($_SESSION[self::$key1.'-admin-lgin-at']);
						
						// Send new header with location 
						header('Location:http://localhost/admin-14e1813e3d0cf9da1a9dafc6afadff37/login');
					}
			}
	}
