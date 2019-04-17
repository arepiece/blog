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
        <title>Helpdesk</title>
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
                            <h3 class="text-themecolor">Helpdesk</h3>
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
               
				
				
				<!-- data table -->
				<div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                           
                            <div class="card-body">
                                 <div class="row">
                                        <div class="col-lg-12">
                                            <h3> You have <span class="text-info font-medium"> 1,236 </span> tickets</h3>
                                        </div>
                                    </div>
                                <div class="row m-t-10">
                                    <!-- Column -->
                                     <div class="col-lg-3 col-6">
                                        <div class="card">
                                            <div class="box text-center">
                                                <h1 class="font-light text-dark">155</h1>
                                                <td><span class="label label-rounded label-info">New Tickets</span> </td>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                     <div class="col-lg-3 col-6">
                                        <div class="card">
                                            <div class="box text-center">
                                                <h1 class="font-light text-dark">198</h1>
                                                <td><span class="label label-rounded label-warning">Pending</span> </td>
                                            </div>
                                        </div>
                                    </div>
                                     <!-- Column -->
                                    <div class="col-lg-3 col-6">
                                        <div class="card">
                                            <div class="box text-center">
                                                <h1 class="font-light text-dark">233</h1>
                                                <td><span class="label label-rounded label-success">Resolved</span> </td>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-lg-3 col-6">
                                        <div class="card">
                                            <div class="box text-center">
                                                <h1 class="font-light text-dark">415</h1>
                                                <td><span class="label label-rounded label-primary">Closed</span> </td>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                </div>
                                <div class="row m-b-10">
                                    <div class="col-md-9 col-12">
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div>                                           
                                            <div class="input-group-prepend">                                                
                                            <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                <option value="">Select Category</option>
                                                 <option value="">BLESS1.0</option>
                                                <option value="Category 1">BLESS2.0</option>
                                                <option value="Category 2">MBPP</option>                                                        
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                            
										<div class="table-responsive">	
											<table id="myTable-business" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                               <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Email</th>
                                                <th>Name</th>
                                                <th>Phone No.</th>
                                                <th>Subject</th>
                                                <th>Category </th>
                                                <th>Status</th>
                                                <th>Datetime</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1011</td>
                                                <td>genelia@gmail.com</td>
                                                <td>Johnathon</td>
												<td>014-1234567</td>
												<td>Ingin memulakan perniagaan</td>
                                                <td>MAMPU </td>
                                                <td><span class="label label-rounded label-info">New</span> </td>
                                                <td>14-10-2017<br>01:03:10</td>
                                                <td class="text-center">
                                                    <a href="admin-helpdesk-view.php"><button type="button" class="btn btn-info waves-effect-light btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1224</td>
                                                <td>ritesh@gmail.com</td>
												<td>Ritesh</td>
												<td>014-8308943</td>
                                                <td>Apakah yang saya perlu lakukan untuk memulakan perniagaan?</td>
                                                <td>MAMPU </td>
                                                <td><span class="label label-rounded label-primary">Closed</span> </td>
                                                <td>13-10-2017<br>01:03:10</td>
                                                <td class="text-center">
                                                     <a href="admin-helpdesk-view.php"><button type="button" class="btn btn-info waves-effect-light btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1024</td>
                                                <td>govinda@gmail.com</td>
												<td>Govinda</td>
												<td>014-8308674</td>
                                                <td>Bagaimanakah Portal MalaysiaBiz boleh membantu saya untuk memulakan perniagaan?</td>
                                                <td>BLESS1.0 </td>
                                                <td><span class="label label-rounded label-success">Resolved</span> </td>
                                                <td>13-10-2017<br>01:02:10</td>
                                                <td class="text-center">
                                                    <a href="admin-helpdesk-view.php"><button type="button" class="btn btn-info waves-effect-light btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2124</td>
                                                <td>bahubali@gmail.com</td>
												<td>Baharuddin</td>
												<td>014-1233267</td>
                                                <td>How this will connect with bahubali</td>
                                                <td>MAMPU </td>
                                                <td><span class="label label-rounded label-warning">Pending</span> </td>
                                                <td>12-10-2017<br>01:03:10</td>
                                                <td class="text-center">
                                                     <a href="admin-helpdesk-view.php"><button type="button" class="btn btn-info waves-effect-light btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                </td>
                                            </tr>
                                           <tr>
                                                <td>3124</td>
                                                <td>ranabati@gmail.com</td>
												<td>Ranimah Bt Hashim</td>
												<td>014-12333123</td>
                                                <td>How to set navigation</td>
                                                <td>BLESS2.0 </td>
                                                <td><span class="label label-rounded label-primary">Closed</span> </td>
                                                <td>12-10-2017<br>01:03:10</td>
                                                <td class="text-center">
                                                    <a href="admin-helpdesk-view.php"><button type="button" class="btn btn-info waves-effect-light btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1611</td>
                                                <td>genelia@gmail.com</td>
												<td>Alia Bt Abd Ghani</td>
												<td>014-9833123</td>
                                                <td>How to customize the template?</td>
                                                <td>MAMPU </td>
                                                <td><span class="label label-rounded label-info">New</span> </td>
                                                <td>14-10-2017<br>01:03:10</td>
                                                <td class="text-center">
                                                     <a href="admin-helpdesk-view.php"><button type="button" class="btn btn-info waves-effect-light btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4224</td>
                                                <td>mail93@gmail.com</td>
												<td>Ismail Bin Lamli</td>
												<td>012-7005420</td>
                                                <td>How to change colors</td>
                                                <td>MAMPU </td>
                                                <td><span class="label label-rounded label-success">Resolved</span> </td>
                                                <td>13-10-2017<br>01:03:10</td>
                                                <td class="text-center">
                                                     <a href="admin-helpdesk-view.php"><button type="button" class="btn btn-info waves-effect-light btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                </td>
                                            </tr>
                                          
                                            <tr>
                                                <td>1011</td>
                                                <td>genelia@gmail.com</td>
												<td>Abd Rahman Bin Awang</td>
												<td>012-7003421</td>
                                                <td>How to customize the template?</td>
                                                <td>MAMPU </td>
                                                <td><span class="label label-rounded label-info">New</span> </td>
                                                <td>14-10-2017<br>01:03:10</td>
                                                <td class="text-center">
                                                    <a href="admin-helpdesk-view.php"><button type="button" class="btn btn-info waves-effect-light btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1224</td>
                                                <td>ritesh@gmail.com</td>
												<td>Umar Khidir</td>
												<td>012-7653421</td>
                                                <td>How to change colors</td>
                                                <td>MBPP </td>
                                                <td><span class="label label-rounded label-primary">Closed</span> </td>
                                                <td>13-10-2017<br>01:03:10</td>
                                               <td class="text-center">
                                                  <a href="admin-helpdesk-view.php"><button type="button" class="btn btn-info waves-effect-light btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8024</td>
                                                <td>govinda@gmail.com</td>
												<td>Johnny</td>
												<td>012-7653421</td>
                                                <td>How to set Horizontal nav</td>
                                                <td>MBPP </td>
                                                <td><span class="label label-rounded label-primary">Closed</span> </td>
                                                <td>13-10-2017<br>01:03:10</td>
                                               <td class="text-center">
                                                 <a href="admin-helpdesk-view.php"><button type="button" class="btn btn-info waves-effect-light btn-circle btn-sm"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5124</td>
                                                <td>bahubali@gmail.com</td>
												<td>Faiz Mansor</td>
												<td>012-7653421</td>
                                                <td>How this will connect with bahubali</td>
                                                <td>MAMPU </td>
                                                <td><span class="label label-rounded label-warning">Pending</span> </td>
                                                <td>12-10-2017<br>01:03:10</td>
                                                <td class="text-center">
                                                   <a href="admin-helpdesk-view.php"><button type="button" class="btn btn-info waves-effect-light btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3144</td>
                                                <td>ranabati@gmail.com</td>
												<td>Faiz Mansor</td>
												<td>012-7653421</td>
                                                <td>How to set navigation</td>
                                                <td>MAMPU </td>
                                                <td><span class="label label-rounded label-primary">Closed</span> </td>
                                                <td>12-10-2017<br>01:03:10</td>
                                              <td class="text-center">
                                                  <a href="admin-helpdesk-view.php"><button type="button" class="btn btn-info waves-effect-light btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to edit"><i class="ti-pencil-alt"></i></button></a>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                           
                                            </tr>
                                        </tfoot>
                                            </table>
										</div>
                                </div>
                            </div>
                        </div>
                    <div>
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
    
	
	var table = $('#myTable-business').DataTable( {  
		"drawCallback": function( settings ) {

			$('[data-toggle="tooltip"]').tooltip();;

			// add as many tooltips you want

		},
	});
	
	
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

       //column setting
    $('#myTable').dataTable( {
          "columnDefs": [
            { "width": "10%", "targets": 8},
            { "orderable": false, "targets":8}
          ]
        } );

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