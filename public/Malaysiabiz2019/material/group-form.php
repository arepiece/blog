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
        <title>Group Form</title>
        <!-- Bootstrap Core CSS -->
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- chartist CSS -->
        <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
        <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
        <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
        <!--This page css - Morris CSS -->
        <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- You can change the theme colors from here -->
        <link href="css/colors/mybiz-admin-default-color.css" id="theme" rel="stylesheet">
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
                        <a class="navbar-brand" href="index.html">
                            <!-- Logo icon --><b>
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <!-- Light Logo icon -->
                                <img src="../assets/images/logo-mbiz-mini.png" class="logo-mini-admin">
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span>                          
                                <img src="../assets/images/logo-mbiz-text.png" style="width: 140px" ></span> </a>
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
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                            <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
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
                            <h3 class="text-themecolor">Group & Role</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active"><a href="../material/list-menu.html">User Management</a></li>

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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-outline-info">

                                <div class="card-body">
                                    <form action="#">
                                        <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <h3 class="m-b-0">Add New Group & Role </h3>                                             
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="text-right">                            
                                                     <a href="group-roles.php"><button type="button" class="btn btn-info waves-effect-light btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to submit and back to the main page"> <i class="ti-check"></i> Submit</button></a>
                                                        <a href="group-roles.php" class="btn btn-info waves-effect-light btn-danger btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to cancel and back to the main page"><i class="ti-close"></i>Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                                <div class="col-md-6 m-b-20">
                                                <div>
                                                    <label class="control-label">Group Name <span class="text-danger">*</span></label>
                                                     <input type="text" id="name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"><h5>Active? <span class="text-danger">*</span></h5></label>
                                                        <div class="m-b-10">
                                                            <label class="custom-control custom-radio" style="display: inline-block; padding-right: 30px;">
                                                                <input id="radio1" name="radio" type="radio" class="custom-control-input " checked="">
                                                                <span class="custom-control-label">Yes</span>
                                                            </label>
                                                           <label class="custom-control custom-radio" style="display: inline-block; padding-right: 30px;">
                                                                <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <label class="control-label m-t-30">Menu Setting for This Group <span class="text-danger">*</span></label>
                                                <div class="table-responsive">
                                                    <table id="demo-foo-addrow" class="table table-striped table-hover no-wrap" data-page-size="10">
                                                        <thead>
                                                            <tr>

                                                                <th>ID </th> 
                                                                <th>Menu name</th>
                                                                <th>Create</th>
                                                                <th>Read</th>
                                                                <th>Update</th>
                                                                <th>Delete</th>
                                                            </tr>

                                                        </thead>
                                                        <tbody>
                                                            <tr>

                                                                <td>1</td>
                                                                <td>
                                                                    License Search
                                                                </td>

                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input1" name="inputCheckboxes1">
                                                                        <label for="input1" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input2" name="inputCheckboxes2">
                                                                        <label for="input2" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input3" name="inputCheckboxes3">
                                                                        <label for="input3" class="task-done"> </label>
                                                                    </div></td>

                                                            </tr>
                                                            <tr>

                                                                <td>2</td>
                                                                <td>
                                                                    MyDashboard
                                                                </td>

                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input4" name="inputCheckboxes4">
                                                                        <label for="input4" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input5" name="inputCheckboxes5">
                                                                        <label for="input5" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input6" name="inputCheckboxes6">
                                                                        <label for="input6" class="task-done"> </label>
                                                                    </div></td>


                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>
                                                                    MyBusiness
                                                                </td>

                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input7" name="inputCheckboxes7">
                                                                        <label for="input7" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input8" name="inputCheckboxes8">
                                                                        <label for="input8" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input9" name="inputCheckboxes9">
                                                                        <label for="input9" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input10" name="inputCheckboxes10">
                                                                        <label for="input10" class="task-done"> </label>
                                                                    </div></td>

                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>
                                                                    MyTray
                                                                </td>

                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input11" name="inputCheckboxes11">
                                                                        <label for="input11" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input12" name="inputCheckboxes12">
                                                                        <label for="input12" class="task-done"> </label>
                                                                    </div></td>


                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>
                                                                    MyTracker 
                                                                </td>

                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input13" name="inputCheckboxes13">
                                                                        <label for="input13" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input14" name="inputCheckboxes14">
                                                                        <label for="input14" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input15" name="inputCheckboxes15">
                                                                        <label for="input15" class="task-done"> </label>
                                                                    </div></td>


                                                            </tr>

                                                            <tr>
                                                                <td>6</td>
                                                                <td>MyLicense
                                                                </td>

                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input16" name="inputCheckboxes16">
                                                                        <label for="input16" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input17" name="inputCheckboxes17">
                                                                        <label for="input17" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input18" name="inputCheckboxes18">
                                                                        <label for="input18" class="task-done"> </label>
                                                                    </div></td>


                                                            </tr>
                                                            <tr>
                                                                <td>7</td>
                                                                <td>FAQ
                                                                </td>

                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input19" name="inputCheckboxes19">
                                                                        <label for="input19" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input20" name="inputCheckboxes20">
                                                                        <label for="input20" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>


                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td>Feedback
                                                                </td>

                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input21" name="inputCheckboxes21">
                                                                        <label for="input21" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input22" name="inputCheckboxes22">
                                                                        <label for="input22" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input23" name="inputCheckboxes23">
                                                                        <label for="input23" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>


                                                            </tr>
                                                            <tr>
                                                                <td>9</td>
                                                                <td>Helpdesk
                                                                </td>

                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input24" name="inputCheckboxes24">
                                                                        <label for="input24" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input25" name="inputCheckboxes25">
                                                                        <label for="input25" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>


                                                            </tr>
                                                            <tr>
                                                                <td>10</td>
                                                                <td>
                                                                    User Management
                                                                </td>

                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input26" name="inputCheckboxes26">
                                                                        <label for="input26" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input27" name="inputCheckboxes27">
                                                                        <label for="input27" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>


                                                            </tr>
                                                            <tr>
                                                                <td>11</td>
                                                                <td>
                                                                    Portal Service
                                                                </td>

                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input28" name="inputCheckboxes28">
                                                                        <label for="input28" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input29" name="inputCheckboxes29">
                                                                        <label for="input29" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>


                                                            </tr>
                                                            <tr>
                                                                <td>12</td>
                                                                <td>
                                                                    Admin Management
                                                                </td>

                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input30" name="inputCheckboxes30">
                                                                        <label for="input30" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>
                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input31" name="inputCheckboxes31">
                                                                        <label for="input31" class="task-done"> </label>
                                                                    </div></td>


                                                            </tr>
                                                            <tr>
                                                                <td>13</td>
                                                                <td>
                                                                    Data Config & Management
                                                                </td>

                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input32" name="inputCheckboxes32">
                                                                        <label for="input32" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>
                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input33" name="inputCheckboxes33">
                                                                        <label for="input33" class="task-done"> </label>
                                                                    </div></td>



                                                            </tr>

                                                            <tr>
                                                                <td>14</td>
                                                                <td>
                                                                    Report
                                                                </td>

                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input34" name="inputCheckboxes34">
                                                                        <label for="input34" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>
                                                                <td><p class="fas fa-square" style="color: #dee2e6; font-size: 22px; /* line-height: 36px; */"></p></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input35" name="inputCheckboxes35">
                                                                        <label for="input35" class="task-done"> </label>
                                                                    </div></td>



                                                            </tr>
                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        <hr>
                                        <div class="form-actions" align="right">
                                            <a href="../material/group-roles.php"><button type="button" class="btn btn-info waves-effect-light btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to submit and back to the main page"> <i class="ti-check"></i> Submit</button></a>
                                            <a href="../material/group-roles.php" class="btn btn-info waves-effect-light btn-danger btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to cancel and back to the main page"><i class="ti-close"></i>Cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Container fluid  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- footer -->
                    <!-- ============================================================== -->
                    <?php include ('footer.php'); ?>
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
            <!--c3 JavaScript -->
            <script src="../assets/plugins/d3/d3.min.js"></script>
            <script src="../assets/plugins/c3-master/c3.min.js"></script>
            <!-- Chart JS -->
            <script src="js/dashboard1.js"></script>
            <!-- ============================================================== -->
            <!-- Style switcher -->
            <!-- ============================================================== -->
            <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
            <script src="js/parentSideNavbar.js?vs=1"></script>
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