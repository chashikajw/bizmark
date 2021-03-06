<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col" style="position: fixed;">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?php echo base_url(''); ?>" class="site_title"><i class="fa fa-user"></i> <span>Switch Account</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <?="<img class='img-circle profile_img' src='" . base_url() . "assets/business/" . $business_data->logo_path . "' alt=''/>"?>
                        </div>
                        <div class="profile_info">
                            <!-- <span>Welcome,</span> -->
                            <h2> <?=$business_data->name;?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="<?php echo base_url('business/dashboard'); ?>"><i class="fa fa-desktop"></i> Dashboard </a></li>
                                <li><a href="<?php echo base_url('business/profile'); ?>"><i class="fa fa-home"></i> Profile </a></li>
                                <li><a href="<?php echo base_url('business/review'); ?>"><i class="fa fa-edit"></i> Ratings </a></li>
                                <li><a href="<?php echo base_url('business/news_feed'); ?>"><i class="fa fa-table"></i> Posts </a></li>
                                <li><a href="<?php echo base_url("business/get_inquiry_list/"); ?><?=$business_data->id;?>"><i class="fa fa-clone"></i> Complaints </a></li>



                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Remove account">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                        <a href="<?=base_url('');?>" data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <?=$business_data->owner_name;?>
                                        <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <!-- <li><a href="javascript:;"> Profile</a></li> -->
                                    <li>
                                        <a href="<?php echo base_url(''); ?>">Back to client</a>
                                    </li>
                                    <!-- <li><a href="javascript:;">Help</a></li> -->
                                    <li><a href="<?php echo base_url('Client/logoutUser'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
