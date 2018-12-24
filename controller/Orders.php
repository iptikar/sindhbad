<?php

class Orders
{
    public static function GetOrders()
    {
                
         // Get the connection
        $db = Database::getInstance();
                    
        // Get the instance of connection
                    
        $mysqli = $db->getConnection();
            
        // Sql
        $tablename = 'orders';
                    
        // Procedure name
        $proceurename = 'selectAllOrders';
                    
        $requiredColums = 'id, order_id, purchase_point, purchase_date, currency, shipping_address, billing_address,totalamount, status';
                    
        // Where clause
        $where = '';
                    
        $orderby = 'ORDER BY purchase_date DESC';
                    
        return SelectStoreProcedure::SelectRecordsByStoreProcedure($mysqli, $tablename, $proceurename, $requiredColums, $where, $orderby);
    }
          
          
          
                
    // Get order by id
    public static function GetOrderById(string $order_id)
    {
        $result = [];
                    
        // Result
        if (!isset($_GET [$order_id])) {
            $result['result'] = false;
                        
            // Return result
            return $result;
        }
                    
        // Get the order id
        $order_id = $_GET[$order_id];
                    
        // Set the result
        // Get connectio n
        // Get the connection
        $db = Database::getInstance();
                    
        // Get the instance of connection
                    
        $mysqli = $db->getConnection();
            
        // Get the connection
        $order_id = $mysqli->real_escape_string($order_id);
        // Sql
        $tablename = 'orders';
                    
        // Procedure name
        $proceurename = 'selectOrderById';
                    
        $requiredColums = 'id, order_id, purchase_point, purchase_date, currency, buyer_email,
										shipping_address, if(shipping_cost > 100, format(shipping_cost,2), 
										shipping_cost) as shipping_cost, billing_address, format(totalamount, 2) as totalamount, 
										status, payment, format(totalamount - shipping_cost,2) as subtotal';
        //20180929DDE2
        // Order id must be set
                    
        $where = "WHERE order_id='$order_id'";
                    
        // Order By Clause
        $orderby = '';
                    
        // Inner Join
                
                    
        return SelectStoreProcedure::SelectRecordsByStoreProcedure($mysqli, $tablename, $proceurename, $requiredColums, $where, $orderby);
    }
                
                
    public static function getOrderItemByOrderId(string $order_id):array
    {
                
                    // Return result
        $returnData = [];
                    
        // Get the id
        if (!isset($_GET[$order_id])) {
            $returnData['result'] = false;
                            
            return $returnData;
        }
                    
        $order_id = $_GET[$order_id];
                    
        // Get the connection
        $db = Database::getInstance();
                    
        // Get the instance of connection
                    
        $mysqli = $db->getConnection();
                    
        // Sql
        $sql = "SELECT orderdetails.id,
							orderdetails.order_id,
							orderdetails.seller_email,
							orderdetails.sku,
							orderdetails.product_id,
							SUBSTR(orderdetails.prodct_name, 10,10) as short_product_name,
							orderdetails.prodct_name,
							orderdetails.qty,
							format(orderdetails.price, 2) as price,
							format(orderdetails.totalamount, 2) as totalamount,
							product_catalogs.id, 
							orders.buyer_email,
							product_catalogs.seller_email,
							orders.currency,
							(((product_catalogs.regular_price - product_catalogs.special_price )/product_catalogs.regular_price) * 100) as discount,
						if(product_catalogs.avaibility = 0, 'In Stock', 'Out Of Stock') as avaibility ,
						
						format(product_catalogs.special_price,2) as special_price,
						format(product_catalogs.regular_price, 2) as regular_price,
						format (product_catalogs.regular_price - product_catalogs.special_price, 2) as discount_amount,
						if(product_catalogs.special_price != product_catalogs.regular_price, (product_catalogs.special_price/100 * 5), 
						(product_catalogs.regular_price/100) * 5) as tax
						FROM orderdetails
						INNER JOIN product_catalogs ON orderdetails.sku = product_catalogs.sku
						INNER JOIN orders ON orderdetails.order_id = orders.order_id
					 WHERE orderdetails.order_id = ?";
                    
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
        $stmt->bind_param("s", $order_id);
                    
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

	           
    public static function getOrderItemByOrderIdForSeller(string $order_id):array
    {
                
                    // Return result
        $returnData = [];
                    
        // Get the id
        if (!isset($_GET[$order_id])) {
            $returnData['result'] = false;
                            
            return $returnData;
        }
                    
        $order_id = $_GET[$order_id];
                    
        // Get the connection
        $db = Database::getInstance();
                    
        // Get the instance of connection
                    
        $mysqli = $db->getConnection();
                    
        // Sql
        $seller_email = $_SESSION['3vmigUCQdJGRrvG-username'];
        
        $sql = "SELECT orderdetails.id,
							orderdetails.order_id,
							orderdetails.seller_email,
							orderdetails.sku,
							orderdetails.product_id,
							SUBSTR(orderdetails.prodct_name, 10,10) as short_product_name,
							orderdetails.prodct_name,
							orderdetails.qty,
							format(orderdetails.price, 2) as price,
							format(orderdetails.totalamount, 2) as totalamount,
							product_catalogs.id, 
							orders.buyer_email,
							product_catalogs.seller_email,
							orders.currency,
							(((product_catalogs.regular_price - product_catalogs.special_price )/product_catalogs.regular_price) * 100) as discount,
						if(product_catalogs.avaibility = 0, 'In Stock', 'Out Of Stock') as avaibility ,
						
						format(product_catalogs.special_price,2) as special_price,
						format(product_catalogs.regular_price, 2) as regular_price,
						format (product_catalogs.regular_price - product_catalogs.special_price, 2) as discount_amount,
						if(product_catalogs.special_price != product_catalogs.regular_price, (product_catalogs.special_price/100 * 5), 
						(product_catalogs.regular_price/100) * 5) as tax
						FROM orderdetails
						INNER JOIN product_catalogs ON orderdetails.sku = product_catalogs.sku
						INNER JOIN orders ON orderdetails.order_id = orders.order_id
					 WHERE orderdetails.order_id = ? AND FROM_BASE64(orderdetails.seller_email) = ?";
                    
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
        $stmt->bind_param("ss", $order_id, $seller_email);
                    
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


	 public static function GetOrdersForSeller()
    {
                
         // Get the connection
        $db = Database::getInstance();
                    
        // Get the instance of connection
                    
        $mysqli = $db->getConnection();
            
        // Sql
        $tablename = 'orderdetails';
                    
        // Procedure name
        $proceurename = 'GetAllOrderForSeller';
                    
        $requiredColums = 'orderdetails.order_id, 
						FORMAT(SUM(orderdetails.totalamount), 2) as totalamount,
						
						orders.purchase_point,
						orders.shipping_address,
						orders.billing_address,
						orders.purchase_date,
						orders.currency,
						FORMAT(SUM(orderdetails.totalamount), 2) as subtotal,
						if (SUM(orderdetails.totalamount) > 100 , "Free" , "20") as shipping_cost,
						FORMAT((SUM(orderdetails.totalamount) / 100) * 5 , 2 ) as tax,
						FORMAT (SUM(orderdetails.totalamount) / 100  * 5 +  SUM(orderdetails.totalamount) + IF (SUM(orderdetails.totalamount) > 100 , 0 , 20 ), 2 ) AS totalwithtax,
						orders.status,
						orders.id
						';
                    
        $seller_email = $_SESSION['3vmigUCQdJGRrvG-username'];
        
        // Where clause
        $where = "WHERE FROM_BASE64(orderdetails.seller_email) = '$seller_email'";
                    
        $orderby = '';
        
        $join = 'INNER JOIN orders ON orderdetails.order_id = orders.order_id';
        
        $groupby = 'GROUP BY orderdetails.order_id';
        
        
        /*
         *  mysqli $mysqli,
         * string $tablename,
                                                            string $proceurename,
                                                            string $requiredColums,
                                                            string $where,
                                                            string $orderby,
                                                            string $join,
                                                            string $groupby
         * */
                    
        return SelectStoreProcedure::SelectRecordsByStoreProcedureWithJoinWithGroup($mysqli, 
																					$tablename, 
																					$proceurename, 
																					$requiredColums, 
																					$where, 
																					$orderby,
																					$join,
																					$groupby);
    }

	public static function GetOrderTotalForSeller() {
		
			// Order list 
			$orderList = self::GetOrdersForSeller()['result'][0] ?? '';
			
			$order_id = $_GET['order_id'];
			
			
			return self::GetArrayColumnByValue($orderList, 'order_id', $order_id);
			
	}
	
	public static function GetArrayColumnByValue(array $list, string $key , string $value){
		
			if(!is_array($list)) 
			{ 
				return false; 
			}
			// Index 
			$i = 0;
			
			
			
			// Fond
			$found = false;
			
			foreach($list as $each ) {
				
				if($each[$key] === $value ) {
					
						// Return index
						$found = true;
						
						break;
						
				}
				
				$i++;
			}
	
		return $found === true ? $list[$i] : $found;
	}
 	


}
