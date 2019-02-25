<?php
// Start ouput buffering 
ob_start();

// Require controlelr 
require('controller/controller.php');

// Setting time to dubai
date_default_timezone_set ('Asia/Dubai');

// Get the object 
$obj = new MarketPlace();

$details = $obj->getIndividualProduct('name', 'id', 'sku');



?>
<!doctype html>

<html lang="ar">
   <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# product: http://ogp.me/ns/product#">
  
      <meta charset="utf-8"/>
      <meta name="description" content="Black Automatic Vacuum Cleaner Lorem ipsum dolor sit amet, an munere tibique consequat mel, congue albucius no qui, at everti meliore erroribus sea. Vero graeco cotidieque ea duo, in eirmod insolens interpretaris nam. Pro at nostrud percipit definitiones,"/>
      <meta name="keywords" content="Black Automatic Vacuum Cleaner"/>
      <meta name="robots" content="INDEX,FOLLOW"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta name="format-detection" content="telephone=no"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <title>Black Automatic Vacuum Cleaner</title>
      
      
      
      <?php include 'head-links.php'; ?>
      
      <script type = "text/javascript">
      
      // Get the url of the page 
      // This is strictly for only discription page 
      // Which is containe 
      var loca = window.location.href;
      
      // http://localhost/discription/original-unlocked-samsung-galaxy-s8-plus-4g-r/2/589SDFDF
      
      // 0=> SKU 1=> ID 2=> ProductName
      
      // As we have declared in .htaccess file 
      // RewriteRule ^discription/([0-9a-zA-Z_-]+)/([0-9]+)/([0-9a-zA-Z_-]+)$ discription.php?name=$1&id=$2&sku=$3 [NC,L]
      
      var splitUrl = loca.split('/');
      
      // Its in general it's return 7 length 
      if(splitUrl === 7) {
      
      // Get sku  
      var SKU = splitUrl[splitUrl.length - 1];
      
      // Get the id 
      var ID = splitUrl[splitUrl.length - 2];
      
      // Get the product name 
      var Name = splitUrl[splitUrl.length - 3];
      
      }
      
      
      
      
      
      
      </script>
    
      <script>
         
         $(document).ready( function () {
            $("#scrolltoen12").click(function() {
            
    $('html, body').animate({
        scrollTop: $("#enquries-li14").offset().top
    }, 2000);



});

            })
         
      </script>
      
      <style>
        padding-top: 70px;
}
.btn-grey{
    background-color:#D8D8D8;
   color:#FFF;
}
.rating-block{
   background-color:#FAFAFA;
   border:1px solid #EFEFEF;
   padding:15px 15px 20px 15px;
   border-radius:3px;
}
.bold{
   font-weight:700;
}
.padding-bottom-7{
   padding-bottom:7px;
}

.review-block{
   background-color:#FAFAFA;
   border:1px solid #EFEFEF;
   padding:15px;
   border-radius:3px;
   margin-bottom:15px;
}
.review-block-name{
   font-size:12px;
   margin:10px 0;
}
.review-block-date{
   font-size:12px;
}
.review-block-rate{
   font-size:13px;
   margin-bottom:15px;
}
.review-block-title{
   font-size:15px;
   font-weight:700;
   margin-bottom:10px;
}
.review-block-description{
   font-size:13px;
}
      </style>
   
   </head>

   <body onload="DiscriptionTrackViewer(this);">
   <div class="container">
            
               
      
   
</div> <!-- /container -->

  
  
  
   <input type = "hidden" value = "<?= $_GET['sku'];?>" id = "traker-sku">
   <input type = "hidden" value = "<?= $details['category_id'];?>" id = "traker-category-id" >
      <noscript>
         <div class="message global noscript">
            <div class="content">
               <p><strong>JavaScript seems to be disabled in your browser.</strong> <span>For the best experience on our site, be sure to turn on Javascript in your browser.</span></p>
            </div>
         </div>
      </noscript>
      <script type="text/x-magento-init">
         {
             "*": {
                 "trackingCode": {
                     "isEnabled": ""
                 }
             }
         }
      </script>
      <div class="page-wrapper">
         
         
        <?php
// We will check cookie  <?php include 'header-arabic.php'; 
if(isset($_COOKIE['lanSindhbad']) && $_COOKIE['lanSindhbad'] == 'ar')  :?>

<?php include 'header-arabic.php'; ?> 

<?php else :?>

<?php include 'header.php'; ?> 

