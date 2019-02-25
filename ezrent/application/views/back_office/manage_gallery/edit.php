
<?php
$content_name="rabso";
$id_content="13";
if($this->session->userdata("level") == 0){
$cond=array("id_user"=>$this->session->userdata("user_id"),"id_content"=>$id_content);
$write_priv=$this->fct->getonecell("priviledge","write_p",$cond);
} else { 
$write_priv=1;
}
if($write_priv != 1){ redirect(site_url("back_office/home/dashboard")); }	
?>
<div class="container-fluid">
<div class="row-fluid">
<div class="span2">
<? $this->load->view("back_office/includes/left_box"); ?>
</div>
<div class="span10" >
<div class="span10-fluid" >
<ul class="breadcrumb">
<li class="active"><?= $title1; ?></li>
</ul> 
</div>
<div class="hundred pull-left">  
<form action="<?= site_url('back_office/control/edit_photo_submit'); ?>" method="post" class="middle-forms" enctype="multipart/form-data">
<?
if(isset($id)){?>
<input type="hidden" name="id" value="<?= $id; ?>" /> 
<?
} else {
$info["title"] = "";
$info["image"] = "";
}
?>
<input type="hidden" name="id_gallery" value="<?= $id_gallery; ?>" />
<input type="hidden" name="content_type" value="<?=$content_type;?>"  />
<? if($this->session->userdata("success_message")){ ?>
<div class="alert alert-success">
<?= $this->session->userdata("success_message"); ?>
</div>
<? } ?>
<? if($this->session->userdata("error_message")){ ?>
<div class="alert alert-error">
<?= $this->session->userdata("error_message"); ?>
</div>
<? } ?>
</p>
<fieldset>
<legend></legend>
<label class="field-title"><h5>Title</h5>
</label>
<label>
<input class="txtbox-middle" name="title" value="<?= set_value("title",$info["title"]); ?>" />
<?= form_error("title","<span class='form-error-inline'>","</span>"); ?>
</label>
<label class="field-title"><h5>Image</h5>
</label>
<label>
<input type="file"  name="image" />
<span >
<?
if($info["image"] != ""){ ?>	
<a href="<?= base_url(); ?>uploads/<?=$content_type;?>/gallery/<?= $info["image"]; ?>" class="blue gallery" title="<?= $info["title"]; ?>" >
show image
</a>
&nbsp;&nbsp;&nbsp;
<a class="cur" onclick="if(confirm('Are you sure you want to delete this image ?')){ window.location=' <?= site_url('back_office/control/delete_image_gallery/image/'.$info["image"].'/'.$id_gallery.'/'.$id.'/'.$content_type); ?>' } " >
<img src="<?= base_url(); ?>images/delete.png"  /></a>
<? } else { echo "<span class='blue'>No Image Available</span>"; } ?>
</span>
<?= form_error("image","<span class='form-error-inline'>","</span>"); ?>
</label>

</fieldset>
<p class="pull-left">
<input type="image" src="<?= base_url(); ?>images/bt-send-form.png" class="btn btn-primary" />
</p>
</form>
</div>   
<span class="clearFix">&nbsp;</span>     
</div>
<? $this->session->unset_userdata("success_message"); ?> 
<? $this->session->unset_userdata("error_message"); ?> 