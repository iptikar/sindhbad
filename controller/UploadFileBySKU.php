<?php

class UploadFileBySKU {
	
		public static function UploadProductImage(MarketPlace $MarketPlace, $sku, $imagename) {
			
			// Get the connection
        $db = Database::getInstance();
                    
        // Get the instance of connection
                    
        $mysqli = $db->getConnection();
            
        // Sql
        
        // Post Sku
        if(!isset($_POST[$sku]) && !isset($_FILES[$imagename])) {
				
				// Return false;
				return false;
		}
		
		// Post request 
		$sku = $_POST[$sku];
		$file = $_FILES[$imagename];
		
		// Get all the details about hte file 
		$name = $file['name'];
		$type = $file['type'];
		$size = $file['size'];
		$tmp_file = $file['tmp_name'];
		
		$filetypes = ['image/jpg', 'image/jpeg', 'image/bmp', 'image/png', 'image/gif'];
		
		// Check if all file set is valid
        if (!in_array($type, $filetypes)) {
            
            // Return the message
            return 'Only jpg, jpeg, bmp, png, gif files are supported.';
        }
        
        // Check the size 
        if($size > 512000) {
			
			return 'File size exceeds only 512000 KB';
				
		}
		
	
		// Seller email 
        $seller_email = $_SESSION['3vmigUCQdJGRrvG-username'];
        
		$tablename = 'product_catalogs';
                    
        // Procedure name
        $proceurename = 'SelectProductImage';
                    
        $requiredColums = 'images';
        
        
        // Where clause
        $where = "WHERE seller_email = '$seller_email' AND sku = '$sku'";
                    
        $orderby = '';
        
        
		// Find the image 
		$getimages =  SelectStoreProcedure::SelectRecordsByStoreProcedure($mysqli, $tablename, $proceurename, $requiredColums, $where, $orderby)['result'][0][0]['images'];
			
		
		
         
        // Close stmt
        
        /* Get the random character */
		$randchar = chr(rand(97, 122));
		
		/* get the random number */
		$number = rand(1, 100000);
		
		$explodfname = explode('.', $name);
		
		$newfilename = round(microtime(true)) .$number.'.' . end($explodfname);
        
        // File in array 
        $fileInArray = json_decode($getimages, true);
        
        // Push new file to the iamge 
        array_push($fileInArray, $newfilename);
        
        // Again encode to json 
        $againEnToJson = json_encode($fileInArray);
        
        
        // Update db 
        $sql = "UPDATE $tablename SET images = '$againEnToJson' WHERE seller_email = '$seller_email' AND sku = '$sku'";
        
        // Run the query 
        if(!$mysqli->query($sql)) {
			
				// Return the error 
				return $mysqli->error;
			}
			
		// Upload the file 
		$directory = '../../img/product-images';
		
		if(!move_uploaded_file($tmp_file, "$directory/$newfilename")) {
			
				// Return error 
				return 'Can not upload the the file !';
		}
		
		return true;
		
		}
	
	}
