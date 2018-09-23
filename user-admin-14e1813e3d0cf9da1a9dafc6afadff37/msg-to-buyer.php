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
							<h4> Your Account is Incomplete!</h4> 
							<h6>Please verify you account</h6>
							
							
							<?php
echo "<pre>";
print_r($obj->GetBuyerMessage());

echo "</pre>";
 ?>
							
						</div>
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
                                          <li>
                                             <a href="#tab_meta" data-toggle="tab"> Meta </a>
                                          </li>
                                         
                                         
                                         
                                       </ul>
                                       <form id="form58656" action="/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-the-product.php" method="POST" enctype="multipart/form-data">
                                       <div class="tab-content" id="form_sample_1">
										  
                                          <div class="tab-pane active" id="tab_general">
                                             <div class="form-body">
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Name:
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-10">
                                                      <input type="text" id="product-name" class="form-control" name="product-name" placeholder="" value=""> 
													<small class="text-info"> For product optimization check your product name in amazon, aliexpress or google, key words is importent so they can find you in google search as well</small>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Description:
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-10">
                                                      <textarea class="form-control" id="discription" name="discription"></textarea>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Short Description:
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-10">
                                                      <textarea class="form-control" name="short-discription" id="short-discription"></textarea>
                                                      <span class="help-block"> shown in product listing </span>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Available Date:
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
                                                      <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                                        
                                                         <input type="text" class="form-control" name="date-available-from" id="date-available-from" value="">
                                                        
                                                         <span class="input-group-addon"> to </span>
                                                        
                                                         <input type="text" class="form-control" name="date-available-to" id="date-available-to" value="">
                                                      </div>
                                                      <span class="help-block"> availability daterange. </span>
                                                   </div>
                                                   <label class="col-md-2 control-label">Category
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
                                                      <select class="table-group-action-input form-control input-medium" name="category"><option value="">Select Category</option><optgroup label="women's Clothing" class="ul-first"></optgroup><optgroup label="Hot Category" class="ul-secound"><option value="Dresses#2e3615a020749111">Dresses</option><option value="Hoodies &amp; Sweatshirts#2e3615a020749112">Hoodies &amp; Sweatshirts</option><option value="BlouShirts#2e3615a020749113">BlouShirts</option><option value="T-Shirts &amp;Tops,Polos&amp;Shirts#2e3615a020749114">T-Shirts &amp;Tops,Polos&amp;Shirts</option><option value="Sweaters#2e3615a020749115">Sweaters</option><option value="Socks &amp; Hosiery#2e3615a020749116">Socks &amp; Hosiery</option></optgroup><optgroup label="Bottoms" class="ul-secound"><option value="Skirts#2e3615a020749121">Skirts</option><option value="Leggings#2e3615a020749122">Leggings</option><option value="Jeans#2e3615a020749123">Jeans</option><option value="Pants &amp; Capris#2e3615a020749124">Pants &amp; Capris</option><option value="Wide Leg Pants#2e3615a020749125">Wide Leg Pants</option><option value="Shorts#2e3615a020749126">Shorts</option></optgroup><optgroup label="Outwear &amp; Jackets" class="ul-secound"><option value="Jackets &amp; Coats#2e3615a020749131">Jackets &amp; Coats</option><option value="Real Fur#2e3615a020749132">Real Fur</option><option value="Blazers#2e3615a020749133">Blazers</option><option value="Trench#2e3615a020749134">Trench</option><option value="Parkas#2e3615a020749135">Parkas</option></optgroup><optgroup label="Tops &amp; Sets" class="ul-secound"><option value="Tank Tops#2e3615a020749141">Tank Tops</option><option value="Suits &amp; Sets#2e3615a020749142">Suits &amp; Sets</option><option value="Jumpsuits, Rompers, Overalls#2e3615a020749143">Jumpsuits, Rompers, Overalls</option><option value="Intimates#2e3615a020749144">Intimates</option><option value="Sleep &amp; Lounge#2e3615a020749145">Sleep &amp; Lounge</option></optgroup><optgroup label="Weddings &amp; Events" class="ul-secound"><option value="Wedding Dresses#2e3615a020749151">Wedding Dresses</option><option value="Evening Dresses#2e3615a020749152">Evening Dresses</option><option value="Prom Dresses#2e3615a020749153">Prom Dresses</option><option value="Bridesmaid Dresses#2e3615a020749154">Bridesmaid Dresses</option><option value="Flower Girl Dresses#2e3615a020749155">Flower Girl Dresses</option><option value="Cocktail Dresses#2e3615a020749156">Cocktail Dresses</option></optgroup><optgroup label="Accessories" class="ul-secound"><option value="Eyewear &amp; Accessories#2e3615a020749161">Eyewear &amp; Accessories</option><option value="Hats &amp; Caps#2e3615a020749162">Hats &amp; Caps</option><option value="Belts &amp; Cummerbunds#2e3615a020749163">Belts &amp; Cummerbunds</option><option value="Scarves &amp; Wraps#2e3615a020749164">Scarves &amp; Wraps</option><option value="Gloves &amp; Mittens#2e3615a020749165">Gloves &amp; Mittens</option><option value="Prescription Glasses#2e3615a020749166">Prescription Glasses</option></optgroup><optgroup label="Men's Clothing" class="ul-first"></optgroup><optgroup label="Hot Sale" class="ul-secound"><option value="Hoodies &amp; Sweatshirts#2e3615a020749211">Hoodies &amp; Sweatshirts</option><option value="Jackets#2e3615a020749212">Jackets</option><option value="T-Shirts#2e3615a020749213">T-Shirts</option><option value="Shirts#2e3615a020749214">Shirts</option><option value="Sweaters#2e3615a020749215">Sweaters</option><option value="Socks#2e3615a020749216 ">Socks</option></optgroup><optgroup label="Bottoms" class="ul-secound"><option value="Casual Pants#2e3615a020749221">Casual Pants</option><option value="Cargo Pants#2e3615a020749222">Cargo Pants</option><option value="Jeans#2e3615a020749223">Jeans</option><option value="Sweatpants#2e3615a020749224">Sweatpants</option><option value="Harem Pants#2e3615a020749225">Harem Pants</option><option value="Shorts#2e3615a020749226 ">Shorts</option></optgroup><optgroup label="Outerwear &amp; Jackets" class="ul-secound"><option value="Trench#2e3615a020749231">Trench</option><option value="Genuine Leather#2e3615a020749232">Genuine Leather</option><option value="Parkas#2e3615a020749233">Parkas</option><option value="Down Jackets#2e3615a020749234">Down Jackets</option><option value="Wool &amp; Blends#2e3615a020749235">Wool &amp; Blends</option><option value="Suits &amp; Blazer#2e3615a020749236">Suits &amp; Blazer</option></optgroup><optgroup label="Underwear &amp; Loungewear" class="ul-secound"><option value="Boxers#2e3615a020749241">Boxers</option><option value="Briefs#2e3615a020749242">Briefs</option><option value="Long Johns#2e3615a020749243">Long Johns</option><option value="Men's Sleep &amp; Lounge#2e3615a020749244">Men's Sleep &amp; Lounge</option><option value="Pajama Sets#2e3615a020749245">Pajama Sets</option><option value="Robes#2e3615a020749246 ">Robes</option></optgroup><optgroup label="Accessories" class="ul-secound"><option value="Scarves#2e3615a020749251">Scarves</option><option value="Skullies &amp; Beanies#2e3615a020749252">Skullies &amp; Beanies</option><option value="Prescription Glasses#2e3615a020749253">Prescription Glasses</option><option value="Gloves &amp; Mittens#2e3615a020749254">Gloves &amp; Mittens</option><option value="Belts#2e3615a020749255">Belts</option><option value="Bomber Hats#2e3615a020749256">Bomber Hats</option><option value="Fedoras#2e3615a020749257">Fedoras</option><option value="Berets#2e3615a020749258">Berets</option><option value="Baseball Caps#2e3615a020749259">Baseball Caps</option></optgroup><optgroup label="Novelty &amp; Special Use" class="ul-secound"><option value="Cosplay Costumes#2e3615a020749261">Cosplay Costumes</option><option value="Stage &amp; Dance Wear#2e3615a020749262">Stage &amp; Dance Wear</option><option value="Exotic Appare#2e3615a020749263">Exotic Appare</option></optgroup><optgroup label="Phones &amp; Accessories" class="ul-first"></optgroup><optgroup label="Mobile Phones" class="ul-secound"><option value="Octa Core#2e3615a020749311">Octa Core</option><option value="Deca Core#2e3615a020749312">Deca Core</option><option value="Single SIM Card#2e3615a020749313">Single SIM Card</option><option value="Dual SIM Card#2e3615a020749314">Dual SIM Card</option><option value="Smart Phone#2e3615a020749315">Smart Phone</option><option value="Feature Phone#2e3615a020749316">Feature Phone</option></optgroup><optgroup label="Mobile Phone Parts" class="ul-secound"><option value="Mobile Phone LCDs#2e3615a020749321">Mobile Phone LCDs</option><option value="Mobile Phone Batteries#2e3615a020749322">Mobile Phone Batteries</option><option value="Mobile Phone Housings#2e3615a020749323">Mobile Phone Housings</option><option value="Mobile Phone Touch Panel#2e3615a020749324">Mobile Phone Touch Panel</option><option value="Flex Cables#2e3615a020749325">Flex Cables</option><option value="SIM Card &amp; Tools#2e3615a020749326">SIM Card &amp; Tools</option></optgroup><optgroup label="Cases &amp; Covers" class="ul-secound"><option value="Patterned Cases#2e3615a020749331">Patterned Cases</option><option value="Wallet Cases#2e3615a020749332">Wallet Cases</option><option value="Waterptoof Cases#2e3615a020749333">Waterptoof Cases</option><option value="Leather Cases#2e3615a020749334">Leather Cases</option><option value="Silicone Cases#2e3615a020749335">Silicone Cases</option><option value="Flip Cases#2e3615a020749336">Flip Cases</option><option value="iPhone X Cases#2e3615a020749337">iPhone X Cases</option><option value="Cases For iPhone 8/8 Plus#2e3615a020749338">Cases For iPhone 8/8 Plus</option><option value="Cases For iPhone 7/7 Plus#2e3615a020749339">Cases For iPhone 7/7 Plus</option><option value="Cases For iPhone 6/6 Plus#2e3615a020749340">Cases For iPhone 6/6 Plus</option><option value="Galaxy S8 Cases#2e3615a0207493401">Galaxy S8 Cases</option><option value="Galaxy S7 Cases#2e3615a0207493402">Galaxy S7 Cases</option><option value="Xiaomi Cases#2e3615a0207493403">Xiaomi Cases</option><option value="Huawei Cases#2e3615a0207493404">Huawei Cases</option></optgroup><optgroup label="Mobile Phone Accessories34" class="ul-secound"><option value="Power Bank#2e3615a020749341">Power Bank</option><option value="Screen Protectors#2e3615a020749342">Screen Protectors</option><option value="Mobile Phone Cables#2e3615a020749343">Mobile Phone Cables</option><option value="Mobile Phone Chargers#2e3615a020749344">Mobile Phone Chargers</option><option value="Holders &amp; Stands#2e3615a020749345">Holders &amp; Stands</option><option value="Mobile Phone Lenses#2e3615a020749346">Mobile Phone Lenses</option></optgroup><optgroup label="Hot Categories" class="ul-secound"><option value="Car Chargers#2e3615a020749351">Car Chargers</option><option value="Quick Chargers#2e3615a020749352">Quick Chargers</option><option value="iPhone Cables#2e3615a020749353">iPhone Cables</option><option value="Type C Cables#2e3615a020749354">Type C Cables</option><option value="20000mAh Power Bank#2e3615a020749355">20000mAh Power Bank</option><option value="Battery Charger Cases#2e3615a020749356">Battery Charger Cases</option></optgroup><optgroup label="Computer,Office,Security" class="ul-first"></optgroup><optgroup label="Laptop &amp; Tablets" class="ul-secound"><option value="Laptops#2e3615a020749411">Laptops</option><option value="Gaming Laptops#2e3615a020749412">Gaming Laptops</option><option value="Tablets#2e3615a020749413">Tablets</option><option value="2 in 1 Tablets#2e3615a020749414">2 in 1 Tablets</option><option value="Phone Call Tablets#2e3615a020749415">Phone Call Tablets</option><option value="iPad#2e3615a020749416 ">iPad</option></optgroup><optgroup label="Tablet &amp; Laptop Accessories" class="ul-secound"><option value="Laptop Bags &amp; Cases#2e3615a020749421">Laptop Bags &amp; Cases</option><option value="Laptop Batteries#2e3615a020749422">Laptop Batteries</option><option value="Tablet Accessories#2e3615a020749423">Tablet Accessories</option><option value="Tablet LCD Screens#2e3615a020749424">Tablet LCD Screens</option><option value="Tablet Cases#2e3615a020749425">Tablet Cases</option></optgroup><optgroup label="Security &amp; Protection" class="ul-secound"><option value="Surveillance Products#2e3615a020749431">Surveillance Products</option><option value="Access Control#2e3615a020749432">Access Control</option><option value="Fire Protection#2e3615a020749433">Fire Protection</option><option value="Workplace Safety Supplies#2e3615a020749434">Workplace Safety Supplies</option><option value="Alarm &amp; Sensor#2e3615a020749435">Alarm &amp; Sensor</option><option value="Door Intercom#2e3615a020749436">Door Intercom</option></optgroup><optgroup label="Storage Devices" class="ul-secound"><option value="USB Flash Drives#2e3615a020749441">USB Flash Drives</option><option value="Memory Cards#2e3615a020749442">Memory Cards</option><option value="External Hard Drives#2e3615a020749443">External Hard Drives</option><option value="HDD Enclosures#2e3615a020749444">HDD Enclosures</option><option value="SSD#2e3615a020749445">SSD</option></optgroup><optgroup label="Office Electronics" class="ul-secound"><option value="Printer Supplies#2e3615a020749451">Printer Supplies</option><option value="Office &amp; School Supplies#2e3615a020749452">Office &amp; School Supplies</option><option value="3D Printers#2e3615a020749453">3D Printers</option><option value="Printers#2e3615a020749454">Printers</option><option value="Scanners#2e3615a020749455">Scanners</option><option value="3D Pens#2e3615a020749456">3D Pens</option></optgroup><optgroup label="Networking" class="ul-secound"><option value="Wireless Routers#2e3615a020749461">Wireless Routers</option><option value="Network Cards#2e3615a020749462">Network Cards</option><option value="3G Modems#2e3615a020749463">3G Modems</option><option value="Modem-Router Combos#2e3615a020749464">Modem-Router Combos</option><option value="Networking Tools#2e3615a020749465">Networking Tools</option></optgroup><optgroup label="Consumer Electronics" class="ul-first"></optgroup><optgroup label="Accessories &amp; Parts" class="ul-secound"><option value="Digital Cables#2e3615a020749511">Digital Cables</option><option value="Electronic Cigarettes#2e3615a020749512">Electronic Cigarettes</option><option value="Batteries#2e3615a020749513">Batteries</option><option value="Charger#2e3615a020749514">Charger</option><option value="Home Electronic Accessories#2e3615a020749515">Home Electronic Accessories</option><option value="Digital Gear Bags#2e3615a020749516">Digital Gear Bags</option></optgroup><optgroup label="Home Audio &amp; Video" class="ul-secound"><option value="Television#2e3615a020749521">Television</option><option value="TV Receivers#2e3615a020749522">TV Receivers</option><option value="Projectors#2e3615a020749523">Projectors</option><option value="Audio Amplifiers#2e3615a020749524">Audio Amplifiers</option><option value="TV Sticks#2e3615a020749525">TV Sticks</option></optgroup><optgroup label="Camera &amp; Photo53" class="ul-secound"><option value="Digital Cameras#2e3615a020749#2e3615a020749531">Digital Cameras</option><option value="Camcorders#2e3615a020749532">Camcorders</option><option value="Camera Drones#2e3615a020749533">Camera Drones</option><option value="Action Cameras#2e3615a020749534">Action Cameras</option><option value="Photo Studio#2e3615a020749535">Photo Studio</option><option value="Camera &amp; Photo Accessories#2e3615a020749536">Camera &amp; Photo Accessories</option></optgroup><optgroup label="Portable Audio &amp; Video" class="ul-secound"><option value="Earphones &amp; Headphones#2e3615a020749541">Earphones &amp; Headphones</option><option value="Speakers#2e3615a020749542">Speakers</option><option value="MP3 Players#2e3615a020749543">MP3 Players</option><option value="Microphones#2e3615a020749544">Microphones</option><option value="VR/AR Devices#2e3615a020749545">VR/AR Devices</option></optgroup><optgroup label="Smart Electronics" class="ul-secound"><option value="Wearable Devices#2e3615a020749551">Wearable Devices</option><option value="Smart Home Appliances#2e3615a020749552">Smart Home Appliances</option><option value="Smart Wearable Accessories#2e3615a020749553">Smart Wearable Accessories</option><option value="Smart Remote Controls#2e3615a020749554">Smart Remote Controls</option><option value="Smart Watches#2e3615a020749555">Smart Watches</option><option value="Smart Wristbands#2e3615a020749556">Smart Wristbands</option></optgroup><optgroup label="Video Games" class="ul-secound"><option value="Handheld Game Players#2e3615a020749561">Handheld Game Players</option><option value="Gamepads#2e3615a020749562">Gamepads</option><option value="Joysticks#2e3615a020749563">Joysticks</option><option value="Stickers#2e3615a020749564">Stickers</option></optgroup><optgroup label="Jewelry &amp; Watches" class="ul-first"></optgroup><optgroup label="Fine Jewelry61" class="ul-secound"><option value="925 Silver Jewelry#2e3615a020749611">925 Silver Jewelry</option><option value="Diamond Jewelry#2e3615a020749612">Diamond Jewelry</option><option value="Pearls Jewelry#2e3615a020749613">Pearls Jewelry</option><option value="Various Gemstones#2e3615a020749614">Various Gemstones</option><option value="K-Gold#2e3615a020749615">K-Gold</option><option value="Fine Earrings#2e3615a020749616">Fine Earrings</option><option value="Men's Fine Jewelry#2e3615a020749617">Men's Fine Jewelry</option></optgroup><optgroup label="Wedding &amp; Engagement" class="ul-secound"><option value="Bridal Jewelry Sets#2e3615a020749621">Bridal Jewelry Sets</option><option value="Engagement Rings#2e3615a020749622">Engagement Rings</option><option value="Wedding Hair Jewelry#2e3615a020749623">Wedding Hair Jewelry</option></optgroup><optgroup label="Men's Watches" class="ul-secound"><option value="Mechanical Watches#2e3615a020749631">Mechanical Watches</option><option value="Quartz Watches#2e3615a020749632">Quartz Watches</option><option value="Digital Watches#2e3615a020749633">Digital Watches</option><option value="Dual Display Watche#2e3615a020749634">Dual Display Watche</option><option value="Sports Watches#2e3615a020749635">Sports Watches</option></optgroup><optgroup label="Women's Watches" class="ul-secound"><option value="Sports Watches#2e3615a020749641">Sports Watches</option><option value="Women's Bracelet Watches#2e3615a020749642">Women's Bracelet Watches</option><option value="Dress Watches#2e3615a020749643">Dress Watches</option><option value="Lovers' Watches#2e3615a020749644">Lovers' Watches</option><option value="Children's Watches#2e3615a020749645">Children's Watches</option><option value="Creative Watches#2e3615a020749646">Creative Watches</option></optgroup><optgroup label="Fashion Jewelry" class="ul-secound"><option value="Necklaces &amp; Pendants#2e3615a020749651">Necklaces &amp; Pendants</option><option value="Hot Rings#2e3615a020749652">Hot Rings</option><option value="Trendy Earrings#2e3615a020749653">Trendy Earrings</option><option value="Bracelets &amp; Bangles#2e3615a020749654">Bracelets &amp; Bangles</option><option value="Men's Cuff Links#2e3615a020749655">Men's Cuff Links</option><option value="Fashion Jewelry Sets#2e3615a020749656">Fashion Jewelry Sets</option><option value="Charms#2e3615a020749657">Charms</option><option value="Body Jewelry#2e3615a020749658">Body Jewelry</option></optgroup><optgroup label="Beads &amp; DIY Jewelry" class="ul-secound"><option value="Beads#2e3615a020749661">Beads</option><option value="Jewelry Findings &amp; Components#2e3615a020749662">Jewelry Findings &amp; Components</option><option value="Jewelry Packaging &amp; Display#2e3615a020749663">Jewelry Packaging &amp; Display</option></optgroup><optgroup label="Home,Garden&amp;Furniture" class="ul-first"></optgroup><optgroup label="Arts" class="ul-secound"><option value="DIY Apparel Sewing &amp; Fabric#2e3615a020749711">DIY Apparel Sewing &amp; Fabric</option><option value="Needle Arts &amp; Craft#2e3615a020749712">Needle Arts &amp; Craft</option><option value="Scrapbook &amp; Stamping#2e3615a020749713">Scrapbook &amp; Stamping</option><option value="5D DIY Diamond Painting#2e3615a020749714">5D DIY Diamond Painting</option></optgroup><optgroup label="Home Deco" class="ul-secound"><option value="Painting &amp; Calligraphy#2e3615a020749721">Painting &amp; Calligraphy</option><option value="Wall Stickers#2e3615a020749722">Wall Stickers</option><option value="Figurines &amp; Miniatures#2e3615a020749723">Figurines &amp; Miniatures</option><option value="Wall Clocks#2e3615a020749724">Wall Clocks</option></optgroup><optgroup label="Home Textile" class="ul-secound"><option value="Curtains#2e3615a020749731">Curtains</option><option value="Cushion Covers#2e3615a020749732">Cushion Covers</option><option value="Bedding Set#2e3615a020749733">Bedding Set</option><option value="Pillows#2e3615a020749734">Pillows</option></optgroup><optgroup label="Festival" class="ul-secound"><option value="Event &amp; Party#2e3615a020749741">Event &amp; Party</option><option value="Ballons#2e3615a020749742">Ballons</option><option value="Artificial &amp; Dried Flowers#2e3615a020749743">Artificial &amp; Dried Flowers</option><option value="Gift Bags &amp; Boxes#2e3615a020749744">Gift Bags &amp; Boxes</option></optgroup><optgroup label="Household Merchandises" class="ul-secound"><option value="Umbrellas#2e3615a020749751">Umbrellas</option><option value="Bathroom Scales#2e3615a020749752">Bathroom Scales</option><option value="Hand Push Sweepers#2e3615a020749753">Hand Push Sweepers</option><option value="Dust Covers#2e3615a020749754">Dust Covers</option></optgroup><optgroup label="Home Storage" class="ul-secound"><option value="Storage Boxes &amp; Bins#2e3615a020749761">Storage Boxes &amp; Bins</option><option value="Laundry Baskets#2e3615a020749762">Laundry Baskets</option><option value="Drawer Organizers#2e3615a020749763">Drawer Organizers</option><option value="Makeup Organizers#2e3615a020749764">Makeup Organizers</option></optgroup><optgroup label="Kitchen" class="ul-secound"><option value="Bakeware#2e3615a020749771">Bakeware</option><option value="Drinkware#2e3615a020749772">Drinkware</option><option value="Kitchen Tools &amp; Gadgets#2e3615a020749773">Kitchen Tools &amp; Gadgets</option><option value="Kitchen Knives &amp; Accessories#2e3615a020749774">Kitchen Knives &amp; Accessories</option></optgroup><optgroup label="Garden Supplies" class="ul-secound"><option value="Watering Kits#2e3615a020749781">Watering Kits</option><option value="Flower Pots &amp; Planters#2e3615a020749782">Flower Pots &amp; Planters</option><option value="Repellents#2e3615a020749783">Repellents</option><option value="Garden Water Timers#2e3615a020749784">Garden Water Timers</option></optgroup><optgroup label="Home Appliances" class="ul-secound"><option value="Household Appliances#2e3615a020749791">Household Appliances</option><option value="Kitchen Appliances#2e3615a020749792">Kitchen Appliances</option><option value="Personal Care Appliances#2e3615a020749793">Personal Care Appliances</option><option value="Home Appliances Parts#2e3615a020749794">Home Appliances Parts</option></optgroup><optgroup label="Bags &amp; shoes" class="ul-first"></optgroup><optgroup label="Women's Luggage &amp; Bags" class="ul-secound"><option value="Fashion Backpacks#2e3615a020749812">Fashion Backpacks</option><option value="Totes#2e3615a020749813">Totes</option><option value="Shoulder Bags#2e3615a020749814">Shoulder Bags</option><option value="Wallets#2e3615a020749815">Wallets</option><option value="Evening Bags#2e3615a020749816">Evening Bags</option><option value="Clutches#2e3615a020749817">Clutches</option></optgroup><optgroup label="Women's Shoes" class="ul-secound"><option value="Sandals#2e3615a020749821">Sandals</option><option value="Slippers#2e3615a020749822">Slippers</option><option value="Flats#2e3615a020749823">Flats</option><option value="Pumps#2e3615a020749824">Pumps</option><option value="Boots#2e3615a020749825">Boots</option><option value="Clutches#2e3615a020749826">Clutches</option><option value="Vulcanize Shoes#2e3615a020749827">Vulcanize Shoes</option></optgroup><optgroup label="Men's Luggage &amp; Bags" class="ul-secound"><option value="Men's Backpacks#2e3615a020749831">Men's Backpacks</option><option value="Crossbody Bags#2e3615a020749832">Crossbody Bags</option><option value="Briefcases#2e3615a020749833">Briefcases</option><option value="Luggage &amp; Travel Bags#2e3615a020749834">Luggage &amp; Travel Bags</option><option value="Wallets#2e3615a020749835">Wallets</option></optgroup><optgroup label="Men's Shoes" class="ul-secound"><option value="Sandals#2e3615a020749841">Sandals</option><option value="Slippers#2e3615a020749842">Slippers</option><option value="Casual Shoes#2e3615a020749843">Casual Shoes</option><option value="Formal Shoes#2e3615a020749844">Formal Shoes</option><option value="Boots#2e3615a020749845">Boots</option><option value="Vulcanize Shoes#2e3615a020749846">Vulcanize Shoes</option></optgroup><optgroup label="Other Bags &amp; Accessories" class="ul-secound"><option value="Kids &amp; Baby Bags#2e3615a020749851">Kids &amp; Baby Bags</option><option value="Cosmetic Bags &amp; Cases#2e3615a020749852">Cosmetic Bags &amp; Cases</option><option value="Coin Purses &amp; Holders#2e3615a020749853">Coin Purses &amp; Holders</option><option value="Luggage Cover#2e3615a020749854">Luggage Cover</option><option value="Passport Covers#2e3615a020749855">Passport Covers</option><option value="Bag Parts &amp; Accessories#2e3615a020749856">Bag Parts &amp; Accessories</option></optgroup><optgroup label="Bestselling Shoes" class="ul-secound"><option value="Women's Ankle Boots#2e3615a020749861">Women's Ankle Boots</option><option value="Women's Mid-Calf Boots#2e3615a020749862">Women's Mid-Calf Boots</option><option value="Women's Knee-High Boots#2e3615a020749863">Women's Knee-High Boots</option><option value="Over-the-Knee Boots#2e3615a020749864">Over-the-Knee Boots</option><option value="Men's Loafers#2e3615a020749865">Men's Loafers</option><option value="Passport Covers#2e3615a020749866">Passport Covers</option><option value="Bag Parts &amp; Accessories#2e3615a020749867">Bag Parts &amp; Accessories</option></optgroup><optgroup label="Toys, Kids &amp; Baby" class="ul-first"></optgroup><optgroup label="Baby Clothing" class="ul-secound"><option value="Baby Dresses#2e3615a020749911">Baby Dresses</option><option value="Baby Rompers#2e3615a020749912">Baby Rompers</option><option value="Clothing Sets#2e3615a020749913">Clothing Sets</option><option value="Baby Outerwear#2e3615a020749914">Baby Outerwear</option><option value="Baby Pants#2e3615a020749915">Baby Pants</option><option value="Baby Accessories#2e3615a020749916">Baby Accessories</option></optgroup><optgroup label="Toys &amp; Hobbies" class="ul-secound"><option value="RC Helicopters#2e3615a020749921">RC Helicopters</option><option value="Stuffed &amp; Plush Animals#2e3615a020749922">Stuffed &amp; Plush Animals</option><option value="Action &amp; Toy Figures#2e3615a020749923">Action &amp; Toy Figures</option><option value="Blocks#2e3615a020749924">Blocks</option><option value="Electronic Pets#2e3615a020749925">Electronic Pets</option></optgroup><optgroup label="Girls Clothing" class="ul-secound"><option value="Dresses#2e3615a020749931">Dresses</option><option value="Clothing Sets#2e3615a020749932">Clothing Sets</option><option value="Tops &amp; Tees#2e3615a020749933">Tops &amp; Tees</option><option value="Sleepwear &amp; Robes#2e3615a020749934">Sleepwear &amp; Robes</option><option value="Accessories#2e3615a020749935">Accessories</option><option value="Family Matching Outfits#2e3615a020749936">Family Matching Outfits</option></optgroup><optgroup label="Shoes &amp; Bags" class="ul-secound"><option value="Baby’s First Walkers#2e3615a020749941">Baby’s First Walkers</option><option value="Girls´ Shoes#2e3615a020749942">Girls´ Shoes</option><option value="Boys’ Shoes#2e3615a020749943">Boys’ Shoes</option><option value="School Bags#2e3615a020749944">School Bags</option><option value="Kids´ Wallets#2e3615a020749945">Kids´ Wallets</option></optgroup><optgroup label="Boys Clothing" class="ul-secound"><option value="Clothing Sets#2e3615a020749951">Clothing Sets</option><option value="T-Shirts#2e3615a020749952">T-Shirts</option><option value="Hoodies &amp; Sweatshirts#2e3615a020749953">Hoodies &amp; Sweatshirts</option><option value="Outerwear &amp; Coats#2e3615a020749954">Outerwear &amp; Coats</option><option value="Jeans#2e3615a020749955">Jeans</option><option value="Accessories#2e3615a020749956">Accessories</option></optgroup><optgroup label="Baby &amp; Mother" class="ul-secound"><option value="Nappy Changing#2e3615a020749961">Nappy Changing</option><option value="Activity &amp; Gear#2e3615a020749962">Activity &amp; Gear</option><option value="Baby Care#2e3615a020749963">Baby Care</option><option value="Backpacks &amp; Carriers#2e3615a020749964">Backpacks &amp; Carriers</option><option value="Maternity#2e3615a020749965">Maternity</option></optgroup><optgroup label="Sports &amp; Outdoors" class="ul-first"></optgroup><optgroup label="Swimming" class="ul-secound"><option value="Bikini Set#2e3615a0207491011">Bikini Set</option><option value="One-Piece Suits#2e3615a0207491012">One-Piece Suits</option><option value="Two-Piece Suits#2e3615a0207491013">Two-Piece Suits</option><option value="Cover-Ups#2e3615a0207491014">Cover-Ups</option><option value="Men's Swimwear#2e3615a0207491015">Men's Swimwear</option><option value="Children's Swimwear#2e3615a0207491016">Children's Swimwear</option></optgroup><optgroup label="Cycling" class="ul-secound"><option value="Bicycles#2e3615a0207491021">Bicycles</option><option value="Bicycle Frames#2e3615a0207491022">Bicycle Frames</option><option value="Bicycle Lights#2e3615a0207491023">Bicycle Lights</option><option value="Bicycle Helmets#2e3615a0207491024">Bicycle Helmets</option><option value="Cycling Jerseys#2e3615a0207491025">Cycling Jerseys</option><option value="Cycling Eyewear#2e3615a0207491026">Cycling Eyewear</option></optgroup><optgroup label="Sneakers" class="ul-secound"><option value="Running Shoes#2e3615a0207491031">Running Shoes</option><option value="Hiking Shoes#2e3615a0207491032">Hiking Shoes</option><option value="Soccer Shoes#2e3615a0207491033">Soccer Shoes</option><option value="Skateboarding Shoes#2e3615a0207491034">Skateboarding Shoes</option><option value="Dance Shoes#2e3615a0207491035">Dance Shoes</option><option value="Basketball Shoes#2e3615a0207491036">Basketball Shoes</option></optgroup><optgroup label="Fishing" class="ul-secound"><option value="Fishing Reels#2e3615a0207491041">Fishing Reels</option><option value="Fishing Lures#2e3615a0207491042">Fishing Lures</option><option value="Fishing Lines#2e3615a0207491043">Fishing Lines</option><option value="Fishing Rods#2e3615a0207491044">Fishing Rods</option><option value="Rod Combos#2e3615a0207491045">Rod Combos</option><option value="Fishing Tackle Boxes#2e3615a0207491046">Fishing Tackle Boxes</option></optgroup><optgroup label="Sportswear" class="ul-secound"><option value="Jerseys#2e3615a0207491051">Jerseys</option><option value="Hiking Jackets#2e3615a0207491052">Hiking Jackets</option><option value="Pants#2e3615a0207491053">Pants</option><option value="Shorts#2e3615a0207491054">Shorts</option><option value="Sports Bags#2e3615a0207491055">Sports Bags</option><option value="Sports Accessories#2e3615a0207491056">Sports Accessories</option></optgroup><optgroup label="Other Sports Equipment" class="ul-secound"><option value="Camping &amp; Hiking#2e3615a0207491061">Camping &amp; Hiking</option><option value="Hunting#2e3615a0207491062">Hunting</option><option value="Golf#2e3615a0207491063">Golf</option><option value="Fitness &amp; Bodybuilding#2e3615a0207491064">Fitness &amp; Bodybuilding</option><option value="Skiing &amp; Snowboarding#2e3615a0207491065">Skiing &amp; Snowboarding</option><option value="Musical Instruments#2e3615a0207491066">Musical Instruments</option></optgroup><optgroup label="Health,Beauty&amp; Hair" class="ul-first"></optgroup><optgroup label="Human Hair care" class="ul-secound"><option value="Hair Dyes#2e3615a0207491111">Hair Dyes</option><option value="Hair tools &amp; accessories#2e3615a0207491112">Hair tools &amp; accessories</option><option value="Hair treatment#2e3615a0207491113">Hair treatment</option><option value="Shampoos &amp; Conditioner#2e3615a0207491114">Shampoos &amp; Conditioner</option><option value=" Hair Weaves#2e3615a0207491115"> Hair Weaves</option><option value=" Hair Wigs#2e3615a0207491116"> Hair Wigs</option></optgroup><optgroup label="Health&amp; care" class="ul-secound"><option value="Dental care#2e3615a0207491121">Dental care</option><option value="First Aid &amp; General Health#2e3615a0207491122">First Aid &amp; General Health</option><option value=" women care#2e3615a0207491123"> women care</option><option value="men care#2e3615a0207491124">men care</option><option value="Kid care#2e3615a0207491125">Kid care</option><option value="Bath &amp; shower#2e3615a0207491126">Bath &amp; shower</option></optgroup><optgroup label="Makeup" class="ul-secound"><option value="Beauty Essentials#2e3615a0207491131">Beauty Essentials</option><option value="Makeup Set#2e3615a0207491132">Makeup Set</option><option value="Makeup Brushes#2e3615a0207491133">Makeup Brushes</option><option value="Eyeshadow#2e3615a0207491134">Eyeshadow</option><option value="Lipstick#2e3615a0207491135">Lipstick</option><option value="False Eyelashes#2e3615a0207491136">False Eyelashes</option></optgroup><optgroup label="Nail Art &amp; Tools" class="ul-secound"><option value="Nail Art Kits#2e3615a0207491141">Nail Art Kits</option><option value="Nail Gel#2e3615a0207491142">Nail Gel</option><option value="Nail Dryers#2e3615a0207491143">Nail Dryers</option><option value="Nail Glitters#2e3615a0207491144">Nail Glitters</option><option value="Stickers &amp; Decals#2e3615a0207491145">Stickers &amp; Decals</option><option value="Nail Decorations#2e3615a0207491146">Nail Decorations</option></optgroup><optgroup label="Beauty Tools" class="ul-secound"><option value="Curling Iron#2e3615a0207491151">Curling Iron</option><option value="Straightening Irons#2e3615a0207491152">Straightening Irons</option><option value="Electric Face Cleanser#2e3615a0207491153">Electric Face Cleanser</option><option value="Facial Steamer#2e3615a0207491154">Facial Steamer</option><option value="Face Skin Care Tools#2e3615a0207491155">Face Skin Care Tools</option><option value="Massage &amp; Relaxation#2e3615a0207491156">Massage &amp; Relaxation</option></optgroup><optgroup label="Skin care" class="ul-secound"><option value="Essential Oil#2e3615a0207491161">Essential Oil</option><option value="Face Mask#2e3615a0207491162">Face Mask</option><option value="Facial Care#2e3615a0207491163">Facial Care</option><option value="Sun care#2e3615a0207491164">Sun care</option><option value="Body Care#2e3615a0207491165">Body Care</option><option value="Razor#2e3615a0207491166">Razor</option></optgroup><optgroup label="Automobiles &amp; Motorcycle" class="ul-first"></optgroup><optgroup label="Auto Replacement Parts" class="ul-secound"><option value="Car Lights#2e3615a0207491211">Car Lights</option><option value="Interior Parts#2e3615a0207491212">Interior Parts</option><option value="Exterior Parts#2e3615a0207491213">Exterior Parts</option><option value="Spark Plugs &amp; Ignition System#2e3615a0207491214">Spark Plugs &amp; Ignition System</option><option value="Automobiles Sensors#2e3615a0207491215">Automobiles Sensors</option><option value="Brake System#2e3615a0207491216">Brake System</option><option value="Windscreen Wipers &amp; Windows#2e3615a0207491217">Windscreen Wipers &amp; Windows</option><option value="Other Replacement Parts#2e3615a0207491218">Other Replacement Parts</option></optgroup><optgroup label="Tools, Maintenance &amp; Care" class="ul-secound"><option value="Code Readers &amp; Scan Tools#2e3615a0207491221">Code Readers &amp; Scan Tools</option><option value="Diagnostic Tools#2e3615a0207491222">Diagnostic Tools</option><option value="Car Washer#2e3615a0207491223">Car Washer</option><option value="Paint Care#2e3615a0207491224">Paint Care</option><option value="Other Maintenance Products#2e3615a0207491225">Other Maintenance Products</option></optgroup><optgroup label="Car Electronics" class="ul-secound"><option value="Car Multimedia Player#2e3615a0207491231">Car Multimedia Player</option><option value="DVR/Dash Camera#2e3615a0207491232">DVR/Dash Camera</option><option value="Alarm Systems &amp; Security#2e3615a0207491233">Alarm Systems &amp; Security</option><option value="GPS Trackers#2e3615a0207491234">GPS Trackers</option><option value="Car Radios#2e3615a0207491235">Car Radios</option><option value="Car Monitors#2e3615a0207491236">Car Monitors</option><option value="Car Refrigerators#2e3615a0207491237">Car Refrigerators</option><option value="Vehicle Camera#2e3615a0207491238">Vehicle Camera</option><option value="Vehicle GPS#2e3615a0207491239">Vehicle GPS</option><option value="Jump Starter#2e3615a0207491240">Jump Starter</option></optgroup><optgroup label="Exterior Accessories" class="ul-secound"><option value="Car Stickers#2e3615a0207491241">Car Stickers</option><option value="Car Covers#2e3615a0207491242">Car Covers</option><option value="Car Washer#2e3615a0207491243">Car Washer</option><option value="Other Exterior Accessories#2e3615a0207491244">Other Exterior Accessories</option></optgroup><optgroup label="Motorcycle Accessories &amp; Parts" class="ul-secound"><option value="Body &amp; Frame#2e3615a0207491251">Body &amp; Frame</option><option value="Helmet &amp; Protective Gear#2e3615a0207491252">Helmet &amp; Protective Gear</option><option value="Lighting#2e3615a0207491253">Lighting</option><option value="Brake System#2e3615a0207491254">Brake System</option><option value="Exhaust &amp; Exhaust Systems#2e3615a0207491255">Exhaust &amp; Exhaust Systems</option><option value="Helmet Headset#2e3615a0207491256">Helmet Headset</option><option value="Motorcycle Seat Covers#2e3615a0207491257">Motorcycle Seat Covers</option><option value="Other Motorcycle Accessories#2e3615a0207491258">Other Motorcycle Accessories</option><option value="Jump Starter#2e3615a0207491259">Jump Starter</option></optgroup><optgroup label="Interior Accessories" class="ul-secound"><option value="Automobiles Seat Covers#2e3615a0207491261">Automobiles Seat Covers</option><option value="Stowing Tidying#2e3615a0207491262">Stowing Tidying</option><option value="Key Case for Car#2e3615a0207491263">Key Case for Car</option><option value="Steering Covers#2e3615a0207491264">Steering Covers</option><option value="Floor Mats#2e3615a0207491265">Floor Mats</option></optgroup><optgroup label="Home Improvment,Tools" class="ul-first"></optgroup><optgroup label="Tools" class="ul-secound"><option value="Measurement &amp; Analysis#2e3615a0207491311">Measurement &amp; Analysis</option><option value="Hand Tools#2e3615a0207491312">Hand Tools</option><option value="Power Tools#2e3615a0207491313">Power Tools</option><option value="Garden Tools#2e3615a0207491314">Garden Tools</option><option value="Tool Sets#2e3615a0207491315">Tool Sets</option></optgroup><optgroup label="Indoor Lighting" class="ul-secound"><option value="Ceiling Lights#2e3615a0207491321">Ceiling Lights</option><option value="Pendant Lights#2e3615a0207491322">Pendant Lights</option><option value="Downlights#2e3615a0207491323">Downlights</option><option value="Chandeliers#2e3615a0207491324">Chandeliers</option><option value="Wall Lamps#2e3615a0207491325">Wall Lamps</option><option value="Night Lights#2e3615a0207491326">Night Lights</option></optgroup><optgroup label="Tools" class="ul-secound"><option value="Welding Equipment#2e3615a0207491331">Welding Equipment</option><option value="Welding &amp; Soldering Supplies#2e3615a0207491332">Welding &amp; Soldering Supplies</option><option value="Machine Tools &amp; Accessories#2e3615a0207491333">Machine Tools &amp; Accessories</option><option value="Woodworking Machinery#2e3615a0207491334">Woodworking Machinery</option><option value="Tools Storage#2e3615a0207491335">Tools Storage</option></optgroup><optgroup label="LED Lighting" class="ul-secound"><option value="LED Strips#2e3615a0207491341">LED Strips</option><option value="LED Downlights#2e3615a0207491342">LED Downlights</option><option value="LED Panel Lights#2e3615a0207491343">LED Panel Lights</option><option value="LED Spotlights#2e3615a0207491344">LED Spotlights</option><option value="LED Bar Lights#2e3615a0207491345">LED Bar Lights</option></optgroup><optgroup label="Home Improvements" class="ul-secound"><option value="Electrical Equipments &amp; Supplies#2e3615a0207491351">Electrical Equipments &amp; Supplies</option><option value="Wall Switches#2e3615a0207491352">Wall Switches</option><option value="Hardware#2e3615a0207491353">Hardware</option><option value="Kitchen Fixtures#2e3615a0207491354">Kitchen Fixtures</option><option value="Wallpapers#2e3615a0207491355">Wallpapers</option></optgroup><optgroup label="Outdoor Lighting" class="ul-secound"><option value="Flashlights &amp; Torches#2e3615a0207491361">Flashlights &amp; Torches</option><option value="Solar Lamps#2e3615a0207491362">Solar Lamps</option><option value="Floodlights#2e3615a0207491363">Floodlights</option><option value="String Lights#2e3615a0207491364">String Lights</option><option value="Underwater Lights#2e3615a0207491365">Underwater Lights</option></optgroup><optgroup label="Grocery,Food&amp; Beverages" class="ul-first"></optgroup><optgroup label="Food items" class="ul-secound"><option value="Baby Food#2e3615a0207491411">Baby Food</option><option value="pet Food#2e3615a0207491412">pet Food</option><option value="Fruits &amp; vegetables#2e3615a0207491413">Fruits &amp; vegetables</option><option value="chicken &amp; meat#2e3615a0207491414">chicken &amp; meat</option><option value="seafood#2e3615a0207491415">seafood</option></optgroup><optgroup label="Beverages" class="ul-secound"><option value="Milk,Coffee&amp; Tea#2e3615a0207491421">Milk,Coffee&amp; Tea</option><option value="Energy Drinks#2e3615a0207491422">Energy Drinks</option><option value="juices#2e3615a0207491423">juices</option><option value="Powdered Drink#2e3615a0207491424">Powdered Drink</option><option value="Soft Drinks#2e3615a0207491425">Soft Drinks</option><option value="Water#2e3615a0207491426">Water</option></optgroup><optgroup label="Cleaning ,Plastic &amp; paper product" class="ul-secound"><option value="Cleaning &amp; supplies#2e3615a0207491431">Cleaning &amp; supplies</option><option value="Dishwashing#2e3615a0207491432">Dishwashing</option><option value="Laundry#2e3615a0207491433">Laundry</option><option value="Air freshener#2e3615a0207491435">Air freshener</option><option value="Bags, foils#2e3615a0207491436">Bags, foils</option><option value="Tissues &amp; Toilet roles#2e3615a0207491437">Tissues &amp; Toilet roles</option><option value="Disposables &amp; Glassware#2e3615a0207491438">Disposables &amp; Glassware</option><option value="Shoe care#2e3615a0207491439">Shoe care</option><option value="Insect killer#2e3615a0207491440">Insect killer</option></optgroup><optgroup label="Bakery, confectionary" class="ul-secound"><option value="Chocolate &amp; candy#2e3615a0207491451">Chocolate &amp; candy</option><option value="Sweets#2e3615a0207491452">Sweets</option><option value="Cakes &amp; Pastries#2e3615a0207491453">Cakes &amp; Pastries</option><option value="Cookies#2e3615a0207491454">Cookies</option><option value="Bakery#2e3615a0207491455">Bakery</option><option value="Dates&amp; nuts#2e3615a0207491456">Dates&amp; nuts</option></optgroup><optgroup label="Packets &amp; cereals" class="ul-secound"><option value="Breakfast cereals#2e3615a0207491461">Breakfast cereals</option><option value="Rice#2e3615a0207491462">Rice</option><option value="Noodles &amp; pasta#2e3615a0207491463">Noodles &amp; pasta</option><option value="Soup#2e3615a0207491464">Soup</option><option value="spices#2e3615a0207491465">spices</option><option value="oil#2e3615a0207491466">oil</option><option value="pulses &amp; Grains#2e3615a0207491467">pulses &amp; Grains</option></optgroup><optgroup label="Diary &amp; Eggs" class="ul-secound"><option value="Milk#2e3615a0207491471">Milk</option><option value="Spreads, cheese#2e3615a0207491472">Spreads, cheese</option><option value="Egg#2e3615a0207491473">Egg</option><option value="yoghurt#2e3615a0207491474">yoghurt</option><option value="Chilled Dessert#2e3615a0207491475">Chilled Dessert</option></optgroup></select>                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">SKU:
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
                                                      <input type="text" class="form-control" name="sku" placeholder="" id="sku" value="">
                                                   </div>
                                                   <label class="col-md-2 control-label">Regular Price:
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
                                                      <input type="text" class="form-control" name="regular-price" placeholder="" id="regular-price" value="">
                                                      
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Special Price
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
													   
                                                      <input type="text" class="form-control" name="special-price" placeholder="" id="special-price" value=""> 
                                                      <small class="text-info">Please Note: If not speical price then regular price is equal to special price</small>
                                                   </div>
                                                   <!-- Put Date here -->
                                                   <label class="col-md-2 control-label">Special Price Range 
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
                                                      <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                                         <input type="text" class="form-control" name="special-price-from" id="special-price-from" value="">
                                                         <span class="input-group-addon"> to </span>
                                                         <input type="text" class="form-control" name="special-price-to" id="special-price-to" value=""> 
                                                      </div>
                                                      <span class="help-block"> Speical Price Date Range </span>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Available Items
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
                                                      <input type="text" class="form-control" name="items-available" placeholder="" id="available-items" value=""> 
                                                   </div>
                                                  
                                                  <!----->
                                                                                                    
                                                  
                                                   <label class="col-md-2 control-label">Seller Type
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
                                                      <select name="seller-type" id="seller-type" class="form-control">
                                                         <option value="" selected="">Seller Type</option>
                                                         <option value="whole-sale">Whole Sale</option>
                                                         <option value="retails">Retails</option>
                                                         <option value="whole-sale-and-retail">Whole Sale And Retail</option>
                                                         <option value="individual">Individual</option>
                                                      </select>
                                                   </div>
                                                
                                                
                                                
                                                </div>
                                                
                                                <!-- Checking weather the avaibility is post --->
                                                                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Avaibility
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
                                                      <select id="avaibility" class="form-control" name="avaibility">
                                                         <option value="" selected="">Avaibility</option>
                                                         <option value="0">In stock</option>
                                                         <option value="1">Out of stock</option>
                                                      </select>
                                                   </div>
                                                   <label class="col-md-2 control-label">Minmum Order
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
                                                      <input type="text" class="form-control" name="min-order" placeholder="" id="min-order" value="">
                                                   </div>
                                                </div>
                                                
                                                
                                                                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Tax Class:
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
                                                      <select class="table-group-action-input form-control input-medium" name="tax-class" id="tax-class">
                                                         <option value="" selected="">Select...</option>
                                                         <option value="1">None</option>
                                                         <option value="0">Taxable Goods</option>
                                                      </select>
                                                   </div>
                                                   <label class="col-md-2 control-label">Shipping Cost
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
                                                      <input type="text" class="form-control" name="shipping_cost" placeholder="Free Shipping" value=""> 
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Status:
                                                   <span class="required"> * </span>
                                                   </label>
                                                   
                                                   
                                                                                                      <div class="col-md-4">
                                                      <select class="table-group-action-input form-control input-medium" name="status" id="status">
                                                         <option value="" selected="">Select...</option>
                                                         <option value="1">Published</option>
                                                         <option value="0">Not Published</option>
                                                      </select>
                                                   </div>
                                                  
                                                   
                                              
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Product Unite
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-2">
                                                      <input type="text" class="form-control" name="unite-amount" placeholder="1" id="unite-amount" value=""> 
                                                   </div>
                                                   
                                                   
                                                   
                                                                                                      
                                                   <div class="col-md-2">
                                                      <select class="table-group-action-input form-control input-medium" name="product-unite" id="product-unite">
                                                         <option value="" selected="">Select Unite</option>
                                                         <option value="grams">Grams</option>
                                                         <option value="litter">Litter</option>
                                                         <option value="Pices">Pices</option>
                                                      </select>
                                                   </div>
                                                   
                                                   
                                                   
                                                   
                                                   
                                                                                                      <label class="col-md-2 control-label">Condition
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4">
                                                      <select class="table-group-action-input form-control input-medium" name="product-condition" id="product-condition">
                                                         <option value="" selected="">Select...</option>
                                                         <option value="brandnew">Brand New</option>
                                                         <option value="likenew">Like New</option>
                                                         <option value="used">Used</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <!-- Contry of origin -->
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Country Of Origin
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-2">
                                                      <select class="form-control" id="country" name="country">
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
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Phone Number
                                                   <span class="required"> * </span>
                                                   </label>
                                                   <div class="col-md-4 col-xs-2">
                                                      <select id="country-code" name="country-phone-code" class="form-control">
                                                         <option value="" selected="">Select Phone Code</option>
                                                         <option value="AD">AD - Andorra (+376)</option>
                                                         <option value="AE">AE - United Arab Emirates (+971)</option>
                                                         <option value="AF">AF - Afghanistan (+93)</option>
                                                         <option value="AG">AG - Antigua And Barbuda (+1268)</option>
                                                         <option value="AI">AI - Anguilla (+1264)</option>
                                                         <option value="AL">AL - Albania (+355)</option>
                                                         <option value="AM">AM - Armenia (+374)</option>
                                                         <option value="AN">AN - Netherlands Antilles (+599)</option>
                                                         <option value="AO">AO - Angola (+244)</option>
                                                         <option value="AQ">AQ - Antarctica (+672)</option>
                                                         <option value="AR">AR - Argentina (+54)</option>
                                                         <option value="AS">AS - American Samoa (+1684)</option>
                                                         <option value="AT">AT - Austria (+43)</option>
                                                         <option value="AU">AU - Australia (+61)</option>
                                                         <option value="AW">AW - Aruba (+297)</option>
                                                         <option value="AZ">AZ - Azerbaijan (+994)</option>
                                                         <option value="BA">BA - Bosnia And Herzegovina (+387)</option>
                                                         <option value="BB">BB - Barbados (+1246)</option>
                                                         <option value="BD">BD - Bangladesh (+880)</option>
                                                         <option value="BE">BE - Belgium (+32)</option>
                                                         <option value="BF">BF - Burkina Faso (+226)</option>
                                                         <option value="BG">BG - Bulgaria (+359)</option>
                                                         <option value="BH">BH - Bahrain (+973)</option>
                                                         <option value="BI">BI - Burundi (+257)</option>
                                                         <option value="BJ">BJ - Benin (+229)</option>
                                                         <option value="BL">BL - Saint Barthelemy (+590)</option>
                                                         <option value="BM">BM - Bermuda (+1441)</option>
                                                         <option value="BN">BN - Brunei Darussalam (+673)</option>
                                                         <option value="BO">BO - Bolivia (+591)</option>
                                                         <option value="BR">BR - Brazil (+55)</option>
                                                         <option value="BS">BS - Bahamas (+1242)</option>
                                                         <option value="BT">BT - Bhutan (+975)</option>
                                                         <option value="BW">BW - Botswana (+267)</option>
                                                         <option value="BY">BY - Belarus (+375)</option>
                                                         <option value="BZ">BZ - Belize (+501)</option>
                                                         <option value="CA">CA - Canada (+1)</option>
                                                         <option value="CC">CC - Cocos (keeling) Islands (+61)</option>
                                                         <option value="CD">CD - Congo, The Democratic Republic Of The (+243)</option>
                                                         <option value="CF">CF - Central African Republic (+236)</option>
                                                         <option value="CG">CG - Congo (+242)</option>
                                                         <option value="CH">CH - Switzerland (+41)</option>
                                                         <option value="CI">CI - Cote D Ivoire (+225)</option>
                                                         <option value="CK">CK - Cook Islands (+682)</option>
                                                         <option value="CL">CL - Chile (+56)</option>
                                                         <option value="CM">CM - Cameroon (+237)</option>
                                                         <option value="CN">CN - China (+86)</option>
                                                         <option value="CO">CO - Colombia (+57)</option>
                                                         <option value="CR">CR - Costa Rica (+506)</option>
                                                         <option value="CU">CU - Cuba (+53)</option>
                                                         <option value="CV">CV - Cape Verde (+238)</option>
                                                         <option value="CX">CX - Christmas Island (+61)</option>
                                                         <option value="CY">CY - Cyprus (+357)</option>
                                                         <option value="CZ">CZ - Czech Republic (+420)</option>
                                                         <option value="DE">DE - Germany (+49)</option>
                                                         <option value="DJ">DJ - Djibouti (+253)</option>
                                                         <option value="DK">DK - Denmark (+45)</option>
                                                         <option value="DM">DM - Dominica (+1767)</option>
                                                         <option value="DO">DO - Dominican Republic (+1809)</option>
                                                         <option value="DZ">DZ - Algeria (+213)</option>
                                                         <option value="EC">EC - Ecuador (+593)</option>
                                                         <option value="EE">EE - Estonia (+372)</option>
                                                         <option value="EG">EG - Egypt (+20)</option>
                                                         <option value="ER">ER - Eritrea (+291)</option>
                                                         <option value="ES">ES - Spain (+34)</option>
                                                         <option value="ET">ET - Ethiopia (+251)</option>
                                                         <option value="FI">FI - Finland (+358)</option>
                                                         <option value="FJ">FJ - Fiji (+679)</option>
                                                         <option value="FK">FK - Falkland Islands (malvinas) (+500)</option>
                                                         <option value="FM">FM - Micronesia, Federated States Of (+691)</option>
                                                         <option value="FO">FO - Faroe Islands (+298)</option>
                                                         <option value="FR">FR - France (+33)</option>
                                                         <option value="GA">GA - Gabon (+241)</option>
                                                         <option value="GB">GB - United Kingdom (+44)</option>
                                                         <option value="GD">GD - Grenada (+1473)</option>
                                                         <option value="GE">GE - Georgia (+995)</option>
                                                         <option value="GH">GH - Ghana (+233)</option>
                                                         <option value="GI">GI - Gibraltar (+350)</option>
                                                         <option value="GL">GL - Greenland (+299)</option>
                                                         <option value="GM">GM - Gambia (+220)</option>
                                                         <option value="GN">GN - Guinea (+224)</option>
                                                         <option value="GQ">GQ - Equatorial Guinea (+240)</option>
                                                         <option value="GR">GR - Greece (+30)</option>
                                                         <option value="GT">GT - Guatemala (+502)</option>
                                                         <option value="GU">GU - Guam (+1671)</option>
                                                         <option value="GW">GW - Guinea-bissau (+245)</option>
                                                         <option value="GY">GY - Guyana (+592)</option>
                                                         <option value="HK">HK - Hong Kong (+852)</option>
                                                         <option value="HN">HN - Honduras (+504)</option>
                                                         <option value="HR">HR - Croatia (+385)</option>
                                                         <option value="HT">HT - Haiti (+509)</option>
                                                         <option value="HU">HU - Hungary (+36)</option>
                                                         <option value="ID">ID - Indonesia (+62)</option>
                                                         <option value="IE">IE - Ireland (+353)</option>
                                                         <option value="IL">IL - Israel (+972)</option>
                                                         <option value="IM">IM - Isle Of Man (+44)</option>
                                                         <option value="IN">IN - India (+91)</option>
                                                         <option value="IQ">IQ - Iraq (+964)</option>
                                                         <option value="IR">IR - Iran, Islamic Republic Of (+98)</option>
                                                         <option value="IS">IS - Iceland (+354)</option>
                                                         <option value="IT">IT - Italy (+39)</option>
                                                         <option value="JM">JM - Jamaica (+1876)</option>
                                                         <option value="JO">JO - Jordan (+962)</option>
                                                         <option value="JP">JP - Japan (+81)</option>
                                                         <option value="KE">KE - Kenya (+254)</option>
                                                         <option value="KG">KG - Kyrgyzstan (+996)</option>
                                                         <option value="KH">KH - Cambodia (+855)</option>
                                                         <option value="KI">KI - Kiribati (+686)</option>
                                                         <option value="KM">KM - Comoros (+269)</option>
                                                         <option value="KN">KN - Saint Kitts And Nevis (+1869)</option>
                                                         <option value="KP">KP - Korea Democratic Peoples Republic Of (+850)</option>
                                                         <option value="KR">KR - Korea Republic Of (+82)</option>
                                                         <option value="KW">KW - Kuwait (+965)</option>
                                                         <option value="KY">KY - Cayman Islands (+1345)</option>
                                                         <option value="KZ">KZ - Kazakstan (+7)</option>
                                                         <option value="LA">LA - Lao Peoples Democratic Republic (+856)</option>
                                                         <option value="LB">LB - Lebanon (+961)</option>
                                                         <option value="LC">LC - Saint Lucia (+1758)</option>
                                                         <option value="LI">LI - Liechtenstein (+423)</option>
                                                         <option value="LK">LK - Sri Lanka (+94)</option>
                                                         <option value="LR">LR - Liberia (+231)</option>
                                                         <option value="LS">LS - Lesotho (+266)</option>
                                                         <option value="LT">LT - Lithuania (+370)</option>
                                                         <option value="LU">LU - Luxembourg (+352)</option>
                                                         <option value="LV">LV - Latvia (+371)</option>
                                                         <option value="LY">LY - Libyan Arab Jamahiriya (+218)</option>
                                                         <option value="MA">MA - Morocco (+212)</option>
                                                         <option value="MC">MC - Monaco (+377)</option>
                                                         <option value="MD">MD - Moldova, Republic Of (+373)</option>
                                                         <option value="ME">ME - Montenegro (+382)</option>
                                                         <option value="MF">MF - Saint Martin (+1599)</option>
                                                         <option value="MG">MG - Madagascar (+261)</option>
                                                         <option value="MH">MH - Marshall Islands (+692)</option>
                                                         <option value="MK">MK - Macedonia, The Former Yugoslav Republic Of (+389)</option>
                                                         <option value="ML">ML - Mali (+223)</option>
                                                         <option value="MM">MM - Myanmar (+95)</option>
                                                         <option value="MN">MN - Mongolia (+976)</option>
                                                         <option value="MO">MO - Macau (+853)</option>
                                                         <option value="MP">MP - Northern Mariana Islands (+1670)</option>
                                                         <option value="MR">MR - Mauritania (+222)</option>
                                                         <option value="MS">MS - Montserrat (+1664)</option>
                                                         <option value="MT">MT - Malta (+356)</option>
                                                         <option value="MU">MU - Mauritius (+230)</option>
                                                         <option value="MV">MV - Maldives (+960)</option>
                                                         <option value="MW">MW - Malawi (+265)</option>
                                                         <option value="MX">MX - Mexico (+52)</option>
                                                         <option value="MY">MY - Malaysia (+60)</option>
                                                         <option value="MZ">MZ - Mozambique (+258)</option>
                                                         <option value="NA">NA - Namibia (+264)</option>
                                                         <option value="NC">NC - New Caledonia (+687)</option>
                                                         <option value="NE">NE - Niger (+227)</option>
                                                         <option value="NG">NG - Nigeria (+234)</option>
                                                         <option value="NI">NI - Nicaragua (+505)</option>
                                                         <option value="NL">NL - Netherlands (+31)</option>
                                                         <option value="NO">NO - Norway (+47)</option>
                                                         <option value="NP">NP - Nepal (+977)</option>
                                                         <option value="NR">NR - Nauru (+674)</option>
                                                         <option value="NU">NU - Niue (+683)</option>
                                                         <option value="NZ">NZ - New Zealand (+64)</option>
                                                         <option value="OM">OM - Oman (+968)</option>
                                                         <option value="PA">PA - Panama (+507)</option>
                                                         <option value="PE">PE - Peru (+51)</option>
                                                         <option value="PF">PF - French Polynesia (+689)</option>
                                                         <option value="PG">PG - Papua New Guinea (+675)</option>
                                                         <option value="PH">PH - Philippines (+63)</option>
                                                         <option value="PK">PK - Pakistan (+92)</option>
                                                         <option value="PL">PL - Poland (+48)</option>
                                                         <option value="PM">PM - Saint Pierre And Miquelon (+508)</option>
                                                         <option value="PN">PN - Pitcairn (+870)</option>
                                                         <option value="PR">PR - Puerto Rico (+1)</option>
                                                         <option value="PT">PT - Portugal (+351)</option>
                                                         <option value="PW">PW - Palau (+680)</option>
                                                         <option value="PY">PY - Paraguay (+595)</option>
                                                         <option value="QA">QA - Qatar (+974)</option>
                                                         <option value="RO">RO - Romania (+40)</option>
                                                         <option value="RS">RS - Serbia (+381)</option>
                                                         <option value="RU">RU - Russian Federation (+7)</option>
                                                         <option value="RW">RW - Rwanda (+250)</option>
                                                         <option value="SA">SA - Saudi Arabia (+966)</option>
                                                         <option value="SB">SB - Solomon Islands (+677)</option>
                                                         <option value="SC">SC - Seychelles (+248)</option>
                                                         <option value="SD">SD - Sudan (+249)</option>
                                                         <option value="SE">SE - Sweden (+46)</option>
                                                         <option value="SG">SG - Singapore (+65)</option>
                                                         <option value="SH">SH - Saint Helena (+290)</option>
                                                         <option value="SI">SI - Slovenia (+386)</option>
                                                         <option value="SK">SK - Slovakia (+421)</option>
                                                         <option value="SL">SL - Sierra Leone (+232)</option>
                                                         <option value="SM">SM - San Marino (+378)</option>
                                                         <option value="SN">SN - Senegal (+221)</option>
                                                         <option value="SO">SO - Somalia (+252)</option>
                                                         <option value="SR">SR - Suriname (+597)</option>
                                                         <option value="ST">ST - Sao Tome And Principe (+239)</option>
                                                         <option value="SV">SV - El Salvador (+503)</option>
                                                         <option value="SY">SY - Syrian Arab Republic (+963)</option>
                                                         <option value="SZ">SZ - Swaziland (+268)</option>
                                                         <option value="TC">TC - Turks And Caicos Islands (+1649)</option>
                                                         <option value="TD">TD - Chad (+235)</option>
                                                         <option value="TG">TG - Togo (+228)</option>
                                                         <option value="TH">TH - Thailand (+66)</option>
                                                         <option value="TJ">TJ - Tajikistan (+992)</option>
                                                         <option value="TK">TK - Tokelau (+690)</option>
                                                         <option value="TL">TL - Timor-leste (+670)</option>
                                                         <option value="TM">TM - Turkmenistan (+993)</option>
                                                         <option value="TN">TN - Tunisia (+216)</option>
                                                         <option value="TO">TO - Tonga (+676)</option>
                                                         <option value="TR">TR - Turkey (+90)</option>
                                                         <option value="TT">TT - Trinidad And Tobago (+1868)</option>
                                                         <option value="TV">TV - Tuvalu (+688)</option>
                                                         <option value="TW">TW - Taiwan, Province Of China (+886)</option>
                                                         <option value="TZ">TZ - Tanzania, United Republic Of (+255)</option>
                                                         <option value="UA">UA - Ukraine (+380)</option>
                                                         <option value="UG">UG - Uganda (+256)</option>
                                                         <option value="US">US - United States (+1)</option>
                                                         <option value="UY">UY - Uruguay (+598)</option>
                                                         <option value="UZ">UZ - Uzbekistan (+998)</option>
                                                         <option value="VA">VA - Holy See (vatican City State) (+39)</option>
                                                         <option value="VC">VC - Saint Vincent And The Grenadines (+1784)</option>
                                                         <option value="VE">VE - Venezuela (+58)</option>
                                                         <option value="VG">VG - Virgin Islands, British (+1284)</option>
                                                         <option value="VI">VI - Virgin Islands, U.s. (+1340)</option>
                                                         <option value="VN">VN - Viet Nam (+84)</option>
                                                         <option value="VU">VU - Vanuatu (+678)</option>
                                                         <option value="WF">WF - Wallis And Futuna (+681)</option>
                                                         <option value="WS">WS - Samoa (+685)</option>
                                                         <option value="XK">XK - Kosovo (+381)</option>
                                                         <option value="YE">YE - Yemen (+967)</option>
                                                         <option value="YT">YT - Mayotte (+262)</option>
                                                         <option value="ZA">ZA - South Africa (+27)</option>
                                                         <option value="ZM">ZM - Zambia (+260)</option>
                                                         <option value="ZW">ZW - Zimbabwe (+263)</option>
                                                      </select>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <input type="text" name="phone" id="phone" class="form-control" value="">
                                                   </div>
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                   
                                                   <label class="col-md-2 control-label"> Warrenty </label>
                                                   <div class="col-md-4">
                                                      <input type="text" name="warrenty" class="form-control" placeholder="1 Year, No Warrenty" value="">
                                                   </div>
                                                
                                                
                                                   <label class="col-md-2 control-label"> Delivery Period </label>
                                                   <div class="col-md-4">
                                                      <input type="text" name="delivery_period" class="form-control" placeholder="2 days, 1 days etc" value="">
                                                   </div>
                                                
                                                   
                                                
                                                
                                                </div>
                                               
                                              
                                                   
                                                
                                                
                                                   
                                                
                                               
                                               
                                               
                                               
                                                                                              <div class="form-group">
                                               
                                                <label class="col-md-2 control-label">Delivery Service <span class="required"> * </span></label>
                                                   
													    <label class="col-md-2 control-label" for="pick up">Pick Up</label>
													    
													   
                                                      <div class="col-md-1">
                                                      <div class="radio" id="uniform-pick up"><span><input type="radio" name="delivery-service" value="pick up" id="pick up" class="form-control"></span></div>
                                                      </div>
                                                      
                                                     <label class="col-md-2 control-label" for="sindbad">By Sindbad</label>
                                                     
                                                     <div class="col-md-1">
                                                      <div class="radio" id="uniform-sindbad"><span><input type="radio" name="delivery-service" value="sindbad" id="sindbad" class="form-control"></span></div>
                                                      </div>
                                               </div>
                                               
                                                <hr>
                                                <hr>
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">
                                                      <h6>SPECIFICATIONS <span class="required"> * </span></h6>
                                                   </label>
                                                   <label class="col-md-4 control-label">
                                                      <h6 style="color:red;" id="info-spe"> <span class="required"> * </span></h6>
                                                </label></div>
                                                <div class="form-group">
                                                <label class="col-md-2 control-label"> Key </label>
                                                <div class="col-md-3">
                                                <input type="text" name="spcification-title[]" class="specification-key form-control" placeholder="Hard Disk">
                                                </div>
                                                <label class="col-md-2 control-label"> Value </label>
                                                <div class="col-md-3">
                                                <input type="text" name="spcification-value[]" class="form-control" placeholder="5 GB">
                                                </div>
                                                <div class="col-md-2">
                                                <button type="button" class="addSpecificationBtn btn btn-default">
                                                <i class="fa fa-plus"></i>
                                                </button>
                                                </div>
                                                </div>	
                                                <div style="min-height:250px;" id="AddSpecificationDiv">
                                                   <div id="CloneSpecification">
                                                   </div>
                                                </div>
                                                <hr>
                                                
                                                
                                                
                                                <hr>
                                                <!-- Button color -->
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Web Link
                                                   </label>
                                                   <div class="col-md-10">
                                                      <input type="text" id="weblink" class="form-control" name="weblink" placeholder="" value=""> 
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">YouTube
                                                   </label>
                                                   <div class="col-md-10">
                                                      <input type="text" id="youtube-link" class="form-control" name="youtube-link" placeholder="" value=""> 
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Facebook</label>
                                                   <div class="col-md-10">
                                                      <input type="text" id="name" class="form-control" name="facebook-link" placeholder="" value=""> 
                                                   </div>
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Seller Note</label>
                                                   <div class="col-md-10">
                                                      <textarea class="form-control" name="saller-note" placeholder="Best Deal."></textarea>
                                                   </div>
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label" style="text-align:left;">
                                                      <h4>Google Map Location</h4>
                                                   </label>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Latitude</label>
                                                   <div class="col-md-4">
                                                      <input type="text" id="name" class="form-control" name="latitude" placeholder="Latitude Cordinates" value=""> 
                                                      <span class="help-block">Example: -50.895199</span>
                                                   </div>
                                                   <label class="col-md-2 control-label">Longitude</label>
                                                   <div class="col-md-4">
                                                      <input type="text" id="name" class="form-control" name="longitude" placeholder="Longitude Cordinates" value=""> 
                                                      <span class="help-block">Example: 5.318750</span>
                                                   </div>
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                   <label class="col-md-12">
                                                      <h3>Design Your Articles</h3>
                                                   </label>
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                   <textarea id="my_content" class="ckeditor" name="product-articles-html" style="visibility: hidden; display: none;"></textarea><div id="cke_my_content" class="cke_1 cke cke_reset cke_chrome cke_editor_my_content cke_ltr cke_browser_webkit" dir="ltr" lang="en" role="application" aria-labelledby="cke_my_content_arialbl" style="width: auto;"><span id="cke_my_content_arialbl" class="cke_voice_label">Rich Text Editor, my_content</span><div class="cke_inner cke_reset" role="presentation"><span id="cke_1_top" class="cke_top cke_reset_all" role="presentation" style="height: auto; user-select: none;"><span id="cke_12" class="cke_voice_label">Editor toolbars</span><span id="cke_1_toolbox" class="cke_toolbox" role="group" aria-labelledby="cke_12" onmousedown="return false;"><span id="cke_17" class="cke_toolbar" aria-labelledby="cke_17_label" role="toolbar"><span id="cke_17_label" class="cke_voice_label">Document</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_18" class="cke_button cke_button__source cke_button_off" href="javascript:void('Source')" title="Source" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_18_label" aria-describedby="cke_18_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(2,event);" onfocus="return CKEDITOR.tools.callFunction(3,event);" onclick="CKEDITOR.tools.callFunction(4,this);return false;"><span class="cke_button_icon cke_button__source_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1848px;background-size:auto;">&nbsp;</span><span id="cke_18_label" class="cke_button_label cke_button__source_label" aria-hidden="false">Source</span><span id="cke_18_description" class="cke_button_label" aria-hidden="false"></span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_19" class="cke_button cke_button__save cke_button_off" href="javascript:void('Save')" title="Save" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_19_label" aria-describedby="cke_19_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(5,event);" onfocus="return CKEDITOR.tools.callFunction(6,event);" onclick="CKEDITOR.tools.callFunction(7,this);return false;"><span class="cke_button_icon cke_button__save_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1728px;background-size:auto;">&nbsp;</span><span id="cke_19_label" class="cke_button_label cke_button__save_label" aria-hidden="false">Save</span><span id="cke_19_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_20" class="cke_button cke_button__newpage cke_button_off" href="javascript:void('New Page')" title="New Page" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_20_label" aria-describedby="cke_20_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(8,event);" onfocus="return CKEDITOR.tools.callFunction(9,event);" onclick="CKEDITOR.tools.callFunction(10,this);return false;"><span class="cke_button_icon cke_button__newpage_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1464px;background-size:auto;">&nbsp;</span><span id="cke_20_label" class="cke_button_label cke_button__newpage_label" aria-hidden="false">New Page</span><span id="cke_20_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_21" class="cke_button cke_button__preview cke_button_off" href="javascript:void('Preview')" title="Preview" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_21_label" aria-describedby="cke_21_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(11,event);" onfocus="return CKEDITOR.tools.callFunction(12,event);" onclick="CKEDITOR.tools.callFunction(13,this);return false;"><span class="cke_button_icon cke_button__preview_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1656px;background-size:auto;">&nbsp;</span><span id="cke_21_label" class="cke_button_label cke_button__preview_label" aria-hidden="false">Preview</span><span id="cke_21_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_22" class="cke_button cke_button__print cke_button_off" href="javascript:void('Print')" title="Print" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_22_label" aria-describedby="cke_22_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(14,event);" onfocus="return CKEDITOR.tools.callFunction(15,event);" onclick="CKEDITOR.tools.callFunction(16,this);return false;"><span class="cke_button_icon cke_button__print_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1680px;background-size:auto;">&nbsp;</span><span id="cke_22_label" class="cke_button_label cke_button__print_label" aria-hidden="false">Print</span><span id="cke_22_description" class="cke_button_label" aria-hidden="false"></span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_23" class="cke_button cke_button__templates cke_button_off" href="javascript:void('Templates')" title="Templates" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_23_label" aria-describedby="cke_23_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(17,event);" onfocus="return CKEDITOR.tools.callFunction(18,event);" onclick="CKEDITOR.tools.callFunction(19,this);return false;"><span class="cke_button_icon cke_button__templates_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -456px;background-size:auto;">&nbsp;</span><span id="cke_23_label" class="cke_button_label cke_button__templates_label" aria-hidden="false">Templates</span><span id="cke_23_description" class="cke_button_label" aria-hidden="false"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_24" class="cke_toolbar" aria-labelledby="cke_24_label" role="toolbar"><span id="cke_24_label" class="cke_voice_label">Clipboard/Undo</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_25" class="cke_button cke_button__cut cke_button_disabled " href="javascript:void('Cut')" title="Cut (Ctrl+X)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_25_label" aria-describedby="cke_25_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(20,event);" onfocus="return CKEDITOR.tools.callFunction(21,event);" onclick="CKEDITOR.tools.callFunction(22,this);return false;"><span class="cke_button_icon cke_button__cut_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -312px;background-size:auto;">&nbsp;</span><span id="cke_25_label" class="cke_button_label cke_button__cut_label" aria-hidden="false">Cut</span><span id="cke_25_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+X</span></a><a id="cke_26" class="cke_button cke_button__copy cke_button_disabled " href="javascript:void('Copy')" title="Copy (Ctrl+C)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_26_label" aria-describedby="cke_26_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(23,event);" onfocus="return CKEDITOR.tools.callFunction(24,event);" onclick="CKEDITOR.tools.callFunction(25,this);return false;"><span class="cke_button_icon cke_button__copy_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -264px;background-size:auto;">&nbsp;</span><span id="cke_26_label" class="cke_button_label cke_button__copy_label" aria-hidden="false">Copy</span><span id="cke_26_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+C</span></a><a id="cke_27" class="cke_button cke_button__paste cke_button_off" href="javascript:void('Paste')" title="Paste (Ctrl+V)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_27_label" aria-describedby="cke_27_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(26,event);" onfocus="return CKEDITOR.tools.callFunction(27,event);" onclick="CKEDITOR.tools.callFunction(28,this);return false;"><span class="cke_button_icon cke_button__paste_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -360px;background-size:auto;">&nbsp;</span><span id="cke_27_label" class="cke_button_label cke_button__paste_label" aria-hidden="false">Paste</span><span id="cke_27_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+V</span></a><a id="cke_28" class="cke_button cke_button__pastetext cke_button_off" href="javascript:void('Paste as plain text')" title="Paste as plain text (Ctrl+Shift+V)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_28_label" aria-describedby="cke_28_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(29,event);" onfocus="return CKEDITOR.tools.callFunction(30,event);" onclick="CKEDITOR.tools.callFunction(31,this);return false;"><span class="cke_button_icon cke_button__pastetext_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1560px;background-size:auto;">&nbsp;</span><span id="cke_28_label" class="cke_button_label cke_button__pastetext_label" aria-hidden="false">Paste as plain text</span><span id="cke_28_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+Shift+V</span></a><a id="cke_29" class="cke_button cke_button__pastefromword cke_button_off" href="javascript:void('Paste from Word')" title="Paste from Word" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_29_label" aria-describedby="cke_29_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(32,event);" onfocus="return CKEDITOR.tools.callFunction(33,event);" onclick="CKEDITOR.tools.callFunction(34,this);return false;"><span class="cke_button_icon cke_button__pastefromword_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1608px;background-size:auto;">&nbsp;</span><span id="cke_29_label" class="cke_button_label cke_button__pastefromword_label" aria-hidden="false">Paste from Word</span><span id="cke_29_description" class="cke_button_label" aria-hidden="false"></span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_30" class="cke_button cke_button__undo cke_button_disabled " href="javascript:void('Undo')" title="Undo (Ctrl+Z)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_30_label" aria-describedby="cke_30_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(35,event);" onfocus="return CKEDITOR.tools.callFunction(36,event);" onclick="CKEDITOR.tools.callFunction(37,this);return false;"><span class="cke_button_icon cke_button__undo_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -2016px;background-size:auto;">&nbsp;</span><span id="cke_30_label" class="cke_button_label cke_button__undo_label" aria-hidden="false">Undo</span><span id="cke_30_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+Z</span></a><a id="cke_31" class="cke_button cke_button__redo cke_button_disabled " href="javascript:void('Redo')" title="Redo (Ctrl+Y)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_31_label" aria-describedby="cke_31_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(38,event);" onfocus="return CKEDITOR.tools.callFunction(39,event);" onclick="CKEDITOR.tools.callFunction(40,this);return false;"><span class="cke_button_icon cke_button__redo_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1968px;background-size:auto;">&nbsp;</span><span id="cke_31_label" class="cke_button_label cke_button__redo_label" aria-hidden="false">Redo</span><span id="cke_31_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+Y</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_32" class="cke_toolbar" aria-labelledby="cke_32_label" role="toolbar"><span id="cke_32_label" class="cke_voice_label">Editing</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_33" class="cke_button cke_button__find cke_button_off" href="javascript:void('Find')" title="Find" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_33_label" aria-describedby="cke_33_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(41,event);" onfocus="return CKEDITOR.tools.callFunction(42,event);" onclick="CKEDITOR.tools.callFunction(43,this);return false;"><span class="cke_button_icon cke_button__find_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -552px;background-size:auto;">&nbsp;</span><span id="cke_33_label" class="cke_button_label cke_button__find_label" aria-hidden="false">Find</span><span id="cke_33_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_34" class="cke_button cke_button__replace cke_button_off" href="javascript:void('Replace')" title="Replace" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_34_label" aria-describedby="cke_34_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(44,event);" onfocus="return CKEDITOR.tools.callFunction(45,event);" onclick="CKEDITOR.tools.callFunction(46,this);return false;"><span class="cke_button_icon cke_button__replace_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -576px;background-size:auto;">&nbsp;</span><span id="cke_34_label" class="cke_button_label cke_button__replace_label" aria-hidden="false">Replace</span><span id="cke_34_description" class="cke_button_label" aria-hidden="false"></span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_35" class="cke_button cke_button__selectall cke_button_off" href="javascript:void('Select All')" title="Select All" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_35_label" aria-describedby="cke_35_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(47,event);" onfocus="return CKEDITOR.tools.callFunction(48,event);" onclick="CKEDITOR.tools.callFunction(49,this);return false;"><span class="cke_button_icon cke_button__selectall_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1752px;background-size:auto;">&nbsp;</span><span id="cke_35_label" class="cke_button_label cke_button__selectall_label" aria-hidden="false">Select All</span><span id="cke_35_description" class="cke_button_label" aria-hidden="false"></span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_36" class="cke_button cke_button__scayt cke_button_off" href="javascript:void('Spell Checker')" title="Spell Checker" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_36_label" aria-describedby="cke_36_description" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(50,event);" onfocus="return CKEDITOR.tools.callFunction(51,event);" onclick="CKEDITOR.tools.callFunction(52,this);return false;"><span class="cke_button_icon cke_button__scayt_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1896px;background-size:auto;">&nbsp;</span><span id="cke_36_label" class="cke_button_label cke_button__scayt_label" aria-hidden="false">Spell Check As You Type</span><span id="cke_36_description" class="cke_button_label" aria-hidden="false"></span><span class="cke_button_arrow"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_37" class="cke_toolbar cke_toolbar_last" aria-labelledby="cke_37_label" role="toolbar"><span id="cke_37_label" class="cke_voice_label">Forms</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_38" class="cke_button cke_button__form cke_button_off" href="javascript:void('Form')" title="Form" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_38_label" aria-describedby="cke_38_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(53,event);" onfocus="return CKEDITOR.tools.callFunction(54,event);" onclick="CKEDITOR.tools.callFunction(55,this);return false;"><span class="cke_button_icon cke_button__form_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -672px;background-size:auto;">&nbsp;</span><span id="cke_38_label" class="cke_button_label cke_button__form_label" aria-hidden="false">Form</span><span id="cke_38_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_39" class="cke_button cke_button__checkbox cke_button_off" href="javascript:void('Checkbox')" title="Checkbox" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_39_label" aria-describedby="cke_39_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(56,event);" onfocus="return CKEDITOR.tools.callFunction(57,event);" onclick="CKEDITOR.tools.callFunction(58,this);return false;"><span class="cke_button_icon cke_button__checkbox_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -648px;background-size:auto;">&nbsp;</span><span id="cke_39_label" class="cke_button_label cke_button__checkbox_label" aria-hidden="false">Checkbox</span><span id="cke_39_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_40" class="cke_button cke_button__radio cke_button_off" href="javascript:void('Radio Button')" title="Radio Button" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_40_label" aria-describedby="cke_40_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(59,event);" onfocus="return CKEDITOR.tools.callFunction(60,event);" onclick="CKEDITOR.tools.callFunction(61,this);return false;"><span class="cke_button_icon cke_button__radio_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -744px;background-size:auto;">&nbsp;</span><span id="cke_40_label" class="cke_button_label cke_button__radio_label" aria-hidden="false">Radio Button</span><span id="cke_40_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_41" class="cke_button cke_button__textfield cke_button_off" href="javascript:void('Text Field')" title="Text Field" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_41_label" aria-describedby="cke_41_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(62,event);" onfocus="return CKEDITOR.tools.callFunction(63,event);" onclick="CKEDITOR.tools.callFunction(64,this);return false;"><span class="cke_button_icon cke_button__textfield_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -888px;background-size:auto;">&nbsp;</span><span id="cke_41_label" class="cke_button_label cke_button__textfield_label" aria-hidden="false">Text Field</span><span id="cke_41_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_42" class="cke_button cke_button__textarea cke_button_off" href="javascript:void('Textarea')" title="Textarea" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_42_label" aria-describedby="cke_42_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(65,event);" onfocus="return CKEDITOR.tools.callFunction(66,event);" onclick="CKEDITOR.tools.callFunction(67,this);return false;"><span class="cke_button_icon cke_button__textarea_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -840px;background-size:auto;">&nbsp;</span><span id="cke_42_label" class="cke_button_label cke_button__textarea_label" aria-hidden="false">Textarea</span><span id="cke_42_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_43" class="cke_button cke_button__select cke_button_off" href="javascript:void('Selection Field')" title="Selection Field" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_43_label" aria-describedby="cke_43_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(68,event);" onfocus="return CKEDITOR.tools.callFunction(69,event);" onclick="CKEDITOR.tools.callFunction(70,this);return false;"><span class="cke_button_icon cke_button__select_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -792px;background-size:auto;">&nbsp;</span><span id="cke_43_label" class="cke_button_label cke_button__select_label" aria-hidden="false">Selection Field</span><span id="cke_43_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_44" class="cke_button cke_button__button cke_button_off" href="javascript:void('Button')" title="Button" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_44_label" aria-describedby="cke_44_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(71,event);" onfocus="return CKEDITOR.tools.callFunction(72,event);" onclick="CKEDITOR.tools.callFunction(73,this);return false;"><span class="cke_button_icon cke_button__button_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -624px;background-size:auto;">&nbsp;</span><span id="cke_44_label" class="cke_button_label cke_button__button_label" aria-hidden="false">Button</span><span id="cke_44_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_45" class="cke_button cke_button__imagebutton cke_button_off" href="javascript:void('Image Button')" title="Image Button" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_45_label" aria-describedby="cke_45_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(74,event);" onfocus="return CKEDITOR.tools.callFunction(75,event);" onclick="CKEDITOR.tools.callFunction(76,this);return false;"><span class="cke_button_icon cke_button__imagebutton_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -720px;background-size:auto;">&nbsp;</span><span id="cke_45_label" class="cke_button_label cke_button__imagebutton_label" aria-hidden="false">Image Button</span><span id="cke_45_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_46" class="cke_button cke_button__hiddenfield cke_button_off" href="javascript:void('Hidden Field')" title="Hidden Field" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_46_label" aria-describedby="cke_46_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(77,event);" onfocus="return CKEDITOR.tools.callFunction(78,event);" onclick="CKEDITOR.tools.callFunction(79,this);return false;"><span class="cke_button_icon cke_button__hiddenfield_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -696px;background-size:auto;">&nbsp;</span><span id="cke_46_label" class="cke_button_label cke_button__hiddenfield_label" aria-hidden="false">Hidden Field</span><span id="cke_46_description" class="cke_button_label" aria-hidden="false"></span></a></span><span class="cke_toolbar_end"></span></span><span class="cke_toolbar_break"></span><span id="cke_47" class="cke_toolbar" aria-labelledby="cke_47_label" role="toolbar"><span id="cke_47_label" class="cke_voice_label">Basic Styles</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_48" class="cke_button cke_button__bold cke_button_off" href="javascript:void('Bold')" title="Bold (Ctrl+B)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_48_label" aria-describedby="cke_48_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(80,event);" onfocus="return CKEDITOR.tools.callFunction(81,event);" onclick="CKEDITOR.tools.callFunction(82,this);return false;"><span class="cke_button_icon cke_button__bold_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -24px;background-size:auto;">&nbsp;</span><span id="cke_48_label" class="cke_button_label cke_button__bold_label" aria-hidden="false">Bold</span><span id="cke_48_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+B</span></a><a id="cke_49" class="cke_button cke_button__italic cke_button_off" href="javascript:void('Italic')" title="Italic (Ctrl+I)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_49_label" aria-describedby="cke_49_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(83,event);" onfocus="return CKEDITOR.tools.callFunction(84,event);" onclick="CKEDITOR.tools.callFunction(85,this);return false;"><span class="cke_button_icon cke_button__italic_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -48px;background-size:auto;">&nbsp;</span><span id="cke_49_label" class="cke_button_label cke_button__italic_label" aria-hidden="false">Italic</span><span id="cke_49_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+I</span></a><a id="cke_50" class="cke_button cke_button__underline cke_button_off" href="javascript:void('Underline')" title="Underline (Ctrl+U)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_50_label" aria-describedby="cke_50_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(86,event);" onfocus="return CKEDITOR.tools.callFunction(87,event);" onclick="CKEDITOR.tools.callFunction(88,this);return false;"><span class="cke_button_icon cke_button__underline_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -144px;background-size:auto;">&nbsp;</span><span id="cke_50_label" class="cke_button_label cke_button__underline_label" aria-hidden="false">Underline</span><span id="cke_50_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+U</span></a><a id="cke_51" class="cke_button cke_button__strike cke_button_off" href="javascript:void('Strikethrough')" title="Strikethrough" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_51_label" aria-describedby="cke_51_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(89,event);" onfocus="return CKEDITOR.tools.callFunction(90,event);" onclick="CKEDITOR.tools.callFunction(91,this);return false;"><span class="cke_button_icon cke_button__strike_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -72px;background-size:auto;">&nbsp;</span><span id="cke_51_label" class="cke_button_label cke_button__strike_label" aria-hidden="false">Strikethrough</span><span id="cke_51_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_52" class="cke_button cke_button__subscript cke_button_off" href="javascript:void('Subscript')" title="Subscript" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_52_label" aria-describedby="cke_52_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(92,event);" onfocus="return CKEDITOR.tools.callFunction(93,event);" onclick="CKEDITOR.tools.callFunction(94,this);return false;"><span class="cke_button_icon cke_button__subscript_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -96px;background-size:auto;">&nbsp;</span><span id="cke_52_label" class="cke_button_label cke_button__subscript_label" aria-hidden="false">Subscript</span><span id="cke_52_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_53" class="cke_button cke_button__superscript cke_button_off" href="javascript:void('Superscript')" title="Superscript" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_53_label" aria-describedby="cke_53_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(95,event);" onfocus="return CKEDITOR.tools.callFunction(96,event);" onclick="CKEDITOR.tools.callFunction(97,this);return false;"><span class="cke_button_icon cke_button__superscript_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -120px;background-size:auto;">&nbsp;</span><span id="cke_53_label" class="cke_button_label cke_button__superscript_label" aria-hidden="false">Superscript</span><span id="cke_53_description" class="cke_button_label" aria-hidden="false"></span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_54" class="cke_button cke_button__copyformatting cke_button_off" href="javascript:void('Copy Formatting')" title="Copy Formatting (Ctrl+Shift+C)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_54_label" aria-describedby="cke_54_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(98,event);" onfocus="return CKEDITOR.tools.callFunction(99,event);" onclick="CKEDITOR.tools.callFunction(100,this);return false;"><span class="cke_button_icon cke_button__copyformatting_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -480px;background-size:auto;">&nbsp;</span><span id="cke_54_label" class="cke_button_label cke_button__copyformatting_label" aria-hidden="false">Copy Formatting</span><span id="cke_54_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+Shift+C</span></a><a id="cke_55" class="cke_button cke_button__removeformat cke_button_off" href="javascript:void('Remove Format')" title="Remove Format" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_55_label" aria-describedby="cke_55_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(101,event);" onfocus="return CKEDITOR.tools.callFunction(102,event);" onclick="CKEDITOR.tools.callFunction(103,this);return false;"><span class="cke_button_icon cke_button__removeformat_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1704px;background-size:auto;">&nbsp;</span><span id="cke_55_label" class="cke_button_label cke_button__removeformat_label" aria-hidden="false">Remove Format</span><span id="cke_55_description" class="cke_button_label" aria-hidden="false"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_56" class="cke_toolbar" aria-labelledby="cke_56_label" role="toolbar"><span id="cke_56_label" class="cke_voice_label">Paragraph</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_57" class="cke_button cke_button__numberedlist cke_button_off" href="javascript:void('Insert/Remove Numbered List')" title="Insert/Remove Numbered List" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_57_label" aria-describedby="cke_57_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(104,event);" onfocus="return CKEDITOR.tools.callFunction(105,event);" onclick="CKEDITOR.tools.callFunction(106,this);return false;"><span class="cke_button_icon cke_button__numberedlist_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1392px;background-size:auto;">&nbsp;</span><span id="cke_57_label" class="cke_button_label cke_button__numberedlist_label" aria-hidden="false">Insert/Remove Numbered List</span><span id="cke_57_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_58" class="cke_button cke_button__bulletedlist cke_button_off" href="javascript:void('Insert/Remove Bulleted List')" title="Insert/Remove Bulleted List" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_58_label" aria-describedby="cke_58_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(107,event);" onfocus="return CKEDITOR.tools.callFunction(108,event);" onclick="CKEDITOR.tools.callFunction(109,this);return false;"><span class="cke_button_icon cke_button__bulletedlist_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1344px;background-size:auto;">&nbsp;</span><span id="cke_58_label" class="cke_button_label cke_button__bulletedlist_label" aria-hidden="false">Insert/Remove Bulleted List</span><span id="cke_58_description" class="cke_button_label" aria-hidden="false"></span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_59" class="cke_button cke_button__outdent cke_button_disabled " href="javascript:void('Decrease Indent')" title="Decrease Indent" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_59_label" aria-describedby="cke_59_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(110,event);" onfocus="return CKEDITOR.tools.callFunction(111,event);" onclick="CKEDITOR.tools.callFunction(112,this);return false;"><span class="cke_button_icon cke_button__outdent_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1056px;background-size:auto;">&nbsp;</span><span id="cke_59_label" class="cke_button_label cke_button__outdent_label" aria-hidden="false">Decrease Indent</span><span id="cke_59_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_60" class="cke_button cke_button__indent cke_button_off" href="javascript:void('Increase Indent')" title="Increase Indent" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_60_label" aria-describedby="cke_60_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(113,event);" onfocus="return CKEDITOR.tools.callFunction(114,event);" onclick="CKEDITOR.tools.callFunction(115,this);return false;"><span class="cke_button_icon cke_button__indent_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1008px;background-size:auto;">&nbsp;</span><span id="cke_60_label" class="cke_button_label cke_button__indent_label" aria-hidden="false">Increase Indent</span><span id="cke_60_description" class="cke_button_label" aria-hidden="false"></span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_61" class="cke_button cke_button__blockquote cke_button_off" href="javascript:void('Block Quote')" title="Block Quote" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_61_label" aria-describedby="cke_61_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(116,event);" onfocus="return CKEDITOR.tools.callFunction(117,event);" onclick="CKEDITOR.tools.callFunction(118,this);return false;"><span class="cke_button_icon cke_button__blockquote_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -216px;background-size:auto;">&nbsp;</span><span id="cke_61_label" class="cke_button_label cke_button__blockquote_label" aria-hidden="false">Block Quote</span><span id="cke_61_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_62" class="cke_button cke_button__creatediv cke_button_off" href="javascript:void('Create Div Container')" title="Create Div Container" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_62_label" aria-describedby="cke_62_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(119,event);" onfocus="return CKEDITOR.tools.callFunction(120,event);" onclick="CKEDITOR.tools.callFunction(121,this);return false;"><span class="cke_button_icon cke_button__creatediv_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -504px;background-size:auto;">&nbsp;</span><span id="cke_62_label" class="cke_button_label cke_button__creatediv_label" aria-hidden="false">Create Div Container</span><span id="cke_62_description" class="cke_button_label" aria-hidden="false"></span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_63" class="cke_button cke_button__justifyleft cke_button_off" href="javascript:void('Align Left')" title="Align Left" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_63_label" aria-describedby="cke_63_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(122,event);" onfocus="return CKEDITOR.tools.callFunction(123,event);" onclick="CKEDITOR.tools.callFunction(124,this);return false;"><span class="cke_button_icon cke_button__justifyleft_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1152px;background-size:auto;">&nbsp;</span><span id="cke_63_label" class="cke_button_label cke_button__justifyleft_label" aria-hidden="false">Align Left</span><span id="cke_63_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_64" class="cke_button cke_button__justifycenter cke_button_off" href="javascript:void('Center')" title="Center" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_64_label" aria-describedby="cke_64_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(125,event);" onfocus="return CKEDITOR.tools.callFunction(126,event);" onclick="CKEDITOR.tools.callFunction(127,this);return false;"><span class="cke_button_icon cke_button__justifycenter_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1128px;background-size:auto;">&nbsp;</span><span id="cke_64_label" class="cke_button_label cke_button__justifycenter_label" aria-hidden="false">Center</span><span id="cke_64_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_65" class="cke_button cke_button__justifyright cke_button_off" href="javascript:void('Align Right')" title="Align Right" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_65_label" aria-describedby="cke_65_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(128,event);" onfocus="return CKEDITOR.tools.callFunction(129,event);" onclick="CKEDITOR.tools.callFunction(130,this);return false;"><span class="cke_button_icon cke_button__justifyright_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1176px;background-size:auto;">&nbsp;</span><span id="cke_65_label" class="cke_button_label cke_button__justifyright_label" aria-hidden="false">Align Right</span><span id="cke_65_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_66" class="cke_button cke_button__justifyblock cke_button_off" href="javascript:void('Justify')" title="Justify" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_66_label" aria-describedby="cke_66_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(131,event);" onfocus="return CKEDITOR.tools.callFunction(132,event);" onclick="CKEDITOR.tools.callFunction(133,this);return false;"><span class="cke_button_icon cke_button__justifyblock_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1104px;background-size:auto;">&nbsp;</span><span id="cke_66_label" class="cke_button_label cke_button__justifyblock_label" aria-hidden="false">Justify</span><span id="cke_66_description" class="cke_button_label" aria-hidden="false"></span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_67" class="cke_button cke_button__bidiltr cke_button_off" href="javascript:void('Text direction from left to right')" title="Text direction from left to right" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_67_label" aria-describedby="cke_67_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(134,event);" onfocus="return CKEDITOR.tools.callFunction(135,event);" onclick="CKEDITOR.tools.callFunction(136,this);return false;"><span class="cke_button_icon cke_button__bidiltr_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -168px;background-size:auto;">&nbsp;</span><span id="cke_67_label" class="cke_button_label cke_button__bidiltr_label" aria-hidden="false">Text direction from left to right</span><span id="cke_67_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_68" class="cke_button cke_button__bidirtl cke_button_off" href="javascript:void('Text direction from right to left')" title="Text direction from right to left" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_68_label" aria-describedby="cke_68_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(137,event);" onfocus="return CKEDITOR.tools.callFunction(138,event);" onclick="CKEDITOR.tools.callFunction(139,this);return false;"><span class="cke_button_icon cke_button__bidirtl_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -192px;background-size:auto;">&nbsp;</span><span id="cke_68_label" class="cke_button_label cke_button__bidirtl_label" aria-hidden="false">Text direction from right to left</span><span id="cke_68_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_69" class="cke_button cke_button__language cke_button_off" href="javascript:void('Set language')" title="Set language" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_69_label" aria-describedby="cke_69_description" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(140,event);" onfocus="return CKEDITOR.tools.callFunction(141,event);" onclick="CKEDITOR.tools.callFunction(142,this);return false;"><span class="cke_button_icon cke_button__language_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1200px;background-size:auto;">&nbsp;</span><span id="cke_69_label" class="cke_button_label cke_button__language_label" aria-hidden="false">Set language</span><span id="cke_69_description" class="cke_button_label" aria-hidden="false"></span><span class="cke_button_arrow"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_70" class="cke_toolbar" aria-labelledby="cke_70_label" role="toolbar"><span id="cke_70_label" class="cke_voice_label">Links</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_71" class="cke_button cke_button__link cke_button_off" href="javascript:void('Link')" title="Link (Ctrl+L)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_71_label" aria-describedby="cke_71_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(143,event);" onfocus="return CKEDITOR.tools.callFunction(144,event);" onclick="CKEDITOR.tools.callFunction(145,this);return false;"><span class="cke_button_icon cke_button__link_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1272px;background-size:auto;">&nbsp;</span><span id="cke_71_label" class="cke_button_label cke_button__link_label" aria-hidden="false">Link</span><span id="cke_71_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+L</span></a><a id="cke_72" class="cke_button cke_button__unlink cke_button_disabled " href="javascript:void('Unlink')" title="Unlink" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_72_label" aria-describedby="cke_72_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(146,event);" onfocus="return CKEDITOR.tools.callFunction(147,event);" onclick="CKEDITOR.tools.callFunction(148,this);return false;"><span class="cke_button_icon cke_button__unlink_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1296px;background-size:auto;">&nbsp;</span><span id="cke_72_label" class="cke_button_label cke_button__unlink_label" aria-hidden="false">Unlink</span><span id="cke_72_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_73" class="cke_button cke_button__anchor cke_button_off" href="javascript:void('Anchor')" title="Anchor" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_73_label" aria-describedby="cke_73_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(149,event);" onfocus="return CKEDITOR.tools.callFunction(150,event);" onclick="CKEDITOR.tools.callFunction(151,this);return false;"><span class="cke_button_icon cke_button__anchor_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1248px;background-size:auto;">&nbsp;</span><span id="cke_73_label" class="cke_button_label cke_button__anchor_label" aria-hidden="false">Anchor</span><span id="cke_73_description" class="cke_button_label" aria-hidden="false"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_74" class="cke_toolbar cke_toolbar_last" aria-labelledby="cke_74_label" role="toolbar"><span id="cke_74_label" class="cke_voice_label">Insert</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_75" class="cke_button cke_button__image cke_button_off" href="javascript:void('Image')" title="Image" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_75_label" aria-describedby="cke_75_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(152,event);" onfocus="return CKEDITOR.tools.callFunction(153,event);" onclick="CKEDITOR.tools.callFunction(154,this);return false;"><span class="cke_button_icon cke_button__image_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -960px;background-size:auto;">&nbsp;</span><span id="cke_75_label" class="cke_button_label cke_button__image_label" aria-hidden="false">Image</span><span id="cke_75_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_76" class="cke_button cke_button__flash cke_button_off" href="javascript:void('Flash')" title="Flash" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_76_label" aria-describedby="cke_76_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(155,event);" onfocus="return CKEDITOR.tools.callFunction(156,event);" onclick="CKEDITOR.tools.callFunction(157,this);return false;"><span class="cke_button_icon cke_button__flash_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -600px;background-size:auto;">&nbsp;</span><span id="cke_76_label" class="cke_button_label cke_button__flash_label" aria-hidden="false">Flash</span><span id="cke_76_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_77" class="cke_button cke_button__table cke_button_off" href="javascript:void('Table')" title="Table" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_77_label" aria-describedby="cke_77_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(158,event);" onfocus="return CKEDITOR.tools.callFunction(159,event);" onclick="CKEDITOR.tools.callFunction(160,this);return false;"><span class="cke_button_icon cke_button__table_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1920px;background-size:auto;">&nbsp;</span><span id="cke_77_label" class="cke_button_label cke_button__table_label" aria-hidden="false">Table</span><span id="cke_77_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_78" class="cke_button cke_button__horizontalrule cke_button_off" href="javascript:void('Insert Horizontal Line')" title="Insert Horizontal Line" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_78_label" aria-describedby="cke_78_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(161,event);" onfocus="return CKEDITOR.tools.callFunction(162,event);" onclick="CKEDITOR.tools.callFunction(163,this);return false;"><span class="cke_button_icon cke_button__horizontalrule_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -912px;background-size:auto;">&nbsp;</span><span id="cke_78_label" class="cke_button_label cke_button__horizontalrule_label" aria-hidden="false">Insert Horizontal Line</span><span id="cke_78_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_79" class="cke_button cke_button__smiley cke_button_off" href="javascript:void('Smiley')" title="Smiley" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_79_label" aria-describedby="cke_79_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(164,event);" onfocus="return CKEDITOR.tools.callFunction(165,event);" onclick="CKEDITOR.tools.callFunction(166,this);return false;"><span class="cke_button_icon cke_button__smiley_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1080px;background-size:auto;">&nbsp;</span><span id="cke_79_label" class="cke_button_label cke_button__smiley_label" aria-hidden="false">Smiley</span><span id="cke_79_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_80" class="cke_button cke_button__specialchar cke_button_off" href="javascript:void('Insert Special Character')" title="Insert Special Character" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_80_label" aria-describedby="cke_80_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(167,event);" onfocus="return CKEDITOR.tools.callFunction(168,event);" onclick="CKEDITOR.tools.callFunction(169,this);return false;"><span class="cke_button_icon cke_button__specialchar_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1872px;background-size:auto;">&nbsp;</span><span id="cke_80_label" class="cke_button_label cke_button__specialchar_label" aria-hidden="false">Insert Special Character</span><span id="cke_80_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_81" class="cke_button cke_button__pagebreak cke_button_off" href="javascript:void('Insert Page Break for Printing')" title="Insert Page Break for Printing" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_81_label" aria-describedby="cke_81_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(170,event);" onfocus="return CKEDITOR.tools.callFunction(171,event);" onclick="CKEDITOR.tools.callFunction(172,this);return false;"><span class="cke_button_icon cke_button__pagebreak_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1512px;background-size:auto;">&nbsp;</span><span id="cke_81_label" class="cke_button_label cke_button__pagebreak_label" aria-hidden="false">Insert Page Break for Printing</span><span id="cke_81_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_82" class="cke_button cke_button__iframe cke_button_off" href="javascript:void('IFrame')" title="IFrame" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_82_label" aria-describedby="cke_82_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(173,event);" onfocus="return CKEDITOR.tools.callFunction(174,event);" onclick="CKEDITOR.tools.callFunction(175,this);return false;"><span class="cke_button_icon cke_button__iframe_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -936px;background-size:auto;">&nbsp;</span><span id="cke_82_label" class="cke_button_label cke_button__iframe_label" aria-hidden="false">IFrame</span><span id="cke_82_description" class="cke_button_label" aria-hidden="false"></span></a></span><span class="cke_toolbar_end"></span></span><span class="cke_toolbar_break"></span><span id="cke_83" class="cke_toolbar" aria-labelledby="cke_83_label" role="toolbar"><span id="cke_83_label" class="cke_voice_label">Styles</span><span class="cke_toolbar_start"></span><span id="cke_13" class="cke_combo cke_combo__styles cke_combo_off" role="presentation"><span id="cke_13_label" class="cke_combo_label">Styles</span><a class="cke_combo_button" title="Formatting Styles" tabindex="-1" href="javascript:void('Formatting Styles')" hidefocus="true" role="button" aria-labelledby="cke_13_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(177,event,this);" onfocus="return CKEDITOR.tools.callFunction(178,event);" onclick="CKEDITOR.tools.callFunction(176,this);return false;"><span id="cke_13_text" class="cke_combo_text cke_combo_inlinelabel">Styles</span><span class="cke_combo_open"><span class="cke_combo_arrow"></span></span></a></span><span id="cke_14" class="cke_combo cke_combo__format cke_combo_off" role="presentation"><span id="cke_14_label" class="cke_combo_label">Format</span><a class="cke_combo_button" title="Paragraph Format" tabindex="-1" href="javascript:void('Paragraph Format')" hidefocus="true" role="button" aria-labelledby="cke_14_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(180,event,this);" onfocus="return CKEDITOR.tools.callFunction(181,event);" onclick="CKEDITOR.tools.callFunction(179,this);return false;"><span id="cke_14_text" class="cke_combo_text cke_combo_inlinelabel">Format</span><span class="cke_combo_open"><span class="cke_combo_arrow"></span></span></a></span><span id="cke_15" class="cke_combo cke_combo__font cke_combo_off" role="presentation"><span id="cke_15_label" class="cke_combo_label">Font</span><a class="cke_combo_button" title="Font Name" tabindex="-1" href="javascript:void('Font Name')" hidefocus="true" role="button" aria-labelledby="cke_15_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(183,event,this);" onfocus="return CKEDITOR.tools.callFunction(184,event);" onclick="CKEDITOR.tools.callFunction(182,this);return false;"><span id="cke_15_text" class="cke_combo_text cke_combo_inlinelabel">Font</span><span class="cke_combo_open"><span class="cke_combo_arrow"></span></span></a></span><span id="cke_16" class="cke_combo cke_combo__fontsize cke_combo_off" role="presentation"><span id="cke_16_label" class="cke_combo_label">Size</span><a class="cke_combo_button" title="Font Size" tabindex="-1" href="javascript:void('Font Size')" hidefocus="true" role="button" aria-labelledby="cke_16_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(186,event,this);" onfocus="return CKEDITOR.tools.callFunction(187,event);" onclick="CKEDITOR.tools.callFunction(185,this);return false;"><span id="cke_16_text" class="cke_combo_text cke_combo_inlinelabel">Size</span><span class="cke_combo_open"><span class="cke_combo_arrow"></span></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_84" class="cke_toolbar" aria-labelledby="cke_84_label" role="toolbar"><span id="cke_84_label" class="cke_voice_label">Colors</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_85" class="cke_button cke_button__textcolor cke_button_off" href="javascript:void('Text Color')" title="Text Color" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_85_label" aria-describedby="cke_85_description" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(188,event);" onfocus="return CKEDITOR.tools.callFunction(189,event);" onclick="CKEDITOR.tools.callFunction(190,this);return false;"><span class="cke_button_icon cke_button__textcolor_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -408px;background-size:auto;">&nbsp;</span><span id="cke_85_label" class="cke_button_label cke_button__textcolor_label" aria-hidden="false">Text Color</span><span id="cke_85_description" class="cke_button_label" aria-hidden="false"></span><span class="cke_button_arrow"></span></a><a id="cke_86" class="cke_button cke_button__bgcolor cke_button_off" href="javascript:void('Background Color')" title="Background Color" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_86_label" aria-describedby="cke_86_description" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(191,event);" onfocus="return CKEDITOR.tools.callFunction(192,event);" onclick="CKEDITOR.tools.callFunction(193,this);return false;"><span class="cke_button_icon cke_button__bgcolor_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -384px;background-size:auto;">&nbsp;</span><span id="cke_86_label" class="cke_button_label cke_button__bgcolor_label" aria-hidden="false">Background Color</span><span id="cke_86_description" class="cke_button_label" aria-hidden="false"></span><span class="cke_button_arrow"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_87" class="cke_toolbar" aria-labelledby="cke_87_label" role="toolbar"><span id="cke_87_label" class="cke_voice_label">Tools</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_88" class="cke_button cke_button__maximize cke_button_off" href="javascript:void('Maximize')" title="Maximize" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_88_label" aria-describedby="cke_88_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(194,event);" onfocus="return CKEDITOR.tools.callFunction(195,event);" onclick="CKEDITOR.tools.callFunction(196,this);return false;"><span class="cke_button_icon cke_button__maximize_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1416px;background-size:auto;">&nbsp;</span><span id="cke_88_label" class="cke_button_label cke_button__maximize_label" aria-hidden="false">Maximize</span><span id="cke_88_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_89" class="cke_button cke_button__showblocks cke_button_off" href="javascript:void('Show Blocks')" title="Show Blocks" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_89_label" aria-describedby="cke_89_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(197,event);" onfocus="return CKEDITOR.tools.callFunction(198,event);" onclick="CKEDITOR.tools.callFunction(199,this);return false;"><span class="cke_button_icon cke_button__showblocks_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 -1800px;background-size:auto;">&nbsp;</span><span id="cke_89_label" class="cke_button_label cke_button__showblocks_label" aria-hidden="false">Show Blocks</span><span id="cke_89_description" class="cke_button_label" aria-hidden="false"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_90" class="cke_toolbar cke_toolbar_last" aria-labelledby="cke_90_label" role="toolbar"><span id="cke_90_label" class="cke_voice_label">about</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_91" class="cke_button cke_button__about cke_button_off" href="javascript:void('About CKEditor 4')" title="About CKEditor 4" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_91_label" aria-describedby="cke_91_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(200,event);" onfocus="return CKEDITOR.tools.callFunction(201,event);" onclick="CKEDITOR.tools.callFunction(202,this);return false;"><span class="cke_button_icon cke_button__about_icon" style="background-image:url('http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/plugins/icons.png?t=I3I8');background-position:0 0px;background-size:auto;">&nbsp;</span><span id="cke_91_label" class="cke_button_label cke_button__about_label" aria-hidden="false">About CKEditor 4</span><span id="cke_91_description" class="cke_button_label" aria-hidden="false"></span></a></span><span class="cke_toolbar_end"></span></span></span></span><div id="cke_1_contents" class="cke_contents cke_reset" role="presentation" style="height: 150px;"><span id="cke_96" class="cke_voice_label">Press ALT 0 for help</span><iframe src="" frameborder="0" class="cke_wysiwyg_frame cke_reset" title="Rich Text Editor, my_content" aria-describedby="cke_96" tabindex="0" allowtransparency="true" style="width: 100%; height: 100%;"></iframe></div><span id="cke_1_bottom" class="cke_bottom cke_reset_all" role="presentation" style="user-select: none;"><span id="cke_1_resizer" class="cke_resizer cke_resizer_vertical cke_resizer_ltr" title="Resize" onmousedown="CKEDITOR.tools.callFunction(0, event)">◢</span><span id="cke_1_path_label" class="cke_voice_label">Elements path</span><span id="cke_1_path" class="cke_path" role="group" aria-labelledby="cke_1_path_label"><span class="cke_path_empty">&nbsp;</span></span></span></div></div>
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                   <label class="col-md-4 control-label" style="color:red;" id="mx-fl-up"></label>
                                                </div>
                                                <div class="from-group"> 
													
													<div class="alert" id="file-alert-140"></div>
													
												</div>
                                                <div class="form-group">
                                                
                                                <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Guide</h4>
  <p>If you can find the product in aliexpress, you can download images in for the proudct. In chromo you can install
  extension and esay to download. Please use 500X500 px images. Click the link below.</p>
  <hr>
  <p class="mb-0">https://chrome.google.com/webstore/detail/download-aliexpress-produ/jfdmndkebgjnoecndabpkfpafgdhfjck</p>
