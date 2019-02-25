<ul class="r-userMenu">
    <li class="<?php if($this->router->class == 'user' && $this->router->method == 'index') {?>active<?php }?>"><a href="<?php echo route_to('user'); ?>"><?php echo lang('my_account'); ?></a></li>
	<li class="<?php if($this->router->class == 'user' && $this->router->method == 'profile') {?>active<?php }?>"><a href="<?php echo route_to('user/profile'); ?>"><?php echo lang('edit_profile'); ?></a></li>
    <li class="<?php if($this->router->class == 'user' && $this->router->method == 'orders') {?>active<?php }?>"><a href="<?php echo route_to('user/orders'); ?>"><?php echo lang('orders_history'); ?></a></li>
<!--    <li class="<?php if($this->router->class == 'user' && $this->router->method == 'favorites') {?>active<?php }?>"><a href="<?php echo route_to('user/favorites'); ?>"><?php echo lang('my_favorites'); ?></a></li>-->
    <li class="<?php if($this->router->class == 'user' && $this->router->method == 'compareProducts') {?>active<?php }?>"><a href="<?php echo route_to('user/compareProducts'); ?>"><?php echo lang('compare_products'); ?></a></li>
</ul>