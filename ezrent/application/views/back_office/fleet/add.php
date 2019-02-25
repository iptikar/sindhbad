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
            anchor('back_office/fleet/'.$this->session->userdata("back_link"),'<b>List fleet</b>').'<span class="divider">/</span>',
            $title => array('li_attributes' => 'class = "active"', 'contents' => $title),
            );
			if(isset($id)) {
			$ul['gallery'] = array('li_attributes' => 'class = "pull-right"', 'contents' => '<a href="'.site_url('back_office/control/manage_gallery/fleet/'.$id).'" class="btn btn-info top_btn">Manage Gallery</a>');}
if($this->config->item("language_module") && isset($id)) {
			   $ul['translate'] = array('li_attributes' => 'class = "pull-right"', 'contents' => '<a href="'.site_url('back_office/translation/section/fleet/'.$id).'" class="btn btn-info top_btn">Translate</a>');
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
echo form_open_multipart('back_office/fleet/submit', $attributes); 
echo '<p class="alert alert-info">Please complete the form below. Mandatory fields marked <em>*</em></p>';
if(isset($id)){
echo form_hidden('id', $id);
} else {
$info["category"] = "";
$info["description"] = "";
$info["daily_cost"] = "";
$info["weekly_cost"] = "";
$info["monthly_cost"] = "";
$info["km_per_day"] = "";
$info["characteristics"] = "";
$info["picture"] = "";
$info["picture_offer"] = "";
$info["is_offer"] = "";
$info["daily_offer_details"] = "";
$info["weekly_offer_details"] = "";
$info["monthly_offer_details"] = "";
$info["image_alt"] = "";
$info["image_title"] = "";
$info["title".$lang] = "";
$info["meta_title".$lang] = "";
$info["meta_description".$lang] = "";
$info["meta_keywords".$lang] = "";
$info["title_url".$lang] = "";

$info["not_fleet"] = "";
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

//CATEGORY&nbsp;<em>*</em>: SECTION.
echo form_label('<b>CATEGORY&nbsp;<em>*</em>:</b>', 'CATEGORY&nbsp;<em>*</em>:');
$items = $this->fct->getAll("category","sort_order"); 
echo '<select name="category'.'"  class="span">';
echo '<option value="" > - select category - </option>';
foreach($items as $valll){ 
?>
<option value="<?= $valll["id_category"]; ?>" <? if(isset($id)){  if($info["id_category"] == $valll["id_category"]){ echo 'selected="selected"'; } } ?> ><?= $valll["title"]; ?></option>
<?
}
echo "</select>";
echo form_error("category","<span class='text-error'>","</span>");
echo br();
//DESCRIPTION&nbsp;<em>*</em>: SECTION.
echo form_label('<b>DESCRIPTION&nbsp;<em>*</em>:</b>', 'DESCRIPTION&nbsp;<em>*</em>:');
echo form_textarea(array("name" => "description", "value" => set_value("description",$info["description"]),"class" =>"ckeditor","id" => "description", "rows" => 15, "cols" =>100 ));
echo form_error("description","<span class='text-error'>","</span>");
echo br();
//DAILY COST SECTION.
echo form_label('<b>DAILY COST</b>', 'DAILY COST');
echo form_input(array('name' => 'daily_cost', 'value' => set_value("daily_cost",$info["daily_cost"]),'class' =>'span' ));
echo form_error("daily_cost","<span class='text-error'>","</span>");
echo br();
//WEEKLY COST SECTION.
echo form_label('<b>WEEKLY COST</b>', 'WEEKLY COST');
echo form_input(array('name' => 'weekly_cost', 'value' => set_value("weekly_cost",$info["weekly_cost"]),'class' =>'span' ));
echo form_error("weekly_cost","<span class='text-error'>","</span>");
echo br();
//MONTHLY COST SECTION.
echo form_label('<b>MONTHLY COST</b>', 'MONTHLY COST');
echo form_input(array('name' => 'monthly_cost', 'value' => set_value("monthly_cost",$info["monthly_cost"]),'class' =>'span' ));
echo form_error("monthly_cost","<span class='text-error'>","</span>");
echo br();
//KM PER DAY SECTION.
echo form_label('<b>KM PER DAY</b>', 'KM PER DAY');
echo form_input(array('name' => 'km_per_day', 'value' => set_value("km_per_day",$info["km_per_day"]),'class' =>'span' ));
echo form_error("km_per_day","<span class='text-error'>","</span>");
echo br();
//CHARACTERISTICS SECTION.
echo form_label('<b>CHARACTERISTICS</b>', 'CHARACTERISTICS');
//echo form_input(array('name' => 'characteristics', 'value' => set_value("characteristics",$info["characteristics"]),'class' =>'span' ));

echo form_textarea(array("name" => "characteristics", "value" => set_value("characteristics",$info["characteristics"]),"class" =>"ckeditor","id" => "characteristics", "rows" => 15, "cols" =>100 ));
echo form_error("characteristics","<span class='text-error'>","</span>");
echo br();
//PICTURE SECTION.
echo form_label('<b>PICTURE</b>', 'PICTURE');
echo form_upload(array("name" => "picture", "class" => "input-large"));
echo "<span >";
if($info["picture"] != ""){ 
echo '<span id="picture_'.$info["id_fleet"].'">'.anchor('uploads/fleet/'.$info["picture"],'show image',array("class" => 'blue gallery'));
echo nbs(3);?>
<a class="cur" onclick='removeFile("fleet","picture","<?php echo $info["picture"]; ?>",<?php echo $info["id_fleet"]; ?>)'><img src="<?php echo base_url()?>images/delete.png" /></a></span>
<?php
} else { echo "<span class='blue'>No Image Available</span>"; } 
echo "</span>";
echo form_error("picture","<span class='text-error'>","</span>");
echo br();

echo form_label('<b>Image Title&nbsp;:</b>', 'Title');
echo form_input(array("name" => "image_title", "value" => set_value("image_title",$info["image_title"]),"class" =>"span" ));
echo form_error("image_title","<span class='text-error'>","</span>");
echo br();

echo form_label('<b>Image Alt&nbsp;:</b>', 'Title');
echo form_input(array("name" => "image_alt", "value" => set_value("image_alt",$info["image_alt"]),"class" =>"span" ));
echo form_error("image_alt","<span class='text-error'>","</span>");
echo br();

echo br();
//IS OFFER SECTION.
echo form_label('<b>IS OFFER</b>', 'IS OFFER');
$options = array(
                  "" => " - select option - ",
                  1 => "Active",
                  0 => "InActive",
                );
echo form_dropdown("is_offer", $options,set_value("is_offer",$info["is_offer"]), 'class="span"');
echo form_error("is_offer","<span class='text-error'>","</span>");
echo br();
echo br();

$cl = "";
if( (isset($not_fleet) && $not_fleet == 1) || (isset($info['not_fleet']) && $info['not_fleet'] == 1))
$cl = "checked='checked'";
?>
<label><input type="checkbox" <?php echo $cl; ?> name="not_fleet" value="1" /> <b>Hide From Fleet</b><label>
<?php
echo br();
echo br();
//DAILY OFFER DETAILS SECTION.
echo form_label('<b>DAILY OFFER DETAILS</b>', 'DAILY OFFER DETAILS');
echo form_input(array('name' => 'daily_offer_details', 'value' => set_value("daily_offer_details",$info["daily_offer_details"]),'class' =>'span' ));
echo form_error("daily_offer_details","<span class='text-error'>","</span>");
echo br();
//WEEKLY OFFER DETAILS SECTION.
echo form_label('<b>WEEKLY OFFER DETAILS</b>', 'WEEKLY OFFER DETAILS');
echo form_input(array('name' => 'weekly_offer_details', 'value' => set_value("weekly_offer_details",$info["weekly_offer_details"]),'class' =>'span' ));
echo form_error("weekly_offer_details","<span class='text-error'>","</span>");
echo br();
//MONTHLY OFFER DETAILS SECTION.
echo form_label('<b>MONTHLY OFFER DETAILS</b>', 'MONTHLY OFFER DETAILS');
echo form_input(array('name' => 'monthly_offer_details', 'value' => set_value("monthly_offer_details",$info["monthly_offer_details"]),'class' =>'span' ));
echo form_error("monthly_offer_details","<span class='text-error'>","</span>");
echo br();
echo br();

//PICTURE SECTION.
echo form_label('<b>PICTURE OFFER</b>', 'PICTURE OFFER');
echo form_upload(array("name" => "picture_offer", "class" => "input-large"));
echo "<span >";
if($info["picture_offer"] != ""){ 
echo '<span id="picture_offer_'.$info["id_fleet"].'">'.anchor('uploads/fleet/'.$info["picture_offer"],'show image',array("class" => 'blue gallery'));
echo nbs(3);?>
<a class="cur" onclick='removeFile("fleet","picture_offer","<?php echo $info["picture_offer"]; ?>",<?php echo $info["id_fleet"]; ?>)'><img src="<?php echo base_url()?>images/delete.png" /></a></span>
<?php
} else { echo "<span class='blue'>No Image Available</span>"; } 
echo "</span>";
echo form_error("picture_offer","<span class='text-error'>","</span>");
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