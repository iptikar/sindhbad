<div class="container-fluid">
<div class="row-fluid">
<div class="span2">
<? $this->load->view("back_office/includes/left_box"); ?>
</div>
<div class="span10" >
<div class="span10-fluid" >
<?
if(isset($breadcrumbs)) {
	echo $breadcrumbs;
}
else {
$ul = array(
            anchor('back_office/blog/'.$this->session->userdata("back_link"),'<b>List blog</b>').'<span class="divider">/</span>',
            $title => array('li_attributes' => 'class = "active"', 'contents' => $title),
            );
if($this->config->item("language_module") && isset($id)) {
			   $ul['translate'] = array('li_attributes' => 'class = "pull-right"', 'contents' => '<a href="'.site_url('back_office/translation/section/blog/'.$id).'" class="btn btn-info top_btn">Translate</a>');
			}

$ul_attributes = array(
                    'class' => 'breadcrumb'
                    );
echo ul($ul, $ul_attributes);
}
?>
</div>
<div class="hundred pull-left">   
<?
$lang = "";
if($this->config->item("language_module")) {
	$lang = getFieldLanguage($this->lang->lang());
}
$attributes = array('class' => 'middle-forms');
echo form_open_multipart('back_office/blog/submit', $attributes); 
echo '<p class="alert alert-info">Please complete the form below. Mandatory fields marked <em>*</em></p>';
if(isset($id)){
echo form_hidden('id', $id);
} else {
$info["blog_date"] = "";
$info["description"] = "";
$info["picture"] = "";
$info["is_popular"] = "";
$info["blog_category"] = "";
$info["blog_tags"] = "";
$info["image_alt"] = "";
$info["image_title"] = "";
$info["title".$lang] = "";
$info["meta_title".$lang] = "";
$info["meta_description".$lang] = "";
$info["meta_keywords".$lang] = "";
$info["title_url".$lang] = "";
}
if($this->session->userdata("success_message")){ 
echo '<div class="alert alert-success">';
echo $this->session->userdata("success_message");
echo '</div>';
}
if($this->session->userdata("error_message")){
echo '<div class="alert alert-error">';
echo $this->session->userdata("error_message"); 
echo '</div>';
}
echo form_fieldset("");
if($this->config->item("language_module")) {
	$data['info'] = $info;
	$this->load->view('back_office/translation/add_view_language',$data);
}



//TITLE SECTION.
echo form_label('<b>Title&nbsp;<em>*</em>:</b>', 'Title');
echo form_input(array("name" => "title".$lang, "value" => set_value("title".$lang,$info["title".$lang]),"class" =>"span" ));
echo form_error("title".$lang,"<span class='text-error'>","</span>");
echo br();
//PAGE TITLE SECTION.
echo form_label('<b>Page Title&nbsp;<small class="blue">(Max 65 Characters)</small>:</b>', 'Page Title');
echo form_input(array("name" => "meta_title".$lang, "value" => set_value("meta_title".$lang,$info["meta_title".$lang]),"class" =>"span" ));
echo form_error("meta_title".$lang,"<span class='text-error'>","</span>");
echo br();
//TITLE URL SECTION.
echo form_label('<b>TITLE URL&nbsp;<em></em>:</b>', 'TITLE URL');
echo form_input(array("name" => "title_url".$lang, "value" => set_value("title_url".$lang,$info["title_url".$lang]),"class" =>"span" ));
echo form_error("title_url".$lang,"<span class='text-error'>","</span>");
echo br();
//META DESCRIPTION SECTION.
echo form_label('<b>META DESCRIPTION&nbsp;<small class="blue">(Max 160 Characters)</small>:</b>', 'META DESCRIPTION');
echo form_textarea(array("name" => "meta_description".$lang, "value" => set_value("meta_description".$lang,$info["meta_description".$lang]),"class" =>"span","rows" => 3, "cols" =>100));
echo form_error("meta_description".$lang,"<span class='text-error'>","</span>");
echo br();
//META KEYWORDS SECTION.
echo form_label('<b>META KEYWORDS&nbsp;<small class="blue">(Max 160 Characters)</small>:</b>', 'META KEYWORDS');
echo form_textarea(array("name" => "meta_keywords".$lang, "value" => set_value("meta_keywords".$lang,$info["meta_keywords".$lang]),"class" =>"span","rows" => 3, "cols" =>100 ));
echo form_error("meta_keywords".$lang,"<span class='text-error'>","</span>");
echo br();

