            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-header">
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav mr-auto mt-md-0">
                            <!-- This is  -->
                            <li class="nav-item"><a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)">
                            <span style="font-size: 25px;"><i class="mdi mdi-menu"></i></spn></a>
                        </li>
                        </ul>
                        <?php include('logout.php'); ?>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <div class="row">
                        <div class="col-md-3 col-12 text-center">
                            <img src="../assets/images/logo-mbiz.png" class="mybiz-logo" alt="homepage">
                        </div>
                        <div class="col-md-9 col-12 m-t-10">
                            <!-- Sidebar navigation-->
                            <nav class="sidebar-nav horizontal-right">
                                <ul id="sidebarnav" style="padding: 0 !important;">
                                    <li class="nav-small-cap">PERSONAL</li>
                                    <li class="<?php if($page=='mydashboard'){echo 'active';}?>">
                                        <a href="mydashboard.php">
                                            <i class="ti-pie-chart"></i>
                                            <span class="hide-menu">MyDashboard </span></a>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="ti-search"></i><span class="hide-menu">Search </span></a>
                                        <ul>                                                
                                            <li class="<?php if($page=='registration'){echo 'active';}?>">
                                                <a href="business-registration.php">
                                                <i class="far fa-building"></i>
                                                <span class="hide-menu">Business Registration </span></a>
                                            </li>
                                            <li class="<?php if($page=='licensing'){echo 'active';}?>">
                                                <a href="licensing.php">
                                                <i class="ti-id-badge"></i>
                                                <span class="hide-menu">Business Licensing </span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="<?php if($page=='mybisnes'){echo 'active';}?>">
                                        <a href="/en/uiuxdemo/mybusiness">
                                            <i class="ti-briefcase"></i>
                                            <span class="hide-menu">MyBusiness </span></a>
                                    </li>
                                    <li class="<?php if($page=='MyTray'){echo 'active';}?>">
                                        <a href="MyTray.php">
                                            <i class="ti-clipboard"></i>
                                            <span class="hide-menu">MyTray </span></a>
                                    </li>
                                    <li class="<?php if($page=='mytracker'){echo 'active';}?>">
                                        <a href="mytracker.php">
                                            <i class="ti-loop"></i>
                                            <span class="hide-menu">MyTracker </span></a>
                                    </li>
                                    <li class="<?php if($page=='MyLicense'){echo 'active';}?>">
                                        <a href="MyLicense.php">
                                            <i class="ti-files"></i>
                                            <span class="hide-menu">MyLicense </span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->