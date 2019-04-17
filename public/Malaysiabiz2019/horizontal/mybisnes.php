<?php
extract($_REQUEST);
//error_reporting(0);
include ('../../Connection/pg_connection.php');
if (!isset($agency_name)) {
    echo "<script>location.href = 'mybisnes.php?agency_name=0';</script>";
}
?>

<?php $page = 'mybisnes';include 'base.php'; ?>

<div class="row page-titles">
    <div class="col-lg-12"></div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- start display licence -->
<div id="accordion1" role="tablist" aria-multiselectable="true">
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true"
                    aria-controls="collapseOne">

                    <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Click to expand this panel or click again to close this panel">Business
                        Entity / Professional Entity</span>
                </a>
            </h5>
        </div>
        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                <div class="row page-titles">
                    <div class="col-lg-12">
                        <div class="row m-t-10">




                        </div>
                    </div>
<<<<<<< HEAD
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                        <!-- start display licence -->
		<div id="accordion1" role="tablist" aria-multiselectable="true">
		<div class="card m-b-0">
			<div class="card-header" role="tab" id="headingOne1">
				<h5 class="mb-0">
					<a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">

						<span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Click to expand this panel or click again to close this panel">Business Entity / Professional Entity adasdsadasdasdsadas</span>
					</a>
				</h5>
			</div>
			<div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1">
				<div class="card-body">
					<div class="row page-titles">
						<div class="col-lg-12">
							<div class="row m-t-10">
								
								
								
								
							</div>
						</div>
					</div>
						
						
						<!-- LAM -->
						<!--   <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8 col-6">  
                                             <p class="label label-light-info font-bold m-b-0"><i class="ti-file"></i> 2018-18-000342</p>												
                                                     <h3 class="box-title">1. &nbsp <i class="far fa-id-card m-r-10"></i>DESIGN COLLECTIVE ARCHITECTS</h3>
                                                </div>
                                                <div class="col-md-4 col-6">
                                                    <div class="pull-right">                                                       
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Click to open menu">Action</span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right" id="jenisTindakan" name="jenisTindakan">
                                                                <a href="view-corporate-info.php"class="dropdown-item reg-top-nav-link">View Details</a>
                                                                <a href="view-shareholder.php" class="dropdown-item reg-top-nav-link">View Owner </a>
																<a href="view-branch.php" class="dropdown-item reg-top-nav-link">View Branch</a>
																<a class="dropdown-item reg-top-nav-link" data-toggle="modal" data-target="#newLAM">Renewal</a>
                                                            </div>
                                                        </div>
                                                    </div>                                        
                                                </div>                                                
                                                                              
                                        <div class="col-lg-4 col-6">
                                            
                                            <h6 class="font-bold"><i class="far fa-file"></i> Business / Registration / Permit No. </h6>
                                            <p>P/D 9</p>
											<h6 class="font-bold"><i class="far fa-bookmark"></i> SSM Registration No. </h6>
                                            <p>80544M</p>
											<h6 class="font-bold"><i class="far fa-file-alt"></i> Name of Practise</h6>
                                            <p>Interior Designer</p>
											 
                                        </div>
										
                                        <div class="col-lg-4 col-6">
                                            <h6 class="font-bold"><i class="far fa-building"></i> Business Entity</h6>
                                            <p>Business</p>
											<h6 class="font-bold"><i class="far fa-calendar"></i> Registration Date</h6>
                                            <p>1 November 2018</p>
											<h6 class="font-bold"><i class="fas fa-shipping-fast"></i> Status</h6>
                                            <p>Active</p>
                                            
											
                                        </div>
=======
                </div>

>>>>>>> mesra-branch

                <!-- LAM -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 col-6">
                                        <p class="label label-light-info font-bold m-b-0"><i class="ti-file"></i>
                                            2018-18-000342</p>
                                        <h3 class="box-title">1. &nbsp <i class="far fa-id-card m-r-10"></i>DESIGN
                                            COLLECTIVE ARCHITECTS</h3>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="pull-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span data-toggle="tooltip" data-placement="bottom" title=""
                                                        data-original-title="Click to open menu">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" id="jenisTindakan" name="jenisTindakan">
                                                    <a href="view-corporate-info.php" class="dropdown-item reg-top-nav-link">View
                                                        Details</a>
                                                    <a href="view-shareholder.php" class="dropdown-item reg-top-nav-link">View
                                                        Owner </a>
                                                    <a href="view-branch.php" class="dropdown-item reg-top-nav-link">View
                                                        Branch</a>
                                                    <a class="dropdown-item reg-top-nav-link" data-toggle="modal"
                                                        data-target="#newLAM">Renewal</a>
                                                </div>
                                            </div>
                                        </div>