<?php endif; ?>


         
         <?php
         $REQUEST_SCHEME = $_SERVER['REQUEST_SCHEME'];
         $REQUEST_URI = $_SERVER['REQUEST_URI'];
         $SERVER_NAME = $_SERVER['SERVER_NAME'];
         ?>
         <div class="display-popup" style="display:none;">
            <div id="newsletter-popup">
               <div class="promotional-popup">
                  <div class="pop-subscribe">
                     <form class="form subscribe" novalidate action="http://magento2.flytheme.net/themes/sm_market2/argentina/newsletter/subscriber/new/" method="post" data-mage-init='{"validation": {"errorClass": "mage-error"}}' id="newsletter-popup-validate-detail">
                        <div class="w-newsletter">
                           <div class="newsletter-info">
                              <div class="newsletter-title">
                                 <p>Sign Up</p>
                                 <h3>Newsletter</h3>
                              </div>
                              <div class="short-description">Subscribe to the Market mailing list to receive updates on new arrivals, special offers and other discount information.</div>
                              <div class="form-newsletter-popup">
                                 <div class="input-box"><input name="email" type="email" id="newsletter-popup" class="input-text" onfocus="if(this.value=='Your email address') this.value='';" onblur="if(this.value=='') this.value='Your email address';" value="Your email address" data-validate="{required:true, 'validate-email':true}"/></div>
                                 <div class="action-newsletter"><button class="action subscribe primary" title="Subscribe" type="submit"><span>Subscribe</span></button></div>
                              </div>
                              <div class="subscribe-bottom">
                                 <div id="uniform-dont-show-again" class="checker"><span><input id="dont-show-again" type="checkbox"></span></div>
                                 <label for="dont-show-again">Don't show this popup again</label>
                              </div>
                              <div class="socials-popup">
                                 <ul class="social-list">
                                    <li><a href="#" title="title"><i class="fa fa-facebook"></i><span class="hidden">Facebook</span></a></li>
                                    <li><a href="#" title="title"><i class="fa fa-twitter"></i><span class="hidden">Twitter</span></a></li>
                                    <li><a href="#" title="title"><i class="fa fa-google-plus"></i><span class="hidden">Google</span></a></li>
                                    <li><a href="#" title="title"><i class="fa fa-tumblr"></i><span class="hidden">Tumblr</span></a></li>
                                    <li><a href="#" title="title"><i class="fa fa-pinterest"></i><span class="hidden">Pinterest</span></a></li>
                                    <li><a href="#" title="title"><i class="fa fa-linkedin"></i><span class="hidden">Linkedin</span></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
       
       
         <script type="text/javascript">
            require([
               'jquery',
               'mage/cookies',
               'jqueryfancyboxpack'
            ], function ($) {
               var check_cookie = jQuery.cookie('newsletter_popup');
               if(check_cookie == null || check_cookie == 'shown') {
                   popupNewsletter();
                }
               jQuery('#newsletter-popup .subscribe-bottom input').on('click', function(){
                  if(jQuery(this).parent().find('input:checked').length){
                     var check_cookie = jQuery.cookie('newsletter_popup');
                     if(check_cookie == null || check_cookie == 'shown') {
                        jQuery.cookie('newsletter_popup','dontshowitagain');
                     }
                     else
                     {
                        jQuery.cookie('newsletter_popup','shown');
                        popupNewsletter();
                     }
                  } else {
                     jQuery.cookie('newsletter_popup','shown');
                  }
               }); 
            });
            
            function popupNewsletter() {
               jQuery(document).ready(function($) {
                  $.fancybox.open('#newsletter-popup');
               });      
            };
         </script>   
         
         
         
         
         <div class="breadcrumbs">
            <div class="container">
               <ul class="items">
                  <li class="item home"> <a href="http://localhost/" title="Go to Home Page">Home</a> </li>
                  <li class="item product"> <strong><?= $details['name'];?></strong>
                  



                   </li>
               </ul>
            </div>
         </div>
         
         <div class = "container" id = "cart-msg" style = "visibility: hidden;">
         <br/>
         
       <div class="message success" id = "cart-msg1">
         
      </div>
        
      </div>
         
         <main id="maincontent" class="page-main" dir = "rtl">
            <a id="contentarea" tabindex="-1"></a>
            <div class="columns col2-layout">
               <div class="container">
                
                  <div class="row">

                  <div class = "col-md-3">
                     

                     <div class="services-sidebar">
                          <ul>
                                 <li>
                                 <div class="service-content">
                                       <div class="service-icon" style="font-size: 30px;"></div>
                                       <div class="service-info">
                                          <h4><a title="Free Delivery" href="http://localhost/seller/<?=$details['id'];?>">

                                             <?php $translate->__('Sold By:'); ?> 

                                             <?= $obj->hashDigitToString($details['id']); ?></a></h4>
                                         
                                       </div>
                                    </div>
                             
                                 </li>
                                 
                                  <li>
                                 <div class="service-content">
                                       <div class="service-icon" style="font-size: 30px;"></div>
                                       <div class="service-info">
                                          <h4><a title="Free Delivery" href="http://localhost/seller/<?=$details['id'];?>">
                                             
                                             <?php $translate->__('Seller type:'); ?> 

                                             <?= $details['seller_type']; ?></a></h4>
                                         
                                       </div>
                                    </div>
                             
                                 </li>
                                 
                                 <li>
                                 <div class="service-content">
                                       <div class="service-icon" style="font-size: 30px;"></div>
                                       <div class="service-info">
                                          <h4><a title="Free Delivery" href="#parentVerticalTab4" id = "scrolltoen12">
                                             <?php $translate->__('Make Inquiries:'); ?> </a></h4>
                                         
                                       </div>
                                    </div>
                             
                                 </li>
                                 
                                 
                                 
                                 </ul>
                   

