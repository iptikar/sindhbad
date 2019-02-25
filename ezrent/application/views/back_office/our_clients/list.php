<script type="text/javascript" src="<?= base_url(); ?>js/jquery.tablednd_0_5.js"></script>
<script>
function delete_row(id){
window.location="<?= site_url("back_office/our_clients/delete"); ?>/"+id;
return false;
}

$(function(){
$("#table-1").tableDnD({
onDrop: function(table, row) {
var ser=$.tableDnD.serialize();
$("#result").load("<?= site_url("back_office/our_clients/sorted"); ?>"+"?"+ser);
}
});

$("#match2 input[name='search']").live('keyup', function(e){
e.preventDefault();
var id =this.id;
$('#match2 tbody tr').css('display','none');
var searchtxt = $.trim($(this).val());
var bigsearchtxt = searchtxt.toUpperCase(); 
var smallsearchtxt = searchtxt.toLowerCase();
var fbigsearchtxt = searchtxt.toLowerCase().replace(/\b[a-z]/g, function(letter) {
return letter.toUpperCase();
});
if(searchtxt == ""){
$('#match2 tbody tr').css('display',"");	
} else {
$('#match2 tbody tr td.'+id+':contains("'+searchtxt+'")').parent().css('display',"");
$('#match2 tbody tr td.'+id+':contains("'+bigsearchtxt+'")').parent().css('display',"");
$('#match2 tbody tr td.'+id+':contains("'+fbigsearchtxt+'")').parent().css('display',"");
$('#match2 tbody tr td.'+id+':contains("'+smallsearchtxt+'")').parent().css('display',"");
}
});

$("#show_items").change(function(){
	var val = $(this).val();
	$("#result").html(val);
	$("#show_items").submit();
});

});
</script><?php
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
<? if ($this->acl->has_permission('our_clients','add')){ ?>
<li class="pull-right">
<a href="<?= site_url('back_office/our_clients/add'); ?>" id="topLink" class="btn btn-info top_btn" title="">Add our clients</a>
</li><? } ?>
</ul> 
</div>
<div class="hundred pull-left" id="match2">   
<div id="result"></div> 
<? 
$attributes = array('name' => 'list_form');
echo form_open_multipart('back_office/our_clients/delete_all', $attributes); 
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
<a href="<?= site_url('back_office/our_clients/index/title'); ?>" class="<? if($sego == "title") echo 'green'; else echo 'order_link'; ?>" >
TITLE
</a>
</th><th style="text-align:center;" width="250">ACTION</th></tr>
<tr>
<td></td>
<td><input type="text" name="search" class="search_box" id="title_search" /></td>

<td></td>
</tr>
</thead><tfoot><tr>
<td class="col-chk"><input type="checkbox" id="checkAllAuto" /></td>
<td colspan="2">
<? if ($this->acl->has_permission('our_clients','delete_all')){ ?>
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
<tr id="<?=$val["id_our_clients"]; ?>">
<td class="col-chk"><input type="checkbox" name="cehcklist[]" value="<?= $val["id_our_clients"] ; ?>" /></td>
<td class="title_search">
<? echo $val["title".$lang]; ?>
</td>
<td style="text-align:center"><? if ($this->acl->has_permission('our_clients','index')){ ?>
<a href="<?= site_url('back_office/our_clients/view/'.$val["id_our_clients"]);?>" class="table-edit-link" title="View" >
<i class="icon-search" ></i> View</a> <span class="hidden"> | </span>
<? } ?>
<? if ($this->acl->has_permission('our_clients','edit')){ ?>
<a href="<?= site_url('back_office/our_clients/edit/'.$val["id_our_clients"]);?>" class="table-edit-link" title="Edit" >
<i class="icon-edit" ></i> Edit</a> <span class="hidden"> | </span>
<? } ?>
<? if ($this->acl->has_permission('our_clients','delete')){ ?>
<a onclick="if(confirm('Are you sure you want delete this item ?')){ delete_row('<?=$val["id_our_clients"];?>'); }" class="table-delete-link cur" title="Delete" >
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
<form action="<?= site_url("back_office/our_clients"); ?>" method="post"  id="show_items">
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