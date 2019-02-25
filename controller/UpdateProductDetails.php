<?php

class UpdateProductDetails {
	
			
	public static function UpdatingNow(MarketPlace $MarketPlace)
    {
        
        // If form not post then
        if (!isset($_POST['submit'])) {
           
            return false;
        }
        
        
        $product_name = $_POST['product-name'];
        $discription = $_POST['discription'];
        $short_discription = $_POST['short-discription'];
        $date_available_from = $_POST['date-available-from'];
        $date_available_to = $_POST['date-available-to'];
        $category = $_POST['category'];
        $regular_price = $_POST['regular-price'];
        $special_price = $_POST['special-price'];
        $special_price_from = $_POST['special-price-from'];
        $special_price_to = $_POST['special-price-to'];
        $items_available = $_POST['items-available'];
        
        
        
        
        $avaibility = $_POST['avaibility'];
        $min_order = $_POST['min-order'];
        $tax_class = $_POST['tax-class'];
        $shipping_cost = $_POST['shipping_cost'];
        $status = $_POST['status'];
        $unite_amount = $_POST['unite-amount'];
        $product_unite = $_POST['product-unite'];
        $product_condition = $_POST['product-condition'];
        
        $warrenty = $_POST['warrenty'] ?? '';
        $weblink = $_POST['weblink'] ?? '';
        $youtube_link = $_POST['youtube-link'] ?? '';
        $facebook_link = $_POST['facebook-link'] ?? '';
        $saller_note = $_POST['saller-note'] ?? '';
        
        $product_articles_html = $_POST['product-articles-html'] ?? '';
        $meta_title = $_POST['meta_title'] ?? '';
        $meta_keywords = $_POST['meta_keywords'] ?? '';
        $meta_description = $_POST['meta_description'] ?? '';
        
        $spcification_title = $_POST['spcification-title'];
        $spcification_value = $_POST['spcification-value'];
        
        
        $delivery_service = $_POST['delivery-service'] ?? '' ;
        
        
        
        //echo json_encode($spcification_title);
        
        
        
        // Nmae
        if (strlen($product_name) < 2 || strlen($product_name) > 150) {
            
            // Return the message
            return $MarketPlace->JSErrorMsg('<i class = "fa fa-info"></i>Please enter product name.');
        }
        
        
        // Check string length
        if (strlen($discription) < 2 || strlen($discription) > 2500) {
            return $MarketPlace->JSErrorMsg('Please enter product discription.');
        }
        
        
    
        
        // Check short discription
        if (strlen($short_discription) < 2 || strlen($short_discription) > 1500) {
            return $MarketPlace->JSErrorMsg('Please enter product short discription.');
        }
        
        // Date available from
        $reg = '/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/';
        
        
        // discription
        $vpn = $MarketPlace->validateDate($date_available_from, 'Y-m-d');
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $MarketPlace->JSErrorMsg("Please enter valid date available from.");
        }
        
        
        
