<?php 
$arr = $this->input->get(NULL, TRUE); 
?>
<?php if(!empty($arr)) {?>
<form id="exportForm" method="get" action="" target="_blank">
<?php foreach($arr as $k => $v) {
if($k != "pagination") {?>
<input type="hidden" name="<?php echo $k; ?>" value="<?php echo $v; ?>" />
<?php }?>
<?php }?>
</form>
<?php }?>