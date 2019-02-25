<div class="container-fluid">
<div class="row-fluid">
<div class="span2">
<? $this->load->view('back_office/includes/left_box'); ?>
</div>

<div class="span10" >
<div class="span10-fluid" >
<ul class="breadcrumb">
<li><a href="<?=base_url();?>back_office/newsletter">List Emails</a> <span class="divider">/</span></li>
<li class="active"><?= $title; ?></li>
</ul> 
</div>
<div class="hundred pull-left">  
<?php
$action = site_url("back_office/newsletter/submit");
$attributes = array(
	'class'=>'middle-forms'
);
echo form_open_multipart($action,$attributes);
?>  
<!--<form action="<? //= base_url(); ?>back_office/newsletter/submit" method="post" class="middle-forms" enctype="multipart/form-data">-->
<p class="alert alert-info">Please complete the form below. Mandatory fields marked <em>*</em>
<?
if(isset($id)){
echo '<input type="hidden" name="id" value="'.$id.'" />';
} else {	
$info=array('email'=>'');
$info['name'] = '';
$info['company'] = '';
$info['phone'] = '';
$info['address'] = '';
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
<label class="field-title">E-mail <em>*</em>:</label> <label>
<div class="input-prepend">
<span class="add-on"><i class="icon-envelope"></i></span>
<input type="text" class="input-xxlarge" name="email" value="<?= set_value('email',$info["email"]); ?>" /></div>
<?= form_error('email','<span class="text-error">','</span>'); ?>
</label>



<label class="field-title">Name:</label> <label>
<input type="text" class="input-xxlarge" name="name" value="<?= set_value('name',$info["name"]); ?>" />
<?= form_error('name','<span class="text-error">','</span>'); ?>
</label>

<label class="field-title">Company:</label> <label>
<input type="text" class="input-xxlarge" name="company" value="<?= set_value('company',$info["company"]); ?>" />
<?= form_error('company','<span class="text-error">','</span>'); ?>
</label>



<label class="field-title">Phone:</label> <label>
<input type="text" class="input-xxlarge" name="phone" value="<?= set_value('phone',$info["phone"]); ?>" />
<?= form_error('phone','<span class="text-error">','</span>'); ?>
</label>

<label class="field-title">Address:</label> <label>
<textarea name="address" /><?= set_value('address',$info["address"]); ?></textarea>
<?= form_error('address','<span class="text-error">','</span>'); ?>
</label>




</fieldset>
<p class="pull-left"><input type="image" src="<?= base_url(); ?>images/bt-send-form.png" class="btn btn-primary" /></p>
</form>

</div>
</div>    
</div>
<? $this->session->unset_userdata('success_message'); ?> 
<? $this->session->unset_userdata('error_message'); ?> 