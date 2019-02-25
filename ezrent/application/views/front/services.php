<div class="main">
  <div class="aboutPage clearfix">
    <div class="bradcamp clearfix">
      <div class="mainWrap clearfix">
        <ul>
          <li><a href="#">Home</a></li>
          <li><span>Our Services</span></li>
        </ul>
      </div>
    </div>
    <div class="block clearfix">
      <div class="mainWrap clearfix">
        <h1 class="titleName"> Our Services </h1>
      </div>
    </div>
    <div class="block clearfix">
      <div class="mainWrap serviceSlid clearfix">
        <section class="serviceSlider slider">
          <div class="item">
            <?php foreach($services as $val){ ?>
            <div class="serviceItem">
              <?php if(!empty($val['picture'])){ ?><div class="leftCls">
              
              <a href="<?=route_to('services/details/'.$val['id_services'])?>">


              <img src="uploads/services/382x166/<?=$val['picture']?>" alt="<?=$val['image_alt']?>"  title="<?=$val['image_title']?>"></a></div><?php } ?>
              <div class="rightCls  <?php if(empty($val['picture']))echo "full-width";?>">


                <h3><a href="<?=route_to('services/details/'.$val['id_services'])?>"><?=$val['title']?></a></h3>
                
                
               <p><?=strip_tags(character_limiter($val['description'],150))?></p>
              </div>
            </div>
            <?php } ?>
          </div>
        </section>
      </div>
    </div>
    <div class="ourClient clearfix">
      <div class="mainWrap">
        <h2>Our Clients</h2>
        <div class="ourClientList">
        	<?php foreach($our_clients as $val1){ ?>
          	<div><a href="javascript:;"><img src="uploads/our_clients/157x120/<?=$val1['logo']?>" alt="<?=$val1['image_alt']?>"  title="<?=$val1['image_title']?>" /></a> </div>
            <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>