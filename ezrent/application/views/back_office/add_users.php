<?php
$lang = "";
if($this->config->item("language_module")) {
	$lang = getFieldLanguage($this->lang->lang());
}
?>
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
<li><a href="<?=site_url('back_office/users');?>">List Users</a> <span class="divider">/</span></li>
<li><?= $title; ?></li>
</ul>
</div>    
<div class="hundred pull-left">  
<?php
$action = site_url('back_office/users/submit');
$attributes = array(
"class"=>"middle-forms"
);
echo form_open($action,$attributes);
?>
<!--<form action="<?= site_url('back_office/users/submit'); ?>" method="post" class="middle-forms">-->
<p class="alert alert-info">Please complete the form below. Mandatory fields marked <em>*</em>
<?
if(isset($id)){
	echo '<input type="hidden" name="id" value="'.$id.'" />';
} else {	
$info=array('name'=>'','email'=>'','phone'=>'','address'=>'','username'=>'','password'=>'','id_roles' => '','status' => '','id_discount_groups' => '');
$info['company_name'] = "";
$info['vat_number'] = "";
$info['salutation'] = "";
$info['first_name'] = "";
$info['surname'] = "";
$info['how_did_you_find_us'] = "";
$info['other'] = "";
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
<label class="field-title">Full Name <em>*</em>:</label> <label>
<input type="text" class="input-xxlarge" name="name" value="<?= set_value('name',$info["name"]); ?>" />
<?= form_error('name','<span class="text-error">','</span>'); ?>
</label>


<label class="field-title">Email<em>*</em>: </label> <label>
<input type="text" class="input-xxlarge" name="email" value="<?= set_value('email',$info["email"]); ?>" />
<?= form_error('email','<span class="text-error">','</span>'); ?>
</label>
<label class="field-title" >Phone:</label> <label>
<input type="text" class="input-xxlarge" name="phone" value="<?= set_value('phone',$info["phone"]); ?>"   />
</label>
<label class="field-title">Address:</label>
<label>
<textarea class="hundred" name="address" rows="7" cols="25"><?= set_value('address',$info["address"]); ?></textarea>
</label>



<label class="field-title">User Name<em>*</em>:</label>
<label><input type="text" class="input-xlarge" name="username" value="<?= set_value('username',$info["username"]); ?>" />
<?= form_error('username','<span class="text-error">','</span>'); ?>
</label>
<label class="field-title">Password <?php if(!isset($id)) {?><em>*</em>:<?php }?></label>
<label><input type="password" class="input-xlarge" name="password" value="<?= set_value('password'); ?>" />
<?= form_error('password','<span class="text-error">','</span>'); ?>
</label> 

<label class="field-title">Confirm Password<?php if(!isset($id)) {?><em>*</em>:<?php }?></label>
<label><input type="password" class="input-xlarge" name="confirm_password" value="<?= set_value('confirm_password'); ?>" />
<?= form_error('confirm_password','<span class="text-error">','</span>'); ?>
</label>

<label>Level</label>
<label>
<select name="roles" id="roles" class="input-xxlarge">
<option value="" > - Select Level - </option>
<? foreach($roles as $val){ 
if(($val["id_roles"] == 1 || $val["id_roles"] == 3)  && $this->session->userdata('level')== 0){ // Do nothing 
} 
elseif($val["id_roles"] == 3 && $this->session->userdata('level')== 2){ // Do nothing 
}
else {
?>
<option value="<?= $val["id_roles"]; ?>" <? if(set_value('roles',$info["id_roles"]) == $val["id_roles"]) echo 'selected="selected"'; ?> ><?= $val["title"]; ?></option>
<? }
} ?>
</select>
<?= form_error('roles','<span class="text-error">','</span>'); ?>
</label>
		

 
<label>Status</label>
<label>
<select name="status" class="input-xxlarge" >
<option value="0" <? if(set_value('status',$info["status"]) == 0) echo 'selected="selected"'; ?> >Blocked</option>
<option value="1" <? if(set_value('status',$info["status"]) == 1) echo 'selected="selected"'; ?> >Active</option>
</select>
<?= form_error('status','<span class="text-error">','</span>'); ?>
</label> 

<label><input type="checkbox" name="inform_client" value="1" style="margin-top:0" />&nbsp;&nbsp;Inform Client</label>
 


</fieldset>
<p class="pull-right">
<input type="submit" name="submit"  value="Save Changes" class="btn btn-primary"  />
</p>
</form>
</div>


</div><!-- end of div#mid-col -->

<!-- end of div#right-col -->     
<span class="clearFix">&nbsp;</span>     
</div>
<? $this->session->unset_userdata('success_message'); ?> 
<? $this->session->unset_userdata('error_message'); ?> 