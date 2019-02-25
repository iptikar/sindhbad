<?php 

require '../controller/connection.php';



class Users {


	public static function createUserTable () {

		$tablename = 'users';
		
		// Get the connection 
		$db = Database::getInstance();

		// Get the instance of connection

		$mysqli = $db->getConnection();

		// Writing sql to create table 
			$sql = "CREATE TABLE IF NOT EXISTS $tablename(
				id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				firstname varchar(50) NOT NULL,
				lastname varchar(50) NOT NULL,
				 country CHAR(50) NOT NULL,
				 city CHAR (50) NOT NULL,
				 phone char(50) not null,
				 email VARCHAR(225) UNIQUE KEY,
				 password varchar(225) NOT NULL,
				 created date not null,
				 updated date not null
				)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
                    
                // Execute the code 
                if(!$mysqli->query($sql)) {
					
					return $mysqli->error;
				}


	}
}


Users::createUserTable();