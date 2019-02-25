
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.tablednd_0_5.js"></script>
<script>
function delete_row(content_type,id){
window.location="<?= site_url('back_office/control/delete_photo/'); ?>"+content_type+"/"+id;
return false;
}

$(function(){
$('#table-1').tableDnD({
onDrop: function(table, row) {
var ser=$.tableDnD.serialize();
$('#result').load('<?= site_url('back_office/control/sorteddd'); ?>'+'?'+ser);
}
});
});
</script>
<?
$this->session->set_userdata('content_type_gallery',$content_type);
$content_name = $this->uri->segment(2);
$content_name1 = $this->uri->segment(4);
$cond1["name"]=str_replace("_"," ",$content_name1);
$id_content=$this->fct->getonecell("content_type","id_content",$cond1);
if($this->session->userdata("level") == 0){
$cond=array("id_user"=>$this->session->userdata("user_id"),"id_content"=>$id_content);
$read_priv=$this->fct->getonecell("priviledge","read_p",$cond);
$write_priv=$this->fct->getonecell("priviledge","write_p",$cond);
$delete_priv=$this->fct->getonecell("priviledge","delete_p",$cond);
} else { 
$read_priv = 1; 
$write_priv=1;
$delete_priv = 1;
}
if($read_priv != 1){ redirect(site_url("back_office/home/dashboard")); }	
?>
<div class="container-fluid">
<div class="row-fluid">
<div class="span2">
<? $this->load->view("back_office/includes/left_box"); ?>
</div>
<div class="span10">
<div class="span10-fluid" >
<ul class="breadcrumb">
<li class="active"><?= $title1; ?></li>
<? if($write_priv == 1){ ?>
<li class="pull-right">
<a href="<?= site_url('back_office/control/add_photos/'.$content_type.'/'.$id_gallery); ?>" id="topLink" title="Add Photo">Add Photos</a>
</li><? } ?>
</ul> 
</div>

<div class="hundred pull-left">   
<div id="result"></div>

<form action="<?= site_url('back_office/control/delete_all_photos'); ?>" method="post" name="list_form" >    		
<table class="table table-striped" id="table-1">
<thead>
<? if($this->session->userdata("success_message")){ ?>
<tr><td colspan="4" align="center" style="text-align:center">
<div class="alert alert-success">
<?= $this->session->userdata("success_message"); ?>
</div>
</td>
<tr>
<? } ?>
<tr>
<th>&nbsp;</th>
<th>Title</th>
<th>Image</th>
<th style="text-align:right; padding-right:50px;">Action</th>
</tr>
</thead>
<tfoot>

<tr>
<td class="col-chk"><input type="checkbox" id="checkAllAuto" /></td>
<td colspan="4"><div class="pull-right">
<? if($delete_priv == 1){ ?>
<select class="form-select" name="check_option">
<option value="option1">Bulk Options</option>
<option value="delete_all">Delete All</option></select>
<a class="btn btn-primary btn_mrg" onclick="document.forms['list_form'].submit();"><span>perform action</span></a></div> <? } ?></td>
</tr>

</tfoot>
<tbody>
<? 
if(count($info) > 0){
$i=0;
foreach($info as $val){
$i++; 
?>
<tr id="<?=$val["id_gallery"]; ?>">
<td class="col-chk">
<input type="checkbox" name="cehcklist[]" value="<?= $val["id_gallery"] ; ?>" />
</td>
<td><?= $val["title"]; ?></td>
<td>
<?
if( $val["image"] != ""){
?>	
<a href="<?= base_url(); ?>uploads/<?=$content_type; ?>/gallery/<?= $val["image"] ?>" class="blue gallery" title="<?= $val["title"]; ?>" >
<img src="<?= base_url(); ?>uploads/<?= $content_type;?>/gallery/120x120/<?= $val["image"] ?>" border="0"  />
</a>
<? } else { echo "<span class='blue'>No Image Available</span>"; } 
?>
<td style="text-align:right">
<? if($write_priv == 1){ ?>
<a href="<?= site_url('back_office/control/edit_photo/'.$content_type.'/'.$id_gallery.'/'.$val["id_gallery"]);?>" class="table-edit-link cur" title="edit photo" >
<i class="icon-edit" ></i> Edit</a>
<span class="hidden"> | </span>
<? } ?>
<? if($delete_priv == 1){ ?>
<a onclick="if(confirm('Are you sure you want delete this item ?')){ delete_row('<?= $content_type; ?>','<?=$val["id_gallery"];?>'); }" class="table-delete-link cur" title="delete photo" >
<i class="icon-remove-sign" ></i> Delete</a>
<? } ?>
</td>
</tr>
<? } } else { ?>
<tr class='odd'><td colspan='4' style='text-align:center;'>No records available . </td></tr>
<?  } ?>
</tbody>
</table>  	
<input type="hidden" name="content_type" value="<?= $content_type; ?>"  />
<input type="hidden" name="id_gallery" value="<?= $id_gallery; ?>"  />
</form>

</div> 
</div>
<? $this->session->unset_userdata("success_message"); ?> 
<? $this->session->unset_userdata("error_message"); ?> 
