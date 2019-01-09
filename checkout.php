<?php
session_start();
ob_start();
require('controller/controller.php');

// Setting time to dubai
date_default_timezone_set ('Asia/Dubai');
// Get the object
$obj = new MarketPlace();

   ?>
<!doctype html>
<html lang="en">
   <head >
      <meta charset="utf-8"/>
      <meta name="description" content="Default Description"/>
      <meta name="keywords" />
      <meta name="robots" content="INDEX,FOLLOW"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta name="format-detection" content="telephone=no"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <title>Home - SM Market Layout 4</title>
      <?php include 'head-links.php'; ?>
      <!--
      Client Secret
SpGUH-n1O3s_zbYDruMDk5qA

Client ID
811318134568-olbou97mfnls0h0f4e4h2d6eh64jflo6.apps.googleusercontent.com


     
      
      
  
  
     <script type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyDW9y0X7Hffibp0nXO7_J-nuW1o1qhOoRY&libraries=places'></script>
     -->
     
   
		<script type="text/javascript"
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQnJ5029HZsZSfrclRs2T8GPpH_SBFCuc"></script>
    
    <script src="js/locationpicker.jquery.js"></script>

     
     
     
    
      
      
      <style>
      
      .nopadding {
   padding: 0 !important;
   margin: 0 !important;
}

.reqired-red-text {
	
    color:#e02b27;
    font-size:1.2rem;
    margin:0 0 0 5px
	}
	
	.label{
	width: auto !important;
    text-align: left !important;
    margin-bottom: 10px;
    display: table;
    float: none !important;
}

</style>
      
   </head>
   <body data-container="body">
      <noscript>
         <div class="message global noscript">
            <div class="content">
               <p><strong>JavaScript seems to be disabled in your browser.</strong> <span>For the best experience on our site, be sure to turn on Javascript in your browser.</span></p>
            </div>
         </div>
      </noscript>
      <div class="page-wrapper">
         <?php include 'header.php'; ?>
         <main id="maincontent" class="page-main">
            <a id="contentarea" tabindex="-1"></a>
            
            
            
            
            <div class="columns col1-layout">
               <div class="container">
                  <div class="row">
					  <?php if($obj->IfCartExists() === true) :?>
					  
					  <div class="col-lg-12 col-md-12">
                        <div class="page-title-wrapper">
                           <h2 class="page-title"><span class="base" data-ui-id="page-title-wrapper">Checkout</span></h2>
                        </div>
                       
                       
                        <div class="column main">
                           <input name="form_key" type="hidden" value="1CqMG4r20wc5ViZh"> 
                           <div id="authenticationPopup" data-bind="scope:'authenticationPopup'" style="display: none;">
                              <script>
                                 window.authenticationPopup = {"autocomplete":"off","customerRegisterUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/customer\/account\/create\/","customerForgotPasswordUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/customer\/account\/forgotpassword\/","baseUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/"};
                              </script>
                              
                           </div>
                           <div id="checkout" data-bind="scope:'checkout'" class="checkout-container">
                              
                              
                              
                              <div class="authentication-wrapper" data-block="authentication" data-bind="visible: isActive()">
                                 <button type="button" class="action action-auth-toggle" data-trigger="authentication">
                                 <span data-bind="i18n: 'Sign In'">Sign In</span>
                                 </button>
                                 
                                 <aside role="dialog" class="modal-custom authentication-dropdown
                                    custom-slide
                                    " aria-describedby="modal-content-15" data-role="modal" data-type="custom" tabindex="0">
                                    <div data-role="focusable-start" tabindex="0"></div>
                                    <div class="modal-inner-wrap" data-role="focusable-scope">
                                       <header class="modal-header">
                                          <button class="action-close" data-role="closeBtn" type="button">
                                          <span>Close</span>
                                          </button>
                                       </header>
                                       <div id="modal-content-15" class="modal-content" data-role="content">
                                          <div class="block-authentication" style="">
                                             
                                             <div class="block block-customer-login" data-bind="attr: {'data-label': $t('or')}" data-label="or">
                                                <div class="block-title">
                                                   <strong id="block-customer-login-heading" role="heading" aria-level="2" data-bind="i18n: 'Sign In'">Sign In</strong>
                                                </div>
                                                
                                                
                                                <div data-role="checkout-messages" class="messages" data-bind="visible: isVisible(), click: removeAll">
                                                   
                                                   
                                                </div>
                                                
                                                
                                               
                                             
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-role="focusable-end" tabindex="0"></div>
                                 </aside>
                              </div>
                              
                              
                              
                              
                              <ul class="opc-progress-bar">
                                 
                                 <li class="opc-progress-bar-item _active" data-bind="css: item.isVisible() ? '_active' : ($parent.isProcessed(item) ? '_complete' : '')">
                                    <span data-bind="i18n: item.title, click: $parent.navigateTo">Shipping</span>
                                 </li>
                                 <li class="opc-progress-bar-item " data-bind="css: item.isVisible() ? '_active' : ($parent.isProcessed(item) ? '_complete' : '')">
                                    <span data-bind="i18n: item.title, click: $parent.navigateTo">Review &amp; Payments</span>
                                 </li>
                                 
                              </ul>
                              
                              
                              
                              
                              <div class="opc-estimated-wrapper" data-bind="blockLoader: isLoading">
                                 <div class="estimated-block">
                                    <span class="estimated-label" data-bind="i18n: 'Estimated Total'">Estimated Total</span>
                                    <span class="estimated-price" data-bind="text: getValue()">$542.00</span>
                                 </div>
                                 <div class="minicart-wrapper">
                                    <button type="button" class="action showcart" data-bind="click: showSidebar" data-toggle="opc-summary">
                                    <span class="counter qty">
                                    <span class="counter-number" data-bind="text: getQuantity()">2</span>
                                    </span>
                                    </button>
                                 </div>
                              </div>
                              
                              
                              
                              
                              <div data-role="checkout-messages" class="messages" data-bind="visible: isVisible(), click: removeAll">
                                 
                                 
                              </div>
                              
                              <?php
                              //echo "<pre>";
                              
                              //print_R($_POST);
                              
                              //echo "</pre>";
                              ?>
                              <div class="opc-wrapper">
                                 <ol class="opc" id="checkoutSteps">
										
									<?php if($obj->IsUserLoggedInBuyer() !== true):?>
                                    <!--
                                    <div class="message success">
		<div>
  <strong>Success ! </strong>Product Original Unlocked Samsung Galaxy S8 Plus 4G R is sucessfully added to the cart.
