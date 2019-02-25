<?php

	require('controller/controller.php');
	
	// Get the new object 
	$obj = new MarketPlace();
	
	
?>

<!doctype html>
<html lang="en">
   <head >
      <script>
         var require = {
             "baseUrl": "http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US"
         };
      </script> 
      <meta charset="utf-8"/>
      <meta name="description" content="Default Description"/>
      <meta name="keywords" content="Magento, Varien, E-commerce"/>
      <meta name="robots" content="INDEX,FOLLOW"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta name="format-detection" content="telephone=no"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <title>Create New Customer Account</title>
     
     
     <?php include 'head-links.php'; ?>
   
   </head>
   <body data-container="body" data-mage-init='{"loaderAjax": {}, "loader": { "icon": "http://localhost/marketplace-theme/themes/sm_market2/pub/static/frontend/Sm/market/en_US/images/loader-2.gif"}}' class="header-4-style home-4-style footer-1-style layout-full-width  customer-account-create page-layout-1column">
      <script>
         try {
             if (!window.localStorage || !window.sessionStorage) {
                 throw new Error();
             }
         
             localStorage.setItem('storage_test', 1);
             localStorage.removeItem('storage_test');
         } catch(e) {
             (function () {
                 var Storage = function (type) {
                     var data;
         
                     function createCookie(name, value, days) {
                         var date, expires;
         
                         if (days) {
                             date = new Date();
                             date.setTime(date.getTime()+(days * 24 * 60 * 60 * 1000));
                             expires = '; expires=' + date.toGMTString();
                         } else {
                             expires = '';
                         }
                         document.cookie = name + '=' + value+expires+'; path=/';
                     }
         
                     function readCookie(name) {
                         var nameEQ = name + '=',
                             ca = document.cookie.split(';'),
                             i = 0,
                             c;
         
                         for (i=0; i < ca.length; i++) {
                             c = ca[i];
         
                             while (c.charAt(0) === ' ') {
                                 c = c.substring(1,c.length);
                             }
         
                             if (c.indexOf(nameEQ) === 0) {
                                 return c.substring(nameEQ.length, c.length);
                             }
                         }
         
                         return null;
                     }
         
                     function setData(data) {
                         data = encodeURIComponent(JSON.stringify(data));
                         createCookie(type === 'session' ? getSessionName() : 'localStorage', data, 365);
                     }
         
                     function clearData() {
                         createCookie(type === 'session' ? getSessionName() : 'localStorage', '', 365);
                     }
         
                     function getData() {
                         var data = type === 'session' ? readCookie(getSessionName()) : readCookie('localStorage');
         
                         return data ? JSON.parse(decodeURIComponent(data)) : {};
                     }
         
                     function getSessionName() {
                         if (!window.name) {
                             window.name = new Date().getTime();
                         }
         
                         return 'sessionStorage' + window.name;
                     }
         
                     data = getData();
         
                     return {
                         length: 0,
                         clear: function () {
                             data = {};
                             this.length = 0;
                             clearData();
                         },
         
                         getItem: function (key) {
                             return data[key] === undefined ? null : data[key];
                         },
         
                         key: function (i) {
                             var ctr = 0,
                                 k;
         
                             for (k in data) {
                                 if (ctr.toString() === i.toString()) {
                                     return k;
                                 } else {
                                     ctr++
                                 }
                             }
         
                             return null;
                         },
         
                         removeItem: function (key) {
                             delete data[key];
                             this.length--;
                             setData(data);
                         },
         
                         setItem: function (key, value) {
                             data[key] = value.toString();
                             this.length++;
                             setData(data);
                         }
                     };
                 };
         
                 window.localStorage.__proto__ = window.localStorage = new Storage('local');
                 window.sessionStorage.__proto__ = window.sessionStorage = new Storage('session');
             })();
         }
      </script>            <script>
         require.config({
             deps: [
                 'jquery',
                 'mage/translate',
                 'jquery/jquery-storageapi'
             ],
             callback: function ($) {
                 'use strict';
         
                 var dependencies = [],
                     versionObj;
         
                 $.initNamespaceStorage('mage-translation-storage');
                 $.initNamespaceStorage('mage-translation-file-version');
                 versionObj = $.localStorage.get('mage-translation-file-version');
         
                  if (versionObj.version !== '0b24dcba00355e70410609afe221f2e44c2796fc') {
                     dependencies.push(
                         'text!js-translation.json'
                     );
         
                 }
         
                 require.config({
                     deps: dependencies,
                     callback: function (string) {
                         if (typeof string === 'string') {
                             $.mage.translate.add(JSON.parse(string));
                             $.localStorage.set('mage-translation-storage', string);
                             $.localStorage.set(
                                 'mage-translation-file-version',
                                 {
                                     version: '0b24dcba00355e70410609afe221f2e44c2796fc'
                                 }
                             );
                         } else {
                             $.mage.translate.add($.localStorage.get('mage-translation-storage'));
                         }
                     }
                 });
             }
         });
      </script>  
      
      <script type="text/x-magento-init">
         {
             "*": {
                 "mage/cookies": {
                     "expires": null,
                     "path": "/themes/sm_market2",
                     "domain": ".magento2.flytheme.net",
                     "secure": false,
                     "lifetime": "3600"
                 }
             }
         }
      </script>   
      
      
      <noscript>
         <div class="message global noscript">
            <div class="content">
               <p><strong>JavaScript seems to be disabled in your browser.</strong> <span>For the best experience on our site, be sure to turn on Javascript in your browser.</span></p>
            </div>
         </div>
      </noscript>
      
      <div class="page-wrapper">
		  
         <?php include ('header.php'); ?>
        
         <main id="maincontent" class="page-main">
            <a id="contentarea" tabindex="-1"></a>
            <div class="columns col1-layout">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <div class="page-title-wrapper">
                           <h2 class="page-title"  ><span class="base" data-ui-id="page-title-wrapper" >Create New Customer Account</span></h2>
                        </div>
                        <div class="page messages">
                           <div data-placeholder="messages"></div>
                           <div data-bind="scope: 'messages'">
                              <!-- ko if: cookieMessages && cookieMessages.length > 0 -->
                              <div role="alert" data-bind="foreach: { data: cookieMessages, as: 'message' }" class="messages">
                                 <div data-bind="attr: { class: 'message-' + message.type + ' ' + message.type + ' message', 'data-ui-id': 'message-' + message.type }">
                                    <div data-bind="html: message.text"></div>
                                 </div>
                              </div>
                              <!-- /ko --><!-- ko if: messages().messages && messages().messages.length > 0 -->
                              <div role="alert" data-bind="foreach: { data: messages().messages, as: 'message' }" class="messages">
                                 <div data-bind="attr: { class: 'message-' + message.type + ' ' + message.type + ' message', 'data-ui-id': 'message-' + message.type }">
                                    <div data-bind="html: message.text"></div>
                                 </div>
                              </div>
                              
                             
                              <!-- /ko -->
                           </div>
                           
                          
                         
							<?php
								
								echo $obj->Registraion();
							?>
                            
                           
                        </div>
                        <div class="column main">
							
							<!---
                           <div class="block social-login-wrap">
                              <div class="block-content">
                                 <div class="actions-toolbar social-btn facebook-login"><a class="btn btn-block btn-social btn-facebook" data-mage-init='{"socialProvider": {"url": "http://localhost/marketplace-theme/themes/sm_market2/argentina/sociallogin/social/login/type/facebook/", "label": "Login By Facebook"}}'><span class="fa fa-facebook"></span> Sign in with Facebook</a></div>
                                 <div class="actions-toolbar social-btn twitter-login"><a class="btn btn-block btn-social btn-twitter" data-mage-init='{"socialProvider": {"url": "http://localhost/marketplace-theme/themes/sm_market2/argentina/sociallogin/social/login/type/twitter/", "label": "Login By Twitter"}}'><span class="fa fa-twitter"></span> Sign in with Twitter</a></div>
                                 <div class="actions-toolbar social-btn linkedin-login"><a class="btn btn-block btn-social btn-linkedin" data-mage-init='{"socialProvider": {"url": "http://localhost/marketplace-theme/themes/sm_market2/argentina/sociallogin/social/login/type/linkedin/", "label": "Login By LinkedIn"}}'><span class="fa fa-linkedin"></span> Sign in with LinkedIn</a></div>
                                 <div class="actions-toolbar social-btn yahoo-login"><a class="btn btn-block btn-social btn-yahoo" data-mage-init='{"socialProvider": {"url": "http://localhost/marketplace-theme/themes/sm_market2/argentina/sociallogin/social/login/type/yahoo/", "label": "Login By Yahoo"}}'><span class="fa fa-yahoo"></span> Sign in with Yahoo</a></div>
                              </div>
                           </div>
                           -->
                           
                           
                           <input name="form_key" type="hidden" value="57g6R7P6vtWiTl3X" /> 
                           <div id="authenticationPopup" data-bind="scope:'authenticationPopup'" style="display: none;">
                             
                             
                             
                           
                           </div>
                           
                            
                           <div id="sm-social-login" class="white-popup mfp-with-anim mfp-hide" data-mage-init='{"socialPopupForm": {"headerLink":".header-container .header.links","popupEffect":"mfp-move-from-top","formLoginUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/customer\/ajax\/login\/","forgotFormUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/popup\/forgot\/","createFormUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/popup\/create\/"}}'>
                              <div class="social-login-type block-container authentication">
                                 <div class="social-login-title">
                                    <h2 class="login-title">Sign In</h2>
                                 </div>
                                 <div class="block social-login-form-wrap col-mgt mgt-7" id="social-login-form">
                                    <div class="block-title"><span id="block-customer-login-heading" role="heading" aria-level="2">Registered Customers</span></div>
                                    <div class="block-content" aria-labelledby="block-customer-login-heading">
                                       
                                       <form class="form-customer-login" id="social-form-login" data-mage-init='{"validation":{}}'>
                                          <input name="form_key" type="hidden" value="57g6R7P6vtWiTl3X" /> 
                                          <fieldset class="fieldset login" data-hasrequired="* Required Fields">
                                             <div class="field email required">
                                                <label class="label" for="email"><span>Email</span></label> 
                                                <div class="control"><input name="username" id="email" type="email" class="input-text" value="" autocomplete="off" title="Email" data-validate="{required:true, 'validate-email':true}"></div>
                                             </div>
                                             <div class="field password required">
                                                <label for="pass" class="label"><span>Password</span></label> 
                                                <div class="control"><input name="password" id="pass" type="password" class="input-text" autocomplete="off" title="Password" data-validate="{required:true, 'validate-password':true}"></div>
                                             </div>
                                             <div class="actions-toolbar">
                                                <div class="primary"><button type="button" class="action login primary" id="social-login-btn-login"><span>Login</span></button></div>
                                                <div class="secondary"><a class="action remind" href="#"><span>Forgot Your Password?</span></a></div>
                                             </div>
                                             <div class="actions-toolbar">
                                                <div class="primary"><a class="action create" href="#"><span>Create New Account?</span></a></div>
                                             </div>
                                          </fieldset>
                                       </form>
                                    </div>
                                 </div>
                                 <div class="block social-login-wrap col-mgt mgt-5">
                                    <div class="block-title">Or Sign In With</div>
                                    <div class="block-content">
                                       <div class="actions-toolbar social-btn facebook-login"><a class="btn btn-block btn-social btn-facebook" data-mage-init='{"socialProvider": {"url": "http://localhost/marketplace-theme/themes/sm_market2/argentina/sociallogin/social/login/type/facebook/", "label": "Login By Facebook"}}'><span class="fa fa-facebook"></span> Sign in with Facebook</a></div>
                                       <div class="actions-toolbar social-btn twitter-login"><a class="btn btn-block btn-social btn-twitter" data-mage-init='{"socialProvider": {"url": "http://localhost/marketplace-theme/themes/sm_market2/argentina/sociallogin/social/login/type/twitter/", "label": "Login By Twitter"}}'><span class="fa fa-twitter"></span> Sign in with Twitter</a></div>
                                       <div class="actions-toolbar social-btn linkedin-login"><a class="btn btn-block btn-social btn-linkedin" data-mage-init='{"socialProvider": {"url": "http://localhost/marketplace-theme/themes/sm_market2/argentina/sociallogin/social/login/type/linkedin/", "label": "Login By LinkedIn"}}'><span class="fa fa-linkedin"></span> Sign in with LinkedIn</a></div>
                                       <div class="actions-toolbar social-btn yahoo-login"><a class="btn btn-block btn-social btn-yahoo" data-mage-init='{"socialProvider": {"url": "http://localhost/marketplace-theme/themes/sm_market2/argentina/sociallogin/social/login/type/yahoo/", "label": "Login By Yahoo"}}'><span class="fa fa-yahoo"></span> Sign in with Yahoo</a></div>
                                    </div>
                                 </div>
                                 <script>
                                    window.socialAuthenticationPopup = {"facebook":{"label":"Facebook","login_url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/social\/login\/type\/facebook\/","url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/social\/login\/authen\/popup\/type\/facebook\/","key":"facebook","btn_key":"facebook"},"twitter":{"label":"Twitter","login_url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/social\/login\/type\/twitter\/","url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/social\/login\/authen\/popup\/type\/twitter\/","key":"twitter","btn_key":"twitter"},"linkedin":{"label":"LinkedIn","login_url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/social\/login\/type\/linkedin\/","url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/social\/login\/authen\/popup\/type\/linkedin\/","key":"linkedin","btn_key":"linkedin"},"yahoo":{"label":"Yahoo","login_url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/social\/login\/type\/yahoo\/","url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/argentina\/sociallogin\/social\/login\/authen\/popup\/type\/yahoo\/","key":"yahoo","btn_key":"yahoo"}};
                                 </script>
                              </div>
                              <div class="social-login-type block-container create" style="display: none">
                                 <div class="social-login-title">
                                    <h2 class="create-account-title">Create New Account</h2>
                                 </div>
                                 <div class="block col-mgt mgt-12">
                                    <div class="block-content">
                                       <form class="form-customer-create"  action = "<?php $_SERVER['PHP_SELF'];?>" method = "POST">
                                          <fieldset class="fieldset create info">
											  
                                             <input type="hidden" name="success_url" value="" /><input type="hidden" name="error_url" value="" />   
                                            
                                            
                                             <div class="field field-name-firstname required">
                                                <label class="label" for="firstname"><span>First Name</span></label> 
                                                <div class="control">
													
