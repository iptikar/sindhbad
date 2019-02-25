<script type="text/javascript" src="<?= base_url(); ?>js/jquery.tablednd_0_5.js"></script>
<script>
function delete_row(id){
window.location="<?= site_url("back_office/bookings/delete"); ?>/"+id;
return false;
}

$(function(){
$("#table-1").tableDnD({
onDrop: function(table, row) {
var ser=$.tableDnD.serialize();
$("#result").load("<?= site_url("back_office/bookings/sorted"); ?>"+"?"+ser);
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
          <li class="active">
            <?= $title; ?>
          </li>
        </ul>
      </div>
      <div class="hundred pull-left" id="match2">
        <div id="result"></div>
        <? 
$attributes = array('name' => 'list_form');
echo form_open_multipart('back_office/bookings/delete_all', $attributes); 
?>
        <table class="table table-striped" id="table-1">
          <thead>
            <? if($this->session->userdata("success_message")){ ?>
            <tr>
              <td colspan="7" align="center" style="text-align:center"><div class="alert alert-success">
                  <?= $this->session->userdata("success_message"); ?>
                </div></td>
            <tr>
              <? } ?>
            <tr>
              <td width="2%">&nbsp;</td>
              <th> <a href="<?= site_url('back_office/bookings/index/name'); ?>" class="<? if($sego == "name") echo 'order_active'; else echo 'order_link'; ?>" > NAME </a> </th>
              <th> <a href="<?= site_url('back_office/bookings/index/phone'); ?>" class="<? if($sego == "phone") echo 'order_active'; else echo 'order_link'; ?>" > PHONE </a> </th>
              <th> <a href="<?= site_url('back_office/bookings/index/email'); ?>" class="<? if($sego == "email") echo 'order_active'; else echo 'order_link'; ?>" > EMAIL </a> </th>
              <th> <a href="<?= site_url('back_office/bookings/index/address'); ?>" class="<? if($sego == "address") echo 'order_active'; else echo 'order_link'; ?>" > ADDRESS </a> </th>
              <th> <a href="<?= site_url('back_office/bookings/index/details'); ?>" class="<? if($sego == "details") echo 'order_active'; else echo 'order_link'; ?>" > DETAILS </a> </th>
              <th> <a href="<?= site_url('back_office/bookings/index/pickup_location'); ?>" class="<? if($sego == "pickup_location") echo 'order_active'; else echo 'order_link'; ?>" > PICKUP LOCATION </a> </th>
              <th> <a href="<?= site_url('back_office/bookings/index/pickup_date'); ?>" class="<? if($sego == "pickup_date") echo 'order_active'; else echo 'order_link'; ?>" > PICKUP DATE </a> </th>
              <th> <a href="<?= site_url('back_office/bookings/index/dropoff_location'); ?>" class="<? if($sego == "dropoff_location") echo 'order_active'; else echo 'order_link'; ?>" > DROP-OFF LOCATION </a> </th>
              <th> <a href="<?= site_url('back_office/bookings/index/dropoff_date'); ?>" class="<? if($sego == "dropoff_date") echo 'order_active'; else echo 'order_link'; ?>" > DROP-OFF DATE </a> </th>
              <th>FLEET</th>
            </tr>
            <tr>
              <td></td>
              <td><input type="text" name="search" class="search_box" id="name_search" /></td>
              <td><input type="text" name="search" class="search_box" id="phone_search" /></td>
              <td><input type="text" name="search" class="search_box" id="email_search" /></td>
              <td><input type="text" name="search" class="search_box" id="address_search" /></td>
              <td><input type="text" name="search" class="search_box" id="details_search" /></td>
              
              
              <td><input type="text" name="search" class="search_box" id="pickup_location_search" /></td>
              <td><input type="text" name="search" class="search_box" id="pickup_date_search" /></td>
              <td><input type="text" name="search" class="search_box" id="dropoff_location_search" /></td>
              <td><input type="text" name="search" class="search_box" id="dropoff_date_search" /></td>
              
              <td><input type="text" name="search" class="search_box" id="fleet_search" /></td>
            </tr>
          </thead>
          
          <tbody>
            <? 
if(count($info) > 0){
$i=0;
foreach($info as $val){
$i++; 
?>
            <tr id="<?=$val["id_bookings"]; ?>">
              <td class="col-chk"><input type="checkbox" name="cehcklist[]" value="<?= $val["id_bookings"] ; ?>" /></td>
              <td class="name_search"><? echo $val["name"]; ?></td>
              <td class="phone_search"><? echo $val["phone"]; ?></td>
              <td class="email_search"><? echo $val["email"]; ?></td>
              <td class="address_search"><? echo $val["address"]; ?></td>
              <td class="details_search"><? echo $val["details"]; ?></td>
              
              
              <td class="pickup_location_search"><? echo $val["pickup_location"]; ?></td>
              <td class="pickup_date_search"><? echo $val["pickup_date"]; ?></td>
              <td class="dropoff_location_search"><? echo $val["dropoff_location"]; ?></td>
              <td class="dropoff_date_search"><? echo $val["dropoff_date"]; ?></td>
              
              <td class="fleet_search"><? if($val["id_fleet"] != 0){
$cond=array("id_fleet" => $val["id_fleet"]);
echo $this->fct->getonecell("fleet","title",$cond); } else { echo "<small>Not available</small>"; }   ?></td>
              
            </tr>
            <? }  } else { ?>
            <tr class='odd'>
              <td colspan="7" style='text-align:center;'>No records available . </td>
            </tr>
            <?  } ?>
          </tbody>
        </table>
        <? echo form_close();  ?>
        <div class="pagination_container">
          <div class="span2 pull-left">
            <? $search_array = array("25","100","200","500","1000","All"); ?>
            <form action="<?= site_url("back_office/bookings"); ?>" method="post"  id="show_items">
              Show Items&nbsp;
              <select name="show_items"  class="input-mini">
                <? for($i =0 ; $i < count($search_array); $i++){ ?>
                <option value="<?= $search_array[$i]; ?>" <? if($show_items == $search_array[$i]) echo 'selected="selected"'; ?>>
                <?= ($search_array[$i] == "") ? 'All' : $search_array[$i]; ?>
                </option>
                <? } ?>
              </select>
            </form>
          </div>
          <? echo $this->pagination->create_links(); ?> </div>
      </div>
    </div>
  </div>
</div>
<? 
$this->session->unset_userdata("success_message"); 
$this->session->unset_userdata("error_message"); 
?>
