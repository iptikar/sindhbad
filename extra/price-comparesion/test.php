<?php

$UrlToSearch = 'https://uae.souq.com/ae-en/Apple%2BiPhone%2B8%2BPlus/s/?as=1';

/* Initialize the curl request */
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_URL, $UrlToSearch);
			/* Set the header */
        	curl_setopt($ch, CURLOPT_HEADER, 0);
        	
        	/* Do not check to verify */
        	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        	
        	/* Return transfre is true for output data */
        	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		
        	/* Execute curl request */
        	$output = curl_exec($ch);
        	
        	/* Close the curl request */       
       		curl_close($ch);
		
			/* If curl execute is not eqal to false */
        	if($output !== false )
        	{
        		 htmlspecialchars($output);
        	}



// Get dom object 
@$doc = new DOMDocument();

// Decode the return html docuemnt with dom and load document
@$doc->loadHTML(htmlspecialchars_decode($output));   

// Create new xpath object 
$xpath = new DomXPath($doc);

$nodevalue = $xpath->query('//span[@class="itemPrice"]')->item(0)->nodeValue;

echo $nodevalue;

