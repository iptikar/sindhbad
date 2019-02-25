<div class="container-fluid">
<div class="row-fluid">
<div class="span2">
<? $this->load->view("back_office/includes/left_box"); ?>
</div>
<div class="span10" >
<div class="span10-fluid" >
<?
$ul = array(
            anchor('back_office/languages/'.$this->session->userdata("back_link"),'<b>List languages</b>').'<span class="divider">/</span>',
            $title => array('li_attributes' => 'class = "active"', 'contents' => $title),
            );

$ul_attributes = array(
                    'class' => 'breadcrumb'
                    );
echo ul($ul, $ul_attributes);
?>
</div>
<div class="hundred pull-left">   
<?
$attributes = array('class' => 'middle-forms');
echo form_open_multipart('back_office/languages/submit', $attributes); 
echo '<p class="alert alert-info">Please complete the form below. Mandatory fields marked <em>*</em></p>';
if(isset($id)){
echo form_hidden('id', $id);
} else {
$info["direction"] = "";$info["index"] = "";
$info["title"] = "";
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
//TITLE SECTION.
echo form_label('<b>Title&nbsp;<em>*</em>:</b>', 'Title');
echo form_input(array("name" => "title", "value" => set_value("title",$info["title"]),"class" =>"span" ));
echo form_error("title","<span class='text-error'>","</span>");
echo br();


//DIRECTION&nbsp;<em>*</em>: SECTION.
echo form_label('<b>DIRECTION&nbsp;<em>*</em>:</b>', 'DIRECTION&nbsp;<em>*</em>:');
$options = array(
                  'ltr' => "LTR",
                  'rtl' => "RTL",
                );
echo form_dropdown("direction", $options,set_value("direction",$info["direction"]), 'class="span"');
echo form_error("direction","<span class='text-error'>","</span>");
echo br();
//INDEX&nbsp;<em>*</em>: SECTION.
echo form_label('<b>INDEX&nbsp;<em>*</em>:</b>', 'INDEX&nbsp;<em>*</em>:');
echo form_input(array('name' => 'index', 'value' => set_value("index",$info["index"]),'class' =>'span' ));
echo form_error("index","<span class='text-error'>","</span>");
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