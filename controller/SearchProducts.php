<?php 

class SearchProducts 
{
	
		public static function LetMeSearchProducts( string $q, string $cat, string $pageno, int $perpage)
		{
			 
			 // result 
			 $return = [];
			 
			 
			// Get the string 
			if(isset( $_GET[$q]) && isset($_GET[$cat])) {
				
				
				// Get the stirng 
				$q = urldecode(strtolower($_GET[$q]));
				
				// Cat 
				$cat = urldecode($_GET[$cat]);
				
				if($pageno > 0) {
					
					$pageno = $pageno - 1;
				}
				
				
				$skip = $pageno * $perpage;

				// Get the connection
				$db = Database::getInstance();
                    
				// Get the instance of connection
                    
				$mysqli = $db->getConnection();
				
				$s = '';
				
				// Check if category is set 
				if($cat !== '') {
					
					$s = "ss";
					$bindvalud = [$cat, $q];
					
					$sql = "SELECT lower(category) as lowerCat, 
					id, 
					name,
					sku, 
					images, 
					regular_price, 
					special_price, 
					avaibility_from, 
					(((regular_price - special_price )/regular_price) * 100) as discount, 
					NOW() as current 
					FROM product_catalogs WHERE 
					category_id = ? AND MATCH (name) AGAINST (? IN NATURAL LANGUAGE MODE) LIMIT $skip, $perpage";
				
				} else {
					
					$s = "s";
					$bindvalud = [$q];
					
					$sql = "SELECT lower(category) as lowerCat, 
					id, 
					name,
					sku, 
					images, 
					regular_price, 
					special_price, 
					avaibility_from, 
					(((regular_price - special_price )/regular_price) * 100) as discount, 
					NOW() as current 
					FROM product_catalogs WHERE 
					MATCH (name) AGAINST (? IN NATURAL LANGUAGE MODE) LIMIT $skip, $perpage";
				
					
				}
				
				
				/*
				$result = $mysqli->query($sql);
				
				// If query failed 
				if(!$result) {
					
						return $mysqli->error;
					}
				
				// Fetch the row
				return $result->fetch_all(MYSQLI_ASSOC);
				
				*/
				
				$stmt = $mysqli->prepare($sql);
				
				// Check the error 
				if(!$stmt) {
					
						// throw error 
						return $mysqli->error;
				}
				
				// Bind the valus 
				$stmt->bind_param($s, ...$bindvalud);
				
				// Execte 
				if(!$stmt->execute()) {
					
					return $stmt->error;
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
				
				// Get the number of rows 
				$return['numberRows'] = $result->num_rows;
				
				// Get the recordd 
				return $return;
				
				// Run the query 
				
			
				
			}
			
		}
	
	
	
		public static function GetNumberOfRows( string $q, string $cat)
		{
			 
			 // result 
			 $return = [];
			 
			 
			// Get the string 
			if(isset( $_GET[$q]) && isset($_GET[$cat])) {
				
				
				// Get the stirng 
				$q = urldecode(strtolower($_GET[$q]));
				
				// Cat 
				$cat = urldecode($_GET[$cat]);
				
				
				
				
			

				// Get the connection
				$db = Database::getInstance();
                    
				// Get the instance of connection
                    
				$mysqli = $db->getConnection();
				
				$s = '';
				
				// Check if category is set 
				if($cat !== '') {
					
					$s = "ss";
					$bindvalud = [$cat, $q];
					
					$sql = "SELECT count(id) as numberOfRows
					FROM product_catalogs WHERE 
					category_id = ? AND MATCH (name) AGAINST (? IN NATURAL LANGUAGE MODE)";
				
				} else {
					
					$s = "s";
					$bindvalud = [$q];
					
					$sql = "SELECT count(id) as numberOfRows
					FROM product_catalogs WHERE 
					MATCH (name) AGAINST (? IN NATURAL LANGUAGE MODE)";
				
					
				}
				
				
				$stmt = $mysqli->prepare($sql);
				
				// Check the error 
				if(!$stmt) {
					
						// throw error 
						return $mysqli->error;
				}
				
				// Bind the valus 
				$stmt->bind_param($s, ...$bindvalud);
				
				// Execte 
				if(!$stmt->execute()) {
					
					return $stmt->error;
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
				return $return;
				
				// Run the query 
				
			
				
			}
			
		}
	
	}
