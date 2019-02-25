<?php 

class GetOrdersForSeller 
{
	
	/* If record found then 
	 * Array
	(
    [result] => No records founds
	) else {
	* 
	* 	Array
(
		[result] => Array
        (
            [0] => all records as array column 
	* }
* */

	public static function FetchAllOrders() 
	{
		
		  // Get the connection
        $db = Database::getInstance();
                    
        // Get the instance of connection
                    
        $mysqli = $db->getConnection();
            
        $seller_email = $_SESSION['3vmigUCQdJGRrvG-username'];
        // Sql
        
        
        $tablename = 'orderdetails';
                    
        // Procedure name
        $proceurename = 'getOrdersForSellers';
        /*
			
			
        */
        
        $requiredColums = 'orders.id, orders.order_id, orders.purchase_point, orders.purchase_date, orders.currency, orders.shipping_address, orders.billing_address, orders.totalamount, orders.status';
                    
        // Where clause
        $where = "WHERE FROM_BASE64(orderdetails.seller_email) = '$seller_email' ";
                    
        $orderby = 'ORDER BY orderdetails.id DESC';
                    
         // Join 
         $join = 'INNER JOIN orders ON orderdetails.order_id = orders.order_id';
         
         $groupby = 'GROUP by orderdetails.order_id';
         
        return SelectStoreProcedure::SelectRecordsByStoreProcedureWithJoinWithGroup($mysqli, $tablename, $proceurename, $requiredColums, $where, $orderby, $join, $groupby);
		
		
					
	}
	
}
