   <div class="header-container header-style-4">
            <div class="header-top">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 customer-action-header">
                        <div class="customer-action-hd">
                           <span class="welcome-text">
                              <span class="greet welcome" data-bind="scope: 'customer'">
                                 <!-- ko if: customer().fullname --><span data-bind="text: new String('Welcome, %1!').replace('%1', customer().firstname)"></span> <!-- /ko --><!-- ko ifnot: customer().fullname --><span data-bind="html:'Default welcome msg!'"></span> <!-- /ko -->
                              </span>
                              <script type="text/x-magento-init">
                                 {
                                 	"*": {
                                 		"Magento_Ui/js/core/app": {
                                 			"components": {
                                 				"customer": {
                                 					"component": "Magento_Customer/js/view/customer"
                                 				}
                                 			}
                                 		}
                                 	}
                                 }
                              </script>
                           </span>
                           <a href="http://localhost/account" title="Create Your Account">Join Free</a> or <a href="http://localhost/login" title="Sign In">Sign in</a> 
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 header-top-links">
                        <div class="toplinks-wrapper">
                           <ul class="header links">
                              <li class="myaccount-link"><a href="http://localhost/account" title="My Account">My Account</a></li>
                              <li class="link wishlist" data-bind="scope: 'wishlist'">
                                 <a href="#">
                                    My Wish List <!-- ko if: wishlist().counter --><span data-bind="text: wishlist().counter" class="counter qty"></span> <!-- /ko -->
                                 </a>
                              </li>
                              <script type="text/x-magento-init">
                                 {
                                     "*": {
                                         "Magento_Ui/js/core/app": {
                                             "components": {
                                                 "wishlist": {
                                                     "component": "Magento_Wishlist/js/view/wishlist"
                                                 }
                                             }
                                         }
                                     }
                                 }
                              </script>
                              <li class="checkout-link"><a href="http://localhost/marketplace-theme/themes/sm_market2/argentina/checkout/" title="Checkout">Checkout</a></li>
                              <li class="authorization-link" data-label="or"><a href="http://localhost/marketplace-theme/themes/sm_market2/argentina/customer/account/login/referer/aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8%2C/">Sign In</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header-middle">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-2 col-md-2 col-sm-4 logo-header">
                        <div class="logo-wrapper">
                           <h1 class="logo-content"><strong class="logo"><a class="logo" href="http://localhost/marketplace-theme/themes/sm_market2/argentina/" title="Magento Commerce"><img src="http://localhost/marketplace-theme/themes/sm_market2/pub/media/logo/default/logo_2.png" alt="Magento Commerce" width="142" height="42" /></a></strong></h1>
                        </div>
                     </div>
                     <div class="col-lg-10 col-md-10 col-sm-8 header-middle-right">
                        <div class="middle-right-content">
                           <div class="currency-wrapper">
                              <div class="switcher currency switcher-currency" id="switcher-currency-nav">
                                 <strong class="label switcher-label"><span>Currency</span></strong> 
                                 <div class="actions dropdown options switcher-options">
                                    <div class="action toggle switcher-trigger" id="switcher-currency-trigger-nav"><strong class="language-EUR"><span>EUR</span></strong></div>
                                    <ul class="dropdown switcher-dropdown" data-mage-init='{"dropdownDialog":{ "appendTo":"#switcher-currency-nav > .options", "triggerTarget":"#switcher-currency-trigger-nav", "closeOnMouseLeave": false, "triggerClass":"active", "parentClass":"active", "buttons":null}}'>
                                       <li class="currency-EGP switcher-option"><a href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/directory\/currency\/switch\/","data":{"currency":"EGP","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>EGP - Egyptian Pound</a></li>
                                       <li class="currency-USD switcher-option"><a href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/directory\/currency\/switch\/","data":{"currency":"USD","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>USD - US Dollar</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="language-wrapper">
                              <div class="switcher language switcher-language" data-ui-id="language-switcher" id="switcher-language-nav">
                                 <strong class="label switcher-label"><span>Language</span></strong> 
                                 <div class="actions dropdown options switcher-options">
                                    <div class="action toggle switcher-trigger" id="switcher-language-trigger-nav"><strong style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_argentina.png');" class="view-argentina"><span>Argentina</span></strong></div>
                                    <ul class="dropdown switcher-dropdown" data-mage-init='{"dropdownDialog":{ "appendTo":"#switcher-language-nav > .options", "triggerTarget":"#switcher-language-trigger-nav", "closeOnMouseLeave": false, "triggerClass":"active", "parentClass":"active", "buttons":null}}'>
                                       <li class="view-default switcher-option"><a data-storecode="default" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_default.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/default\/customer\/account\/login\/","data":{"___store":"default","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>English</a></li>
                                       <li class="view-french switcher-option"><a data-storecode="french" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_french.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/french\/customer\/account\/login\/","data":{"___store":"french","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>French</a></li>
                                       <li class="view-german switcher-option"><a data-storecode="german" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_german.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/german\/customer\/account\/login\/","data":{"___store":"german","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>German</a></li>
                                       <li class="view-benin switcher-option"><a data-storecode="benin" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_benin.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/benin\/customer\/account\/login\/","data":{"___store":"benin","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Benin</a></li>
                                       <li class="view-andorra switcher-option"><a data-storecode="andorra" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_andorra.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/andorra\/customer\/account\/login\/","data":{"___store":"andorra","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Andorra</a></li>
                                       <li class="view-bolivia switcher-option"><a data-storecode="bolivia" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_bolivia.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/bolivia\/customer\/account\/login\/","data":{"___store":"bolivia","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Bolivia</a></li>
                                       <li class="view-somaliland switcher-option"><a data-storecode="somaliland" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_somaliland.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/somaliland\/customer\/account\/login\/","data":{"___store":"somaliland","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Somaliland</a></li>
                                       <li class="view-belgium switcher-option"><a data-storecode="belgium" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_belgium.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/belgium\/customer\/account\/login\/","data":{"___store":"belgium","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Belgium</a></li>
                                       <li class="view-iran switcher-option"><a data-storecode="iran" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_iran.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/iran\/customer\/account\/login\/","data":{"___store":"iran","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Iran</a></li>
                                       <li class="view-armenia switcher-option"><a data-storecode="armenia" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_armenia.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/armenia\/customer\/account\/login\/","data":{"___store":"armenia","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Armenia</a></li>
                                       <li class="view-cameroon switcher-option"><a data-storecode="cameroon" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_cameroon.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/cameroon\/customer\/account\/login\/","data":{"___store":"cameroon","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Cameroon</a></li>
                                       <li class="view-dominica switcher-option"><a data-storecode="dominica" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_dominica.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/dominica\/customer\/account\/login\/","data":{"___store":"dominica","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Dominica</a></li>
                                       <li class="view-honduras switcher-option"><a data-storecode="honduras" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_honduras.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/honduras\/customer\/account\/login\/","data":{"___store":"honduras","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Honduras</a></li>
                                       <li class="view-venezuela switcher-option"><a data-storecode="venezuela" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_venezuela.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/venezuela\/customer\/account\/login\/","data":{"___store":"venezuela","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Venezuela</a></li>
                                       <li class="view-thailand switcher-option"><a data-storecode="thailand" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_thailand.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/customer\/account\/login\/","data":{"___store":"thailand","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Thailand</a></li>
                                       <li class="view-guatemala switcher-option"><a data-storecode="guatemala" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_guatemala.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/guatemala\/customer\/account\/login\/","data":{"___store":"guatemala","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Guatemala</a></li>
                                       <li class="view-mauritius switcher-option"><a data-storecode="mauritius" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_mauritius.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/mauritius\/customer\/account\/login\/","data":{"___store":"mauritius","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Mauritius</a></li>
                                       <li class="view-maldives switcher-option"><a data-storecode="maldives" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_maldives.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/maldives\/customer\/account\/login\/","data":{"___store":"maldives","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Maldives</a></li>
                                       <li class="view-colombia switcher-option"><a data-storecode="colombia" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_colombia.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/colombia\/customer\/account\/login\/","data":{"___store":"colombia","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Colombia</a></li>
                                       <li class="view-bahamas switcher-option"><a data-storecode="bahamas" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_bahamas.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/bahamas\/customer\/account\/login\/","data":{"___store":"bahamas","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Bahamas</a></li>
                                       <li class="view-abkhazia switcher-option"><a data-storecode="abkhazia" style="background-image:url('http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/flags/flag_abkhazia.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/abkhazia\/customer\/account\/login\/","data":{"___store":"abkhazia","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fbWFya2V0Mi9hcmdlbnRpbmEvY3VzdG9tZXIvYWNjb3VudC9sb2dpbi8,"}}'>Abkhazia</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="compare-header-wrapper">
                              <div class="item link compare" data-bind="scope: 'compareProducts'" data-role="compare-products-link"><a class="action compare no-display" title="Compare Products" data-bind="attr: {'href': compareProducts().listUrl}, css: {'no-display': !compareProducts().count}" ><span class="counter qty" data-bind="text: compareProducts().countCaption"></span></a></div>
                              <script type="text/x-magento-init">
                                 {"[data-role=compare-products-link]": {"Magento_Ui/js/core/app": {"components":{"compareProducts":{"component":"Magento_Catalog\/js\/view\/compare-products"}}}}}
                              </script>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header-bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-3 col-md-3 sidebar-megamenu">
                        <div class="megamenu-content-sidebar">
                           <div class="btn-megamenu"><a href="javascript:void(0)" title="All Categories">All Categories</a></div>
                           <div class="menu-ver-content">
                              <div class="navigation-megamenu-wrapper">
                                 <nav class="sm_megamenu_wrapper_vertical_menu sambar" id="sm_megamenu_menu5adc5947ca309" data-sam="20083345191524390215">
                                    <div class="sambar-inner">
                                       <span class="btn-sambar" data-sapi="collapse" data-href="#sm_megamenu_menu5adc5947ca309"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></span> 
                                       <div class="mega-content">
                                          <ul class="vertical-type sm-megamenu-hover sm_megamenu_menu sm_megamenu_menu_black" data-jsapi="on">
                                            
                                            
                                            
                                            <?php include ('static-category.html')?>	
                                        
                                        
                                        
                                        
                                          </ul>
                                       </div>
                                       <div class="more-w"><span class="more-view">More Categories</span></div>
                                    </div>
                                 </nav>
                                 <script type="text/javascript">
                                    require(["jquery", "mage/template"], function($) {
                                    	var menu_width = $('.sm_megamenu_wrapper_horizontal_menu').width();
                                    	$('.sm_megamenu_wrapper_horizontal_menu .sm_megamenu_menu > li > div').each(function () {
                                    		$this = $(this);
                                    		var lv2w = $this.width();
                                    		var lv2ps = $this.position();
                                    		var lv2psl = $this.position().left;
                                    		var sw = lv2w + lv2psl;
                                    		if (sw > menu_width) {
                                    			$this.css({'right': '0'});
                                    		}
                                    	});
                                    	var _item_active = $('div.sm_megamenu_actived');
                                    	if(_item_active.length){
                                    		_item_active.each(function(){
                                    			var _self = $(this), _parent_active =  _self.parents('.sm_megamenu_title') ,_level1 = _self.parents('.sm_megamenu_lv1');
                                    			if(_parent_active.length  ){
                                    				_parent_active.each(function(){
                                    					if(!$(this).hasClass('sm_megamenu_actived'))
                                    						$(this).addClass('sm_megamenu_actived');
                                    				});
                                    			}
                                    
                                    			if(_level1.length && !_level1.hasClass('sm_megamenu_actived')){
                                    				_level1.addClass('sm_megamenu_actived');
                                    			}
                                    		});
                                    	}
                                    });
                                 </script><script type="text/javascript">
                                    require([
                                    	'jquery',
                                    	'domReady!'
                                    ], function ($) {
                                    	var limit;
                                    	limit = 13;
                                    	  var i;
                                    	i=0;
                                    	var items;
                                    	items = $('.sm_megamenu_wrapper_vertical_menu .sm_megamenu_menu > li').length;
                                    	
                                    	if(items > limit){
                                    		
                                    		
                                    		$('.sm_megamenu_wrapper_vertical_menu .sm_megamenu_menu > li').each(function(){
                                    			i++;
                                    			if( i > limit ){
                                    				$(this).css('display', 'none');
                                    			}
                                    		});
                                    		
                                    		$('.sm_megamenu_wrapper_vertical_menu .sambar-inner .more-w > .more-view').click(function(){
                                    			if($(this).hasClass('open')){
                                    				i=0;
                                    				$('.sm_megamenu_wrapper_vertical_menu .sm_megamenu_menu > li').each(function(){
                                    					i++;
                                    					if(i>limit){
                                    						$(this).slideUp(200);
                                    					}
                                    				});
                                    				$(this).removeClass('open');
                                    				$('.more-w').removeClass('active-i');
                                    				$(this).html('More Categories');
                                    			}else{
                                    				i=0;
                                    				$('.sm_megamenu_wrapper_vertical_menu ul.sm_megamenu_menu > li').each(function(){
                                    					i++;
                                    					if(i>limit){
                                    						$(this).slideDown(200);
                                    					}
                                    				});
                                    				$(this).addClass('open');
                                    				$('.more-w').addClass('active-i');
                                    				$(this).html('Close Menu');
                                    			}
                                    		});
                                    
                                    	}
                                    
                                    });
                                 </script>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="navigation-mobile-container">
                        <!--COLLAPSE--> <!--SIDEBAR--> 
                        <div class="nav-mobile-container sidebar-type">
                           <div class="btn-mobile"><a id="sidebar-button" class="button-mobile sidebar-nav" title="Categories"><i class="fa fa-bars"></i><span class="hidden">Categories</span></a></div>
                           <nav id="navigation-mobile" class="navigation-mobile"></nav>
                           <script type="text/javascript">
                              require([
                                  'jquery'
                              ], function ($) {
                                  $('#sidebar-button').click(function(){
                                      $('body').toggleClass('navbar-active');
                                      $(this).toggleClass('active');
                                  });
                              });
                           </script>
                        </div>
                        <script type="text/javascript">
                           require([
                               'jquery'
                           ], function ($) {
                               $('.btn-submobile').click(function(){
                                   $(this).prev().slideToggle(200);
                                   $(this).toggleClass('btnsub-active');
                                   $(this).parent().toggleClass('parent-active');
                               });
                           
                               function cloneMegaMenu() {
                                   var breakpoints = 991;
                                   var doc_width = $( window ).width();
                                   if(doc_width <= breakpoints){
                                       var horizontalMegamenu = $('.sm_megamenu_wrapper_horizontal_menu .horizontal-type');
                                       var verticalMegamenu = $('.sm_megamenu_wrapper_vertical_menu .vertical-type');
                                       $('#navigation-mobile').append(horizontalMegamenu);
                                       $('#navigation-mobile').append(verticalMegamenu);
                                   } else {
                                       var horizontalMegamenu = $('#navigation-mobile .horizontal-type');
                                       var verticalMegamenu = $('#navigation-mobile .vertical-type');
                                       $('.sm_megamenu_wrapper_horizontal_menu .sambar-inner .mega-content').append(horizontalMegamenu);
                                       $('.sm_megamenu_wrapper_vertical_menu .sambar-inner .mega-content').append(verticalMegamenu);
                                   }
                               }
                           
                               cloneMegaMenu();
                           
                               $( window ).resize(function() {
                                   cloneMegaMenu();
                               });
                           
                           });
                        </script>
                     </div>
                     <div class="col-lg-9 col-md-9 searchbox-header">
                        <div class="search-cart">
                           <div class="search-wrapper">
                              <div id="sm_searchbox14897965901524390218" class="sm-searchbox">
                                 <div class="sm-searchbox-content">
                                    <form class="form minisearch" id="searchbox_mini_form" action="http://localhost/marketplace-theme/themes/sm_market2/argentina/catalogsearch/result/" method="get">
                                       <div class="field searchbox">
                                          <div class="control">
                                            
                                            
                                            <?php
												
												include 'category-static-select.html';
                                            ?>
                                            
                                            
                                             <input id="searchbox" data-mage-init='{"quickSearch":{ "formSelector":"#searchbox_mini_form", "url":"http://localhost/marketplace-theme/themes/sm_market2/argentina/search/ajax/suggest/", "destinationSelector":"#searchbox_autocomplete"} }' type="text" name="q" placeholder="Enter keywords to search..." class="input-text input-searchbox" maxlength="128" role="combobox" aria-haspopup="false" aria-expanded="true" aria-autocomplete="both" autocomplete="off"/>
                                             <div id="searchbox_autocomplete" class="search-autocomplete"></div>
                                          </div>
                                       </div>
                                       <div class="actions"><button type="submit" title="Search" class="btn-searchbox"><span>Search</span></button></div>
                                    </form>
                                 </div>
                              </div>
                              <script type="text/javascript">
                                 require([
                                 	'jquery'
                                 ], function ($) {
                                 		var searchbox = $('#sm_searchbox14897965901524390218');
                                 		var firt_load = 5;
                                 
                                 		clickMore($('.sm-searchbox-more', searchbox));
                                 		function clickMore(more)
                                 		{
                                 			more.click(function () {
                                 				var that = $(this);
                                 				var sb_ajaxurl = that.attr('data-ajaxmore');
                                 				var count = that.attr('data-count');
                                 				count = parseInt(count);
                                 				if (firt_load >= count) {
                                 					count = count + parseInt(firt_load);
                                 				}
                                 				$.ajax({
                                 					type: 'POST',
                                 					url: sb_ajaxurl,
                                 					data: {
                                 						is_ajax: 1,
                                 						count_term: count
                                 					},
                                 					success: function (data) {
                                 						$('.sm-searchbox-keyword', searchbox).html(data.htm);
                                 						clickMore($('a.sm-searchbox-more',searchbox));
                                 						$('a.sm-searchbox-more', searchbox).attr({
                                 							'data-count': count + parseInt(firt_load)
                                 						});
                                 					},
                                 					dataType: 'json'
                                 				});
                                 			});
                                 		}
                                 
                                 });
                              </script>
                           </div>
                           <div class="minicart-header">
                              <div class="minicart-content">
                                 <div class="cart-wrapper">
                                    <div data-block="minicart" class="minicart-wrapper">
                                       <a class="action showcart" href="http://localhost/marketplace-theme/themes/sm_market2/argentina/checkout/cart/" data-bind="scope: 'minicart_content'">
                                          <span class="text"><span class="df-text">Shopping Cart</span><span class="hidden">My Cart - </span></span> 
                                          <span class="counter qty empty" data-bind="css: { empty: !!getCartParam('summary_count') == false }, blockLoader: isLoading">
                                             <span class="counter-number">
                                                <!-- ko text: getCartParam('summary_count') --><!-- /ko -->
                                             </span>
                                             <span class="counter-label">
                                                <!-- ko if: getCartParam('summary_count') --><!-- ko text: getCartParam('summary_count') --><!-- /ko --><!-- ko i18n: 'items' --><!-- /ko --><!-- /ko --><!-- ko if: getCartParam('summary_count') == 0 --><!-- ko i18n: '0 item' --><!-- /ko --><!-- /ko -->
                                             </span>
                                             <span class="price-minicart">
                                                <!-- ko foreach: getRegion('subtotalContainer') --><!-- ko template: getTemplate() --><!-- /ko --><!-- /ko -->
                                             </span>
                                          </span>
                                       </a>
                                       <div class="block block-minicart empty" data-role="dropdownDialog" data-mage-init='{"dropdownDialog":{ "appendTo":"[data-block=minicart]", "triggerTarget":".showcart", "timeout": "2000", "closeOnMouseLeave": false, "closeOnEscape": true, "triggerClass":"active", "parentClass":"active", "buttons":[]}}'>
                                          <div id="minicart-content-wrapper" data-bind="scope: 'minicart_content'">
                                             <!-- ko template: getTemplate() --><!-- /ko -->
                                          </div>
                                       </div>
                                       <script>
                                          window.checkout = {"shoppingCartUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/checkout\/cart\/","checkoutUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/checkout\/","updateItemQtyUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/checkout\/sidebar\/updateItemQty\/","removeItemUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/checkout\/sidebar\/removeItem\/","imageTemplate":"Magento_Catalog\/product\/image_with_borders","baseUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/","minicartMaxItemsVisible":5,"websiteId":"1","maxItemsToDisplay":10,"customerLoginUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/customer\/account\/login\/","isRedirectRequired":false,"autocomplete":"off","captcha":{"user_login":{"isCaseSensitive":false,"imageHeight":50,"imageSrc":"","refreshUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/captcha\/refresh\/","isRequired":false},"guest_checkout":{"isCaseSensitive":false,"imageHeight":50,"imageSrc":"","refreshUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/captcha\/refresh\/","isRequired":false}}};
                                       </script><script type="text/x-magento-init">
                                          {
                                              "[data-block='minicart']": {
                                                  "Magento_Ui/js/core/app": {"components":{"minicart_content":{"children":{"subtotal.container":{"children":{"subtotal":{"children":{"subtotal.totals":{"config":{"display_cart_subtotal_incl_tax":0,"display_cart_subtotal_excl_tax":1,"template":"Magento_Tax\/checkout\/minicart\/subtotal\/totals"},"children":{"subtotal.totals.msrp":{"component":"Magento_Msrp\/js\/view\/checkout\/minicart\/subtotal\/totals","config":{"displayArea":"minicart-subtotal-hidden","template":"Magento_Msrp\/checkout\/minicart\/subtotal\/totals"}}},"component":"Magento_Tax\/js\/view\/checkout\/minicart\/subtotal\/totals"}},"component":"uiComponent","config":{"template":"Magento_Checkout\/minicart\/subtotal"}}},"component":"uiComponent","config":{"displayArea":"subtotalContainer"}},"item.renderer":{"component":"uiComponent","config":{"displayArea":"defaultRenderer","template":"Magento_Checkout\/minicart\/item\/default"},"children":{"item.image":{"component":"Magento_Catalog\/js\/view\/image","config":{"template":"Magento_Catalog\/product\/image","displayArea":"itemImage"}},"checkout.cart.item.price.sidebar":{"component":"uiComponent","config":{"template":"Magento_Checkout\/minicart\/item\/price","displayArea":"priceSidebar"}}}},"extra_info":{"component":"uiComponent","config":{"displayArea":"extraInfo"}},"promotion":{"component":"uiComponent","config":{"displayArea":"promotion"}}},"config":{"itemRenderer":{"default":"defaultRenderer","simple":"defaultRenderer","virtual":"defaultRenderer"},"template":"Magento_Checkout\/minicart\/content"},"component":"Magento_Checkout\/js\/view\/minicart"}},"types":[]} },
                                              "*": {
                                                  "Magento_Ui/js/block-loader": "http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/loader-1.gif"
                                              }
                                          }
                                       </script>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               
               
               
               
               
               
               
               
               </div>
            </div>
         </div>
       
