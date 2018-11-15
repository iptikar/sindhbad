<?php

// Require connection 
require '../controller/connection.php';


class Sellers {
	
	
		public static function createCompanySellerModel() {
			
			// Get the connection
			$db = Database::getInstance();

			// Get the instance of connection

			$mysqli = $db->getConnection();

			// Coumn required for seller and individual
			/* Column required 
			 * 
			 * country
			 * city
			 * state_region_province,
			 * post_zip_code,
			 * land_line_no,
			 * nationality,
			 * emirate_id_no,
			 * unique_business_id,
			 * website,
			 * address
			 * document
			 * */
			
			// Table  name 
			$tablename = 'seller_as_company';
			
			
			// Columns that is required 
			/*
			 * business_name,
			 * legal_form
			 * nationality,
			 * established,
			 * expiry_date
			 * company_type,
			 * tax_no,
			 * registration_no,
			 * country,
			 * city,
			 * telephone,
			 * mobile_no,
			 * website,
			 * latitude,
			 * longitude,
			 * address,
			 * unique_business_id,
			 * seller-type
			 * document
			 * seller_email
			 * 
			 * */
			// Writing sql to create table 
			$sql = "CREATE TABLE IF NOT EXISTS $tablename(
				id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				business_name char(225) not null,
				legal_form char(150) not null,
				nationality char(50) not null,
				established date not null,
				expiry_date date not null,
				company_type char(50) not null,
				tax_no char(75) not null,
				registration_no char(75) null,
				country char(40) not null,
				city char(40) not null,
				telephone char(50) not null,
				mobile_no char(50) not null,
				website varchar(75) not null,
				latitude DECIMAL(10, 8),
				longitude DECIMAL(11, 8),
				address VARCHAR (150) NOT NULL,
				unique_business_id char(50) UNIQUE KEY NOT NULL,
				seller_type char(50) NOT NULL,
				document CHAR (50) null,
				seller_email VARCHAR(225) UNIQUE KEY,
				FOREIGN KEY (seller_email) REFERENCES seller(email)
				)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
                    
                // Execute the code 
                if(!$mysqli->query($sql)) {
					
					return $mysqli->error;
				}
                
				
			}
		
		
		public static function createIndividualSellerModel() {
			
			// Get the connection
			$db = Database::getInstance();

			// Get the instance of connection

			$mysqli = $db->getConnection();

			// Coumn required for seller and individual
			/* Column required 
			 * 
			 * country
			 * city
			 * state_region_province,
			 * post_zip_code,
			 * land_line_no,
			 * nationality,
			 * emirate_id_no,
			 * unique_business_id,
			 * website,
			 * address
			 * document
			 * */
			
			// Table  name 
			$tablename = 'seller_as_individual';
			
			
			// Columns that is required 
			/*
			 * business_name,
			 * legal_form
			 * nationality,
			 * established,
			 * expiry_date
			 * company_type,
			 * tax_no,
			 * registration_no,
			 * country,
			 * city,
			 * telephone,
			 * mobile_no,
			 * website,
			 * latitude,
			 * longitude,
			 * address,
			 * unique_business_id,
			 * seller-type
			 * document
			 * seller_email
			 * 
			 * */
			// Writing sql to create table 
			$sql = "CREATE TABLE IF NOT EXISTS $tablename(
				id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				 country CHAR(50) NOT NULL,
				 city CHAR (50) NOT NULL,
				 state_region_province CHAR (50) NOT NULL,
				 post_zip_code INT(20) NOT NULL,
				 land_line_no CHAR(20) NULL,
				 nationality CHAR(30) NOT NULL,
				 emirate_id_no CHAR(50) NOT NULL,
				 unique_business_id CHAR(50) NOT NULL,
				 website VARCHAR(100) NULL,
				 address VARCHAR(225) NOT NULL,
				 document CHAR(50) NOT NULL,
				 seller_email VARCHAR(225) UNIQUE KEY,
				FOREIGN KEY (seller_email) REFERENCES seller(email)
				)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
                    
                // Execute the code 
                if(!$mysqli->query($sql)) {
					
					return $mysqli->error;
				}
                
				
			}
		
	
	
	}
	
	
echo Sellers::createCompanySellerModel(); 
echo Sellers::createIndividualSellerModel();

