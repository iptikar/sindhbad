<?php
class GetEmailTemplate 
{
	public $data;
	public $url;
	public $to;
	public $subject; 
	
	
	public function __construct(array $data, 
								string $url,
								string $to, 
								string $subject) {
		
		$this->data = $data; 
		$this->url = $url;
		$this->to = $to;
		$this->subject = $to;
	
		
			
	}
	public function SendEmailWithTemplate(
								)
    {
		
		$data     =    $this->data;
		$url      =    $this->url;
		$to       =    $this->to;
		$subject  =    $this->subject; 
		
		
        $curl = curl_init();
                
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            
                // Set curl parameters
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $url,
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
        $subject = "Sindhbad.com. Update About your order.";
            
        
            
        // Check if mail failed then
        if (!mail($to, $subject, $message, $headers)) {
            
                // Return false
            return false;
        }
                
            
        // Return true
        return true;
    }
 
}
   
