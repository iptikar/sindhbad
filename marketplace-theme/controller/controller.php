<?php
class MarketPlace {
	
	
	/* Properties for DB Connection */
	private $hostname = 'localhost';
	private $username = 'root';
	private $password = 'a';
	private $dbname = 'iptikar-marketplace';
	
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
			
			$key = str_replace(' ', '&nbsp;', $key);
			
			if(is_array($value)) {
			
			 $select .= "<optgroup label = $key class = $class>";
			
			$select .= $this->GetChildOptions($value, 2);
			
		} else {
				
				$select .= "<option = $value >$value</option>";
				
			
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

	/* Returning the category */
	return $category;
		 
	}
	
	public function POSTProductDetails() {
		
		
		$this->Validation();
		
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
		$warrenty = $_POST['warrenty'];
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
		
		/*
		// Regression 
		$reg = '/^[a-zA-Z0-9\-,+:\/ ]{2,150}$/';
		
		// Check product name 
		$vpn = $this->ErrorMsg($reg, $product_name, $this->JSErrorMsg('<i class = "fa fa-info"></i>Please enter product name.'));
		
		
		// If variable is not returning true 
		if($vpn !== true )
		{
			// Return the message 
			return $vpn;
		}
		
		// Product discription 
		$reg = '/^[a-zA-Z0-9\-,+:\/ ]{2,1000}$/';
		
		// discription 
		$vpn = $this->ErrorMsg($reg, $discription, $this->JSErrorMsg('Please enter product discription.'));
		
		
		// If variable is not returning true 
		if($vpn !== true )
		{
			// Return the message 
			return $vpn;
		}
		
		
		// Valadating product short discription 
		
		// Product discription 
		$reg = '/^[a-zA-Z0-9\-,+:\/ ]{2,1000}$/';
		
		// discription 
		$vpn = $this->ErrorMsg($reg, $short_discription, $this->JSErrorMsg('Please enter product short discription.'));
		
		
		// If variable is not returning true 
		if($vpn !== true )
		{
			// Return the message 
			return $vpn;
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
		
		*/
		
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
		
		
		/*
		
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
			$reg = '/^[a-zA-Z0-9\-,+:\/ ]{2,1000}$/';
			
			// Here we go
			$vpn = $this->ErrorMsg($reg, $saller_note, $this->JSErrorMsg('Please enter valid seller note.'));
		
		
			// If variable is not returning true 
			if($vpn !== true ){	
				
				// Return the var 
				return $vpn;
				
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
		
		
		// Enable internal xml error 
		libxml_use_internal_errors(true);
		
		// Clear error 
		libxml_clear_errors();
		// Valadating 
		$artical_validate = simplexml_load_string($product_articles_html);
		
		// If false return 
		if($artical_validate === false ) {
			
			// Throw the error 
			return $this->JSErrorMsg('Please enter valid product articles.');
		}
		
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


		*/
		// Return true ;
		return true ;
		
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
 
}
?>
