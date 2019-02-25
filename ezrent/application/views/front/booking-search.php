<div class="bookingForm clearfix">
  <div class="bokingLabel leftCls">Book your <br>
    favorite car now</div>
  <div class="bookingFileds rightCls"> <?php echo form_open('fleet/booking'); ?>
    <div class="leftForm leftCls">
      <div class="filedRow clearfix">
        <div class="filedDiv leftCls">
          <div class="locationDiv">
            <div class="filedDivider"> <span class="spanLabel">Pick-up Location:</span>
              <div class="selDiv">
                <select name="pickup_location">
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
                <select name="dropoff_location">
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
                <input type="text" value="<?=date('m/d/Y')?>" name="pickup_date" class="intBox" id="datepicker1">
              </div>
            </div>
            <div class="filedDivider"> <span class="spanLabel">Drop-off Date:</span>
              <div class="textDiv">
                <input type="text" value="<?=date('m/d/Y')?>" name="dropoff_date" class="intBox" id="datepicker2">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="searhBtn rightCls">
      <input type="submit" class="btn" value="" id="searchBookingBtn" />
    </div>
    <?php echo form_close(); ?> </div>
</div>
