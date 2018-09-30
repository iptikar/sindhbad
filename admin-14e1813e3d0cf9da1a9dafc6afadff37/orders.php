
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
        <link href="../user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="../user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/morris.css" rel="stylesheet" type="text/css" />
        <link href="../user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="../user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../user-admin-14e1813e3d0cf9da1a9dafc6afadff37/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        
       
        
        <link href = "https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" type = "text/css" rel = "stylesheet"/>
        
        

        <link rel="shortcut icon" href="favicon.ico" /> </head>
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
                            <a href="orders" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">Orders</span>
                                
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
                            <h1>Orders
                               
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
					
					
					<div class="portlet box green">
                       
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-cogs"></i>Orders</div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                            <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body flip-scroll">
                                        <table id = "example" class="table table-bordered table-striped table-condensed flip-content">
                                            <thead class="flip-content">
                                                <tr>
                                                    <th> OrderID </th>
                                                    <th> Purchase Point </th>
                                                    <th class="numeric"> Order Date </th>
                                                    <th class="numeric"> Bill-to Name </th>
                                                    <th class="numeric"> Ship-to Name </th>
                                                    <th class="numeric"> Grand Total </th>
                                                    <th class="numeric"> Order Total </th>
                                                    <th class="numeric"> Status </th>
                                                    <th class="numeric"> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> AAC </td>
                                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                                    <td class="numeric"> &nbsp; </td>
                                                    <td class="numeric"> -0.01 </td>
                                                    <td class="numeric"> -0.36% </td>
                                                    <td class="numeric"> $1.39 </td>
                                                    <td class="numeric"> $1.39 </td>
                                                    <td class="numeric"> &nbsp; </td>
                                                    <td class="numeric"> 9,395 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAD </td>
                                                    <td> ARDENT LEISURE GROUP </td>
                                                    <td class="numeric"> $1.15 </td>
                                                    <td class="numeric"> +0.02 </td>
                                                    <td class="numeric"> 1.32% </td>
                                                    <td class="numeric"> $1.14 </td>
                                                    <td class="numeric"> $1.15 </td>
                                                    <td class="numeric"> $1.13 </td>
                                                    <td class="numeric"> 56,431 </td>
                                                </tr>
                                                <tr>
                                                    <td> AAX </td>
                                                    <td> AUSENCO LIMITED </td>
                                                    <td class="numeric"> $4.00 </td>
                                                    <td class="numeric"> -0.04 </td>
                                                    <td class="numeric"> -0.99% </td>
                                                    <td class="numeric"> $4.01 </td>
                                                    <td class="numeric"> $4.05 </td>
                                                    <td class="numeric"> $4.00 </td>
                                                    <td class="numeric"> 90,641 </td>
                                                </tr>
                                                <tr>
                                                    <td> ABC </td>
                                                    <td> ADELAIDE BRIGHTON LIMITED </td>
                                                    <td class="numeric"> $3.00 </td>
                                                    <td class="numeric"> +0.06 </td>
                                                    <td class="numeric"> 2.04% </td>
                                                    <td class="numeric"> $2.98 </td>
                                                    <td class="numeric"> $3.00 </td>
                                                    <td class="numeric"> $2.96 </td>
                                                    <td class="numeric"> 862,518 </td>
                                                </tr>
                                                <tr>
                                                    <td> ABP </td>
                                                    <td> ABACUS PROPERTY GROUP </td>
                                                    <td class="numeric"> $1.91 </td>
                                                    <td class="numeric"> 0.00 </td>
                                                    <td class="numeric"> 0.00% </td>
                                                    <td class="numeric"> $1.92 </td>
                                                    <td class="numeric"> $1.93 </td>
                                                    <td class="numeric"> $1.90 </td>
                                                    <td class="numeric"> 595,701 </td>
                                                </tr>
                                                <tr>
                                                    <td> ABY </td>
                                                    <td> ADITYA BIRLA MINERALS LIMITED </td>
                                                    <td class="numeric"> $0.77 </td>
                                                    <td class="numeric"> +0.02 </td>
                                                    <td class="numeric"> 2.00% </td>
                                                    <td class="numeric"> $0.76 </td>
                                                    <td class="numeric"> $0.77 </td>
                                                    <td class="numeric"> $0.76 </td>
                                                    <td class="numeric"> 54,567 </td>
                                                </tr>
                                                <tr>
                                                    <td> ACR </td>
                                                    <td> ACRUX LIMITED </td>
                                                    <td class="numeric"> $3.71 </td>
                                                    <td class="numeric"> +0.01 </td>
                                                    <td class="numeric"> 0.14% </td>
                                                    <td class="numeric"> $3.70 </td>
                                                    <td class="numeric"> $3.72 </td>
                                                    <td class="numeric"> $3.68 </td>
                                                    <td class="numeric"> 191,373 </td>
                                                </tr>
                                                <tr>
                                                    <td> ADU </td>
                                                    <td> ADAMUS RESOURCES LIMITED </td>
                                                    <td class="numeric"> $0.72 </td>
                                                    <td class="numeric"> 0.00 </td>
                                                    <td class="numeric"> 0.00% </td>
                                                    <td class="numeric"> $0.73 </td>
                                                    <td class="numeric"> $0.74 </td>
                                                    <td class="numeric"> $0.72 </td>
                                                    <td class="numeric"> 8,602,291 </td>
                                                </tr>
                                                <tr>
                                                    <td> AGG </td>
                                                    <td> ANGLOGOLD ASHANTI LIMITED </td>
                                                    <td class="numeric"> $7.81 </td>
                                                    <td class="numeric"> -0.22 </td>
                                                    <td class="numeric"> -2.74% </td>
                                                    <td class="numeric"> $7.82 </td>
                                                    <td class="numeric"> $7.82 </td>
                                                    <td class="numeric"> $7.81 </td>
                                                    <td class="numeric"> 148 </td>
                                                </tr>
                                                <tr>
                                                    <td> AGK </td>
                                                    <td> AGL ENERGY LIMITED </td>
                                                    <td class="numeric"> $13.82 </td>
                                                    <td class="numeric"> +0.02 </td>
                                                    <td class="numeric"> 0.14% </td>
                                                    <td class="numeric"> $13.83 </td>
                                                    <td class="numeric"> $13.83 </td>
                                                    <td class="numeric"> $13.67 </td>
                                                    <td class="numeric"> 846,403 </td>
                                                </tr>
                                                <tr>
                                                    <td> AGO </td>
                                                    <td> ATLAS IRON LIMITED </td>
                                                    <td class="numeric"> $3.17 </td>
                                                    <td class="numeric"> -0.02 </td>
                                                    <td class="numeric"> -0.47% </td>
                                                    <td class="numeric"> $3.11 </td>
                                                    <td class="numeric"> $3.22 </td>
                                                    <td class="numeric"> $3.10 </td>
                                                    <td class="numeric"> 5,416,303 </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td> AGO1</td>
                                                    <td> ATLAS IRON LIMITED </td>
                                                    <td class="numeric"> $3.17 </td>
                                                    <td class="numeric"> -0.02 </td>
                                                    <td class="numeric"> -0.47% </td>
                                                    <td class="numeric"> $3.11 </td>
                                                    <td class="numeric"> $3.22 </td>
                                                    <td class="numeric"> $3.10 </td>
                                                    <td class="numeric"> 5,416,303 </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
<script src= "http://localhost/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/js/amcharts.js" type="text/javascript"></script>
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
<script src= "https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src= "https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
