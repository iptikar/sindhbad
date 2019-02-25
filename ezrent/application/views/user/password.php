<div class="formsection">
  <div class="title">
    <h2>REQUEST NEW PASSWORD</h2>
  </div>
 <form class="form1" action="<?php echo route_to("user/password_sendrequest"); ?>" id="LoginForm">
    <fieldset>
      <label>E-mail id *</label>
      <input type="email" name="email" class="input-text">
      <span class="form-error" id="email-error"></span>
    </fieldset>
    <fieldset class="full">
    <a href="<?php echo route_to("pages/index/".$id_section); ?>" class="link newapp">Go to Login?</a> <a href="<?php echo route_to("user/register"); ?>" class="link forgetpwd">Go to Register?</a>
      <input type="submit" value="Submit" class="btn-form">
    </fieldset>
   <fieldset class="full">
      <div class="FormResult"></div>
    </fieldset>
  </form>
</div>
<?php $this->load->view("content/careers_info"); ?>
