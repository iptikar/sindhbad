<?php

class InsertPreparedStatement
{
	
		
		
		public static function SaveDocument( array $addColumn, 
											array $removeColumn,
											string $tablename
											
											) {
			
				
				
				// Check if 
				if(count($removeColumn) > 0) {
					
						foreach($removeColumn as $key => $value) {
							
								// Unset varaible 
								unset($_POST [$value]);
							}
					}
				
				
				// Set new indexs 
				if(count($addColumn) > 0) {
					
						foreach($addColumn as $key => $value ) {
							
								$_POST[$key] = $value;
							}
					}
				
				
				
				// Get all column appended 
				$column = implode(',', array_keys($_POST));
				
				// Implode post keys 
				$values = implode("','", $_POST);
				
				// For prepaid statement need two variable one 
				$questionMark = str_repeat('?,', count($_POST));
				
				// Remove last comma
				$questionMark = rtrim ($questionMark, ',');
				// s
				$s = str_repeat('s', count($_POST));
				
				// Append string first 
				$values = "'".$values."'";
				
				// Get database instances 
				$db = Database::getInstance();
                    
				// Get the instance of connection
                $mysqli = $db->getConnection();
				
				// Prepare mysqli statements 
				$stmt = $mysqli->prepare("INSERT INTO $tablename ($column) VALUES ($questionMark)");
				
				// If stmet failed 
				if(!$stmt) {
					
					return $mysqli->error;
				}
					
				// Get the post data values 
				$data = array_values($_POST);
				
				// Bind the data to it's paramaters 
				$stmt->bind_param($s, ...$data);
			
				if(!$stmt) {
					
					return $stmt->error;
				}
				// Execute statment 
				if(!$stmt->execute()) {
					
					return $stmt->error;
				}
				
			return true;
			}

		public function updateDocument(array $addColumn, 
											array $removeColumn,
											string $tablename) {
												
												
											
		}

}
