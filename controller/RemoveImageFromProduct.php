<?php

class RemoveImageFromProduct {
	
		public static function RemoveImage(MarketPlace $MarketPlace, string $sku, string $image_name) {
			
			
				// Post the sku 
				if(isset ($_POST [$sku]) && isset ($_POST [$image_name])) {
					
						// Get the sku 
						$sku = $_POST[$sku];
						$image_name = $_POST[$image_name];
						
						// Get the seller info
						
						$seller_email = $_SESSION['3vmigUCQdJGRrvG-username'];
						
						// Get the connection
						$db = Database::getInstance();
									
						// Get the instance of connection
									
						$mysqli = $db->getConnection();
						
						// Upload the file 
						$directory = '../../img/product-images';
		
						$tablename = 'product_catalogs';
									
						// Procedure name
						$proceurename = 'RemoveSelectProductImage';
									
						$requiredColums = 'images';
						
						
						// Where clause
						$where = "WHERE seller_email = '$seller_email' AND sku = '$sku'";
									
						$orderby = '';
						
        
						
						$getimages =  SelectStoreProcedure::SelectRecordsByStoreProcedure($mysqli, $tablename, $proceurename, $requiredColums, $where, $orderby)['result'][0][0]['images'];
						
						
						// Images in array 
						$imagesInArray = json_decode($getimages, true);
						
						// Check if json ecode true 
						if($imagesInArray  !== false) {
							
							// check that image in array 
							$isThereImage = array_search($image_name, $imagesInArray);
							
							// If not variable is false 
							if($isThereImage !== false) {
								
								unset($imagesInArray[$isThereImage]);
								
								sort($imagesInArray);
								
								$updatedImages = json_encode($imagesInArray);
								// Update the table 
								$sql = "UPDATE $tablename SET images = '$updatedImages' WHERE sku = '$sku' AND seller_email = '$seller_email'";
								
								// Run the query 
								if(!$mysqli->query($sql)) {
									
										return $mysqli->error;
									}
									
								// Link to remove 
								$linktoremove = $directory.'/'.$image_name;
								// Unlink the image 
								
								if(!unlink($linktoremove)) {
									
									return 'Unable to remove file from server';
								}
								
								// Return true;
								return true;	
							}
						}
						
					}
			}
	}

