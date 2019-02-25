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
            anchor('back_office/auto_reply_messages/'.$this->session->userdata("back_link"),'<b>List auto reply messages</b>').'<span class="divider">/</span>',
            $title => array('li_attributes' => 'class = "active"', 'contents' => $title),
            );
			if($this->config->item("language_module") && isset($id)) {
			   $ul['translate'] = array('li_attributes' => 'class = "pull-right"', 'contents' => '<a href="'.site_url('back_office/translation/section/auto_reply_messages/'.$id).'" class="btn btn-info top_btn">Translate</a>');
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
echo form_open_multipart('back_office/auto_reply_messages/submit', $attributes); 
echo '<p class="alert alert-info">Please complete the form below. Mandatory fields marked <em>*</em></p>';
if(isset($id)){
echo form_hidden('id', $id);
} else {
$info["message".$lang] = "";
$info["title".$lang] = "";
$info["meta_title".$lang] = "";
$info["meta_description".$lang] = "";
$info["meta_keywords".$lang] = "";
$info["title_url".$lang] = "";
$info["email"] = "";
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
echo br();
*/
//TITLE AR SECTION.
/*echo form_label('<b>TITLE AR</b>', 'TITLE AR');
echo form_input(array('name' => 'title_ar', 'value' => set_value("title_ar",$info["title_ar"]),'class' =>'span' ));
echo form_error("title_ar","<span class='text-error'>","</span>");
echo br();*/
//MESSAGE SECTION.
echo form_label('<b>MESSAGE</b>', 'MESSAGE');
echo form_textarea(array("name" => "message".$lang, "value" => set_value("message".$lang,$info["message".$lang]),"class" =>"ckeditor","id" => "message".$lang, "rows" => 15, "cols" =>100 ));
echo form_error("message".$lang,"<span class='text-error'>","</span>");
echo br();
//MESSAGE AR SECTION.
/*echo form_label('<b>MESSAGE AR</b>', 'MESSAGE AR');
echo form_textarea(array("name" => "message_ar", "value" => set_value("message_ar",$info["message_ar"]),"class" =>"ckeditor","id" => "message_ar", "rows" => 15, "cols" =>100 ));
echo form_error("message_ar","<span class='text-error'>","</span>");
echo br();
echo br();*/
//TITLE SECTION.
echo form_label('<b>Email&nbsp;<em>*</em>:</b>', 'Email');
echo form_input(array("name" => "email", "value" => set_value("email",$info["email"]),"class" =>"span" ));
echo form_error("email","<span class='text-error'>","</span>");
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