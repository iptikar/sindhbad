<?php

class WriteReviewAboutProduct 
{
		public static function WritingReview($submit, Marketplace $Marketplace) 
		
		{
			// Check if submit posted 
			if(isset ($_POST[$submit])) 
			{
				// Get the datas 
				// User must be logged in 
				if($Marketplace->IsUserLoggedInBuyer() !== true) {
					
					// Return error 
					return 'You must be logged in as buyer to poste the review.';
				}
				
				// Get who is logged in email address 
				$buyer_email =  $Marketplace->BuyerSession()->email;
				
				// No data validation, because using too musch validation we have done 
				
				// Some field nee to to set 
				if(self::Validate() !== true){
					
					// Return the error 
					return self::Validate();
				}
				
				// Get the connection
				$db = Database::getInstance();

				// Get the instance of connection

				$mysqli = $db->getConnection();
				
				
				// Table name 
				$tablename = 'review';
				
				
				$review_id = explode('.',microtime(true))[0].uniqid();
			
				// Fisrt table reviews inse save the data 
				$sql = "INSERT INTO $tablename(review_id, buyer_email, create_at, updated_at)VALUES(?,?,NOW(), NOW())";
				
				// Prepare statement 
				$stmt = $mysqli->prepare($sql);
				
				// Check errir 
				if(!$stmt) {
					
						return $mysqli->error;
					}
					
				// Bind the paramaters 
				$stmt->bind_param("ss", $review_id, $buyer_email);
				
				
				// Execute 
				$stmt->execute();
				
				// Clse 
				$stmt->close();
				
				// Table name 
				$tablename = 'review_details';
				
				// Column need to add 
				$addColumn = [
						'review_id' => $review_id,
						'created_at' => date('Y-m-d'),
						'updated_at' => date('Y-m-d'),
						'buyer_email' => $buyer_email 
					];
					
					
			// column need to remove 
			$removeColumn = ['ratings', 'submit'];
		
			// Check what recomanded 
			
			
			// Save the document 
			return InsertPreparedStatement::SaveDocument($addColumn, $removeColumn, $tablename);
				
			}
		
		}
		
		
		// Validate 
		public static function Validate() {
			
			if(!isset($_POST['recomanded'])) {
				
				return 'Please check weather product you recommend to other.';
			}
			
			if(!isset ($_POST['stars']) === ''){
				
				// 
				return 'Please rate the product by clicking stars.';
			}
			

			return true;
			
		}
		
		// Check 
		/*
		 * http://localhost/reviews?action=reviewForm&id_item=ADFDF59598&id=1&name=Unlocked+Original+Samsung+Galaxy+S8+G950+US+V&img=http%3A%2F%2Flocalhost%2Fimg%2Fproduct-images%2F152878752620919.jpg
		 * */
		public static function IsViewAble($id, $sku) {
			
			// Check If view is valid 
			if(isset($_GET[$id]) && isset ($_GET[$sku]))
			{
					// $ id 
					$id = $_GET[$id];
					$sku = $_GET[$sku];
					
						// Get the connection
					$db = Database::getInstance();

					// Get the instance of connection

					$mysqli = $db->getConnection();
					
					// Wrte sql 
					$sql = "SELECT id FROM product_catalogs WHERE id = ? AND sku = ?";
					
					// Prepare 
					$stmt = $mysqli->prepare($sql);
					
					// Execute
					if(!$stmt){
						
						return $mysqli->error;
					}
					
					// Bind 
					$stmt->bind_param("ss", $id, $sku);
					
					// Execute
					if(!$stmt){
						
						return $stmt->error;
					}
					
					if(!$stmt->execute()) {
						
						return $stmt->error;
					}
					
					// Get result 
					
					if($result = $stmt->get_result()->num_rows === 1) {
						
							return true;
					}
					
					$stmt->free_result();
					
					$stmt->close();
					
					return false;
					
			}
			
			return false;
		}
}
