<script>
$(function(){
$('#reply').toggle(function(){
$('#reply_content').slideDown('normal');
}, function(){
$('#reply_content').slideUp('normal');
});
});
</script>
<div class="container-fluid">
<div class="row-fluid">
<div class="span2">
<? $this->load->view('back_office/includes/left_box'); ?>
</div>

<div class="span10" >
<div class="span10-fluid" >
<ul class="breadcrumb">
<li><a href="<?= site_url('back_office/messages/'.$this->session->userdata('message_link')); ?>">List All Messages</a> <span class="divider">/</span></li>
<li class="active"><?= $title; ?></li>
</ul> 
</div>
<div class="hundred pull-left">  
<form action="<?= site_url('back_office/messages/submit'); ?>" method="post" class="middle-forms" enctype="multipart/form-data">

<?
if(isset($id)){
echo '<input type="hidden" name="id" value="'.$id.'" />';
} else {	
//$info=array('title'=>'','description'=>'','date'=>'');
}
?>
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
<legend></legend>

<?php if(!empty($info["company"])) {?>
<label class="field-title"><h6>Company :</h6></label><label>
<div class="bg_emails" >
<?= $info["company"]; ?></div>
</label>
<?php }?>

<?php if(!empty($info["name"])) {?>
<label class="field-title"><h6>Name :</h6></label><label>
<div class="bg_emails" >
<?= $info["name"]; ?></div>
</label>
<?php }?>

<?php if(!empty($info["phone"])) {?>
<label class="field-title"><h6>Phone :</h6></label><label>
<div class="bg_emails" >
<?= $info["phone"]; ?></div>
</label>
<?php }?>

<?php if(!empty($info["email"])) {?>
<label class="field-title"><h6>E-mail :</h6></label> <label>
<div class="bg_emails" >
<a href="mailto:<?= $info["email"]; ?>"><?= $info["email"]; ?></a></div>
</label>
<?php }?>

<?php if(!empty($info["department"])) {?>
<label class="field-title"><h6>Department :</h6></label><label>
<div class="bg_emails" >
<?= $info["department"]; ?></div>
</label>
<?php }?>

<?php if(!empty($info["post_code"])) {?>
<label class="field-title"><h6>Post Code :</h6></label><label>
<div class="bg_emails" >
<?= $info["post_code"]; ?></div>
</label>
<?php }?>


<?php if(!empty($info["message"])) {?>
<label class="field-title"><h6>Message :</h6></label>
<label>
<div class="bg_emails" >
<?= $info["message"]; ?></div>
</label>
<?php }?>

<?php if(!empty($info["address"])) {?>
<label class="field-title"><h6>Address :</h6></label>
<label>
<div class="bg_emails" >
<?= $info["address"]; ?></div>
</label>
<?php }?>

<span class="clearFix">&nbsp;</span></li>		
</fieldset>
<!--<p class="pull-left">
<a class=" btn btn-warning" id="reply" style="cursor:pointer;"><span>Reply</span></a>
</p>-->
<!--<div style="float:left; width:100%; margin-top:15px; display:none" id="reply_content">
<fieldset>
<legend></legend>
<label class="field-title"><h6>To :</h6></label> <label>
<input type="text" class="input-xxlarge" name="to" value="<? //= $info["email"]; ?>" />
</label>
<label class="field-title"><h6>Subject :</h6></label> <label>
<input type="text" class="input-xxlarge" name="subject" value="<? //= $info["subject"]; ?>" />
</label>
<label class="field-title"><h6>Message :</h6></label>
<label>
<textarea class="ckeditor" id="message" name="message" rows="17" cols="75" >
</textarea>
</label>
</fieldset>
<p class="align-right"><input type="image" src="<?= base_url(); ?>images/bt-send-form-1.png" class="btn btn-primary" /></p>
<span class="clearFix">&nbsp;</span>
</div>-->
<span class="clearFix">&nbsp;</span>
</form>
</div>
</div>   
<span class="clearFix">&nbsp;</span>     
</div>
<? $this->session->unset_userdata('success_message'); ?> 
<? $this->session->unset_userdata('error_message'); ?> 