<input type="text" id="firstname" name="firstname"  title="First&#x20;Name" class="input-text required-entry"  data-validate="{required:true}" value = "Hello World"></div>
                                             </div>
                                             <div class="field field-name-lastname required">
                                                <label class="label" for="lastname"><span>Last Name</span></label> 
                                                <div class="control">
													
													<input type="text" id="lastname" name="lastname"  title="Last&#x20;Name" class="input-text required-entry"  data-validate="{required:true}" value = "<?php echo $_POST['lastname'] ?? ''; ?>"></div>
                                             </div>
                                             <div class="field required">
                                                <label for="email_address" class="label"><span>Email</span></label> 
                                                <div class="control">
													
													<input type="email" name="email" id="email_address" title="Email" class="input-text" data-validate="{required:true, 'validate-email':true}" value = "<?php echo $_POST['email'] ?? ''; ?>"/></div>
                                             </div>
                                             <div class="field choice newsletter">
												 
												 
												 <input type="checkbox" class="checkbox" name="is_subscribed" title="Sign Up for Newsletter" value="1" id="is_subscribed" /><label for="is_subscribed" class="label"><span>Sign Up for Newsletter</span></label></div>
                                          
                                          <hr>
                                          
                                         
                                          </fieldset>
                                          <fieldset class="fieldset create account" data-hasrequired="* Required Fields">
                                             <div class="field password required">
                                                <label for="password" class="label"><span>Password</span></label> 
                                                <div class="control">
													
													<input type="password" name="password" id="password-social" title="Password" class="input-text" data-validate="{required:true, 'validate-password':true}" autocomplete="off" /></div>
                                             </div>
                                             <div class="field confirmation required">
                                                <label for="password-confirmation" class="label"><span>Confirm Password</span></label> 
                                                <div class="control"><input type="password" name="password_confirmation" title="Confirm Password" id="password-confirmation-social" class="input-text" data-validate="{required:true, equalTo:'#password-social'}" autocomplete="off" /></div>
                                             </div>
                                          </fieldset>
                                          <div class="actions-toolbar">
                                             <div class="primary">
												 
												<button type="submit" class="action create primary" title="Create an Account" name = "submit"><span>Create an Account</span></button></div>
                                             <div class="secondary"><a class="action back" href="#"><span>Back</span></a></div>
                                          </div>
                                       </form>
                                       <script>
                                          require([
                                              'jquery',
                                              'mage/mage'
                                          ], function ($) {
                                              var dataForm = $('#social-form-create'),
                                                  ignore = null;
                                          
                                              dataForm.mage('validation', {
                                                                          ignore: ignore ? ':hidden:not(' + ignore + ')' : ':hidden'
                                                   }).find('input:text').attr('autocomplete', 'off');
                                          });
                                       </script>
                                    </div>
                                 </div>
                              </div>
                              <div class="social-login-type block-container forgot" style="display:none">
                                 <div class="social-login-title">
                                    <h2 class="forgot-pass-title">Forgot Password</h2>
                                 </div>
                                 <div class="block col-mgt mgt-12">
                                    <div class="block-content">
                                       <form class="form-password-forget" id="social-form-password-forget" data-mage-init='{"validation":{}}'>
                                          <fieldset class="fieldset" data-hasrequired="* Required Fields">
                                             <div class="field note">Please enter your email address below to receive a password reset link.</div>
                                             <div class="field email required">
                                                <label for="email_address" class="label"><span>Email</span></label> 
                                                <div class="control"><input type="email" name="email" alt="email" id="email_address_2" class="input-text" value="" data-validate="{required:true, 'validate-email':true}" /></div>
                                             </div>
                                          </fieldset>
                                          <div class="actions-toolbar">
                                             <div class="primary"><button type="button" class="action send primary"><span>Submit</span></button></div>
                                             <div class="secondary"><a class="action back" href="#"><span>Go back</span></a></div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div style="clear: both"></div>
                           
                           
                          <form class="form create account form-create-account" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" id="form-validate"  autocomplete="off">
   <input name="form_key" type="hidden" value="57g6R7P6vtWiTl3X" /> 
   <fieldset class="fieldset create info">
      <legend class="legend"><span>Personal Information</span></legend>
      <br> 
      <input type="hidden" name="success_url" value=""><input type="hidden" name="error_url" value="">   
      <div class="field field-name-firstname required">
         <label class="label" for="firstname"><span>First Name</span></label> 
         <div class="control">
			 
			 
			 <input type="text" id="firstname" name="firstname" value="<?php echo $_POST["firstname"] ?? '';?>" title="First&#x20;Name" class="input-text required-entry"  data-validate="{required:true}"></div>
      </div>
      <div class="field field-name-lastname required">
         <label class="label" for="lastname"><span>Last Name</span></label> 
         <div class="control"><input type="text" id="lastname" name="lastname" value="<?php echo $_POST["lastname"] ?? ''; ?>" title="Last&#x20;Name" class="input-text required-entry"  data-validate="{required:true}"></div>
      </div>
      <div class="field choice newsletter">
         <input type="checkbox" name="is_subscribed" title="Sign&#x20;Up&#x20;for&#x20;Newsletter" value="1" id="is_subscribed" class="checkbox">
         <label for="is_subscribed" class="label">
         <span>Sign Up for newsletter</span>
         </label>
      </div>
      <hr>
      <div class="field choice newsletter">
         <label for="seller" class="label">
         <span> Seller </span>
         </label>
         <input type="radio" name="registered_as" title="Sign&#x20;Up&#x20;for&#x20;Newsletter" value="1" id="seller" class="checkbox">
         <label for="buyer" class="label">
         <span>Buyer</span>
         </label>
         <input type="radio" name="registered_as" title="Sign&#x20;Up&#x20;for&#x20;Newsletter" value="0" id="buyer" class="checkbox">
      </div>
   </fieldset>
   <fieldset class="fieldset create account" data-hasrequired="&#x2A;&#x20;Required&#x20;Fields">
      <legend class="legend"><span>Sign-in Information</span></legend>
      <br> 
      <div class="field required">
         <label for="email_address" class="label"><span>Email</span></label> 
         <div class="control">
			 
			 <input type="email" name="email" autocomplete="email" id="email_address" value="<?php echo $_POST["email"] ?? ''; ?>" title="Email" class="input-text" data-validate="{required:true, 'validate-email':true}"></div>
      </div>
      <div class="field password required">
         <label for="password" class="label"><span>Password</span></label> 
         <div class="control">
            <input type="password" name="password" id="password" title="Password" class="input-text" data-password-min-length="8" data-password-min-character-sets="3" data-validate="{required:true, 'validate-customer-password':true}" autocomplete="off">
            <div id="password-strength-meter-container" data-role="password-strength-meter" aria-live="polite">
               <div id="password-strength-meter" class="password-strength-meter">Password Strength: <span id="password-strength-meter-label" data-role="password-strength-meter-label">No Password</span></div>
            </div>
         </div>
      </div>
      <div class="field confirmation required">
         <label for="password-confirmation" class="label"><span>Confirm Password</span></label> 
         <div class="control"><input type="password" name="password_confirmation" title="Confirm&#x20;Password" id="password-confirmation" class="input-text" data-validate="{required:true, equalTo:'#password'}" autocomplete="off"></div>
      </div>
   </fieldset>
   <div class="actions-toolbar">
      <div class="primary">
         <button type="submit" class="action submit primary" title="Create&#x20;an&#x20;Account" name = "submit"><span>Create an Account</span></button>
      </div>
      <div class="secondary"><a class="action back" href="#"><span>Back</span></a></div>
   </div>
