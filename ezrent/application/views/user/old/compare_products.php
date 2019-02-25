<div class="r-fullSide ">
<div class="container">
<div class="header_content">
                    <span><?php if($this->session->userdata("login_id")) {?><?php echo lang('my_account'); ?> : <?php }?><?php echo lang('compare_products'); ?></span>
               </div>
               <!---------- Left Side ----------->
                
                <div class="content">
                <?php if($this->session->userdata("login_id")) {?>
                   <div class="r-fullSide">
      <?php $this->load->view('user/account_menu'); ?>
      </div>
      <?php }?>
<div class="r-CartContainer">


<table border="1" cellpadding="10" cellspacing="0" class="r-shopping-cart">
<?php if(!empty($user_compare_products)) {?>
<tr>
<?php 
foreach($user_compare_products as $pro) {
	?>
    <th><a href="<?php echo route_to('products/details/'.$pro['title_url'.getUrlFieldLanguage()]); ?>"><?php echo $pro['title'.getFieldLanguage()]; ?></a></th>
    <?php }?>
</tr>
<tr>
<?php 
foreach($user_compare_products as $pro) {
	?>
    <td><?php if(!empty($pro['gallery'])) {?>
        	<a href="<?php echo route_to('products/details/'.$pro['title_url'.getUrlFieldLanguage()]); ?>">
            <img align="top" style="max-width:90%" src="<?php echo base_url(); ?>uploads/products/gallery/120x120/<?php echo $pro['gallery'][0]['image']; ?>" title="<?php echo $pro['title'.getFieldLanguage()]; ?>" alt="<?php echo $pro['title'.getFieldLanguage()]; ?>" />
            </a>
        <?php }?></a></td>
    <?php }?>
</tr>
<?php if($this->session->userdata('login_id') != '') {?>
<tr>
<?php 
foreach($user_compare_products as $pro) {
	?>
    <td>
    <?php if(isset($pro['stock']) && !empty($pro['stock'])) {
		$stock = $pro['stock'];?>
        <span style="color:#ff8500">Prices:</span> <br /><br />
        <?php
		foreach($stock as $stck) {
			$list_price = $stck['list_price'];
			$price = $stck['price'];
			$discount = $stck['discount'];
			$discount_expiration = $stck['discount_expiration'];
			$hide_price = $stck['hide_price'];
		?>
        <?php if($hide_price == 0) {?><?php $stock_name = unSerializeStock($stck['combination']); if(!empty($stock_name)) { foreach($stock_name as $val) echo '<strong>'.$val.':</strong> ';}?>
					   <?php if(displayWasCustomerPrice($list_price) != displayCustomerPrice($list_price,$discount_expiration,$price)) {?>
                       Was <?php echo changeCurrency(displayWasCustomerPrice($list_price)); ?> New
                     <?php echo changeCurrency(displayCustomerPrice($list_price,$discount_expiration,$price)); ?>
					   <?php } else {?>
                      <?php echo changeCurrency(displayCustomerPrice($list_price,$discount_expiration,$price)); ?>
                       <?php }?> 
                       <?php } ?><br />
        
        
    <?php }} else {
		$list_price = $pro['list_price'];
		$price = $pro['price'];
		$discount = $pro['discount'];
		$discount_expiration = $pro['discount_expiration'];
		$hide_price = $pro['hide_price'];
		?>
              <?php if($hide_price == 0) {?><span style="color:#ff8500">Price: </span>
					   <?php if(displayWasCustomerPrice($list_price) != displayCustomerPrice($list_price,$discount_expiration,$price)) {?>
                       was <?php echo changeCurrency(displayWasCustomerPrice($list_price)); ?>
                     <?php echo changeCurrency(displayCustomerPrice($list_price,$discount_expiration,$price)); ?>
					   <?php } else {?>
                      <?php echo changeCurrency(displayCustomerPrice($list_price,$discount_expiration,$price)); ?>
                       <?php }?> 
                       <?php } else { ?> <a onclick="CallEnquiryForm(<?php echo $pro['id_products']; ?>)" class=""><?php echo lang("send_enquiry"); ?></a><?php }?><br />
    <?php }?>
	
	   </td>
    <?php }?>
</tr>
<?php } else {?>
<tr><td colspan="4"> <a class="r-Button more" style="width:98%" href="<?php echo route_to('user/login'); ?>">To view price: <?php echo lang('login_register'); ?></a></td></tr>
<?php }?>
<tr>
<?php 
foreach($user_compare_products as $pro) {
	?>
    <td><?php echo $pro['features'.getFieldLanguage()]; ?></td>
    <?php }?>
</tr>
<tr>
<?php 
foreach($user_compare_products as $pro) {
	?>
    <td><a href="<?php echo route_to('user/removecompareProducts/'.$pro['id_products']); ?>"><img src="<?php echo base_url(); ?>images/delete.png" /></a></td>
    <?php }?>
</tr>
<?php } else {?>
<tr>
<td colspan="4" align="center">
<?php echo lang('no_compare'); ?>
</td>
</tr>
<?php }?>
</table>




</div>

</div>
</div>
</div>
