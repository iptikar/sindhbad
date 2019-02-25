<?php
class MySQLServer 
{	
		public function SytemConfiguration()
		{		
		
		/* Check zend enginte */
		if(zend_version() < 2)
		{
			/* Error */
			printf("%s \r\n","<div class = 'note alert-denger'><p>To Run the script zend engine minimum 2.0 required.</p></div>");
			
			/* Return false */
			return false;
				
		}
		
		/* Check php version */
		if(phpversion() < 5.5)
		{
		
			/* Error */
			printf("%s \r\n","<div class = 'note alert-denger'><p>To Run the script php engine minimum 5.5 required.<p></div>");
			
			/* Return false */
			return false;
		}
		
		/* Return true */
		return true;
	}
	

		public function mysqliserver()
		{
			
			/* Require database connection */
			require_once 'dbCoonnection-class.php';

			/* Get the connection */
			$mysqliclass = new DbConnection();

			/* Connection */
			$mysqliconnection = $mysqliclass->getConnection();

			/* Return the connection */
			return $mysqliconnection;
		}
		
		public function closeconnection()
		{
			/* Get the connection */
			$connection = $this->mysqliserver();
			
			return $connection->close();
		}
		/* Checking extension */		
		public function CreateRequiredTables()
		{
				/* Run php configuration setting */
				if($this->SytemConfiguration() !== true)
				{
					printf("%s /r/n",$this->SytemConfiguration);
					return false;
				}
				
				/* If user setting new parameter then while inserting */
				/* If user setting paraumeter as sql method */
				/* Then this script will run */				
				if(!in_array('mysqli', get_loaded_extensions()))
				{
						printr("%s /r/n","Mysqli extension could not load.");
						return false;
				}
				
				/* Require database connection */
				require_once 'dbCoonnection-class.php';
				
				/* Get the connection */
				$mysqliclass = $this->mysqliserver();
								
				/* Connection */
				$mysqliconnection = $mysqliclass;
				
				/* Table prifix */				
				$table_prifix = '7add4023a86ad';
				
				/* Creating all required tables */
				$sql = $mysqliconnection->query("CREATE TABLE if not exists product_kettyclothing_kettyclothinge_$table_prifix 
												(
													id int(13) auto_increment PRIMARY KEY,
													productname varchar(225) not null,
													description text not null,
													shortdiscription text not null,
													availabledatefrom varchar(225) not null,
													availabledateto varchar(225) not null,
													sku varchar(255) not null,
													price varchar(225) not null,
													taxclass varchar(225) not null,
													status varchar(225) not null,
													date DATETIME,
													special_price varchar(225) not null,
													available_items varchar(225) not null,
													origin varchar(225) not null,
													material varchar(225) not null,
													p_condition varchar(225) not null,
													style varchar(225) not null,
													season varchar(225) not null,
													product_feature varchar(225) not null,
													productLable varchar(225) not null,
													colors varchar(225) not null,
													sizes varchar(225) not null,
													buttoncolor varchar(225) not null,
													avaibility varchar(225) not null,
													collection date,
													weight varchar(225) not null
													)ENGINE=MyISAM CHARSET = utf8"
												);
				if(!$sql)
				{
						printf("%s /r/n", "Could not create table. ".$mysqliconnection->error);
						return false;
				}
				
				
				$sql = $mysqliconnection->query("CREATE TABLE if not exists users_kettyclothinge_$table_prifix  
												(id int(13) auto_increment PRIMARY KEY,
												fullname varchar(225) not null,
												email varchar(225) not null,
												address varchar(225) not null,
												city varchar(225) not null,
												country varchar(225) not null,
												username varchar(255) not null,
												password varchar(225) not null,
												activated boolean not null,
												date date)ENGINE=MyISAM CHARSET = utf8"
												);
				if(!$sql)
				{
						printf("%s /r/n", "Could not create table. ".$mysqliconnection->error);
						return false;
				}
				
				
				/* While creating paypal tables it will not be like m 
				 * MongoDB work different then mysql you have to create table 
				 * And we are not sure that allwayse same become some field is certain 
				 * Some file may be variable for example if you buy more then on product then 
				 * 
				 * */
				$sql = $mysqliconnection->query("CREATE TABLE if not exists papal_checkout_complete_$table_prifix 
												(id int(13) auto_increment PRIMARY KEY,
												mc_gross varchar(225) not null,
												protection_eligibility varchar(225) not null,
												address_status varchar(225) not null,
												item_number1 varchar(225) not null,
												payer_id varchar(225) not null,
												tax varchar(225) not null,
												address_street varchar(225) not null,
												payment_date DATETIME,
												payment_status varchar(225) not null,
												charset varchar(225) not null,
												address_zip varchar(225) not null,
												mc_shipping varchar(225) not null,
												mc_handling varchar(225) not null,
												first_name varchar(225) not null,
												mc_fee varchar(225) not null,
												address_country_code varchar(225) not null,
												address_name varchar(225) not null,
												notify_version varchar(225) not null,
												custom varchar(225) not null,
												payer_status varchar(225) not null,
												business varchar(225) not null,
												address_country varchar(225) not null,
												num_cart_items varchar(225) not null,
												mc_handling1 varchar(225) not null,
												address_city varchar(225) not null,
												payer_email varchar(225) not null,
												verify_sign varchar(225) not null,
												mc_shipping1 varchar(225) not null,
												tax1 varchar(225) not null,
												txn_id varchar(225) not null,
												payment_type varchar(225) not null,
												last_name varchar(225) not null,
												item_name1 varchar(225) not null,
												address_state varchar(225) not null,
												receiver_email varchar(225) not null,
												payment_fee varchar(225) not null,
												quantity1 varchar(225) not null,
												receiver_id varchar(225) not null,
												txn_type varchar(225) not null,
												mc_currency varchar(225) not null,
												mc_gross_1 varchar(225) not null,
												residence_country varchar(225) not null,
												test_ipn varchar(225) not null,
												transaction_subject varchar(225) not null,
												payment_gross varchar(225) not null,
												auth varchar(225) not null)ENGINE=MyISAM CHARSET = utf8"
												);
				if(!$sql)
				{
						printf("%s /r/n", "Could not create table. ".$mysqliconnection->error.__LINE__);
						return false;
				}
				
			
			$sql = $mysqliconnection->query("CREATE TABLE if not exists product_images_$table_prifix  
												(id int(13) auto_increment PRIMARY KEY,
												sku varchar(225) not null,
												image varchar(225) not null,
												date date)ENGINE=MyISAM CHARSET = utf8"
												);
				if(!$sql)
				{
						printf("%s /r/n", "Could not create table. ".$mysqliconnection->error);
						return false;
				}
			
			
			/* Create user tables */
			
			
				
				
			/* Close the connection */
			$mysqliconnection->close();
			
			/* Return true */
			return $this->mysqliserver();
					
		}		
		
		
		public function PaypalCheckOutCompleteMysqli($tablename,$data)
		{
				/* Setting table prfix */
				$table_prifix = '7add4023a86ad';
				
				/* Setting table name */
				$tablename = "papal_checkout_complete_$table_prifix";
				
				/* Required mysqli connection fie */
				require_once 'dbCoonnection-class.php';
				
				/* Get the connection */
				$mysqliclass = new DbConnection();
								
				/* Get the connection  */
				$mysqliconnection = $mysqliclass->getConnection();
				
				/* This is and test because mysqli react differently */
				$result = $mysqliconnection->query("SHOW COLUMNS from $tablename");
				
				/* If not result */
				if(!$result)
				{
						echo $mysqliconnection->error;
						return false;
				}
				
				$fields = array();
				
				while($row = $result->fetch_assoc())
				{
					$fields[] = $row['Field'];
				}
				
				
				/* Find the different and alter table if found different */				
			/*	
			$data = array(
							"mc_gross" =>" 45.00",
							"protection_eligibility" =>" Eligible",
							"address_status" =>" confirmed",
							"item_number1" =>" ",
							"payer_id" =>" 8NGFFCAD9T35G",
							"tax" =>" 0.00",
							"address_street" =>" 1 Main St",
							"payment_date" =>" 02:54:49 Aug 29, 2016 PDT",
							"payment_status" =>" Completed",
							"charset" =>" windows-1252",
							"address_zip" =>" 95131",
							"mc_shipping" =>" 0.00",
							"mc_handling" =>" 0.00",
							"first_name" =>" test",
							"mc_fee" =>" 1.61",
							"address_country_code" =>" US",
							"address_name" =>" test buyer",
							"notify_version" =>" 3.8",
							"custom" =>" ",
							"payer_status" =>" verified",
							"business" =>" bharatrose3-facilitator@gmail.com",
							"address_country" =>" United States",
							"num_cart_items" =>" 1",
							"mc_handling1" =>" 0.00",
							"address_city" =>" San Jose",
							"payer_email" =>" bharatrose3-buyer@gmail.com",
							"verify_sign" =>" AFcWxV21C7fd0v3bYYYRCpSSRl31AlWpMrFEbL2iddV5oGihrtbWcpVo",
							"mc_shipping1" =>" 0.00",
							"tax1" =>" 0.00",
							"txn_id" =>" 2LF59887E7131620R",
							"payment_type" =>" instant",
							"last_name" =>" buyer",
							"item_name1" =>" New Product6",
							"item_name2" =>" New Product7",
							"item_name3" =>" New Product7",
							"item_name4" =>" New Product6",
							"item_name5" =>" New Product7",
							"item_name6" =>" New Product7",
							"address_state" =>" CA",
							"receiver_email" =>" bharatrose3-facilitator@gmail.com",
							"payment_fee" =>" 1.61",
							"quantity1" =>" 1",
							"receiver_id" =>" HFMGSDNPWWQK2",
							"txn_type" =>" cart",
							"mc_currency" =>" USD",
							"mc_gross_1" =>" 45.00",
							"mc_gross_2" =>" 45.00",
							"mc_gross_3" =>" 45.00",
							"mc_gross_4" =>" 45.00",
							"mc_gross_5" =>" 45.00",
							"mc_gross_6" =>" 45.00",
							"residence_country" =>" US",
							"test_ipn" =>" 1",
							"transaction_subject" =>"", 
							"payment_gross" =>" 45.00",
							"auth" =>" AiY4gcBDdccADDwQfaTQoo6JesWfikTNKt7i-hvT-IBbpJQlS35DNQ1OJWE4uNVm4JQvatA7jSS3523PwpwbY7g"
						);
			
			*/
			/* Extract the keys */
			$postedKeys = array_keys($data);
			
			/* find the different */
			$diffFields = array_diff($postedKeys, $fields);
			
			sort($diffFields);
			
			/* Count the fields */
			if(count($diffFields)> 0)
			{
				foreach($diffFields as $key => $value)
				{
					/* Alter the table */
					if(!$alter = $mysqliconnection->query("ALTER TABLE $tablename  add $value varchar(225) not null"))
					{
							printf("%s '\r\n'",$mysqliconnection->error);
							return false;
					}
				}
					
			}	
		/* We are going to insert the data an accourding to paypal post */
		
		//
		/* Exit the */
		/* Make all posted index as table column */
		
		$paypalcolums = implode(',',$postedKeys);
		
		/* Get the values */
		$paypalValues = array_values($data);
		
		
		$datatoinsert = '';
		for($i = 0; $i < count($paypalValues); $i++)
		{
			$datatoinsert .= "'$paypalValues[$i]',";
		}
		
		/* Remove last comman */
		
		
		$datatoinsert = substr($datatoinsert, 0, -1);
			
		
		if(!$sql = $mysqliconnection->query("INSERT INTO $tablename($paypalcolums)VALUES($datatoinsert)"))
			{
				printf("%s '\r\n'",$mysqliconnection->error);
				return false;
			}
		}
		
