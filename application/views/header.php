<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>template/light/assets/images/favicon_1.ico">

    <title>Web Absensi</title>

    <!-- DataTables -->
    <link href="<?php echo base_url(); ?>template/light/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>template/light/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>template/light/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>template/light/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>template/light/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>template/light/assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>template/light/assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>template/light/assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>template/light/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">


    <link href="<?php echo base_url(); ?>template/light/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>template/light/assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>template/light/assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>template/light/assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>template/light/assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>template/light/assets/css/responsive.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="template/light/assets/js/modernizr.min.js"></script>

</head>

<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="<?php echo base_url('Karyawan'); ?>" class="logo"><i class="icon-magnet icon-c-logo"></i><span>ABSENSI</span></a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<i class="icon-c-logo"> <img src="template/light/assets/images/logo_sm.png" height="42"/> </i>-->
                            <!--<span><img src="template/light/assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>


                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown top-menu-item-xs">
                                
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                        <li class="list-group slimscroll-noti notification-list">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                            <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog noti-warning"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-bell-o noti-custom"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">Updates</h5>
                                                    <p class="m-0">
                                                        <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-user-plus noti-pink"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New user registered</h5>
                                                    <p class="m-0">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                            <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog noti-warning"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="list-group-item text-right">
                                                <small class="font-600">See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="template/light/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url('profil'); ?>"><i class="ti-user m-r-10 text-danger"></i> Profil Karyawan</a></li>
                                        <li><a href="<?php echo base_url('login/logout'); ?>"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="<?php echo base_url('Karyawan'); ?>" class="waves-effect"><i class="ti-home"></i> <span> Absensi </span> </a>
                            </li>
                            
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
    <!-- Left Sidebar End -->