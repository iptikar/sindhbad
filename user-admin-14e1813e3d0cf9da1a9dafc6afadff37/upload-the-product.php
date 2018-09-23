<?php
	// Must start the session 
	session_start();
	
   require('../controller/controller.php');
   
   // Creating New Object 
   $obj  =  new MarketPlace();
   
   // Set default timezon to dubai 
   date_default_timezone_set ('Asia/Dubai');
   
   // If admin user is logged in
	if($obj->IsUserLoggedInSeller() !== true) {
	
		// Set the new header 
		header('Location:http://localhost/login');
	}
   
   
   ?>
<!DOCTYPE html>

      <html lang = "en">
         <!--<!$endif;-->
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
            
       
        
         </head>
         <!-- END HEAD -->
         <body class = "page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
           
           
            <!-- BEGIN HEADER -->
           <?php include 'header.php'; ?>
          
          
          
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class = "clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class = "page-container">
               <!-- BEGIN SIDEBAR -->
               <div class = "page-sidebar-wrapper">
                  <!-- BEGIN SIDEBAR -->
                  <!-- DOC: Set data-auto-scroll = "false" to disable the sidebar from auto scrolling/focusing -->
                  <!-- DOC: Change data-auto-speed = "200" to adjust the sub menu slide up/down speed -->
                  <div class = "page-sidebar navbar-collapse collapse">
                     <!-- BEGIN SIDEBAR MENU -->
                     <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                     <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                     <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                     <!-- DOC: Set data-auto-scroll = "false" to disable the sidebar from auto scrolling/focusing -->
                     <!-- DOC: Set data-keep-expand = "true" to keep the submenues expanded -->
                     <!-- DOC: Set data-auto-speed = "200" to adjust the sub menu slide up/down speed -->
                     <ul class = "page-sidebar-menu   " data-keep-expanded = "false" data-auto-scroll = "true" data-slide-speed = "200">
                        <li class = "nav-item start active open">
                           <a href = "javascript:;" class = "nav-link nav-toggle">
                           <i class = "icon-speedometer"></i>
                           <span class = "title">Dashboard</span>
                           <span class = "selected"></span>
                           </a>
                        </li>
                        <li class = "nav-item  ">
                           <a href = "javascript:;" class = "nav-link nav-toggle">
                           <i class = "icon-diamond"></i>
                           <span class = "title">Inventory</span>
                           <span class = "arrow"></span>
                           </a>
                           <ul class = "sub-menu">
                              <li class = "nav-item  ">
                                 <a href = "ui_colors.html" class = "nav-link ">
                                 <span class = "title">Inventory Management</span>
                                 </a>
                              </li>
                              <li class = "nav-item  ">
                                 <a href = "ui_general.html" class = "nav-link ">
                                 <span class = "title">Item Listing</span>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class = "nav-item  ">
                           <a href = "javascript:;" class = "nav-link nav-toggle">
                           <i class = "icon-puzzle"></i>
                           <span class = "title">Orders</span>
                           <span class = "arrow"></span>
                           </a>
                           <ul class = "sub-menu">
                              <li class = "nav-item  ">
                                 <a href = "components_date_time_pickers.html" class = "nav-link ">
                                 <span class = "title">Order Managment</span>
                                 </a>
                              </li>
                              <li class = "nav-item  ">
                                 <a href = "components_color_pickers.html" class = "nav-link ">
                                 <span class = "title">Return Management</span>
                                 <span class = "badge badge-danger">2</span>
                                 </a>
                              </li>
                              <li class = "nav-item  ">
                                 <a href = "components_select2.html" class = "nav-link ">
                                 <span class = "title">Cancled Orders</span>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class = "nav-item  ">
                           <a href = "javascript:;" class = "nav-link nav-toggle">
                           <i class = "icon-settings"></i>
                           <span class = "title">Post Delivery</span>
                           <span class = "arrow"></span>
                           </a>
                           <ul class = "sub-menu">
                              <li class = "nav-item  ">
                                 <a href = "form_controls.html" class = "nav-link ">
                                 <span class = "title">VAT Invoice
                                 <br>Requests</span>
                                 </a>
                              </li>
                              <li class = "nav-item  ">
                                 <a href = "form_controls_md.html" class = "nav-link ">
                                 <span class = "title">Complaints
                                 <br>Management</span>
                                 </a>
                              </li>
                              <li class = "nav-item  ">
                                 <a href = "form_validation.html" class = "nav-link ">
                                 <span class = "title">Feedback</span>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class = "nav-item  ">
                           <a href = "javascript:;" class = "nav-link nav-toggle">
                           <i class = "icon-briefcase"></i>
                           <span class = "title">Financials</span>
                           <span class = "arrow"></span>
                           </a>
                           <ul class = "sub-menu">
                              <li class = "nav-item  ">
                                 <a href = "javascript:;" class = "nav-link nav-toggle">
                                 <span class = "title">Account Summary</span>
                                 <span class = "arrow"></span>
                                 </a>
                              </li>
                              <li class = "nav-item  ">
                                 <a href = "javascript:;" class = "nav-link nav-toggle">
                                 <span class = "title">Request Withdrawal</span>
                                 <span class = "arrow"></span>
                                 </a>
                              </li>
                              <li class = "nav-item  ">
                                 <a href = "javascript:;" class = "nav-link nav-toggle">
                                 <span class = "title">Withdrawals Statuses</span>
                                 <span class = "arrow"></span>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class = "nav-item  ">
                           <a href = "?p = " class = "nav-link nav-toggle">
                           <i class = "icon-wallet"></i>
                           <span class = "title">Performance</span>
                           </a>
                        </li>
                        <li class = "nav-item  ">
                           <a href = "javascript:;" class = "nav-link nav-toggle">
                           <i class = "icon-bar-chart"></i>
                           <span class = "title">Sponsored Products</span>
                           <span class = "arrow"></span>
                           </a>
                           <ul class = "sub-menu">
                              <li class = "nav-item  ">
                                 <a href = "charts_amcharts.html" class = "nav-link ">
                                 <span class = "title">Manage Campaigns</span>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class = "nav-item  ">
                           <a href = "javascript:;" class = "nav-link nav-toggle">
                           <i class = "icon-pointer"></i>
                           <span class = "title">Promotions</span>
                           <span class = "arrow"></span>
                           </a>
                        </li>
                     </ul>
                     <!-- END SIDEBAR MENU -->
                  </div>
                  <!-- END SIDEBAR -->
               </div>
               <!-- END SIDEBAR -->
               <!-- BEGIN CONTENT -->
               <div class = "page-content-wrapper">
                  <!-- BEGIN CONTENT BODY -->
                  <div class = "page-content">
                     <!-- BEGIN PAGE HEAD-->
                     <div class = "page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class = "page-title">
                           <h1>Dashboard
                              <small>dashboard & statistics</small>
                           </h1>
                        </div>
                       
                        
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class = "page-toolbar">
                           <div id = "dashboard-report-range" class = "pull-right tooltips btn btn-fit-height green" data-placement = "top" data-original-title = "Change dashboard date range">
                              <i class = "icon-calendar"></i>&nbsp;
                              <span class = "thin uppercase hidden-xs"></span>&nbsp;
                              <i class = "fa fa-angle-down"></i>
                           </div>
                           <!-- BEGIN THEME PANEL -->
                           <div class = "btn-group btn-theme-panel">
                              <a href = "javascript:;" class = "btn dropdown-toggle" data-toggle = "dropdown">
                              <i class = "icon-settings"></i>
                              </a>
                              <div class = "dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                 <div class = "row">
                                    <div class = "col-md-4 col-sm-4 col-xs-12">
                                       <h3>THEME</h3>
                                       <ul class = "theme-colors">
                                          <li class = "theme-color theme-color-default" data-theme = "default">
                                             <span class = "theme-color-view"></span>
                                             <span class = "theme-color-name">Dark Header</span>
                                          </li>
                                          <li class = "theme-color theme-color-light active" data-theme = "light">
                                             <span class = "theme-color-view"></span>
                                             <span class = "theme-color-name">Light Header</span>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class = "col-md-8 col-sm-8 col-xs-12 seperator">
                                       <h3>LAYOUT</h3>
                                       <ul class = "theme-settings">
                                          <li>
                                             Theme Style
                                             <select class = "layout-style-option form-control input-small input-sm">
                                                <option value = "square">Square corners</option>
                                                <option value = "rounded" selected = "selected">Rounded corners</option>
                                             </select>
                                          </li>
                                          <li>
                                             Layout
                                             <select class = "layout-option form-control input-small input-sm">
                                                <option value = "fluid" selected = "selected">Fluid</option>
                                                <option value = "boxed">Boxed</option>
                                             </select>
                                          </li>
                                          <li>
                                             Header
                                             <select class = "page-header-option form-control input-small input-sm">
                                                <option value = "fixed" selected = "selected">Fixed</option>
                                                <option value = "default">Default</option>
                                             </select>
                                          </li>
                                          <li>
                                             Top Dropdowns
                                             <select class = "page-header-top-dropdown-style-option form-control input-small input-sm">
                                                <option value = "light">Light</option>
                                                <option value = "dark" selected = "selected">Dark</option>
                                             </select>
                                          </li>
                                          <li>
                                             Sidebar Mode
                                             <select class = "sidebar-option form-control input-small input-sm">
                                                <option value = "fixed">Fixed</option>
                                                <option value = "default" selected = "selected">Default</option>
                                             </select>
                                          </li>
                                          <li>
                                             Sidebar Menu
                                             <select class = "sidebar-menu-option form-control input-small input-sm">
                                                <option value = "accordion" selected = "selected">Accordion</option>
                                                <option value = "hover">Hover</option>
                                             </select>
                                          </li>
                                          <li>
                                             Sidebar Position
                                             <select class = "sidebar-pos-option form-control input-small input-sm">
                                                <option value = "left" selected = "selected">Left</option>
                                                <option value = "right">Right</option>
                                             </select>
                                          </li>
                                          <li>
                                             Footer
                                             <select class = "page-footer-option form-control input-small input-sm">
                                                <option value = "fixed">Fixed</option>
                                                <option value = "default" selected = "selected">Default</option>
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
                     <ul class = "page-breadcrumb breadcrumb">
                        <li>
                           <a href = "index.html">Home</a>
                           <i class = "fa fa-circle"></i>
                        </li>
                        <li>
                           <span class = "active">Dashboard</span>
                        </li>
                     </ul>
                    
                    <div class = "page-message" id = "id-uploaded52"></div>
                    
                     <!-- END PAGE BREADCRUMB -->
                     <!-- BEGIN PAGE BASE CONTENT -->
                     <!-- BEGIN DASHBOARD STATS 1-->
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
                                          <li>
                                             <a href = "#tab_meta" data-toggle = "tab"> Meta </a>
                                          </li>
                                         
                                         
                                         
                                       </ul>
                                       <form id = "form58656" action  =  "<?php echo basename($_SERVER['PHP_SELF'],'.php');?>" method  =  'POST' enctype  =  'multipart/form-data' >
                                       <div class = "tab-content" id = "form_sample_1">
										  
                                          <div class = "tab-pane active" id = "tab_general">
                                             <div class = "form-body">
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label">Name:
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-10">
													   
                                                      <input type = "text" id = "product-name" class = "form-control" name = "product-name" placeholder = "" value = "<?php echo $_POST['product-name'] ?? ''; ?>"
                                                      pattern=".{2,150}" 
														oninvalid="this.setCustomValidity('Please Enter product name.')"
														oninput="setCustomValidity('')" required
                                                      > 
													<small class = "text-info"> For product optimization check your product name in amazon, aliexpress or google, key words is importent so they can find you in google search as well</small>
                                                  
                                                  
                                                   </div>
                                                </div>
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label">Description:
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-10">
                                                      <textarea class = "form-control" id = "discription" name = "discription" 
                                                      pattern=".{2,}" 
														oninvalid="this.setCustomValidity('Please Enter product discription.')"
														oninput="setCustomValidity('')" required
                                                      ><?php echo $_POST['discription'] ?? ''; ?></textarea>
                                                   </div>
                                                </div>
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label">Short Description:
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-10">
                                                      <textarea class = "form-control" name = "short-discription" id = "short-discription"
                                                      
                                                    pattern=".{2,}" 
													oninvalid="this.setCustomValidity('Please Enter short discription.')"
													oninput="setCustomValidity('')" required
                                                      
                                                     >
                                                      
                                                      <?php echo $_POST['short-discription'] ?? ''; ?></textarea>
                                                      
                                                      <span class = "help-block"> shown in product listing </span>
                                                   </div>
                                                </div>
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label">Available Date:
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-4">
                                                      <div class = "input-group input-large date-picker input-daterange" data-date = "10/11/2012" data-date-format = "mm/dd/yyyy">
                                                        
                                                         <input type = "text" class = "form-control" 
                                                         name = "date-available-from" 
                                                         id = "date-available-from" 
                                                         value = "<?php echo $_POST['date-available-from'] ?? ''; ?>"
                                                         oninvalid="this.setCustomValidity('Please Enter date available from.')"
														oninput="setCustomValidity('')" required
														 
                                                          />
                                                        
                                                         <span class = "input-group-addon"> to </span>
                                                        
                                                         <input type = "text" class = "form-control" name = "date-available-to" 
                                                         id = "date-available-to" 
                                                         value = "<?php echo $_POST['date-available-to'] ?? ''; ?>" 
															
														oninvalid="this.setCustomValidity('Please Enter date available to.')"
														oninput="setCustomValidity('')" required
                                                         
														/>
                                                      </div>
                                                      <span class = "help-block"> availability daterange. </span>
                                                   </div>
                                                   <label class = "col-md-2 control-label">Category
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-4">
                                                      <?php
                                                         // Letter getting the categorys from json file in js folder
                                                               	echo $obj->GetCategoryInSelect();
                                                        ?>
                                                   </div>
                                                </div>
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label">SKU:
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-4">
                                                      <input type = "text" class = "form-control" name = "sku" placeholder = "" id = "sku" value = "<?php echo $_POST['sku'] ?? ''; ?>"
                                                      
                                                      pattern="[a-zA-Z0-9\-_]{5,1000}" 
													oninvalid="this.setCustomValidity('Please Enter product sku, letters, numbers, _-')"
													oninput="setCustomValidity('')" required
                                                      >
                                                   </div>
                                                   <label class = "col-md-2 control-label">Regular Price:
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-4">
                                                      <input type = "text" class = "form-control" name = "regular-price" placeholder = "" id = "regular-price" value = "<?php echo $_POST['regular-price'] ?? ''; ?>"
                                                      pattern="[0-9]{1,}" 
													oninvalid="this.setCustomValidity('Please Enter product price.')"
													oninput="setCustomValidity('')" required
                                                      >
                                                      
                                                   </div>
                                                </div>
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label">Special Price
                                                   </label>
                                                   <div class = "col-md-4">
													   
                                                      <input type = "text" class = "form-control" name = "special-price" placeholder = "" id = "special-price" value = "<?php echo $_POST['special-price'] ?? ''; ?>"
                                                       pattern="[0-9]{1,}" 
													oninvalid="this.setCustomValidity('Please Enter speical price If not then same as regular price.')"
													oninput="setCustomValidity('')" required
                                                      > 
                                                      <small class = "text-info">Please Note: If not speical price then regular price is equal to special price</small>
                                                   </div>
                                                   <!-- Put Date here -->
                                                   <label class = "col-md-2 control-label">Special Price Range 
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-4">
                                                      <div class = "input-group input-large date-picker input-daterange" data-date = "10/11/2012" data-date-format = "mm/dd/yyyy">
                                                         <input type = "text" class = "form-control" name = "special-price-from" id = "special-price-from" value = "<?php echo $_POST['special-price-from'] ?? ''; ?>">
                                                         <span class = "input-group-addon"> to </span>
                                                         <input type = "text" class = "form-control" name = "special-price-to" id = "special-price-to" value = "<?php echo $_POST['special-price-to'] ?? ''; ?>"> 
                                                      </div>
                                                      <span class = "help-block"> Speical Price Date Range </span>
                                                   </div>
                                                </div>
                                                <div class  =  "form-group">
                                                   <label class = "col-md-2 control-label">Available Items
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-4">
                                                      <input type = "text" class = "form-control" name = "items-available" placeholder = "" id = "available-items" value = "<?php echo $_POST['items-available'] ?? ''; ?>"
                                                       pattern="[0-9]{1,}" 
													oninvalid="this.setCustomValidity('Please Enter product price.')"
													oninput="setCustomValidity('')" required
                                                      > 
                                                   </div>
                                                  
                                                  <!----->
                                                  <?php
                                                  
														// Check seller type 
														$sellertype = $_POST['seller-type'] ?? '';
														
                                                  
                                                  ?>
                                                  
                                                  
                                                   <label class = "col-md-2 control-label">Seller Type
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-4">
                                                      <select name  =  "seller-type"id = "seller-type" class = "form-control"
                                                       
													oninvalid="this.setCustomValidity('Please Enter seller type.')"
													oninput="setCustomValidity('')" required
                                                      >
                                                         <option value = "" <?= $sellertype === '' ? 'selected' : '' ;?>>Seller Type</option>
                                                         <option value = "whole-sale" <?= $sellertype ===  'whole-sale' ?'selected' : '';?> >Whole Sale</option>
                                                         <option value = "retails" <?= $sellertype === 'retails' ? 'selected' : '' ;?>>Retails</option>
                                                         <option value = "whole-sale-and-retail" <?= $sellertype === 'whole-sale-and-retail' ? 'selected' : '';?>>Whole Sale And Retail</option>
                                                         <option value = "individual" <?= $sellertype === 'individual' ? 'selected' : '' ;?>>Individual</option>
                                                      </select>
                                                   </div>
                                                
                                                
                                                
                                                </div>
                                                
                                                <!-- Checking weather the avaibility is post --->
                                                <?php
													
													// Check that variable is post 
													$avaibility = $_POST['avaibility'] ?? '';
													
													
                                                
                                                ?>
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label">Avaibility
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-4">
                                                      <select id = "avaibility" class = "form-control" name  =  "avaibility" 
													oninvalid="this.setCustomValidity('Please select avaibility.')"
													oninput="setCustomValidity('')" required
                                                      >
                                                         <option value = "" <?= $avaibility === '' ? 'selected' : '' ;?>>Avaibility</option>
                                                         <option value = "0" <?= $avaibility === '0' ? 'selected' : '' ;?>>In stock</option>
                                                         <option value = "1" <?= $avaibility === '1' ? 'selected' : '' ;?>>Out of stock</option>
                                                      </select>
                                                   </div>
                                                   <label class = "col-md-2 control-label">Minmum Order
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-4">
                                                      <input type = "text" class = "form-control" name = "min-order" placeholder = "" id = "min-order" value = "<?php echo $_POST['min-order'] ?? ''; ?>"
                                                        pattern="[0-9]{1,}" 
													oninvalid="this.setCustomValidity('Please Enter minimun order.')"
													oninput="setCustomValidity('')" required
                                                      >
                                                   </div>
                                                </div>
                                                
                                                
                                                <?php
													
													$taxclass = $_POST['tax-class'] ?? '';
													
                                                
                                                ?>
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label">Tax Class:
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-4">
                                                      <select class = "table-group-action-input form-control input-medium" name = "tax-class" id = "tax-class"
                                                        
													oninvalid="this.setCustomValidity('Please select tax class.')"
													oninput="setCustomValidity('')" required
                                                      >
                                                         <option value = "" <?= $taxclass === '' ? 'selected' : '' ;?>>Select...</option>
                                                         <option value = "1" <?= $taxclass ==='1' ? 'selected' : '' ;?>>None</option>
                                                         <option value = "0" <?= $taxclass === '0' ? 'selected' : '' ;?>>Taxable Goods</option>
                                                      </select>
                                                   </div>
                                                   <label class = "col-md-2 control-label">Shipping Cost
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-4">
                                                      <input type = "text" class = "form-control" name = "shipping_cost" placeholder = "Free Shipping"  value = "<?php echo $_POST['shipping_cost'] ?? ''; ?>"
                                                      pattern=".{2,}" 
													oninvalid="this.setCustomValidity('Please Enter shipping cost if free then free or amount.')"
													oninput="setCustomValidity('')" required
                                                      > 
                                                   </div>
                                                </div>
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label">Status:
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   
                                                   
                                                   <?php
													
													$status = $_POST['status'] ?? '';
                                                   
                                                   ?>
                                                   <div class = "col-md-4">
                                                      <select class = "table-group-action-input form-control input-medium" name = "status" id = "status"
                                                       
													oninvalid="this.setCustomValidity('Please select status.')"
													oninput="setCustomValidity('')" required
                                                      >
                                                         <option value = "" <?= $status === '' ? 'selected' : '' ;?>>Select...</option>
                                                         <option value = "1" <?= $status === '1' ? 'selected' : '' ;?> >Published</option>
                                                         <option value = "0" <?= $status === '0' ? 'selected' : '' ;?> >Not Published</option>
                                                      </select>
                                                   </div>
                                                  
                                                   
                                              
                                                </div>
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label">Product Unite
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-2">
                                                      <input type = "text" class = "form-control" name = "unite-amount" placeholder = "1" id = "unite-amount" value = "<?php echo $_POST['unite-amount'] ?? ''; ?>"
                                                      pattern="[0-9]{1,}" 
                                                      oninvalid="this.setCustomValidity('Please product unite.')"
													oninput="setCustomValidity('')" required
                                                      > 
                                                   </div>
                                                   
                                                   
                                                   
                                                   <?php
                                                   
													$product_unite = $_POST['product-unite'] ?? '';
													
                                                   ?>
                                                   
                                                   <div class = "col-md-2">
                                                      <select class = "table-group-action-input form-control input-medium" name = "product-unite" id = "product-unite"
                                                      
                                                      oninvalid="this.setCustomValidity('Please select product unite.')"
													oninput="setCustomValidity('')" required
                                                      >
                                                         <option value = "" <?= $product_unite === '' ? 'selected' : '' ;?> >Select Unite</option>
                                                         <option value = "grams" <?= $product_unite === 'grams' ? 'selected' : '' ;?> >Grams</option>
                                                         <option value = "litter" <?= $product_unite === 'litter' ? 'selected' : '' ;?> >Litter</option>
                                                         <option value = "Pices" <?= $product_unite === 'Pices' ? 'selected' : '' ;?> >Pices</option>
                                                      </select>
                                                   </div>
                                                   
                                                   
                                                   
                                                   
                                                   
                                                   <?php
													
													$product_condition = $_POST['product-condition'] ?? '';
													
                                                   ?>
                                                   <label class = "col-md-2 control-label">Condition
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-4">
                                                      <select class = "table-group-action-input form-control input-medium" name = "product-condition" id = "product-condition"
                                                      oninvalid="this.setCustomValidity('Please select condition.')"
													oninput="setCustomValidity('')" required
                                                      >
                                                         <option value = "" <?= $product_condition === '' ? 'selected' : '' ;?> >Select...</option>
                                                         <option value = "brandnew" <?= $product_condition === 'brandnew' ? 'selected' : '' ;?> >Brand New</option>
                                                         <option value = "likenew" <?= $product_condition === 'likenew' ? 'selected' : '' ;?> >Like New</option>
                                                         <option value = "used" <?= $product_condition === 'used' ? 'selected' : '' ;?> >Used</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <!-- Contry of origin -->
                                                <div class  =  "form-group">
                                                   <label class = "col-md-2 control-label">Country Of Origin
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-2">
                                                      <select class  =  "form-control" id  =  "country" name  =  "country"
                                                      oninvalid="this.setCustomValidity('Please select country of orgin.')"
													oninput="setCustomValidity('')" required
                                                      >
                                                         <option value  =  "" selected>Select Country</option>
                                                         <option value = "AF">Afghanistan</option>
                                                         <option value = "AX">Åland Islands</option>
                                                         <option value = "AL">Albania</option>
                                                         <option value = "DZ">Algeria</option>
                                                         <option value = "AS">American Samoa</option>
                                                         <option value = "AD">Andorra</option>
                                                         <option value = "AO">Angola</option>
                                                         <option value = "AI">Anguilla</option>
                                                         <option value = "AQ">Antarctica</option>
                                                         <option value = "AG">Antigua and Barbuda</option>
                                                         <option value = "AR">Argentina</option>
                                                         <option value = "AM">Armenia</option>
                                                         <option value = "AW">Aruba</option>
                                                         <option value = "AU">Australia</option>
                                                         <option value = "AT">Austria</option>
                                                         <option value = "AZ">Azerbaijan</option>
                                                         <option value = "BS">Bahamas</option>
                                                         <option value = "BH">Bahrain</option>
                                                         <option value = "BD">Bangladesh</option>
                                                         <option value = "BB">Barbados</option>
                                                         <option value = "BY">Belarus</option>
                                                         <option value = "BE">Belgium</option>
                                                         <option value = "BZ">Belize</option>
                                                         <option value = "BJ">Benin</option>
                                                         <option value = "BM">Bermuda</option>
                                                         <option value = "BT">Bhutan</option>
                                                         <option value = "BO">Bolivia, Plurinational State of</option>
                                                         <option value = "BQ">Bonaire, Sint Eustatius and Saba</option>
                                                         <option value = "BA">Bosnia and Herzegovina</option>
                                                         <option value = "BW">Botswana</option>
                                                         <option value = "BV">Bouvet Island</option>
                                                         <option value = "BR">Brazil</option>
                                                         <option value = "IO">British Indian Ocean Territory</option>
                                                         <option value = "BN">Brunei Darussalam</option>
                                                         <option value = "BG">Bulgaria</option>
                                                         <option value = "BF">Burkina Faso</option>
                                                         <option value = "BI">Burundi</option>
                                                         <option value = "KH">Cambodia</option>
                                                         <option value = "CM">Cameroon</option>
                                                         <option value = "CA">Canada</option>
                                                         <option value = "CV">Cape Verde</option>
                                                         <option value = "KY">Cayman Islands</option>
                                                         <option value = "CF">Central African Republic</option>
                                                         <option value = "TD">Chad</option>
                                                         <option value = "CL">Chile</option>
                                                         <option value = "CN">China</option>
                                                         <option value = "CX">Christmas Island</option>
                                                         <option value = "CC">Cocos (Keeling) Islands</option>
                                                         <option value = "CO">Colombia</option>
                                                         <option value = "KM">Comoros</option>
                                                         <option value = "CG">Congo</option>
                                                         <option value = "CD">Congo, the Democratic Republic of the</option>
                                                         <option value = "CK">Cook Islands</option>
                                                         <option value = "CR">Costa Rica</option>
                                                         <option value = "CI">Côte d'Ivoire</option>
                                                         <option value = "HR">Croatia</option>
                                                         <option value = "CU">Cuba</option>
                                                         <option value = "CW">Curaçao</option>
                                                         <option value = "CY">Cyprus</option>
                                                         <option value = "CZ">Czech Republic</option>
                                                         <option value = "DK">Denmark</option>
                                                         <option value = "DJ">Djibouti</option>
                                                         <option value = "DM">Dominica</option>
                                                         <option value = "DO">Dominican Republic</option>
                                                         <option value = "EC">Ecuador</option>
                                                         <option value = "EG">Egypt</option>
                                                         <option value = "SV">El Salvador</option>
                                                         <option value = "GQ">Equatorial Guinea</option>
                                                         <option value = "ER">Eritrea</option>
                                                         <option value = "EE">Estonia</option>
                                                         <option value = "ET">Ethiopia</option>
                                                         <option value = "FK">Falkland Islands (Malvinas)</option>
                                                         <option value = "FO">Faroe Islands</option>
                                                         <option value = "FJ">Fiji</option>
                                                         <option value = "FI">Finland</option>
                                                         <option value = "FR">France</option>
                                                         <option value = "GF">French Guiana</option>
                                                         <option value = "PF">French Polynesia</option>
                                                         <option value = "TF">French Southern Territories</option>
                                                         <option value = "GA">Gabon</option>
                                                         <option value = "GM">Gambia</option>
                                                         <option value = "GE">Georgia</option>
                                                         <option value = "DE">Germany</option>
                                                         <option value = "GH">Ghana</option>
                                                         <option value = "GI">Gibraltar</option>
                                                         <option value = "GR">Greece</option>
                                                         <option value = "GL">Greenland</option>
                                                         <option value = "GD">Grenada</option>
                                                         <option value = "GP">Guadeloupe</option>
                                                         <option value = "GU">Guam</option>
                                                         <option value = "GT">Guatemala</option>
                                                         <option value = "GG">Guernsey</option>
                                                         <option value = "GN">Guinea</option>
                                                         <option value = "GW">Guinea-Bissau</option>
                                                         <option value = "GY">Guyana</option>
                                                         <option value = "HT">Haiti</option>
                                                         <option value = "HM">Heard Island and McDonald Islands</option>
                                                         <option value = "VA">Holy See (Vatican City State)</option>
                                                         <option value = "HN">Honduras</option>
                                                         <option value = "HK">Hong Kong</option>
                                                         <option value = "HU">Hungary</option>
                                                         <option value = "IS">Iceland</option>
                                                         <option value = "IN">India</option>
                                                         <option value = "ID">Indonesia</option>
                                                         <option value = "IR">Iran, Islamic Republic of</option>
                                                         <option value = "IQ">Iraq</option>
                                                         <option value = "IE">Ireland</option>
                                                         <option value = "IM">Isle of Man</option>
                                                         <option value = "IL">Israel</option>
                                                         <option value = "IT">Italy</option>
                                                         <option value = "JM">Jamaica</option>
                                                         <option value = "JP">Japan</option>
                                                         <option value = "JE">Jersey</option>
                                                         <option value = "JO">Jordan</option>
                                                         <option value = "KZ">Kazakhstan</option>
                                                         <option value = "KE">Kenya</option>
                                                         <option value = "KI">Kiribati</option>
                                                         <option value = "KP">Korea, Democratic People's Republic of</option>
                                                         <option value = "KR">Korea, Republic of</option>
                                                         <option value = "KW">Kuwait</option>
                                                         <option value = "KG">Kyrgyzstan</option>
                                                         <option value = "LA">Lao People's Democratic Republic</option>
                                                         <option value = "LV">Latvia</option>
                                                         <option value = "LB">Lebanon</option>
                                                         <option value = "LS">Lesotho</option>
                                                         <option value = "LR">Liberia</option>
                                                         <option value = "LY">Libya</option>
                                                         <option value = "LI">Liechtenstein</option>
                                                         <option value = "LT">Lithuania</option>
                                                         <option value = "LU">Luxembourg</option>
                                                         <option value = "MO">Macao</option>
                                                         <option value = "MK">Macedonia, the former Yugoslav Republic of</option>
                                                         <option value = "MG">Madagascar</option>
                                                         <option value = "MW">Malawi</option>
                                                         <option value = "MY">Malaysia</option>
                                                         <option value = "MV">Maldives</option>
                                                         <option value = "ML">Mali</option>
                                                         <option value = "MT">Malta</option>
                                                         <option value = "MH">Marshall Islands</option>
                                                         <option value = "MQ">Martinique</option>
                                                         <option value = "MR">Mauritania</option>
                                                         <option value = "MU">Mauritius</option>
                                                         <option value = "YT">Mayotte</option>
                                                         <option value = "MX">Mexico</option>
                                                         <option value = "FM">Micronesia, Federated States of</option>
                                                         <option value = "MD">Moldova, Republic of</option>
                                                         <option value = "MC">Monaco</option>
                                                         <option value = "MN">Mongolia</option>
                                                         <option value = "ME">Montenegro</option>
                                                         <option value = "MS">Montserrat</option>
                                                         <option value = "MA">Morocco</option>
                                                         <option value = "MZ">Mozambique</option>
                                                         <option value = "MM">Myanmar</option>
                                                         <option value = "NA">Namibia</option>
                                                         <option value = "NR">Nauru</option>
                                                         <option value = "NP">Nepal</option>
                                                         <option value = "NL">Netherlands</option>
                                                         <option value = "NC">New Caledonia</option>
                                                         <option value = "NZ">New Zealand</option>
                                                         <option value = "NI">Nicaragua</option>
                                                         <option value = "NE">Niger</option>
                                                         <option value = "NG">Nigeria</option>
                                                         <option value = "NU">Niue</option>
                                                         <option value = "NF">Norfolk Island</option>
                                                         <option value = "MP">Northern Mariana Islands</option>
                                                         <option value = "NO">Norway</option>
                                                         <option value = "OM">Oman</option>
                                                         <option value = "PK">Pakistan</option>
                                                         <option value = "PW">Palau</option>
                                                         <option value = "PS">Palestinian Territory, Occupied</option>
                                                         <option value = "PA">Panama</option>
                                                         <option value = "PG">Papua New Guinea</option>
                                                         <option value = "PY">Paraguay</option>
                                                         <option value = "PE">Peru</option>
                                                         <option value = "PH">Philippines</option>
                                                         <option value = "PN">Pitcairn</option>
                                                         <option value = "PL">Poland</option>
                                                         <option value = "PT">Portugal</option>
                                                         <option value = "PR">Puerto Rico</option>
                                                         <option value = "QA">Qatar</option>
                                                         <option value = "RE">Réunion</option>
                                                         <option value = "RO">Romania</option>
                                                         <option value = "RU">Russian Federation</option>
                                                         <option value = "RW">Rwanda</option>
                                                         <option value = "BL">Saint Barthélemy</option>
                                                         <option value = "SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                         <option value = "KN">Saint Kitts and Nevis</option>
                                                         <option value = "LC">Saint Lucia</option>
                                                         <option value = "MF">Saint Martin (French part)</option>
                                                         <option value = "PM">Saint Pierre and Miquelon</option>
                                                         <option value = "VC">Saint Vincent and the Grenadines</option>
                                                         <option value = "WS">Samoa</option>
                                                         <option value = "SM">San Marino</option>
                                                         <option value = "ST">Sao Tome and Principe</option>
                                                         <option value = "SA">Saudi Arabia</option>
                                                         <option value = "SN">Senegal</option>
                                                         <option value = "RS">Serbia</option>
                                                         <option value = "SC">Seychelles</option>
                                                         <option value = "SL">Sierra Leone</option>
                                                         <option value = "SG">Singapore</option>
                                                         <option value = "SX">Sint Maarten (Dutch part)</option>
                                                         <option value = "SK">Slovakia</option>
                                                         <option value = "SI">Slovenia</option>
                                                         <option value = "SB">Solomon Islands</option>
                                                         <option value = "SO">Somalia</option>
                                                         <option value = "ZA">South Africa</option>
                                                         <option value = "GS">South Georgia and the South Sandwich Islands</option>
                                                         <option value = "SS">South Sudan</option>
                                                         <option value = "ES">Spain</option>
                                                         <option value = "LK">Sri Lanka</option>
                                                         <option value = "SD">Sudan</option>
                                                         <option value = "SR">Suriname</option>
                                                         <option value = "SJ">Svalbard and Jan Mayen</option>
                                                         <option value = "SZ">Swaziland</option>
                                                         <option value = "SE">Sweden</option>
                                                         <option value = "CH">Switzerland</option>
                                                         <option value = "SY">Syrian Arab Republic</option>
                                                         <option value = "TW">Taiwan, Province of China</option>
                                                         <option value = "TJ">Tajikistan</option>
                                                         <option value = "TZ">Tanzania, United Republic of</option>
                                                         <option value = "TH">Thailand</option>
                                                         <option value = "TL">Timor-Leste</option>
                                                         <option value = "TG">Togo</option>
                                                         <option value = "TK">Tokelau</option>
                                                         <option value = "TO">Tonga</option>
                                                         <option value = "TT">Trinidad and Tobago</option>
                                                         <option value = "TN">Tunisia</option>
                                                         <option value = "TR">Turkey</option>
                                                         <option value = "TM">Turkmenistan</option>
                                                         <option value = "TC">Turks and Caicos Islands</option>
                                                         <option value = "TV">Tuvalu</option>
                                                         <option value = "UG">Uganda</option>
                                                         <option value = "UA">Ukraine</option>
                                                         <option value = "AE">United Arab Emirates</option>
                                                         <option value = "GB">United Kingdom</option>
                                                         <option value = "US">United States</option>
                                                         <option value = "UM">United States Minor Outlying Islands</option>
                                                         <option value = "UY">Uruguay</option>
                                                         <option value = "UZ">Uzbekistan</option>
                                                         <option value = "VU">Vanuatu</option>
                                                         <option value = "VE">Venezuela, Bolivarian Republic of</option>
                                                         <option value = "VN">Viet Nam</option>
                                                         <option value = "VG">Virgin Islands, British</option>
                                                         <option value = "VI">Virgin Islands, U.S.</option>
                                                         <option value = "WF">Wallis and Futuna</option>
                                                         <option value = "EH">Western Sahara</option>
                                                         <option value = "YE">Yemen</option>
                                                         <option value = "ZM">Zambia</option>
                                                         <option value = "ZW">Zimbabwe</option>
                                                      </select>
                                                   </div>
                                                   <div id  =  "append_city">
                                                   </div>
                                                </div>
                                                <div class  =  "form-group">
                                                   <label class = "col-md-2 control-label">Phone Number
                                                   <span class = "required"> * </span>
                                                   </label>
                                                   <div class = "col-md-4 col-xs-2">
                                                      <select id = "country-code" name = "country-phone-code" class  =  "form-control"
                                                      oninvalid="this.setCustomValidity('Please select country code.)"
													oninput="setCustomValidity('')" required
                                                      >
                                                         <option value  =  "" selected>Select Phone Code</option>
                                                         <option value = "AD">AD - Andorra (+376)</option>
                                                         <option value = "AE">AE - United Arab Emirates (+971)</option>
                                                         <option value = "AF">AF - Afghanistan (+93)</option>
                                                         <option value = "AG">AG - Antigua And Barbuda (+1268)</option>
                                                         <option value = "AI">AI - Anguilla (+1264)</option>
                                                         <option value = "AL">AL - Albania (+355)</option>
                                                         <option value = "AM">AM - Armenia (+374)</option>
                                                         <option value = "AN">AN - Netherlands Antilles (+599)</option>
                                                         <option value = "AO">AO - Angola (+244)</option>
                                                         <option value = "AQ">AQ - Antarctica (+672)</option>
                                                         <option value = "AR">AR - Argentina (+54)</option>
                                                         <option value = "AS">AS - American Samoa (+1684)</option>
                                                         <option value = "AT">AT - Austria (+43)</option>
                                                         <option value = "AU">AU - Australia (+61)</option>
                                                         <option value = "AW">AW - Aruba (+297)</option>
                                                         <option value = "AZ">AZ - Azerbaijan (+994)</option>
                                                         <option value = "BA">BA - Bosnia And Herzegovina (+387)</option>
                                                         <option value = "BB">BB - Barbados (+1246)</option>
                                                         <option value = "BD">BD - Bangladesh (+880)</option>
                                                         <option value = "BE">BE - Belgium (+32)</option>
                                                         <option value = "BF">BF - Burkina Faso (+226)</option>
                                                         <option value = "BG">BG - Bulgaria (+359)</option>
                                                         <option value = "BH">BH - Bahrain (+973)</option>
                                                         <option value = "BI">BI - Burundi (+257)</option>
                                                         <option value = "BJ">BJ - Benin (+229)</option>
                                                         <option value = "BL">BL - Saint Barthelemy (+590)</option>
                                                         <option value = "BM">BM - Bermuda (+1441)</option>
                                                         <option value = "BN">BN - Brunei Darussalam (+673)</option>
                                                         <option value = "BO">BO - Bolivia (+591)</option>
                                                         <option value = "BR">BR - Brazil (+55)</option>
                                                         <option value = "BS">BS - Bahamas (+1242)</option>
                                                         <option value = "BT">BT - Bhutan (+975)</option>
                                                         <option value = "BW">BW - Botswana (+267)</option>
                                                         <option value = "BY">BY - Belarus (+375)</option>
                                                         <option value = "BZ">BZ - Belize (+501)</option>
                                                         <option value = "CA">CA - Canada (+1)</option>
                                                         <option value = "CC">CC - Cocos (keeling) Islands (+61)</option>
                                                         <option value = "CD">CD - Congo, The Democratic Republic Of The (+243)</option>
                                                         <option value = "CF">CF - Central African Republic (+236)</option>
                                                         <option value = "CG">CG - Congo (+242)</option>
                                                         <option value = "CH">CH - Switzerland (+41)</option>
                                                         <option value = "CI">CI - Cote D Ivoire (+225)</option>
                                                         <option value = "CK">CK - Cook Islands (+682)</option>
                                                         <option value = "CL">CL - Chile (+56)</option>
                                                         <option value = "CM">CM - Cameroon (+237)</option>
                                                         <option value = "CN">CN - China (+86)</option>
                                                         <option value = "CO">CO - Colombia (+57)</option>
                                                         <option value = "CR">CR - Costa Rica (+506)</option>
                                                         <option value = "CU">CU - Cuba (+53)</option>
                                                         <option value = "CV">CV - Cape Verde (+238)</option>
                                                         <option value = "CX">CX - Christmas Island (+61)</option>
                                                         <option value = "CY">CY - Cyprus (+357)</option>
                                                         <option value = "CZ">CZ - Czech Republic (+420)</option>
                                                         <option value = "DE">DE - Germany (+49)</option>
                                                         <option value = "DJ">DJ - Djibouti (+253)</option>
                                                         <option value = "DK">DK - Denmark (+45)</option>
                                                         <option value = "DM">DM - Dominica (+1767)</option>
                                                         <option value = "DO">DO - Dominican Republic (+1809)</option>
                                                         <option value = "DZ">DZ - Algeria (+213)</option>
                                                         <option value = "EC">EC - Ecuador (+593)</option>
                                                         <option value = "EE">EE - Estonia (+372)</option>
                                                         <option value = "EG">EG - Egypt (+20)</option>
                                                         <option value = "ER">ER - Eritrea (+291)</option>
                                                         <option value = "ES">ES - Spain (+34)</option>
                                                         <option value = "ET">ET - Ethiopia (+251)</option>
                                                         <option value = "FI">FI - Finland (+358)</option>
                                                         <option value = "FJ">FJ - Fiji (+679)</option>
                                                         <option value = "FK">FK - Falkland Islands (malvinas) (+500)</option>
                                                         <option value = "FM">FM - Micronesia, Federated States Of (+691)</option>
                                                         <option value = "FO">FO - Faroe Islands (+298)</option>
                                                         <option value = "FR">FR - France (+33)</option>
                                                         <option value = "GA">GA - Gabon (+241)</option>
                                                         <option value = "GB">GB - United Kingdom (+44)</option>
                                                         <option value = "GD">GD - Grenada (+1473)</option>
                                                         <option value = "GE">GE - Georgia (+995)</option>
                                                         <option value = "GH">GH - Ghana (+233)</option>
                                                         <option value = "GI">GI - Gibraltar (+350)</option>
                                                         <option value = "GL">GL - Greenland (+299)</option>
                                                         <option value = "GM">GM - Gambia (+220)</option>
                                                         <option value = "GN">GN - Guinea (+224)</option>
                                                         <option value = "GQ">GQ - Equatorial Guinea (+240)</option>
                                                         <option value = "GR">GR - Greece (+30)</option>
                                                         <option value = "GT">GT - Guatemala (+502)</option>
                                                         <option value = "GU">GU - Guam (+1671)</option>
                                                         <option value = "GW">GW - Guinea-bissau (+245)</option>
                                                         <option value = "GY">GY - Guyana (+592)</option>
                                                         <option value = "HK">HK - Hong Kong (+852)</option>
                                                         <option value = "HN">HN - Honduras (+504)</option>
                                                         <option value = "HR">HR - Croatia (+385)</option>
                                                         <option value = "HT">HT - Haiti (+509)</option>
                                                         <option value = "HU">HU - Hungary (+36)</option>
                                                         <option value = "ID">ID - Indonesia (+62)</option>
                                                         <option value = "IE">IE - Ireland (+353)</option>
                                                         <option value = "IL">IL - Israel (+972)</option>
                                                         <option value = "IM">IM - Isle Of Man (+44)</option>
                                                         <option value = "IN">IN - India (+91)</option>
                                                         <option value = "IQ">IQ - Iraq (+964)</option>
                                                         <option value = "IR">IR - Iran, Islamic Republic Of (+98)</option>
                                                         <option value = "IS">IS - Iceland (+354)</option>
                                                         <option value = "IT">IT - Italy (+39)</option>
                                                         <option value = "JM">JM - Jamaica (+1876)</option>
                                                         <option value = "JO">JO - Jordan (+962)</option>
                                                         <option value = "JP">JP - Japan (+81)</option>
                                                         <option value = "KE">KE - Kenya (+254)</option>
                                                         <option value = "KG">KG - Kyrgyzstan (+996)</option>
                                                         <option value = "KH">KH - Cambodia (+855)</option>
                                                         <option value = "KI">KI - Kiribati (+686)</option>
                                                         <option value = "KM">KM - Comoros (+269)</option>
                                                         <option value = "KN">KN - Saint Kitts And Nevis (+1869)</option>
                                                         <option value = "KP">KP - Korea Democratic Peoples Republic Of (+850)</option>
                                                         <option value = "KR">KR - Korea Republic Of (+82)</option>
                                                         <option value = "KW">KW - Kuwait (+965)</option>
                                                         <option value = "KY">KY - Cayman Islands (+1345)</option>
                                                         <option value = "KZ">KZ - Kazakstan (+7)</option>
                                                         <option value = "LA">LA - Lao Peoples Democratic Republic (+856)</option>
                                                         <option value = "LB">LB - Lebanon (+961)</option>
                                                         <option value = "LC">LC - Saint Lucia (+1758)</option>
                                                         <option value = "LI">LI - Liechtenstein (+423)</option>
                                                         <option value = "LK">LK - Sri Lanka (+94)</option>
                                                         <option value = "LR">LR - Liberia (+231)</option>
                                                         <option value = "LS">LS - Lesotho (+266)</option>
                                                         <option value = "LT">LT - Lithuania (+370)</option>
                                                         <option value = "LU">LU - Luxembourg (+352)</option>
                                                         <option value = "LV">LV - Latvia (+371)</option>
                                                         <option value = "LY">LY - Libyan Arab Jamahiriya (+218)</option>
                                                         <option value = "MA">MA - Morocco (+212)</option>
                                                         <option value = "MC">MC - Monaco (+377)</option>
                                                         <option value = "MD">MD - Moldova, Republic Of (+373)</option>
                                                         <option value = "ME">ME - Montenegro (+382)</option>
                                                         <option value = "MF">MF - Saint Martin (+1599)</option>
                                                         <option value = "MG">MG - Madagascar (+261)</option>
                                                         <option value = "MH">MH - Marshall Islands (+692)</option>
                                                         <option value = "MK">MK - Macedonia, The Former Yugoslav Republic Of (+389)</option>
                                                         <option value = "ML">ML - Mali (+223)</option>
                                                         <option value = "MM">MM - Myanmar (+95)</option>
                                                         <option value = "MN">MN - Mongolia (+976)</option>
                                                         <option value = "MO">MO - Macau (+853)</option>
                                                         <option value = "MP">MP - Northern Mariana Islands (+1670)</option>
                                                         <option value = "MR">MR - Mauritania (+222)</option>
                                                         <option value = "MS">MS - Montserrat (+1664)</option>
                                                         <option value = "MT">MT - Malta (+356)</option>
                                                         <option value = "MU">MU - Mauritius (+230)</option>
                                                         <option value = "MV">MV - Maldives (+960)</option>
                                                         <option value = "MW">MW - Malawi (+265)</option>
                                                         <option value = "MX">MX - Mexico (+52)</option>
                                                         <option value = "MY">MY - Malaysia (+60)</option>
                                                         <option value = "MZ">MZ - Mozambique (+258)</option>
                                                         <option value = "NA">NA - Namibia (+264)</option>
                                                         <option value = "NC">NC - New Caledonia (+687)</option>
                                                         <option value = "NE">NE - Niger (+227)</option>
                                                         <option value = "NG">NG - Nigeria (+234)</option>
                                                         <option value = "NI">NI - Nicaragua (+505)</option>
                                                         <option value = "NL">NL - Netherlands (+31)</option>
                                                         <option value = "NO">NO - Norway (+47)</option>
                                                         <option value = "NP">NP - Nepal (+977)</option>
                                                         <option value = "NR">NR - Nauru (+674)</option>
                                                         <option value = "NU">NU - Niue (+683)</option>
                                                         <option value = "NZ">NZ - New Zealand (+64)</option>
                                                         <option value = "OM">OM - Oman (+968)</option>
                                                         <option value = "PA">PA - Panama (+507)</option>
                                                         <option value = "PE">PE - Peru (+51)</option>
                                                         <option value = "PF">PF - French Polynesia (+689)</option>
                                                         <option value = "PG">PG - Papua New Guinea (+675)</option>
                                                         <option value = "PH">PH - Philippines (+63)</option>
                                                         <option value = "PK">PK - Pakistan (+92)</option>
                                                         <option value = "PL">PL - Poland (+48)</option>
                                                         <option value = "PM">PM - Saint Pierre And Miquelon (+508)</option>
                                                         <option value = "PN">PN - Pitcairn (+870)</option>
                                                         <option value = "PR">PR - Puerto Rico (+1)</option>
                                                         <option value = "PT">PT - Portugal (+351)</option>
                                                         <option value = "PW">PW - Palau (+680)</option>
                                                         <option value = "PY">PY - Paraguay (+595)</option>
                                                         <option value = "QA">QA - Qatar (+974)</option>
                                                         <option value = "RO">RO - Romania (+40)</option>
                                                         <option value = "RS">RS - Serbia (+381)</option>
                                                         <option value = "RU">RU - Russian Federation (+7)</option>
                                                         <option value = "RW">RW - Rwanda (+250)</option>
                                                         <option value = "SA">SA - Saudi Arabia (+966)</option>
                                                         <option value = "SB">SB - Solomon Islands (+677)</option>
                                                         <option value = "SC">SC - Seychelles (+248)</option>
                                                         <option value = "SD">SD - Sudan (+249)</option>
                                                         <option value = "SE">SE - Sweden (+46)</option>
                                                         <option value = "SG">SG - Singapore (+65)</option>
                                                         <option value = "SH">SH - Saint Helena (+290)</option>
                                                         <option value = "SI">SI - Slovenia (+386)</option>
                                                         <option value = "SK">SK - Slovakia (+421)</option>
                                                         <option value = "SL">SL - Sierra Leone (+232)</option>
                                                         <option value = "SM">SM - San Marino (+378)</option>
                                                         <option value = "SN">SN - Senegal (+221)</option>
                                                         <option value = "SO">SO - Somalia (+252)</option>
                                                         <option value = "SR">SR - Suriname (+597)</option>
                                                         <option value = "ST">ST - Sao Tome And Principe (+239)</option>
                                                         <option value = "SV">SV - El Salvador (+503)</option>
                                                         <option value = "SY">SY - Syrian Arab Republic (+963)</option>
                                                         <option value = "SZ">SZ - Swaziland (+268)</option>
                                                         <option value = "TC">TC - Turks And Caicos Islands (+1649)</option>
                                                         <option value = "TD">TD - Chad (+235)</option>
                                                         <option value = "TG">TG - Togo (+228)</option>
                                                         <option value = "TH">TH - Thailand (+66)</option>
                                                         <option value = "TJ">TJ - Tajikistan (+992)</option>
                                                         <option value = "TK">TK - Tokelau (+690)</option>
                                                         <option value = "TL">TL - Timor-leste (+670)</option>
                                                         <option value = "TM">TM - Turkmenistan (+993)</option>
                                                         <option value = "TN">TN - Tunisia (+216)</option>
                                                         <option value = "TO">TO - Tonga (+676)</option>
                                                         <option value = "TR">TR - Turkey (+90)</option>
                                                         <option value = "TT">TT - Trinidad And Tobago (+1868)</option>
                                                         <option value = "TV">TV - Tuvalu (+688)</option>
                                                         <option value = "TW">TW - Taiwan, Province Of China (+886)</option>
                                                         <option value = "TZ">TZ - Tanzania, United Republic Of (+255)</option>
                                                         <option value = "UA">UA - Ukraine (+380)</option>
                                                         <option value = "UG">UG - Uganda (+256)</option>
                                                         <option value = "US">US - United States (+1)</option>
                                                         <option value = "UY">UY - Uruguay (+598)</option>
                                                         <option value = "UZ">UZ - Uzbekistan (+998)</option>
                                                         <option value = "VA">VA - Holy See (vatican City State) (+39)</option>
                                                         <option value = "VC">VC - Saint Vincent And The Grenadines (+1784)</option>
                                                         <option value = "VE">VE - Venezuela (+58)</option>
                                                         <option value = "VG">VG - Virgin Islands, British (+1284)</option>
                                                         <option value = "VI">VI - Virgin Islands, U.s. (+1340)</option>
                                                         <option value = "VN">VN - Viet Nam (+84)</option>
                                                         <option value = "VU">VU - Vanuatu (+678)</option>
                                                         <option value = "WF">WF - Wallis And Futuna (+681)</option>
                                                         <option value = "WS">WS - Samoa (+685)</option>
                                                         <option value = "XK">XK - Kosovo (+381)</option>
                                                         <option value = "YE">YE - Yemen (+967)</option>
                                                         <option value = "YT">YT - Mayotte (+262)</option>
                                                         <option value = "ZA">ZA - South Africa (+27)</option>
                                                         <option value = "ZM">ZM - Zambia (+260)</option>
                                                         <option value = "ZW">ZW - Zimbabwe (+263)</option>
                                                      </select>
                                                   </div>
                                                   <div class  =  "col-md-4">
                                                      <input type  =  "text" name  =  "phone" id  =  "phone" class  =  "form-control" value = "<?php echo $_POST['phone'] ?? ''; ?>"
                                                      pattern = "[0-9]{9,10}"
                                                      oninvalid="this.setCustomValidity('Please enter valid phone number.')"
													oninput="setCustomValidity('')" required
                                                      />
                                                   </div>
                                                </div>
                                                
                                                
                                                <div class  =  "form-group">
                                                   
                                                   <label class = "col-md-2 control-label"> Warrenty </label>
                                                   <div class  =  "col-md-4">
                                                      <input type = "text" name = "warrenty" class = "form-control" placeholder  =  "1 Year, No Warrenty" value = "<?php echo $_POST['warrenty'] ?? ''; ?>"/>
                                                   </div>
                                                
                                                
                                                   <label class = "col-md-2 control-label"> Delivery Period </label>
                                                   <div class  =  "col-md-4">
                                                      <input type = "text" name = "delivery_period" class = "form-control" placeholder  =  "2 days, 1 days etc" value = "<?php echo $_POST['delivery_period'] ?? ''; ?>"
                                                      pattern = ".{2,}"
                                                      oninvalid="this.setCustomValidity('Please delivery period.')"
													oninput="setCustomValidity('')" required
                                                      />
                                                   </div>
                                                
                                                   
                                                
                                                
                                                </div>
                                               
                                              
                                                   
                                                
                                                
                                                   
                                                
                                               
                                               
                                               
                                               
                                               <?php
												
												// Check the delivery service 
												$delivery_service = $_POST['delivery-service'] ?? '';
												
                                               
                                               ?>
                                               <div class  =  "form-group">
                                               
                                                <label class = "col-md-2 control-label">Delivery Service <span class = "required"> * </span></label>
                                                   
													    <label class = "col-md-2 control-label" for  =  "pick up">Pick Up</label>
													    
													   
                                                      <div class  =  "col-md-1">
                                                      <input type = "radio" name = "delivery-service" value = "pick up" id  =  "pick up" class  =  "form-control"  <?=  $delivery_service === 'pick up' ? 'checked = "checked"': ''; ?> 
                                                      
                                                      oninvalid="this.setCustomValidity('Please delivery service.')"
													  oninput="setCustomValidity('')" required
                                                      />
                                                      </div>
                                                      
                                                     <label class = "col-md-2 control-label" for  =  "sindbad">By Sindbad</label>
                                                     
                                                     <div class  =  "col-md-1">
                                                      <input type = "radio" name = "delivery-service" value = "sindbad" id  =  "sindbad" class  =  "form-control"  <?=  $delivery_service === 'sindbad'? 'checked = "checked"': ''; ?>>
                                                      </div>
                                               </div>
                                               
                                                <hr>
                                                <hr>
                                                <div class  =  "form-group">
                                                   <label class = "col-md-2 control-label">
                                                      <h6>SPECIFICATIONS <span class = "required"> * </span></h6>
                                                   </label>
                                                   <label class = "col-md-4 control-label">
                                                      <h6 style  =  "color:red;" id  =  "info-spe"> <span class = "required"> * </span></h6>
                                                </div>
                                                <div class  =  "form-group">
                                                <label class = "col-md-2 control-label"> Key </label>
                                                
                                                
                                                <div class  =  "col-md-3">
                                                <input type = "text" name = "spcification-title[]" class = "specification-key form-control" placeholder  =  "Hard Disk"
                                                pattern = ".{2,}"
												  oninvalid="this.setCustomValidity('Please enter specification key.')"
												oninput="setCustomValidity('')" required
                                                >
                                                </div>
                                                <label class = "col-md-2 control-label"> Value </label>
                                                
                                                
                                                <div class  =  "col-md-3">
                                                <input type = "text" name = "spcification-value[]" class = "form-control" placeholder  =  "5 GB"
                                                
                                                pattern = ".{2,}"
												  oninvalid="this.setCustomValidity('Please enter specification value.')"
												oninput="setCustomValidity('')" required
                                                
                                                >
                                                </div>
                                                
                                                
                                                <div class  =  "col-md-2">
                                                <button type = "button" class = "addSpecificationBtn btn btn-default">
                                                <i class = "fa fa-plus"></i>
                                                </button>
                                                </div>
                                                </div>	
                                                <div style  =  "min-height:250px;" id  =  "AddSpecificationDiv">
                                                   <div  id  =  "CloneSpecification">
                                                   </div>
                                                </div>
                                                <hr>

                                                <hr>
                                                <!-- Button color -->
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label">Web Link
                                                   </label>
                                                   <div class = "col-md-10">
                                                      <input type = "text" id = "weblink" class = "form-control" name = "weblink" placeholder = "" value = "<?php echo $_POST['weblink'] ?? ''; ?>"> 
                                                   </div>
                                                </div>
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label">YouTube
                                                   </label>
                                                   <div class = "col-md-10">
                                                      <input type = "text" id = "youtube-link" class = "form-control" name = "youtube-link" placeholder = "" value = "<?php echo $_POST['youtube-link'] ?? ''; ?>"> 
                                                   </div>
                                                </div>
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label">Facebook</label>
                                                   <div class = "col-md-10">
                                                      <input type = "text" id = "name" class = "form-control" name = "facebook-link" placeholder = "" value = "<?php echo $_POST['facebook-link'] ?? ''; ?>"> 
                                                   </div>
                                                </div>
                                                <hr>
                                                <div class  =  "form-group">
                                                   <label class = "col-md-2 control-label">Seller Note</label>
                                                   <div class = "col-md-10">
                                                      <textarea class  =  "form-control" name  =  "saller-note" placeholder  =  "Best Deal."><?php echo $_POST['saller-note'] ?? ''; ?></textarea>
                                                   </div>
                                                </div>
                                                <hr>
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label" style  =  "text-align:left;">
                                                      <h4>Google Map Location</h4>
                                                   </label>
                                                </div>
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label">Latitude</label>
                                                   <div class = "col-md-4">
                                                      
                                                      
                                                      <input type = "text" id = "name" class = "form-control" name = "latitude" placeholder = "Latitude Cordinates" value = "<?php echo $_POST['latitude'] ?? ''; ?>" 
                                                      pattern = "(\+|-)?(?:90(?:(?:\.0{1,8})?)|(?:[0-9]|[1-8][0-9])(?:(?:\.[0-9]{1,8})?))"
													  oninvalid="this.setCustomValidity('Please enter latitude.')"
												      oninput="setCustomValidity('')" required
                                                      /> 
                                                     
                                                     
                                                      <span class = "help-block">Example: -50.895199</span>
                                                   </div>
                                                   <label class = "col-md-2 control-label">Longitude</label>
                                                   <div class = "col-md-4">
													   
													   
                                                      <input type = "text" id = "name" class = "form-control" name = "longitude" placeholder = "Longitude Cordinates" value = "<?php echo $_POST['longitude'] ?? ''; ?>" 
                                                      pattern = "(\+|-)?(?:180(?:(?:\.0{1,8})?)|(?:[0-9]|[1-9][0-9]|1[0-7][0-9])(?:(?:\.[0-9]{1,8})?))"
													  oninvalid="this.setCustomValidity('Please enter latitude.')"
												      oninput="setCustomValidity('')" required
                                                      /> 
                                                      <span class = "help-block">Example: 5.318750</span>
                                                  
                                                  
                                                  
                                                   </div>
                                                </div>
                                                <hr>
                                                <div class  =  "form-group">
                                                   <label class = "col-md-12">
                                                      <h3>Design Your Articles</h3>
                                                   </label>
                                                </div>
                                                <hr>
                                                <div class = "form-group">
                                                   <textarea id = "my_content" class = "ckeditor" name  =  "product-articles-html"><?php echo $_POST['product-articles-html'] ?? ''; ?></textarea>
                                                </div>
                                                <hr>
                                                <div class = "form-group">
                                                   <label class = "col-md-4 control-label" style  =  "color:red;" id  =  "mx-fl-up"></label>
                                                </div>
                                                <div class = "from-group"> 
													
													<div class = "alert" id = "file-alert-140"></div>
													
												</div>
                                                <div class = "form-group">
                                                
                                                <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Guide</h4>
  <p>If you can find the product in aliexpress, you can download images in for the proudct. In chromo you can install
  extension and esay to download. Please use 500X500 px images. Click the link below.</p>
  <hr>
  <p class="mb-0">https://chrome.google.com/webstore/detail/download-aliexpress-produ/jfdmndkebgjnoecndabpkfpafgdhfjck</p>