<<<<<<< HEAD
											
										</div>
										</div>
							</div> -->
							
							<!-- /.modal borang Lembaga Arkitek Malaysia -->
                            <div class="modal fade bs-example-modal-lg" id="newLAM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                <div class="modal-dialog modal-dialog-lam">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background:#222">
                                            <h4 class="modal-title" id="exampleModalLabel1" style="color: #ffff">New Application</h4>
                                            <button type="button" style="color: #ffff;opacity: 1;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
											
										<iframe src="/demo-lam/LAM - New Application.html" style="overflow: scroll; width:100%; height:500px"></iframe>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
										
						<!-- LJBM -->				
							 <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
										<div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8 col-6">
														<p class="label label-light-info font-bold m-b-0"><i class="ti-file"></i> 2018-41-008273</p>												
                                                     <h3 class="box-title">1. &nbsp <i class="far fa-id-card m-r-10"></i>EMDIN QS CONSULT</h3>
                                                </div>
                                                <div class="col-md-4 col-6">
                                                    <div class="pull-right">                                                       
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Click to open menu">Action</span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right" id="jenisTindakan" name="jenisTindakan">
                                                                <a href="view-corporate-info.php"class="dropdown-item reg-top-nav-link">View Details</a>
                                                                <a href="view-shareholder.php" class="dropdown-item reg-top-nav-link">View Owner </a>
																<a href="view-branch-ljbm.php" class="dropdown-item reg-top-nav-link">View Branch</a>
																 <a class="dropdown-item reg-top-nav-link" data-toggle="modal" data-target="#tindakan-changename" data-whatever="@getbootstrap">Change Name</a>
																<a class="dropdown-item reg-top-nav-link" data-toggle="modal" data-target="#tindakan-changestruct" data-whatever="@getbootstrap">Change Structure</a>
																<a class="dropdown-item reg-top-nav-link" data-toggle="modal" data-target="#tindakan-pembaharuanfirm" data-whatever="@getbootstrap">Renewal</a>
																
																
															<!--	<a class="dropdown-item reg-top-nav-link" data-toggle="modal" data-target="#tindakan-pembaharuanbranch" data-whatever="@getbootstrap">Renewal Branch</a> -->
																
                                                            </div>
                                                        </div>
                                                    </div>                                        
                                                </div>                                                
                                                                              
                                        <div class="col-lg-4 col-6">
                                            
                                            <h6 class="font-bold"><i class="far fa-file"></i> Business / Registration / Permit No. </h6>
                                            <p>2018/FS00525</p>
											<h6 class="font-bold"><i class="far fa-bookmark"></i> SSM Registration No. </h6>
                                            <p>80544M</p>
											<h6 class="font-bold"><i class="far fa-file-alt"></i> Business Practise</h6>
                                            <p>Consulting Quantity Surveyor</p>
											
                                        </div>
										
                                        <div class="col-lg-4 col-6">
											<h6 class="font-bold"><i class="far fa-building"></i> Business Entity</h6>
                                            <p>Business</p>
											<h6 class="font-bold"><i class="far fa-calendar"></i> Registration Date</h6>
                                            <p>02/01/2018</p>
											<h6 class="font-bold"><i class="fas fa-shipping-fast"></i> Business Registration Status</h6>
                                            <p>Active</p>
											 
											
                                        </div> 

                                        <div class="col-lg-4 col-6">
											<h6 class="font-bold"><i class="far fa-list-alt"></i> Agency</h6>
                                            <p>Lembaga Juruukur Bahan Malaysia (LJBM)</p>
                                            <h6 class="font-bold"><i class="far fa-calendar-alt"></i> Expiry Date</h6>
                                            <p>31/12/2018</p>
                                             
                                          
                                        </div> 
                                                                                  
=======
                                    </div>

                                    <div class="col-lg-4 col-6">

                                        <h6 class="font-bold"><i class="far fa-file"></i> Business / Registration /
                                            Permit No. </h6>
                                        <p>P/D 9</p>
                                        <h6 class="font-bold"><i class="far fa-bookmark"></i> SSM Registration No. </h6>
                                        <p>80544M</p>
                                        <h6 class="font-bold"><i class="far fa-file-alt"></i> Name of Practise</h6>
                                        <p>Interior Designer</p>

                                    </div>

                                    <div class="col-lg-4 col-6">
                                        <h6 class="font-bold"><i class="far fa-building"></i> Business Entity</h6>
                                        <p>Business</p>
                                        <h6 class="font-bold"><i class="far fa-calendar"></i> Registration Date</h6>
                                        <p>1 November 2018</p>
                                        <h6 class="font-bold"><i class="fas fa-shipping-fast"></i> Status</h6>
                                        <p>Active</p>


                                    </div>

                                    <div class="col-lg-4 col-6">
                                        <h6 class="font-bold"><i class="far fa-list-alt"></i> Agency</h6>
                                        <p>Lembaga Arkitek Malaysia (LAM)</p>
                                        <h6 class="font-bold"><i class="far fa-calendar-alt"></i> Expiry Date</h6>
                                        <p>31 October 2018</p>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- /.modal borang Lembaga Arkitek Malaysia -->
                <div class="modal fade bs-example-modal-lg" id="newLAM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog modal-dialog-lam">
                        <div class="modal-content">
                            <div class="modal-header" style="background:#222">
                                <h4 class="modal-title" id="exampleModalLabel1" style="color: #ffff">New Application</h4>
                                <button type="button" style="color: #ffff;opacity: 1;" class="close" data-dismiss="modal"
                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <iframe src="/demo-lam/LAM - New Application.html" style="overflow: scroll; width:100%; height:500px"></iframe>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LJBM -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 col-6">
                                        <p class="label label-light-info font-bold m-b-0"><i class="ti-file"></i>
                                            2018-41-008273</p>
                                        <h3 class="box-title">2. &nbsp <i class="far fa-id-card m-r-10"></i>EMDIN QS
                                            CONSULT</h3>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="pull-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span data-toggle="tooltip" data-placement="bottom" title=""
                                                        data-original-title="Click to open menu">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" id="jenisTindakan" name="jenisTindakan">
                                                    <a href="view-corporate-info.php" class="dropdown-item reg-top-nav-link">View
                                                        Details</a>
                                                    <a href="view-shareholder.php" class="dropdown-item reg-top-nav-link">View
                                                        Owner </a>
                                                    <a href="view-branch-ljbm.php" class="dropdown-item reg-top-nav-link">View
                                                        Branch</a>

                                                    <a class="dropdown dropright" style="padding-left:0.5rem">Firm</a>
                                                    <a class="dropdown-item reg-top-nav-link" data-toggle="modal"
                                                        data-target="#tindakan-changename" data-whatever="@getbootstrap">Change
                                                        Name</a>
                                                    <a class="dropdown-item reg-top-nav-link" data-toggle="modal"
                                                        data-target="#tindakan-changestruct" data-whatever="@getbootstrap">Change
                                                        Structure</a>

                                                    <a class="dropdown-header" style="padding-left:0.5rem">Renewal</a>
                                                    <a class="dropdown-item reg-top-nav-link" data-toggle="modal"
                                                        data-target="#tindakan-pembaharuanfirm" data-whatever="@getbootstrap">Renewal
                                                        Firm</a>
                                                    <a class="dropdown-item reg-top-nav-link" data-toggle="modal"
                                                        data-target="#tindakan-pembaharuanbranch" data-whatever="@getbootstrap">Renewal
                                                        Branch</a>

                                                </div>
