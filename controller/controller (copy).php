<?php
class MarketPlace {
	
	/* Live server database details 
	 * $link = new mysqli("localhost", "iptikarc_buynsel", "123@husABIDjust", "iptikarc_iptikar-marketplace");
	 * */
	/* Properties for DB Connection */
	private $hostname = $_SERVER['HTTP_HOST'];
	private $username = 'iptikarc_buynsel';
	private $password = '123@husABIDjust';
	private $dbname = 'iptikarc_iptikar-marketplace';
	
	private $key1 = '3vmigUCQdJGRrvG';
	
	protected $isFileValid = [];
	
	// Here we go 
	protected $category_seperator ='#2e3615a020749';
	
	// Per page data 
	public $perpage = 5;
	
	/* Crate method for DB Connection */
	protected function Connection() {
		
		/* Get the connection from the class property */
		$hostname = $this->hostname;
		$username = $this->username;
		$password = $this->password;
		$dbname = $this->dbname;
		
		/* Setting connection */
		$mysqli = new mysqli($hostname, $username, $password, $dbname);
		
		/* If fails return the error */
		
		if(!$mysqli) {
			
			// Return error 
			return $mysqli->error;
			}
			
		/* else return the connection */
		return $mysqli;
		
		}

	
	
	/* Getting all category from the json file */
	public function GetCategoryFronJson() {
		
		/* Get the file using file get content */
		$getJson = file_get_contents('../js/categories.json');
		
		
		/* Encode the json */
		$Encode_Json = json_decode($getJson, true);
		
		return $Encode_Json;
		
	}
	
	/* Getting cateogry from json file to Select HTML Elements */
	public function GetChildOptions($arr_val,$arg) {
	
		
		$select = '';
		
		if($arg == 1) {
		
			$class = "ul-first";
		} else {
		
			$class = "ul-secound";
		}
		
		
		
		foreach($arr_val as $key => $value ) {
			
			//$key = str_replace(' ', '&nbsp;', $key);
			
			if(is_array($value)) {
			
			// Explode the string category_seperator
			$string_key = explode($this->category_seperator, $key);
			
			$select .= '<optgroup label = "'.$string_key[0].'" class = "'.$class.'">';
			
			$select .= $this->GetChildOptions($value, 2);
			
		} else {
				
				$string_key = explode($this->category_seperator, $value);
				
				$select .= '<option value = "'.$value.'" >'.$string_key[0].'</option>';
				
			
			}
			
			
		
		
	}
	
	 	$select .= "</optgroup>";
		return $select;
}

	/* Get the select statements */
	public function GetCategoryInSelect() {
	
	/* Getting the options group from child categories */	 
	$Category_Childs = $this->GetChildOptions($this->GetCategoryFronJson(),1);

	/* Set Select Elements */
	$category = '<select class = "table-group-action-input form-control input-medium" name = "category">';
		
	/* Appending html elements */
	$category .= '<option value = "">Select Category</option>';
	
	/* Appending all child product categories */
	$category .= $Category_Childs;
		
	/* Close the Select elements */
	$category .= '</select>';


	// Per page data 
	/* Returning the category */
	return $category;
		 
	}
	
	public function POSTProductDetails() {
		
		
		$this->Validation();
		
	}
		
	public function DefaultTimeZone() {
		
		return date_default_timezone_set ('Asia/Dubai');
		
		}
	
