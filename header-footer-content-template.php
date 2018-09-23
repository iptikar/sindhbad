<?php

require('controller/controller.php');

// Setting time to dubai
date_default_timezone_set ('Asia/Dubai');
// Get the object
$obj = new MarketPlace();


?>
	<!doctype html>
<html lang="en">
   
	<head >
     
      <meta charset="utf-8"/>
      <meta name="description" content="Default Description"/>
      <meta name="keywords" />
      <meta name="robots" content="INDEX,FOLLOW"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta name="format-detection" content="telephone=no"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <title>Home - SM Market Layout 4</title> 
      <?php include 'head-links.php'; ?>
      <!--CUSTOM CSS-->
     
      
	   
	   
	
	   
     </head>
  





	 <body data-container="body">
      
      
     
      
      
      
      
      <noscript>
         <div class="message global noscript">
            <div class="content">
               <p><strong>JavaScript seems to be disabled in your browser.</strong> <span>For the best experience on our site, be sure to turn on Javascript in your browser.</span></p>
            </div>
         </div>
      </noscript>
      
      
     
      
      <div class="page-wrapper">
      
       <?php include 'header.php'; ?>
			
		<main id="maincontent" class="page-main">
		<div class="columns col1-layout">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12"> 
                     
                     <h1>I will hunt your deam</h1>
                     
                    </div>
                    </div>
                </div>
          </div>
		
		</main>
         
         
         <?php 
			
			include ('footer.php');
         ?>
      </div>
      </body>
     </html>

	
