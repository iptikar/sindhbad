<?php 

class SortProductImages {
	
		public static function SortingImages(string $sku, string $images) {
			
				// Need to variable to post 
				if(isset ($_POST [$sku]) && isset ($_POST[$images])) {
					
					
						// Get the post data 
						$sku = $_POST[$sku];
						$images = $_POST[$images];
						
						// Get the connection
						$db = Database::getInstance();
                    
						// Get the instance of connection
                    
						$mysqli = $db->getConnection();
            
						// Prepare statement 
						$sql = "UPDATE product_catalogs SET images = ? WHERE sku = ?";
						
						// Prepare 
						$stmt = $mysqli->prepare($sql);
						
						// If fails 
						if(!$stmt) {
							
								return $stmt->error;
							}
						// Bind paramaters 
						$stmt->bind_param("ss", $images, $sku);
						
						// Execute 
						if(!$stmt->execute() ){
							
								return $mysqli->error;
						}
						
						// Free 
						$stmt->free_result();
						
						// Releas 
						$stmt->close();
						
						// Return true
						return true;
						
				}
			}
	}
