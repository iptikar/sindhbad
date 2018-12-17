<?php
session_start();
require('controller/controller.php');

// Setting time to dubai
date_default_timezone_set ('Asia/Dubai');
// Get the object
$obj = new MarketPlace();


?>

<!doctype html>
<html lang="en" >

<head >

<meta charset="utf-8"/>
<meta name="description" content="Default Description"/>
<meta name="keywords" content=""/>
<meta name="robots" content="INDEX,FOLLOW"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="format-detection" content="telephone=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>Home - SM Market Layout 4</title> 



<?php include 'head-links.php'; ?>

<script type="text/javascript" src = "js/cahce-reload.js"></script>



</head>
<body data-container="body" >
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
	<a id="contentarea" tabindex="-1"></a>
	<div class="columns col1-layout">
	   <div class="container">
		  <div class="row">
			 <div class="col-lg-12 col-md-12">
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
				<div class="column main">
					
				   <input name="form_key" type="hidden" value="3g0WKEAJ2kWk2DXJ" /> 
				  
				  
				  
				   <div id="authenticationPopup" data-bind="scope:'authenticationPopup'" style="display: none;">
					  
					  
					 
					 
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
						 <div class="block social-login-wrap col-mgt mgt-5 hide">
							<div class="block-title">Or Sign In With</div>
							<div class="block-content">
							   <div class="actions-toolbar social-btn facebook-login"><a class="btn btn-block btn-social btn-facebook" data-mage-init='{"socialProvider": {"url": "http://magento2.flytheme.net/themes/sm_market2/argentina/sociallogin/social/login/type/facebook/", "label": "Login By Facebook"}}'><span class="fa fa-facebook"></span> Sign in with Facebook</a></div>
							   <div class="actions-toolbar social-btn twitter-login"><a class="btn btn-block btn-social btn-twitter" data-mage-init='{"socialProvider": {"url": "http://magento2.flytheme.net/themes/sm_market2/argentina/sociallogin/social/login/type/twitter/", "label": "Login By Twitter"}}'><span class="fa fa-twitter"></span> Sign in with Twitter</a></div>
							   <div class="actions-toolbar social-btn linkedin-login"><a class="btn btn-block btn-social btn-linkedin" data-mage-init='{"socialProvider": {"url": "http://magento2.flytheme.net/themes/sm_market2/argentina/sociallogin/social/login/type/linkedin/", "label": "Login By LinkedIn"}}'><span class="fa fa-linkedin"></span> Sign in with LinkedIn</a></div>
							   <div class="actions-toolbar social-btn yahoo-login"><a class="btn btn-block btn-social btn-yahoo" data-mage-init='{"socialProvider": {"url": "http://magento2.flytheme.net/themes/sm_market2/argentina/sociallogin/social/login/type/yahoo/", "label": "Login By Yahoo"}}'><span class="fa fa-yahoo"></span> Sign in with Yahoo</a></div>
							</div>
						 </div>
						 <script>
							window.socialAuthenticationPopup = {"facebook":{"label":"Facebook","login_url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/social\/login\/type\/facebook\/","url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/social\/login\/authen\/popup\/type\/facebook\/","key":"facebook","btn_key":"facebook"},"twitter":{"label":"Twitter","login_url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/social\/login\/type\/twitter\/","url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/social\/login\/authen\/popup\/type\/twitter\/","key":"twitter","btn_key":"twitter"},"linkedin":{"label":"LinkedIn","login_url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/social\/login\/type\/linkedin\/","url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/social\/login\/authen\/popup\/type\/linkedin\/","key":"linkedin","btn_key":"linkedin"},"yahoo":{"label":"Yahoo","login_url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/social\/login\/type\/yahoo\/","url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/social\/login\/authen\/popup\/type\/yahoo\/","key":"yahoo","btn_key":"yahoo"}};
						 </script>
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
				   <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
				   <html>
					  <body>
						 <div class="home-style home-page-4">
							<div class="row">
							   <div class="col-lg-9 image-slideshow">
								  <div class="image-slider-home">
									 <div class="sm-imageslider">
										<div class="sm-imageslider-inner">
										   <div class="sm-imageslider-content owl-carousel owl-theme">
											  <div class="item"><a title="title" href="#"><img src="http://localhost/img/id4-slide-1.jpg" alt="Slider Image"></a></div>
											  <div class="item"><a title="title" href="#"><img src="http://localhost/img/id4-slide-2.jpg" alt="Slider Image"></a></div>
											  <div class="item"><a title="title" href="#"><img src="http://localhost/img/id4-slide-3.jpg" alt="Slider Image"></a></div>
										   </div>
										</div>
									 </div>
								   
								   
								   
									 <script type="text/javascript">
										require([
											'jquery',
											'owlcarousel'
										], function ($) {
											$(".sm-imageslider-content").owlCarousel({
												items:1,
												autoplay:true,
												loop:true,
												nav : true, 
												dots: false,
												autoplaySpeed : 500,
												navSpeed : 500,
												dotsSpeed : 500,
												autoplayHoverPause: true,
												margin:1,
											});	  
										});	
																		
													
									 </script>
								  
								  
								  
								  
								  
								  </div>
							   </div>
							   <div class="col-lg-3 slider-deal">
								  <div id="sm_filterproducts_1525586868683927063" class="block products-single">
									 <div class="block-content block-content-products products-grid">
										<div class="item product product-item">
										   <div class="item-inner clearfix">
											  <div class="product details product-item-details box-info">
												 <h2 class="product name product-item-name product-name"><a class="product-item-link" href="http://localhost/themes/sm_market2/argentina/electrolux-efls61-washing-machine.html">Philips HR1861 Whole Fruit Juicer</a></h2>
												 <div class="product-reviews-summary short">
													<div class="rating-summary">
													   <span class="label"><span>Rating:</span></span> 
													   <div class="rating-result" title="80%"><span style="width:80%"><span>80%</span></span></div>
													</div>
													<div class="reviews-actions"><a class="action view" href="http://localhost/themes/sm_market2/argentina/electrolux-efls61-washing-machine.html#reviews">1 <span>Review</span></a></div>
												 </div>
												 <div class="price-box price-final_price" data-role="priceBox" data-product-id="2275">   <span class="special-price">  <span class="price-container price-final_price tax weee"> <span class="price-label">Special Price</span>  <span id="product-price-2275" data-price-amount="170" data-price-type="finalPrice" class="price-wrapper "><span class="price">$170.00</span></span>  </span></span> <span class="old-price">  <span class="price-container price-final_price tax weee"> <span class="price-label">Regular Price</span>  <span id="old-price-2275" data-price-amount="180" data-price-type="oldPrice" class="price-wrapper "><span class="price">$180.00</span></span>  </span></span>  </div>
											  </div>
											  <div class="box-image"><a href="http://localhost/themes/sm_market2/argentina/electrolux-efls61-washing-machine.html" class="product photo product-item-photo" tabindex="-1">  <span class="product-image-container"><span class="product-image-wrapper">
												  
												  <img class="product-image-photo lazyload" src="http://localhost/img/blank.png" data-src="http://localhost/img/philips_hr1861_whole_fruit_juicer.jpg" width="300" height="300" alt="Philips HR1861 Whole Fruit Juicer"></span></span></a></div>
											  
											  
											  <div class="deals-countdown" data-timer="2019/03/29 00:00:00">
												 <div class="deals-time time-day">
													<div class="num-time"></div>
													<div class="title-time"></div>
												 </div>
												 <div class="deals-time time-hours">
													<div class="num-time"></div>
													<div class="title-time"></div>
												 </div>
												 <div class="deals-time time-mins">
													<div class="num-time"></div>
													<div class="title-time"></div>
												 </div>
												 <div class="deals-time time-secs">
													<div class="num-time"></div>
													<div class="title-time"></div>
												 </div>
											  </div>
										   </div>
										</div>
									 </div>
								  </div>
								 
								 
								 
								  <script type="text/javascript">
									 require([
										 'jquery'
									 ], function ($) {
									 var $element = $('#sm_filterproducts_1525586868683927063');
									 
									 function CountDown(date,id){
									 dateNow = new Date();
									 amount = date.getTime() - dateNow.getTime();
									 delete dateNow;
									 if(amount < 0){
									 id.html("Now!");
									 } else{
									 days=0;hours=0;mins=0;secs=0;out="";
									 amount = Math.floor(amount/1000);
									 days=Math.floor(amount/86400);
									 amount=amount%86400;
									 hours=Math.floor(amount/3600);
									 amount=amount%3600;
									 mins=Math.floor(amount/60);
									 amount=amount%60;
									 secs=Math.floor(amount);
									 $(".time-day .num-time" , id).text(days);
									 $(".time-day .title-time" , id).text(((days <= 1)? "Day" : "Days"));
									 $(".time-hours .num-time" , id).text(hours);
									 $(".time-hours .title-time" , id).text(((hours <= 1)? "Hour" : "Hours"));
									 $(".time-mins .num-time" , id).text(mins);
									 $(".time-mins .title-time" , id).text(((mins <= 1)? "Min" : "Mins"));
									 $(".time-secs .num-time" , id).text(secs);
									 $(".time-secs .title-time" , id).text(((secs <= 1)? "Sec" : "Secs"));
									 setTimeout(function(){CountDown(date,id)}, 1000);
									 }
									 }
									 $( ".deals-countdown",$element).each(function() {
									 var timer = $(this).data('timer');
									 var data = new Date(timer);
									 CountDown(data,$(this));
									 });
									 });
								  </script>
								  
								  
							   
							  
							   </div>
							</div>
							
							 
							
							<div class="services-home">
							   <div class="banner-policy">
								  <div class="inner">
									 <div class="policy"><a title="90 days money back" href="#"><em class="fa fa-truck"></em><span>FREE SHIPPING<br>ON ALL ORDER</span></a></div>
									 <div class="policy"><a title="free shipping on all orders" href="#"><em class="fa fa-recycle"></em><span>Money Back<br>Guarantee</span></a></div>
									 <div class="policy"><a title="lowest price guarantee" href="#"><em class="fa fa-umbrella"></em><span>SAFE SHOPPING<br>GUARANTEE</span></a></div>
									 <div class="policy"><a title="Online Support 24h on day" href="#"><em class="fa fa-medkit"></em><span>Online Support<br>24h on day</span></a></div>
								  </div>
							   </div>
							</div>
							<div class="list-product-home">
							   <div id="listingtabs_0" class="sm-listing-tabs ltabs-loading-first slidertype">
								  <div class="ltabs-loading-css">
									 <div class="loading-content"></div>
								  </div>
								  <div class="title-home-page"><span>Mobile Phones</span></div>
								  <div class="ltabs-wrap">
									 <!--Begin Tabs-->
									 <div class="ltabs-tabs-container">
										<div class="ltabs-tabs-wrap" tabindex="-1">
										   <span class="ltabs-current-select"></span> 
										   <ul class="ltabs-tabs cf">
											   
											   <!--
											  <li class="ltabs-tab  tab-sel tab-loaded " data-tab-id="223" data-catids="223"><span class="ltabs-tab-label">Fashions</span></li>
											  <li class="ltabs-tab  " data-tab-id="98" data-catids="98,164,167,168,169,170,171,165,172,173,174,175,176,177,178,179,166,180,181,182,183,184,235,236,237,238,239,240,241,242,243,244,245">
												  
											<span class="ltabs-tab-label">Smartphones & Tablets</span></li>
											  <li class="ltabs-tab  " data-tab-id="103" data-catids="103,197,198,199,200"><span class="ltabs-tab-label">Jewelry & Watches</span></li>
										   -->
										   
										   </ul>
										</div>
									 </div>
									
								   
								   
								   
									 <!-- End Tabs--> <!--Begin Items-->
									 <div class="ltabs-items-container ">
										<div class="ltabs-items  ltabs-items-selected ltabs-items-loaded  ltabs-items-223">
										   <div class="ltabs-items-inner">
											  <div class="grid products-grid">
												 <div class="products list items product-items  owl-carousel ">
												   
												   
												  <?php if(count($obj->GetProductByCategory('314')) > 0 and is_array($obj->GetProductByCategory('314'))) :?>  
													
												   <?php foreach($obj->GetProductByCategory('314') as $row) :?>
												  
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
												   <div class="item product product-item " onclick = "TrackViewer(this);" data-product-sku = "<?= $row['sku'];?>" data-category-id = "<?= $row['category_id'];?>">
													   <div class="product-item-info" data-container="product-grid">
														  <div class="item-inner">
															 <div class="box-image">
																<a href="http://localhost/discription/<?php echo $name; ?>/<?php echo $row['id']?>/<?php echo $row['sku'];?>" class="product photo product-item-photo" tabindex="-1">  
																	<span class="product-image-container">
														<span class="product-image-wrapper">
															<img style = "width:350px; height:350px;"class="product-image-photo lazyload" src="http://localhost/img/blank.png" 
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
																		<span id="old-price-2275" data-price-amount="180" data-price-type="oldPrice" class="price-wrapper "><span class="price"><?= $obj->getPriceFormate($row['regular_price']);?>  AED</span>
																		</span>  
																	</span>
																</span>
																
																<?php endif; ?>
																
																
																
																</div>
													  
															  
															  
																<div class="bottom-action">
																   <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List" aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/wishlist\/index\/add\/","data":{"product":"2245","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEv"}}' data-action="add-to-wishlist" role="button"><span>Add to Wish List</span></a>      
																   
