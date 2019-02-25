<?php
	$third_seg = $this->uri->segment(3);
?>

<div class="main">
  <div class="bookPage clearfix">
    <div class="bradcamp clearfix">
      <div class="mainWrap clearfix">
        <ul>
          <li><a href="<?=route_to('')?>">Home</a></li>
<?php if(isset($category)) {?>
 <li><a href="<?=route_to('fleet')?>">Our Fleets</a></li>
 <li><span><?php echo $category['title']; ?></span></li>
<?php } else { ?>
          <li><span>Our Fleets</span></li><?php }?>
        </ul>
      </div>
    </div>
    <div class="block clearfix">
      <div class="mainWrap clearfix">
        <h1 class="titleName noLine"><?php if(isset($category)) {?><?php echo $category['title']; ?><?php } else {?>Our Fleets<?php }?></h1>
      </div>
    </div>
    <div class=" fleets clearfix">
      <div class="mainWrap clearfix">
        <div class="filtOption text-center">
          <ul class="vendors">
            <li> <a href="<?=route_to('fleet')?>">
              <button class="btn btn-xs btn-primary notActiveByDefault <?php if(!isset($category))echo "active"; ?>">All Cars</button>
              </a> </li>
            <?php foreach($categories as $val){ ?>
            <li> <a href="<?=route_to('fleet/category/'.$val['id_category'])?>">
              <button class="btn btn-xs btn-primary <?php if(isset($category) && $category['id_category'] ==$val['id_category'])echo "active"; ?>">
              <?=$val['title']?>
              </button>
              </a> </li>
            <?php } ?>
          </ul>
        </div>

<?php if(isset($category) && !empty($category['description'])) {?>
 <div class="block clearfix"><div class="desc"><?php echo $category['description']; ?></div></div>
<?php }?>

        <div class="filtBox clearfix">
          <div class="product-carousel">
            <?php foreach($fleet as $val){?>
            <div class=" item">
              <div class="fleetBox">
                <div class="fleetUp"> <a href="<?=route_to('fleet/details/'.$val['id_fleet'])?>">
                  <?php if(!empty($val['picture'])){ ?>
                  <img src="uploads/fleet/255x127/<?=$val['picture']?>" alt="<?=$val['image_alt']?>"  title="<?=$val['image_title']?>" />
                  <?php } ?>
                  <?php if(empty($val['picture'])){ ?>
                  <img src="images/front/logo1.png" alt="<?=$val['image_alt']?>"  title="<?=$val['image_title']?>"/>
                  <?php } ?>
                  </a> </div>
                <div class="fleetDw">
                  <h3><a href="<?=route_to('fleet/details/'.$val['id_fleet'])?>">
                    <?=$val['title']?>
                    </a></h3>
                  <div class="fleeDiv"><!--<span class="uppercaseTxt">
                    <?=$val['daily_cost']?>
                    </span> per day --></div>
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
</div>
