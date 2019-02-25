<div class="row cartTable">
<div class="cartRow">
    <div class="cartCell head product_name"><?php echo lang('cart_product_name'); ?></div>
    <div class="cartCell head product_id"><?php echo lang('cart_product_price'); ?></div>
    <div class="cartCell head total_price triple"><?php echo lang('cart_total_price'); ?></div>
 <div class="cartCell head cart_remove"><?php echo lang('cart_remove'); ?></div>
</div>

<?php if(!empty($user_favorites)) {?>
<?php $i=0;foreach($user_favorites as $fav) {$i++;?>
<div class="cartRow">
    <div class="cartCell product_name">
        <?php if(!empty($fav['gallery'])) {?>
        <div class="img">
        	<a href="<?php echo route_to('products/details/'.$fav['title_url'.getUrlFieldLanguage($lang)]); ?>">
            <img align="top" width="50" src="<?php echo base_url(); ?>uploads/products/gallery/120x120/<?php echo $fav['gallery'][0]['image']; ?>" title="<?php echo $fav['title'.getFieldLanguage($lang)]; ?>" alt="<?php echo $fav['title'.getFieldLanguage($lang)]; ?>" />
            </a>
            </div>
        <?php }?>
        <div class="title">
	<a href="<?php echo route_to('products/details/'.$fav['title_url'.getUrlFieldLanguage($lang)]); ?>"><?php echo $fav['title']; ?></a>
    <?php if(!empty($fav['cart_options'])) { echo '<div class="cart_options">';
		$cart_options = $fav['cart_options'];
		$i=0;
		$c = count($cart_options);
		foreach($cart_options as $opt) {
			$i++;
			echo $opt['attr_label'.getFieldLanguage($lang)].': <span>'.$opt['title'.getFieldLanguage($lang)].'</span>';
			if($i != $c) echo '<br />';
	?>
    <?php }echo '</div>';}?>
    </div>
<!--<a href="<?php //echo route_to('products/details/'.$fav['title_url']); ?>"><?php //echo $fav['title']; ?></a>-->
</div>
    <div class="cartCell product_id"><?php echo changeCurrency($fav['price']); ?></div>
    <div class="cartCell total_price triple">
    	<form action="<?php echo route_to('cart/add'); ?>" method="post">
        	<input type="hidden" name="product_id" value="<?php echo $fav['id_products']; ?>" />
             <?php 
			 if(isset($cart_options) && !empty($cart_options)) { ?>
                	<?php 
					foreach($cart_options as $key=>$value) { 
					?>
                    <input type="hidden" name="options[]" value="<?php echo $value['id_attribute_options']; ?>" />
					<?php }?>
				<?php } ?>
            <input type="submit" class="submit left" value="<?php echo lang('add_to_cart'); ?>" />
        </form>
    </div>
    <div class="cartCell cart_remove"><a href="<?php echo route_to('user/removeFavorite/'.$fav['id_products']); ?>"><img src="<?php echo base_url(); ?>images/delete.png" /></a></div>
</div>
<?php }?>
<?php } else {?>
<div class="cartRow centerText">
<?php echo lang('no_favorites'); ?>
</div>
<?php }?>

</div>