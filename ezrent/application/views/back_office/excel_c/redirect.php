<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Step <?php echo $step; ?></title>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	setTimeout('redirect_go()',2000);
});
function redirect_go()
{
	window.location = '<?php echo $url; ?>';
}
</script>
</head>
<body>
System is generating excel number: <?php echo $step; ?> of <?php echo $ratio; ?>, thank you for your patience.
</body>
</html>