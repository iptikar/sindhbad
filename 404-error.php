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
      <title>Home - SM Market Layout 4</title> 
      
      
		<?php include 'head-links.php'; ?>
     
     <style>
     .main-content h1 {
    font-family: "roboto-black", sans-serif;
    text-transform: uppercase;
    letter-spacing: -.2rem;
    font-size: 9.4rem;
    line-height: 1;
    margin-bottom: 1.2rem;
    padding-top: 2.4rem;
    position: relative;
}

.main-content p {
    color: rgba(255, 255, 255, 0.3);
    font-family: "roboto-regular", sans-serif;
    font-size: 1.8rem;
    max-width: 380px;
    text-shadow: 0 1px 5px rgba(0, 0, 0, 0.5);
}

#main-404-content.main-content-static {
    background-image: url(img/greens.jpg);
    background-repeat: no-repeat;
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    margin-top: 0px;
}

.main-content .search form input[type="text"] {
    background: rgba(255, 255, 255, 0.1);
    width: 100%;
}
     </style>
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
         <?php
         
			include 'header.php';
         ?>
    
    <main id="main-404-content" class="main-content-static page-main ">
    
   <div class = "main-content"> 
	   <div class="container">
    <div class="col-twelve">
			  		
			  			<h1 class="kern-this" aria-label="404 Error." style="font-size: 94px;"><span class="char1" aria-hidden="true">4</span><span class="char2" aria-hidden="true">0</span><span class="char3" aria-hidden="true">4</span><span class="char4" aria-hidden="true"> </span><span class="char5" aria-hidden="true">E</span><span class="char6" aria-hidden="true">r</span><span class="char7" aria-hidden="true">r</span><span class="char8" aria-hidden="true">o</span><span class="char9" aria-hidden="true">r</span><span class="char10" aria-hidden="true">.</span></h1>
			  			<p>
						Oooooops! Looks like nothing was found at this location.
						Maybe try on of the links below, click on the top menu
						or try a search?
			  			</p>

			  			<div class="search">
				      	<form>
								<input type="text" id="s" name="s" class="search-field" placeholder="Type and hit enter …" autocomplete="off">
							</form>
				      </div>	   			

			   	</div> <!-- /twelve --> 		   			
		 
    
    </div>
	 
	   </div>

    </main>

	<?php include 'footer.php'; ?>
  	   
