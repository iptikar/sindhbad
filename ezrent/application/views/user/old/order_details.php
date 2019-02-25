<div class="about_content bg_color4 contact">
<div class="container">
 <div class="header_content">
                    <span><?php echo lang('my_account'); ?> : <?php echo lang('order_details'); ?></span>
               </div>
               <!---------- Left Side ----------->
                <div class="content">
                 <div class="r-fullSide">
      <?php $this->load->view('user/account_menu'); ?>
     </div><div class="r-fullSide">
     <a class="print" target="_blank" href="<?php echo route_to('user/invoice/'.$order_details['id_orders']); ?>"><?php echo lang('invoice'); ?></a>
     <div class="r-orderDetailsBlock">
<div class="left-label"><?php echo lang('order_id'); ?><span class="dots">:</span></div> <div class="right-label"><?php echo $order_details['id_orders']; ?></div>
<div class="r-clear"></div>
<div class="left-label"><?php echo lang('created_date'); ?><span class="dots">:</span></div> <div class="right-label"><?php echo $order_details['created_date']; ?></div>
<!--<div class="left-label"><?php echo lang('amount'); ?><span class="dots">:</span></div> <div class="right-label"><?php echo changeCurrency($order_details['amount']); ?></div>-->
<div class="left-label"><?php echo lang('payment_method'); ?><span class="dots">:</span></div> <div class="right-label"><?php echo $order_details['paymentmethod']['title']; ?></div>
<div class="left-label"><?php echo lang('status'); ?><span class="dots">:</span></div> <div class="right-label"><?php echo lang($order_details['status']); ?></div>
<?php if($order_details['status'] == 'paid') {?>
<div class="left-label"><?php echo lang('payment_date'); ?><span class="dots">:</span></div> <div class="right-label"><?php echo $order_details['payment_date']; ?></div>
<?php }?>
<?php if(!empty($order_details['comments'])) {?>
<div class="left-label"><?php echo lang('order_comments'); ?><span class="dots">:</span></div> <div class="right-label"><?php echo $order_details['comments']; ?></div>
<?php }?>
  </div>

</div>
<div class="r-CartContainer">
<table border="1" cellspacing="0" cellpadding="10" class="r-shopping-cart">
<tr>
    <th><?php echo lang('cart_product_name'); ?></th>
    <th><?php echo lang('cart_product_price'); ?></th>
    <th><?php echo lang('cart_product_quantity'); ?></th>
    <th><?php echo lang('cart_total_price'); ?></th>
</tr>
<?php 
$line_items = $order_details['line_items'];
if(!empty($line_items)) {?>
<?php 
$net_price = 0;
foreach($line_items as $pro) {
	?>
<tr>
    <td>
		<?php if(!empty($pro['product']['gallery'])) {?>
        <div class="img">
        	<a href="<?php echo route_to('products/details/'.$pro['product']['title_url'.getUrlFieldLanguage()]); ?>">
            <img align="top" width="50" src="<?php echo base_url(); ?>uploads/products/gallery/120x120/<?php echo $pro['product']['gallery'][0]['image']; ?>" title="<?php echo $pro['product']['title'.getFieldLanguage()]; ?>" alt="<?php echo $pro['product']['title'.getFieldLanguage()]; ?>" />
            
            </a>
            </div>
        <?php }?>
        <div class="title">
        <?php 
    $product_name = '';
	if(empty($pro['product']['sku'])) 
	$product_name = '';
	else
	$product_name = $pro['product']['sku'];
	if(!empty($pro['options'])) {
	    $options = $pro['options'.getFieldLanguage()];
		$options = unSerializeStock($options);
		$product_name .= ', ';
		$c = count($options);
		$i=0;
		foreach($options as $key => $opt) {
			$i++;
			$product_name .= $opt;
			if($i != $c) $product_name .= ' - ';
		}
	}
	?>
	<a href="<?php echo route_to('products/details/'.$pro['product']['title_url'.getUrlFieldLanguage()]); ?>"><?php echo $pro['product']['title'.getFieldLanguage()]; ?></a>
    </div>
    </td>
    <td><?php echo $pro['price_currency'].' '.lang($pro['currency']); ?></td>
    <td><?php echo $pro['quantity']; ?></td>
    <td><?php echo $pro['total_price_currency'].' '.lang($pro['currency']); ?></td>
</tr>
<?php }?>
<?php }?>
</table>
</div>
<?php if(!empty($line_items)) {?>
<div class="r-fullSide ">
<div class="r-cartNetPrices">
<table border="1" cellpadding="10" cellspacing="0">
<tr>
<td>
<span><?php echo lang('cart_total_price'); ?>:</span></td>
<td><?php echo $order_details['total_price_currency'].' '.lang($order_details['currency']); ?></td>
</tr>
<tr>
<td>
<span><?php echo lang('discount'); ?>:</span></td>
<td><?php echo $order_details['discount'].' '.lang($order_details['currency']); ?></td>
</tr>
<tr>
<td>
<span><?php echo lang('cart_net_price'); ?>:</span></td>
<td><?php echo $order_details['amount_currency'].' '.lang($order_details['currency']); ?></td>
</tr>
<?php if($order_details['currency'] != $order_details['default_currency']) {?>
<tr>
<td>
<span><?php echo lang('amount').' in '.$orderData['default_currency']; ?>:</span></td>
<td><?php echo $order_details['amount'].' '.lang($order_details['default_currency']); ?></td>
</tr>
<?php }?>
</table>
</div>
</div>

<?php }?>


</div>
</div>
</div>
