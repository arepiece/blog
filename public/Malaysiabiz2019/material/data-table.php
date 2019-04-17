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
    <title>Dashboard</title>
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
<!--                        <li class="nav-item dropdown">
                            <a href="http://malaysiabizuiux.gates.edu.my/en" class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark">
                                <i class="ti-power-off"></i> Logout                                
                            </a>
                        </li>-->
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
                        <h3 class="text-themecolor">User Management</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">User Management</li>
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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">User Roles</h4>                                
                                        <div class="table-responsive m-t-40">
                                            <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="user-role">User Role:</label>
                                            <input type="text" class="form-control" value="Super Administrator" readonly>
                                            </div>
                                            </div>
        								<button type="button" class="btn btn-info btn-circle"><i class="ti-plus"></i> </button>
                                        <a href="../material/add-form.php" class="btn btn-warning btn-circle"><i class="ti-pencil"></i> </a>
                                        <button type="button" class="btn btn-danger btn-circle"><i class="ti-trash"></i> </button>
                                            <table id="myTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>URL</th>
                                                        <th class="text-center">Active</th>
                                                        <th>Show</th>
                                                        <th>C</th>
        												<th>R</th>
        												<th>U</th>
        												<th>D</th>
        												<th>V</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
        												<td>01</td>
                                                        <td>License Search</td>
                                                        <td>/pelesenan</td>
                                                        <td class="text-center"><span class="dot"></span></td>
                                                        <td>Yes</td>
                                                        <td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        																								
                                                    </tr>
                                                    <tr>
        												<td>02</td>
                                                        <td>MyDashboard</td>
                                                        <td>/main</td>
                                                        <td class="text-center"><span class="dot"></span></td>
                                                        <td>Yes</td>
                                                        <td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>                                                
                                                    </tr>
                                                    <tr>
        												<td>03</td>
                                                        <td>MyBusiness</td>
                                                        <td>/main/company</td>
                                                        <td class="text-center"><span class="dot"></span></td>
                                                        <td>Yes</td>
                                                        <td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>                                               
                                                    </tr>
                                                    <tr>
        												<td>04</td>
                                                        <td>MyTray</td>
                                                        <td>/main/mytray</td>
                                                        <td class="text-center"><span class="dot"></span></td>
                                                        <td>Yes</td>
                                                        <td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>                                                
                                                    </tr>
                                                    <tr>
        												<td>05</td>
                                                        <td>MyTracker</td>
                                                        <td>/main/tracker</td>
                                                        <td class="text-center"><span class="dot"></span></td>
                                                        <td>Yes</td>
                                                        <td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>                                               
                                                    </tr>
                                                    <tr>
        												<td>06</td>
                                                        <td>MyLicense</td>
                                                        <td>/main/registeredlicense</td>
                                                        <td class="text-center"><span class="dot"></span></td>
                                                        <td>Yes</td>
                                                        <td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>                                               
                                                    </tr>
                                                    <tr>
        												<td>07</td>
                                                        <td>FAQ</td>
                                                        <td>/faq</td>
                                                        <td class="text-center"><span class="dot"></span></td>
                                                        <td>No</td>
                                                        <td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>                                               
                                                    </tr>
                                                    <tr>
        												<td>08</td>
                                                        <td>Helpdesk</td>
                                                        <td>/helpdesk</td>
                                                        <td class="text-center"><span class="dotinactive"></span></td>
                                                        <td>Yes</td>
                                                        <td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>                                               
                                                    </tr><!--
                                                    <tr>
        												<td>09</td>
                                                        <td>Colleen Hurst</td>
                                                        <td>Javascript Developer</td>
                                                        <td class="text-center"><span class="dot"></span></td>
                                                        <td>Yes</td>
                                                        <td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>                                               
                                                    </tr>
                                                    <tr>
        												<td>10</td>
                                                        <td>Sonya Frost</td>
                                                        <td>Software Engineer</td>
                                                        <td class="text-center"><span class="dotinactive"></span></td>
                                                        <td>Yes</td>
                                                        <td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>                                               
                                                    </tr>
                                                    <tr>
        												<td>11</td>
                                                        <td>Jena Gaines</td>
                                                        <td>Office Manager</td>
                                                        <td class="text-center"><span class="dotinactive"></span></td>
                                                        <td>Yes</td>
                                                        <td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>                                               
                                                    </tr>
                                                    <tr>
        												<td>12</td>
                                                        <td>Quinn Flynn</td>
                                                        <td>Support Lead</td>
                                                        <td class="text-center"><span class="dot"></span></td>
                                                        <td>No</td>
                                                        <td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>                                                
                                                    </tr>
                                                    <tr>
        												<td>13</td>
                                                        <td>Charde Marshall</td>
                                                        <td>Regional Director</td>
                                                        <td class="text-center"><span class="dot"></span></td>
                                                        <td>No</td>
                                                        <td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>
        												<td><i class="ti-check text-success"></i></td>                                               
                                                    </tr>-->
                                                                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                        </div>
                    <div>
                </div>		
						
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2018 Material Pro Admin by wrappixel.com </footer>
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
	    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
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
    </script>
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