		public function InsertData()
		{
			$this->CreateRequiredTables();
			
			/* Get the connection */
			$mysqli = $this->mysqliserver();
			/*
				productname varchar(225) not null,
				description varchar(225) not null,
				shortdiscription varchar(225) not null,
				availabledatefrom varchar(225) not null,
				availabledateto varchar(225) not null,
				sku varchar(255) not null,
				price varchar(225) not null,
				taxclass varchar(225) not null,
				status varchar(225) not null,
				date date)ENGINE=MyISAM CHARSET = utf8"
			*/
			$table_prifix = '7add4023a86ad';
			$tablename = "product_kettyclothing_kettyclothinge_$table_prifix";
			
			$productname = $mysqli->real_escape_string('something');
			$description = $mysqli->real_escape_string('bing thing is ');
			$shortdiscription = $mysqli->real_escape_string("Our nest is home to all your favourite women's fashion brands. We keep the Australian fashion on hand to help solve your wardrobe dilemmas - with tops, jeans, pants, shorts, swimwear, sleepwear, shoes, jewellery, bags and dresses online hand picked to help inspire confidence in you.");
			$availabledatefrom = $mysqli->real_escape_string('');
			$availabledateto = date ('Y-m-d H:i:s');;
			$sku = $mysqli->real_escape_string('565656');
			$price = $mysqli->real_escape_string('22');
			$taxclass = $mysqli->real_escape_string('noe');
			$status = $mysqli->real_escape_string('published');
			$date = date ('Y-m-d H:i:s');
			
			if(!$sql = $mysqli->query("INSERT INTO $tablename
										(
										productname,
										description,
										shortdiscription,
										availabledatefrom,
										availabledateto,
										sku,
										price,
										taxclass,
										status,
										date,
										special_price,
										available_items,
										origin,
										material,
										p_condition,
										style,
										season,
										product_feature,
										productLable,
										colors,
										sizes,
										buttoncolor,
										avaibility,
										collection,
										weight
										)values
										(
										'$productname',
										'$description',
										'$shortdiscription',
										'$availabledatefrom',
										'$availabledateto',
										'$sku',
										'$price',
										'$taxclass',
										'$status',
										'$date',
										
										'$special_price',
										'$available_items',
										'$origin',
										'$material',
										'$condition',
										'$style',
										'$season',
										'$product_feature',
										'$productLable',
										'$colors',
										'$sizes',
										'$buttoncolor',
										'$avaibility',
										'$collection',
										'$weight')"))
			{
				/* Throw message */
				printf("%s \r\n",$mysqli->error);
				return false;
			}
			
			return $mysqli;
		}
		
		public function UpdateData(){}
		
		public function DeleteData(){}
		
		
		
		
}
?>

