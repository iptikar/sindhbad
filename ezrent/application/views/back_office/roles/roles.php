<script>
$(function(){
$('.checkAllAuto').click(function(){
	var id = this.id;
$("INPUT.checkAuto"+id+"[type='checkbox']").attr('checked', $(this).is(':checked'));    
});

$('.head_check').click(function(){
var id = this.id;
$("INPUT."+id+"[type='checkbox']").attr('checked', $(this).is(':checked'));    
});

});
</script>
<style>
table#table-1{
	width:100%;	
}

table#table-1 thead{
	background-color:#5BB8E1; width:100%;color:#FFFFFF;
}
/*
table#table-1 thead tr{
  width:100%;
  display:block;
}
table#table-1 thead tr th.mini{
display:block;width:2%;float:left;
}
table#table-1 thead tr th.big{
display:block;width:20%;float:left;
}
table#table-1 thead tr th.small{
display:block;width:80px;float:left;
}

table#table-1 tbody{
margin:0;
width:100%; 
display:block;
position:absolute;	
}
table#table-1 tbody tr{
width:100%;display:block; float:left;position:relative;
}
table#table-1 tbody tr td.mini{
display:block;width:2%;float:left;
}
table#table-1 tbody tr td.big{
display:block;width:20%;float:left;
}
table#table-1 tbody tr td.small{
display:block;width:80px;float:left;
}*/
</style>
<div class="container-fluid" >
<div class="row-fluid">
<!--<div class="span2">
<? // $this->load->view("includes/left_box"); ?>
</div>-->
<div class="span" >
<div class="span10-fluid" >
<ul class="breadcrumb">
<li><a href="<?=base_url();?>back_office/roles">Levels</a> <span class="divider">/</span></li>
<li class="active"><?= $title; ?></li>
</ul> 
</div>
<div class="hundred pull-left">  
<?php 
$action = site_url('back_office/roles/submit_roles');
$attributes = array(
'class'=>'middle-forms'
);
echo form_open_multipart($action,$attributes);
?>   
<!--<form action="<?= base_url(); ?>back_office/roles/submit_roles" method="post" class="middle-forms" enctype="multipart/form-data">
-->
<?
if(isset($id)){?>
<input type="hidden" name="id" value="<?= $id; ?>" /> 
<?
} else {
$info["title"] = "";
}
?>
<? if($this->session->userdata("success_message")){ ?>
<div class="alert alert-success">
<?= $this->session->userdata("success_message"); ?>
</div>
<? } ?>
<? if($this->session->userdata("error_message")){ ?>
<div class="alert alert-error">
<?= $this->session->userdata("error_message"); ?>
</div>
<? } ?>

<fieldset>

