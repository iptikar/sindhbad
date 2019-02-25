<div class="main">
  <div class="aboutPage clearfix">
    <div class="bradcamp clearfix">
      <div class="mainWrap clearfix">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="<?=route_to('services')?>">Our Services</a></li>
          <li><span><?=$seo['title']?></span></li>
        </ul>
      </div>
    </div>
    <div class="block clearfix">
      <div class="mainWrap clearfix">
        <span class="titleName"> Our Services </span>
<a href="<?=route_to('services')?>" class="back_serv"> << back</a>
      </div>
    </div>
    <div class="block clearfix">
      <div class="mainWrap serviceSlid clearfix">
        <section class="serviceSlider slider">
          <div class="item">
            <div class="serviceItem">
              <?php if(!empty($seo['picture'])){ ?><div class="leftCls">
      
              <img src="uploads/services/382x166/<?=$seo['picture']?>" alt="<?=$seo['image_alt'];?>"  title="<?=$seo['image_title'];?>"></div><?php } ?>
              <div class="rightCls <?php if(empty($seo['picture']))echo "full-width";?>" >
                <h1><?=$seo['title']?></h1>
                <?=$seo['description']?>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <div class="ourClient clearfix">
      <div class="mainWrap">
        <h2>Our Clients</h2>
        <div class="ourClientList">
        	<?php foreach($our_clients as $val){ ?>
          	<div><a href="javascript:;"><img src="uploads/our_clients/157x120/<?=$val['logo']?>"  alt="<?=$val['image_alt']?>"  title="<?=$val['image_title']?>"/></a> </div>
            <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>