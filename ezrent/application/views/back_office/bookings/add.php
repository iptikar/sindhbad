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
            anchor('back_office/bookings/'.$this->session->userdata("back_link"),'<b>List bookings</b>').'<span class="divider">/</span>',
            $title => array('li_attributes' => 'class = "active"', 'contents' => $title),
            );
if($this->config->item("language_module") && isset($id)) {
			   $ul['translate'] = array('li_attributes' => 'class = "pull-right"', 'contents' => '<a href="'.site_url('back_office/translation/section/bookings/'.$id).'" class="btn btn-info top_btn">Translate</a>');
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
echo form_open_multipart('back_office/bookings/submit', $attributes); 
echo '<p class="alert alert-info">Please complete the form below. Mandatory fields marked <em>*</em></p>';
if(isset($id)){
echo form_hidden('id', $id);
} else {
$info["name"] = "";
$info["phone"] = "";
$info["email"] = "";
$info["address"] = "";
$info["details"] = "";
$info["fleet"] = "";
$info["pickup_location"] = "";
$info["dropoff_location"] = "";
$info["pickup_date"] = "";
$info["dropoff_date"] = "";

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

//NAME&nbsp;<em>*</em>: SECTION.
echo form_label('<b>NAME&nbsp;<em>*</em>:</b>', 'NAME&nbsp;<em>*</em>:');
echo form_input(array('name' => 'name', 'value' => set_value("name",$info["name"]),'class' =>'span' ));
echo form_error("name","<span class='text-error'>","</span>");
echo br();
//PHONE SECTION.
echo form_label('<b>PHONE</b>', 'PHONE');
echo form_input(array('name' => 'phone', 'value' => set_value("phone",$info["phone"]),'class' =>'span' ));
echo form_error("phone","<span class='text-error'>","</span>");
echo br();
//EMAIL SECTION.
echo form_label('<b>EMAIL</b>', 'EMAIL');
echo form_input(array('name' => 'email', 'value' => set_value("email",$info["email"]),'class' =>'span' ));
echo form_error("email","<span class='text-error'>","</span>");
echo br();
//ADDRESS SECTION.
echo form_label('<b>ADDRESS</b>', 'ADDRESS');
echo form_input(array('name' => 'address', 'value' => set_value("address",$info["address"]),'class' =>'span' ));
echo form_error("address","<span class='text-error'>","</span>");
echo br();
//DETAILS SECTION.
echo form_label('<b>DETAILS</b>', 'DETAILS');
echo form_input(array('name' => 'details', 'value' => set_value("details",$info["details"]),'class' =>'span' ));
echo form_error("details","<span class='text-error'>","</span>");
echo br();
//FLEET SECTION.
echo form_label('<b>FLEET</b>', 'FLEET');
$items = $this->fct->getAll("fleet","sort_order"); 
echo '<select name="fleet'.'"  class="span">';
echo '<option value="" > - select fleet - </option>';
foreach($items as $valll){ 
?>
<option value="<?= $valll["id_fleet"]; ?>" <? if(isset($id)){  if($info["id_fleet"] == $valll["id_fleet"]){ echo 'selected="selected"'; } } ?> ><?= $valll["title"]; ?></option>
<?
}
echo "</select>";
echo form_error("fleet","<span class='text-error'>","</span>");
echo br();
//PICKUP LOCATION SECTION.
echo form_label('<b>PICKUP LOCATION</b>', 'PICKUP LOCATION');
echo form_input(array('name' => 'pickup_location', 'value' => set_value("pickup_location",$info["pickup_location"]),'class' =>'span' ));
echo form_error("pickup_location","<span class='text-error'>","</span>");
echo br();
//DROPOFF LOCATION SECTION.
echo form_label('<b>DROPOFF LOCATION</b>', 'DROPOFF LOCATION');
echo form_input(array('name' => 'dropoff_location', 'value' => set_value("dropoff_location",$info["dropoff_location"]),'class' =>'span' ));
echo form_error("dropoff_location","<span class='text-error'>","</span>");
echo br();
//PICKUP DATE SECTION.
echo form_label('<b>PICKUP DATE</b>', 'PICKUP DATE');
echo form_input(array('name' => 'pickup_date', 'value' => set_value("pickup_date",$info["pickup_date"]),'class' =>'span' ));
echo form_error("pickup_date","<span class='text-error'>","</span>");
echo br();
//DROPOFF DATE SECTION.
echo form_label('<b>DROPOFF DATE</b>', 'DROPOFF DATE');
echo form_input(array('name' => 'dropoff_date', 'value' => set_value("dropoff_date",$info["dropoff_date"]),'class' =>'span' ));
echo form_error("dropoff_date","<span class='text-error'>","</span>");
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