<!-- Following variable request 
// Get the element that is required 
	var sku = $('#ajax-p-sku').val();

	// Get the product name 
	var p_name = $('#ajax-p-name').val();
	
	// Get the product image 
	var p_p_img = $('#p_p_image').val(); 
	
	// Get the quentity 
	var qty = $('#qty').val();
	
	// Get the price 
	var price = $('#cart-price').val();
	
	// Get the id of the product 
	var id = $('#cart-p-id').val();
-->
																	   
																	   
																   
<button type="submit" title="Add to Cart" class="action tocart primary btn-action btn-cart" data-cart = '{"name" : "<?= $row['name']?>", "sku": "<?= $row['sku']?>", "image": "<?= $img_src_link ?>", "qty": "1", "price" : "<?= $row['discount'] == '0' ? $row['regular_price'] : $row['special_price'];?> ", "id" : <?= $row['id']?>, "seller_email":<?=base64_encode($row['seller_email']);?>}' onclick = "SendItemToCart(this)"><span>Add to Cart</span></button>

																   
																   
																   
																   <a href="#" class="action tocompare btn-action link-compare" title="Add to Compare" aria-label="Add to Compare"  role="button"><span>Add to Compare</span></a> 
																</div>
															 </div>
														 
														 
														  </div>
													   </div>
													</div>
												   
												   
												   <?php endforeach; ?>
												 
												<?php endif; ?>
												 
												 
												 
												 </div>
											  
											  
											  </div>
										   </div>
										</div>
										<div class="ltabs-items  ltabs-items-98">
										   <div class="ltabs-items-inner">
											  <div class="ltabs-loading">
												 <div class="loading-content"></div>
											  </div>
										   </div>
										</div>
										<div class="ltabs-items  ltabs-items-103">
										   <div class="ltabs-items-inner">
											  <div class="ltabs-loading">
												 <div class="loading-content"></div>
											  </div>
										   </div>
										</div>
									 </div>
									 <!--End Items-->
								  </div>
							   </div>
							   
							   
							   <script type="text/javascript">
								  require(['jquery' , 'Sm_ListingTabs/js/owl.carousel'], function ($) {
									;(function (element) {
									var el = $(element),
									tabs_wrap = $('.ltabs-tabs-wrap',el),
									tab = $('.ltabs-tab', el),
									tab_active = $('.ltabs-tab.tab-sel .ltabs-tab-label',tabs_wrap), 
									tab_content = $('.ltabs-items', el),
									ajax_url = 'http://magento2.flytheme.net/themes/sm_market2/argentina/listingtabs/index/index',
									btn_loadmore = $('.ltabs-loadmore-btn', el),
									type_loadmore = false,
									place_holder_tab = $('.ltabs-current-select', el),
									nb_column1 = 1, nb_column2 = 2, nb_column3 = 3, nb_column4 = 4, nb_column5 = 4, margin = 30; stagePadding = 0;
											var _interval = setInterval(function() {
									if(document.readyState === 'complete') {
										clearInterval(_interval);
											el.removeClass('ltabs-loading-first');
											_runAllScript();
										}    
									}, 500);
									function _runAllScript () {
										place_holder_tab.text(tab_active.text());
										tabs_wrap.on('click', function(e){
											e.preventDefault();
											var _that = $(this);
											_that.toggleClass('active');
											return false;		
										});
										tab.off('click').on('click', function (e) {
											e.preventDefault();
											var _self = $(this);
											if (_self.hasClass('tab-sel')) return false;
											tab.removeClass('tab-sel');
											_self.addClass('tab-sel');
											place_holder_tab.text($('.ltabs-tab-label', _self).text());
											var tab_id = _self.attr('data-tab-id'),
												catids = _self.attr('data-catids'),
												items_active = $('.ltabs-items-'+tab_id, el),
												loading = $('.ltabs-loading', items_active),
												loaded = items_active.hasClass('ltabs-items-loaded');
											tab_content.removeClass('ltabs-items-selected');
											items_active.addClass('ltabs-items-selected');
											
											if (!loaded && !items_active.hasClass('ltabs-process')) {
												items_active.addClass('ltabs-process');
												loading.show();
												$.ajax({
													type: 'POST',
													url: ajax_url,
													data: {
														is_ajax_listing_tabs: 1,
														ajax_listingtabs_start: 0,
														tab_id: tab_id,
														catids: catids,
														moduleid: 'listingtabs_0',
														config: {"isactive":"1","title":"Best Sellers","type_show":"slider","type_listing":"all","under_price":"5","display_countdown":"0","display_title":"1","target":"_self","class_suffix":"sm_listingtab","show_loadmore_slider":"slider","nb_column1":"4","nb_column2":"3","nb_column3":"3","nb_column4":"2","nb_column5":"1","nb_rows":"1","type_filter":"categories","field_tabs":"","category_tabs":"223,98,103","order_by":"ordered_qty","order_dir":"ASC","limitation":"6","filter_type":"categories","product_category":"97,98,103","filter_order_by":"lastest_product","child_category_products":"0","max_depth":"12","product_featured":"0","product_order_dir":"ASC","product_limitation":"8","category_preload":"97","product_order_by":"best_sales","tab_all_display":"0","cat_title_maxlength":"150","category_order_by":"name","category_order_dir":"ASC","icon_display":"0","imgcfgcat_order":"category_image,category_description","imgcfgcat_function":"1","imgcfgcat_width":"30","imgcfgcat_height":"30","imgcfgcat_background":"FFFFFF","imgcfgcat_placeholder":"sm\/listingtabs\/images\/nophoto.jpg","imgcfgcat_from_category_image":"1","imgcfgcat_from_category_description":"1","product_title_display":"1","product_title_maxlength":"25","product_description_display":"0","product_description_maxlength":"150","product_price_display":"1","product_reviews_count":"1","product_addcart_display":"1","product_addwishlist_display":"1","product_addcompare_display":"1","product_readmore_display":"0","product_readmore_text":"Details","img_from_product_image":"1","img_from_product_description":"1","img_order":"product_image, product_description","img_function":"1","img_width":"270","img_height":"270","img_background":"FFFFFF","img_replacement":"sm\/listingtabs\/images\/nophoto.jpg","effect":"fadeIn","duration":"200","delay":"400","nav":"1","loop":"0","margin":"30","slideBy":"1","autoplay":"0","autoplayHoverPause":"1","autoplaySpeed":"1000","navSpeed":"1000","startPosition":"0","mouseDrag":"1","touchDrag":"1","use_cache":"0","cache_time":"3600","class":"Sm\\ListingTabs\\Block\\ListingTabs","template":"Sm_ListingTabs::default.phtml","category_select":""}						},
													success: function (data) {
														if (data.items_markup != '') {
															$('.ltabs-items-inner', items_active).html(data.items_markup);
															items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');
															if (type_loadmore){
																$('.product-item', items_active).removeAttr('style');
																$('.product-items', items_active).removeClass('play');
																$('.product-item', items_active).addClass('ltabs-mark');
																animatesItems(items_active);	
															}else{
																_runOwlCarousel(items_active);
															}
															$(document).trigger("afterAjaxProductsLoaded");
															loading.remove();
															updateStatus(items_active);
																								$(document).trigger("afterAjaxLazyLoad");
															 }
													},
													dataType: 'json'
												});
								  
											}else{
												if (type_loadmore){
													$('.product-item', items_active).removeAttr('style');
													$('.product-items', items_active).removeClass('play');
													$('.product-item', items_active).addClass('ltabs-mark');
													animatesItems(items_active);
												}else{
													var owl = $('.owl-carousel' , items_active);
													 owl = owl.data('owlCarousel');
													if (typeof owl !== 'undefined') 
														owl.onResize();
													else{
														_runOwlCarousel(items_active);
													}
													
												}
											}
										});
										
										btn_loadmore.off('click').on('click', function (e) {
											e.preventDefault();
											var _self = $(this);
											if (_self.hasClass('loaded') || _self.hasClass('loading')) {
												return false;
											} else {
												_self.addClass('loading');
												$('.ltabs-image-loading', _self).css({display: 'inline-block'});
												var rl_start = _self.parent().attr('data-rl_start'),
													catids = _self.parent().attr('data-catids'),
													tab_id = _self.parent().attr('data-tab-id'),
													items_active = $('.ltabs-items-'+tab_id, el);
												$.ajax({
													type: 'POST',
													url: ajax_url,
													data: {
														is_ajax_listing_tabs: 1,
														ajax_listingtabs_start: rl_start,
														tab_id: tab_id,
														catids: catids,
														moduleid: 'listingtabs_0',
														config: {"isactive":"1","title":"Best Sellers","type_show":"slider","type_listing":"all","under_price":"5","display_countdown":"0","display_title":"1","target":"_self","class_suffix":"sm_listingtab","show_loadmore_slider":"slider","nb_column1":"4","nb_column2":"3","nb_column3":"3","nb_column4":"2","nb_column5":"1","nb_rows":"1","type_filter":"categories","field_tabs":"","category_tabs":"223,98,103","order_by":"ordered_qty","order_dir":"ASC","limitation":"6","filter_type":"categories","product_category":"97,98,103","filter_order_by":"lastest_product","child_category_products":"0","max_depth":"12","product_featured":"0","product_order_dir":"ASC","product_limitation":"8","category_preload":"97","product_order_by":"best_sales","tab_all_display":"0","cat_title_maxlength":"150","category_order_by":"name","category_order_dir":"ASC","icon_display":"0","imgcfgcat_order":"category_image,category_description","imgcfgcat_function":"1","imgcfgcat_width":"30","imgcfgcat_height":"30","imgcfgcat_background":"FFFFFF","imgcfgcat_placeholder":"sm\/listingtabs\/images\/nophoto.jpg","imgcfgcat_from_category_image":"1","imgcfgcat_from_category_description":"1","product_title_display":"1","product_title_maxlength":"25","product_description_display":"0","product_description_maxlength":"150","product_price_display":"1","product_reviews_count":"1","product_addcart_display":"1","product_addwishlist_display":"1","product_addcompare_display":"1","product_readmore_display":"0","product_readmore_text":"Details","img_from_product_image":"1","img_from_product_description":"1","img_order":"product_image, product_description","img_function":"1","img_width":"270","img_height":"270","img_background":"FFFFFF","img_replacement":"sm\/listingtabs\/images\/nophoto.jpg","effect":"fadeIn","duration":"200","delay":"400","nav":"1","loop":"0","margin":"30","slideBy":"1","autoplay":"0","autoplayHoverPause":"1","autoplaySpeed":"1000","navSpeed":"1000","startPosition":"0","mouseDrag":"1","touchDrag":"1","use_cache":"0","cache_time":"3600","class":"Sm\\ListingTabs\\Block\\ListingTabs","template":"Sm_ListingTabs::default.phtml","category_select":""}						},
													success: function (data) {
														if (data.items_markup != '') {
															$('.product-item',$(data.items_markup)).insertAfter($('.product-item:last-child', items_active));
															$('.ltabs-image-loading', _self).css({display: 'none'});
															animatesItems(items_active);
															updateStatus(items_active);
															$(document).trigger("afterAjaxProductsLoaded");
																								$(document).trigger("afterAjaxLazyLoad");
															 }
													}, dataType: 'json'
												});
											}
											return false;
										});
											
										function animatesItems(elem){
												 var _item = $('.product-item.ltabs-mark', elem);
												_item.stop(true, true).each(function (i) {
													var newDelay = i * 200, 
													duration = 400;
													$(this).attr("style", "-webkit-animation-delay:" + newDelay + "ms; "
														+ "-moz-animation-delay:" + newDelay + "ms; "
														+ "-o-animation-delay:" + newDelay + "ms; "
														+ "animation-delay:" + newDelay + "ms; "
														+ "-webkit-animation-duration:" + duration + "ms;"
														+ "-moz-animation-duration:" + duration + "ms;"
														+ "-o-animation-duration:" + duration + "ms;"
														+ "animation-duration:" + duration + "ms;");
													if (i == _item.size()-1) {
														$('.product-items', elem).fadeIn(newDelay).addClass("play");
														$('.product-item', elem).removeClass('ltabs-mark');			
													}
												});
										}
										
										function updateStatus($el) {
											$('.ltabs-loadmore-btn', $el).removeClass('loading');
											var countitem = $('.product-item', $el).length;
											$('.ltabs-image-loading', $el).css({display: 'none'});
											$('.ltabs-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
											var rl_total = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_total');
											var rl_load = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_load');
											var rl_allready = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_allready');
												
											if (countitem >= rl_total) {
												$('.ltabs-loadmore-btn', $el).addClass('loaded');
												$('.ltabs-image-loading', $el).css({display: 'none'});
												$('.ltabs-loadmore-btn', $el).attr('data-label', rl_allready);
												$('.ltabs-loadmore-btn', $el).removeClass('loading');
											}
											_displayCountDown($el);
										}
										
										function _countDown(date,id){
											dateNow = new Date();
											amount = date.getTime() - dateNow.getTime();
											delete dateNow;
											if(amount < 0){
												id.html("Now!");
											} else{
												days=0;hours=0;mins=0;secs=0;out="";
												amount = Math.floor(amount/1000);
												days=Math.floor(amount/86400);
												amount=amount%86400;
												hours=Math.floor(amount/3600);
												amount=amount%3600;
												mins=Math.floor(amount/60);
												amount=amount%60;
												secs=Math.floor(amount);
												$(".time-day .num-time" , id).text(days);
												$(".time-day .title-time" , id).text(((days <= 1)? "Day" : "Days"));
												$(".time-hours .num-time" , id).text(hours);
												$(".time-hours .title-time" , id).text(((hours <= 1)? "Hour" : "Hours"));
												$(".time-mins .num-time" , id).text(mins);
												$(".time-mins .title-time" , id).text(((mins <= 1)? "Min" : "Mins"));
												$(".time-secs .num-time" , id).text(secs);
												$(".time-secs .title-time" , id).text(((secs <= 1)? "Sec" : "Secs"));
												setTimeout(function(){_countDown(date,id)}, 1000);
											}
										}
										function _displayCountDown ($el){
											if ($( ".deals-countdown",$el).length){
												$( ".deals-countdown",$el).each(function() {
													var timer = $(this).data('timer');
													var data = new Date(timer);
													_countDown(data,$(this));
												});
											}
										}
										
										function _runOwlCarousel(el) {
											$('.owl-carousel', el).owlCarousel({
												loop:false,
												nav:true,
												dots: false,
												autoplay: false,
												autoplayHoverPause: true,
												margin: margin,
												stagePadding: stagePadding,
												responsive: {
													0: {
														items: nb_column1
													},
													480: {
														items: nb_column2
													},
													768: {
														items: nb_column3
													},
													991: {
														items: nb_column4
													},						
													1200: {
														items: nb_column5
													}
												}
											});
										}
										if (type_loadmore){
											animatesItems($('.ltabs-items.ltabs-items-selected', el));
										}else{
											_runOwlCarousel($('.ltabs-items.ltabs-items-selected', el));
										}
										_displayCountDown($('.ltabs-items.ltabs-items-selected', el));	
									}
								  })("#listingtabs_0");	
								  });
							   </script>
							
							
							</div>
							<div class="row">
							   <div class="static-image-2 lazyload-container">
								  <div class="col-lg-4 col-md-4 col-sm-4 static-image"><a title="Static Image" href="#"><img src="http://localhost/img/blank.png" alt="Static Image" data-src="http://magento2.flytheme.net/themes/sm_market2/pub/media/wysiwyg/banner/banner-4.jpg" class=" lazyload "></a></div>
								  <div class="col-lg-4 col-md-4 col-sm-4 static-image"><a class="image-top" title="Static Image" href="#"><img src="http://localhost/img/blank.png" alt="Static Image" data-src="http://magento2.flytheme.net/themes/sm_market2/pub/media/wysiwyg/banner/banner-5.jpg" class=" lazyload "></a> <a title="Static Image" href="#"><img src="http://localhost/img/blank.png" alt="Static Image" data-src="http://magento2.flytheme.net/themes/sm_market2/pub/media/wysiwyg/banner/banner-6.jpg" class=" lazyload "></a></div>
								  <div class="col-lg-4 col-md-4 col-sm-4 static-image"><a title="Static Image" href="#"><img src="http://localhost/img/blank.png" alt="Static Image" data-src="http://magento2.flytheme.net/themes/sm_market2/pub/media/wysiwyg/banner/banner-7.jpg" class=" lazyload "></a></div>
							   </div>
							</div>
							<div class="list-product-home list-product-home-custom">
							   <div id="listingtabs_4" class="sm-listing-tabs ltabs-loading-first slidertype">
								  <div class="ltabs-loading-css">
									 <div class="loading-content"></div>
								  </div>
								  <div class="title-home-page"><span>New Arrivals</span></div>
								  <div class="ltabs-wrap">
									 <!--Begin Tabs-->
									 <div class="ltabs-tabs-container">
										<div class="ltabs-tabs-wrap" tabindex="-1">
										   <span class="ltabs-current-select"></span> 
										   <ul class="ltabs-tabs cf">
											   
											   <!--
											  <li class="ltabs-tab  tab-sel tab-loaded " data-tab-id="97" data-catids="97,185,186,187,188"><span class="ltabs-tab-label">W</span></li>
											  <li class="ltabs-tab  " data-tab-id="98" data-catids="98,164,167,168,169,170,171,165,172,173,174,175,176,177,178,179,166,180,181,182,183,184,235,236,237,238,239,240,241,242,243,244,245"><span class="ltabs-tab-label">Smartphones & Tablets</span></li>
											  <li class="ltabs-tab  " data-tab-id="103" data-catids="103,197,198,199,200"><span class="ltabs-tab-label">Jewelry & Watches</span></li>
											-->
										   </ul>
										</div>
									 </div>
									 <!-- End Tabs--> <!--Begin Items-->
									 <div class="ltabs-items-container ">
										<div class="ltabs-items  ltabs-items-selected ltabs-items-loaded  ltabs-items-97">
										   <div class="ltabs-items-inner">
											  <div class="grid products-grid">
												  <div class="products list items product-items  owl-carousel ">
													
												   
												  <?php if(count($obj->GetProductByCategory('52')) > 0 and is_array($obj->GetProductByCategory('52'))) :?>  
													
												   <?php foreach($obj->GetProductByCategory('52') as $row) :?>
												  
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
															<img style = "width:350px; height:350px;"class="product-image-photo lazyload" src="http://localhost/img/blank.png" 
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
																   
																      
																	   
																   
																   <button type="submit" title="Add to Cart" class="action tocart primary btn-action btn-cart" data-cart = '{"name" : "<?= $row['name']?>", "sku": "<?= $row['sku']?>", "image": "<?= $img_src_link ?>", "qty": "1", "price" : "<?= $row['discount'] == '0' ? $row['regular_price'] : $row['special_price'];?> ", "id" : <?= $row['id']?>}' onclick = "SendItemToCart(this)"><span>Add to Cart</span></button>
																   
																   
																   
																   <a href="#" class="action tocompare btn-action link-compare" title="Add to Compare" aria-label="Add to Compare" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/catalog\/product_compare\/add\/","data":{"product":"2245","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEv"}}' role="button"><span>Add to Compare</span></a> 
																</div>
															 </div>
														 
														 
														  </div>
													   </div>
													</div>
												   
												   
												   <?php endforeach; ?>
												 
												<?php endif; ?>
												 
												 
												 
												 </div>
											  
											  
											  
											  </div>
										   </div>
										</div>
										<div class="ltabs-items  ltabs-items-98">
										   <div class="ltabs-items-inner">
											  <div class="ltabs-loading">
												 <div class="loading-content"></div>
											  </div>
										   </div>
										</div>
										<div class="ltabs-items  ltabs-items-103">
										   <div class="ltabs-items-inner">
											  <div class="ltabs-loading">
												 <div class="loading-content"></div>
											  </div>
										   </div>
										</div>
									 </div>
									 <!--End Items-->
								  </div>
							   </div>
							  
							  
							   <script type="text/javascript">
								  require(['jquery' , 'Sm_ListingTabs/js/owl.carousel'], function ($) {
									;(function (element) {
									var el = $(element),
									tabs_wrap = $('.ltabs-tabs-wrap',el),
									tab = $('.ltabs-tab', el),
									tab_active = $('.ltabs-tab.tab-sel .ltabs-tab-label',tabs_wrap), 
									tab_content = $('.ltabs-items', el),
									ajax_url = 'http://magento2.flytheme.net/themes/sm_market2/argentina/listingtabs/index/index',
									btn_loadmore = $('.ltabs-loadmore-btn', el),
									type_loadmore = false,
									place_holder_tab = $('.ltabs-current-select', el),
									nb_column1 = 1, nb_column2 = 2, nb_column3 = 3, nb_column4 = 4, nb_column5 = 4, margin = 30; stagePadding = 0;
											var _interval = setInterval(function() {
									if(document.readyState === 'complete') {
										clearInterval(_interval);
											el.removeClass('ltabs-loading-first');
											_runAllScript();
										}    
									}, 500);
									function _runAllScript () {
										place_holder_tab.text(tab_active.text());
										tabs_wrap.on('click', function(e){
											e.preventDefault();
											var _that = $(this);
											_that.toggleClass('active');
											return false;		
										});
										tab.off('click').on('click', function (e) {
											e.preventDefault();
											var _self = $(this);
											if (_self.hasClass('tab-sel')) return false;
											tab.removeClass('tab-sel');
											_self.addClass('tab-sel');
											place_holder_tab.text($('.ltabs-tab-label', _self).text());
											var tab_id = _self.attr('data-tab-id'),
												catids = _self.attr('data-catids'),
												items_active = $('.ltabs-items-'+tab_id, el),
												loading = $('.ltabs-loading', items_active),
												loaded = items_active.hasClass('ltabs-items-loaded');
											tab_content.removeClass('ltabs-items-selected');
											items_active.addClass('ltabs-items-selected');
											
											if (!loaded && !items_active.hasClass('ltabs-process')) {
												items_active.addClass('ltabs-process');
												loading.show();
												$.ajax({
													type: 'POST',
													url: ajax_url,
													data: {
														is_ajax_listing_tabs: 1,
														ajax_listingtabs_start: 0,
														tab_id: tab_id,
														catids: catids,
														moduleid: 'listingtabs_4',
														config: {"isactive":"1","title":"New Arrivals","type_show":"slider","type_listing":"all","under_price":"5","display_countdown":"0","display_title":"1","target":"_self","class_suffix":"sm_listingtab","show_loadmore_slider":"slider","nb_column1":"4","nb_column2":"3","nb_column3":"3","nb_column4":"2","nb_column5":"1","nb_rows":"1","type_filter":"categories","field_tabs":"","category_tabs":"97,98,103","order_by":"created_at","order_dir":"ASC","limitation":"6","filter_type":"categories","product_category":"97,98,103","filter_order_by":"lastest_product","child_category_products":"0","max_depth":"12","product_featured":"0","product_order_dir":"ASC","product_limitation":"8","category_preload":"97","product_order_by":"best_sales","tab_all_display":"0","cat_title_maxlength":"150","category_order_by":"name","category_order_dir":"ASC","icon_display":"0","imgcfgcat_order":"category_image,category_description","imgcfgcat_function":"1","imgcfgcat_width":"30","imgcfgcat_height":"30","imgcfgcat_background":"FFFFFF","imgcfgcat_placeholder":"sm\/listingtabs\/images\/nophoto.jpg","imgcfgcat_from_category_image":"1","imgcfgcat_from_category_description":"1","product_title_display":"1","product_title_maxlength":"25","product_description_display":"0","product_description_maxlength":"150","product_price_display":"1","product_reviews_count":"1","product_addcart_display":"1","product_addwishlist_display":"1","product_addcompare_display":"1","product_readmore_display":"0","product_readmore_text":"Details","img_from_product_image":"1","img_from_product_description":"1","img_order":"product_image, product_description","img_function":"1","img_width":"270","img_height":"270","img_background":"FFFFFF","img_replacement":"sm\/listingtabs\/images\/nophoto.jpg","effect":"fadeIn","duration":"200","delay":"400","nav":"1","loop":"0","margin":"30","slideBy":"1","autoplay":"0","autoplayHoverPause":"1","autoplaySpeed":"1000","navSpeed":"1000","startPosition":"0","mouseDrag":"1","touchDrag":"1","use_cache":"0","cache_time":"3600","class":"Sm\\ListingTabs\\Block\\ListingTabs","template":"Sm_ListingTabs::default.phtml","category_select":""}						},
													success: function (data) {
														if (data.items_markup != '') {
															$('.ltabs-items-inner', items_active).html(data.items_markup);
															items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');
															if (type_loadmore){
																$('.product-item', items_active).removeAttr('style');
																$('.product-items', items_active).removeClass('play');
																$('.product-item', items_active).addClass('ltabs-mark');
																animatesItems(items_active);	
															}else{
																_runOwlCarousel(items_active);
															}
															$(document).trigger("afterAjaxProductsLoaded");
															loading.remove();
															updateStatus(items_active);
																								$(document).trigger("afterAjaxLazyLoad");
															 }
													},
													dataType: 'json'
												});
								  
											}else{
												if (type_loadmore){
													$('.product-item', items_active).removeAttr('style');
													$('.product-items', items_active).removeClass('play');
													$('.product-item', items_active).addClass('ltabs-mark');
													animatesItems(items_active);
												}else{
													var owl = $('.owl-carousel' , items_active);
													 owl = owl.data('owlCarousel');
													if (typeof owl !== 'undefined') 
														owl.onResize();
													else{
														_runOwlCarousel(items_active);
													}
													
												}
											}
										});
										
										btn_loadmore.off('click').on('click', function (e) {
											e.preventDefault();
											var _self = $(this);
											if (_self.hasClass('loaded') || _self.hasClass('loading')) {
												return false;
											} else {
												_self.addClass('loading');
												$('.ltabs-image-loading', _self).css({display: 'inline-block'});
												var rl_start = _self.parent().attr('data-rl_start'),
													catids = _self.parent().attr('data-catids'),
													tab_id = _self.parent().attr('data-tab-id'),
													items_active = $('.ltabs-items-'+tab_id, el);
												$.ajax({
													type: 'POST',
													url: ajax_url,
													data: {
														is_ajax_listing_tabs: 1,
														ajax_listingtabs_start: rl_start,
														tab_id: tab_id,
														catids: catids,
														moduleid: 'listingtabs_4',
														config: {"isactive":"1","title":"New Arrivals","type_show":"slider","type_listing":"all","under_price":"5","display_countdown":"0","display_title":"1","target":"_self","class_suffix":"sm_listingtab","show_loadmore_slider":"slider","nb_column1":"4","nb_column2":"3","nb_column3":"3","nb_column4":"2","nb_column5":"1","nb_rows":"1","type_filter":"categories","field_tabs":"","category_tabs":"97,98,103","order_by":"created_at","order_dir":"ASC","limitation":"6","filter_type":"categories","product_category":"97,98,103","filter_order_by":"lastest_product","child_category_products":"0","max_depth":"12","product_featured":"0","product_order_dir":"ASC","product_limitation":"8","category_preload":"97","product_order_by":"best_sales","tab_all_display":"0","cat_title_maxlength":"150","category_order_by":"name","category_order_dir":"ASC","icon_display":"0","imgcfgcat_order":"category_image,category_description","imgcfgcat_function":"1","imgcfgcat_width":"30","imgcfgcat_height":"30","imgcfgcat_background":"FFFFFF","imgcfgcat_placeholder":"sm\/listingtabs\/images\/nophoto.jpg","imgcfgcat_from_category_image":"1","imgcfgcat_from_category_description":"1","product_title_display":"1","product_title_maxlength":"25","product_description_display":"0","product_description_maxlength":"150","product_price_display":"1","product_reviews_count":"1","product_addcart_display":"1","product_addwishlist_display":"1","product_addcompare_display":"1","product_readmore_display":"0","product_readmore_text":"Details","img_from_product_image":"1","img_from_product_description":"1","img_order":"product_image, product_description","img_function":"1","img_width":"270","img_height":"270","img_background":"FFFFFF","img_replacement":"sm\/listingtabs\/images\/nophoto.jpg","effect":"fadeIn","duration":"200","delay":"400","nav":"1","loop":"0","margin":"30","slideBy":"1","autoplay":"0","autoplayHoverPause":"1","autoplaySpeed":"1000","navSpeed":"1000","startPosition":"0","mouseDrag":"1","touchDrag":"1","use_cache":"0","cache_time":"3600","class":"Sm\\ListingTabs\\Block\\ListingTabs","template":"Sm_ListingTabs::default.phtml","category_select":""}						},
													success: function (data) {
														if (data.items_markup != '') {
															$('.product-item',$(data.items_markup)).insertAfter($('.product-item:last-child', items_active));
															$('.ltabs-image-loading', _self).css({display: 'none'});
															animatesItems(items_active);
															updateStatus(items_active);
															$(document).trigger("afterAjaxProductsLoaded");
																								$(document).trigger("afterAjaxLazyLoad");
															 }
													}, dataType: 'json'
												});
											}
											return false;
										});
											
										function animatesItems(elem){
												 var _item = $('.product-item.ltabs-mark', elem);
												_item.stop(true, true).each(function (i) {
													var newDelay = i * 200, 
													duration = 400;
													$(this).attr("style", "-webkit-animation-delay:" + newDelay + "ms; "
														+ "-moz-animation-delay:" + newDelay + "ms; "
														+ "-o-animation-delay:" + newDelay + "ms; "
														+ "animation-delay:" + newDelay + "ms; "
														+ "-webkit-animation-duration:" + duration + "ms;"
														+ "-moz-animation-duration:" + duration + "ms;"
														+ "-o-animation-duration:" + duration + "ms;"
														+ "animation-duration:" + duration + "ms;");
													if (i == _item.size()-1) {
														$('.product-items', elem).fadeIn(newDelay).addClass("play");
														$('.product-item', elem).removeClass('ltabs-mark');			
													}
												});
										}
										
										function updateStatus($el) {
											$('.ltabs-loadmore-btn', $el).removeClass('loading');
											var countitem = $('.product-item', $el).length;
											$('.ltabs-image-loading', $el).css({display: 'none'});
											$('.ltabs-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
											var rl_total = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_total');
											var rl_load = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_load');
											var rl_allready = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_allready');
												
											if (countitem >= rl_total) {
												$('.ltabs-loadmore-btn', $el).addClass('loaded');
												$('.ltabs-image-loading', $el).css({display: 'none'});
												$('.ltabs-loadmore-btn', $el).attr('data-label', rl_allready);
												$('.ltabs-loadmore-btn', $el).removeClass('loading');
											}
											_displayCountDown($el);
										}
										
										function _countDown(date,id){
											dateNow = new Date();
											amount = date.getTime() - dateNow.getTime();
											delete dateNow;
											if(amount < 0){
												id.html("Now!");
											} else{
												days=0;hours=0;mins=0;secs=0;out="";
												amount = Math.floor(amount/1000);
												days=Math.floor(amount/86400);
												amount=amount%86400;
												hours=Math.floor(amount/3600);
												amount=amount%3600;
												mins=Math.floor(amount/60);
												amount=amount%60;
												secs=Math.floor(amount);
												$(".time-day .num-time" , id).text(days);
												$(".time-day .title-time" , id).text(((days <= 1)? "Day" : "Days"));
												$(".time-hours .num-time" , id).text(hours);
												$(".time-hours .title-time" , id).text(((hours <= 1)? "Hour" : "Hours"));
												$(".time-mins .num-time" , id).text(mins);
												$(".time-mins .title-time" , id).text(((mins <= 1)? "Min" : "Mins"));
												$(".time-secs .num-time" , id).text(secs);
												$(".time-secs .title-time" , id).text(((secs <= 1)? "Sec" : "Secs"));
												setTimeout(function(){_countDown(date,id)}, 1000);
											}
										}
										function _displayCountDown ($el){
											if ($( ".deals-countdown",$el).length){
												$( ".deals-countdown",$el).each(function() {
													var timer = $(this).data('timer');
													var data = new Date(timer);
													_countDown(data,$(this));
												});
											}
										}
										
										function _runOwlCarousel(el) {
											$('.owl-carousel', el).owlCarousel({
												loop:false,
												nav:true,
												dots: false,
												autoplay: false,
												autoplayHoverPause: true,
												margin: margin,
												stagePadding: stagePadding,
												responsive: {
													0: {
														items: nb_column1
													},
													480: {
														items: nb_column2
													},
													768: {
														items: nb_column3
													},
													991: {
														items: nb_column4
													},						
													1200: {
														items: nb_column5
													}
												}
											});
										}
										if (type_loadmore){
											animatesItems($('.ltabs-items.ltabs-items-selected', el));
										}else{
											_runOwlCarousel($('.ltabs-items.ltabs-items-selected', el));
										}
										_displayCountDown($('.ltabs-items.ltabs-items-selected', el));	
									}
								  })("#listingtabs_4");	
								  });
							   </script>
						   
						   
							</div>
							<div class="home-collection">
							   <div class="collections-wrap">
								  <div class="title-home-page"><span>Collections</span></div>
								  <div class="collections">
									 <div class="owl-carousel">
										<div class="item"><a title="FURNITURE" href="#"> <img src="http://localhost/themes/sm_market2/pub/media/wysiwyg/collection/item-1.png" alt="Collection Image"><span>FURNITURE</span> </a></div>
										<div class="item"><a title="GIFT IDEA" href="#"> <img src="http://localhost/themes/sm_market2/pub/media/wysiwyg/collection/item-2.png" alt="Collection Image"><span>GIFT IDEA</span> </a></div>
										<div class="item"><a title="COOL GADGETS" href="#"> <img src="http://localhost/themes/sm_market2/pub/media/wysiwyg/collection/item-3.png" alt="Collection Image"><span>COOL GADGETS</span> </a></div>
										<div class="item"><a title="OUTDOOR" href="#"> <img src="http://localhost/themes/sm_market2/pub/media/wysiwyg/collection/item-4.png" alt="Collection Image"><span>OUTDOOR</span> </a></div>
										<div class="item"><a title="Jewelry" href="#"> <img src="http://localhost/themes/sm_market2/pub/media/wysiwyg/collection/item-5.png" alt="Collection Image"><span>Jewelry</span> </a></div>
										<div class="item"><a title="Men's Fashion" href="#"> <img src="http://localhost/themes/sm_market2/pub/media/wysiwyg/collection/item-6.png" alt="Collection Image"><span>Men's Fashion</span> </a></div>
										<div class="item"><a title="FURNITURE" href="#"> <img src="http://localhost/themes/sm_market2/pub/media/wysiwyg/collection/item-1.png" alt="Collection Image"><span>FURNITURE</span> </a></div>
									 </div>
								  </div>
								  
								  
								  <script type="text/javascript">
									 require([
										'jquery',
										'owlcarousel'
									 ], function ($) {
										jQuery(".home-collection .owl-carousel").owlCarousel({
											responsive:{
												0:{
													items:2
												},
												480:{
													items:3
												},
												768:{
													items:4
												},
												992:{
													items:5
												},
												1200:{
													items:6
												}
											},
									 
											autoplay:false,
											loop:false,
											nav : true,
											dots: false,
											autoplaySpeed : 500,
											navSpeed : 500,
											dotsSpeed : 500,
											autoplayHoverPause: true,
											margin:0,
										});	  
									 });	
									 
								  </script>
							   
							   
							   </div>
							</div>
							<div class="full-categories">
							   <div class="hot-categories-home">
								  <div class="title-home-page"><span>Hot categories</span></div>
								  <div class="sm-categories">
									 <div class="cat-wrap">
										<div class="item">
										   <div class="content-box">
											  <div class="parent-cat">
												 <div class="image-cat static-image"><a href="http://localhost/themes/sm_market2/argentina/automotive-motorcycle.html" title="Automotive & Motorcycle"><img class="lazyload" src="http://localhost/img/blank.png" data-src="http://magento2.flytheme.net/themes/sm_market2/pub/media/catalog/category/thumb-category3.png" alt="Automotive & Motorcycle"></a></div>
												 <div class="cat-title"><a href="http://localhost/themes/sm_market2/argentina/automotive-motorcycle.html" title="Automotive & Motorcycle">Automotive & Motorcycle</a></div>
											  </div>
											  <div class="child-cat">
												 <ul class="sub-cats">
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/automotive-motorcycle/motorcycle.html" title="Motorcycle">Motorcycle</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/automotive-motorcycle/motorcycle/diagnostic-tools.html" title="Diagnostic Tools">Diagnostic Tools</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/automotive-motorcycle/motorcycle/motorcycle-fairings.html" title="Motorcycle Fairings">Motorcycle Fairings</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/automotive-motorcycle/motorcycle/car-gps-accessories.html" title="Car GPS & Accessories">Car GPS & Accessories</a></li>
												 </ul>
											  </div>
										   </div>
										</div>
										<div class="item">
										   <div class="content-box">
											  <div class="parent-cat">
												 <div class="image-cat static-image"><a href="http://localhost/themes/sm_market2/argentina/electronics.html" title="Electronics"><img class="lazyload" src="http://localhost/img/blank.png" data-src="http://magento2.flytheme.net/themes/sm_market2/pub/media/catalog/category/thumb-category4.png" alt="Electronics"></a></div>
												 <div class="cat-title"><a href="http://localhost/themes/sm_market2/argentina/electronics.html" title="Electronics">Electronics</a></div>
											  </div>
											  <div class="child-cat">
												 <ul class="sub-cats">
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/electronics/batteries-chargers.html" title="Batteries & Chargers">Batteries & Chargers</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/electronics/headphones-headsets.html" title="Headphones, Headsets">Headphones, Headsets</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/electronics/home-audio.html" title="Home Audio">Home Audio</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/electronics/mp3-players-accessories.html" title="MP3 Players & Accessories">MP3 Players & Accessories</a></li>
												 </ul>
											  </div>
										   </div>
										</div>
										<div class="item">
										   <div class="content-box">
											  <div class="parent-cat">
												 <div class="image-cat static-image"><a href="http://localhost/themes/sm_market2/argentina/health-beauty.html" title="Health & Beauty"><img class="lazyload" src="http://localhost/img/blank.png" data-src="http://magento2.flytheme.net/themes/sm_market2/pub/media/catalog/category/thumb-category7.png" alt="Health & Beauty"></a></div>
												 <div class="cat-title"><a href="http://localhost/themes/sm_market2/argentina/health-beauty.html" title="Health & Beauty">Health & Beauty</a></div>
											  </div>
											  <div class="child-cat">
												 <ul class="sub-cats">
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/health-beauty/bath-body.html" title="Bath & Body">Bath & Body</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/health-beauty/shaving-hair-removal.html" title="Shaving & Hair Removal">Shaving & Hair Removal</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/health-beauty/fragrances.html" title="Fragrances">Fragrances</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/health-beauty/salon-spa-equipment.html" title="Salon & Spa Equipment">Salon & Spa Equipment</a></li>
												 </ul>
											  </div>
										   </div>
										</div>
										<div class="item">
										   <div class="content-box">
											  <div class="parent-cat">
												 <div class="image-cat static-image"><a href="http://localhost/themes/sm_market2/argentina/holiday-supplies-gifts.html" title="Holiday Supplies & Gifts"><img class="lazyload" src="http://localhost/img/blank.png" data-src="http://magento2.flytheme.net/themes/sm_market2/pub/media/catalog/category/thumb-category6.png" alt="Holiday Supplies & Gifts"></a></div>
												 <div class="cat-title"><a href="http://localhost/themes/sm_market2/argentina/holiday-supplies-gifts.html" title="Holiday Supplies & Gifts">Holiday Supplies & Gifts</a></div>
											  </div>
											  <div class="child-cat">
												 <ul class="sub-cats">
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/holiday-supplies-gifts/gift-lifestyle-gadgets.html" title="Gift & Lifestyle Gadgets">Gift & Lifestyle Gadgets</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/holiday-supplies-gifts/gift-for-man.html" title="Gift for Man">Gift for Man</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/holiday-supplies-gifts/gift-for-woman.html" title="Gift for Woman">Gift for Woman</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/holiday-supplies-gifts/lighter-cigar-supplies.html" title="Lighter & Cigar Supplies">Lighter & Cigar Supplies</a></li>
												 </ul>
											  </div>
										   </div>
										</div>
										<div class="item">
										   <div class="content-box">
											  <div class="parent-cat">
												 <div class="image-cat static-image"><a href="http://localhost/themes/sm_market2/argentina/jewelry-watches.html" title="Jewelry & Watches"><img class="lazyload" src="http://localhost/img/blank.png" data-src="http://magento2.flytheme.net/themes/sm_market2/pub/media/catalog/category/thumb-category8.png" alt="Jewelry & Watches"></a></div>
												 <div class="cat-title"><a href="http://localhost/themes/sm_market2/argentina/jewelry-watches.html" title="Jewelry & Watches">Jewelry & Watches</a></div>
											  </div>
											  <div class="child-cat">
												 <ul class="sub-cats">
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/jewelry-watches/men-watches.html" title="Men Watches">Men Watches</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/jewelry-watches/wedding-rings.html" title="Wedding Rings">Wedding Rings</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/jewelry-watches/earrings.html" title="Earrings">Earrings</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/jewelry-watches/necklaces.html" title="Necklaces">Necklaces</a></li>
												 </ul>
											  </div>
										   </div>
										</div>
										<div class="item">
										   <div class="content-box">
											  <div class="parent-cat">
												 <div class="image-cat static-image"><a href="http://localhost/themes/sm_market2/argentina/smartphones-tablets.html" title="Smartphones & Tablets"><img class="lazyload" src="http://localhost/img/blank.png" data-src="http://magento2.flytheme.net/themes/sm_market2/pub/media/catalog/category/thumb-category1.png" alt="Smartphones & Tablets"></a></div>
												 <div class="cat-title">
													 
													 
													 <a href="http://localhost/themes/sm_market2/argentina/smartphones-tablets.html" title="Smartphones & Tablets">Smartphones & Tablets</a>
													 
													 </div>
											  </div>
											  <div class="child-cat">
												 <ul class="sub-cats">
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/smartphones-tablets/camping-hiking-gear.html" title="Camping & Hiking Gear">Camping & Hiking Gear</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/smartphones-tablets/camping-hiking-gear/hammock.html" title="Hammock">Hammock</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/smartphones-tablets/camping-hiking-gear/telescope.html" title="Telescope">Telescope</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/smartphones-tablets/camping-hiking-gear/hat.html" title="Hat">Hat</a></li>
												 </ul>
											  </div>
										   </div>
										</div>
										<div class="item">
										   <div class="content-box">
											  <div class="parent-cat">
												 <div class="image-cat static-image"><a href="http://localhost/themes/sm_market2/argentina/sports-outdoors.html" title="Sports & Outdoors"><img class="lazyload" src="http://localhost/img/blank.png" data-src="http://magento2.flytheme.net/themes/sm_market2/pub/media/catalog/category/thumb-category2.png" alt="Sports & Outdoors"></a></div>
												 <div class="cat-title"><a href="http://localhost/themes/sm_market2/argentina/sports-outdoors.html" title="Sports & Outdoors">Sports & Outdoors</a></div>
											  </div>
											  <div class="child-cat">
												 <ul class="sub-cats">
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/sports-outdoors/cycling-gear.html" title="Cycling Gear">Cycling Gear</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/sports-outdoors/cycling-gear/cycling-protective-gears.html" title="Cycling Protective Gears">Cycling Protective Gears</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/sports-outdoors/cycling-gear/cycling-accessories.html" title="Cycling Accessories">Cycling Accessories</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/sports-outdoors/cycling-gear/cycling-clothing.html" title="Cycling Clothing">Cycling Clothing</a></li>
												 </ul>
											  </div>
										   </div>
										</div>
										<div class="item">
										   <div class="content-box">
											  <div class="parent-cat">
												 <div class="image-cat static-image"><a href="http://localhost/themes/sm_market2/argentina/toys-hobbies.html" title="Toys & Hobbies"><img class="lazyload" src="http://localhost/img/blank.png" data-src="http://magento2.flytheme.net/themes/sm_market2/pub/media/catalog/category/thumb-category5.png" alt="Toys & Hobbies"></a></div>
												 <div class="cat-title"><a href="http://localhost/themes/sm_market2/argentina/toys-hobbies.html" title="Toys & Hobbies">Toys & Hobbies</a></div>
											  </div>
											  <div class="child-cat">
												 <ul class="sub-cats">
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/toys-hobbies/walkera.html" title="Walkera">Walkera</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/toys-hobbies/fpv-system-parts.html" title="FPV system & Parts">FPV system & Parts</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/toys-hobbies/rc-cars-parts.html" title="RC Cars & Parts">RC Cars & Parts</a></li>
													<li class="child-title"><a href="http://localhost/themes/sm_market2/argentina/toys-hobbies/helicopters-parts.html" title="Helicopters & Parts">Helicopters & Parts</a></li>
												 </ul>
											  </div>
										   </div>
										</div>
									 </div>
								  </div>
							   </div>
							</div>
						 </div>
					  </body>
				   </html>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
 </main>


 <?php
	include ('footer.php');
 ?>  
   

<script>


</script>
