<?php
class SelectStoreProcedure
{
    public function __construct(mysqli $mysqli, string $tablename, string $proceurename, string $requiredColums)
    {
            
            // Return static functio n
            //return self::SelectRecordsByStoreProcedure($mysqli, $tablename, $proceurename, $requiredColums);
    }
        
    public static function SelectRecordsByStoreProcedure(
            mysqli $mysqli,
                                                            string $tablename,
                                                            string $proceurename,
                                                            string $requiredColums,
                                                            string $where,
                                                            string $orderby
        ) : array {
                
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
                    if ($mysqli->affected_rows < 1) {
                            
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
            
        
    public static function basicSelectpreparedStatement(mysqli $mysqli, string $sql, string $bindDataleft, string $bindDataright):array
    {
                
                    // Return result
        $returnData = [];
                    
                    
                    
        // Get the connection
        $db = Database::getInstance();
                    
        // Get the instance of connection
                    
        $mysqli = $db->getConnection();
                    
                    
                    
        // Bind
        $stmt = $mysqli->prepare($sql);
                    
        if ($mysqli->error !== '') {
            $returnData['result'] = $mysqli->error;
                            
            return $returnData;
        }
                    
        // IF query fails
        if (!$stmt) {
            $returnData['result'] = $mysqli->error;
                            
            return $returnData;
        }
                    
        // Bind
        $stmt->bind_param($bindDataleft, $bindDataright);
                    
        // Execute
        if (!$stmt->execute()) {
            $returnData['result'] = $mysqli->error;
                            
            return $returnData;
        }
                    
                    
        // Get results
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                    
        // Check rows
        if ($stmt->affected_rows === 0) {
            $returnData['result'] = 'No record found';
                            
            return $returnData;
        }
                    
                    
        // Free result
        $stmt->free_result();
                    
        // Bind
                    
        // Close statement
        $stmt->close();
                    
        // $mysqli->close(); is closed by singleton connection class
                    
        $returnData['result'] = $result;
                    
        return  $returnData;
    }
}
