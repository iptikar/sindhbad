<?
$cond=array('position'=>2);
$menu_left=getAll_cond('content_type','sort_order',$cond);
$menu_left_seg1=$this->uri->segment(2);
$menu_left_seg2=$this->uri->segment(3);
?>

<div class="accordion" id="accordion2">
  <?
$user_id=$this->session->userdata('user_id');
$i=0;
foreach($menu_left as $val){ $i++;
if( strpos(file_get_contents("./application/config/acl.php"),str_replace(" ","_",$val["name"])) !== false) {
if ($this->acl->has_permission(str_replace(" ","_",$val["name"]),'index') || $this->acl->has_permission(str_replace(" ","_",$val["name"]),'add')){
	$newArr = array();
$controllerName = str_replace(" ","_",$val["name"]);
$in = '';
if($menu_left_seg1 == $controllerName) $in = 'in';

if($controllerName == "sections") {
	$newArr = array("sections_pages","sections_pages_details");
	//$newArr = array("sections_pages","sections_pages_details","content_pages");
	if(in_array($menu_left_seg1,$newArr))
	$in = 'in';
}

if($controllerName == "modules") {
	$newArr = array();
	if(in_array($menu_left_seg1,$newArr))
	$in = 'in';
}

	
?>
  <div class="accordion-group">
    <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_<?=$i;?>"> Manage
      <?= $val["name"]; ?>
      </a> </div>
    <div id="collapse_<?=$i;?>" class="accordion-body collapse <?php echo $in; ?>">
      <div class="accordion-inner">
        <ul class="nav nav-list">
          <?php if($controllerName != "modules") { ?>
          <li class="<? if($menu_left_seg1 == $controllerName && $menu_left_seg2 !="add") echo "active"; ?>"><a href="<?= base_url(); ?>back_office/<?=$controllerName; ?>/index">List All
            <?= $val["name"]; ?>
            </a></li>
          <?php } ?>
          <?php if(isset($newArr) && !empty($newArr)) {
	foreach($newArr as $Arr) {
	?>
          <li class="<? if($menu_left_seg1 == $Arr) echo "active"; ?>"><a href="<?= base_url(); ?>back_office/<?php echo $Arr; ?>">
            <?= str_replace("_"," ",$Arr); ?>
            </a></li>
          <?php }?>
          <?php } else {if($controllerName!='bookings'){?>
          <li class="<? if($menu_left_seg1 == $controllerName && $menu_left_seg2 =="add") echo "active"; ?>"><a href="<?= base_url(); ?>back_office/<?= $controllerName; ?>/add">Add New
            <?= $val["name"]; ?>
            </a></li>
          <?php }}?>
        </ul>
      </div>
    </div>
  </div>
  <? }  }  } ?>
</div>