>>>>>>> mesra-branch
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-6">

                                        <h6 class="font-bold"><i class="far fa-file"></i> Business / Registration /
                                            Permit No. </h6>
                                        <p>2018/FS00525</p>
                                        <h6 class="font-bold"><i class="far fa-bookmark"></i> SSM Registration No. </h6>
                                        <p>80544M</p>
                                        <h6 class="font-bold"><i class="far fa-file-alt"></i> Business Practise</h6>
                                        <p>Consulting Quantity Surveyor</p>

                                    </div>

                                    <div class="col-lg-4 col-6">
                                        <h6 class="font-bold"><i class="far fa-building"></i> Business Entity</h6>
                                        <p>Business</p>
                                        <h6 class="font-bold"><i class="far fa-calendar"></i> Registration Date</h6>
                                        <p>2 January 2018</p>
                                        <h6 class="font-bold"><i class="fas fa-shipping-fast"></i> Status</h6>
                                        <p>Active</p>


                                    </div>

                                    <div class="col-lg-4 col-6">
                                        <h6 class="font-bold"><i class="far fa-list-alt"></i> Agency</h6>
                                        <p>Lembaga Juruukur Bahan Malaysia (LJBM)</p>
                                        <h6 class="font-bold"><i class="far fa-calendar-alt"></i> Expiry Date</h6>
                                        <p>31 December 2018</p>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
					
					<!-- LJBM -->				
							 <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
										<div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8 col-6">
														<p class="label label-light-info font-bold m-b-0"><i class="ti-file"></i> 2017-41-008273</p>												
                                                     <h3 class="box-title">2. &nbsp <i class="far fa-id-card m-r-10"></i>QYSAA QS CONSULT</h3>
                                                </div>
                                                <div class="col-md-4 col-6">
                                                    <div class="pull-right">                                                       
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Click to open menu">Action</span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right" id="jenisTindakan" name="jenisTindakan">
                                                              
																<a class="dropdown-item reg-top-nav-link" data-toggle="modal" data-target="#tindakan-reinstate" data-whatever="@getbootstrap">Reinstate</a>
																<a class="dropdown-item reg-top-nav-link" data-toggle="modal" data-target="#tindakan-amendment" data-whatever="@getbootstrap">Re-register</a>
															
																
                                                            </div>
                                                        </div>
                                                    </div>                                        
                                                </div>                                                
                                                                              
                                        <div class="col-lg-4 col-6">
                                            
                                            <h6 class="font-bold"><i class="far fa-file"></i> Business / Registration / Permit No. </h6>
                                            <p>2018/FC00525</p>
											<h6 class="font-bold"><i class="far fa-bookmark"></i> SSM Registration No. </h6>
                                            <p>80544M</p>
											<h6 class="font-bold"><i class="far fa-file-alt"></i> Business Practise</h6>
                                            <p>Consulting Quantity Surveyor</p>
											
                                        </div>
										
                                        <div class="col-lg-4 col-6">
											<h6 class="font-bold"><i class="far fa-building"></i> Business Entity</h6>
                                            <p>Company</p>
											<h6 class="font-bold"><i class="far fa-calendar"></i> Registration Date</h6>
                                            <p>2 January 2017</p>
											<h6 class="font-bold"><i class="fas fa-shipping-fast"></i> Business Registration Status</h6>
                                            <p>Not Active</p>
											
											
                                        </div>

                                        <div class="col-lg-4 col-6">
											<h6 class="font-bold"><i class="far fa-list-alt"></i> Agency</h6>
                                            <p>Lembaga Juruukur Bahan Malaysia (LJBM)</p>
                                            <h6 class="font-bold"><i class="far fa-calendar-alt"></i> Expiry Date</h6>
                                            <p>31 December 2017</p>
                                             
                                          
                                        </div> 
                                                                                  
=======
                </div>

                <!-- LJBM -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 col-6">
                                        <p class="label label-light-info font-bold m-b-0"><i class="ti-file"></i>
                                            2018-41-008273</p>
                                        <h3 class="box-title">3. &nbsp <i class="far fa-id-card m-r-10"></i>QYSAA QS
                                            CONSULT</h3>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="pull-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span data-toggle="tooltip" data-placement="bottom" title=""
                                                        data-original-title="Click to open menu">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" id="jenisTindakan" name="jenisTindakan">

                                                    <a class="dropdown-item reg-top-nav-link" data-toggle="modal"
                                                        data-target="#tindakan-reinstate" data-whatever="@getbootstrap">Reinstate</a>
                                                    <a class="dropdown-item reg-top-nav-link" data-toggle="modal"
                                                        data-target="#tindakan-re-register" data-whatever="@getbootstrap">Re-registar</a>


                                                </div>
>>>>>>> mesra-branch
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-6">

                                        <h6 class="font-bold"><i class="far fa-file"></i> Business / Registration /
                                            Permit No. </h6>
                                        <p>2018/FC00525</p>
                                        <h6 class="font-bold"><i class="far fa-bookmark"></i> SSM Registration No. </h6>
                                        <p>80544M</p>
                                        <h6 class="font-bold"><i class="far fa-file-alt"></i> Business Practise</h6>
                                        <p>Consulting Quantity Surveyor</p>

                                    </div>

                                    <div class="col-lg-4 col-6">
                                        <h6 class="font-bold"><i class="far fa-building"></i> Business Entity</h6>
                                        <p>Company</p>
                                        <h6 class="font-bold"><i class="far fa-calendar"></i> Registration Date</h6>
                                        <p>2 January 2018</p>
                                        <h6 class="font-bold"><i class="fas fa-shipping-fast"></i> Status</h6>
                                        <p>Not Active</p>


                                    </div>

                                    <div class="col-lg-4 col-6">
                                        <h6 class="font-bold"><i class="far fa-list-alt"></i> Agency</h6>
                                        <p>Lembaga Juruukur Bahan Malaysia (LJBM)</p>
                                        <h6 class="font-bold"><i class="far fa-calendar-alt"></i> Expiry Date</h6>
                                        <p>31 December 2018</p>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
					
					<!-- LJTM -->
				<!--	<div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8 col-6"> 
												 <p class="label label-light-info font-bold m-b-0"><i class="ti-file"></i> 2018-53-014426</p>
                                                     <h3 class="box-title">4. &nbsp<i class="far fa-id-card m-r-10"></i>BUMI SAMUDERA SURVEY CONSULTANT</h3>
                                                </div>
                                                <div class="col-md-4 col-6">
                                                    <div class="pull-right">                                                       
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Click to open menu">Action</span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right" id="jenisTindakan" name="jenisTindakan">
                                                                <a href="view-corporate-info.php"class="dropdown-item reg-top-nav-link">View Details</a>
                                                                <a href="view-shareholder.php" class="dropdown-item reg-top-nav-link">View Owner </a>
																<a href="view-branch.php" class="dropdown-item reg-top-nav-link">View Branch / Location</a> 
                                                            </div>
                                                        </div>
                                                    </div>                                        
                                                </div>                                                
                                                                              
                                        <div class="col-lg-4 col-6">
										<h6 class="font-bold"><i class="far fa-file"></i> Business / Registration / Permit No. </h6>
                                            <p>2018-53-014426</p>
											<h6 class="font-bold"><i class="far fa-bookmark"></i> SSM Registration No. </h6>
                                            <p>80544M</p>
                                            <h6 class="font-bold"><i class="far fa-file-alt"></i> Business Practise</h6>
                                            <p>Land Surveying</p>
											
										
                                             
											
                                        </div>
										
                                        <div class="col-lg-4 col-6">
                                            <h6 class="font-bold"><i class="far fa-building"></i> Business Entity</h6>
                                            <p>Business</p>
											<h6 class="font-bold"><i class="far fa-calendar"></i> Registration Date</h6>
                                            <p>12 May 2018</p>
											<h6 class="font-bold"><i class="fas fa-shipping-fast"></i> Status</h6>
                                            <p>Active</p>
											 
											
                                        </div>
