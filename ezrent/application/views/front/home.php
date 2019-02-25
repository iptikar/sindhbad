<div class="bannerSec">
  <div id="bannerSldier" class="bannerSlider">
    <?php foreach($slider as $val){ ?>
    <div class="item">
      <div class="banIn"><img src="uploads/fleet/700x417/<?=$val['picture_offer']?>" alt="<?=$val['image_alt']?>"  title="<?=$val['image_title']?>"/>
        <div class="bannerCaption">
          <h4 class="bannerText1">
            <?=$val['title']?>
          </h4>
          <?php if(!empty($val['daily_offer_details'])){?>
          <h3 class="bannerText2"><span class="uppercaseTxt">
            <?=$val['daily_offer_details']?>
            </span> per day</h3>
            <?php } ?>
          <span class="bookNow"><a href="<?=route_to('fleet/booking/'.$val['id_fleet'])?>">Book Now<i></i></a></span> </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
<div class="main">
  <div class="block">
    <div class="mainWrap clearfix">
      <?php $this->load->view('front/booking-search'); ?>
    </div>
  </div>
  <div class="block welcomePart">
    <div class="mainWrap clearfix">
      <div class="welComeLt leftCls">
        <h1>Welcome to EZ Rent A Car</h1>
        <?=$about->description?>
      </div>
      <?php $this->load->view('front/newsletter-box'); ?>
    </div>
  </div>
  <div class="block clearfix">
    <div class="filter fleets homePage clearfix">
      <h2 class="titleName noLine"> Our Fleet</h2>
      <div class="mainWrap clearfix">
        <div class="filtOption text-center">
          <ul class="vendors">
            <li id="allcars">
              <button class="btn btn-xs btn-primary product-button">All Cars</button>
            </li>
            <?php foreach($categories as $val){ ?>
            <li id="<?=str_replace(" ","_",$val['title']);?>">
              <button class="btn btn-xs btn-primary product-button">
              <?=$val['title']?>
              </button>
            </li>
            <?php } ?>
          </ul>
        </div>
        <div class="filtBox clearfix">
          <div class="product-carousel">
            <?php foreach($fleet as $val){ ?>
            <div class="filter-allcars filter-<?=str_replace(" ","_",$val['category_title']);?> item">
              <div class="fleetBox">
                <div class="fleetUp"> <a href="<?=route_to('fleet/details/'.$val['id_fleet'])?>">
                
                  <?php if(!empty($val['picture'])){ ?>
                  <img src="uploads/fleet/255x127/<?=$val['picture']?>"  alt="<?=$val['image_alt']?>"  title="<?=$val['image_title']?>" />
                  <?php } ?>
                  <?php if(empty($val['picture'])){ ?>
                  <img src="data:image/png;base64,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
"  alt="<?=$val['image_alt']?>"  title="<?=$val['image_title']?>" />
                  <?php } ?>              
                
                </a> </div>
                <div class="fleetDw">
                  <h3><a href="<?=route_to('fleet/details/'.$val['id_fleet'])?>">
                    <?=$val['title']?>
                    </a></h3>
                  <div class="fleeDiv"><!--<span class="uppercaseTxt">
                    <?=$val['daily_cost']?>
                    </span> per day--> </div>
                  <div class="bookBtn"> <a href="<?=route_to('fleet/booking/'.$val['id_fleet'])?>">Book Now</a> </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="block clearfix homeBlock">
    <div class="mainWrap clearfix">
      <div class="nwsBtm">
        <h3 class="text-center">Our Blog</h3>
        <div class="nwsBox postSldier1 clearfix">
          <?php foreach($blog as $val){
					$date = new DateTime($val['blog_date']);
			?>
          <div>
            <div class="imgDiv"><a href="<?=route_to('blog/details/'.$val['id_blog'])?>"><img src="uploads/blog/354x188/<?=$val['picture']?>"  alt="<?=$val['image_alt']?>"  title="<?=$val['image_title']?>" /></a></div>
            <?php if($val['blog_date']!='0000-00-00'){ ?>
            <span>
            <?=$date->format('M d, Y')?>
            </span>
            <?php } ?>
            <h4>
              <a href="<?=route_to('blog/details/'.$val['id_blog'])?>"><?=$val['title']?></a>
            </h4>
            <p><?=strip_tags(character_limiter($val['description'],150))?></p>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