	public function Validation() {
		
		// If form not post then 
		if(!isset($_POST['submit'])) {
			
			return false;
			
			}
		
		$product_name = $_POST['product-name'];
		$discription = $_POST['discription'];
		$short_discription = $_POST['short-discription'];
		$date_available_from = $_POST['date-available-from'];
		$date_available_to = $_POST['date-available-to'];
		$category = $_POST['category'];
		$sku = $_POST['sku'];
		$regular_price = $_POST['regular-price'];
		$special_price = $_POST['special-price'];
		$special_price_from = $_POST['special-price-from'];
		$special_price_to = $_POST['special-price-to'];
		$items_available = $_POST['items-available'];
		
		
		
		$seller_type = $_POST['seller-type'];
		$avaibility = $_POST['avaibility'];
		$min_order = $_POST['min-order'];
		$tax_class = $_POST['tax-class'];
		$shipping_cost = $_POST['shipping_cost'];
		$status = $_POST['status'];
		$unite_amount = $_POST['unite-amount'];
		$product_unite = $_POST['product-unite'];
		$product_condition = $_POST['product-condition'];
		$country = $_POST['country'];
		$country_phone_code = $_POST['country-phone-code'];
		$phone = $_POST['phone'];
		
		
		
		
		$warrenty = $_POST['warrenty'] ?? '';
		$weblink = $_POST['weblink'] ?? '';
		$youtube_link = $_POST['youtube-link'] ?? '';
		$facebook_link = $_POST['facebook-link'] ?? '';
		$saller_note = $_POST['saller-note'] ?? '';
		$latitude = $_POST['latitude'];
		$longitude = $_POST['longitude'];
		$product_articles_html = $_POST['product-articles-html'] ?? '';
		$meta_title = $_POST['meta_title'] ?? '';
		$meta_keywords = $_POST['meta_keywords'] ?? '';
		$meta_description = $_POST['meta_description'] ?? '';
		
		$spcification_title = $_POST['spcification-title'];
		$spcification_value = $_POST['spcification-value'];
		$city = $_POST['city'] ?? '';
		$poboxno = $_POST['poboxno'] ?? '';
		$delivery_service = $_POST['delivery-service'] ?? '' ;
		
		
		
		//echo json_encode($spcification_title);
		
		
		
		// Nmae 
		if(strlen($product_name) < 2 || strlen($product_name) > 150) {
			
			// Return the message 
			return $this->JSErrorMsg('<i class = "fa fa-info"></i>Please enter product name.');
			
			}
		
		
		// Check string length 
		if(strlen ($discription) < 2 || strlen($discription) > 2500) {
			
			
			 return $this->JSErrorMsg('Please enter product discription.');
		}
		
		
	
		
		// Check short discription 
		if(strlen ($short_discription) < 2 || strlen($short_discription) > 1500) {
			
			
			 return $this->JSErrorMsg('Please enter product short discription.');
		}
		
		// Date available from 
		$reg = '/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/';
		
		
		// discription 
		$vpn = $this->validateDate($date_available_from, 'Y-m-d H:i');
		
		
		// If variable is not returning true 
		if($vpn !== true )
		{
			// Return the message 
			return $this->JSErrorMsg("Please enter valid date available from.");
		}
		
		
		
		// discription 
		$vpn = $this->validateDate($date_available_to, 'Y-m-d H:i');
		
		
		// If variable is not returning true 
		if($vpn !== true )
		{
			// Return the message 
			return $this->JSErrorMsg("Please enter valid date available to.");
		}
		
		// available from must be less then available to 
		if($date_available_from >= $date_available_to) {
			
			return $this->JSErrorMsg("Please enter valid date avability range.");
		}
		
		
		// Category need to select 
		if($category === ''){
			
			return $this->JSErrorMsg("Please select category.");
			
		}
		
		// Sku validation 
		$reg = '/^[a-zA-Z0-9\-]{5,1000}$/';
		
		// discription 
		$vpn = $this->ErrorMsg($reg, $sku, $this->JSErrorMsg('Please enter valid sku Letters, Numbers, - and minimun 5 character.'));
		
		
		// If variable is not returning true 
		if($vpn !== true )
		{
			// Return the message 
			return $vpn;
		}
		
		// Regular price 
		$reg = '/^[0-9]{1,1000}$/';
		
		// discription 
		$vpn = $this->ErrorMsg($reg, $regular_price, $this->JSErrorMsg('Please enter valid regular price.'));
		
		
		// If variable is not returning true 
		if($vpn !== true )
		{
			// Return the message 
			return $vpn;
		}
		
		// Special Price 
		$vpn = $this->ErrorMsg($reg, $special_price, $this->JSErrorMsg('Please enter valid special price.'));
		
		
		// If variable is not returning true 
		if($vpn !== true )
		{
			// Return the message 
			return $vpn;
		}
		
		
		// IF speical price exist then 
		if($special_price !== '') {
			
			// Must be less then regular price 
			if($special_price > $regular_price) {
				
				// Return the message 
				return $this->JSErrorMsg("Special prie must be less then regular price.");
				
				}
			}
		
		// If special price and regular price is different 
		// Then date range is required for the offer 
		
		if($special_price !== $regular_price) {
			
		// Check it's regression 
		// discription 
		$vpn = $this->validateDate($special_price_from, 'Y-m-d H:i');
		
		
		// If variable is not returning true 
		if($vpn !== true )
		{
			// Return the message 
			return $this->JSErrorMsg("Please speical price from.");
		}
		
		
		// Check it's regression 
		// discription 
		$vpn = $this->validateDate($special_price_to, 'Y-m-d H:i');
		
		
		// If variable is not returning true 
		if($vpn !== true )
		{
			// Return the message 
			return $this->JSErrorMsg("Please enter speical price to.");
		}
		
		
		
		// Check the date difference 
		if($special_price_from >= $special_price_to) {
			
			return $this->JSErrorMsg("Please, Special price starting date must be lett then ending date.");
			
			}
		
		}
		
		// Items avaialbe 
		// Product discription 
		$reg = '/^[0-9]{1,10000}$/';
		
		// discription 
		$vpn = $this->ErrorMsg($reg, $items_available, $this->JSErrorMsg('Please enter item available.'));
		
		
		// If variable is not returning true 
		if($vpn !== true )
		{
			// Return the message 
			return $vpn;
		}
		
		// Seller type 
		if($seller_type === '') {
			
			// Return js error message 
			return $this->JSErrorMsg("$seller_type Please select seller type.");
		} 
		
		
		
		// Avaibility 
		if($avaibility === '') {
			
			// Return js error message 
			return $this->JSErrorMsg('Please select availibility.');
		} 
		
		
		// Minimimu order 
		$reg = '/^[0-9]{1,10000}$/';
		
		// discription 
		$vpn = $this->ErrorMsg($reg, $min_order, $this->JSErrorMsg('Please enter minimium order in quantity/numbers.'));
		
		
		// If variable is not returning true 
		if($vpn !== true )
		{
			// Return the message 
			return $vpn;
		}
		
		
		
		// Tax class 
		if($tax_class === '') {
			
			// Return js error message 
			return $this->JSErrorMsg('Please select tax class.');
			
		}
		
		
		
		// Shipping cost 
		
		$reg = '/^[a-zA-Z0-9 ]{1,50}$/';
		
		// discription 
		$vpn = $this->ErrorMsg($reg, $shipping_cost, $this->JSErrorMsg('Please enter shipping cost'));
		
		
		// If variable is not returning true 
		if($vpn !== true )
		{
			// Return the message 
			return $vpn;
		}
		
		
		
		// Status 
		if($status === '') {
			
			// Throw the message 
			return $this->JSErrorMsg('Please select status.');
		}
		
		
		
		// Unite amount 
		
		$reg = '/^[0-9]{1,5000}$/';
		
		// discription 
		$vpn = $this->ErrorMsg($reg, $unite_amount, $this->JSErrorMsg('Please enter unite amount.'));
		
		
		// If variable is not returning true 
		if($vpn !== true )
		{
			// Return the message 
			return $vpn;
		}
		
		// product_unite
		if($product_unite === '') {
			
			// Throw the message 
			return $this->JSErrorMsg('Please select product unite.');
		}
		
		
		
		// Product condition
		if($product_condition === ''){
			
			// Select product condition
			return $this->JSErrorMsg('Please select product condition.');
			
		}
		
		
		
		// Country 
		if($country === ''){
			
			// Select product condition
			return $this->JSErrorMsg('Please select country.');
			
		}
		
		// If country ae then city and pox must be select 
		if($country === 'AE') {
			
			 // Check city and post box no 
			 if($_POST['city'] === '') {
				 
				 // Select product condition
				return $this->JSErrorMsg('Please select city.');
				 
				}
				
		// Post box no
		$reg = '/^[0-9]{1,6}$/';
		
		// discription 
		$vpn = $this->ErrorMsg($reg, $poboxno, $this->JSErrorMsg('Please enter Post Box No.'));
		
		
		// If variable is not returning true 
		if($vpn !== true )
		{
			// Return the message 
			return $vpn;
		}
			
	}
		// City 
		
		
		
		// Select country code 
		if($country_phone_code === ''){
			
			// Select product condition
			return $this->JSErrorMsg('Please select country phone code.');
			
			} 
			
		// Phone number 
		$reg = '/^[0-9]{9,10}$/';
		
		// discription 
		$vpn = $this->ErrorMsg($reg, $phone, $this->JSErrorMsg('Please enter phone number.'));
		
		
		// If variable is not returning true 
		if($vpn !== true )
		{
			// Return the message 
			return $vpn;
		}
				
		
		
		// Warrenty 
		$reg = '/^[a-zA-Z0-9 ]{2,50}$/';
		
		// discription 
		$vpn = $this->ErrorMsg($reg, $warrenty , $this->JSErrorMsg('Please enter warrenty.'));
		
		
		// If variable is not returning true 
		if($vpn !== true )
		{
			// Return the message 
			return $vpn;
		}
		
		// Delivery service 
		if($delivery_service === '') {
			
			// Error 
			return $this->JSErrorMsg('Please select delivery service.');
			
		}
		
		
		
		// Cheking is product specification is in array 
		
		$reg = '/^[a-zA-Z0-9\-,+ ]{2,1000}$/';
		
		foreach($spcification_title as $key => $value) {
			
			
			// If value exists 
			if($value !== ''){
			
				// Validate 
			$vpn = $this->ErrorMsg($reg, $value, $this->JSErrorMsg('Please enter valid specification title.'));
			
			// Break the loop
			if($vpn !== true) {
				
				// Return message 
				return $vpn;
				
				// Break 
				break;
			}
			
				
			}
		
		}
		
		
		foreach($spcification_value as $key => $value) {
			
		// If value exists 
		if($value !== ''){
			
				// Validate 
			$vpn = $this->ErrorMsg($reg, $value, $this->JSErrorMsg('Please enter valid specification value.'));
			
			// Return vpn 
			if($vpn !== true ) {
					
					// Return message 
					return $vpn;
					
					// Break the loop
					break;
					
				}
			
				
			}
		
		}
		
		
		
		
		// If web link is present 
		if($weblink !== '') {
			
			// Valadation using filter var 
			if(!filter_var($weblink, FILTER_VALIDATE_URL)) {
					
					// Return the message 
					return $this->JSErrorMsg('Please enter valid web url link.');
					
				}
			}
		
		
		// Youtube link
		if($youtube_link !== '') {
			
			// Valadation using filter var 
			if(!filter_var($youtube_link, FILTER_VALIDATE_URL)) {
					
					// Return the message 
					return $this->JSErrorMsg('Please enter valid youtube link.');
					
				}
			}
		
		
		// Facebook link 
		
		if($facebook_link !== '') {
			
			// Valadation using filter var 
			if(!filter_var($facebook_link, FILTER_VALIDATE_URL)) {
					
					// Return the message 
					return $this->JSErrorMsg('Please enter valid facebook link.');
					
				}
			}
		
		// If seller note contain any things 
		if($saller_note !== '') {
			
			// Check with validation 
			if(strlen($saller_note) < 5) {
				
				$this->JSErrorMsg('Please enter valid seller note.');
				
				}
			
		}
		
		// Lattitude 
		if(!$this->isGeoValid('latitude', $latitude)) {
			
			// Throw the error 
			return $this->JSErrorMsg('Please enter valid latitude.');
			
			
		}
			
		// Longititude 
		if(!$this->isGeoValid('longitude', $longitude)) {
			
			// Throw the error 
			return $this->JSErrorMsg('Please enter valid longitude.');
			
		}
		
		
		// Reassign the value and then with json encode 
		$spcification_title = json_encode($spcification_title);


		// Check it's key if not empty 


		// Reassign the value and then with json encode 
		$spcification_value = json_encode($spcification_value);

		
		
		
		if($meta_title !== ''){
			
		// Validate 
		// Regression 
		$reg = '/^[a-zA-Z0-9\- ]{30,70}$/';
		
		// Check product name 
		$vpn = $this->ErrorMsg($reg, $meta_title, $this->JSErrorMsg('</i>Please enter valid meta title.'));
		
		
		// If variable is not returning true 
		if($vpn !== true ){
			
			// Return message 
			return $vpn;
		
		}
		
		
		}
		
		
		// Check meta key word 
		if($meta_keywords !== ''){
			
			// Validate 
		// Regression 
		$reg = '/^[a-zA-Z0-9\- ]{50,300}$/';
		
		// Check product name 
		$vpn = $this->ErrorMsg($reg, $meta_title, $this->JSErrorMsg('</i>Please enter valid meta keyworld 50-300 character.'));
		
		
		// If variable is not returning true 
		if($vpn !== true ){
			
			// Return message 
			return $vpn;
		
		}
			
		
		
		}
		
		// Meta discritption 
		if($meta_description !== '') {
			
				// Validate 
		// Regression 
		$reg = '/^[a-zA-Z0-9\- ]{50,300}$/';
		
		// Check product name 
		$vpn = $this->ErrorMsg($reg, $meta_title, $this->JSErrorMsg('</i>Please enter valid meta discription 50-300 character.'));
		
		
		// If variable is not returning true 
		if($vpn !== true ){
			
			// Return message 
			return $vpn;
		
		}
			
	}


		// Though we have validated all the code 
		
		// Using htmlspecialchars for all varaiables
		
		// Block 1 
		$product_name 			= 		htmlspecialchars( $product_name );
		$discription 			= 		htmlspecialchars( $discription );
		$short_discription  	= 		htmlspecialchars( $short_discription );
		$date_available_from 	= 		htmlspecialchars( $date_available_from );
		$date_available_to 		= 		htmlspecialchars( $date_available_to );
		$category 				= 		htmlspecialchars( $category );
		
		
		// Block 2
		$sku 					= 		htmlspecialchars( $sku );
		$regular_price 			= 		htmlspecialchars( $regular_price );
		$special_price 			= 		htmlspecialchars( $special_price );
		$special_price_from 	= 		htmlspecialchars( $special_price_from );
		$special_price_to 		= 		htmlspecialchars( $special_price_to );
		$items_available 		= 		htmlspecialchars( $items_available );
		$seller_type 			= 		htmlspecialchars( $seller_type );
		$avaibility 			= 		htmlspecialchars( $avaibility );
		
		
		// Block 3
		$min_order 				= 		htmlspecialchars( $min_order );
		$tax_class 				= 		htmlspecialchars( $tax_class );
		$shipping_cost 			= 		htmlspecialchars( $shipping_cost );
		$status 				= 		htmlspecialchars( $status );
		$unite_amount 			= 		htmlspecialchars( $unite_amount );
		$product_unite 			= 		htmlspecialchars( $product_unite );
		$product_condition 		= 		htmlspecialchars( $product_condition );
		$country 				= 		htmlspecialchars( $country );
		$country_phone_code 	= 		htmlspecialchars( $country_phone_code );
		$phone 					= 		htmlspecialchars( $phone );
		$warrenty 				= 		htmlspecialchars( $warrenty );
		
		
		// Block 4
		$weblink 				= 		htmlspecialchars( $weblink);
		$youtube_link 			= 		htmlspecialchars( $youtube_link);
		$facebook_link 			= 		htmlspecialchars( $facebook_link);
		$saller_note 			= 		htmlspecialchars( $saller_note);
		$latitude 				= 		htmlspecialchars( $latitude );
		$longitude 				= 		htmlspecialchars( $longitude );
		$product_articles_html  = 		htmlspecialchars( $product_articles_html);
		
		
		
		// Block 5
		$meta_title 			= 		htmlspecialchars( $meta_title);
		$meta_keywords 			= 		htmlspecialchars( $meta_keywords);
		$meta_description 		= 		htmlspecialchars( $meta_description);
		
		
		$spcification_title 	= 		htmlspecialchars( $spcification_title );
		$spcification_value 	= 		htmlspecialchars( $spcification_value );
		
		
		$city 					= 		htmlspecialchars( $city);
		$poboxno 				= 		htmlspecialchars( $poboxno);
		$delivery_service 		= 		htmlspecialchars( $delivery_service) ;
		$delivery_period		= htmlspecialchars( $_POST['delivery_period']) ;
		
		// Category name and id comming in these formate 
		// {{category_name}}#2e3615a020749{{category_id}}
		$ECNAI = explode($this->category_seperator, $category);
		
		// Get the name 
		$category_name = $ECNAI[0];
		
		// Get the id 
		$category_id = $ECNAI[1];
		
		//mysqli_report(MYSQLI_REPORT_ALL);
		// Setting the connection variable 
		$mysqli = $this->Connection();
		
		// Check if product sku is alreay exists 
		$stmt = $mysqli->prepare("SELECT id from product_catalogs where sku = ?");
		
		// Bind the paramater 
		$stmt->bind_param("s", $sku);
		
		
		/* execute query */
		if(!$stmt->execute()){
			
			// return with the error 
			return $this->JSErrorMsg($stmt->error);
			
		}
		
		

		/* bind result variables */
		/* store result */
		$stmt->store_result();
		
		// If number rows greater then 
		if($stmt->num_rows !== 0){
			
			// return with the error 
			return $this->JSErrorMsg('Sku '.$sku.' is already exists');
			
		}
		
		
		 
		// Seller email address 
		$seller_email = $this->SellerSession()->email;
		
		// Suppliers sku 
		$supplier_sku = $seller_email;
		
		
		// Before inserting upload the images to get the file names 
		$validateFiles = $this->UploadFileOop('option', '../img/product-images/' , $sku);
		
		// If validateFieles is false 
		if($validateFiles === false ){
			
			// Select the image 
			return $this->JSErrorMsg('Please select the product image.');
		
			
			}
		
	
		// Check if all file set is valid 
		if(in_array(false, $this->isFileValid)) {
			
			// Return the message 
			return $this->JSErrorMsg('Only jpg, jpeg, bmp, png, gif files are supported. Max file size only supported 500 KB.');
		}
		
		
		// Get the dbfilename and upload the file 
		$dbfilesname = $this->FinalUploadFiles('option', '../img/product-images/', $sku);
		
		
		
		// Prepare the statement 
		$stmt = $mysqli->prepare("INSERT INTO product_catalogs(
													seller_email,
													name,
													sku ,
													category,
													category_id,
													discription,
													short_discription,
													avaibility_from,
													avaibility_to,
													regular_price,
													special_price,
													product_condition,
													items_available,
													avaibility,
													supplier_sku,
													customer_email,
													phonenumber,
													seller_type,
													product_unite,
													unite_amount,
													delivery_servic,
													delivery_period,
													shipping_cost,
													seller_note,
													warranty,
													specifications_key,
													specifications_value,
													product_article_html,
													meta_title,
													meta_keywords,
													meta_description,
													images
													) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"
											);
											
		
		// Bind the all paramets 
		$stmt->bind_param("ssssssssssssssssssssssssssssssss",
													
													$seller_email,
													$product_name,
													$sku ,
													$category_name ,
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
													$phone,
													$seller_type,
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
													$dbfilesname);													
		