=======
                </div>
>>>>>>> mesra-branch

                <!-- LJTM -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 col-6">
                                        <p class="label label-light-info font-bold m-b-0"><i class="ti-file"></i>
                                            2018-53-014426</p>
                                        <h3 class="box-title">4. &nbsp<i class="far fa-id-card m-r-10"></i>BUMI
                                            SAMUDERA SURVEY CONSULTANT</h3>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="pull-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span data-toggle="tooltip" data-placement="bottom" title=""
                                                        data-original-title="Click to open menu">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" id="jenisTindakan" name="jenisTindakan">
                                                    <a href="view-corporate-info.php" class="dropdown-item reg-top-nav-link">View
                                                        Details</a>
                                                    <a href="view-shareholder.php" class="dropdown-item reg-top-nav-link">View
                                                        Owner </a>
                                                    <a href="view-branch.php" class="dropdown-item reg-top-nav-link">View
                                                        Branch / Location</a>
                                                </div>
                                            </div>
                                        </div>
<<<<<<< HEAD
											
										</div>
										</div>
							</div> 
					-->
					
					<!-- modal LJBM Change Name -->
                   <div class="modal fade bs-example-modal-lg" id="tindakan-changename" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="isLogin" name="isLogin">
                                    <input type="hidden" id="isRegister" value="isRegister">
                                    <p style="font-size: 12px;">Are you sure to perform this action?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" onClick="actionchangenameljbm()">Yes</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
=======
                                    </div>

                                    <div class="col-lg-4 col-6">
                                        <h6 class="font-bold"><i class="far fa-file"></i> Business / Registration /
                                            Permit No. </h6>
                                        <p>2018-53-014426</p>
                                        <h6 class="font-bold"><i class="far fa-bookmark"></i> SSM Registration No. </h6>
                                        <p>80544M</p>
                                        <h6 class="font-bold"><i class="far fa-file-alt"></i> Business Practise</h6>
                                        <p>Land Surveying</p>




                                    </div>

                                    <div class="col-lg-4 col-6">
                                        <h6 class="font-bold"><i class="far fa-building"></i> Business Entity</h6>
                                        <p>Business</p>
                                        <h6 class="font-bold"><i class="far fa-calendar"></i> Registration Date</h6>
                                        <p>12 May 2018</p>
                                        <h6 class="font-bold"><i class="fas fa-shipping-fast"></i> Status</h6>
                                        <p>Active</p>


                                    </div>

                                    <div class="col-lg-4 col-6">
                                        <h6 class="font-bold"><i class="far fa-list-alt"></i> Agency</h6>
                                        <p>Lembaga Juruukur Tanah Malaysia (LJTM)</p>
                                        <h6 class="font-bold"><i class="far fa-calendar-alt"></i> Expiry Date</h6>
                                        <p>-</p>


                                    </div>
>>>>>>> mesra-branch
                                </div>
                            </div>

                        </div>
                    </div>
<<<<<<< HEAD
					
					
					<div class="modal fade bs-example-modal-lg" id="iframe-changenameljbm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-license modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Change Name</h4>

                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                        <iframe id="test" src="/demo-ljbm/LJBM-New Application.html"   style="overflow: scroll; width:100%; height:400px"></iframe>

                                </div>
                                <div class="modal-footer">
                                  <!--  <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="actionHantar()">Submit</button> -->
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					<!-- modal LJBM Renewal Firm -->
                   <div class="modal fade bs-example-modal-lg" id="tindakan-pembaharuanfirm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="isLogin" name="isLogin">
                                    <input type="hidden" id="isRegister" value="isRegister">
                                    <p style="font-size: 12px;"> Are you sure to perform this action?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" onClick="actionrenewalfirmljbm()">Yes</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					<div class="modal fade bs-example-modal-lg" id="iframe-renewalfirmljbm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-license modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Renewal Firm</h4>

                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                        <iframe id="test" src="/demo-ljbm/LJBM-New Application.html"  style="overflow: scroll; width:100%; height:400px"></iframe>

                                </div>
                                <div class="modal-footer">
                                  <!--  <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="actionHantar()">Submit</button> -->
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<!-- modal LJBM Renewal Branch -->
                   <div class="modal fade bs-example-modal-lg" id="tindakan-pembaharuanbranch" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="isLogin" name="isLogin">
                                    <input type="hidden" id="isRegister" value="isRegister">
                                    <p style="font-size: 12px;"> Are you sure to perform this action?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" onClick="actionrenewalbranchljbm()">Yes</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					<div class="modal fade bs-example-modal-lg" id="iframe-renewalbranchljbm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-license modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Renewal Branch</h4>

                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                        <iframe id="test" src="/demo-ljbm/LJBM-New Application.html"  style="overflow: scroll; width:100%; height:400px"></iframe>

                                </div>
                                <div class="modal-footer">
                                   <!-- <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="actionHantar()">Submit</button> -->
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
=======
                </div>


                <!-- modal LJBM Change Name -->
                <div class="modal fade bs-example-modal-lg" id="tindakan-changename" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i>
                                    Attention!</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="isLogin" name="isLogin">
                                <input type="hidden" id="isRegister" value="isRegister">
                                <p style="font-size: 12px;">Your firm has expired. Do you want to renew this firm?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" onClick="actionchangenameljbm()">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade bs-example-modal-lg" id="iframe-changenameljbm" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-license modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Renewal</h4>

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="https://www.bqsm.gov.my/reqsys/t/reg/cqsp" style="overflow: scroll; width:100%; height:400px"></iframe>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                    onclick="actionHantar()">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- modal LJBM Renewal Firm -->
                <div class="modal fade bs-example-modal-lg" id="tindakan-pembaharuanfirm" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i>
                                    Attention!</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="isLogin" name="isLogin">
                                <input type="hidden" id="isRegister" value="isRegister">
                                <p style="font-size: 12px;">Your firm has expired. Do you want to renew this firm?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" onClick="actionrenewalfirmljbm()">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade bs-example-modal-lg" id="iframe-renewalfirmljbm" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-license modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Renewal</h4>

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="https://www.bqsm.gov.my/reqsys/t/reg/cqsp" style="overflow: scroll; width:100%; height:400px"></iframe>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                    onclick="actionHantar()">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal LJBM Renewal Branch -->
                <div class="modal fade bs-example-modal-lg" id="tindakan-pembaharuanbranch" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i>
                                    Attention!</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="isLogin" name="isLogin">
                                <input type="hidden" id="isRegister" value="isRegister">
                                <p style="font-size: 12px;">Your firm has expired. Do you want to renew this branch?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" onClick="actionrenewalbranchljbm()">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
