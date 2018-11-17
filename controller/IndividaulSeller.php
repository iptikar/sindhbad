<?php
class IndividualSeller 
{
	
	public static function UpdateIndividualSellerDetails() {
		
		return false;
		if(isset ($_POST['individual_submit_btn'])) {
			
				// Get the seller session session name 
				
				
				
				
				/*
									Array
					(
						[country] => AW
						[city] => 
						[state_region_province] => 
						[post_zip_code] => 
						[land_line_no] => 
						[nationality] => 
						[mobile_no] => +1
						[full_number] => 
						[emirate_id_no] => 
						[unique_business_id] => 
						[website] => 
						[address] => 
						[seller-type] => retails
						[individual_submit_btn] => 
					)
					
				*/
				
				// Unset some variable 
				
				$_POST['created'] = date('Y-m-d');
				$_POST['updated'] = date('Y-m-d');
				$_POST['seller_email'] = $_SESSION['3vmigUCQdJGRrvG-username'] ?? '';
				
				unset($_POST['full_number']);
				unset($_POST['individual_submit_btn']);
				
				// Get all column appended 
				$column = implode(',', array_keys($_POST));
				
				$values = implode("','", $_POST);
				
				// Append string first 
				$values = "'".$values."'";
				
				$db = Database::getInstance();
                    
				// Get the instance of connection
                    
				$mysqli = $db->getConnection();
				
			
				
				// Insert value to the database 
				$sql = "INSERT INTO seller_as_individual($column)VALUES($values)";
				
				if(! $mysqli->query($sql)) {
					
						echo $mysqli->error;
				}
				
				//echo $column;
				
				echo "<pre>";
				
				print_R($values);
				
				echo "</pre>";
				
				
					echo "<pre>";
				
				print_R($_POST);
				
				echo "</pre>";
				
				
				
			}
	}

}
