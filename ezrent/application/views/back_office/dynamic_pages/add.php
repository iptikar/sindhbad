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
            anchor('back_office/dynamic_pages/'.$this->session->userdata("back_link"),'<b>List dynamic pages</b>').'<span class="divider">/</span>',
            $title => array('li_attributes' => 'class = "active"', 'contents' => $title),
            );
if($this->config->item("language_module") && isset($id)) {
			   $ul['translate'] = array('li_attributes' => 'class = "pull-right"', 'contents' => '<a href="'.site_url('back_office/translation/section/dynamic_pages/'.$id).'" class="btn btn-info top_btn">Translate</a>');
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
echo form_open_multipart('back_office/dynamic_pages/submit', $attributes); 
echo '<p class="alert alert-info">Please complete the form below. Mandatory fields marked <em>*</em></p>';
if(isset($id)){
echo form_hidden('id', $id);
} else {
$info["image"] = "";
$info["youtube"] = "";
$info["vimeo"] = "";
$info["description".$lang] = "";
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
/*//PAGE TITLE SECTION.
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
echo br();*/

//IMAGE SECTION.
echo form_label('<b>IMAGE</b>', 'IMAGE');

	echo form_label("width:557px; height:286px;","help_text",array("class"=>"yellow"));
	echo form_upload(array("name" => "image", "class" => "input-large"));
echo "<span >";
if($info["image"] != ""){ 
echo '<span id="image_'.$info["id_dynamic_pages"].'">'.anchor('uploads/dynamic_pages/'.$info["image"],'show image',array("class" => 'blue gallery'));
echo nbs(3);?>
<a class="cur" onclick='removeFile("dynamic_pages","image","<?php echo $info["image"]; ?>",<?php echo $info["id_dynamic_pages"]; ?>)'><img src="<?php echo base_url()?>images/delete.png" /></a></span>
<?php
} else { echo "<span class='blue'>No Image Available</span>"; } 
echo "</span>";
echo form_error("image","<span class='text-error'>","</span>");
echo br();

echo form_label('<b>Image Title&nbsp;:</b>', 'Title');
echo form_input(array("name" => "image_title", "value" => set_value("image_title",$info["image_title"]),"class" =>"span" ));
echo form_error("image_title","<span class='text-error'>","</span>");
echo br();

echo form_label('<b>Image Alt&nbsp;:</b>', 'Title');
echo form_input(array("name" => "image_alt", "value" => set_value("image_alt",$info["image_alt"]),"class" =>"span" ));
echo form_error("image_alt","<span class='text-error'>","</span>");
echo br();
//YOUTUBE SECTION.
echo form_label('<b>YOUTUBE</b>', 'YOUTUBE');

	echo form_label("ex: http://www.youtube.com/watch?v=jALUW3EqjgE","help_text",array("class"=>"yellow"));
	echo form_input(array('name' => 'youtube', 'value' => set_value("youtube",$info["youtube"]),'class' =>'span' ));
echo form_error("youtube","<span class='text-error'>","</span>");
echo br();
//VIMEO SECTION.
echo form_label('<b>VIMEO</b>', 'VIMEO');

	echo form_label("ex: http://vimeo.com/17299166","help_text",array("class"=>"yellow"));
	echo form_input(array('name' => 'vimeo', 'value' => set_value("vimeo",$info["vimeo"]),'class' =>'span' ));
echo form_error("vimeo","<span class='text-error'>","</span>");
echo br();
//DESCRIPTION SECTION.
echo form_label('<b>DESCRIPTION</b>', 'DESCRIPTION');
echo form_textarea(array("name" => "description".$lang, "value" => set_value("description".$lang,$info["description".$lang]),"class" =>"ckeditor","id" => "description".$lang, "rows" => 15, "cols" =>100 ));
echo form_error("description".$lang,"<span class='text-error'>","</span>");
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