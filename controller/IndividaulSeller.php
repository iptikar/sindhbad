<?php
class IndividualSeller 
{
	
	public static function UpdateIndividualSellerDetails() {
		
	
		if(isset ($_POST['individual_submit_btn'])) {
				
				// Table name 
				$tablename = 'seller_as_individual';
				
				// Column need to add 
				$addColumn = [
						'created' => date('Y-m-d'),
						'updated' => date('Y-m-d'),
						'seller_email' => $_SESSION['3vmigUCQdJGRrvG-username'] ?? ''
					];
					
					
			// column need to remove 
			$removeColumn = ['individual_submit_btn', 'full_number'];
		
			
			// Save the document 
			return InsertPreparedStatement::SaveDocument($addColumn, $removeColumn, $tablename);
		
				
				
				
			}
	}

	// Check if company has already filled the form 
	
	public static function UpdateIndividualSellerDetails1() {
		
			if(isset($_POST['save_individual_form'])) {
				
					unset($_POST['save_individual_form']);
					unset($_POST['full_number']);
					
					
					$_POST['updated'] = date('Y-m-d');
					
					
					$tablename = 'seller_as_individual';
					
					// Get database instances 
					$db = Database::getInstance();
                    
					// Get the instance of connection
					$mysqli = $db->getConnection();
					
					// Post all variable with it;s value 
					
					$set = '';
					
					foreach($_POST as $key => $value) {
						
							$set .= "$key=?, ";
					}
					
					$set = rtrim($set, ', ');
				
					
					// Where Clause 
					$where = 'WHERE seller_email = ?';
					
					
					$stmt = $mysqli->prepare("UPDATE $tablename SET $set $where");
					
					if ($stmt === false) {
						 
						  trigger_error($mysqli->error, E_USER_ERROR);
						 return; 
					}
					
					$_POST['seller_email'] = $_SESSION['3vmigUCQdJGRrvG-username'];
					
					// Get paramater first 
					$s = str_repeat('s', count($_POST));
					
					$data = array_values($_POST);
					
					// Bind the data to it's paramaters 
					$stmt->bind_param($s, ...$data);
				
					// Execute statment 
					if(!$stmt->execute()) {
					
					return $stmt->error;
				}
				
				return true;
	
				}
		
		}
}
