<?php 
	session_start();
	
   require 'controller/controller.php';
   $obj = new MarketPlace();
   
   $ArrToString = '';
	
	if(isset($_COOKIE['buyershipping7522'])) {
		
		// Get array values 
		if(json_decode($_COOKIE['buyershipping7522'])) {
		
		// Get all data 
		$shippingAdd = json_decode($_COOKIE['buyershipping7522'], true);
		
	
		// Get the values 
		$ArryValues = array_filter(array_values($shippingAdd));
		

		// Implede with string 
		$ArrToString = implode(', ', $ArryValues);
		
		
		$ArrToString = ucfirst($ArrToString);
	} else {
			
			echo json_last_error();
		}
   	
	}
	
	
   
   
   ?>

<!doctype html>
<html lang="en">
   <head >
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta name="format-detection" content="telephone=no"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <title>Home - SM Market Layout 4</title>
      <link href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel = "stylesheet" />
      <?php include 'head-links.php'; ?>
      <style>
      .card-header .icons .fa-cc-visa{
	color: #FFB85F;	
}
.card-header .icons .fa-cc-discover{
	color: #027878;
}
.card-header .icons .fa-cc-amex{
	color: #EB4960;
}
.card-body label{
	font-size: 14px;
}

.custom12 {
	
	font-size:30px;
	display:inline-block;
	float:middle;
	margin-top: 5px;
	}
		</style>
   </head>
   <body data-container="body" data-mage-init='' class="header-4-style home-4-style footer-1-style layout-full-width  cms-home-demo-04 cms-index-index page-layout-1column">
      
      
      
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
                  <div class="col-lg-12 col-md-12">
					
					<br/>
					<br/>
					<?php if($obj->IfCartExists() === true) :?>
					<div class="page-title-wrapper">
                           <h2 class="page-title"><span class="base" data-ui-id="page-title-wrapper">Payment/ Order Review</span></h2>
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
                                    
                                    
                                    
                                 
                                 
                                 
                                 </div>
                                 <div data-role="focusable-end" tabindex="0"></div>
                              </aside>
                           </div>
                           
                           
                           <ul class="opc-progress-bar">
                              <li class="opc-progress-bar-item _complete" data-bind="css: item.isVisible() ? '_active' : ($parent.isProcessed(item) ? '_complete' : '')">
                                 <span data-bind="i18n: item.title, click: $parent.navigateTo">Shipping</span>
                              </li>
                              <li class="opc-progress-bar-item _active" data-bind="css: item.isVisible() ? '_active' : ($parent.isProcessed(item) ? '_complete' : '')">
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
                           
                           <div class="opc-wrapper">
                              <ol class="opc" id="checkoutSteps">
                                 
                                 
                                 
                                 
                                 <li id="shipping" class="checkout-shipping-address" data-bind="fadeVisible: visible()" style="display: none;">
                                    <div class="step-title" data-role="title" data-bind="i18n: 'Shipping Address'">Shipping Address</div>
                                    <div id="checkout-step-shipping" class="step-content" data-role="content">
                                       
                                       
                                       
                                       <form class="form form-login" data-role="email-with-possible-login" data-bind="submit:login" method="post" novalidate="novalidate">
                                          <fieldset id="customer-email-fieldset" class="fieldset" data-bind="blockLoader: isLoading">
                                             <div class="field required">
                                                <label class="label" for="customer-email">
                                                <span data-bind="i18n: 'Email Address'">Email Address</span>
                                                </label>
                                                <div class="control _with-tooltip">
                                                   <input class="input-text valid" type="email" data-bind="
                                                      textInput: email,
                                                      hasFocus: emailFocused" name="username" data-validate="{required:true, 'validate-email':true}" id="customer-email" aria-required="true">
                                                   <div class="field-tooltip toggle">
                                                      
                                                      <span class="field-tooltip-action action-help" tabindex="0" data-toggle="dropdown" data-bind="mageInit: {'dropdown':{'activeClass': '_active'}}" aria-haspopup="true" aria-expanded="false" role="button"></span>
                                                      <div class="field-tooltip-content" data-target="dropdown" data-bind="i18n: tooltip.description" aria-hidden="true">We'll send your order confirmation here.</div>
                                                   </div>
                                                   <span class="note" data-bind="fadeVisible: isPasswordVisible() == false">
                                                   </span>
                                                </div>
                                             </div>
                                             <fieldset class="fieldset hidden-fields" data-bind="fadeVisible: isPasswordVisible" style="display: none;">
                                                <div class="field">
                                                   <label class="label" for="customer-password">
                                                   <span data-bind="i18n: 'Password'">Password</span>
                                                   </label>
                                                   <div class="control">
                                                      <input class="input-text" data-bind="
                                                         attr: {
                                                         placeholder: $t('optional'),
                                                         }" type="password" name="password" id="customer-password" data-validate="{required:true}" autocomplete="off" placeholder="optional">
                                                      <span class="note" data-bind="i18n: 'You already have an account with us. Sign in or continue as guest.'">You already have an account with us. Sign in or continue as guest.</span>
                                                   </div>
                                                </div>
                                                
                                                
                                                
                                                
                                                <div class="actions-toolbar">
                                                   <input name="context" type="hidden" value="checkout">
                                                   <div class="primary">
                                                      <button type="submit" class="action login primary" data-action="checkout-method-login"><span data-bind="i18n: 'Login'">Login</span></button>
                                                   </div>
                                                   <div class="secondary">
                                                      <a class="action remind" data-bind="attr: { href: forgotPasswordUrl }" href="http://magento2.flytheme.net/themes/sm_market2/customer/account/forgotpassword/">
                                                      <span data-bind="i18n: 'Forgot Your Password?'">Forgot Your Password?</span>
                                                      </a>
                                                   </div>
                                                </div>
                                             </fieldset>
                                          </fieldset>
                                       </form>
                                       
                                       
                                       
                                       
                                       
                                       
                                       
                                       <form class="form form-shipping-address" id="co-shipping-form" data-bind="attr: {'data-hasrequired': $t('* Required Fields')}" data-hasrequired="* Required Fields">
                                          
                                          
                                          <div id="shipping-new-address-form" class="fieldset address">
                                             
                                             
                                             <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.firstname">
                                                <label class="label" data-bind="attr: { for: element.uid }" for="G3URDY9">
                                                   <span data-bind="i18n: element.label">First Name</span>
                                                </label>
                                                <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                                   
                                                   <input class="input-text" type="text" data-bind="
                                                      value: value,
                                                      valueUpdate: 'keyup',
                                                      hasFocus: focused,
                                                      attr: {
                                                      name: inputName,
                                                      placeholder: placeholder,
                                                      'aria-describedby': getDescriptionId(),
                                                      'aria-required': required,
                                                      'aria-invalid': error() ? true : 'false',
                                                      id: uid,
                                                      disabled: disabled
                                                      }" name="firstname" aria-required="true" aria-invalid="false" id="G3URDY9">
                                                   
                                                   
                                                   
                                                </div>
                                             </div>
                                             
                                             <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.lastname">
                                                <label class="label" data-bind="attr: { for: element.uid }" for="HWOEEB3">
                                                   <span data-bind="i18n: element.label">Last Name</span>
                                                </label>
                                                <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                                   
                                                   <input class="input-text" type="text" data-bind="
                                                      value: value,
                                                      valueUpdate: 'keyup',
                                                      hasFocus: focused,
                                                      attr: {
                                                      name: inputName,
                                                      placeholder: placeholder,
                                                      'aria-describedby': getDescriptionId(),
                                                      'aria-required': required,
                                                      'aria-invalid': error() ? true : 'false',
                                                      id: uid,
                                                      disabled: disabled
                                                      }" name="lastname" aria-required="true" aria-invalid="false" id="HWOEEB3">
                                                   
                                                   
                                                   
                                                </div>
                                             </div>
                                             
                                             <fieldset class="field street admin__control-fields required" data-bind="css: additionalClasses">
                                                <legend class="label">
                                                   <span data-bind="i18n: element.label">Street Address</span>
                                                </legend>
                                                <div class="control">
                                                   
                                                   
                                                   <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.street.0">
                                                      <label class="label" data-bind="attr: { for: element.uid }" for="PDWY28L">
                                                      </label>
                                                      <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                                         
                                                         <input class="input-text" type="text" data-bind="
                                                            value: value,
                                                            valueUpdate: 'keyup',
                                                            hasFocus: focused,
                                                            attr: {
                                                            name: inputName,
                                                            placeholder: placeholder,
                                                            'aria-describedby': getDescriptionId(),
                                                            'aria-required': required,
                                                            'aria-invalid': error() ? true : 'false',
                                                            id: uid,
                                                            disabled: disabled
                                                            }" name="street[0]" aria-required="true" aria-invalid="false" id="PDWY28L">
                                                         
                                                         
                                                         
                                                      </div>
                                                   </div>
                                                   
                                                   
                                                   
                                                   
                                                   <div class="field additional" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.street.1">
                                                      <label class="label" data-bind="attr: { for: element.uid }" for="XD241GM">
                                                      </label>
                                                      <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                                         
                                                         <input class="input-text" type="text" data-bind="
                                                            value: value,
                                                            valueUpdate: 'keyup',
                                                            hasFocus: focused,
                                                            attr: {
                                                            name: inputName,
                                                            placeholder: placeholder,
                                                            'aria-describedby': getDescriptionId(),
                                                            'aria-required': required,
                                                            'aria-invalid': error() ? true : 'false',
                                                            id: uid,
                                                            disabled: disabled
                                                            }" name="street[1]" aria-invalid="false" id="XD241GM">
                                                         
                                                         
                                                         
                                                      </div>
                                                   </div>
                                                   
                                                   
                                                   
                                                   
                                                   <div class="field additional" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.street.2">
                                                      <label class="label" data-bind="attr: { for: element.uid }" for="GUN987O">
                                                      </label>
                                                      <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                                         
                                                         <input class="input-text" type="text" data-bind="
                                                            value: value,
                                                            valueUpdate: 'keyup',
                                                            hasFocus: focused,
                                                            attr: {
                                                            name: inputName,
                                                            placeholder: placeholder,
                                                            'aria-describedby': getDescriptionId(),
                                                            'aria-required': required,
                                                            'aria-invalid': error() ? true : 'false',
                                                            id: uid,
                                                            disabled: disabled
                                                            }" name="street[2]" aria-invalid="false" id="GUN987O">
                                                         
                                                         
                                                         
                                                      </div>
                                                   </div>
                                                   
                                                   
                                                   
                                                </div>
                                             </fieldset>
                                             
                                             <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.city">
                                                <label class="label" data-bind="attr: { for: element.uid }" for="D1UNB5D">
                                                   <span data-bind="i18n: element.label">City</span>
                                                </label>
                                                <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                                   
                                                   <input class="input-text" type="text" data-bind="
                                                      value: value,
                                                      valueUpdate: 'keyup',
                                                      hasFocus: focused,
                                                      attr: {
                                                      name: inputName,
                                                      placeholder: placeholder,
                                                      'aria-describedby': getDescriptionId(),
                                                      'aria-required': required,
                                                      'aria-invalid': error() ? true : 'false',
                                                      id: uid,
                                                      disabled: disabled
                                                      }" name="city" aria-required="true" aria-invalid="false" id="D1UNB5D">
                                                   
                                                   
                                                   
                                                </div>
                                             </div>
                                             
                                             <div class="field" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.region_id" style="display: none;">
                                                <label class="label" data-bind="attr: { for: element.uid }" for="HJS91F5">
                                                   <span data-bind="i18n: element.label">State/Province</span>
                                                </label>
                                                <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                                   
                                                   <select class="select" data-bind="
                                                      attr: {
                                                      name: inputName,
                                                      id: uid,
                                                      disabled: disabled,
                                                      'aria-describedby': getDescriptionId(),
                                                      'aria-required': required,
                                                      'aria-invalid': error() ? true : 'false',
                                                      placeholder: placeholder
                                                      },
                                                      hasFocus: focused,
                                                      optgroup: options,
                                                      value: value,
                                                      optionsCaption: caption,
                                                      optionsValue: 'value',
                                                      optionsText: 'label',
                                                      optionsAfterRender: function(option, item) {
                                                      if (item &amp;&amp; item.disabled) {
                                                      ko.applyBindingsToNode(option, {attr: {disabled: true}}, item);
                                                      }
                                                      }" name="region_id" id="HJS91F5" aria-invalid="false">
                                                      <option value="">Please select a region, state or province.</option>
                                                   </select>
                                                   
                                                   
                                                   
                                                </div>
                                             </div>
                                             
                                             <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.region">
                                                <label class="label" data-bind="attr: { for: element.uid }" for="C0DM8KM">
                                                   <span data-bind="i18n: element.label">State/Province</span>
                                                </label>
                                                <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                                   
                                                   <input class="input-text" type="text" data-bind="
                                                      value: value,
                                                      valueUpdate: 'keyup',
                                                      hasFocus: focused,
                                                      attr: {
                                                      name: inputName,
                                                      placeholder: placeholder,
                                                      'aria-describedby': getDescriptionId(),
                                                      'aria-required': required,
                                                      'aria-invalid': error() ? true : 'false',
                                                      id: uid,
                                                      disabled: disabled
                                                      }" name="region" aria-required="true" aria-invalid="false" id="C0DM8KM">
                                                   
                                                   
                                                   
                                                </div>
                                             </div>
                                             
                                             <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.postcode">
                                                <label class="label" data-bind="attr: { for: element.uid }" for="RSM55BE">
                                                   <span data-bind="i18n: element.label">Zip/Postal Code</span>
                                                </label>
                                                <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                                   
                                                   <input class="input-text" type="text" data-bind="
                                                      value: value,
                                                      valueUpdate: 'keyup',
                                                      hasFocus: focused,
                                                      attr: {
                                                      name: inputName,
                                                      placeholder: placeholder,
                                                      'aria-describedby': getDescriptionId(),
                                                      'aria-required': required,
                                                      'aria-invalid': error() ? true : 'false',
                                                      id: uid,
                                                      disabled: disabled
                                                      }" name="postcode" aria-required="true" aria-invalid="false" id="RSM55BE">
                                                   
                                                   
                                                   
                                                </div>
                                             </div>
                                             
                                             <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.country_id">
                                                <label class="label" data-bind="attr: { for: element.uid }" for="VXA15BO">
                                                   <span data-bind="i18n: element.label">Country</span>
                                                </label>
                                                <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                                   
                                                   <select class="select" data-bind="
                                                      attr: {
                                                      name: inputName,
                                                      id: uid,
                                                      disabled: disabled,
                                                      'aria-describedby': getDescriptionId(),
                                                      'aria-required': required,
                                                      'aria-invalid': error() ? true : 'false',
                                                      placeholder: placeholder
                                                      },
                                                      hasFocus: focused,
                                                      optgroup: options,
                                                      value: value,
                                                      optionsCaption: caption,
                                                      optionsValue: 'value',
                                                      optionsText: 'label',
                                                      optionsAfterRender: function(option, item) {
                                                      if (item &amp;&amp; item.disabled) {
                                                      ko.applyBindingsToNode(option, {attr: {disabled: true}}, item);
                                                      }
                                                      }" name="country_id" id="VXA15BO" aria-required="true" aria-invalid="false">
                                                      <option value=""> </option>
                                                      <option data-title="Afghanistan" value="AF">Afghanistan</option>
                                                      <option data-title="Åland Islands" value="AX">Åland Islands</option>
                                                      <option data-title="Albania" value="AL">Albania</option>
                                                      <option data-title="Algeria" value="DZ">Algeria</option>
                                                      <option data-title="American Samoa" value="AS">American Samoa</option>
                                                      <option data-title="Andorra" value="AD">Andorra</option>
                                                      <option data-title="Angola" value="AO">Angola</option>
                                                      <option data-title="Anguilla" value="AI">Anguilla</option>
                                                      <option data-title="Antarctica" value="AQ">Antarctica</option>
                                                      <option data-title="Antigua and Barbuda" value="AG">Antigua and Barbuda</option>
                                                      <option data-title="Argentina" value="AR">Argentina</option>
                                                      <option data-title="Armenia" value="AM">Armenia</option>
                                                      <option data-title="Aruba" value="AW">Aruba</option>
                                                      <option data-title="Australia" value="AU">Australia</option>
                                                      <option data-title="Austria" value="AT">Austria</option>
                                                      <option data-title="Azerbaijan" value="AZ">Azerbaijan</option>
                                                      <option data-title="Bahamas" value="BS">Bahamas</option>
                                                      <option data-title="Bahrain" value="BH">Bahrain</option>
                                                      <option data-title="Bangladesh" value="BD">Bangladesh</option>
                                                      <option data-title="Barbados" value="BB">Barbados</option>
                                                      <option data-title="Belarus" value="BY">Belarus</option>
                                                      <option data-title="Belgium" value="BE">Belgium</option>
                                                      <option data-title="Belize" value="BZ">Belize</option>
                                                      <option data-title="Benin" value="BJ">Benin</option>
                                                      <option data-title="Bermuda" value="BM">Bermuda</option>
                                                      <option data-title="Bhutan" value="BT">Bhutan</option>
                                                      <option data-title="Bolivia" value="BO">Bolivia</option>
                                                      <option data-title="Bosnia and Herzegovina" value="BA">Bosnia and Herzegovina</option>
                                                      <option data-title="Botswana" value="BW">Botswana</option>
                                                      <option data-title="Bouvet Island" value="BV">Bouvet Island</option>
                                                      <option data-title="Brazil" value="BR">Brazil</option>
                                                      <option data-title="British Indian Ocean Territory" value="IO">British Indian Ocean Territory</option>
                                                      <option data-title="British Virgin Islands" value="VG">British Virgin Islands</option>
                                                      <option data-title="Brunei" value="BN">Brunei</option>
                                                      <option data-title="Bulgaria" value="BG">Bulgaria</option>
                                                      <option data-title="Burkina Faso" value="BF">Burkina Faso</option>
                                                      <option data-title="Burundi" value="BI">Burundi</option>
                                                      <option data-title="Cambodia" value="KH">Cambodia</option>
                                                      <option data-title="Cameroon" value="CM">Cameroon</option>
                                                      <option data-title="Canada" value="CA">Canada</option>
                                                      <option data-title="Cape Verde" value="CV">Cape Verde</option>
                                                      <option data-title="Cayman Islands" value="KY">Cayman Islands</option>
                                                      <option data-title="Central African Republic" value="CF">Central African Republic</option>
                                                      <option data-title="Chad" value="TD">Chad</option>
                                                      <option data-title="Chile" value="CL">Chile</option>
                                                      <option data-title="China" value="CN">China</option>
                                                      <option data-title="Christmas Island" value="CX">Christmas Island</option>
                                                      <option data-title="Cocos [Keeling] Islands" value="CC">Cocos [Keeling] Islands</option>
                                                      <option data-title="Colombia" value="CO">Colombia</option>
                                                      <option data-title="Comoros" value="KM">Comoros</option>
                                                      <option data-title="Congo - Brazzaville" value="CG">Congo - Brazzaville</option>
                                                      <option data-title="Congo - Kinshasa" value="CD">Congo - Kinshasa</option>
                                                      <option data-title="Cook Islands" value="CK">Cook Islands</option>
                                                      <option data-title="Costa Rica" value="CR">Costa Rica</option>
                                                      <option data-title="Côte d’Ivoire" value="CI">Côte d’Ivoire</option>
                                                      <option data-title="Croatia" value="HR">Croatia</option>
                                                      <option data-title="Cuba" value="CU">Cuba</option>
                                                      <option data-title="Cyprus" value="CY">Cyprus</option>
                                                      <option data-title="Czech Republic" value="CZ">Czech Republic</option>
                                                      <option data-title="Denmark" value="DK">Denmark</option>
                                                      <option data-title="Djibouti" value="DJ">Djibouti</option>
                                                      <option data-title="Dominica" value="DM">Dominica</option>
                                                      <option data-title="Dominican Republic" value="DO">Dominican Republic</option>
                                                      <option data-title="Ecuador" value="EC">Ecuador</option>
                                                      <option data-title="Egypt" value="EG">Egypt</option>
                                                      <option data-title="El Salvador" value="SV">El Salvador</option>
                                                      <option data-title="Equatorial Guinea" value="GQ">Equatorial Guinea</option>
                                                      <option data-title="Eritrea" value="ER">Eritrea</option>
                                                      <option data-title="Estonia" value="EE">Estonia</option>
                                                      <option data-title="Ethiopia" value="ET">Ethiopia</option>
                                                      <option data-title="Falkland Islands" value="FK">Falkland Islands</option>
                                                      <option data-title="Faroe Islands" value="FO">Faroe Islands</option>
                                                      <option data-title="Fiji" value="FJ">Fiji</option>
                                                      <option data-title="Finland" value="FI">Finland</option>
                                                      <option data-title="France" value="FR">France</option>
                                                      <option data-title="French Guiana" value="GF">French Guiana</option>
                                                      <option data-title="French Polynesia" value="PF">French Polynesia</option>
                                                      <option data-title="French Southern Territories" value="TF">French Southern Territories</option>
                                                      <option data-title="Gabon" value="GA">Gabon</option>
                                                      <option data-title="Gambia" value="GM">Gambia</option>
                                                      <option data-title="Georgia" value="GE">Georgia</option>
                                                      <option data-title="Germany" value="DE">Germany</option>
                                                      <option data-title="Ghana" value="GH">Ghana</option>
                                                      <option data-title="Gibraltar" value="GI">Gibraltar</option>
                                                      <option data-title="Greece" value="GR">Greece</option>
                                                      <option data-title="Greenland" value="GL">Greenland</option>
                                                      <option data-title="Grenada" value="GD">Grenada</option>
                                                      <option data-title="Guadeloupe" value="GP">Guadeloupe</option>
                                                      <option data-title="Guam" value="GU">Guam</option>
                                                      <option data-title="Guatemala" value="GT">Guatemala</option>
                                                      <option data-title="Guernsey" value="GG">Guernsey</option>
                                                      <option data-title="Guinea" value="GN">Guinea</option>
                                                      <option data-title="Guinea-Bissau" value="GW">Guinea-Bissau</option>
                                                      <option data-title="Guyana" value="GY">Guyana</option>
                                                      <option data-title="Haiti" value="HT">Haiti</option>
                                                      <option data-title="Heard Island and McDonald Islands" value="HM">Heard Island and McDonald Islands</option>
                                                      <option data-title="Honduras" value="HN">Honduras</option>
                                                      <option data-title="Hong Kong SAR China" value="HK">Hong Kong SAR China</option>
                                                      <option data-title="Hungary" value="HU">Hungary</option>
                                                      <option data-title="Iceland" value="IS">Iceland</option>
                                                      <option data-title="India" value="IN">India</option>
                                                      <option data-title="Indonesia" value="ID">Indonesia</option>
                                                      <option data-title="Iran" value="IR">Iran</option>
                                                      <option data-title="Iraq" value="IQ">Iraq</option>
                                                      <option data-title="Ireland" value="IE">Ireland</option>
                                                      <option data-title="Isle of Man" value="IM">Isle of Man</option>
                                                      <option data-title="Israel" value="IL">Israel</option>
                                                      <option data-title="Italy" value="IT">Italy</option>
                                                      <option data-title="Jamaica" value="JM">Jamaica</option>
                                                      <option data-title="Japan" value="JP">Japan</option>
                                                      <option data-title="Jersey" value="JE">Jersey</option>
                                                      <option data-title="Jordan" value="JO">Jordan</option>
                                                      <option data-title="Kazakhstan" value="KZ">Kazakhstan</option>
                                                      <option data-title="Kenya" value="KE">Kenya</option>
                                                      <option data-title="Kiribati" value="KI">Kiribati</option>
                                                      <option data-title="Kuwait" value="KW">Kuwait</option>
                                                      <option data-title="Kyrgyzstan" value="KG">Kyrgyzstan</option>
                                                      <option data-title="Laos" value="LA">Laos</option>
                                                      <option data-title="Latvia" value="LV">Latvia</option>
                                                      <option data-title="Lebanon" value="LB">Lebanon</option>
                                                      <option data-title="Lesotho" value="LS">Lesotho</option>
                                                      <option data-title="Liberia" value="LR">Liberia</option>
                                                      <option data-title="Libya" value="LY">Libya</option>
                                                      <option data-title="Liechtenstein" value="LI">Liechtenstein</option>
                                                      <option data-title="Lithuania" value="LT">Lithuania</option>
                                                      <option data-title="Luxembourg" value="LU">Luxembourg</option>
                                                      <option data-title="Macau SAR China" value="MO">Macau SAR China</option>
                                                      <option data-title="Macedonia" value="MK">Macedonia</option>
                                                      <option data-title="Madagascar" value="MG">Madagascar</option>
                                                      <option data-title="Malawi" value="MW">Malawi</option>
                                                      <option data-title="Malaysia" value="MY">Malaysia</option>
                                                      <option data-title="Maldives" value="MV">Maldives</option>
                                                      <option data-title="Mali" value="ML">Mali</option>
                                                      <option data-title="Malta" value="MT">Malta</option>
                                                      <option data-title="Marshall Islands" value="MH">Marshall Islands</option>
                                                      <option data-title="Martinique" value="MQ">Martinique</option>
                                                      <option data-title="Mauritania" value="MR">Mauritania</option>
                                                      <option data-title="Mauritius" value="MU">Mauritius</option>
                                                      <option data-title="Mayotte" value="YT">Mayotte</option>
                                                      <option data-title="Mexico" value="MX">Mexico</option>
                                                      <option data-title="Micronesia" value="FM">Micronesia</option>
                                                      <option data-title="Moldova" value="MD">Moldova</option>
                                                      <option data-title="Monaco" value="MC">Monaco</option>
                                                      <option data-title="Mongolia" value="MN">Mongolia</option>
                                                      <option data-title="Montenegro" value="ME">Montenegro</option>
                                                      <option data-title="Montserrat" value="MS">Montserrat</option>
                                                      <option data-title="Morocco" value="MA">Morocco</option>
                                                      <option data-title="Mozambique" value="MZ">Mozambique</option>
                                                      <option data-title="Myanmar [Burma]" value="MM">Myanmar [Burma]</option>
                                                      <option data-title="Namibia" value="NA">Namibia</option>
                                                      <option data-title="Nauru" value="NR">Nauru</option>
                                                      <option data-title="Nepal" value="NP">Nepal</option>
                                                      <option data-title="Netherlands" value="NL">Netherlands</option>
                                                      <option data-title="Netherlands Antilles" value="AN">Netherlands Antilles</option>
                                                      <option data-title="New Caledonia" value="NC">New Caledonia</option>
                                                      <option data-title="New Zealand" value="NZ">New Zealand</option>
                                                      <option data-title="Nicaragua" value="NI">Nicaragua</option>
                                                      <option data-title="Niger" value="NE">Niger</option>
                                                      <option data-title="Nigeria" value="NG">Nigeria</option>
                                                      <option data-title="Niue" value="NU">Niue</option>
                                                      <option data-title="Norfolk Island" value="NF">Norfolk Island</option>
                                                      <option data-title="Northern Mariana Islands" value="MP">Northern Mariana Islands</option>
                                                      <option data-title="North Korea" value="KP">North Korea</option>
                                                      <option data-title="Norway" value="NO">Norway</option>
                                                      <option data-title="Oman" value="OM">Oman</option>
                                                      <option data-title="Pakistan" value="PK">Pakistan</option>
                                                      <option data-title="Palau" value="PW">Palau</option>
                                                      <option data-title="Palestinian Territories" value="PS">Palestinian Territories</option>
                                                      <option data-title="Panama" value="PA">Panama</option>
                                                      <option data-title="Papua New Guinea" value="PG">Papua New Guinea</option>
                                                      <option data-title="Paraguay" value="PY">Paraguay</option>
                                                      <option data-title="Peru" value="PE">Peru</option>
                                                      <option data-title="Philippines" value="PH">Philippines</option>
                                                      <option data-title="Pitcairn Islands" value="PN">Pitcairn Islands</option>
                                                      <option data-title="Poland" value="PL">Poland</option>
                                                      <option data-title="Portugal" value="PT">Portugal</option>
                                                      <option data-title="Qatar" value="QA">Qatar</option>
                                                      <option data-title="Réunion" value="RE">Réunion</option>
                                                      <option data-title="Romania" value="RO">Romania</option>
                                                      <option data-title="Russia" value="RU">Russia</option>
                                                      <option data-title="Rwanda" value="RW">Rwanda</option>
                                                      <option data-title="Saint Barthélemy" value="BL">Saint Barthélemy</option>
                                                      <option data-title="Saint Helena" value="SH">Saint Helena</option>
                                                      <option data-title="Saint Kitts and Nevis" value="KN">Saint Kitts and Nevis</option>
                                                      <option data-title="Saint Lucia" value="LC">Saint Lucia</option>
                                                      <option data-title="Saint Martin" value="MF">Saint Martin</option>
                                                      <option data-title="Saint Pierre and Miquelon" value="PM">Saint Pierre and Miquelon</option>
                                                      <option data-title="Saint Vincent and the Grenadines" value="VC">Saint Vincent and the Grenadines</option>
                                                      <option data-title="Samoa" value="WS">Samoa</option>
                                                      <option data-title="San Marino" value="SM">San Marino</option>
                                                      <option data-title="São Tomé and Príncipe" value="ST">São Tomé and Príncipe</option>
                                                      <option data-title="Saudi Arabia" value="SA">Saudi Arabia</option>
                                                      <option data-title="Senegal" value="SN">Senegal</option>
                                                      <option data-title="Serbia" value="RS">Serbia</option>
                                                      <option data-title="Seychelles" value="SC">Seychelles</option>
                                                      <option data-title="Sierra Leone" value="SL">Sierra Leone</option>
                                                      <option data-title="Singapore" value="SG">Singapore</option>
                                                      <option data-title="Slovakia" value="SK">Slovakia</option>
                                                      <option data-title="Slovenia" value="SI">Slovenia</option>
                                                      <option data-title="Solomon Islands" value="SB">Solomon Islands</option>
                                                      <option data-title="Somalia" value="SO">Somalia</option>
                                                      <option data-title="South Africa" value="ZA">South Africa</option>
                                                      <option data-title="South Georgia and the South Sandwich Islands" value="GS">South Georgia and the South Sandwich Islands</option>
                                                      <option data-title="South Korea" value="KR">South Korea</option>
                                                      <option data-title="Spain" value="ES">Spain</option>
                                                      <option data-title="Sri Lanka" value="LK">Sri Lanka</option>
                                                      <option data-title="Sudan" value="SD">Sudan</option>
                                                      <option data-title="Suriname" value="SR">Suriname</option>
                                                      <option data-title="Svalbard and Jan Mayen" value="SJ">Svalbard and Jan Mayen</option>
                                                      <option data-title="Swaziland" value="SZ">Swaziland</option>
                                                      <option data-title="Sweden" value="SE">Sweden</option>
                                                      <option data-title="Switzerland" value="CH">Switzerland</option>
                                                      <option data-title="Syria" value="SY">Syria</option>
                                                      <option data-title="Taiwan" value="TW">Taiwan</option>
                                                      <option data-title="Tajikistan" value="TJ">Tajikistan</option>
                                                      <option data-title="Tanzania" value="TZ">Tanzania</option>
                                                      <option data-title="Thailand" value="TH">Thailand</option>
                                                      <option data-title="Timor-Leste" value="TL">Timor-Leste</option>
                                                      <option data-title="Togo" value="TG">Togo</option>
                                                      <option data-title="Tokelau" value="TK">Tokelau</option>
                                                      <option data-title="Tonga" value="TO">Tonga</option>
                                                      <option data-title="Trinidad and Tobago" value="TT">Trinidad and Tobago</option>
                                                      <option data-title="Tunisia" value="TN">Tunisia</option>
                                                      <option data-title="Turkey" value="TR">Turkey</option>
                                                      <option data-title="Turkmenistan" value="TM">Turkmenistan</option>
                                                      <option data-title="Turks and Caicos Islands" value="TC">Turks and Caicos Islands</option>
                                                      <option data-title="Tuvalu" value="TV">Tuvalu</option>
                                                      <option data-title="Uganda" value="UG">Uganda</option>
                                                      <option data-title="Ukraine" value="UA">Ukraine</option>
                                                      <option data-title="United Arab Emirates" value="AE">United Arab Emirates</option>
                                                      <option data-title="United Kingdom" value="GB">United Kingdom</option>
                                                      <option data-title="United States" value="US">United States</option>
                                                      <option data-title="Uruguay" value="UY">Uruguay</option>
                                                      <option data-title="U.S. Outlying Islands" value="UM">U.S. Outlying Islands</option>
                                                      <option data-title="U.S. Virgin Islands" value="VI">U.S. Virgin Islands</option>
                                                      <option data-title="Uzbekistan" value="UZ">Uzbekistan</option>
                                                      <option data-title="Vanuatu" value="VU">Vanuatu</option>
                                                      <option data-title="Vatican City" value="VA">Vatican City</option>
                                                      <option data-title="Venezuela" value="VE">Venezuela</option>
                                                      <option data-title="Vietnam" value="VN">Vietnam</option>
                                                      <option data-title="Wallis and Futuna" value="WF">Wallis and Futuna</option>
                                                      <option data-title="Western Sahara" value="EH">Western Sahara</option>
                                                      <option data-title="Yemen" value="YE">Yemen</option>
                                                      <option data-title="Zambia" value="ZM">Zambia</option>
                                                      <option data-title="Zimbabwe" value="ZW">Zimbabwe</option>
                                                   </select>
                                                   
                                                   
                                                   
                                                </div>
                                             </div>
                                             
                                             
                                             
                                          </div>
                                       </form>
                                    </div>
                                 </li>
                                 <li id="opc-shipping_method" class="checkout-shipping-method" data-bind="fadeVisible: visible(), blockLoader: isLoading" role="presentation" style="display: none;">
                                    <div class="checkout-shipping-method">
                                       <div class="step-title" data-role="title" data-bind="i18n: 'Shipping Methods'">Shipping Methods</div>
                                       
                                       <div class="shipping-policy-block field-tooltip" data-bind="visible: config.isEnabled" style="display: none;">
                                          <span class="field-tooltip-action" tabindex="0" data-toggle="dropdown" data-bind="mageInit: {'dropdown':{'activeClass': '_active'}}" aria-haspopup="true" aria-expanded="false" role="button">
                                          </span>
                                          <div class="field-tooltip-content" data-target="dropdown" aria-hidden="true">
                                             <span data-bind="html: config.shippingPolicyContent"></span>
                                          </div>
                                       </div>
                                       
                                       <div id="checkout-step-shipping_method" class="step-content" data-role="content" role="tabpanel" aria-hidden="false">
                                          <form id="co-shipping-method-form" class="form methods-shipping" novalidate="novalidate" data-bind="submit: setShippingInformation">
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
                                                         </td>
                                                         <td class="col col-price">
                                                            
                                                            <span class="price"><span class="price" data-bind="text: getFormattedPrice(method.price_excl_tax)">$10.00</span></span>
                                                            
                                                            
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
                                                   <span data-bind="i18n: 'Next'">Next</span>
                                                   </button>
                                                </div>
                                             </div>
                                          </form>
                                          
                                       </div>
                                    </div>
                                 </li>
                                 
                                 <?php function chopExtension($filename) {
    return pathinfo($filename, PATHINFO_FILENAME);
} 

