<?php

// Init class 
class OrderConfirmationEmail {

		public function __construct( array $data
									
									) {
				
			// Run the method for sending details 
			$this->EmailTemplate($data);
													  
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
			
			$headers = 'From: info@sindhbad.com' . "\r\n" .
				'Reply-To: info@sindhbad.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
				
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			// Set the subject 
			$subject = "Your order has been received";
			
			// Email send to 
			$to = $data['to'];
			
			// Check if mail failed then 
			if(!mail($to, $subject, $message, $headers)) {
			
				// Return false 
				return false;
			}
				
			
			// Return true 
			return true;

	}
				

		public function SendOrderConfirmation(){}

	}




?>
