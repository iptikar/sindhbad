<?php
session_start();
ob_start();
require('controller/controller.php');
$obj = new MarketPlace();
// Setting time to dubai
date_default_timezone_set ('Asia/Dubai');
// Get the object
$obj = new MarketPlace();

$orderid = '';

$orderdate = '';

if(isset ($_COOKIE[$obj->CartCookiName()])) {
	
	$getObj = $obj->OrderConfirmation('paymentmethod');
	 
	 $orderid = $getObj['orderid'];
	 
	 $orderdate = $getObj['orderdate'];
}



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
     
      
	   
	   <style>
	   .greenText {
			color:green;
		   }
		   
		 .iconFont{
				font-size:25px;
				margin-right:2px;
			 }
	   </style>
	
	   
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
                     
                     <?php if($obj->IfCartExists() === true) :?>
                     <div class="jumbotron center" style = "text-align:center;">
  <h1 class="display-3">Thank you for your purchase!</h1>
  <p class="lead">
	  <strong><i class = "fa fa-check-circle greenText iconFont"></i><span class = "greenText">Your order has been confirmed</span></strong></p>
  <hr>
  
  
  
<p><b>Order Details</b></p>

<p>Order ID: <?= $orderid; ?></p>
<p>Order Date: <?= date('l jS \of F Y h:i:s A', strtotime($orderdate)); ?></p>
  <p>
    Having trouble? <a href="">Contact us</a>
  </p>
  <p>We'll email you an order confirmation with details and tracking info.</p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="http://localhost/" role="button">Continue to homepage</a>
  </p>
</div>
                    
                     <?php else:?>
                     <div class="message info">
		<div>
  <strong> </strong>Shopping cart is empty !.
</div></div>
                     <?php endif;?>
                     
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

	
