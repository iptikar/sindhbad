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
<h3>Upload *.xlsx File:</h3>
<?php if(isset($error)) {?>
	<?php echo '<span style="color:red">'.$error.'</span><br />'; ?>
<?php }?>
<?php if($this->session->flashdata("success_message")) {?>
	<?php echo '<span style="color:green>'.$this->session->flashdata("success_message").'</span><br />'; ?>
<?php }?>
<form action="<?php echo site_url("back_office/excel_c/do_import"); ?>" method="post" enctype="multipart/form-data">
<label>
Select Import type
</label>
<label>
<select name="section">
<option value="quantities">Quantities</option>
  <?php 
$aaaa = $this->session->userdata("roles");
if(!empty($aaaa) && in_array("admin",$aaaa)) {?>
<option value="codes">Programs Codes</option>
<?php }?>
</select>
</label>
<label>
<p>File: <input type="file" name="file"  />
</p>
<input type="submit" class="btn btn-primary" value="Parse" /></p>
</form>
<a href="<?php echo site_url("back_office"); ?>">Back to admin</a>
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