<?php $applicants_info = $this->fct->getAll("applicants_levels","sort_order"); ?>
<div class="formsection">
  <div class="title">
    <h2>NEW APPLICANT</h2>
  </div>
  <form action="<?php echo route_to("user/submitRegistration"); ?>" class="form1" id="RegistrationForm">
    <fieldset>
      <label>Username *</label>
      <input type="text" name="username" class="input-text">
      <span class="form-error" id="username-error"></span>
    </fieldset>
    <fieldset>
      <label>Email *</label>
      <input type="email" name="email" class="input-text">
      <span class="form-error" id="email-error"></span>
    </fieldset>
    <fieldset>
      <label>Password *</label>
      <input type="password" name="password" class="input-text">
      <span class="form-error" id="password-error"></span>
    </fieldset>
    <fieldset>
      <label>Confirm Password *</label>
      <input type="password" name="confirm_password" class="input-text">
      <span class="form-error" id="confirm_password-error"></span>
    </fieldset>
    <fieldset class="full">
      <label>How would you describe yourself ?: *</label>
      <select class="select_busines newaplicant" name="describe">
      <?php foreach($applicants_info as $inf) {?>
      <option value="<?php echo $inf['title']; ?>"><?php echo $inf['title']; ?></option>
      <?php }?>
      </select>
      <span class="form-error" id="describe-error"></span>
    </fieldset>
    <fieldset>
      <label>Full Name</label>
      <input type="text" name="name" class="input-text">
      <span class="form-error" id="name-error"></span>
    </fieldset>
    <fieldset>
      <label>Current Employer</label>
      <input type="text" name="current_employer" class="input-text">
      <span class="form-error" id="current_employer-error"></span>
    </fieldset>
    
    <fieldset class="full">
      <label>Please fill characters below:</label>
      <span class="captchaImage"><?php echo $this->fct->createNewCaptcha(); ?></span>
      <input type="text" name="captcha" class="input-text">
      <span class="form-error" id="captcha-error"></span>
    </fieldset>
    
    
    <fieldset class="right">
     <a href="<?php echo route_to("pages/index/".$id_section); ?>" class="link newapp">Go to Login?</a> <a href="<?php echo route_to("user/password"); ?>" class="link forgetpwd">Forget Password</a>
      <input type="submit" value="Submit" class="btn-form">
       </fieldset>
         <fieldset>
      <div class="FormResult"></div>
    </fieldset>
  </form>
</div>
<?php $this->load->view("content/careers_info"); ?>