>>>>>>> mesra-branch
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade bs-example-modal-lg" id="iframe-renewalbranchljbm" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-license modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Renewal</h4>

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="https://www.bqsm.gov.my/reqsys/t/reg/cqsp" style="overflow: scroll; width:100%; height:400px"></iframe>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                    onclick="actionHantar()">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
<<<<<<< HEAD
					
					
					<div class="modal fade bs-example-modal-lg" id="iframe-addbranchljbm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-license modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Add Branch</h4>

                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                        <iframe id="test" src="/demo-ljbm/LJBM-New Application.html"   style="overflow: scroll; width:100%; height:400px"></iframe>

                                </div>
                                <div class="modal-footer">
                                 <!--   <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="actionHantar()">Submit</button> -->
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<!-- modal LJBM Change Details -->
                    <div class="modal fade bs-example-modal-lg" id="tindakan-changedetails" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="isLogin" name="isLogin">
                                    <input type="hidden" id="isRegister" value="isRegister">
                                    <p style="font-size: 12px;"> Are you sure to perform this action?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" onClick="actionchangedetailsljbm()">Yes</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					<div class="modal fade bs-example-modal-lg" id="iframe-changedetailsljbm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-license modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Change Details</h4>

                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                        <iframe id="test" src="/demo-ljbm/LJBM-New Application.html"   style="overflow: scroll; width:100%; height:400px"></iframe>

                                </div>
                                <div class="modal-footer">
                                  <!--  <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="actionHantar()">Submit</button> -->
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<!-- modal LJBM Change Structure -->
                   <div class="modal fade bs-example-modal-lg" id="tindakan-changestruct" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="isLogin" name="isLogin">
                                    <input type="hidden" id="isRegister" value="isRegister">
                                    <p style="font-size: 12px;"> Are sure to perform this action?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" onClick="actionchangestructljbm()">Yes</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					<div class="modal fade bs-example-modal-lg" id="iframe-changestructljbm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-license modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Change Structure</h4>

                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                        <iframe id="test" src="/demo-ljbm/LJBM-New Application.html"  style="overflow: scroll; width:100%; height:400px"></iframe>

                                </div>
                                <div class="modal-footer">
                                  <!--  <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="actionHantar()">Submit</button> -->
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
				
				<!-- modal LJBM Reistate -->
                  <div class="modal fade bs-example-modal-lg" id="tindakan-reinstate" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="isLogin" name="isLogin">
                                    <input type="hidden" id="isRegister" value="isRegister">
                                    <p style="font-size: 12px;">Are you sure to perform this action? 
									</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" onClick="actionreinstateljbm()">Yes</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					<div class="modal fade bs-example-modal-lg" id="iframe-reinstateljbm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-license modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Reistate</h4>

                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                        <iframe id="test" src="/demo-ljbm/LJBM-New Application.html"  style="overflow: scroll; width:100%; height:400px"></iframe>

                                </div>
                                <div class="modal-footer">
                                  <!--  <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="actionHantar()">Submit</button> -->
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					
					<!-- modal LJBM Amendment -->
                    <div class="modal fade bs-example-modal-lg" id="tindakan-amendment" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="isLogin" name="isLogin">
                                    <input type="hidden" id="isRegister" value="isRegister">
                                    <p style="font-size: 12px;">Are you sure to perform this action?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" onClick="actionamendmentljbm()">Yes</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					<div class="modal fade bs-example-modal-lg" id="iframe-amendmentljbm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-license modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Re-register</h4>

                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                        <iframe id="test" src="/demo-ljbm/LJBM-New Application.html"  style="overflow: scroll; width:100%; height:400px"></iframe>

                                </div>
                                <div class="modal-footer">
                                 <!--   <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="actionHantar()">Submit</button> -->
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					
					
					
					<!--		
                       
						<?php
