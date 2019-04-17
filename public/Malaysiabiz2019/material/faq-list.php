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
        <title>List Menu</title>
        <!-- Bootstrap Core CSS -->
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- You can change the theme colors from here -->
        <link href="css/colors/mybiz-admin-default-color.css" id="theme" rel="stylesheet">
        <link href="../assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
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
                            <h3 class="text-themecolor">FAQ</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active"><a href="javascript:void(0)">Configuration</a></li>
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
                                    <a href="faq-add.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to add new"><i class="ti-plus"></i></button></a>
                                    <div class="table-responsive">
                                            <table id="myTable-business" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>

                                                    <th width="">No.</th> 
                                                    <th width="">Question</th>
                                                    <th width="">Agency</th>
                                                    <th width="">Registered User</th>
                                                    <th width="">Public</th>
                                                    <th width="">Created Datetime</th>
                                                    <th width="">Publish</th>
                                                    <th width="120px">Action</th>
                                                </tr>

                                            </thead>
                                            <tbody>
                                                <tr id="data1">
                                                    <td class="text-center">1</td>
                                                    <td>What should I do to start a business? </td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-close text-danger"></i></td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center">19-07-2018 <br>07:06:01</td>
                                                    <td class="text-center"><p class="text-success">Yes </p></td>
                                                    <td class="text-center"><a href="faq-edit.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                        <button type="submit" class="btn btn-danger btn-sm btn-circle" id="sa-warning" onclick="deleteData('data1');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"> <i class="ti-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr id="data2">
                                                    <td class="text-center">2</td>
                                                    <td>How does MalaysiaBiz Portal assist me in starting a business? </td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-close text-danger"></i></td>
                                                    <td class="text-center">19-07-2018 <br> 08:03:02</td>
                                                    <td class="text-center"><p class="text-danger">No </p></td>
                                                    <td class="text-center"><a href="faq-edit.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                        <button type="submit" class="btn btn-danger btn-sm btn-circle" id="sa-warning2" onclick="deleteData('data2');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"> <i class="ti-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr id="data3">
                                                    <td class="text-center">3</td>
                                                    <td>What are the special features of Malaysiabiz Portal?  </td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-close text-danger"></i></td>
                                                    <td class="text-center">19-07-2018 <br> 09:02:01</td>
                                                    <td class="text-center"><p class="text-danger">No </p></td>
                                                    <td class="text-center"><a href="faq-edit.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                        <button type="submit" class="btn btn-danger btn-sm btn-circle" id="sa-warning3" onclick="deleteData('data3');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"> <i class="ti-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr id="data4">
                                                    <td class="text-center">4</td>
                                                    <td>What information on business registration is obtainable from the MalaysiaBiz Portal?   </td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-close text-danger"></i></td>
                                                    <td class="text-center">19-07-2018 <br> 09:02:01</td>
                                                    <td class="text-center"><p class="text-success">Yes </p></td>
                                                    <td class="text-center"><a href="faq-edit.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                        <button type="submit" class="btn btn-danger btn-sm btn-circle" id="sa-warning4" onclick="deleteData('data4');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"> <i class="ti-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr id="data5">
                                                    <td class="text-center">5</td>
                                                    <td>What information on business licensing is obtainable from the MalaysiaBiz Portal?   </td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-close text-danger"></i></td>
                                                    <td class="text-center">19-07-2018 <br> 09:02:01</td>
                                                    <td class="text-center"><p class="text-success">Yes </p></td>
                                                    <td class="text-center"><a href="faq-edit.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                        <button type="submit" class="btn btn-danger btn-sm btn-circle" id="sa-warning5" onclick="deleteData('data5');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"> <i class="ti-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr id="data6">
                                                    <td class="text-center">6</td>
                                                    <td>What are the steps that I have to follow to search for licensing information on the portal?   </td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-close text-danger"></i></td>
                                                    <td class="text-center">19-07-2018 <br> 09:02:01</td>
                                                    <td class="text-center"><p class="text-success">Yes </p></td>
                                                    <td class="text-center"><a href="faq-edit.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                        <button type="submit" class="btn btn-danger btn-sm btn-circle" alt="alert" id="sa-warning6" onclick="deleteData('data6');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"> <i class="ti-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr id="data7">
                                                    <td class="text-center">7</td>
                                                    <td>Do I need to apply for all the licenses displayed on the screen?   </td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-close text-danger"></i></td>
                                                    <td class="text-center">19-07-2018 <br> 09:02:01</td>
                                                    <td class="text-center"><p class="text-danger">No </p></td>
                                                    <td class="text-center"><a href="faq-edit.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                        <button type="submit" class="btn btn-danger btn-sm btn-circle" alt="alert" id="sa-warning" onclick="deleteData('data7');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"> <i class="ti-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr id="data8">
                                                    <td class="text-center">8</td>
                                                    <td>Are there any charges applicable to obtain information from the MalaysiaBiz Portal?    </td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-close text-danger"></i></td>
                                                    <td class="text-center">19-07-2018 <br> 09:02:01</td>
                                                    <td class="text-center"><p class="text-success">Yes </p></td>
                                                    <td class="text-center"><a href="faq-edit.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                        <button type="submit" class="btn btn-danger btn-sm btn-circle" alt="alert" id="sa-warning" onclick="deleteData('data8');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"> <i class="ti-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr id="data9">
                                                    <td class="text-center">9</td>
                                                    <td>Do I need to register as a user to access information via the MalaysiaBiz Portal?    </td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-close text-danger"></i></td>
                                                    <td class="text-center">19-07-2018 <br> 09:02:01</td>
                                                    <td class="text-center"><p class="text-success">Yes </p></td>
                                                    <td class="text-center"><a href="faq-edit.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                        <button type="submit" class="btn btn-danger btn-sm btn-circle" alt="alert" id="sa-warning" onclick="deleteData('data9');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"> <i class="ti-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr id="data10">
                                                    <td class="text-center">10</td>
                                                    <td>Can I register my business and apply for licenses via the MalaysiaBiz Portal?    </td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-close text-danger"></i></td>
                                                    <td class="text-center">19-07-2018 <br> 09:02:01</td>
                                                    <td class="text-center"><p class="text-danger">No </p></td>
                                                    <td class="text-center"><a href="faq-edit.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                        <button type="submit" class="btn btn-danger btn-sm btn-circle" alt="alert" id="sa-warning" onclick="deleteData('data10');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"> <i class="ti-trash"></i></button>

                                                    </td>
                                                </tr>
                                                <tr id="data11">
                                                    <td class="text-center">11</td>
                                                    <td>What are the devices that I can use to access MalaysiaBiz Portal?    </td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-close text-danger"></i></td>
                                                    <td class="text-center">19-07-2018 <br> 09:02:01</td>
                                                    <td class="text-center"><p class="text-success">Yes </p></td>
                                                    <td class="text-center"><a href="faq-edit.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                        <button type="submit" class="btn btn-danger btn-sm btn-circle" alt="alert" id="sa-warning" onclick="deleteData('data11');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"> <i class="ti-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr id="data12">
                                                    <td class="text-center">12</td>
                                                    <td>What is the information required prior to searching for licensing information on the MalaysiaBiz Portal?    </td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-close text-danger"></i></td>
                                                    <td class="text-center">19-07-2018 <br> 09:02:01</td>
                                                    <td class="text-center"><p class="text-success">Yes </p></td>
                                                    <td class="text-center"><a href="faq-edit.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                        <button type="submit" class="btn btn-danger btn-sm btn-circle" alt="alert" id="sa-warning" onclick="deleteData('data12');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"> <i class="ti-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr id="data13">
                                                    <td class="text-center">13</td>
                                                    <td>How do I provide comments and suggestions via the MalaysiaBiz Portal?     </td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-check text-success"></i></td>
                                                    <td class="text-center"><i class="ti-close text-danger"></i></td>
                                                    <td class="text-center">19-07-2018 <br> 09:02:01</td>
                                                    <td class="text-center"><p class="text-success">Yes </p></td>
                                                    <td class="text-center"><a href="faq-edit.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                        <button type="submit" class="btn btn-danger btn-sm btn-circle" alt="alert" id="sa-warning" onclick="deleteData('data13');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"> <i class="ti-trash"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
        <!-- This is data table -->
        <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
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
    <script>
	var table = $('#myTable-business').DataTable( {  
		"drawCallback": function( settings ) {

			$('[data-toggle="tooltip"]').tooltip();;

			// add as many tooltips you want

		},
	});			
																	
																	

														   function deleteData(id) {
                                                                swal({
                                                                    title: "Are you sure to perform this action?",
                                                                    text: "",
                                                                    type: "warning",
                                                                    showCancelButton: true,
                                                                    confirmButtonColor: "#DD6B55",
                                                                    confirmButtonText: "Yes, delete it!",
                                                                    closeOnConfirm: false
                                                                }, function () {
                                                                    swal("Deleted!", "Your request has been deleted.", "success");
                                                                    $('#' + id).hide();
                                                                });
                                                            }
    </script>
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <!-- Sweet-Alert  -->
    <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="../assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>

