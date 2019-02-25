<div class="welComeRt rightCls">
  <div class="greyBox newsletterForm">
    <h4>Subscribe to our newsletter</h4>
    <div id="nlHolder">
      <p>Stay up dated with our Latest news & our Top Offers in Dubai</p>
      <div class="newsletterForm">
        <form action="#" class="clearfix">
          <div class="ltNewsletter leftCls">
            <p>
              <input type="text" value="" id="nl_name" placeholder="Full Name" class="intBox">
            </p>
            <p>
              <input type="email" value="" id="nl_email" placeholder="Email" class="intBox">
            </p>
          </div>
          <div class="rtNewsletter rightCls">
            <button type="button" id="nlBtn">Submit</button>
            <input type="hidden" id="nl_url" value="<?=site_url('home/submitNewsletter')?>" />
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="greyBox locate">
    <h4>Locate Us</h4>
    <div class="locateIn clearfix">
      <div class="leftCls">
        <a href="<?=route_to('contact')?>"><?=$settings->address?></a>
      </div>
      <div class="rightCls"> <span class="loIcon"><a href="<?=route_to('contact')?>"><img src="images/front/licon1.png" alt="img"/></a></span> </div>
    </div>
  </div>
</div>