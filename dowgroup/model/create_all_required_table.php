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
	  
	
			 
 }
 
}

$obj  =  new CreateModles();

echo $obj->CrateAllRequiredTables();
 
?>
