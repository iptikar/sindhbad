<? 
$cond=array('id_settings'=>1);
$this->db->select('image,website_title');
$title_site=$this->fct->getonerow('settings',$cond); 
$seg=$this->uri->segment(2);
 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?= $title_site["website_title"]; ?> CMS</title>
<link href="<?=base_url();?>css/bootstrap.css" rel="stylesheet" media="screen">

</head>

<body>
<div class="hundred pull-left" style="background:url(<?=base_url();?>/img/blue.png) repeat-x top left #ffffff;" >
<div id="distance"></div>
<div class="page-header">
<h2 style="text-align:center"><a>
<img src="<?= base_url(); ?>uploads/website/<?= $title_site["image"]; ?>" />
<i><?= $title_site["website_title"]; ?></i></a></h2></div>
<div class="container-fluid">
<div class="row-fluid">
<div class="row-fluid ">
<table border="0" width="100%">
<tr><td style="text-align:center" >
<div class="well ">
<div style="width:98%;padding:10px 0 0 5px; text-align:center;" >
<?php  echo validation_errors('<div class="alert alert-error">','</div>'); ?>
<?
if($this->session->flashdata('error_messages')){
	echo '<div class="alert alert-error">'.$this->session->flashdata('error_messages').'</div>' ;
} ?>
<?
if($this->session->flashdata('success_messages')){
	echo '<div class="alert alert-success">'.$this->session->flashdata('success_messages').'</div>' ;
}
if(isset($success_messages)){
	echo '<div class="alert alert-success">'.$success_messages.'</div>' ;
} ?>
</div>
<div class="alert alert-info">
Please enter your email in the below field...
</div>

<?php 
$action = site_url('back_office/home/update_password');
$attributes = array(
'name'=>'login-form',
'style'=>'margin-top:15px;'
);
echo form_open($action,$attributes);
?>
<!--<form action="<?= site_url('back_office/home/update_password'); ?>" method="post" name="login-form" style="margin-top:15px;">-->
<input type="hidden" id="id_user" name="id_user" value="<?php echo $id_user; ?>" />
<fieldset>
<label >Password:</label>
<label >
<input type="password" name="password" value="<?= set_value('password'); ?>" placeholder="Password" /></label>
<label >Confirm Password:</label>
<label >
<input type="password" name="confirm_password" value="<?= set_value('confirm_password'); ?>" placeholder="Confirm Password" /></label>
<div class="clearfix"></div>
<!--<label class="remember"><a href="<?php //echo route_to('user/password'); ?>" target="_blank">Forgot your password?</a></label>-->
<div class="align-right">
<input type="submit" name="submit" value="Update Passwords" class="btn btn-primary" >

</div>
<!--<br />
<label class="remember"><a href="<?php echo site_url('back_office'); ?>">Back?</a></label>-->
</fieldset>
</form>
</div>
</td></tr></table>
</div>
<div class="clearfix" ></div>
</div></div>
<div class="distance"></div>
</div>
<script src="<?= base_url(); ?>js/jquery-latest.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
</body>
</html>
<? $this->session->unset_userdata('login_error'); ?>