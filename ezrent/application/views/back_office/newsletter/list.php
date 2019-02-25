<script type="text/javascript" src="<?= base_url(); ?>js/jquery.tablednd_0_5.js"></script>
<script>
function delete_row(id){
window.location='<?= base_url(); ?>back_office/newsletter/delete/'+id;
return false;
}

$(function(){
$('#table-1').tableDnD({
onDrop: function(table, row) {
var ser=$.tableDnD.serialize();
$('#result').load('<?= base_url(); ?>back_office/newsletter/sorted?'+ser);
}
});
});
</script>

<div class="container-fluid">
<div class="row-fluid">
<div class="span2">
<? $this->load->view('back_office/includes/left_box'); ?>
</div>

<div class="span10">
<div class="span10-fluid" >
<ul class="breadcrumb">
<li class="active"><?= $title; ?></li>
<li class="pull-right">
<a href="<?= base_url(); ?>back_office/newsletter/add" id="topLink" title="Add New Email">Add New Email</a> 
</li>
<?php if(!empty($info)) {?>
<li class="pull-right" style="margin-right:10px">
<a href="<?= base_url(); ?>back_office/excel_c/export/newsletter" id="topLink" target="_blank" title="Export To Excel">Export To Excel</a> 
</li>
<?php }?>
</ul> 
</div>
<div class="hundred pull-left">   
<div id="result"></div>
<form action="<?= base_url(); ?>back_office/newsletter/delete_all" method="post" name="list_form" >    		
<table class="table table-striped">
<thead>
<? if($this->session->userdata('success_message')){ ?>
<tr><td colspan="4" align="center" style="text-align:center">
<div class="alert alert-success">
<?= $this->session->userdata('success_message'); ?>
</div>
</td>
<tr>
<? } ?>
<tr>
<th>&nbsp;</th>
<th>Email</th>
<th>Date</th>
<th>Action</th>
</tr>
</thead>
<tfoot>

<tr>
<td class="col-chk"><input type="checkbox" id="checkAllAuto" /></td>
<td colspan="4"><div class="pull-right">
<select class="form-select" name="check_option">
<option value="option1">Bulk Options</option>
<option value="send_news">Send News Letter</option>
<option value="delete_all">Delete All</option></select>
<a class="btn btn-primary btn_mrg" onclick="document.forms['list_form'].submit();" ><span>perform action</span></a></div></td>
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
<tr class="<?= $odd; ?>" id="<?=$val["id_newsletter"]; ?>">
<td class="col-chk"><input type="checkbox" name="cehcklist[]" value="<?= $val["id_newsletter"] ; ?>" /></td>
<td class="" width=""><?= $val["email"] ; ?> <b><?php echo $val['name']; ?></b>

<?php if($val['exported'] == 1) {?>
<br />
<span class="label label-important">Exported on <?php echo $val['exported_date']; ?></span>
<?php }?>
</td>
<td class="" width="" style="color:#74d24c;">
<?=$val["created_date"]; ?></td>
<td class="row-nav"><a title="Edit" href="<?= base_url();?>back_office/newsletter/edit/<?= $val["id_newsletter"]; ?>" class="table-edit-link" >
<i class="icon-edit" ></i> Edit</a> <span class="hidden"> | </span>
<a title="Delete" onclick="if(confirm('Are you sure you want delete this item ?')){ delete_row('<?=$val["id_newsletter"];?>'); }" class="table-delete-link cur" >
<i class="icon-remove-sign" ></i> Delete</a></td>
</tr>
<? }  } else { echo '<tr class="odd"><td colspan="4" style="text-align:center;">No records available . </td></tr>'; } ?>
</tbody>
</table>  	
</form>
</div>

</div>

<!-- end of div#right-col -->     
<span class="clearFix">&nbsp;</span>     
</div>
<? $this->session->unset_userdata('success_message'); ?> 
<? $this->session->unset_userdata('error_message'); ?> 