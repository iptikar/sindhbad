<?php

class DeleteProductBySKU {
	
		public static function DeleteNow($sku, $id) {
			
				// Check if two things is post id and sku 
				if(isset ($_POST [$sku]) && isset ($_POST [$id])) {
					
						// get 
						$id = $_POST[$id];
						$sku = $_POST[$sku];
						
						// Get seller email 
						
						// Seller email 
						$seller_email = $_SESSION['3vmigUCQdJGRrvG-username'];
        
						 // Get the connection
						$db = Database::getInstance();
                    
						// Get the instance of connection
                    
						$mysqli = $db->getConnection();
						
							
						// Get the resutl 
						
						 // Sql
						$tablename = 'product_catalogs';
									
						// Procedure name
						$proceurename = 'selectProductImage';
									
						$requiredColums = 'images';
									
						// Where clause
						$where = "WHERE sku = '$sku' AND id = '$id' AND seller_email = '$seller_email'";
						
						$orderby = '';
						
						
									
						$images =  SelectStoreProcedure::SelectRecordsByStoreProcedure($mysqli, $tablename, $proceurename, $requiredColums, $where, $orderby)['result'][0][0]['images'];
						
						// Check if set 
						// Check if images json encode is true 
						$imageInArray = json_decode($images, true);
						
						// IF not false 
						if($imageInArray !== false) {
							
							// Upload the file 
							$directory = '../../img/product-images';
							
							// Link to remove 
							
							foreach($imageInArray as $image) {
								
								$linktoremove = $directory.'/'.$image;
								
								// Unlink the image 
								//unlink($linktoremove);
							}
							
						}
						
						
						// First delete from product_categlog_attributes
						$table1 = 'product_categlog_attributes';
						
						$sql = "DELETE FROM $table1 WHERE id = ?";
						
						// Run the query 
						$stmt1 = $mysqli->prepare($sql);
						
						// Bind 
						$stmt1->bind_param("s", $id);
						
						// Execute 
						$stmt1->execute();
						 
						
						
						
						// Sql 
						$sql = "DELETE FROM product_catalogs WHERE sku = ? AND id = ? AND seller_email = ?";
						
						// Prepare 
						$stmt = $mysqli->prepare($sql);
						
						// Check if not failed 
						if(!$stmt) {
							
								return $mysqli->error;
							}
						
						// Bind 
						$stmt->bind_param("sss", $sku, $id, $seller_email);
						
						// execute 
						if(!$stmt->execute()) {
							
								// Get error 
								$stmt->error;
						}
						
						$result = $stmt->store_result();
						
						// Free 
						$stmt->free_result();
						
						// close stmt 
						$stmt->close();
						
						return true;
						
            
				}
		}
	}
