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
<!--chat--> 
<!-- BEGIN ProvideSupport.com Graphics Chat Button Code -->
<!--<div id="ci6es9"  class="class-template1"></div><div id="sc6es9" class="class-template2"></div><div id="sd6es9" class="class-template3"></div><script type="text/javascript">var se6es9=document.createElement("script");se6es9.type="text/javascript";var se6es9s=(location.protocol.indexOf("https")==0?"https":"http")+"://image.providesupport.com/js/1bvej8hth147r0no6i6u2w8k5w/safe-standard.js?ps_h=6es9&ps_t="+new Date().getTime();setTimeout("se6es9.src=se6es9s;document.getElementById('sd6es9').appendChild(se6es9)",1)</script><noscript><div class="class-template4" ><a href="http://www.providesupport.com?messenger=1bvej8hth147r0no6i6u2w8k5w">Live Chat</a></div></noscript>-->
<!-- END ProvideSupport.com Graphics Chat Button Code -->

<!--chat-->
<? }?>
<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5683754f8e776169" async></script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/56aa2ce91df5fe345b1da0af/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script type="text/javascript" src="js/front/custom-script.js"></script> 

<script type="text/javascript">(function(d, t, e, m){
    
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: "367020",
            uid: "3230d184e1dd7eace9a5b48b765cc40c",
            options: { "style": "oxygen" } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>
    <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "EZ Rent a Car",
  "alternateName": "EZ Rent Car",
  "url": "http://www.ezrent.ae/",
  "logo": "http://www.ezrent.ae/images/front/logo.png",
  "sameAs": [
    "https://www.facebook.com/ezcarrentuae/",
    "https://www.instagram.com/ezcarrentuae/"
  ]
}
</script>
</body>
</html>