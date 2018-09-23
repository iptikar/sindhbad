<?php
// Using namespace 
//namespace order\confirmation\email;

// require class one 
require_once 'controller.php';

// Use main controller 
use MarketPlace as MarketPlace;

// Init class 
class OrderConfirmationEmail {
	
	private $data = array();
	// Variable required for the pages 
	public $firstname;
	public $lastname;
	public $orderid;
	public $phonenumber;
	public $address;
	
	// Cart array items required 
	public $cartItems = '[{"id":"4","name":"Unlocked Samsung Galaxy S8 5.8-inch screen 4G","sku":"SDFSDF522","qty":"1","price":"2800","totalamount":2800,"image":"http:\/\/localhost\/img\/product-images\/152878936595243.jpg"},{"id":"8","name":"Free Knight 60L Waterproof Climbing Hiking Ra","sku":"SDFSDDF852","qty":"1","price":"90","totalamount":90,"image":"http:\/\/localhost\/img\/product-images\/152879109699032.jpg"}]';
	
	
	
	// Tax and vad 
	public $taxOrvat;
	
	// $cart total amount 
	public $cartTotalAmount;
	
	// order date 
	public $orderdate;
	
	/*
	 * string $firstname,
									string $lastname,
									string $orderid,
									int $phonenumber,
									string $address,
									string $cartItems,
									string $tax,
									int $cartTotalAmount,
									string $orderdate
	 * \*/
	 
		
			
			
		public function __construct( array $data
									
									) {
			
			
			
					
			// Run the method for sending details 
			$this->EmailTemplate($data
								);
								
		
			  
			}
			
			
			// Order confirmation 
			public function OrderConfirmation() {
				
					// Get the all for 
					
				
			}
				
			
			public function EmailTemplate( array $data ) {

			$curl = curl_init();
			
			// Set some options - we are passing in a useragent too here
			curl_setopt_array($curl, array(
		
			// Set curl parameters 
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => "http://localhost/order-confirmation-email-template.php",
			CURLOPT_POSTFIELDS =>$data,
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
		
		
		
		/*
		// Check if mail failed then 
		if(!mail($to, $subject, $message, $headers)) {
		
			// Return false 
			return false;
		}
				
		*/
		
		echo $message;
		
		
		}
				
			
			
			public function SendOrderConfirmation(){}
			
			
			public function get_func_argNames($funcName) {
				
				// Create new reflation objec 
				$f = new ReflectionFunction($funcName);
				
				// Result will be in arrau
				$result = array();
				
				// Loop each date 
				
				foreach ($f->getParameters() as $param) {
					
					// Append paramatersnames
					
					$result[] = $param->name;   
				}
				return $result;
		}

	}




?>
