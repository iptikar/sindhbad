<?php 
	$meta_description = '';
	$meta_keywords = '';
	$url = "http" . (($_SERVER['SERVER_PORT']==443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	if(!isset($seo)) {
		$seo = $this->fct->getonerow('static_seo_pages',array('id_static_seo_pages'=>1));
	}
?>
<!DOCTYPE html>
<html>
<head>
<base href="<?=base_url()?>">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if(isset($seo['meta_title'.getFieldLanguage()]) && !empty($seo['meta_title'.getFieldLanguage()])) {?>
<title><?php echo $seo['meta_title'.getFieldLanguage()]; ?></title>
<?php } else {?>
<title>EZ Rent a Car</title>
<?php }?>
<?php if(isset($seo['meta_description'.getFieldLanguage()]) && !empty($seo['meta_description'.getFieldLanguage()])) {?>
<meta name="description" content="<?php echo $seo['meta_description'.getFieldLanguage()]?>" />
<?php }?>
<?php if(isset($seo['meta_keywords'.getFieldLanguage()]) && !empty($seo['meta_keywords'.getFieldLanguage()])) {?>
<meta name="keywords" content="<?php echo $seo['meta_keywords'.getFieldLanguage()]?>" />
<?php }?>
<?php if(isset($seo['meta_title'.getFieldLanguage()]) && !empty($seo['meta_title'.getFieldLanguage()])) {?>
<meta property="og:title" content="<?php echo $seo['meta_title'.getFieldLanguage()]?>" />
<?php }?>
<?php if(isset($og_image)) {?>
<meta property="og:image" content="<?php echo $og_image; ?>" />
<?php } else {?>
<meta property="og:image" content="<?php echo base_url()?>front/img/logo.png" />
<?php }?>
<?php if(isset($seo['meta_description'.getFieldLanguage()]) && !empty($seo['meta_description'.getFieldLanguage()])) {?>
<meta property="og:description" content="<?php echo $seo['meta_description'.getFieldLanguage()]?>" />
<?php }?>
<meta property="og:url" content="<?php echo $url?>">
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/front/favicon.ico" type="image/x-icon">
<link type="text/css" rel="stylesheet" href="css/front/slick.css" />
<link type="text/css" rel="stylesheet" href="css/front/transitions.css" />
<link href="css/front/style.css" rel="stylesheet" media="all">
<?php echo $_styles; // default region for the css files ?>
</head>
<?php
$mobileClass = '';
require_once('./MobileDetect/Mobile_Detect.php');
		$detect = new Mobile_Detect;
		if ( $detect->isMobile() ) {
			$mobileClass = 'mobile';
		}
?>
<body lang="<?php echo $this->lang->lang(); ?>">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-93984448-1', 'auto');
  ga('send', 'pageview');
 
</script>
<? if($this->session->userdata('popupsession')==""){
$this->session->set_userdata('popupsession',1);
?>
<div id="maincontainer">
    <div id="popupshadow">
    <div id="popup"><span id="close">Close</span></span><a href="http://ezrent.ae/book-rent-audi-a8-dubai-uae"></a><img src="<?=base_url()?>images/POP-UP.png" alt="rent audi"/></a></div>
</div>
<? }?>


  <?=$header?>
  <?=$content?>
  <?=$footer?>
</div>
<script type="text/javascript" src="js/front/jquery-1.11.1.min.js"></script> 
<script type="text/javascript" src="js/front/slick.js"></script> 
<script type="text/javascript" src="js/front/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/front/jquery-ui.min.js"></script> 
<?php echo $_scripts; //  default region for the js files ?> 


<?php if($this->router->class != "home") {?>
<script type="text/javascript" src="js/front/isotope-docs.min.js"></script> 

<? }?>
<script type="text/javascript" src="js/front/custom-script.js"></script> 
</body>
</html>