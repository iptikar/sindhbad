<script type="text/javascript" src="<?= base_url(); ?>js/jquery.tablednd_0_5.js"></script>
<script>
function delete_row(id){
window.location="<?= site_url("back_office/static_seo_pages/delete"); ?>/"+id;
return false;
}

$(function(){
$("#table-1").tableDnD({
onDrop: function(table, row) {
var ser=$.tableDnD.serialize();
$("#result").load("<?= site_url("back_office/static_seo_pages/sorted"); ?>"+"?"+ser);
}
});
$("#show_items").change(function(){
	var val = $(this).val();
	$("#result").html(val);
	$("#show_items").submit();
});

});
</script>
<?php
$lang = "";
if($this->config->item("language_module")) {
	$lang = getFieldLanguage($this->lang->lang());
}
$sego =$this->uri->segment(4);
$gallery_status="0";
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
<? if ($this->acl->has_permission('static_seo_pages','add') && $this->session->userdata('level') == 3){ ?>
<li class="pull-right">
<a href="<?= site_url('back_office/static_seo_pages/add'); ?>" id="topLink" class="btn btn-info top_btn" title="">Add static seo pages</a>
</li><? } ?>
</ul> 
</div>
<div class="hundred pull-left">   
<div id="result"></div> 
<? 
$attributes = array('name' => 'list_form');
echo form_open_multipart('back_office/static_seo_pages/delete_all', $attributes); 
?>  		
<table class="table table-striped" id="table-1">
<thead>
<? if($this->session->userdata("success_message")){ ?>
<tr><td colspan="3" align="center" style="text-align:center">
<div class="alert alert-success">
<?= $this->session->userdata("success_message"); ?>
</div>
</td>
<tr>
<? } ?>
<tr>
<td width="2%">&nbsp;</td>
<th>
TITLE
</th><th style="text-align:center;" width="250">ACTION</th></tr></thead><tfoot><tr>
<td class="col-chk"><input type="checkbox" id="checkAllAuto" /></td>
<td colspan="2">
<? if ($this->acl->has_permission('static_seo_pages','delete_all') && $this->session->userdata('level') == 3){?>
<div class="pull-right">
<select class="form-select" name="check_option">
<option value="option1">Bulk Options</option>
<option value="delete_all">Delete All</option>
</select>
<a class="btn btn-primary btn_mrg" onclick="document.forms['list_form'].submit();" style="cursor:pointer;">
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
<tr id="<?=$val["id_static_seo_pages"]; ?>">
<td class="col-chk"><input type="checkbox" name="cehcklist[]" value="<?= $val["id_static_seo_pages"] ; ?>" /></td>
<td>
<? echo $val["title".$lang]; ?>
</td>
<td style="text-align:center">
<? if($this->config->item("language_module")) { ?>
<a href="<?= site_url('back_office/translation/section/static_seo_pages/'.$val["id_static_seo_pages"]);?>" class="table-edit-link" title="Translate" >
<i class="icon-search" ></i> Translate</a> <span class="hidden"> | </span>
<? }?>
<? if ($this->acl->has_permission('static_seo_pages','edit')){?>
<a href="<?= site_url('back_office/static_seo_pages/edit/'.$val["id_static_seo_pages"]);?>" class="table-edit-link" title="Edit" >
<i class="icon-edit" ></i> Edit</a>
<? } ?>
<? if ($this->acl->has_permission('static_seo_pages','delete') && $this->session->userdata('level') == 3){ ?>
 <span class="hidden"> | </span>
<a onclick="if(confirm('Are you sure you want delete this item ?')){ delete_row('<?=$val["id_static_seo_pages"];?>'); }" class="table-delete-link cur" title="Delete" >
<i class="icon-remove-sign" ></i> Delete</a>
<? } ?>
</td>
</tr>
<? }  } else { ?>
<tr class='odd'><td colspan="3" style='text-align:center;'>No records available . </td></tr>
<?  } ?>
</tbody>
</table>  	
<? echo form_close();  ?>
<div class="pagination_container">
<div class="span2 pull-left">
<? $search_array = array("25","100","200","500","1000","All"); ?>
<form action="<?= site_url("back_office/static_seo_pages"); ?>" method="post"  id="show_items">
Show Items&nbsp;
<select name="show_items"  class="input-mini">
<? for($i =0 ; $i < count($search_array); $i++){ ?>
<option value="<?= $search_array[$i]; ?>" <? if($show_items == $search_array[$i]) echo 'selected="selected"'; ?>><?= ($search_array[$i] == "") ? 'All' : $search_array[$i]; ?></option>
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
?> 