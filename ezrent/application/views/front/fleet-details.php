<div class="main">
  <div class="bradcamp clearfix">
    <div class="mainWrap clearfix">
      <ul>
        <li><a href="<?=route_to('')?>">Home</a></li>
        <li><a href="<?=route_to('fleet')?>">Our fleets</a></li>
        <li><span>
          <?=$fleet['title']?>
          </span></li>
      </ul>
    </div>
  </div>
  <div class="mainWrap clearfix">
    <div class="titleName"> Our Fleets </div>
    <div class="fleets clearfix">
      <div class="leftCls fleetLt">
        <div class="fleetOne clearfix">
          <div class="leftCls">
            <h1><span class="text1">
              <?=$fleet['category_title']?>
              </span>
              <?=$fleet['title']?>
            </h1>
          </div>
          <div class="rightCls">
            <div class="bookBtn"><a href="<?=route_to('fleet/booking/'.$fleet['id_fleet'])?>">Book Now </a></div>
          </div> 
        </div>
        <?php if(count($gallery)>0){ ?>
        <div class="fleetSlider clearfix">
          <div class="single-item">
            <?php $index=1;foreach($gallery as $val){ ?>
            <div data-index="<?=$index?>">
              <div class="galleryLargePic" style="background:url(uploads/fleet/gallery/755x395/<?=$val['image']?>) no-repeat center"></div>
            </div>
            <?php $index++;} ?>
          </div>
          <div class="thumb-item">
            <?php $index=1;foreach($gallery as $val){ ?>
            <div><img slide="slide_<?=$index?>" src="uploads/fleet/gallery/124x65/<?=$val['image']?>" alt="<?=$fleet['image_alt']?>"  title="<?=$fleet['image_title']?>"/></div>
            <?php $index++;} ?>
          </div>
        </div>
        <?php } ?>
        <?php if(count($gallery)==0 && !empty($fleet['picture'])){ ?>
        <img src="uploads/fleet/700x417/<?=$fleet['picture']?>" alt="<?=$fleet['image_alt']?>"  title="<?=$fleet['image_title']?>"//><br />
        <br />
        <?php } ?>
        <div class="fleetTwo clearfix">
          <?=$fleet['description']?>
          <br />
        </div>
        <?php
		$charcts = $fleet['characteristics'];
		  	//$charcts = explode(',',$fleet['characteristics']);
			//if(count($charcts)>0){
				if($charcts!=''){
		  ?>
        <div class="fleetThree clearfix">
          <h5>Characteristics </h5>
          <?=$charcts?>
          <!--<ul class="charaList">
            <?php foreach($charcts as $val){ ?>
            <li>
              <?=$val?>
            </li>
            <?php } ?>
          </ul>-->
        </div>
        <?php } ?>
      </div>
      <div class="rightCls fleetRt">
<div class="fleetrtOne clearfix"></div>
        <!--<div class="fleetrtOne clearfix">
          <ul class="fleetrtList">
            <li>Daily <span class="uppercaseTxt">
              <?=$fleet['daily_cost']?>
              </span></li>
            <li>Weekly <span class="uppercaseTxt">
              <?=$fleet['weekly_cost']?>
              </span></li>
            <li>Monthly <span class="uppercaseTxt">
              <?=$fleet['monthly_cost']?>
              </span></li>
          </ul>
        </div>-->
        <div class="enqu clearfix">
          <div class="enquFrom clearfix">
            <h2>Enquire Now</h2>
            <div id="enquireFormHolder">
              <form action="javascript:;" name="" class="contForm">
                <ul>
                  <li>
                    <div class="contFild">
                      <input type="text" placeholder="Full Name" id="name">
                      <span id="nameError" class="formError"></span> </div>
                  </li>
                  <li>
                    <div class="contFild">
                      <input type="email" placeholder="Email" id="email">
                      <span id="emailError" class="formError"></span> </div>
                  </li>
                  <li>
                    <div class="contFild">
                      <input type="text" placeholder="Address" id="address">
                    </div>
                  </li>
                  <li>
                    <div class="contFild">
                      <input type="text" placeholder="Phone" id="phone">
                      <span id="phoneError" class="formError"></span> </div>
                  </li>
                  <li>
                    <div class="contFild">
                      <textarea placeholder="Details" id="details"></textarea>
                    </div>
                  </li>
                  <li>
                  <div class="contFild">
                  <span id="enterCaptchaChar">Please Enter The Characters In The Image</span>
                    <table>
                  		<tr>
                        	<td valign="top"><?=$captcha?></td>
                            <td valign="top"><input type="text" id="captcha" /></td>
                            <td><span id="captchaError" class="formError"></span></td>
                        </tr>  
                    </table>
                  </div>
                </li>
                  <li>
                    <div class="contFild rightCls" id="enquireBtnHolder">
                      <input type="submit" value="Submit" id="enquireBtn">
                      <input type="hidden" id="enquire_url" value="<?=route_to('fleet/enquire')?>" />
                      <input type="hidden" id="id_fleet" value="<?=$fleet['id_fleet']?>" />
                    </div>
                  </li>
                </ul>
              </form>
            </div>
          </div>
        </div>
        <?php $this->load->view('front/newsletter-box'); ?>
      </div>
    </div>
    <div class="block gap40">
      <div class="clearfix">
        <?php $this->load->view('front/booking-search'); ?>
      </div>
    </div>
    <?php if(count($similar_cars)>0){ ?>
    <div class="fleetCars  clearfix">
      <h2 class="titleC">Similar Cars</h2>
      <div class="fleetCar  clearfix">
        <section class="responsive slider">
          <?php foreach($similar_cars as $val){ ?>
          <div>
            <div class="fleetBox">
              <div class="fleetUp"> <a href="<?=route_to('fleet/details/'.$val['id_fleet'])?>">
                <?php if(!empty($val['picture'])){ ?>
                <img src="uploads/fleet/255x127/<?=$val['picture']?>" alt="<?=$val['image_alt']?>"  title="<?=$val['image_title']?>"/>
                <?php } ?>
                <?php if(empty($val['picture'])){ ?>
                <img src="images/front/logo.png" alt="<?=$val['image_alt']?>"  title="<?=$val['image_title']?>"/>
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
        </section>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
