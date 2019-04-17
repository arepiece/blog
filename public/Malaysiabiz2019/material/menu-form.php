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
    <title>Menu form</title>
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
                        <h3 class="text-themecolor">Menu</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active"><a href="../material/list-menu.html">Configuration</a></li>
                            
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
                                                <h3 class="m-b-0">Add New Menu </h3>                                             
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="text-right">                            
                                                     <a href="list-menu.php"><button type="button" class="btn btn-info waves-effect-light btn-info btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to submit and back to the main page"><i class="ti-check"></i> Submit</button></a>
                                                     <a href="list-menu.php"><button type="button" class="btn btn-info waves-effect-light btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to cancel and back to the main page"><i class="ti-close"></i> Cancel</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <label class="control-label">Menu <span class="text-danger">*</span></label>
                                                     <input type="text" id="name" class="form-control">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Path <span class="text-danger">*</span></label>
                                                    <input type="text" id="path" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
										<div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <label class="control-label">Category <span class="text-danger">*</span></label>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="">Select</option>
														<option value="Category 1">Website</option>
                                                        <option value="Category 1">System</option>
														<option value="Category 2">Admin</option>
                                                    </select>
                                                    </div>
													</div>
                                                <div class="col-md-6">
                                                <div>
                                                    <label class="control-label">Menu Odering <span class="text-danger">*</span></label>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="">1</option>
                                                        <option value="Category 1">2</option>
                                                        <option value="Category 2">3</option>
                                                    </select>
                                                    </div>
                                                    </div>
													</div>
                                        <!--/row-->
                                        <div class="row" style="margin-top:2rem">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                            <label class="control-label"><h5>Active? <span class="text-danger">*</span></h5></label>
                                                            <div class="m-b-10">
                                                                <label class="custom-control custom-radio">
                                                                    <input id="radio1" name="radio" type="radio" class="custom-control-input " checked>
                                                                    <span class="custom-control-label">Yes</span>
                                                                </label>
                                                                <label class="custom-control custom-radio">
                                                                    <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                                                    <span class="custom-control-label">No</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                            </div>
                                        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                            <label class="control-label"><h5>Show? <span class="text-danger">*</span></h5></label>
                                                            <div class="m-b-10">
                                                                <label class="custom-control custom-radio">
                                                                    <input id="radio1" name="radio" type="radio" class="custom-control-input " checked>
                                                                    <span class="custom-control-label">Yes</span>
                                                                </label>
                                                                <label class="custom-control custom-radio">
                                                                    <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                                                    <span class="custom-control-label">No</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                            </div>
                                            <!--/span-->
                                           
                                        <!--/row-->
                                        
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="table-responsive">
                                                    <table id="demo-foo-addrow" class="table table-striped table-hover no-wrap" data-page-size="10">
                                                        <thead>
                                                            <tr>
                                                                <th>Create</th>
                                                                <th>Read</th>
                                                                <th>Update</th>
                                                                <th>Delete</th>
                                                            </tr>

                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input1" name="inputCheckboxes1">
                                                                        <label for="input1" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input2" name="inputCheckboxes2">
                                                                        <label for="input2" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input3" name="inputCheckboxes3">
                                                                        <label for="input3" class="task-done"> </label>
                                                                    </div></td>
                                                                <td><div class="checkbox checkbox-info">
                                                                        <input type="checkbox" id="input4" name="inputCheckboxes3">
                                                                        <label for="input4" class="task-done"> </label>
                                                                    </div></td>
                                                            </tr>
                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
										<hr>
                                    <div class="row">
                                        <div class="col-md-12 col-12">  
                                            <div class="text-right">                            
                                                 <a href="list-menu.php"><button type="button" class="btn btn-info waves-effect-light btn-info btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to submit and back to the main page"><i class="ti-check"></i> Submit</button></a>
                                                 
                                                 <a href="list-menu.php"><button type="button" class="btn btn-info waves-effect-light btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to cancel and back to the main page"><i class="ti-close"></i> Cancel</button></a>
                                            </div>
                                        </div>
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
    <script src="js/parentSideNavbar.js"></script>
    <script>
            $(this).parentSideNavbar('list-menu.php')
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