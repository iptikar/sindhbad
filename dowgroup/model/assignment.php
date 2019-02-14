<?php 

require '../controller/connection.php';



class Assignment {


	public static function createAssignmentTable () {

		$tablename = 'assignments';
		
		// Get the connection 
		$db = Database::getInstance();

		// Get the instance of connection

		$mysqli = $db->getConnection();

		// Writing sql to create table 
			$sql = "CREATE TABLE IF NOT EXISTS $tablename(
				id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
				email VARCHAR(225),
				file_id int(6) UNSIGNED,
				 created date not null,
				 updated date not null,
				 FOREIGN KEY (email) REFERENCES users(email),
				 FOREIGN KEY (file_id) REFERENCES files(id)
				)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
                    
                // Execute the code 
                if(!$mysqli->query($sql)) {
					
					return $mysqli->error;
				}


	}
}


echo Assignment::createAssignmentTable ();