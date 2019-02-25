<?
/*$content_name = $this->uri->segment(2);
$content_name1 = $this->uri->segment(4);
$cond1["name"]=str_replace("_"," ",$content_name1);
$id_content=$this->fct->getonecell("content_type","id_content",$cond1);
if($this->session->userdata("level") == 0){
$cond=array("id_user"=>$this->session->userdata("user_id"),"id_content"=>$id_content);
$write_priv=$this->fct->getonecell("priviledge","write_p",$cond);
} else { 
$write_priv=1;
}
if($write_priv != 1){ redirect(site_url("back_office/home/dashboard")); }	*/
?>
<div class="container-fluid">
<div class="row-fluid">
<div class="span2">
<? $this->load->view("back_office/includes/left_box"); ?>
</div>
<div class="span10" >
<div class="span10-fluid" >
<ul class="breadcrumb">
<li class="active">
<a class="blue" href="<?php echo site_url('back_office/'.$content_type); ?>"> List of <?php echo $content_type; ?></a>
 »
<?= $title1; ?></li>
</ul> 
</div>
<div class="hundred pull-left">  
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
<div id="uploader">
		<p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
	</div>
</fieldset>
<p class="pull-left">
<input type="hidden" name="content_type" value="<?= $content_type; ?>"  />
<input type="hidden" name="id_gallery" value="<?= $id_gallery; ?>"  />
<div id="ajax_gallery">
    <?php
		$data['content_type'] = $content_type;
		$data['id'] = $id_gallery;
		$data['gallery']=$this->fct->getAll_cond($content_type.'_gallery','sort_order',array('id_'.$content_type=>$id_gallery));
		$this->load->view('back_office/manage_gallery/ajax_gallery',$data);
		?>
</div>
</div> 
</div>
<? $this->session->unset_userdata("success_message"); ?> 
<? $this->session->unset_userdata("error_message"); ?> 