</div>
                                                </div>
                                                
                                                <div class = "form-group">
													
                                                   <label class = "col-md-2 control-label">Upload Images</label>
                                                   <div class = "col-xs-4">
                                                      <input type = "file" name = "option[]" accept="image/*" required>
                                                   </div>
                                                   <div class = "col-xs-4">
                                                      <button type = "button" class = "btn btn-default addButton"><i class = "fa fa-plus"></i></button>
                                                   </div>
                                                </div>
                                                
                                                
                                                <div class  =  "added-images" style  =  "min-height:175px;" id = "add-file-120">
                                                  
                                               
                                                </div>
                                                <!-- Here end-->
                                             
                                             
                                             
                                             
                                             
                                             </div>
                                          </div>
                                          <div class = "tab-pane" id = "tab_meta">
                                             <div class = "form-body">
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label">Meta Title:</label>
                                                   <div class = "col-md-10">
                                                      <input type = "text" class = "form-control maxlength-handler" name = "meta_title" maxlength = "100" value =  "<?php echo $_POST['meta_title'] ?? ''; ?>" />
                                                      <span class = "help-block"> max 100 chars </span>
                                                   </div>
                                                </div>
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label">Meta Keywords:</label>
                                                   <div class = "col-md-10">
                                                      <textarea class = "form-control maxlength-handler" rows = "8" name = "meta_keywords" maxlength = "1000"><?php echo $_POST['meta_keywords'] ?? ''; ?></textarea>
                                                      <span class = "help-block"> max 1000 chars </span>
                                                   </div>
                                                </div>
                                                <div class = "form-group">
                                                   <label class = "col-md-2 control-label">Meta Description:</label>
                                                   <div class = "col-md-10">
                                                      <textarea class = "form-control maxlength-handler" rows = "8" name = "meta_description" maxlength = "255"><?php echo $_POST['meta_description'] ?? ''; ?></textarea>
                                                      <span class = "help-block"> max 255 chars </span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       
                                       <div class = "portlet-title">
                                    <div class = "message" id = "message"></div>
                                    <div class = "actions btn-set custom12">
                                       <button class = "btn btn-secondary-outline" id = "reset">
                                       <i class = "fa fa-reply"></i> Reset</button>
                                       
                                       <button type  =  "submit" class = "btn" id = "upload" name = "submit">
                                       <i class = "fa fa-check"></i> Upload</button>    
                                       
                                                                     
                                    </div>
                                 </div>
                           
                                       </div>
                                   
                                   
                                    </div>
                                 </form>
                                 
                                 </div>
                                    </div>
                           </div>
                        </div>
                     </div>
                     <!-- END DASHBOARD STATS 1-->
                     <!-- END PAGE BASE CONTENT -->
                  </div>
                  <!-- END CONTENT BODY -->
               </div>
               <!-- END CONTENT -->
               <!-- BEGIN QUICK SIDEBAR -->
               <a href = "javascript:;" class = "page-quick-sidebar-toggler">
               <i class = "icon-login"></i>
               </a>
               <div class = "page-quick-sidebar-wrapper" data-close-on-body-click = "false">
                  <div class = "page-quick-sidebar">
                     <ul class = "nav nav-tabs">
                        <li class = "active">
                           <a href = "javascript:;" data-target = "#quick_sidebar_tab_1" data-toggle = "tab"> Users
                           <span class = "badge badge-danger">2</span>
                           </a>
                        </li>
                        <li>
                           <a href = "javascript:;" data-target = "#quick_sidebar_tab_2" data-toggle = "tab"> Alerts
                           <span class = "badge badge-success">7</span>
                           </a>
                        </li>
                        <li class = "dropdown">
                           <a href = "javascript:;" class = "dropdown-toggle" data-toggle = "dropdown"> More
                           <i class = "fa fa-angle-down"></i>
                           </a>
                           <ul class = "dropdown-menu pull-right">
                              <li>
                                 <a href = "javascript:;" data-target = "#quick_sidebar_tab_3" data-toggle = "tab">
                                 <i class = "icon-bell"></i> Alerts </a>
                              </li>
                              <li>
                                 <a href = "javascript:;" data-target = "#quick_sidebar_tab_3" data-toggle = "tab">
                                 <i class = "icon-info"></i> Notifications </a>
                              </li>
                              <li>
                                 <a href = "javascript:;" data-target = "#quick_sidebar_tab_3" data-toggle = "tab">
                                 <i class = "icon-speech"></i> Activities </a>
                              </li>
                              <li class = "divider"></li>
                              <li>
                                 <a href = "javascript:;" data-target = "#quick_sidebar_tab_3" data-toggle = "tab">
                                 <i class = "icon-settings"></i> Settings </a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                     <div class = "tab-content">
                        <div class = "tab-pane active page-quick-sidebar-chat" id = "quick_sidebar_tab_1">
                           <div class = "page-quick-sidebar-chat-users" data-rail-color = "#ddd" data-wrapper-class = "page-quick-sidebar-list">
                              <h3 class = "list-heading">Staff</h3>
                              <ul class = "media-list list-items">
                                 <li class = "media">
                                    <div class = "media-status">
                                       <span class = "badge badge-success">8</span>
                                    </div>
                                    <img class = "media-object" src = "../assets/layouts/layout/img/avatar3.jpg" alt = "...">
                                    <div class = "media-body">
                                       <h4 class = "media-heading">Bob Nilson</h4>
                                       <div class = "media-heading-sub"> Project Manager </div>
                                    </div>
                                 </li>
                                 <li class = "media">
                                    <img class = "media-object" src = "../assets/layouts/layout/img/avatar1.jpg" alt = "...">
                                    <div class = "media-body">
                                       <h4 class = "media-heading">Nick Larson</h4>
                                       <div class = "media-heading-sub"> Art Director </div>
                                    </div>
                                 </li>
                                 <li class = "media">
                                    <div class = "media-status">
                                       <span class = "badge badge-danger">3</span>
                                    </div>
                                    <img class = "media-object" src = "../assets/layouts/layout/img/avatar4.jpg" alt = "...">
                                    <div class = "media-body">
                                       <h4 class = "media-heading">Deon Hubert</h4>
                                       <div class = "media-heading-sub"> CTO </div>
                                    </div>
                                 </li>
                                 <li class = "media">
                                    <img class = "media-object" src = "../assets/layouts/layout/img/avatar2.jpg" alt = "...">
                                    <div class = "media-body">
                                       <h4 class = "media-heading">Ella Wong</h4>
                                       <div class = "media-heading-sub"> CEO </div>
                                    </div>
                                 </li>
                              </ul>
                              <h3 class = "list-heading">Customers</h3>
                              <ul class = "media-list list-items">
                                 <li class = "media">
                                    <div class = "media-status">
                                       <span class = "badge badge-warning">2</span>
                                    </div>
                                    <img class = "media-object" src = "../assets/layouts/layout/img/avatar6.jpg" alt = "...">
                                    <div class = "media-body">
                                       <h4 class = "media-heading">Lara Kunis</h4>
                                       <div class = "media-heading-sub"> CEO, Loop Inc </div>
                                       <div class = "media-heading-small"> Last seen 03:10 AM </div>
                                    </div>
                                 </li>
                                 <li class = "media">
                                    <div class = "media-status">
                                       <span class = "label label-sm label-success">new</span>
                                    </div>
                                    <img class = "media-object" src = "../assets/layouts/layout/img/avatar7.jpg" alt = "...">
                                    <div class = "media-body">
                                       <h4 class = "media-heading">Ernie Kyllonen</h4>
                                       <div class = "media-heading-sub"> Project Manager,
                                          <br> SmartBizz PTL 
                                       </div>
                                    </div>
                                 </li>
                                 <li class = "media">
                                    <img class = "media-object" src = "../assets/layouts/layout/img/avatar8.jpg" alt = "...">
                                    <div class = "media-body">
                                       <h4 class = "media-heading">Lisa Stone</h4>
                                       <div class = "media-heading-sub"> CTO, Keort Inc </div>
                                       <div class = "media-heading-small"> Last seen 13:10 PM </div>
                                    </div>
                                 </li>
                                 <li class = "media">
                                    <div class = "media-status">
                                       <span class = "badge badge-success">7</span>
                                    </div>
                                    <img class = "media-object" src = "../assets/layouts/layout/img/avatar9.jpg" alt = "...">
                                    <div class = "media-body">
                                       <h4 class = "media-heading">Deon Portalatin</h4>
                                       <div class = "media-heading-sub"> CFO, H&D LTD </div>
                                    </div>
                                 </li>
                                 <li class = "media">
                                    <img class = "media-object" src = "../assets/layouts/layout/img/avatar10.jpg" alt = "...">
                                    <div class = "media-body">
                                       <h4 class = "media-heading">Irina Savikova</h4>
                                       <div class = "media-heading-sub"> CEO, Tizda Motors Inc </div>
                                    </div>
                                 </li>
                                 <li class = "media">
                                    <div class = "media-status">
                                       <span class = "badge badge-danger">4</span>
                                    </div>
                                    <img class = "media-object" src = "../assets/layouts/layout/img/avatar11.jpg" alt = "...">
                                    <div class = "media-body">
                                       <h4 class = "media-heading">Maria Gomez</h4>
                                       <div class = "media-heading-sub"> Manager, Infomatic Inc </div>
                                       <div class = "media-heading-small"> Last seen 03:10 AM </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                           <div class = "page-quick-sidebar-item">
                              <div class = "page-quick-sidebar-chat-user">
                                 <div class = "page-quick-sidebar-nav">
                                    <a href = "javascript:;" class = "page-quick-sidebar-back-to-list">
                                    <i class = "icon-arrow-left"></i>Back</a>
                                 </div>
                                 <div class = "page-quick-sidebar-chat-user-messages">
                                    <div class = "post out">
                                       <img class = "avatar" alt = "" src = "../assets/layouts/layout/img/avatar3.jpg" />
                                       <div class = "message">
                                          <span class = "arrow"></span>
                                          <a href = "javascript:;" class = "name">Bob Nilson</a>
                                          <span class = "datetime">20:15</span>
                                          <span class = "body"> When could you send me the report ? </span>
                                       </div>
                                    </div>
                                    <div class = "post in">
                                       <img class = "avatar" alt = "" src = "../assets/layouts/layout/img/avatar2.jpg" />
                                       <div class = "message">
                                          <span class = "arrow"></span>
                                          <a href = "javascript:;" class = "name">Ella Wong</a>
                                          <span class = "datetime">20:15</span>
                                          <span class = "body"> Its almost done. I will be sending it shortly </span>
                                       </div>
                                    </div>
                                    <div class = "post out">
                                       <img class = "avatar" alt = "" src = "../assets/layouts/layout/img/avatar3.jpg" />
                                       <div class = "message">
                                          <span class = "arrow"></span>
                                          <a href = "javascript:;" class = "name">Bob Nilson</a>
                                          <span class = "datetime">20:15</span>
                                          <span class = "body"> Alright. Thanks! :) </span>
                                       </div>
                                    </div>
                                    <div class = "post in">
                                       <img class = "avatar" alt = "" src = "../assets/layouts/layout/img/avatar2.jpg" />
                                       <div class = "message">
                                          <span class = "arrow"></span>
                                          <a href = "javascript:;" class = "name">Ella Wong</a>
                                          <span class = "datetime">20:16</span>
                                          <span class = "body"> You are most welcome. Sorry for the delay. </span>
                                       </div>
                                    </div>
                                    <div class = "post out">
                                       <img class = "avatar" alt = "" src = "../assets/layouts/layout/img/avatar3.jpg" />
                                       <div class = "message">
                                          <span class = "arrow"></span>
                                          <a href = "javascript:;" class = "name">Bob Nilson</a>
                                          <span class = "datetime">20:17</span>
                                          <span class = "body"> No probs. Just take your time :) </span>
                                       </div>
                                    </div>
                                    <div class = "post in">
                                       <img class = "avatar" alt = "" src = "../assets/layouts/layout/img/avatar2.jpg" />
                                       <div class = "message">
                                          <span class = "arrow"></span>
                                          <a href = "javascript:;" class = "name">Ella Wong</a>
                                          <span class = "datetime">20:40</span>
                                          <span class = "body"> Alright. I just emailed it to you. </span>
                                       </div>
                                    </div>
                                    <div class = "post out">
                                       <img class = "avatar" alt = "" src = "../assets/layouts/layout/img/avatar3.jpg" />
                                       <div class = "message">
                                          <span class = "arrow"></span>
                                          <a href = "javascript:;" class = "name">Bob Nilson</a>
                                          <span class = "datetime">20:17</span>
                                          <span class = "body"> Great! Thanks. Will check it right away. </span>
                                       </div>
                                    </div>
                                    <div class = "post in">
                                       <img class = "avatar" alt = "" src = "../assets/layouts/layout/img/avatar2.jpg" />
                                       <div class = "message">
                                          <span class = "arrow"></span>
                                          <a href = "javascript:;" class = "name">Ella Wong</a>
                                          <span class = "datetime">20:40</span>
                                          <span class = "body"> Please let me know if you have any comment. </span>
                                       </div>
                                    </div>
                                    <div class = "post out">
                                       <img class = "avatar" alt = "" src = "../assets/layouts/layout/img/avatar3.jpg" />
                                       <div class = "message">
                                          <span class = "arrow"></span>
                                          <a href = "javascript:;" class = "name">Bob Nilson</a>
                                          <span class = "datetime">20:17</span>
                                          <span class = "body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class = "page-quick-sidebar-chat-user-form">
                                    <div class = "input-group">
                                       <input type = "text" class = "form-control" placeholder = "Type a message here...">
                                       <div class = "input-group-btn">
                                          <button type = "button" class = "btn green">
                                          <i class = "icon-paper-clip"></i>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class = "tab-pane page-quick-sidebar-alerts" id = "quick_sidebar_tab_2">
                           <div class = "page-quick-sidebar-alerts-list">
                              <h3 class = "list-heading">General</h3>
                              <ul class = "feeds list-items">
                                 <li>
                                    <div class = "col1">
                                       <div class = "cont">
                                          <div class = "cont-col1">
                                             <div class = "label label-sm label-info">
                                                <i class = "fa fa-check"></i>
                                             </div>
                                          </div>
                                          <div class = "cont-col2">
                                             <div class = "desc"> You have 4 pending tasks.
                                                <span class = "label label-sm label-warning "> Take action
                                                <i class = "fa fa-share"></i>
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class = "col2">
                                       <div class = "date"> Just now </div>
                                    </div>
                                 </li>
                                 <li>
                                    <a href = "javascript:;">
                                       <div class = "col1">
                                          <div class = "cont">
                                             <div class = "cont-col1">
                                                <div class = "label label-sm label-success">
                                                   <i class = "fa fa-bar-chart-o"></i>
                                                </div>
                                             </div>
                                             <div class = "cont-col2">
                                                <div class = "desc"> Finance Report for year 2013 has been released. </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class = "col2">
                                          <div class = "date"> 20 mins </div>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <div class = "col1">
                                       <div class = "cont">
                                          <div class = "cont-col1">
                                             <div class = "label label-sm label-danger">
                                                <i class = "fa fa-user"></i>
                                             </div>
                                          </div>
                                          <div class = "cont-col2">
                                             <div class = "desc"> You have 5 pending membership that requires a quick review. </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class = "col2">
                                       <div class = "date"> 24 mins </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class = "col1">
                                       <div class = "cont">
                                          <div class = "cont-col1">
                                             <div class = "label label-sm label-info">
                                                <i class = "fa fa-shopping-cart"></i>
                                             </div>
                                          </div>
                                          <div class = "cont-col2">
                                             <div class = "desc"> New order received with
                                                <span class = "label label-sm label-success"> Reference Number: DR23923 </span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class = "col2">
                                       <div class = "date"> 30 mins </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class = "col1">
                                       <div class = "cont">
                                          <div class = "cont-col1">
                                             <div class = "label label-sm label-success">
                                                <i class = "fa fa-user"></i>
                                             </div>
                                          </div>
                                          <div class = "cont-col2">
                                             <div class = "desc"> You have 5 pending membership that requires a quick review. </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class = "col2">
                                       <div class = "date"> 24 mins </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class = "col1">
                                       <div class = "cont">
                                          <div class = "cont-col1">
                                             <div class = "label label-sm label-info">
                                                <i class = "fa fa-bell-o"></i>
                                             </div>
                                          </div>
                                          <div class = "cont-col2">
                                             <div class = "desc"> Web server hardware needs to be upgraded.
                                                <span class = "label label-sm label-warning"> Overdue </span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class = "col2">
                                       <div class = "date"> 2 hours </div>
                                    </div>
                                 </li>
                                 <li>
                                    <a href = "javascript:;">
                                       <div class = "col1">
                                          <div class = "cont">
                                             <div class = "cont-col1">
                                                <div class = "label label-sm label-default">
                                                   <i class = "fa fa-briefcase"></i>
                                                </div>
                                             </div>
                                             <div class = "cont-col2">
                                                <div class = "desc"> IPO Report for year 2013 has been released. </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class = "col2">
                                          <div class = "date"> 20 mins </div>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                              <h3 class = "list-heading">System</h3>
                              <ul class = "feeds list-items">
                                 <li>
                                    <div class = "col1">
                                       <div class = "cont">
                                          <div class = "cont-col1">
                                             <div class = "label label-sm label-info">
                                                <i class = "fa fa-check"></i>
                                             </div>
                                          </div>
                                          <div class = "cont-col2">
                                             <div class = "desc"> You have 4 pending tasks.
                                                <span class = "label label-sm label-warning "> Take action
                                                <i class = "fa fa-share"></i>
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class = "col2">
                                       <div class = "date"> Just now </div>
                                    </div>
                                 </li>
                                 <li>
                                    <a href = "javascript:;">
                                       <div class = "col1">
                                          <div class = "cont">
                                             <div class = "cont-col1">
                                                <div class = "label label-sm label-danger">
                                                   <i class = "fa fa-bar-chart-o"></i>
                                                </div>
                                             </div>
                                             <div class = "cont-col2">
                                                <div class = "desc"> Finance Report for year 2013 has been released. </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class = "col2">
                                          <div class = "date"> 20 mins </div>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <div class = "col1">
                                       <div class = "cont">
                                          <div class = "cont-col1">
                                             <div class = "label label-sm label-default">
                                                <i class = "fa fa-user"></i>
                                             </div>
                                          </div>
                                          <div class = "cont-col2">
                                             <div class = "desc"> You have 5 pending membership that requires a quick review. </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class = "col2">
                                       <div class = "date"> 24 mins </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class = "col1">
                                       <div class = "cont">
                                          <div class = "cont-col1">
                                             <div class = "label label-sm label-info">
                                                <i class = "fa fa-shopping-cart"></i>
                                             </div>
                                          </div>
                                          <div class = "cont-col2">
                                             <div class = "desc"> New order received with
                                                <span class = "label label-sm label-success"> Reference Number: DR23923 </span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class = "col2">
                                       <div class = "date"> 30 mins </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class = "col1">
                                       <div class = "cont">
                                          <div class = "cont-col1">
                                             <div class = "label label-sm label-success">
                                                <i class = "fa fa-user"></i>
                                             </div>
                                          </div>
                                          <div class = "cont-col2">
                                             <div class = "desc"> You have 5 pending membership that requires a quick review. </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class = "col2">
                                       <div class = "date"> 24 mins </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class = "col1">
                                       <div class = "cont">
                                          <div class = "cont-col1">
                                             <div class = "label label-sm label-warning">
                                                <i class = "fa fa-bell-o"></i>
                                             </div>
                                          </div>
                                          <div class = "cont-col2">
                                             <div class = "desc"> Web server hardware needs to be upgraded.
                                                <span class = "label label-sm label-default "> Overdue </span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class = "col2">
                                       <div class = "date"> 2 hours </div>
                                    </div>
                                 </li>
                                 <li>
                                    <a href = "javascript:;">
                                       <div class = "col1">
                                          <div class = "cont">
                                             <div class = "cont-col1">
                                                <div class = "label label-sm label-info">
                                                   <i class = "fa fa-briefcase"></i>
                                                </div>
                                             </div>
                                             <div class = "cont-col2">
                                                <div class = "desc"> IPO Report for year 2013 has been released. </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class = "col2">
                                          <div class = "date"> 20 mins </div>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class = "tab-pane page-quick-sidebar-settings" id = "quick_sidebar_tab_3">
                           <div class = "page-quick-sidebar-settings-list">
                              <h3 class = "list-heading">General Settings</h3>
                              <ul class = "list-items borderless">
                                 <li> Enable Notifications
                                    <input type = "checkbox" class = "make-switch" checked data-size = "small" data-on-color = "success" data-on-text = "ON" data-off-color = "default" data-off-text = "OFF"> 
                                 </li>
                                 <li> Allow Tracking
                                    <input type = "checkbox" class = "make-switch" data-size = "small" data-on-color = "info" data-on-text = "ON" data-off-color = "default" data-off-text = "OFF"> 
                                 </li>
                                 <li> Log Errors
                                    <input type = "checkbox" class = "make-switch" checked data-size = "small" data-on-color = "danger" data-on-text = "ON" data-off-color = "default" data-off-text = "OFF"> 
                                 </li>
                                 <li> Auto Sumbit Issues
                                    <input type = "checkbox" class = "make-switch" data-size = "small" data-on-color = "warning" data-on-text = "ON" data-off-color = "default" data-off-text = "OFF"> 
                                 </li>
                                 <li> Enable SMS Alerts
                                    <input type = "checkbox" class = "make-switch" checked data-size = "small" data-on-color = "success" data-on-text = "ON" data-off-color = "default" data-off-text = "OFF"> 
                                 </li>
                              </ul>
                              <h3 class = "list-heading">System Settings</h3>
                              <ul class = "list-items borderless">
                                 <li>
                                    Security Level
                                    <select class = "form-control input-inline input-sm input-small">
                                       <option value = "1">Normal</option>
                                       <option value = "2" selected>Medium</option>
                                       <option value = "e">High</option>
                                    </select>
                                 </li>
                                 <li> Failed Email Attempts
                                    <input class = "form-control input-inline input-sm input-small" value = "5" /> 
                                 </li>
                                 <li> Secondary SMTP Port
                                    <input class = "form-control input-inline input-sm input-small" value = "3560" /> 
                                 </li>
                                 <li> Notify On System Error
                                    <input type = "checkbox" class = "make-switch" checked data-size = "small" data-on-color = "danger" data-on-text = "ON" data-off-color = "default" data-off-text = "OFF"> 
                                 </li>
                                 <li> Notify On SMTP Error
                                    <input type = "checkbox" class = "make-switch" checked data-size = "small" data-on-color = "warning" data-on-text = "ON" data-off-color = "default" data-off-text = "OFF"> 
                                 </li>
                              </ul>
                              <div class = "inner-content">
                                 <button class = "btn btn-success">
                                 <i class = "icon-settings"></i> Save Changes</button>
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
            <div class = "page-footer">
               <div class = "page-footer-inner"> 2014 &copy; Metronic by keenthemes.
                  <a href = "http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref = keenthemes" title = "Purchase Metronic just for 27$ and get lifetime updates for free" target = "_blank">Purchase Metronic!</a>
               </div>
               <div class = "scroll-to-top">
                  <i class = "icon-arrow-up"></i>
               </div>
            </div>
            <!-- END FOOTER -->
            <!--$if lt IE 9;>
            <script src = "../assets/global/plugins/respond.min.js"></script>
            <script src = "../assets/global/plugins/excanvas.min.js"></script> 
            <!$endif;-->
            <!-- BEGIN CORE PLUGINS -->
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
            <script></script>
            <!-- END THEME LAYOUT SCRIPTS -->
         </body>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p id = "error-message" class = "error-message"></p>
  </div>
  
  
   
</div>
       
       
       
       
       </body> 
        <script src = "ckeditor.js"></script>
         <script src = "samples/js/sample.js"></script>
         <script>
            initSample();
         </script>
         
         
      
      
      <?php
      
      // check if button is submitted 
      if($obj->IsFormSubmitted() === true ) {
		  
		  
		
				// echo the javascript code 
				echo $obj->Validation();
			
      
		  }
     
      ?>
      
      
     
      </html>
