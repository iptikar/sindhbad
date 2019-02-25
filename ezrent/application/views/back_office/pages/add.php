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
<!-- end of div#left-col -->
<div class="span10" >

<div class="span10-fluid" >
<ul class="breadcrumb">
<li><b><a href="<?=base_url();?>back_office/pages">Pages</a></b> <span class="divider">/</span></li>
<li class="active"><?= $title; ?></li>
</ul> 
</div>
    
<div class="hundred pull-left control-group">
<form action="<?= base_url(); ?>back_office/pages/submit" method="post" class="middle-forms" enctype="multipart/form-data">
<p class="alert alert-info">Please complete the form below. Mandatory fields marked <em>*</em></p>
<?
if(isset($id)){
echo '<input type="hidden" name="id" value="'.$id.'" />';
} else {	
$info["title"] = "";
$info["meta_title"] = "";
$info["meta_description"] = "";
$info["meta_keywords"] = "";
$info["title_url"] = "";
$info["description"] = "";
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
<fieldset >
<label class="field-title"><b>Page Title <em>*</em>:</b></label> <label>
<input type="text" class="input-xxlarge" name="title" value="<?= set_value('title',$info["title"]); ?>" />
<?= form_error('title','<span class="text-error">','</span>'); ?>
</label>
<?
/*//PAGE TITLE SECTION.
echo form_label('<b>Page Title&nbsp;<small class="blue">(Max 65 Characters)</small>:</b>', 'Page Title');
echo form_input(array("name" => "meta_title", "value" => set_value("meta_title",$info["meta_title"]),"class" =>"span" ));
echo form_error("meta_title","<span class='text-error'>","</span>");
echo br();
//TITLE URL SECTION.
echo form_label('<b>TITLE URL&nbsp;<em></em>:</b>', 'TITLE URL');
echo form_input(array("name" => "title_url", "value" => set_value("title_url",$info["title_url"]),"class" =>"span" ));
echo form_error("title_url","<span class='text-error'>","</span>");
echo br();
//META DESCRIPTION SECTION.
echo form_label('<b>META DESCRIPTION&nbsp;<small class="blue">(Max 160 Characters)</small>:</b>', 'META DESCRIPTION');
echo form_textarea(array("name" => "meta_description", "value" => set_value("meta_description",$info["meta_description"]),"class" =>"span","rows" => 3, "cols" =>100));
echo form_error("meta_description","<span class='text-error'>","</span>");
echo br();
//META KEYWORDS SECTION.
echo form_label('<b>META KEYWORDS&nbsp;<small class="blue">(Max 160 Characters)</small>:</b>', 'META KEYWORDS');
echo form_textarea(array("name" => "meta_keywords", "value" => set_value("meta_keywords",$info["meta_keywords"]),"class" =>"span","rows" => 3, "cols" =>100 ));
echo form_error("meta_keywords","<span class='text-error'>","</span>");
echo br();*/
?>
<label class="field-title"><b>Description:</b></label>
<label>
<textarea class="ckeditor hundred" cols="100" id="description" name="description" rows="15">
<?= set_value('description',$info["description"]); ?></textarea>
</label>  
</fieldset>
<p class="pull-right">
<input type="submit" name="submie" value="Save Changes" class="btn btn-primary"  /></p>
<span class="clearFix">&nbsp;</span>
</form>
</div>


</div>
    
</div> 
</div>
<? $this->session->unset_userdata('success_message'); ?> 
<? $this->session->unset_userdata('error_message'); ?> 