<?php 
session_start();
 // Require the controller 
 require 'controller/controller.php';
 
 // Create new object 
 $obj = new MarketPlace();
 
 // Get the cart 

?>

<!doctype html>
<html lang="en">
   
	<head >
     
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta name="format-detection" content="telephone=no"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <title>Home - SM Market Layout 4</title> 
		
	<?php include 'head-links.php'; ?>
	   
     </head>
  

	 <body data-container="body" data-mage-init='' class="header-4-style home-4-style footer-1-style layout-full-width  cms-home-demo-04 cms-index-index page-layout-1column">
      <noscript>
         <div class="message global noscript">
            <div class="content">
               <p><strong>JavaScript seems to be disabled in your browser.</strong> <span>For the best experience on our site, be sure to turn on Javascript in your browser.</span></p>
            </div>
         </div>
      </noscript>
     
      <div class="page-wrapper">
      
       <?php include 'header.php'; ?>
			
		<div class="breadcrumbs">
            <div class="container">
               <ul class="items">
                  <li class="item home"> <a href="" title="Go to Home Page">Home</a> </li>
                  <li class="item category97"> <strong>Checkout</strong> </li>
               </ul>
            </div>
         </div>
		
		
		<main id="maincontent" class="page-main">
		<div class="container">
			<div class="row">
	
	<br/>
	 
      <div class="col-lg-12 col-md-12">
         <div class="page-title-wrapper">
			 <br/>
			 
			
			
			 
			 
            <h2 class="page-title"><span class="base" data-ui-id="page-title-wrapper">Shipping Address</span></h2>
			
			<div id = "cart-update-msg"></div>
         </div>
         
         <!-- If cart is not returning null then --->
			<?php if ($obj->GetCart() !== NULL && count($obj->GetCart()) > 0) :?>
			
			
			
			<div id = "cart-container-5656">
			<!-- end the else if statement -->
			<div class="cart-container">
		
               <div class="cart-summary" style="top: 0px;">
                  <strong class="summary title">Summary</strong>  
               
                  <div id="cart-totals" class="cart-totals" data-bind="scope:'block-totals'">
                    
                     <div class="table-wrapper" data-bind="blockLoader: isLoading">
                        <table class="data table totals">
                           <caption class="table-caption" data-bind="text: $t('Total')">Total</caption>
                           <tbody>
                             
                              <tr class="totals sub">
                                 <th data-bind="i18n: title" class="mark" scope="row">Items(s)</th>
                                 <td class="amount">
                                    <span class="price" data-bind="text: getValue(), attr: {'data-th': title}" data-th="Subtotal"><?= $obj->getPriceFormate($obj->CartTotleAmount());?> AED</span>
                                 </td>
                              </tr>
                          
                              <tr class="totals">
                                 <th colspan="1" style="" class="mark" scope="row">
                                    <span class="title" data-bind="text: title">Discount</span>
                                    <span class="discount coupon" data-bind="text: getCouponLabel()"></span>
                                 </th>
                                 <td class="amount" data-bind="attr: {'data-th': title}" data-th="Discount">
                                    <span><span class="price" data-bind="text: getValue()">0 AED</span></span>
                                 </td>
                              </tr>
                              
                                <?php if($obj->ShippingCostApply() === true):?>
                              <tr class="totals-tax">
                                 <th data-bind="text: title" class="mark" colspan="1" scope="row">Shipping Cost</th>
                                 <td data-bind="attr: {'data-th': title}" class="amount" data-th="Tax">
                                    <span class="price" data-bind="text: getValue()">
                                    20 AED
                                    </span>
                                 </td>
                              </tr>
                             
                             
                             <?php endif; ?>
                            
                              <tr class="totals-tax">
                                 <th data-bind="text: title" class="mark" colspan="1" scope="row">Tax</th>
                                 <td data-bind="attr: {'data-th': title}" class="amount" data-th="Tax">
                                    <span class="price" data-bind="text: getValue()"><?=
                                    
										$obj->getPriceFormate($obj->TaxOnCart());
                                    ?> AED</span>
                                 </td>
                              </tr>
                             
                           
                             
                              <tr class="grand totals">
                                 <th class="mark" scope="row">
                                    <strong data-bind="i18n: title">Order Total</strong>
                                 </th>
                                 <td data-bind="attr: {'data-th': title}" class="amount" data-th="Order Total">
                                    <strong><span class="price" data-bind="text: getValue()"><?= $obj->getPriceFormate($obj->CartTotleAmountWithTax());?> AED</span></strong>
                                 </td>
                              </tr>
                             
                             
                             
                           </tbody>
                       
						<tbody>
							
						<?php if($obj->iSFreeShipping() !== null):?>
						
						<tr>
								 <th></th>
								 <td></td>
								 To get Free Shipping, Please add Add <?= $obj->iSFreeShipping(); ?> AED of more items.
                        </tr>
						<?php endif ;?>
						
                             
						</tbody>
                        </table>
                     </div>
                  </div>
					
				<div id="cart-totals" class="cart-totals" data-bind="scope:'block-totals'">
				<p>Payment</p>
					
				</div>
				
                  <ul class="checkout methods items checkout-methods-items">
                     <li class="item">  
						 
						<a href = "checkout.php">
						 <button onclick = "process_checkout();"id = "process-checkout" type="button"  title="Proceed to Checkout" class="action primary checkout"><span>Proceed to Checkout</span>
						 </button> 
						</a>
					</li>
                     <!--
                     <li class="item"> <a class="action multicheckout" href=""><span>Check Out with Multiple Addresses</span></a></li>
                 
					-->
                  </ul>
              
              
               </div>

				
				<div class = "col-md-4">
					
				<?php if($obj->IsUserLoggedInBuyer() !== true):?>

				 <div class="message notice">
			
					<div>
			
  <strong>Note! </strong>Please logg in as buyer to process checkout 
