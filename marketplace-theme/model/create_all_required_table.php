<?php
 
 // Go one steps back and get the controller
 require_once('../controller/controller.php');
 

 class CreateModles extends MarketPlace {
	 
	 public function CrateAllRequiredTables() {
			
			/* Get the connection */
			$mysqli  =  $this->Connection();
			
			/*Table name */
			$tablename  =  'users'];
			
			/* Writing Sql*/
			$sql  =  "CREATE TABLE IF NOT EXISTS $tablename(
				
				id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				username VARCHAR(16) NOT NULL,
				email VARCHAR(225) UNIQUE KEY,
				created_at DATETIME,
				usertype VARCHAR(45) NOT NULL,
				ip_address VARCHAR(45) NOT NULL,
				firstname VARCHAR(225) NOT NULL,
				lastname VARCHAR(225) NOT NULL,
				middlename VARCHAR(45) NOT NULL,
				dob datetime,
				verified enum('0','1') default '0'
				)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
		
		 
		 /* Run the query to crate the table */
		 if(!$mysqli->query($sql)) {
			 
			 // Return with the error 
			 return $mysqli->error;
			 
			 }
		
		/*Table name */
		$tablename  =  'seller'];
		
		/* Writing Sql*/
			$sql  =  "CREATE TABLE IF NOT EXISTS $tablename(
				
				id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				website VARCHAR(16) NOT NULL,
				email VARCHAR(225) UNIQUE KEY,
				group_id SMALLINT(5),
				store_id smallint(5) NOT NULL,
				create_at datetime,
				update_at datetime,
				prifix VARCHAR(40) NOT NULL,
				firstname VARCHAR(45) NOT NULL,
				middlename VARCHAR(45) NOT NULL,
				lastname VARCHAR(45) Not null,
				gender varchar(10) NOT NULL,
				customer_entitycol VARCHAR(45) NOT NULL,
				customer_type varchar(20) NOT NULL,
				suffix VARCHAR(225) NOT NULL,
				DOB datetime,
				seller_type varchar(45) not null,
				password_hash VARCHAR(128) NOT NULL,
				password VARCHAR(50) NOT NULL,
				rp_token VARCHAR(128),
				rp_token_created_at datetime,
				default_shipping VARCHAR(225) not null,
				default_billing varchar(225) not null,
				tax_vat_number VARCHAR(150),
				verified enum('0','1') default '0',
				FOREIGN KEY (email) REFERENCES users(email)
				)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
		
		 
		 /* Run the query to crate the table */
		 if(!$mysqli->query($sql)) {
		
		// Return with the error 
		return $mysqli->error;
	 
	 }
	 
	 $tablename  =  'seller_address'];
	 // Creating seller_address tables
	  
	 $sql  =  "CREATE TABLE IF NOT EXISTS $tablename(
						
						id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
						parent_id int(10) NOT NULL,
						created_at DATETIME,
						update_at DATETIME,
						verified enum('0','1') default '0',
						city VARCHAR(50) NOT NULL,
						company VARCHAR(50) NOT NULL,
						contry_id VARCHAR(25) NOT NULL,
						fax VARCHAR(225) NOT NULL,
						firstname VARCHAR(50) NOT NULL,
						middlename VARCHAR(50) NOT NULL,
						lastname VARCHAR(50) NOT NULL,
						postcode varchar(225) not null,
						prefix varchar(45) not null,
						region varchar(45) not null,
						region_id int,
						street text not null,
						suffix varchar(225) not null,
						telephone varchar(150) not null,
						customer_address_entitycol varchar(45) not null,
						customer_address_entitycol1 varchar(45) not null,
						TRN varchar(150) NOT NULL,
						vat_id varchar(225) NOT NULL,
						vat_is_valid enum('0','1') default '0',
						vat_request_id varchar(225) not null,
						vat_request_success int(10),
						FOREIGN KEY (id) REFERENCES seller(id)
	 )ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
	 
		
	 if(!$mysqli->query($sql)) {
			 
			 // Return with the error 
			 return $mysqli->error;
			 
			 }
			 
	// Creating table product_catalogs 
	$tablename  =  'product_catalogs'];
	
	// Sql queries 
	$sql  =  "CREATE TABLE IF NOT EXISTS $tablename(
			id int UNSIGNED AUTO_INCREMENT PRIMARY KEY UNIQUE KEY,
			seller_email varchar(225) not null,
			name varchar(45) not null,
			sku varchar(45) not null,
			category varchar(45) not null,
			sub_category varchar(45) not null,
			discription text not null,
			short_discription text not null,
			avaibility_from datetime,
			avaibility_to datetime,
			regular_price float(50) not null,
			product_condition tinytext not null,
			items_available int(225) not null,
			avaibility varchar(50) not null,
			supplier_sku varchar(150) not null,
			customer_email varchar(150) not null,
			published enum('0','1') default '0',
			phonenumber varchar(45) not null,
			seller_type tinytext not null,
			product_unite tinytext not null,
			size tinytext not null,
			delivery_servic varchar(25) not null,
			delivery_period varchar(50) not null,
			seller_id varchar(225),
			shipping_cost varchar(225) null,
			seller_note text null,
			warranty varchar(45) not null,
			specifications text null,
			product_article_html text null,
			pryority int(50) null,
			meta_title text not null,
			meta_keywords text not null,
			meta_description text not null,
			FOREIGN KEY (seller_email) REFERENCES seller(email)
			
			)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
			
			if(!$mysqli->query($sql)) {
			 
			 // Return with the error 
			 return $mysqli->error;
			 
			 }
			 
			 $tablename  =  "product_categlog_attributes";
			 /* Creating table call product_categlog_attributes */
			 $sql  =  "CREATE TABLE IF NOT EXISTS $tablename(
				
				id int UNSIGNED AUTO_INCREMENT PRIMARY KEY UNIQUE KEY,
				product_id int unique key,
				reviews text null,
				tag varchar(225) null,
				youtube_link varchar(225) null,
				facebook_link varchar(225) null,
				web_link varchar(225) null,
				rate int (10) null,
				location_latitude float not null,
				location_longititude float not null,
				images varchar(225) not null,
				FOREIGN KEY (id) REFERENCES product_catalogs(id)
			
			)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
			
			
			if(!$mysqli->query($sql)) {
			 
			 // Return with the error 
			 return $mysqli->error;
			 
			 }
			 
			 
			 // Creating buyer table 
			 
			 $tablename  =  "buyer";
			 /* Creating table call product_categlog_attributes */
			 $sql  =  "CREATE TABLE IF NOT EXISTS $tablename(
				
				id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				website VARCHAR(16) NOT NULL,
				email VARCHAR(225) UNIQUE KEY,
				group_id SMALLINT(5),
				store_id smallint(5) NOT NULL,
				create_at datetime,
				update_at datetime,
				prifix VARCHAR(40) NOT NULL,
				firstname VARCHAR(45) NOT NULL,
				middlename VARCHAR(45) NOT NULL,
				lastname VARCHAR(45) Not null,
				gender varchar(10) NOT NULL,
				customer_entitycol VARCHAR(45) NOT NULL,
				customer_type varchar(20) NOT NULL,
				suffix VARCHAR(225) NOT NULL,
				DOB datetime,
				password_hash VARCHAR(128) NOT NULL,
				password VARCHAR(50) NOT NULL,
				rp_token VARCHAR(128),
				rp_token_created_at datetime,
				default_shipping VARCHAR(225) not null,
				default_billing varchar(225) not null,
				verified enum('0','1') default '0',
				FOREIGN KEY (email) REFERENCES users(email)
				)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
		
			
			
			if(!$mysqli->query($sql)) {
			 
			 // Return with the error 
			 return $mysqli->error;
			 
			 }
			 
			 
			 
			 // Creating buyer address table 
			 $tablename  =  'buyer_address';
	 // Creating seller_address tables
	  
	 $sql  =  "CREATE TABLE IF NOT EXISTS $tablename(
						
						id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
						parent_id int(10) NOT NULL,
						created_at DATETIME,
						update_at DATETIME,
						verified enum('0','1') default '0',
						city VARCHAR(50) NOT NULL,
						contry_id VARCHAR(25) NOT NULL,
						fax VARCHAR(225) NOT NULL,
						firstname VARCHAR(50) NOT NULL,
						middlename VARCHAR(50) NOT NULL,
						lastname VARCHAR(50) NOT NULL,
						postcode varchar(225) not null,
						prefix varchar(45) not null,
						region varchar(45) not null,
						region_id int,
						street text not null,
						suffix varchar(225) not null,
						telephone varchar(150) not null,
						customer_address_entitycol varchar(45) not null,
						customer_address_entitycol1 varchar(45) not null,
						FOREIGN KEY (id) REFERENCES buyer(id)
	 )ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
	 
		
	 if(!$mysqli->query($sql)) {
			 
			 // Return with the error 
			 return $mysqli->error;
			 
			 }
		
			 
			 
			 
 }
 
}

$obj  =  new CreateModles();

echo $obj->CrateAllRequiredTables();
 
?>
