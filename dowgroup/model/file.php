<?php 

require '../controller/connection.php';



class File {


	public static function createFileTable () {

		$tablename = 'files';
		
		// Get the connection 
		$db = Database::getInstance();

		// Get the instance of connection

		$mysqli = $db->getConnection();

		// Writing sql to create table 
			$sql = "CREATE TABLE IF NOT EXISTS $tablename(
				id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
				name varchar(50) NOT NULL,
				 created date not null,
				 updated date not null
				)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
                    
                // Execute the code 
                if(!$mysqli->query($sql)) {
					
					return $mysqli->error;
				}


	}
}


File::createFileTable ();