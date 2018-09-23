@extends('layouts.app1')

@section('title', 'Page Title')

@section('sidebar')
    @parent

   
@endsection

@section('content')

 <main id="maincontent" class="page-main">
            <a id="contentarea" tabindex="-1"></a>
            <div class="columns col1-layout">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <div class="page-title-wrapper">
                           <h2 class="page-title"  ><span class="base" data-ui-id="page-title-wrapper" >Customer Login</span></h2>
                        </div>
                        <div class="page messages">
                           <div data-placeholder="messages"> 
                           
                           
                           </div>
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
                           
                           
                          
                           
                        </div>
                        <div class="column main">
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
                                      
                                      
                                      
                                       <form class="form-customer-login" data-mage-init='{"validation":{}}' method = "POST" actiont = "#">
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
                                 
                                 <!--
                                 <div class="block social-login-wrap col-mgt mgt-5">
                                    <div class="block-title">Or Sign In With</div>
                                    
                                   
                                    <div class="block-content">
                                       <div class="actions-toolbar social-btn facebook-login"><a class="btn btn-block btn-social btn-facebook" data-mage-init='{"socialProvider": {"url": "http://localhost/marketplace-theme/themes/sm_market2/argentina/sociallogin/social/login/type/facebook/", "label": "Login By Facebook"}}'><span class="fa fa-facebook"></span> Sign in with Facebook</a></div>
                                       <div class="actions-toolbar social-btn twitter-login"><a class="btn btn-block btn-social btn-twitter" data-mage-init='{"socialProvider": {"url": "http://localhost/marketplace-theme/themes/sm_market2/argentina/sociallogin/social/login/type/twitter/", "label": "Login By Twitter"}}'><span class="fa fa-twitter"></span> Sign in with Twitter</a></div>
                                       <div class="actions-toolbar social-btn linkedin-login"><a class="btn btn-block btn-social btn-linkedin" data-mage-init='{"socialProvider": {"url": "http://localhost/marketplace-theme/themes/sm_market2/argentina/sociallogin/social/login/type/linkedin/", "label": "Login By LinkedIn"}}'><span class="fa fa-linkedin"></span> Sign in with LinkedIn</a></div>
                                       <div class="actions-toolbar social-btn yahoo-login"><a class="btn btn-block btn-social btn-yahoo" data-mage-init='{"socialProvider": {"url": "http://localhost/marketplace-theme/themes/sm_market2/argentina/sociallogin/social/login/type/yahoo/", "label": "Login By Yahoo"}}'><span class="fa fa-yahoo"></span> Sign in with Yahoo</a></div>
                                    </div>
                                 
                                 
                                 
                                 </div>
                                 
                                 -->
                                 
                                 
                                 
                                 
                                 
                              </div>
                              <div class="social-login-type block-container create" style="display: none">
                                 <div class="social-login-title">
                                    <h2 class="create-account-title">Create New Account</h2>
                                 </div>
                                 <div class="block col-mgt mgt-12">
                                    <div class="block-content">
                                       <form class="form-customer-create" id="social-form-create">
                                          <fieldset class="fieldset create info">
                                             <input type="hidden" name="success_url" value="" /><input type="hidden" name="error_url" value="" />   
                                             <div class="field field-name-firstname required">
                                                <label class="label" for="firstname"><span>First Name</span></label> 
                                                <div class="control"><input type="text" id="firstname" name="firstname" value="" title="First&#x20;Name" class="input-text required-entry"  data-validate="{required:true}"></div>
                                             </div>
                                             <div class="field field-name-lastname required">
                                                <label class="label" for="lastname"><span>Last Name</span></label> 
                                                <div class="control"><input type="text" id="lastname" name="lastname" value="" title="Last&#x20;Name" class="input-text required-entry"  data-validate="{required:true}"></div>
                                             </div>
                                             <div class="field required">
                                                <label for="email_address" class="label"><span>Email</span></label> 
                                                <div class="control"><input type="email" name="email" id="email_address" value="" title="Email" class="input-text" data-validate="{required:true, 'validate-email':true}" /></div>
                                             </div>
                                             <div class="field choice newsletter"><input type="checkbox" class="checkbox" name="is_subscribed" title="Sign Up for Newsletter" value="1" id="is_subscribed" /><label for="is_subscribed" class="label"><span>Sign Up for Newsletter</span></label></div>
                                          </fieldset>
                                          <fieldset class="fieldset create account" data-hasrequired="* Required Fields">
                                             <div class="field password required">
                                                <label for="password" class="label"><span>Password</span></label> 
                                                <div class="control"><input type="password" name="password" id="password-social" title="Password" class="input-text" data-validate="{required:true, 'validate-password':true}" autocomplete="off" /></div>
                                             </div>
                                             <div class="field confirmation required">
                                                <label for="password-confirmation" class="label"><span>Confirm Password</span></label> 
                                                <div class="control"><input type="password" name="password_confirmation" title="Confirm Password" id="password-confirmation-social" class="input-text" data-validate="{required:true, equalTo:'#password-social'}" autocomplete="off" /></div>
                                             </div>
                                          </fieldset>
                                          <div class="actions-toolbar">
                                             <div class="primary"><button type="button" class="action create primary" title="Create an Account"><span>Create an Account</span></button></div>
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
                           <div class="login-container">
                              <div class="block block-customer-login">
                                 <div class="block-title"><strong id="block-customer-login-heading" role="heading" aria-level="2">Registered Customers</strong></div>
                                 <div class="block-content" aria-labelledby="block-customer-login-heading">
                                    
                                    @if (!empty($name))
    <div class="alert alert-success">
        {{ print_R($name) }}
    </div>
