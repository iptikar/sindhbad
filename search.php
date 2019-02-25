<?php

// Required controller 
require('controller/controller.php');
// Get the object 
$obj = new MarketPlace();

/* View using following methods 
 * 
 * SearchProducts::GetNumberOfRows('q', 'cat');
 * */

?>


<!doctype html>
<html lang="en">
   
   
  <head >
      <script>
         var require = {
             "baseUrl": "http://magento2.flytheme.net/themes/sm_market2/pub/static/frontend/Sm/market/en_US"
         };
      </script> 
      <meta charset="utf-8"/>
      <meta name="description" content="Default Description"/>
      <meta name="keywords" content="Magento, Varien, E-commerce"/>
      <meta name="robots" content="INDEX,FOLLOW"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta name="format-detection" content="telephone=no"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <title>Electronics</title>
     
     <?php include 'head-links.php'; ?>  
      
      
     
  <?php
	
	// Get the number of pages 
	$numberOfpage = $obj->PaginationOOP(SearchProducts::GetNumberOfRows('q', 'cat')['result'][0]['numberOfRows']) ?? '';
	
	
	// Get the category id 
	$q = $_GET['q'] ?? '';
	$cat = $_GET['cat'] ?? '';
	
	// Visible pages 
	$visible_page = $numberOfpage - 1;
	
	// Check minimun product 
	
echo "<h1>$numberOfpage</h1>";
	
	
	$script = '<script type="text/javascript">
    $(function () {

        window.pagObj = $("#pagination").twbsPagination({
            totalPages: '.$numberOfpage.',
            visiblePages: '.$numberOfpage.',
            onPageClick: function (event, page) {
				
            }
        }).on("page", function (event, page) {
           
			$.ajax({
		url: "http://localhost/ajax/SearchProduct?page="+page+"&cat='.$cat.'&q='.$q.'",
		
	dataType: "html",
	cache: false,
    type: "GET",
    success: function(response) {
		
		$("#product-grid-250").html(response);
    },
    error: function(xhr) {
	
		 alert("Sorry, there was a problem!");
    }
});
            
        });
    });


