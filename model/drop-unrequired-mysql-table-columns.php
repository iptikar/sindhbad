 <?php
 // Go one steps back and get the controller
 require_once('../controller/connection.php');
 
 // 
 
 class DroupColums 
 {
	 public static function DropingUnRequiredColumns() {
		 
			
			 // Get the connection
			$db = Database::getInstance();
                    
			// Get the instance of connection
                    
			$mysqli = $db->getConnection();
			
			// Sql seller_type
			//$sql = "ALTER TABLE DROP "
			// I was about to write the sql but there is just one 
			// Column is not required on product_catelog table 
			// Therefore i it's ok leav for a while
		 }
	 
	 }