=======

                </div>

                <!-- modal LJBM Add Branch -->
                <div class="modal fade bs-example-modal-lg" id="tindakan-addbranch" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i>
                                    Attention!</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="isLogin" name="isLogin">
                                <input type="hidden" id="isRegister" value="isRegister">
                                <p style="font-size: 12px;">Do you want to add new branch?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" onClick="actionaddbranchljbm()">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade bs-example-modal-lg" id="iframe-addbranchljbm" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-license modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Renewal</h4>

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="https://www.bqsm.gov.my/reqsys/t/reg/cqsp" style="overflow: scroll; width:100%; height:400px"></iframe>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                    onclick="actionHantar()">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal LJBM Change Details -->
                <div class="modal fade bs-example-modal-lg" id="tindakan-changedetails" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i>
                                    Attention!</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="isLogin" name="isLogin">
                                <input type="hidden" id="isRegister" value="isRegister">
                                <p style="font-size: 12px;"> Do you want to change your details?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" onClick="actionchangedetailsljbm()">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade bs-example-modal-lg" id="iframe-changedetailsljbm" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-license modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Change Details</h4>

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="https://www.bqsm.gov.my/reqsys/t/reg/cqsp" style="overflow: scroll; width:100%; height:400px"></iframe>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                    onclick="actionHantar()">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal LJBM Change Structure -->
                <div class="modal fade bs-example-modal-lg" id="tindakan-changestruct" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i>
                                    Attention!</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="isLogin" name="isLogin">
                                <input type="hidden" id="isRegister" value="isRegister">
                                <p style="font-size: 12px;"> Do you want to change your structure?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" onClick="actionchangestructljbm()">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade bs-example-modal-lg" id="iframe-changestructljbm" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-license modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Change Details</h4>

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="https://www.bqsm.gov.my/reqsys/t/reg/cqsp" style="overflow: scroll; width:100%; height:400px"></iframe>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                    onclick="actionHantar()">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal LJBM Reistate -->
                <div class="modal fade bs-example-modal-lg" id="tindakan-reinstate" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i>
                                    Attention!</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="isLogin" name="isLogin">
                                <input type="hidden" id="isRegister" value="isRegister">
                                <p style="font-size: 12px;">Do you want to reinstate this firm?
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" onClick="actionreinstateljbm()">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade bs-example-modal-lg" id="iframe-reinstateljbm" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-license modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Reistate</h4>

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="https://www.bqsm.gov.my/reqsys/t/reg/cqsp" style="overflow: scroll; width:100%; height:400px"></iframe>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                    onclick="actionHantar()">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal LJBM Re-register -->
                <div class="modal fade bs-example-modal-lg" id="tindakan-re-register" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i>
                                    Attention!</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="isLogin" name="isLogin">
                                <input type="hidden" id="isRegister" value="isRegister">
                                <p style="font-size: 12px;">Do you want to reinstate this firm?
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" onClick="actionre-registerljbm()">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade bs-example-modal-lg" id="iframe-re-registerljbm" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-license modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Reistate</h4>

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="https://www.bqsm.gov.my/reqsys/t/reg/cqsp" style="overflow: scroll; width:100%; height:400px"></iframe>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                    onclick="actionHantar()">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal LJBM Amendment -->
                <div class="modal fade bs-example-modal-lg" id="tindakan-amendment" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i>
                                    Attention!</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="isLogin" name="isLogin">
                                <input type="hidden" id="isRegister" value="isRegister">
                                <p style="font-size: 12px;">Do you want to ammend this firm?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" onClick="actionamendmentljbm()">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade bs-example-modal-lg" id="iframe-amendmentljbm" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-license modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Renewal</h4>

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="https://www.bqsm.gov.my/reqsys/t/reg/cqsp" style="overflow: scroll; width:100%; height:400px"></iframe>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                    onclick="actionHantar()">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>







                <?php
>>>>>>> mesra-branch
                        $sqlMyBusiness = "SELECT * FROM  \"public\".\"myBusiness\"  order by id_business asc";
                        $result = pg_query($pg_con, $sqlMyBusiness);
						$cntRow = pg_num_rows($result);
					$number = 5;

                        while ($row = pg_fetch_assoc($result)) {
                            ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 col-6">
                                        <h3 class="box-title">
                                            <?php echo $number++; ?>. &nbsp
                                            <?php echo $row['nama']; ?>
                                        </h3>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="pull-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span data-toggle="tooltip" data-placement="bottom" title=""
                                                        data-original-title="Click to open menu">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" id="jenisTindakan" name="jenisTindakan">
                                                    <a href="view-corporate-info.php" class="dropdown-item reg-top-nav-link">View
                                                        Details</a>
                                                    <a href="view-shareholder.php" class="dropdown-item reg-top-nav-link">View
                                                        Owner </a>
                                                    <a href="view-branch.php" class="dropdown-item reg-top-nav-link">View
                                                        Branch</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <h6 class="font-bold"><i class="far fa-file"></i> Business No.</h6>
                                        <p>
                                            <?php echo $row['business_no']; ?>
                                        </p>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <h6 class="font-bold"> <i class="far fa-building"></i> Business Entity</h6>
                                        <p>
                                            <?php echo $row['business_type']; ?>
                                        </p>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <h6 class="font-bold"><i class="far fa-list-alt"></i> Registrar</h6>
                                        <p>
                                            <?php echo $row['registar']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } // end of while ?>

                <!--</div>-->
                <?php include ('MyTray_Modal_Maklumat_Syarikat.php') ?>
                <?php include ('MyTray_Modal_Helpdesk_Syarikat.php') ?>



                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- =========colappse #1 ===================================================== -->
        </div>
<<<<<<< HEAD
    
	</div>
	
	
	<div class="card m-b-0">
=======

    </div>
</div>


<div>
    <div class="card m-b-0">
>>>>>>> mesra-branch
        <div class="card-header" role="tab" id="headingTwo2">
            <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo2"
                    aria-expanded="false" aria-controls="collapseTwo2">
                    <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Click to expand this panel or click again to close this panel">Professional Registration</span>
                </a>
            </h5>
        </div>
        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
            <div class="card-body">
                <div class="row page-titles">
                    <div class="col-lg-12">
                        <div class="row m-t-10">
