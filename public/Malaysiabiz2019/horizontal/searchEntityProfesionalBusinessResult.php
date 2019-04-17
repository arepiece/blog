    <?php
    extract($_REQUEST);
    error_reporting(0);
    if (!isset($entity)) {
        echo "<script>location.href='searchEntityProfesionalBusinessResult.php?entity=0';</script>";
    }
    ?>
    <?php
    $qualificationName = "";
    $serviceName = "";
    $entityName = "";

    if (isset($qualification)) {
        if ($qualification == 1) {
            $qualificationName = "Registered Appraisers (A)";
        } else if ($qualification == 2) {
            $qualificationName = "Registered Estate Agents (E)";
        } else if ($qualification == 3) {
            $qualificationName = "Registered Property Management";
        } else if ($qualification == 4) {
            $qualificationName = "Consulting QS";
        } else if ($qualification == 5) {
            $qualificationName = "Interior Designer";
        } else if ($qualification == 6) {
            $qualificationName = "Arkitek";
        } else if ($qualification == 7) {
            $qualificationName = "Juruukur Tanah Berlesen";
        } else if ($qualification == 8) {
            $qualificationName = "Engineering Consultancy Practise";
        } else if ($qualification == 9) {
            $qualificationName = "Practising Certificate";
        }
    } 

    if (isset($service)) {
        if ($service == 1) {
            $serviceName = "Property Management Consultancy Valuation";
        } else if ($service == 2) {
            $serviceName = "Property Management Valuation";
        } else if ($service == 3) {
            $serviceName = "Business Property - Buying, Selling and leasing property";
        } else if ($service == 4) {
            $serviceName = "Property Investment";
        } else if ($service == 5) {
            $serviceName = "Consulting QS";
        } else if ($service == 6) {
            $serviceName = "Interior design";
        } else if ($service == 7) {
            $serviceName = "Architectural";
        } else if ($service == 8) {
            $serviceName = "Ukur hakmilik";
        } else if ($service == 9) {
            $serviceName = "Ukur kejuruteraan";
        } else if ($service == 10) {
            $serviceName = "Ukur topografi";
        } else if ($service == 11) {
            $serviceName = "Pengukuran lain";
        } else if ($service == 12) {
            $serviceName = "Consultancy";
        } else if ($service == 13) {
            $serviceName = "Engineering services";
        } else if ($service == 14) {
            $serviceName = "Audit Services";
        } else if ($service == 15) {
            $serviceName = "Non Audit Services";
        }
    }

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
                       <br>
                        <button type="button" class="btn waves-effect waves-light btn-md-6  btn-primary" style="position: fixed; z-index: 9999; right: 0;" data-toggle="modal" onclick="openMySelection()">MySelection (<span id="countMySelection"></span>) </button> 
                    </a>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="border-radius: 10px;">

								<div class="box bg-light-info m-t-10 m-r-20 m-l-15 text-center" > <div class="round align-self-center round-success"><i class="ti-light-bulb"></i></div> Attention!<br> Based on the information  <div class="round align-self-center round-success"><i class="ti-info"></i></div> , you have to choose required business registration based on your services field requirement.
                                    
                                </div>

                                 <div class="row" >
                                    <div class="card-body" style="padding-bottom:0;padding-left: 2rem;padding-top: 2; ">
                                        <h3 class="m-b-0 m-t-0" style="font-size: 20px;" "line-height: 10px;" "padding-bottom: 10px;">Your search input is:</h3>
                                    </div>
                                </div>
								
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="card-body" style="padding-bottom:0; padding-top:0; border-bottom: 1px solid rgba(120, 130, 140, 0.13);">
											
											<h3 style="font-size: 12px; font-weight: 500; margin-bottom:0">Business category</h3>
                                            <p class="card-subtitle " style="Padding-left:0">Professional Entity</p>
											
											<h3 style="font-size: 12px; font-weight: 500; margin-bottom:0">Agency</h3>
                                            <p class="card-subtitle" style="Padding-left:0">Lembaga Arkitek Malaysia (LAM)</p>

                                            <h3 style="font-size: 12px; font-weight: 500; margin-bottom:0">Service field</h3>
                                            <p class="card-subtitle" style="Padding-left:0">Interior Design</p>

                                            <h3 style="font-size: 12px; font-weight: 500; margin-bottom:0">Business type</h3>
                                            <p class="card-subtitle" style="Padding-left:0">Partnership</p>
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
                                    <div class="col-12">
                                        <div class="card m-l-15 m-r-15" style="border-radius: 10px;">
                                            <div class="card-body bg-info" style="border-radius: 10px 10px 0px 0px; padding-bottom:0">
                                                <h3 class="text-white card-title">List of Business Registration</h3>
                                                <!-- <h6 class="card-subtitle text-white m-b-0 op-5">Hasil carian</h6> --> </div>
                                            <div class="card-body">
                                                <div class="message-box contact-box">
                                                    <!--   <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2> -->
                                                    <div class="message-widget contact-widget">

                                                        <!-- LJBM -->
                                      <!--    <div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													<input type="hidden" id="licenseId_0" >
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b" id="LesenName1">Consulting Quantity Surveyor Practice</h5>
													</div>
													<div class="col-md-3 col-3 text-right">
													<button type="button" class="btn btn-info waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen"><i class="ti-info"></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Profession required : Consultant Quantity Surveyor</h6>
													
													</div>
													
													<div class="col-md-4 col-4 align-self-center">
													<h6 ><a href="https://www.bqsm.gov.my/index.php/en/" class="link" target="_blank" style="padding-left: 0; color:#1e88e5; background-color:#ffff;" id="Agency1">Lembaga Juruukur Bahan Malaysia (LJBM)</a></h6>
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

                                                  <div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													<input type="hidden" id="licenseId_0" >
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b; padding-top: 2rem;" id="LesenName2"> Individual Registration</h5>
													</div>
													<div class="col-md-3 col-3 text-right" style="padding-top: 2rem">
													<button type="button" class="btn btn-info waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen"><i class="ti-info"></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Profession required : Graduate Quantity Surveyor</h6>
													
													</div>
													<div class="col-md-4 col-4 align-self-center">
													<h6 ><a href="https://www.bqsm.gov.my/index.php/en/" class="link" target="_blank" style="padding-left: 0; color:#1e88e5; background-color:#ffff;" id="Agency1">Lembaga Juruukur Bahan Malaysia (LJBM)</a></h6>
													</div>
													<div class="col-md-8 col-8 text-right">
													<p class="text-right"> <a href="https://www.bqsm.gov.my/index.php/en/" target="_blank" style="background-color: #ffff;"> <button type="button" class="btn btn-info btn-sm" ><i class="fa fa-link"></i> Link to Agency</button></a></p>
													
													</div>
													
													
											</div>
											<!-- urusan LJTM -->
										<!--	<div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													<input type="hidden" id="licenseId_0" >
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b" id="LesenName1">Land Surveyor Practice</h5>
													</div>
													<div class="col-md-3 col-3 text-right">
													<button type="button" class="btn btn-info waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen"><i class="ti-info"></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Profession required : Licensed Land Surveyor</h6>
													
													</div>
													
													<div class="col-md-4 col-4 align-self-center">
													<h6 ><a href="http://www.ljt.org.my/" class="link" target="_blank" style="padding-left: 0; color:#1e88e5; background-color:#ffff;" id="Agency1">Lembaga Juruukur Tanah Malaysia (LJTM)</a></h6>
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
													
													
											</div> -->
											
											<!-- <div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													<input type="hidden" id="licenseId_0" >
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b; padding-top: 2rem;" id="LesenName2"> Professional Land Surveyor</h5>
													</div>
													<div class="col-md-3 col-3 text-right" style="padding-top: 2rem">
													<button type="button" class="btn btn-info waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen"><i class="ti-info"></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Profession required : Graduate Land Surveyor</h6>
													
													</div>
													<div class="col-md-4 col-4 align-self-center">
													<h6 ><a href="http://www.ljt.org.my/" class="link" target="_blank" style="padding-left: 0; color:#1e88e5; background-color:#ffff;" id="Agency1">Lembaga Juruukur Tanah Malaysia (LJTM)</a></h6>
													</div>
													<div class="col-md-8 col-8 text-right">
													<p class="text-right"> <a href="http://www.ljt.org.my/" target="_blank" style="background-color: #ffff;"> <button type="button" class="btn btn-info btn-sm" ><i class="fa fa-link"></i> Link to Agency</button></a></p>
													
													</div>
													
													
											</div> -->
											
											 <!-- LAM -->
                                          <div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													<input type="hidden" id="licenseId_0" >
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b" id="LesenName1">Interior Design</h5>
													</div>
													<div class="col-md-3 col-3 text-right">
													<button type="button" class="btn btn-info waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen"><i class="ti-info"></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Profession required : Interior Design</h6>
													
													</div>
													
													<div class="col-md-4 col-4 align-self-center">
													<h6 ><a href="https://www.lam.gov.my/" class="link" target="_blank" style="padding-left: 0; color:#1e88e5; background-color:#ffff;" id="Agency1">Lembaga Arkitek Malaysia (LAM)</a></h6>
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

                                            <div class="row" style="border-bottom: 1px solid rgba(120, 130, 140, 0.13); text-align justify;">
													<input type="hidden" id="licenseId_0" >
													<div class="col-md-9 col-9 align-self-center">
													<h5 class="title" style="b; padding-top: 2rem;" id="LesenName2"> Architectural</h5>
													</div>
													<div class="col-md-3 col-3 text-right" style="padding-top: 2rem">
													<button type="button" class="btn btn-info waves-effect-light btn-circle btn-info btn-sm" data-toggle="modal" data-target="#info-lesen"><i class="ti-info"></i></button> </div>
													<div class="col-md-12 align-self-center">
													<h6 style="color:#757575">Profession required : Architects</h6>
													
													</div>
													<div class="col-md-4 col-4 align-self-center">
													<h6 ><a href="https://www.lam.gov.my/" class="link" target="_blank" style="padding-left: 0; color:#1e88e5; background-color:#ffff;" id="Agency1">Lembaga Arkitek Malaysia(LAM)</a></h6>
													</div>
													<div class="col-md-8 col-8 text-right">
													<p class="text-right"> <a href="https://www.lam.gov.my/" target="_blank" style="background-color: #ffff;"> <button type="button" class="btn btn-info btn-sm" ><i class="fa fa-link"></i> Link to Agency</button></a></p>
													
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
                        <!-- modal info lesen-->

                        <!-- /.modal -->	

                        
                        <!-- modal info Lesen-->
                        <div class="modal fade bs-example-modal-lg" id="info-lesen" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;z-index: 9999;">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header" style="background:#222">
                                        <h4 class="modal-title" id="myLargeModalLabel" style="color:#ffff"><div class="round align-self-center round-success m-r-10"><i class="ti-info"></i></div> Business Information</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ffff;opacity: 1;">×</button>
                                    </div>
                                    <div class="modal-body" style="padding-top: 0">
									
									
                                    <div style="font-size: 12px">
									<table class="table color-table primary-table">
                                        
                                        <tbody>
                                           
											 <tr >
                                                <td ><b>Agency Name</b></td>
                                                
                                                <td>Lembaga Juruukur Bahan Malaysia (LJBM)<br><br>
                                                </td>
												<td><div style="text-right;" class="printPage"><button type="button" class="btn btn-info btn-circle waves-effect text-right" data-dismiss="modal"><i class="ti-printer" onclick="window.print();"></i></button></div></td>
                                            </tr>
                                            <tr >
                                                <td ><b>Profession</b></td>
                                                
                                                <td>License Land Surveyor<br><br>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td ><b>Survice Field</b></td>
                                                
												<td>Consulting QS</td>
                                                <td><br><br>
                                                </td>
                                            </tr>
											<tr >
                                                <td ><b>Business Entity</b></td>
                                                
                                                <td>Partnership<br><br>
                                                </td>
                                            </tr>
                                           <!-- <tr >
                                                <td ><b>Address</b></td>
                                                
                                                <td>Jabatan Bomba & Penyelamat Malaysia<br>
												LEBUH WAWASAN, PRESINT 7,<br>
												62250 PUTRAJAYA.<br>
												<b>Tel :</b>0388927713<br>
												<b>Fax :</b>0388880025<br>
												Laman Sesawang :<br>
												<a href="http://www.bomba.gov.my" target="_blank">http://www.bomba.gov.my</a>
                                                </td>
                                            </tr> -->
                                            <tr >
                                                <td ><b>Registration Type</b></td>
                                                
                                                <td>Baru<br><br>
                                                </td>
                                            </tr>
											  <tr >
                                                <td ><b>Activity Description</b></td>
                                                
                                                <td>Aktiviti untuk menjalankan perniagaan yang berasaskan aktiviti berkaitan arkitek dan seni bina dalaman kebenaran untuk entiti perniagaan menjalankan aktiviti yang berkaitan arkitek dan seni bina dalaman<br><br>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td ><b>Address
												</b></td>
                                                
                                                <td>Tingkat 17, Block F, <br>
													Ibu Pejabat JKR, Jalan Sultan Salahuddin, <br>
													50582 Kuala Lumpur, Malaysia<br><br>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td ><b>Rules</b></td>
                                                
                                                <td>Profesional Arkitek <br>
													Jam Perkhidmatan melebihi 40 Jam <br>
													Sudah bekerja lebih daripada 5 tahun <br>
                                                    <br><br>
                                                </td>
                                            </tr>
											<tr >
                                                <td ><b>Fee</b></td>
                                                
                                                <td>Bayaran Pendaftaran RM 400.00 <br>
													Bayaran Pengurusan RM 50.00<br><br>
                                                </td>
                                            </tr>
											<tr >
                                                <td ><b>Validity Period</b></td>
                                                
                                                <td>Setahun Sahaja<br><br>
                                                </td>
                                            </tr>
											<tr >
                                                <td ><b>Acts & Regulations</b></td>
                                                
                                                <td>The Architects Act 1967 <br>
													Act 117 And Architects Rules 1996<br><br>
                                                </td>
                                            </tr>
											<tr >
                                                <td ><b>Online Service URL</b></td>
                                                
                                                <td><a href="https://www.bqsm.gov.my/" target="_blank">https://www.bqsm.gov.my/</a><br><br>
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
                                                app += "<td><a href='result-header' data-toggle='modal' data-target='" + myModal + "' style='padding:0;'>  <p style=' color:#455a64;height: 15px'>" + $("#LesenName" + rowCnt).text() + "</p> </a><br>";
                                                app += "<p class='card-subtitle m-b-0' style='color:#1e88e5;  font-weight: 100; padding-left:0'> " + $("#Agency" + rowCnt).text() + "</p></td><td>";
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
			<script>
		$(function() { 

			$('#search-luqman').on('click', function(event) {
				event.preventDefault();
				$('#search-bar .input-group > input').val('');
				$('#search-bar').toggleClass('open');
				$('a[href="#toggle-search"]').closest('li').toggleClass('active');

				if ($('#search-bar').hasClass('open')) {
					/* I think .focus dosen't like css animations, set timeout to make sure input gets focus */
					setTimeout(function() { 
						$('#search-bar .form-control').focus();
					}, 100);
				}			
			});

			$(document).on('keyup', function(event) {
				if (event.which == 27 && $('#search-bar').hasClass('open')) {
					$('a[href="#toggle-search"]').trigger('click');
				}
			});
			
		});
		</script>
    </body>

</html>