</div></div>
                                  -->
                                  <!-- if method is not returning true --->
                                 <?php if($obj->GeustUserCheckout() !== true) :?>
                                 
                                 <div class="message error">
		<div>
  <strong>Error ! </strong><?= $obj->GeustUserCheckout(); ?>
</div></div>
                                  
                                 <?php endif; ?>
                                  
                                   <li id="shipping" class="checkout-shipping-address" data-bind="fadeVisible: visible()">
                                       <div class="step-title" data-role="title" data-bind="i18n: 'Shipping Address'">Shipping Address</div>
                                       <div id="checkout-step-shipping" class="step-content" data-role="content">
										
										
										
                                          <form class="form form-login" action = "<?= basename($_SERVER['PHP_SELF'], '.php'); ?>"method="post">
                                             <fieldset id="customer-email-fieldset" class="fieldset" data-bind="blockLoader: isLoading">
                                                <div class="field #565655652">
                                                   <label class="label" for="customer-email">
                                                   <span data-bind="i18n: 'Email Address'">Email Address</span>
                                                   </label>
                                                   <div class="control _with-tooltip">
                                                      <input class="input-text" type="email" name = "email" oninvalid="this.setCustomValidity('Please enter your email address.')"
														oninput="setCustomValidity('')" #565655652  value = "<?= $_POST['email'] ?? ''; ?>"/>
                                                      <div class="field-tooltip toggle">
                                                         
                                                         
                                                         <span class="field-tooltip-action action-help" tabindex="0" data-toggle="dropdown" data-bind="mageInit: {'dropdown':{'activeClass': '_active'}}" aria-haspopup="true" aria-expanded="false" role="button"></span>
                                                         
                                                         <div class="field-tooltip-content" data-target="dropdown" data-bind="i18n: tooltip.description" aria-hidden="true">We'll send your order confirmation here.</div>
                                                      </div>
                                                      
                                                      
                                                   </div>
                                                </div>
                                                
                                                <div class="field #565655652">
                                                   <label class="label" for="customer-email">
                                                   <span data-bind="i18n: 'Email Address'">Password</span>
                                                   </label>
                                                   <div class="control _with-tooltip">
                                                      <input class="input-text" type="password" name = "password" oninvalid="this.setCustomValidity('Please enter your password 8 characters long.')"
														oninput="setCustomValidity('')" #565655652 value = "<?= $_POST['password'] ?? ''; ?>">
                                                      
                                                      
                                                      
                                                   </div>
                                                </div>
                                                
                                                 <div class="field #565655652">
                                                   <label class="label" for="customer-email">
                                                   <span data-bind="i18n: 'Email Address'">Confirm Password</span>
                                                   </label>
                                                   <div class="control _with-tooltip">
                                                      <input class="input-text" type="password" name = "confirm-password" oninvalid="this.setCustomValidity('Please enter confirm password.')"
														oninput="setCustomValidity('')" #565655652 value = "<?= $_POST['confirm-password'] ?? ''; ?>">
                                                      
                                                      
                                                      
                                                   </div>
                                                </div>
                                                
                                                
                                                
                                             </fieldset>
      
                                             <div id="shipping-new-address-form" class="fieldset address">
												
												 <div class = "col-md-12">
												 
												 </div>
                                                <div class="field _#565655652" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.firstname">
                                                   <label class="label" data-bind="attr: { for: element.uid }" for="G3URDY9">
                                                      
                                                      <span data-bind="i18n: element.label">First Name</span>
                                                      
                                                   </label>
                                                   <div class="control" >
                                                      
                                                      
                                                      <input  type="text" class="form-control" name="firstname" placeholder="" value="<?= $_POST['firstname'] ?? '' ;?>" 
                                                      
                                                      pattern="[a-zA-Z ]{2,}" 
														oninvalid="this.setCustomValidity('Please Enter first name.')"
														oninput="setCustomValidity('')" #565655652
													
													/>
                                                      
                                                   </div>
                                                </div>
                                                
                                                
                                                
                                                <div class="field _#565655652" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.lastname">
                                                   <label class="label" data-bind="attr: { for: element.uid }" for="HWOEEB3">
                                                      
                                                      <span data-bind="i18n: element.label">Last Name</span>
                                                      
                                                   </label>
                                                   <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">

                                                      <input type="text" id="last-name" class="form-control" name="lastname" placeholder="" value="<?= $_POST['lastname'] ?? '';?>"
														
														pattern="[a-zA-Z ]{2,}"
														oninvalid="this.setCustomValidity('Please Enter last name.')"
														oninput="setCustomValidity('')" #565655652
													
                                                      />                               
                                                   </div>
                                                </div>
                                                
                                                <div class = "form-group">
                                                
													<input type = "hidden" value = "" id = "country_node" name="country1"/>
													<input type = "hidden" value = "" id = "city_node" name = "city"/>
													<input type = "hidden" value = "" id = "area_node" name = "AddressArea"/>
													
												</div>
                                                
                                                
                                                <div class="field _#565655652" >
                                                   <label class="label" >
                                                      
                                                      <span >Country</span>
                                                      
                                                   </label>
                                                   
                                                   <div class="control" >

                                                     <select  id="country" name="country"
                                                      oninvalid="this.setCustomValidity('Please select country.')"
														oninput="setCustomValidity('')" #565655652
													
                                                      >
                                                         <option value="" selected="">Select Country</option>
                                                         <option value="AF">Afghanistan</option>
                                                         <option value="AX">Åland Islands</option>
                                                         <option value="AL">Albania</option>
                                                         <option value="DZ">Algeria</option>
                                                         <option value="AS">American Samoa</option>
                                                         <option value="AD">Andorra</option>
                                                         <option value="AO">Angola</option>
                                                         <option value="AI">Anguilla</option>
                                                         <option value="AQ">Antarctica</option>
                                                         <option value="AG">Antigua and Barbuda</option>
                                                         <option value="AR">Argentina</option>
                                                         <option value="AM">Armenia</option>
                                                         <option value="AW">Aruba</option>
                                                         <option value="AU">Australia</option>
                                                         <option value="AT">Austria</option>
                                                         <option value="AZ">Azerbaijan</option>
                                                         <option value="BS">Bahamas</option>
                                                         <option value="BH">Bahrain</option>
                                                         <option value="BD">Bangladesh</option>
                                                         <option value="BB">Barbados</option>
                                                         <option value="BY">Belarus</option>
                                                         <option value="BE">Belgium</option>
                                                         <option value="BZ">Belize</option>
                                                         <option value="BJ">Benin</option>
                                                         <option value="BM">Bermuda</option>
                                                         <option value="BT">Bhutan</option>
                                                         <option value="BO">Bolivia, Plurinational State of</option>
                                                         <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                         <option value="BA">Bosnia and Herzegovina</option>
                                                         <option value="BW">Botswana</option>
                                                         <option value="BV">Bouvet Island</option>
                                                         <option value="BR">Brazil</option>
                                                         <option value="IO">British Indian Ocean Territory</option>
                                                         <option value="BN">Brunei Darussalam</option>
                                                         <option value="BG">Bulgaria</option>
                                                         <option value="BF">Burkina Faso</option>
                                                         <option value="BI">Burundi</option>
                                                         <option value="KH">Cambodia</option>
                                                         <option value="CM">Cameroon</option>
                                                         <option value="CA">Canada</option>
                                                         <option value="CV">Cape Verde</option>
                                                         <option value="KY">Cayman Islands</option>
                                                         <option value="CF">Central African Republic</option>
                                                         <option value="TD">Chad</option>
                                                         <option value="CL">Chile</option>
                                                         <option value="CN">China</option>
                                                         <option value="CX">Christmas Island</option>
                                                         <option value="CC">Cocos (Keeling) Islands</option>
                                                         <option value="CO">Colombia</option>
                                                         <option value="KM">Comoros</option>
                                                         <option value="CG">Congo</option>
                                                         <option value="CD">Congo, the Democratic Republic of the</option>
                                                         <option value="CK">Cook Islands</option>
                                                         <option value="CR">Costa Rica</option>
                                                         <option value="CI">Côte d'Ivoire</option>
                                                         <option value="HR">Croatia</option>
                                                         <option value="CU">Cuba</option>
                                                         <option value="CW">Curaçao</option>
                                                         <option value="CY">Cyprus</option>
                                                         <option value="CZ">Czech Republic</option>
                                                         <option value="DK">Denmark</option>
                                                         <option value="DJ">Djibouti</option>
                                                         <option value="DM">Dominica</option>
                                                         <option value="DO">Dominican Republic</option>
                                                         <option value="EC">Ecuador</option>
                                                         <option value="EG">Egypt</option>
                                                         <option value="SV">El Salvador</option>
                                                         <option value="GQ">Equatorial Guinea</option>
                                                         <option value="ER">Eritrea</option>
                                                         <option value="EE">Estonia</option>
                                                         <option value="ET">Ethiopia</option>
                                                         <option value="FK">Falkland Islands (Malvinas)</option>
                                                         <option value="FO">Faroe Islands</option>
                                                         <option value="FJ">Fiji</option>
                                                         <option value="FI">Finland</option>
                                                         <option value="FR">France</option>
                                                         <option value="GF">French Guiana</option>
                                                         <option value="PF">French Polynesia</option>
                                                         <option value="TF">French Southern Territories</option>
                                                         <option value="GA">Gabon</option>
                                                         <option value="GM">Gambia</option>
                                                         <option value="GE">Georgia</option>
                                                         <option value="DE">Germany</option>
                                                         <option value="GH">Ghana</option>
                                                         <option value="GI">Gibraltar</option>
                                                         <option value="GR">Greece</option>
                                                         <option value="GL">Greenland</option>
                                                         <option value="GD">Grenada</option>
                                                         <option value="GP">Guadeloupe</option>
                                                         <option value="GU">Guam</option>
                                                         <option value="GT">Guatemala</option>
                                                         <option value="GG">Guernsey</option>
                                                         <option value="GN">Guinea</option>
                                                         <option value="GW">Guinea-Bissau</option>
                                                         <option value="GY">Guyana</option>
                                                         <option value="HT">Haiti</option>
                                                         <option value="HM">Heard Island and McDonald Islands</option>
                                                         <option value="VA">Holy See (Vatican City State)</option>
                                                         <option value="HN">Honduras</option>
                                                         <option value="HK">Hong Kong</option>
                                                         <option value="HU">Hungary</option>
                                                         <option value="IS">Iceland</option>
                                                         <option value="IN">India</option>
                                                         <option value="ID">Indonesia</option>
                                                         <option value="IR">Iran, Islamic Republic of</option>
                                                         <option value="IQ">Iraq</option>
                                                         <option value="IE">Ireland</option>
                                                         <option value="IM">Isle of Man</option>
                                                         <option value="IL">Israel</option>
                                                         <option value="IT">Italy</option>
                                                         <option value="JM">Jamaica</option>
                                                         <option value="JP">Japan</option>
                                                         <option value="JE">Jersey</option>
                                                         <option value="JO">Jordan</option>
                                                         <option value="KZ">Kazakhstan</option>
                                                         <option value="KE">Kenya</option>
                                                         <option value="KI">Kiribati</option>
                                                         <option value="KP">Korea, Democratic People's Republic of</option>
                                                         <option value="KR">Korea, Republic of</option>
                                                         <option value="KW">Kuwait</option>
                                                         <option value="KG">Kyrgyzstan</option>
                                                         <option value="LA">Lao People's Democratic Republic</option>
                                                         <option value="LV">Latvia</option>
                                                         <option value="LB">Lebanon</option>
                                                         <option value="LS">Lesotho</option>
                                                         <option value="LR">Liberia</option>
                                                         <option value="LY">Libya</option>
                                                         <option value="LI">Liechtenstein</option>
                                                         <option value="LT">Lithuania</option>
                                                         <option value="LU">Luxembourg</option>
                                                         <option value="MO">Macao</option>
                                                         <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                         <option value="MG">Madagascar</option>
                                                         <option value="MW">Malawi</option>
                                                         <option value="MY">Malaysia</option>
                                                         <option value="MV">Maldives</option>
                                                         <option value="ML">Mali</option>
                                                         <option value="MT">Malta</option>
                                                         <option value="MH">Marshall Islands</option>
                                                         <option value="MQ">Martinique</option>
                                                         <option value="MR">Mauritania</option>
                                                         <option value="MU">Mauritius</option>
                                                         <option value="YT">Mayotte</option>
                                                         <option value="MX">Mexico</option>
                                                         <option value="FM">Micronesia, Federated States of</option>
                                                         <option value="MD">Moldova, Republic of</option>
                                                         <option value="MC">Monaco</option>
                                                         <option value="MN">Mongolia</option>
                                                         <option value="ME">Montenegro</option>
                                                         <option value="MS">Montserrat</option>
                                                         <option value="MA">Morocco</option>
                                                         <option value="MZ">Mozambique</option>
                                                         <option value="MM">Myanmar</option>
                                                         <option value="NA">Namibia</option>
                                                         <option value="NR">Nauru</option>
                                                         <option value="NP">Nepal</option>
                                                         <option value="NL">Netherlands</option>
                                                         <option value="NC">New Caledonia</option>
                                                         <option value="NZ">New Zealand</option>
                                                         <option value="NI">Nicaragua</option>
                                                         <option value="NE">Niger</option>
                                                         <option value="NG">Nigeria</option>
                                                         <option value="NU">Niue</option>
                                                         <option value="NF">Norfolk Island</option>
                                                         <option value="MP">Northern Mariana Islands</option>
                                                         <option value="NO">Norway</option>
                                                         <option value="OM">Oman</option>
                                                         <option value="PK">Pakistan</option>
                                                         <option value="PW">Palau</option>
                                                         <option value="PS">Palestinian Territory, Occupied</option>
                                                         <option value="PA">Panama</option>
                                                         <option value="PG">Papua New Guinea</option>
                                                         <option value="PY">Paraguay</option>
                                                         <option value="PE">Peru</option>
                                                         <option value="PH">Philippines</option>
                                                         <option value="PN">Pitcairn</option>
                                                         <option value="PL">Poland</option>
                                                         <option value="PT">Portugal</option>
                                                         <option value="PR">Puerto Rico</option>
                                                         <option value="QA">Qatar</option>
                                                         <option value="RE">Réunion</option>
                                                         <option value="RO">Romania</option>
                                                         <option value="RU">Russian Federation</option>
                                                         <option value="RW">Rwanda</option>
                                                         <option value="BL">Saint Barthélemy</option>
                                                         <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                         <option value="KN">Saint Kitts and Nevis</option>
                                                         <option value="LC">Saint Lucia</option>
                                                         <option value="MF">Saint Martin (French part)</option>
                                                         <option value="PM">Saint Pierre and Miquelon</option>
                                                         <option value="VC">Saint Vincent and the Grenadines</option>
                                                         <option value="WS">Samoa</option>
                                                         <option value="SM">San Marino</option>
                                                         <option value="ST">Sao Tome and Principe</option>
                                                         <option value="SA">Saudi Arabia</option>
                                                         <option value="SN">Senegal</option>
                                                         <option value="RS">Serbia</option>
                                                         <option value="SC">Seychelles</option>
                                                         <option value="SL">Sierra Leone</option>
                                                         <option value="SG">Singapore</option>
                                                         <option value="SX">Sint Maarten (Dutch part)</option>
                                                         <option value="SK">Slovakia</option>
                                                         <option value="SI">Slovenia</option>
                                                         <option value="SB">Solomon Islands</option>
                                                         <option value="SO">Somalia</option>
                                                         <option value="ZA">South Africa</option>
                                                         <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                         <option value="SS">South Sudan</option>
                                                         <option value="ES">Spain</option>
                                                         <option value="LK">Sri Lanka</option>
                                                         <option value="SD">Sudan</option>
                                                         <option value="SR">Suriname</option>
                                                         <option value="SJ">Svalbard and Jan Mayen</option>
                                                         <option value="SZ">Swaziland</option>
                                                         <option value="SE">Sweden</option>
                                                         <option value="CH">Switzerland</option>
                                                         <option value="SY">Syrian Arab Republic</option>
                                                         <option value="TW">Taiwan, Province of China</option>
                                                         <option value="TJ">Tajikistan</option>
                                                         <option value="TZ">Tanzania, United Republic of</option>
                                                         <option value="TH">Thailand</option>
                                                         <option value="TL">Timor-Leste</option>
                                                         <option value="TG">Togo</option>
                                                         <option value="TK">Tokelau</option>
                                                         <option value="TO">Tonga</option>
                                                         <option value="TT">Trinidad and Tobago</option>
                                                         <option value="TN">Tunisia</option>
                                                         <option value="TR">Turkey</option>
                                                         <option value="TM">Turkmenistan</option>
                                                         <option value="TC">Turks and Caicos Islands</option>
                                                         <option value="TV">Tuvalu</option>
                                                         <option value="UG">Uganda</option>
                                                         <option value="UA">Ukraine</option>
                                                         <option value="AE">United Arab Emirates</option>
                                                         <option value="GB">United Kingdom</option>
                                                         <option value="US">United States</option>
                                                         <option value="UM">United States Minor Outlying Islands</option>
                                                         <option value="UY">Uruguay</option>
                                                         <option value="UZ">Uzbekistan</option>
                                                         <option value="VU">Vanuatu</option>
                                                         <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                         <option value="VN">Viet Nam</option>
                                                         <option value="VG">Virgin Islands, British</option>
                                                         <option value="VI">Virgin Islands, U.S.</option>
                                                         <option value="WF">Wallis and Futuna</option>
                                                         <option value="EH">Western Sahara</option>
                                                         <option value="YE">Yemen</option>
                                                         <option value="ZM">Zambia</option>
                                                         <option value="ZW">Zimbabwe</option>
                                                      </select>
                                                  
                                   
                                                   </div>
                                                </div>
                                                
                                                
                                                
                                                
                                                <div class="field _#565655652" >
                                                   <label class="label" >
                                                      
                                                      <span >City</span>
                                                      
                                                   </label>
                                                   
                                                   <div class="control" >

                                                      <input class="input-text" type="text"  name="city" pattern="[a-zA-Z ]{2,}" oninvalid="this.setCustomValidity('Please enter your city')"
														oninput="setCustomValidity('')" #565655652 value = "<?= $_POST['city'] ?? ''?>">
                                   
                                                   </div>
                                                </div>
                                                
                                                
                                                
                                                <div class="field _#565655652" >
                                                   <label class="label" >
                                                      
                                                      <span >Area </span>
                                                      
                                                   </label>
                                                   
                                                   <div class="control" >

                                                      <input class="input-text" type="text"  name="area" oninvalid="this.setCustomValidity('Please enter your area')"
														oninput="setCustomValidity('')" #565655652 value = "<?= $_POST['area'] ?? ''?>">
                                   
                                                   </div>
                                                </div>
                                                
                                                
                                                <div class = "field _#565655652">
                                                <div class = "col-md-6 nopadding">
                                                 <div class="field _#565655652" >
                                                   <label class="label" >
                                                      
                                                      <span >Street <span class = "red-text">*</span></span>
                                                      
                                                   </label>
                                                   
                                                   <div class="control" >

                                                      <input class="input-text" type="text"  name="street"   oninvalid="this.setCustomValidity('Please enter your street')"
														oninput="setCustomValidity('')" #565655652 value = "<?= $_POST['street'] ?? ''?>">
                                   
                                                   </div>
                                                </div>
                                                
                                                </div>
                                                                                              
                                                <div class = "col-md-6 nopadding">
                                                 <div class="field _#565655652" >
                                                   <label class="label" >
                                                      
                                                      <span >Building </span>
                                                      
                                                   </label>
                                                   
                                                   <div class="control" >

                                                      <input class="input-text" type="text"  name="building"  value = "<?= $_POST['building'] ?? ''?>">
                                   
                                                   </div>
                                                </div>
                                                
                                                </div>
                                                
                                                </div>
                                                
                                                
                                                
                                                <div class = "field _#565655652">
                                                <div class = "col-md-6 nopadding">
                                                 <div class="field _#565655652" >
                                                   <label class="label" >
                                                      
                                                      <span >Floor No </span>
                                                      
                                                   </label>
                                                   
                                                   <div class="control" >

                                                      <input class="input-text" type="text"  name="floor-no" value = "<?= $_POST['floor-no'] ?? ''?>">
                                   
                                                   </div>
                                                </div>
                                                
                                                </div>
                                                                                              
                                                <div class = "col-md-6 nopadding">
                                                 <div class="field _#565655652" >
                                                   <label class="label" >
                                                      
                                                      <span >Apartment No <span class = "reqired-red-text"> * </span></span>
                                                      
                                                   </label>
                                                   
                                                   <div class="control" >

                                                      <input class="input-text" type="text"  name="apartment-no"  value = "<?= $_POST['apartment-no'] ?? ''?>">
                                   
                                                   </div>
                                                </div>
                                                
                                                </div>
                                                
                                                </div>
                                                
                                                <div class="field _#565655652" >
                                                   <label class="label" >
                                                      
                                                      <span >Nearest Land Mark</span>
                                                      
                                                   </label>
                                                   
                                                   <div class="control" >

                                                      <input class="input-text" type="text"  name="landmark" value = "<?= $_POST['landmark'] ?? ''?>">
                                   
                                                   </div>
                                                </div>
                                                
                                                
                                                <div class="field _#565655652" >
                                                   <label class="label" >
                                                      
                                                      <span >Location Type</span>
                                                      
                                                   </label>
                                                   <select name="locationtype" id="locationtype" 
                                       
													oninvalid="this.setCustomValidity('Please select location type.')"
													oninput="setCustomValidity('')" #565655652
                                       >
										<option value="" selected >Location Type</option>
										<option value="home">Home</option>
										<option value="business">Business</option>
										</select>
                                                   
                                                </div>
                                                
                                                <div class="field _#565655652" >
                                                <div class = "col-md-6 nopadding">
                                                <div class="field _#565655652" >
                                                   <label class="label" >
                                                      
                                                      <span >Mobile No. <span class="reqired-red-text">*</span></span>
                                                      
                                                   </label>
                                                   
                                                   <div class="control" >

                                                      <input class="input-text" type="text"  name="mobile_no" pattern="[0-9 ]{9,10}" oninvalid="this.setCustomValidity('Please enter your mobile')"
														oninput="setCustomValidity('')" #565655652 value = "<?= $_POST['mobile_no'] ?? ''?>">
                                   
                                                   </div>
                                                </div>
                                                </div>
                                                </div>
                                                
                                                <div class="field _#565655652" >
                                                <div class = "col-md-6 nopadding">
                                                <div class="field _#565655652" >
                                                   <label class="label" >
                                                      
                                                      <span >Landline No.</span>
                                                      
                                                   </label>
                                                   
                                                   <div class="control" >

                                                      <input class="input-text" type="text"  name="landline-no" value = "<?= $_POST['landline-no'] ?? ''?>">
                                   
                                                   </div>
                                                </div>
                                                </div>
                                                 </div>
                                                  
                                                  <div class="field" >
                                                
                                                <label class="label" >
                                                      
                                                      <span >Shipping Note</span>
                                                      
                                                   </label>
													
													
													<textarea name = "shipping-note"  ><?= $details['shipping_note'] ?? ''; ?></textarea>
                                                  </div>
                                                  
                                                  <div class="container">
        <div id="examples">
            

                
                <div class="field form-horizontal">
                    <div class="form-group">
						
                        <label class="label" >
                                                      
					  
					  
				   </label>
												

                        <div class="col-md-6">
                            <input type="text"  id="us3-address" />
                        </div>
                   
                   
                    </div>
                    
                    
                    
                    
                    
                    <div id="us3" style="width: 550px; height: 400px;"></div>
                    <div class="clearfix">&nbsp;</div>
                   
                   <!--
                    <div class="m-t-small">
                        <label class="p-r-small col-sm-1 control-label">Lat.:</label>

                        <div class="col-sm-2">
                            <input type="text" class="form-control" style="width: 110px" id="us3-lat" />
                        </div>
                        <label class="p-r-small col-sm-1 control-label">Long.:</label>

                        <div class="col-sm-2">
                            <input type="text" class="form-control" style="width: 110px" id="us3-lon" />
                        </div>
                    </div>
                   
                   -->
                    <div class="clearfix"></div>
                    <script>
                        $('#us3').locationpicker({
                            location: {
                                latitude: 24.4539,
                                longitude: 54.3773
                            },
                            radius: 0,
                            inputBinding: {
                                latitudeInput: $('#us3-lat'),
                                longitudeInput: $('#us3-lon'),
                                radiusInput: $('#us3-radius'),
                                locationNameInput: $('#us3-address')
                            },
                            enableAutocomplete: true,
                            onchanged: function (currentLocation, radius, isMarkerDropped) {
                               // alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
                            }
                        });
                    </script>
                </div>
                

             
        </div>
        
    
    
    
    </div>

            
            
            
             <div id="collapseOne" class="collapse">
               <div class="placepicker-map thumbnail"></div>
             </div>
                                                  
										  <div class="field _#565655652" >
											
											<button type="submit" name = "submit">  <span >Register</span> </button>
                                
                                 </button>
									  
										  </div>
                                                  
                                                
                                             </div>
                                         
                                          </form>
                                          
                                          
                                          
                                       </div>
                                    </li>
                                    
                                    <!-- Else show the user information --->
                                    <?php else: ?>
                                    
                                   
                                    
                                    <?php if($obj->IsBuyerShippingProvided() !== true):?>
				
				<div class="message notice">
				<div>
				<strong>Shpping Details! </strong>Some information about the shipping missing
				in your account please updated it, by login in to your account.
				
				</div></div>
				
				<?php else: ?>
				
				<!--- List out all the shipping information --->
				<?php
					$shipping_details = $obj->GetBuyerShippingDetails();
				?>
 
                                    <li id="opc-shipping_method" class="checkout-shipping-method" data-bind="fadeVisible: visible(), blockLoader: isLoading" role="presentation">
                                       <div class="checkout-shipping-method">
                                          <div class="step-title" data-role="title" data-bind="i18n: 'Shipping Methods'">Shipping Address</div>
                                          
                                          
                                          
                                          <div class="shipping-policy-block field-tooltip" data-bind="visible: config.isEnabled" style="display: none;">
                                             <span class="field-tooltip-action" tabindex="0" data-toggle="dropdown" data-bind="mageInit: {'dropdown':{'activeClass': '_active'}}" aria-haspopup="true" aria-expanded="false" role="button">
                                                <span>See our Shipping Policy</span>
                                             </span>
                                             <div class="field-tooltip-content" data-target="dropdown" aria-hidden="true">
                                                <span data-bind="html: config.shippingPolicyContent"></span>
                                             </div>
                                          </div>
                                          
                                          
                                          
                                          <div id="checkout-step-shipping_method" class="step-content" data-role="content" role="tabpanel" aria-hidden="false">
											   
											  
                                             <?php
												$obj->CheckoutRegisteredUser();
                                             ?>
                                             <form action = "<?= $_SERVER['PHP_SELF']; ?>" method = "POST">
                                                
                                                <div id="checkout-shipping-method-load">
                                                   <table class="table-checkout-shipping-method">
                                                      <thead>
                                                         <tr class="row">
                                                            <th class="col col-method" data-bind="i18n: 'Select Method'">Select Method</th>
                                                            <th class="col col-price" data-bind="i18n: 'Price'">Price</th>
                                                            
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         
                                                         <pre>
                                                         
                                                        </pre>
                                                         <tr class="row" data-bind="click: element.selectShippingMethod">
                                                            <td class="col col-method">
                                                               <input type="checkbox" name = "shipping-address" required ></td>
                                                            <td class="col ">
                                                               <textarea name = "shipping-details-52" class = "hidden"><?= json_encode($shipping_details);?></textarea>
                                                    
                                                               
                                                              
                                                           <span>
															<p>
					<?= ucfirst($shipping_details['firstname']).' '.ucfirst($shipping_details['lastname']); ?>
					<?= ucfirst($shipping_details['mobile_no']); ?>
					<?= $shipping_details['street_no']; ?>
					<br/>
					<?= $shipping_details['area'] ?? '';?>
					<?= $shipping_details['building_no'] ?? '';?>
					<?= $shipping_details['floor_no'] ?? '';?>
					<br/>
					<?= $shipping_details['city'] ?? '';?>
					<?= $shipping_details['country'] ?? '';?>
					<?= $shipping_details['landmark'] ?? '';?>
				</p>
				
				<p></p>
                                                           </span>    
                                                               
                                                               
                                                               
                                                            </td>
                                                            
                                                        
                                                         </tr>
                                                         
                                                         
                                                         
                                                      </tbody>
                                                   </table>
                                                </div>
                                                
                                                <div id="onepage-checkout-shipping-method-additional-load">
                                                   
                                                </div>
                                                
                                                <div class="actions-toolbar" id="shipping-method-buttons-container">
                                                   <div class="primary">
                                                      <button data-role="opc-continue" type="submit" class="button action continue primary">
                                                      <span data-bind="i18n: 'Next'"><a href = "http://localhost/user-buyer-14e1813e3d0cf9da1a9dafc6afadff37/shipping-address" style = "color:#f0f0f0">Edit</a></span>
                                                      </button>
                                                   </div>

                                                </div>
                                            
                                             
                                             
                                          </div>
                                       </div>
                                    </li>

                                    <li id="opc-shipping_method" class="checkout-shipping-method" data-bind="fadeVisible: visible(), blockLoader: isLoading" role="presentation">
                                       <div class="checkout-shipping-method">
                                          <div class="step-title" data-role="title" data-bind="i18n: 'Shipping Methods'">Shipping Methods</div>
                                          
                                          
                                          
                                          <div class="shipping-policy-block field-tooltip" data-bind="visible: config.isEnabled" style="display: none;">
                                             <span class="field-tooltip-action" tabindex="0" data-toggle="dropdown" data-bind="mageInit: {'dropdown':{'activeClass': '_active'}}" aria-haspopup="true" aria-expanded="false" role="button">
                                                <span>See our Shipping Policy</span>
                                             </span>
                                             <div class="field-tooltip-content" data-target="dropdown" aria-hidden="true">
                                                <span data-bind="html: config.shippingPolicyContent"></span>
                                             </div>
                                          </div>
                                          
                                          
                                          
                                          <div id="checkout-step-shipping_method" class="step-content" data-role="content" role="tabpanel" aria-hidden="false">
                                             
                                             
                                                
                                                <div id="checkout-shipping-method-load">
                                                   <table class="table-checkout-shipping-method">
                                                      <thead>
                                                         <tr class="row">
                                                            <th class="col col-method" data-bind="i18n: 'Select Method'">Select Method</th>
                                                            <th class="col col-price" data-bind="i18n: 'Price'">Price</th>
                                                            <th class="col col-method" data-bind="i18n: 'Method Title'">Method Title</th>
                                                            <th class="col col-carrier" data-bind="i18n: 'Carrier Title'">Carrier Title</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         
                                                         
                                                         <tr class="row" data-bind="click: element.selectShippingMethod">
                                                            <td class="col col-method">
                                                               <input type="radio" class="radio" name = "shipping-method" required >
                                        
                                                            </td>
                                                            <td class="col col-price">
                                                               
                                                               
                                                               <!-- If order is greather then 100 then -->
                                                               <?php if( $obj->CartTotleAmount() !== null && $obj->CartTotleAmount() >= 100):?>
                                                               
                                                               
                                                               <span class="price"><span class="price" data-bind="text: getFormattedPrice(method.price_excl_tax)">AED 0.00 </span></span>
                                                               
                                                               <?php else: ?>
                                                               
                                                               <span class="price"><span class="price" data-bind="text: getFormattedPrice(method.price_excl_tax)">AED 20.00 </span></span>
                                                               
                                                               <?php endif; ?>
                                                               
                                                               
                                                               
                                                               
                                                               
                                                            </td>
                                                            
                                                            <td class="col col-method" data-bind="attr: {'id': 'label_method_' + method.method_code + '_' + method.carrier_code}, text: method.method_title" id="label_method_flatrate_flatrate">Fixed</td>
                                                            <td class="col col-carrier" data-bind="attr: {'id': 'label_carrier_' + method.method_code + '_' + method.carrier_code}, text: method.carrier_title" id="label_carrier_flatrate_flatrate">Flat Rate</td>
                                                         
                                                         
                                                         </tr>
                                                         
                                                         
                                                         
                                                      </tbody>
                                                   </table>
                                                </div>
                                                
                                                <div id="onepage-checkout-shipping-method-additional-load">
                                                   
                                                </div>
                                                
                                                <div class="actions-toolbar" id="shipping-method-buttons-container">
                                                   <div class="primary">
                                                      <button data-role="opc-continue" type="submit" class="button action continue primary">
                                                      <span >Next</span>
                                                      </button>
                                                   </div>
                                                </div>
                                            
                                             
                                             
                                          </div>
                                       
                                       
                                       
                                       </div>
                                    </li>

                                   
                                 
                                   </li>
                                    
                                    </form>
                                    
                                    
                                    
                                    
                                 </ol>
                              <?php endif ;?>
                              <?php endif; ?>
                              </div>
                              
                              
                              
                              
                              
                              <aside role="dialog" class="modal-custom opc-sidebar opc-summary-wrapper
                                 custom-slide
                                 " aria-describedby="modal-content-14" data-role="modal" data-type="custom" tabindex="0">
                                 <div data-role="focusable-start" tabindex="0"></div>
                                 <div class="modal-inner-wrap" data-role="focusable-scope">
                                    <header class="modal-header">
                                       <button class="action-close" data-role="closeBtn" type="button">
                                       <span>Close</span>
                                       </button>
                                    </header>
                                    <div id="modal-content-14" class="modal-content" data-role="content">
                                       <div id="opc-sidebar" >
                                          
                                          
                                          <div class="opc-block-summary" data-bind="blockLoader: isLoading">
                                             <span data-bind="i18n: 'Order Summary'" class="title">Order Summary</span>
                                             
                                             
                                             
                                             
                                             
                                             
                                             
                                             <script>
                                                $(document).ready(function(){
                                                	
                                                	// Check on click function 
                                                	$('#cart-item-1266').click(function() {
                                                		
                                                		
                                                		$('#hidden-cart-12').slideToggle( "slow", function() {
                                                			// Animation complete.
                                                		});
                                                	})
                                                })
                                             </script>
                                             
                                             <div id = "cart-item-1266" class="block items-in-cart" data-bind="mageInit: {'collapsible':{'openedState': 'active', 'active': isItemsBlockExpanded()}}" data-collapsible="true" role="tablist">
                                                <div class="title" data-role="title" role="tab" aria-selected="false" aria-expanded="false" tabindex="0">
                                                   <strong role="heading">
                                                      
                                                      
                                                      <span data-bind="text: getCartLineItemsCount()"><?= $obj->CartTotleQty() == null ? '0' : $obj->CartTotleQty(); ?></span>
                                                      
                                                      <span>Items in Cart</span>
                                                      
                                                   </strong>
                                                </div>
                                                
                                                <!-- If cart is not returning null then --->
											<?php if ($obj->GetCart() !== NULL && count($obj->GetCart()) > 0) :?>
                                                <div id = "hidden-cart-12" class="content minicart-items" data-role="content" role="tabpanel" aria-hidden="true" style="display: none;">
                                                   <div class="minicart-items-wrapper overflowed">
                                                      <ol class="minicart-items">
                                                         
                                                         
                                                         <?php foreach($obj->GetCart() as $item) :?> 
                                                         
                                                         <li class="product-item">
                                                            <div class="product">
                                                               
                                                               
                                                               
                                                               <span class="product-image-container" data-bind="attr: {'style': 'height: ' + getHeight($parents[1]) + 'px; width: ' + getWidth($parents[1]) + 'px;' }" style="height: 80px; width: 80px;">
                                                               <span class="product-image-wrapper">
                                                               <img data-bind="attr: {'src': getSrc($parents[1]), 'width': getWidth($parents[1]), 'height': getHeight($parents[1]), 'alt': getAlt($parents[1]) }" src="<?= $item['image']; ?>" width="80" height="80" alt="Outdoor Crossbody Bag">
                                                               </span>
                                                               </span>
                                                               
                                                               
                                                               <div class="product-item-details">
                                                                  <div class="product-item-inner">
                                                                     <div class="product-item-name-block">
                                                                        <strong class="product-item-name" data-bind="text: $parent.name"><?= $item['name'] ?></strong>
                                                                        <div class="details-qty">
                                                                           <span class="label">
                                                                              <span>Qty</span>
                                                                           </span>
                                                                           <span class="value" data-bind="text: $parent.qty"><?=  $item['qty']; ?></span>
                                                                        </div>
                                                                     </div>
                                                                     
                                                                     
                                                                     <div class="subtotal">
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        <span class="price-excluding-tax" data-bind="attr:{'data-label': $t('Excl. Tax')}" data-label="Excl. Tax">
                                                                           
                                                                           
                                                                           
                                                                           
                                                                           <span class="cart-price">
                                                                           <span class="price">AED <?= $obj->getPriceFormate( $item['price']); ?></span>
                                                                           </span>
                                                                           
                                                                           
                                                                           
                                                                           
                                                                        </span>
                                                                        
                                                                     </div>
                                                                     
                                                                     
                                                                  </div>
                                                                  
                                                               </div>
                                                               
                                                            </div>
                                                         </li>
                                                        
                                                         <?php endforeach; ?>
                                                         
                                                      </ol>
                                                   </div>
                                                </div>
                                               
                                             <?php else: ?>
                                              <div id = "hidden-cart-12" class="content minicart-items" data-role="content" role="tabpanel" aria-hidden="true" style="display: none;">
                                              Cart is empty
                                              </div>
                                             <?php endif; ?> 
                                             </div>
                                             
                                             
                                             
                                             
                                             
                                          </div>
                                          
                                          
                                          <div class="opc-block-shipping-information">
                                             
                                             
                                             
                                             
                                             
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-role="focusable-end" tabindex="0"></div>
                              </aside>
                           </div>
                     
					  
					  <?php else: ?>
					  
					  <div class="message notice"><div>Buy something, Shopping cart is empty.  </div></div>
                    
					  <?php endif; ?>

                      </div>
                     </div>
                  </div>
               
               
               
               
               
               </div>
            </div>
         </main>
         <?php 
            include ('footer.php');
                  ?>
      </div>
   </body>
</html>
