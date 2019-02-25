<?php

class Products {
	
    public static function GetProducts()
    
    {
                
                    // Get the connection
        $db = Database::getInstance();
                    
        // Get the instance of connection
                    
        $mysqli = $db->getConnection();
            
        // Sql
        $tablename = 'product_catalogs';
                    
        // Procedure name
        $proceurename = 'selectAllProductByEmail';
                    
        $requiredColums = 'id, sku, name, regular_price, avaibility';
        
        
        // Seller email 
        $seller_email = $_SESSION['3vmigUCQdJGRrvG-username'];
        
        // Where clause
        $where = "WHERE seller_email = '$seller_email'";
                    
        $orderby = 'ORDER BY id DESC';
                    
        return SelectStoreProcedure::SelectRecordsByStoreProcedure($mysqli, $tablename, $proceurename, $requiredColums, $where, $orderby);
    }
   
	
	/* Get product by sku and id */
	public function GetProductById($id, $sku) {
		
		// See if sku and product id set 
		if( isset ($_GET[$id]) && isset($_GET[$sku])) {
			
			// Get the id sku 
			$id = urldecode($_GET[$id]);
				
			// Get sku 
			$sku = urldecode($_GET[$sku]);


			// Set the result
			// Get connectio n
			// Get the connection
			$db = Database::getInstance();

			// Get the instance of connection

			$mysqli = $db->getConnection();

			// Get the connection
			$id = $mysqli->real_escape_string($id);
			$sku = $mysqli->real_escape_string($sku);
			
			// Seller email 
			$seller_email = $_SESSION['3vmigUCQdJGRrvG-username'];
        
			
			// Sql
			$tablename = 'product_catalogs';
			

			// Procedure name
			$proceurename = 'GetProductById';
			
			//20180929DDE2
			// Order id must be set
			
			$requiredColums = 'product_catalogs.id,
								product_catalogs.seller_email,
								product_catalogs.name,
								product_catalogs.sku,
								product_catalogs.category,
								product_catalogs.category_id,
								product_catalogs.discription,
								product_catalogs.short_discription,
								product_catalogs.avaibility_from,
								product_catalogs.avaibility_to,
								product_catalogs.regular_price,
								product_catalogs.special_price,
								product_catalogs.product_condition,
								product_catalogs.items_available,
								product_catalogs.avaibility,
								product_catalogs.supplier_sku,
								product_catalogs.customer_email,
								product_catalogs.product_unite,
								product_catalogs.unite_amount,
								product_catalogs.delivery_servic,
								product_catalogs.delivery_period,
								product_catalogs.shipping_cost,
								product_catalogs.seller_note,
								product_catalogs.warranty,
								product_catalogs.specifications_key,
								product_catalogs.specifications_value,
								product_catalogs.product_article_html,
								product_catalogs.meta_title,
								product_catalogs.meta_keywords,
								product_catalogs.meta_description,
								product_catalogs.images,
								product_catalogs.minimun_order,
								product_categlog_attributes.youtube_link,
								product_categlog_attributes.facebook_link,
								product_categlog_attributes.web_link';

			$where = "WHERE $tablename.id = '$id' AND $tablename.sku = '$sku'";

			// Order By Clause
			$orderby = '';
			
			$join = "INNER JOIN product_categlog_attributes ON $tablename.id = product_categlog_attributes.id";
			

			return SelectStoreProcedure::SelectRecordsByStoreProcedureWithJoin($mysqli, $tablename, $proceurename, $requiredColums, $where, $orderby, $join);

		}
	}
}