</div></div>
				
				
				<?php else: ?>
				
				<!-- 
			
				If user is logged in the check that shipping address 
				is completely updated by the buyer through the admin 
				Panel PHP method called IsBuyerShippingProvided()
			
				-->
				<?php if($obj->IsBuyerShippingProvided() !== true):?>
				
				<div class="message notice">
				<div>
				<strong>Shpping Details! </strong>Some information about the shipping missing
				in your account please updated it, by login in to your account.
				
				</div></div>
				
				<?php else: ?>
				
				<?php
					$shipping_details = $obj->GetBuyerShippingDetails();
				?>
				<div class="message success">
				<div>
				<strong>Shpping Details! </strong> 
				
				</div></div>
				<div class="data item content resp-tab-content" id="additional" data-role="content" aria-labelledby="tab-label-additional" role="tabpanel" aria-hidden="false" style="display: block;">
					<div class="additional-attributes-wrapper table-wrapper">
						<table class="data table additional-attributes" id="product-attribute-specs-table">
			<caption class="table-caption">More Information</caption>
			<tbody>
				<tr>
					<th class="col label" scope="row">Full Name </th>
					<td class="col data" data-th="Manufacturer"><?= ucfirst($shipping_details['firstname']).' '.ucfirst($shipping_details['lastname'])?></td>
				</tr>
				<tr>
					<th class="col label" scope="row">Phone No.</th>
					<td class="col data" data-th="Material"><?= ucfirst($shipping_details['mobile_no']) ?></td>
				</tr>
				
				<tr>
					<th class="col label" scope="row">Street</th>
					<td class="col data" data-th="Material"> 
						
						<?= $shipping_details['street_no'] ?? '';?>
					</td>
				</tr>
				
				
				<tr>
					<th class="col label" scope="row">Area</th>
					<td class="col data" data-th="Material"><?= $shipping_details['area'] ?? '';?></td>
				</tr>
				
				<tr>
					<th class="col label" scope="row">Building Name/No.</th>
					<td class="col data" data-th="Material"><?= $shipping_details['building_no'] ?? '';?></td>
				</tr>
				
				
				<tr>
					<th class="col label" scope="row">Floor No.</th>
					<td class="col data" data-th="Material"><?= $shipping_details['floor_no'] ?? '';?></td>
				</tr>
				
				<tr>
					<th class="col label" scope="row">City</th>
					<td class="col data" data-th="Material"><?= $shipping_details['city'] ?? '';?></td>
				</tr>
				
				
				<tr>
					<th class="col label" scope="row">Country</th>
					<td class="col data" data-th="Material"><?= $shipping_details['country'] ?? '';?></td>
				</tr>
				
				<tr>
					<th class="col label" scope="row">Landmark</th>
					<td class="col data" data-th="Material"><?= $shipping_details['landmark'] ?? '';?></td>
				</tr>
				
				
				
			</tbody>
		</table>
				</div>
				
				</div>
				
				<div class="message notice">
				<div>
				<strong>Note: </strong> Please update your if you wish to ship to the different location by login in to you buyer account.
				<a href = "http://localhost/user-buyer-14e1813e3d0cf9da1a9dafc6afadff37/shipping-address">Update</a>
				</div></div>
				
				
				<?php endif; ?>

				<!-- If user is logged in then check that shipping address is filled -->
				<?php endif;?>
					
				
				
				</div>
				
				
				<div class = "col-md-4" style = "height:350px; overflow:scroll;">
				
				
				<div class="">
                     <table id="shopping-cart-table" class="cart items data table">
                        <caption role="heading" aria-level="2" class="table-caption">Shopping Cart Items</caption>
                        
                        
                        
                        <thead>
                           <tr>
                              <th class="col item" scope="col"><span>Item</span></th>
                              
                              <!--
                              <th class="col price" scope="col"><span>Price</span></th>
                              <th class="col qty" scope="col"><span>Qty</span></th>
                              <th class="col subtotal" scope="col"><span>Subtotal</span></th>
                              
                              -->
                           </tr>
                        </thead>
                        
                        
                        <?php foreach($obj->GetCart() as $item) :?>
						
						<?php $seo_name = $obj->SEOproductName($item['name']); ?>
						
                        <tbody class="cart item" id = "cart-item-<?= $item['sku']; ?>">
                           <tr class="item-info">
                              <td data-th="Item" class="col item">
                                 <a href="" title="Outdoor Crossbody Bag" tabindex="-1" class="product-item-photo">   <span class="product-image-container"><span class="product-image-wrapper"><img class="product-image-photo" src="<?= $item['image']; ?>" data-src="<?= $item['image']; ?>" width="150" height="150" alt="Outdoor Crossbody Bag"></span></span> </a>  
                                 <div class="product-item-details"><strong class="product-item-name"> 
									 
									 <a href="http://localhost/discription/<?php echo $seo_name; ?>/<?php echo $item['id']?>/<?php echo $item['sku'];?>"><?= $item['name']; ?></a> </strong>        </div>
							
							<div class = "data table totals">
								
							<p class = "totals sub"> Price <?= $obj->getPriceFormate( $item['price']); ?></p>
							<p> Qty <?= $obj->getPriceFormate( $item['qty']); ?></p>
							<p> Amount <?= $obj->getPriceFormate( $item['totalamount']); ?></p>
							</div>
							
                              
                              <!--
                              <td class="col price" data-th="Price">   <span class="price-excluding-tax" data-label="Excl. Tax"> <span class="cart-price"> <span class="price"> AED</span></span> </span> </td>
                              <td class="col qty" data-th="Qty">
                                 <div class="field qty">
                                    <label class="label" for="cart-1502-qty"><span>Qty</span></label> 
                                    <div class="control qty">
										
										<input disabled id="cart-1502-qty" name="cart[1502][qty]" data-cart-item-id="Outdoor Crossbody Bag" value="<?= $item['qty']; ?>" type="number" size="4" title="Qty" class="input-text qty" data-validate="{required:true,'validate-greater-than-zero':true}" data-role="cart-item-qty"></div>
                                 </div>
                              </td>
                              <td class="col subtotal" data-th="Subtotal">    <span class="price-excluding-tax" data-label="Excl. Tax"> <span class="cart-price"> <span class="price">AED <?= $obj->getPriceFormate($item['totalamount']) ;?></span></span> </span>  </td>
                           
                           -->
                           
                           </tr>
                           
                           <tr class="item-actions">
                              <td colspan="100">
                                 <div class="actions-toolbar">
                                    <div id="gift-options-cart-item-1502" data-bind="scope:'giftOptionsCartItem-1502'" class="gift-options-cart-item">
                                      
                                      
                                    </div>
                                    
                                    <input type = "hidden" id = "p-cart-id" value = "<?= $item['id']?>" />
                                    
                                 </div>
                              </td>
                           </tr>
                        
                        </tbody>
                    
                        <!-- Stop hear looping each items --->
                        <?php endforeach; ?>
                        
						                    
                    
                     </table>
                     
                  
                  </div>

				</div>
                
            </div>
         
			</div>
			
         
			
			<?php else :?>
			
			
			
			<div class="message notice"><div>Buy something, Shopping cart is empty.  </div></div>
			
			<!--
				We have three message class message notice, message warning, message error, message success
			--->
			
			
			<?php endif; ?>
         
         
         
         
         </div>
      </div>
	</div>
</div>
		
		</main>
		
		  
         
         <?php 
			
			include ('footer.php');
         ?>
      

	
