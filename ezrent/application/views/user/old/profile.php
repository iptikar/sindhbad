
<div class="about_content bg_color4 contact">
          <div class="container">
               <div class="header_content">
                    <span><?php echo lang('my_account'); ?> : <?php echo lang('edit_profile'); ?></span>
               </div>
               <!---------- Left Side ----------->
                
                <div class="content">
                <div class="r-fullSide">
      <?php $this->load->view('user/account_menu'); ?>
      </div>
               <div class="r-fullSide">
               	<!--	<div class="r-title"><?php //echo lang('register'); ?></div>-->
                    <div class="r-FormBLock">
                    <form action="<?php echo site_url('user/update_profile'); ?>" method="post" id="RegisterForm">
                    
                    
                    
                    
                    
                    <div class="r-formItem full left">
                        	<label><?php echo lang('company_name'); ?> <span class="r-Mark">*</span> :</label>
                            <input type="text" class="textbox" name="company_name" value="<?php echo set_value('company_name',$user['company_name']); ?>" />
                            <span id="company_name-error" class="form-error"></span>
                        </div>
                        <div class="r-formItem left">
                        	<label><?php echo lang('vat_number'); ?>:</label>
                            <input type="text" class="textbox" name="vat_number" value="<?php echo set_value('vat_number',$user['vat_number']); ?>" />
                            <span id="vat_number-error" class="form-error"></span>
                        </div>
                        <div class="r-formItem right">
                        	<label><?php echo lang('salutation'); ?> <span class="r-Mark">*</span> :</label>
                            <select name="salutation" class="selectbox">
                            <option value="">- select -</option>
                            <option value="Mr." <?php if(set_value('salutation',$user['salutation']) == "Mr.") echo 'selected="selected"'; ?>>Mr.</option>
                            <option value="Mrs." <?php if(set_value('salutation',$user['salutation']) == "Mrs.") echo 'selected="selected"'; ?>>Mrs.</option>
                            <option value="Miss" <?php if(set_value('salutation',$user['salutation']) == "Miss") echo 'selected="selected"'; ?>>Miss</option>
                            </select>
                             <span id="salutation-error" class="form-error"></span>
                        </div>
                        <div class="r-formItem left">
                        	<label><?php echo lang('first_name'); ?> <span class="r-Mark">*</span> :</label>
                            <input type="text" class="textbox" name="first_name" value="<?php echo set_value('first_name',$user['first_name']); ?>" />
                             <span id="first_name-error" class="form-error"></span>
                        </div>
                        <div class="r-formItem right">
                        	<label><?php echo lang('surname'); ?> <span class="r-Mark">*</span> :</label>
                            <input type="text" class="textbox" name="surname" value="<?php echo set_value('surname',$user['surname']); ?>" />
                             <span id="surname-error" class="form-error"></span>
                        </div>
                         <div class="r-formItem left">
                        	<label><?php echo lang('email'); ?> <span class="r-Mark">*</span> :</label>
                            <input type="text" class="textbox" name="email" value="<?php echo set_value('email',$user['email']); ?>" />
                             <span id="email-error" class="form-error"></span>
                        </div>
                         <div class="r-formItem right">
                        	<label><?php echo lang('phone'); ?> <span class="r-Mark">*</span> :</label>
                            <input type="text" class="textbox" name="phone" value="<?php echo set_value('phone',$user['phone']); ?>" />
                             <span id="phone-error" class="form-error"></span>
                        </div>
                        <div class="r-formItem full left">
                        	<label><?php echo lang('address'); ?> <span class="r-Mark">*</span> :</label>
                            <textarea class="textarea" name="address"><?php echo set_value('address',$user['address']); ?></textarea>
                             <span id="address-error" class="form-error"></span>
                        </div>
               
                        <div class="r-formItem full left">
                        	<label><?php echo lang('username'); ?> <span class="r-Mark">*</span> :</label>
                            <input type="text" class="textbox" name="username" value="<?php echo set_value('username',$user['username']); ?>" />
                             <span id="username-error" class="form-error"></span>
                        </div>
                        
                        <div class="r-formItem left">
                        	<label><?php echo lang('password'); ?> :</label>
                            <input type="password" class="textbox" name="password" value="" />
                             <span id="password-error" class="form-error"></span>
                        </div>
                        <div class="r-formItem right">
                        	<label><?php echo lang('confirm_password'); ?> :</label>
                            <input type="password" class="textbox" name="confirm_password" value="" />
                            <span id="confirm_password-error" class="form-error"></span>
                        </div>
                        <div class="r-formItem full left"><label><?php echo lang('captcha_text'); ?></label>
                        <span class="captchaImage"><?php echo $this->fct->createNewCaptcha(); ?></span>
                        <input type="text" class="textbox" id="captcha" name="captcha" value="" style="text-transform:none" />
                        <span id="captcha-error" class="form-error"></span>
                        </div>
                        
                        <div class="r-formItem full left">
                        <span class="r-formResults"></span>
                        <input type="submit" class="r-Button" name="update_profile" value="<?php echo lang('update_profile'); ?>" />
                        </div>
                        </form>
                    </div>
                    
               </div>
               
             </div>  
                            
          </div>
    </div>