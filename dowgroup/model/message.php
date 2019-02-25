<?php 

require '../controller/connection.php';



class Message {


	public static function createMessageTable () {

		$tablename = 'message';
		
		// Get the connection 
		$db = Database::getInstance();

		// Get the instance of connection

		$mysqli = $db->getConnection();

		// Writing sql to create table 
			$sql = "CREATE TABLE IF NOT EXISTS $tablename(
				id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
				subject text NOT NULL,
				message text NOT NULL,
				email VARCHAR(225) NOT NULL,
				 created date not null,
				 updated date not null,
				 FOREIGN KEY (email) REFERENCES users(email)
				)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
                    
                // Execute the code 
                if(!$mysqli->query($sql)) {
					
					return $mysqli->error;
				}


	}
}


echo Message::createMessageTable();