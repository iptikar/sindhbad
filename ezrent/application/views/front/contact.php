<div class="main">
  <div class="aboutPage clearfix">
    <div class="bradcamp clearfix">
      <div class="mainWrap clearfix">
        <ul>
          <li><a href="<?=route_to('')?>">Home</a></li>
          <li><span>Contact Us</span></li>
        </ul>
      </div>
    </div>
    <div class="block clearfix">
      <div class="mainWrap clearfix">
        <h1 class="titleName"> Contact Us </h1>
      </div>
    </div>
    <div class="contactPage">
      <div class="mainWrap clearfix">
        <div class="text-center gap40"> If you have a question to our experts, please use the contact by phone or email. <br/>
          You can also use contact form or come to our service centers </div>
      </div>
      <div class="contInfo clearfix">
        <div class="mainWrap clearfix">
          <ul>
            <li>
              <div class="leftCls"><span><i class="fa fa-home" aria-hidden="true"></i></span></div>
              <div class="rightCls">
                <h3>Address</h3>
                <p><?=$settings->address?></p>
              </div>
            </li>
            <li>
              <div class="leftCls"><span><i class="fa fa-phone" aria-hidden="true"></i></span></div>
              <div class="rightCls">
                <h3>Telephone & Fax</h3>
                <p><?php if(!empty($settings->phone)){ ?>T: <?=$settings->phone?><br/><?php } ?>
                  <?php if(!empty($settings->fax)){ ?>F: <?=$settings->fax; } ?></p>
              </div>
            </li>
            <li>
              <div class="leftCls"><span><i class=" fa1 fa fa-envelope-open" aria-hidden="true"></i></span></div>
              <div class="rightCls">
                <h3>Email & Web</h3>
                <p><?php if(!empty($settings->email)){ ?>E: <?=$settings->email?> <br/><?php } ?>
                  <?php if(!empty($settings->website)){ ?>W: <?=$settings->website; } ?></p>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="contMp clearfix">
        <div class="mainWrap clearfix">
          <div class="contLt leftCls">
            <div class="map"><?=$settings->google_map?>
              
            </div>
          </div>
          <div class="contRt rightCls" id="contFormHolder">
              <ul>
                <li>
                  <div class="contFild">
                    <input type="text" placeholder="Name or Company name" id="name" />
                    <span id="nameError" class="formError"></span>
                  </div>
                </li>
                <li>
                  <div class="contFild">
                    <input type="text" placeholder="Phone Number" id="phone" />
                  </div>
                </li>
                <li>
                  <div class="contFild">
                    <input type="text" placeholder="Email Address" id="email" />
                    <span id="emailError" class="formError"></span>
                  </div>
                </li>
                <li>
                  <div class="contFild">
                    <input type="text" placeholder="Subject" id="subject" />
                  </div>
                </li>
                <li>
                  <div class="contFild">
                    <textarea placeholder="Message Here" id="message"></textarea>
                    <span id="messageError" class="formError"></span>
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
                  <div class="contFild">
                    <input type="button" value="Send Message" id="contactBtn"/>
                  </div>
                </li>
              </ul>
            <input type="hidden" id="contact_url" value="<?=route_to('contact/submitForm')?>" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