</script>';


	
	echo $script;
  ?>
 

                        
  
  
   </head>
   
   
   
   <body data-container="body" data-mage-init='{"loaderAjax": {}, "loader": { "icon": "http://magento2.flytheme.net/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/loader-2.gif"}}' class="page-with-filter header-4-style home-4-style footer-1-style layout-full-width  page-products categorypath-electronics category-electronics catalog-category-view page-layout-2columns-left">
 
      <noscript>
         <div class="message global noscript">
            <div class="content">
               <p><strong>JavaScript seems to be disabled in your browser.</strong> <span>For the best experience on our site, be sure to turn on Javascript in your browser.</span></p>
            </div>
         </div>
      </noscript>
     
     
     
      <div class="page-wrapper">
        
      <?php include 'header.php'; ?>
         
       
         
         </div>
       
      
        
        
         <div class="breadcrumbs">
            <div class="container">
               <ul class="items">
                  <li class="item home"> <a href="http://magento2.flytheme.net/themes/sm_market2/argentina/" title="Go to Home Page">Home</a> </li>
                  <li class="item category97"> <strong>Electronics</strong> </li>
               </ul>
            </div>
         </div>
         <main id="maincontent" class="page-main">
            <a id="contentarea" tabindex="-1"></a>
            <div class="columns col2-layout">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-9 col-md-9 col-right-main">
						 
						<?php
							$page = $obj->Pagination();
							
							
						?>
                        <div class="page-title-wrapper">
                           <h2 class="page-title"  id="page-title-heading"   aria-labelledby="page-title-heading toolbar-amount" ><span class="base" data-ui-id="page-title-wrapper" ><?= $_GET['category_name'] ?? '' ;?></span></h2>
                        </div>
                        
                        
                        <div class="page messages">
                           <div data-placeholder="messages"></div>
                           <div data-bind="scope: 'messages'">
                              <!-- ko if: cookieMessages && cookieMessages.length > 0 -->
                              <div role="alert" data-bind="foreach: { data: cookieMessages, as: 'message' }" class="messages">
                                 <div data-bind="attr: { class: 'message-' + message.type + ' ' + message.type + ' message', 'data-ui-id': 'message-' + message.type }">
                                    <div data-bind="html: message.text"></div>
                                 </div>
                              </div>
                              <!-- /ko --><!-- ko if: messages().messages && messages().messages.length > 0 -->
                              <div role="alert" data-bind="foreach: { data: messages().messages, as: 'message' }" class="messages">
                                 <div data-bind="attr: { class: 'message-' + message.type + ' ' + message.type + ' message', 'data-ui-id': 'message-' + message.type }">
                                    <div data-bind="html: message.text"></div>
                                 </div>
                              </div>
                              <!-- /ko -->
                           </div>
                          
                          
                           
                        
                        
                        </div>
                        <div class="category-view">
                           <div class="category-image"><img src="http://magento2.flytheme.net/themes/sm_market2/pub/media/catalog/category/thumb-category4.png" alt="Electronics" title="Electronics" class="image" /></div>
                        </div>
                        <div class="column main">
                           <input name="form_key" type="hidden" value="DixdXLeOUUIp6hNB" /> 
                           <div id="authenticationPopup" data-bind="scope:'authenticationPopup'" style="display: none;">
                          
                           </div>
                           
                          
                           
                           <div id="sm-social-login" class="white-popup mfp-with-anim mfp-hide" data-mage-init='{"socialPopupForm": {"headerLink":".header-container .header.links","popupEffect":"mfp-move-from-top","formLoginUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/customer\/ajax\/login\/","forgotFormUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/popup\/forgot\/","createFormUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/popup\/create\/"}}'>
                              <div class="social-login-type block-container authentication">
                                 <div class="social-login-title">
                                    <h2 class="login-title">Sign In</h2>
                                 </div>
                                 <div class="block social-login-form-wrap col-mgt mgt-7" id="social-login-form">
                                    <div class="block-title"><span id="block-customer-login-heading" role="heading" aria-level="2">Registered Customers</span></div>
                                    <div class="block-content" aria-labelledby="block-customer-login-heading">
                                       <form class="form-customer-login" id="social-form-login" data-mage-init='{"validation":{}}'>
                                          <input name="form_key" type="hidden" value="DixdXLeOUUIp6hNB" /> 
                                          <fieldset class="fieldset login" data-hasrequired="* Required Fields">
                                             <div class="field email required">
                                                <label class="label" for="email"><span>Email</span></label> 
                                                <div class="control"><input name="username" id="email" type="email" class="input-text" value="" autocomplete="off" title="Email" data-validate="{required:true, 'validate-email':true}"></div>
                                             </div>
                                             <div class="field password required">
                                                <label for="pass" class="label"><span>Password</span></label> 
                                                <div class="control"><input name="password" id="pass" type="password" class="input-text" autocomplete="off" title="Password" data-validate="{required:true, 'validate-password':true}"></div>
                                             </div>
                                             <!-- BLOCK social-login-captcha --><!-- /BLOCK social-login-captcha --> 
                                             <div class="actions-toolbar">
                                                <div class="primary"><button type="button" class="action login primary" id="social-login-btn-login"><span>Login</span></button></div>
                                                <div class="secondary"><a class="action remind" href="#"><span>Forgot Your Password?</span></a></div>
                                             </div>
                                             <div class="actions-toolbar">
                                                <div class="primary"><a class="action create" href="#"><span>Create New Account?</span></a></div>
                                             </div>
                                          </fieldset>
                                       </form>
                                    </div>
                                 </div>
                                 <div class="block social-login-wrap col-mgt mgt-5">
                                    <div class="block-title">Or Sign In With</div>
                                    <div class="block-content">
                                       <div class="actions-toolbar social-btn facebook-login"><a class="btn btn-block btn-social btn-facebook" data-mage-init='{"socialProvider": {"url": "http://magento2.flytheme.net/themes/sm_market2/argentina/sociallogin/social/login/type/facebook/", "label": "Login By Facebook"}}'><span class="fa fa-facebook"></span> Sign in with Facebook</a></div>
                                       <div class="actions-toolbar social-btn twitter-login"><a class="btn btn-block btn-social btn-twitter" data-mage-init='{"socialProvider": {"url": "http://magento2.flytheme.net/themes/sm_market2/argentina/sociallogin/social/login/type/twitter/", "label": "Login By Twitter"}}'><span class="fa fa-twitter"></span> Sign in with Twitter</a></div>
                                       <div class="actions-toolbar social-btn linkedin-login"><a class="btn btn-block btn-social btn-linkedin" data-mage-init='{"socialProvider": {"url": "http://magento2.flytheme.net/themes/sm_market2/argentina/sociallogin/social/login/type/linkedin/", "label": "Login By LinkedIn"}}'><span class="fa fa-linkedin"></span> Sign in with LinkedIn</a></div>
                                       <div class="actions-toolbar social-btn yahoo-login"><a class="btn btn-block btn-social btn-yahoo" data-mage-init='{"socialProvider": {"url": "http://magento2.flytheme.net/themes/sm_market2/argentina/sociallogin/social/login/type/yahoo/", "label": "Login By Yahoo"}}'><span class="fa fa-yahoo"></span> Sign in with Yahoo</a></div>
                                    </div>
                                 </div>
                                
                                
                                
                             
                             
                             
                              </div>
                              <div class="social-login-type block-container create" style="display: none">
                                 <div class="social-login-title">
                                    <h2 class="create-account-title">Create New Account</h2>
                                 </div>
                                 <div class="block col-mgt mgt-12">
                                    <div class="block-content">
                                       <form class="form-customer-create" id="social-form-create">
                                          <fieldset class="fieldset create info">
                                             <input type="hidden" name="success_url" value="" /><input type="hidden" name="error_url" value="" />   
                                             <div class="field field-name-firstname required">
                                                <label class="label" for="firstname"><span>First Name</span></label> 
                                                <div class="control"><input type="text" id="firstname" name="firstname" value="" title="First&#x20;Name" class="input-text required-entry"  data-validate="{required:true}"></div>
                                             </div>
                                             <div class="field field-name-lastname required">
                                                <label class="label" for="lastname"><span>Last Name</span></label> 
                                                <div class="control"><input type="text" id="lastname" name="lastname" value="" title="Last&#x20;Name" class="input-text required-entry"  data-validate="{required:true}"></div>
                                             </div>
                                             <div class="field required">
                                                <label for="email_address" class="label"><span>Email</span></label> 
                                                <div class="control"><input type="email" name="email" id="email_address" value="" title="Email" class="input-text" data-validate="{required:true, 'validate-email':true}" /></div>
                                             </div>
                                             <div class="field choice newsletter"><input type="checkbox" class="checkbox" name="is_subscribed" title="Sign Up for Newsletter" value="1" id="is_subscribed" /><label for="is_subscribed" class="label"><span>Sign Up for Newsletter</span></label></div>
                                          </fieldset>
                                          <fieldset class="fieldset create account" data-hasrequired="* Required Fields">
                                             <div class="field password required">
                                                <label for="password" class="label"><span>Password</span></label> 
                                                <div class="control"><input type="password" name="password" id="password-social" title="Password" class="input-text" data-validate="{required:true, 'validate-password':true}" autocomplete="off" /></div>
                                             </div>
                                             <div class="field confirmation required">
                                                <label for="password-confirmation" class="label"><span>Confirm Password</span></label> 
                                                <div class="control"><input type="password" name="password_confirmation" title="Confirm Password" id="password-confirmation-social" class="input-text" data-validate="{required:true, equalTo:'#password-social'}" autocomplete="off" /></div>
                                             </div>
                                             <!-- BLOCK social-create-captcha --><!-- /BLOCK social-create-captcha -->
                                          </fieldset>
                                          <div class="actions-toolbar">
                                             <div class="primary"><button type="button" class="action create primary" title="Create an Account"><span>Create an Account</span></button></div>
                                             <div class="secondary"><a class="action back" href="#"><span>Back</span></a></div>
                                          </div>
                                       </form>
                                      
                                      
                                       <script>
                                          require([
                                              'jquery',
                                              'mage/mage'
                                          ], function ($) {
                                              var dataForm = $('#social-form-create'),
                                                  ignore = null;
                                          
                                              dataForm.mage('validation', {
                                                                          ignore: ignore ? ':hidden:not(' + ignore + ')' : ':hidden'
                                                   }).find('input:text').attr('autocomplete', 'off');
                                          });
                                       </script>
                                  
                                  
                                  
                                    </div>
                                 </div>
                              </div>
                              <div class="social-login-type block-container forgot" style="display:none">
                                 <div class="social-login-title">
                                    <h2 class="forgot-pass-title">Forgot Password</h2>
                                 </div>
                                 <div class="block col-mgt mgt-12">
                                    <div class="block-content">
                                       <form class="form-password-forget" id="social-form-password-forget" data-mage-init='{"validation":{}}'>
                                          <fieldset class="fieldset" data-hasrequired="* Required Fields">
                                             <div class="field note">Please enter your email address below to receive a password reset link.</div>
                                             <div class="field email required">
                                                <label for="email_address" class="label"><span>Email</span></label> 
                                                <div class="control"><input type="email" name="email" alt="email" id="email_address_2" class="input-text" value="" data-validate="{required:true, 'validate-email':true}" /></div>
                                             </div>
                                             <!-- BLOCK social-forgot-password-captcha --><!-- /BLOCK social-forgot-password-captcha -->
                                          </fieldset>
                                          <div class="actions-toolbar">
                                             <div class="primary"><button type="button" class="action send primary"><span>Submit</span></button></div>
                                             <div class="secondary"><a class="action back" href="#"><span>Go back</span></a></div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div style="clear: both"></div>
                           <div class="toolbar-top">
                              <div class="toolbar toolbar-products" data-mage-init='{"productListToolbarForm":{"mode":"product_list_mode","direction":"product_list_dir","order":"product_list_order","limit":"product_list_limit","modeDefault":"grid","directionDefault":"asc","orderDefault":"name","limitDefault":"9","url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/electronics.html"}}'>
                                 <div class="modes">  <strong class="modes-label" id="modes-label">View as</strong>   <strong title="Grid" class="modes-mode active mode-grid" data-value="grid"><span>Grid</span></strong>    <a class="modes-mode mode-list" title="List" href="#" data-role="mode-switcher" data-value="list" id="mode-list" aria-labelledby="modes-label mode-list"><span>List</span></a>   </div>
                                 <p class="toolbar-amount" id="toolbar-amount"> <span class="toolbar-number">9</span> Items </p>
                                 
                                 <!--
                                 <div class="toolbar-sorter sorter">
                                    <label class="sorter-label" for="sorter">Sort By</label> 
                                    <select id="sorter" data-role="sorter" class="sorter-options">
                                       <option value="position"  >Position</option>
                                       <option value="name"  selected="selected"  >Product Name</option>
                                       <option value="price"  >Price</option>
                                    </select>
                                    <a title="Set Descending Direction" href="#" class="action sorter-action sort-asc" data-role="direction-switcher" data-value="desc"><span>Set Descending Direction</span></a> 
                                 </div>
                                 <div class="field limiter">
                                    <label class="label" for="limiter"><span>Show</span></label> 
                                    <div class="control">
                                       <select id="limiter" data-role="limiter" class="limiter-options">
                                          <option value="9" selected="selected">9</option>
                                          <option value="15">15</option>
                                          <option value="30">30</option>
                                       </select>
                                    </div>
                                    <span class="limiter-text">per page</span>
                                 </div>
                              
								-->
                              
                              </div>
                           </div>
                          
                          
                          
                           
                           <?php
                           
                           
                           
                        
                           ?>
                           
                           <div class="category-product products wrapper grid products-grid">
                              <ol class="products list items product-items row" id = "product-grid-250">
                               
                          
                          <?php if( isset (SearchProducts::LetMeSearchProducts('q', 'cat', 0, $obj->perpage)['result']) && count(SearchProducts::LetMeSearchProducts('q', 'cat', 0, $obj->perpage)['result']) > 0) :?>     
                         
			
						<!---  -->
						<?php foreach (SearchProducts::LetMeSearchProducts('q', 'cat', 0, $obj->perpage)['result'] as $row) :?>
						
						<!-- Here we will talk -->
						<?php
															
							// Get the first image in json formate data 
							$images = json_decode($row['images'],true);
							
							// Primary image
							$primary_image = $images[0];
							
							// Get the image link as html 
							$img_src_link = 'http://localhost/img/product-images/'.$primary_image;
							
							// Product name must be url friendly 
							$name = $obj->SEOproductName($row['name']);
                                                          
                         ?>
						
						<div class="item product product-item ">
                                    <div class="product-item-info" data-container="product-grid">
                                                                  <div class="item-inner">
                                                                     <div class="box-image">
                                                                        <a href="http://localhost/discription/<?php echo $name; ?>/<?php echo $row['id']?>/<?php echo $row['sku'];?>" class="product photo product-item-photo" tabindex="-1">  
																			<span class="product-image-container">
																<span class="product-image-wrapper">
																	<img style = "width:350px; height:350px;"class="product-image-photo lazyload" src="http://magento2.flytheme.net/themes/sm_market2/pub/media/lazyloading/blank.png" 
																			data-src="<?php echo $img_src_link ;?>"  alt="<?php echo $row['name']; ?>"></span></span></a> <!--LABEL PRODUCT-->  <!--END LABEL PRODUCT-->
                                                                     
                                                                     
                                                                     <?php if ($row['discount'] !== '0') :?>
                                                                     
                                                                     
                                                                     <div class="label-product label-sale"><span class="sale-product-icon"><?php echo number_format($row['discount'], 0, '.', ''); ?>%</span></div>
                                                                     <?php endif; ?>
                                                                     
                                                                     
                                                                     </div>
                                                                    
                                                                    
                                                                     <div class="product details product-item-details box-info">
                                                                        <h2 class="product name product-item-name product-name">
																			<a class="product-item-link" href="http://localhost/discription/<?php echo $name; ?>/<?php echo $row['id']?>/<?php echo $row['sku'];?>"><?php echo $row['name'];?></a></h2>
                                                                        <div class="product-reviews-summary short">
                                                                           <div class="rating-summary">
                                                                              <span class="label"><span>Rating:</span></span> 
                                                                              <div class="rating-result" title="87%"><span style="width:87%"><span>87%</span></span></div>
                                                                           </div>
                                                                           <div class="reviews-actions"><a class="action view" href="http://localhost/themes/sm_market2/argentina/lat-apparel-ladies-football.html#reviews">1 <span>Review</span></a></div>
                                                                        </div>
                                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="2245">     
																			
																			<span class="price-container price-final_price tax weee"> 
																				
																				
																				<span id="product-price-2245" data-price-amount="470" data-price-type="finalPrice" class="price-wrapper ">
																					
																					<span class="price"><?= $row['discount'] == '0' ? $obj->getPriceFormate($row['regular_price']) : $obj->getPriceFormate($row['special_price']);?> AED</span></span>  
																					
																					
																					
																					</span>  
																				
																		
																		
																		<?php if($row['discount'] !== '0') :?>
																		<span class="old-price">  
																			<span class="price-container price-final_price tax weee"> 
																				<span class="price-label">Regular Price</span>  
																				<span id="old-price-2275" data-price-amount="180" data-price-type="oldPrice" class="price-wrapper "><span class="price"><?= $obj->getPriceFormate($row['regular_price']);?></span>
																				</span>  
																			</span>
																		</span>
																		
																		<?php endif; ?>
																		
																		
																		
																		</div>
															  
                                                                      
                                                                      
                                                                        <div class="bottom-action">
                                                                           <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List" aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/wishlist\/index\/add\/","data":{"product":"2245","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEv"}}' data-action="add-to-wishlist" role="button"><span>Add to Wish List</span></a>      
                                                                           
                                                                          
																			   
																			   
                                                                           
                                                                           <button title="Add to Cart" class="action tocart primary btn-action btn-cart">
																			   <span>Add to Cart</span>
																			   
																			 </button>
                                                                           
                                                                           
                                                                           
                                                                           <a href="#" class="action tocompare btn-action link-compare" title="Add to Compare" aria-label="Add to Compare" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/catalog\/product_compare\/add\/","data":{"product":"2245","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEv"}}' role="button"><span>Add to Compare</span></a> 
                                                                        </div>
                                                                     </div>
                                                                 
                                                                 
                                                                  </div>
                                                               </div>
                         </div>
                                                           
					  
						
						<?php endforeach; ?>
					
                         </ol>
                          
                         <div>
							 
							 <!-- Poduct number of rows must be greater then per page to show paginatioaan -->
							 
							 <?php if( $obj->perpage < SearchProducts::GetNumberOfRows('q', 'cat')['result'][0]['numberOfRows']) :?>
							
							<nav aria-label="Page navigation" style = "text-align:center;">
							
							<ul class="pagination" id="pagination"></ul>
						
							</nav>
							
							
							
						<?php endif; ?>
							
							
                         </div>
                         <?php else: ?>
						
						<div class="message info empty"><div>We can't find products matching the selection.</div></div>
						
						<?php endif; ?>
                           
                           
                          </div>
                           
                          
                            <script data-role="msrp-popup-template" type="text/x-magento-template">
                              <div id="map-popup-click-for-price" class="map-popup">
                                  <div class="popup-header">
                                      <strong class="title" id="map-popup-heading-price"></strong></div>
                                  <div class="popup-content">
                                      <div class="map-info-price" id="map-popup-content">
                                          <div class="price-box">
                                              <div class="map-msrp" id="map-popup-msrp-box">
                                                  <span class="label">Price</span>
                                                  <span class="old-price map-old-price" id="map-popup-msrp">
                                                      <span class="price"></span></span></div>
                                              <div class="map-price" id="map-popup-price-box">
                                                  <span class="label">Actual Price</span>
                                                  <span id="map-popup-price" class="actual-price"></span></div></div>
                                          <form action="" method="POST" id="product_addtocart_form_from_popup" class="map-form-addtocart">
                                              <input type="hidden" name="product" class="product_id" value="" id="map-popup-product-id"/>
                                              <button type="button"
                                                      title="Add to Cart"
                                                      class="action tocart primary"
                                                      id="map-popup-button">
                                                  <span>Add to Cart</span></button>
                                              <div class="additional-addtocart-box">
                                                  </div></form></div>
                                      <div class="map-text" id="map-popup-text">
                                          Our price is lower than the manufacturer&#039;s &quot;minimum advertised price.&quot; As a result, we cannot show you the price in catalog or the product page. <br><br> You have no obligation to purchase the product once you know the price. You can simply remove the item from your cart.</div></div></div>
                           </script><script data-role="msrp-info-template" type="text/x-magento-template">
                              <div id="map-popup-what-this" class="map-popup">
                                  <div class="popup-header">
                                      <strong class="title" id="map-popup-heading-what-this"></strong></div>
                                  <div class="popup-content">
                                      <div class="map-help-text" id="map-popup-text-what-this">
                                          Our price is lower than the manufacturer&#039;s &quot;minimum advertised price.&quot; As a result, we cannot show you the price in catalog or the product page. <br><br> You have no obligation to purchase the product once you know the price. You can simply remove the item from your cart.</div></div></div>
                           </script>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-left-sidebar">
                        <div class="sidebar sidebar-main">
                           <div class="block filter">
                              
                              <div class="block-title filter-title"><strong>Shop By</strong></div>
                              
                              <small> Comming Soon</small>
                              <!--
                              <div class="block-content filter-content">
                                 <strong role="heading" aria-level="2" class="block-subtitle filter-subtitle">Shopping Options</strong> 
                                 <dl class="filter-options" id="narrow-by-list">
                                   
                                   
                                     
                                    
                                    <dt role="heading" aria-level="3" class="filter-options-title">Price</dt>
                                    <dd class="filter-options-content">
                                       <div class="price-slider-wrap">
                                          <div id="price-slider" data-rate="1" data-min-standard="170" data-max-standard="580" ></div>
                                          <div class="price-slider-values"><span class="filter-currency">$</span> <input name="price_minimum" id="price_minimum" value="170" type="text"><span class="price-filter-separator">&nbsp;-&nbsp;</span> <span class="filter-currency">$</span> <input name="price_maximum" id="price_maximum" value="580" type="text"></div>
                                       </div>
                                    </dd>
                                   
                                   
                                   
                                
                                
                                 </dl>
                              </div>
                           
                           -->
                           
                           </div>
                        </div>
                        <div class="sidebar sidebar-additional">
                           <div class="block block-compare" data-bind="scope: 'compareProducts'" data-role="compare-products-sidebar">
                              <div class="block-title"><strong id="block-compare-heading" role="heading" aria-level="2">Compare Products</strong> <span class="counter qty no-display" data-bind="text: compareProducts().countCaption, css: {'no-display': !compareProducts().count}"></span></div>
                              <!-- ko if: compareProducts().count -->
                              <div class="block-content no-display" aria-labelledby="block-compare-heading" data-bind="css: {'no-display': !compareProducts().count}">
                                 <ol id="compare-items" class="product-items product-items-names" data-bind="foreach: compareProducts().items">
                                    <li class="product-item"><input type="hidden" class="compare-item-id" data-bind="value: id"/><strong class="product-item-name"><a data-bind="attr: {href: product_url}, html: name" class="product-item-link"></a></strong> <a href="#" data-bind="attr: {'data-post': remove_url}" title="Remove This Item" class="action delete"><span>Remove This Item</span></a></li>
                                 </ol>
                                 <div class="actions-toolbar">
                                    <div class="primary"><a data-bind="attr: {'href': compareProducts().listUrl}" class="action compare primary"><span>Compare</span></a></div>
                                    <div class="secondary"><a id="compare-clear-all" href="#" class="action clear" data-post="{&quot;action&quot;:&quot;http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/catalog\/product_compare\/clear\/&quot;,&quot;data&quot;:{&quot;uenc&quot;:&quot;&quot;,&quot;confirmation&quot;:true,&quot;confirmationMessage&quot;:&quot;Are you sure you want to remove all items from your Compare Products list?&quot;}}"><span>Clear All</span></a></div>
                                 </div>
                              </div>
                              <!-- /ko --><!-- ko ifnot: compareProducts().count -->
                              <div class="empty">You have no items to compare.</div>
                              <!-- /ko -->
                           </div>
                            
                           <div id="sm_filterproducts_1523715229935215894" class="block products-sidebar">
                              <div class="block-title filter-title"><strong>Featured Product</strong></div>
                              <div class="block-content block-content-products">
                                 
                                 
                                 <div class="item product product-item">
                                    <div class="item-inner clearfix">
                                       <div class="box-image"><a href="http://magento2.flytheme.net/themes/sm_market2/argentina/wireless-bluetooth-speaker-sony-x3.html" class="product photo product-item-photo" tabindex="-1">  <span class="product-image-container"><span class="product-image-wrapper"><img class="product-image-photo lazyload"   src="http://magento2.flytheme.net/themes/sm_market2/pub/media/lazyloading/blank.png" data-src="http://magento2.flytheme.net/themes/sm_market2/pub/media/catalog/product/cache/d73a5018306142840707bd616a4ef293/f/u/fuhlen_mouse_for_gamer_1.jpg"  width="300" height="300" alt="Fuhlen Mouse for Gamer"/></span></span></a></div>
                                       <div class="product details product-item-details box-info">
                                          <strong class="product name product-name product-item-name"><a class="product-item-link" href="http://magento2.flytheme.net/themes/sm_market2/argentina/wireless-bluetooth-speaker-sony-x3.html">Fuhlen Mouse for Gamer</a></strong>    
                                          <div class="product-reviews-summary short">
                                             <div class="rating-summary">
                                                <span class="label"><span>Rating:</span></span> 
                                                <div class="rating-result" title="87%"><span style="width:87%"><span>87%</span></span></div>
                                             </div>
                                             <div class="reviews-actions"><a class="action view" href="http://magento2.flytheme.net/themes/sm_market2/argentina/wireless-bluetooth-speaker-sony-x3.html#reviews">1&nbsp;<span>Review</span></a></div>
                                          </div>
                                          <div class="price-box price-final_price" data-role="priceBox" data-product-id="2281">     <span class="price-container price-final_price tax weee" > <span  id="product-price-2281"  data-price-amount="250" data-price-type="finalPrice" class="price-wrapper "><span class="price">$250.00</span></span>  </span>  </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="item product product-item">
                                    <div class="item-inner clearfix">
                                       <div class="box-image"><a href="http://magento2.flytheme.net/themes/sm_market2/argentina/acer-all-in-one-computers.html" class="product photo product-item-photo" tabindex="-1">  <span class="product-image-container"><span class="product-image-wrapper">
										   
										   
										   
										 <img class="product-image-photo lazyload"   src="http://magento2.flytheme.net/themes/sm_market2/pub/media/lazyloading/blank.png" data-src="http://localhost/marketplace-theme/img/product-images/apple_imac_2017_21.5-inch_retina_4k.jpg"  width="300" height="300" alt="Acer Aspire S24 All In One PC"/></span></span></a></div>
                                       <div class="product details product-item-details box-info">
                                          <strong class="product name product-name product-item-name"><a class="product-item-link" href="http://magento2.flytheme.net/themes/sm_market2/argentina/acer-all-in-one-computers.html">Acer Aspire S24 All In One PC</a></strong>    
                                          <div class="product-reviews-summary short">
                                             <div class="rating-summary">
                                                <span class="label"><span>Rating:</span></span> 
                                                <div class="rating-result" title="87%"><span style="width:87%"><span>87%</span></span></div>
                                             </div>
                                             <div class="reviews-actions"><a class="action view" href="http://magento2.flytheme.net/themes/sm_market2/argentina/acer-all-in-one-computers.html#reviews">1&nbsp;<span>Review</span></a></div>
                                          </div>
                                          <div class="price-box price-final_price" data-role="priceBox" data-product-id="2280">   <span class="special-price">  <span class="price-container price-final_price tax weee" > <span class="price-label">Special Price</span>  <span  id="product-price-2280"  data-price-amount="400" data-price-type="finalPrice" class="price-wrapper "><span class="price">$400.00</span></span>  </span></span> <span class="old-price">  <span class="price-container price-final_price tax weee" > <span class="price-label">Regular Price</span>  <span  id="old-price-2280"  data-price-amount="450" data-price-type="oldPrice" class="price-wrapper "><span class="price">$450.00</span></span>  </span></span>  </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="item product product-item">
                                    <div class="item-inner clearfix">
                                       <div class="box-image"><a href="http://magento2.flytheme.net/themes/sm_market2/argentina/washing-machines-dryers.html" class="product photo product-item-photo" tabindex="-1">  <span class="product-image-container"><span class="product-image-wrapper"><img class="product-image-photo lazyload"   src="http://localhosts/marketplace-theme/img/product-images/apple_imac_2017_21.5-inch_retina_4k.jpg" data-src="http://magento2.flytheme.net/themes/sm_market2/pub/media/catalog/product/cache/d73a5018306142840707bd616a4ef293/w/a/washing_machines_elextrolux.jpg"  width="300" height="300" alt="Washing Machines Elextrolux"/></span></span></a></div>
                                       <div class="product details product-item-details box-info">
                                          <strong class="product name product-name product-item-name"><a class="product-item-link" href="http://magento2.flytheme.net/themes/sm_market2/argentina/washing-machines-dryers.html">Washing Machines Elextrolux</a></strong>    
                                          <div class="product-reviews-summary short">
                                             <div class="rating-summary">
                                                <span class="label"><span>Rating:</span></span> 
                                                <div class="rating-result" title="80%"><span style="width:80%"><span>80%</span></span></div>
                                             </div>
                                             <div class="reviews-actions"><a class="action view" href="http://magento2.flytheme.net/themes/sm_market2/argentina/washing-machines-dryers.html#reviews">1&nbsp;<span>Review</span></a></div>
                                          </div>
                                          <div class="price-box price-final_price" data-role="priceBox" data-product-id="2279">     <span class="price-container price-final_price tax weee" > <span  id="product-price-2279"  data-price-amount="185" data-price-type="finalPrice" class="price-wrapper "><span class="price">$185.00</span></span>  </span>  </div>
                                       </div>
                                    </div>
                                 </div>
                              
                              
                              
                              </div>
                           </div>
                          
                          
                          
                        
                        
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
		
      
<?php include 'footer.php'; ?>