</div>
                                                </div>
                                                
                                                <div class="form-group">
													
                                                   <label class="col-md-2 control-label">Upload Images</label>
                                                   <div class="col-xs-4">
                                                      <input type="file" name="option[]">
                                                   </div>
                                                   <div class="col-xs-4">
                                                      <button type="button" class="btn btn-default addButton"><i class="fa fa-plus"></i></button>
                                                   </div>
                                                </div>
                                                
                                                
                                                <div class="added-images" style="min-height:175px;" id="add-file-120">
                                                  
                                               
                                                </div>
                                                <!-- Here end-->
                                             
                                             
                                             
                                             
                                             
                                             </div>
                                          </div>
                                          <div class="tab-pane" id="tab_meta">
                                             <div class="form-body">
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Meta Title:</label>
                                                   <div class="col-md-10">
                                                      <input type="text" class="form-control maxlength-handler" name="meta_title" maxlength="100" value="">
                                                      <span class="help-block"> max 100 chars </span>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Meta Keywords:</label>
                                                   <div class="col-md-10">
                                                      <textarea class="form-control maxlength-handler" rows="8" name="meta_keywords" maxlength="1000"></textarea>
                                                      <span class="help-block"> max 1000 chars </span>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label class="col-md-2 control-label">Meta Description:</label>
                                                   <div class="col-md-10">
                                                      <textarea class="form-control maxlength-handler" rows="8" name="meta_description" maxlength="255"></textarea>
                                                      <span class="help-block"> max 255 chars </span>
                                                   </div>
                                                </div>
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
					
					
                          <!-- END PAGE BASE CONTENT -->
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
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/js.cookie.min.js" type="text/javascript"></script>
        <script src="js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="js/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="js/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="js/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="js/moment.min.js" type="text/javascript"></script>
        <script src="js/daterangepicker.min.js" type="text/javascript"></script>
        <script src="js/morris.min.js" type="text/javascript"></script>
        <script src="js/raphael-min.js" type="text/javascript"></script>
        <script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="js/amcharts.js" type="text/javascript"></script>
        <script src="js/serial.js" type="text/javascript"></script>
        <script src="js/pie.js" type="text/javascript"></script>
        <script src="js/radar.js" type="text/javascript"></script>
        <script src="js/light.js" type="text/javascript"></script>
        <script src="js/patterns.js" type="text/javascript"></script>
        <script src="js/chalk.js" type="text/javascript"></script>
        <script src="js/ammap.js" type="text/javascript"></script>
        <script src="js/worldLow.js" type="text/javascript"></script>
        <script src="js/amstock.js" type="text/javascript"></script>
        <script src="js/fullcalendar.min.js" type="text/javascript"></script>
        <script src="js/jquery.flot.min.js" type="text/javascript"></script>
        <script src="js/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="js/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="js/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="js/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="js/jquery.vmap.js" type="text/javascript"></script>
        <script src="js/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="js/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="js/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="js/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="js/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="js/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="js/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="js/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/demo.min.js" type="text/javascript"></script>
        <script src="js/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>