<<<<<<< HEAD
								
							</div>
						</div>
					</div>
				
						   <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8 col-6">                                           
                                                     <h3 class="box-title">1. &nbsp<i class="far fa-id-card m-r-10"></i>Azli Shafie</h3>
                                                </div>
                                                <div class="col-md-4 col-6">
                                                    <div class="pull-right">                                                       
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right" id="jenisTindakan" name="jenisTindakan">
                                                                <a href="view-corporate-info.php"class="dropdown-item reg-top-nav-link">View Details</a>
                                                                <a href="view-shareholder.php" class="dropdown-item reg-top-nav-link">View Owner </a>
																<a href="view-branch.php" class="dropdown-item reg-top-nav-link">View Branch</a>
                                                            </div>
                                                        </div>
                                                    </div>                                        
                                                </div>                                                
                                             <div class="col-lg-4 col-6">
											  <h6 class="font-bold"><i class="far fa-file-alt"></i> Name of Professional</h6>
                                            <p>Architect</p>
											<h6 class="font-bold"> <i class="far fa-window-restore"></i> CPD Points (Current)</h6>
                                            <p>6 point</p>
											
                                        </div>
										
                                        <div class="col-lg-4 col-6"> 
											<h6 class="font-bold"><i class="far fa-file"></i> Professional / Registration No. </h6>
                                            <p>A/Z 36</p>
                                            
											<h6 class="font-bold"><i class="far fa-calendar-alt"></i> Expired Date</h6>
                                            <p>31 October 2019</p>
											
                                        </div>

                                        <div class="col-lg-4 col-6">
										<h6 class="font-bold"><i class="far fa-list-alt"></i> Agency</h6>
                                            <p>Lembaga Juruukur Bahan Malaysia (LJBM)</p>
                                            
                                        </div>                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div> 
                       
						
						


                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                </div>
                <!-- =========colappse #2 ===================================================== -->
            </div>

      </div>
		
    
</div>
	
	
	<!-- /.modal borang Lembaga Arkitek Malaysia -->
                            <div class="modal fade bs-example-modal-lg" id="newLAM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog modal-dialog-lam">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background:#222">
                                            <h4 class="modal-title" id="exampleModalLabel1" style="color: #ffff">New Application</h4>
                                            <button type="button" style="color: #ffff;opacity: 1;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
											
										<iframe src="/demo-lam/LAM - New Application.html" style="overflow: scroll; width:100%; height:500px"></iframe>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                        </div>
=======

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 col-6">
                                        <h3 class="box-title">1. &nbsp<i class="far fa-id-card m-r-10"></i>ZARINA BT.
                                            ABU KASSIM</h3>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="pull-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" id="jenisTindakan" name="jenisTindakan">
                                                    <a href="view-corporate-info.php" class="dropdown-item reg-top-nav-link">View
                                                        Details</a>
                                                    <a href="view-shareholder.php" class="dropdown-item reg-top-nav-link">View
                                                        Owner </a>
                                                    <a href="view-branch.php" class="dropdown-item reg-top-nav-link">View
                                                        Branch</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <h6 class="font-bold"><i class="far fa-file-alt"></i> Name of Professional</h6>
                                        <p>Architect</p>
                                        <h6 class="font-bold"> <i class="far fa-window-restore"></i> CPD Points
                                            (Current)</h6>
                                        <p>6 point</p>

                                    </div>

                                    <div class="col-lg-4 col-6">
                                        <h6 class="font-bold"><i class="far fa-file"></i> Professional / Registration
                                            No. </h6>
                                        <p>A/Z 36</p>

                                        <h6 class="font-bold"><i class="far fa-calendar-alt"></i> Expired Date</h6>
                                        <p>31 October 2019</p>

                                    </div>

                                    <div class="col-lg-4 col-6">
                                        <h6 class="font-bold"><i class="far fa-list-alt"></i> Agency</h6>
                                        <p>Lembaga Arkitek Malaysia (LAM)</p>

>>>>>>> mesra-branch
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<<<<<<< HEAD
                        <!-- ============================================================== -->
                        <!-- End PAge Content -->
                        <!-- ============================================================== -->
                    
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
=======

                <!-- /.modal borang Lembaga Arkitek Malaysia -->
                <div class="modal fade bs-example-modal-lg" id="newLAM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog modal-dialog-lam">
                        <div class="modal-content">
                            <div class="modal-header" style="background:#222">
                                <h4 class="modal-title" id="exampleModalLabel1" style="color: #ffff">New Application</h4>
                                <button type="button" style="color: #ffff;opacity: 1;" class="close" data-dismiss="modal"
                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <iframe src="/demo-lam/LAM - New Application.html" style="overflow: scroll; width:100%; height:500px"></iframe>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
>>>>>>> mesra-branch
                </div>


                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