</form> 
                           
                           
                           <script>
                              require([
                                  'jquery',
                                  'mage/mage'
                              ], function($){
                              
                                  var dataForm = $('#form-validate');
                                  var ignore = null;
                              
                                  dataForm.mage('validation', {
                                          ignore: ignore ? ':hidden:not(' + ignore + ')' : ':hidden'
                                   }).find('input:text').attr('autocomplete', 'off');
                              
                              });
                           </script> 
                           
                           
                           
                           <script type="text/x-magento-init">
                              {
                                  ".field.password": {
                                      "passwordStrengthIndicator": {
                                          "formSelector": "form.form-create-account"
                                      }
                                  }
                              }
                           </script>  
                           
                           
                           
                           
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
         
         <?php include 'footer.php'; ?>
         
 <script type="text/javascript">
            require([
            	'jquery',
            	'quickView',
            	'domReady!'
            ], function ($, cartQuickView) {
            	var quickViewCf = {
            		isQuickView: true,
            		isAjaxCart: true,
            		product_container : '.products-grid .item-inner,.products-list .item-inner',
            		button_container :'.box-image,.box-image-list',
            		label_button : 'Quick View',
            		base_url : 'http://localhost/marketplace-theme/themes/sm_market2/argentina/'
            	}
            	$(quickViewCf.product_container).cartQuickView(quickViewCf);
            	$( document ).on( "afterAjaxProductsLoaded", function( event) {
            		$(quickViewCf.product_container).cartQuickView(quickViewCf);
            	});
            });
         </script> 
         
        
        
        
