<div class="main">
  <div class="aboutPage clearfix">
    <div class="bradcamp clearfix">
      <div class="mainWrap clearfix">
        <ul>
          <li><a href="<?=route_to('')?>">Home</a></li>
          <li><span>about us</span></li>
        </ul>
      </div>
    </div>
    <div class="block clearfix">
      <div class="mainWrap clearfix">
        <?php $this->load->view('front/booking-search'); ?>
      </div>
    </div>
    <div class="block clearfix">
      <div class="mainWrap clearfix">
        <h1 class="titleName"> About Rent A Car </h1>
      </div>
    </div>
    <div class="block clearfix">
      <div class="mainWrap aboutText clearfix">
        <?php if(!empty($about->image)){ ?><div class="aboutLt">
          <div class="bgImg"> <img src="uploads/dynamic_pages/557x286/<?=$about->image?>" width="100%"  alt="<?=$about->image_alt?>"  title="<?=$about->image_title?>"/> </div>
        </div><?php } ?>
        <div class="aboutRt" <?php if(empty($about->image))echo "style='width:100%'"; ?>
         <?=$about->description?>
        </div>
      </div>
    </div>
    <div class="block grayBg nobor clearfix">
      <div class="mainWrap">
        <div class="fleetText">
          <h2>Our Fleet</h2>
          <?=$our_fleet->description?>
          <h2>Our Philosophy</h2>
          <?=$our_philosophy->description?>
        </div>
      </div>
    </div>
    <div class="ourValue clearfix">
      <div class="mainWrap">
        <h2 class="titleName">Our Value Proposition </h2>
        <div class="ourvalueSlider">
          <section class="responsive slider">
            <?php foreach($our_value as $val){ ?>
            <div>
              <h3><?=$val['title']?></h3>
              <?=$val['description']?>
            </div>
            <?php } ?>
          </section>
        </div>
      </div>
    </div>
    <div class="ourClient clearfix">
      <div class="mainWrap">
        <h2>Our Clients</h2>
        <div class="ourClientList">
        	<?php foreach($our_clients as $val){ ?>
          	<div><a href="javascript:;"><img src="uploads/our_clients/157x120/<?=$val['logo']?>" alt="<?=$val['title']?>" /></a> </div>
            <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