        // discription
        $vpn = $MarketPlace->validateDate($date_available_to, 'Y-m-d');
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $MarketPlace->JSErrorMsg("Please enter valid date available to.");
        }
        
        // available from must be less then available to
        if ($date_available_from >= $date_available_to) {
            return $MarketPlace->JSErrorMsg("Please enter valid date avability range.");
        }
        
        
        // Category need to select
        if ($category === '') {
            return $MarketPlace->JSErrorMsg("Please select category.");
        }
        
        
        // Regular price
        $reg = '/^[0-9]{1,1000}$/';
        
        // discription
        $vpn = $MarketPlace->ErrorMsg($reg, $regular_price, $MarketPlace->JSErrorMsg('Please enter valid regular price.'));
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $vpn;
        }
        
        // Special Price
        $vpn = $MarketPlace->ErrorMsg($reg, $special_price, $MarketPlace->JSErrorMsg('Please enter valid special price.'));
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $vpn;
        }
        
        
        // IF speical price exist then
        if ($special_price !== '') {
            
            // Must be less then regular price
            if ($special_price > $regular_price) {
                
                // Return the message
                return $MarketPlace->JSErrorMsg("Special prie must be less then regular price.");
            }
        }
        
        // If special price and regular price is different
        // Then date range is required for the offer
        
        if ($special_price !== $regular_price) {
            
        // Check it's regression
            // discription
            $vpn = $MarketPlace->validateDate($special_price_from, 'Y-m-d');
        
        
            // If variable is not returning true
            if ($vpn !== true) {
                // Return the message
                return $MarketPlace->JSErrorMsg("Please speical price from.");
            }
        
        
            // Check it's regression
            // discription
            $vpn = $MarketPlace->validateDate($special_price_to, 'Y-m-d');
        
        
            // If variable is not returning true
            if ($vpn !== true) {
                // Return the message
                return $MarketPlace->JSErrorMsg("Please enter speical price to.");
            }
        
        
        
            // Check the date difference
            if ($special_price_from >= $special_price_to) {
                return $MarketPlace->JSErrorMsg("Please, Special price starting date must be lett then ending date.");
            }
        }
        
        // Items avaialbe
        // Product discription
        $reg = '/^[0-9]{1,10000}$/';
        
        // discription
        $vpn = $MarketPlace->ErrorMsg($reg, $items_available, $MarketPlace->JSErrorMsg('Please enter item available.'));
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $vpn;
        }
        
        
        
        
        // Avaibility
        if ($avaibility === '') {
            
            // Return js error message
            return $MarketPlace->JSErrorMsg('Please select availibility.');
        }
        
        
        // Minimimu order
        $reg = '/^[0-9]{1,10000}$/';
        
        // discription
        $vpn = $MarketPlace->ErrorMsg($reg, $min_order, $MarketPlace->JSErrorMsg('Please enter minimium order in quantity/numbers.'));
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $vpn;
        }
        
        
        
        // Tax class
        if ($tax_class === '') {
            
            // Return js error message
            return $MarketPlace->JSErrorMsg('Please select tax class.');
        }
        
        
        
        // Shipping cost
        
        $reg = '/^[a-zA-Z0-9 ]{1,50}$/';
        
        // discription
        $vpn = $MarketPlace->ErrorMsg($reg, $shipping_cost, $MarketPlace->JSErrorMsg('Please enter shipping cost'));
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $vpn;
        }
        
        
        
        // Status
        if ($status === '') {
            
            // Throw the message
            return $MarketPlace->JSErrorMsg('Please select status.');
        }
        
        
        
        // Unite amount
        
        $reg = '/^[0-9]{1,5000}$/';
        
        // discription
        $vpn = $MarketPlace->ErrorMsg($reg, $unite_amount, $MarketPlace->JSErrorMsg('Please enter unite amount.'));
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $vpn;
        }
        
        // product_unite
        if ($product_unite === '') {
            
            // Throw the message
            return $MarketPlace->JSErrorMsg('Please select product unite.');
        }
        
        
        
        // Product condition
        if ($product_condition === '') {
            
            // Select product condition
            return $MarketPlace->JSErrorMsg('Please select product condition.');
        }
       
         
        // Warrenty
        $reg = '/^[a-zA-Z0-9 ]{2,50}$/';
        
        // discription
        $vpn = $MarketPlace->ErrorMsg($reg, $warrenty, $MarketPlace->JSErrorMsg('Please enter warrenty.'));
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $vpn;
        }
        
        // Delivery service
        if ($delivery_service === '') {
            
            // Error
            return $MarketPlace->JSErrorMsg('Please select delivery service.');
        }
        
        
        
        // Cheking is product specification is in array
        
        $reg = '/^[a-zA-Z0-9\-,+ ]{2,1000}$/';
        
        foreach ($spcification_title as $key => $value) {
            
            
            // If value exists
            if ($value !== '') {
            
                // Validate
                $vpn = $MarketPlace->ErrorMsg($reg, $value, $MarketPlace->JSErrorMsg('Please enter valid specification title.'));
            
                // Break the loop
                if ($vpn !== true) {
                
                // Return message
                    return $vpn;
                
                    // Break
                    break;
                }
            }
        }
        
        
        foreach ($spcification_value as $key => $value) {
            
        // If value exists
            if ($value !== '') {
            
                // Validate
                $vpn = $MarketPlace->ErrorMsg($reg, $value, $MarketPlace->JSErrorMsg('Please enter valid specification value.'));
            
                // Return vpn
                if ($vpn !== true) {
                    
                    // Return message
                    return $vpn;
                    
                    // Break the loop
                    break;
                }
            }
        }
        
        
        
        
        // If web link is present
        if ($weblink !== '') {
            
            // Valadation using filter var
            if (!filter_var($weblink, FILTER_VALIDATE_URL)) {
                    
                    // Return the message
                return $MarketPlace->JSErrorMsg('Please enter valid web url link.');
            }
        }
        
        
        // Youtube link
        if ($youtube_link !== '') {
            
            // Valadation using filter var
            if (!filter_var($youtube_link, FILTER_VALIDATE_URL)) {
                    
                    // Return the message
                return $MarketPlace->JSErrorMsg('Please enter valid youtube link.');
            }
        }
        
        
        // Facebook link
        
        if ($facebook_link !== '') {
            
            // Valadation using filter var
            if (!filter_var($facebook_link, FILTER_VALIDATE_URL)) {
                    
                    // Return the message
                return $MarketPlace->JSErrorMsg('Please enter valid facebook link.');
            }
        }
        
        // If seller note contain any things
        if ($saller_note !== '') {
            
            // Check with validation
            if (strlen($saller_note) < 5) {
                $MarketPlace->JSErrorMsg('Please enter valid seller note.');
            }
        }
        
       
        // Reassign the value and then with json encode
        $spcification_title = json_encode($spcification_title);


        // Check it's key if not empty


        // Reassign the value and then with json encode
        $spcification_value = json_encode($spcification_value);

        
        
        
        if ($meta_title !== '') {
            
        // Validate
            // Regression
            $reg = '/^[a-zA-Z0-9\- ]{30,70}$/';
        
            // Check product name
            $vpn = $MarketPlace->ErrorMsg($reg, $meta_title, $MarketPlace->JSErrorMsg('</i>Please enter valid meta title.'));
        
        
            // If variable is not returning true
            if ($vpn !== true) {
            
            // Return message
                return $vpn;
            }
        }
        
        
        // Check meta key word
        if ($meta_keywords !== '') {
            
            // Validate
            // Regression
            $reg = '/^[a-zA-Z0-9\- ]{50,300}$/';
        
            // Check product name
            $vpn = $MarketPlace->ErrorMsg($reg, $meta_title, $MarketPlace->JSErrorMsg('</i>Please enter valid meta keyworld 50-300 character.'));
        
        
            // If variable is not returning true
            if ($vpn !== true) {
            
            // Return message
                return $vpn;
            }
        }
        
        // Meta discritption
        if ($meta_description !== '') {
            
                // Validate
            // Regression
            $reg = '/^[a-zA-Z0-9\- ]{50,300}$/';
        
            // Check product name
            $vpn = $MarketPlace->ErrorMsg($reg, $meta_title, $MarketPlace->JSErrorMsg('</i>Please enter valid meta discription 50-300 character.'));
        
        
            // If variable is not returning true
            if ($vpn !== true) {
            
            // Return message
                return $vpn;
            }
        }


        // Though we have validated all the code
        
        // Using htmlspecialchars for all varaiables
        
        // Block 1
        $product_name 			= 		htmlspecialchars($product_name);
        $discription 			= 		htmlspecialchars($discription);
        $short_discription  	= 		htmlspecialchars($short_discription);
        $date_available_from 	= 		htmlspecialchars($date_available_from);
        $date_available_to 		= 		htmlspecialchars($date_available_to);
        $category 				= 		htmlspecialchars($category);
        
        
        // Block 2
     
        $regular_price 			= 		htmlspecialchars($regular_price);
        $special_price 			= 		htmlspecialchars($special_price);
        $special_price_from 	= 		htmlspecialchars($special_price_from);
        $special_price_to 		= 		htmlspecialchars($special_price_to);
        $items_available 		= 		htmlspecialchars($items_available);
        $avaibility 			= 		htmlspecialchars($avaibility);
        
        
        // Block 3
        $min_order 				= 		htmlspecialchars($min_order);
        $tax_class 				= 		htmlspecialchars($tax_class);
        $shipping_cost 			= 		htmlspecialchars($shipping_cost);
        $status 				= 		htmlspecialchars($status);
        $unite_amount 			= 		htmlspecialchars($unite_amount);
        $product_unite 			= 		htmlspecialchars($product_unite);
        $product_condition 		= 		htmlspecialchars($product_condition);
       
       
       
       
       
        $warrenty 				= 		htmlspecialchars($warrenty);
        
        
        // Block 4
        $weblink 				= 		htmlspecialchars($weblink);
        $youtube_link 			= 		htmlspecialchars($youtube_link);
        $facebook_link 			= 		htmlspecialchars($facebook_link);
        $saller_note 			= 		htmlspecialchars($saller_note);
        
        
        
        $product_articles_html  = 		htmlspecialchars($product_articles_html);
        
        
        
        // Block 5
        $meta_title 			= 		htmlspecialchars($meta_title);
        $meta_keywords 			= 		htmlspecialchars($meta_keywords);
        $meta_description 		= 		htmlspecialchars($meta_description);
        
        
        $spcification_title 	= 		htmlspecialchars($spcification_title);
        $spcification_value 	= 		htmlspecialchars($spcification_value);
        
        
       
        
        $delivery_service 		= 		htmlspecialchars($delivery_service) ;
        $delivery_period		= htmlspecialchars($_POST['delivery_period']) ;
        
        // Category name and id comming in these formate
        // {{category_name}}#2e3615a020749{{category_id}}
        $ECNAI = explode($MarketPlace->category_seperator, $category);
        
        // Get the name
        $category_name = $ECNAI[0];
        
        // Get the id
        $category_id = $ECNAI[1];
        
        // Get the connection
		$db = Database::getInstance();
					
		// Get the instance of connection
					
		$mysqli = $db->getConnection();
          
        // Seller email address
        $seller_email = $MarketPlace->SellerSession()->email;
        
        // Suppliers sku
        $supplier_sku = $seller_email;
        
        //echo "All is good while posting ". $_GET['id'];
        
        $id = $_GET['id'];
        $sku = $_GET['sku'];
        
       
        // Writing sql 
        $sql = "UPDATE product_catalogs SET name = ?,
									category = ?,
									category_id = ?,
									discription = ?,
									short_discription = ?,
									avaibility_from = ?,
									avaibility_to = ?,
									regular_price = ?,
									special_price = ?,
									product_condition = ?,
									items_available = ?,
									avaibility = ?,
									supplier_sku = ?,
									customer_email = ?,
									product_unite = ?,
									unite_amount = ?,
									delivery_servic = ?,
									delivery_period = ?,
									shipping_cost = ?,
									seller_note = ?,
									warranty = ?,
									specifications_key = ?,
									specifications_value = ?,
									product_article_html = ?,
									meta_title = ?,
									meta_keywords = ?,
									meta_description = ?,
									minimun_order = ? WHERE sku = ? 
									AND
									seller_email = ? AND id = ?";
									
									
		// Prepare 
		$stmt = $mysqli->prepare($sql);
		
		// Check if things is not fails 
		if(!$stmt) {
			
			return $mysqli->error;
		}
		
		// Bind variables 
				$stmt->bind_param("sssssssssssssssssssssssssssssss",$product_name,
																	$category_name,
																	$category_id,
																	$discription,
																	$short_discription,
																	$date_available_from,
																	$date_available_to,
																	$regular_price,
																	$special_price,
																	$product_condition,
																	$items_available,
																	$avaibility,
																	$supplier_sku,
																	$seller_email,
																	$product_unite,
																	$unite_amount,
																	$delivery_service,
																	$delivery_period,
																	$shipping_cost,
																	$seller_note,
																	$warrenty,
																	$spcification_title,
																	$spcification_value,
																	$product_articles_html,
																	$meta_title,
																	$meta_keywords,
																	$meta_description,
																	$min_order, $sku, $seller_email, $id);

		// Execute 
		if(!$stmt->execute()) {
			
				return $stmt->error;
		}


		// Update another table 
		$tablename = 'product_categlog_attributes';

		$sql1 = "UPDATE $tablename SET
									facebook_link = ?,
									youtube_link = ?,
									web_link = ?,
									location_latitude = ?,
									location_longititude = ? WHERE product_id = ?" ;
												

		// prepare 
		$stmt1 = $mysqli->prepare($sql1);

		 // Bind the all variables
		$stmt1->bind_param("ssssss", $facebook_link, $youtube_link, $weblink, $latitude, $longitude,  $id);
			   

		// Execute 
		if(!$stmt1->execute()) {

			return $stmt1->error; 
		}
		
		// Free resutl 
		$stmt1->free_result();

		// Close stmt 
		$stmt1->close();

		// Free result 
		$stmt->free_result();
		
		// Close 
		$stmt->close();

		// Return ture 
		return true;
    }
}
