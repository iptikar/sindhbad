<?php
session_start();

// Require the page 
require('../controller/controller.php');

// Check that valid session is set 

// Get the object 
$obj = new MarketPlace();

// If admin user is logged in
if($obj->IsUserLoggedInSeller() !== true) {
	
		// Set the new header 
		header('Location:http://localhost/login');
}

	/*
	 * 	This view running two methods 
	 *  Company selller information post 
	 * 	Individual seller post information 
	 * 
	 * */


	// To view these page for session must be start
?>

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
        <meta charset = "utf-8" />
            <title>Metronic | Dashboard</title>
            <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
            <meta content = "width = device-width, initial-scale = 1" name = "viewport" />
            <meta content = "" name = "description" />
            <meta content = "" name = "author" />
            <!-- BEGIN GLOBAL MANDATORY STYLES -->
            <link href = "http://fonts.googleapis.com/css?family = Open+Sans:400,300,600,700&subset = all" rel = "stylesheet" type = "text/css" />
            <link href = "css/font-awesome.min.css" rel = "stylesheet" type = "text/css" />
            <link href = "css/simple-line-icons.min.css" rel = "stylesheet" type = "text/css" />
            <link href = "css/bootstrap.min.css" rel = "stylesheet" type = "text/css" />
            <link href = "css/uniform.default.css" rel = "stylesheet" type = "text/css" />
            <link href = "css/bootstrap-switch.min.css" rel = "stylesheet" type = "text/css" />
            <!-- END GLOBAL MANDATORY STYLES -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <link href = "css/daterangepicker.min.css" rel = "stylesheet" type = "text/css" />
            <link href = "css/morris.css" rel = "stylesheet" type = "text/css" />
            <link href = "css/fullcalendar.min.css" rel = "stylesheet" type = "text/css" />
            <link href = "css/jqvmap.css" rel = "stylesheet" type = "text/css" />
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL STYLES -->
            <link href = "css/components.min.css" rel = "stylesheet" id = "style_components" type = "text/css" />
            <link href = "css/plugins.min.css" rel = "stylesheet" type = "text/css" />
            <!-- END THEME GLOBAL STYLES -->
            <!-- BEGIN THEME LAYOUT STYLES -->
            <link href = "css/layout.min.css" rel = "stylesheet" type = "text/css" />
            <link href = "css/light.min.css" rel = "stylesheet" type = "text/css" id = "style_color" />
            <link href = "css/custom.min.css" rel = "stylesheet" type = "text/css" />
            <!-- END THEME LAYOUT STYLES -->
            <link rel = "shortcut icon" href = "favicon.ico" />
            
            <link rel="stylesheet" href="../css/intlTelInput.css">
            
            
       </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
		
		
        <!-- BEGIN HEADER -->
        <?php include 'header.php'; ?>
     	
        
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>datetimepicker
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
                                <span class="title">Inventory</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="upload-the-product" class="nav-link ">
                                        <span class="title">Inventory Management</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_general.html" class="nav-link ">
                                        <span class="title">Item Listing</span>
                                    </a>
                                </li>
                             
							</ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title">Orders</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="components_date_time_pickers.html" class="nav-link ">
                                        <span class="title">Order Managment</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_color_pickers.html" class="nav-link ">
                                        <span class="title">Return Management</span>
                                        <span class="badge badge-danger">2</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_select2.html" class="nav-link ">
                                        <span class="title">Cancled Orders</span>
                                    </a>
                                </li>
                           </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Post Delivery</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="form_controls.html" class="nav-link ">
                                        <span class="title">VAT Invoice
                                            <br>Requests</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_controls_md.html" class="nav-link ">
                                        <span class="title">Complaints
                                            <br>Management</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_validation.html" class="nav-link ">
                                        <span class="title">Feedback</span>
                                    </a>
                                </li>	
                            </ul>
                        </li>
                      
						
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title">Financials</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">Account Summary</span>
                                        <span class="arrow"></span>
                                    </a>
                              </li>
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">Request Withdrawal</span>
                                        <span class="arrow"></span>
                                    </a>
                                 </li>
								
								<li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">Withdrawals Statuses</span>
                                        <span class="arrow"></span>
                                    </a>
                                 </li>
                            </ul>
                        </li>
						
                        <li class="nav-item  ">
                            <a href="?p=" class="nav-link nav-toggle">
                                <i class="icon-wallet"></i>
                                <span class="title">Performance</span>
                                
                            </a>
							
                         
							
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Sponsored Products</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="charts_amcharts.html" class="nav-link ">
                                        <span class="title">Manage Campaigns</span>
                                    </a>
                                </li>
                             </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-pointer"></i>
                                <span class="title">Promotions</span>
                                <span class="arrow"></span>
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
                            <h1>Dashboard
                                <small>dashboard & statistics</small>
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
                            <div class="btn-group btn-theme-panel">
                                <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-settings"></i>
                                </a>
                                <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <h3>THEME</h3>
                                            <ul class="theme-colors">
                                                <li class="theme-color theme-color-default" data-theme="default">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Dark Header</span>
                                                </li>
                                                <li class="theme-color theme-color-light active" data-theme="light">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Light Header</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                            <h3>LAYOUT</h3>
                                            <ul class="theme-settings">
                                                <li> Theme Style
                                                    <select class="layout-style-option form-control input-small input-sm">
                                                        <option value="square">Square corners</option>
                                                        <option value="rounded" selected="selected">Rounded corners</option>
                                                    </select>
                                                </li>
                                                <li> Layout
                                                    <select class="layout-option form-control input-small input-sm">
                                                        <option value="fluid" selected="selected">Fluid</option>
                                                        <option value="boxed">Boxed</option>
                                                    </select>
                                                </li>
                                                <li> Header
                                                    <select class="page-header-option form-control input-small input-sm">
                                                        <option value="fixed" selected="selected">Fixed</option>
                                                        <option value="default">Default</option>
                                                    </select>
                                                </li>
                                                <li> Top Dropdowns
                                                    <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                                        <option value="light">Light</option>
                                                        <option value="dark" selected="selected">Dark</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Mode
                                                    <select class="sidebar-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Menu
                                                    <select class="sidebar-menu-option form-control input-small input-sm">
                                                        <option value="accordion" selected="selected">Accordion</option>
                                                        <option value="hover">Hover</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Position
                                                    <select class="sidebar-pos-option form-control input-small input-sm">
                                                        <option value="left" selected="selected">Left</option>
                                                        <option value="right">Right</option>
                                                    </select>
                                                </li>
                                                <li> Footer
                                                    <select class="page-footer-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END THEME PANEL -->
                        </div>
                        <!-- END PAGE TOOLBAR -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Dashboard</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <!-- BEGIN DASHBOARD STATS 1-->
					
					 <div class="row">
                        
						 <div class = "col-md-12">
							 <!--
							<h4> Your Account is Incomplete!</h4> 
							<h6>Please verify you account</h6>
							
							-->
					
							
							
						<?php if($obj->SaveIndividualSeller(new IndividualSeller ) === true ) :?>
						
						<div class="alert alert-success" role="alert">
								Your information has been sucessfully saved !.
						</div>
						<?php endif; ?>
						
						
						<?php if($obj->SaveComapnyInformation(new CompanySeller ) === true ) :?>
						
						<div class="alert alert-success" role="alert">
								Your information has been sucessfully saved !.
						</div>
						<?php endif; ?>
						
						
							
						</div>
						
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						
					</div>
						 
					</div>
					
					
                    <div class = "row">
                        <div class = "col-md-12">
                           <div class = "form-horizontal form-row-seperated">
                              <div class = "portlet">
                                 <div class = "portlet-body">
                                    <div class = "tabbable-bordered">
                                       <ul class = "nav nav-tabs">
                                          <li class = "active">
                                             <a href = "#tab_general" data-toggle = "tab"> General </a>
                                          </li>
                                          
                                         
                                         
                                       </ul>
                                       
                                       <?php 
                                       // <?php echo basename($_SERVER['PHP_SELF'],'.php');?>
                                       
                                        

                                       
                                       <div class = "tab-content" id = "form_sample_1">
										  
										  
										<!-- Check if user is alaredy filled the profile form -->
										<?php if($obj->IsProfileExists() !== false ):?>
										
										<!-- Check weather seller is individual or comapany -->
										
										<?php
										
										
										$individ = $obj->IsProfileExists()['result'];
										
										
										?>
										
										<?php if ($obj->IsProfileExists()['seller_type'] === 'individual') :?>
										
										<!--
										<h1>Show individual form </h1>
										-->
										
									
										
										<div id="show_individual_form">
									<form action="my-profile" method="POST" enctype="multipart/form-data" style="">
								
									<?php if(isset($_POST['save_individual_form'])) :?>
									
									
										
										<?php if(isset($a)) :?>
										
										<?php endif; ?>
											<?php if(IndividualSeller::UpdateIndividualSellerDetails1() === true ) :?>
											
											<div class="alert alert-success" role="alert">
												Information updated sucessfully !.
											</div>
											<?php endif; ?>
									
									
									<?php endif; ?>
									

                                        
                                        <div class="form-group">
                                         
                                          <label class="col-md-2 control-label">Country
                                          </label>
										
										<div class="col-md-4">
										<select class="form-control" id="country" name="country" oninvalid="this.setCustomValidity('Please select country of orgin.')" oninput="setCustomValidity('')" required="">
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
                                        
                                  
                                        
                                        <label class="col-md-2 control-label">City
                                        </label>
                                        
                                        <div class="col-md-4">
													   
                                       <input type="text" class="form-control" name="city" id="city" value="<?= $individ['city']?>" oninvalid="this.setCustomValidity('Please Enter date available city.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                        
                                         </div>
                                        
                                        
                                        
                                       <div class="form-group">
                                         
                                          <label class="col-md-2 control-label">State/ Region / Province
                                           </label>
                                          
                                          
                                          <div class="col-md-4">
													   
                                       <input type="text" class="form-control" name="state_region_province" id="state_region_province" value = "<?= $individ['state_region_province']?>"> 

                                        </div>
                                            
                                            
                                           <label class="col-md-2 control-label">Zip/ Post Code
                                           </label>
                                          
                                          
                                          <div class="col-md-4">
													   
                                       <input type="text" class="form-control" name="post_zip_code" id="post_zip_code"
                                       value = "<?= $individ['post_zip_code'] ?? ''?>" >
                                       
                                        

                                        </div>
                                            
                                            
                                                  
                                         
                                         </div>

                                       <div class="form-group">
                                         
                                          <label class="col-md-2 control-label">Land Line No.
                                           </label>
                                          
                                          
                                          <div class="col-md-4">
													   
                                      <div class="intl-tel-input allow-dropdown">
	<div class="flag-container">
		<div class="selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0" title="United States: +1">
			<div class="iti-flag us"></div>
			<div class="iti-arrow"></div>
		</div>
		<ul class="country-list hide" id="country-listbox" aria-expanded="false" role="listbox" aria-activedescendant="iti-item-us">
			<li class="country preferred active" id="iti-item-us" role="option" data-dial-code="1" data-country-code="us" aria-selected="true">
				<div class="flag-box">
					<div class="iti-flag us"></div>
				</div>
				<span class="country-name">United States</span>
				<span class="dial-code">+1</span>
			</li>
			<li class="country preferred" id="iti-item-gb" role="option" data-dial-code="44" data-country-code="gb">
				<div class="flag-box">
					<div class="iti-flag gb"></div>
				</div>
				<span class="country-name">United Kingdom</span>
				<span class="dial-code">+44</span>
			</li>
			<li class="divider" role="separator" aria-disabled="true"></li>
			<li class="country standard" id="iti-item-af" role="option" data-dial-code="93" data-country-code="af">
				<div class="flag-box">
					<div class="iti-flag af"></div>
				</div>
				<span class="country-name">Afghanistan (‫افغانستان‬‎)</span>
				<span class="dial-code">+93</span>
			</li>
			<li class="country standard" id="iti-item-al" role="option" data-dial-code="355" data-country-code="al">
				<div class="flag-box">
					<div class="iti-flag al"></div>
				</div>
				<span class="country-name">Albania (Shqipëri)</span>
				<span class="dial-code">+355</span>
			</li>
			<li class="country standard" id="iti-item-dz" role="option" data-dial-code="213" data-country-code="dz">
				<div class="flag-box">
					<div class="iti-flag dz"></div>
				</div>
				<span class="country-name">Algeria (‫الجزائر‬‎)</span>
				<span class="dial-code">+213</span>
			</li>
			<li class="country standard" id="iti-item-as" role="option" data-dial-code="1684" data-country-code="as">
				<div class="flag-box">
					<div class="iti-flag as"></div>
				</div>
				<span class="country-name">American Samoa</span>
				<span class="dial-code">+1684</span>
			</li>
			<li class="country standard" id="iti-item-ad" role="option" data-dial-code="376" data-country-code="ad">
				<div class="flag-box">
					<div class="iti-flag ad"></div>
				</div>
				<span class="country-name">Andorra</span>
				<span class="dial-code">+376</span>
			</li>
			<li class="country standard" id="iti-item-ao" role="option" data-dial-code="244" data-country-code="ao">
				<div class="flag-box">
					<div class="iti-flag ao"></div>
				</div>
				<span class="country-name">Angola</span>
				<span class="dial-code">+244</span>
			</li>
			<li class="country standard" id="iti-item-ai" role="option" data-dial-code="1264" data-country-code="ai">
				<div class="flag-box">
					<div class="iti-flag ai"></div>
				</div>
				<span class="country-name">Anguilla</span>
				<span class="dial-code">+1264</span>
			</li>
			<li class="country standard" id="iti-item-ag" role="option" data-dial-code="1268" data-country-code="ag">
				<div class="flag-box">
					<div class="iti-flag ag"></div>
				</div>
				<span class="country-name">Antigua and Barbuda</span>
				<span class="dial-code">+1268</span>
			</li>
			<li class="country standard" id="iti-item-ar" role="option" data-dial-code="54" data-country-code="ar">
				<div class="flag-box">
					<div class="iti-flag ar"></div>
				</div>
				<span class="country-name">Argentina</span>
				<span class="dial-code">+54</span>
			</li>
			<li class="country standard" id="iti-item-am" role="option" data-dial-code="374" data-country-code="am">
				<div class="flag-box">
					<div class="iti-flag am"></div>
				</div>
				<span class="country-name">Armenia (Հայաստան)</span>
				<span class="dial-code">+374</span>
			</li>
			<li class="country standard" id="iti-item-aw" role="option" data-dial-code="297" data-country-code="aw">
				<div class="flag-box">
					<div class="iti-flag aw"></div>
				</div>
				<span class="country-name">Aruba</span>
				<span class="dial-code">+297</span>
			</li>
			<li class="country standard" id="iti-item-au" role="option" data-dial-code="61" data-country-code="au">
				<div class="flag-box">
					<div class="iti-flag au"></div>
				</div>
				<span class="country-name">Australia</span>
				<span class="dial-code">+61</span>
			</li>
			<li class="country standard" id="iti-item-at" role="option" data-dial-code="43" data-country-code="at">
				<div class="flag-box">
					<div class="iti-flag at"></div>
				</div>
				<span class="country-name">Austria (Österreich)</span>
				<span class="dial-code">+43</span>
			</li>
			<li class="country standard" id="iti-item-az" role="option" data-dial-code="994" data-country-code="az">
				<div class="flag-box">
					<div class="iti-flag az"></div>
				</div>
				<span class="country-name">Azerbaijan (Azərbaycan)</span>
				<span class="dial-code">+994</span>
			</li>
			<li class="country standard" id="iti-item-bs" role="option" data-dial-code="1242" data-country-code="bs">
				<div class="flag-box">
					<div class="iti-flag bs"></div>
				</div>
				<span class="country-name">Bahamas</span>
				<span class="dial-code">+1242</span>
			</li>
			<li class="country standard" id="iti-item-bh" role="option" data-dial-code="973" data-country-code="bh">
				<div class="flag-box">
					<div class="iti-flag bh"></div>
				</div>
				<span class="country-name">Bahrain (‫البحرين‬‎)</span>
				<span class="dial-code">+973</span>
			</li>
			<li class="country standard" id="iti-item-bd" role="option" data-dial-code="880" data-country-code="bd">
				<div class="flag-box">
					<div class="iti-flag bd"></div>
				</div>
				<span class="country-name">Bangladesh (বাংলাদেশ)</span>
				<span class="dial-code">+880</span>
			</li>
			<li class="country standard" id="iti-item-bb" role="option" data-dial-code="1246" data-country-code="bb">
				<div class="flag-box">
					<div class="iti-flag bb"></div>
				</div>
				<span class="country-name">Barbados</span>
				<span class="dial-code">+1246</span>
			</li>
			<li class="country standard" id="iti-item-by" role="option" data-dial-code="375" data-country-code="by">
				<div class="flag-box">
					<div class="iti-flag by"></div>
				</div>
				<span class="country-name">Belarus (Беларусь)</span>
				<span class="dial-code">+375</span>
			</li>
			<li class="country standard" id="iti-item-be" role="option" data-dial-code="32" data-country-code="be">
				<div class="flag-box">
					<div class="iti-flag be"></div>
				</div>
				<span class="country-name">Belgium (België)</span>
				<span class="dial-code">+32</span>
			</li>
			<li class="country standard" id="iti-item-bz" role="option" data-dial-code="501" data-country-code="bz">
				<div class="flag-box">
					<div class="iti-flag bz"></div>
				</div>
				<span class="country-name">Belize</span>
				<span class="dial-code">+501</span>
			</li>
			<li class="country standard" id="iti-item-bj" role="option" data-dial-code="229" data-country-code="bj">
				<div class="flag-box">
					<div class="iti-flag bj"></div>
				</div>
				<span class="country-name">Benin (Bénin)</span>
				<span class="dial-code">+229</span>
			</li>
			<li class="country standard" id="iti-item-bm" role="option" data-dial-code="1441" data-country-code="bm">
				<div class="flag-box">
					<div class="iti-flag bm"></div>
				</div>
				<span class="country-name">Bermuda</span>
				<span class="dial-code">+1441</span>
			</li>
			<li class="country standard" id="iti-item-bt" role="option" data-dial-code="975" data-country-code="bt">
				<div class="flag-box">
					<div class="iti-flag bt"></div>
				</div>
				<span class="country-name">Bhutan (འབྲུག)</span>
				<span class="dial-code">+975</span>
			</li>
			<li class="country standard" id="iti-item-bo" role="option" data-dial-code="591" data-country-code="bo">
				<div class="flag-box">
					<div class="iti-flag bo"></div>
				</div>
				<span class="country-name">Bolivia</span>
				<span class="dial-code">+591</span>
			</li>
			<li class="country standard" id="iti-item-ba" role="option" data-dial-code="387" data-country-code="ba">
				<div class="flag-box">
					<div class="iti-flag ba"></div>
				</div>
				<span class="country-name">Bosnia and Herzegovina (Босна и Херцеговина)</span>
				<span class="dial-code">+387</span>
			</li>
			<li class="country standard" id="iti-item-bw" role="option" data-dial-code="267" data-country-code="bw">
				<div class="flag-box">
					<div class="iti-flag bw"></div>
				</div>
				<span class="country-name">Botswana</span>
				<span class="dial-code">+267</span>
			</li>
			<li class="country standard" id="iti-item-br" role="option" data-dial-code="55" data-country-code="br">
				<div class="flag-box">
					<div class="iti-flag br"></div>
				</div>
				<span class="country-name">Brazil (Brasil)</span>
				<span class="dial-code">+55</span>
			</li>
			<li class="country standard" id="iti-item-io" role="option" data-dial-code="246" data-country-code="io">
				<div class="flag-box">
					<div class="iti-flag io"></div>
				</div>
				<span class="country-name">British Indian Ocean Territory</span>
				<span class="dial-code">+246</span>
			</li>
			<li class="country standard" id="iti-item-vg" role="option" data-dial-code="1284" data-country-code="vg">
				<div class="flag-box">
					<div class="iti-flag vg"></div>
				</div>
				<span class="country-name">British Virgin Islands</span>
				<span class="dial-code">+1284</span>
			</li>
			<li class="country standard" id="iti-item-bn" role="option" data-dial-code="673" data-country-code="bn">
				<div class="flag-box">
					<div class="iti-flag bn"></div>
				</div>
				<span class="country-name">Brunei</span>
				<span class="dial-code">+673</span>
			</li>
			<li class="country standard" id="iti-item-bg" role="option" data-dial-code="359" data-country-code="bg">
				<div class="flag-box">
					<div class="iti-flag bg"></div>
				</div>
				<span class="country-name">Bulgaria (България)</span>
				<span class="dial-code">+359</span>
			</li>
			<li class="country standard" id="iti-item-bf" role="option" data-dial-code="226" data-country-code="bf">
				<div class="flag-box">
					<div class="iti-flag bf"></div>
				</div>
				<span class="country-name">Burkina Faso</span>
				<span class="dial-code">+226</span>
			</li>
			<li class="country standard" id="iti-item-bi" role="option" data-dial-code="257" data-country-code="bi">
				<div class="flag-box">
					<div class="iti-flag bi"></div>
				</div>
				<span class="country-name">Burundi (Uburundi)</span>
				<span class="dial-code">+257</span>
			</li>
			<li class="country standard" id="iti-item-kh" role="option" data-dial-code="855" data-country-code="kh">
				<div class="flag-box">
					<div class="iti-flag kh"></div>
				</div>
				<span class="country-name">Cambodia (កម្ពុជា)</span>
				<span class="dial-code">+855</span>
			</li>
			<li class="country standard" id="iti-item-cm" role="option" data-dial-code="237" data-country-code="cm">
				<div class="flag-box">
					<div class="iti-flag cm"></div>
				</div>
				<span class="country-name">Cameroon (Cameroun)</span>
				<span class="dial-code">+237</span>
			</li>
			<li class="country standard" id="iti-item-ca" role="option" data-dial-code="1" data-country-code="ca">
				<div class="flag-box">
					<div class="iti-flag ca"></div>
				</div>
				<span class="country-name">Canada</span>
				<span class="dial-code">+1</span>
			</li>
			<li class="country standard" id="iti-item-cv" role="option" data-dial-code="238" data-country-code="cv">
				<div class="flag-box">
					<div class="iti-flag cv"></div>
				</div>
				<span class="country-name">Cape Verde (Kabu Verdi)</span>
				<span class="dial-code">+238</span>
			</li>
			<li class="country standard" id="iti-item-bq" role="option" data-dial-code="599" data-country-code="bq">
				<div class="flag-box">
					<div class="iti-flag bq"></div>
				</div>
				<span class="country-name">Caribbean Netherlands</span>
				<span class="dial-code">+599</span>
			</li>
			<li class="country standard" id="iti-item-ky" role="option" data-dial-code="1345" data-country-code="ky">
				<div class="flag-box">
					<div class="iti-flag ky"></div>
				</div>
				<span class="country-name">Cayman Islands</span>
				<span class="dial-code">+1345</span>
			</li>
			<li class="country standard" id="iti-item-cf" role="option" data-dial-code="236" data-country-code="cf">
				<div class="flag-box">
					<div class="iti-flag cf"></div>
				</div>
				<span class="country-name">Central African Republic (République centrafricaine)</span>
				<span class="dial-code">+236</span>
			</li>
			<li class="country standard" id="iti-item-td" role="option" data-dial-code="235" data-country-code="td">
				<div class="flag-box">
					<div class="iti-flag td"></div>
				</div>
				<span class="country-name">Chad (Tchad)</span>
				<span class="dial-code">+235</span>
			</li>
			<li class="country standard" id="iti-item-cl" role="option" data-dial-code="56" data-country-code="cl">
				<div class="flag-box">
					<div class="iti-flag cl"></div>
				</div>
				<span class="country-name">Chile</span>
				<span class="dial-code">+56</span>
			</li>
			<li class="country standard" id="iti-item-cn" role="option" data-dial-code="86" data-country-code="cn">
				<div class="flag-box">
					<div class="iti-flag cn"></div>
				</div>
				<span class="country-name">China (中国)</span>
				<span class="dial-code">+86</span>
			</li>
			<li class="country standard" id="iti-item-cx" role="option" data-dial-code="61" data-country-code="cx">
				<div class="flag-box">
					<div class="iti-flag cx"></div>
				</div>
				<span class="country-name">Christmas Island</span>
				<span class="dial-code">+61</span>
			</li>
			<li class="country standard" id="iti-item-cc" role="option" data-dial-code="61" data-country-code="cc">
				<div class="flag-box">
					<div class="iti-flag cc"></div>
				</div>
				<span class="country-name">Cocos (Keeling) Islands</span>
				<span class="dial-code">+61</span>
			</li>
			<li class="country standard" id="iti-item-co" role="option" data-dial-code="57" data-country-code="co">
				<div class="flag-box">
					<div class="iti-flag co"></div>
				</div>
				<span class="country-name">Colombia</span>
				<span class="dial-code">+57</span>
			</li>
			<li class="country standard" id="iti-item-km" role="option" data-dial-code="269" data-country-code="km">
				<div class="flag-box">
					<div class="iti-flag km"></div>
				</div>
				<span class="country-name">Comoros (‫جزر القمر‬‎)</span>
				<span class="dial-code">+269</span>
			</li>
			<li class="country standard" id="iti-item-cd" role="option" data-dial-code="243" data-country-code="cd">
				<div class="flag-box">
					<div class="iti-flag cd"></div>
				</div>
				<span class="country-name">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</span>
				<span class="dial-code">+243</span>
			</li>
			<li class="country standard" id="iti-item-cg" role="option" data-dial-code="242" data-country-code="cg">
				<div class="flag-box">
					<div class="iti-flag cg"></div>
				</div>
				<span class="country-name">Congo (Republic) (Congo-Brazzaville)</span>
				<span class="dial-code">+242</span>
			</li>
			<li class="country standard" id="iti-item-ck" role="option" data-dial-code="682" data-country-code="ck">
				<div class="flag-box">
					<div class="iti-flag ck"></div>
				</div>
				<span class="country-name">Cook Islands</span>
				<span class="dial-code">+682</span>
			</li>
			<li class="country standard" id="iti-item-cr" role="option" data-dial-code="506" data-country-code="cr">
				<div class="flag-box">
					<div class="iti-flag cr"></div>
				</div>
				<span class="country-name">Costa Rica</span>
				<span class="dial-code">+506</span>
			</li>
			<li class="country standard" id="iti-item-ci" role="option" data-dial-code="225" data-country-code="ci">
				<div class="flag-box">
					<div class="iti-flag ci"></div>
				</div>
				<span class="country-name">Côte d’Ivoire</span>
				<span class="dial-code">+225</span>
			</li>
			<li class="country standard" id="iti-item-hr" role="option" data-dial-code="385" data-country-code="hr">
				<div class="flag-box">
					<div class="iti-flag hr"></div>
				</div>
				<span class="country-name">Croatia (Hrvatska)</span>
				<span class="dial-code">+385</span>
			</li>
			<li class="country standard" id="iti-item-cu" role="option" data-dial-code="53" data-country-code="cu">
				<div class="flag-box">
					<div class="iti-flag cu"></div>
				</div>
				<span class="country-name">Cuba</span>
				<span class="dial-code">+53</span>
			</li>
			<li class="country standard" id="iti-item-cw" role="option" data-dial-code="599" data-country-code="cw">
				<div class="flag-box">
					<div class="iti-flag cw"></div>
				</div>
				<span class="country-name">Curaçao</span>
				<span class="dial-code">+599</span>
			</li>
			<li class="country standard" id="iti-item-cy" role="option" data-dial-code="357" data-country-code="cy">
				<div class="flag-box">
					<div class="iti-flag cy"></div>
				</div>
				<span class="country-name">Cyprus (Κύπρος)</span>
				<span class="dial-code">+357</span>
			</li>
			<li class="country standard" id="iti-item-cz" role="option" data-dial-code="420" data-country-code="cz">
				<div class="flag-box">
					<div class="iti-flag cz"></div>
				</div>
				<span class="country-name">Czech Republic (Česká republika)</span>
				<span class="dial-code">+420</span>
			</li>
			<li class="country standard" id="iti-item-dk" role="option" data-dial-code="45" data-country-code="dk">
				<div class="flag-box">
					<div class="iti-flag dk"></div>
				</div>
				<span class="country-name">Denmark (Danmark)</span>
				<span class="dial-code">+45</span>
			</li>
			<li class="country standard" id="iti-item-dj" role="option" data-dial-code="253" data-country-code="dj">
				<div class="flag-box">
					<div class="iti-flag dj"></div>
				</div>
				<span class="country-name">Djibouti</span>
				<span class="dial-code">+253</span>
			</li>
			<li class="country standard" id="iti-item-dm" role="option" data-dial-code="1767" data-country-code="dm">
				<div class="flag-box">
					<div class="iti-flag dm"></div>
				</div>
				<span class="country-name">Dominica</span>
				<span class="dial-code">+1767</span>
			</li>
			<li class="country standard" id="iti-item-do" role="option" data-dial-code="1" data-country-code="do">
				<div class="flag-box">
					<div class="iti-flag do"></div>
				</div>
				<span class="country-name">Dominican Republic (República Dominicana)</span>
				<span class="dial-code">+1</span>
			</li>
			<li class="country standard" id="iti-item-ec" role="option" data-dial-code="593" data-country-code="ec">
				<div class="flag-box">
					<div class="iti-flag ec"></div>
				</div>
				<span class="country-name">Ecuador</span>
				<span class="dial-code">+593</span>
			</li>
			<li class="country standard" id="iti-item-eg" role="option" data-dial-code="20" data-country-code="eg">
				<div class="flag-box">
					<div class="iti-flag eg"></div>
				</div>
				<span class="country-name">Egypt (‫مصر‬‎)</span>
				<span class="dial-code">+20</span>
			</li>
			<li class="country standard" id="iti-item-sv" role="option" data-dial-code="503" data-country-code="sv">
				<div class="flag-box">
					<div class="iti-flag sv"></div>
				</div>
				<span class="country-name">El Salvador</span>
				<span class="dial-code">+503</span>
			</li>
			<li class="country standard" id="iti-item-gq" role="option" data-dial-code="240" data-country-code="gq">
				<div class="flag-box">
					<div class="iti-flag gq"></div>
				</div>
				<span class="country-name">Equatorial Guinea (Guinea Ecuatorial)</span>
				<span class="dial-code">+240</span>
			</li>
			<li class="country standard" id="iti-item-er" role="option" data-dial-code="291" data-country-code="er">
				<div class="flag-box">
					<div class="iti-flag er"></div>
				</div>
				<span class="country-name">Eritrea</span>
				<span class="dial-code">+291</span>
			</li>
			<li class="country standard" id="iti-item-ee" role="option" data-dial-code="372" data-country-code="ee">
				<div class="flag-box">
					<div class="iti-flag ee"></div>
				</div>
				<span class="country-name">Estonia (Eesti)</span>
				<span class="dial-code">+372</span>
			</li>
			<li class="country standard" id="iti-item-et" role="option" data-dial-code="251" data-country-code="et">
				<div class="flag-box">
					<div class="iti-flag et"></div>
				</div>
				<span class="country-name">Ethiopia</span>
				<span class="dial-code">+251</span>
			</li>
			<li class="country standard" id="iti-item-fk" role="option" data-dial-code="500" data-country-code="fk">
				<div class="flag-box">
					<div class="iti-flag fk"></div>
				</div>
				<span class="country-name">Falkland Islands (Islas Malvinas)</span>
				<span class="dial-code">+500</span>
			</li>
			<li class="country standard" id="iti-item-fo" role="option" data-dial-code="298" data-country-code="fo">
				<div class="flag-box">
					<div class="iti-flag fo"></div>
				</div>
				<span class="country-name">Faroe Islands (Føroyar)</span>
				<span class="dial-code">+298</span>
			</li>
			<li class="country standard" id="iti-item-fj" role="option" data-dial-code="679" data-country-code="fj">
				<div class="flag-box">
					<div class="iti-flag fj"></div>
				</div>
				<span class="country-name">Fiji</span>
				<span class="dial-code">+679</span>
			</li>
			<li class="country standard" id="iti-item-fi" role="option" data-dial-code="358" data-country-code="fi">
				<div class="flag-box">
					<div class="iti-flag fi"></div>
				</div>
				<span class="country-name">Finland (Suomi)</span>
				<span class="dial-code">+358</span>
			</li>
			<li class="country standard" id="iti-item-fr" role="option" data-dial-code="33" data-country-code="fr">
				<div class="flag-box">
					<div class="iti-flag fr"></div>
				</div>
				<span class="country-name">France</span>
				<span class="dial-code">+33</span>
			</li>
			<li class="country standard" id="iti-item-gf" role="option" data-dial-code="594" data-country-code="gf">
				<div class="flag-box">
					<div class="iti-flag gf"></div>
				</div>
				<span class="country-name">French Guiana (Guyane française)</span>
				<span class="dial-code">+594</span>
			</li>
			<li class="country standard" id="iti-item-pf" role="option" data-dial-code="689" data-country-code="pf">
				<div class="flag-box">
					<div class="iti-flag pf"></div>
				</div>
				<span class="country-name">French Polynesia (Polynésie française)</span>
				<span class="dial-code">+689</span>
			</li>
			<li class="country standard" id="iti-item-ga" role="option" data-dial-code="241" data-country-code="ga">
				<div class="flag-box">
					<div class="iti-flag ga"></div>
				</div>
				<span class="country-name">Gabon</span>
				<span class="dial-code">+241</span>
			</li>
			<li class="country standard" id="iti-item-gm" role="option" data-dial-code="220" data-country-code="gm">
				<div class="flag-box">
					<div class="iti-flag gm"></div>
				</div>
				<span class="country-name">Gambia</span>
				<span class="dial-code">+220</span>
			</li>
			<li class="country standard" id="iti-item-ge" role="option" data-dial-code="995" data-country-code="ge">
				<div class="flag-box">
					<div class="iti-flag ge"></div>
				</div>
				<span class="country-name">Georgia (საქართველო)</span>
				<span class="dial-code">+995</span>
			</li>
			<li class="country standard" id="iti-item-de" role="option" data-dial-code="49" data-country-code="de">
				<div class="flag-box">
					<div class="iti-flag de"></div>
				</div>
				<span class="country-name">Germany (Deutschland)</span>
				<span class="dial-code">+49</span>
			</li>
			<li class="country standard" id="iti-item-gh" role="option" data-dial-code="233" data-country-code="gh">
				<div class="flag-box">
					<div class="iti-flag gh"></div>
				</div>
				<span class="country-name">Ghana (Gaana)</span>
				<span class="dial-code">+233</span>
			</li>
			<li class="country standard" id="iti-item-gi" role="option" data-dial-code="350" data-country-code="gi">
				<div class="flag-box">
					<div class="iti-flag gi"></div>
				</div>
				<span class="country-name">Gibraltar</span>
				<span class="dial-code">+350</span>
			</li>
			<li class="country standard" id="iti-item-gr" role="option" data-dial-code="30" data-country-code="gr">
				<div class="flag-box">
					<div class="iti-flag gr"></div>
				</div>
				<span class="country-name">Greece (Ελλάδα)</span>
				<span class="dial-code">+30</span>
			</li>
			<li class="country standard" id="iti-item-gl" role="option" data-dial-code="299" data-country-code="gl">
				<div class="flag-box">
					<div class="iti-flag gl"></div>
				</div>
				<span class="country-name">Greenland (Kalaallit Nunaat)</span>
				<span class="dial-code">+299</span>
			</li>
			<li class="country standard" id="iti-item-gd" role="option" data-dial-code="1473" data-country-code="gd">
				<div class="flag-box">
					<div class="iti-flag gd"></div>
				</div>
				<span class="country-name">Grenada</span>
				<span class="dial-code">+1473</span>
			</li>
			<li class="country standard" id="iti-item-gp" role="option" data-dial-code="590" data-country-code="gp">
				<div class="flag-box">
					<div class="iti-flag gp"></div>
				</div>
				<span class="country-name">Guadeloupe</span>
				<span class="dial-code">+590</span>
			</li>
			<li class="country standard" id="iti-item-gu" role="option" data-dial-code="1671" data-country-code="gu">
				<div class="flag-box">
					<div class="iti-flag gu"></div>
				</div>
				<span class="country-name">Guam</span>
				<span class="dial-code">+1671</span>
			</li>
			<li class="country standard" id="iti-item-gt" role="option" data-dial-code="502" data-country-code="gt">
				<div class="flag-box">
					<div class="iti-flag gt"></div>
				</div>
				<span class="country-name">Guatemala</span>
				<span class="dial-code">+502</span>
			</li>
			<li class="country standard" id="iti-item-gg" role="option" data-dial-code="44" data-country-code="gg">
				<div class="flag-box">
					<div class="iti-flag gg"></div>
				</div>
				<span class="country-name">Guernsey</span>
				<span class="dial-code">+44</span>
			</li>
			<li class="country standard" id="iti-item-gn" role="option" data-dial-code="224" data-country-code="gn">
				<div class="flag-box">
					<div class="iti-flag gn"></div>
				</div>
				<span class="country-name">Guinea (Guinée)</span>
				<span class="dial-code">+224</span>
			</li>
			<li class="country standard" id="iti-item-gw" role="option" data-dial-code="245" data-country-code="gw">
				<div class="flag-box">
					<div class="iti-flag gw"></div>
				</div>
				<span class="country-name">Guinea-Bissau (Guiné Bissau)</span>
				<span class="dial-code">+245</span>
			</li>
			<li class="country standard" id="iti-item-gy" role="option" data-dial-code="592" data-country-code="gy">
				<div class="flag-box">
					<div class="iti-flag gy"></div>
				</div>
				<span class="country-name">Guyana</span>
				<span class="dial-code">+592</span>
			</li>
			<li class="country standard" id="iti-item-ht" role="option" data-dial-code="509" data-country-code="ht">
				<div class="flag-box">
					<div class="iti-flag ht"></div>
				</div>
				<span class="country-name">Haiti</span>
				<span class="dial-code">+509</span>
			</li>
			<li class="country standard" id="iti-item-hn" role="option" data-dial-code="504" data-country-code="hn">
				<div class="flag-box">
					<div class="iti-flag hn"></div>
				</div>
				<span class="country-name">Honduras</span>
				<span class="dial-code">+504</span>
			</li>
			<li class="country standard" id="iti-item-hk" role="option" data-dial-code="852" data-country-code="hk">
				<div class="flag-box">
					<div class="iti-flag hk"></div>
				</div>
				<span class="country-name">Hong Kong (香港)</span>
				<span class="dial-code">+852</span>
			</li>
			<li class="country standard" id="iti-item-hu" role="option" data-dial-code="36" data-country-code="hu">
				<div class="flag-box">
					<div class="iti-flag hu"></div>
				</div>
				<span class="country-name">Hungary (Magyarország)</span>
				<span class="dial-code">+36</span>
			</li>
			<li class="country standard" id="iti-item-is" role="option" data-dial-code="354" data-country-code="is">
				<div class="flag-box">
					<div class="iti-flag is"></div>
				</div>
				<span class="country-name">Iceland (Ísland)</span>
				<span class="dial-code">+354</span>
			</li>
			<li class="country standard" id="iti-item-in" role="option" data-dial-code="91" data-country-code="in">
				<div class="flag-box">
					<div class="iti-flag in"></div>
				</div>
				<span class="country-name">India (भारत)</span>
				<span class="dial-code">+91</span>
			</li>
			<li class="country standard" id="iti-item-id" role="option" data-dial-code="62" data-country-code="id">
				<div class="flag-box">
					<div class="iti-flag id"></div>
				</div>
				<span class="country-name">Indonesia</span>
				<span class="dial-code">+62</span>
			</li>
			<li class="country standard" id="iti-item-ir" role="option" data-dial-code="98" data-country-code="ir">
				<div class="flag-box">
					<div class="iti-flag ir"></div>
				</div>
				<span class="country-name">Iran (‫ایران‬‎)</span>
				<span class="dial-code">+98</span>
			</li>
			<li class="country standard" id="iti-item-iq" role="option" data-dial-code="964" data-country-code="iq">
				<div class="flag-box">
					<div class="iti-flag iq"></div>
				</div>
				<span class="country-name">Iraq (‫العراق‬‎)</span>
				<span class="dial-code">+964</span>
			</li>
			<li class="country standard" id="iti-item-ie" role="option" data-dial-code="353" data-country-code="ie">
				<div class="flag-box">
					<div class="iti-flag ie"></div>
				</div>
				<span class="country-name">Ireland</span>
				<span class="dial-code">+353</span>
			</li>
			<li class="country standard" id="iti-item-im" role="option" data-dial-code="44" data-country-code="im">
				<div class="flag-box">
					<div class="iti-flag im"></div>
				</div>
				<span class="country-name">Isle of Man</span>
				<span class="dial-code">+44</span>
			</li>
			<li class="country standard" id="iti-item-il" role="option" data-dial-code="972" data-country-code="il">
				<div class="flag-box">
					<div class="iti-flag il"></div>
				</div>
				<span class="country-name">Israel (‫ישראל‬‎)</span>
				<span class="dial-code">+972</span>
			</li>
			<li class="country standard" id="iti-item-it" role="option" data-dial-code="39" data-country-code="it">
				<div class="flag-box">
					<div class="iti-flag it"></div>
				</div>
				<span class="country-name">Italy (Italia)</span>
				<span class="dial-code">+39</span>
			</li>
			<li class="country standard" id="iti-item-jm" role="option" data-dial-code="1" data-country-code="jm">
				<div class="flag-box">
					<div class="iti-flag jm"></div>
				</div>
				<span class="country-name">Jamaica</span>
				<span class="dial-code">+1</span>
			</li>
			<li class="country standard" id="iti-item-jp" role="option" data-dial-code="81" data-country-code="jp">
				<div class="flag-box">
					<div class="iti-flag jp"></div>
				</div>
				<span class="country-name">Japan (日本)</span>
				<span class="dial-code">+81</span>
			</li>
			<li class="country standard" id="iti-item-je" role="option" data-dial-code="44" data-country-code="je">
				<div class="flag-box">
					<div class="iti-flag je"></div>
				</div>
				<span class="country-name">Jersey</span>
				<span class="dial-code">+44</span>
			</li>
			<li class="country standard" id="iti-item-jo" role="option" data-dial-code="962" data-country-code="jo">
				<div class="flag-box">
					<div class="iti-flag jo"></div>
				</div>
				<span class="country-name">Jordan (‫الأردن‬‎)</span>
				<span class="dial-code">+962</span>
			</li>
			<li class="country standard" id="iti-item-kz" role="option" data-dial-code="7" data-country-code="kz">
				<div class="flag-box">
					<div class="iti-flag kz"></div>
				</div>
				<span class="country-name">Kazakhstan (Казахстан)</span>
				<span class="dial-code">+7</span>
			</li>
			<li class="country standard" id="iti-item-ke" role="option" data-dial-code="254" data-country-code="ke">
				<div class="flag-box">
					<div class="iti-flag ke"></div>
				</div>
				<span class="country-name">Kenya</span>
				<span class="dial-code">+254</span>
			</li>
			<li class="country standard" id="iti-item-ki" role="option" data-dial-code="686" data-country-code="ki">
				<div class="flag-box">
					<div class="iti-flag ki"></div>
				</div>
				<span class="country-name">Kiribati</span>
				<span class="dial-code">+686</span>
			</li>
			<li class="country standard" id="iti-item-xk" role="option" data-dial-code="383" data-country-code="xk">
				<div class="flag-box">
					<div class="iti-flag xk"></div>
				</div>
				<span class="country-name">Kosovo</span>
				<span class="dial-code">+383</span>
			</li>
			<li class="country standard" id="iti-item-kw" role="option" data-dial-code="965" data-country-code="kw">
				<div class="flag-box">
					<div class="iti-flag kw"></div>
				</div>
				<span class="country-name">Kuwait (‫الكويت‬‎)</span>
				<span class="dial-code">+965</span>
			</li>
			<li class="country standard" id="iti-item-kg" role="option" data-dial-code="996" data-country-code="kg">
				<div class="flag-box">
					<div class="iti-flag kg"></div>
				</div>
				<span class="country-name">Kyrgyzstan (Кыргызстан)</span>
				<span class="dial-code">+996</span>
			</li>
			<li class="country standard" id="iti-item-la" role="option" data-dial-code="856" data-country-code="la">
				<div class="flag-box">
					<div class="iti-flag la"></div>
				</div>
				<span class="country-name">Laos (ລາວ)</span>
				<span class="dial-code">+856</span>
			</li>
			<li class="country standard" id="iti-item-lv" role="option" data-dial-code="371" data-country-code="lv">
				<div class="flag-box">
					<div class="iti-flag lv"></div>
				</div>
				<span class="country-name">Latvia (Latvija)</span>
				<span class="dial-code">+371</span>
			</li>
			<li class="country standard" id="iti-item-lb" role="option" data-dial-code="961" data-country-code="lb">
				<div class="flag-box">
					<div class="iti-flag lb"></div>
				</div>
				<span class="country-name">Lebanon (‫لبنان‬‎)</span>
				<span class="dial-code">+961</span>
			</li>
			<li class="country standard" id="iti-item-ls" role="option" data-dial-code="266" data-country-code="ls">
				<div class="flag-box">
					<div class="iti-flag ls"></div>
				</div>
				<span class="country-name">Lesotho</span>
				<span class="dial-code">+266</span>
			</li>
			<li class="country standard" id="iti-item-lr" role="option" data-dial-code="231" data-country-code="lr">
				<div class="flag-box">
					<div class="iti-flag lr"></div>
				</div>
				<span class="country-name">Liberia</span>
				<span class="dial-code">+231</span>
			</li>
			<li class="country standard" id="iti-item-ly" role="option" data-dial-code="218" data-country-code="ly">
				<div class="flag-box">
					<div class="iti-flag ly"></div>
				</div>
				<span class="country-name">Libya (‫ليبيا‬‎)</span>
				<span class="dial-code">+218</span>
			</li>
			<li class="country standard" id="iti-item-li" role="option" data-dial-code="423" data-country-code="li">
				<div class="flag-box">
					<div class="iti-flag li"></div>
				</div>
				<span class="country-name">Liechtenstein</span>
				<span class="dial-code">+423</span>
			</li>
			<li class="country standard" id="iti-item-lt" role="option" data-dial-code="370" data-country-code="lt">
				<div class="flag-box">
					<div class="iti-flag lt"></div>
				</div>
				<span class="country-name">Lithuania (Lietuva)</span>
				<span class="dial-code">+370</span>
			</li>
			<li class="country standard" id="iti-item-lu" role="option" data-dial-code="352" data-country-code="lu">
				<div class="flag-box">
					<div class="iti-flag lu"></div>
				</div>
				<span class="country-name">Luxembourg</span>
				<span class="dial-code">+352</span>
			</li>
			<li class="country standard" id="iti-item-mo" role="option" data-dial-code="853" data-country-code="mo">
				<div class="flag-box">
					<div class="iti-flag mo"></div>
				</div>
				<span class="country-name">Macau (澳門)</span>
				<span class="dial-code">+853</span>
			</li>
			<li class="country standard" id="iti-item-mk" role="option" data-dial-code="389" data-country-code="mk">
				<div class="flag-box">
					<div class="iti-flag mk"></div>
				</div>
				<span class="country-name">Macedonia (FYROM) (Македонија)</span>
				<span class="dial-code">+389</span>
			</li>
			<li class="country standard" id="iti-item-mg" role="option" data-dial-code="261" data-country-code="mg">
				<div class="flag-box">
					<div class="iti-flag mg"></div>
				</div>
				<span class="country-name">Madagascar (Madagasikara)</span>
				<span class="dial-code">+261</span>
			</li>
			<li class="country standard" id="iti-item-mw" role="option" data-dial-code="265" data-country-code="mw">
				<div class="flag-box">
					<div class="iti-flag mw"></div>
				</div>
				<span class="country-name">Malawi</span>
				<span class="dial-code">+265</span>
			</li>
			<li class="country standard" id="iti-item-my" role="option" data-dial-code="60" data-country-code="my">
				<div class="flag-box">
					<div class="iti-flag my"></div>
				</div>
				<span class="country-name">Malaysia</span>
				<span class="dial-code">+60</span>
			</li>
			<li class="country standard" id="iti-item-mv" role="option" data-dial-code="960" data-country-code="mv">
				<div class="flag-box">
					<div class="iti-flag mv"></div>
				</div>
				<span class="country-name">Maldives</span>
				<span class="dial-code">+960</span>
			</li>
			<li class="country standard" id="iti-item-ml" role="option" data-dial-code="223" data-country-code="ml">
				<div class="flag-box">
					<div class="iti-flag ml"></div>
				</div>
				<span class="country-name">Mali</span>
				<span class="dial-code">+223</span>
			</li>
			<li class="country standard" id="iti-item-mt" role="option" data-dial-code="356" data-country-code="mt">
				<div class="flag-box">
					<div class="iti-flag mt"></div>
				</div>
				<span class="country-name">Malta</span>
				<span class="dial-code">+356</span>
			</li>
			<li class="country standard" id="iti-item-mh" role="option" data-dial-code="692" data-country-code="mh">
				<div class="flag-box">
					<div class="iti-flag mh"></div>
				</div>
				<span class="country-name">Marshall Islands</span>
				<span class="dial-code">+692</span>
			</li>
			<li class="country standard" id="iti-item-mq" role="option" data-dial-code="596" data-country-code="mq">
				<div class="flag-box">
					<div class="iti-flag mq"></div>
				</div>
				<span class="country-name">Martinique</span>
				<span class="dial-code">+596</span>
			</li>
			<li class="country standard" id="iti-item-mr" role="option" data-dial-code="222" data-country-code="mr">
				<div class="flag-box">
					<div class="iti-flag mr"></div>
				</div>
				<span class="country-name">Mauritania (‫موريتانيا‬‎)</span>
				<span class="dial-code">+222</span>
			</li>
			<li class="country standard" id="iti-item-mu" role="option" data-dial-code="230" data-country-code="mu">
				<div class="flag-box">
					<div class="iti-flag mu"></div>
				</div>
				<span class="country-name">Mauritius (Moris)</span>
				<span class="dial-code">+230</span>
			</li>
			<li class="country standard" id="iti-item-yt" role="option" data-dial-code="262" data-country-code="yt">
				<div class="flag-box">
					<div class="iti-flag yt"></div>
				</div>
				<span class="country-name">Mayotte</span>
				<span class="dial-code">+262</span>
			</li>
			<li class="country standard" id="iti-item-mx" role="option" data-dial-code="52" data-country-code="mx">
				<div class="flag-box">
					<div class="iti-flag mx"></div>
				</div>
				<span class="country-name">Mexico (México)</span>
				<span class="dial-code">+52</span>
			</li>
			<li class="country standard" id="iti-item-fm" role="option" data-dial-code="691" data-country-code="fm">
				<div class="flag-box">
					<div class="iti-flag fm"></div>
				</div>
				<span class="country-name">Micronesia</span>
				<span class="dial-code">+691</span>
			</li>
			<li class="country standard" id="iti-item-md" role="option" data-dial-code="373" data-country-code="md">
				<div class="flag-box">
					<div class="iti-flag md"></div>
				</div>
				<span class="country-name">Moldova (Republica Moldova)</span>
				<span class="dial-code">+373</span>
			</li>
			<li class="country standard" id="iti-item-mc" role="option" data-dial-code="377" data-country-code="mc">
				<div class="flag-box">
					<div class="iti-flag mc"></div>
				</div>
				<span class="country-name">Monaco</span>
				<span class="dial-code">+377</span>
			</li>
			<li class="country standard" id="iti-item-mn" role="option" data-dial-code="976" data-country-code="mn">
				<div class="flag-box">
					<div class="iti-flag mn"></div>
				</div>
				<span class="country-name">Mongolia (Монгол)</span>
				<span class="dial-code">+976</span>
			</li>
			<li class="country standard" id="iti-item-me" role="option" data-dial-code="382" data-country-code="me">
				<div class="flag-box">
					<div class="iti-flag me"></div>
				</div>
				<span class="country-name">Montenegro (Crna Gora)</span>
				<span class="dial-code">+382</span>
			</li>
			<li class="country standard" id="iti-item-ms" role="option" data-dial-code="1664" data-country-code="ms">
				<div class="flag-box">
					<div class="iti-flag ms"></div>
				</div>
				<span class="country-name">Montserrat</span>
				<span class="dial-code">+1664</span>
			</li>
			<li class="country standard" id="iti-item-ma" role="option" data-dial-code="212" data-country-code="ma">
				<div class="flag-box">
					<div class="iti-flag ma"></div>
				</div>
				<span class="country-name">Morocco (‫المغرب‬‎)</span>
				<span class="dial-code">+212</span>
			</li>
			<li class="country standard" id="iti-item-mz" role="option" data-dial-code="258" data-country-code="mz">
				<div class="flag-box">
					<div class="iti-flag mz"></div>
				</div>
				<span class="country-name">Mozambique (Moçambique)</span>
				<span class="dial-code">+258</span>
			</li>
			<li class="country standard" id="iti-item-mm" role="option" data-dial-code="95" data-country-code="mm">
				<div class="flag-box">
					<div class="iti-flag mm"></div>
				</div>
				<span class="country-name">Myanmar (Burma) (မြန်မာ)</span>
				<span class="dial-code">+95</span>
			</li>
			<li class="country standard" id="iti-item-na" role="option" data-dial-code="264" data-country-code="na">
				<div class="flag-box">
					<div class="iti-flag na"></div>
				</div>
				<span class="country-name">Namibia (Namibië)</span>
				<span class="dial-code">+264</span>
			</li>
			<li class="country standard" id="iti-item-nr" role="option" data-dial-code="674" data-country-code="nr">
				<div class="flag-box">
					<div class="iti-flag nr"></div>
				</div>
				<span class="country-name">Nauru</span>
				<span class="dial-code">+674</span>
			</li>
			<li class="country standard" id="iti-item-np" role="option" data-dial-code="977" data-country-code="np">
				<div class="flag-box">
					<div class="iti-flag np"></div>
				</div>
				<span class="country-name">Nepal (नेपाल)</span>
				<span class="dial-code">+977</span>
			</li>
			<li class="country standard" id="iti-item-nl" role="option" data-dial-code="31" data-country-code="nl">
				<div class="flag-box">
					<div class="iti-flag nl"></div>
				</div>
				<span class="country-name">Netherlands (Nederland)</span>
				<span class="dial-code">+31</span>
			</li>
			<li class="country standard" id="iti-item-nc" role="option" data-dial-code="687" data-country-code="nc">
				<div class="flag-box">
					<div class="iti-flag nc"></div>
				</div>
				<span class="country-name">New Caledonia (Nouvelle-Calédonie)</span>
				<span class="dial-code">+687</span>
			</li>
			<li class="country standard" id="iti-item-nz" role="option" data-dial-code="64" data-country-code="nz">
				<div class="flag-box">
					<div class="iti-flag nz"></div>
				</div>
				<span class="country-name">New Zealand</span>
				<span class="dial-code">+64</span>
			</li>
			<li class="country standard" id="iti-item-ni" role="option" data-dial-code="505" data-country-code="ni">
				<div class="flag-box">
					<div class="iti-flag ni"></div>
				</div>
				<span class="country-name">Nicaragua</span>
				<span class="dial-code">+505</span>
			</li>
			<li class="country standard" id="iti-item-ne" role="option" data-dial-code="227" data-country-code="ne">
				<div class="flag-box">
					<div class="iti-flag ne"></div>
				</div>
				<span class="country-name">Niger (Nijar)</span>
				<span class="dial-code">+227</span>
			</li>
			<li class="country standard" id="iti-item-ng" role="option" data-dial-code="234" data-country-code="ng">
				<div class="flag-box">
					<div class="iti-flag ng"></div>
				</div>
				<span class="country-name">Nigeria</span>
				<span class="dial-code">+234</span>
			</li>
			<li class="country standard" id="iti-item-nu" role="option" data-dial-code="683" data-country-code="nu">
				<div class="flag-box">
					<div class="iti-flag nu"></div>
				</div>
				<span class="country-name">Niue</span>
				<span class="dial-code">+683</span>
			</li>
			<li class="country standard" id="iti-item-nf" role="option" data-dial-code="672" data-country-code="nf">
				<div class="flag-box">
					<div class="iti-flag nf"></div>
				</div>
				<span class="country-name">Norfolk Island</span>
				<span class="dial-code">+672</span>
			</li>
			<li class="country standard" id="iti-item-kp" role="option" data-dial-code="850" data-country-code="kp">
				<div class="flag-box">
					<div class="iti-flag kp"></div>
				</div>
				<span class="country-name">North Korea (조선 민주주의 인민 공화국)</span>
				<span class="dial-code">+850</span>
			</li>
			<li class="country standard" id="iti-item-mp" role="option" data-dial-code="1670" data-country-code="mp">
				<div class="flag-box">
					<div class="iti-flag mp"></div>
				</div>
				<span class="country-name">Northern Mariana Islands</span>
				<span class="dial-code">+1670</span>
			</li>
			<li class="country standard" id="iti-item-no" role="option" data-dial-code="47" data-country-code="no">
				<div class="flag-box">
					<div class="iti-flag no"></div>
				</div>
				<span class="country-name">Norway (Norge)</span>
				<span class="dial-code">+47</span>
			</li>
			<li class="country standard" id="iti-item-om" role="option" data-dial-code="968" data-country-code="om">
				<div class="flag-box">
					<div class="iti-flag om"></div>
				</div>
				<span class="country-name">Oman (‫عُمان‬‎)</span>
				<span class="dial-code">+968</span>
			</li>
			<li class="country standard" id="iti-item-pk" role="option" data-dial-code="92" data-country-code="pk">
				<div class="flag-box">
					<div class="iti-flag pk"></div>
				</div>
				<span class="country-name">Pakistan (‫پاکستان‬‎)</span>
				<span class="dial-code">+92</span>
			</li>
			<li class="country standard" id="iti-item-pw" role="option" data-dial-code="680" data-country-code="pw">
				<div class="flag-box">
					<div class="iti-flag pw"></div>
				</div>
				<span class="country-name">Palau</span>
				<span class="dial-code">+680</span>
			</li>
			<li class="country standard" id="iti-item-ps" role="option" data-dial-code="970" data-country-code="ps">
				<div class="flag-box">
					<div class="iti-flag ps"></div>
				</div>
				<span class="country-name">Palestine (‫فلسطين‬‎)</span>
				<span class="dial-code">+970</span>
			</li>
			<li class="country standard" id="iti-item-pa" role="option" data-dial-code="507" data-country-code="pa">
				<div class="flag-box">
					<div class="iti-flag pa"></div>
				</div>
				<span class="country-name">Panama (Panamá)</span>
				<span class="dial-code">+507</span>
			</li>
			<li class="country standard" id="iti-item-pg" role="option" data-dial-code="675" data-country-code="pg">
				<div class="flag-box">
					<div class="iti-flag pg"></div>
				</div>
				<span class="country-name">Papua New Guinea</span>
				<span class="dial-code">+675</span>
			</li>
			<li class="country standard" id="iti-item-py" role="option" data-dial-code="595" data-country-code="py">
				<div class="flag-box">
					<div class="iti-flag py"></div>
				</div>
				<span class="country-name">Paraguay</span>
				<span class="dial-code">+595</span>
			</li>
			<li class="country standard" id="iti-item-pe" role="option" data-dial-code="51" data-country-code="pe">
				<div class="flag-box">
					<div class="iti-flag pe"></div>
				</div>
				<span class="country-name">Peru (Perú)</span>
				<span class="dial-code">+51</span>
			</li>
			<li class="country standard" id="iti-item-ph" role="option" data-dial-code="63" data-country-code="ph">
				<div class="flag-box">
					<div class="iti-flag ph"></div>
				</div>
				<span class="country-name">Philippines</span>
				<span class="dial-code">+63</span>
			</li>
			<li class="country standard" id="iti-item-pl" role="option" data-dial-code="48" data-country-code="pl">
				<div class="flag-box">
					<div class="iti-flag pl"></div>
				</div>
				<span class="country-name">Poland (Polska)</span>
				<span class="dial-code">+48</span>
			</li>
			<li class="country standard" id="iti-item-pt" role="option" data-dial-code="351" data-country-code="pt">
				<div class="flag-box">
					<div class="iti-flag pt"></div>
				</div>
				<span class="country-name">Portugal</span>
				<span class="dial-code">+351</span>
			</li>
			<li class="country standard" id="iti-item-pr" role="option" data-dial-code="1" data-country-code="pr">
				<div class="flag-box">
					<div class="iti-flag pr"></div>
				</div>
				<span class="country-name">Puerto Rico</span>
				<span class="dial-code">+1</span>
			</li>
			<li class="country standard" id="iti-item-qa" role="option" data-dial-code="974" data-country-code="qa">
				<div class="flag-box">
					<div class="iti-flag qa"></div>
				</div>
				<span class="country-name">Qatar (‫قطر‬‎)</span>
				<span class="dial-code">+974</span>
			</li>
			<li class="country standard" id="iti-item-re" role="option" data-dial-code="262" data-country-code="re">
				<div class="flag-box">
					<div class="iti-flag re"></div>
				</div>
				<span class="country-name">Réunion (La Réunion)</span>
				<span class="dial-code">+262</span>
			</li>
			<li class="country standard" id="iti-item-ro" role="option" data-dial-code="40" data-country-code="ro">
				<div class="flag-box">
					<div class="iti-flag ro"></div>
				</div>
				<span class="country-name">Romania (România)</span>
				<span class="dial-code">+40</span>
			</li>
			<li class="country standard" id="iti-item-ru" role="option" data-dial-code="7" data-country-code="ru">
				<div class="flag-box">
					<div class="iti-flag ru"></div>
				</div>
				<span class="country-name">Russia (Россия)</span>
				<span class="dial-code">+7</span>
			</li>
			<li class="country standard" id="iti-item-rw" role="option" data-dial-code="250" data-country-code="rw">
				<div class="flag-box">
					<div class="iti-flag rw"></div>
				</div>
				<span class="country-name">Rwanda</span>
				<span class="dial-code">+250</span>
			</li>
			<li class="country standard" id="iti-item-bl" role="option" data-dial-code="590" data-country-code="bl">
				<div class="flag-box">
					<div class="iti-flag bl"></div>
				</div>
				<span class="country-name">Saint Barthélemy</span>
				<span class="dial-code">+590</span>
			</li>
			<li class="country standard" id="iti-item-sh" role="option" data-dial-code="290" data-country-code="sh">
				<div class="flag-box">
					<div class="iti-flag sh"></div>
				</div>
				<span class="country-name">Saint Helena</span>
				<span class="dial-code">+290</span>
			</li>
			<li class="country standard" id="iti-item-kn" role="option" data-dial-code="1869" data-country-code="kn">
				<div class="flag-box">
					<div class="iti-flag kn"></div>
				</div>
				<span class="country-name">Saint Kitts and Nevis</span>
				<span class="dial-code">+1869</span>
			</li>
			<li class="country standard" id="iti-item-lc" role="option" data-dial-code="1758" data-country-code="lc">
				<div class="flag-box">
					<div class="iti-flag lc"></div>
				</div>
				<span class="country-name">Saint Lucia</span>
				<span class="dial-code">+1758</span>
			</li>
			<li class="country standard" id="iti-item-mf" role="option" data-dial-code="590" data-country-code="mf">
				<div class="flag-box">
					<div class="iti-flag mf"></div>
				</div>
				<span class="country-name">Saint Martin (Saint-Martin (partie française))</span>
				<span class="dial-code">+590</span>
			</li>
			<li class="country standard" id="iti-item-pm" role="option" data-dial-code="508" data-country-code="pm">
				<div class="flag-box">
					<div class="iti-flag pm"></div>
				</div>
				<span class="country-name">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</span>
				<span class="dial-code">+508</span>
			</li>
			<li class="country standard" id="iti-item-vc" role="option" data-dial-code="1784" data-country-code="vc">
				<div class="flag-box">
					<div class="iti-flag vc"></div>
				</div>
				<span class="country-name">Saint Vincent and the Grenadines</span>
				<span class="dial-code">+1784</span>
			</li>
			<li class="country standard" id="iti-item-ws" role="option" data-dial-code="685" data-country-code="ws">
				<div class="flag-box">
					<div class="iti-flag ws"></div>
				</div>
				<span class="country-name">Samoa</span>
				<span class="dial-code">+685</span>
			</li>
			<li class="country standard" id="iti-item-sm" role="option" data-dial-code="378" data-country-code="sm">
				<div class="flag-box">
					<div class="iti-flag sm"></div>
				</div>
				<span class="country-name">San Marino</span>
				<span class="dial-code">+378</span>
			</li>
			<li class="country standard" id="iti-item-st" role="option" data-dial-code="239" data-country-code="st">
				<div class="flag-box">
					<div class="iti-flag st"></div>
				</div>
				<span class="country-name">São Tomé and Príncipe (São Tomé e Príncipe)</span>
				<span class="dial-code">+239</span>
			</li>
			<li class="country standard" id="iti-item-sa" role="option" data-dial-code="966" data-country-code="sa">
				<div class="flag-box">
					<div class="iti-flag sa"></div>
				</div>
				<span class="country-name">Saudi Arabia (‫المملكة العربية السعودية‬‎)</span>
				<span class="dial-code">+966</span>
			</li>
			<li class="country standard" id="iti-item-sn" role="option" data-dial-code="221" data-country-code="sn">
				<div class="flag-box">
					<div class="iti-flag sn"></div>
				</div>
				<span class="country-name">Senegal (Sénégal)</span>
				<span class="dial-code">+221</span>
			</li>
			<li class="country standard" id="iti-item-rs" role="option" data-dial-code="381" data-country-code="rs">
				<div class="flag-box">
					<div class="iti-flag rs"></div>
				</div>
				<span class="country-name">Serbia (Србија)</span>
				<span class="dial-code">+381</span>
			</li>
			<li class="country standard" id="iti-item-sc" role="option" data-dial-code="248" data-country-code="sc">
				<div class="flag-box">
					<div class="iti-flag sc"></div>
				</div>
				<span class="country-name">Seychelles</span>
				<span class="dial-code">+248</span>
			</li>
			<li class="country standard" id="iti-item-sl" role="option" data-dial-code="232" data-country-code="sl">
				<div class="flag-box">
					<div class="iti-flag sl"></div>
				</div>
				<span class="country-name">Sierra Leone</span>
				<span class="dial-code">+232</span>
			</li>
			<li class="country standard" id="iti-item-sg" role="option" data-dial-code="65" data-country-code="sg">
				<div class="flag-box">
					<div class="iti-flag sg"></div>
				</div>
				<span class="country-name">Singapore</span>
				<span class="dial-code">+65</span>
			</li>
			<li class="country standard" id="iti-item-sx" role="option" data-dial-code="1721" data-country-code="sx">
				<div class="flag-box">
					<div class="iti-flag sx"></div>
				</div>
				<span class="country-name">Sint Maarten</span>
				<span class="dial-code">+1721</span>
			</li>
			<li class="country standard" id="iti-item-sk" role="option" data-dial-code="421" data-country-code="sk">
				<div class="flag-box">
					<div class="iti-flag sk"></div>
				</div>
				<span class="country-name">Slovakia (Slovensko)</span>
				<span class="dial-code">+421</span>
			</li>
			<li class="country standard" id="iti-item-si" role="option" data-dial-code="386" data-country-code="si">
				<div class="flag-box">
					<div class="iti-flag si"></div>
				</div>
				<span class="country-name">Slovenia (Slovenija)</span>
				<span class="dial-code">+386</span>
			</li>
			<li class="country standard" id="iti-item-sb" role="option" data-dial-code="677" data-country-code="sb">
				<div class="flag-box">
					<div class="iti-flag sb"></div>
				</div>
				<span class="country-name">Solomon Islands</span>
				<span class="dial-code">+677</span>
			</li>
			<li class="country standard" id="iti-item-so" role="option" data-dial-code="252" data-country-code="so">
				<div class="flag-box">
					<div class="iti-flag so"></div>
				</div>
				<span class="country-name">Somalia (Soomaaliya)</span>
				<span class="dial-code">+252</span>
			</li>
			<li class="country standard" id="iti-item-za" role="option" data-dial-code="27" data-country-code="za">
				<div class="flag-box">
					<div class="iti-flag za"></div>
				</div>
				<span class="country-name">South Africa</span>
				<span class="dial-code">+27</span>
			</li>
			<li class="country standard" id="iti-item-kr" role="option" data-dial-code="82" data-country-code="kr">
				<div class="flag-box">
					<div class="iti-flag kr"></div>
				</div>
				<span class="country-name">South Korea (대한민국)</span>
				<span class="dial-code">+82</span>
			</li>
			<li class="country standard" id="iti-item-ss" role="option" data-dial-code="211" data-country-code="ss">
				<div class="flag-box">
					<div class="iti-flag ss"></div>
				</div>
				<span class="country-name">South Sudan (‫جنوب السودان‬‎)</span>
				<span class="dial-code">+211</span>
			</li>
			<li class="country standard" id="iti-item-es" role="option" data-dial-code="34" data-country-code="es">
				<div class="flag-box">
					<div class="iti-flag es"></div>
				</div>
				<span class="country-name">Spain (España)</span>
				<span class="dial-code">+34</span>
			</li>
			<li class="country standard" id="iti-item-lk" role="option" data-dial-code="94" data-country-code="lk">
				<div class="flag-box">
					<div class="iti-flag lk"></div>
				</div>
				<span class="country-name">Sri Lanka (ශ්‍රී ලංකාව)</span>
				<span class="dial-code">+94</span>
			</li>
			<li class="country standard" id="iti-item-sd" role="option" data-dial-code="249" data-country-code="sd">
				<div class="flag-box">
					<div class="iti-flag sd"></div>
				</div>
				<span class="country-name">Sudan (‫السودان‬‎)</span>
				<span class="dial-code">+249</span>
			</li>
			<li class="country standard" id="iti-item-sr" role="option" data-dial-code="597" data-country-code="sr">
				<div class="flag-box">
					<div class="iti-flag sr"></div>
				</div>
				<span class="country-name">Suriname</span>
				<span class="dial-code">+597</span>
			</li>
			<li class="country standard" id="iti-item-sj" role="option" data-dial-code="47" data-country-code="sj">
				<div class="flag-box">
					<div class="iti-flag sj"></div>
				</div>
				<span class="country-name">Svalbard and Jan Mayen</span>
				<span class="dial-code">+47</span>
			</li>
			<li class="country standard" id="iti-item-sz" role="option" data-dial-code="268" data-country-code="sz">
				<div class="flag-box">
					<div class="iti-flag sz"></div>
				</div>
				<span class="country-name">Swaziland</span>
				<span class="dial-code">+268</span>
			</li>
			<li class="country standard" id="iti-item-se" role="option" data-dial-code="46" data-country-code="se">
				<div class="flag-box">
					<div class="iti-flag se"></div>
				</div>
				<span class="country-name">Sweden (Sverige)</span>
				<span class="dial-code">+46</span>
			</li>
			<li class="country standard" id="iti-item-ch" role="option" data-dial-code="41" data-country-code="ch">
				<div class="flag-box">
					<div class="iti-flag ch"></div>
				</div>
				<span class="country-name">Switzerland (Schweiz)</span>
				<span class="dial-code">+41</span>
			</li>
			<li class="country standard" id="iti-item-sy" role="option" data-dial-code="963" data-country-code="sy">
				<div class="flag-box">
					<div class="iti-flag sy"></div>
				</div>
				<span class="country-name">Syria (‫سوريا‬‎)</span>
				<span class="dial-code">+963</span>
			</li>
			<li class="country standard" id="iti-item-tw" role="option" data-dial-code="886" data-country-code="tw">
				<div class="flag-box">
					<div class="iti-flag tw"></div>
				</div>
				<span class="country-name">Taiwan (台灣)</span>
				<span class="dial-code">+886</span>
			</li>
			<li class="country standard" id="iti-item-tj" role="option" data-dial-code="992" data-country-code="tj">
				<div class="flag-box">
					<div class="iti-flag tj"></div>
				</div>
				<span class="country-name">Tajikistan</span>
				<span class="dial-code">+992</span>
			</li>
			<li class="country standard" id="iti-item-tz" role="option" data-dial-code="255" data-country-code="tz">
				<div class="flag-box">
					<div class="iti-flag tz"></div>
				</div>
				<span class="country-name">Tanzania</span>
				<span class="dial-code">+255</span>
			</li>
			<li class="country standard" id="iti-item-th" role="option" data-dial-code="66" data-country-code="th">
				<div class="flag-box">
					<div class="iti-flag th"></div>
				</div>
				<span class="country-name">Thailand (ไทย)</span>
				<span class="dial-code">+66</span>
			</li>
			<li class="country standard" id="iti-item-tl" role="option" data-dial-code="670" data-country-code="tl">
				<div class="flag-box">
					<div class="iti-flag tl"></div>
				</div>
				<span class="country-name">Timor-Leste</span>
				<span class="dial-code">+670</span>
			</li>
			<li class="country standard" id="iti-item-tg" role="option" data-dial-code="228" data-country-code="tg">
				<div class="flag-box">
					<div class="iti-flag tg"></div>
				</div>
				<span class="country-name">Togo</span>
				<span class="dial-code">+228</span>
			</li>
			<li class="country standard" id="iti-item-tk" role="option" data-dial-code="690" data-country-code="tk">
				<div class="flag-box">
					<div class="iti-flag tk"></div>
				</div>
				<span class="country-name">Tokelau</span>
				<span class="dial-code">+690</span>
			</li>
			<li class="country standard" id="iti-item-to" role="option" data-dial-code="676" data-country-code="to">
				<div class="flag-box">
					<div class="iti-flag to"></div>
				</div>
				<span class="country-name">Tonga</span>
				<span class="dial-code">+676</span>
			</li>
			<li class="country standard" id="iti-item-tt" role="option" data-dial-code="1868" data-country-code="tt">
				<div class="flag-box">
					<div class="iti-flag tt"></div>
				</div>
				<span class="country-name">Trinidad and Tobago</span>
				<span class="dial-code">+1868</span>
			</li>
			<li class="country standard" id="iti-item-tn" role="option" data-dial-code="216" data-country-code="tn">
				<div class="flag-box">
					<div class="iti-flag tn"></div>
				</div>
				<span class="country-name">Tunisia (‫تونس‬‎)</span>
				<span class="dial-code">+216</span>
			</li>
			<li class="country standard" id="iti-item-tr" role="option" data-dial-code="90" data-country-code="tr">
				<div class="flag-box">
					<div class="iti-flag tr"></div>
				</div>
				<span class="country-name">Turkey (Türkiye)</span>
				<span class="dial-code">+90</span>
			</li>
			<li class="country standard" id="iti-item-tm" role="option" data-dial-code="993" data-country-code="tm">
				<div class="flag-box">
					<div class="iti-flag tm"></div>
				</div>
				<span class="country-name">Turkmenistan</span>
				<span class="dial-code">+993</span>
			</li>
			<li class="country standard" id="iti-item-tc" role="option" data-dial-code="1649" data-country-code="tc">
				<div class="flag-box">
					<div class="iti-flag tc"></div>
				</div>
				<span class="country-name">Turks and Caicos Islands</span>
				<span class="dial-code">+1649</span>
			</li>
			<li class="country standard" id="iti-item-tv" role="option" data-dial-code="688" data-country-code="tv">
				<div class="flag-box">
					<div class="iti-flag tv"></div>
				</div>
				<span class="country-name">Tuvalu</span>
				<span class="dial-code">+688</span>
			</li>
			<li class="country standard" id="iti-item-vi" role="option" data-dial-code="1340" data-country-code="vi">
				<div class="flag-box">
					<div class="iti-flag vi"></div>
				</div>
				<span class="country-name">U.S. Virgin Islands</span>
				<span class="dial-code">+1340</span>
			</li>
			<li class="country standard" id="iti-item-ug" role="option" data-dial-code="256" data-country-code="ug">
				<div class="flag-box">
					<div class="iti-flag ug"></div>
				</div>
				<span class="country-name">Uganda</span>
				<span class="dial-code">+256</span>
			</li>
			<li class="country standard" id="iti-item-ua" role="option" data-dial-code="380" data-country-code="ua">
				<div class="flag-box">
					<div class="iti-flag ua"></div>
				</div>
				<span class="country-name">Ukraine (Country￼CityУкраїна)</span>
				<span class="dial-code">+380</span>
			</li>
			<li class="country standard" id="iti-item-ae" role="option" data-dial-code="971" data-country-code="ae">
				<div class="flag-box">
					<div class="iti-flag ae"></div>
				</div>
				<span class="country-name">United Arab Emirates (‫الإمارات العربية المتحدة‬‎)</span>
				<span class="dial-code">+971</span>
			</li>
			<li class="country standard" id="iti-item-gb" role="option" data-dial-code="44" data-country-code="gb">
				<div class="flag-box">
					<div class="iti-flag gb"></div>
				</div>
				<span class="country-name">United Kingdom</span>
				<span class="dial-code">+44</span>
			</li>
			<li class="country standard" id="iti-item-us" role="option" data-dial-code="1" data-country-code="us">
				<div class="flag-box">
					<div class="iti-flag us"></div>
				</div>
				<span class="country-name">United States</span>
				<span class="dial-code">+1</span>
			</li>
			<li class="country standard" id="iti-item-uy" role="option" data-dial-code="598" data-country-code="uy">
				<div class="flag-box">
					<div class="iti-flag uy"></div>
				</div>
				<span class="country-name">Uruguay</span>
				<span class="dial-code">+598</span>
			</li>
			<li class="country standard" id="iti-item-uz" role="option" data-dial-code="998" data-country-code="uz">
				<div class="flag-box">
					<div class="iti-flag uz"></div>
				</div>
				<span class="country-name">Uzbekistan (Oʻzbekiston)</span>
				<span class="dial-code">+998</span>
			</li>
			<li class="country standard" id="iti-item-vu" role="option" data-dial-code="678" data-country-code="vu">
				<div class="flag-box">
					<div class="iti-flag vu"></div>
				</div>
				<span class="country-name">Vanuatu</span>
				<span class="dial-code">+678</span>
			</li>
			<li class="country standard" id="iti-item-va" role="option" data-dial-code="39" data-country-code="va">
				<div class="flag-box">
					<div class="iti-flag va"></div>
				</div>
				<span class="country-name">Vatican City (Città del Vaticano)</span>
				<span class="dial-code">+39</span>
			</li>
			<li class="country standard" id="iti-item-ve" role="option" data-dial-code="58" data-country-code="ve">
				<div class="flag-box">
					<div class="iti-flag ve"></div>
				</div>
				<span class="country-name">Venezuela</span>
				<span class="dial-code">+58</span>
			</li>
			<li class="country standard" id="iti-item-vn" role="option" data-dial-code="84" data-country-code="vn">
				<div class="flag-box">
					<div class="iti-flag vn"></div>
				</div>
				<span class="country-name">Vietnam (Việt Nam)</span>
				<span class="dial-code">+84</span>
			</li>
			<li class="country standard" id="iti-item-wf" role="option" data-dial-code="681" data-country-code="wf">
				<div class="flag-box">
					<div class="iti-flag wf"></div>
				</div>
				<span class="country-name">Wallis and Futuna (Wallis-et-Futuna)</span>
				<span class="dial-code">+681</span>
			</li>
			<li class="country standard" id="iti-item-eh" role="option" data-dial-code="212" data-country-code="eh">
				<div class="flag-box">
					<div class="iti-flag eh"></div>
				</div>
				<span class="country-name">Western Sahara (‫الصحراء الغربية‬‎)</span>
				<span class="dial-code">+212</span>
			</li>
			<li class="country standard" id="iti-item-ye" role="option" data-dial-code="967" data-country-code="ye">
				<div class="flag-box">
					<div class="iti-flag ye"></div>
				</div>
				<span class="country-name">Yemen (‫اليمن‬‎)</span>
				<span class="dial-code">+967</span>
			</li>
			<li class="country standard" id="iti-item-zm" role="option" data-dial-code="260" data-country-code="zm">
				<div class="flag-box">
					<div class="iti-flag zm"></div>
				</div>
				<span class="country-name">Zambia</span>
				<span class="dial-code">+260</span>
			</li>
			<li class="country standard" id="iti-item-zw" role="option" data-dial-code="263" data-country-code="zw">
				<div class="flag-box">
					<div class="iti-flag zw"></div>
				</div>
				<span class="country-name">Zimbabwe</span>
				<span class="dial-code">+263</span>
			</li>
			<li class="country standard" id="iti-item-ax" role="option" data-dial-code="358" data-country-code="ax">
				<div class="flag-box">
					<div class="iti-flag ax"></div>
				</div>
				<span class="country-name">Åland Islands</span>
				<span class="dial-code">+358</span>
			</li>
		</ul>
	</div>
	<input type="text" class="form-control" name="land_line_no" id="land_line_no" autocomplete="off" value = "<?= $individ['land_line_no']; ?>">
		<input type="hidden" name="full_number" value = "hel">
		</div> 

                                        </div>
                                            
                                            
                                         
                                          <label class="col-md-2 control-label">Nationality
                                           </label>
                                          
                                          
                                          <div class="col-md-4">
													   
                                       <select name="nationality" class="form-control">
  <option value="">-- select one --</option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="cameroonian">Cameroonian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
