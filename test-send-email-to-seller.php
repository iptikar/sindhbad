<?php

function SendEmailToSeller ( $seller_email, $buyer_email, $subject, $p_name, $p_sku, $message ) {
		
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
		curl_setopt($ch, CURLOPT_URL,"http://sindhbad.com/buyer-message-email-template.phtml");
		
		// Enable post request 
		curl_setopt($ch, CURLOPT_POST, 1);
		
		// Post the fields 
		curl_setopt($ch, CURLOPT_POSTFIELDS,
            'seller='.$seller_email.'&buyer_email='.$buyer_email.'&subject='.$subject.'&p_name='.$p_name.'&p_sku='.$p_sku.'&message='.$message);
		
		// Enable return transfer 
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
		
		// Ouput the data 
		$server_output = curl_exec ($ch);

		// Curl close the connection 
		curl_close ($ch);
		
		// Get the url
		$message = $server_output;
		
		// Subject 
		$subject = "Dear customer, you have received message from buyer.";
		
		// If mail not send 
		if ( !mail ( $seller_email, $subject, $message, $headers ) ) {
		
			// Return false 
			return false;
		}
		
		
}




$seller = 'bharatrose1@gmail.com';
$buyer = 'akashche72@gmail.com';
$subject = 'Hey, Wann buy this product ';
$p_name = 'Original Unlocked Samsung Galaxy S8 Plus 4G R';
$p_sku = '554545DFDF';
$messsage = 'Hi, is this product sill in the stock so i can buy';

var_dump(SendEmailToSeller($seller, $buyer, $subject, $p_name, $p_sku, $messsage));

//$cont = file_get_contents(urlencode('http://localhost/buyer-message-email-template.phtml?seller='.$seller.'&buyer_email='.$buyer.'&subject='.$subject.'&p_name='.$p_name.'&p_sku='.$p_sku.'&message='.$messsage.''));

/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://sindhbad.com/buyer-message-email-template.phtml");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            'seller='.$seller.'&buyer_email='.$buyer.'&subject='.$subject.'&p_name='.$p_name.'&p_sku='.$p_sku.'&message='.$messsage);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);

curl_close ($ch);
//echo $cont;
//echo $cont;
//further processing ....
echo $server_output;
*/

exit();
$data = [
			['username' => 'Dick Head'],
			['username' => 'Really find']
		];
		
$template = '<li>
   <a href="chat.html?email=bharatrose1@gmail.com&seen=true&customer_type=1&product_sku=ADFDF53365&time=265956989">
   <span class="photo">
   <img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
   <span class="subject">
   <span class="from"> {{&username}} </span>
   <span class="time">1 day ago</span>
   </span>
   <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
   </a>
</li';

// Regression 
$regrex = '/{{&(.*?)}}/';


function getTemplate ($template,$data,$regrex) {
		

		/* Data type each value must be array */
		$arrval = array_values($data);

		/* Is all value is array */
		$IsAllValArray = true;
		
		/* Loop and check */
		for($i = 0; $i < count($arrval); $i++)
		{
			/* IF not array */
			if(!is_array($arrval[$i]))
			{
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
		if(preg_match_all($regrex,$template,$matches))
		{
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
			$diffkey = array_diff($getmatches,$serverkeys);
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
				$reg = str_replace('(.*?)',$key, $regrex);

				/* Check with regular expression */
				if (preg_match($reg,$template)) {
					/* Replace with */
					$output = preg_replace($reg,$value,$output);
					

				}			
			
			}
			
			// Append the string 
			 $result .= $output;
		}
	
		// Return the result 
		return $result;

		}


echo getTemplate($template,$data,$regrex);

