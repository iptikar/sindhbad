<div class="about_content bg_color4 contact">
<div class="container">
 <div class="header_content">
                    <span><?php echo lang('my_account'); ?> : <?php echo lang('orders'); ?></span>
               </div>
               <!---------- Left Side ----------->
                <div class="content">
                 <div class="r-fullSide">
      <?php $this->load->view('user/account_menu'); ?>
      </div>
      <div class="r-CartContainer">
<table border="1" cellpadding="10" cellspacing="0" class="r-shopping-cart">
<tr>
    <th><?php echo lang('order_id'); ?></th>
    <th><?php echo lang('created_date'); ?></th>
    <th><?php echo lang('amount'); ?></th>
    <th><?php echo lang('status'); ?></th>
    <th><?php echo lang('order_operations'); ?></th>
    
</tr>
<?php if(!empty($user_orders)) {?>
<?php foreach($user_orders as $order) {?>
<tr>
    <td><?php echo $order['id_orders']; ?></td>
    <td><?php echo $order['created_date']; ?></td>
    <td><?php echo changeCurrency($order['amount']); ?></td>
    <td><?php echo lang($order['status']); ?></td>
    <td><a href="<?php echo route_to('user/orders/'.$order['id_orders']); ?>"><?php echo lang('view'); ?></a></td>
</tr>
<?php }?>
<?php } else {?>
<tr>
<td colspan="5" align="center">
<?php echo lang('no_orders'); ?>
</td>
</tr>
<?php }?>
</table>
</div>
</div>
</div>
</div>