<?php
// Require connection 
require_once '../controller/connection.php';

class OrderStatus 
{
		public static function createCompanySellerModel() {
			
			// Get the connection
			$db = Database::getInstance();

			// Get the instance of connection

			$mysqli = $db->getConnection();

			// Table  name 
			$tablename = 'orderstatus';
			
			
			
			// Writing sql to create table 
			$sql = "CREATE TABLE IF NOT EXISTS $tablename(
				id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				status char(25) NOT NULL,
				order_id VARCHAR(150),
				created_at datetime not null,
				updated_at datetime not null,
				comments text null,
				FOREIGN KEY (order_id) REFERENCES orders(order_id)
				)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
                    
                // Execute the code 
                if(!$mysqli->query($sql)) {
					
					return $mysqli->error;
				}
                
				
			}
		
	
}


OrderStatus::createCompanySellerModel();
