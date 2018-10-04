<?php 
class SelectStoreProcedure {
	
		public function __construct(mysqli $mysqli, string $tablename, string $proceurename, string $requiredColums) {
			
			// Return static functio n
			//return self::SelectRecordsByStoreProcedure($mysqli, $tablename, $proceurename, $requiredColums);
		}
		
		public static function SelectRecordsByStoreProcedure(mysqli $mysqli, 
															string $tablename, 
															string $proceurename, 
															string $requiredColums, 
															string $where, 
															string $orderby) : array {
				
					// Append result 
					$result  = array();
					
					// Required coloums 
					
					
					// Select everthing 
					if (!$mysqli->query("DROP PROCEDURE IF EXISTS $proceurename") ||
						
						!$mysqli->query("CREATE PROCEDURE $proceurename() READS SQL DATA BEGIN SELECT $requiredColums FROM $tablename  $where $orderby; SELECT id + 1 FROM $tablename; END;")) {
						
						$result['result'] = "Stored procedure creation failed: (" . $mysqli->errno . ") " . $mysqli->error. "Line No ".__LINE__;
						
						return $result;
					}
					
					// Call the procedure
					if (!$mysqli->multi_query("CALL $proceurename")) {
					
							$result['result'] =  "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error."Line No ".__LINE__;
							
							return $result;
							
					} else {
						
						// get the all result 
					$all_result = [];
					
					// Do 
					do {
						if ($res = $mysqli->store_result()) {
						
							// If no rows found 
							if($mysqli->affected_rows < 1) {
							
								// Return message 
								$result['result'] = 'No records founds';
								
								// return 
								return $result;
							}
							
							$all_result[] = $res->fetch_all(MYSQLI_ASSOC);

							$res->free();
							
						} else {
						
						// If error then throw it 
						if ($mysqli->errno) {
							
							// Return error 
							return "Store failed: (" . $mysqli->errno . ") " . $mysqli->error."Line No".__LINE__;
						}
					} // If there is more result then move to next 
				} while ($mysqli->next_result());
									
					// Append result 
					$result['result'] = $all_result;
					
					// Return result
					return $result;
						}
					
					
					
					
				}
			
	
	}
