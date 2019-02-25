
<div class="about_content bg_color4 contact">
          <div class="container">
               <div class="header_content">
                    <span><?php echo lang('my_account'); ?> : <?php echo lang('forget_password'); ?></span>
               </div>
               <!---------- Left Side ----------->
                
                <div class="content">
                
               <div class="r-halfSide left">
               		<!--<div class="r-title"><?php echo lang('login'); ?></div>-->
                    <div class="r-FormBLock">
                   	    <form id="PasswordForm" action="<?php echo site_url('user/password_sendrequest'); ?>" method="post">
                    	<div class="r-formItem full left">
                        	<label><?php echo lang('enter_email'); ?> <span class="r-Mark">*</span> :</label>
                            <input type="text" class="textbox" name="email" value="" />
                            <span id="email-error" class="form-error"></span>
                        </div>
                        
                        <div class="r-formItem full left">
                        <input type="submit" class="r-Button" value="<?php echo lang('send_request'); ?>" />
                        <span class="r-formResults"></span>
                        </div>
                        <div class="r-formItem full left">
                       	   <a class="r-forgetpassword" href="<?php echo site_url('user/login'); ?>"><?php echo lang('login_register'); ?></a>
                        </div>
                        </form>
                    </div>
               </div>
               
               
               
             </div>  
                            
          </div>
    </div>
