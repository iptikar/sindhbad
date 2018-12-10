<?php 
// Setting time to dubai
//date_default_timezone_set ('Asia/Dubai');
// Prints something like: Monday 8th of August 2005 03:12:46 PM


function UAEUserMobileNumber(string $country, string $mobile_no): bool {
		
		if( $country === 'AE') {
				
				// Get the three digit prifix 
				$validMobilePrifix = ['050', '052', '055', '056', '054', '058'];
				
				// Regression 
				$regrex = '/[^\d-]+/';
				
				// $mobile number 
				
				$mobile_no = preg_replace($regrex, '', $mobile_no);
				
				// Get three three digits 
				$firstThreeDigit = substr($mobile_no, 0, 3);
				
				// Check if it's in array 
				if( !in_array ($firstThreeDigit, $validMobilePrifix)) {
					
						// Throw error 
						return false;
				}
				
				// Return true 
				return true;
				
			}
			
	}
	
function SendSMS($country, $mob, $userid, $Password) {
	
	if(UAEUserMobileNumber($country, $mob) === true) {
		
		$url = urlencode("http://mshastra.com/sendurlcomma.aspx?user=$userid&pwd=$Password&senderid=ABC&mobileno=971565973854&msgtext=Hello&CountryCode=AE");

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$curl_scraped_page = curl_exec($ch);
		curl_close($ch);
			
		echo $curl_scraped_page;
		
		}
	
	
	}
	
$mob  = '971565973854';
$country = 'AE';

$userid = '20088619';
$Password = 'b2n6i6';

$url = urlencode("http://mshastra.com/sendurlcomma.aspx?user=$userid&pwd=$Password&senderid=ABC&mobileno=$mob&msgtext=Hello&CountryCode=AE");

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$curl_scraped_page = curl_exec($ch);
curl_close($ch);
	
var_dump($curl_scraped_page);