//BLOG DATE SECTION.
echo form_label('<b>BLOG DATE</b>', 'BLOG DATE');
echo '<div class="input-append date" data-date="" data-date-format="dd/mm/yyyy">';
echo form_input(array('name' => 'blog_date', 'value' => set_value("blog_date",$this->fct->date_out_formate($info["blog_date"])),'class' =>'input-small','size'=>16 ));
echo '<span class="add-on"><i class="icon-th"></i></span></div>';
echo form_error("blog_date","<span class='text-error'>","</span>");
echo br();
//DESCRIPTION&nbsp;<em>*</em>: SECTION.
echo form_label('<b>DESCRIPTION&nbsp;<em>*</em>:</b>', 'DESCRIPTION&nbsp;<em>*</em>:');
echo form_textarea(array("name" => "description", "value" => set_value("description",$info["description"]),"class" =>"ckeditor","id" => "description", "rows" => 15, "cols" =>100 ));
echo form_error("description","<span class='text-error'>","</span>");
echo br();
//PICTURE SECTION.
echo form_label('<b>PICTURE</b>', 'PICTURE');
echo form_upload(array("name" => "picture", "class" => "input-large"));
echo "<span >";
if($info["picture"] != ""){ 
echo '<span id="picture_'.$info["id_blog"].'">'.anchor('uploads/blog/'.$info["picture"],'show image',array("class" => 'blue gallery'));
echo nbs(3);?>
<a class="cur" onclick='removeFile("blog","picture","<?php echo $info["picture"]; ?>",<?php echo $info["id_blog"]; ?>)'><img src="<?php echo base_url()?>images/delete.png" /></a></span>
<?php
} else { echo "<span class='blue'>No Image Available</span>"; } 
echo "</span>";
echo form_error("picture","<span class='text-error'>","</span>");
echo br();

echo form_label('<b>Image Title&nbsp;<em>*</em>:</b>', 'Title');
echo form_input(array("name" => "image_title", "value" => set_value("image_title",$info["image_title"]),"class" =>"span" ));
echo form_error("image_title","<span class='text-error'>","</span>");
echo br();

echo form_label('<b>Image Alt&nbsp;<em>*</em>:</b>', 'Title');
echo form_input(array("name" => "image_alt", "value" => set_value("image_alt",$info["image_alt"]),"class" =>"span" ));
echo form_error("image_alt","<span class='text-error'>","</span>");
echo br();

//IS POPULAR SECTION.
echo form_label('<b>IS POPULAR</b>', 'IS POPULAR');
$options = array(
                  "" => " - select option - ",
                  1 => "Active",
                  0 => "InActive",
                );
echo form_dropdown("is_popular", $options,set_value("is_popular",$info["is_popular"]), 'class="span"');
echo form_error("is_popular","<span class='text-error'>","</span>");
echo br();
//BLOG CATEGORY SECTION.
echo form_label('<b>BLOG CATEGORY</b>', 'BLOG CATEGORY');
$items = $this->fct->getAll("blog_category","sort_order"); 
echo '<select name="blog_category'.'"  class="span">';
echo '<option value="" > - select blog_category - </option>';
foreach($items as $valll){ 
?>
<option value="<?= $valll["id_blog_category"]; ?>" <? if(isset($id)){  if($info["id_blog_category"] == $valll["id_blog_category"]){ echo 'selected="selected"'; } } ?> ><?= $valll["title"]; ?></option>
<?
}
echo "</select>";
echo form_error("blog_category","<span class='text-error'>","</span>");
echo br();
//BLOG TAGS SECTION.
echo form_label('<b>BLOG TAGS</b>', 'BLOG TAGS');
$items = $this->fct->getAll("blog_tags","sort_order"); 
echo '<select name="blog_tags'.'"  class="span">';
echo '<option value="" > - select blog_tags - </option>';
foreach($items as $valll){ 
?>
<option value="<?= $valll["id_blog_tags"]; ?>" <? if(isset($id)){  if($info["id_blog_tags"] == $valll["id_blog_tags"]){ echo 'selected="selected"'; } } ?> ><?= $valll["title"]; ?></option>
<?
}
echo "</select>";
echo form_error("blog_tags","<span class='text-error'>","</span>");
echo br();
echo br();
if ($this->uri->segment(3) != "view" ){
echo '<p class="pull-right">';
echo form_submit(array('name' => 'submit','value' => 'Save Changes','class' => 'btn btn-primary') );
echo '</p>';
}
echo form_fieldset_close();
echo form_close();
?>
</div>
</div>     
</div>
</div>
<? 
$this->session->unset_userdata("success_message");
$this->session->unset_userdata("error_message"); 
?>