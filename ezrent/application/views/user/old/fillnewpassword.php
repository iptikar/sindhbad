
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
                   	    <form id="UpdatePasswordForm" action="<?php echo site_url('user/update_password'); ?>" method="post">
                        <input type="hidden" id="id_user" name="id_user" value="<?php echo $id_user; ?>" />
                    	<div class="r-formItem full left">
                        	<label><?php echo lang('password'); ?> <span class="r-Mark">*</span> :</label>
                            <input type="password" class="textbox" name="password" value="" />
                            <span id="password-error" class="form-error"></span>
                        </div>
                        
                        <div class="r-formItem full left">
                        	<label><?php echo lang('confirm_password'); ?> <span class="r-Mark">*</span> :</label>
                            <input type="password" class="textbox" name="confirm_password" value="" />
                            <span id="confirm_password-error" class="form-error"></span>
                        </div>
                        
                        <div class="r-formItem full left">
                        <input type="submit" class="r-Button" value="<?php echo lang('update_password'); ?>" />
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