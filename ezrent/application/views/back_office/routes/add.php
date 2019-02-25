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
            anchor('back_office/routes/'.$this->session->userdata("back_link"),'<b>List routes</b>').'<span class="divider">/</span>',
            $title => array('li_attributes' => 'class = "active"', 'contents' => $title),
            );
			/*if($this->config->item("language_module") && isset($id)) {
			   $ul['translate'] = array('li_attributes' => 'class = "pull-right"', 'contents' => '<a href="'.site_url('back_office/translation/section/routes/'.$this->translation_lib->getDefaultRowLangID("routes",$id,TRUE)).'" class="btn btn-info top_btn">Translate</a>');
			}*/

$ul_attributes = array(
                    'class' => 'breadcrumb'
                    );
echo ul($ul, $ul_attributes);
}
?>
</div>
<div class="hundred pull-left">   
<?
$attributes = array('class' => 'middle-forms');
echo form_open_multipart('back_office/routes/submit', $attributes); 
echo '<p class="alert alert-info">Please complete the form below. Mandatory fields marked <em>*</em></p>';
if(isset($id)){
echo form_hidden('id', $id);
} else {
$info["route_index"] = "";$info["route_rule"] = "";
$info["title"] = "";
$info["meta_title"] = "";
$info["meta_description"] = "";
$info["meta_keywords"] = "";
$info["title_url"] = "";
$info["sub_page"] = "";
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
/*if($this->config->item("language_module")) {
	$data['info'] = $info;
	$this->load->view('back_office/translation/add_view_language',$data);
}*/
//TITLE SECTION.
echo form_label('<b>Title&nbsp;<em>*</em>:</b>', 'Title');
echo form_input(array("name" => "title", "value" => set_value("title",$info["title"]),"class" =>"span" ));
echo form_error("title","<span class='text-error'>","</span>");
echo br();
//PAGE TITLE SECTION.
/*echo form_label('<b>Page Title&nbsp;<small class="blue">(Max 65 Characters)</small>:</b>', 'Page Title');
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

//ROUTE INDEX&nbsp;<em>*</em>: SECTION.
echo form_label('<b>ROUTE INDEX&nbsp;<em>*</em>:</b>', 'ROUTE INDEX&nbsp;<em>*</em>:');
echo form_input(array('name' => 'route_index', 'value' => set_value("route_index",$info["route_index"]),'class' =>'span' ));
echo form_error("route_index","<span class='text-error'>","</span>");
echo br();
//ROUTE RULE&nbsp;<em>*</em>: SECTION.
echo form_label('<b>ROUTE RULE&nbsp;<em>*</em>:</b>', 'ROUTE RULE&nbsp;<em>*</em>:');
echo form_input(array('name' => 'route_rule', 'value' => set_value("route_rule",$info["route_rule"]),'class' =>'span' ));
echo form_error("route_rule","<span class='text-error'>","</span>");
echo br();
echo br();
?>
<input type="checkbox" name="sub_page" <?php if(isset($info['sub_page']) && $info['sub_page'] == 1) {?> checked="checked"<?php }?> value="1" /> this route should have dynamic parameter
<?php
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