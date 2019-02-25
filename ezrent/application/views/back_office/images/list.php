<!--<script type="text/javascript" src="<?= base_url(); ?>js/jquery.tablednd_0_5.js"></script>-->
<script>
function delete_row(id){
window.location="<?= site_url('back_office/images/delete'); ?>/"+id;
return false;
}


$(function(){
/*$("#table-1").tableDnD({
onDrop: function(table, row) {
var ser=$.tableDnD.serialize();
$("#result").load("<?= site_url(); ?>back_office/images/sorted?"+ser);
}
});*/
});
</script>
<?php
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
<? if ($this->acl->has_permission('images','add')){ ?>
<li class="pull-right">
<a href="<?= site_url('back_office/images/add'); ?>" id="topLink" title="Add images">Add images</a>
</li><? } ?>
</ul> 
</div>
<div class="hundred pull-left">   
<div id="result"></div>  
<form action="<?= site_url('back_office/images/delete_all'); ?>" method="post" name="list_form" >    		
<table class="table table-striped" id="table-1">
<thead>
<? if($this->session->userdata("success_message")){ ?>
<tr><td colspan="5" align="center" style="text-align:center">
<div class="alert alert-success">
<?= $this->session->userdata("success_message"); ?>
</div>
</td>
<tr>
<? } ?>
<tr>
<td>&nbsp;</td><th>
Title</th>
<th>Image</th>
<th>The Link To be Used</th>
<th style="text-align:right;padding-right:80px;">Action</th></tr></thead><tfoot><tr>
<td class="col-chk"><input type="checkbox" id="checkAllAuto" /></td>
<td colspan="5"><div class="pull-right">
<? if ($this->acl->has_permission('images','delete_all')){ ?>
<select class="form-select" name="check_option">
<option value="option1">Bulk Options</option>
<option value="delete_all">Delete All</option></select>
<a class="btn btn-primary btn_mrg" onclick="document.forms['list_form'].submit();" style="cursor:pointer;"><span>perform action</span></a></div> <? } ?></td>
</tr>
</tfoot>
<tbody>
<? 
if(count($info) > 0){
$i=0;
foreach($info as $val){
$i++; 
?>
<tr id="<?=$val["id_images"]; ?>">
<td class="col-chk"><input type="checkbox" name="cehcklist[]" value="<?= $val["id_images"] ; ?>" /></td><td class="" width=""><? echo $val["title"]; ?>
</td><td class="" width=""><? if($val["image"] != ""){ ?>
<img src="<?= base_url(); ?>uploads/images/<?=$val["image"];?>" width="140"  />
<? } else { 
echo "<small class='blue'>No Image Available</small>"; } ?>
</td>
<td>
<a href="<?=base_url();?>uploads/images/<?=$val["image"];?>" target="_blank" >
<?=base_url();?>uploads/images/<?=$val["image"];?></a>
</td>
<td style="text-align:right"><? if ($this->acl->has_permission('images','edit')){ ?>
<a href="<?= site_url('back_office/images/edit/'.$val["id_images"]);?>" class="table-edit-link" title="Edite" >
<i class="icon-edit" ></i> Edit</a> <span class="hidden"> | </span>
<? } ?>
<? if ($this->acl->has_permission('images','delete')){ ?>
<a onclick="if(confirm('Are you sure you want delete this item ?')){ delete_row('<?=$val["id_images"];?>'); }" class="table-delete-link cur" title="Delete" >
<i class="icon-remove-sign" ></i> Delete</a>
<? } ?>
</td>
</tr>
<? }  } else { ?>
<tr class='odd'><td colspan="5" style='text-align:center;'>No records available . </td></tr>
<?  } ?>
</tbody>
</table>  	
</form>
</div>
</div>
</div>   
</div>
<? $this->session->unset_userdata("success_message"); ?> 
<? $this->session->unset_userdata("error_message"); ?> 