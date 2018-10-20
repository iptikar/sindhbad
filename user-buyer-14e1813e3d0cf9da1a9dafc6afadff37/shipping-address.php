<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic | Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        
       
       <!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
		<link href="http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
		<link href="http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/uniform.default.css" rel="stylesheet" type="text/css" />
		<link href="http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<link href="http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/daterangepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/morris.css" rel="stylesheet" type="text/css" />
		<link href="http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/fullcalendar.min.css" rel="stylesheet" type="text/css" />
		<link href="http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/jqvmap.css" rel="stylesheet" type="text/css" />
		<!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN THEME GLOBAL STYLES -->
		<link href="http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
		<link href="http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/plugins.min.css" rel="stylesheet" type="text/css" />
		<!-- END THEME GLOBAL STYLES -->
		<!-- BEGIN THEME LAYOUT STYLES -->
		<link href="http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/layout.min.css" rel="stylesheet" type="text/css" />
		<link href="http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
		<link href="http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/custom.min.css" rel="stylesheet" type="text/css" />

        
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
       
       
        <style>
       

        </style>
        
        
        
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
		
		
        <!-- BEGIN HEADER -->
        <?php include 'header.php'; ?>
     	
        
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start active open">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-speedometer"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                                
                            </a>
                     </li>
                        
						
						
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">My Orders</span>
                                
                            </a>
                           
                        </li>
                        
                        <li class="nav-item  ">
                            <a href="recently-viewed-product" class="nav-link nav-toggle">
                                <i class="icon-eye"></i>
                                <span class="title">Recently Viewed Products</span>
                                
                            </a>
                           
                        </li>

                        <li class="nav-item  ">
                            <a href="shipping-address" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title">Shipping Addresses</span>
                                
                            </a>                          
                        
                        </li>
                        
                       
                       
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Wish Lists</span>
                               
                            </a>
                            
                        </li>
                      
						
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title">Recommended</span>
                                
                            </a>
                            
                            
                           
                        
                        </li>
						
                        <li class="nav-item  ">
                            <a href="?p=" class="nav-link nav-toggle">
                                <i class="icon-wallet"></i>
                                <span class="title">Account Settings</span>
                                
                            </a>
							
                         
							
                        </li>
                        
                        
                        
                        
                        </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Shipping Address
                            </h1>
                            
                          
                        </div>
						
						
						
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                            <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height green" data-placement="top" data-original-title="Change dashboard date range">
                                <i class="icon-calendar"></i>&nbsp;
                                <span class="thin uppercase hidden-xs"></span>&nbsp;
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <!-- BEGIN THEME PANEL -->
                            
                            
                                   </div>
                        <!-- END PAGE TOOLBAR -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Dashboard</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Shipping Address</span>
                        </li>
                    </ul>
                    
                    <?php if($obj->IsBuyerShippingProvided() === false):?>
                    
						<div class="alert alert-danger">
  <strong>Notice ! </strong>Please provide you valid shipping details, it's not complete.
</div>
                    
                    <?php endif; ?>
                    
                      <!-- If buyer shipping is updated --->
                     <?php if($obj->UpdateBuyerShippingDetails() === true):?>
                     <div class="alert alert-success">
  <strong>Success! </strong>Shipping details updated sucessfully.