echo "<pre>";

print_R($_POST);

echo "</pre>";
?>
						
                                 
                                 <li id="payment" role="presentation" class="checkout-payment-method" data-bind="fadeVisible: isVisible" style="display: list-item;">
                                    <div id="checkout-step-payment" class="step-content" data-role="content" role="tabpanel" aria-hidden="false">
                                       
                                       
                                       <form method = "post" class="form payments" action = "/order-confirmation">
                                          <input data-bind="attr: {value: getFormKey()}" type="hidden" name="form_key" value="1CqMG4r20wc5ViZh">
                                          <fieldset class="fieldset">
                                             <legend class="legend">
                                                <span data-bind="i18n: 'Payment Information'">Payment Information</span>
                                             </legend>
                                             <br>
                                             
                                             
                                             <div id="checkout-payment-method-load" class="opc-payment" data-bind="visible: isPaymentMethodsAvailable" style="">
                                                
                                                <div class="items payment-methods">
                                                   <div class="payment-group" data-repeat-index="0">
                                                      <div class="step-title" data-role="title" data-bind="i18n: getGroupTitle($group)">Payment Method:</div>
                                                      
                                                      <div class="payment-method _active" data-bind="css: {'_active': (getCode() == isChecked())}">
                                                         
                                                         
                                                         
                                                         
                                                         <div class="payment-method-title field choice">
                                                            
                                                          <div id="accordion">
															  
															  
														  <div class="card" style = "display:none;">
															<div class="card-header" id="headingOne">
															  <h5 class="mb-0">
																<div class="btn " data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
																 
																 <div class="custom-control custom-radio">
  <input type="radio" style = "width:50px !important; height:50px;" class="custom-control-input" id="defaultChecked0" name="defaultExampleRadios" >
  <label class="custom-control-label" for="defaultChecked0">Credit/ Debit Card</label>
  
																  
																</div>
															  </h5>
															</div>

															<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
															  <div class="card-body">
															
															<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
				  	<div class="card-header">
				    	<div class="row">
							<div class="col-md-5 col-12 pt-2">
								<h6 class="m-0"><strong>Payment Details</strong></h6>
							</div>
							<div class="col-md-7 col-12 icons">
								<i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i>
								<i class="fa fa-cc-mastercard fa-2x" aria-hidden="true"></i>
								<i class="fa fa-cc-discover fa-2x" aria-hidden="true"></i>
								<i class="fa fa-cc-amex fa-2x" aria-hidden="true"></i>
							</div>
						</div>
				  	</div>
				  	<div class="card-body">
				    	<form>
						  	<div class="form-group">
						      	<label for="validationTooltipCardNumber"><strong>CARD NUMBER</strong></label>
						      	<div class="input-group">
						        	<input type="text" class="form-control border-right-0" id="validationTooltipCardNumber" placeholder="Card Number">
						        	<div class="input-group-prepend">
						          		<span class="input-group-text rounded-right" id="validationTooltipCardNumber"><i class="fa fa-credit-card"></i></span>
						        	</div>
						      </div>
						  	</div>
						  	<div class="row">
						  		<div class="col-md-8 col-12">
						  			<div class="form-group">
								    	<label for="exampleInputExpirationDate"><strong>EXPIRATION DATE</strong></label>
								    	<input type="text" class="form-control" id="exampleInputExpirationDate" placeholder="MM / YY">
									</div>
						  		</div>
							  	<div class="col-md-4 col-12">
							  		<div class="form-group">
									    <label for="exampleInputCvcCode"><strong>CVC CODE</strong></label>
									    <input type="text" class="form-control" id="exampleInputCvcCode" placeholder="CVC">
									</div>
							  	</div>
						  	</div>
						  	<div class="form-group">
						    	<label for="exampleInputCouponCode"><strong>COUPON CODE</strong></label>
						    	<input type="text" class="form-control" id="exampleInputCouponCode" placeholder="Coupon Code">
						  	</div>
						  	<button class="btn btn-info w-100 pb-2 pt-2">Start Subscription</button>
						</form>
				  	</div>
				</div>
			</div>
		</div>
	</div>		
  
															</div>
															</div>
														  </div>
														  
														  
														  <div class="card">
															<div class="card-header" id="headingTwo">
															  <h5 class="mb-0">
																  
																<div class="btn  collapsed" >
																  <div class="custom-control custom-radio">
  <input value = "pbcod" type="radio" class="custom-control-input" id="defaultChecked" name="paymentmethod" checked>
  <label class="custom-control-label" for="defaultChecked">
