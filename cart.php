<?php 
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
                  <li class="item category97"> <strong>Cart</strong> </li>
               </ul>
            </div>
         </div>
		
		
		<main id="maincontent" class="page-main">
		<div class="container">
			<div class="row">
      <div class="col-lg-12 col-md-12">
         <div class="page-title-wrapper">
			 <br/>
			 
			
			
			 
			 
            <h2 class="page-title"><span class="base" data-ui-id="page-title-wrapper">Shopping Cart</span></h2>
			
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

                  <ul class="checkout methods items checkout-methods-items">
                     <li class="item">  
						 
						<a href = "/checkout">
						 <button onclick = "process_checkout();"id = "process-checkout" type="button"  title="Proceed to Checkout" class="action primary checkout"><span>Proceed to Checkout</span>
						 </button> 
						</a>
					</li>
                     <!--
                     <li class="item"> <a class="action multicheckout" href=""><span>Check Out with Multiple Addresses</span></a></li>
                 
					-->
                  </ul>
               </div>

               <form id="form-validate" class="form form-cart" novalidate="novalidate">
                  <input name="form_key" type="hidden" value="uS22ay14xM2suHp6"> 
                  <div class="cart table-wrapper">
                     <table id="shopping-cart-table" class="cart items data table">
                        <caption role="heading" aria-level="2" class="table-caption">Shopping Cart Items</caption>
                        
                        
                        
                        <thead>
                           <tr>
                              <th class="col item" scope="col"><span>Item</span></th>
                              <th class="col price" scope="col"><span>Price</span></th>
                              <th class="col qty" scope="col"><span>Qty</span></th>
                              <th class="col subtotal" scope="col"><span>Subtotal</span></th>
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
                              </td>
                              <td class="col price" data-th="Price">   <span class="price-excluding-tax" data-label="Excl. Tax"> <span class="cart-price"> <span class="price"><?= $obj->getPriceFormate( $item['price']); ?> AED</span></span> </span> </td>
                              <td class="col qty" data-th="Qty">
                                 <div class="field qty">
                                    <label class="label" for="cart-1502-qty"><span>Qty</span></label> 
                                    <div class="control qty">
										
										<input id="cart-1502-qty" name="cart[1502][qty]" data-cart-item-id="Outdoor Crossbody Bag" value="<?= $item['qty']; ?>" type="number" size="4" title="Qty" class="input-text qty" data-validate="{required:true,'validate-greater-than-zero':true}" data-role="cart-item-qty"></div>
                                 </div>
                              </td>
                              <td class="col subtotal" data-th="Subtotal">    <span class="price-excluding-tax" data-label="Excl. Tax"> <span class="cart-price"> <span class="price">AED <?= $obj->getPriceFormate($item['totalamount']) ;?></span></span> </span>  </td>
                           </tr>
                           
                           <tr class="item-actions">
                              <td colspan="100">
                                 <div class="actions-toolbar">
                                    <div id="gift-options-cart-item-1502" data-bind="scope:'giftOptionsCartItem-1502'" class="gift-options-cart-item">
                                      
                                      
                                    </div>
                                    
                                    <input type = "hidden" id = "p-cart-id" value = "<?= $item['id']?>" />
                                    <a class="action action-edit"  title="Edit item parameters"  onClick="editCart(this); return false;" data = "<?= $item['sku']; ?>" ><span> Edit</span></a>  
                                    <a title="Remove item" class="action action-delete" data-post="" onClick = "RemoveItems(this)" data = "<?= $item['sku']; ?>" ><span> Remove item</span></a>
                                
                                 </div>
                              </td>
                           </tr>
                        
                        </tbody>
                    
                        <!-- Stop hear looping each items --->
                        <?php endforeach; ?>
                        
						                    
                    
                     </table>
                  </div>

                 <div class="cart main actions"> <a class="action continue" title="Continue Shopping"><span>Continue Shopping</span></a>
    
    
    <button  title="Clear Shopping Cart" class="action clear" id="" onclick = "emptycart();return false;"><span>Clear Shopping Cart</span></button>

    <input type="hidden" value="" id="update_cart_action_container" data-cart-item-update="">
</div>
               
               
               </form>
             
            
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
		
		<script>
			
			
    
			
		function editCart(el) {
		
			// Get the attribute value 
			var pdetails = $(el).attr('data');
			
			// Parse json 
			// This is each div id cart-item-$sku
			// p-cart-id
			var divId = 'cart-item-'+pdetails;
			
			// Go to div and get id 
			var qty = $("#"+divId+" #"+"cart-1502-qty").val();
			
			// Get the id
			var id = $("#"+divId+" #"+"p-cart-id").val();
			
			// Var sku 
			var sku = pdetails;
			
			// 
			var data = {sku:sku, qty:qty, id:id};
			
			// Url 
			var url = 'http://localhost/ajax/edit-cart.php';
			
			
			
			 $.ajax({
			  type: 'POST',
			  url: url,
			  data: data,
			  dataType: "text",
			  success: function(resultData) { 
				
				//$("#cart-update-msg").html(resultData);
				window.location.reload();
				//$("#cart-container-5656").load('updated-cart-2e3615a020749.phtml');
				
				
				
				
 				
		  }
});


			//alert(sku);
			
		}


			
		function RemoveItems(el) {
			
			// Give the confirmation 
			var removeItem = confirm("Are you sure to remove the item.");
			
			// Check if true 
			if(removeItem != true ) {
					
					// Return false;
					return false;
				}
			
			// Get the attribute value 
			var pdetails = $(el).attr('data');
			
			// Parse json 
			// This is each div id cart-item-$sku
			// p-cart-id
			var divId = 'cart-item-'+pdetails;
			
			
			
			// Get the id
			var id = $("#"+divId+" #"+"p-cart-id").val();
			
			// Var sku 
			var sku = pdetails;
			
			// Send http request 
			// 
			var data = {id:id};
			
			// Url 
			var url = 'http://localhost/ajax/remove-items.php';
			
			// Ajax request 
			$.ajax({
			  type: 'POST',
			  url: url,
			  data: data,
			  dataType: "text",
			  success: function(resultData) { 
				
				//$("#cart-update-msg").html(resultData);
				
				//$("#cart-container-5656").load('updated-cart-2e3615a020749.phtml');
				
				//$("#min-cart-5656").load('mini-cart.phtml');
				window.location.reload();
				//mini-cart.phtml
				
 				
		  }
});

			
			
				
			}
			
			
		function emptycart() {
				
			// Confirm first 
			var removeItem = confirm("Are you sure to remove the item.");
		
			// Check if true 
			if(removeItem != true ) {
					
					// Return false;
					return false;
				}
			
				
			var id = 'empty';
			
			var data = {id:id};
			
			var url = 'http://localhost/ajax/emptyCart.php';
			
			// send the ajax request 
			$.ajax({
			  type: 'POST',
			  url: url,
			  data: data,
			  dataType: "text",
			  success: function(resultData) { 
		
				window.location.reload();
				

  }
});

					
}

		function process_checkout() {
			

			var id = 'empty';
			
			var data = {id:id};
			
			var url = 'http://localhost/ajax/process-checkout.php';
			
			
				// Send the http ajax request 
				$.ajax({
			  type: 'POST',
			  url: url,
			  data: data,
			  dataType: "text",
			  success: function(resultData) { 
		
				// here set the 
				//$("#cart-update-msg").html(resultData);
				window.location.reload();

			}
});

				
	}



</script>
         
         
         <?php 
			
			include ('footer.php');
         ?>
      

	
