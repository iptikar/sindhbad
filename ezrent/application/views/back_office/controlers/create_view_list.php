<?
$list_view='<script type="text/javascript" src="<?= base_url(); ?>js/jquery.tablednd_0_5.js"></script>
<script>
function delete_row(id){
window.location="<?= site_url("back_office/'.$table_name.'/delete"); ?>/"+id;
return false;
}

$(function(){
$("#table-1").tableDnD({
onDrop: function(table, row) {
var ser=$.tableDnD.serialize();
$("#result").load("<?= site_url("back_office/'.$table_name.'/sorted"); ?>"+"?"+ser);
}
});

$("#match2 input[name=\'search\']").live(\'keyup\', function(e){
e.preventDefault();
var id =this.id;
$(\'#match2 tbody tr\').css(\'display\',\'none\');
var searchtxt = $.trim($(this).val());
var bigsearchtxt = searchtxt.toUpperCase(); 
var smallsearchtxt = searchtxt.toLowerCase();
var fbigsearchtxt = searchtxt.toLowerCase().replace(/\b[a-z]/g, function(letter) {
return letter.toUpperCase();
});
if(searchtxt == ""){
$(\'#match2 tbody tr\').css(\'display\',"");	
} else {
$(\'#match2 tbody tr td.\'+id+\':contains("\'+searchtxt+\'")\').parent().css(\'display\',"");
$(\'#match2 tbody tr td.\'+id+\':contains("\'+bigsearchtxt+\'")\').parent().css(\'display\',"");
$(\'#match2 tbody tr td.\'+id+\':contains("\'+fbigsearchtxt+\'")\').parent().css(\'display\',"");
$(\'#match2 tbody tr td.\'+id+\':contains("\'+smallsearchtxt+\'")\').parent().css(\'display\',"");
}
});

$("#show_items").change(function(){
	var val = $(this).val();
	$("#result").html(val);
	$("#show_items").submit();
});

});
</script>';
$content_name = $table_name;
$cond1["name"]=str_replace(" ","_",$content_name);
$id_content=$this->fct->getonecell("content_type","id_content",$cond1);
$gallery_status=$this->fct->getonecell("content_type","gallery",$cond1);
$list_view.='<?php
$lang = "";
if($this->config->item("language_module")) {
	$lang = getFieldLanguage($this->lang->lang());
}
$sego =$this->uri->segment(4);
$gallery_status="'.$gallery_status.'";
?>
<div class="container-fluid">
<div class="row-fluid">
<div class="span2">
<? $this->load->view("back_office/includes/left_box"); ?>
</div>

<div class="span10">
<div class="span10-fluid" >
<ul class="breadcrumb">
<li class="active"><?= $title; ?></li>
<? if ($this->acl->has_permission(\''.$table_name.'\',\'add\')){ ?>
<li class="pull-right">
<a href="<?= site_url(\'back_office/'.$table_name.'/add\'); ?>" id="topLink" class="btn btn-info top_btn" title="">Add '.str_replace("_"," ",$content_type).'</a>
</li><? } ?>
</ul> 
</div>
<div class="hundred pull-left" id="match2">   
<div id="result"></div> 
<? 
$attributes = array(\'name\' => \'list_form\');
echo form_open_multipart(\'back_office/'.$table_name.'/delete_all\', $attributes); 
?>  		
<table class="table table-striped" id="table-1">
<thead>
<? if($this->session->userdata("success_message")){ ?>
<tr><td colspan="'.(count($attr)+3).'" align="center" style="text-align:center">
<div class="alert alert-success">
<?= $this->session->userdata("success_message"); ?>
</div>
</td>
<tr>
<? } ?>
<tr>
<td width="2%">&nbsp;</td>
<th>
<a href="<?= site_url(\'back_office/'.$table_name.'/index/title\'); ?>" class="<? if($sego == "title") echo \'green\'; else echo \'order_link\'; ?>" >
TITLE
</a>
</th>';
foreach($attr as $val){
if($val["type"] != 4 && $val["type"] != 5 && $val["type"] != 7)
$list_view.='
<th>
<a href="<?= site_url(\'back_office/'.$table_name.'/index/'.$val["name"].'\'); ?>" class="<? if($sego == "'.$val["name"].'") echo \'order_active\'; else echo \'order_link\'; ?>" >
'.strtoupper(str_replace("_"," ",$val["name"])).'
</a>
</th>';
else
$list_view.='
<th>'.strtoupper(str_replace("_"," ",$val["name"])).'</th>';
}
$list_view.='<th style="text-align:center;" width="250">ACTION</th></tr>
<tr>
<td></td>
<td><input type="text" name="search" class="search_box" id="title_search" /></td>
';
foreach($attr as $val){
$list_view.='
<td><input type="text" name="search" class="search_box" id="'.str_replace(" ","_",$val["name"]).'_search" /></td>';	
}
$list_view.='
<td></td>
</tr>
</thead><tfoot><tr>
<td class="col-chk"><input type="checkbox" id="checkAllAuto" /></td>
<td colspan="'.(count($attr)+2).'">
<? if ($this->acl->has_permission(\''.$table_name.'\',\'delete_all\')){ ?>
<div class="pull-right">
<select class="form-select" name="check_option">
<option value="option1">Bulk Options</option>
<option value="delete_all">Delete All</option>
</select>
<a class="btn btn-primary btn_mrg" onclick="document.forms[\'list_form\'].submit();" style="cursor:pointer;">
<span>perform action</span>
</a>
</div> 
<? } ?></td>
</tr>
</tfoot>
<tbody>
<? 
if(count($info) > 0){
$i=0;
foreach($info as $val){
$i++; 
?>
<tr id="<?=$val["id_'.$table_name.'"]; ?>">
<td class="col-chk"><input type="checkbox" name="cehcklist[]" value="<?= $val["id_'.$table_name.'"] ; ?>" /></td>
<td class="title_search">
<? echo $val["title".$lang]; ?>
</td>';
foreach($attr as $v){
$d_lang = "";	
if($v['translated'] == 1) {
	$d_lang = ".\$lang";	
}
$list_view.='
<td class="'.str_replace(" ","_",$v["name"]).'_search">
';
if($v["type"] == 7){
$cond001=array("id_content" => $v["foreign_key"]);
$content001 = $this->fct->getonecell("content_type","name",$cond001);
if(str_replace(" ","_",$content001) == $table_name)
$frn1 = "parent";
else
$frn1 = str_replace(" ","_",$content001);
$list_view.='<? if($val["id_'.$frn1.'"] != 0){
$cond=array("id_'.str_replace(" ","_",$content001).'" => $val["id_'.$frn1.'"]);
echo $this->fct->getonecell("'.str_replace(" ","_",$content001).'","title"'.$d_lang.',$cond); } else { echo "<small>Not available</small>"; }   ?>';
}
elseif($v["type"] == 6 ){ 
$list_view.='<? if($val["'.str_replace(" ","_",$v["name"]).'"] == 1)
echo "<span class=\' label label-success\' >Active</span>";
else
echo "<span class=\' label label-important \' >InActive</span>";   ?>';
}
elseif($v["type"] == 4){ 
/*$list_view.='<? if($val["'.str_replace(" ","_",$v["name"]).'"] != ""){ ?>
<a href="<?= base_url(); ?>uploads/'.$table_name.'/<?=$val["'.str_replace(" ","_",$v["name"]).'"];?>" class="blue gallery" title="<?=$val["title"];?>" >
show image</a>&nbsp;&nbsp;&nbsp;';*/
$list_view.='
<?php echo \'<span id="'.str_replace(" ","_",$v["name"]).'"'.$d_lang.'"'.'_\'.$val["id_'.$table_name.'"].\'">\'.anchor(\'uploads/'.$table_name.'/\'.$val["'.str_replace(" ","_",$v["name"]).'"'.$d_lang.'],\'show image\',array("class" => \'blue gallery\'));
echo nbs(3);
echo \'<a class=\'cur\' onclick=\'removeFile("'.$table_name.'","'.str_replace(" ","_",$v["name"]).'"'.$d_lang.',"\'.$val["'.str_replace(" ","_",$v["name"]).'"'.$d_lang.'].\'",\'.$val["id_'.$table_name.'"].\')\'><img src="\'.base_url().\'images/delete.png" /></a>\'.\'</span>\'; ?>
<? } else { 
echo "<small class=\'blue\'>No Image Available</small>"; } ?>';
} 
elseif($v["type"] == 5){
$list_view.=' <?php echo \'<span id="'.str_replace(" ","_",$v["name"]).'"'.$d_lang.'"'.'_\'.$val["id_'.$table_name.'"].\'">\'.anchor(\'uploads/'.$table_name.'/\'.$val["'.str_replace(" ","_",$v["name"]).'"'.$d_lang.'],\'show file\',array("class" => \'blue gallery\'));
echo nbs(3);
echo \'<a class=\'cur\' onclick=\'removeFile("'.$table_name.'","'.str_replace(" ","_",$v["name"]).'"'.$d_lang.',"\'.$val["'.str_replace(" ","_",$v["name"]).'"'.$d_lang.'].\'",\'.$val["id_'.$table_name.'"].\')\'><img src="\'.base_url().\'images/delete.png" /></a>\'.\'</span>\'; ?>
<? } else { echo "<small class=\'blue\'>No File Available</small>"; } ?>';	
}
elseif($v["type"] == 1){
$list_view.='<small><? echo $this->fct->date_out_formate($val["'.str_replace(" ","_",$v["name"]).'"'.$d_lang.']);?></small>';	
}
else { 
$list_view.='<? echo $val["'.str_replace(" ","_",$v["name"]).'"'.$d_lang.']; ?>';
}
$list_view.='
</td>';

} 
$list_view.='
<td style="text-align:center">';
if($gallery_status == 1){ 
$list_view.='<a href="<?= site_url("back_office/control/manage_gallery/'.$content_name.'/".$val["id_'.$table_name.'"]); ?>" title="Add Photos">
<i class="icon-film"></i> Manage Gallery</a>&nbsp;';
} 
$languages = $this->fct->getAll("languages","sort_order");
if(count($languages) > 1) {
$list_view.='<? 
if($this->config->item("language_module")) {
if ($this->acl->has_permission(\''.$table_name.'\',\'edit\')){ ?>
<a href="<?= site_url(\'back_office/translation/section/'.$table_name.'/\'.$val["id_'.$table_name.'"]);?>" class="table-edit-link" title="Translate" >
<i class="icon-search" ></i> Translate</a> <span class="hidden"> | </span>
<? } 
}?>';
}
$list_view.='<? if ($this->acl->has_permission(\''.$table_name.'\',\'index\')){ ?>
<a href="<?= site_url(\'back_office/'.$table_name.'/view/\'.$val["id_'.$table_name.'"]);?>" class="table-edit-link" title="View" >
<i class="icon-search" ></i> View</a> <span class="hidden"> | </span>
<? } ?>
<? if ($this->acl->has_permission(\''.$table_name.'\',\'edit\')){ ?>
<a href="<?= site_url(\'back_office/'.$table_name.'/edit/\'.$val["id_'.$table_name.'"]);?>" class="table-edit-link" title="Edit" >
<i class="icon-edit" ></i> Edit</a> <span class="hidden"> | </span>
<? } ?>
<? if ($this->acl->has_permission(\''.$table_name.'\',\'delete\')){ ?>
<a onclick="if(confirm(\'Are you sure you want delete this item ?\')){ delete_row(\'<?=$val["id_'.$table_name.'"];?>\'); }" class="table-delete-link cur" title="Delete" >
<i class="icon-remove-sign" ></i> Delete</a>
<? } ?>
</td>
</tr>
<? }  } else { ?>
<tr class=\'odd\'><td colspan="'.(count($attr)+3).'" style=\'text-align:center;\'>No records available . </td></tr>
<?  } ?>
</tbody>
</table>  	
<? echo form_close();  ?>
<div class="pagination_container">
<div class="span2 pull-left">
<? $search_array = array("25","100","200","500","1000","All"); ?>
<form action="<?= site_url("back_office/'.$table_name.'"); ?>" method="post"  id="show_items">
Show Items&nbsp;
<select name="show_items"  class="input-mini">
<? for($i =0 ; $i < count($search_array); $i++){ ?>
<option value="<?= $search_array[$i]; ?>" <? if($show_items == $search_array[$i]) echo \'selected="selected"\'; ?>><?= ($search_array[$i] == "") ? \'All\' : $search_array[$i]; ?></option>
<? } ?>
</select>
</form>
</div>
<? echo $this->pagination->create_links(); ?>
</div>
</div>
</div>
</div>   
</div>
<? 
$this->session->unset_userdata("success_message"); 
$this->session->unset_userdata("error_message"); 
?> ';