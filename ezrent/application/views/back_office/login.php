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
if($this->session->userdata('login_error')){
	echo '<div class="alert alert-error">'.$this->session->userdata('login_error').'</div>' ;
} ?>
<?
if($this->session->flashdata('error_messages')){
	echo '<div class="alert alert-error">'.$this->session->userdata('error_messages').'</div>' ;
} ?>
</div>
<div class="alert alert-info">
Please login with your Username and Password.
</div>
<?php 
$action = site_url('back_office/home/login_validate');
$attributes = array(
'name'=>'login-form',
'style'=>'margin-top:15px;'
);
echo form_open($action,$attributes);
?>
<!--<form action="<?= site_url('back_office/home/login_validate'); ?>" method="post" name="login-form" style="margin-top:15px;">-->
<fieldset>
<label >Username:</label>
<label >
<div class="input-prepend" title="Email" data-rel="tooltip">
<span class="add-on"><i class="icon-user"></i></span>
<input type="text" name="username" value="<?= set_value('username'); ?>" placeholder="Username" /></div></label>
<label>Password:</label><label>
<div class="clearfix"></div>
<div class="input-prepend" title="Password" data-rel="tooltip">
<span class="add-on"><i class="icon-lock"></i></span>
<input type="password" name="pass" value="<?= set_value('pass'); ?>" placeholder="Password" /></div>
</label>
<div class="clearfix"></div>
<label class="remember"><a href="<?php echo site_url('back_office/home/password'); ?>">Forgot your password?</a></label>
<div class="align-right">
<input type="submit" name="submit" value="LogIn" class="btn btn-primary" >

</div>

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