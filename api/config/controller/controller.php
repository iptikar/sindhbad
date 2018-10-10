<?php
// require connection 
require('../../../controller/connection.php');

Class WebServiceApiController {
	
		public static function GetProductByCategoryList1($category_id){
		
			// Get the connection 
			if(isset($_POST[$category_id]) && $_POST['secrate-key'] === self::ServerSecrateKey()) {
				
					
					
					// Get the category id 
					$id = $_POST[$category_id];
					
					
					
					// Id 
					$id = htmlspecialchars($id);
					
					
					// Run the sql query 
					
					// Get the connection 
					$db = Database::getInstance();
					
					// Get the instance of connection
					
					$mysqli = $db->getConnection(); 
			
					$sql = "SELECT lower(category) as lowerCat, id, name,sku, images, regular_price, special_price, avaibility_from, (((regular_price - special_price )/regular_price) * 100) as discount, NOW() as current from product_catalogs where category_id= '$id'  and published = '0' and avaibility_from <= NOW() and  avaibility_to >= NOW()";
			
					// Get the result 
					$result = $mysqli->query($sql);
			
					// Run the query 
					if(!$result){
				
					// Return with the error 
					return $mysqli->error;
				
					}
				
					// Check the number of rows 
					if($result->num_rows === 0) {
						
						// Return false 
						return false;
					}
			
					// Or return the data 
					$rows = [];
			
					while($row = $result->fetch_assoc()) {
				
				// Get the all rows 
				$rows[] = $row;
			}
			
					// Return the rows 
					return $rows;
					
				}
		
	}
	
		public static function ServerSecrateKey() {
			
				return 'c0d7dea929202d26a5b437d7b338fdabebb09e5b';
			}
	
	}