@endif
                                  
                                  
                                    <form class="form form-login" action="/login" method="post"  data-mage-init='{"validation":{}}'>
                                       
                                       {{ csrf_field() }}
                                       
                                       <input name="form_key" type="hidden" value="57g6R7P6vtWiTl3X" /> 
                                       <fieldset class="fieldset login" data-hasrequired="&#x2A;&#x20;Required&#x20;Fields">
                                          
                                          
                                          <div class="field note">If you have an account, sign in with your email address.</div>
                                          <div class="field email required">
                                             <label class="label" for="email"><span>Email</span></label> 
                                             <div class="control"><input name="login[username]" value=""  autocomplete="off" id="email" type="email" class="input-text" title="Email" data-validate="{required:true, 'validate-email':true}"></div>
                                          </div>
                                          
                                          
                                          
                                          <div class="field password required">
                                             <label for="pass" class="label"><span>Password</span></label> 
                                             <div class="control"><input name="login[password]" type="password"  autocomplete="off" class="input-text" id="pass" title="Password" data-validate="{required:true}"></div>
                                          </div>
                                          
                                 <div class="field choice newsletter">
                                 
                                 <label for="" class="label">Login as </label>
                                 </div>
                                <div class="field choice newsletter">
								<label for="seller" class="label">
									<span> Seller </span>
								</label>
								<input type="radio" name="login_as" title="Sign Up for Newsletter" value="1" id="seller" class="checkbox">
								
								
								<label for="buyer" class="label">
								 <span>Buyer</span>
								 </label>
								 <input type="radio" name="login_as" title="Sign Up for Newsletter" value="0" id="buyer" class="checkbox">
							  
							  
							  
							  </div>
										
											
									
										
										
                                          
                                          <div class="actions-toolbar">
                                             <div class="primary"><button type="submit" class="action login primary" name="submit"><span>Sign In</span></button></div>
                                             <div class="secondary"><a class="action remind" href="http://localhost/marketplace-theme/themes/sm_market2/argentina/customer/account/forgotpassword/"><span>Forgot Your Password?</span></a></div>
                                          </div>
                                          
                                          
                                      
                                       </fieldset>
                                    </form>
                                 </div>
                              </div>
                              <div class="block block-new-customer">
                                 <div class="block-title"><strong id="block-new-customer-heading" role="heading" aria-level="2">New Customers</strong></div>
                                 <div class="block-content" aria-labelledby="block-new-customer-heading">
                                    <p>Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</p>
                                    <div class="actions-toolbar">
                                       <div class="primary"><a href="http://localhost:8000/account" class="action create primary"><span>Create an Account</span></a></div>
                                    </div>
                                 </div>
                              </div>
                              <!--
                              
                              <div class="block social-login-wrap">
                                 <div class="block-content">
                                    <div class="actions-toolbar social-btn facebook-login"><a class="btn btn-block btn-social btn-facebook" data-mage-init='{"socialProvider": {"url": "http://localhost/marketplace-theme/themes/sm_market2/argentina/sociallogin/social/login/type/facebook/", "label": "Login By Facebook"}}'><span class="fa fa-facebook"></span> Sign in with Facebook</a></div>
                                    <div class="actions-toolbar social-btn twitter-login"><a class="btn btn-block btn-social btn-twitter" data-mage-init='{"socialProvider": {"url": "http://localhost/marketplace-theme/themes/sm_market2/argentina/sociallogin/social/login/type/twitter/", "label": "Login By Twitter"}}'><span class="fa fa-twitter"></span> Sign in with Twitter</a></div>
                                    <div class="actions-toolbar social-btn linkedin-login"><a class="btn btn-block btn-social btn-linkedin" data-mage-init='{"socialProvider": {"url": "http://localhost/marketplace-theme/themes/sm_market2/argentina/sociallogin/social/login/type/linkedin/", "label": "Login By LinkedIn"}}'><span class="fa fa-linkedin"></span> Sign in with LinkedIn</a></div>
                                    <div class="actions-toolbar social-btn yahoo-login"><a class="btn btn-block btn-social btn-yahoo" data-mage-init='{"socialProvider": {"url": "http://localhost/marketplace-theme/themes/sm_market2/argentina/sociallogin/social/login/type/yahoo/", "label": "Login By Yahoo"}}'><span class="fa fa-yahoo"></span> Sign in with Yahoo</a></div>
                                 </div>
                              </div>
                           
                           -->
                           
                           </div>
                           
                          
                        
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
        

       

@endsection
