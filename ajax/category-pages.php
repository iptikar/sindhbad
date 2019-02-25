<?php 

// Set the new 
// Get the category id 
// Get the page 

require('../controller/controller.php');

// Get the object
$obj = new MarketPlace();
?>

<?php if($obj->GetProductByCategoryList('category_name', 'category_id', $_GET['page'], $obj->perpage) !== false) :?>  

<?php foreach ($obj->GetProductByCategoryList('category_name', 'category_id', $_GET['page'], $obj->perpage) as $row) :?>

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
																	<img style = "width:300px; height:400px;"class="product-image-photo lazyload" src="<?php echo $img_src_link ;?>" 
																			data-src="<?php echo $img_src_link ;?>" width="300" height="300" alt="<?php echo $row['name']; ?>"></span></span></a> <!--LABEL PRODUCT-->  <!--END LABEL PRODUCT-->
                                                                     
                                                                     
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
																					
																					<span class="price"><?= $row['discount'] == '0' ? $row['regular_price'] : $row['special_price'];?>.00 AED</span></span>  
																					
																					
																					
																					</span>  
																				
																		
																		
																		<?php if($row['discount'] !== '0') :?>
																		<span class="old-price">  
																			<span class="price-container price-final_price tax weee"> 
																				<span class="price-label">Regular Price</span>  
																				<span id="old-price-2275" data-price-amount="180" data-price-type="oldPrice" class="price-wrapper "><span class="price"><?= $row['regular_price'];?></span>
																				</span>  
																			</span>
																		</span>
																		
																		<?php endif; ?>
																		
																		
																		
																		</div>
															  
                                                                      
                                                                      
                                                                        <div class="bottom-action">
                                                                           <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List" aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/wishlist\/index\/add\/","data":{"product":"2245","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEv"}}' data-action="add-to-wishlist" role="button"><span>Add to Wish List</span></a>      
                                                                           
                                                                           <form data-role="tocart-form" action="" method="post">
																			   
																			   
                                                                           
                                                                           <button type="submit" title="Add to Cart" class="action tocart primary btn-action btn-cart"><span>Add to Cart</span></button></form>
                                                                           
                                                                           
                                                                           
                                                                           <a href="#" class="action tocompare btn-action link-compare" title="Add to Compare" aria-label="Add to Compare" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/catalog\/product_compare\/add\/","data":{"product":"2245","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEv"}}' role="button"><span>Add to Compare</span></a> 
                                                                        </div>
                                                                     </div>
                                                                 
                                                                 
                                                                  </div>
                                                               </div>
                                                            </div>
                                    
<?php endforeach; ?>
<?php endif; ?>