<!-- end - This is for export functionality only -->
<script>
                                                                $(document).ready(function () {
                                                                    $('#myTable').DataTable();
                                                                    $(document).ready(function () {
                                                                        var table = $('#example').DataTable({
                                                                            "columnDefs": [{
                                                                                    "visible": false,
                                                                                    "targets": 2
                                                                                }],
                                                                            "order": [
                                                                                [2, 'asc']
                                                                            ],
                                                                            "displayLength": 25,
                                                                            "drawCallback": function (settings) {
                                                                                var api = this.api();
                                                                                var rows = api.rows({
                                                                                    page: 'current'
                                                                                }).nodes();
                                                                                var last = null;
                                                                                api.column(2, {
                                                                                    page: 'current'
                                                                                }).data().each(function (group, i) {
                                                                                    if (last !== group) {
                                                                                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                                                                        last = group;
                                                                                    }
                                                                                });
                                                                            }
                                                                        });
                                                                        // Order by the grouping
                                                                        $('#example tbody').on('click', 'tr.group', function () {
                                                                            var currentOrder = table.order()[0];
                                                                            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                                                                                table.order([2, 'desc']).draw();
                                                                            } else {
                                                                                table.order([2, 'asc']).draw();
                                                                            }
                                                                        });
                                                                    });
                                                                });

                                                                //column setting
                                                                $('#myTable').dataTable( {
                                                                      "columnDefs": [
                                                                        { "width": "20%", "targets": 7},
                                                                        { "orderable": false, "targets": [2,3,4,7]}
                                                                      ]
                                                                    } );

                                                                $('#example23').DataTable({
                                                                    dom: 'Bfrtip',
                                                                    buttons: [
                                                                        'copy', 'csv', 'excel', 'pdf', 'print'
                                                                    ]
                                                                });


                                                                $('#checkall').click(function (event) {
                                                                    if (this.checked) {
                                                                        // Iterate each checkbox
                                                                        $(':checkbox').each(function () {
                                                                            this.checked = true;
                                                                        });
                                                                    } else {
                                                                        $(':checkbox').each(function () {
                                                                            this.checked = false;
                                                                        });
                                                                    }
                                                                });
</script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>