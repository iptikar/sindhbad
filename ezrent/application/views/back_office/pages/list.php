<script type="text/javascript" src="<?= base_url(); ?>js/jquery.tablednd_0_5.js"></script>
<script>
function delete_row(id){
window.location='<?= base_url(); ?>back_office/pages/delete/'+id;
return false;
}


$(function(){
$('#table-1').tableDnD({
onDrop: function(table, row) {
var ser=$.tableDnD.serialize();
$('#result').load('<?= base_url(); ?>back_office/pages/sorted?'+ser);
}
});
});
</script>
<div class="container-fluid">
<!--<div id="content-top">
<h2>Pages</h2>
<? if($this->session->userdata('level') == 3) { ?>
<a href="<?= base_url(); ?>back_office/pages/add" id="topLink">Create New Page</a>
<? } ?> 
<span class="clearFix">&nbsp;</span>
</div>-->
<!-- end of div#content-top -->
<div class="row-fluid">
<div class="span2">
<? $this->load->view('back_office/includes/left_box'); ?>
</div>
<!-- end of div#left-col -->
<div class="span10 cont_h">

<div class="span10-fluid" >
<ul class="breadcrumb">
<!--<li><a href="#">Home</a> <span class="divider">/</span></li>-->
<li class="active">Pages</li>
<li class="pull-right">
<? if($this->session->userdata('level') == 3) { ?>
<a href="<?= base_url(); ?>back_office/pages/add"  class="btn btn-info top_btn" >Create New Page</a>
<? } ?>  </li>
</ul> 
</div>
<div class="hundred pull-left">
<div id="result"></div>

<form action="<?= base_url(); ?>back_office/pages/delete_all" method="post" name="list_form" >    		
<table class="table table-striped" id="table-1">
<thead>
<? if($this->session->userdata('success_message')){ ?>
<tr><td colspan="4" align="center" style="text-align:center">
<div class="alert alert-success">
<?= $this->session->userdata('success_message'); ?>
</div>
</td>
<tr>
<? } ?>
<tr style="text-transform:uppercase">
<th>&nbsp;</th>
<th>Title</th>
<th  width="65%">Description</th>
<th >Action</th>
</tr>
</thead>
<tfoot>
<? if($this->session->userdata('level') == 3) { ?>
<tr>
<td class="col-chk"><input type="checkbox" id="checkAllAuto" /></td>
<td colspan="4">
<div class="pull-right">
<select class="form-select" name="check_option">
<option value="option1">Bulk Options</option>
<option value="delete_all">Delete All</option></select>
<a class="btn btn-primary btn_mrg" onclick="document.forms['list_form'].submit();">
perform action
</a>
</div>
</td>
</tr>
<? } ?>
</tfoot>
<tbody>
<? 
if(count($info) > 0){
$i=0;
foreach($info as $val){
$i++; 

?>
<tr  id="<?=$val["id_dynamic_pages"]; ?>">
<td class="col-chk"><input type="checkbox" name="cehcklist[]" value="<?= $val["id_dynamic_pages"] ; ?>" /></td>
<td class="" width=""><b><?= $val["title"] ; ?></b></td>
<td class="" >
<?=character_limiter(strip_tags($val["description"]),250); ?></td>
<td class="row-nav ">
<? if($this->config->item("language_module")) { ?>
<a href="<?= site_url('back_office/translation/section/dynamic_pages/'.$val["id_dynamic_pages"]);?>" class="table-edit-link" title="Translate" >
<i class="icon-search" ></i> Translate</a> <span class="hidden"> | </span>
<? }?>
<a href="<?= base_url();?>back_office/pages/edit/<?= $val["id_dynamic_pages"]; ?>" class="table-edit-link cur" >
<i class="icon-edit" ></i> Edit</a>
<? if($this->session->userdata('level') == 3) { ?>
<span class="hidden"> | </span>
<a onclick="if(confirm('Are you sure you want delete this item ?')){ delete_row('<?=$val["id_dynamic_pages"];?>'); }" class="table-delete-link cur" >
<i class="icon-remove-sign"></i> Delete</a>
<? } ?>
</td>
</tr>
<? }  } else { echo '<tr class="odd"><td colspan="4" style="text-align:center;">No records available . </td></tr>'; } ?>
</tbody>
</table>  	
</form>


<!-- end of div.box -->
</div>
</div>
<!-- end of div#mid-col -->

<!-- end of div#right-col -->     
</div>  
</div>
<? $this->session->unset_userdata('success_message'); ?> 
<? $this->session->unset_userdata('error_message'); ?> 