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
	
		public static function GetProductByProductIdtest($product_id){
		
			// Get the connection 
			if(isset($_POST[$product_id]) && $_POST['secrate-key'] === self::ServerSecrateKey()) {
				
					
					
					// Get the category id 
					$id = $_POST[$product_id];
					
					
					
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
	
		public static function GetProductByProductId($id, $sku){
		
		$resultWillReturn['result'] = '';
		
			// Get the connection 
			if(isset($_POST[$id]) 
			&& isset($_POST[$sku])
			&& isset($_POST['secrate-key'])
			&& $_POST['secrate-key'] === self::ServerSecrateKey()) {
				
				//$result['result'] = 'Server need id, and secreate-key paramaters to get product details.';
				
				
			
			
			// Get the variable 
			$id = htmlspecialchars($_POST[$id]);
			$sku = htmlspecialchars($_POST[$sku]);
			
			
			
			// Get the connection 
			$db = Database::getInstance();
			
			// Get the instance of connection
			
			$mysqli = $db->getConnection();
			
			// Sql prepare statement 
			$stmt = $mysqli->prepare("SELECT id,name,seller_email,
												category,
												category_id,
												sub_category,
												discription,
												short_discription ,
												avaibility_from,
												avaibility_to,
												regular_price,
												special_price,
												product_condition,
												items_available,
												avaibility,
												supplier_sku,
												customer_email,
												published,
												phonenumber,
												seller_type,
												product_unite,
												unite_amount,
												size,
												delivery_servic,
												delivery_period,
												seller_id,
												shipping_cost,
												seller_note,
												warranty ,
												
												product_article_html,
												pryority,
												meta_title,
												meta_keywords,
												meta_description,
												minimun_order,
												product_unite,
												(((regular_price - special_price) /regular_price) * 100) as discount,
												images FROM product_catalogs
												
												WHERE id=? and sku=?");
												
			// Bind the paramaters 
			$stmt->bind_param("ss", $id, $sku);
			
			// Execute the command 
			
			if(!$stmt->execute()){
				
					// Return the message 
					$resultWillReturn['result'] = $stmt->error;
					
					return $resultWillReturn;
				}
			
			/* store result */
			$result = $stmt->get_result();
			
			 
		
			// Check if something is found 
			if($result->num_rows !== 1){
				
					// Return the message 
					$result['result'] = false;
					
					return $result;
				}
				
			// Get the result 
			$get_result = $result->fetch_assoc();
			
			
			$result->free_result();
			// Close stmt 
			
			$stmt->close();
			
			// Return the result 
			$resultWillReturn['result'] = $get_result;
			
			// Return result 
			return $resultWillReturn;
		}
}
	
	}
