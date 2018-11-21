<?php

class CompanySeller 
{
		// Save all document 
		public function SaveCompanyInformation() {
			
			// Check if seller type set 
		if(isset($_POST['business_submit_btn'])) {
			
			$addColumn = [
						'created' => date('Y-m-d'),
						'updated' => date('Y-m-d'),
						'seller_email' => $_SESSION['3vmigUCQdJGRrvG-username'] ?? ''
					];
				
			$removeColumn = ['business_submit_btn', 'full_number'];
		
			$tablename = 'seller_as_company';
			
			return InsertPreparedStatement::SaveDocument($addColumn, $removeColumn, $tablename);
		
			}
	
	
	}

		// Updating form 
		public static function UpdateBusinessSellerForm() {
			
			// If method post 
			if( isset ($_POST ['business_seller_save_btn'])) {
				
					// Unset some variable 
					unset($_POST['business_seller_save_btn']);
					
					// Full phone number 
					unset($_POST['full_number']);
					
					// Updated 
					$_POST['updated'] = date('Y-m-d');
					
					
					// Table name 
					$tablename = 'seller_as_company';
					
					// Get database instances 
					$db = Database::getInstance();
                    
					// Get the instance of connection
					$mysqli = $db->getConnection();
					
					// Post all variable with it;s value 
					$set = '';
					
					// Loop each post request 
					foreach($_POST as $key => $value) {
						
							$set .= "$key=?, ";
					}
					
					// Trim last comma 
					$set = rtrim($set, ', ');
				
					
					// Where Clause 
					$where = 'WHERE seller_email = ?';
					
					// Prepare statement 
					$stmt = $mysqli->prepare("UPDATE $tablename SET $set $where");
					
					// 
					if ($stmt === false) {
						 
						 // Trigger error 
						  trigger_error($mysqli->error, E_USER_ERROR);
						  
						  // Return 
						 return; 
					}
					
					// Add new post variable 
					$_POST['seller_email'] = $_SESSION['3vmigUCQdJGRrvG-username'];
					
					// Get paramater first 
					$s = str_repeat('s', count($_POST));
					
					// Get array values 
					$data = array_values($_POST);
					
					// Bind the data to it's paramaters 
					$stmt->bind_param($s, ...$data);
				
					// Execute statment 
					if(!$stmt->execute()) {
					
					// Return error 
					return $stmt->error;
				}
				
				// Return true 
				return true;
			}
			
		}
}
