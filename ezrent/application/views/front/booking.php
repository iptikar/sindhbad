<div class="main">
  <div class="bookPage clearfix">
    <div class="bradcamp clearfix">
      <div class="mainWrap clearfix">
        <ul>
          <li><a href="<?=route_to('')?>">Home</a></li>
          <li><span>Book Your Favorite Car</span></li>
        </ul>
      </div>
    </div>
    <div class="block clearfix">
      <div class="mainWrap clearfix">
        <h1 class="titleName"> Book Your Favorite Car </h1>
      </div>
    </div>
    <div class="bookTab clearfix">
      <div class="mainWrap clearfix">
        <ul class="tabs">
          <?php if(!$is_submitted){ ?>
          <li class="tab-link current" data-tab="tab-1">Date</li>
          <?php } ?>
          <?php if($is_submitted){ ?>
          <li class="tab-link current" data-tab="tab-2">Vehicle</li>
          <?php } ?>
          <li class="tab-link" data-tab="tab-3" id="bookingTab">Book</li>
        </ul>
        <div id="selectedFleetHolder" class="<?php if($is_submitted)echo "displayNone"; ?>">
          <h2>Selected fleet</h2>
          <div class="mb50">
            <table>
              <tr>
                <td>
<?php if($selected_fleet->is_offer == 0 && !empty($selected_fleet->picture)) {?><img src="uploads/fleet/255x127/<?php if(!$is_submitted && !empty($selected_fleet->picture))echo $selected_fleet->picture;?>" id="selectedFleetPic" /><?php }?>

<?php if($selected_fleet->is_offer == 1 && !empty($selected_fleet->picture_offer)) {?><img src="uploads/fleet/255x127/<?php if(!$is_submitted && !empty($selected_fleet->picture_offer))echo $selected_fleet->picture_offer;?>" id="selectedFleetPic" /><?php }?>

