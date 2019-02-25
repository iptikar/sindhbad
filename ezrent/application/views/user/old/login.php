
<div class="about_content bg_color4 contact">
          <div class="container">
               <div class="header_content">
                    <span><?php echo lang('login_register'); ?></span>
               </div>
               <!---------- Left Side ----------->
                
                <div class="content">
                
               
               
               <div class="r-halfSide left">
               		<div class="r-title"><?php echo lang('register'); ?></div>
                    <?php if(!empty($register_intro['description'.getFieldLanguage()])) {?>
                    	<div class="r-intro"><?php echo $register_intro['description'.getFieldLanguage()]; ?></div>
                    <?php }?>
                    
                    <div class="r-FormBLock">
                    <form action="<?php echo site_url('user/register'); ?>" method="post" id="RegisterForm">
                    	<div class="r-formItem left">
                        	<label><?php echo lang('company_name'); ?> <span class="r-Mark">*</span> :</label>
                            <input type="text" class="textbox" name="company_name" value="<?php echo set_value('company_name'); ?>" />
                            <span id="company_name-error" class="form-error"></span>
                        </div>
                        
                        <div class="r-formItem right">
                        	<label><?php echo lang('username'); ?> <span class="r-Mark">*</span> :</label>
                            <input type="text" class="textbox" name="username" value="<?php echo set_value('username'); ?>" />
                            <span id="username-error" class="form-error"></span>
                        </div>
                        
                        <div class="r-formItem left">
                        	<label><?php echo lang('password'); ?> :</label>
                            <input type="password" class="textbox" name="password" value="<?php echo set_value('password'); ?>" />
                             <span id="password-error" class="form-error"></span>
                        </div>
                        <div class="r-formItem right">
                        	<label><?php echo lang('confirm_password'); ?> :</label>
                            <input type="password" class="textbox" name="confirm_password" value="<?php echo set_value('confirm_password'); ?>" />
                            <span id="confirm_password-error" class="form-error"></span>
                        </div>
                        
                        <div class="r-formItem left">
                        	<label><?php echo lang('vat_number'); ?>:</label>
                            <input type="text" class="textbox" name="vat_number" value="<?php echo set_value('vat_number'); ?>" />
                            <span id="vat_number-error" class="form-error"></span>
                        </div>
                        <div class="r-formItem right">
                        	<label><?php echo lang('salutation'); ?> <span class="r-Mark">*</span> :</label>
                            <select name="salutation" class="selectbox">
                            <option value="">- select -</option>
                            <option value="Mr." <?php if(set_value('salutation') == "Mr.") echo 'selected="selected"'; ?>>Mr.</option>
                            <option value="Mrs." <?php if(set_value('salutation') == "Mrs.") echo 'selected="selected"'; ?>>Mrs.</option>
                            <option value="Miss" <?php if(set_value('salutation') == "Miss") echo 'selected="selected"'; ?>>Miss</option>
                            </select>
                             <span id="salutation-error" class="form-error"></span>
                        </div>
                        
                          
                        
                        <div class="r-formItem left">
                        	<label><?php echo lang('first_name'); ?> <span class="r-Mark">*</span> :</label>
                            <input type="text" class="textbox" name="first_name" value="<?php echo set_value('first_name'); ?>" />
                             <span id="first_name-error" class="form-error"></span>
                        </div>
                        <div class="r-formItem right">
                        	<label><?php echo lang('surname'); ?> <span class="r-Mark">*</span> :</label>
                            <input type="text" class="textbox" name="surname" value="<?php echo set_value('surname'); ?>" />
                             <span id="surname-error" class="form-error"></span>
                        </div>
                         <div class="r-formItem left">
                        	<label><?php echo lang('email'); ?> <span class="r-Mark">*</span> :</label>
                            <input type="text" class="textbox" name="email" value="<?php echo set_value('email'); ?>" />
                             <span id="email-error" class="form-error"></span>
                        </div>
                         <div class="r-formItem right">
                        	<label><?php echo lang('phone'); ?> <span class="r-Mark">*</span> :</label>
                            <input type="text" class="textbox" name="phone" value="<?php echo set_value('phone'); ?>" />
                             <span id="phone-error" class="form-error"></span>
                        </div>
                        <div class="r-formItem full left">
                        	<label><?php echo lang('address'); ?> <span class="r-Mark">*</span> :</label>
                            <textarea class="textarea" name="address"><?php echo set_value('address'); ?></textarea>
                             <span id="address-error" class="form-error"></span>
                        </div>
                        <div class="r-formItem full left">
                        	<label><?php echo lang('how_did_you_find_us'); ?> <span class="r-Mark">*</span> :</label>
                            <select name="how_did_you_find_us" id="how_did_you_find_us" class="selectbox">
                           <option value="">Please Select One</option>