</select>
										<small> You are <?= $individ['nationality']; ?></small>
										
										<small class = "text-muted"><?= ucfirst($individ['nationality'])?></small>
                                        </div>

                                         </div>
                                        
                                       <div class="form-group">
                                           
                                             <label class="col-md-2 control-label">Mobile No.
                                           </label>
                                          
                                          
                                          <div class="col-md-4">
	<div class="intl-tel-input allow-dropdown">
		<div class="flag-container">
			<div class="selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0" title="United States: +1">
				<div class="iti-flag us"></div>
				<div class="iti-arrow"></div>
			</div>
			<ul class="country-list hide" id="country-listbox" aria-expanded="false" role="listbox" aria-activedescendant="iti-item-us">
				<li class="country preferred active" id="iti-item-us" role="option" data-dial-code="1" data-country-code="us" aria-selected="true">
					<div class="flag-box">
						<div class="iti-flag us"></div>
					</div>
					<span class="country-name">United States</span>
					<span class="dial-code">+1</span>
				</li>
				<li class="country preferred" id="iti-item-gb" role="option" data-dial-code="44" data-country-code="gb">
					<div class="flag-box">
						<div class="iti-flag gb"></div>
					</div>
					<span class="country-name">United Kingdom</span>
					<span class="dial-code">+44</span>
				</li>
				<li class="divider" role="separator" aria-disabled="true"></li>
				<li class="country standard" id="iti-item-af" role="option" data-dial-code="93" data-country-code="af">
					<div class="flag-box">
						<div class="iti-flag af"></div>
					</div>
					<span class="country-name">Afghanistan (‫افغانستان‬‎)</span>
					<span class="dial-code">+93</span>
				</li>
				<li class="country standard" id="iti-item-al" role="option" data-dial-code="355" data-country-code="al">
					<div class="flag-box">
						<div class="iti-flag al"></div>
					</div>
					<span class="country-name">Albania (Shqipëri)</span>
					<span class="dial-code">+355</span>
				</li>
				<li class="country standard" id="iti-item-dz" role="option" data-dial-code="213" data-country-code="dz">
					<div class="flag-box">
						<div class="iti-flag dz"></div>
					</div>
					<span class="country-name">Algeria (‫الجزائر‬‎)</span>
					<span class="dial-code">+213</span>
				</li>
				<li class="country standard" id="iti-item-as" role="option" data-dial-code="1684" data-country-code="as">
					<div class="flag-box">
						<div class="iti-flag as"></div>
					</div>
					<span class="country-name">American Samoa</span>
					<span class="dial-code">+1684</span>
				</li>
				<li class="country standard" id="iti-item-ad" role="option" data-dial-code="376" data-country-code="ad">
					<div class="flag-box">
						<div class="iti-flag ad"></div>
					</div>
					<span class="country-name">Andorra</span>
					<span class="dial-code">+376</span>
				</li>
				<li class="country standard" id="iti-item-ao" role="option" data-dial-code="244" data-country-code="ao">
					<div class="flag-box">
						<div class="iti-flag ao"></div>
					</div>
					<span class="country-name">Angola</span>
					<span class="dial-code">+244</span>
				</li>
				<li class="country standard" id="iti-item-ai" role="option" data-dial-code="1264" data-country-code="ai">
					<div class="flag-box">
						<div class="iti-flag ai"></div>
					</div>
					<span class="country-name">Anguilla</span>
					<span class="dial-code">+1264</span>
				</li>
				<li class="country standard" id="iti-item-ag" role="option" data-dial-code="1268" data-country-code="ag">
					<div class="flag-box">
						<div class="iti-flag ag"></div>
					</div>
					<span class="country-name">Antigua and Barbuda</span>
					<span class="dial-code">+1268</span>
				</li>
				<li class="country standard" id="iti-item-ar" role="option" data-dial-code="54" data-country-code="ar">
					<div class="flag-box">
						<div class="iti-flag ar"></div>
					</div>
					<span class="country-name">Argentina</span>
					<span class="dial-code">+54</span>
				</li>
				<li class="country standard" id="iti-item-am" role="option" data-dial-code="374" data-country-code="am">
					<div class="flag-box">
						<div class="iti-flag am"></div>
					</div>
					<span class="country-name">Armenia (Հայաստան)</span>
					<span class="dial-code">+374</span>
				</li>
				<li class="country standard" id="iti-item-aw" role="option" data-dial-code="297" data-country-code="aw">
					<div class="flag-box">
						<div class="iti-flag aw"></div>
					</div>
					<span class="country-name">Aruba</span>
					<span class="dial-code">+297</span>
				</li>
				<li class="country standard" id="iti-item-au" role="option" data-dial-code="61" data-country-code="au">
					<div class="flag-box">
						<div class="iti-flag au"></div>
					</div>
					<span class="country-name">Australia</span>
					<span class="dial-code">+61</span>
				</li>
				<li class="country standard" id="iti-item-at" role="option" data-dial-code="43" data-country-code="at">
					<div class="flag-box">
						<div class="iti-flag at"></div>
					</div>
					<span class="country-name">Austria (Österreich)</span>
					<span class="dial-code">+43</span>
				</li>
				<li class="country standard" id="iti-item-az" role="option" data-dial-code="994" data-country-code="az">
					<div class="flag-box">
						<div class="iti-flag az"></div>
					</div>
					<span class="country-name">Azerbaijan (Azərbaycan)</span>
					<span class="dial-code">+994</span>
				</li>
				<li class="country standard" id="iti-item-bs" role="option" data-dial-code="1242" data-country-code="bs">
					<div class="flag-box">
						<div class="iti-flag bs"></div>
					</div>
					<span class="country-name">Bahamas</span>
					<span class="dial-code">+1242</span>
				</li>
				<li class="country standard" id="iti-item-bh" role="option" data-dial-code="973" data-country-code="bh">
					<div class="flag-box">
						<div class="iti-flag bh"></div>
					</div>
					<span class="country-name">Bahrain (‫البحرين‬‎)</span>
					<span class="dial-code">+973</span>
				</li>
				<li class="country standard" id="iti-item-bd" role="option" data-dial-code="880" data-country-code="bd">
					<div class="flag-box">
						<div class="iti-flag bd"></div>
					</div>
					<span class="country-name">Bangladesh (বাংলাদেশ)</span>
					<span class="dial-code">+880</span>
				</li>
				<li class="country standard" id="iti-item-bb" role="option" data-dial-code="1246" data-country-code="bb">
					<div class="flag-box">
						<div class="iti-flag bb"></div>
					</div>
					<span class="country-name">Barbados</span>
					<span class="dial-code">+1246</span>
				</li>
				<li class="country standard" id="iti-item-by" role="option" data-dial-code="375" data-country-code="by">
					<div class="flag-box">
						<div class="iti-flag by"></div>
					</div>
					<span class="country-name">Belarus (Беларусь)</span>
					<span class="dial-code">+375</span>
				</li>
				<li class="country standard" id="iti-item-be" role="option" data-dial-code="32" data-country-code="be">
					<div class="flag-box">
						<div class="iti-flag be"></div>
					</div>
					<span class="country-name">Belgium (België)</span>
					<span class="dial-code">+32</span>
				</li>
				<li class="country standard" id="iti-item-bz" role="option" data-dial-code="501" data-country-code="bz">
					<div class="flag-box">
						<div class="iti-flag bz"></div>
					</div>
					<span class="country-name">Belize</span>
					<span class="dial-code">+501</span>
				</li>
				<li class="country standard" id="iti-item-bj" role="option" data-dial-code="229" data-country-code="bj">
					<div class="flag-box">
						<div class="iti-flag bj"></div>
					</div>
					<span class="country-name">Benin (Bénin)</span>
					<span class="dial-code">+229</span>
				</li>
				<li class="country standard" id="iti-item-bm" role="option" data-dial-code="1441" data-country-code="bm">
					<div class="flag-box">
						<div class="iti-flag bm"></div>
					</div>
					<span class="country-name">Bermuda</span>
					<span class="dial-code">+1441</span>
				</li>
				<li class="country standard" id="iti-item-bt" role="option" data-dial-code="975" data-country-code="bt">
					<div class="flag-box">
						<div class="iti-flag bt"></div>
					</div>
					<span class="country-name">Bhutan (འབྲུག)</span>
					<span class="dial-code">+975</span>
				</li>
				<li class="country standard" id="iti-item-bo" role="option" data-dial-code="591" data-country-code="bo">
					<div class="flag-box">
						<div class="iti-flag bo"></div>
					</div>
					<span class="country-name">Bolivia</span>
					<span class="dial-code">+591</span>
				</li>
				<li class="country standard" id="iti-item-ba" role="option" data-dial-code="387" data-country-code="ba">
					<div class="flag-box">
						<div class="iti-flag ba"></div>
					</div>
					<span class="country-name">Bosnia and Herzegovina (Босна и Херцеговина)</span>
					<span class="dial-code">+387</span>
				</li>
				<li class="country standard" id="iti-item-bw" role="option" data-dial-code="267" data-country-code="bw">
					<div class="flag-box">
						<div class="iti-flag bw"></div>
					</div>
					<span class="country-name">Botswana</span>
					<span class="dial-code">+267</span>
				</li>
				<li class="country standard" id="iti-item-br" role="option" data-dial-code="55" data-country-code="br">
					<div class="flag-box">
						<div class="iti-flag br"></div>
					</div>
					<span class="country-name">Brazil (Brasil)</span>
					<span class="dial-code">+55</span>
				</li>
				<li class="country standard" id="iti-item-io" role="option" data-dial-code="246" data-country-code="io">
					<div class="flag-box">
						<div class="iti-flag io"></div>
					</div>
					<span class="country-name">British Indian Ocean Territory</span>
					<span class="dial-code">+246</span>
				</li>
				<li class="country standard" id="iti-item-vg" role="option" data-dial-code="1284" data-country-code="vg">
					<div class="flag-box">
						<div class="iti-flag vg"></div>
					</div>
					<span class="country-name">British Virgin Islands</span>
					<span class="dial-code">+1284</span>
				</li>
				<li class="country standard" id="iti-item-bn" role="option" data-dial-code="673" data-country-code="bn">
					<div class="flag-box">
						<div class="iti-flag bn"></div>
					</div>
					<span class="country-name">Brunei</span>
					<span class="dial-code">+673</span>
				</li>
				<li class="country standard" id="iti-item-bg" role="option" data-dial-code="359" data-country-code="bg">
					<div class="flag-box">
						<div class="iti-flag bg"></div>
					</div>
					<span class="country-name">Bulgaria (България)</span>
					<span class="dial-code">+359</span>
				</li>
				<li class="country standard" id="iti-item-bf" role="option" data-dial-code="226" data-country-code="bf">
					<div class="flag-box">
						<div class="iti-flag bf"></div>
					</div>
					<span class="country-name">Burkina Faso</span>
					<span class="dial-code">+226</span>
				</li>
				<li class="country standard" id="iti-item-bi" role="option" data-dial-code="257" data-country-code="bi">
					<div class="flag-box">
						<div class="iti-flag bi"></div>
					</div>
					<span class="country-name">Burundi (Uburundi)</span>
					<span class="dial-code">+257</span>
				</li>
				<li class="country standard" id="iti-item-kh" role="option" data-dial-code="855" data-country-code="kh">
					<div class="flag-box">
						<div class="iti-flag kh"></div>
					</div>
					<span class="country-name">Cambodia (កម្ពុជា)</span>
					<span class="dial-code">+855</span>
				</li>
				<li class="country standard" id="iti-item-cm" role="option" data-dial-code="237" data-country-code="cm">
					<div class="flag-box">
						<div class="iti-flag cm"></div>
					</div>
					<span class="country-name">Cameroon (Cameroun)</span>
					<span class="dial-code">+237</span>
				</li>
				<li class="country standard" id="iti-item-ca" role="option" data-dial-code="1" data-country-code="ca">
					<div class="flag-box">
						<div class="iti-flag ca"></div>
					</div>
					<span class="country-name">Canada</span>
					<span class="dial-code">+1</span>
				</li>
				<li class="country standard" id="iti-item-cv" role="option" data-dial-code="238" data-country-code="cv">
					<div class="flag-box">
						<div class="iti-flag cv"></div>
					</div>
					<span class="country-name">Cape Verde (Kabu Verdi)</span>
					<span class="dial-code">+238</span>
				</li>
				<li class="country standard" id="iti-item-bq" role="option" data-dial-code="599" data-country-code="bq">
					<div class="flag-box">
						<div class="iti-flag bq"></div>
					</div>
					<span class="country-name">Caribbean Netherlands</span>
					<span class="dial-code">+599</span>
				</li>
				<li class="country standard" id="iti-item-ky" role="option" data-dial-code="1345" data-country-code="ky">
					<div class="flag-box">
						<div class="iti-flag ky"></div>
					</div>
					<span class="country-name">Cayman Islands</span>
					<span class="dial-code">+1345</span>
				</li>
				<li class="country standard" id="iti-item-cf" role="option" data-dial-code="236" data-country-code="cf">
					<div class="flag-box">
						<div class="iti-flag cf"></div>
					</div>
					<span class="country-name">Central African Republic (République centrafricaine)</span>
					<span class="dial-code">+236</span>
				</li>
				<li class="country standard" id="iti-item-td" role="option" data-dial-code="235" data-country-code="td">
					<div class="flag-box">
						<div class="iti-flag td"></div>
					</div>
					<span class="country-name">Chad (Tchad)</span>
					<span class="dial-code">+235</span>
				</li>
				<li class="country standard" id="iti-item-cl" role="option" data-dial-code="56" data-country-code="cl">
					<div class="flag-box">
						<div class="iti-flag cl"></div>
					</div>
					<span class="country-name">Chile</span>
					<span class="dial-code">+56</span>
				</li>
				<li class="country standard" id="iti-item-cn" role="option" data-dial-code="86" data-country-code="cn">
					<div class="flag-box">
						<div class="iti-flag cn"></div>
					</div>
					<span class="country-name">China (中国)</span>
					<span class="dial-code">+86</span>
				</li>
				<li class="country standard" id="iti-item-cx" role="option" data-dial-code="61" data-country-code="cx">
					<div class="flag-box">
						<div class="iti-flag cx"></div>
					</div>
					<span class="country-name">Christmas Island</span>
					<span class="dial-code">+61</span>
				</li>
				<li class="country standard" id="iti-item-cc" role="option" data-dial-code="61" data-country-code="cc">
					<div class="flag-box">
						<div class="iti-flag cc"></div>
					</div>
					<span class="country-name">Cocos (Keeling) Islands</span>
					<span class="dial-code">+61</span>
				</li>
				<li class="country standard" id="iti-item-co" role="option" data-dial-code="57" data-country-code="co">
					<div class="flag-box">
						<div class="iti-flag co"></div>
					</div>
					<span class="country-name">Colombia</span>
					<span class="dial-code">+57</span>
				</li>
				<li class="country standard" id="iti-item-km" role="option" data-dial-code="269" data-country-code="km">
					<div class="flag-box">
						<div class="iti-flag km"></div>
					</div>
					<span class="country-name">Comoros (‫جزر القمر‬‎)</span>
					<span class="dial-code">+269</span>
				</li>
				<li class="country standard" id="iti-item-cd" role="option" data-dial-code="243" data-country-code="cd">
					<div class="flag-box">
						<div class="iti-flag cd"></div>
					</div>
					<span class="country-name">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</span>
					<span class="dial-code">+243</span>
				</li>
				<li class="country standard" id="iti-item-cg" role="option" data-dial-code="242" data-country-code="cg">
					<div class="flag-box">
						<div class="iti-flag cg"></div>
					</div>
					<span class="country-name">Congo (Republic) (Congo-Brazzaville)</span>
					<span class="dial-code">+242</span>
				</li>
				<li class="country standard" id="iti-item-ck" role="option" data-dial-code="682" data-country-code="ck">
					<div class="flag-box">
						<div class="iti-flag ck"></div>
					</div>
					<span class="country-name">Cook Islands</span>
					<span class="dial-code">+682</span>
				</li>
				<li class="country standard" id="iti-item-cr" role="option" data-dial-code="506" data-country-code="cr">
					<div class="flag-box">
						<div class="iti-flag cr"></div>
					</div>
					<span class="country-name">Costa Rica</span>
					<span class="dial-code">+506</span>
				</li>
				<li class="country standard" id="iti-item-ci" role="option" data-dial-code="225" data-country-code="ci">
					<div class="flag-box">
						<div class="iti-flag ci"></div>
					</div>
					<span class="country-name">Côte d’Ivoire</span>
					<span class="dial-code">+225</span>
				</li>
				<li class="country standard" id="iti-item-hr" role="option" data-dial-code="385" data-country-code="hr">
					<div class="flag-box">
						<div class="iti-flag hr"></div>
					</div>
					<span class="country-name">Croatia (Hrvatska)</span>
					<span class="dial-code">+385</span>
				</li>
				<li class="country standard" id="iti-item-cu" role="option" data-dial-code="53" data-country-code="cu">
					<div class="flag-box">
						<div class="iti-flag cu"></div>
					</div>
					<span class="country-name">Cuba</span>
					<span class="dial-code">+53</span>
				</li>
				<li class="country standard" id="iti-item-cw" role="option" data-dial-code="599" data-country-code="cw">
					<div class="flag-box">
						<div class="iti-flag cw"></div>
					</div>
					<span class="country-name">Curaçao</span>
					<span class="dial-code">+599</span>
				</li>
				<li class="country standard" id="iti-item-cy" role="option" data-dial-code="357" data-country-code="cy">
					<div class="flag-box">
						<div class="iti-flag cy"></div>
					</div>
					<span class="country-name">Cyprus (Κύπρος)</span>
					<span class="dial-code">+357</span>
				</li>
				<li class="country standard" id="iti-item-cz" role="option" data-dial-code="420" data-country-code="cz">
					<div class="flag-box">
						<div class="iti-flag cz"></div>
					</div>
					<span class="country-name">Czech Republic (Česká republika)</span>
					<span class="dial-code">+420</span>
				</li>
				<li class="country standard" id="iti-item-dk" role="option" data-dial-code="45" data-country-code="dk">
					<div class="flag-box">
						<div class="iti-flag dk"></div>
					</div>
					<span class="country-name">Denmark (Danmark)</span>
					<span class="dial-code">+45</span>
				</li>
				<li class="country standard" id="iti-item-dj" role="option" data-dial-code="253" data-country-code="dj">
					<div class="flag-box">
						<div class="iti-flag dj"></div>
					</div>
					<span class="country-name">Djibouti</span>
					<span class="dial-code">+253</span>
				</li>
				<li class="country standard" id="iti-item-dm" role="option" data-dial-code="1767" data-country-code="dm">
					<div class="flag-box">
						<div class="iti-flag dm"></div>
					</div>
					<span class="country-name">Dominica</span>
					<span class="dial-code">+1767</span>
				</li>
				<li class="country standard" id="iti-item-do" role="option" data-dial-code="1" data-country-code="do">
					<div class="flag-box">
						<div class="iti-flag do"></div>
					</div>
					<span class="country-name">Dominican Republic (República Dominicana)</span>
					<span class="dial-code">+1</span>
				</li>
				<li class="country standard" id="iti-item-ec" role="option" data-dial-code="593" data-country-code="ec">
					<div class="flag-box">
						<div class="iti-flag ec"></div>
					</div>
					<span class="country-name">Ecuador</span>
					<span class="dial-code">+593</span>
				</li>
				<li class="country standard" id="iti-item-eg" role="option" data-dial-code="20" data-country-code="eg">
					<div class="flag-box">
						<div class="iti-flag eg"></div>
					</div>
					<span class="country-name">Egypt (‫مصر‬‎)</span>
					<span class="dial-code">+20</span>
				</li>
				<li class="country standard" id="iti-item-sv" role="option" data-dial-code="503" data-country-code="sv">
					<div class="flag-box">
						<div class="iti-flag sv"></div>
					</div>
					<span class="country-name">El Salvador</span>
					<span class="dial-code">+503</span>
				</li>
				<li class="country standard" id="iti-item-gq" role="option" data-dial-code="240" data-country-code="gq">
					<div class="flag-box">
						<div class="iti-flag gq"></div>
					</div>
					<span class="country-name">Equatorial Guinea (Guinea Ecuatorial)</span>
					<span class="dial-code">+240</span>
				</li>
				<li class="country standard" id="iti-item-er" role="option" data-dial-code="291" data-country-code="er">
					<div class="flag-box">
						<div class="iti-flag er"></div>
					</div>
					<span class="country-name">Eritrea</span>
					<span class="dial-code">+291</span>
				</li>
				<li class="country standard" id="iti-item-ee" role="option" data-dial-code="372" data-country-code="ee">
					<div class="flag-box">
						<div class="iti-flag ee"></div>
					</div>
					<span class="country-name">Estonia (Eesti)</span>
					<span class="dial-code">+372</span>
				</li>
				<li class="country standard" id="iti-item-et" role="option" data-dial-code="251" data-country-code="et">
					<div class="flag-box">
						<div class="iti-flag et"></div>
					</div>
					<span class="country-name">Ethiopia</span>
					<span class="dial-code">+251</span>
				</li>
				<li class="country standard" id="iti-item-fk" role="option" data-dial-code="500" data-country-code="fk">
					<div class="flag-box">
						<div class="iti-flag fk"></div>
					</div>
					<span class="country-name">Falkland Islands (Islas Malvinas)</span>
					<span class="dial-code">+500</span>
				</li>
				<li class="country standard" id="iti-item-fo" role="option" data-dial-code="298" data-country-code="fo">
					<div class="flag-box">
						<div class="iti-flag fo"></div>
					</div>
					<span class="country-name">Faroe Islands (Føroyar)</span>
					<span class="dial-code">+298</span>
				</li>
				<li class="country standard" id="iti-item-fj" role="option" data-dial-code="679" data-country-code="fj">
					<div class="flag-box">
						<div class="iti-flag fj"></div>
					</div>
					<span class="country-name">Fiji</span>
					<span class="dial-code">+679</span>
				</li>
				<li class="country standard" id="iti-item-fi" role="option" data-dial-code="358" data-country-code="fi">
					<div class="flag-box">
						<div class="iti-flag fi"></div>
					</div>
					<span class="country-name">Finland (Suomi)</span>
					<span class="dial-code">+358</span>
				</li>
				<li class="country standard" id="iti-item-fr" role="option" data-dial-code="33" data-country-code="fr">
					<div class="flag-box">
						<div class="iti-flag fr"></div>
					</div>
					<span class="country-name">France</span>
					<span class="dial-code">+33</span>
				</li>
				<li class="country standard" id="iti-item-gf" role="option" data-dial-code="594" data-country-code="gf">
					<div class="flag-box">
						<div class="iti-flag gf"></div>
					</div>
					<span class="country-name">French Guiana (Guyane française)</span>
					<span class="dial-code">+594</span>
				</li>
				<li class="country standard" id="iti-item-pf" role="option" data-dial-code="689" data-country-code="pf">
					<div class="flag-box">
						<div class="iti-flag pf"></div>
					</div>
					<span class="country-name">French Polynesia (Polynésie française)</span>
					<span class="dial-code">+689</span>
				</li>
				<li class="country standard" id="iti-item-ga" role="option" data-dial-code="241" data-country-code="ga">
					<div class="flag-box">
						<div class="iti-flag ga"></div>
					</div>
					<span class="country-name">Gabon</span>
					<span class="dial-code">+241</span>
				</li>
				<li class="country standard" id="iti-item-gm" role="option" data-dial-code="220" data-country-code="gm">
					<div class="flag-box">
						<div class="iti-flag gm"></div>
					</div>
					<span class="country-name">Gambia</span>
					<span class="dial-code">+220</span>
				</li>
				<li class="country standard" id="iti-item-ge" role="option" data-dial-code="995" data-country-code="ge">
					<div class="flag-box">
						<div class="iti-flag ge"></div>
					</div>
					<span class="country-name">Georgia (საქართველო)</span>
					<span class="dial-code">+995</span>
				</li>
				<li class="country standard" id="iti-item-de" role="option" data-dial-code="49" data-country-code="de">
					<div class="flag-box">
						<div class="iti-flag de"></div>
					</div>
					<span class="country-name">Germany (Deutschland)</span>
					<span class="dial-code">+49</span>
				</li>
				<li class="country standard" id="iti-item-gh" role="option" data-dial-code="233" data-country-code="gh">
					<div class="flag-box">
						<div class="iti-flag gh"></div>
					</div>
					<span class="country-name">Ghana (Gaana)</span>
					<span class="dial-code">+233</span>
				</li>
				<li class="country standard" id="iti-item-gi" role="option" data-dial-code="350" data-country-code="gi">
					<div class="flag-box">
						<div class="iti-flag gi"></div>
					</div>
					<span class="country-name">Gibraltar</span>
					<span class="dial-code">+350</span>
				</li>
				<li class="country standard" id="iti-item-gr" role="option" data-dial-code="30" data-country-code="gr">
					<div class="flag-box">
						<div class="iti-flag gr"></div>
					</div>
					<span class="country-name">Greece (Ελλάδα)</span>
					<span class="dial-code">+30</span>
				</li>
				<li class="country standard" id="iti-item-gl" role="option" data-dial-code="299" data-country-code="gl">
					<div class="flag-box">
						<div class="iti-flag gl"></div>
					</div>
					<span class="country-name">Greenland (Kalaallit Nunaat)</span>
					<span class="dial-code">+299</span>
				</li>
				<li class="country standard" id="iti-item-gd" role="option" data-dial-code="1473" data-country-code="gd">
					<div class="flag-box">
						<div class="iti-flag gd"></div>
					</div>
					<span class="country-name">Grenada</span>
					<span class="dial-code">+1473</span>
				</li>
				<li class="country standard" id="iti-item-gp" role="option" data-dial-code="590" data-country-code="gp">
					<div class="flag-box">
						<div class="iti-flag gp"></div>
					</div>
					<span class="country-name">Guadeloupe</span>
					<span class="dial-code">+590</span>
				</li>
				<li class="country standard" id="iti-item-gu" role="option" data-dial-code="1671" data-country-code="gu">
					<div class="flag-box">
						<div class="iti-flag gu"></div>
					</div>
					<span class="country-name">Guam</span>
					<span class="dial-code">+1671</span>
				</li>
				<li class="country standard" id="iti-item-gt" role="option" data-dial-code="502" data-country-code="gt">
					<div class="flag-box">
						<div class="iti-flag gt"></div>
					</div>
					<span class="country-name">Guatemala</span>
					<span class="dial-code">+502</span>
				</li>
				<li class="country standard" id="iti-item-gg" role="option" data-dial-code="44" data-country-code="gg">
					<div class="flag-box">
						<div class="iti-flag gg"></div>
					</div>
					<span class="country-name">Guernsey</span>
					<span class="dial-code">+44</span>
				</li>
				<li class="country standard" id="iti-item-gn" role="option" data-dial-code="224" data-country-code="gn">
					<div class="flag-box">
						<div class="iti-flag gn"></div>
					</div>
					<span class="country-name">Guinea (Guinée)</span>
					<span class="dial-code">+224</span>
				</li>
				<li class="country standard" id="iti-item-gw" role="option" data-dial-code="245" data-country-code="gw">
					<div class="flag-box">
						<div class="iti-flag gw"></div>
					</div>
					<span class="country-name">Guinea-Bissau (Guiné Bissau)</span>
					<span class="dial-code">+245</span>
				</li>
				<li class="country standard" id="iti-item-gy" role="option" data-dial-code="592" data-country-code="gy">
					<div class="flag-box">
						<div class="iti-flag gy"></div>
					</div>
					<span class="country-name">Guyana</span>
					<span class="dial-code">+592</span>
				</li>
				<li class="country standard" id="iti-item-ht" role="option" data-dial-code="509" data-country-code="ht">
					<div class="flag-box">
						<div class="iti-flag ht"></div>
					</div>
					<span class="country-name">Haiti</span>
					<span class="dial-code">+509</span>
				</li>
				<li class="country standard" id="iti-item-hn" role="option" data-dial-code="504" data-country-code="hn">
					<div class="flag-box">
						<div class="iti-flag hn"></div>
					</div>
					<span class="country-name">Honduras</span>
					<span class="dial-code">+504</span>
				</li>
				<li class="country standard" id="iti-item-hk" role="option" data-dial-code="852" data-country-code="hk">
					<div class="flag-box">
						<div class="iti-flag hk"></div>
					</div>
					<span class="country-name">Hong Kong (香港)</span>
					<span class="dial-code">+852</span>
				</li>
				<li class="country standard" id="iti-item-hu" role="option" data-dial-code="36" data-country-code="hu">
					<div class="flag-box">
						<div class="iti-flag hu"></div>
					</div>
					<span class="country-name">Hungary (Magyarország)</span>
					<span class="dial-code">+36</span>
				</li>
				<li class="country standard" id="iti-item-is" role="option" data-dial-code="354" data-country-code="is">
					<div class="flag-box">
						<div class="iti-flag is"></div>
					</div>
					<span class="country-name">Iceland (Ísland)</span>
					<span class="dial-code">+354</span>
				</li>
				<li class="country standard" id="iti-item-in" role="option" data-dial-code="91" data-country-code="in">
					<div class="flag-box">
						<div class="iti-flag in"></div>
					</div>
					<span class="country-name">India (भारत)</span>
					<span class="dial-code">+91</span>
				</li>
				<li class="country standard" id="iti-item-id" role="option" data-dial-code="62" data-country-code="id">
					<div class="flag-box">
						<div class="iti-flag id"></div>
					</div>
					<span class="country-name">Indonesia</span>
					<span class="dial-code">+62</span>
				</li>
				<li class="country standard" id="iti-item-ir" role="option" data-dial-code="98" data-country-code="ir">
					<div class="flag-box">
						<div class="iti-flag ir"></div>
					</div>
					<span class="country-name">Iran (‫ایران‬‎)</span>
					<span class="dial-code">+98</span>
				</li>
				<li class="country standard" id="iti-item-iq" role="option" data-dial-code="964" data-country-code="iq">
					<div class="flag-box">
						<div class="iti-flag iq"></div>
					</div>
					<span class="country-name">Iraq (‫العراق‬‎)</span>
					<span class="dial-code">+964</span>
				</li>
				<li class="country standard" id="iti-item-ie" role="option" data-dial-code="353" data-country-code="ie">
					<div class="flag-box">
						<div class="iti-flag ie"></div>
					</div>
					<span class="country-name">Ireland</span>
					<span class="dial-code">+353</span>
				</li>
				<li class="country standard" id="iti-item-im" role="option" data-dial-code="44" data-country-code="im">
					<div class="flag-box">
						<div class="iti-flag im"></div>
					</div>
					<span class="country-name">Isle of Man</span>
					<span class="dial-code">+44</span>
				</li>
				<li class="country standard" id="iti-item-il" role="option" data-dial-code="972" data-country-code="il">
					<div class="flag-box">
						<div class="iti-flag il"></div>
					</div>
					<span class="country-name">Israel (‫ישראל‬‎)</span>
					<span class="dial-code">+972</span>
				</li>
				<li class="country standard" id="iti-item-it" role="option" data-dial-code="39" data-country-code="it">
					<div class="flag-box">
						<div class="iti-flag it"></div>
					</div>
					<span class="country-name">Italy (Italia)</span>
					<span class="dial-code">+39</span>
				</li>
				<li class="country standard" id="iti-item-jm" role="option" data-dial-code="1" data-country-code="jm">
					<div class="flag-box">
						<div class="iti-flag jm"></div>
					</div>
					<span class="country-name">Jamaica</span>
					<span class="dial-code">+1</span>
				</li>
				<li class="country standard" id="iti-item-jp" role="option" data-dial-code="81" data-country-code="jp">
					<div class="flag-box">
						<div class="iti-flag jp"></div>
					</div>
					<span class="country-name">Japan (日本)</span>
					<span class="dial-code">+81</span>
				</li>
				<li class="country standard" id="iti-item-je" role="option" data-dial-code="44" data-country-code="je">
					<div class="flag-box">
						<div class="iti-flag je"></div>
					</div>
					<span class="country-name">Jersey</span>
					<span class="dial-code">+44</span>
				</li>
				<li class="country standard" id="iti-item-jo" role="option" data-dial-code="962" data-country-code="jo">
					<div class="flag-box">
						<div class="iti-flag jo"></div>
					</div>
					<span class="country-name">Jordan (‫الأردن‬‎)</span>
					<span class="dial-code">+962</span>
				</li>
				<li class="country standard" id="iti-item-kz" role="option" data-dial-code="7" data-country-code="kz">
					<div class="flag-box">
						<div class="iti-flag kz"></div>
					</div>
					<span class="country-name">Kazakhstan (Казахстан)</span>
					<span class="dial-code">+7</span>
				</li>
				<li class="country standard" id="iti-item-ke" role="option" data-dial-code="254" data-country-code="ke">
					<div class="flag-box">
						<div class="iti-flag ke"></div>
					</div>
					<span class="country-name">Kenya</span>
					<span class="dial-code">+254</span>
				</li>
				<li class="country standard" id="iti-item-ki" role="option" data-dial-code="686" data-country-code="ki">
					<div class="flag-box">
						<div class="iti-flag ki"></div>
					</div>
					<span class="country-name">Kiribati</span>
					<span class="dial-code">+686</span>
				</li>
				<li class="country standard" id="iti-item-xk" role="option" data-dial-code="383" data-country-code="xk">
					<div class="flag-box">
						<div class="iti-flag xk"></div>
					</div>
					<span class="country-name">Kosovo</span>
					<span class="dial-code">+383</span>
				</li>
				<li class="country standard" id="iti-item-kw" role="option" data-dial-code="965" data-country-code="kw">
					<div class="flag-box">
						<div class="iti-flag kw"></div>
					</div>
					<span class="country-name">Kuwait (‫الكويت‬‎)</span>
					<span class="dial-code">+965</span>
				</li>
				<li class="country standard" id="iti-item-kg" role="option" data-dial-code="996" data-country-code="kg">
					<div class="flag-box">
						<div class="iti-flag kg"></div>
					</div>
					<span class="country-name">Kyrgyzstan (Кыргызстан)</span>
					<span class="dial-code">+996</span>
				</li>
				<li class="country standard" id="iti-item-la" role="option" data-dial-code="856" data-country-code="la">
					<div class="flag-box">
						<div class="iti-flag la"></div>
					</div>
					<span class="country-name">Laos (ລາວ)</span>
					<span class="dial-code">+856</span>
				</li>
				<li class="country standard" id="iti-item-lv" role="option" data-dial-code="371" data-country-code="lv">
					<div class="flag-box">
						<div class="iti-flag lv"></div>
					</div>
					<span class="country-name">Latvia (Latvija)</span>
					<span class="dial-code">+371</span>
				</li>
				<li class="country standard" id="iti-item-lb" role="option" data-dial-code="961" data-country-code="lb">
					<div class="flag-box">
						<div class="iti-flag lb"></div>
					</div>
					<span class="country-name">Lebanon (‫لبنان‬‎)</span>
					<span class="dial-code">+961</span>
				</li>
				<li class="country standard" id="iti-item-ls" role="option" data-dial-code="266" data-country-code="ls">
					<div class="flag-box">
						<div class="iti-flag ls"></div>
					</div>
					<span class="country-name">Lesotho</span>
					<span class="dial-code">+266</span>
				</li>
				<li class="country standard" id="iti-item-lr" role="option" data-dial-code="231" data-country-code="lr">
					<div class="flag-box">
						<div class="iti-flag lr"></div>
					</div>
					<span class="country-name">Liberia</span>
					<span class="dial-code">+231</span>
				</li>
				<li class="country standard" id="iti-item-ly" role="option" data-dial-code="218" data-country-code="ly">
					<div class="flag-box">
						<div class="iti-flag ly"></div>
					</div>
					<span class="country-name">Libya (‫ليبيا‬‎)</span>
					<span class="dial-code">+218</span>
				</li>
				<li class="country standard" id="iti-item-li" role="option" data-dial-code="423" data-country-code="li">
					<div class="flag-box">
						<div class="iti-flag li"></div>
					</div>
					<span class="country-name">Liechtenstein</span>
					<span class="dial-code">+423</span>
				</li>
				<li class="country standard" id="iti-item-lt" role="option" data-dial-code="370" data-country-code="lt">
					<div class="flag-box">
						<div class="iti-flag lt"></div>
					</div>
					<span class="country-name">Lithuania (Lietuva)</span>
					<span class="dial-code">+370</span>
				</li>
				<li class="country standard" id="iti-item-lu" role="option" data-dial-code="352" data-country-code="lu">
					<div class="flag-box">
						<div class="iti-flag lu"></div>
					</div>
					<span class="country-name">Luxembourg</span>
					<span class="dial-code">+352</span>
				</li>
				<li class="country standard" id="iti-item-mo" role="option" data-dial-code="853" data-country-code="mo">
					<div class="flag-box">
						<div class="iti-flag mo"></div>
					</div>
					<span class="country-name">Macau (澳門)</span>
					<span class="dial-code">+853</span>
				</li>
				<li class="country standard" id="iti-item-mk" role="option" data-dial-code="389" data-country-code="mk">
					<div class="flag-box">
						<div class="iti-flag mk"></div>
					</div>
					<span class="country-name">Macedonia (FYROM) (Македонија)</span>
					<span class="dial-code">+389</span>
				</li>
				<li class="country standard" id="iti-item-mg" role="option" data-dial-code="261" data-country-code="mg">
					<div class="flag-box">
						<div class="iti-flag mg"></div>
					</div>
					<span class="country-name">Madagascar (Madagasikara)</span>
					<span class="dial-code">+261</span>
				</li>
				<li class="country standard" id="iti-item-mw" role="option" data-dial-code="265" data-country-code="mw">
					<div class="flag-box">
						<div class="iti-flag mw"></div>
					</div>
					<span class="country-name">Malawi</span>
					<span class="dial-code">+265</span>
				</li>
				<li class="country standard" id="iti-item-my" role="option" data-dial-code="60" data-country-code="my">
					<div class="flag-box">
						<div class="iti-flag my"></div>
					</div>
					<span class="country-name">Malaysia</span>
					<span class="dial-code">+60</span>
				</li>
				<li class="country standard" id="iti-item-mv" role="option" data-dial-code="960" data-country-code="mv">
					<div class="flag-box">
						<div class="iti-flag mv"></div>
					</div>
					<span class="country-name">Maldives</span>
					<span class="dial-code">+960</span>
				</li>
				<li class="country standard" id="iti-item-ml" role="option" data-dial-code="223" data-country-code="ml">
					<div class="flag-box">
						<div class="iti-flag ml"></div>
					</div>
					<span class="country-name">Mali</span>
					<span class="dial-code">+223</span>
				</li>
				<li class="country standard" id="iti-item-mt" role="option" data-dial-code="356" data-country-code="mt">
					<div class="flag-box">
						<div class="iti-flag mt"></div>
					</div>
					<span class="country-name">Malta</span>
					<span class="dial-code">+356</span>
				</li>
				<li class="country standard" id="iti-item-mh" role="option" data-dial-code="692" data-country-code="mh">
					<div class="flag-box">
						<div class="iti-flag mh"></div>
					</div>
					<span class="country-name">Marshall Islands</span>
					<span class="dial-code">+692</span>
				</li>
				<li class="country standard" id="iti-item-mq" role="option" data-dial-code="596" data-country-code="mq">
					<div class="flag-box">
						<div class="iti-flag mq"></div>
					</div>
					<span class="country-name">Martinique</span>
					<span class="dial-code">+596</span>
				</li>
				<li class="country standard" id="iti-item-mr" role="option" data-dial-code="222" data-country-code="mr">
					<div class="flag-box">
						<div class="iti-flag mr"></div>
					</div>
					<span class="country-name">Mauritania (‫موريتانيا‬‎)</span>
					<span class="dial-code">+222</span>
				</li>
				<li class="country standard" id="iti-item-mu" role="option" data-dial-code="230" data-country-code="mu">
					<div class="flag-box">
						<div class="iti-flag mu"></div>
					</div>
					<span class="country-name">Mauritius (Moris)</span>
					<span class="dial-code">+230</span>
				</li>
				<li class="country standard" id="iti-item-yt" role="option" data-dial-code="262" data-country-code="yt">
					<div class="flag-box">
						<div class="iti-flag yt"></div>
					</div>
					<span class="country-name">Mayotte</span>
					<span class="dial-code">+262</span>
				</li>
				<li class="country standard" id="iti-item-mx" role="option" data-dial-code="52" data-country-code="mx">
					<div class="flag-box">
						<div class="iti-flag mx"></div>
					</div>
					<span class="country-name">Mexico (México)</span>
					<span class="dial-code">+52</span>
				</li>
				<li class="country standard" id="iti-item-fm" role="option" data-dial-code="691" data-country-code="fm">
					<div class="flag-box">
						<div class="iti-flag fm"></div>
					</div>
					<span class="country-name">Micronesia</span>
					<span class="dial-code">+691</span>
				</li>
				<li class="country standard" id="iti-item-md" role="option" data-dial-code="373" data-country-code="md">
					<div class="flag-box">
						<div class="iti-flag md"></div>
					</div>
					<span class="country-name">Moldova (Republica Moldova)</span>
					<span class="dial-code">+373</span>
				</li>
				<li class="country standard" id="iti-item-mc" role="option" data-dial-code="377" data-country-code="mc">
					<div class="flag-box">
						<div class="iti-flag mc"></div>
					</div>
					<span class="country-name">Monaco</span>
					<span class="dial-code">+377</span>
				</li>
				<li class="country standard" id="iti-item-mn" role="option" data-dial-code="976" data-country-code="mn">
					<div class="flag-box">
						<div class="iti-flag mn"></div>
					</div>
					<span class="country-name">Mongolia (Монгол)</span>
					<span class="dial-code">+976</span>
				</li>
				<li class="country standard" id="iti-item-me" role="option" data-dial-code="382" data-country-code="me">
					<div class="flag-box">
						<div class="iti-flag me"></div>
					</div>
					<span class="country-name">Montenegro (Crna Gora)</span>
					<span class="dial-code">+382</span>
				</li>
				<li class="country standard" id="iti-item-ms" role="option" data-dial-code="1664" data-country-code="ms">
					<div class="flag-box">
						<div class="iti-flag ms"></div>
					</div>
					<span class="country-name">Montserrat</span>
					<span class="dial-code">+1664</span>
				</li>
				<li class="country standard" id="iti-item-ma" role="option" data-dial-code="212" data-country-code="ma">
					<div class="flag-box">
						<div class="iti-flag ma"></div>
					</div>
					<span class="country-name">Morocco (‫المغرب‬‎)</span>
					<span class="dial-code">+212</span>
				</li>
				<li class="country standard" id="iti-item-mz" role="option" data-dial-code="258" data-country-code="mz">
					<div class="flag-box">
						<div class="iti-flag mz"></div>
					</div>
					<span class="country-name">Mozambique (Moçambique)</span>
					<span class="dial-code">+258</span>
				</li>
				<li class="country standard" id="iti-item-mm" role="option" data-dial-code="95" data-country-code="mm">
					<div class="flag-box">
						<div class="iti-flag mm"></div>
					</div>
					<span class="country-name">Myanmar (Burma) (မြန်မာ)</span>
					<span class="dial-code">+95</span>
				</li>
				<li class="country standard" id="iti-item-na" role="option" data-dial-code="264" data-country-code="na">
					<div class="flag-box">
						<div class="iti-flag na"></div>
					</div>
					<span class="country-name">Namibia (Namibië)</span>
					<span class="dial-code">+264</span>
				</li>
				<li class="country standard" id="iti-item-nr" role="option" data-dial-code="674" data-country-code="nr">
					<div class="flag-box">
						<div class="iti-flag nr"></div>
					</div>
					<span class="country-name">Nauru</span>
					<span class="dial-code">+674</span>
				</li>
				<li class="country standard" id="iti-item-np" role="option" data-dial-code="977" data-country-code="np">
					<div class="flag-box">
						<div class="iti-flag np"></div>
					</div>
					<span class="country-name">Nepal (नेपाल)</span>
					<span class="dial-code">+977</span>
				</li>
				<li class="country standard" id="iti-item-nl" role="option" data-dial-code="31" data-country-code="nl">
					<div class="flag-box">
						<div class="iti-flag nl"></div>
					</div>
					<span class="country-name">Netherlands (Nederland)</span>
					<span class="dial-code">+31</span>
				</li>
				<li class="country standard" id="iti-item-nc" role="option" data-dial-code="687" data-country-code="nc">
					<div class="flag-box">
						<div class="iti-flag nc"></div>
					</div>
					<span class="country-name">New Caledonia (Nouvelle-Calédonie)</span>
					<span class="dial-code">+687</span>
				</li>
				<li class="country standard" id="iti-item-nz" role="option" data-dial-code="64" data-country-code="nz">
					<div class="flag-box">
						<div class="iti-flag nz"></div>
					</div>
					<span class="country-name">New Zealand</span>
					<span class="dial-code">+64</span>
				</li>
				<li class="country standard" id="iti-item-ni" role="option" data-dial-code="505" data-country-code="ni">
					<div class="flag-box">
						<div class="iti-flag ni"></div>
					</div>
					<span class="country-name">Nicaragua</span>
					<span class="dial-code">+505</span>
				</li>
				<li class="country standard" id="iti-item-ne" role="option" data-dial-code="227" data-country-code="ne">
					<div class="flag-box">
						<div class="iti-flag ne"></div>
					</div>
					<span class="country-name">Niger (Nijar)</span>
					<span class="dial-code">+227</span>
				</li>
				<li class="country standard" id="iti-item-ng" role="option" data-dial-code="234" data-country-code="ng">
					<div class="flag-box">
						<div class="iti-flag ng"></div>
					</div>
					<span class="country-name">Nigeria</span>
					<span class="dial-code">+234</span>
				</li>
				<li class="country standard" id="iti-item-nu" role="option" data-dial-code="683" data-country-code="nu">
					<div class="flag-box">
						<div class="iti-flag nu"></div>
					</div>
					<span class="country-name">Niue</span>
					<span class="dial-code">+683</span>
				</li>
				<li class="country standard" id="iti-item-nf" role="option" data-dial-code="672" data-country-code="nf">
					<div class="flag-box">
						<div class="iti-flag nf"></div>
					</div>
					<span class="country-name">Norfolk Island</span>
					<span class="dial-code">+672</span>
				</li>
				<li class="country standard" id="iti-item-kp" role="option" data-dial-code="850" data-country-code="kp">
					<div class="flag-box">
						<div class="iti-flag kp"></div>
					</div>
					<span class="country-name">North Korea (조선 민주주의 인민 공화국)</span>
					<span class="dial-code">+850</span>
				</li>
				<li class="country standard" id="iti-item-mp" role="option" data-dial-code="1670" data-country-code="mp">
					<div class="flag-box">
						<div class="iti-flag mp"></div>
					</div>
					<span class="country-name">Northern Mariana Islands</span>
					<span class="dial-code">+1670</span>
				</li>
				<li class="country standard" id="iti-item-no" role="option" data-dial-code="47" data-country-code="no">
					<div class="flag-box">
						<div class="iti-flag no"></div>
					</div>
					<span class="country-name">Norway (Norge)</span>
					<span class="dial-code">+47</span>
				</li>
				<li class="country standard" id="iti-item-om" role="option" data-dial-code="968" data-country-code="om">
					<div class="flag-box">
						<div class="iti-flag om"></div>
					</div>
					<span class="country-name">Oman (‫عُمان‬‎)</span>
					<span class="dial-code">+968</span>
				</li>
				<li class="country standard" id="iti-item-pk" role="option" data-dial-code="92" data-country-code="pk">
					<div class="flag-box">
						<div class="iti-flag pk"></div>
					</div>
					<span class="country-name">Pakistan (‫پاکستان‬‎)</span>
					<span class="dial-code">+92</span>
				</li>
				<li class="country standard" id="iti-item-pw" role="option" data-dial-code="680" data-country-code="pw">
					<div class="flag-box">
						<div class="iti-flag pw"></div>
					</div>
					<span class="country-name">Palau</span>
					<span class="dial-code">+680</span>
				</li>
				<li class="country standard" id="iti-item-ps" role="option" data-dial-code="970" data-country-code="ps">
					<div class="flag-box">
						<div class="iti-flag ps"></div>
					</div>
					<span class="country-name">Palestine (‫فلسطين‬‎)</span>
					<span class="dial-code">+970</span>
				</li>
				<li class="country standard" id="iti-item-pa" role="option" data-dial-code="507" data-country-code="pa">
					<div class="flag-box">
						<div class="iti-flag pa"></div>
					</div>
					<span class="country-name">Panama (Panamá)</span>
					<span class="dial-code">+507</span>
				</li>
				<li class="country standard" id="iti-item-pg" role="option" data-dial-code="675" data-country-code="pg">
					<div class="flag-box">
						<div class="iti-flag pg"></div>
					</div>
					<span class="country-name">Papua New Guinea</span>
					<span class="dial-code">+675</span>
				</li>
				<li class="country standard" id="iti-item-py" role="option" data-dial-code="595" data-country-code="py">
					<div class="flag-box">
						<div class="iti-flag py"></div>
					</div>
					<span class="country-name">Paraguay</span>
					<span class="dial-code">+595</span>
				</li>
				<li class="country standard" id="iti-item-pe" role="option" data-dial-code="51" data-country-code="pe">
					<div class="flag-box">
						<div class="iti-flag pe"></div>
					</div>
					<span class="country-name">Peru (Perú)</span>
					<span class="dial-code">+51</span>
				</li>
				<li class="country standard" id="iti-item-ph" role="option" data-dial-code="63" data-country-code="ph">
					<div class="flag-box">
						<div class="iti-flag ph"></div>
					</div>
					<span class="country-name">Philippines</span>
					<span class="dial-code">+63</span>
				</li>
				<li class="country standard" id="iti-item-pl" role="option" data-dial-code="48" data-country-code="pl">
					<div class="flag-box">
						<div class="iti-flag pl"></div>
					</div>
					<span class="country-name">Poland (Polska)</span>
					<span class="dial-code">+48</span>
				</li>
				<li class="country standard" id="iti-item-pt" role="option" data-dial-code="351" data-country-code="pt">
					<div class="flag-box">
						<div class="iti-flag pt"></div>
					</div>
					<span class="country-name">Portugal</span>
					<span class="dial-code">+351</span>
				</li>
				<li class="country standard" id="iti-item-pr" role="option" data-dial-code="1" data-country-code="pr">
					<div class="flag-box">
						<div class="iti-flag pr"></div>
					</div>
					<span class="country-name">Puerto Rico</span>
					<span class="dial-code">+1</span>
				</li>
				<li class="country standard" id="iti-item-qa" role="option" data-dial-code="974" data-country-code="qa">
					<div class="flag-box">
						<div class="iti-flag qa"></div>
					</div>
					<span class="country-name">Qatar (‫قطر‬‎)</span>
					<span class="dial-code">+974</span>
				</li>
				<li class="country standard" id="iti-item-re" role="option" data-dial-code="262" data-country-code="re">
					<div class="flag-box">
						<div class="iti-flag re"></div>
					</div>
					<span class="country-name">Réunion (La Réunion)</span>
					<span class="dial-code">+262</span>
				</li>
				<li class="country standard" id="iti-item-ro" role="option" data-dial-code="40" data-country-code="ro">
					<div class="flag-box">
						<div class="iti-flag ro"></div>
					</div>
					<span class="country-name">Romania (România)</span>
					<span class="dial-code">+40</span>
				</li>
				<li class="country standard" id="iti-item-ru" role="option" data-dial-code="7" data-country-code="ru">
					<div class="flag-box">
						<div class="iti-flag ru"></div>
					</div>
					<span class="country-name">Russia (Россия)</span>
					<span class="dial-code">+7</span>
				</li>
				<li class="country standard" id="iti-item-rw" role="option" data-dial-code="250" data-country-code="rw">
					<div class="flag-box">
						<div class="iti-flag rw"></div>
					</div>
					<span class="country-name">Rwanda</span>
					<span class="dial-code">+250</span>
				</li>
				<li class="country standard" id="iti-item-bl" role="option" data-dial-code="590" data-country-code="bl">
					<div class="flag-box">
						<div class="iti-flag bl"></div>
					</div>
					<span class="country-name">Saint Barthélemy</span>
					<span class="dial-code">+590</span>
				</li>
				<li class="country standard" id="iti-item-sh" role="option" data-dial-code="290" data-country-code="sh">
					<div class="flag-box">
						<div class="iti-flag sh"></div>
					</div>
					<span class="country-name">Saint Helena</span>
					<span class="dial-code">+290</span>
				</li>
				<li class="country standard" id="iti-item-kn" role="option" data-dial-code="1869" data-country-code="kn">
					<div class="flag-box">
						<div class="iti-flag kn"></div>
					</div>
					<span class="country-name">Saint Kitts and Nevis</span>
					<span class="dial-code">+1869</span>
				</li>
				<li class="country standard" id="iti-item-lc" role="option" data-dial-code="1758" data-country-code="lc">
					<div class="flag-box">
						<div class="iti-flag lc"></div>
					</div>
					<span class="country-name">Saint Lucia</span>
					<span class="dial-code">+1758</span>
				</li>
				<li class="country standard" id="iti-item-mf" role="option" data-dial-code="590" data-country-code="mf">
					<div class="flag-box">
						<div class="iti-flag mf"></div>
					</div>
					<span class="country-name">Saint Martin (Saint-Martin (partie française))</span>
					<span class="dial-code">+590</span>
				</li>
				<li class="country standard" id="iti-item-pm" role="option" data-dial-code="508" data-country-code="pm">
					<div class="flag-box">
						<div class="iti-flag pm"></div>
					</div>
					<span class="country-name">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</span>
					<span class="dial-code">+508</span>
				</li>
				<li class="country standard" id="iti-item-vc" role="option" data-dial-code="1784" data-country-code="vc">
					<div class="flag-box">
						<div class="iti-flag vc"></div>
					</div>
					<span class="country-name">Saint Vincent and the Grenadines</span>
					<span class="dial-code">+1784</span>
				</li>
				<li class="country standard" id="iti-item-ws" role="option" data-dial-code="685" data-country-code="ws">
					<div class="flag-box">
						<div class="iti-flag ws"></div>
					</div>
					<span class="country-name">Samoa</span>
					<span class="dial-code">+685</span>
				</li>
				<li class="country standard" id="iti-item-sm" role="option" data-dial-code="378" data-country-code="sm">
					<div class="flag-box">
						<div class="iti-flag sm"></div>
					</div>
					<span class="country-name">San Marino</span>
					<span class="dial-code">+378</span>
				</li>
				<li class="country standard" id="iti-item-st" role="option" data-dial-code="239" data-country-code="st">
					<div class="flag-box">
						<div class="iti-flag st"></div>
					</div>
					<span class="country-name">São Tomé and Príncipe (São Tomé e Príncipe)</span>
					<span class="dial-code">+239</span>
				</li>
				<li class="country standard" id="iti-item-sa" role="option" data-dial-code="966" data-country-code="sa">
					<div class="flag-box">
						<div class="iti-flag sa"></div>
					</div>
					<span class="country-name">Saudi Arabia (‫المملكة العربية السعودية‬‎)</span>
					<span class="dial-code">+966</span>
				</li>
				<li class="country standard" id="iti-item-sn" role="option" data-dial-code="221" data-country-code="sn">
					<div class="flag-box">
						<div class="iti-flag sn"></div>
					</div>
					<span class="country-name">Senegal (Sénégal)</span>
					<span class="dial-code">+221</span>
				</li>
				<li class="country standard" id="iti-item-rs" role="option" data-dial-code="381" data-country-code="rs">
					<div class="flag-box">
						<div class="iti-flag rs"></div>
					</div>
					<span class="country-name">Serbia (Србија)</span>
					<span class="dial-code">+381</span>
				</li>
				<li class="country standard" id="iti-item-sc" role="option" data-dial-code="248" data-country-code="sc">
					<div class="flag-box">
						<div class="iti-flag sc"></div>
					</div>
					<span class="country-name">Seychelles</span>
					<span class="dial-code">+248</span>
				</li>
				<li class="country standard" id="iti-item-sl" role="option" data-dial-code="232" data-country-code="sl">
					<div class="flag-box">
						<div class="iti-flag sl"></div>
					</div>
					<span class="country-name">Sierra Leone</span>
					<span class="dial-code">+232</span>
				</li>
				<li class="country standard" id="iti-item-sg" role="option" data-dial-code="65" data-country-code="sg">
					<div class="flag-box">
						<div class="iti-flag sg"></div>
					</div>
					<span class="country-name">Singapore</span>
					<span class="dial-code">+65</span>
				</li>
				<li class="country standard" id="iti-item-sx" role="option" data-dial-code="1721" data-country-code="sx">
					<div class="flag-box">
						<div class="iti-flag sx"></div>
					</div>
					<span class="country-name">Sint Maarten</span>
					<span class="dial-code">+1721</span>
				</li>
				<li class="country standard" id="iti-item-sk" role="option" data-dial-code="421" data-country-code="sk">
					<div class="flag-box">
						<div class="iti-flag sk"></div>
					</div>
					<span class="country-name">Slovakia (Slovensko)</span>
					<span class="dial-code">+421</span>
				</li>
				<li class="country standard" id="iti-item-si" role="option" data-dial-code="386" data-country-code="si">
					<div class="flag-box">
						<div class="iti-flag si"></div>
					</div>
					<span class="country-name">Slovenia (Slovenija)</span>
					<span class="dial-code">+386</span>
				</li>
				<li class="country standard" id="iti-item-sb" role="option" data-dial-code="677" data-country-code="sb">
					<div class="flag-box">
						<div class="iti-flag sb"></div>
					</div>
					<span class="country-name">Solomon Islands</span>
					<span class="dial-code">+677</span>
				</li>
				<li class="country standard" id="iti-item-so" role="option" data-dial-code="252" data-country-code="so">
					<div class="flag-box">
						<div class="iti-flag so"></div>
					</div>
					<span class="country-name">Somalia (Soomaaliya)</span>
					<span class="dial-code">+252</span>
				</li>
				<li class="country standard" id="iti-item-za" role="option" data-dial-code="27" data-country-code="za">
					<div class="flag-box">
						<div class="iti-flag za"></div>
					</div>
					<span class="country-name">South Africa</span>
					<span class="dial-code">+27</span>
				</li>
				<li class="country standard" id="iti-item-kr" role="option" data-dial-code="82" data-country-code="kr">
					<div class="flag-box">
						<div class="iti-flag kr"></div>
					</div>
					<span class="country-name">South Korea (대한민국)</span>
					<span class="dial-code">+82</span>
				</li>
				<li class="country standard" id="iti-item-ss" role="option" data-dial-code="211" data-country-code="ss">
					<div class="flag-box">
						<div class="iti-flag ss"></div>
					</div>
					<span class="country-name">South Sudan (‫جنوب السودان‬‎)</span>
					<span class="dial-code">+211</span>
				</li>
				<li class="country standard" id="iti-item-es" role="option" data-dial-code="34" data-country-code="es">
					<div class="flag-box">
						<div class="iti-flag es"></div>
					</div>
					<span class="country-name">Spain (España)</span>
					<span class="dial-code">+34</span>
				</li>
				<li class="country standard" id="iti-item-lk" role="option" data-dial-code="94" data-country-code="lk">
					<div class="flag-box">
						<div class="iti-flag lk"></div>
					</div>
					<span class="country-name">Sri Lanka (ශ්‍රී ලංකාව)</span>
					<span class="dial-code">+94</span>
				</li>
				<li class="country standard" id="iti-$obj->IsProfileExists()['seller_type']item-sd" role="option" data-dial-code="249" data-country-code="sd">
					<div class="flag-box">
						<div class="iti-flag sd"></div>
					</div>
					<span class="country-name">Sudan (‫السودان‬‎)</span>
					<span class="dial-code">+249</span>
				</li>
				<li class="country standard" id="iti-item-sr" role="option" data-dial-code="597" data-country-code="sr">
					<div class="flag-box">
						<div class="iti-flag sr"></div>
					</div>
					<span class="country-name">Suriname</span>
					<span class="dial-code">+597</span>
				</li>
				<li class="country standard" id="iti-item-sj" role="option" data-dial-code="47" data-country-code="sj">
					<div class="flag-box">
						<div class="iti-flag sj"></div>
					</div>
					<span class="country-name">Svalbard and Jan Mayen</span>
					<span class="dial-code">+47</span>
				</li>
				<li class="country standard" id="iti-item-sz" role="option" data-dial-code="268" data-country-code="sz">
					<div class="flag-box">
						<div class="iti-flag sz"></div>
					</div>
					<span class="country-name">Swaziland</span>
					<span class="dial-code">+268</span>
				</li>
				<li class="country standard" id="iti-item-se" role="option" data-dial-code="46" data-country-code="se">
					<div class="flag-box">
						<div class="iti-flag se"></div>
					</div>
					<span class="country-name">Sweden (Sverige)</span>
					<span class="dial-code">+46</span>
				</li>
				<li class="country standard" id="iti-item-ch" role="option" data-dial-code="41" data-country-code="ch">
					<div class="flag-box">
						<div class="iti-flag ch"></div>
					</div>
					<span class="country-name">Switzerland (Schweiz)</span>
					<span class="dial-code">+41</span>
				</li>
				<li class="country standard" id="iti-item-sy" role="option" data-dial-code="963" data-country-code="sy">
					<div class="flag-box">
						<div class="iti-flag sy"></div>
					</div>
					<span class="country-name">Syria (‫سوريا‬‎)</span>
					<span class="dial-code">+963</span>
				</li>
				<li class="country standard" id="iti-item-tw" role="option" data-dial-code="886" data-country-code="tw">
					<div class="flag-box">
						<div class="iti-flag tw"></div>
					</div>
					<span class="country-name">Taiwan (台灣)</span>
					<span class="dial-code">+886</span>
				</li>
				<li class="country standard" id="iti-item-tj" role="option" data-dial-code="992" data-country-code="tj">
					<div class="flag-box">
						<div class="iti-flag tj"></div>
					</div>
					<span class="country-name">Tajikistan</span>
					<span class="dial-code">+992</span>
				</li>
				<li class="country standard" id="iti-item-tz" role="option" data-dial-code="255" data-country-code="tz">
					<div class="flag-box">
						<div class="iti-flag tz"></div>
					</div>
					<span class="country-name">Tanzania</span>
					<span class="dial-code">+255</span>
				</li>
				<li class="country standard" id="iti-item-th" role="option" data-dial-code="66" data-country-code="th">
					<div class="flag-box">
						<div class="iti-flag th"></div>
					</div>
					<span class="country-name">Thailand (ไทย)</span>
					<span class="dial-code">+66</span>
				</li>
				<li class="country standard" id="iti-item-tl" role="option" data-dial-code="670" data-country-code="tl">
					<div class="flag-box">
						<div class="iti-flag tl"></div>
					</div>
					<span class="country-name">Timor-Leste</span>
					<span class="dial-code">+670</span>
				</li>
				<li class="country standard" id="iti-item-tg" role="option" data-dial-code="228" data-country-code="tg">
					<div class="flag-box">
						<div class="iti-flag tg"></div>
					</div>
					<span class="country-name">Togo</span>
					<span class="dial-code">+228</span>
				</li>
				<li class="country standard" id="iti-item-tk" role="option" data-dial-code="690" data-country-code="tk">
					<div class="flag-box">
						<div class="iti-flag tk"></div>
					</div>
					<span class="country-name">Tokelau</span>
					<span class="dial-code">+690</span>
				</li>
				<li class="country standard" id="iti-item-to" role="option" data-dial-code="676" data-country-code="to">
					<div class="flag-box">
						<div class="iti-flag to"></div>
					</div>
					<span class="country-name">Tonga</span>
					<span class="dial-code">+676</span>
				</li>
				<li class="country standard" id="iti-item-tt" role="option" data-dial-code="1868" data-country-code="tt">
					<div class="flag-box">
						<div class="iti-flag tt"></div>
					</div>
					<span class="country-name">Trinidad and Tobago</span>
					<span class="dial-code">+1868</span>
				</li>
				<li class="country standard" id="iti-item-tn" role="option" data-dial-code="216" data-country-code="tn">
					<div class="flag-box">
						<div class="iti-flag tn"></div>
					</div>
					<span class="country-name">Tunisia (‫تونس‬‎)</span>
					<span class="dial-code">+216</span>
				</li>
				<li class="country standard" id="iti-item-tr" role="option" data-dial-code="90" data-country-code="tr">
					<div class="flag-box">
						<div class="iti-flag tr"></div>
					</div>
					<span class="country-name">Turkey (Türkiye)</span>
					<span class="dial-code">+90</span>
				</li>
				<li class="country standard" id="iti-item-tm" role="option" data-dial-code="993" data-country-code="tm">
					<div class="flag-box">
						<div class="iti-flag tm"></div>
					</div>
					<span class="country-name">Turkmenistan</span>
					<span class="dial-code">+993</span>
				</li>
				<li class="country standard" id="iti-item-tc" role="option" data-dial-code="1649" data-country-code="tc">
					<div class="flag-box">
						<div class="iti-flag tc"></div>
					</div>
					<span class="country-name">Turks and Caicos Islands</span>
					<span class="dial-code">+1649</span>
				</li>
				<li class="country standard" id="iti-item-tv" role="option" data-dial-code="688" data-country-code="tv">
					<div class="flag-box">
						<div class="iti-flag tv"></div>
					</div>
					<span class="country-name">Tuvalu</span>
					<span class="dial-code">+688</span>
				</li>
				<li class="country standard" id="iti-item-vi" role="option" data-dial-code="1340" data-country-code="vi">
					<div class="flag-box">
						<div class="iti-flag vi"></div>
					</div>
					<span class="country-name">U.S. Virgin Islands</span>
					<span class="dial-code">+1340</span>
				</li>
				<li class="country standard" id="iti-item-ug" role="option" data-dial-code="256" data-country-code="ug">
					<div class="flag-box">
						<div class="iti-flag ug"></div>
					</div>
					<span class="country-name">Uganda</span>
					<span class="dial-code">+256</span>
				</li>
				<li class="country standard" id="iti-item-ua" role="option" data-dial-code="380" data-country-code="ua">
					<div class="flag-box">
						<div class="iti-flag ua"></div>
					</div>
					<span class="country-name">Ukraine (Україна)</span>
					<span class="dial-code">+380</span>
				</li>
				<li class="country standard" id="iti-item-ae" role="option" data-dial-code="971" data-country-code="ae">
					<div class="flag-box">
						<div class="iti-flag ae"></div>
					</div>
					<span class="country-name">United Arab Emirates (‫الإمارات العربية المتحدة‬‎)</span>
					<span class="dial-code">+971</span>
				</li>
				<li class="country standard" id="iti-item-gb" role="option" data-dial-code="44" data-country-code="gb">
					<div class="flag-box">
						<div class="iti-flag gb"></div>
					</div>
					<span class="country-name">United Kingdom</span>
					<span class="dial-code">+44</span>
				</li>
				<li class="country standard" id="iti-item-us" role="option" data-dial-code="1" data-country-code="us">
					<div class="flag-box">
						<div class="iti-flag us"></div>
					</div>
					<span class="country-name">United States</span>
					<span class="dial-code">+1</span>
				</li>
				<li class="country standard" id="iti-item-uy" role="option" data-dial-code="598" data-country-code="uy">
					<div class="flag-box">
						<div class="iti-flag uy"></div>
					</div>
					<span class="country-name">Uruguay</span>
					<span class="dial-code">+598</span>
				</li>
				<li class="country standard" id="iti-item-uz" role="option" data-dial-code="998" data-country-code="uz">
					<div class="flag-box">
						<div class="iti-flag uz"></div>
					</div>
					<span class="country-name">Uzbekistan (Oʻzbekiston)</span>
					<span class="dial-code">+998</span>
				</li>
				<li class="country standard" id="iti-item-vu" role="option" data-dial-code="678" data-country-code="vu">
					<div class="flag-box">
						<div class="iti-flag vu"></div>
					</div>
					<span class="country-name">Vanuatu</span>
					<span class="dial-code">+678</span>
				</li>
				<li class="country standard" id="iti-item-va" role="option" data-dial-code="39" data-country-code="va">
					<div class="flag-box">
						<div class="iti-flag va"></div>
					</div>
					<span class="country-name">Vatican City (Città del Vaticano)</span>
					<span class="dial-code">+39</span>
				</li>
				<li class="country standard" id="iti-item-ve" role="option" data-dial-code="58" data-country-code="ve">
					<div class="flag-box">
						<div class="iti-flag ve"></div>
					</div>
					<span class="country-name">Venezuela</span>
					<span class="dial-code">+58</span>
				</li>
				<li class="country standard" id="iti-item-vn" role="option" data-dial-code="84" data-country-code="vn">
					<div class="flag-box">
						<div class="iti-flag vn"></div>
					</div>
					<span class="country-name">Vietnam (Việt Nam)</span>
					<span class="dial-code">+84</span>
				</li>
				<li class="country standard" id="iti-item-wf" role="option" data-dial-code="681" data-country-code="wf">
					<div class="flag-box">
						<div class="iti-flag wf"></div>
					</div>
					<span class="country-name">Wallis and Futuna (Wallis-et-Futuna)</span>
					<span class="dial-code">+681</span>
				</li>
				<li class="country standard" id="iti-item-eh" role="option" data-dial-code="212" data-country-code="eh">
					<div class="flag-box">
						<div class="iti-flag eh"></div>
					</div>
					<span class="country-name">Western Sahara (‫الصحراء الغربية‬‎)</span>
					<span class="dial-code">+212</span>
				</li>
				<li class="country standard" id="iti-item-ye" role="option" data-dial-code="967" data-country-code="ye">
					<div class="flag-box">
						<div class="iti-flag ye"></div>
					</div>
					<span class="country-name">Yemen (‫اليمن‬‎)</span>
					<span class="dial-code">+967</span>
				</li>
				<li class="country standard" id="iti-item-zm" role="option" data-dial-code="260" data-country-code="zm">
					<div class="flag-box">
						<div class="iti-flag zm"></div>
					</div>
					<span class="country-name">Zambia</span>
					<span class="dial-code">+260</span>
				</li>
				<li class="country standard" id="iti-item-zw" role="option" data-dial-code="263" data-country-code="zw">
					<div class="flag-box">
						<div class="iti-flag zw"></div>
					</div>
					<span class="country-name">Zimbabwe</span>
					<span class="dial-code">+263</span>
				</li>
				<li class="country standard" id="iti-item-ax" role="option" data-dial-code="358" data-country-code="ax">
					<div class="flag-box">
						<div class="iti-flag ax"></div>
					</div>
					<span class="country-name">Åland Islands</span>
					<span class="dial-code">+358</span>
				</li>
			</ul>
		</div>
		<input type="text" class="form-control" name="mobile_no" id="phone2" autocomplete="off" value = "<?= $individ['mobile_no']?>">
			<input type="hidden" name="full_number">
			</div>
		</div>
                                            
                                          
                                                  
                                         
                                         </div>
 
									  <div class="form-group">
										
										  <label class="col-md-2 control-label">Emirate ID No.
                                           
                                           </label>
                                        
                                        
                                         <div class="col-md-4">
													   
                                       <input type="text" class="form-control" name="emirate_id_no" id="emirate_id_no"
                                       value = "<?= $individ['emirate_id_no']?>"> 

                                        </div>
                                          
										</div>
                                      
                                      <div class="form-group">
											
                                        <label class="col-md-2 control-label"> Choose your unique business display name </label>
                                        
											<div class="col-md-4">
                                                      <input type="text" name="unique_business_id" class="form-control"
                                                      value = "<?= $individ['unique_business_id']?>"
                                                      >
                                             </div>
                                        
                                        </div>
                                       
                                       <div class="form-group">
                                         
                                          <label class="col-md-2 control-label">Website
                                           
                                           </label>
                                        
                                        
                                         <div class="col-md-10">
													   
                                       <input type="text" class="form-control" name="website" id="website"
                                       value = "<?= $individ['website']?>"
                                       > 

                                        </div>
                                          
                                        
                                        </div>
	
                                      <div class="form-group">
                                         
                                          <label class="col-md-2 control-label">Address
                                                   </label>
                                          <div class="col-md-10">
													   
                                       <input type="text" class="form-control" name="address" id="address"
                                       value = "<?= $individ['address']?>"
                                       > 

                                        </div>
                                            
                                            
                                                  
                                         
                                         </div>
 
 
										<div class="form-group">

									   <label class="col-md-2 control-label">Seller Type
									   <span class="required"> * </span>
									   </label>
									   <div class="col-md-4">
										  <select name="seller_type" id="seller-type" class="form-control" oninvalid="this.setCustomValidity('Please Enter seller type.')" oninput="setCustomValidity('')" required="">
											 <option value="">--Select--</option>
											 <option value="whole-sale">Whole Sale</option>
											 <option value="retails" selected="">Retails</option>
											 <option value="whole-sale-and-retail">Whole Sale And Retail</option>
											 <option value="individual">Individual</option>
										  </select>
										  
										  <small>Seller type is <?= $individ['seller_type'];?> </small>
									   </div>
									
                                                
                                                
                                                </div>

                                      <div class="form-group">
										
										  <label class="col-md-2 control-label">Document
                                           
                                           </label>
                                        
                                        
                                         <div class="col-md-4">
													   
                                      <input type="file" name="option" accept="image/*" #595656565="">

                                        </div>
                                          
										</div>
                                      
                                      
                                      <div class="portlet-title">
                                    <div class="message" id="message"></div>
                                    <div class="actions btn-set custom12">
                                       <button class="btn btn-secondary-outline" id="reset">
                                       <i class="fa fa-reply"></i> Reset</button>
                                       
                                       <button type="submit" class="btn" id="upload" name="save_individual_form">
                                       <i class="fa fa-check"></i> Save</button>    
                                       
                                                                     
                                    </div>
                                 </div>
                                     
                                     
                                      </form></div>

										
										<?php elseif($obj->IsProfileExists()['seller_type'] === 'company') :?>

									
										
										<?php if(isset($_POST['business_seller_save_btn'])):?>
										
										<!-- If seller business information updated returning true then -->
										<?php if(CompanySeller::UpdateBusinessSellerForm() === true ) :?>
										
										<div class="alert alert-success" role="alert">
											Information sucessfully updated !.
										</div>
										<?php endif; ?>
										
										
										<?php endif; ?>
										
											
									
										
									<?php
									
										$individ = $obj->IsProfileExists()['result'];
									?>
									
                                    <form  action  =  "<?=  basename($_SERVER['PHP_SELF'],'.php');?>" method  =  'POST' enctype  =  'multipart/form-data'>
                                           
                                           
                                           <div class = "form-body">
                                            
                                            
                                            
                                            <div class = "form-group">
												
												
                                                   <label class = "col-md-2 control-label">Business Name
                                                   <span class = "#595656565"> * </span>
                                                   </label>
                                                   <div class = "col-md-10">
													   
                                                      <input type = "text" id = "product-name" class = "form-control" name = "business_name" placeholder = "" value = "<?= $individ['business_name'] ?? ''; ?>"
                                                      pattern=".{2,150}" 
														oninvalid="this.setCustomValidity('Please Enter product name.')"
														oninput="setCustomValidity('')" #595656565
                                                      > 
													
                                                  
                                                  
                                                   </div>
                                                </div>
                                               
                                               
                                            <div class = "form-group">
												
												
                                                   <label class = "col-md-2 control-label">Legal From
                                                   <span class = "#595656565"> * </span>
                                                   </label>
                                                   <div class = "col-md-10">
													   
                                                      <input type = "text" id = "legal_form" class = "form-control" name = "legal_form" placeholder = "" value = "<?= $individ['legal_form'] ?? ''; ?>"
                                                      pattern=".{2,150}" 
														oninvalid="this.setCustomValidity('Please Enter product name.')"
														oninput="setCustomValidity('')" #595656565
                                                      > 
													
                                                  
                                                  
                                                   </div>
                                                </div>
                                             
                                            <div class = "form-group">
												
												
                                                   <label class = "col-md-2 control-label">Nationality
                                                   </label>
                                                   <div class = "col-md-10">
													   
                                                      <input type = "text" id = "nationality" class = "form-control" name = "nationality" placeholder = "" value = "<?= $individ['nationality'] ?? ''; ?>"
                                                      pattern=".{2,150}" 
														oninvalid="this.setCustomValidity('Please Enter product name.')"
														oninput="setCustomValidity('')" #595656565
                                                      > 
                                                     
													
                                                  
                                                  
                                                   </div>
                                                </div>

                                            <div class = "form-group">
												
												
                                                   <label class = "col-md-2 control-label">Established
                                                   </label>
                                                   <div class = "col-md-4">
													   
                                       <input type="text" class="datepicker form-control" name = "established" oninvalid="this.setCustomValidity('Please Enter date available from.')" oninput="setCustomValidity('')" #595656565="" value = "<?= $individ['established']?>"> 

                                                   </div>
                                                   
                                                  <label class = "col-md-2 control-label">Expiry Date
                                                   </label>
                                                   <div class = "col-md-4">
													   
                                       <input type="text" class="datepicker form-control " name = "expiry_date"  value= "<?= $individ['expiry_date']?>" oninvalid="this.setCustomValidity('Please Enter date available from.')" oninput="setCustomValidity('')" #595656565=""> 
													
                                                  
                                                  
                                                   </div>
                                                
                                            </div>
												
											
											<div class = "form-group">
                                         
                                          <label class = "col-md-2 control-label">Company Type
                                                   </label>
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name="company_type" id="company_type" value="<?= $individ['company_type']?>" oninvalid="this.setCustomValidity('Please Enter date available city.')" oninput="setCustomValidity('')" #595656565=""
                                       
                                       > 

                                                   </div>
                                            
                                            
                                              
                                         
                                         </div>
                                       
											<div class = "form-group">
												
												
                                                   <label class = "col-md-2 control-label">TAX NO.
                                                   </label>
                                                   <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name = "tax_no" value = "<?= $individ['tax_no']?>" oninvalid="this.setCustomValidity('Please Enter date available from.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                                   
                                                  <label class = "col-md-2 control-label">Business Registration No.
                                                   </label>
                                                   <div class = "col-md-4">
													   
                                       <input type="text" class="form-control " name = "registration_no"  value= "<?= $individ['registration_no']?>" oninvalid="this.setCustomValidity('Please Enter date available from.')" oninput="setCustomValidity('')" #595656565=""> 
													
                                                  
                                                  
                                                   </div>
                                                
                                            </div>

                                         
                                         <hr>
                                         
                                         <h5>
											CONTACT INFORMATION
                                         </h5>
                                         
                                         <div class="form-group">
                                                   <label class="col-md-2 control-label">Country Of Origin
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
                                                      <select class="form-control" name="country" oninvalid="this.setCustomValidity('Please select country of orgin.')" oninput="setCustomValidity('')" required="">
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
                                                   <div id="append_city">
                                                   </div>
                                                </div>
                                         
                                          <div class = "form-group">
                                         
                                          <label class = "col-md-2 control-label">City
                                                   </label>
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name="city" id="city" value="<?= $individ['city']; ?>" oninvalid="this.setCustomValidity('Please Enter date available city.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                            
                                            
                                           <label class = "col-md-2 control-label">PO BOX
                                                   </label>
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name="po_box" id="po_box" value="<?= $individ['po_box']; ?>" oninvalid="this.setCustomValidity('Please Enter PO BOX.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                                  
                                         
                                         </div>
 
                                        <div class = "form-group">
                                         
                                          <label class = "col-md-2 control-label">Telephone
                                                   </label>
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="phone form-control" name="telephone" id="phone" value="<?= $individ['telephone']; ?>" oninvalid="this.setCustomValidity('Please Enter date available city.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                            
                                            
                                           <label class = "col-md-2 control-label">FAX
                                                   </label>
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name="fax" id="fax" value="<?= $individ['fax']; ?>" oninvalid="this.setCustomValidity('Please Enter PO BOX.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                                  
                                         
                                         </div>

                                        <div class = "form-group">
                                         
                                          <label class = "col-md-2 control-label">Mobile No.
                                                   </label>
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name="mobile_no" id="phone1" value = "<?= $individ['mobile_no']; ?>" oninvalid="this.setCustomValidity('Please Enter date available city.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                            
                                            
                                           <label class = "col-md-2 control-label">Website
                                                   </label>
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name="website" id="website" value="<?= $individ['website']; ?>" oninvalid="this.setCustomValidity('Please Enter PO BOX.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                                  
                                         
                                         </div>
                                        
                                        
                                   <div class="form-group">
											
                                                   <label class="col-md-2 control-label">Latitude</label>
                                                   <div class="col-md-4">
                                                      
                                                      
                                                      <input type="text" id="name" class="form-control" name="latitude" value = "<?= $individ['latitude']; ?>" #595656565=""> 
                                                      
                                                      <!--
                                                      placeholder="Latitude Cordinates" value="" pattern="(\+|-)?(?:90(?:(?:\.0{1,8})?)|(?:[0-9]|[1-8][0-9])(?:(?:\.[0-9]{1,8})?))" oninvalid="this.setCustomValidity('Please enter latitude.')" oninput="setCustomValidity('')"
                                                      -->
                                                     
                                                     
                                                      <span class="help-block">Example: -50.895199</span>
                                                   </div>
                                                   <label class="col-md-2 control-label">Longitude</label>
                                                   <div class="col-md-4">
													   
													   
                                                      <input type="text" id="name" class="form-control" value = "<?= $individ['longitude']; ?>" name="longitude" #595656565=""> 
                                                      
                                                      <!--
                                                      placeholder="Longitude Cordinates" value="" pattern="(\+|-)?(?:180(?:(?:\.0{1,8})?)|(?:[0-9]|[1-9][0-9]|1[0-7][0-9])(?:(?:\.[0-9]{1,8})?))" oninvalid="this.setCustomValidity('Please enter latitude.')" oninput="setCustomValidity('')" 
                                                      -->
                                                      <span class="help-block">Example: 5.318750</span>
                                                  
                                                  
                                                  
                                                   </div>
                                                
                                              
                                                
                                         </div>
                                             
                                    <div class = "form-group">
                                         
                                          <label class = "col-md-2 control-label">Address
                                                   </label>
                                                   <div class = "col-md-10">
													   
                                       <input type="text" class="form-control" name="address" id="address" value="<?= $individ['address']; ?>" oninvalid="this.setCustomValidity('Please Enter date available address.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                                   
                                         
                                         </div>
 
                                    <div class = "form-group">
											
                                        <label class="col-md-2 control-label"> Choose your unique business display name. </label>
                                        
											<div class="col-md-4">
                                                      <input type="text" name="unique_business_id" class = "form-control" value = "<?= $individ['unique_business_id']; ?>">
                                             </div>
                                        
                                        </div>
                                       
									
									
									<div class="form-group">

									   <label class="col-md-2 control-label">Seller Type
									   <span class="required"> * </span>
									   </label>
									   <div class="col-md-4">
										  <select name="seller_type" id="seller_type" class="form-control" oninvalid="this.setCustomValidity('Please Enter seller type.')" oninput="setCustomValidity('')" required="">
											 <option value="">--Select--</option>
											 <option value="whole-sale">Whole Sale</option>
											 <option value="retails" selected="">Retails</option>
											 <option value="whole-sale-and-retail">Whole Sale And Retail</option>
											 <option value="individual">Individual</option>
										  </select>
										  <small> Seller Type <?= $individ['seller_type']?> is set.</small>
									   </div>
									
                                                
                                                
                                                </div>

									<div class="form-group">
										
										  <label class="col-md-2 control-label">Document
                                           
                                           </label>
                                        
                                        
                                         <div class="col-md-4">
													   
                                      <input type="file" name="option" accept="image/*" #595656565="">

                                        </div>
                                          
										</div>
        
									<div class = "portlet-title">
                                    <div class = "message" id = "message"></div>
                                    <div class = "actions btn-set custom12">
                                       <button class = "btn btn-secondary-outline" id = "reset">
                                       <i class = "fa fa-reply"></i> Reset</button>
                                       
                                       <button type  =  "submit" class = "btn" id = "upload" name = "business_seller_save_btn">
                                       <i class = "fa fa-check"></i> Save</button>    
                                       
                                                                     
                                    </div>
                                 </div>
                           
                                    </div>
 
                                     
                                           
								</form>
                                   
                                   
									
										
										<?php endif; ?>
										
										<?php else: ?>
										
										<div class = "tab-pane active" id = "tab_general">
                                           
                                         <div class = "form-group">
                                            
                                            <label class = "col-md-2 control-label">Seller Type</label>
                                            
                                            <div class = "col-md-10">
												
												
												
												<label class = "col-md-2 control-label" for = "individual">Individual</label>
												
												
												<div class = "col-md-2">
												<input type = "radio" name = "seller-type" value = "individual" id = "individual"/>
												</div>
												
												
												
												<label class = "col-md-2 control-label" for = "business">Business</label>
												
												<div class = "col-md-2">
												<input type = "radio" name = "seller-type" value = "business" id = "business"/>
												</div>
												
										
												
                                            </div>
                                            
                                            
                                            
												
                                            </div>
                                            
                                             <div class = "">
                                           
                                           
                                            
                                            </div>
                                           
                                           <div id = "if_company">
                                    <form  action  =  "<?=  basename($_SERVER['PHP_SELF'],'.php');?>" method  =  'POST' enctype  =  'multipart/form-data' id = "company_form" style = "display:none;">
                                           
                                           
                                           <div class = "form-body">
                                            
                                            
                                            
                                            <div class = "form-group">
												
												
                                                   <label class = "col-md-2 control-label">Business Name
                                                   <span class = "#595656565"> * </span>
                                                   </label>
                                                   <div class = "col-md-10">
													   
                                                      <input type = "text" id = "product-name" class = "form-control" name = "business_name" placeholder = "" value = "<?php echo $_POST['business_name'] ?? ''; ?>"
                                                      pattern=".{2,150}" 
														oninvalid="this.setCustomValidity('Please Enter product name.')"
														oninput="setCustomValidity('')" #595656565
                                                      > 
													
                                                  
                                                  
                                                   </div>
                                                </div>
                                               
                                               
                                              <div class = "form-group">
												
												
                                                   <label class = "col-md-2 control-label">Legal From
                                                   <span class = "#595656565"> * </span>
                                                   </label>
                                                   <div class = "col-md-10">
													   
                                                      <input type = "text" id = "legal_form" class = "form-control" name = "legal_form" placeholder = "" value = "<?php echo $_POST['legal_form'] ?? ''; ?>"
                                                      pattern=".{2,150}" 
														oninvalid="this.setCustomValidity('Please Enter product name.')"
														oninput="setCustomValidity('')" #595656565
                                                      > 
													
                                                  
                                                  
                                                   </div>
                                                </div>
                                             
                                             <div class = "form-group">
												
												
                                                   <label class = "col-md-2 control-label">Nationality
                                                   </label>
                                                   <div class = "col-md-10">
													   
                                                      <input type = "text" id = "nationality" class = "form-control" name = "nationality" placeholder = "" value = "<?php echo $_POST['nationality'] ?? ''; ?>"
                                                      pattern=".{2,150}" 
														oninvalid="this.setCustomValidity('Please Enter product name.')"
														oninput="setCustomValidity('')" #595656565
                                                      > 
                                                     
													
                                                  
                                                  
                                                   </div>
                                                </div>

                                             <div class = "form-group">
												
												
                                                   <label class = "col-md-2 control-label">Established
                                                   </label>
                                                   <div class = "col-md-4">
													   
                                       <input type="text" class="datepicker form-control" name = "established" oninvalid="this.setCustomValidity('Please Enter date available from.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                                   
                                                  <label class = "col-md-2 control-label">Expiry Date
                                                   </label>
                                                   <div class = "col-md-4">
													   
                                       <input type="text" class="datepicker form-control " name = "expiry_date"  value="" oninvalid="this.setCustomValidity('Please Enter date available from.')" oninput="setCustomValidity('')" #595656565=""> 
													
                                                  
                                                  
                                                   </div>
                                                
                                            </div>
												
											
											<div class = "form-group">
                                         
                                          <label class = "col-md-2 control-label">Company Type
                                                   </label>
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name="company_type" id="company_type" value="" oninvalid="this.setCustomValidity('Please Enter date available city.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                            
                                            
                                              
                                         
                                         </div>
                                       
											<div class = "form-group">
												
												
                                                   <label class = "col-md-2 control-label">TAX NO.
                                                   </label>
                                                   <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name = "tax_no" oninvalid="this.setCustomValidity('Please Enter date available from.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                                   
                                                  <label class = "col-md-2 control-label">Business Registration No.
                                                   </label>
                                                   <div class = "col-md-4">
													   
                                       <input type="text" class="form-control " name = "registration_no"  value="" oninvalid="this.setCustomValidity('Please Enter date available from.')" oninput="setCustomValidity('')" #595656565=""> 
													
                                                  
                                                  
                                                   </div>
                                                
                                            </div>

                                         
                                         <hr>
                                         
                                         <h5>
											CONTACT INFORMATION
                                         </h5>
                                         
                                         <div class="form-group">
                                                   <label class="col-md-2 control-label">Country Of Origin
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
                                                      <select class="form-control" name="country" oninvalid="this.setCustomValidity('Please select country of orgin.')" oninput="setCustomValidity('')" required="">
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
                                                   <div id="append_city">
                                                   </div>
                                                </div>
                                         
                                          <div class = "form-group">
                                         
                                          <label class = "col-md-2 control-label">City
                                                   </label>
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name="city" id="city" value="" oninvalid="this.setCustomValidity('Please Enter date available city.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                            
                                            
                                           <label class = "col-md-2 control-label">PO BOX
                                                   </label>
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name="po_box" id="po_box" value="" oninvalid="this.setCustomValidity('Please Enter PO BOX.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                                  
                                         
                                         </div>
 
                                        <div class = "form-group">
                                         
                                          <label class = "col-md-2 control-label">Telephone
                                                   </label>
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="phone form-control" name="telephone" id="phone" value="" oninvalid="this.setCustomValidity('Please Enter date available city.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                            
                                            
                                           <label class = "col-md-2 control-label">FAX
                                                   </label>
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name="fax" id="fax" value="" oninvalid="this.setCustomValidity('Please Enter PO BOX.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                                  
                                         
                                         </div>

                                        <div class = "form-group">
                                         
                                          <label class = "col-md-2 control-label">Mobile No.
                                                   </label>
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name="mobile_no" id="phone1" oninvalid="this.setCustomValidity('Please Enter date available city.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                            
                                            
                                           <label class = "col-md-2 control-label">Website
                                                   </label>
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name="website" id="website" value="" oninvalid="this.setCustomValidity('Please Enter PO BOX.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                                  
                                         
                                         </div>
                                        
                                        
                                   <div class="form-group">
											
                                                   <label class="col-md-2 control-label">Latitude</label>
                                                   <div class="col-md-4">
                                                      
                                                      
                                                      <input type="text" id="name" class="form-control" name="latitude"  #595656565=""> 
                                                      
                                                      <!--
                                                      placeholder="Latitude Cordinates" value="" pattern="(\+|-)?(?:90(?:(?:\.0{1,8})?)|(?:[0-9]|[1-8][0-9])(?:(?:\.[0-9]{1,8})?))" oninvalid="this.setCustomValidity('Please enter latitude.')" oninput="setCustomValidity('')"
                                                      -->
                                                     
                                                     
                                                      <span class="help-block">Example: -50.895199</span>
                                                   </div>
                                                   <label class="col-md-2 control-label">Longitude</label>
                                                   <div class="col-md-4">
													   
													   
                                                      <input type="text" id="name" class="form-control" name="longitude" #595656565=""> 
                                                      
                                                      <!--
                                                      placeholder="Longitude Cordinates" value="" pattern="(\+|-)?(?:180(?:(?:\.0{1,8})?)|(?:[0-9]|[1-9][0-9]|1[0-7][0-9])(?:(?:\.[0-9]{1,8})?))" oninvalid="this.setCustomValidity('Please enter latitude.')" oninput="setCustomValidity('')" 
                                                      -->
                                                      <span class="help-block">Example: 5.318750</span>
                                                  
                                                  
                                                  
                                                   </div>
                                                
                                              
                                                
                                         </div>
                                             
                                    <div class = "form-group">
                                         
                                          <label class = "col-md-2 control-label">Address
                                                   </label>
                                                   <div class = "col-md-10">
													   
                                       <input type="text" class="form-control" name="address" id="address" value="" oninvalid="this.setCustomValidity('Please Enter date available address.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                                   
                                         
                                         </div>
 
                                    <div class = "form-group">
											
                                        <label class="col-md-2 control-label"> Choose your unique business display name. </label>
                                        
											<div class="col-md-4">
                                                      <input type="text" name="unique_business_id" class = "form-control">
                                             </div>
                                        
                                        </div>
                                       
									
									
									<div class="form-group">

									   <label class="col-md-2 control-label">Seller Type
									   <span class="required"> * </span>
									   </label>
									   <div class="col-md-4">
										  <select name="seller_type" id="seller_type" class="form-control" oninvalid="this.setCustomValidity('Please Enter seller type.')" oninput="setCustomValidity('')" required="">
											 <option value="">--Select--</option>
											 <option value="whole-sale">Whole Sale</option>
											 <option value="retails" selected="">Retails</option>
											 <option value="whole-sale-and-retail">Whole Sale And Retail</option>
											 <option value="individual">Individual</option>
										  </select>
									   </div>
									
                                                
                                                
                                                </div>

									<div class="form-group">
										
										  <label class="col-md-2 control-label">Document
                                           
                                           </label>
                                        
                                        
                                         <div class="col-md-4">
													   
                                      <input type="file" name="option" accept="image/*" #595656565="">

                                        </div>
                                          
										</div>
        
									<div class = "portlet-title">
                                    <div class = "message" id = "message"></div>
                                    <div class = "actions btn-set custom12">
                                       <button class = "btn btn-secondary-outline" id = "reset">
                                       <i class = "fa fa-reply"></i> Reset</button>
                                       
                                       <button type  =  "submit" class = "btn" id = "upload" name = "business_submit_btn">
                                       <i class = "fa fa-check"></i> Save</button>    
                                       
                                                                     
                                    </div>
                                 </div>
                           
                                    </div>
                                   
                                     
                                           
								</form>
                                   </div>
									
											<div id = "if_individual">
									<form action  =  "<?=  basename($_SERVER['PHP_SELF'],'.php');?>" method  =  'POST' enctype  =  'multipart/form-data' id  ="individual_form" style = "display:none;">
								

                                        
                                        <div class = "form-group">
                                         
                                          <label class = "col-md-2 control-label">Country
                                          </label>
										
										<div class = "col-md-4">
										<select class="form-control" id="country" name="country" oninvalid="this.setCustomValidity('Please select country of orgin.')" oninput="setCustomValidity('')" required="">
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
                                        
                                        <label class = "col-md-2 control-label">City
                                        </label>
                                        
                                        <div class="col-md-4">
													   
                                       <input type="text" class="form-control" name="city" id="city" value="" oninvalid="this.setCustomValidity('Please Enter date available city.')" oninput="setCustomValidity('')" #595656565=""> 

                                                   </div>
                                        
                                         </div>
                                        
                                        
                                        
                                       <div class = "form-group">
                                         
                                          <label class = "col-md-2 control-label">State/ Region / Province
                                           </label>
                                          
                                          
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name="state_region_province" id="state_region_province"> 

                                        </div>
                                            
                                            
                                           <label class = "col-md-2 control-label">Zip/ Post Code
                                           </label>
                                          
                                          
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name="post_zip_code" id="post_zip_code"> 

                                        </div>
                                            
                                            
                                                  
                                         
                                         </div>

                                       <div class = "form-group">
                                         
                                          <label class = "col-md-2 control-label">Land Line No.
                                           </label>
                                          
                                          
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name="land_line_no" id="land_line_no"> 

                                        </div>
                                            
                                            
                                         
                                          <label class = "col-md-2 control-label">Nationality
                                           </label>
                                          
                                          
                                          <div class = "col-md-4">
													   
                                       <select name="nationality" class = "form-control">
  <option value="">-- select one --</option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="cameroonian">Cameroonian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
