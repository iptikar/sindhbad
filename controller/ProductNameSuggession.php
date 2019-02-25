<?php

class ProductNameSuggession
{
	
		public static function FetchSuggesstion(string $q) {
			
				$return = [];
				
				// Check if sting post
				if(isset($_POST[$q])) {
					
					$_POST[$q] = strtolower($_POST[$q]);
					
					$search = "%{$_POST[$q]}";
					
					//$search1 = "%{$_POST[$q]}%";
					//$search2 = "{$_POST[$q]}%";
					
					 // Get the connection
					$db = Database::getInstance();
                    
					// Get the instance of connection
                    
					$mysqli = $db->getConnection();
					
					
					$sql = "SELECT name FROM product_catalogs WHERE MATCH (name) AGAINST (? IN NATURAL LANGUAGE MODE) LIMIT 10";
					
					
					
					/*
					// Checking in another way 
					$sql = "SELECT name FROM product_catalogs 
					WHERE name LIKE ? OR name LIKE ? OR name LIKE ? ORDER BY name LIMIT 10 ";
					
					*/
					
				$stmt = $mysqli->prepare($sql);
				
				// Check the error 
				if(!$stmt) {
					
						// throw error 
						return $return['error'] = $mysqli->error;
						
				}
				
				// Bind the valus 
				//$stmt->bind_param("sss", $search, $search1, $search2);
				
				$stmt->bind_param("s", $search);
				
				// Execte 
				if(!$stmt->execute()) {
					
					return $return['error'] = $stmt->error;
					
				}
				
				// Stroe resutl 
				$result = $stmt->get_result();
				
				// Free result 
				$stmt->free_result();
				
				// Close result 
				$stmt->close();
				
				if($result->num_rows < 1) {
					
					return $return['result']  = 'No records found.';
				} 
				
				$return['result'] = $result->fetch_all(MYSQLI_ASSOC);
				
				// Get the recordd 
				
					
					
				}
				
				return $return;
				
		}
}
