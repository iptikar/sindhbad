<ul class="row userMenu">
    <li class="<?php if($this->router->class == 'user' && ($this->router->method == 'login' || $this->router->method == 'index')) {?>active<?php }?>"><a href="<?php echo route_to('user/login'); ?>"><?php echo lang('login'); ?></a></li>
	<li class="<?php if($this->router->class == 'user' && $this->router->method == 'register') {?>active<?php }?>"><a href="<?php echo route_to('user/register'); ?>"><?php echo lang('register'); ?></a></li>
    <li class="<?php if($this->router->class == 'user' && $this->router->method == 'password') {?>active<?php }?>"><a href="<?php echo route_to('user/password'); ?>"><?php echo lang('forget_password'); ?></a></li>
</ul>