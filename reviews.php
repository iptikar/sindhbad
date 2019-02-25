<?php
session_start();
require('controller/controller.php');
// Setting time to dubai
date_default_timezone_set ('Asia/Dubai');
// Get the object
$obj = new MarketPlace();
if(WriteReviewAboutProduct::IsViewAble('id', 'id_item') !== true) {
	
		header('Location:http://localhost');
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
     
      
	   
	   
	
	   
     </head>
  



<style>

.p-name {
	
		display:inherit;
		position:relative;
		
		
	}
</style>

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
						 
						 <div class = "col-sm-2"></div>
                     
                     
                     
                    
                     
                     <div class = "col-sm-8">
                    
                    
                    
                    
                     <?php if(isset($_POST['submit'])) :?>
                     
                     <?php if(WriteReviewAboutProduct::WritingReview('submit', new Marketplace()) === true) :?>
                     
                     <?php $_POST = []; ?>
                     <div class="message success">
		<div>
  <strong></strong>Thank you. Your review has been submitted.
</div></div>

						

                    
                    <?php else :?>
                    
             
						
						<div class="message error">
		<div>
  <strong>Error ! </strong><?= WriteReviewAboutProduct::WritingReview('submit', new Marketplace()) ;?>
</div></div>

						
						
						
                    
                    
                    <?php endif;?>
                    <?php endif;?>
                       <form class="form create account form-create-account" <?php echo basename($_SERVER['PHP_SELF'],'.php').'?'.$_SERVER['QUERY_STRING'];?>" method="post" id="form-validate" autocomplete="off" novalidate="novalidate">
						   
			
   
   <fieldset class="fieldset" data-hasrequired="* Required Fields" style = "width:100%;">
      <legend class="legend"><span>Thank you for rating! tell us more about your opinion:</span></legend>
      <br> 
      
       <div class="field password required" >
		
		<div class = "col-sm-4" >
			<div class = "img-war140">
				<img src = "<?= urldecode($_GET['img'])?>" style = "width:75px; height:75px;"/>
			</div>
		</div>
       <div class = "col-sm-8" > 
		   
		   <div class = "p-name" style = "text-align:center; margin-top:25px;">
				
				
 <?= urldecode($_GET['name']);?>

		   </div>
		</div>
       
       
       </div>
      <div class="field required">
         <label for="email_address" class="label"><span>What's good about this product?</span></label> 
         <div class="control">
			 
			 <input type="email" name="good" autocomplete="email" id="email_address" value="<?= $_POST['good'] ?? '';?>" title="Good About The Product" class="input-text" data-validate="{required:true, 'validate-email':true}" aria-required="true"></div>
      </div>
      <div class="field password required">
         <label for="password" class="label"><span>What's not so good about this product?</span></label> 
         <div class="control">
            <input type="text" value = "<?= $_POST['bad'] ?? '';?>"name="bad" id="password" title="Bad About The Product" class="input-text"  autocomplete="off" aria-required="true">
          
            
            
         </div>
      </div>
      <?php
		$recomanded = $_POST['recomanded'] ?? '';
	?>
     <input type = "hidden" id = "stars" name = "stars" />
   <div class="field required">
   
   <label for="recommand" class="label"><span>Would you recommend this product to a friend?</span></label> 
   
   <div class = "col-sm-2">
	<label for = "yes20" class = "label">Yes</label>
	<input type = "radio" value = "yes" id = "yes20" name = "recomanded" <?= $recomanded == 'yes' ? 'checked' : ''?>/>
	</div>
	
	<div class = "col-sm-2">
	<label for = "no20">No</label>
	<input type = "radio" value = "no" id = "no20" name = "recomanded" <?= $recomanded == 'no' ? 'checked' : ''?>/>
   </div>
   </div>
   
   
   <div class="field required">
   
   <label for = "review-msg" class = "label">Write you review</label>
   
   <textarea class = "form-control" id = "review-msg" name = "details"><?= $_POST['detail'] ?? ''; ?></textarea>
   
   </div>
   
   <div class="field required">
	   
	
							
							
							
							<div class="control">
    <div class="nested" id="product-review-table">
        <div class="field choice review-field-rating">
			
			<hr>
            <label class="label" id="Price_rating_label">Write you reviews</label>

            <div class="control review-control-vote" id="write-review10" data-href="http://localhost/reviews?action=reviewForm&amp;id_item=ADFDF59598&amp;id=1">
                
                
                
               
               
             
                <input type="radio" name="ratings[3]" id="Price_1" value="11" class="radio review-radio" data-validate="{ 'rating-required':true}" aria-labelledby="Price_rating_label Price_1_label" aria-required="true" data-star-value = '1'>
                
                
                <label class="rating-1" for="Price_1" title="1 star" id="Price_1_label"><span>1 star</span></label>
                
                
                <input type="radio" name="ratings[3]" id="Price_2" value="12" class="radio review-radio" data-validate="{ 'rating-required':true}" aria-labelledby="Price_rating_label Price_2_label" aria-required="true" data-star-value = '2'>
                
                
                <label class="rating-2" for="Price_2" title="2 stars" id="Price_2_label"><span>2 stars</span></label>
                
                <input type="radio" name="ratings[3]" id="Price_3" value="13" class="radio review-radio" data-validate="{ 'rating-required':true}" aria-labelledby="Price_rating_label Price_3_label" aria-required="true" data-star-value = '3'>
                
                <label class="rating-3" for="Price_3" title="3 stars" id="Price_3_label"><span>3 stars</span></label>
                <input type="radio" name="ratings[3]" id="Price_4" value="14" class="radio review-radio" data-validate="{ 'rating-required':true}" aria-labelledby="Price_rating_label Price_4_label" aria-required="true" data-star-value = '4'>
                
                <label class="rating-4" for="Price_4" title="4 stars" id="Price_4_label"><span>4 stars</span></label>
                
                <input type="radio" name="ratings[3]" id="Price_5" value="15" class="radio review-radio" data-validate="{ 'rating-required':true}" aria-labelledby="Price_rating_label Price_5_label" aria-required="true" data-star-value = '5'>
                <label class="rating-5" for="Price_5" title="5 stars" id="Price_5_label"><span>5 stars</span></label>
             
           
            </div>
        </div>
    </div>
    <input type="hidden" name="product_id"  value="<?= $_GET['id']?>" >
      <input type="hidden" name="sku"  value="<?= $_GET['id_item']?>" >
</div>
	
	</div>				
   
   </fieldset>
   
   <script>
   
	$(function() {
		
			$('.review-radio').click(function () {
				
					// get the attribute value 
					var vl = $(this).attr('data-star-value');
					
					// Set the value to form element 
					$('#stars').val(vl);
					
			})
		})
   </script>

	
	
   <div class="actions-toolbar">
      <div class="primary">
         <button type="submit" class="action submit primary" title="Create an Account" name="submit"><span>Submit</span></button>
      </div>
      <div class="secondary"><a class="action back" href="#"><span>Back</span></a></div>
   </div>
</form>
                    
                     </div>
                    
                    </div>
                   
                   
						 <div class = "col-sm-2"></div>
                   
                
                   
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

	