<<<<<<< HEAD
            <!-- ============================================================== -->
            <!-- End Wrapper -->
            <!-- ============================================================== -->
            <?php include('base-script.php'); ?>  
            <!-- ============================================================== -->
            <!-- This page plugins -->
            <!-- ============================================================== -->
			<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
			<script src="../assets/plugins/popper/popper.min.js"></script>
			<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
			<script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
			<script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
			<script src="js/custom.min.js"></script>
			<script src="../assets/plugins/moment/min/moment.min.js"></script>
			<script src="../assets/plugins/wizard/jquery.steps.min.js"></script>
			<script src="../assets/plugins/wizard/jquery.validate.min.js"></script>
			<script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
			
			
            <script src="../assets/plugins/switchery/dist/switchery.min.js"></script>
            <script src="../assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
            <script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
            <script src="../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
            <script src="../assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
            <script src="../assets/plugins/dff/dff.js" type="text/javascript"></script>
            <script type="text/javascript" src="../assets/plugins/multiselect/js/jquery.multi-select.js"></script>
			
			<script> <!-- custom modal switch on/off -->
			function actionchangenameljbm() {
                                            $('#tindakan-changename').modal('hide');
                                            $('#iframe-changenameljbm').modal('show');
                                        }
			
			function actionrenewalbranchljbm() {
                                            $('#tindakan-pembaharuanbranch').modal('hide');
                                            $('#iframe-renewalbranchljbm').modal('show');
                                        }
										
			function actionrenewalfirmljbm() {
                                            $('#tindakan-pembaharuanfirm').modal('hide');
                                            $('#iframe-renewalfirmljbm').modal('show');
                                        }
										
			function actionreinstateljbm() {
                                            $('#tindakan-reinstate').modal('hide');
                                            $('#iframe-reinstateljbm').modal('show');
                                        }		

			function actionamendmentljbm() {
                                            $('#tindakan-amendment').modal('hide');
                                            $('#iframe-amendmentljbm').modal('show');
                                        }													
										
			function actionaddbranchljbm() {
                                            $('#tindakan-addbranch').modal('hide');
                                            $('#iframe-addbranchljbm').modal('show');
                                        }	
										
			function actionaddbranchljbm() {
                                            $('#tindakan-addbranch').modal('hide');
                                            $('#iframe-addbranchljbm').modal('show');
                                        }
										
			function actionchangedetailsljbm() {
                                            $('#tindakan-changedetails').modal('hide');
                                            $('#iframe-changedetailsljbm').modal('show');
                                        }

			function actionchangestructljbm() {
                                            $('#tindakan-changestruct').modal('hide');
                                            $('#iframe-changestructljbm').modal('show');
                                        }										
			</script>							
			
            <script>
                jQuery(document).ready(function () {
                    // Switchery
                    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
                    $('.js-switch').each(function () {
                        new Switchery($(this)[0], $(this).data());
                    });
                    // For select 2
                    $(".select2").select2();
                    $('.selectpicker').selectpicker();
                    //Bootstrap-TouchSpin
                    $(".vertical-spin").TouchSpin({
                        verticalbuttons: true,
                        verticalupclass: 'ti-plus',
                        verticaldownclass: 'ti-minus'
                    });
                    var vspinTrue = $(".vertical-spin").TouchSpin({
                        verticalbuttons: true
                    });
                    if (vspinTrue) {
                        $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
                    }
                    $("input[name='tch1']").TouchSpin({
                        min: 0,
                        max: 100,
                        step: 0.1,
                        decimals: 2,
                        boostat: 5,
                        maxboostedstep: 10,
                        postfix: '%'
                    });
                    $("input[name='tch2']").TouchSpin({
                        min: -1000000000,
                        max: 1000000000,
                        stepinterval: 50,
                        maxboostedstep: 10000000,
                        prefix: '$'
                    });
                    $("input[name='tch3']").TouchSpin();
                    $("input[name='tch3_22']").TouchSpin({
                        initval: 40
                    });
                    $("input[name='tch5']").TouchSpin({
                        prefix: "pre",
                        postfix: "post"
                    });
                    // For multiselect
                    $('#pre-selected-options').multiSelect();
                    $('#optgroup').multiSelect({
                        selectableOptgroup: true
                    });
                    $('#public-methods').multiSelect();
                    $('#select-all').click(function () {
                        $('#public-methods').multiSelect('select_all');
                        return false;
                    });
                    $('#deselect-all').click(function () {
                        $('#public-methods').multiSelect('deselect_all');
                        return false;
                    });
                    $('#refresh').on('click', function () {
                        $('#public-methods').multiSelect('refresh');
                        return false;
                    });
                    $('#add-option').on('click', function () {
                        $('#public-methods').multiSelect('addOption', {
                            value: 42,
                            text: 'test 42',
                            index: 0
                        });
                        return false;
                    });
                    $(".ajax").select2({
                        ajax: {
                            url: "https://api.github.com/search/repositories",
                            dataType: 'json',
                            delay: 250,
                            data: function (params) {
                                return {
                                    q: params.term, // search term
                                    page: params.page
                                };
                            },
                            processResults: function (data, params) {
                                // parse the results into the format expected by Select2
                                // since we are using custom formatting functions we do not need to
                                // alter the remote JSON data, except to indicate that infinite
                                // scrolling can be used
                                params.page = params.page || 1;
                                return {
                                    results: data.items,
                                    pagination: {
                                        more: (params.page * 30) < data.total_count
                                    }
                                };
                            },
                            cache: true
                        },
                        escapeMarkup: function (markup) {
                            return markup;
                        }, // let our custom formatter work
                        minimumInputLength: 1,
                        templateResult: formatRepo, // omitted for brevity, see the source of this page
                        templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
                    });
                });
            </script>
    </body>

</html>
=======
            <!-- =========colappse #2 ===================================================== -->
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
<?php include('footer.php'); ?>
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
<?php include('base-script.php'); ?>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/popper/popper.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="../assets/plugins/moment/min/moment.min.js"></script>
<script src="../assets/plugins/wizard/jquery.steps.min.js"></script>
<script src="../assets/plugins/wizard/jquery.validate.min.js"></script>
<script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>


<script src="../assets/plugins/switchery/dist/switchery.min.js"></script>
<script src="../assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script src="../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="../assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="../assets/plugins/dff/dff.js" type="text/javascript"></script>
<script type="text/javascript" src="../assets/plugins/multiselect/js/jquery.multi-select.js"></script>

<script>
    <!-- custom modal switch on/off -->
    function actionchangenameljbm() {
        $('#tindakan-changename').modal('hide');
        $('#iframe-changenameljbm').modal('show');
    }

    function actionrenewalbranchljbm() {
        $('#tindakan-pembaharuanbranch').modal('hide');
        $('#iframe-renewalbranchljbm').modal('show');
    }

    function actionrenewalfirmljbm() {
        $('#tindakan-pembaharuanfirm').modal('hide');
        $('#iframe-renewalfirmljbm').modal('show');
    }

    function actionreinstateljbm() {
        $('#tindakan-reinstate').modal('hide');
        $('#iframe-reinstateljbm').modal('show');
    }

    function actionamendmentljbm() {
        $('#tindakan-amendment').modal('hide');
        $('#iframe-amendmentljbm').modal('show');
    }

    function actionaddbranchljbm() {
        $('#tindakan-addbranch').modal('hide');
        $('#iframe-addbranchljbm').modal('show');
    }

    function actionaddbranchljbm() {
        $('#tindakan-addbranch').modal('hide');
        $('#iframe-addbranchljbm').modal('show');
    }

    function actionchangedetailsljbm() {
        $('#tindakan-changedetails').modal('hide');
        $('#iframe-changedetailsljbm').modal('show');
    }

    function actionchangestructljbm() {
        $('#tindakan-changedetails').modal('hide');
        $('#iframe-changedetailsljbm').modal('show');
    }
</script>

<script>
    jQuery(document).ready(function () {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function () {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'ti-plus',
            verticaldownclass: 'ti-minus'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='tch1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='tch2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='tch3']").TouchSpin();
        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });
        $("input[name='tch5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
        // For multiselect
        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
        $('#public-methods').multiSelect();
        $('#select-all').click(function () {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function () {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function () {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function () {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });
        $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function (data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function (markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            templateResult: formatRepo, // omitted for brevity, see the source of this page
            templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
    });
</script>
</body>

</html>
>>>>>>> mesra-branch
