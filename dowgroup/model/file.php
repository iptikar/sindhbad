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
<<<<<<< HEAD
				cagtegory_id int(6), 
				name text NOT NULL,
				about text null,
				 created date not null,
				 updated date not null,
				 FOREIGN KEY (cagtegory_id) REFERENCES file_categories(id)
=======
				name varchar(50) NOT NULL,
				 created date not null,
				 updated date not null
>>>>>>> 5d8c4809778abca623285086c9c8e91046f04d18
				)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
                    
                // Execute the code 
                if(!$mysqli->query($sql)) {
					
					return $mysqli->error;
				}


	}
<<<<<<< HEAD

	public static function AlterTables() {

		// Get the connection 
		$db = Database::getInstance();

		// Get the instance of connection

		$mysqli = $db->getConnection();

		$tablename = 'files';

		$sql = "ALTER TABLE $tablename ADD title TEXT NULL after name";

		// rUN 
		$result = $mysqli->query($sql);

		// If result is faild 
		if(!$result) {

			return $mysqli->error;
		}

	}
}


echo File::createFileTable ();

echo File::AlterTables ();
=======
}


File::createFileTable ();
>>>>>>> 5d8c4809778abca623285086c9c8e91046f04d18