<div class="sidebar sidebar-additional">
                           <div class="services-sidebar">
                              <ul>
                                 <li>
                                    <div class="service-content">
                                       <div class="service-icon" style="font-size: 30px;"><em class="fa fa-truck"><span class="hidden">Icon</span></em></div>
                                       <div class="service-info">
                                          <h4><a title="Free Delivery" href="#">

                                             <?php $translate->__('Free Delivery'); ?>  </a></h4>
                                          <p>

                                          
                                          <?php $translate->__('From AED 100'); ?> 
                                       </p>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="service-content">
                                       <div class="service-icon" style="font-size: 30px;"><em class="fa fa-support"><span class="hidden">Icon</span></em></div>
                                       <div class="service-info">
                                          <h4><a title="Support 24/7" href="#">
                                         
                                         <?php $translate->__('Support 24/7'); ?>  

                                       </a></h4>
                                          <p>

                                         <?php $translate->__('Online 24 hours'); ?>    

                                       </p>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="service-content">
                                       <div class="service-icon" style="font-size: 30px;"><em class="fa fa-refresh"><span class="hidden">Icon</span></em></div>
                                       <div class="service-info">
                                          <h4><a title="Free return" href="#">

                                          <?php $translate->__('Free return'); ?>    

                                       </a></h4>
                                          <p>

                                             <?php $translate->__('365 a day'); ?>   
                                          
                                       </p>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="service-content">
                                       <div class="service-icon" style="font-size: 25px; position: relative; top: 4px;"><em class="fa fa-cc-paypal"><span class="hidden">Icon</span></em></div>
                                       <div class="service-info">
                                          <h4><a title="payment method" href="#">
                                         
                                         <?php $translate->__('payment method'); ?>    

                                       </a></h4>
                                          <p>

                                          

                                       <?php $translate->__('Secure payment'); ?>    </p>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>


                           <!--
                           <div class="block block-compare" data-bind="scope: 'compareProducts'" data-role="compare-products-sidebar">
                              <div class="block-title"><strong id="block-compare-heading" role="heading" aria-level="2">Compare Products</strong> <span class="counter qty no-display" data-bind="text: compareProducts().countCaption, css: {'no-display': !compareProducts().count}"></span></div>
                              
                              <div class="block-content no-display" aria-labelledby="block-compare-heading" data-bind="css: {'no-display': !compareProducts().count}">
                                 <ol id="compare-items" class="product-items product-items-names" data-bind="foreach: compareProducts().items">
                                    <li class="product-item"><input type="hidden" class="compare-item-id" data-bind="value: id"/><strong class="product-item-name"><a data-bind="attr: {href: product_url}, html: name" class="product-item-link"></a></strong> <a href="#" data-bind="attr: {'data-post': remove_url}" title="Remove This Item" class="action delete"><span>Remove This Item</span></a></li>
                                 </ol>
                                 <div class="actions-toolbar">
                                    <div class="primary"><a data-bind="attr: {'href': compareProducts().listUrl}" class="action compare primary"><span>Compare</span></a></div>
                                    <div class="secondary"><a id="compare-clear-all" href="#" class="action clear" data-post="{&quot;action&quot;:&quot;http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/catalog\/product_compare\/clear\/&quot;,&quot;data&quot;:{&quot;uenc&quot;:&quot;&quot;,&quot;confirmation&quot;:true,&quot;confirmationMessage&quot;:&quot;Are you sure you want to remove all items from your Compare Products list?&quot;}}"><span>Clear All</span></a></div>
                                 </div>
                              </div>
                            
                              <div class="empty">You have no items to compare.</div>
                           -->   
                           
                           
                           </div>
                          
                          
                          
                          
                          
                          
                          
                           <p>
                           <!--    
                           <div id="sm_filterproducts_1527087197606729505" class="block products-sidebar">
                              <div class="block-title filter-title"><strong>Featured Product</strong></div>
                              <div class="block-content block-content-products">
                                 <div class="item product product-item">
                                    <div class="item-inner clearfix">
                                       
                                       
                                       <div class="box-image"><a href="http://localhost/themes/sm_market2/argentina/wireless-bluetooth-speaker-sony-x3.html" class="product photo product-item-photo" tabindex="-1">  <span class="product-image-container"><span class="product-image-wrapper"><img class="product-image-photo lazyload"   src="http://magento2.flytheme.net/themes/sm_market2/pub/media/lazyloading/blank.png" data-src="http://magento2.flytheme.net/themes/sm_market2/pub/media/catalog/product/cache/d73a5018306142840707bd616a4ef293/f/u/fuhlen_mouse_for_gamer_1.jpg"  width="300" height="300" alt="Fuhlen Mouse for Gamer"/></span></span></a></div>
                                       <div class="product details product-item-details box-info">
                                          <strong class="product name product-name product-item-name"><a class="product-item-link" href="http://localhost/themes/sm_market2/argentina/wireless-bluetooth-speaker-sony-x3.html">Fuhlen Mouse for Gamer</a></strong>    
                                          <div class="product-reviews-summary short">
                                             <div class="rating-summary">
                                                <span class="label"><span>Rating:</span></span> 
                                                <div class="rating-result" title="87%"><span style="width:87%"><span>87%</span></span></div>
                                             </div>
                                             <div class="reviews-actions"><a class="action view" href="http://localhost/themes/sm_market2/argentina/wireless-bluetooth-speaker-sony-x3.html#reviews">1&nbsp;<span>Review</span></a></div>
                                          </div>
                                          <div class="price-box price-final_price" data-role="priceBox" data-product-id="2281">     <span class="price-container price-final_price tax weee" > <span  id="product-price-2281"  data-price-amount="250" data-price-type="finalPrice" class="price-wrapper "><span class="price">$250.00</span></span>  </span>  </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="item product product-item">
                                    <div class="item-inner clearfix">
                                       <div class="box-image"><a href="http://localhost/themes/sm_market2/argentina/acer-all-in-one-computers.html" class="product photo product-item-photo" tabindex="-1">  <span class="product-image-container"><span class="product-image-wrapper"><img class="product-image-photo lazyload"   src="http://magento2.flytheme.net/themes/sm_market2/pub/media/lazyloading/blank.png" data-src="http://magento2.flytheme.net/themes/sm_market2/pub/media/catalog/product/cache/d73a5018306142840707bd616a4ef293/a/c/acer_aspire_s24_all-in-one_pc_2.jpg"  width="300" height="300" alt="Acer Aspire S24 All In One PC"/></span></span></a></div>
                                       <div class="product details product-item-details box-info">
                                          <strong class="product name product-name product-item-name"><a class="product-item-link" href="http://localhost/themes/sm_market2/argentina/acer-all-in-one-computers.html">Acer Aspire S24 All In One PC</a></strong>    
                                          <div class="product-reviews-summary short">
                                             <div class="rating-summary">
                                                <span class="label"><span>Rating:</span></span> 
                                                <div class="rating-result" title="87%"><span style="width:87%"><span>87%</span></span></div>
                                             </div>
                                             <div class="reviews-actions"><a class="action view" href="http://localhost/themes/sm_market2/argentina/acer-all-in-one-computers.html#reviews">1&nbsp;<span>Review</span></a></div>
                                          </div>
                                          <div class="price-box price-final_price" data-role="priceBox" data-product-id="2280">   <span class="special-price">  <span class="price-container price-final_price tax weee" > <span class="price-label">Special Price</span>  <span  id="product-price-2280"  data-price-amount="400" data-price-type="finalPrice" class="price-wrapper "><span class="price">$400.00</span></span>  </span></span> <span class="old-price">  <span class="price-container price-final_price tax weee" > <span class="price-label">Regular Price</span>  <span  id="old-price-2280"  data-price-amount="450" data-price-type="oldPrice" class="price-wrapper "><span class="price">$450.00</span></span>  </span></span>  </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="item product product-item">
                                    <div class="item-inner clearfix">
                                       <div class="box-image"><a href="http://localhost/themes/sm_market2/argentina/washing-machines-dryers.html" class="product photo product-item-photo" tabindex="-1">  <span class="product-image-container"><span class="product-image-wrapper"><img class="product-image-photo lazyload"   src="http://magento2.flytheme.net/themes/sm_market2/pub/media/lazyloading/blank.png" data-src="http://magento2.flytheme.net/themes/sm_market2/pub/media/catalog/product/cache/d73a5018306142840707bd616a4ef293/w/a/washing_machines_elextrolux.jpg"  width="300" height="300" alt="Washing Machines Elextrolux"/></span></span></a></div>
                                       <div class="product details product-item-details box-info">
                                          <strong class="product name product-name product-item-name"><a class="product-item-link" href="http://localhost/themes/sm_market2/argentina/washing-machines-dryers.html">Washing Machines Elextrolux</a></strong>    
                                          <div class="product-reviews-summary short">
                                             <div class="rating-summary">
                                                <span class="label"><span>Rating:</span></span> 
                                                <div class="rating-result" title="80%"><span style="width:80%"><span>80%</span></span></div>
                                             </div>
                                             <div class="reviews-actions"><a class="action view" href="http://localhost/themes/sm_market2/argentina/washing-machines-dryers.html#reviews">1&nbsp;<span>Review</span></a></div>
                                          </div>
                                          <div class="price-box price-final_price" data-role="priceBox" data-product-id="2279">     <span class="price-container price-final_price tax weee" > <span  id="product-price-2279"  data-price-amount="185" data-price-type="finalPrice" class="price-wrapper "><span class="price">$185.00</span></span>  </span>  </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           -->

                           </div>
                           
                           
                           <script type="text/javascript">
                              require([
                                  'jquery'
                              ], function ($) {
                              var $element = $('#sm_filterproducts_1527087197606729505');
                              
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
                           </script> <script type="text/x-magento-init">
                              {
                                  "[data-role=tocart-form], .form.map.checkout": {
                                      "catalogAddToCart": {}
                                  }
                              }
                           </script> </p>
                       
                  </div>
                  <div class="col-lg-9 col-md-9">
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
                        <?php
                        // Get the first image in json formate data 
                  

                  $images = json_decode($details['images'],true);
                  
                  // Get rest of three images 
                  
                  // Primary image
                  $primary_image = $images[0];
                  
                  // Rest of images 
                  $rest_images = array_shift($images);
                  
                  // Get the image link as html 
                  $img_src_link = 'http://localhost/img/product-images/'.$primary_image;
                  
                  
                  
                  ?>
                        <div class="column main">
                           <div class="product-info-main">
                              <div class="page-title-wrapper product">
                                 <h2 class="page-title"  ><span class="base" data-ui-id="page-title-wrapper" itemprop="name"><?php echo $details['name'];?></span></h2>
                              </div>
                              <div class="product-info-price">
                                 <div class="product-info-stock-sku">
                                    <div class="stock available" title="Availability">
                              
                              <!-- Check that product is in stock -->
                              <?php if($details['avaibility'] == '0'):?>
                              
                              <span><?php $translate->__('In stock'); ?></span>
                              
                              <?php elseif($details['avaibility'] == '1'):?>
                              
                              <span><?php $translate->__('Out of stock'); ?> </span>
                              
                              <?php endif; ?>
                              
                              
                              
                              
                              </div>
                              
                              
                                    <div class="product attribute sku">
                                       <strong class="type">SKU</strong> 
                                       <div class="value" itemprop="sku">Hello</div>
                                    </div>
                                 </div>
                                 <div class="product-reviews-summary" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                    <div class="rating-summary">
                                       <span class="label"><span>
                                      <?php $translate->__('Rating:'); ?> 

                                    </span></span> 
                                       <div class="rating-result" title="80%"><span style="width:80%"><span> <span itemprop="ratingValue">80</span>% of <span itemprop="bestRating">100</span></span></span></div>
                                    </div>
                                    <div class="reviews-actions"><a class="action view" href="#"><span itemprop="reviewCount">1</span>&nbsp; <span>
                                    
                                    <?php $translate->__('Review'); ?> 

                                 </span></a> <a class="action add" href="#">
                                 <?php $translate->__('Add Your Review'); ?> 

                              </a></div>
                                 </div>
                                 <div class="price-box price-final_price" data-role="priceBox" data-product-id="2276">
                                    <span class="special-price">
                                       <span class="price-container price-final_price tax weee"  itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                         
                                         
                                         
                                         <?php if($details['discount'] == '0'):?>
                           
                           
                                         
                                          
                                          <span   data-price-type="finalPrice" class="price-wrapper "><span class="price"><?= $obj->getPriceFormate($details['regular_price']); ?> 
                                       <?php $translate->__('AED'); ?> 
                                    </span></span>   
                                          
                              <?php else:?>
                              
                                
                                          <span   data-price-type="finalPrice" class="price-wrapper "><span class="price"><?= $obj->getPriceFormate($details['special_price']); ?> 
                                      <?php $translate->__('AED'); ?>  
                                    </span></span>   
                                          
                              
                                      <?php endif; ?>
                                      
                                      
                                      
                                      
                                       </span>
                                    </span>
                                  
                                  
                           <?php
                              $cartPrice = '';
                           ?>
                           <?php if($details['discount'] == '0'):?>
                           
                           <?php
                              
                              // Set cart price 
                              $cartPrice = $details['regular_price'];
                           ?>
                                    
                                 <?php else: ?>
                                 
                                 <?php 
                           
                           $cartPrice = $details['special_price'];
                                 ?>
                                 
                                 <span class="old-price">  
                              <span class="price-container price-final_price tax weee" > 
                                 <span class="price-label">Regular Price</span>  
                                 <span  id="old-price-2276"   data-price-type="oldPrice" class="price-wrapper ">
                                    <span class="price"><?= $obj->getPriceFormate($details['regular_price']);?> AED</span></span>  </span></span>  
                                 
                                 
                                 <?php endif; ?>
                                 
                                 </div>
                              </div>
                              <div class="product-add-form">
                                 
                           <input type = "hidden" name = "cart-p-id" id = "cart-p-id" value = "<?= $details['id']; ?>" />
                           <input type = "hidden" name = "cart-price" id = "cart-price" value = "<?= $cartPrice; ?>" />
                           
               <input type = "hidden" name = "seller_email" value = "<?= base64_encode($details['seller_email']); ?>" id  = "seller_email120"/>
                                    
                                    <input type="hidden" name="product" value="2276" />
                                    <input type = "hidden" name = "p_p_image" value = "<?= $img_src_link ;?>" id = "p_p_image"/>
                                    
                                    <input type = "hidden" value = "<?= $_SERVER['SCRIPT_URI'] ?? '' ;?>" id = "script-uri" />
                           <input type = "hidden" value = "<?= $img_src_link ;?>" id = "p-image-url" />
                                    
                                    <input type="hidden" name="selected_configurable_option" value="" /><input type="hidden" name="related_product" id="related-products-field" value="" /><input name="form_key" type="hidden" value="xo2OhJMrI22hVg2o" />       
                                    <div class="box-tocart">
                                       <div class="fieldset">
                                          <div class="field qty">
                                             <label class="label" for="qty"><span>
                                             <?php $translate->__('Qty'); ?> 

                                          </span></label> 
                                             <div class="control control-qty-cart">
                                                <input type="number" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="qty-default input-text qty" data-validate="{&quot;required-number&quot;:true,&quot;validate-item-quantity&quot;:{&quot;minAllowed&quot;:1}}" />
                                                
                                                
                                                <div class="control-qty">
                                                   <span class="quantity-controls quantity-plus"></span> <span class="quantity-controls quantity-minus"></span> <script type="text/javascript">
                                                      require([
                                                         'jquery'
                                                      ], function ($) {
                                                         $('.quantity-plus').click(function () {
                                                            $('.qty-default').val(Number($('.qty-default').val())+1);
                                                         });
                                                         
                                                         $('.quantity-minus').click(function () {
                                                            var value = Number($('.qty-default').val())-1;
                                                            if(value > 0){
                                                               $('.qty-default').val(value);
                                                            }
                                                            
                                                         });
                                                      });
                                                   </script>
                                                </div>
                                             
                                             
                                             </div>
                                          </div>
                                          <div class="actions">
                                             <button type="submit" title="Add to Cart" class="action primary tocart" id = "add-to-cart-btn" ><span>

                                             
                                          <?php $translate->__('Add to Cart'); ?>
                                          </span></button>   
                                            
                                          
                                            
                                             <div id="instant-purchase" data-bind="scope:'instant-purchase'">
                                                <!-- ko template: getTemplate() --><!-- /ko -->
                                             </div>
                                            
                                            
                                             
                                         
                                          </div>
                                       </div>
                                    </div>
                                   
                                   
                                    
                                 
                                 
                                 
                              </div>
                              
                              
                              <script>
                                 require([
                                     'jquery',
                                     'priceBox'
                                 ], function($){
                                     var dataPriceBoxSelector = '[data-role=priceBox]',
                                         dataProduSelector = '[data-product-id=2276]',
                                         priceBoxes = $(dataPriceBoxSelector + dataProduSelector);
                                 
                                     priceBoxes = priceBoxes.filter(function(index, elem){
                                         return !$(elem).find('.price-from').length;
                                     });
                                 
                                     priceBoxes.priceBox({'priceConfig': {"produ":"2276","priceFormat":{"pattern":"$%s","precision":2,"requiredPrecision":2,"decimalSymbol":".","groupSymbol":",","groupLength":3,"integerRequired":1}}});
                                 });
                              </script>
                              
                              
                              
                              
                              <div class="product-social-links">
                                 <div class="product-addto-links" data-role="add-to-links">  
                            
                            <a title="Add to Wish List" href="#" class="action towishlist"  data-action="add-to-wishlist"><span>
                           
                            <?php $translate->__('Add to Wish List'); ?>

                         </span></a>    <a title="Add to Compare" href="#" data-post='' data-role="add-to-links" class="action tocompare"><span>

                          <?php $translate->__('Add to Compare'); ?>

                      </span></a> </div>
                                
                                
                                
                                  
                                 
                                 
                                 
                                  <a title="Email" href="http://localhost/themes/sm_market2/argentina/sendfriend/product/send/id/2276/" class="action mailto friend"><span>Email</span></a> 
                             
                             
                             
                             
                             
                              </div>
                              <div class="product attribute overview">
                                 <div class="value" itemprop="description">
                                    <p>
                              <?= $details['short_discription'] ;?>
                           </p>
                                 </div>
                              </div>
                              
                               <div class = "additional-info25">
                             
                              <div class = "row">
                        <div class = "col-md-4 custom120">
                        <span class = "title32"> <b >

                        <?php $translate->__('Return policy'); ?>

                     </b> </span>
                        
                        </div>
                        <div class = "col-md-8">
                           <?php $translate->__('Returns accepted if product not as described, seller pays return shipping; or keep the product & agree refund with seller.'); ?>
                        </div>
                             </div>
                        
                     <br/>
                     <div class = "row">
                        <div class = "col-md-4">
                        
                        <b class = "title32">
                           <?php $translate->__('Minimum Order'); ?></b>
                        </div>
                        <div class = "col-md-8">
                           <?= $details['minimun_order'] === '' ?  'Not Provided ': $details['minimun_order'].' '. $details['product_unite'];?>
                        </div>
                             </div>
                     
                             <br/>
                             <div class = "row">
                        <div class = "col-md-4 custom120 ">
                        
                        <b class = "title32">
                           <?php $translate->__('Seller Guarantee'); ?> </b>
                        </div>
                        <div class = "col-md-8">
                           <?= $details['warranty']; ?>
                        </div>
                             </div>
                             
                             <div class = "row">
                        <div class = "col-md-4">
                        
                        <b class = "title32">
                           <?php $translate->__('Payment'); ?> </b>
                        </div>
                        <div class = "col-md-8">
                           <i class = "fa fa-cc-mastercard custom203"></i> 
                           <i class = "fa fa-cc-visa custom203"></i> 
                           <i class = "fa fa-credit-card custom203"></i> 
                           <i class = "fa fa fa-cc-paypal custom203"></i>
                           
                            
                        </div>
                             </div>
                             

                      
                             </div>
                             
                              <div id="addthis_wrap">
                                 <div class="addthis_toolbox addthis_default_style "><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <iframe allowtransparency="true" frameborder="0" scrolling="no" src="https://platform.twitter.com/widgets/tweet_button.html" style="width:95px; height:20px; float:left;"></iframe><a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal"></a> <a class="addthis_counter addthis_pill_style"></a></div>
                                 <script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script><script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-529be2200cc72db5"></script>
                              </div>
                           </div>
                           
                           
                           
                           
                            <div class="product media">
                  <div class="xzoom-container">
                     
                  <div class = "xzoom-container-1" >
         
            <div class = "img-warper20">
         
         <img class="xzoom" id="xzoom-default"
           src="<?php echo $img_src_link;?>" xoriginal="<?php echo $img_src_link;?>" style = "width:400px; height:400px;"/>
           
         </div>
         
          
            <?php $img_dir = 'http://localhost/img/product-images' ;?>
          
            <div class="xzoom-thumbs">
           
            <?php foreach($images as $image) :?>
           
            <a href = "<?= $img_dir.'/'.$image; ?>">
               <img class="xzoom-gallery" width="80" src="<?= $img_dir.'/'.$image; ?>"  title="The description goes here">
            
            </a>
             
           
         <?php endforeach; ?>
         
         </div>

</div>

                  </div>        
     
                  </div>   
                        
                          
                          
                     <div id="container" >

        <h1 style="font-size:32px; visibility:hidden;">Easy Responsive Tabs to Accordion (with Nested Tabs)</h1>
        <hr>
        <br/>
        <br/>

        
        


        <h2><?php $translate->__('PRODUCT INFORMATION'); ?>  </h2>
        <br/>
        <!--Vertical Tab-->
        <div id="parentVerticalTab"  style = "direction: rtl;">
   <ul class="resp-tabs-list hor_1" id = "enquries-li14">
      <li><?php $translate->__('SPECIFICATIONS'); ?>  </li>
      <li><?php $translate->__('DESCRIPTION'); ?> </li>
      <li><?php $translate->__('REVIEWS'); ?>  </li>
      <li ><?php $translate->__('Enquries'); ?>  </li>
   </ul>
   <div class="resp-tabs-container hor_1">
      <div>
         <!-- Checking proudct specification --->
         <?php
            // Get the proudct specification 
            $specifications_key = $details['specifications_key'];
            
            
            $specifications_key  = htmlspecialchars_decode($specifications_key);
            
           
            
            //echo $specifications_key;
            //echo "$specifications_key";
            // decode the key 
            $decode = json_decode($specifications_key, true);
            
         
            //print_r($specifications_key);
            
            $specifications_value = '';
            
            if($decode) {
               
                  // Count value 
                  if(count($decode) > 0) {
                     
                        // Get the specification value 
                        //htmlspecialchars_decode($specifications_key);
                        
                        $specifications_value = htmlspecialchars_decode($details['specifications_value']);
                        
                        // Decode to json 
                        $specifications_value = json_decode($specifications_value, true);
                        
                        $getSpecification = '';
                        
                        
                        // Cound key 
                        $countKey = count($decode);
                        
                        for($i = 0; $i < $countKey; $i++) {
                           
                              $getSpecification .= '<tr></tr><th class="col label" scope="row">'.$decode[$i].'</th>
         <td class="col data" data-th="Manufacturer">'.$specifications_value[$i].'</td></tr>';
                                 
                              
                           }
                           
                        
                        
                  }
            }
            ?>
         <table class="data table additional-attributes" id="product-attribute-specs-table">
      <caption class="table-caption">
         <?php $translate->__('More Information'); ?> </caption>
      <tbody>
     
      <?= $getSpecification;?>
     
   
   
      </tbody>
</table>
      </div>
      <div>
         <div class="additional-attributes-wrapper table-wrapper">
            
               <caption class="table-caption">
                  <?php $translate->__('More Information'); ?> </caption>
              
              <?= $details['discription'];?>
            
            
            
            
         </div>
      </div>
      <div>
         <div id="product-review-container" data-role="product-review">
            <div class="block review-list" id="customer-reviews">
               <div class="block-title"><strong>

                  <?php $translate->__('Customer Reviews'); ?></strong></div>
               
               <div class="block-content">
                  <div class="toolbar review-toolbar">
                     <div class="pager">
                     
                    
                     </div>
                  </div>
                 
                  <div class="toolbar review-toolbar">
                     <div class="pager">
                        <div class="limiter">
                           <strong class="limiter-label">Show</strong> 
                           <select id="limiter" data-mage-init="{&quot;redirectUrl&quot;: {&quot;event&quot;:&quot;change&quot;}}" class="limiter-options">
                              <option value="http://magento2.flytheme.net/themes/sm_market2/argentina/review/product/listAjax/id/2274/?limit=10" selected="selected">10</option>
                              <option value="http://magento2.flytheme.net/themes/sm_market2/argentina/review/product/listAjax/id/2274/?limit=20">20</option>
                              <option value="http://magento2.flytheme.net/themes/sm_market2/argentina/review/product/listAjax/id/2274/?limit=50">50</option>
                           </select>
                           <span class="limiter-text">per page</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        
       
         <div class="block review-add">
          <div class="row">
         <div class="col-sm-6">
            <div class="rating-block">
               <h4><?php $translate->__('Average user rating'); ?> </h4>
               <h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
               <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
               </button>
               <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
               </button>
               <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
               </button>
               <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
               </button>
               <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
               </button>
            </div>
         </div>
         <div class="col-sm-6">
            <h4> <?php $translate->__('Rating breakdown'); ?> </h4>
            <div class="pull-left">
               <div class="pull-left" style="width:35px; line-height:1;">
                  <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
               </div>
               <div class="pull-left" style="width:180px;">
                  <div class="progress" style="height:9px; margin:8px 0;">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                     <span class="sr-only">80% Complete (danger)</span>
                    </div>
                  </div>
               </div>
               <div class="pull-right" style="margin-left:10px;">1</div>
            </div>
            <div class="pull-left">
               <div class="pull-left" style="width:35px; line-height:1;">
                  <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
               </div>
               <div class="pull-left" style="width:180px;">
                  <div class="progress" style="height:9px; margin:8px 0;">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                     <span class="sr-only">80% Complete (danger)</span>
                    </div>
                  </div>
               </div>
               <div class="pull-right" style="margin-left:10px;">1</div>
            </div>
            <div class="pull-left">
               <div class="pull-left" style="width:35px; line-height:1;">
                  <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
               </div>
               <div class="pull-left" style="width:180px;">
                  <div class="progress" style="height:9px; margin:8px 0;">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                     <span class="sr-only">80% Complete (danger)</span>
                    </div>
                  </div>
               </div>
               <div class="pull-right" style="margin-left:10px;">0</div>
            </div>
            <div class="pull-left">
               <div class="pull-left" style="width:35px; line-height:1;">
                  <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
               </div>
               <div class="pull-left" style="width:180px;">
                  <div class="progress" style="height:9px; margin:8px 0;">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                     <span class="sr-only">80% Complete (danger)</span>
                    </div>
                  </div>
               </div>
               <div class="pull-right" style="margin-left:10px;">0</div>
            </div>
            <div class="pull-left">
               <div class="pull-left" style="width:35px; line-height:1;">
                  <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
               </div>
               <div class="pull-left" style="width:180px;">
                  <div class="progress" style="height:9px; margin:8px 0;">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                     <span class="sr-only">80% Complete (danger)</span>
                    </div>
                  </div>
               </div>
               <div class="pull-right" style="margin-left:10px;">0</div>
            </div>
         </div>         
      
   </div>
         <div class = "row">
         
         <div class="col-sm-6">
         <div class="block-title">
            
            <h1><?php $translate->__('Write You Review'); ?> </h1></div>
            <div class="block-content">

              <fieldset class="fieldset review-fieldset" data-hasrequired="* Required Fields">
                     
                     <fieldset class="field required review-field-ratings">

                       <div class="control">
    <div class="nested" id="product-review-table">
        <div class="field choice review-field-rating">
         
         <hr />
            <label class="label" id="Price_rating_label">
               <?php $translate->__('Write you reviews'); ?> </span></label>

            <div class="control review-control-vote" id = "write-review10" data-href = "http://localhost/reviews?action=reviewForm&id_item=<?= urlencode($_GET['sku']) ;?>&id=<?= urlencode($_GET['id'])?>&name=<?= urlencode($details['name'])?>&img=<?= urlencode($img_src_link) ?>">
                
                
                
               
               
             
                <input type="radio" name="ratings[3]" id="Price_1" value="11" class="radio" data-validate="{ 'rating-required':true}" aria-labelledby="Price_rating_label Price_1_label" aria-required="true">
                
                
                <label class="rating-1" for="Price_1" title="1 star" id="Price_1_label"><span>1 star</span></label>
                
                
                <input type="radio" name="ratings[3]" id="Price_2" value="12" class="radio" data-validate="{ 'rating-required':true}" aria-labelledby="Price_rating_label Price_2_label" aria-required="true">
                
                
                <label class="rating-2" for="Price_2" title="2 stars" id="Price_2_label"><span>2 stars</span></label>
                
                <input type="radio" name="ratings[3]" id="Price_3" value="13" class="radio" data-validate="{ 'rating-required':true}" aria-labelledby="Price_rating_label Price_3_label" aria-required="true">
                
                <label class="rating-3" for="Price_3" title="3 stars" id="Price_3_label"><span>3 stars</span></label>
                <input type="radio" name="ratings[3]" id="Price_4" value="14" class="radio" data-validate="{ 'rating-required':true}" aria-labelledby="Price_rating_label Price_4_label" aria-required="true">
                
                <label class="rating-4" for="Price_4" title="4 stars" id="Price_4_label"><span>4 stars</span></label>
                
                <input type="radio" name="ratings[3]" id="Price_5" value="15" class="radio" data-validate="{ 'rating-required':true}" aria-labelledby="Price_rating_label Price_5_label" aria-required="true">
                <label class="rating-5" for="Price_5" title="5 stars" id="Price_5_label"><span>5 stars</span></label>
             </a>
           
            </div>
        </div>
    </div>
    <input type="hidden" name="validate_rating" class="validate-rating" value="" aria-required="true">
</div>
                     </fieldset>
                    
                 <script>
               
                
                $("#write-review10").click(function (){
                   
                   var loca = $(this).attr('data-href');
                   
                   window.location.href = loca;
                      
                     
               })
                  
            
                 
                 </script>
                    
                 
                  </fieldset>

            </div>
       
       
         </div>
         
         </div>
           
           
            
         </div>
     
     
      </div>
   
   <div>
       
                 
      <input type = "hidden" value = "<?= $_GET['sku'] ;?>" id = "ajax-p-sku"/>
      <input type = "hidden" value = "<?= $details['name'] ;?>" id = "ajax-p-name"/>
      
      
      <input type = "hidden" value = "<?= $_SERVER['SCRIPT_URI]'] ?? '' ;?>" id = "script-uri" />
      <input type = "hidden" value = "<?= $img_src_link ;?>" id = "p-image-url" />
      
      
                  <input name="form_key" type="hidden" value="f64vD6orRjO7Hseg">  
                  <fieldset class="fieldset review-fieldset" data-hasrequired="* Required Fields">
               
               <div class="alert alert-info" role="alert"> <a href="#" class="alert-link">

                  <?php $translate->__('Make enquire for the product'); ?>  <?= $details['name']; ?> </a>
</div><div style = "color:green;" id = "msg-id56">

</div>
   
                   <div style = "color:green;" id = "msg-id56"></div>

                     <div class="field review-field-summary required">
                        <label for="msg-subject" class="label"><span>
                       <?php $translate->__('Subject'); ?> </span></label> 
                        <div class="control">
                     
                  <input type="text" name="subject" id="msg-subject" class="input-text" data-validate="{required:true}" data-bind="value: review().title" aria-required="true"></div>
                     </div>
                     
                     
                     
                     <div class="field review-field-text required">
                        <label for="msg-product" class="label"><span>
                           <?php $translate->__('Message'); ?> </span></label> 
                        <div class="control">
                     
                     <textarea name="msg-product" id="msg-product" cols="5" rows="3" data-validate="{required:true}" data-bind="value: review().detail" aria-required="true"></textarea></div>
                     </div>
                  </fieldset>
                  <div class="actions-toolbar review-form-actions">
                     <div class="primary actions-primary">

                   <button type="submit" class="action submit primary" id = "btn-p-inqueri"><span>

                     <?php $translate->__('Submit Message'); ?> </span></button></div>
                  </div>
   
   </div>
   
   </div>
</div>

    </div>
       
                          
         <h1 style="font-size:32px; visibility:hidden;">Easy Responsive Tabs to Accordion (with Nested Tabs)</h1>
      
         <h2><?= $details['name']; ?></h2>
         <hr> 
         
         <div class ="container">
          
             <div class = "col-md-12">
              <?= html_entity_decode($details['product_article_html']); ?>
             </div>
         
        
         
         </div>
                          
                           <input name="form_key" type="hidden" value="xo2OhJMrI22hVg2o" /> 
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
                                          <input name="form_key" type="hidden" value="xo2OhJMrI22hVg2o" /> 
                                          <fieldset class="fieldset login" data-hasrequired="* Required Fields">
                                             <div class="field email required">
                                                <label class="label" for="email"><span>Email</span></label> 
                                                <div class="control"><input name="username" id="email" type="email" class="input-text" value="" autocomplete="off" title="Email" data-validate="{required:true, 'validate-email':true}"></div>
                                             </div>
                                             <div class="field password required">
                                                <label for="pass" class="label"><span>Password</span></label> 
                                                <div class="control"><input name="password" id="pass" type="password" class="input-text" autocomplete="off" title="Password" data-validate="{required:true, 'validate-password':true}"></div>
                                             </div>
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
                                                <label for="email_address_2" class="label"><span>Email</span></label> 
                                                <div class="control"><input type="email" name="email" alt="email" id="email_address_2" class="input-text" value="" data-validate="{required:true, 'validate-email':true}" /></div>
                                             </div>
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
                           
                          
                        
                        
                       </div>
                     </div>
                     <div class="col-lg-3 col-md-3">
                   
                   <div class = "sidebar sidebar-additional">
                  

                  


                   </div>
               </div>
                     
                        


                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <div id = "myDiv"></div>
         

         </main>
         
            
      
      <div class="row">
         <div class="col-sm-12" >
            <hr/>
            <div class="review-block" style = "direction:rtl;">
               <div class="row">
                  <div class="col-sm-3">
                     <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                     <div class="review-block-name"><a href="#">nktailor</a></div>
                     <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                  </div>
                  <div class="col-sm-9">
                     <div class="review-block-rate">
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                     </div>
                     <div class="review-block-title">this was nice in buy</div>
                     <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                  </div>
               </div>
               <hr/>
               <div class="row">
                  <div class="col-sm-3">
                     <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                     <div class="review-block-name"><a href="#">nktailor</a></div>
                     <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                  </div>
                  <div class="col-sm-9">
                     <div class="review-block-rate">
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                     </div>
                     <div class="review-block-title">this was nice in buy</div>
                     <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                  </div>
               </div>
               <hr/>
               <div class="row">
                  <div class="col-sm-3">
                     <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                     <div class="review-block-name"><a href="#">nktailor</a></div>
                     <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                  </div>
                  <div class="col-sm-9">
                     <div class="review-block-rate">
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                     </div>
                     <div class="review-block-title">this was nice in buy</div>
                     <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                  </div>
               </div>
            </div>
         </div>
   


      
</div>


        
        <?php include ('footer.php');?>
        
        
     
     
      
   
   
   
   
      
      
