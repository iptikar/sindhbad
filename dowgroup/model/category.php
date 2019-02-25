<?php 

require '../controller/connection.php';



class Category {


	public static function addCategory () {

		$tablename = 'file_categories';
		
		// Get the connection 
		$db = Database::getInstance();

		// Get the instance of connection

		$mysqli = $db->getConnection();

		// Writing sql to create table 
			$sql = "CREATE TABLE IF NOT EXISTS $tablename(
				id int(6) AUTO_INCREMENT PRIMARY KEY, 
				name varchar(50) NOT NULL,
				 created date not null,
				 updated date not null
				)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
                    
                // Execute the code 
                if(!$mysqli->query($sql)) {
					
					return $mysqli->error;
				}

				return 'Table sucessfully created';

	}

	public static function AlterTables() {


		// Get the connection 
		$db = Database::getInstance();

		// Get the instance of connection

		$mysqli = $db->getConnection();

		// Tablename 
		$tablename = 'file_categories';

		// Sql 
		$sql = "ALTER TABLE $tablename ADD parent int(15) null AFTER name";

		// Execute 
		$result = $mysqli->query($sql);

		// If failed 
		if(!$result) {

			return $mysqli->error;
		}
	}
}


Category::addCategory();

//Category::AlterTables();