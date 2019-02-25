<div class="main">
  <div class="bookPage clearfix">
    <div class="bradcamp clearfix">
      <div class="mainWrap clearfix">
        <ul>
          <li><a href="<?=route_to('')?>">Home</a></li>
          <li><span>Our Offers</span></li>
        </ul>
      </div>
    </div>
    <div class="block clearfix">
      <div class="mainWrap clearfix">
        <h1 class="titleName"> Our Offers </h1>
      </div>
    </div>
    <div class="block clearfix">
      <div class="mainWrap clearfix">
<?php if(!empty($fleet)) {?>
        <div class="tableRes">
          <table width="100%" border="1" class="table tableOffer">
            <thead>
              <tr>
                <td align="left" valign="top">&nbsp;</td>
                <td align="left" valign="top"><div class="tableHd">
                    <h4>Daily Rate</h4>
                    <p>Price in AED</p>
                  </div></td>
                <td align="left" valign="top"><div class="tableHd">
                    <h4>Weekly Rate</h4>
                    <p>Price in AED</p>
                  </div></td>
                <td align="left" valign="top"><div class="tableHd">
                    <h4>Monthly Rate</h4>
                    <p>Price in AED</p>
                  </div></td>
              </tr>
            </thead>
            <tbody>
              <?php foreach($fleet as $val){ ?>
              <tr>
                <td align="left" valign="middle">
<?php if(!empty($val['picture_offer'])){ ?><div class="tabImg"><img src="uploads/fleet/255x127/<?=$val['picture_offer']?>" width="95" alt="<?=$val['image_alt']?>"  title="<?=$val['image_title']?>" /></div><?php } ?>
                  <div class="tabTitle">
                    <h5><?=$val['title']?></h5>
                  </div>
                  <div class="tabBtn">
                    <a href="<?=route_to('fleet/booking/'.$val['id_fleet'])?>"><button type="button">Book Now</button></a>
                  </div></td>
                <td align="left" valign="middle">
<?php if(!empty($val['daily_offer_details'])) {?>
<span class="ratTi"><?=strtoupper($val['daily_offer_details'])?> <span>/ Day</span></span> <br/>
                  Was <?=$val['daily_cost']?><?php }?>
</td>
                <td align="left" valign="middle"><?php if(!empty($val['weekly_offer_details'])) {?><span class="ratTi"><?=strtoupper($val['weekly_offer_details'])?> <span>/ Week</span></span> <br/>
                  Was <?=$val['weekly_cost']?><?php }?></td>
                <td align="left" valign="middle"><?php if(!empty($val['monthly_offer_details'])) {?><span class="ratTi"><?=strtoupper($val['monthly_offer_details'])?> <span>/ Month</span></span> <br/>
                  Was <?=$val['monthly_cost']?><?php }?></td>
              </tr>
              <?php } ?>

            </tbody>
          </table>

        </div>
<?php } else {?>
<div class="coming-soon">Coming Soon...</div>
<?php }?>

      </div>
    </div>
    <div class="block gap40 clearfix">
      <div class="mainWrap clearfix">
        <?php $this->load->view('front/booking-search'); ?>
      </div>
    </div>
  </div>
</div>
