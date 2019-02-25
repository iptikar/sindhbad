<?
$content_name = $table_name;
$cond1["name"]=str_replace("_"," ",$content_name);
$id_content=$this->fct->getonecell("content_type","id_content",$cond1);
$gallery_status=$this->fct->getonecell("content_type","gallery",$cond1);
$label_title = '';
$add_view='<div class="container-fluid">
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
            anchor(\'back_office/'.$table_name.'/\'.$this->session->userdata("back_link"),\'<b>List '.str_replace("_"," ",$content_type).'</b>\').\'<span class="divider">/</span>\',
            $title => array(\'li_attributes\' => \'class = "active"\', \'contents\' => $title),
            );';
			if($gallery_status == 1){ 
			$add_view.='
			if(isset($id)) {
			$ul[\'gallery\'] = array(\'li_attributes\' => \'class = "pull-right"\', \'contents\' => \'<a href="\'.site_url(\'back_office/control/manage_gallery/'.$table_name.'/\'.$id).\'" class="btn btn-info top_btn">Manage Gallery</a>\');}';
}
$add_view.='
if($this->config->item("language_module") && isset($id)) {
			   $ul[\'translate\'] = array(\'li_attributes\' => \'class = "pull-right"\', \'contents\' => \'<a href="\'.site_url(\'back_office/translation/section/'.$table_name.'/\'.$id).\'" class="btn btn-info top_btn">Translate</a>\');
			}

$ul_attributes = array(
                    \'class\' => \'breadcrumb\'
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
$attributes = array(\'class\' => \'middle-forms\');
echo form_open_multipart(\'back_office/'.$table_name.'/submit\', $attributes); 
echo \'<p class="alert alert-info">Please complete the form below. Mandatory fields marked <em>*</em></p>\';
if(isset($id)){
echo form_hidden(\'id\', $id);
} else {
';
foreach($attr as $val){
$d_lang = "";	
if($val['translated'] == 1) {
	$d_lang = ".\$lang";	
}
$add_view.='$info["'.str_replace(" ","_",$val["name"]).'"'.$d_lang.'] = "";
';
}
$add_view.='
$info["title".$lang] = "";
$info["meta_title".$lang] = "";
$info["meta_description".$lang] = "";
$info["meta_keywords".$lang] = "";
$info["title_url".$lang] = "";
}
if($this->session->userdata("success_message")){ 
echo \'<div class="alert alert-success">\';
echo $this->session->userdata("success_message");
echo \'</div>\';
}
if($this->session->userdata("error_message")){
echo \'<div class="alert alert-error">\';
echo $this->session->userdata("error_message"); 
echo \'</div>\';
}
echo form_fieldset("");';

$label_title .= '&nbsp;<em>*</em>:';
$add_view.='
if($this->config->item("language_module")) {
	$data[\'info\'] = $info;
	$this->load->view(\'back_office/translation/add_view_language\',$data);
}
';

$add_view.='
//TITLE SECTION.
echo form_label(\'<b>Title&nbsp;<em>*</em>:</b>\', \'Title\');
echo form_input(array("name" => "title".$lang, "value" => set_value("title".$lang,$info["title".$lang]),"class" =>"span" ));
echo form_error("title".$lang,"<span class=\'text-error\'>","</span>");
echo br();
//PAGE TITLE SECTION.
echo form_label(\'<b>Page Title&nbsp;<small class="blue">(Max 65 Characters)</small>:</b>\', \'Page Title\');
echo form_input(array("name" => "meta_title".$lang, "value" => set_value("meta_title".$lang,$info["meta_title".$lang]),"class" =>"span" ));
echo form_error("meta_title".$lang,"<span class=\'text-error\'>","</span>");
echo br();
//TITLE URL SECTION.
echo form_label(\'<b>TITLE URL&nbsp;<em></em>:</b>\', \'TITLE URL\');
echo form_input(array("name" => "title_url".$lang, "value" => set_value("title_url".$lang,$info["title_url".$lang]),"class" =>"span" ));
echo form_error("title_url".$lang,"<span class=\'text-error\'>","</span>");
echo br();
//META DESCRIPTION SECTION.
echo form_label(\'<b>META DESCRIPTION&nbsp;<small class="blue">(Max 160 Characters)</small>:</b>\', \'META DESCRIPTION\');
echo form_textarea(array("name" => "meta_description".$lang, "value" => set_value("meta_description".$lang,$info["meta_description".$lang]),"class" =>"span","rows" => 3, "cols" =>100));
echo form_error("meta_description".$lang,"<span class=\'text-error\'>","</span>");
echo br();
//META KEYWORDS SECTION.
echo form_label(\'<b>META KEYWORDS&nbsp;<small class="blue">(Max 160 Characters)</small>:</b>\', \'META KEYWORDS\');
echo form_textarea(array("name" => "meta_keywords".$lang, "value" => set_value("meta_keywords".$lang,$info["meta_keywords".$lang]),"class" =>"span","rows" => 3, "cols" =>100 ));
echo form_error("meta_keywords".$lang,"<span class=\'text-error\'>","</span>");
echo br();
';
$i =0;
foreach($attr as $val){ 
$d_lang = "";	
if($val['translated'] == 1) {
	$d_lang = ".\$lang";	
}
$i++;
$attr_name = str_replace(" ","_",$val["name"]);
$label_title = strtoupper(str_replace("_"," ",$val["name"]));
if($val["validation"] != "trim")
$label_title .= '&nbsp;<em>*</em>:';
$add_view.='
//'.$label_title.' SECTION.
echo form_label(\'<b>'.$label_title.'</b>\', \''.$label_title.'\');
';
if(!empty($val['help_text'])) {
	$add_view.='
	echo form_label("'.$val['help_text'].'","help_text",array("class"=>"yellow"));
	';
}
if($val["type"]== 3){
$add_view.='echo form_textarea(array("name" => "'.$attr_name.'"'.$d_lang.', "value" => set_value("'.$attr_name.'"'.$d_lang.',$info["'.$attr_name.'"'.$d_lang.']),"class" =>"ckeditor","id" => "'.$attr_name.'"'.$d_lang.', "rows" => 15, "cols" =>100 ));';
} 
elseif($val["type"] == 4){ 
$add_view.='echo form_upload(array("name" => "'.$attr_name.'"'.$d_lang.', "class" => "input-large"));
echo "<span >";
if($info["'.$attr_name.'"'.$d_lang.'] != ""){ 
echo \'<span id="'.$attr_name.'_\'.$info["id_'.$table_name.'"].\'">\'.anchor(\'uploads/'.$table_name.'/\'.$info["'.$attr_name.'"],\'show image\',array("class" => \'blue gallery\'));
echo nbs(3);?>
<a class="cur" onclick=\'removeFile("'.$table_name.'","'.$attr_name.'"'.$d_lang.',"<?php echo $info["'.$attr_name.'"'.$d_lang.']; ?>",<?php echo $info["id_'.$table_name.'"]; ?>)\'><img src="<?php echo base_url()?>images/delete.png" /></a></span>
<?php
} else { echo "<span class=\'blue\'>No Image Available</span>"; } 
echo "</span>";';
} 
elseif($val["type"] == 1){
$add_view.='echo \'<div class="input-append date" data-date="" data-date-format="dd/mm/yyyy">\';
echo form_input(array(\'name\' => \''.$attr_name.'\''.$d_lang.', \'value\' => set_value("'.$attr_name.'"'.$d_lang.',$this->fct->date_out_formate($info["'.$attr_name.'"'.$d_lang.'])),\'class\' =>\'input-small\',\'size\'=>16 ));
echo \'<span class="add-on"><i class="icon-th"></i></span></div>\';';
} 
elseif($val["type"] == 5){
$add_view.='echo form_upload(array("name" => "'.$attr_name.'"'.$d_lang.', "class" => "input-large"));
echo "<span >";
if($info["'.$attr_name.'"'.$d_lang.'] != ""){ 
echo \'<span id="'.$attr_name.'_\'.$info["id_'.$table_name.'"].\'">\'.anchor(\'uploads/'.$table_name.'/\'.$info["'.$attr_name.'"'.$d_lang.'],\'show file\',array("class" => \'blue gallery\'));
echo nbs(3);?>
<a class="cur" onclick=\'removeFile("'.$table_name.'","'.$attr_name.'"'.$d_lang.',"<?php echo $info["'.$attr_name.'"'.$d_lang.']; ?>",<?php echo $info["id_'.$table_name.'"]; ?>)\'><img src="<?php echo base_url()?>images/delete.png" /></a></span>
<?php
} else { echo "<span class=\'blue\'>No File Available</span>"; } 
echo "</span>";';
}
elseif($val["type"] == 6){
$add_view.='$options = array(
                  "" => " - select option - ",
                  1 => "Active",
                  0 => "InActive",
                );
echo form_dropdown("'.$attr_name.'"'.$d_lang.', $options,set_value("'.$attr_name.'"'.$d_lang.',$info["'.$attr_name.'"'.$d_lang.']), \'class="span"\');';
}
elseif($val["type"] == 7){
$cond=array("id_content" => $val["foreign_key"]);
$content001 = $this->fct->getonecell("content_type","name",$cond);
if(str_replace(" ","_",$content001) == str_replace(" ","_",$table_name))
$frn2 ="parent";
else
$frn2 =str_replace(" ","_",$content001); 
$add_view.='$items = $this->fct->getAll("'.str_replace(" ","_",$content001).'","sort_order"); 
echo \'<select name="'.$attr_name.'\''.$d_lang.'.\'"  class="span">\';
echo \'<option value="" > - select '.$content001.' - </option>\';
foreach($items as $valll){ 
?>
<option value="<?= $valll["id_'.str_replace(" ","_",$content001).'"]; ?>" <? if(isset($id)){  if($info["id_'.$frn2.'"] == $valll["id_'.str_replace(" ","_",$content001).'"]){ echo \'selected="selected"\'; } } ?> ><?= $valll["title"]; ?></option>
<?
}
echo "</select>";';
} 
else { 
$add_view.='echo form_input(array(\'name\' => \''.str_replace(" ","_",$val["name"]).'\''.$d_lang.', \'value\' => set_value("'.str_replace(" ","_",$val["name"]).'"'.$d_lang.',$info["'.str_replace(" ","_",$val["name"]).'"'.$d_lang.']),\'class\' =>\'span\' ));';
}
$add_view.='
echo form_error("'.str_replace(" ","_",$val["name"]).'"'.$d_lang.',"<span class=\'text-error\'>","</span>");
echo br();';
} 

$add_view.='
echo br();
if ($this->uri->segment(3) != "view" ){
echo \'<p class="pull-right">\';
echo form_submit(array(\'name\' => \'submit\',\'value\' => \'Save Changes\',\'class\' => \'btn btn-primary\') );
echo \'</p>\';
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
?>';