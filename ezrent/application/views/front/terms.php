<div class="main">
  <div class="aboutPage clearfix">
    <div class="bradcamp clearfix">
      <div class="mainWrap clearfix">
        <ul>
          <li><a href="<?=route_to('')?>">Home</a></li>
          <li><span>Terms & Conditions</span></li>
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
        <h1 class="titleName"> <?=$terms->title?> </h1>
      </div>
    </div>
    <div class="block clearfix">
      <div class="mainWrap aboutText clearfix">
        <div class="aboutRt full-width">
         <?=$terms->description?>
        </div>
      </div>
    </div>
    
    
    <div class="ourClient clearfix">
      <div class="mainWrap">
        <h2>Our Clients</h2>
        <div class="ourClientList">
        	<?php foreach($our_clients as $val){ ?>
          	<div><a href="javascript:;"><img src="uploads/our_clients/157x120/<?=$val['logo']?>" /></a> </div>
            <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
