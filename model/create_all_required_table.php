<?php
 
 // Go one steps back and get the controller
 require_once('../controller/controller.php');
 
 date_default_timezone_set ('Asia/Dubai');

 class CreateModles extends MarketPlace {
	 
	 public function CrateAllRequiredTables() {
			
			/* Get the connection */
			$mysqli  =  $this->Connection();
			
			
		
		/*Table name */
		$tablename  =  'seller';
		
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
				verified enum('0','1') default '0'
				)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
		
		 
		 /* Run the query to crate the table */
		 if(!$mysqli->query($sql)) {
		
		// Return with the error 
		return $mysqli->error;
	 
	 }
	 
	 $tablename  =  'seller_address';
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
	$tablename  =  'product_catalogs';
	
	// Sql queries 
	$sql  =  "CREATE TABLE IF NOT EXISTS $tablename(
			id int UNSIGNED AUTO_INCREMENT PRIMARY KEY UNIQUE KEY,
			seller_email varchar(225) not null,
			name varchar(45) not null,
			sku varchar(45) not null,
			category varchar(45) not null,
			category_id int(70) not null,
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
			unite_amount tinytext not null,
			size tinytext not null,
			delivery_servic varchar(25) not null,
			delivery_period varchar(50) not null,
			seller_id varchar(225),
			shipping_cost varchar(225) null,
			seller_note text null,
			warranty varchar(45) not null,
			specifications_key text null,
			specifications_value text null,
			product_article_html text null,
			pryority int(50) null,
			meta_title text not null,
			meta_keywords text not null,
			meta_description text not null,
			images varchar(225) not null,
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
				verified enum('0','1') default '0'
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
	 
	 
	 $tablename = "chat_message";
	 // Creating table for purchaser message 
	$sql  = "CREATE TABLE IF NOT EXISTS $tablename(
	
										id int auto_increment PRIMARY KEY UNIQUE KEY,
										sender VARCHAR(225) NOT NULL,
										receiver VARCHAR(225) NOT NULL,
										receiver_type tinyint NOT NULL,
										sender_type tinyint NOT NULL,
										message_date DATETIME,
										sku VARCHAR(150) NOT NULL,
										ip VARCHAR(30) NOT NULL,
										message text not null,
										seen enum('0','1') default '0'
)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";
	
	
	
	// If query failed 
	// Throw the error 	
	 if(!$mysqli->query($sql)) {
			 
			 // Return with the error 
			 return $mysqli->error;
			 
			 }
	
	// Creting table user buyer and seller address entities 
	$table_name = 'buyer_address_details';
	
	// Create sql query 
	// Create sql query 
	$sql = "CREATE TABLE IF NOT exists $table_name(id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			country varchar(45) not null,
			city char(40) not null,
			email varchar(45) not null,
			area varchar(80) null,
			street_no char(100) not null,
			building_no varchar(45) not null,
			floor_no char(45) not null,
			landmark varchar(150) not null,
			location_type char(30) not null,
			mobile_no int(25) not null,
			land_line_no int(25) null,
			latitude float not null,
			longititude float not null,
			shipping_note text null,
			document_link varchar(150) null,
			FOREIGN KEY (id) REFERENCES buyer(id)
	)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";


	// Execute the command 
	if(!$mysqli->query($sql)) {
		
			// Throw error msg 
			return $mysqli->error;
		}
		
	
	// Create buyer address details 
	$tablename = 'seller_address_details';
	
	
	// Create sql query 
	$sql = "CREATE TABLE IF NOT exists $tablename(id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			country varchar(45) not null,
			city char(40) not null,
			email varchar(45) not null,
			area varchar(80) null,
			street_no char(100) not null,
			building_no varchar(45) not null,
			floor_no char(45) not null,
			landmark varchar(150) not null,
			location_type char(30) not null,
			mobile_no int(25) not null,
			land_line_no int(25) null,
			latitude float not null,
			longititude float not null,
			shipping_note text null,
			document_link varchar(150) null,
			FOREIGN KEY (id) REFERENCES seller(id)
	)ENGINE  =  INNODB DEFAULT CHARSET =  utf8";


	// Execute the command 
	if(!$mysqli->query($sql)) {
		
			// Throw error msg 
			return $mysqli->error;
		}
		
	// Create table to tracker the buyer recently visited proudct 
	
	// Table name 
	$tablename = 'recently_viewed_product';
	
	$sql = "CREATE TABLE IF NOT EXISTS $tablename(
		
			id int AUTO_INCREMENT PRIMARY KEY UNIQUE KEY,
			email VARCHAR(225),
			seen datetime not null,
			product_sku char(150) not null,
			product_category_id int(45) not null,
			FOREIGN KEY (email) REFERENCES buyer(email)
			)ENGINE = INNODB DEFAULT CHARSET = utf8";
	
	
	// Run the sql query 
	if(!$mysqli->query($sql)) {
			 
		 // Return with the error 
		 return $mysqli->error;
			 
	}
	
	// Table for orderdetails 
	$tablename = 'orders';
	
	// Run the sql 
	$sql = "CREATE TABLE IF NOT EXISTS $tablename
			( 
				id int AUTO_INCREMENT PRIMARY KEY UNIQUE KEY,
				order_id VARCHAR(150) UNIQUE KEY ,
				buyer_email VARCHAR(50) NOT NULL,
				ipv4_address INT UNSIGNED NOT NULL,
				ipv6_address BINARY(16) NULL,
				tax_amount int NOT NULL,
				tax_persentage decimal,
				discount_percentage decimal,
				discount int NULL,
				totalqty int(100) NOT NULL,
				totalamount int not null,
				currency char(10) NOT NULL,
				shipping_cost VARCHAR (100) NOT NULL,
				status char(20) NOT NULL,
				shipping_address TEXT NOT NULL,
				billing_address TEXT NOT NULL,
				purchase_date DATETIME,
				purchase_point char(200) NOT NULL,
				customer_notes TEXT NULL,
				payment char(50) NOT NULL
				
			)ENGINE = INNODB DEFAULT CHARSET = utf8";
	
	
	// Run the sql query 
	if(!$mysqli->query($sql)) {
			 
		 // Return with the error 
		 return $mysqli->error;
			 
	}
	
	
	// Table name 
	$tablename = 'orderdetails';
	
	// Creating order tables 
	$sql = "CREATE TABLE IF NOT EXISTS $tablename(
						
						id int AUTO_INCREMENT PRIMARY KEY UNIQUE KEY,
						order_id VARCHAR(150) ,
						created_at DATETIME,
						update_at DATETIME,
						buyer_email VARCHAR(50) NOT NULL,
						seller_email VARCHAR(50) NOT NULL,
						sku char(100) NOT NULL,
						product_id int(50) NOT NULL,
						prodct_name VARCHAR(200) NOT NULL,
						qty int(50) NOT NULL,
						price int(50) NOT NULL,
						totalamount int(100) NOT NULL,
						images VARCHAR(225) NOT NULL,
						discount int(50) NOT NULL,
						discount_percentage CHAR(10),
						FOREIGN KEY (order_id) REFERENCES orders(order_id)
						)ENGINE = INNODB DEFAULT CHARSET = utf8";
	
	// Run the sql query 
	if(!$mysqli->query($sql)) {
			 
		 // Return with the error 
		 return $mysqli->error;
			 
	}
	
	
	
	// Adding full text index to product catalogs table to name column 
	
	$sql = "ALTER TABLE product_catalogs ADD FULLTEXT(name)";
	
	// Run the query 
	if(!$mysqli->query($sql)) {
		
			return $mysqli->error;
		}
	
	// Adding in order table weather coloun is seen or not ENUM
	 
	$sql = "ALTER TABLE orders ADD seen ENUM('0','1') default '0' after payment";
	
	if(!$mysqli->query($sql)) {
			 
			 // Return with the error 
			 return $mysqli->error;
			 
	}
	
	
	// Alter table 'product_catalogs'; andd mininum_order
	// Adding speical price 
	$sql = "ALTER TABLE orders ADD product_id INT(15) NOT NULL AFTER id";
	
	if(!$mysqli->query($sql)) {
			 
			 // Return with the error 
			 return $mysqli->error;
			 
	}
	
	// Alter table 'product_catalogs'; andd mininum_order
	// Adding speical price 
	$sql = "ALTER TABLE buyer_address_details CHANGE mobile_no mobile_no char(18) not null";
	
	if(!$mysqli->query($sql)) {
			 
			 // Return with the error 
			 return $mysqli->error;
			 
	}
	
	// Alter table changing mobile number filed to char 
	// Alter table 'product_catalogs'; andd mininum_order
	// Adding speical price 
	$sql = "ALTER TABLE product_catalogs add minimun_order char(225) not null";
	
	if(!$mysqli->query($sql)) {
			 
			 // Return with the error 
			 return $mysqli->error;
			 
	}
	
	
	
	
	// Adding speical price 
	$sql = "ALTER TABLE product_catalogs change special_price special_price double not null";
			 
		
	if(!$mysqli->query($sql)) {
			 
			 // Return with the error 
			 return $mysqli->error;
			 
	}
	
	
	
	// Adding speical price 
	$sql = "ALTER TABLE product_catalogs add special_price int(50) not null after regular_price";
			 
		
	if(!$mysqli->query($sql)) {
			 
			 // Return with the error 
			 return $mysqli->error;
			 
	}
	
	
	$sql = "ALTER TABLE seller change store_id store_id varchar(150) not null";
			 
		
	if(!$mysqli->query($sql)) {
			 
			 // Return with the error 
			 return $mysqli->error;
			 
	}
	
			 
	$sql = "ALTER TABLE seller ADD seller_id varchar(150) not null after store_id";
			 
		
	if(!$mysqli->query($sql)) {
			 
			 // Return with the error 
			 return $mysqli->error;
			 
	}
	
	
	
	
			 
		
		
			 
	
		
	
	
	
			 
 }
 
}

$obj  =  new CreateModles();

echo $obj->CrateAllRequiredTables();
 
?>
