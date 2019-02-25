<?php

// require connection 


class GetOrderDetailsForClient 
{
	// Order id 
	public $order_id;
	
	
	public function __construct(string $order_id) {
		
			$this->order_id = $order_id;
	}
	
	public function GetOrderStatusDetailsById() 
	{
		// Get the connection
        $db = Database::getInstance();
                    
        // Get the instance of connection
                    
        $mysqli = $db->getConnection();
        
        // Check if order is post 
        if(isset ($_POST[$this->order_id])) {
			
			// Get the id 
			$order_id = $mysqli->real_escape_string($_POST[$this->order_id]);
			
			// Sql
			$tablename = 'orderstatus';
                    
			// Procedure name
			$proceurename = 'GetOrderStatusDetailsById';
                    
			$requiredColums = 'status, created_at, updated_at, comments';
			
			// Where clause
			$where = "WHERE order_id = '$order_id'";
                    
			$orderby = 'ORDER BY updated_at DESC';
                    
			return SelectStoreProcedure::SelectRecordsByStoreProcedure($mysqli, $tablename, $proceurename, $requiredColums, $where, $orderby);
    
		}
	} 

	
	public function GetOrderStatusById() 
	{
		// Get the connection
        $db = Database::getInstance();
                    
        // Get the instance of connection
                    
        $mysqli = $db->getConnection();
        
        // Check if order is post 
        if(isset ($_POST[$this->order_id])) {
			
			// Get the id 
			$order_id = $mysqli->real_escape_string($_POST[$this->order_id]);
			
			// Sql
			$tablename = 'orders';
                    
			// Procedure name
			$proceurename = 'GetOrderStatusById';
                    
			$requiredColums = 'status';
			
			// Where clause
			$where = "WHERE order_id = '$order_id'";
                    
			$orderby = '';
                    
			return SelectStoreProcedure::SelectRecordsByStoreProcedure($mysqli, $tablename, $proceurename, $requiredColums, $where, $orderby);
    
		}
	} 
}
