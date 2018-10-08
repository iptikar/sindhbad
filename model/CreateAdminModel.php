<?php

// Require connection 
require '../controller/connection.php';

class CreateAdminModel {
	
	
			
		public static function createAminModel() {
			
				$sql = "CREATE TABLE IF NOT EXISTS admin_user (
					  user_id int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'User ID',
					  firstname varchar(32) DEFAULT NULL COMMENT 'User First Name',
					  lastname varchar(32) DEFAULT NULL COMMENT 'User Last Name',
					  email varchar(128) DEFAULT NULL COMMENT 'User Email',
					  username varchar(40) DEFAULT NULL COMMENT 'User Login',
					  password varchar(255) NOT NULL COMMENT 'User Password',
					  created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'User Created Time',
					  modified timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'User Modified Time',
					  logdate timestamp NULL DEFAULT NULL COMMENT 'User Last Login Time',
					  lognum smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'User Login Number',
					  reload_acl_flag smallint(6) NOT NULL DEFAULT '0' COMMENT 'Reload ACL',
					  is_active smallint(6) NOT NULL DEFAULT '0' COMMENT 'User Is Active',
					  extra text COMMENT 'User Extra Data',
					  rp_token text COMMENT 'Reset Password Link Token',
					  rp_token_created_at timestamp NULL DEFAULT NULL COMMENT 'Reset Password Link Token Creation Date',
					  interface_locale varchar(16) NOT NULL DEFAULT 'en_US' COMMENT 'Backend interface locale',
					  failures_num smallint(6) DEFAULT '0' COMMENT 'Failure Number',
					  first_failure timestamp NULL DEFAULT NULL COMMENT 'First Failure',
					  lock_expires timestamp NULL DEFAULT NULL COMMENT 'Expiration Lock Dates',
					  refresh_token text COMMENT 'Email connector refresh token',
					  PRIMARY KEY (user_id),
					  UNIQUE KEY ADMIN_USER_USERNAME (username)
					) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Admin User Table' AUTO_INCREMENT=2 ;";
					
					// Get the connection 
					$db = Database::getInstance();

					// Get the instance of connection

					$mysqli = $db->getConnection();
					
					// Run the query 
					$query = $mysqli->query($sql);
					
					// If fail 
					if(!$query) {
						
							return $mysqli->error;
						}
				
				return true;
			}
	
		public static function AddAdminUsers(){
			
			// Hash password 
			$password = password_hash('123@husABIDjust', PASSWORD_DEFAULT);
			
			$sql = "INSERT INTO admin_user (user_id, firstname, lastname, email, username, password, created, modified, logdate, lognum, reload_acl_flag, is_active, extra, rp_token, rp_token_created_at, interface_locale, failures_num, first_failure, lock_expires, refresh_token) VALUES
(1, 'sindhbad', 'sindhbad', 'admin@sindhbad.com', 'sindhbad', '$password', '2018-09-16 10:19:04', '2018-09-30 09:44:27', '2018-09-30 09:44:27', 5, 0, 1, NULL, NULL, NULL, 'en_US', 0, NULL, NULL, NULL);
";

			// Get the connection 
			$db = Database::getInstance();

			// Get the instance of connection

			$mysqli = $db->getConnection();

			// Run the query 
			$query = $mysqli->query($sql);

			// If fail 
			if(!$query) {

				return $mysqli->error;
			}

			

			}
	}
	
	
CreateAdminModel::createAminModel();

// Again you make me sad
//CreateAdminModel::AddAdminUsers();
