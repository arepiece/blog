<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Feedback</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../assets/plugins/css-chart/css-chart.css" rel="stylesheet">

    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/mybiz-admin-default-color.css" id="theme" rel="stylesheet">
    <link href="../assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-mbiz-mini.png" class="logo-mini-admin">
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <img src="../assets/images/logo-mbiz-text.png" style="width: 140px"></span> </a>
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
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <?php include('admin-logout.php'); ?>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                    </ul>
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



                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <?php include('admin-sidebar-nav.php'); ?>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->

            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Configuration</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Responses</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-8 col-8 align-self-center">
                                        <h3 class="card-title">Feedback Response</h3>
                                    </div>
                                    <div class="col-md-4 col-4">
                                        <div class="text-right">
                                            <a href="admin_feedback_response.php"><button type="button" class="btn btn-info waves-effect-light btn-info btn-sm"><i
                                                        class="ti-angle-left"></i> Back</button></a>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <h4 class="card-title">Feedback No. - F2009</h4>


                                <form class="form-material m-t-40">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <h3 class="text-themecolor m-b-0 m-t-0">Question 1</h3>
                                                <label>Please state your business activity:</label>
                                                <input type="text" class="form-control form-control-line" value="Cyber Cafe"
                                                    readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <h3 class="text-themecolor m-b-0 m-t-0">Question 2</h3>
                                                <label>Please tick in the box with the scale of 1-5 in grading the
                                                    features of the portal:</label>
                                                <table class="">
                                                    <tr>
                                                        <th class="text-center" bgcolor="#F2FFFF">
                                                            <div style="width: 120px;height: 30px;">1</div>
                                                        </th>
                                                        <th class="text-center" bgcolor="#E1F9F7">
                                                            <div style="width: 120px;height: 30px;">2</div>
                                                        </th>
                                                        <th class="text-center" bgcolor="#A4EDE6">
                                                            <div style="width: 120px;height: 30px;">3</div>
                                                        </th>
                                                        <th class="text-center" bgcolor="#53DCD0">
                                                            <div style="width: 120px;height: 30px;">4</div>
                                                        </th>
                                                        <th class="text-center" bgcolor="#02CCBA">
                                                            <div style="width: 120px;height: 30px;">5</div>
                                                        </th>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <center><input name="group1" type="radio" id="radio_1" />
                                                                <label for="radio_1"></label></center>
                                                        </td>
                                                        <td>
                                                            <center><input name="group1" type="radio" id="radio_2" />
                                                                <label for="radio_2"></label></center>
                                                        </td>
                                                        <td>
                                                            <center><input name="group1" type="radio" id="radio_3" />
                                                                <label for="radio_3"></label></center>
                                                        </td>
                                                        <td>
                                                            <center><input name="group1" type="radio" id="radio_4"
                                                                    checked />
                                                                <label for="radio_4"></label></center>
                                                        </td>
                                                        <td>
                                                            <center><input name="group1" type="radio" id="radio_5" />
                                                                <label for="radio_5"></label></center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center text-info">Not Attractive</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="text-center text-info">Attractive</td>
                                                    </tr>

                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <h3 class="text-themecolor m-b-0 m-t-0">Question 3</h3>
                                                <label>Your involvement in doing business please tick in the related
                                                    box</label>
                                                <div class="m-b-10">
                                                    <label class="custom-control custom-radio">
                                                        <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                                        <span class="custom-control-label">Haven’t started a business</span>
                                                    </label>
                                                </div>
                                                <div class="m-b-10">
                                                    <label class="custom-control custom-radio">
                                                        <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                                        <span class="custom-control-label">Less than 5 years</span>
                                                    </label>
                                                </div>
                                                <div class="m-b-10">
                                                    <label class="custom-control custom-radio">
                                                        <input id="radio3" name="radio" type="radio" class="custom-control-input"
                                                            checked>
                                                        <span class="custom-control-label">More than 5 years</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                                <div class="text-right">
                                    <a href="admin_feedback_response.php"><button type="button" class="btn btn-info waves-effect-light btn-info btn-sm"><i
                                                class="ti-angle-left"></i>Back</button></a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include('admin-footer.php'); ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
    <link href="../assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/popper/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/plugins/echarts/echarts-all.js"></script>
    <!-- Vector map JavaScript -->
    <script src="../assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Calendar JavaScript -->
    <script src="../assets/plugins/moment/moment.js"></script>
    <script src='../assets/plugins/calendar/dist/fullcalendar.min.js'></script>
    <script src="../assets/plugins/calendar/dist/jquery.fullcalendar.js"></script>
    <script src="../assets/plugins/calendar/dist/cal-init.js"></script>
    <!-- sparkline chart -->
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/dashboard4.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="js/parentSideNavbar.js"></script>
    <script>
        $(this).parentSideNavbar('admin_feedback_response.php')
    </script>
</body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .dot {
        height: 15px;
        width: 15px;
        background-color: #7FFF00;
        border-radius: 50%;
        display: inline-block;
        align: center;
    }

    .dotinactive {
        height: 15px;
        width: 15px;
        background-color: #FF0000;
        border-radius: 50%;
        display: inline-block;
        align: center;
    }
</style>

</html>