		// Run the stmt execute 
		if(!$stmt->execute()) {
			
			// Return the error 
			return $stmt->error;
			
			}
		
		
		 // Get the product id 
		 $product_id = $mysqli->insert_id;
		 
		 
		 // Preparing the statement for upload 
		 $stmt1 = $mysqli->prepare(
									"INSERT INTO product_categlog_attributes
									(
										product_id,
										facebook_link,
										youtube_link,
										web_link,
										location_latitude,
										location_longititude,
										images
									) VALUES(?,?,?,?,?,?,?)"
										
									);
									
		// Bind the all variables 
		$stmt1->bind_param("sssssss",$product_id,$facebook_link, $youtube_link, $weblink, $latitude, $longitude, $dbfilesname);
		
		// Execute the statement 
		$stmt1->execute();
		
		
		// Close the open stmt variable 
		$stmt->close();
		// While inserting some value to the db 
		// Some value need to update by the key
		// specifications_key published enum('0','1') default '0',
		// Escape the all strings 
		// Return true ;
		
		
		return '<script type = "text/javascript">jQuery(function(){
		
		jQuery("#id-uploaded52").html(\'<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Success!</strong> Product sucessfully uploaded.</div>\');
		  
		
jQuery("#form58656").find("input:text").val(""); 
jQuery("#form58656").find("textarea").val(""); 
jQuery("select").prop("selectedIndex",0); 
jQuery("input:checkbox").removeAttr("checked");
jQuery("input:radio").removeAttr("checked");
jQuery("html, body").animate({ scrollTop: 0 }, "slow");
		
		
		

		  
		  });</script>';
		
		}
		
	public function GetProductByCategory($categoryId){
		
			// Get the connection 
			$mysqli = $this->Connection();
			
			$sql = "SELECT id, name,sku, images, regular_price, special_price, avaibility_from, (((regular_price - special_price )/regular_price) * 100) as discount, NOW() as current from product_catalogs where category_id= '$categoryId' and published = '0' and avaibility_from <= NOW() and  avaibility_to >= NOW()  limit 10";
			
			// Get the result 
			$result = $mysqli->query($sql);
			
			// Run the query 
			if(!$result){
				
				// Return with the error 
				return $mysqli->error;
				
				}
				
			
				
			// Check the number of rows 
			if($result->num_rows === 0) {
				
				// Return false 
				return false;
			}
			
			// Or return the data 
			$rows = [];
			
			while($row = $result->fetch_assoc()) {
				
				// Get the all rows 
				$rows[] = $row;
			}
				
			
			// Free the result 
			//$mysqli->free();
			
			
			// Close the connection
			$mysqli->close();
			
			// Return the rows 
			return $rows;
		}
		
	public function UploadFileOop($filename, $directory, $sku){

		/* Get the each file access */
		$imgnames  = [];
		
		foreach($_FILES[$filename]["name"] as $key => $value)
		{
			
				
			
			
			/* Check name or temp name */
			if($_FILES[$filename]["tmp_name"][$key] === '') {
				
					return false;
				}
			
			// Type of files that accepted 
			$filetypes = ['image/jpg', 'image/jpeg', 'image/bmp', 'image/png', 'image/gif'];
			
			// validation using in array 
			if(!in_array($_FILES[$filename]["type"][$key], $filetypes) || $_FILES[$filename]["size"][$key] > 512000) {
				
				
				// Set to false 
				$isFileValid[] = false;
			
			} else {
				
				
				// Set to false 
				$isFileValid[] = true;
				
			}
			
	}
		
		$this->isFileValid = $isFileValid;
		
		return true;
		
	}	
	
		
	public function FinalUploadFiles($filename, $directory, $sku)
	{
		
		
		/* Get the each file access */
		$imgnames  = array();
		
		foreach($_FILES[$filename]["name"] as $key => $value)
		{
			/* get the name  of file*/
			$name = $_FILES[$filename]["name"][$key];
			
			/* Get the temporory file name */
			$tmp = $_FILES[$filename]["tmp_name"][$key];
			
			/* Get the random character */
			$randchar = chr(rand(97,122));
			
			/* get the random number */
			$number = rand(1,100000);
			
			$explodfname = explode('.', $name);
			
			$newfilename = round(microtime(true)) .$number.'.' . end($explodfname);
			
			
			$imgnames[] = $newfilename;
			
			
			foreach($imgnames as $key=> $value ){
			
				move_uploaded_file($tmp, "$directory/$newfilename");				
				//$collection->remove();		
			}
		
		}
		
		return json_encode($imgnames);
		
	}	
	
	public function JSErrorMsg($message) {
			
			return "<script>
         // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById('myBtn');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName('close')[0];

// When the user clicks on the button, open the modal 

	
	// Ge the element by id 
	document.getElementById('error-message').innerHTML='".$message."'; 
	
	// Display the block
    modal.style.display = 'block';


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = 'none';
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
         </script>
      ";
			}
	
	public function IsFormSubmitted() {
		
		// Check if button is submitted 
		if(isset($_POST['submit'])){
			
			// Return true 
			return true ;
			}
			
			// Return false 
			return false;
		}

	public function ErrorMsg($regression, $value, $errormsg) {
		
		// check with regression 
		if(!preg_match($regression,$value))
			{
					/* Return message */
				return $errormsg;
			}
			
			return true;
		
		}

	public function validateDate($date, $format = 'Y-m-d H:i:s') {
	
	// Date formate
    $d = DateTime::createFromFormat($format, $date);
    
    // Return the date formate 
    return $d && $d->format($format) == $date;
}

	public function isGeoValid($type, $value) {
	
	// Select the pattern 
	$pattern = ($type == 'latitude')
        ? '/^(\+|-)?(?:90(?:(?:\.0{1,8})?)|(?:[0-9]|[1-8][0-9])(?:(?:\.[0-9]{1,8})?))$/'
        : '/^(\+|-)?(?:180(?:(?:\.0{1,8})?)|(?:[0-9]|[1-9][0-9]|1[0-7][0-9])(?:(?:\.[0-9]{1,8})?))$/';
    
    // Return preg match 
    return  preg_match($pattern, $value); 
       
}
 
	public function UserRegistration() {
		
	/*
	[form_key] => 2rw5yvbiLGbgYbVv
    [success_url] => 
    [firstname] => bhaat
    [lastname] => shah
    [is_subscribed] => 1
    [registered_as] => 1
    [email] => bharatrose1@gmail.com
    [password] => ThisIsMyLife123
    [password_confirmation] => ThisIsMyLife123
    */
    
    $form_key = $_POST['form_key'] ?? '';
    //$error_url
    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $is_subscribed = $_POST['is_subscribed'] ?? '';
    $registered_as = $_POST['registered_as'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $password_confirmation = $_POST['password_confirmation'] ?? '';
    
    // validating all the strings 
    $reg = '/^[a-zA-Z0-9 ]{2,15}/';
    
    if(!preg_match($reg,$firstname)){
		
			return 'Invalid first name.';
	}
	
	
	// Last name 
	if(!preg_match($reg,$lastname)){
		
			return 'Invalid first name.';
	}
    
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		
		return 'Invalid email address.';
	}
	
	// Check the both password 
	$reg = '/^[a-zA-Z0-9 ]{8,15}/';
	
	if(!preg_match($reg,$password)) {
		
		// Return the message 
		return 'Password must be at least 8 characters.';
	}
    
    // Both password must be same 
    if($password !== $password_confirmation) {
		
		return 'Both password did not matched.';
	}
    
    
    // Check in this section if email adready exists 
    $tablename = '';
    
    // Escape the string 
    $email = 
    // SQL
    $sql = "SELECT id from users where email = '$email' limit 1";
    
    // Run the sql query 
    if(!$mysqli->query($sql)) {
		
		// Throw the mysqli error message 
		return $mysqli->error;
		
		}
	
	// Check the number or rows that is affected 
	$is_email_exists = $mysqli->affected_rows;
	
	// If that is equal to 1
	
	if($is_email_exists === 1){
		
		// Throw the error 
		return 'Email address is already registared. If you forget password please check the link.';
		}
	
	// 1 Send the varification link to the users 
	// 2 Insert all the information to database 
	  
    }
	
	public function logindfsdf($username, $password)
	{	
		session_start();
		/* Post the date */
		if(isset($_POST[$username]) && isset($_POST[$password]))
		{

			$_SESSION['usernameccf5fc0187'] = $uname;
			$_SESSION['passwordccf5fc0187'] = $upass;
			//printf("%s \r\n","<div class k 'note alert-success''lk>Sucespls</p></div>");
			
			echo 'loggedin';
			
		}
	}
	
	public function SEOproductName($name) {
		
		// Check the string 
		$string = preg_replace("/[^0-9A-Za-z]+/", "-", $name);
		
		// Str to lower 
		$string = strtolower($string);
		
		// Return the string 
		return $string;
	}

	public function Registraion() {
		
			
		// Get the details 
		/*
		 * Array
(
    [form_key] => 4GqPX3EdkXrNQH1M
    [success_url] => 
    [error_url] => 
    [firstname] => Bharat
    [lastname] => shah
    [email] => info@sindhbad.com
    [password] => ThisIsMyLife123
    [password_confirmation] => ThisIsMyLife123
)
		 * */
		 
		// If form is post 
		if(isset($_POST['submit'])) {
			 
			 
		 $firstname = $_POST['firstname'] ?? '';
		 $lastname = $_POST['lastname'] ?? '';
		 $email =	$_POST['email'] ?? '';
		 $password = $_POST['password'] ?? '';
		 $password_confirmation = $_POST['password_confirmation'] ?? '';
		 $registered_as = $_POST['registered_as'] ?? '';
		 $is_subscribed = $_POST['is_subscribed'] ?? '';
		 
		 $reg = '/^[a-zA-Z0-9 ]{2,150}$/';
		 
		 // Check the first name 
		 if(!preg_match($reg, $firstname)) {
			 
			return 	$this->DisplayError('Please enter valid firstname.');
			 
			}
			
		// Last name 
		
		 if(!preg_match($reg, $lastname)) {
			 
			return 	$this->DisplayError('Please enter valid last name.');
			 
			}
			
			
		// Validate email address 
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			
			// Return the message 
			return $this->DisplayError('Please enter valid email address.');
			}
			
			
		// Check if restered as is set 
		if(!isset($_POST['registered_as'])) {
			
			return 	$this->DisplayError('Please select registed as.');
			
			}
		
		// Check if password 
		if($this->checkPassword($password) !== true) {
			
				// Return error 
				return $this->DisplayError($this->checkPassword($password));
			}
			
			
		// Check both password must match 
		if($password !== $password_confirmation) {
			
			// Return error 
			return $this->DisplayError($this->checkPassword($password));
			
			}
			
		
		// Get the db connection 
		$mysqli = $this->Connection();
		
		
		// Escape the all input string 
		$firstname = $mysqli->real_escape_string($firstname);
		$lastname = $mysqli->real_escape_string($lastname);
		$email =	$mysqli->real_escape_string($email);
		$password = $mysqli->real_escape_string($password);
		
		
		
		$usertype = $_POST['registered_as'];
		
		if($usertype === '1') {
			
			$table = 'seller';
			
		} else {
			
				$table = 'buyer';
			}
			
		
		// Hashed password 
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
		// Run the sql queries 
		
			 // Verify the email address that is not exists 
			 // Writing sql for checking email already exists 
			$sql = "SELECT id from $table where email = '$email'";
		
		// Run the query 
		if(!$mysqli->query($sql)){
			
				// Return the error 
				 return $this->DisplySuccessMsg($mysqli->error);
		}
		
			// Get the affected rows 
			if($mysqli->affected_rows !== 0) {
			
			// Return the error 
			return $this->DisplayError('Email address '.$email.' is already registered.');
			
		}
			 
			 // Get the unique id for store_id and seller_id 
			 $seller_id = $this->SelleruniqueId();
			 
			// Insert data to seller table 
			$store_id = $this->SelleruniqueId();
			
			// Writing sql queries 
			$sql = "INSERT INTO $table(firstname, lastname, email, password_hash, password,customer_type, create_at,seller_id,store_id) VALUES('$firstname', '$lastname', '$email', '$hashed_password','$password', '$registered_as', NOW(),'$seller_id', '$store_id')";
		 
		
			// Run the query 
			if(!$mysqli->query($sql)){
			
				// Return the error 
				 return $this->DisplySuccessMsg($mysqli->error);
		}
			 
		
			// Send the mail to the user 
			$this->VerificationEmailTemlate($email, $registered_as);
		
			// Return the success message 
			return $this->DisplySuccessMsg('Registraion succes, Please check your inbox or spam folder we have sent your activation link.');
	}		 
		 
}
		
	
	
	public function DisplayError($error) {
		
		// Return the html display 
		return '<div class="alert alert-danger">
  <strong>Error ! </strong>'. $error .'
</div';

		
		}
		
	public function DisplySuccessMsg($msg){
			
			return '<div class="alert alert-success">
  <strong>Success! </strong> '.$msg.'
</div>';
			}
		
		
	public function checkPassword($pwd) {
    
    $errors = [];

    if (strlen($pwd) < 8) {
        $errors[] = "Password too short! at leas 8 characters long";
    }

    if (!preg_match("#[0-9]+#", $pwd)) {
        $errors[] = "Password must include at least one number!";
    }

    if (!preg_match("#[a-zA-Z]+#", $pwd)) {
        $errors[] = "Password must include at least one letter!";
    }     

    // Check contain any error 
    if (!empty($errors)) {
			
			// Implode the errors 
			
			return implode(' ', $errors); 
			
	} else {
		
			// return true 
			return true;
		}
		
		
}

	public function VerificationEmailTemlate($to,$usertype){
		
		$timestapm = time();
		
	
		$headers = 'From: info@sindhbad.com' . "\r\n" .
			'Reply-To: info@sindhbad.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
			
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
		$message = file_get_contents("verification-email-template.phtml?email='".$to."'&when='".$timestapm."'&usertype=$usertype");
		
		$subject = "Thank you for registration, please verify your account.";

		if(!mail($to, $subject, $message, $headers)) {
		
			return false;
		}

		return true;
	
	
}

	public function VerifyEmailAddress() {
		
			// Get the paramaters 
			if(isset($_GET['email']) && isset($_GET['when']) && isset($_GET['usertype'])) {
				
					
					// Get the email and when it was create 
					$email = $_GET['email'];
					
					// When 
					$when = $_GET['when'];
					
					// User type weather seller or buyer 
					$usertype = $_GET['usertype'];
						
					
					// Regression 
					$reg = '/^[0-9]{1}$/';
					
					// usert type must be number 
					if(!preg_match($reg, $usertype)) {
						
						return $this->DisplayError("Invaid paramaters accepted.");
								
					}
					
					// Validate email address 
					if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
						
						// Validate email address
						return $this->DisplayError("Invaid email address.");
						}

					// Change the date to 
					$Registereddate = date('Y-m-d', $when);

					// Add 3 days 

					$validDate = date('Y-m-d', strtotime($when. '+3 days'));
					
					// If greater then days then 
					if($validDate > date('Y-m-d')) {
						
						return $this->DisplayError("Confirmation key is expired, please register again !.");
						
						}
						
						
					// Get the connection 
					$mysqli = $this->Connection();
					
					// Escape the string 
					$email = $mysqli->real_escape_string($email);
					
					// Table to select 
					$table = '';
					
					// using swith statement 
					switch($usertype) {
						
						case '1':
						$table = 'seller';
						break;
						
						case '0':
						$table = 'buyer';
						break;
						
						default:
						break;
						
						}
						
					
					
					// Go and check and update the date
					$sql = "SELECT id from $table where email = '$email' limit 1";
				 
					
					// Run the query 
					if(!$mysqli->query($sql)) {
						
							// throw the erro 
							return $this->DisplayError($mysqli->error);
						}
					
					// myse only one rows get affected 
					if($mysqli->affected_rows !== 1){
						
							// throw the erro 
							return $this->DisplayError('Email '.$email.' address unable to find.');
					}
					
					
					// If account is already verified then 
					$sql = "SELECT id from $table where email = '$email' and verified = '1' limit 1";
					
					// Run the query 
					if(!$mysqli->query($sql)) {
						
						// Return the message 
							return $this->DisplayError($mysqli->error);
						
					}
					
					
					// If rows affected 
					if($mysqli->affected_rows === 1){
						
							// Return the message 
							return $this->DisplySuccessMsg('Email address '.$email.' is already verified.');
							
						}
					
					
					// Update the datails then 
					$sql = "UPDATE $table set verified = '1' where email = '$email'";
					
					// Run the query 
					if(!$mysqli->query($sql)) {
						
							// Return the message 
							return $this->DisplayError($mysqli->error);
						}
						
					
					// Return the mesage 
					return $this->DisplySuccessMsg('Eamil address '.$email. ' sucessfully verified !.');
					
					
					$mysqli->close();
					
					
					
				}
		
			
			 
		}

	public function login($username, $password) {
		
		
		// If post the username and password 
		if(isset($_POST['login'][$username]) && isset($_POST['login'][$password])) {
			
			// Then post the element 
			$username = $_POST['login'][$username];
			
			// Then post password 
			$password = $_POST['login'][$password];
			
			
			if (!filter_var($username, FILTER_VALIDATE_EMAIL)){
		
				return $this->DisplayError("Please enter valid email address.");
			}
			
			
			// Password must not be empty 
			if($password === '') {
				
				return $this->DisplayError("Please enter valid password.");
				
				}
			
			$usertype = $_POST['login_as'] ?? '';
			
			// Login as must select 
			if(!isset($_POST['login_as'])) {
				
				return $this->DisplayError("Please select login as.");
				
				}
				
				
			// table to select 
			$table = '';
			
			// Switch the statement 
			switch($usertype) {
				
				case '1':
				$table = 'seller';
				break;
				
				case '0':
				$table = 'buyer';
				
				default:
				break;
				
				
				}
				
				
			// Get the connection 
			$mysqli = $this->Connection();
			
			// Esacep the string 
			$username = $mysqli->real_escape_string($username);
			$password = $mysqli->real_escape_string($password);
			
			
			// Sql
			$sql = "SELECT password_hash from $table where email = '$username' and verified = '1' and customer_type = $usertype";
			
			// Query 
			$mysqliquery = $mysqli->query($sql);
			
			// Run the query
			if(!$mysqliquery){
				
				return $this->DisplayError($mysqli->error);
				
			} 
			
			
			// Rows must be one 
			if($mysqliquery->num_rows !== 1){
				
				return $this->DisplayError('Unbale to login, uername and password did not found.');
				
			}
			
			
			
			$fetch_object = $mysqliquery->fetch_object();
			
			// Get the hased password 
			$hassed_password  = $fetch_object->password_hash;
			
			// Match the password by hash password 
			
			
			
			if(!password_verify($password, $hassed_password)) {
				
				// Invalid password 
				return $this->DisplayError('Invalid password.');
				
			}
			
			// On the basic of usertype we are going to set the sesson 
			
			// And redirection the the pages 
			// Start the session
			$_SESSION[$this->key1.'-username'] = $username;
			$_SESSION[$this->key1.'-password'] = $password;
			$_SESSION[$this->key1.'-usertype'] = $usertype;
			$_SESSION[$this->key1.'-time'] = time();
			
			// Clean (erase) the output buffer and turn off output buffering
			ob_end_clean();
			
			if($usertype === '1') {
				
			// If login type is seller value is 1 then dashboard 
			header('Location: http://'.$_SERVER['HTTP_HOST'].'/user-admin-14e1813e3d0cf9da1a9dafc6afadff37');
			
				
			} elseif( $usertype === '0') {
				
				// Redirect to the user different interface
				header('Location: http://'.$_SERVER['HTTP_HOST'].'/user-buyer-14e1813e3d0cf9da1a9dafc6afadff37');
				
			}
			
			
			
			
			
			
			
			
			
			}
		
		}

	public function StartSessionIfNot(){
		
			
	}
	
	public  function DestroySession($sessionname, $sessiontime)
	{
	
	/* Check the session */
	if (!isset($_SESSION[$sessionname])) 
	{
    
    	/* Set session value to current time */
   		 $_SESSION[$sessionname] = time();
	
	} else if ( isset($_SESSION[$sessionname]) &&
				time() - $_SESSION[$sessionname] < $sessiontime) 
	{
    
    	/* Regenerate session id for updating */
    	session_regenerate_id(true); 
   		
   		/* Set the session */ 
   	    $_SESSION[$sessionname] = time();  
	
	} else {
		
		/* Unset the session */ 
		unset($_SESSION[$sessionname]);
		
		/* Perhaps there will be another session as well */
		// There for do not remove the session 
		/* Destroy the session */
		//session_destroy();
	}
}

	public function IsUserLoggedInSeller(){
	
	
	 if( !isset($_SESSION['3vmigUCQdJGRrvG-username']) &&
		!isset($_SESSION['3vmigUCQdJGRrvG-password']) &&
		!isset($_SESSION['3vmigUCQdJGRrvG-usertype']) &&
		!isset($_SESSION['3vmigUCQdJGRrvG-time']) &&
		$_SESSION['3vmigUCQdJGRrvG-usertype'] !== '1'
	) {
		
			return false;
		
		} 
		
		return true;
	
	
	
}

	public function LogOut() {
		
		// Session is already started in the page 
		// Where using this method 
		
		// If this method is true 
		if($this->IsUserLoggedInSeller() === true ) {
			
				// Unset the all session from this broweser 
				unset($_SESSION['3vmigUCQdJGRrvG-username']);
				unset($_SESSION['3vmigUCQdJGRrvG-password']);
				unset($_SESSION['3vmigUCQdJGRrvG-usertype']);
				unset($_SESSION['3vmigUCQdJGRrvG-time']);
				
				// Clean (erase) the output buffer and turn off output buffering
				ob_end_clean();
				// Send the header 
				header('Location:http://'.$_SERVER['HTTP_HOST'].'/login');
			
			}
		
		
		
		}
		
	public function SellerSession() {
		
		// Start the session ;
		
		$email = $_SESSION['3vmigUCQdJGRrvG-username'] ?? '';
		
		// Get the password 
		$password = $_SESSION['3vmigUCQdJGRrvG-password'] ?? '';
		
		// User type 
		$usertype = $_SESSION['3vmigUCQdJGRrvG-usertype'] ?? '';
		
		// When session set 
		$whenset = $_SESSION['3vmigUCQdJGRrvG-time'] ?? '';
		
		// Put everything is session
		 $username = $_SESSION['3vmigUCQdJGRrvG-username'] ?? '';
		
		// If username is valid email 
		if(filter_var($username,FILTER_VALIDATE_EMAIL)) {
			
			// Just get username 
			$username = strstr($email, '@', true);
			
			}
		
		$session_data = [
							'email'=> $email,
							'usertype' =>  $usertype,
							'whenset' => $whenset,
							'username' => $username 
						];
						
		return (object) $session_data;
		
		
		}
	
	public function AdminSessionOut($secound) {
		
			// If session is deactivate for 30 Secound 
			// Then unset the session 
			// Science here we have 4 session for admin 
			// Thefore we need to unset for session 
			// This is mendotory for admin session 
			// Letter we will do this part 
			
			return $this->DestroySession('3vmigUCQdJGRrvG-time', 30);
		
	}	

	public function uniqidReal($lenght = 13) {
    // uniqid gives 13 chars, but you could adjust it to your needs.
    if (function_exists("random_bytes")) {
        $bytes = random_bytes(ceil($lenght / 2));
    } elseif (function_exists("openssl_random_pseudo_bytes")) {
        $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
    } else {
        throw new Exception("no cryptographically secure random function available");
    }
    return substr(bin2hex($bytes), 0, $lenght);
}

	public function SelleruniqueId() {
		
		// Return the id 
		return  sha1($this->uniqidReal());
		
	}
	
	public function StoreuniqueId(){
		
		return $this->uniqidReal();
		
		}

	public function PublicDirecotry(){
		
			// Get the document root /var/www/html
			$doc_root = $_SERVER['DOCUMENT_ROOT'];
			
			// Public dir
			$public_dir = $doc_root.'/img';
			
			return $public_dir;
		
		}

	public function getIndividualProduct($name, $id, $sku){
		
			// Check that all the data is set 
			if(!isset($_GET[$name]) && !isset($_GET[$id]) && !isset($_GET[$sku])) {
				
					// Clean everthing and turn off ouput buffering 
					// Clean (erase) the output buffer and turn off output buffering
					ob_end_clean();
					
					header('Location:http://'.$_SERVER['HTTP_HOST'].'');
			}
			
			// Get the variable 
			$id = htmlspecialchars($_GET[$id]);
			
			// Get the sku 
			$sku = htmlspecialchars($_GET[$sku]);
			
			// Get the connection 
			$mysqli = $this->Connection();
			
			// Sql prepare statement 
			$stmt = $mysqli->prepare("SELECT name,seller_email,
												category,
												category_id,
												sub_category,
												discription,
												short_discription ,
												avaibility_from,
												avaibility_to,
												regular_price,
												special_price,
												product_condition,
												items_available,
												avaibility,
												supplier_sku,
												customer_email,
												published,
												phonenumber,
												seller_type,
												product_unite,
												unite_amount,
												size,
												delivery_servic,
												delivery_period,
												seller_id,
												shipping_cost,
												seller_note,
												warranty ,
												specifications_key,
												specifications_value,
												product_article_html,
												pryority,
												meta_title,
												meta_keywords,
												meta_description,
												(((regular_price - special_price) /regular_price) * 100) as discount,
												images FROM product_catalogs
												
												WHERE id=? and sku=?");
												
			// Bind the paramaters 
			$stmt->bind_param("ss", $id, $sku);
			
			// Execute the command 
			
			if(!$stmt->execute()){
				
					// Return the message 
					return $stmt->error;
				}
			
			/* store result */
			$result = $stmt->get_result();
			
			 
		
			// Check if something is found 
			if($result->num_rows !== 1){
				
					// Return false 
					return false;
				}
				
			// Get the result 
			$get_result = $result->fetch_assoc();
			
			
			$result->free_result();
			// Close stmt 
			
			$stmt->close();
			
			// Close the connection 
			$mysqli->close();
			
			// Return the result 
			return $get_result;
		}

	public function PublicDir() {
		
			return 'http://'.$_SERVER['HTTP_HOST'].'/img/product-images';
		
	}
	
	public function GetProductByCategoryList($category_name, $category_id, $skip, $page){
		
			// Get the connection 
			if(isset($_GET[$category_name]) && isset($_GET[$category_id])  || isset($_GET['page']))
			{
				
					// Get the name 
					$category_name = $_GET[$category_name];
					
					// Get the category id 
					$id = $_GET[$category_id];
					
					$category_name = htmlspecialchars($category_name);
					
					// Id 
					$id = htmlspecialchars($id);
					
					// Get the connection 
					$mysqli = $this->Connection();
					
					// Run the sql query 
					
					// Get cateogry convert 
					$category_name_raw = str_replace('-', ' ', $category_name);
					
					// Get the connection 
					$mysqli = $this->Connection();
			
					$sql = "SELECT id, name,sku, images, regular_price, special_price, avaibility_from, (((regular_price - special_price )/regular_price) * 100) as discount, NOW() as current from product_catalogs where category_id= '$id' and lower(category) = '$category_name_raw'and published = '0' and avaibility_from <= NOW() and  avaibility_to >= NOW() LIMIT $skip, $page";
			
					// Get the result 
					$result = $mysqli->query($sql);
			
					// Run the query 
					if(!$result){
				
					// Return with the error 
					return $mysqli->error;
				
					}
				
					// Check the number of rows 
					if($result->num_rows === 0) {
						
						// Return false 
						return false;
					}
			
					// Or return the data 
					$rows = [];
			
					while($row = $result->fetch_assoc()) {
				
				// Get the all rows 
				$rows[] = $row;
			}
				
			
			
			
					// Close the connection
					$mysqli->close();
			
					// Return the rows 
					return $rows;
					
				}
		
	}
	
	
	public function CountTheRecords (){
		
			// Get the connection 
			$mysqli = $this->Connection();
			
			// Sql
			$sql = "SELECT id from product_catalogs";
			
			// Run the query 
			if(!$mysqli->query($sql)) {
				
					// Return the error 
					return $mysqli->error;
				}
				
			// Return the number of rows 
			$rows = $mysqli->query($sql)->num_rows;
			
			// Close the connection 
			$mysqli->close();
			
			// Return the rows 
			return $rows;
		
		
		}
	
	
	public function Pagination() {
		
		
			// Get the records 
			$records = $this->CountTheRecords();
			
			// how many pages 
			if($records < 1) {
				
					return false;
				}
				
			
			// Record per page 
			$rpp = $this->perpage;
			
			
			// Per page must be less then 
			if($rpp > $records) {
				
					// Return false 
					return false;
					
				}
				
			// Celing the record 
			$tp = ceil($records/$rpp);
			
			
			// Return the pagination 
			return $tp;
			
		
		
		}

	public function PerPageData($page, $category_id) {
		
			// Get the pages 
			$page = $_POST['page'] ?? '';
			
			// Get the category id 
			$category_id = $_POST['category_id'];
			
			// Writing the sql query 
			$sql = "";
		}
	
	public function getPriceFormate($number) {
		
	// Set the local currency 
	setlocale(LC_MONETARY,"en_US.UTF-8");
	
	$money = money_format("%i", $number);

	// Remove usd from money 
	$price = str_replace('USD', '', $money);
	
	// Return the price 
	return $price;
		
		
	}

}

?>
  
