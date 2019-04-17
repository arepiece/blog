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
        <title>License Search Result Not Found</title>
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- chartist CSS -->
       <!--  <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
        <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
        <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> -->
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

       <!--  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/Chart.js"></script>
        <script type="text/javascript" src="js/script.js"></script> -->
        <!-- Footable CSS -->
        <link href="../assets/plugins/footable/css/footable.core.css" rel="stylesheet">
        <!-- You can change the theme colors from here -->
        <link href="css/colors/mybiz-default-color.css" id="theme" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body class="fix-header card-no-border logo-center">
         <?php include('preloader.php'); ?>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pagesclass="card".scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <?php include('portal-top-nav.php'); ?>
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">

                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->

                    <!-- Floating button -->
                 
                    <div class="row page-titles">
                        <div class="col-lg-12">
                               <a href="#" title="Dismissible popover">
                        <button type="button" class="btn waves-effect waves-light btn-md-6  btn-primary" style="position: fixed; z-index: 9999; right: 0;" data-toggle="modal" onclick="openMySelection()">MySelection (<span id="countMySelection"></span>) </button> 
                    </a>

                        </div>


                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="border-radius: 10px;">

								
                                <div class="box bg-light-info m-t-10 m-r-20 m-l-15 text-center" > <div class="round align-self-center round-success"><i class="ti-light-bulb"></i></div> Attention!<br> Based on the information  <div class="round align-self-center round-success"><i class="ti-info"></i></div> , you have to choose required license based on your business activity requirement.
                                    
                                </div>
								



                                <div class="row" >
                                    <div class="card-body" style="padding-bottom:0;padding-left: 2rem;padding-top: 2; ">
                                        <h3 class="m-b-0 m-t-0" style="font-size: 20px;" "line-height: 10px;" "padding-bottom: 10px;">Your search input is:</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="card-body" style="padding-bottom:0; padding-top:0; border-bottom: 1px solid rgba(120, 130, 140, 0.13);">

                                            <h3 style="font-size: 12px; font-weight: 600;">Address</h3>
                                            <p class="m-b-0">Batu Pahat/Batu Pahat, Johor</p>

                                            <h3 style="font-size: 12px; font-weight: 600;">Activity</h3>
                                            <p class="m-b-0">
                                                Wholesale of liquefied petroleum gas</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-body" style="padding-bottom:1;padding-left: 2rem;padding-top: 0;">
                                        <h3 class=" m-b-0 m-t-0" style="font-size: 20px;" "line-height: 10px;">Search Result :</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Perlesenan Persekutuan -->
                                    <div class="col-lg-6 col-md-10">
                                        <div class="card m-l-15 m-r-5 " style="border-radius: 10px;">
                                            <div class="card-body bg-info" style="border-radius: 10px 10px 0px 0px; padding-bottom:0">
                                                <h3 class="text-white card-title">List of Federal Licensing</h3>
                                                <!-- <h6 class="card-subtitle text-white m-b-0 op-5">Hasil carian</h6> --> </div>
                                           

										   <div class="card-body">
												<div class="row blank_page bounceIn animated">
							                        <div class="col-md-12 text-center">
							                            <img src="../assets/images/blank_page/search-no-result.png">
							                        </div>
							                    </div>
							                    <div class="row blank_page bounceIn animated">
							                        <div class="col-md-12 text-center">
							                           <h2 class="m-b-20"> 
							                            <small>Sorry, We couldn't find any matches for <br> <strong>"Petrol" </strong></small></h2>
							                        </div>
							                    </div>

											
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Perlesenan Persekutuan -->
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card m-r-20 m-l-5" style="border-radius: 10px; border-color: #B2EBF2;">
                                            <div class="card-body" style="border-radius: 10px 10px 0px 0px; padding-bottom:0; background: #00BCD4;">
                                                <h3 class="text-white card-title">List of State Licensing</h3>
                                                </div>
                                            <div class="card-body">           
							                    <div class="row blank_page bounceIn animated">
							                        <div class="col-md-12 text-center">
							                            <img src="../assets/images/blank_page/search-no-result.png">
							                        </div>
							                    </div>
							                    <div class="row">
							                        <div class="col-md-12 text-center">

							                            <h2 class="m-b-20"> 
							                            <small>Sorry, We couldn't find any matches for <br> <strong>"Petrol"</strong></small> </h2>
							                        </div>
							                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       

						
						<!-- modal info Lesen-->
                        <div class="modal fade bs-example-modal-lg" id="info-lesen" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;z-index: 9999;">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header" style="background:#222">
                                        <h4 class="modal-title" id="myLargeModalLabel" style="color:#ffff"><div class="round align-self-center round-success m-r-10"><i class="ti-info"></i></div> Licensing Information</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ffff;opacity: 1;">×</button>
                                    </div>
                                    <div class="modal-body" style="padding-top: 0">
									
									
                                    <div style="font-size: 12px">
									<table class="table color-table primary-table">
                                        
                                        <tbody>
                                           
											 <tr >
                                                <td ><b>Licensing</b></td>
                                                
                                                <td>Perakuan Bomba<br><br>
                                                </td>
												<td><div style="text-right;" class="printPage"><button type="button" class="btn btn-info btn-circle waves-effect text-right" data-dismiss="modal"><i class="ti-printer" onclick="window.print();"></i></button></div></td>
                                            </tr>
                                            <tr >
                                                <td ><b>Activity/Licensing Type</b></td>
                                                
                                                <td>Sijil Perakuan Bomba<br><br>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td ><b>Purpose/Description</b></td>
                                                
												<td>Untuk memastikan semua pepasangan keselamatan kebakaran berada dalam keadaan baik dan boleh berfungsi dengan baik.</td>
                                                <td><br><br>
                                                </td>
                                            </tr>
											<tr >
                                                <td ><b>Agency</b></td>
                                                
                                                <td>Jabatan Bomba & Penyelamat Malaysia, Kementerian Kesejahteraan Bandar, Perumahan Dan Kerajaan Tempatan<br><br>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td ><b>Address</b></td>
                                                
                                                <td>Jabatan Bomba & Penyelamat Malaysia<br>
												LEBUH WAWASAN, PRESINT 7,<br>
												62250 PUTRAJAYA.<br>
												<b>Tel :</b>0388927713<br>
												<b>Fax :</b>0388880025<br>
												Laman Sesawang :<br>
												<a href="http://www.bomba.gov.my" target="_blank">http://www.bomba.gov.my</a>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td ><b>Licensing Locations</b></td>
                                                
                                                <td>Jabatan Bomba dan Penyelamat Malaysia di peringkat Zon/Negeri<br><br>
                                                </td>
                                            </tr>
											  <tr >
                                                <td ><b>License Terms</b></td>
                                                
                                                <td>-<br><br>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td ><b>Fees / Licensing Validity Period</b></td>
                                                
                                                <td>No fee<br>
												<b>Tempoh Sah Laku :</b> Wajib diperbaharui setiap tahun<br>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td ><b>Acts & Regulations
												</b></td>
                                                
                                                <td>1. Undang-undang Kecil Bangunan Seragam 1984 2. Akta Perkhidmatan Bomba 1988 (Akta 341)<br><br>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td ><b>Application Methods</b></td>
                                                
                                                <td><a target="_blank" href="https://www.bless2.gov.my/index.php/login/">https://www.bless2.gov.my/index.php/login/</a>
                                                    <br><br>
                                                </td>
                                            </tr>
											<tr >
                                                <td ><b>Eligible Business Entities</b></td>
                                                
                                                <td>Semua jenis premis yang telah ditetapkan<br><br>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                               
                            </div>
                            
                        </div>
                    
                        <!-- ============================================================== -->
                        <!-- End PAge Content -->
                        <!-- ============================================================== -->
                    </div>
                    <div class="modal fade modal-list-myselection" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">MySelection</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="table-responsive">
                                        <table id="demo-foo-addrow" class="table table-hover">

                                            <tbody>


                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <td >
                                        <button type="button" class="btn btn-info waves-effect" onclick="goToNext()"> Go To MyTray</button>
                                    </td>
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Container fluid  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- footer -->
                    <!-- ============================================================== -->
                    <footer class="footer">
                        © 2018 Copyright Reserved by Government of Malaysia
                    </footer>
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
            <!-- Style switcher -->
            <!-- ============================================================== -->
            <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

            <!-- Footable -->
            <script src="../assets/plugins/footable/js/footable.all.min.js"></script>
            <script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
            <!--FooTable init-->
            <script src="js/footable-init.js"></script>
            <!-- ============================================================== -->
            <!-- Style switcher -->
            <!-- ============================================================== -->
            <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

            <script>

                                            $(document).ready(function () {
                                                $("#countMySelection").text($(".cls-row").length);
                                                $("#countMySelection").val($(".cls-row").length);

                                            });

                                            function deleteThis(classTrName) {
                                                $(".footable" + classTrName).remove();
                                                $("#countMySelection").text($(".cls-row").length);
                                                $("#countMySelection").val($(".cls-row").length);
                                                if ($(".cls-row").length == 0) {
                                                    $(".modal-list-myselection").modal('hide');
                                                }
                                                $("#Btn" + classTrName).show();
                                                $("#removeBtn" + classTrName).hide();
                                            }

                                            function addMySelection(rowCnt) {
                                                if ($("#textBtn" + rowCnt).hasClass('fa fa-minus')) {
                                                    deleteThis(rowCnt);
                                                    return;
                                                }

                                                var myModal = $("#targetModal" + rowCnt).val();

                                                var app = "<tr class='footable" + rowCnt + " cls-row' style='height: 40px;'>";
                                                app += "<td> <h4>" + $("#LesenName" + rowCnt).text() + "</h4>";
                                                app += "<small> " + $("#Agency" + rowCnt).text() + "</small></td><td>";
                                                app += "<button type='button' class='btn btn-sm btn-icon btn-pure btn-outline' data-toggle='tooltip' data-original-title='Delete' onclick='deleteThis(" + rowCnt + ")'><i class='ti-close' aria-hidden='true'></i></button></td></tr>";
                                                $("#demo-foo-addrow").append(app);
                                                $("#countMySelection").text($(".cls-row").length);
                                                $("#countMySelection").val($(".cls-row").length);

                                                $("#Btn" + rowCnt).hide();
                                                $("#removeBtn" + rowCnt).show();
                                            }

                                            function openMySelection() {
                                                if ($(".cls-row").length == 0) {
                                                    return;
                                                } else {
                                                    $(".modal-list-myselection").modal('show');
                                                }
                                            }

                                            function goToNext() {
                                                location.href = '/demo-gosg/index.html';
                                            }
            </script>
    </body>

</html>