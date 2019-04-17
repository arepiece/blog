    <?php
    extract($_REQUEST);
    error_reporting(0);
    if (!isset($entity)) {
        echo "<script>location.href='searchEntityBusinessResult.php?entity=0';</script>";
    }
    ?>
    <?php
    $entityName = "";
    if (isset($entity)) {
        if ($entity == 1) {
            $entityName = "Sole proprietorship";
        } else if ($entity == 2) {
            $entityName = "Partnership";
        } else if ($entity == 3) {
            $entityName = "Company";
        } else if ($entity == 4) {
            $entityName = "Limited liability partnership";
        } else if ($entity == 5) {
            $entityName = "Cooperative";
        }
    }
    ?>
                    <?php include('base-portal.php'); ?> 
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
							
								<div class="box bg-light-info m-t-10 m-r-20 m-l-15 text-center" > <div class="round align-self-center round-success"><i class="ti-light-bulb"></i></div> Attention!<br> Based on the information  <div class="round align-self-center round-success"><i class="ti-info"></i></div> , you have to choose required business registration based on your services field requirement.
                                    
                                </div>

                                <div class="row">
                                    <div class="card-body" style="padding-bottom:2 rem;padding-left: 2rem; padding-top: 2;">
                                        <h3 class=" m-b-0 m-t-0" style="font-size: 20px;" "line-height: 10px;">Search Result : Partnership</h3>
                                    </div>
                                </div>
								
								
								
                                <div class="row">
                                    <!-- Perlesenan Persekutuan -->
                                    <div class="col-12">
                                        <div class="card m-l-15 m-r-15" style="border-radius: 10px;">
                                            <div class="card-body bg-info" style="border-radius: 10px 10px 0px 0px; padding-bottom:0">
                                                <h3 class="text-white card-title">List of Business Registration</h3>
                                                 </div>
                                            <div class="card-body">
                                                <div class="message-box contact-box">
                                                    
                                                    <div class="message-widget contact-widget">

                                                        <!-- Message -->
                                             <div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b" id="LesenName1">Registration of Company (ROC)</h5>
													</div>
													<div class="col-md-3 col-3 text-right">
													<button type="button" class="btn btn-info waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen"><i class="ti-info"></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Wajib syarikat-syarikat yang menjalankan perniagaan francais ...</h6>
													</div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Sole proprietorship</h6>
													</div>
													<div class="col-md-4 col-4 align-self-center">
													<h6 ><a href="http://www.ssm.com.my/Pages/Home.aspx" class="link" style="padding-left: 0; color:#1e88e5; background-color:#ffff;" id="Agency1">Suruhanjaya Syarikat Malaysia (SSM)</a></h6>
													</div>
													<div class="col-md-8 col-8 text-right">
													<p class="text-right">
                                                     <button id="Btn1" type="button" class="btn btn-action btn-info btn-sm" onclick="addMySelection('1')">
                                                     <span id="textBtn1" ><i class="fa fa-plus"></i> Add to MySelection
                                                      </span></button>
                                                      <button id="removeBtn1" type="button" style="display:none; color: #FAFAFA; background-color: #616161;" class="btn btn-action btn-sm" onclick="deleteThis('1')">
                                                      <span id="textBtn1" ><i class="fa fa-minus"></i> Remove from MySelection
                                                      </span></button>
                                                     </p>
													
													</div>
													
													
											</div>

                                                        <!-- Message -->
                                                  <div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													<input type="hidden" id="licenseId_0" >
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b; padding-top: 2rem;" id="LesenName2">Permohonan Untuk Menubuhkan Koperasi</h5>
													</div>
													<div class="col-md-3 col-3 text-right" style="padding-top: 2rem">
													<button type="button" class="btn btn-info waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen"><i class="ti-info"></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Wajib syarikat-syarikat yang menjalankan perniagaan francais ...</h6>
													</div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Sole proprietorship</h6>
													</div>
													<div class="col-md-4 col-4 align-self-center">
													<h6 ><a href="https://www.skm.gov.my/index.php/my/" class="link" style="padding-left: 0;color:#1e88e5; background-color:#ffff;" id="Agency2">Suruhanjaya Koperasi Malaysia (SKM)</a></h6>
													</div>
													<div class="col-md-8 col-8 text-right">
													<p class="text-right">
                                                     <button id="Btn2" type="button" class="btn btn-action btn-info btn-sm " onclick="addMySelection('2')">
                                                     <span id="textBtn2" ><i class="fa fa-plus"></i> Add to MySelection
                                                      </span></button>
                                                      <button id="removeBtn2" type="button" style="display:none; color: #FAFAFA; background-color: #616161;" class="btn btn-action btn-outline-secondary btn-sm" onclick="deleteThis('2')">
                                                      <span id="textBtn1" ><i class="fa fa-minus"></i> Remove from MySelection
                                                      </span></button>
                                                     </p>
													
													</div>
													
													
											</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                       

                        <!-- /.modal -->	

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

                        
                        
                        <!-- /.modal -->
                        <!-- sample modal content -->
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
                                 <div class="modal-body" style="padding-top: 0">
                                    <div class="table-responsive">
                                        <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list">

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
                                                app += "<td> <p style=' color:#455a64;height: 5px'>" + $("#LesenName" + rowCnt).text() + "</p> <br>";
                                                app += "<p class='card-subtitle m-b-0' style='color:#1e88e5; font-size: 12px; font-weight: 100'> " + $("#Agency" + rowCnt).text() + "</p></td><td>";
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
                                                location.href = '/Malaysiabiz2019/horizontal/MyTray.php?agency_name=0';
                                            }
            </script>
    </body>

</html>