</div>
                     
                     <?php endif; ?>
                     
                     
                     <?php
                     
						$details = (is_array($obj->GetBuyerShippingDetails()) ? $obj->GetBuyerShippingDetails() : '');
						
                     ?>
                     
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <!-- BEGIN DASHBOARD STATS 1-->
					<div class="row">
                        <div class="col-md-12">
                           <div class="form-horizontal form-row-seperated">
                              <div class="portlet">
                                 <div class="portlet-body">
                                    <div class="tabbable-bordered">
                                       <ul class="nav nav-tabs">
                                          <li class="active">
                                             <a href="#tab_general" data-toggle="tab"> General </a>
                                          </li>
                                          
                                          
                                       </ul>
                                       
                                       
                                       <form id="form58656" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                                       <div class="tab-content" id="form_sample_1">
										  
                                          <div class="tab-pane active" id="tab_general">
                                             <div class="form-body">
												 
                                                <div class="form-group">
													
													
                                                   <label class="col-md-2 control-label">First Name
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
                                                      
                                                      <input  type="text" id="product-name" class="form-control" name="first-name" placeholder="" value="<?= $details['firstname'] ?? '';?>" 
                                                      
                                                      pattern="[a-zA-Z ]{2,}" 
														oninvalid="this.setCustomValidity('Please Enter first name.')"
														oninput="setCustomValidity('')" required
													
													/>
                                                      

                                                   </div>
                                                   
                                                   <label class="col-md-2 control-label">Last Name
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
                                                      <input type="text" id="last-name" class="form-control" name="last-name" placeholder="" value="<?= $details['lastname'] ?? '';?>"
														
														pattern="[a-zA-Z ]{2,}"
														oninvalid="this.setCustomValidity('Please Enter last name.')"
														oninput="setCustomValidity('')" required
													
                                                      /> 

                                                   </div>
                                                   
                                                   
                                                </div>
                                                
                                                <div class = "form-group">
                                                
													<input type = "hidden" value = "" id = "country_node" name="country"/>
													<input type = "hidden" value = "" id = "city_node" name = "city"/>
													<input type = "hidden" value = "" id = "area_node" name = "AddressArea"/>
													
												</div>
                                                
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Country
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
                                                      <select class="form-control" id="country" name="country1"
                                                      oninvalid="this.setCustomValidity('Please select country.')"
														oninput="setCustomValidity('')" required
													
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
                                                  
                                                  <small class = "text-info"> At the moment we are providing server to UAE only.</small>
                                                
                                                   </div>
													
													   <div id="append_city">
                                                   </div>
                                               
                                               
                                                </div>
                                                
                                                <div class = "form-group" id = "append-city-here">
													
													
                                                </div>
                                                
                                                <div class = "form-group" id = "append-are-here">
  
                                                </div>
                                                
                                                
                                                <div class = "form-group">
                                                
                                                 <label class="col-md-2 control-label">Street Name/No.	 
                                                   <span class="required"> * </span>
                                                   </label>
                                                   
                                                   
                                                <div class="col-md-4">
                                                      <input title="Three letter country code" type="text" id="street" class="form-control" name="street" placeholder="" value="<?= $details['street_no'] ?? '';?>"
                                                      pattern="[a-zA-Z0-9\(\) ]{2,}"
														oninvalid="this.setCustomValidity('Please street no.')"
														oninput="setCustomValidity('')" required
                                                      > 

                                                   </div>
                                                   
                                                <label class="col-md-2 control-label">Building Name/No.	 
                                                   <span class="required"> * </span>
                                                   </label>
                                                   
                                                   
                                                   
                                                  
                                                <div class="col-md-4">
                                                 <input type="text" id="building-name" class="form-control" name="building-name" placeholder="" value="<?= $details['building_no'] ?? ''; ?>"
														
													pattern="[a-zA-Z0-9 ]{2,}"
													oninvalid="this.setCustomValidity('Please Building Name/No.')"
													oninput="setCustomValidity('')" required
                                                 > 

                                                </div>
                                                </div>
                                                
                                                <div class = "form-group">
                                                
                                                <label class="col-md-2 control-label">Floor/No.	 
                                                   <span class="required"> * </span>
                                                   </label>
                                               
                                                <div class="col-md-4">
                                                 <input type="text" id="floor-no" class="form-control" name="floor-no" placeholder="" value="<?= $details['floor_no'] ?? ''; ?>"
                                                 
													pattern="[a-zA-Z0-9 ]{2,}"
													oninvalid="this.setCustomValidity('Please valid floor no.')"
													oninput="setCustomValidity('')" required
                                                 
                                                 > 

                                                </div>
                                               
                                             <label class="col-md-2 control-label">Apartment/No.	 
                                                   <span class="required"> * </span>
                                                   </label>
                                               
                                                <div class="col-md-4">
                                                 <input type="text" id="apartment-no" class="form-control" name="apartment-no" placeholder="" value=""
                                                 pattern="[a-zA-Z0-9 ]{2,}"
													oninvalid="this.setCustomValidity('Please valid Apartment no.')"
													oninput="setCustomValidity('')" required
                                                 > 

                                                </div>
                                               
                                             
                                             
                                              </div>
                                               
                                               
                                                
                                                
                                                <div class = "form-group">
                                                
                                                
                                               <label class="col-md-2 control-label">Nearest Landmark.	 	 
                                                   <span class="required"> * </span>
                                                   </label>
                                               
                                                <div class="col-md-4">
                                                 <input type="text" id="landmark" class="form-control" name="landmark" placeholder="" value="<?= $details['landmark'] ?? ''; ?>"
													
													pattern="[a-zA-Z0-9 ]{2,}"
													oninvalid="this.setCustomValidity('Please valid land.')"
													oninput="setCustomValidity('')" required
                                                 > 

                                                </div>
                                               
                                                
                                                </div>

												<div class = "form-group">
												
											<label class="col-md-2 control-label">Location Type.	 	 
                                                   <span class="required"> * </span>
                                                   </label>
                                               
                                              <div class="col-md-4">
                                       <select name="locationtype" id="locationtype" class="form-control"
                                       
													oninvalid="this.setCustomValidity('Please select location type.')"
													oninput="setCustomValidity('')" required
                                       >
										<option value="" selected >Location Type</option>
										<option value="home">Home</option>
										<option value="business">Business</option>
										</select>
												
                                              </div>

                                                <label class="col-md-2 control-label">Mobile No.	 	 
                                                   <span class="required"> * </span>
                                                   </label>
												
												<div class="col-md-4">
                                                 <input placeholder = "05 xxx xxx xx"type="text" id="mobile-no" class="form-control" name="mobile-no" placeholder="" value="<?= $details['mobile_no'] ?? ''; ?>"
                                                 
                                                 pattern="[0-9]{10}"
													oninvalid="this.setCustomValidity('Please valid mobile number.')"
													oninput="setCustomValidity('')" required
                                                 > 

                                                </div>
                                               
										
										</div>
                                                
                                                
                                                <div class = "form-group">
                                                
                                                <label class="col-md-2 control-label">Landline No.	 	 
                                                   
                                                   <!--
                                                   <span class="required"> * </span>
                                                   -->
                                                   
                                                   </label>
                                                   
                                                  <div class="col-md-4">
                                                 <input type="text" id="land-line-no" class="form-control" name="land-line-no" placeholder="" value=""> 

                                                </div>
                                               
                                           
													
                                                </div>
                                                
                                                
                                                <hr />
                                                <div class = "form-group">
                                                
                                                <label class="col-md-2 control-label">
													
													<h5>Location.</h5>	 	 
                                                   
                                                   </label>
                                                   
                                                 
                                                
											
                                                </div>
                                                
                                                <div class = "form-group">
                                                   
												<label class="col-md-2 control-label">Latitude.	 	 
                                                   <span class="required"> * </span>
                                                   </label>
                                                   
                                                 <div class="col-md-3">
                                                  <input placeholder = ""type="text" id="latitude" class="form-control" name="latitude" placeholder="" value="<?= $details['latitude'] ?? ''; ?>"
                                                  pattern="(\+|-)?(?:90(?:(?:\.0{1,8})?)|(?:[0-9]|[1-8][0-9])(?:(?:\.[0-9]{1,8})?)"
													oninvalid="this.setCustomValidity('Please valid latitude.')"
													oninput="setCustomValidity('')" required
                                                  > 

                                                  </div>
                                                 
                                                  
                                                  <label class="col-md-2 control-label">Longitude	 	 
                                                   <span class="required"> * </span>
                                                   </label>
                                                   
                                                 <div class="col-md-3">
                                                  <input placeholder = ""type="text" id="longitude" class="form-control" name="longitude" placeholder="" value="<?= $details['longititude'] ?? ''; ?>"
                                                  
                                                  pattern="(\+|-)?(?:180(?:(?:\.0{1,8})?)|(?:[0-9]|[1-9][0-9]|1[0-7][0-9])(?:(?:\.[0-9]{1,8})?)"
													oninvalid="this.setCustomValidity('Please valid longitude.')"
													oninput="setCustomValidity('')" required
                                                  > 

                                                  
                                                  </div>
                                                 
                                                </div>
                                                <hr />
                                                
                                                <div class = "form-group">
                                                <label class="col-md-2 control-label">Shipping Note.	 	 
                                                   
                                                  
                                                  </label>
                                                   
                                                  <div class="col-md-10">
													<textarea name = "shipping-note" class = "form-control" ><?= $details['shipping_note'] ?? ''; ?></textarea>
                                                  </div>
                                                 
													
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                   <label class="col-md-4 control-label" style="color:red;" id="mx-fl-up"></label>
                                                </div>

                                                <div class="from-group"> 
													
													<div class="alert" id="file-alert-140"></div>
													
												</div>
												
												
												
                                                <div class="form-group">

                                              
                                                </div>
                                                
                                                <div class="form-group">
													
                                                   <label class="col-md-2 control-label">Upload Document</label>
                                                   <div class="col-xs-4">
													<input disabled type="file" name="option[]" accept = 'image/*'>
													 <small class="text-info"> Sorry for disabling, We are in the progress.</small>
                                                
                                                   </div>
                                                   
                                               
                                               
                                               
                                                </div>
                                                
                                                
                                                <div class="added-images" style="min-height:175px;" id="add-file-120">
                                                  
                                               
                                                </div>
                                                <!-- Here end-->
                                             
                                             
                                             
                                             
                                             
                                             </div>
                                          </div>
                                          
                                          
                                       <div class="portlet-title">
                                    <div class="message" id="message"></div>
                                    <div class="actions btn-set custom12">
                                       <button class="btn btn-secondary-outline" id="reset">
                                       <i class="fa fa-reply"></i> Reset</button>
                                       
                                       <button type="submit" class="btn" id="upload" name="submit">
                                       <i class="fa fa-check"></i> Upload</button>    
                                       
                                                                     
                                    </div>
                                 </div>
                           
                                       </div>
                                   
                                   
                                    </form></div>
                                 
                                 
                                 </div>
                                    </div>
                           </div>
                        </div>
                     </div>
                     </div>
                     </div>
					
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
            <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                <div class="page-quick-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                                <span class="badge badge-danger">2</span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-bell"></i> Alerts </a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-info"></i> Notifications </a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-speech"></i> Activities </a>
                                </li>
                                <li class="divider"></li>
                              
                              <!--
                                <li>
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-settings"></i> Settings </a>
                                </li>
                           -->
                           
                           
                           
                            </ul>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                            <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                                <h3 class="list-heading">Staff</h3>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">8</span>
                                        </div>
                                        
                                        
                                        
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Bob Nilson</h4>
                                            <div class="media-heading-sub"> Project Manager </div>
                                        </div>
                                    </li>
                                   
                                   
                                    <li class="media">
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Nick Larson</h4>
                                            <div class="media-heading-sub"> Art Director </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">3</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Deon Hubert</h4>
                                            <div class="media-heading-sub"> CTO </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ella Wong</h4>
                                            <div class="media-heading-sub"> CEO </div>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="list-heading">Customers</h3>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-warning">2</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Lara Kunis</h4>
                                            <div class="media-heading-sub"> CEO, Loop Inc </div>
                                            <div class="media-heading-small"> Last seen 03:10 AM </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="label label-sm label-success">new</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ernie Kyllonen</h4>
                                            <div class="media-heading-sub"> Project Manager,
                                                <br> SmartBizz PTL </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Lisa Stone</h4>
                                            <div class="media-heading-sub"> CTO, Keort Inc </div>
                                            <div class="media-heading-small"> Last seen 13:10 PM </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">7</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Deon Portalatin</h4>
                                            <div class="media-heading-sub"> CFO, H&D LTD </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Irina Savikova</h4>
                                            <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">4</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Maria Gomez</h4>
                                            <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                            <div class="media-heading-small"> Last seen 03:10 AM </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="page-quick-sidebar-item">
                                <div class="page-quick-sidebar-chat-user">
                                    <div class="page-quick-sidebar-nav">
                                        <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                            <i class="icon-arrow-left"></i>Back</a>
                                    </div>
                                    
                                    
                                    
                                    <div class="page-quick-sidebar-chat-user-messages">
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body"> When could you send me the report ? </span>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body"> Its almost done. I will be sending it shortly </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body"> Alright. Thanks! :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:16</span>
                                                <span class="body"> You are most welcome. Sorry for the delay. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
                                                <span class="body"> No probs. Just take your time :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:40</span>
                                                <span class="body"> Alright. I just emailed it to you. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
                                                <span class="body"> Great! Thanks. Will check it right away. </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:40</span>
                                                <span class="body"> Please let me know if you have any comment. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
                                                <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page-quick-sidebar-chat-user-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type a message here...">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn green">
                                                    <i class="icon-paper-clip"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                            <div class="page-quick-sidebar-alerts-list">
                                <h3 class="list-heading">General</h3>
                                <ul class="feeds list-items">
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 4 pending tasks.
                                                        <span class="label label-sm label-warning "> Take action
                                                            <i class="fa fa-share"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> Just now </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bar-chart-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> New order received with
                                                        <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 30 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Web server hardware needs to be upgraded.
                                                        <span class="label label-sm label-warning"> Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 2 hours </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-briefcase"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <h3 class="list-heading">System</h3>
                                <ul class="feeds list-items">
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 4 pending tasks.
                                                        <span class="label label-sm label-warning "> Take action
                                                            <i class="fa fa-share"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> Just now </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-danger">
                                                            <i class="fa fa-bar-chart-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> New order received with
                                                        <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 30 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-warning">
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Web server hardware needs to be upgraded.
                                                        <span class="label label-sm label-default "> Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 2 hours </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-briefcase"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                            <div class="page-quick-sidebar-settings-list">
                                <h3 class="list-heading">General Settings</h3>
                                <ul class="list-items borderless">
                                    <li> Enable Notifications
                                        <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                    <li> Allow Tracking
                                        <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                    <li> Log Errors
                                        <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                    <li> Auto Sumbit Issues
                                        <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                    <li> Enable SMS Alerts
                                        <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                </ul>
                                <h3 class="list-heading">System Settings</h3>
                                <ul class="list-items borderless">
                                    <li> Security Level
                                        <select class="form-control input-inline input-sm input-small">
                                            <option value="1">Normal</option>
                                            <option value="2" selected>Medium</option>
                                            <option value="e">High</option>
                                        </select>
                                    </li>
                                    <li> Failed Email Attempts
                                        <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                                    <li> Secondary SMTP Port
                                        <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                                    <li> Notify On System Error
                                        <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                    <li> Notify On SMTP Error
                                        <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                </ul>
                                <div class="inner-content">
                                    <button class="btn btn-success">
                                        <i class="icon-settings"></i> Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2014 &copy; Metronic by keenthemes.
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/bootstrap.min.js" type="text/javascript"></script>




<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/js.cookie.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.uniform.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/moment.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/daterangepicker.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/morris.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/raphael-min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.counterup.min.js" type="text/javascript"></script>
<!--
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/amcharts.js" type="text/javascript"></script>
-->
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/serial.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/pie.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/radar.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/light.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/patterns.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/chalk.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/ammap.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/worldLow.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/amstock.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/fullcalendar.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.flot.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.sparkline.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.vmap.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.vmap.russia.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.vmap.world.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.vmap.europe.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.vmap.germany.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.vmap.usa.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/jquery.vmap.sampledata.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/dashboard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/layout.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/demo.min.js" type="text/javascript"></script>
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/quick-sidebar.min.js" type="text/javascript"></script>
 <script src= "http://localhost/js/buyer.js" type="text/javascript"></script>

<script>

</script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
