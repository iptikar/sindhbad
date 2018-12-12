<?php

require '../controller/connection.php';

class ProductReview 
{
	public static function CreateProductReviewTable() {
		
			
			// Get the connection
			$db = Database::getInstance();

			// Get the instance of connection

			$mysqli = $db->getConnection();
			
		$tablename = 'review';
		
		// Writing sql to create table 
			$sql = "CREATE TABLE IF NOT EXISTS $tablename(
					id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY UNIQUE KEY,
					review_id CHAR(50) NOT NULL UNIQUE KEY,	
					buyer_email VARCHAR(225),
					create_at date not null,
					updated_at date not null,
				FOREIGN KEY (buyer_email) REFERENCES buyer(email)
				)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
                    
                // Execute the code 
                if(!$mysqli->query($sql)) {
					
					return $mysqli->error;
				}
				
				
		$tablename = 'review_details';
		
		// Writing sql to create table 
			$sql = "CREATE TABLE IF NOT EXISTS $tablename(
					id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					product_id int UNSIGNED,
					review_id CHAR(50) NOT NULL,	
					title varchar(225) NOT NULL,
					good text NOT NULL,
					bad text NOT NULL,
					details text NOT NULL,
					sku varchar(45) not null,
					seller_email VARCHAR(225),
					buyer_email VARCHAR(225),
					recomanded enum('0','1') default '0',
					stars int (10) NOT NULL,
					created_at date not null,
					updated_at date not null,
					FOREIGN KEY (review_id) REFERENCES review(review_id),
					FOREIGN KEY (product_id) REFERENCES product_catalogs(id),
					FOREIGN KEY (seller_email) REFERENCES seller(email)
				
				)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
                    
                // Execute the code 
                if(!$mysqli->query($sql)) {
					
					return $mysqli->error;
				}
                
	}
}

echo ProductReview::CreateProductReviewTable();
