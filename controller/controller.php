<?php
// Require order confirmation
require 'OrderConfirmationEmail.php';
// Require admin login controller
require 'AdminLoginController.php';
// Required orders
require 'Orders.php';
// require select store procedure
require 'SelectStoreProcedure.php';
// company seller required 
require 'CompanySeller.php';
// Require individual seller 
require 'IndividaulSeller.php';
// preparedInsertStatement.php
require 'InsertPreparedStatement.php';
// Need to show products list to the seller 
require 'Products.php';
// Required updating product 
require 'UpdateProductDetails.php';
// Remving product 
require 'DeleteProductBySKU.php';

// Search Product
require 'SearchProducts.php';

// Write Review about the product 
require_once  'WriteReviewAboutProduct.php';

/* JAN 15 UPDATE */

require_once 'GetEmailTemplate.php';

// Get orer
require_once 'GetOrdersForSeller.php';

require_once 'UpdateOrderStatus.php';

/* JAN 15 UPDATE ENDS HERE */

require_once 'GetOrderDetailsForClient.php';

require_once 'Translator.php';


class MarketPlace
{
    
    
    /* Properties for DB Connection */
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = 'a';
    private $dbname = 'iptikar-marketplace';
    
    /* Live server database details
     * $link = new mysqli("localhost", "iptikarc_buynsel", "123@husABIDjust", "iptikarc_iptikar-marketplace");
     * */
    
    private $key1 = '3vmigUCQdJGRrvG';
    
    public $isFileValid = [];
    
    // Here we go
    public $category_seperator ='#2e3615a020749';
    
    // Per page data
    public $perpage = 3;
    
    // Under free shipping amount
    public $MinimunOrderFreeShip = 100;
    
    // Visible pages for pagination
    
    // Currency
    public $currency = 'AED';


    // public languge 
    public $lan = 'en';
    
    
    public function __construct()
    {
        date_default_timezone_set('Asia/Dubai');
    }
    /* Crate method for DB Connection */
    protected function Connection()
    {
        
        /* Get the connection from the class property */
        $hostname = $this->hostname;
        $username = $this->username;
        $password = $this->password;
        $dbname = $this->dbname;
        
        /* Setting connection */
        $mysqli = new mysqli($hostname, $username, $password, $dbname);
        
        /* If fails return the error */
        
        if (!$mysqli) {
            
            // Return error
            return $mysqli->error;
        }
            
        /* else return the connection */
        return $mysqli;
    }


    /* Getting all category from the json file */
    public function GetCategoryFronJson()
    {
        
        /* Get the file using file get content */
        $getJson = file_get_contents('../js/categories.json');
        
        
        /* Encode the json */
        $Encode_Json = json_decode($getJson, true);
        
        return $Encode_Json;
    }
    
    /* Getting cateogry from json file to Select HTML Elements */
    public function GetChildOptions($arr_val, $arg)
    {
        $select = '';
        
        if ($arg == 1) {
            $class = "ul-first";
        } else {
            $class = "ul-secound";
        }
        
        
        
        foreach ($arr_val as $key => $value) {
            
            //$key = str_replace(' ', '&nbsp;', $key);
            
            if (is_array($value)) {
            
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
    public function GetCategoryInSelect()
    {
    
    /* Getting the options group from child categories */
        $Category_Childs = $this->GetChildOptions($this->GetCategoryFronJson(), 1);

        /* Set Select Elements */
        $category = '<select class = "table-group-action-input form-control input-medium" name = "category" oninvalid="this.setCustomValidity(\'Please select category.\')" oninput="setCustomValidity(\'\')" required>';
        
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
    
    public function POSTProductDetails()
    {
        $this->Validation();
    }
        
    public function DefaultTimeZone()
    {
        return date_default_timezone_set('Asia/Dubai');
    }
    
    public function Validation()
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
        $sku = $_POST['sku'];
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
            return $this->JSErrorMsg('<i class = "fa fa-info"></i>Please enter product name.');
        }
        
        
        // Check string length
        if (strlen($discription) < 2 || strlen($discription) > 2500) {
            return $this->JSErrorMsg('Please enter product discription.');
        }
        
        
    
        
        // Check short discription
        if (strlen($short_discription) < 2 || strlen($short_discription) > 1500) {
            return $this->JSErrorMsg('Please enter product short discription.');
        }
        
        // Date available from
        $reg = '/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/';
        
        
        // discription
        $vpn = $this->validateDate($date_available_from, 'Y-m-d');
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $this->JSErrorMsg("Please enter valid date available from.");
        }
        
        
        
        // discription
        $vpn = $this->validateDate($date_available_to, 'Y-m-d');
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $this->JSErrorMsg("Please enter valid date available to.");
        }
        
        // available from must be less then available to
        if ($date_available_from >= $date_available_to) {
            return $this->JSErrorMsg("Please enter valid date avability range.");
        }
        
        
        // Category need to select
        if ($category === '') {
            return $this->JSErrorMsg("Please select category.");
        }
        
        // Sku validation
        $reg = '/^[a-zA-Z0-9\-]{5,1000}$/';
        
        // discription
        $vpn = $this->ErrorMsg($reg, $sku, $this->JSErrorMsg('Please enter valid sku Letters, Numbers, - and minimun 5 character.'));
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $vpn;
        }
        
        // Regular price
        $reg = '/^[0-9]{1,1000}$/';
        