<option value="Essential Install" <?php if(set_value('how_did_you_find_us') == "Essential Install") echo 'selected="selected"'; ?>>Essential Install</option>
<option value="Other Trade Publication" <?php if(set_value('how_did_you_find_us') == "Other Trade Publication") echo 'selected="selected"'; ?>>Other Trade Publication</option>
<option value="Search Engine" <?php if(set_value('how_did_you_find_us') == "Search Engine") echo 'selected="selected"'; ?>>Search Engine</option>
<option value="Recommendation" <?php if(set_value('how_did_you_find_us') == "Recommendation") echo 'selected="selected"'; ?>>Recommendation</option>
<option value="Facebook" <?php if(set_value('how_did_you_find_us') == "Facebook") echo 'selected="selected"'; ?>>Facebook</option>
<option value="Twitter" <?php if(set_value('how_did_you_find_us') == "Twitter") echo 'selected="selected"'; ?>>Twitter</option>
<option value="LinkedIn" <?php if(set_value('how_did_you_find_us') == "LinkedIn") echo 'selected="selected"'; ?>>LinkedIn</option>
<option value="other" <?php if(set_value('how_did_you_find_us') == "other") echo 'selected="selected"'; ?>>Other</option>
                            </select>
                             <span id="how_did_you_find_us-error" class="form-error"></span>
                             <div class="r-formItem full left" id="otherBox" style="display:none;">
                             <label>Please specify <span class="r-Mark">*</span> :</label>
                             	<input type="text" class="textbox" name="other" value="<?php echo set_value('other'); ?>" />
                             	<span id="other-error" class="form-error"></span>
                             </div>
                        </div>
                  
                        <div class="r-formItem full left"><label><?php echo lang('captcha_text'); ?></label>
                        <span class="captchaImage"><?php echo $this->fct->createNewCaptcha(); ?></span>
                        <input type="text" class="textbox" id="captcha" name="captcha" value="" style="text-transform:none" />
                        <span id="captcha-error" class="form-error"></span>
                        </div>
                        
                        <div class="r-formItem full left">
                        <span class="r-formResults"></span>
                        <input type="submit" id="RegisterButton" name="register" class="r-Button" value="<?php echo lang('register'); ?>" />
                        </div>
                        </form>
                    </div>
                    
               </div>
               
               <div class="r-halfSide right">
               		<div class="r-title"><?php echo lang('login'); ?></div>
                    <?php if(!empty($login_intro['description'.getFieldLanguage()])) {?>
                    	<div class="r-intro"><?php echo $login_intro['description'.getFieldLanguage()]; ?></div>
                    <?php }?>
                    <div class="r-FormBLock">
                   	    <form id="LoginForm" action="<?php echo site_url('user/validate'); ?>" method="post">
                    	<div class="r-formItem full left">
                        	<label><?php echo lang('username'); ?> <span class="r-Mark">*</span> :</label>
                            <input type="text" class="textbox" name="l_username" value="<?php echo set_value('l_username'); ?>" />
                            <span id="l_username-error" class="form-error"></span>
                        </div>
                        <div class="r-formItem full left">
                        	<label><?php echo lang('password'); ?> <span class="r-Mark">*</span> :</label>
                            <input type="password" class="textbox" name="l_password" value="<?php echo set_value('l_password'); ?>" />
                            <span id="l_password-error" class="form-error"></span>
                        </div>
                        <div class="r-formItem full left">
                        <input type="submit" class="r-Button" value="<?php echo lang('login'); ?>" />
                        <span class="r-formResults"></span>
                        </div>
                        <div class="r-formItem full left">
                       	   <a class="r-forgetpassword" href="<?php echo site_url('user/password'); ?>">Forgot your password?</a>
                        </div>
                        </form>
                    </div>
               </div>
               
             </div>  
                            
          </div>
    </div>