<table class="table table-striped" id="table-1">
<thead>
<tr class="">
<th class="mini"><input type="checkbox" id="checkAllAuto" /></th>
<th class="big">Levels Resource </th>
<th class="small"><input type="checkbox" id="read" class="head_check" />&nbsp;&nbsp;Read</th>
<th class="small"><input type="checkbox" id="write" class="head_check" />&nbsp;&nbsp;Write</th>
<th class="small"><input type="checkbox" id="edit" class="head_check" />&nbsp;&nbsp;Edit</th>
<th class="small"><input type="checkbox" id="delete" class="head_check" />&nbsp;&nbsp;Delete</th>
<th class="small"><input type="checkbox" id="delete_all" class="head_check" />&nbsp;&nbsp;Delete All</th>
<th class="small"><input type="checkbox" id="manage" class="head_check" />&nbsp;&nbsp;Manage</th>
<th class="small"><input type="checkbox" id="export" class="head_check" />&nbsp;&nbsp;Export</th>
<th class="small"><input type="checkbox" id="print" class="head_check" />&nbsp;&nbsp;Print</th>
<th class="small"><input type="checkbox" id="activate" class="head_check" />&nbsp;&nbsp;Activate</th>
</tr>
</thead>
<tfoot><tr><td colspan="11">
<?
$config['roles'] = array();
foreach($roles as $val){
	$config['roles'][] = $val["title"];
}
//$this->load->helper('file');
//1$path= './application/config/';
//$string = read_file($path.'acl.php');
//write_file($path.'acl.php', $data1);
?>
<input type="hidden" name="count_resources" value="<?= count($resources); ?>"  />
<input type="hidden" name="current_role" value="<?= $current_role; ?>"  />
</td></tr></tfoot>
<tbody>
<? 
$i=0;
foreach($resources as $val){ 
$index = explode(',',$val["view"]);
$add = explode(',',$val["add"]);
$edit = explode(',',$val["edit"]);
$delete = explode(',',$val["delete"]);
$delete_all = explode(',',$val["delete_all"]);
$manage = explode(',',$val["manage"]);
$export = explode(',',$val["export"]);
$print = explode(',',$val["print"]);
$activate = explode(',',$val["activate"]);
?>
<tr>
<td class="mini"><input type="checkbox" class="checkAllAuto" id="<?=$i;?>"  /></td>
<td class="capitalize big">
<?= str_replace('_',' ',$val["title"]); ?>
<input type="hidden" name="resources[]" value="<?= $val["title"]; ?>"  />
</td>
<td class="small"><input type="checkbox" name="cehcklist<?=$i;?>[]" class="checkAuto<?=$i;?> read" value="view" <? if(in_array($current_role, $index)) echo 'checked="checked"'; ?> /></td>
<td class="small"><input type="checkbox" name="cehcklist<?=$i;?>[]" class="checkAuto<?=$i;?> write" value="add" <? if(in_array($current_role, $add)) echo 'checked="checked"'; ?> /></td>
<td class="small"><input type="checkbox" name="cehcklist<?=$i;?>[]" class="checkAuto<?=$i;?> edit" value="edit" <? if(in_array($current_role, $edit)) echo 'checked="checked"'; ?> /></td>
<td class="small"><input type="checkbox" name="cehcklist<?=$i;?>[]" class="checkAuto<?=$i;?> delete" value="delete" <? if(in_array($current_role, $delete)) echo 'checked="checked"'; ?> /></td>
<td class="small"><input type="checkbox" name="cehcklist<?=$i;?>[]" class="checkAuto<?=$i;?> delete_all" value="delete_all" <? if(in_array($current_role, $delete_all)) echo 'checked="checked"'; ?> /></td>
<td class="small"><input type="checkbox" name="cehcklist<?=$i;?>[]" class="checkAuto<?=$i;?> manage" value="manage" <? if(in_array($current_role, $manage)) echo 'checked="checked"'; ?> /></td>
<td class="small"><input type="checkbox" name="cehcklist<?=$i;?>[]" class="checkAuto<?=$i;?> export" value="export" <? if(in_array($current_role, $export)) echo 'checked="checked"'; ?> /></td>
<td class="small"><input type="checkbox" name="cehcklist<?=$i;?>[]" class="checkAuto<?=$i;?> print" value="print" <? if(in_array($current_role, $print)) echo 'checked="checked"'; ?> /></td>
<td class="small"><input type="checkbox" name="cehcklist<?=$i;?>[]" class="checkAuto<?=$i;?> activate" value="activate" <? if(in_array($current_role, $activate)) echo 'checked="checked"'; ?> /></td>
</tr>
<? 
$i++; 
}
?>
<tr style="width:100%"><td colspan="11">
<br clear="all"  />
<div class="pull-right" >
<input type="image" src="<?= base_url(); ?>images/bt-send-form.png" value="Save Changes" class="btn btn-primary" />
</div>
<span class="clearFix">&nbsp;</span>
</td></tr>
</tbody>
</table>
</fieldset>
<br clear="all"  />

</form>
</div>
</div>     
</div>
<br clear="all"  />
<? $this->session->unset_userdata("success_message"); ?> 
<? $this->session->unset_userdata("error_message"); ?> 