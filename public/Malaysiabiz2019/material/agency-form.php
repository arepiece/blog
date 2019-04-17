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
    <title>Agency Add</title>
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
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Agency</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">User Management</a></li>
                            
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
								<div class="col-md-8 col-8 align-self-center">
								<h3 class="card-title">Add Agency</h3> 
								</div>
								<div class="col-md-4 col-4">	
								<div class="text-right">							
                                 <a href="config-agency.php"><button type="submit" class="btn btn-info waves-effect-light btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to submit and back to the main page"><i class="ti-check"></i> Submit</button></a>
								 
								 <a href="config-agency.php"><button type="button" class="btn btn-danger waves-effect-light btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to cancel and back to the main page"><i class="ti-close"></i> Cancel</button></a>
								</div>
								</div>
                                 </div>
                                        <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Agency Name <span class="text-danger">*</span></label>
                                                        <input type="text" id="agency-name" class="form-control">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Abbreviation <span class="text-danger">*</span></label>
                                                        <input type="text" id="agency-abb" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">System Name <span class="text-danger">*</span></label>
                                                        <input type="text" id="system-name" class="form-control">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">System Abbreviation <span class="text-danger">*</span></label>
                                                        <input type="text" id="system-abb" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">System URL <span class="text-danger">*</span></label>
                                                        <input type="text" id="system-url" class="form-control">
                                                    </div>
                                                </div>

                                                <!--/row-->
                                            </div><hr>
                                            <div class="col-md-12 col-12">	
                                                <div class="text-right">							
                                                    <a href="config-agency.php"><button type="button" class="btn btn-info waves-effect-light btn-sm"><i class="ti-check"></i> Submit</button></a>

                                                    <a href="config-agency.php"><button type="button" class="btn btn-danger waves-effect-light btn-sm"><i class="ti-close"></i> Cancel</button></a>
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
                    <?php include('footer.php'); ?>
                    <!-- ============================================================== -->
                    <!-- End footer -->
                    <!-- ============================================================== -->
                </div>


                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel1">Add Agency user</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Name </label>
                                                        <input type="text" class="form-control" id="recipient-name1">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Position</label>
                                                        <input type="text" class="form-control" id="recipient-name1">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Username</label>
                                                        <input type="text" class="form-control" id="recipient-name1">
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                            <div class="form-actions" align="right">
                                                <a href="config-agency.php"><button type="submit" class="btn btn-info waves-effect-light btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to submit and back to the main page"><i class="ti-check"></i> Submit</button></a>
								 
								 <a href="config-agency.php"><button type="button" class="btn btn-danger waves-effect-light btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to cancel and back to the main page"><i class="ti-close"></i> Cancel</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal -->
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


    <script>
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
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    
    
$('#checkall').click(function(event) {   
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;                        
        });
    } else {   
        $(':checkbox').each(function() {
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