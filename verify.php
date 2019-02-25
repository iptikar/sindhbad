<?php
require('controller/controller.php');

// Get the new object 
$obj = new MarketPlace();
?>	
	
<!doctype html>
<html lang="en">
   
		<head >
     
      <meta charset="utf-8"/>
      <meta name="description" content="Default Description"/>
      <meta name="keywords" content="Magento, Varien, E-commerce"/>
      <meta name="robots" content="INDEX,FOLLOW"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta name="format-detection" content="telephone=no"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <title>Sidhbad, Verify Your Account</title> 
      
      <?php include 'head-links.php' ;?>
	   
     </head>
 





	<body>
	   
	   
	   
<noscript>
         <div class="message global noscript">
            <div class="content">
               <p><strong>JavaScript seems to be disabled in your browser.</strong> <span>For the best experience on our site, be sure to turn on Javascript in your browser.</span></p>
            </div>
         </div>
      </noscript>
      
	   <div class="page-wrapper">
        <?php include 'header.php' ?>
   
   
    <main id="maincontent" class="page-main">
    
   <div class = "columns col1-layout"> 
	   <div class="container">
		   
		   <div class = "col-md-12">
		   <div class="row">
       
       <?php
		echo $obj->VerifyEmailAddress();
       ?>
	
 

        
        
        
        </div>
   
		   </div>
    
   
    </div>
</div>
	 
	   </div>
   
   
   
    </main>

<?php include 'footer.php'; ?>
