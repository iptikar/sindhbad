<?php

if(isset($_COOKIE['lanSindhbad']))
    $translate = new Translator($_COOKIE['lanSindhbad']);
else
    $translate = new Translator('en');
?>

<script src = "http://localhost/js/cahce-reload.js" rel = "stylesheet" type = "text/javascript" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />





<link  rel="stylesheet" type="text/css"  media="screen and (min-width: 768px)" href="http://localhost/themes/sm_market2/pub/static/frontend/Sm/market/en_US/css/styles-l.min.css" />



<?php
$language = '';

// We will check cookie 
if(isset($_COOKIE['lanSindhbad']) && $_COOKIE['lanSindhbad'] == 'ar')  :?>

<?php
    $language = 'ar';

?>
<link  rel="stylesheet" type="text/css"  media="all" href="http://localhost/themes/sm_market2/pub/static/_cache/merged/82ea3d4de55c40269ad64bf293fadd23-arabic.min.css" />

<link rel="stylesheet" type="text/css" media="all" href="http://localhost/themes/sm_market2/pub/static/frontend/Sm/market/en_US/css/config_4-arabic.css" />

<link rel="stylesheet" type="text/css" href="http://localhost/css/easy-responsive-tabs-arabic.css" />


<?php else :?>

<link  rel="stylesheet" type="text/css"  media="all" href="http://localhost/themes/sm_market2/pub/static/_cache/merged/82ea3d4de55c40269ad64bf293fadd23.min.css" />

<link rel="stylesheet" type="text/css" media="all" href="http://localhost/themes/sm_market2/pub/static/frontend/Sm/market/en_US/css/config_4.css" />

<link rel="stylesheet" type="text/css" href="http://localhost/css/easy-responsive-tabs.css" />




<?php endif; ?>


<link rel="stylesheet" type="text/css" media="all" href="http://localhost/css/custom.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" />



<script  type="text/javascript"  src="http://localhost/themes/sm_market2/pub/static/_cache/merged/1310f31907a737e23ccf73ad22bfc205.min.js"></script>
<script  type="text/javascript"  src="http://localhost/js/jquery.twbsPagination.js"></script>
<script src="http://localhost/js/easyResponsiveTabs.js"></script>
<script src = "http://localhost/js/track-buyer.js"></script>
<link rel="stylesheet" href="http://localhost/css/xzoom.css">

<link rel="stylesheet" href="http://localhost/css/search.css">  
      
      <!--CUSTOM CSS-->
      <style></style>
      
	  
	  <script type="text/javascript">
         require([
             'jquery',
         	'domReady!',
         	'jquerybootstrap',
                'jqueryunveil',
         	'yttheme'
         ], function ($) {
             			function _runLazyLoad () {
         			 $("img.lazyload").unveil(0,function(){
         				$(this).load(function() {
         					this.classList.remove("lazyload");
         				});
         			});
         		}
         		_runLazyLoad();
         		$(document).on("afterAjaxLazyLoad", function( event) {
         			_runLazyLoad();
         		});
                   
                 });
      </script><!--CUSTOM JS--> 
	   
	   
	  <script type="text/javascript">
         require([
         	'jquery',
         	'domReady!'
         ], function ($) {
         	if($('.breadcrumbs').length == 0){
         		$('body').addClass("no-breadcrumbs");
         	}
         });
      </script><!--LISTING CONFIG-->
	   
	  <script src = "http://localhost/themes/sm_market2/pub/static/frontend/Sm/market/en_US/js/custom.js"></script>
	 
  
