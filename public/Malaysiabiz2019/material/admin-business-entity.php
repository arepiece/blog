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
        <title>Business Entity</title>
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
                        </li>
                        </ul>
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
                            <h3 class="text-themecolor m-b-0 m-t-0">Business Entity</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)">Configuration</a></li>
                            </ol>
                        </div>
                        <div class="col-md-7 col-4 align-self-center">
                            <div class="d-flex m-t-10 justify-content-end">
                                <div class="d-flex m-r-20 m-l-10 hidden-md-down">


                                </div>
                                <div class="d-flex m-r-20 m-l-10 hidden-md-down">


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <a href="business-entity-form.php"><button class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to ad new" ><i class="ti-plus"></i></button></a>

                                    <div class="table-responsive">
                                            <table id="myTable-business" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th width="5%">No.</th>
                                                    <th width="10%">Code</th>
                                                    <th>Business Entity</th>
                                                    <th width="10%">Active?</th>
                                                    <th style="width: 120px !important;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>01</td>
                                                    <td>Sole Proprietor</td>
                                                    <td><span class="text-success"> Yes </span> </td>                                     
                                                    <td class="text-center">
                                                            <a href="business-entity-edit.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                            <button type="submit" class="btn btn-danger btn-sm btn-circle" alt="alert" id="sa-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"> <i class="ti-trash"></i></button>
                                                      
                                                    </td>
                                                </tr>
												<tr>
                                                    <td>2</td>
                                                    <td>02</td>
                                                    <td>Partnership</td>
                                                    <td><span class="text-success"> Yes </span> </td>                                     
                                                    <td class="text-center">
                                                            <a href="business-entity-edit.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                            <button type="submit" class="btn btn-danger btn-sm btn-circle" alt="alert" id="sa-warning" onclick="deleteData('data2');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"> <i class="ti-trash"></i></button>
                                                      
                                                    </td>
                                                </tr>
												<tr>
                                                    <td>3</td>
                                                    <td>03</td>
                                                    <td>Body Corporate</td>
                                                    <td><span class="text-success"> Yes </span> </td>                                     
                                                    <td class="text-center">
                                                            <a href="business-entity-edit.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                            <button type="submit" class="btn btn-danger btn-sm btn-circle" alt="alert" id="sa-warning" onclick="deleteData('data3');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"> <i class="ti-trash"></i></button>
                                                      
                                                    </td>
                                                </tr>
												<tr>
                                                    <td>4</td>
                                                    <td>04</td>
                                                    <td>Multi Disciplinary</td>
                                                    <td><span class="text-success"> Yes </span> </td>                                     
                                                    <td class="text-center">
                                                            <a href="business-entity-edit.php"><button type="submit" class="btn btn-info btn-sm btn-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                            <button type="submit" class="btn btn-danger btn-sm btn-circle" alt="alert" id="sa-warning" onclick="deleteData('data4');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"> <i class="ti-trash"></i></button>
                                                      
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal -->
                        </div>


                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include('footer.php');?>
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
                                                                        { "width": "15%", "targets": 4},
                                                                        { "orderable": false, "targets": 4}
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