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
                 <?php include 'side-bar-menu.phtml'; ?>
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
