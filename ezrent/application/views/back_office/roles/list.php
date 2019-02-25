<script type="text/javascript" src="<?= base_url(); ?>js/jquery.tablednd_0_5.js"></script>
<script>
function delete_row(id){
window.location="<?= base_url(); ?>back_office/roles/delete/"+id;
return false;
}


$(function(){
$("#table-1").tableDnD({
onDrop: function(table, row) {
var ser=$.tableDnD.serialize();
$("#result").load("<?= base_url(); ?>back_office/roles/sorted?"+ser);
}
});
});
</script>
<?php
$sego =$this->uri->segment(3);
$gallery_status="0";	
?>
<div class="container-fluid">
<div class="row-fluid">
<!--<div class="span2">
<? //$this->load->view("includes/left_box"); ?>
</div>-->

<div class="span">
<div class="span10-fluid" >
<ul class="breadcrumb">
<li class="active"><?= $title; ?></li>
<? if ($this->acl->has_permission('roles','add')){ ?>
<li class="pull-right">
<a href="<?= site_url('back_office/roles/add'); ?>" id="topLink" title="Add Role" class="btn btn-info top_btn">
<i class="icon-plus-sign"></i> Add New Levels</a>
</li><? } ?>
</ul> 
</div>
<div class="hundred pull-left">   
<div id="result"></div>  
<form action="<?= site_url('back_office/roles/delete_all'); ?>" method="post" name="list_form" >    		
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
<? if($this->session->userdata("error_message")){ ?>
<tr><td colspan="3" align="center" style="text-align:center">
<div class="alert alert-error">
<?= $this->session->userdata("error_message"); ?>
</div>
</td>
<tr>
<? } ?>
<tr>
<td>&nbsp;</td><th>
<a href="<?= site_url('back_office/roles/index/title'); ?>" class="<? if($sego == "title") echo 'order_active'; else echo 'order_link'; ?>" >Title</a></th>
<th style="text-align:right;padding-right:80px;">Action</th></tr></thead><tfoot><tr>
<td class="col-chk"><input type="checkbox" id="checkAllAuto" /></td>
<td colspan="3"><div class="pull-right" style="margin-top:10px;">
<? if ($this->acl->has_permission('roles','delete_all')){ ?>
<select class="form-select" name="check_option">
<option value="option1">Select Options</option>
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
$see=0;
if($val["title"] == 'master' && $this->session->userdata('level') != 3) { $see = 1; } 
if($val["title"] == 'admin' && $this->session->userdata('level') == 0) { $see = 1; } 
if($see == 0){
?>
<tr id="<?=$val["id_roles"]; ?>">
<td class="col-chk"><input type="checkbox" name="cehcklist[]" value="<?= $val["id_roles"] ; ?>" /></td>
<td class="" width=""><? echo $val["title"]; ?>
</td><td style="text-align:right">
<a href="<?= site_url('back_office/roles/manage/'.$val["id_roles"]);?>" class="table-edit-link" title="Roles Resources" >
<i class="icon-star" ></i> 
Level Resources
</a> 
<? if ($this->acl->has_permission('roles','edit')){ ?>
<span class="hidden"> | </span>
<a href="<?= site_url('back_office/roles/edit/'.$val["id_roles"]);?>" class="table-edit-link" title="Edit" >
<i class="icon-edit" ></i> Edit</a> 
<? } ?>
<? if ($this->acl->has_permission('roles','delete')){ ?>
<span class="hidden"> | </span>
<a onclick="if(confirm('Are you sure you want delete this item ?')){ delete_row('<?=$val["id_roles"];?>'); }" class="table-delete-link cur" title="Delete" >
<i class="icon-remove-sign" ></i> Delete</a>
<? } ?>
</td>
</tr>
<?	
}
}  } else { ?>
<tr class='odd'><td colspan="3" style='text-align:center;'>No records available . </td></tr>
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