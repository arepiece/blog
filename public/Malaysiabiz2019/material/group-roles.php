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
        <title>Group & Roles</title>
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
                            <h3 class="text-themecolor">Group & Roles</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item "><a href="../material/list-menu.html">User Management</a></li>

                            </ol>
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
                                   <a href="../material/group-form.php" class="btn btn-info btn-circle btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to add new"><i class="ti-plus"></i></a>
                                    <div class="table-responsive">
                                        <table id="myTable-business" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>													
													<th>Group</th>
                                                    <th>Active</th>
                                                    <th style="width: 120px !important;">Action</th>

                                                </tr>
                                            </thead>
                                            <tfoot>

                                            </tfoot>
                                            <tbody>
                                                <tr> 
                                                    <td>01</td>
													<td>Super Administrator</td>
                                                    <td class="text-center"><i class="ti-check text-success"></td>													
                                                    <td class="text-center">
                                                        <a href="../material/group-edit.php" class="btn btn-info btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt" ></i></a>
                                                        <button class="btn btn-danger btn-circle btn-sm" alt="alert"  id="sa-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"><i class="ti-trash"></i></button>
                                                    </td>                                                    
                                                </tr>
                                                <tr>                                                    
                                                    <td>02</td>
													<td>Portal Administrator</td>
                                                    <td class="text-center"><i class="ti-close text-danger"></td>
                                                    <td class="text-center">
                                                        <a href="../material/group-edit.php" class="btn btn-info btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt" ></i></a>
                                                        <button class="btn btn-danger btn-circle btn-sm" alt="alert"  id="sa-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"><i class="ti-trash"></i></button>
                                                    </td>                                                    
                                                </tr>
                                                <tr>                                                    
                                                    <td>03</td>
													<td>Agency Administrator</td>                                                   
                                                    <td class="text-center"><i class="ti-close text-danger"></td>
                                                    <td class="text-center">
                                                        <a href="../material/group-edit.php" class="btn btn-info btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt" ></i></a>
                                                        <button class="btn btn-danger btn-circle btn-sm" alt="alert"  id="sa-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"><i class="ti-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>                                                    
                                                    <td>04</td>
													<td>Executive User</td>                                                   
                                                    <td class="text-center"><i class="ti-close text-danger"></td>
                                                    <td class="text-center">
                                                        <a href="../material/group-edit.php" class="btn btn-info btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt" ></i></a>
                                                        <button class="btn btn-danger btn-circle btn-sm" alt="alert"  id="sa-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"><i class="ti-trash"></i></button>
                                                    </td>                                                    
                                                </tr>
                                                <tr>                                                    
                                                    <td>05</td>
													<td>Registered User</td>                                                    
                                                    <td class="text-center"><i class="ti-close text-danger"></td>
                                                    <td class="text-center">
                                                        <a href="../material/group-edit.php" class="btn btn-info btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt" ></i></a>
                                                        <button class="btn btn-danger btn-circle btn-sm" alt="alert"  id="sa-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to remove"><i class="ti-trash"></i></button>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel1">Edit User</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="user" class="control-label">User Group:</label>
                                                    <input type="text" class="form-control" id="user" value="Super Administrator">
                                                </div>

                                                <div class="form-group"><div class="col-md-3">
                                                        <!--                                                        <label for="active" class="control-label">Active:</label>-->
                                                        <input type="checkbox" class="filled-in chk-col-blue-grey" id="active" checked>
                                                        <label for="active" class="control-label">Active</label>
                                                    </div>

                                                </div>

                                            </form>
                                        </div>
                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-info">Save</button>
                                            <button type="button" class="btn btn-googleplus" data-dismiss="modal">Close</button>
                                        </div>
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
    <!-- This is data table -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--         start - This is for export functionality only 
            <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
            <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
            <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>-->
    <!-- end - This is for export functionality only -->
    <!-- Sweet-Alert  -->
    <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="../assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
    <script>
var table = $('#myTable-business').DataTable( {  
		"drawCallback": function( settings ) {

			$('[data-toggle="tooltip"]').tooltip();;

			// add as many tooltips you want

		},
	});          


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
                        { "width": "15%", "targets": [2,3]},
                        { "orderable": false, "targets": [2,3] }
                      ]
                    } );
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });



// Listen for click on toggle checkbox
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