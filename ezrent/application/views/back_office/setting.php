<script>
$(function(){
$('input[name=variable]:radio').change(function(){
var val=$(this).val();
if(val == "exist"){
$('#db_names').css('display','block');	
} else { $('#db_names').css('display','none'); }
});
});
</script>

<div class="container-fluid">
<div class="row-fluid">
  <div class="span2">
    <? $this->load->view('back_office/includes/left_box'); ?>
  </div>
  <div class="span10 cont_h">
    <div class="span10-fluid" >
      <ul class="breadcrumb">
        <li>Personal Information</li>
      </ul>
    </div>
    <div class="hundred pull-left">
      <?php
$action = site_url('back_office/settings/submit');
$attributes = array(
'class'=>'middle-forms'
);
echo form_open_multipart($action,$attributes);
?>
      <!--<form action="<? //= site_url('back_office/settings/submit'); ?>" method="post" class="middle-forms" enctype="multipart/form-data">-->
      <p class="alert alert-info">Please complete the form below. Mandatory fields marked <em>*</em></p>
      <? if($this->session->userdata('success_message')){ ?>
      <div class="alert alert-success">
        <?= $this->session->userdata('success_message'); ?>
      </div>
      <? } ?>
      <? if($this->session->userdata('error_message')){ ?>
      <div class="alert alert-error">
        <?= $this->session->userdata('error_message'); ?>
      </div>
      <? } ?>
      </p>
      <fieldset>
        <label class="field-title">Website Title:</label>
        <label>
          <input type="text" class="input-xxlarge" name="website_title" value="<?=$admin["website_title"]; ?>" />
        </label>
        <!--<label class="field-title">Website Title: (english)</label>
<label><input type="text" class="input-xxlarge" name="website_title_en" value="<?=$admin["website_title_en"]; ?>" />
</label>	--> 
        
        <!--<label class="field-title">Website Logo:</label>
<label><input class="input-xxlarge" type="file" name="image" />
<?
if( $admin["image"]!= ""){ ?>	
<a href="<?= base_url(); ?>uploads/website/<?= $admin["image"]; ?>" class="blue gallery" >
show image
</a>
&nbsp;&nbsp;&nbsp;
<a class="cur" onclick="if(confirm('Are you sure you want to delete this image ?')){ window.location='<?= site_url('back_office/settings/delete_image/image/'.$admin["image"].'/2'); ?>';  }"  ><img src="<?= base_url(); ?>images/delete.png"  /></a>
<? } else { echo "<span class='blue'>No Image Available</span>"; } ?>
</span>
 </label>-->
        <label class="field-title">Toll Free:</label>
        <label>
          <input type="text" class="input-xxlarge" name="toll_free" value="<?=$admin["toll_free"]; ?>" />
        </label>   
        <label class="field-title">Phone Number:</label>
        <label>
          <input type="text" class="input-xxlarge" name="phone" value="<?=$admin["phone"]; ?>" />
        </label>
        <label class="field-title">Fax:</label>
        <label>
          <input type="text" class="input-xxlarge" name="fax" value="<?=$admin["fax"]; ?>" />
        </label>
        <label class="field-title">E-mail<em>*</em>:</label>
        <label>
          <input type="text" class="input-xxlarge" name="email" value="<?= set_value('email',$admin["email"]); ?>" />
          <?= form_error('email','<span class="text-error">','</span>'); ?>
          <input type="hidden" name="id" value="<?= $admin["id_settings"]; ?>"  />
        </label>
        <label class="field-title">Website URL:</label>
        <label>
          <input type="text" class="input-xxlarge" name="website" value="<?=$admin["website"]; ?>" />
        </label>
        <label class="field-title">FaceBook:</label>
        <label>
          <input type="text" class="input-xxlarge" name="facebook" value="<?= $admin["facebook"]; ?>" />
        </label>
        <label class="field-title">Twitter:</label>
        <label>
          <input type="text" class="input-xxlarge" name="twitter" value="<?= $admin["twitter"]; ?>" />
        </label>
        <label class="field-title">Google Plus:</label>
        <label>
          <input type="text" class="input-xxlarge" name="google_plus" value="<?= $admin["google_plus"]; ?>" />
        </label>
        <label class="field-title">Instagram:</label>
        <label>
          <input type="text" class="input-xxlarge" name="instagram" value="<?= $admin["instagram"]; ?>" />
        </label>
        <label class="field-title">Linked In:</label>
        <label>
          <input type="text" class="input-xxlarge" name="linkedin" value="<?= $admin["linkedin"]; ?>" />
        </label>
        <label class="field-title">Skype:</label>
        <label>
          <input type="text" class="input-xxlarge" name="skype" value="<?= $admin["skype"]; ?>" />
        </label>
        <label class="field-title">You Tube:</label>
        <label>
          <input type="text" class="input-xxlarge" name="youtube" value="<?= $admin["youtube"]; ?>" />
        </label>
        <label class="field-title">Google Map:</label>
        <label>
          <textarea class="input-xxlarge" name="google_map" > <?=$admin["google_map"]; ?>
</textarea>
        </label>
        <label class="field-title">Google Analytic Script:</label>
        <label>
          <textarea class="input-xxlarge" name="google_analytic" > <?=$admin["google_analytic"]; ?>
</textarea>
        </label>
      </fieldset>
      <!--<fieldset>
<legend>Product page</legend>
<label class="field-title">Call us now:</label>
<label><textarea class="input-xxlarge ckeditor" id="call_us_now" name="call_us_now" > <?=$admin["call_us_now"]; ?></textarea>
</label>

<label class="field-title">Email us now:</label>
<label><textarea class="input-xxlarge ckeditor" id="email_us_about_this" name="email_us_about_this" > <?=$admin["email_us_about_this"]; ?></textarea>
</label>

<label class="field-title">Notice for outside UK users: (checkout)</label>
<label><textarea class="input-xxlarge ckeditor" id="checkout_notice" name="checkout_notice" > <?=$admin["checkout_notice"]; ?></textarea>
</label>

</fieldset>-->
      
      <fieldset>
        <!--<legend></legend>-->
        <label class="field-title">Contact Info:</label>
        <label>
          <textarea class="input-xxlarge " id="address" name="address" > <?=$admin["address"]; ?>
</textarea>
        </label>
        <!--
<label class="field-title">Footer:</label>
<label><textarea class="input-xxlarge ckeditor" id="address_footer" name="address_footer" > <?=$admin["address_footer"]; ?></textarea>
</label>-->
      </fieldset>
      <p class="pull-right">
        <input type="submit" name="submit" value="Save Changes" class="btn btn-primary btn_mrg"  />
      </p>
      </form>
    </div>
  </div>
</div>
<?
$this->session->unset_userdata('success_message'); 
$this->session->unset_userdata('error_message');
?>