</select>

                                        </div>
                                            
                                          
                                            
                                                  
                                         
                                         </div>
                                        
                                       <div class = "form-group">
                                           
                                             <label class = "col-md-2 control-label">Mobile No.
                                           </label>
                                          
                                          
                                          <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name="mobile_no" id="phone2"> 

                                        </div>
                                            
                                          
                                                  
                                         
                                         </div>
 
									  <div class = "form-group">
										
										  <label class = "col-md-2 control-label">Emirate ID No.
                                           
                                           </label>
                                        
                                        
                                         <div class = "col-md-4">
													   
                                       <input type="text" class="form-control" name="emirate_id_no" id="emirate_id_no"> 

                                        </div>
                                          
										</div>
                                      
                                      <div class = "form-group">
											
                                        <label class="col-md-2 control-label"> Choose your unique business display name </label>
                                        
											<div class="col-md-4">
                                                      <input type="text" name="unique_business_id" class = "form-control">
                                             </div>
                                        
                                        </div>
                                       
                                       <div class = "form-group">
                                         
                                          <label class = "col-md-2 control-label">Website
                                           
                                           </label>
                                        
                                        
                                         <div class = "col-md-10">
													   
                                       <input type="text" class="form-control" name="website" id="website"> 

                                        </div>
                                          
                                        
                                        </div>
	
                                      <div class = "form-group">
                                         
                                          <label class = "col-md-2 control-label">Address
                                                   </label>
                                          <div class = "col-md-10">
													   
                                       <input type="text" class="form-control" name="address" id="address"> 

                                        </div>
                                            
                                            
                                                  
                                         
                                         </div>
 
 
										<div class="form-group">

									   <label class="col-md-2 control-label">Seller Type
									   <span class="required"> * </span>
									   </label>
									   <div class="col-md-4">
										  <select name="seller_type" id="seller-type" class="form-control" oninvalid="this.setCustomValidity('Please Enter seller type.')" oninput="setCustomValidity('')" required="">
											 <option value="">--Select--</option>
											 <option value="whole-sale">Whole Sale</option>
											 <option value="retails" selected="">Retails</option>
											 <option value="whole-sale-and-retail">Whole Sale And Retail</option>
											 <option value="individual">Individual</option>
										  </select>
									   </div>
									
                                                
                                                
                                                </div>

                                      <div class = "form-group">
										
										  <label class = "col-md-2 control-label">Document
                                           
                                           </label>
                                        
                                        
                                         <div class = "col-md-4">
													   
                                      <input type="file" name="option" accept="image/*" #595656565>

                                        </div>
                                          
										</div>
                                      
                                      
                                      <div class="portlet-title">
                                    <div class="message" id="message"></div>
                                    <div class="actions btn-set custom12">
                                       <button class="btn btn-secondary-outline" id="reset">
                                       <i class="fa fa-reply"></i> Reset</button>
                                       
                                       <button type="submit" class="btn" id="upload" name="individual_submit_btn">
                                       <i class="fa fa-check"></i> Save</button>    
                                       
                                                                     
                                    </div>
                                 </div>
                                      </div>
									</div>

                                 </form>
                                
                                
										
										<?php endif; ?>
										  
										  
                                          
                                
                                
                                 </div>
                                 
                                 </div>
                                    </div>
                           </div>
                        </div>
                     </div>
                     <!-- END DASHBOARD STATS 1-->
                     <!-- END PAGE BASE CONTENT -->
                  </div>
                  
                   <div class="clearfix"></div>
                    
                    
                   
                   
                   
                   
                   
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
                        
                        
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                                <span class="badge badge-success">7</span>
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
                                <li>
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-settings"></i> Settings </a>
                                </li>
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
        <!-- END THEME LAYOUT SCRIPTS -->
        <script src = "js/jquery.min.js" type = "text/javascript"></script>
            <script src = "js/bootstrap.min.js" type = "text/javascript"></script>
            <script src = "js/js.cookie.min.js" type = "text/javascript"></script>
            <script src = "js/bootstrap-hover-dropdown.min.js" type = "text/javascript"></script>
            <script src = "js/jquery.slimscroll.min.js" type = "text/javascript"></script>
            <script src = "js/jquery.blockui.min.js" type = "text/javascript"></script>
            <script src = "js/jquery.uniform.min.js" type = "text/javascript"></script>
            <script src = "js/bootstrap-switch.min.js" type = "text/javascript"></script>
            <script src = "js/bootstrap-datepicker.min.js" type = "text/javascript"></script>
            <script src = "js/bootstrap-datetimepicker.min.js" type = "text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src = "js/moment.min.js" type = "text/javascript"></script>
            <script src = "js/daterangepicker.min.js" type = "text/javascript"></script>
            <script src = "js/morris.min.js" type = "text/javascript"></script>
            <script src = "js/raphael-min.js" type = "text/javascript"></script>
            <script src = "js/jquery.waypoints.min.js" type = "text/javascript"></script>
            <script src = "js/jquery.counterup.min.js" type = "text/javascript"></script>
            <script src = "js/amcharts.js" type = "text/javascript"></script>
            <script src = "js/serial.js" type = "text/javascript"></script>
            <script src = "js/pie.js" type = "text/javascript"></script>
            <script src = "js/radar.js" type = "text/javascript"></script>
            <script src = "js/light.js" type = "text/javascript"></script>
            <script src = "js/patterns.js" type = "text/javascript"></script>
            <script src = "js/chalk.js" type = "text/javascript"></script>
            <script src = "js/ammap.js" type = "text/javascript"></script>
            <script src = "js/worldLow.js" type = "text/javascript"></script>
            <script src = "js/amstock.js" type = "text/javascript"></script>
            <script src = "js/fullcalendar.min.js" type = "text/javascript"></script>
            <script src = "js/jquery.flot.min.js" type = "text/javascript"></script>
            <script src = "js/jquery.flot.resize.min.js" type = "text/javascript"></script>
            <script src = "js/jquery.flot.categories.min.js" type = "text/javascript"></script>
            <script src = "js/jquery.easypiechart.min.js" type = "text/javascript"></script>
            <script src = "js/jquery.sparkline.min.js" type = "text/javascript"></script>
            <script src = "js/jquery.vmap.js" type = "text/javascript"></script>
            <script src = "js/jquery.vmap.russia.js" type = "text/javascript"></script>
            <script src = "js/jquery.vmap.world.js" type = "text/javascript"></script>
            <script src = "js/jquery.vmap.europe.js" type = "text/javascript"></script>
            <script src = "js/jquery.vmap.germany.js" type = "text/javascript"></script>
            <script src = "js/jquery.vmap.usa.js" type = "text/javascript"></script>
            <script src = "js/jquery.vmap.sampledata.js" type = "text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src = "js/app.min.js" type = "text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src = "js/dashboard.min.js" type = "text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src = "js/layout.min.js" type = "text/javascript"></script>
            <script src = "js/demo.min.js" type = "text/javascript"></script>
            <script src = "js/quick-sidebar.min.js" type = "text/javascript"></script>
            <script src  =  "js/custom.js" type = "text/javascript"></script>
       
       <script>
       
       </script>
       
       
       <script src="../js/intlTelInput.js"></script>
       
        <script>
    
    
    var input = document.querySelector("#phone");
   
   var input1 = document.querySelector("#phone1");
   
   var input2 = document.querySelector("#phone2");
   
    var input3 = document.querySelector("#land_line_no");
   
   
    window.intlTelInput(input, {
      // allowDropdown: false,
      autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
       placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });
    
     window.intlTelInput(input1, {
      // allowDropdown: false,
      autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
       placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });
    
    
     window.intlTelInput(input2, {
      // allowDropdown: false,
      autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
       placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });
    
   
    window.intlTelInput(input3, {
      // allowDropdown: false,
      autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
       placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });
    
   
    
    
    
   $('input[name="seller-type"]').change(function() {
	   
	  
    if (this.value == 'individual') {
       
       
       
        $('#company_form').hide();
         $('#individual_form').show();
        
    }
    else if (this.value == 'business') {
        
       
        $('#individual_form').hide();
        $('#company_form').show();
         
        
        
    } else {
		
		 $('#individual_form').hide();
        
        $('#company_form').hide();
       
		
		}
});
  </script>
  
  <!-- Writing code for jquery radio button onchange seller-type name element -->
  
  

    </body>

</html>
