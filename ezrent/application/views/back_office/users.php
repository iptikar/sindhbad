<script type="text/javascript" src="<?= base_url(); ?>js/jquery.tablednd_0_5.js"></script>
<script>
function delete_row(db_name){
window.location='<?= site_url('back_office/users/delete'); ?>/'+db_name;
return false;
}

$(function(){
$('#table-1').tableDnD({
onDrop: function(table, row) {
var ser=$.tableDnD.serialize();
$('#result').load('<?= site_url('back_office/users/sorted'); ?>'+'?'+ser);
}
});
});
</script>
<div class="container-fluid">
<div class="row-fluid">
<div class="span2">
<? $this->load->view('back_office/includes/left_box'); ?>
</div>

<div class="span10 cont_h">
<div class="span10-fluid" >
<ul class="breadcrumb">
<li><?= $title; ?></li>
<li class="pull-right" >
<a href="<?= site_url('back_office/users/add'); ?>"  class="btn btn-info top_btn">Create New User</a>
</li>
</ul>
</div>
<div class="span10-fluid" style="width:90%;margin:0 10px 0 0; float:left">
<h4>Filter by</h4>
<?php
$action = site_url('back_office/users');
$attributes = array("method"=>"get");
echo form_open($action,$attributes);
?>
<!--<form method="get" action="<? //=site_url("back_office/users")?>">-->
<div class="fl" style="margin:0 15px 0 0;width: 230px; float:left;">User ID<br /><input type="text" id="user_id" name="user_id" value="<? if(isset($_GET['user_id'])) { echo $_GET['user_id']; }?>" /></div>
<div class="fl" style="margin:0 15px 0 0;width: 230px; float:left;">First Name<br /><input type="text" id="first_name" name="first_name" value="<? if(isset($_GET['first_name'])) { echo $_GET['first_name']; }?>" /></div>
<div class="fl" style="margin:0 15px 0 0;width: 230px; float:left;">Surname<br /><input type="text" id="surname" name="surname" value="<? if(isset($_GET['surname'])) { echo $_GET['surname']; }?>" /></div>
<div class="fl" style="margin:0 15px 0 0;width: 230px; float:left;">User Email<br /><input type="text" id="user_email" name="user_email" value="<? if(isset($_GET['user_email'])) { echo $_GET['user_email']; }?>" /></div>

<div class="fl" style="margin:0 15px 0 0;width: 230px; float:left;">Role<br />
<?php 
if($this->session->userdata('level') != 3){
	$roles = $this->fct->getAll_cond('roles','title',array('id_roles !='=>3)); 
}
else {
	$roles = $this->fct->getAll('roles','title'); 
}
?>
<select name="role" id="role">
<option value="">- All -</option>
<?php foreach($roles as $role) {
	$cl = '';
	if(isset($_GET['role']) && $_GET['role'] == $role['id_roles'])
	$cl = 'selected="selected"';
	
?>
<option value="<?php echo $role['id_roles']; ?>" <?php echo $cl; ?>><?php echo $role['title']; ?></option>
<?php }?>
</select>
</div>




<div class="fl" style="margin:0 15px 0 0;width: 230px; float:left;">Status<br />

<select name="status" id="status">
<option value="">- All -</option>

<option value="blocked" <?php if(isset($_GET['status']) && $_GET['status'] == "blocked") echo 'selected="selected"'; ?>>Blocked</option>
<option value="active" <?php if(isset($_GET['status']) && $_GET['status'] == "active") echo 'selected="selected"'; ?>>Active</option>
</select>
</div>

<div class="fl" style="margin:21px 0 0 0; float:left"><input type="submit" class="btn btn-primary" value="Filter" />

</div>
</form>
</div>
<div class="hundred pull-left">  
<div id="result"></div>
<?php
$action = site_url('back_office/users/delete_all');
$attributes = array(
'name'=>'list_form'
);
echo form_open($action,$attributes);
?>
<!--<form action="<? //= site_url('back_office/users/delete_all'); ?>" method="post" name="list_form" >   --> 		
<table class="table table-striped" id="table-1">
<thead>
<? if($this->session->userdata('success_message')){ ?>
<tr><td colspan="8" align="center" style="text-align:center">
<div class="alert alert-success">
<?= $this->session->userdata('success_message'); ?>
</div>
</td>
<tr>
<? } ?>
<? if($this->session->userdata('error_message')){ ?>
<div class="alert alert-error">
<?= $this->session->userdata('error_message'); ?>
</div>
<? } ?>
<tr>
<td>&nbsp;</td>
<td>Role</td>
<td>Full Name</td>
<td>Email</td>
<td>Phone</td>
<td>Created Date</td>
<td>Status</td>
<td>Action</td>
</tr>
</thead>
<tfoot>

<tr>
<td class="col-chk"><input type="checkbox" id="checkAllAuto" /></td>
<td colspan="8"><div class="pull-right">
<select class="form-select" name="check_option">
<option value="option1">Bulk Options</option>
<option value="delete_all">Delete All</option></select>
<a  onclick="document.forms['list_form'].submit();" class="btn btn-primary btn_mrg"><span>perform action</span></a></div></td>
</tr>

</tfoot>
<tbody>
<? 
if(count($info) > 0){
$i=0;
foreach($info as $val){
$i++; 
($i%2==0)? $odd='' : $odd='odd';
?>
<tr class="<?= $odd; ?>" id="<?=$val["id_user"]; ?>">
<td class="col-chk"><input type="checkbox" name="cehcklist[]" value="<?= $val["id_user"] ; ?>" /></td>
<?php 
$cl = 'success';
if($val['id_roles'] == 2) $cl = 'important';
if($val['id_roles'] == 4) $cl = 'warning';
if($val['id_roles'] == 5) $cl = 'info';
if($val['id_roles'] == 6) $cl = 'inverse';
?>
<td class="" width=""><span class="label label-<?php echo $cl ?>"><?= $val["title"] ; ?></span></td>
<td class="" width=""><?= $val["name"]; ?></td>
<td class="" width=""><?= $val["email"] ; ?></td>
<td class="" width=""><?= $val["phone"] ; ?></td>
<td class="" width=""><?= $val["created_date"] ; ?></td>
<td class="" width=""><? if($val['status'] == 1) echo '<span class="label label-success">Active</span>'; else echo '<span class="label label-important">Blocked</span>'; ?></td>
<td class="">
<a href="<?= site_url('back_office/users/edit/'.$val["id_user"]);?>" class="table-edit-link cur cur" >
<i class="icon-edit" ></i> Edit</a> 
<span class="hidden"> | </span>
<a onclick="if(confirm('Are you sure you want delete this user ?')){ delete_row('<?=$val["id_user"];?>'); }" class="table-delete-link cur" >
<i class="icon-remove-sign"></i> Delete</a></td>
</tr>
<? }  } else { echo '<tr class="odd"><td colspan="6" style="text-align:center;">No records available . </td></tr>'; } ?>
</tbody>
</table>  	
</form>

</div><!-- end of div.box -->

</div>   
   
</div>
<? $this->session->unset_userdata('success_message'); ?> 
<? $this->session->unset_userdata('error_message'); ?> 