</td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><span id="selectedFleetTitle">
                  <?php if(!$is_submitted)echo $selected_fleet->title;?>
                  </span> <br />
                  To choose another car, visit the <a href="<?=route_to('fleet')?>">fleet page</a></td>
              </tr>
            </table>
            <div class="prices">
              <style type="text/css">
              .prices_table tr th{font-weight:bold;}
                .prices_table tr th, .prices_table tr td{text-align:center; color:#ed6323;padding:13px; border:1px solid #ed6323;}                
                .prices_table tr td:hover{background-color: #eee;}
              </style>
              <table class="prices_table" style="margin-top:18px;">
                <tr>
                  <th>Daily Price</th>
                  <th>Weekly Price</th>
                  <th>Monthly Price</th>
                </tr>                
                <tr>
                  <td><?php echo $selected_fleet->daily_cost;?> AED</td>
                  <td><?php echo $selected_fleet->weekly_cost;?> AED</td>
                  <td><?php echo $selected_fleet->monthly_cost;?> AED</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div id="selectedDateLoc" class="<?php if(!$is_submitted)echo "displayNone"; ?>">
          <h2>Selected locations & dates</h2>
          <div class="mb50">
            <table>
              <tr>
                <td>Pick-up location: </td>
                <td><span class="selecttedDL" id="selectedPickupLoc">
                  <?php if($is_submitted)echo $pickup_location?>
                  </span></td>
              </tr>
              <tr>
                <td>Pick-up date: </td>
                <td><span class="selecttedDL" id="selectedPickupDate">
                  <?php if($is_submitted)echo $pickup_date?>
                  </span></td>
              </tr>
              <tr>
                <td>Drop-off location: </td>
                <td><span class="selecttedDL" id="selectedDropoffLoc">
                  <?php if($is_submitted)echo $dropoff_location?>
                  </span></td>
              </tr>
              <tr>
                <td>Drop-off date: </td>
                <td><span class="selecttedDL" id="selectedDropoffDate">
                  <?php if($is_submitted)echo $dropoff_date?>
                  </span></td>
              </tr>
            </table>
          </div>
        </div>
        <?php if(!$is_submitted){ ?>
        <div id="tab-1" class="tab-content first clearfix currentDiv">
          <h2>Choose dates & locations</h2>
          <div class="bookingForm clearfix">
            <div class="bookingFileds rightCls full-width" >
              <div class="leftForm leftCls">
                <div class="filedRow clearfix">
                  <div class="filedDiv leftCls">
                    <div class="locationDiv">
                      <div class="filedDivider"> <span class="spanLabel">Pick-up Location:</span>
                        <div class="selDiv">
                          <select id="pickup_location">
                            <?php foreach($pickup_location as $val){ ?>
                            <option>
                            <?=$val['title']?>
                            </option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="filedDivider"> <span class="spanLabel">Drop-off Location:</span>
                        <div class="selDiv">
                          <select id="dropoff_location">
                            <?php foreach($dropoff_location as $val){ ?>
                            <option>
                            <?=$val['title']?>
                            </option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="filedDiv leftCls">
                    <div class="pickUpDiv">
                      <div class="filedDivider"> <span class="spanLabel">Pick-up Date:</span>
                        <div class="textDiv">
                          <input type="text" value="<?=date('m/d/Y')?>" id="pickup_date" class="intBox">
                        </div>
                      </div>
                      <div class="filedDivider"> <span class="spanLabel">Drop-off Date:</span>
                        <div class="textDiv">
                          <input type="text" value="<?=date('m/d/Y')?>" id="dropoff_date" class="intBox">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="searhBtn rightCls">
                <input type="button" class="btn" value="Next" id="goToBookForm" />
                <input type="hidden" id="save_dates_url" value="<?=route_to('fleet/saveDates')?>" />
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        <?php if($is_submitted){ ?>
        <div id="tab-2" class="tab-content clearfix <?php if($is_submitted)echo "current"; ?>">
          <h2>Vehicle</h2>
          <div class="vehicleList clearfix">
            <ul class="vehList">
              <?php foreach($fleet as $val){ ?>
              <li class="clearfix" id="fleet<?=$val['id_fleet']?>">
                <div class="ltList leftCls">
                  <?php if(!empty($val['picture'])){ ?>
                  <img src="uploads/fleet/255x127/<?=$val['picture']?>" />
                  <?php } ?>



<?php 
$displayDefault = true;
if($val['is_offer'] == 0 && !empty($val['picture'])) {?><img src="uploads/fleet/255x127/<?php echo $val['picture'];?>" /><?php $displayDefault = false;}?>
<?php if($val['is_offer'] == 1 && !empty($val['picture_offer'])) {?><img src="uploads/fleet/255x127/<?php echo $val['picture_offer'];?>" /><?php $displayDefault = false;}?>





                  <?php if($displayDefault){ ?>
                  <img src="images/front/logo.png" />
                  <?php } ?>
                </div>
                <div class="rtList rightCls">
                  <div class="rtListLt leftCls">
                    <h4>
                      <?=$val['category_title']?>
                    </h4>
                    <h3>
                      <?=$val['title']?>
                    </h3>
                    <p>
                      <?=$val['km_per_day']?>
                      Km Per Day</p>
                    <?php
		  	$charcts = explode(',',$val['characteristics']);
			if(count($charcts)>0){
		  ?>
                    <div class="ltSpan">
                      <?php foreach($charcts as $c){ ?>
                      <span>
                      <?=$c?>
                      </span>
                      <?php } ?>
                    </div>
                    <?php } ?>
                  </div>

                  <div class="rtListRt rightCls">
                    <?php if($val['is_offer'] == 1) {?><div class="rtUp"> <span><span class="uppercaseTxt whitecolor">
                      <?=$val['daily_cost']?>
                      / day</span></span> </div><?php }?>
                    <div class="rtDw">
                      <button type="button" onclick="chooseFleet(<?=$val['id_fleet']?>)">Book Now</button>
                      <input type="hidden" id="save_fleet_url" value="<?=route_to('fleet/saveFleet')?>" />
                    </div>
                  </div>
                </div>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <?php } ?>
        <div id="tab-3" class="tab-content clearfix">
          <h2>Booking Form</h2>
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
                        	<td valign="top" id="captcha_img"><?=$captcha?></td>
                         <td>&nbsp;&nbsp;<a style="cursor:pointer;font-weight: bold;" id="captchaBtn" onclick="resetCaptch()">Reset</a></td>
                            <td valign="top"><input type="text" id="captcha" /></td>
                            <td><span id="captchaError" class="formError"></span></td>
                        </tr>  
                    </table>
                  </div>
                </li>
                <li>
                  <div class="contFild rightCls" id="enquireBtnHolder">
                    <input type="submit" value="Submit" id="confirmBooking" class="wauto">
                    <input type="hidden" id="confirm_booking_url" value="<?=route_to('fleet/confirmBooking')?>" />
                  </div>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function resetCaptch(){
    var url1 = '<?php echo site_url("fleet/ChangeCaptcha"); ?>';
      $.ajax({
        url: url1,
        data: { pProtName : '<?php  echo $this->security->csrf_hash; ?>'},
        success: function(prasedata, textStatus, jqXHR) {
            //var prasedata = JSON.parse(response);
            if(prasedata.result == 1) {
                $("#captcha_img").html(prasedata.img);
            }
         }
      });
  }
</script>