Pay by Card (On-Delivery)</label> <span>
	
	
	
	
	</span>
</div>
																  
																</div>
															  </h5>
															</div>
															
															
															
														 
														 
														  </div>
														  
														   <div class="card">
															<div class="card-header" id="headingTwo">
															  <h5 class="mb-0">
																<div class="btn  collapsed">
																	<div class="custom-control custom-radio">
  <input value = "cod" type="radio"  class="custom-control-input" id="defaultChecked1" name="paymentmethod" >
  <label class="custom-control-label" for="defaultChecked1">Cash on delivery</label>
</div>
																  
																 
																</div>
															  </h5>
															</div>
															
															
														  
														  
														  </div>
						
										


</div>
        
                                                           
                                                         
                                                         </div>
                                                        
                                                        
                                                        
                                                         <div class="payment-method-content">
                                                            
                                                            <div data-role="checkout-messages" class="messages" data-bind="visible: isVisible(), click: removeAll">
                                                               
                                                            </div>
                                                            
                                                            <div class="payment-method-billing-address">
                                                               
                                                               <div class="checkout-billing-address">
                                                                  <div class="billing-address-same-as-shipping-block field choice" data-bind="visible: canUseShippingAddress()">
                                                                     <input type="checkbox" name="billing-address-same-as-shipping" data-bind="checked: isAddressSameAsShipping, click: useShippingAddress, attr: {id: 'billing-address-same-as-shipping-' + getCode($parent)}" id="billing-address-same-as-shipping-checkmo">
                                                                     <label data-bind="attr: {for: 'billing-address-same-as-shipping-' + getCode($parent)}" for="billing-address-same-as-shipping-checkmo"><span data-bind="i18n: 'My billing and shipping address are the same'">My billing and shipping address are the same</span></label>
                                                                  </div>
                                                                  <div class="billing-address-details" data-bind="if: isAddressDetailsVisible() &amp;&amp; currentBillingAddress()">
                                                                     <?= wordwrap($ArrToString , 65 ,"<br>\n") ?><br>
                                                                     <button type="button" class="action action-edit-address" data-bind="visible: !isAddressSameAsShipping(), click: editAddress">
                                                                     <span data-bind="i18n: 'Edit'">Edit</span>
                                                                     </button>
                                                                  </div>
                                                                  <fieldset class="fieldset" data-bind="visible: !isAddressDetailsVisible()" style="display: none;">
                                                                     <div class="field field-select-billing">
                                                                        <label class="label"><span data-bind="i18n: 'My billing and shipping address are the same'">My billing and shipping address are the same</span></label>
                                                                        <div class="control" data-bind="if: (addressOptions.length > 1)"></div>
                                                                     </div>
                                                                     
                                                                     <div class="billing-address-form" data-bind="fadeVisible: isAddressFormVisible">
                                       <form data-bind="attr: {'data-hasrequired': $t('* Required Fields')}" data-hasrequired="* Required Fields">
                                       <fieldset id="billing-new-address-form" class="fieldset address">
                                       
                                       
                                       <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="billingAddresscheckmo.firstname">
                                       <label class="label" data-bind="attr: { for: element.uid }" for="PCLHK3L">
                                       <span data-bind="i18n: element.label">First Name</span>
                                       </label>
                                       <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                       
                                       <input class="input-text" type="text" data-bind="
                                          value: value,
                                          valueUpdate: 'keyup',
                                          hasFocus: focused,
                                          attr: {
                                          name: inputName,
                                          placeholder: placeholder,
                                          'aria-describedby': getDescriptionId(),
                                          'aria-required': required,
                                          'aria-invalid': error() ? true : 'false',
                                          id: uid,
                                          disabled: disabled
                                          }" name="firstname" aria-required="true" aria-invalid="false" id="PCLHK3L">
                                       
                                       
                                       
                                       </div>
                                       </div>
                                       
                                       <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="billingAddresscheckmo.lastname">
                                       <label class="label" data-bind="attr: { for: element.uid }" for="BH9IFB3">
                                       <span data-bind="i18n: element.label">Last Name</span>
                                       </label>
                                       <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                       
                                       <input class="input-text" type="text" data-bind="
                                          value: value,
                                          valueUpdate: 'keyup',
                                          hasFocus: focused,
                                          attr: {
                                          name: inputName,
                                          placeholder: placeholder,
                                          'aria-describedby': getDescriptionId(),
                                          'aria-required': required,
                                          'aria-invalid': error() ? true : 'false',
                                          id: uid,
                                          disabled: disabled
                                          }" name="lastname" aria-required="true" aria-invalid="false" id="BH9IFB3">
                                       
                                       
                                       
                                       </div>
                                       </div>
                                       
                                       <fieldset class="field street admin__control-fields required" data-bind="css: additionalClasses">
                                       <legend class="label">
                                       <span data-bind="i18n: element.label">Street Address</span>
                                       </legend>
                                       <div class="control">
                                       
                                       
                                       <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="billingAddresscheckmo.street.0">
                                       <label class="label" data-bind="attr: { for: element.uid }" for="O7R65K8">
                                       </label>
                                       <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                       
                                       <input class="input-text" type="text" data-bind="
                                          value: value,
                                          valueUpdate: 'keyup',
                                          hasFocus: focused,
                                          attr: {
                                          name: inputName,
                                          placeholder: placeholder,
                                          'aria-describedby': getDescriptionId(),
                                          'aria-required': required,
                                          'aria-invalid': error() ? true : 'false',
                                          id: uid,
                                          disabled: disabled
                                          }" name="street[0]" aria-required="true" aria-invalid="false" id="O7R65K8">
                                       
                                       
                                       
                                       </div>
                                       </div>
                                       
                                       
                                       
                                       
                                       <div class="field additional" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="billingAddresscheckmo.street.1">
                                       <label class="label" data-bind="attr: { for: element.uid }" for="KE6490S">
                                       </label>
                                       <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                       
                                       <input class="input-text" type="text" data-bind="
                                          value: value,
                                          valueUpdate: 'keyup',
                                          hasFocus: focused,
                                          attr: {
                                          name: inputName,
                                          placeholder: placeholder,
                                          'aria-describedby': getDescriptionId(),
                                          'aria-required': required,
                                          'aria-invalid': error() ? true : 'false',
                                          id: uid,
                                          disabled: disabled
                                          }" name="street[1]" aria-invalid="false" id="KE6490S">
                                       
                                       
                                       
                                       </div>
                                       </div>
                                       
                                       
                                       
                                       
                                       <div class="field additional" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="billingAddresscheckmo.street.2">
                                       <label class="label" data-bind="attr: { for: element.uid }" for="T4JTPRJ">
                                       </label>
                                       <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                       
                                       <input class="input-text" type="text"  name="street[2]" aria-invalid="false" id="T4JTPRJ">
                                       
                                       
                                       
                                       </div>
                                       </div>
                                       
                                       
                                       
                                       </div>
                                       </fieldset>
                                       
                                       <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="billingAddresscheckmo.city">
                                       <label class="label" data-bind="attr: { for: element.uid }" for="DQ1KPYE">
                                       <span data-bind="i18n: element.label">City</span>
                                       </label>
                                       <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                       
                                       <input class="input-text" type="text"  name="city" aria-required="true" aria-invalid="false" id="DQ1KPYE">
                                       
                                       
                                       
                                       </div>
                                       </div>
                                       
                                       <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="billingAddresscheckmo.region_id">
                                       <label class="label" data-bind="attr: { for: element.uid }" for="PK2Y1LF">
                                       <span data-bind="i18n: element.label">State/Province</span>
                                       </label>
                                       <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                       
                                       <select class="select"  name="region_id" id="PK2Y1LF" aria-required="true" aria-invalid="false"><option value="">Please select a region, state or province.</option><option data-title="Alabama" value="1">Alabama</option><option data-title="Alaska" value="2">Alaska</option><option data-title="American Samoa" value="3">American Samoa</option><option data-title="Arizona" value="4">Arizona</option><option data-title="Arkansas" value="5">Arkansas</option><option data-title="Armed Forces Africa" value="6">Armed Forces Africa</option><option data-title="Armed Forces Americas" value="7">Armed Forces Americas</option><option data-title="Armed Forces Canada" value="8">Armed Forces Canada</option><option data-title="Armed Forces Europe" value="9">Armed Forces Europe</option><option data-title="Armed Forces Middle East" value="10">Armed Forces Middle East</option><option data-title="Armed Forces Pacific" value="11">Armed Forces Pacific</option><option data-title="California" value="12">California</option><option data-title="Colorado" value="13">Colorado</option><option data-title="Connecticut" value="14">Connecticut</option><option data-title="Delaware" value="15">Delaware</option><option data-title="District of Columbia" value="16">District of Columbia</option><option data-title="Federated States Of Micronesia" value="17">Federated States Of Micronesia</option><option data-title="Florida" value="18">Florida</option><option data-title="Georgia" value="19">Georgia</option><option data-title="Guam" value="20">Guam</option><option data-title="Hawaii" value="21">Hawaii</option><option data-title="Idaho" value="22">Idaho</option><option data-title="Illinois" value="23">Illinois</option><option data-title="Indiana" value="24">Indiana</option><option data-title="Iowa" value="25">Iowa</option><option data-title="Kansas" value="26">Kansas</option><option data-title="Kentucky" value="27">Kentucky</option><option data-title="Louisiana" value="28">Louisiana</option><option data-title="Maine" value="29">Maine</option><option data-title="Marshall Islands" value="30">Marshall Islands</option><option data-title="Maryland" value="31">Maryland</option><option data-title="Massachusetts" value="32">Massachusetts</option><option data-title="Michigan" value="33">Michigan</option><option data-title="Minnesota" value="34">Minnesota</option><option data-title="Mississippi" value="35">Mississippi</option><option data-title="Missouri" value="36">Missouri</option><option data-title="Montana" value="37">Montana</option><option data-title="Nebraska" value="38">Nebraska</option><option data-title="Nevada" value="39">Nevada</option><option data-title="New Hampshire" value="40">New Hampshire</option><option data-title="New Jersey" value="41">New Jersey</option><option data-title="New Mexico" value="42">New Mexico</option><option data-title="New York" value="43">New York</option><option data-title="North Carolina" value="44">North Carolina</option><option data-title="North Dakota" value="45">North Dakota</option><option data-title="Northern Mariana Islands" value="46">Northern Mariana Islands</option><option data-title="Ohio" value="47">Ohio</option><option data-title="Oklahoma" value="48">Oklahoma</option><option data-title="Oregon" value="49">Oregon</option><option data-title="Palau" value="50">Palau</option><option data-title="Pennsylvania" value="51">Pennsylvania</option><option data-title="Puerto Rico" value="52">Puerto Rico</option><option data-title="Rhode Island" value="53">Rhode Island</option><option data-title="South Carolina" value="54">South Carolina</option><option data-title="South Dakota" value="55">South Dakota</option><option data-title="Tennessee" value="56">Tennessee</option><option data-title="Texas" value="57">Texas</option><option data-title="Utah" value="58">Utah</option><option data-title="Vermont" value="59">Vermont</option><option data-title="Virgin Islands" value="60">Virgin Islands</option><option data-title="Virginia" value="61">Virginia</option><option data-title="Washington" value="62">Washington</option><option data-title="West Virginia" value="63">West Virginia</option><option data-title="Wisconsin" value="64">Wisconsin</option><option data-title="Wyoming" value="65">Wyoming</option></select>
                                       
                                       
                                       
                                       </div>
                                       </div>
                                       
                                       <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="billingAddresscheckmo.region" style="display: none;">
                                       <label class="label" data-bind="attr: { for: element.uid }" for="OTHHFUW">
                                       <span data-bind="i18n: element.label">State/Province</span>
                                       </label>
                                       <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                       
                                       <input class="input-text" type="text"  name="region" aria-required="true" aria-invalid="false" id="OTHHFUW">
                                       
                                       
                                       
                                       </div>
                                       </div>
                                       
                                       <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="billingAddresscheckmo.postcode">
                                       <label class="label" data-bind="attr: { for: element.uid }" for="CDNLI6V">
                                       <span data-bind="i18n: element.label">Zip/Postal Code</span>
                                       </label>
                                       <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                       
                                       <input class="input-text" type="text"  name="postcode" aria-required="true" aria-invalid="false" id="CDNLI6V">
                                       
                                       
                                       
                                       </div>
                                       </div>
                                       
                                       <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="billingAddresscheckmo.country_id">
                                       <label class="label" data-bind="attr: { for: element.uid }" for="MD55BHF">
                                       <span data-bind="i18n: element.label">Country</span>
                                       </label>
                                       <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                       
                                       <select class="select"  name="country_id" id="MD55BHF" aria-required="true" aria-invalid="false"><option value=""> </option><option data-title="Afghanistan" value="AF">Afghanistan</option><option data-title="Åland Islands" value="AX">Åland Islands</option><option data-title="Albania" value="AL">Albania</option><option data-title="Algeria" value="DZ">Algeria</option><option data-title="American Samoa" value="AS">American Samoa</option><option data-title="Andorra" value="AD">Andorra</option><option data-title="Angola" value="AO">Angola</option><option data-title="Anguilla" value="AI">Anguilla</option><option data-title="Antarctica" value="AQ">Antarctica</option><option data-title="Antigua and Barbuda" value="AG">Antigua and Barbuda</option><option data-title="Argentina" value="AR">Argentina</option><option data-title="Armenia" value="AM">Armenia</option><option data-title="Aruba" value="AW">Aruba</option><option data-title="Australia" value="AU">Australia</option><option data-title="Austria" value="AT">Austria</option><option data-title="Azerbaijan" value="AZ">Azerbaijan</option><option data-title="Bahamas" value="BS">Bahamas</option><option data-title="Bahrain" value="BH">Bahrain</option><option data-title="Bangladesh" value="BD">Bangladesh</option><option data-title="Barbados" value="BB">Barbados</option><option data-title="Belarus" value="BY">Belarus</option><option data-title="Belgium" value="BE">Belgium</option><option data-title="Belize" value="BZ">Belize</option><option data-title="Benin" value="BJ">Benin</option><option data-title="Bermuda" value="BM">Bermuda</option><option data-title="Bhutan" value="BT">Bhutan</option><option data-title="Bolivia" value="BO">Bolivia</option><option data-title="Bosnia and Herzegovina" value="BA">Bosnia and Herzegovina</option><option data-title="Botswana" value="BW">Botswana</option><option data-title="Bouvet Island" value="BV">Bouvet Island</option><option data-title="Brazil" value="BR">Brazil</option><option data-title="British Indian Ocean Territory" value="IO">British Indian Ocean Territory</option><option data-title="British Virgin Islands" value="VG">British Virgin Islands</option><option data-title="Brunei" value="BN">Brunei</option><option data-title="Bulgaria" value="BG">Bulgaria</option><option data-title="Burkina Faso" value="BF">Burkina Faso</option><option data-title="Burundi" value="BI">Burundi</option><option data-title="Cambodia" value="KH">Cambodia</option><option data-title="Cameroon" value="CM">Cameroon</option><option data-title="Canada" value="CA">Canada</option><option data-title="Cape Verde" value="CV">Cape Verde</option><option data-title="Cayman Islands" value="KY">Cayman Islands</option><option data-title="Central African Republic" value="CF">Central African Republic</option><option data-title="Chad" value="TD">Chad</option><option data-title="Chile" value="CL">Chile</option><option data-title="China" value="CN">China</option><option data-title="Christmas Island" value="CX">Christmas Island</option><option data-title="Cocos [Keeling] Islands" value="CC">Cocos [Keeling] Islands</option><option data-title="Colombia" value="CO">Colombia</option><option data-title="Comoros" value="KM">Comoros</option><option data-title="Congo - Brazzaville" value="CG">Congo - Brazzaville</option><option data-title="Congo - Kinshasa" value="CD">Congo - Kinshasa</option><option data-title="Cook Islands" value="CK">Cook Islands</option><option data-title="Costa Rica" value="CR">Costa Rica</option><option data-title="Côte d’Ivoire" value="CI">Côte d’Ivoire</option><option data-title="Croatia" value="HR">Croatia</option><option data-title="Cuba" value="CU">Cuba</option><option data-title="Cyprus" value="CY">Cyprus</option><option data-title="Czech Republic" value="CZ">Czech Republic</option><option data-title="Denmark" value="DK">Denmark</option><option data-title="Djibouti" value="DJ">Djibouti</option><option data-title="Dominica" value="DM">Dominica</option><option data-title="Dominican Republic" value="DO">Dominican Republic</option><option data-title="Ecuador" value="EC">Ecuador</option><option data-title="Egypt" value="EG">Egypt</option><option data-title="El Salvador" value="SV">El Salvador</option><option data-title="Equatorial Guinea" value="GQ">Equatorial Guinea</option><option data-title="Eritrea" value="ER">Eritrea</option><option data-title="Estonia" value="EE">Estonia</option><option data-title="Ethiopia" value="ET">Ethiopia</option><option data-title="Falkland Islands" value="FK">Falkland Islands</option><option data-title="Faroe Islands" value="FO">Faroe Islands</option><option data-title="Fiji" value="FJ">Fiji</option><option data-title="Finland" value="FI">Finland</option><option data-title="France" value="FR">France</option><option data-title="French Guiana" value="GF">French Guiana</option><option data-title="French Polynesia" value="PF">French Polynesia</option><option data-title="French Southern Territories" value="TF">French Southern Territories</option><option data-title="Gabon" value="GA">Gabon</option><option data-title="Gambia" value="GM">Gambia</option><option data-title="Georgia" value="GE">Georgia</option><option data-title="Germany" value="DE">Germany</option><option data-title="Ghana" value="GH">Ghana</option><option data-title="Gibraltar" value="GI">Gibraltar</option><option data-title="Greece" value="GR">Greece</option><option data-title="Greenland" value="GL">Greenland</option><option data-title="Grenada" value="GD">Grenada</option><option data-title="Guadeloupe" value="GP">Guadeloupe</option><option data-title="Guam" value="GU">Guam</option><option data-title="Guatemala" value="GT">Guatemala</option><option data-title="Guernsey" value="GG">Guernsey</option><option data-title="Guinea" value="GN">Guinea</option><option data-title="Guinea-Bissau" value="GW">Guinea-Bissau</option><option data-title="Guyana" value="GY">Guyana</option><option data-title="Haiti" value="HT">Haiti</option><option data-title="Heard Island and McDonald Islands" value="HM">Heard Island and McDonald Islands</option><option data-title="Honduras" value="HN">Honduras</option><option data-title="Hong Kong SAR China" value="HK">Hong Kong SAR China</option><option data-title="Hungary" value="HU">Hungary</option><option data-title="Iceland" value="IS">Iceland</option><option data-title="India" value="IN">India</option><option data-title="Indonesia" value="ID">Indonesia</option><option data-title="Iran" value="IR">Iran</option><option data-title="Iraq" value="IQ">Iraq</option><option data-title="Ireland" value="IE">Ireland</option><option data-title="Isle of Man" value="IM">Isle of Man</option><option data-title="Israel" value="IL">Israel</option><option data-title="Italy" value="IT">Italy</option><option data-title="Jamaica" value="JM">Jamaica</option><option data-title="Japan" value="JP">Japan</option><option data-title="Jersey" value="JE">Jersey</option><option data-title="Jordan" value="JO">Jordan</option><option data-title="Kazakhstan" value="KZ">Kazakhstan</option><option data-title="Kenya" value="KE">Kenya</option><option data-title="Kiribati" value="KI">Kiribati</option><option data-title="Kuwait" value="KW">Kuwait</option><option data-title="Kyrgyzstan" value="KG">Kyrgyzstan</option><option data-title="Laos" value="LA">Laos</option><option data-title="Latvia" value="LV">Latvia</option><option data-title="Lebanon" value="LB">Lebanon</option><option data-title="Lesotho" value="LS">Lesotho</option><option data-title="Liberia" value="LR">Liberia</option><option data-title="Libya" value="LY">Libya</option><option data-title="Liechtenstein" value="LI">Liechtenstein</option><option data-title="Lithuania" value="LT">Lithuania</option><option data-title="Luxembourg" value="LU">Luxembourg</option><option data-title="Macau SAR China" value="MO">Macau SAR China</option><option data-title="Macedonia" value="MK">Macedonia</option><option data-title="Madagascar" value="MG">Madagascar</option><option data-title="Malawi" value="MW">Malawi</option><option data-title="Malaysia" value="MY">Malaysia</option><option data-title="Maldives" value="MV">Maldives</option><option data-title="Mali" value="ML">Mali</option><option data-title="Malta" value="MT">Malta</option><option data-title="Marshall Islands" value="MH">Marshall Islands</option><option data-title="Martinique" value="MQ">Martinique</option><option data-title="Mauritania" value="MR">Mauritania</option><option data-title="Mauritius" value="MU">Mauritius</option><option data-title="Mayotte" value="YT">Mayotte</option><option data-title="Mexico" value="MX">Mexico</option><option data-title="Micronesia" value="FM">Micronesia</option><option data-title="Moldova" value="MD">Moldova</option><option data-title="Monaco" value="MC">Monaco</option><option data-title="Mongolia" value="MN">Mongolia</option><option data-title="Montenegro" value="ME">Montenegro</option><option data-title="Montserrat" value="MS">Montserrat</option><option data-title="Morocco" value="MA">Morocco</option><option data-title="Mozambique" value="MZ">Mozambique</option><option data-title="Myanmar [Burma]" value="MM">Myanmar [Burma]</option><option data-title="Namibia" value="NA">Namibia</option><option data-title="Nauru" value="NR">Nauru</option><option data-title="Nepal" value="NP">Nepal</option><option data-title="Netherlands" value="NL">Netherlands</option><option data-title="Netherlands Antilles" value="AN">Netherlands Antilles</option><option data-title="New Caledonia" value="NC">New Caledonia</option><option data-title="New Zealand" value="NZ">New Zealand</option><option data-title="Nicaragua" value="NI">Nicaragua</option><option data-title="Niger" value="NE">Niger</option><option data-title="Nigeria" value="NG">Nigeria</option><option data-title="Niue" value="NU">Niue</option><option data-title="Norfolk Island" value="NF">Norfolk Island</option><option data-title="Northern Mariana Islands" value="MP">Northern Mariana Islands</option><option data-title="North Korea" value="KP">North Korea</option><option data-title="Norway" value="NO">Norway</option><option data-title="Oman" value="OM">Oman</option><option data-title="Pakistan" value="PK">Pakistan</option><option data-title="Palau" value="PW">Palau</option><option data-title="Palestinian Territories" value="PS">Palestinian Territories</option><option data-title="Panama" value="PA">Panama</option><option data-title="Papua New Guinea" value="PG">Papua New Guinea</option><option data-title="Paraguay" value="PY">Paraguay</option><option data-title="Peru" value="PE">Peru</option><option data-title="Philippines" value="PH">Philippines</option><option data-title="Pitcairn Islands" value="PN">Pitcairn Islands</option><option data-title="Poland" value="PL">Poland</option><option data-title="Portugal" value="PT">Portugal</option><option data-title="Qatar" value="QA">Qatar</option><option data-title="Réunion" value="RE">Réunion</option><option data-title="Romania" value="RO">Romania</option><option data-title="Russia" value="RU">Russia</option><option data-title="Rwanda" value="RW">Rwanda</option><option data-title="Saint Barthélemy" value="BL">Saint Barthélemy</option><option data-title="Saint Helena" value="SH">Saint Helena</option><option data-title="Saint Kitts and Nevis" value="KN">Saint Kitts and Nevis</option><option data-title="Saint Lucia" value="LC">Saint Lucia</option><option data-title="Saint Martin" value="MF">Saint Martin</option><option data-title="Saint Pierre and Miquelon" value="PM">Saint Pierre and Miquelon</option><option data-title="Saint Vincent and the Grenadines" value="VC">Saint Vincent and the Grenadines</option><option data-title="Samoa" value="WS">Samoa</option><option data-title="San Marino" value="SM">San Marino</option><option data-title="São Tomé and Príncipe" value="ST">São Tomé and Príncipe</option><option data-title="Saudi Arabia" value="SA">Saudi Arabia</option><option data-title="Senegal" value="SN">Senegal</option><option data-title="Serbia" value="RS">Serbia</option><option data-title="Seychelles" value="SC">Seychelles</option><option data-title="Sierra Leone" value="SL">Sierra Leone</option><option data-title="Singapore" value="SG">Singapore</option><option data-title="Slovakia" value="SK">Slovakia</option><option data-title="Slovenia" value="SI">Slovenia</option><option data-title="Solomon Islands" value="SB">Solomon Islands</option><option data-title="Somalia" value="SO">Somalia</option><option data-title="South Africa" value="ZA">South Africa</option><option data-title="South Georgia and the South Sandwich Islands" value="GS">South Georgia and the South Sandwich Islands</option><option data-title="South Korea" value="KR">South Korea</option><option data-title="Spain" value="ES">Spain</option><option data-title="Sri Lanka" value="LK">Sri Lanka</option><option data-title="Sudan" value="SD">Sudan</option><option data-title="Suriname" value="SR">Suriname</option><option data-title="Svalbard and Jan Mayen" value="SJ">Svalbard and Jan Mayen</option><option data-title="Swaziland" value="SZ">Swaziland</option><option data-title="Sweden" value="SE">Sweden</option><option data-title="Switzerland" value="CH">Switzerland</option><option data-title="Syria" value="SY">Syria</option><option data-title="Taiwan" value="TW">Taiwan</option><option data-title="Tajikistan" value="TJ">Tajikistan</option><option data-title="Tanzania" value="TZ">Tanzania</option><option data-title="Thailand" value="TH">Thailand</option><option data-title="Timor-Leste" value="TL">Timor-Leste</option><option data-title="Togo" value="TG">Togo</option><option data-title="Tokelau" value="TK">Tokelau</option><option data-title="Tonga" value="TO">Tonga</option><option data-title="Trinidad and Tobago" value="TT">Trinidad and Tobago</option><option data-title="Tunisia" value="TN">Tunisia</option><option data-title="Turkey" value="TR">Turkey</option><option data-title="Turkmenistan" value="TM">Turkmenistan</option><option data-title="Turks and Caicos Islands" value="TC">Turks and Caicos Islands</option><option data-title="Tuvalu" value="TV">Tuvalu</option><option data-title="Uganda" value="UG">Uganda</option><option data-title="Ukraine" value="UA">Ukraine</option><option data-title="United Arab Emirates" value="AE">United Arab Emirates</option><option data-title="United Kingdom" value="GB">United Kingdom</option><option data-title="United States" value="US">United States</option><option data-title="Uruguay" value="UY">Uruguay</option><option data-title="U.S. Outlying Islands" value="UM">U.S. Outlying Islands</option><option data-title="U.S. Virgin Islands" value="VI">U.S. Virgin Islands</option><option data-title="Uzbekistan" value="UZ">Uzbekistan</option><option data-title="Vanuatu" value="VU">Vanuatu</option><option data-title="Vatican City" value="VA">Vatican City</option><option data-title="Venezuela" value="VE">Venezuela</option><option data-title="Vietnam" value="VN">Vietnam</option><option data-title="Wallis and Futuna" value="WF">Wallis and Futuna</option><option data-title="Western Sahara" value="EH">Western Sahara</option><option data-title="Yemen" value="YE">Yemen</option><option data-title="Zambia" value="ZM">Zambia</option><option data-title="Zimbabwe" value="ZW">Zimbabwe</option></select>
                                       
                                       
                                       
                                       </div>
                                       </div>
                                       
                                       
                                       
                                       </fieldset>
                                       </form>
                                       </div>
                                       <div class="actions-toolbar">
                                       <div class="primary">
                                       <button class="action action-update" type="button" data-bind="click: updateAddress">
                                       <span data-bind="i18n: 'Update'">Update</span>
                                       </button>
                                       <button class="action action-cancel" type="button" data-bind="click: cancelAddressEdit">
                                       <span data-bind="i18n: 'Cancel'">Cancel</span>
                                       </button>
                                       </div>
                                       </div>
                                       </fieldset>
                                       </div>
                                       
                                       </div>
                                       <div class="checkout-agreements-block">
                                       
                                       
                                       <div data-role="checkout-agreements">
                                       <div class="checkout-agreements" data-bind="visible: isVisible" style="display: none;">
                                       </div>
                                       </div>
                                       
                                       
                                       </div>
                                       <div class="actions-toolbar">
                                       <div class="primary">
                                       <button class="action primary checkout" type="submit"
                                          title="Place Order">
                                       <span data-bind="i18n: 'Place Order'">Confirm Order</span>
                                       </button>
                                       </div>
                                       </div>
                                       </div>
                                       
                                       
                                       
                                       
                                       
                                       </div>
                                     
                                     
                                     
                                     
                                     
                                       </div>
                                       </div>
                                       
                                       </div>
                                       <div class="no-quotes-block" data-bind="visible: isPaymentMethodsAvailable() == false" style="display: none;">
                                       </div>
                                       </fieldset>
                                       </form>
                                    
                                    
                                    
                                    </div>
                                 </li>
                                 
                                 
                                 
                              </ol>
                           </div>
                           
                           
                           <aside role="dialog" class="modal-custom opc-sidebar opc-summary-wrapper        custom-slide" aria-describedby="modal-content-14" data-role="modal" data-type="custom" tabindex="0">
                              <div data-role="focusable-start" tabindex="0"></div>
                              <div class="modal-inner-wrap" data-role="focusable-scope">
                                 <header class="modal-header">
                                    <button class="action-close" data-role="closeBtn" type="button">
                                    <span>Close</span>
                                    </button>
                                 </header>
                                 <div id="modal-content-14" class="modal-content" data-role="content">
                                    <div id="opc-sidebar" data-bind="afterRender:setModalElement, mageInit: {
                                       'Magento_Ui/js/modal/modal':{
                                       'type': 'custom',
                                       'modalClass': 'opc-sidebar opc-summary-wrapper',
                                       'wrapperClass': 'checkout-container',
                                       'parentModalClass': '_has-modal-custom',
                                       'responsive': true,
                                       'responsiveClass': 'custom-slide',
                                       'overlayClass': 'modal-custom-overlay',
                                       'buttons': []
                                       }}">
                                       
                                       <div class="opc-block-summary" data-bind="blockLoader: isLoading">
                                          <span data-bind="i18n: 'Order Summary'" class="title">Order Summary</span>
                                          
                                          <table class="data table table-totals">
                                             <caption class="table-caption" data-bind="i18n: 'Order Summary'">Order Summary</caption>
                                             <tbody>
                                                
                                                
                                                <tr class="totals sub">
                                                   <th data-bind="i18n: title" class="mark" scope="row">Cart Subtotal</th>
                                                   <td class="amount">
                                                      <span class="price" data-bind="text: getValue(), attr: {'data-th': title}" data-th="Cart Subtotal"><?= $obj->getPriceFormate($obj->CartTotleAmount());?> AED</span>
                                                   </td>
                                                </tr>
                                                
                                                
                                                <tr class="totals discount">
                                                   <th class="mark" scope="row">
                                                      <span class="title" data-bind="text: getTitle()">Discount</span>
                                                      <span class="discount coupon" data-bind="text: getCouponCode()"></span>
                                                   </th>
                                                   <td class="amount">
                                                      <span class="price" data-bind="text: getValue(), attr: {'data-th': name}" data-th="checkout.sidebar.summary.totals.discount">-0.00 AED</span>
                                                   </td>
                                                </tr>
                                                
                                                
                                                
                                                
                                                <?php if($obj->ShippingCostApply() === true):?>
                                                
                                                <tr class="totals shipping excl">
                                                   <th class="mark" scope="row">
                                                      <span class="label" data-bind="i18n: title">Shipping</span>
                                                      <span class="value" data-bind="text: getShippingMethodTitle()">Flat Rate - Fixed</span>
                                                   </th>
                                                   <td class="amount">
                                                      <span class="price" data-bind="text: getValue(), attr: {'data-th': title}" data-th="Shipping">20.00 AED</span>
                                                      
                                                   </td>
                                                </tr>
                                               
                                               <?php else : ?>
                                               
                                               <tr class="totals shipping excl">
                                                   <th class="mark" scope="row">
                                                      <span class="label" data-bind="i18n: title">Shipping</span>
                                                      
                                                   </th>
                                                   <td class="amount">
                                                      <span class="price" data-bind="text: getValue(), attr: {'data-th': title}" data-th="Shipping">0.00 AED</span>
                                                      
                                                   </td>
                                                </tr>
                                               
                                                <?php endif;?>
                                                
                                                 
                                                
                                                
                                                <tr class="totals sub">
                                                   <th data-bind="i18n: title" class="mark" scope="row">Tax (5 %)</th>
                                                   <td class="amount">
                                                      <span class="price" data-bind="text: getValue(), attr: {'data-th': title}" data-th="Cart Subtotal"><?= $obj->getPriceFormate($obj->TaxOnCart()); ?> AED</span>
                                                   </td>
                                                </tr>
                                                
                                                
                                                
                                                <tr class="grand totals">
                                                   <th class="mark" scope="row">
                                                      <strong data-bind="i18n: title">Order Total</strong>
                                                   </th>
                                                   <td data-bind="attr: {'data-th': title}" class="amount" data-th="Order Total">
                                                      <strong><span class="price" data-bind="text: getValue()"><?= $obj->getPriceFormate($obj->CartTotleAmountWithTax());?> AED</span></strong>
                                                   </td>
                                                </tr>
                                                
                                                
                                             </tbody>
                                          </table>
                                          
                                          <script>
                                             $(document).ready(function(){
                                             	$('#cart-item-1266').click(function() {
                                             		
                                             		
                                             		$('#hidden-cart-12').slideToggle( "slow", function() {
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
                                          
                                          <div class="shipping-information">
                                             <div class="ship-to">
                                                <div class="shipping-information-title">
                                                   <span data-bind="i18n: 'Ship To:'">Ship To:</span>
                                                   <button class="action action-edit" data-bind="click: back">
                                                   <span data-bind="i18n: 'edit'">edit</span>
                                                   </button>
                                                </div>
                                                <div class="shipping-information-content">
                                                   
                                              
                                              <?= $ArrToString ?? ''; ?>
                                              
                                              
                                                   
                                                   
                                                   
                                                </div>
                                             </div>
                                             <div class="ship-via">
                                                <div class="shipping-information-title">
                                                   <span data-bind="i18n: 'Shipping Method:'">Shipping Method:</span>
                                                   <button class="action action-edit" data-bind="click: backToShippingMethod">
                                                   <span data-bind="i18n: 'edit'">edit</span>
                                                   </button>
                                                </div>
                                                
                                                
                                                <div class="shipping-information-content">
                                                   <span class="value" data-bind="text: getShippingMethodTitle()">Flat Rate - Fixed</span>
                                                </div>
                                                
                                                
                                                
                                             </div>
                                          </div>
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div data-role="focusable-end" tabindex="0"></div>
                           </aside>
                        </div>
                     </div>
                  </div>
               
					
					<?php else: ?>
					
					<div class="message notice"><div>Buy something, Shopping cart is empty.  </div></div>
                    
					<?php endif;?>
                      
                     
               
               </div>
            </div>
         </div>
      </main>
      <?php 
         include ('footer.php');
               ?>
