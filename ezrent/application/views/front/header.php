<?php

	$first_seg = $this->uri->segment(1);
$third_seg = $this->uri->segment(3);
	$active = "class='active'";
?>

<header class="header">
  <div class="headerTop">
    <div class="mainWrap clearfix">
      <div class="socialMediaSec">
        <div class="socialMedia leftCls">
          <ul>
            <?php if(!empty($settings->facebook)){ ?><li><a class="icon1" href="<?=$settings->facebook?>" target="_blank"></a></li><?php } ?>
            <?php if(!empty($settings->twitter)){ ?><li><a class="icon2" href="<?=$settings->twitter?>" target="_blank"></a></li><?php } ?>
            <?php if(!empty($settings->google_plus)){ ?><li><a class="icon3" href="<?=$settings->google_plus?>" target="_blank"></a></li><?php } ?>
            <?php if(!empty($settings->linkedin)){ ?><li><a class="icon4" href="<?=$settings->linkedin?>" target="_blank"></a></li><?php } ?>
            <?php if(!empty($settings->instagram)){ ?><li><a class="icon5" href="<?=$settings->instagram?>" target="_blank"></a></li><?php } ?>
          </ul>
        </div>
        <div class="emailCall leftCls">
          <div class="callEmailText leftCls"> <a href="tel:800397368"><span>Toll-Free</span>
            <?=$settings->toll_free?>
            </a> </div>
          <div class="callEmailText leftCls"> <a href="mailto:<?=$settings->email?>"><span>Email</span>
            <?=$settings->email?>
            </a> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="headerBtm">
    <div class="mainWrap clearfix">
      <div class="logo leftCls"><a href="<?=route_to('')?>"><img src="images/front/logo.png" alt="logo"/></a></div>
      <div class="rightHeader rightCls">
        <div class="navigationSec navbar">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <ul class="collapse navbar-collapse" id="myNavbar">
            <li <?php if(empty($first_seg)||$first_seg=='home')echo $active; ?>><a href="<?=route_to('')?>">Home</a></li>
            <li <?php if($first_seg=='about')echo $active; ?>><a href="<?=route_to('about')?>">About Us</a></li>
            <li <?php if($first_seg=='services')echo $active; ?> <?php if($this->router->class == "service" || isset($serv)) {?>class="active"<?php }?>>
<a href="<?=route_to('services')?>">Our Services</a>

<? $services = $this->front_model->getAllRecords('services')?>
    <ul>
    <? foreach($services as $val){?>
      <li <?php if( $this->router->class == "service" || $first_seg==$val['title_url'])echo $active; ?>><a   href="<?php echo route_to('services/details/'.$val['id_services']); ?>"><?php echo $val['title']?></a></li>
    <? }?>
    </ul>
</li>






            <li <?php if(($first_seg=='fleet')||(isset($current_page)&&$current_page=='fleet'))echo $active; ?>><a href="<?=route_to('fleet')?>">Our Fleet</a></li>
            <li <?php if($first_seg=='offers')echo $active; ?>><a href="<?=route_to('offers')?>">our offers</a></li>
            <li <?php if($first_seg=='news'||(isset($current_page)&&$current_page=='news'))echo $active; ?>><a href="<?=route_to('news')?>">News & events</a></li>
            <li <?php if($first_seg=='blog'||(isset($current_page)&&$current_page=='blog'))echo $active; ?>><a href="<?=route_to('blog')?>">Blog</a></li>
            <li <?php if($first_seg=='faq')echo $active; ?>><a href="<?=route_to('faq')?>">FAQ</a></li>
            <li <?php if($first_seg=='contact')echo $active; ?>><a href="<?=route_to('contact')?>">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>