        // discription
        $vpn = $this->ErrorMsg($reg, $regular_price, $this->JSErrorMsg('Please enter valid regular price.'));
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $vpn;
        }
        
        // Special Price
        $vpn = $this->ErrorMsg($reg, $special_price, $this->JSErrorMsg('Please enter valid special price.'));
        
        
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
                return $this->JSErrorMsg("Special prie must be less then regular price.");
            }
        }
        
        // If special price and regular price is different
        // Then date range is required for the offer
        
        if ($special_price !== $regular_price) {
            
        // Check it's regression
            // discription
            $vpn = $this->validateDate($special_price_from, 'Y-m-d');
        
        
            // If variable is not returning true
            if ($vpn !== true) {
                // Return the message
                return $this->JSErrorMsg("Please speical price from.");
            }
        
        
            // Check it's regression
            // discription
            $vpn = $this->validateDate($special_price_to, 'Y-m-d');
        
        
            // If variable is not returning true
            if ($vpn !== true) {
                // Return the message
                return $this->JSErrorMsg("Please enter speical price to.");
            }
        
        
        
            // Check the date difference
            if ($special_price_from >= $special_price_to) {
                return $this->JSErrorMsg("Please, Special price starting date must be lett then ending date.");
            }
        }
        
        // Items avaialbe
        // Product discription
        $reg = '/^[0-9]{1,10000}$/';
        
        // discription
        $vpn = $this->ErrorMsg($reg, $items_available, $this->JSErrorMsg('Please enter item available.'));
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $vpn;
        }
        
        
        
        
        // Avaibility
        if ($avaibility === '') {
            
            // Return js error message
            return $this->JSErrorMsg('Please select availibility.');
        }
        
        
        // Minimimu order
        $reg = '/^[0-9]{1,10000}$/';
        
        // discription
        $vpn = $this->ErrorMsg($reg, $min_order, $this->JSErrorMsg('Please enter minimium order in quantity/numbers.'));
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $vpn;
        }
        
        
        
        // Tax class
        if ($tax_class === '') {
            
            // Return js error message
            return $this->JSErrorMsg('Please select tax class.');
        }
        
        
        
        // Shipping cost
        
        $reg = '/^[a-zA-Z0-9 ]{1,50}$/';
        
        // discription
        $vpn = $this->ErrorMsg($reg, $shipping_cost, $this->JSErrorMsg('Please enter shipping cost'));
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $vpn;
        }
        
        
        
        // Status
        if ($status === '') {
            
            // Throw the message
            return $this->JSErrorMsg('Please select status.');
        }
        
        
        
        // Unite amount
        
        $reg = '/^[0-9]{1,5000}$/';
        
        // discription
        $vpn = $this->ErrorMsg($reg, $unite_amount, $this->JSErrorMsg('Please enter unite amount.'));
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $vpn;
        }
        
        // product_unite
        if ($product_unite === '') {
            
            // Throw the message
            return $this->JSErrorMsg('Please select product unite.');
        }
        
        
        
        // Product condition
        if ($product_condition === '') {
            
            // Select product condition
            return $this->JSErrorMsg('Please select product condition.');
        }
       
         
        // Warrenty
        $reg = '/^[a-zA-Z0-9 ]{2,50}$/';
        
        // discription
        $vpn = $this->ErrorMsg($reg, $warrenty, $this->JSErrorMsg('Please enter warrenty.'));
        
        
        // If variable is not returning true
        if ($vpn !== true) {
            // Return the message
            return $vpn;
        }
        
        // Delivery service
        if ($delivery_service === '') {
            
            // Error
            return $this->JSErrorMsg('Please select delivery service.');
        }
        
        
        
        // Cheking is product specification is in array
        
        $reg = '/^[a-zA-Z0-9\-,+ ]{2,1000}$/';
        
        foreach ($spcification_title as $key => $value) {
            
            
            // If value exists
            if ($value !== '') {
            
                // Validate
                $vpn = $this->ErrorMsg($reg, $value, $this->JSErrorMsg('Please enter valid specification title.'));
            
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
                $vpn = $this->ErrorMsg($reg, $value, $this->JSErrorMsg('Please enter valid specification value.'));
            
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
                return $this->JSErrorMsg('Please enter valid web url link.');
            }
        }
        
        
        // Youtube link
        if ($youtube_link !== '') {
            
            // Valadation using filter var
            if (!filter_var($youtube_link, FILTER_VALIDATE_URL)) {
                    
                    // Return the message
                return $this->JSErrorMsg('Please enter valid youtube link.');
            }
        }
        
        
        // Facebook link
        
        if ($facebook_link !== '') {
            
            // Valadation using filter var
            if (!filter_var($facebook_link, FILTER_VALIDATE_URL)) {
                    
                    // Return the message
                return $this->JSErrorMsg('Please enter valid facebook link.');
            }
        }
        
        // If seller note contain any things
        if ($saller_note !== '') {
            
            // Check with validation
            if (strlen($saller_note) < 5) {
                $this->JSErrorMsg('Please enter valid seller note.');
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
            $vpn = $this->ErrorMsg($reg, $meta_title, $this->JSErrorMsg('</i>Please enter valid meta title.'));
        
        
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
            $vpn = $this->ErrorMsg($reg, $meta_title, $this->JSErrorMsg('</i>Please enter valid meta keyworld 50-300 character.'));
        
        
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
            $vpn = $this->ErrorMsg($reg, $meta_title, $this->JSErrorMsg('</i>Please enter valid meta discription 50-300 character.'));
        
        
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
        $sku 					= 		htmlspecialchars($sku);
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
        if (!$stmt->execute()) {
            
            // return with the error
            return $this->JSErrorMsg($stmt->error);
        }
        
        

        /* bind result variables */
        /* store result */
        $stmt->store_result();
        
        // If number rows greater then
        if ($stmt->num_rows !== 0) {
            
            // return with the error
            return $this->JSErrorMsg('Sku '.$sku.' is already exists');
        }
        
        
         
        // Seller email address
        $seller_email = $this->SellerSession()->email;
        
        // Suppliers sku
        $supplier_sku = $seller_email;
        
        
        // Before inserting upload the images to get the file names
        $validateFiles = $this->UploadFileOop('option', '../img/product-images/', $sku);
        
        // If validateFieles is false
        if ($validateFiles === false) {
            
            // Select the image
            return $this->JSErrorMsg('Please select the product image.');
        }
        
    
        // Check if all file set is valid
        if (in_array(false, $this->isFileValid)) {
            
            // Return the message
            return $this->JSErrorMsg('Only jpg, jpeg, bmp, png, gif files are supported. Max file size only supported 500 KB.');
        }
        
        
        // Get the dbfilename and upload the file
        $dbfilesname = $this->FinalUploadFiles('option', '../img/product-images/', $sku);
        
        
        
        // Prepare the statement
        $stmt = $mysqli->prepare(
            "INSERT INTO product_catalogs(
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
													images,
													minimun_order
													) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"
                                            );
                                            
        
        // Bind the all paramets
        $stmt->bind_param(
            "sssssssssssssssssssssssssssssss",
                                                    
                                                    $seller_email,
                                                    $product_name,
                                                    $sku,
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
                                                    $dbfilesname,
                                                    $min_order
        );
        
        // Run the stmt execute
        if (!$stmt->execute()) {
            
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
        $stmt1->bind_param("sssssss", $product_id, $facebook_link, $youtube_link, $weblink, $latitude, $longitude, $dbfilesname);
        
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
        
    public function GetProductByCategory($categoryId)
    {
        
            // Get the connection
        $mysqli = $this->Connection();
            
        $sql = "SELECT seller_email, category_id,id, name,sku, images, regular_price, special_price, avaibility_from, (((regular_price - special_price )/regular_price) * 100) as discount, NOW() as current from product_catalogs where category_id= '$categoryId' and published = '0' and avaibility_from <= NOW() and  avaibility_to >= NOW()  limit 10";
            
        // Get the result
        $result = $mysqli->query($sql);
            
        // Run the query
        if (!$result) {
                
                // Return with the error
            return $mysqli->error;
        }
                
            
                
        // Check the number of rows
        if ($result->num_rows === 0) {
                
                // Return false
            return false;
        }
            
        // Or return the data
        $rows = [];
            
        while ($row = $result->fetch_assoc()) {
                
                // Get the all rows
            $rows[] = $row;
        }
                
            
        // Free the result
        $result->free();
            
            
        // Close the connection
        $mysqli->close();
            
        // Return the rows
        return $rows;
    }
        
    public function UploadFileOop($filename, $directory, $sku)
    {

        /* Get the each file access */
        $imgnames  = [];
        
        foreach ($_FILES[$filename]["name"] as $key => $value) {
            
                
            
            
            /* Check name or temp name */
            if ($_FILES[$filename]["tmp_name"][$key] === '') {
                return false;
            }
            
            // Type of files that accepted
            $filetypes = ['image/jpg', 'image/jpeg', 'image/bmp', 'image/png', 'image/gif'];
            
            // validation using in array
            if (!in_array($_FILES[$filename]["type"][$key], $filetypes) || $_FILES[$filename]["size"][$key] > 512000) {
                
                
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
        
        foreach ($_FILES[$filename]["name"] as $key => $value) {
            /* get the name  of file*/
            $name = $_FILES[$filename]["name"][$key];
            
            /* Get the temporory file name */
            $tmp = $_FILES[$filename]["tmp_name"][$key];
            
            /* Get the random character */
            $randchar = chr(rand(97, 122));
            
            /* get the random number */
            $number = rand(1, 100000);
            
            $explodfname = explode('.', $name);
            
            $newfilename = round(microtime(true)) .$number.'.' . end($explodfname);
            
            
            $imgnames[] = $newfilename;
            
            
            foreach ($imgnames as $key=> $value) {
                move_uploaded_file($tmp, "$directory/$newfilename");
                //$collection->remove();
            }
        }
        
        return json_encode($imgnames);
    }
    
    public function JSErrorMsg($message)
    {
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
    
    public function IsFormSubmitted()
    {
        
        // Check if button is submitted
        if (isset($_POST['submit'])) {
            
            // Return true
            return true ;
        }
            
        // Return false
        return false;
    }

    public function ErrorMsg($regression, $value, $errormsg)
    {
        
        // check with regression
        if (!preg_match($regression, $value)) {
            /* Return message */
            return $errormsg;
        }
            
        return true;
    }

    public function validateDate($date, $format = 'Y-m-d H:i:s')
    {
    
    // Date formate
        $d = DateTime::createFromFormat($format, $date);
    
        // Return the date formate
        return $d && $d->format($format) == $date;
    }

    public function isGeoValid($type, $value)
    {
    
    // Select the pattern
        $pattern = ($type == 'latitude')
        ? '/^(\+|-)?(?:90(?:(?:\.0{1,8})?)|(?:[0-9]|[1-8][0-9])(?:(?:\.[0-9]{1,8})?))$/'
        : '/^(\+|-)?(?:180(?:(?:\.0{1,8})?)|(?:[0-9]|[1-9][0-9]|1[0-7][0-9])(?:(?:\.[0-9]{1,8})?))$/';
    
        // Return preg match
        return  preg_match($pattern, $value);
    }
 
    public function UserRegistration()
    {
        
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
    
        if (!preg_match($reg, $firstname)) {
            return 'Invalid first name.';
        }
    
    
        // Last name
        if (!preg_match($reg, $lastname)) {
            return 'Invalid first name.';
        }
    
    
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 'Invalid email address.';
        }
    
        // Check the both password
        $reg = '/^[a-zA-Z0-9 ]{8,15}/';
    
        if (!preg_match($reg, $password)) {
        
        // Return the message
            return 'Password must be at least 8 characters.';
        }
    
        // Both password must be same
        if ($password !== $password_confirmation) {
            return 'Both password did not matched.';
        }
    
    
        // Check in this section if email adready exists
        $tablename = '';
    
        // Escape the string
        $email =
    // SQL
    $sql = "SELECT id from users where email = '$email' limit 1";
    
        // Run the sql query
        if (!$mysqli->query($sql)) {
        
        // Throw the mysqli error message
            return $mysqli->error;
        }
    
        // Check the number or rows that is affected
        $is_email_exists = $mysqli->affected_rows;
    
        // If that is equal to 1
    
        if ($is_email_exists === 1) {
        
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
        if (isset($_POST[$username]) && isset($_POST[$password])) {
            $_SESSION['usernameccf5fc0187'] = $uname;
            $_SESSION['passwordccf5fc0187'] = $upass;
            //printf("%s \r\n","<div class k 'note alert-success''lk>Sucespls</p></div>");
            
            echo 'loggedin';
        }
    }
    
    public function SEOproductName($name)
    {
        
        // Check the string
        $string = preg_replace("/[^0-9A-Za-z]+/", "-", $name);
        
        // Str to lower
        $string = strtolower($string);
        
        // Return the string
        return $string;
    }

    public function Registraion()
    {
 
        // If form is post
        if (isset($_POST['submit'])) {
            $firstname = $_POST['firstname'] ?? '';
            $lastname = $_POST['lastname'] ?? '';
            $email =	$_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $password_confirmation = $_POST['password_confirmation'] ?? '';
            $registered_as = $_POST['registered_as'] ?? '';
            $is_subscribed = $_POST['is_subscribed'] ?? '';
         
            $reg = '/^[a-zA-Z0-9 ]{2,150}$/';
         
            // Check the first name
            if (!preg_match($reg, $firstname)) {
                return 	$this->DisplayError('Please enter valid firstname.');
            }
            
            // Last name
        
            if (!preg_match($reg, $lastname)) {
                return 	$this->DisplayError('Please enter valid last name.');
            }
            
            
            // Validate email address
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
            // Return the message
                return $this->DisplayError('Please enter valid email address.');
            }
            
            
            // Check if restered as is set
            if (!isset($_POST['registered_as'])) {
                return 	$this->DisplayError('Please select registed as.');
            }
        
            // Check if password
            if ($this->checkPassword($password) !== true) {
            
                // Return error
                return $this->DisplayError($this->checkPassword($password));
            }
            
            
            // Check both password must match
            if ($password !== $password_confirmation) {
            
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
        
            // Seller or buyer address need to update togather
        
            // Seller or buyer address details here we go
            $tableaddress = '';
        
            // Addresss details
            $addressdatails = '';
        
        
            if ($usertype === '1') {
                $table = 'seller';
            
                $tableaddress = 'seller_address';
            
                // Some column is different
                $ssid = 'buyer_id';
            
                // Buyer address details
                $addressdatails = 'seller_address_details';
            } else {
                $table = 'buyer';
                
                // Else put another
                $ssid = 'seller_id';
                
                // Buyer table
                $tableaddress = 'buyer_address';
                
                // Buyer address details table
                $addressdatails = 'buyer_address_details';
            }
            
        
            // Hashed password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            // Run the sql queries
        
            // Verify the email address that is not exists
            // Writing sql for checking email already exists
            $sql = "SELECT id from $table where email = '$email'";
        
            // Run the query
            if (!$mysqli->query($sql)) {
            
                // Return the error
                return $this->DisplySuccessMsg($mysqli->error);
            }
        
            // Get the affected rows
            if ($mysqli->affected_rows !== 0) {
            
            // Return the error
                return $this->DisplayError('Email address '.$email.' is already registered.');
            }
             
            // Get the unique id for store_id and seller_id
            $seller_id = $this->SelleruniqueId();
             
            // Insert data to seller table
            $store_id = $this->SelleruniqueId();
            
            // Writing sql queries
            $sql = "INSERT INTO $table(firstname, lastname, email, password_hash, password,customer_type, create_at,store_id) VALUES('$firstname', '$lastname', '$email', '$hashed_password','$password', '$registered_as', NOW(), '$store_id')";
         
            // Insert data into the address table as well
            
            
            // Run the query
            if (!$mysqli->query($sql)) {
            
                // Return the error
                return $this->DisplySuccessMsg($mysqli->error);
            }
             
             
            /*
            $sql = "INSERT INTO $tableaddress(firstname, lastname,created_at) VALUES('$firstname', '$lastname', NOW())";


            // Run the query
            if(!$mysqli->query($sql)){

               // Return the error
                return $this->DisplySuccessMsg($mysqli->error);
        }
            */
        
            // Table address details goes here
            $sql = "INSERT INTO $addressdatails(email) VALUES('$email')";
         
         
            // Run the query
            if (!$mysqli->query($sql)) {
            
                // Return the error
                return $this->DisplySuccessMsg($mysqli->error.'Address details error.');
            }
            
        
            
            // Send the mail to the user
            $this->VerificationEmailTemlate($email, $registered_as);
        
            // Return the success message
            return $this->DisplySuccessMsg('Registraion succes, Please check your inbox or spam folder we have sent your activation link.');
        }
    }
        
    
    
    public function DisplayError($error)
    {
        
        // Return the html display
        return '<div class="alert alert-danger">
  <strong>Error ! </strong>'. $error .'
</div>';
    }
        
        
    public function DisplayError1($error)
    {
        
        // Return the html display
        return '<div class="message error">
		<div>
  <strong>Error ! </strong>'. $error .'
</div></div>';
    }
    
    public function DisplySuccessMsg($msg)
    {
        return '<div class="alert alert-success">
  <strong>Success! </strong> '.$msg.'
</div>';
    }
        
    public function DisplySuccessMsg1($msg)
    {
            
            // Return the html display
        return '<div class="message success">
		<div>
  <strong>Success ! </strong>'. $msg .'
</div></div>';
    }
        
    public function checkPassword($pwd)
    {
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

    public function VerificationEmailTemlate($to, $usertype)
    {
        $timestapm = time();
        
    
        $headers = 'From: info@sindhbad.com' . "\r\n" .
            'Reply-To: info@sindhbad.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            
        // Write curl request
        $curl = curl_init();
        
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
        
            // Set curl parameters
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => "http://sindhbad.com/verification-email-template.phtml?email=".$to."&when=".$timestapm."&usertype=".$usertype."",
            CURLOPT_USERAGENT => 'Sindhbad user email request'
        ));
        
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        
        // Close request to clear up some resources
        curl_close($curl);
        
        // Assign variable to message
        $message = $resp;
        
        // Set the subject
        $subject = "Thank you for registration, please verify your account.";
        
        // Check if mail failed then
        if (!mail($to, $subject, $message, $headers)) {
        
            // Return false
            return false;
        }

        // Return true
        return true;
    }

    // Mail with template

    public function mailTemplate()
    {
        
        // Setting headers
        $headers = 'From: info@sindhbad.com' . "\r\n" .
            'Reply-To: info@sindhbad.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        
        $message = '';
        
        // Subject
        $subject = "Thank you for registration, please verify your account.";
        
        // If mail not send
        if (!mail($to, $subject, $message, $headers)) {
            return false;
        }
    }

    public function VerifyEmailAddress()
    {
        
            // Get the paramaters
        if (isset($_GET['email']) && isset($_GET['when']) && isset($_GET['usertype'])) {
                
                    
                    // Get the email and when it was create
            $email = $_GET['email'];
                    
            // When
            $when = $_GET['when'];
                    
            // User type weather seller or buyer
            $usertype = $_GET['usertype'];
                        
                    
            // Regression
            $reg = '/^[0-9]{1}$/';
                    
            // usert type must be number
            if (!preg_match($reg, $usertype)) {
                return $this->DisplayError("Invaid paramaters accepted.");
            }
                    
            // Validate email address
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        
                        // Validate email address
                return $this->DisplayError("Invaid email address.");
            }

            // Change the date to
            $Registereddate = date('Y-m-d', $when);

            // Add 3 days

            $validDate = date('Y-m-d', strtotime($when. '+3 days'));
                    
            // If greater then days then
            if ($validDate > date('Y-m-d')) {
                return $this->DisplayError("Confirmation key is expired, please register again !.");
            }
                        
                        
            // Get the connection
            $mysqli = $this->Connection();
                    
            // Escape the string
            $email = $mysqli->real_escape_string($email);
                    
            // Table to select
            $table = '';
                    
            // using swith statement
            switch ($usertype) {
                        
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
            if (!$mysqli->query($sql)) {
                        
                            // throw the erro
                return $this->DisplayError($mysqli->error);
            }
                    
            // myse only one rows get affected
            if ($mysqli->affected_rows !== 1) {
                        
                            // throw the erro
                return $this->DisplayError('Email '.$email.' address unable to find.');
            }
                    
                    
            // If account is already verified then
            $sql = "SELECT id from $table where email = '$email' and verified = '1' limit 1";
                    
            // Run the query
            if (!$mysqli->query($sql)) {
                        
                        // Return the message
                return $this->DisplayError($mysqli->error);
            }
                    
                    
            // If rows affected
            if ($mysqli->affected_rows === 1) {
                        
                            // Return the message
                return $this->DisplySuccessMsg('Email address '.$email.' is already verified.');
            }
                    
                    
            // Update the datails then
            $sql = "UPDATE $table set verified = '1' where email = '$email'";
                    
            // Run the query
            if (!$mysqli->query($sql)) {
                        
                            // Return the message
                return $this->DisplayError($mysqli->error);
            }
                        
                    
            // Return the mesage
            return $this->DisplySuccessMsg('Eamil address '.$email. ' sucessfully verified !.');
                    
                    
            $mysqli->close();
        }
    }

    public function login($username, $password)
    {
        
        
        // If post the username and password
        if (isset($_POST['login'][$username]) && isset($_POST['login'][$password])) {
            
            // Then post the element
            $username = $_POST['login'][$username];
            
            // Then post password
            $password = $_POST['login'][$password];
            
            
            if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
                return $this->DisplayError("Please enter valid email address.");
            }
            
            
            // Password must not be empty
            if ($password === '') {
                return $this->DisplayError("Please enter valid password.");
            }
            
            $usertype = $_POST['login_as'] ?? '';
            
            // Login as must select
            if (!isset($_POST['login_as'])) {
                return $this->DisplayError("Please select login as.");
            }
                
                
            // table to select
            $table = '';
            
            // Switch the statement
            switch ($usertype) {
                
                case '1':
                $table = 'seller';
                break;
                
                case '0':
                $table = 'buyer';
                
                // no break
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
            if (!$mysqliquery) {
                return $this->DisplayError($mysqli->error);
            }
            
            
            // Rows must be one
            if ($mysqliquery->num_rows !== 1) {
                return $this->DisplayError('Unbale to login, uername and password did not found.');
            }
            
            
            
            $fetch_object = $mysqliquery->fetch_object();
            
            // Get the hased password
            $hassed_password  = $fetch_object->password_hash;
            
            // Match the password by hash password
            
            
            
            if (!password_verify($password, $hassed_password)) {
                
                // Invalid password
                return $this->DisplayError('Invalid password.');
            }
            
            // On the basic of usertype we are going to set the sesson
            
            // And redirection the the pages
            // Start the session
            
            
            if ($usertype === '1') {
                $_SESSION[$this->key1.'-username'] = $username;
                $_SESSION[$this->key1.'-password'] = $password;
                $_SESSION[$this->key1.'-usertype'] = $usertype;
                $_SESSION[$this->key1.'-time'] = time();
            
                // Clean (erase) the output buffer and turn off output buffering
                ob_end_clean();
                
                // If login type is seller value is 1 then dashboard
                header('Location: http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37');
            } elseif ($usertype === '0') {
                $_SESSION[$this->key1.'-username-buyer'] = $username;
                $_SESSION[$this->key1.'-password-buyer'] = $password;
                $_SESSION[$this->key1.'-usertype-buyer'] = $usertype;
                $_SESSION[$this->key1.'-time-buyer'] = time();
            
                // Clean (erase) the output buffer and turn off output buffering
                ob_end_clean();
                
                // Redirect to the user different interface
                header('Location: http://localhost/user-buyer-14e1813e3d0cf9da1a9dafc6afadff37');
            }
        }
    }

    public function StartSessionIfNot()
    {
    }
    
    public function DestroySession($sessionname, $sessiontime)
    {
    
    /* Check the session */
        if (!isset($_SESSION[$sessionname])) {
    
        /* Set session value to current time */
            $_SESSION[$sessionname] = time();
        } elseif (isset($_SESSION[$sessionname]) &&
                time() - $_SESSION[$sessionname] < $sessiontime) {
    
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

    public function IsUserLoggedInSeller()
    {
        if (isset($_SESSION['3vmigUCQdJGRrvG-username']) &&
        isset($_SESSION['3vmigUCQdJGRrvG-password']) &&
        isset($_SESSION['3vmigUCQdJGRrvG-usertype']) &&
        isset($_SESSION['3vmigUCQdJGRrvG-time']) &&
        $_SESSION['3vmigUCQdJGRrvG-usertype'] == '1'
    ) {
            return true;
        }
        
        return false;
    }


    public function IsUserLoggedInBuyer()
    {
        if (isset($_SESSION['3vmigUCQdJGRrvG-username-buyer']) &&
        isset($_SESSION['3vmigUCQdJGRrvG-password-buyer']) &&
        isset($_SESSION['3vmigUCQdJGRrvG-usertype-buyer']) &&
        isset($_SESSION['3vmigUCQdJGRrvG-time-buyer']) &&
        $_SESSION['3vmigUCQdJGRrvG-usertype-buyer'] === '0'
    ) {
            return true;
        }
        
        return false;
    }

    
    public function LogOut()
    {
        
        // Session is already started in the page
        // Where using this method
        
        // If this method is true
        if ($this->IsUserLoggedInSeller() === true) {
            
                // Unset the all session from this broweser
            unset($_SESSION['3vmigUCQdJGRrvG-username']);
            unset($_SESSION['3vmigUCQdJGRrvG-password']);
            unset($_SESSION['3vmigUCQdJGRrvG-usertype']);
            unset($_SESSION['3vmigUCQdJGRrvG-time']);
                
            // Clean (erase) the output buffer and turn off output buffering
            ob_end_clean();
            // Send the header
            header('Location:http://localhost/login');
        }
    }
    
    
    public function LogOutByer()
    {
        
        // Session is already started in the page
        // Where using this method
        
        // If this method is true
        if ($this->IsUserLoggedInBuyer() === true) {
            
                // Unset the all session from this broweser
            unset($_SESSION['3vmigUCQdJGRrvG-username-buyer']);
            unset($_SESSION['3vmigUCQdJGRrvG-password-buyer']);
            unset($_SESSION['3vmigUCQdJGRrvG-usertype-buyer']);
            unset($_SESSION['3vmigUCQdJGRrvG-time-buyer']);
                
            // Clean (erase) the output buffer and turn off output buffering
            ob_end_clean();
            // Send the header
            header('Location:http://localhost/login');
        }
    }
    
    
        
    public function SellerSession()
    {
        
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
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            
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
    
    public function BuyerSession()
    {
        
        // Start the session ;
        
        $email = $_SESSION['3vmigUCQdJGRrvG-username-buyer'] ?? '';
        
        // Get the password
        $password = $_SESSION['3vmigUCQdJGRrvG-password-buyer'] ?? '';
        
        // User type
        $usertype = $_SESSION['3vmigUCQdJGRrvG-usertype-buyer'] ?? '';
        
        // When session set
        $whenset = $_SESSION['3vmigUCQdJGRrvG-time-buyer'] ?? '';
        
        // Put everything is session
        $username = $_SESSION['3vmigUCQdJGRrvG-username-buyer'] ?? '';
        
        // If username is valid email
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            
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
    
    
    
    public function AdminSessionOut($secound)
    {
        
            // If session is deactivate for 30 Secound
        // Then unset the session
        // Science here we have 4 session for admin
        // Thefore we need to unset for session
        // This is mendotory for admin session
        // Letter we will do this part
            
        return $this->DestroySession('3vmigUCQdJGRrvG-time', 30);
    }

    public function uniqidReal($lenght = 13)
    {
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

    public function SelleruniqueId()
    {
        
        // Return the id
        return  sha1($this->uniqidReal());
    }
    
    public function StoreuniqueId()
    {
        return $this->uniqidReal();
    }

    public function PublicDirecotry()
    {
        
            // Get the document root /var/www/html
        $doc_root = $_SERVER['DOCUMENT_ROOT'];
            
        // Public dir
        $public_dir = $doc_root.'/img';
            
        return $public_dir;
    }

    public function getIndividualProduct($name, $id, $sku)
    {
        
            // Check that all the data is set
        if (!isset($_GET[$name]) && !isset($_GET[$id]) && !isset($_GET[$sku])) {
                
                    // Clean everthing and turn off ouput buffering
            // Clean (erase) the output buffer and turn off output buffering
            ob_end_clean();
                    
            header('Location:http://localhost');
        }
            
        // Get the variable
        $id = htmlspecialchars($_GET[$id]);
            
        // Get the sku
        $sku = htmlspecialchars($_GET[$sku]);
            
        // Get the connection
        $mysqli = $this->Connection();
            
        // Sql prepare statement
        $stmt = $mysqli->prepare("SELECT id,name,seller_email,
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
												minimun_order,
												product_unite,
												(((regular_price - special_price) /regular_price) * 100) as discount,
												images FROM product_catalogs
												
												WHERE id=? and sku=?");
                                                
        // Bind the paramaters
        $stmt->bind_param("ss", $id, $sku);
            
        // Execute the command
            
        if (!$stmt->execute()) {
                
                    // Return the message
            return $stmt->error;
        }
            
        /* store result */
        $result = $stmt->get_result();
            
             
        
        // Check if something is found
        if ($result->num_rows !== 1) {
                
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

    public function PublicDir()
    {
        return 'http://localhost/img/product-images';
    }
    
    public function GetProductByCategoryList($category_name, $category_id, $skip, $page)
    {
        
            // Get the connection
        if (isset($_GET[$category_name]) && isset($_GET[$category_id])  || isset($_GET['page'])) {
                
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
            
            $sql = "SELECT lower(category) as lowerCat, id, name,sku, images, regular_price, special_price, avaibility_from, (((regular_price - special_price )/regular_price) * 100) as discount, NOW() as current from product_catalogs where category_id= '$id' and lower(category) = '$category_name_raw' and published = '0' and avaibility_from <= NOW() and  avaibility_to >= NOW() LIMIT $skip, $page";
            
            // Get the result
            $result = $mysqli->query($sql);
            
            // Run the query
            if (!$result) {
                
                    // Return with the error
                return $mysqli->error;
            }
                
            // Check the number of rows
            if ($result->num_rows === 0) {
                        
                        // Return false
                return false;
            }
            
            // Or return the data
            $rows = [];
            
            while ($row = $result->fetch_assoc()) {
                
                // Get the all rows
                $rows[] = $row;
            }
                
            
            
            
            // Close the connection
            $mysqli->close();
            
            // Return the rows
            return $rows;
        }
    }
    
    
    
    
    public function CountTheRecords()
    {
        
            // Get the connection
        $mysqli = $this->Connection();
            
        // Sql
        $sql = "SELECT id from product_catalogs";
            
        // Run the query
        if (!$mysqli->query($sql)) {
                
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
    
    
    
   
    
    public function Pagination()
    {
        
        
            // Get the records
        $records = $this->CountTheRecords();
            
        // how many pages
        if ($records < 1) {
            return false;
        }
                
            
        // Record per page
        $rpp = $this->perpage;
            
            
        // Per page must be less then
        if ($rpp > $records) {
                
                    // Return false
            return false;
        }
                
        // Celing the record
        $tp = ceil($records/$rpp);
            
            
        // Return the pagination
        return $tp;
    }


	 public function PaginationOOP($NumberOfRecords)
    {
        
        
            // Get the records
        $records = $NumberOfRecords;
            
        // how many pages
        if ($records < 1) {
			
            return false;
        }
                
            
        // Record per page
        $rpp = $this->perpage;
            
            
        // Per page must be less then
        if ($rpp > $records) {
                
                    // Return false
            return false;
        }
                
        // Celing the record
        $tp = ceil($records/$rpp);
            
            
        // Return the pagination
        return $tp;
    }

    public function PerPageData($page, $category_id)
    {
        
            // Get the pages
        $page = $_POST['page'] ?? '';
            
        // Get the category id
        $category_id = $_POST['category_id'];
            
        // Writing the sql query
        $sql = "";
    }
    
    public function getPriceFormate($number)
    {
        
        settype($number, 'integer');
        
    // Set the local currency
        setlocale(LC_MONETARY, "en_US.UTF-8");
    
        $money = money_format("%i", $number);

        // Remove usd from money
        $price = str_replace('USD', '', $money);
    
        // Return the price
        return $price;
    }


    public function ProductMessageBySku()
    {
            
            
            // Check the session
        if ($this->IsUserLoggedInBuyer() !== true) {
                
                    // Return the error message
            return $this->DisplayError1("Please login as buyer.");
        }
        // Buyer must be logged in
            
        // Post the variable sku:sku, message: msg_product, subject: msg_subject
        $sku = $_POST['sku'] ?? '';
            
        // Message
        $message = $_POST['message'] ?? '';
            
        // Subject
        $subject = $_POST['subject'] ?? '';
            
        // Post product name
        $p_name = $_POST['p_name'] ?? '';
            
        // Product uri
        $product_uri = $_POST['product_uri'] ?? '';
            
        // Get the product images uri
        $image_uri = $_POST['image_uri'] ?? '';
            
        //product_uri, image_uri
            
        // Regression
        $reg = '/^[\w\d.- ]{2,}$/';
            
        // Validate all message
        if (strlen($subject) < 5) {
                
                    // return error
            return $this->DisplayError("Please enter valid subject.");
        }
            
        if (strlen($message) < 5) {
            return $this->DisplayError("Please enter valid message.");
        }
                
            
        // Get the connection
        $mysqli = $this->Connection();
            
            
        // Send must be usertype 0 is buyer
        $sql = "select seller_email from product_catalogs where sku = '$sku'";
            
        // Run the
        $query = $mysqli->query($sql);
            
        // Check the query
        if (!$query) {
                
                    // Return the error
            return $mysqli->error;
        }
            
            
        // feth the email address
        if ($query->num_rows !== 1) {
            return false;
        }
                
                
        // Get the result
        $seller_email = $query->fetch_object()->seller_email;

        // Get the buyer email address
        $buyer_email = $this->BuyerSession()->email;
            
        // Get the connection
        $receiver_type = '1';
            
        $sender_type = '0';
            
        // Close connectio
        $mysqli->close();
            
        $this->SendEmailToSeller($seller_email, $buyer_email, $subject, $p_name, $sku, $message, $product_uri, $image_uri);
            
        // Return true ;
        return $this->DisplySuccessMsg('Message sucessfully sent for the product '.$p_name.' to the seller with photo attached.');
    }
        
        
    public function SendEmailToSeller($seller_email, $buyer_email, $subject, $p_name, $p_sku, $message, $product_uri, $image_uri)
    {
        
        // Update on 24 July 2018 two variale is added argument is added
        //$product_uri, $image_uri
        
        // Setting headers
        $headers = 'From: info@sindhbad.com' . "\r\n" .
            'Reply-To: info@sindhbad.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        
        // Get the template with get request with following paramaters
        // Seller username, buyeremail, Subject, Message, ProductName, SKU

        // Curl init
        $ch = curl_init();
        
        // Setting url to request
        curl_setopt($ch, CURLOPT_URL, "http://sindhbad.com/buyer-message-email-template.phtml");
        
        // Enable post request
        curl_setopt($ch, CURLOPT_POST, 1);
        
        // Post the fields
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            'seller='.$seller_email.'&buyer_email='.$buyer_email.'&subject='.$subject.'&p_name='.$p_name.'&p_sku='.$p_sku.'&message='.$message.'&product_uri='.$product_uri.'&image_uri='.$image_uri
        );
        
        // Enable return transfer
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        // Ouput the data
        $server_output = curl_exec($ch);

        // Curl close the connection
        curl_close($ch);
        
        // Get the url
        $message = $server_output;
        
        // Subject
        $subject = "Dear customer, you have received message from buyer.";
        
        // If mail not send
        if (!mail($seller_email, $subject, $message, $headers)) {
        
            // Return false
            return false;
        }
    }

    public function GetBuyerMessage()
    {
        
            // Seller must be logged in to see the code
        if ($this->IsUserLoggedInSeller() !== true) {
            return false;
        }
                
        // Get the seller email address
        $seller_email = $this->SellerSession()->email;
            
        // Get the run the script
        // SUBSTRING(`text`, 1, 100)
            
        $sql = "SELECT concat(SUBSTRING(message, 1, 50), '....') as subMessage, sender, message_date, sender_type FROM chat_message where seen = '0' and sender != '$seller_email' GROUP BY sender ORDER BY message_date ";
            
            
        //$sql = "SELECT chat_message.sender, chat_message.message from chat_message UNION SELECT buyer.email from buyer where chat_message.sender = buyer.email";
            
            
            
        // Get the connection
        $mysqli = $this->Connection();
            
        // Run the query
        $query = $mysqli->query($sql);
            
        // iF QUERY IS NOT SUCCESS
        if (!$query) {
                    
                    // Return the error
            return $mysqli->error;
        }
                
                
        // Check the rows
        if ($query->num_rows < 1) {
                
                        // return null
            return null;
        }
        
        // Senderlist
        $senderlist = [];
            
            
        while ($row = $query->fetch_assoc()) {
                
                // Just get there username
            $row['username'] = strstr($row['sender'], '@', true);
                    
            // Time esclipted
            $row['time_escliped'] = $this->time_elapsed_string($row['message_date']);
            // Append to the string
            $senderlist[] = $row;
        }
                
                
        // count the message
        $count_message = count($senderlist);
            
            
            
        // We need to return two variable
        $getMessage = ['no_of_msg' => $count_message, 'getMessage'=> $senderlist];
            
                
        // Close the
        $mysqli->close();
            
        return $getMessage;
    }
        
        
    public function NoOfNewMessageToSeller()
    {
            
                // get the method
        if (isset($this->GetBuyerMessage()['no_of_msg']) && $this->GetBuyerMessage()['no_of_msg'] > 0) {
                    
                        // Return the number of rows
            return $this->GetBuyerMessage()['no_of_msg'];
        }
    }


    public function time_elapsed_string($datetime, $full = false)
    {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) {
            $string = array_slice($string, 0, 1);
        }
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

    public function getTemplate($template, $data, $regrex)
    {
        
		if(!is_array($data)) 
		{
			
				return false;
			}
        /* Data type each value must be array */
        $arrval = array_values($data);

        /* Is all value is array */
        $IsAllValArray = true;
        
        /* Loop and check */
        for ($i = 0; $i < count($arrval); $i++) {
            /* IF not array */
            if (!is_array($arrval[$i])) {
                // Set variable to false
                $IsAllValArray = false;
                
                // Break the loop
                break;
            }
        }

            
        /* Matches */
        $matches = array();

        /* Get matches */
        $getmatches = '';
        
        /* Check how many matches */
        if (preg_match_all($regrex, $template, $matches)) {
            // Get the matches
            $getmatches = $matches[1];
        }
        
        // Server keys
        $serverkeys = '';
        
        // Different keys
        $diffkey = '';
        
        // Sort the data
        sort($data);
        
        
        // Count if the data is more then 0
        if (count($data)> 0) {
            /* get the array keys */
            $serverkeys = array_keys($data[0]);
            
            /* Must not use undefined index */
            $diffkey = array_diff($getmatches, $serverkeys);
        }

        // Result variable
        $result = '';

        /* Go and loop each data and replace with it's value */
        $returndata = '';
        
        
        
        /* Loop each data */
        for ($j = 0; $j < count($data); $j++) {
            /* Get the template  */
            $output = $template;
            
            // Loop each data
            foreach ($data[$j] as $key => $value) {
                // Replace with regular expression
                $reg = str_replace('(.*?)', $key, $regrex);

                /* Check with regular expression */
                if (preg_match($reg, $template)) {
                    /* Replace with */
                    $output = preg_replace($reg, $value, $output);
                }
            }
            
            // Append the string
            $result .= $output;
        }
    
        // Return the result
        return $result;
    }

    public function AddToCart($sku, $name, $image, $qty, $price, $id)
    {
        
        // Check if post method
        if (isset($_POST[$sku]) && isset($_POST[$name])  && isset($_POST[$image]) && isset($_POST[$qty]) && isset($_POST[$qty]) && isset($_POST[$id])) {
                
                // Get the post equest
            $sku = $_POST[$sku] ?? '';
                
            // Get the name
            $name = $_POST[$name] ?? '';
                
            // Get the image s
            $image = $_POST[$image] ?? '';
                
            // Quentity
            $qty = $_POST[$qty] ?? '';
                
            // Price
            $price = $_POST[$price] ?? '';
                
            // Id
            $id = $_POST[$id] ?? '';

            // PCER
            $reg = '/^[0-9]{1,}$/';
                
                
                
            // Validate qty
            if (!preg_match($reg, $qty)) {
                    
                        // Return the error message
                return $this->DisplayError('Please enter valid quentity.');
            }
                    
            // Check the cookie name
            if (!isset($_COOKIE[$this->CartName()])) {
            
                // Setting cart data in array
                $cartdata = array(0=>array(
                                                "id"=>$id,
                                                "name"=>$name,
                                                "sku"=>$sku,
                                                "qty"=>$qty,
                                                "price"=>$price,
                                                "totalamount"=>$qty*$price,
                                                "image" => $image,
                                                'seller_email' => $_POST['seller_email']
                                    ));
                    
                // Encode the json data
                $cartdata = json_encode($cartdata);
                
                // Clean the
                // Set coookie
                setcookie($this->CartName(), $cartdata, time() +3600, '/', $_SERVER['SERVER_NAME']);
                
                // Return true
                return true;
            }
                
            // Return false
            $sameProduct = false;
    
            // Setting variable
            $i = 0;

            // Set json decoded message
            $_COOKIE[$this->CartName()] = json_decode($_COOKIE[$this->CartName()], 1);
                
            // Access each items
            foreach ($_COOKIE[$this->CartName()] as $eachItem) {
                
                /* Increase $i by ++*/
                $i++;
    
                /* List each index */
                while (list($key, $value) = each($eachItem)) {
                    /* If value pair matched */
                    if ($key == "id" && $value == $id) {
            
        /* Replace the index with new value by adding previouse value */
                        array_splice(
            $_COOKIE[$this->CartName()],
            $i-1,
            1,
            array(
        
        array(
                "id"=>$id,
                "name"=>$name,
                "sku"=>$sku,
                "qty"=>$eachItem["qty"]+$qty,
                "price"=>$price,
                "totalamount"=>$eachItem["totalamount"]+$qty*$price,
                "image" => $image,
                'seller_email' => $_POST['seller_email']
        )
    )
);
        
                        /* Encode data now */
                        $_COOKIE[$this->CartName()] = json_encode($_COOKIE[$this->CartName()]);
        
                        /* Set cookie */
                        setcookie($this->CartName(), $_COOKIE[$this->CartName()], time() +3600, '/', $_SERVER['SERVER_NAME']);
        
                        /* Set variable to true */
                        $sameProduct = true;
                    }
                }
            }
            // Check if the variable is false
            if ($sameProduct == false) {
    
// push then new index in the array
                $getcookie = $_COOKIE[$this->CartName()];

                /* Push the value in array */
                array_push(
    $_COOKIE[$this->CartName()],
    array(
                                            "id"=>$id,
                                            "name" => $name,
                                            "sku"=>$sku,
                                            "qty"=>$qty,
                                            "price"=>$price,
                                            "totalamount"=>$qty*$price,
                                            "image" => $image,
                                            'seller_email' => $_POST['seller_email']
                                            )
                                        );

                /* Encode the array data in json format */
                $_COOKIE[$this->CartName()] = json_encode($_COOKIE[$this->CartName()]);

                /* Set cookie in client broweser */
                setcookie($this->CartName(), $_COOKIE[$this->CartName()], time() +3600, '/', $_SERVER['SERVER_NAME']);
            }

            // Return from here
            return true;
        }
    }
        
        
    public function CartName()
    {
        return 'shopping-cart265985989';
    }

    public function GetCart()
    {
        
            
            // Check if cart set
        if (isset($_COOKIE[$this->CartName()]) and count($_COOKIE[$this->CartName()]) > 0) {
                
                    // Return the cart
            return json_decode($_COOKIE[$this->CartName()], 1);
        }
    }
        
        
    public function GetSum($var, $index)
    {
        $get = array_sum(
            array_map(function ($var) use ($index) {
                return $var[$index];
            }, $var)
);

        return $get;
    }
    
    
    public function CartTotleAmount()
    {
        
            // Check if cart set
        if (count($this->GetCart()) > 0) {
            return $this->GetSum($this->GetCart(), 'totalamount');
        }
    }
        
    public function CartTotleQty()
    {
        
            // Check if cart set
        if (count($this->GetCart()) > 0) {
                    
                    // Get the all counted
            return $this->GetSum($this->GetCart(), 'qty');
        }
    }
    
    public function TaxOnCart()
    {
        if ($this->CartTotleAmount() !== null) {
                
                // If cart total is less then 100
            if ($this->CartTotleAmount() < 100) {
                return (($this->CartTotleAmount()+20)/100) * 5;
            }
            return ($this->CartTotleAmount()/100) * 5;
            // You will never understand about this
        }
    }

    public function CartTotleAmountWithTax()
    {
        
            // Check if both are not null
        if ($this->CartTotleAmount() !== null && $this->TaxOnCart() !== null) {
                
                    // IF cart amount is less then 100 then
            if ($this->CartTotleAmount() < 100) {
                        
                        // Add 20 AED to the cart for a while
                return $this->CartTotleAmount() + $this->TaxOnCart() + 20;
            }
                    
            // Without the shipping cost
            return $this->CartTotleAmount() + $this->TaxOnCart();
        }
    }
    
    public function EditCart($sku, $id, $qty)
    {
        
            // Check if everthing is post
        if (isset($_POST[$id]) && isset($_POST[$sku]) && isset($_POST[$qty])) {
                
                    // Quentiy must be number
            $reg = '/^[0-9]{1,}$/';
                    
            // Not matched
            if (!preg_match($reg, $_POST[$qty]) || $_POST[$qty] == 0) {
                        
                            // Return error
                return $this->DisplayError1('Please enter valid quentity.');
            }
                    
            // If cart is not null
            if ($this->GetCart() !== null) {
                        
                        // Loop throut the data
                if ($this->FindCartIndex($this->GetCart(), 'id', $_POST[$id]) !== false) {
                            
                            // This
                    $index = $this->FindCartIndex($this->GetCart(), 'id', $_POST[$id]);
                            
                    // $get qty =
                    $getqty = $_POST[$qty];
                            
                        
                    // Get the price
                    $price = $this->GetCart()[$index]['price'];
                            
                    // New amount
                    $newAmount = $getqty * $price;
                            
                    // Set new variable to the cart
                    $cartdat  = $this->GetCart();
                            
                            
                    //$newCartData = json_encode($newCartData);
                    $cartdat[$index]['qty'] = $getqty;
                            
                    // Set the total amount
                    $cartdat[$index]['totalamount'] = $newAmount;
                            
                    // Set the new cookie
                    return setcookie($this->CartName(), json_encode($cartdat), time() +3600, '/', $_SERVER['SERVER_NAME']);
                            
                            
                    // Return true
                }
            }
        }
    }
    
    
    public function FindCartItem($arr, $index, $value)
    {
        
            
            // Loop each data
        foreach ($arr as $eachItem) {
                
                    // check if index is matched
            if (isset($eachItem[$index])  && $eachItem[$index] == $value) {
                    
                    // Return the items
                return $eachItem;
            }
        }
                    
        // Return false
        return false;
    }
    
    
    public function FindCartIndex($arr, $index, $value)
    {
        $i = 0;
        // Loop each data
        foreach ($arr as $eachItem) {
                
                    // check if index is matched
            if (isset($eachItem[$index])  && $eachItem[$index] == $value) {

                    // Return the items
                return $i;
            }
            
            $i++;
        }
        
        return false;
    }
    
    public function RemoveCartItem($id)
    {
        
            // Get the cart first
        if (isset($_POST[$id])) {
                    
                    // Get the the id
            $id = $_POST[$id];
                    
            // If there is cart items
            if ($this->GetCart() !== null) {
                $cart_cookie = $this->GetCart();
                            
                // find the cart column
                $index = $this->FindCartIndex($cart_cookie, 'id', $id);
                            
                            
                // Unset the cart data
                unset($cart_cookie[$index]);
                            
                // Sort the array
                sort($cart_cookie);
                            
                // json encode
                $newCartValue = json_encode($cart_cookie);
                            
                            
                // Set new cookies
                // IF count array data is 0 then
                if (count($cart_cookie) === 0) {
                                
                                    // Unset the cookies
                    return setcookie($this->CartName(), $newCartValue, time() - 3600, '/', $_SERVER['SERVER_NAME']);
                } else {
                    return setcookie($this->CartName(), $newCartValue, time() +3600, '/', $_SERVER['SERVER_NAME']);
                }
            }
        }
    }

    public function emptyCart()
    {
        
        // Check if cart is not null
        if ($this->GetCart() !== null) {
            
                // Set Cookie to past
            return setcookie($this->CartName(), '', time() - 3600, '/', $_SERVER['SERVER_NAME']);
        }
    }
    
    public function process_checkout()
    {
        
            // Check that user buyer session is set
        if ($this->IsUserLoggedInBuyer() !== true) {
                
                    // Return false
            return false;
        }
    }

    public function iSFreeShipping()
    {
        
            // Will return null if order is more then 100 AED
            
        // Get the cart total amount
        if ($this->CartTotleAmount() !== null) {
                    
                    // Get the total amount
            if ($this->CartTotleAmount() < 100) {
                        
                            // Remaining amount
                return 100 - $this->CartTotleAmount();
            }
        }
    }
        
        
    public function ShippingCostApply()
    {
        if ($this->CartTotleAmount() < 100) {
                
                    // Return true
            return true;
        }
    }
    
    public function CartTotalAmount()
    {
        
        // If amount less then 100 then
        if ($this->CartTotleAmount() < 100) {
        }
    }
    
    public function FirstAndLastBuyerName()
    {
        
            // IF buyer is logged in
        if ($this->IsUserLoggedInBuyer() !== true) {
                
                    // Retur false
            return false;
        }
                
            
        //return $this->BuyerSession();
            
        // Get the email address of buyer
        $buyer_email = $this->BuyerSession()->email;
            
        // get the connection
        $mysqli = $this->Connection();
            
        // Table name
        $tablename = 'buyer';
            
        // Sql
        $sql = "SELECT firstname, lastname from $tablename where email = '$buyer_email'";
            
        // query
        $query = $mysqli->query($sql);
            
        // If failed
        if (!$query) {
                
                    // Return the error
            return $mysqli->error;
        }
                
        // If row must be equal to 1
        if ($query->num_rows !== 1) {
                
                    // Return false
            return false;
        }
            
        // Get the rows
        $result = $query->fetch_array();
            
            
        // Free result
        $query->free_result();
            
        // Close the connection
        $mysqli->close();
            
        // Return the result
        return $result;
    }
        
    public function IsBuyerShippingProvided()
    {
        
            // Get the connection
        $mysqli = $this->Connection();
            
        // Check if user buyer is not logged in
        $buyer_email = $this->BuyerSession()->email;
            
        // Sql query
        $sql = "SELECT id from buyer_address_details where 
							email = '$buyer_email' and 
							country = '' and 
							city = '' and 
							area IS NULL and 
							street_no = '' and 
							building_no = '' and 
							landmark = '' and 
							location_type = '' and 
							mobile_no = 0";
            
        // query
        $query = $mysqli->query($sql);
            
        // If faise
        if (!$query) {
                
                    // Return
            return $mysqli->error;
        }
                
            
        // Check one rows should get affected
        if ($query->num_rows !== 1) {
                
                    // Return false;
            return true;
        }
                
            
            
        // Close the connection
        $mysqli->close();
            
        // Return false
        return false;
    }
        
    
    public function UpdateBuyerShippingDetails()
    {
        if (isset($_POST ['submit'])) {
            
            // Post the data
            $first_name		= 		$_POST['first-name'] ?? '';
            $last_name		= 		$_POST['last-name'] ?? '';
            $country 		= 		$_POST['country'] ?? '';
            $city			= 		$_POST['city'] ?? '';
            $AddressArea 	= 		$_POST['AddressArea'] ?? '';
            $street 		= 		$_POST['street'] ?? '';
            $building_name 	= 		$_POST['building-name'] ?? '';
            $floor_no 		= 		$_POST['floor-no'] ?? '';
            $apartment_no 	= 		$_POST['apartment-no'] ?? '';
            $landmark 		= 		$_POST['landmark'] ?? '';
            $locationtype 	= 		$_POST['locationtype'] ?? '';
            $mobile_no	 	= 		$_POST['mobile-no'] ?? '';
            $land_line_no  	=       $_POST['land-line-no'] ?? '';
            $latitude      	=       $_POST['latitude'] ?? '';
            $longitude    	=       $_POST['longitude'] ?? '';
            $shipping_note 	=       $_POST['shipping-note'] ?? '';
            $document_link = '';
            
            
            // Get the buyer session email address
            $buyer_email = $this->BuyerSession()->email;
            
            // Get the connection
            $mysqli = $this->Connection();
            
            // Updating buyer table
            $stmt = $mysqli->prepare("UPDATE buyer set firstname = ?, lastname = ? where email = '$buyer_email'");
            
            // Execute the query
            // Execute the statement
            if ($stmt === false) {
                
                    // Return error
                return trigger_error($mysqli->error, E_USER_ERROR);
            }
                
            // Bind the paramaters
            $stmt->bind_param("ss", $first_name, $last_name);
            
            // Execute the statement
            // execute the statement
            if (!$stmt->execute()) {
                
                    // Return error
                return $stmt->error;
            }
            
            
            
            // Table name
            $table = 'buyer_address_details';
            
            // Create preapre statement
            $stmt = $mysqli->prepare(
                                "UPDATE 
								$table set 
								country = ?,
								city = ?,
								area = ?,
								street_no = ?,
								building_no = ?,
								floor_no= ?,
								landmark = ?,
								location_type = ?,
								mobile_no = ?,
								land_line_no = ?,
								latitude = ?,
								longititude = ?,
								shipping_note = ?,
								document_link = ?
								WHERE email = ?"
                                );
            
            
            // Execute the statement
            if ($stmt === false) {
                
                    // Return error
                return trigger_error($mysqli->error, E_USER_ERROR);
            }
                
            
            // Bind the paramaters
            //$stmt->bind_param("sssssssssssssss")
            // Close the connection
            $stmt->bind_param(
                "sssssssssssssss",
                $country,
                                                $city,
                                                $AddressArea,
                                                $street,
                                                $building_name,
                                                $floor_no,
                                                $landmark,
                                                $locationtype,
                                                $mobile_no,
                                                $land_line_no,
                                                $latitude,
                                                $longitude,
                                                $shipping_note,
                                                $document_link,
                                                $buyer_email
                                                );
            
            // execute the statement
            if (!$stmt->execute()) {
                
                    // Return error
                return $stmt->error;
            }
            
            // Close the connection
            $stmt->close();
            
            // Close mysqli connection
            $mysqli->close();
            
            // Return true
            return true;
        }
    }
    
    
    public function GetBuyerShippingDetails()
    {
        
            // Get the details shipping of details

        // Get the connection
        $mysqli = $this->Connection();
             
        // Get the buyer session email address
        $buyer_email = $this->BuyerSession()->email;
            
        // Table one
        $table1 = 'buyer_address_details';
            
        // Sql
        $sql = "SELECT $table1.area,
							$table1.street_no,
							$table1.building_no,
							$table1.floor_no,
							$table1.landmark ,
							$table1.location_type,
							$table1.mobile_no,
							$table1.land_line_no,
							$table1.latitude,
							$table1.longititude,
							$table1.shipping_note,
							$table1.document_link,
							$table1.country,
							$table1.city,
							
							buyer.firstname,
							buyer.lastname

							From
							
							buyer_address_details,
							buyer
							WHERE  buyer.email = '$buyer_email' and buyer_address_details. id = buyer.id and 
							buyer_address_details.email = '$buyer_email'";
             
        // Run the query
        $query = $mysqli->query($sql);
             
        // If query fails
        if (!$query) {
                 
                    // Return mysqli error
            return $mysqli->error;
        }
                 
        // Check if rows num
        if ($query->num_rows !== 1) {
                    
                    // Return false
                    //return false;
        }
                
        // Result
        $result = $query->fetch_assoc();
            
        // Free result
        $query->free_result();
            
        // Close the connection
        $mysqli->close();
             
        // Return the data
        return $result;
    }
        
    public function ISOCountryList()
    {
        $arrCountryCodes = array(
                'AF' => 'AFGHANISTAN',
                'AL' => 'ALBANIA',
                'DZ' => 'ALGERIA',
                'AS' => 'AMERICAN SAMOA',
                'AD' => 'ANDORRA',
                'AO' => 'ANGOLA',
                'AI' => 'ANGUILLA',
                'AQ' => 'ANTARCTICA',
                'AG' => 'ANTIGUA AND BARBUDA',
                'AR' => 'ARGENTINA',
                'AM' => 'ARMENIA',
                'AW' => 'ARUBA',
                'AU' => 'AUSTRALIA',
                'AT' => 'AUSTRIA',
                'AZ' => 'AZERBAIJAN',
                'BS' => 'BAHAMAS',
                'BH' => 'BAHRAIN',
                'BD' => 'BANGLADESH',
                'BB' => 'BARBADOS',
                'BY' => 'BELARUS',
                'BE' => 'BELGIUM',
                'BZ' => 'BELIZE',
                'BJ' => 'BENIN',
                'BM' => 'BERMUDA',
                'BT' => 'BHUTAN',
                'BO' => 'BOLIVIA, PLURINATIONAL STATE OF',
                'BQ' => 'BONAIRE, SINT EUSTATIUS AND SABA',
                'BA' => 'BOSNIA AND HERZEGOVINA',
                'BW' => 'BOTSWANA',
                'BV' => 'BOUVET ISLAND',
                'BR' => 'BRAZIL',
                'IO' => 'BRITISH INDIAN OCEAN TERRITORY',
                'BN' => 'BRUNEI DARUSSALAM',
                'BG' => 'BULGARIA',
                'BF' => 'BURKINA FASO',
                'BI' => 'BURUNDI',
                'KH' => 'CAMBODIA',
                'CM' => 'CAMEROON',
                'CA' => 'CANADA',
                'CV' => 'CAPE VERDE',
                'KY' => 'CAYMAN ISLANDS',
                'CF' => 'CENTRAL AFRICAN REPUBLIC',
                'TD' => 'CHAD',
                'CL' => 'CHILE',
                'CN' => 'CHINA',
                'CX' => 'CHRISTMAS ISLAND',
                'CC' => 'COCOS (KEELING) ISLANDS',
                'CO' => 'COLOMBIA',
                'KM' => 'COMOROS',
                'CG' => 'CONGO',
                'CD' => 'CONGO, THE DEMOCRATIC REPUBLIC OF THE',
                'CK' => 'COOK ISLANDS',
                'CR' => 'COSTA RICA',
                'CI' => 'COTE DIVOIRE',
                'HR' => 'CROATIA',
                'CU' => 'CUBA',
                'CW' => 'CURACAO',
                'CY' => 'CYPRUS',
                'CZ' => 'CZECH REPUBLIC',
                'DK' => 'DENMARK',
                'DJ' => 'DJIBOUTI',
                'DM' => 'DOMINICA',
                'DO' => 'DOMINICAN REPUBLIC',
                'EC' => 'ECUADOR',
                'EG' => 'EGYPT',
                'SV' => 'EL SALVADOR',
                'GQ' => 'EQUATORIAL GUINEA',
                'ER' => 'ERITREA',
                'EE' => 'ESTONIA',
                'ET' => 'ETHIOPIA',
                'FK' => 'FALKLAND ISLANDS (MALVINAS)',
                'FO' => 'FAROE ISLANDS',
                'FJ' => 'FIJI',
                'FI' => 'FINLAND',
                'FR' => 'FRANCE',
                'GF' => 'FRENCH GUIANA',
                'PF' => 'FRENCH POLYNESIA',
                'TF' => 'FRENCH SOUTHERN TERRITORIES',
                'GA' => 'GABON',
                'GM' => 'GAMBIA',
                'GE' => 'GEORGIA',
                'DE' => 'GERMANY',
                'GH' => 'GHANA',
                'GI' => 'GIBRALTAR',
                'GR' => 'GREECE',
                'GL' => 'GREENLAND',
                'GD' => 'GRENADA',
                'GP' => 'GUADELOUPE',
                'GU' => 'GUAM',
                'GT' => 'GUATEMALA',
                'GG' => 'GUERNSEY',
                'GN' => 'GUINEA',
                'GW' => 'GUINEA-BISSAU',
                'GY' => 'GUYANA',
                'HT' => 'HAITI',
                'HM' => 'HEARD ISLAND AND MCDONALD ISLANDS',
                'VA' => 'HOLY SEE (VATICAN CITY STATE)',
                'HN' => 'HONDURAS',
                'HK' => 'HONG KONG',
                'HU' => 'HUNGARY',
                'IS' => 'ICELAND',
                'IN' => 'INDIA',
                'ID' => 'INDONESIA',
                'IR' => 'IRAN, ISLAMIC REPUBLIC OF',
                'IQ' => 'IRAQ',
                'IE' => 'IRELAND',
                'IM' => 'ISLE OF MAN',
                'IL' => 'ISRAEL',
                'IT' => 'ITALY',
                'JM' => 'JAMAICA',
                'JP' => 'JAPAN',
                'JE' => 'JERSEY',
                'JO' => 'JORDAN',
                'KZ' => 'KAZAKHSTAN',
                'KE' => 'KENYA',
                'KI' => 'KIRIBATI',
                'KP' => 'KOREA, DEMOCRATIC PEOPLES REPUBLIC OF',
                'KR' => 'KOREA, REPUBLIC OF',
                'KW' => 'KUWAIT',
                'KG' => 'KYRGYZSTAN',
                'LA' => 'LAO PEOPLES DEMOCRATIC REPUBLIC',
                'LV' => 'LATVIA',
                'LB' => 'LEBANON',
                'LS' => 'LESOTHO',
                'LR' => 'LIBERIA',
                'LY' => 'LIBYA',
                'LI' => 'LIECHTENSTEIN',
                'LT' => 'LITHUANIA',
                'LU' => 'LUXEMBOURG',
                'MO' => 'MACAO',
                'MK' => 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',
                'MG' => 'MADAGASCAR',
                'MW' => 'MALAWI',
                'MY' => 'MALAYSIA',
                'MV' => 'MALDIVES',
                'ML' => 'MALI',
                'MT' => 'MALTA',
                'MH' => 'MARSHALL ISLANDS',
                'MQ' => 'MARTINIQUE',
                'MR' => 'MAURITANIA',
                'MU' => 'MAURITIUS',
                'YT' => 'MAYOTTE',
                'MX' => 'MEXICO',
                'FM' => 'MICRONESIA, FEDERATED STATES OF',
                'MD' => 'MOLDOVA, REPUBLIC OF',
                'MC' => 'MONACO',
                'MN' => 'MONGOLIA',
                'ME' => 'MONTENEGRO',
                'MS' => 'MONTSERRAT',
                'MA' => 'MOROCCO',
                'MZ' => 'MOZAMBIQUE',
                'MM' => 'MYANMAR',
                'NA' => 'NAMIBIA',
                'NR' => 'NAURU',
                'NP' => 'NEPAL',
                'NL' => 'NETHERLANDS',
                'NC' => 'NEW CALEDONIA',
                'NZ' => 'NEW ZEALAND',
                'NI' => 'NICARAGUA',
                'NE' => 'NIGER',
                'NG' => 'NIGERIA',
                'NU' => 'NIUE',
                'NF' => 'NORFOLK ISLAND',
                'MP' => 'NORTHERN MARIANA ISLANDS',
                'NO' => 'NORWAY',
                'OM' => 'OMAN',
                'PK' => 'PAKISTAN',
                'PW' => 'PALAU',
                'PS' => 'PALESTINE, STATE OF',
                'PA' => 'PANAMA',
                'PG' => 'PAPUA NEW GUINEA',
                'PY' => 'PARAGUAY',
                'PE' => 'PERU',
                'PH' => 'PHILIPPINES',
                'PN' => 'PITCAIRN',
                'PL' => 'POLAND',
                'PT' => 'PORTUGAL',
                'PR' => 'PUERTO RICO',
                'QA' => 'QATAR',
                'RE' => 'REUNION',
                'RO' => 'ROMANIA',
                'RU' => 'RUSSIAN FEDERATION',
                'RW' => 'RWANDA',
                'BL' => 'SAINT BARTH√âLEMY',
                'SH' => 'SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA',
                'KN' => 'SAINT KITTS AND NEVIS',
                'LC' => 'SAINT LUCIA',
                'MF' => 'SAINT MARTIN (FRENCH PART)',
                'PM' => 'SAINT PIERRE AND MIQUELON',
                'VC' => 'SAINT VINCENT AND THE GRENADINES',
                'WS' => 'SAMOA',
                'SM' => 'SAN MARINO',
                'ST' => 'SAO TOME AND PRINCIPE',
                'SA' => 'SAUDI ARABIA',
                'SN' => 'SENEGAL',
                'RS' => 'SERBIA',
                'SC' => 'SEYCHELLES',
                'SL' => 'SIERRA LEONE',
                'SG' => 'SINGAPORE',
                'SX' => 'SINT MAARTEN (DUTCH PART)',
                'SK' => 'SLOVAKIA',
                'SI' => 'SLOVENIA',
                'SB' => 'SOLOMON ISLANDS',
                'SO' => 'SOMALIA',
                'ZA' => 'SOUTH AFRICA',
                'GS' => 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS',
                'SS' => 'SOUTH SUDAN',
                'ES' => 'SPAIN',
                'LK' => 'SRI LANKA',
                'SD' => 'SUDAN',
                'SR' => 'SURINAME',
                'SJ' => 'SVALBARD AND JAN MAYEN',
                'SZ' => 'SWAZILAND',
                'SE' => 'SWEDEN',
                'CH' => 'SWITZERLAND',
                'SY' => 'SYRIAN ARAB REPUBLIC',
                'TW' => 'TAIWAN, PROVINCE OF CHINA',
                'TJ' => 'TAJIKISTAN',
                'TZ' => 'TANZANIA, UNITED REPUBLIC OF',
                'TH' => 'THAILAND',
                'TL' => 'TIMOR-LESTE',
                'TG' => 'TOGO',
                'TK' => 'TOKELAU',
                'TO' => 'TONGA',
                'TT' => 'TRINIDAD AND TOBAGO',
                'TN' => 'TUNISIA',
                'TR' => 'TURKEY',
                'TM' => 'TURKMENISTAN',
                'TC' => 'TURKS AND CAICOS ISLANDS',
                'TV' => 'TUVALU',
                'UG' => 'UGANDA',
                'UA' => 'UKRAINE',
                'AE' => 'UNITED ARAB EMIRATES',
                'GB' => 'UNITED KINGDOM',
                'US' => 'UNITED STATES',
                'UM' => 'UNITED STATES MINOR OUTLYING ISLANDS',
                'UY' => 'URUGUAY',
                'UZ' => 'UZBEKISTAN',
                'VU' => 'VANUATU',
                'VE' => 'VENEZUELA, BOLIVARIAN REPUBLIC OF',
                'VN' => 'VIET NAM',
                'VG' => 'VIRGIN ISLANDS, BRITISH',
                'VI' => 'VIRGIN ISLANDS, U.S.',
                'WF' => 'WALLIS AND FUTUNA',
                'EH' => 'WESTERN SAHARA',
                'YE' => 'YEMEN',
                'ZM' => 'ZAMBIA',
                'ZW' => 'ZIMBABWE'
            );
            
            
        // Return  the variale
        return $arrCountryCodes;
    }
        
    public function ISOUAEcities()
    {
        
            // Iso UAE cities
        $UAEcities = [
                            'DXB' => 'Dubai',
                            'AUH' => 'Abu Dhabi',
                            'ANN' => 'Al Ain',
                            'QAJ' => 'Ajman',
                            'FJR' => 'Fujairah',
                            'SHJ' => 'Sharjah',
                            'RKT' => 'Ras Al Khaima',
                            'QIW' => 'Um Al Quiwan'
                        ];
        
        // Return the cities
        return $UAEcities;
    }
    
    public function TrackBuyerActivities()
    {

        // IF buyer is logged in
        if ($this->IsUserLoggedInBuyer() !== true) {
                
                    // Retur false
            return false;
        }
        
        // Get the post request
        $buyer_email = $this->BuyerSession()->email;
        
        // Post the reamin data
        
        $sku = $_POST['sku'];
        
        // Categry id
        $category_id = $_POST['category_id'];
        
        
        // Get the connection
        $mysqli = $this->Connection();
         
        // Table name
        $tablename = 'recently_viewed_product';
         
        /* Model Design
         * /*
        * id int AUTO_INCREMENT PRIMARY KEY UNIQUE KEY,
           email VARCHAR(225) UNIQUE KEY,
           seen datetime not null,
           product_sku char(150) not null,
           product_category_id int(45) not null,
           FOREIGN KEY (email) REFERENCES buyer(email)
           )ENGINE = INNODB DEFAULT CHARSET = utf8";
        * */
         
        // If sku is matched then just update seen time
        $stmt = $mysqli->prepare("SELECT id from $tablename WHERE product_sku = ? AND email = ?");
         
        // Bind paramaters
        $stmt->bind_param('ss', $sku, $buyer_email);
         
        // Execute the statement
        if (!$stmt->execute()) {
             
                // Return error
            return $stmt->error;
        }
            
        // Store result
        $stmt->store_result();
        
        // Get if
        if ($stmt->num_rows === 1) {
            
                // Update the column
            $stmt = $mysqli->prepare("UPDATE $tablename SET seen = NOW() WHERE product_sku = ? and email = ?");
                
            if ($stmt === false) {
                return $mysqli->error;
            }
            // Bind the paramater
            $stmt->bind_param("ss", $sku, $buyer_email);
                
            // Execute
            if (!$stmt->execute()) {
                    
                    // Return the error
                return $stmt->error;
            }
                
            // Close the connection
            $stmt->close();
                
            // Close mysqli
            $mysqli->close();
                
            // Return true
            return true;
        }
         
        // Prepare the sql
        $stmt = $mysqli->prepare("INSERT INTO $tablename(email,seen,product_sku, product_category_id)VALUES(?, NOW(),?,?)");
         
        // Bin the paramaters
        $stmt->bind_param("sss", $buyer_email, $sku, $category_id);
         
        // Execute the statement
        if (!$stmt->execute()) {
            
                // Return the error
            return $stmt->error;
        }
         
        // No reason to free up the memory
        $stmt->free_result();
         
        // Close stmt
        $stmt->close();
         
        // Close the connetion
        $mysqli->close();
        
        // Return somethings
        return true;
    }

    // Return array if data found or else empty array
    public function RecentlyViewedProduct(int $pageNo):array
    {
        
        // Will holds all data
        $rows = [];

        // IF buyer is logged in
        if ($this->IsUserLoggedInBuyer() === true) {
                
            // Get the connection
            $mysqli = $this->Connection();
            
            // Table to select
            $tablename = 'recently_viewed_product';
            
            // Get the email to buyer
            $buyer_email = $this->BuyerSession()->email;
            
            // Reduce on by
    
            // Skip document
            $skip = $this->perpage * $pageNo;
            
            // Limit
            $limit = $this->perpage;
            
            // Prepare Sql
            $sql = "SELECT product_sku, 
					product_catalogs.name,
					product_catalogs.category_id,
					product_catalogs.id, 
					product_catalogs.name,
					product_catalogs.images, 
					product_catalogs.regular_price, 
					product_catalogs.special_price, 
					product_catalogs.avaibility_from, 
					(((product_catalogs.regular_price - product_catalogs.special_price )/product_catalogs.regular_price) * 100) as discount
					FROM ( $tablename 
					INNER JOIN product_catalogs ON 
					recently_viewed_product.product_sku = product_catalogs.sku )
					where email = '$buyer_email' AND 
					product_catalogs.published = '0' AND 
					product_catalogs.avaibility_from <= NOW() AND 
					product_catalogs.avaibility_to >= NOW() 
					ORDER BY seen DESC LIMIT $skip, $limit";
            
            // Execute the query
            $execute = $mysqli->query($sql);
            
            //if(!$execute) { return $mysqli->error;}
            
            // If not fails
            if ($execute) {

                    // Fetch assoc
                while ($result = $execute->fetch_assoc()) {
                        
                            // Append to string
                    $rows[] = $result;
                }
                        
                
                // Free the result
                $execute->free_result();
                
                // Close connection
                $mysqli->close();
                
                // Return rows
                return $rows;
            }
                
            // Close connection
            $mysqli->close();
        }
    
        // Return the rows
        return $rows;
    }

    public function RemoveRecentlyViewProduct(string $sku):bool
    {
        $perpage = '';
        
        // If product sku post
        if (isset($_POST[$sku])) {
            
            
                // Check if user is logged if
            if ($this->IsUserLoggedInBuyer() === true) {
                    
                    
                        // Post sku
                $sku = $_POST[$sku];
                        
                // Get the connection
                $mysqli = $this->Connection();
                        
                // Get the user email
                $buyer_email = $this->BuyerSession()->email;
                        
                // Table name
                $tablename = 'recently_viewed_product';
                        
                // Sql
                $stmt = $mysqli->prepare("DELETE FROM $tablename WHERE email = ? AND product_sku = ?");
                        
                // Bind the param
                $stmt->bind_param("ss", $buyer_email, $sku);
                        
                // Execute
                $stmt->execute();
                        
                // Close stmt
                $stmt->close();
                        
                // Close the connection
                $mysqli->close();
                        
                // Return true
                return true ;
            }
        }
            
            
        // Return false;
        return false;
    }
        
    public function DeleteRecentlyViewAllProducts():bool
    {
        
            // Check if user is logged in
            
        if ($this->IsUserLoggedInBuyer() === true) {
                    
                    // Get the db connection
            $mysqli = $this->Connection();
                    
            // Table name
            $tablename = 'recently_viewed_product';
                    
            // Get the buyer session email address
            $buyer_email = $this->BuyerSession()->email;
            // Sql
            $stmt = $mysqli->prepare("DELETE FROM $tablename WHERE email = '$buyer_email'");
                    
            // Bind the parameters
            $stmt->bind_param("s", $buyer_email);
                    
            // Execute statement
            $stmt->execute();
                    
            // Close stmt
            $stmt->close();
                    
            // Close the connection
            $mysqli->close();
        }
    }
        
    public function CountTableData(string $tablename, string $whereClause) : array
    {
        
            // Array variable will return
        $DataReturn = array();
            
        // This will return too
        $num_rows = '';
            
        // Get the connection
        $mysqli = $this->Connection();
            
        // Sql
        $sql = "SELECT id from $tablename $whereClause";
            
        // Execute the query
        $execute = $mysqli->query($sql);
            
        // if execution is not failed
        if (!$execute) {
                
                // Return error
            return $mysqli->error;
        }
            
        // Get the number of rows affected
        $num_rows = $execute->num_rows;

        // Free execution
        $execute->free();
            
        // Close the connetion
        $mysqli->close();
            
        // Set data to asso array
        $DataReturn['num_rows'] = $num_rows;
            
        // Return array
        return $DataReturn;
    }

    public function GetPaginationNumPage(): array
    {
        $tp = '';
            
        // Array holding NumOfPage associative array
        $ReturnData['NumOfPage'] = '';
            
        // Get the method
        $buyer_email = $this->BuyerSession()->email;

        // Table name
        $tablename = 'recently_viewed_product';

        // Where clause
        $whereClause = "WHERE email='$buyer_email'";

        // Get the count document
        $count_collection = $this->CountTableData($tablename, $whereClause)['num_rows'];
            
        if ($count_collection > 5) {

                // Get the
            // Record per page
            $rpp = $this->perpage;

                
            // Celing the record
            $tp = ceil($count_collection/$rpp);
        }
        
        // Return the number of page
        $ReturnData['NumOfPage'] = $tp;
        
        // Return the array
        return $ReturnData;
    }
    
    public function hashDigitToString($input)
    {
        return substr(strtolower(preg_replace('/[0-9_\/]+/', '', base64_encode(sha1($input)))), 0, 8);
    }

    /* Third phase of development started from here */
    public function IsDataValid(array $data):array
    {
    
        /* DATA STRUCTURE FOR DATA VALIDATION */
        
        /*
        $data = [
            ['index' => 'product_name', 'regrex' => '/[a-zA-Z]$/', 'required' => true],
            ['index' => 'product_discription', 'regrex' => '/[0-9]$/', 'required' => false],
        ];
        * */
        
        
        // All valid
        $allvalid = true;
        
        // Set the index
        $i = 0;
        
        // Loop each data
        foreach ($data as $items) {
            
                
                // If data post
            if (isset($_POST[$items['index']])) {
                if ($items['required'] === true) {
                    if (!preg_match($items['regrex'], $_POST[$items['index']])) {
                        $allvalid = $_POST[$items['index']];
                        // Break data
                        break;
                    }
                }
            }
            // Validate with regres
                        
            // Increase
            $i++;
        }
            
        $data = [];
        
        // Check if variable is not false
        if ($allvalid !== true) {
            
            // Return index
            $data = ['error' => 'Please enter valid '.ucwords(strtolower(preg_replace('/[^a-zA-Z0-9]/', ' ', $items['index']))).' '.'Invalid '.$allvalid.''];
        }
        
        // Return array
        return $data;
    }

    // Gets user login
    public function GeustUserCheckout()
    {
        
        // If not post set
        if (isset($_POST['submit'])) {
            
            
        
            // Post the details
            
            /*
             * Array
                (
                    [email] =>
                    [password] =>
                    [confirm-password] =>
                    [first-name] =>
                    [last-name] =>
                    [country] =>
                    [city] =>
                    [AddressArea] =>
                    [country1] =>
                    [area] =>
                    [street] =>
                    [building] =>
                    [floor-no] =>
                    [apartment-no] =>
                    [landmark] =>
                    [locationtype] =>
                    [mobile-no] =>
                    [landline-no] =>
                    [shipping-note] =>
                )*/
                
            $email				= 			$_POST['email'] ?? '';
            $password			= 			$_POST['password'] ?? '';
            $confirm_password	=			$_POST['confirm-password'] ?? '';
            $first_name			=			$_POST['firstname'] ?? '';
            $last_name			=			$_POST['lastname'] ?? '';
            $country			=			$_POST['country'] ?? '';
            $city				=			$_POST['city'] ?? '';
        
            $country1    		= 			$_POST['country'] ?? '';
            $area    			= 			$_POST['area'] ?? '';
            $street    			= 			$_POST['street'] ?? '';
            $building    		= 			$_POST['building'] ?? '';
            $floor_no    		= 			$_POST['floor-no'] ?? '';
            $apartment_no    	= 			$_POST['apartment-no'] ?? '';
            $landmark    		= 			$_POST['landmark'] ?? '';
            $locationtype    	= 			$_POST['locationtype'] ?? '';
            $mobile_no    		= 			$_POST['mobile_no'] ?? '';
            $landline_no    	= 			$_POST['landline-no'] ?? '';
            $shipping_note    	= 			$_POST['shipping-note'] ?? '';
    
            // Validating data particulary
            $regrex = '';
        
            // Try
            try {
            
            // Valid email address
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                
                // Throw new expetion
                    throw new Exception("Please enter valid email address.");
                }
            
                // Password
                if (strlen($password) < 6) {
                    throw new Exception("Please valid 8 characters password.");
                }
                
                // Both password
                if ($password !== $confirm_password) {
                    throw new Exception("Both password did not matched.");
                }
            
                // first name
                $regrex = '/^[a-zA-Z ]{2,}$/';
            
                // Using POISX
                if (!preg_match($regrex, $first_name)) {
                    throw new Exception("Please enter first name, must containe letters.");
                }
            
                // Last Name
                if (!preg_match($regrex, $last_name)) {
                    throw new Exception("Please enter last name, must containe letters.");
                }
            
                // Country
                if ($country === '') {
                    throw new Exception("Please select country.");
                }
                
                // Validate city
            
                
                // ares is required
                if ($area === '') {
                    throw new Exception("Please enter your area.");
                }
            
                // Location type
                if ($locationtype === '') {
                    throw new Exception("Please select your location type.");
                }
            
            
                // Street
                $regrex = '/^[a-zA-Z0-9 ]{2,}$/';
            
                if (!preg_match($regrex, $street)) {
                    throw new Exception("Please enter street.");
                }
            
                // Check if country is uae then valid mobile number
                $regrex = '/^[0-9]{10,}$/';
            
                if (!preg_match($regrex, $mobile_no)) {
                    throw new Exception("Please enter valid mobile number.");
                }
            
                // If country is uae
                if ($country === 'AE') {
                
                // Get the three digit prifix
                    $validMobilePrifix = ['050', '052', '055', '056', '054', '058'];
                
                    // Regression
                    $regrex = '/[^\d-]+/';
                
                    // $mobile number
                
                    $mobile_no = preg_replace($regrex, '', $mobile_no);
                
                    // Get three three digits
                    $firstThreeDigit = substr($mobile_no, 0, 3);
                
                    // Check if it's in array
                    if (!in_array($firstThreeDigit, $validMobilePrifix)) {
                    
                        // Throw error
                        throw new exception("Please enter valid UAE mobile number with prefixs ".implode(',', $validMobilePrifix).".");
                    }
                }
            
                // If there is land line number
                if ($landline_no !== '') {
                
                    // Check with regular expression
                    $regrex = '/^[0-9 ]{8,15}$/';
                    
                    // If not matched
                    if (!preg_match($regrex, $landline_no)) {
                        throw new Exception("Please enter valid mobile landline number.");
                    }
                }
            
                // Get connection
                $mysqli = $this->Connection();
            
                // Sql
                $sql = "SELECT id from buyer WHERE email = ?";
            
                // Prepare statement
                $stmt = $mysqli->prepare($sql);
            
                // Bind param
                $stmt->bind_param("s", $email);
            
                // row must be zero
                $stmt->execute();
            
                /* store result */
                $stmt->store_result();
            
                //
                if ($stmt->num_rows !== 0) {
                
                    // close connection
                    $mysqli->close();
                    
                    // Throw exception
                    throw new exception("Please login email address $email is already registered. If you have forgotton your password please reset it.");
                }
            } catch (Exception $error) {
                return $error->getMessage();
            }
        
    
            // Return true
        
        
        
        
            // Hashed password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            // I cound have used same code but it is not working
            // Insert everything here now
            $sql = "INSERT INTO buyer (email, firstname, lastname, password_hash, password)VALUES(?,?,?,?,?)";
        
            // Secound sql
            $sql1 = "INSERT INTO buyer_address_details(
													country, 
													city, 
													email, 
													area, 
													street_no, 
													building_no, 
													floor_no, 
													landmark, 
													location_type, 
													mobile_no,
													land_line_no,
													shipping_note) VALUES 
													(
													?,?,?,?,?,?,?,?,?,?,?,?
													)";
        
            // Stmt execute
            $stmt = $mysqli->prepare($sql);
        
            // prepare another
            $stmt1 = $mysqli->prepare($sql1);
        
            // Bind the paramaters
            $stmt->bind_param("sssss", $email, $first_name, $last_name, $hashed_password, $password);
        
            // Stmt
            $stmt1->bind_param(
            "ssssssssssss",
                                            $country,
                                            $city,
                                            $email,
                                            $area,
                                            $street,
                                            $building,
                                            $floor_no,
                                            $landmark,
                                            $locationtype,
                                            $mobile_no,
                                            $landline_no,
                                            $shipping_note
        );
                                        
        
            // Execute the statement
            if (!$stmt->execute()) {
                die($mysqli->error);
            }
        
            // $execute
            if (!$stmt1->execute()) {
                die($mysqli->error);
            }
        
            // Close stmt
            $stmt1->close();
            $stmt->close();
        
            // Send varification to buyer
            // Send the mail to the user
            $this->VerificationEmailTemlate($email, '0');
        
            ob_end_clean();
        
            $_SESSION[$this->key1.'-username-buyer'] = $email;
            $_SESSION[$this->key1.'-password-buyer'] = $hashed_password;
            $_SESSION[$this->key1.'-usertype-buyer'] = '0';
            $_SESSION[$this->key1.'-time-buyer'] = time();
            // Set the session
        
            // Set the user information as json cookies for letter access
            unset($_POST['email']);
            unset($_POST['password']);
            unset($_POST['confirm-password']);
            unset($_POST['submit']);
        
            // Encode in html special chars
            foreach ($_POST as $key => $value) {
            
                //
                $_POST[$key] = htmlspecialchars($value);
            }
        
            // Json encode the shipping details
            $shippingAsCookies = json_encode($_POST);
        
            setcookie('buyershipping7522', $shippingAsCookies, time() +3600, '/', $_SERVER['SERVER_NAME']);
        
            // Set cookie
        
            header('Location:http://localhost/payment');
        }
        return true;
    }
        
        
    // Shipping checkout if user is already registered
    public function CheckoutRegisteredUser()
    {
        // If submited
        if (isset($_POST['shipping-details-52'])) {
            
            // Check if checkbox is not post
            if (!isset($_POST['shipping-address'])) {
                
                    // error
                return 'Please check shipping address';
            }
                
            // Get shipping address in json
            
            // Set cooket the shipping details
            ob_end_clean();
            
            setcookie('buyershipping7522', $_POST['shipping-details-52'], time() +3600, '/', $_SERVER['SERVER_NAME']);
        
            // Set header to payment
            header('Location:http://localhost/payment');
        }
    }
        
    // Tax percentage
    public function TaxPercentage()
    {
        
            // Return tax percentage
        return 5;
    }
    
    
    public function OrderConfirmation($paymentmethod)
    {
        
            // If cart cookies set
            
        // Method
        if (isset($_POST[$paymentmethod])) {
                
                // not cookies set
            if (!isset($_COOKIE[$this->CartCookiName()])) {
                return false;
            }
            // Payment method can be
            /* > COD
             * > COD IN DELIVERY
             * > CREDIT CARD will come in future (Backluck)
             * > PAYPAL will come in future (Backluck)
             *
             * */
            // Get the payment method
            $shippingInJson = $this->buyerShippingAsArray(); 
                    
            $gotPayment = $_POST[$paymentmethod];
                    
            // Get all cookies value
            $shippingDetails = $_COOKIE['buyershipping7522'];
                    
                    
                    
            // Cart details
            $cart = $_COOKIE[$this->CartCookiName()];
                    
            // Today timestamp
            $today = date("Ymd");
                    
            // Get random number
            $rand = strtoupper(substr(uniqid(sha1(time())), 0, 4));
                    
            // Order id
            $order_id = $today . $rand;
                    
                    
            // Decode cart json to array
            $cartToArray = json_decode($cart, true);
                    
            // Setting index
            $j = 0;

            // Iritate each items
            foreach ($cartToArray as $items) {
                $cartToArray[$j]['order_id'] = $order_id;
                            
                $j++;
            }
                    
                    
                    
            // Datas
            $datas = [];
                    
            // Mysqli connection
            $mysqli = $this->Connection();
                    
            // Defining variable for orders table
                        
            $buyer_email      	=   $this->BuyerSession()->email;
            $ipv4_address      	=   $_SERVER['HTTP_HOST'] === 'sindhbad.com' ? $_SERVER['REMOTE_ADDR'] : '127.0.0.1';
            $tax_amount        	=   $this->TaxOnCart();
            $tax_persentage	   	=   $this->TaxPercentage();
            $totalqty          	=  	$this->CartTotleQty();
            $totalamount       	= 	$this->CartTotleAmountWithTax();
            $currency			= 	$this->currency;
            $shipping_cost		= 	$this->ShippingCostApply() === true ? 20 : 0;
                        
            // Three options {inprocess, dispacted, delivered}
                        
            $status				= 	'created';
            $shipping_address   = 	$_COOKIE['buyershipping7522'];
            $billing_address	= 	$_POST['billing-address-same-as-shipping'] ?? $_COOKIE['buyershipping7522'];
            $purchase_date		= 	date('Y-m-d H:i:s');
            $purchase_point 	= 	'sindhbad';
            $customer_notes 	=	json_decode($_COOKIE['buyershipping7522'], true)['shipping_note'] ?? '';
            $payment 			= 	$_POST[$paymentmethod];
            $seen 				= '0';
                        
                        
            // Conver user ip address to hex decimal vaue
            $ipv4_address = ip2long($ipv4_address);
                        
            // Decode while fetching by using
                        
                        
            //print_R(json_decode($_COOKIE['shipping_note'], true));
                        
            // Inserting to order table
                    
            $indexs = "'order_id', 
								'buyer_email',
								'ipv4_address',
								'tax_amount',
								'tax_persentage',
								'totalqty',
								'totalamount',
								'currency',
								'shipping_cost',
								'status',
								'shipping_address',
								'purchase_date',
								'purchase_point',
								'customer_notes',
								'payment'";
                    
            // Indexs to insert
            $insertIndexs = "order_id, 
									buyer_email,
									ipv4_address,
									tax_amount,
									tax_persentage,
									totalqty,
									totalamount,
									currency,
									shipping_cost,
									status,
									shipping_address,
									purchase_date,
									purchase_point,
									customer_notes,
									payment";
                    
                    
            // Tablename
            $tablename = 'orders';
                    
                    
            // Store procedure indexes
                    
            $ProcedureIndex = 'order_id VARCHAR(150), 
									buyer_email VARCHAR(50),
									ipv4_address INT,
									tax_amount INT,
									tax_persentage decimal,
									totalqty int(100),
									totalamount int,
									currency char(10),
									shipping_cost VARCHAR(100),
									status CHAR(20),
									shipping_address TEXT,
									purchase_date DATETIME,
									purchase_point CHAR(200),
									customer_notes TEXT,
									payment CHAR(20)
									)';
                    
            // SQL data
            $sqlData = "('$order_id', 
								'$buyer_email',
								'$ipv4_address',
								'$tax_amount',
								'$tax_persentage',
								'$totalqty',
								'$totalamount', 
								'$currency',
								'$shipping_cost', 
								'$status',
								'$shipping_address', 
								'$purchase_date',
								'$purchase_point', 
								'$customer_notes',
								'$payment')";
                
                    
            // Run procedure method with all parmaters
            if ($this->InsertMultipleStoreProcedure(
                                                            $mysqli,
                                                            $ProcedureIndex,
                                                            $sqlData,
                                                            $indexs,
                                                            $insertIndexs,
                                                            $tablename
                    ) !== true) {
                            
                            // Return error
                return $this->InsertMultipleStoreProcedure(
                                $mysqli,
                                                                        $ProcedureIndex,
                                                                        $sqlData,
                                                                        $indexs,
                                                                        $insertIndexs,
                                                                        $tablename
                            );
            }
                    
            // Procedure index
            $indexs = "'product_id', 'product_name', 'sku', 'qty', 'price', 'totalamount', 'images','seller_email', 'order_id'";
                    
            // Indexs to insert
            $insertIndexs  = "product_id, prodct_name, sku, qty, price, totalamount,images, seller_email, order_id";
                    
            // Tablename
            $tablename = 'orderdetails';
                    
            // Store procedure indexes
            $ProcedureIndex = 'IN product_id int, 
										prodct_name VARCHAR(200), 
										sku CHAR(100), 
										qty INT(50), 
										price INT(50), 
										totalamount INT(100),
										images VARCHAR(225),
										seller_email VARCHAR(50),
										order_id VARCHAR(150)
										)';
                    
            $sqlData = $this->MultipleSqlQuery($cartToArray);
                                
         
                    
            // Runing stroe product method with parameters {connection, tableindexs, data to insert, storeIndexs, InsertIndexes, tablename }
                    
            // Return true on success or string error on false
            if ($this->InsertMultipleStoreProcedure(
                                                            $mysqli,
                                                            $ProcedureIndex,
                                                            $sqlData,
                                                            $indexs,
                                                            $insertIndexs,
                                                            $tablename
                    ) !== true) {
                return $this->InsertMultipleStoreProcedure(
                                $mysqli,
                                                                        $ProcedureIndex,
                                                                        $sqlData,
                                                                        $indexs,
                                                                        $insertIndexs,
                                                                        $tablename
                            );
            }
                    
            
            // Need to insert into order status table as well 
            $sql = "INSERT INTO orderstatus (status, order_id, created_at, updated_at, comments)values ('$status', '$order_id', NOW(), NOW(), '')";
            
            // cHECK QUERY 
            if(!$mysqli->query($sql)) {
				
				return $mysqli->error;
			}
                    
            $mysqli->close();
                    
           
                    
            // Send confirmation order details to the user
            $shippingInJson = $this->buyerShippingAsArray();
            $firstname = $shippingInJson['firstname'] ?? '';
            $lastname = $shippingInJson['lastname'] ?? '';
            $phonenumber = $shippingInJson['mobile_no'] ?? '';
            $country = $shippingInJson['country'] ?? '';
                    
            
            // Cart array items required
            $cartItems = $cart;
            // Cart items in array

            // Tax and vad
            $taxOrvat = $this->getPriceFormate($this->TaxOnCart());
            $cartTotalAmount = $this->getPriceFormate($this->CartTotleAmountWithTax());
            $shippingcost = $this->ShippingCostApply() === true ? 20 .' AED': 'Free Sipping';

            // Get the logged in user email address
            $to = $this->BuyerSession()->email;
            ;

            $orderNumber = $order_id;
            $orderdate = date('l jS \of F Y h:i:s A');

            $address = ucfirst(implode(', ', array_filter($shippingInJson)));


            $data = [
                            
                            'firstname' =>$firstname,
                            'lastname' => $lastname,
                            'orderNumber' => $orderNumber,
                            'phonenumber' => $phonenumber,
                            'address' => $address,
                            'cartItems' => $cartItems,
                            'taxOrvat' => $taxOrvat,
                            'cartTotalAmount' => $cartTotalAmount,
                            'orderdate' => $orderdate,
                            'shippingcost' => $shippingcost,
                            'to'=> $to
                        ];

                    
            // Send confirmation email
            new OrderConfirmationEmail($data);
                    
                    
            // Check if user is from uae
            if ($this->UAEUserMobileNumber($country, $phonenumber) === true) {
                        
                            // Send SMS to the user mobile
                            //$this->SendSMS($phonenumber, $orderNumber, $firstname);
            }
                     
            setcookie($this->CartCookiName(), '', time() -3600, '/', $_SERVER['SERVER_NAME']);
                    
            // Unset buyer shipping address
            setcookie($this->buyerShippingCookieName(), '', time() -3600, '/', $_SERVER['SERVER_NAME']);
                    
            // return the content
            return ['orderdate' => $purchase_date, 'orderid'=> $order_id];
        }
        
        // Return false
        return false;
    }
    // Currency
    
    public function MultipleSqlQuery(array $cartToArray) : string
    {
        
        // Defining variable
        $datas = [];
        
        // Iritate each itmes value
        foreach ($cartToArray as $items) {
                    
                    // Setting index value
            $i = 0;
                    
            // Getting each itmes index
            foreach ($items as $key => $value) {
                        
                        // If value is 0
                if ($i === 0) {
                            
                            // Add prefiex string
                    $items[$key] = "('".$value;
                } elseif ($i === count($items)-1) {
                            
                            // Add prifix value at the end
                    $items[$key] = $value."')";
                }
                        
                // Increase index value
                $i++;
            }
                        

            // Get imploded with value
            $datas[] = implode("','", $items);
        }
                    
        // Again implode with something
        $SqlData = implode(",", $datas);
                
        // Return data
        return $SqlData;
    }
        
    // StoreProcedure mulitple value Insert
    public function InsertMultipleStoreProcedure($mysqli, string $ProcedureIndex, string $sqlData, string $indexs, string $insertIndexs, string $tablename)
    {
        if (!$mysqli->query("DROP PROCEDURE IF EXISTS OrderCart") ||

                    !$mysqli->query("CREATE PROCEDURE OrderCart (
																$ProcedureIndex
					BEGIN
						insert into $tablename ($insertIndexs) values $sqlData;
					END")) {
            return ($mysqli->error);
        }

        // Call the store procedure
        if (!$mysqli->query("CALL OrderCart($indexs)")) {
            return "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
        }
        return true;
    }
        
        
    // Cart cookie name
    public function CartCookiName()
    {
        return 'shopping-cart265985989';
    }

    // Testing
    public function buyerShippingAsArray()
    {
        if (isset($_COOKIE[$this->buyerShippingCookieName()])) {
            return json_decode($_COOKIE[$this->buyerShippingCookieName()], true);
        }
    }
    
    public function buyerShippingCookieName()
    {
        
        // Return
        return 'buyershipping7522';
    }
    
    // If UAE USERS
    public function UAEUserMobileNumber(string $country, string $mobile_no)
    {
        if ($country === 'AE') {
                
                // Get the three digit prifix
            $validMobilePrifix = ['050', '052', '055', '056', '054', '058'];
                
            // Regression
            $regrex = '/[^\d-]+/';
                
            // $mobile number
                
            $mobile_no = preg_replace($regrex, '', $mobile_no);
                
            // Get three three digits
            $firstThreeDigit = substr($mobile_no, 0, 3);
                
            // Check if it's in array
            if (!in_array($firstThreeDigit, $validMobilePrifix)) {
                    
                        // Throw error
                return false;
            }
                
            // Return true
            return true;
        }
    }
    
    
    public function SendSMS($mob_no, $orderId, $firstname)
    {
        $message = urlencode("Dear $firstname your order has been confirmed. Order ID: $orderId");
        
        // Curl url
        $url = "http://mshastra.com/sendurlcomma.aspx?user=20088619&pwd=b2n6i6&senderid=ABC&mobileno=$mob_no&msgtext=$message&CountryCode=971";
        
        // Curl init
        $ch = curl_init($url);
        
        // Set return transfer to true
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        // Execute the curl page
        $curl_scraped_page = curl_exec($ch);
        
        // Close curl ch
        curl_close($ch);
        
        // Check if succes
        if (strpos($curl_scraped_page, 'Successful')) {
            
                // Return
            return true;
        }
    }

    // If shopping cart is set
    public function IfCartExists()
    {
        if (isset($_COOKIE[$this->CartCookiName()]) && count(json_decode($_COOKIE[$this->CartCookiName()], true)) > 0) {
            return true ;
        }
        
        // Return false
        return false;
    }

    /* Third phase of development ends here */
    
    
        
    // Get orders
    public function GetOrders()
    {
        return Orders::GetOrders();
    }
    
    // Get order by id
    public function GetOrderById($order_id)
    {
        
            /* Reresult data is comming like this */
        /*
         * Array
                (
                [result] => Array
                (
                [0] => Array
                (
                    [0] => Array
                        (
                            [id] => 1
                            [order_id] => 20180929DDE2
                            [purchase_point] => sindhbad
                            [purchase_date] => 2018-09-29 13:17:04
                            [currency] => AED
                            [shipping_address] => {"first-name":"bharat","last-name":"shah","country":"","city":"Abu Dhabi","AddressArea":"","country1":"AE","area":"Al Falah Street","street":"Al Falah Street","building":"","floor-no":"Al Falah Street","apartment-no":"5011","landmark":"Habibi Bank","locationtype":"home","mobile-no":"0565973854","landline-no":"","shipping-note":"Hello orld"}
                            [billing_address] =>
                            [totalamount] => 1050
                            [status] => inprocess
                            [payment] => cod
                        )

                )
         * */
        return Orders::GetOrderById($order_id);
    }
        
    // Getting order items by id
    public function GetItemsByOrderId($order_id)
    {
        return Orders::getOrderItemByOrderId($order_id);
    }

    /* Third phase development ends here */
    
    /* Forth phas development start form here */
    
    public function SaveComapnyInformation(CompanySeller  $obj) {
		
			return $obj::SaveCompanyInformation();
	}

	
	/* Saving individual seller account details */
	public function SaveIndividualSeller(IndividualSeller $obj) {
		
			return $obj::UpdateIndividualSellerDetails();
		}
		
	/* Is profile complete for the seller */
	public function IsProfileExists() {
		
			// Get the seller email 
			$seller_email = $this->SellerSession()->email;
			
			
			// Check they exist in the table 
			$company_table = 'seller_as_company';
			$indivdual_table = 'seller_as_individual';
			
			
			// Select 
			$mysqli  = $this->Connection();
			
			// Sql 
			$sql = "SELECT 
					id,
					business_name ,
					legal_form,
					nationality,
					established,
					expiry_date,
					company_type,
					tax_no,
					registration_no,
					country,
					city,
					telephone,
					mobile_no,
					po_box,
					fax,
					website,
					latitude,
					longitude,
					address,
					unique_business_id,
					seller_type,
					document,
					created,
					updated,
					seller_email 
					from $company_table where seller_email = '$seller_email'";
			
			// Result 
			$result = $mysqli->query($sql);
			// Run the query 
			if(!$result) {
				
					// return error 
					return $mysqli->error;
				}
				
			
			// Set record exists 
			if($result->num_rows === 1) {
				
				$mysqli->close();
				
				// Records exists 
				return ['result' => $result->fetch_all(MYSQLI_ASSOC)[0], 'seller_type'=> 'company'];

			} else {
				
				// Do another query 
				$sql = "SELECT 
						id,
						country,
						city,
						state_region_province,
						post_zip_code,
						land_line_no,
						mobile_no,
						nationality,
						emirate_id_no,
						unique_business_id,
						seller_type,
						website,
						address,
						document,
						seller_email,
						created from $indivdual_table where seller_email = '$seller_email'";
				
				// Result 
				$result = $mysqli->query($sql);
				// Run the query 
				if(!$result) {
				
					// return error 
					return $mysqli->error;
				}
				
				// Set record exists 
			if($result->num_rows === 1) {
				
				// Records exists 
				return ['result' => $result->fetch_all(MYSQLI_ASSOC)[0], 'seller_type'=> 'individual'];
				
				$mysqli->close();
			}
					
				}
			// Clsoe 
			$mysqli->close();
			
		return false;
	}


	/* Updating business seller type form */
	public function UpdateBusinessSellerForm(){
			
		
		}

		
		
	 /* Forth phas development ends form here */
}
