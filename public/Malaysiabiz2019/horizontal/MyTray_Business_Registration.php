<?php

function arrayFlatten($array) { 
    $flattern = array(); 
    foreach ($array as $key => $value){ 
        $new_key = array_keys($value); 
        $flattern[] = $value[$new_key[0]]; 
    } 
    return $flattern; 
} 


$sql = <<<SQL
SELECT "public"."myTray_business_registration".agency 
FROM "public"."myTray_business_registration" 
GROUP BY "public"."myTray_business_registration".agency 
ORDER BY "public"."myTray_business_registration".agency ASC
SQL;
$result = pg_query($pg_con, $sql);

$allBusinessRegAgenciesTypes = pg_fetch_all($result);


$where_agency_name = $agency_name && $agency_name !== "0" ? "WHERE \"agency\" = '$agency_name' ": "";
$where_agency_status = $status && $status !== "0" ? "WHERE \"status\" = '$status' ": "";
$where_application_type = $application_type && $application_type !== "0" ? "WHERE \"application_type\" = '$application_type' ": "";

$sql = <<<SQL
SELECT *
FROM "public"."myTray_business_registration"
$where_agency_name
$where_agency_status
$where_application_type
ORDER BY "public"."myTray_business_registration"."id" ASC 
SQL;

// echo $sql;

$result = pg_query($pg_con, $sql);
$allBusinessRegAgencies = pg_fetch_all($result);

$isRenderBusinessItems =  in_array($agency_name,arrayFlatten($allBusinessRegAgenciesTypes)) || !empty($allBusinessRegAgencies);


//redefined url params
$business_reg_agency_name = $agency_name;
$business_reg_application_type = $application_type;
$business_reg_status = $status;

?>

        
    <div class ="noprint">
        <div class="row nomargintop">        
            <div class="col-12">
               
                <?php if($isRenderBusinessItems): ?>

                <div>
                    <?php foreach($allBusinessRegAgencies as $key=>$businessReg) : ?>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8 col-6">
                                    <h3 class="box-title m-t-10 m-b-10">
                                        <?php $key++; echo "$key."; ?> &nbsp <i class="far fa-id-card m-r-10"></i>
                                        <?php echo $businessReg['type'] ?>
                                    </h3>
                                </div>
                                <div class="col-md-4 col-6 text-right">
                                    <button type="button" class="btn btn-sm btn-info btn-circle" data-toggle="modal"
                                        data-target="#info-bisnes" title="<?php echo $businessReg['tooltip'] ?>"><i
                                            class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i> </button>
                                    <button type="button" class="btn btn-sm btn-info btn-circle" data-toggle="modal"
                                        data-target="#help-desk3" >
                                        <i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> </button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                           <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to open menu"> Action </span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" style="position: absolute; transform: translate3d(0px, -2px, 0px); top: 0px; left: 0px;" >
                                            <?php if ($businessReg['is_agency_logged'] === 't'): ?>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#modalIframeAgency" data-url="<?php echo $businessReg['iframe_url']; ?>" >
                                            <i class="ti-pencil-alt"></i>
                                                Apply</a>
                                            <?php else: ?>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#modalIframeAgency" data-url="https://www.bqsm.gov.my/index.php/en/?option=com_users&view=login"> <!--onclick="bizRegLogin('<?php echo $businessReg['iframe_url'] ?>')"-->  <i
                                                    class="ti-pencil-alt"></i>
                                                Apply</a>
                                            <?php endif; ?>
                                            <!-- <a class="dropdown-item"> <i class="ti-printer"></i> Print</a> -->
                                            <a class="dropdown-item" onclick="hideCard('b2a');"> <i class="ti-trash"></i>
                                                Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-6">
								
									<h6 class="font-bold"><i class="far fa-building"></i> Business Name</h6>
                                    <p>
                                        <?php echo $businessReg['business_name'] ?>
                                    </p>
                                    <h6 class="font-bold"><i class="far fa-building"></i> Agency</h6>
                                    <p>
                                        <?php echo $businessReg['registrar'] ?>
                                    </p>
									 <h6 class="font-bold"><i class="fas fa-shipping-fast"></i> Status Form</h6>
                                    <p class="m-b-0 font-weight-normal"><span>
                                            <?php echo $businessReg['status'] ?></span></p>
                                    
                                </div>

                                <div class="col-lg-4 col-6">
                                    <h6 class="font-bold"> <i class="far fa-window-restore"></i> System</h6>
                                    <p>
                                        <?php echo $businessReg['system'] ?>
                                    </p>
									<h6 class="font-bold"><i class="far fa-file-alt"></i> Business Entity</h6>
                                    <p>
                                        <?php echo $businessReg['name_of_practice'] ?>
                                    </p>
									<h6 class="font-bold"><i class="far fa-file"></i> Reference No.</h6>
                                    <p>
                                        <?php echo $businessReg['reference_no'] ?>
										</p>
                                   
                                 

                                </div>

                                <div class="col-lg-4 col-6">
                                    <h6 class="font-bold"><i class="far fa-list-alt"></i> Application Type</h6>
                                    <p>
                                        <?php echo $businessReg['application_type'] ?>
                                    </p>
									<h6 class="font-bold"> <i class="far fa-window-restore"></i> Branch / Location</h6>
									<p>
                                        <?php echo $businessReg['branch'] ?>
										</p>
                            
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    

                    <div class="modal fade bs-example-modal-lg" id="help-desk3" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Helpdesk System Agency</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <p>Kindly contact Lembaga Juruukur Bahan Malaysia (LJBM) at 603 4108 5191
									 or email at <a href="https://www.bqsm.gov.my/index.php/en/" target="_blank">https://www.bqsm.gov.my/index.php/en/</a> for any enquiries.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>

                    <!-- /.modal Iframe -->
                    <div class="modal fade bs-example-modal-lg" id="modalIframeAgency" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-license modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" style="background:#222">
                                    <h4 class="modal-title" id="exampleModalLabel1" style="color: #ffff">New Application</h4>
                                    <button type="button" style="color: #ffff;opacity: 1;" class="close" data-dismiss="modal"
                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">

                                    <iframe id="business-reg-iframe" src="" style="overflow: scroll; width:100%; height:500px"></iframe>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.end modal LIframe -->


                    <!-- Modal login required -->
                    <div class="modal fade bs-example-modal-lg" id="business-reg-login-required" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" name="modal-business-reg">
                        <div class="modal-dialog modal-login">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i>
                                        Attention!</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body text-center small-text">
                                    <input type="hidden" id="agency_name2" name="agency_name2" value="<?php echo $agency_name; ?>">
                                    <p><i class="ti-lock"></i> Username and password are required for first time login
                                        to
                                        <?php echo $system; ?> via MalaysiaBiz </p>
                                    <form>
                                        <div class="row form-group">
                                            <div class=" col-3 text-left m-b-5"><label>Agency :</label></div>
                                            <div class="col-9 text-left m-b-5"><input type="agency" class="form-control form-control-sm"
                                                    id="agency" value="<?php echo $agency_name; ?>" readonly="true">
                                            </div>
                                            <div class=" col-3 text-left m-b-5"><label>Login ID Type :</label></div>
                                            <div class="col-9 text-left m-b-5">
                                                <select class="form-control form-control-sm">
                                                    <option>Select</option>
                                                    <option>Company Registration No.</option>
                                                    <option>Identity Card No.</option>
                                                    <option>Username</option>
                                                    <option>Passport No.</option>
                                                    <option>E-mail</option>
                                                </select>
                                            </div>
                                            <div class=" col-3 text-left m-b-5"><label>Login ID :</label></div>
                                            <div class="col-9 text-left m-b-5"> <input type="username" class="form-control form-control-sm"
                                                    id="username" placeholder="Login ID">
                                            </div>
                                            <div class=" col-3 text-left m-b-5"><label>Password :</label></div>
                                            <div class="col-9 text-left m-b-5"><input type="password" class="form-control form-control-sm"
                                                    id="password" placeholder="Password">
                                            </div>
                                        </div>
                                    </form>
                                    <p>
                                        <div>Note: User can register or reset password via
                                            <?php echo $system; ?>
                                        </div>
                                        <div class="row justify-content-between" style="height: 36px;">
                                            <div class="col-4"><a href="https://www.bqsm.gov.my/index.php/en/component/osemsc/" target="_blank" style="background-color: #ffff;" class="font-bold m-r-40">
											<button type="button" class="btn btn-rounded btn-block btn-outline-info btn-sm"> <i class="fas fa-user-plus m-r-5"></i>Register</button></a></div>
											
                                            <div class="col-4" ><a href="https://www.bqsm.gov.my/reqsys/t/public/fpwd" target="_blank" style="background-color: #ffff;" class="font-bold m-l-40">
											<button type="button" class="btn btn-rounded btn-block btn-outline-info btn-sm">Forgot Password?</button></a></div>
										</div>
										<div class="row justify-content-end">
											<div class="col-4"> <a href="https://www.bqsm.gov.my/reqsys/t/public/fpwd" target="_blank" style="background-color: #ffff;" class="font-bold m-l-40">
											<button type="button" class="btn btn-rounded btn-block btn-outline-info btn-sm">Forgot Username?</button></a></div>
											
                                        </div>
                                    </p>
                                </div>
                                <div class="modal-footer">
									
                                    <div class="text-right">
                                        <button type="button" class="btn btn-info waves-effect" onclick="bizRegPilihUsiness()">Verify</button>
                                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- Pilih Bis-Reg Business -->
                    <!-- modal pilih bisnes-->
                    <div class="modal fade bs-example-modal-lg" id="business-reg-pilih-bisnes" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Select Business Entity</h4>
                                    <input type="hidden" id="agensiMohonLogin" name="agensiMohonLogin" value="">
                                    <input type="hidden" id="idLesen" name="idLesen" value="">
                                    <input type="hidden" id="statusMohon" name="statusMohon" value="">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="table-responsive" style="font-size: 12px;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Business Name</th>
                                                    <th>Business Entity</th>
                                                    <th>Registration No.</th>
                                                    <th>Branch</th>
                                                    <th>Select </th>
                                                </tr>
                                            </thead>
                                            <?php
                            $sqlMyBusiness = "SELECT * FROM  \"public\".\"myBusiness\"  order by id_business asc";
                            $result = pg_query($pg_con, $sqlMyBusiness);
                            while ($row = pg_fetch_assoc($result)) {
                                ?>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <?php echo $row['nama']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['business_type']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['business_no']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['branch']; ?>
                                                    </td>
                                                    <td><button type="button" class="btn btn-sm btn-circle btn-block btn-outline-info"
                                                            onclick="bizRegActionPilihBusiness()"><i class="ti-check"></i>
                                                        </button></td>
                                                </tr>
                                                <?php } // end of while  ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                    <!-- Login Failed -->
                    <!-- /.modal login failed-->
                        <div class="modal fade bs-example-modal-lg" id="business-reg-login-failed" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" name="modal-business-reg">
                        <div class="modal-dialog modal-login">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i>
                                        Attention!</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body text-center small-text">
                                    <input type="hidden" id="agency_name2" name="agency_name2" value="<?php echo $agency_name; ?>">
                                    <p><i class="ti-lock"></i> Username and password are required for first time login
                                        to
                                        <?php echo $system; ?> via MalaysiaBiz </p>
                                    <form>
                                        <div class="row form-group">
                                            <div class=" col-3 text-left m-b-5"><label>Agency :</label></div>
                                            <div class="col-9 text-left m-b-5"><input type="agency" class="form-control form-control-sm"
                                                    id="agency" value="<?php echo $agency_name; ?>" readonly="true">
                                            </div>
                                            <div class=" col-3 text-left m-b-5"><label>Login ID Type :</label></div>
                                            <div class="col-9 text-left m-b-5">
                                                <select class="form-control form-control-sm">
                                                    <option>Select</option>
                                                    <option>Company Registration No.</option>
                                                    <option>Identity Card No.</option>
                                                    <option>Username</option>
                                                    <option>Passport No.</option>
                                                    <option>E-mail</option>
                                                </select>
                                            </div>
                                            <div class=" col-3 text-left m-b-5"><label>Login ID :</label></div>
                                            <div class="col-9 text-left m-b-5"> <input type="username" class="form-control form-control-sm"
                                                    id="username" placeholder="Login ID">
                                            </div>
                                            <div class=" col-3 text-left m-b-5"><label>Password :</label></div>
                                            <div class="col-9 text-left m-b-5"><input type="password" class="form-control form-control-sm"
                                                    id="password" placeholder="Password">
                                            </div>
											<div class="col-12 text-center text-danger">Invalid Login ID or Password. Please try again!</div>
                                        </div>
                                    </form>
                                     <p>
                                        <div>Note: User can register or reset password via
                                            <?php echo $system; ?>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-auto mr-auto"><a href="https://www.bqsm.gov.my/index.php/en/component/osemsc/" target="_blank" style="background-color: #ffff;" class="font-bold m-r-40">
											<button type="button" class="btn btn-rounded btn-block btn-outline-info btn-sm"> <i class="fas fa-user-plus m-r-5"></i>Register</button></a></div>
											
                                            <div class="col-auto" style="right: 0px; left: 142px;"><a href="https://www.bqsm.gov.my/reqsys/t/public/fpwd" target="_blank" style="background-color: #ffff;" class="font-bold m-l-40">
											<button type="button" class="btn btn-rounded btn-block btn-outline-info btn-sm">Forgot Password?</button></a></div>
										
											<div class="col-auto " style="padding-right: 0;height: 50px;top: 38px;right: 15px;"> <a href="https://www.bqsm.gov.my/reqsys/t/public/fpwd" target="_blank" style="background-color: #ffff;" class="font-bold m-l-40">
											<button type="button" class="btn btn-rounded btn-block btn-outline-info btn-sm">Forgot Username?</button></a></div>
											
                                        </div>
                                    </p>
                                </div>
                                <div class="modal-footer">
									
                                    <div class="text-right">
										<a class="btn btn-info waves-effect" role="button" data-toggle="modal" data-target="#modalIframeAgency" data-url="http://ilaunch13.duckdns.org/eljt/rsp/frmDealingView?dealId=1462&mode=newdetail">Verify</a>
                                        
                                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                </div>
                <?php else: ?>
				
			</div>
		</div>
	</div>
				
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="card-title">No record found.</h3>
                        <a href="#" class="btn btn-info" onclick="location.href = 'MyTray.php'">Refresh</a>
                    </div>
                </div>
                <?php endif; ?>

<!-- regestration LJTM MODAL -->
					<div class="modal fade bs-example-modal-lg" id="regLJTM" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="isLogin" name="isLogin">
                                    <input type="hidden" id="isRegister" value="isRegister">
                                    <p style="font-size: 12px;"> Registration is not available for this agency. Please contact Lembaga Jurukur Bahan Malaysia (LJBM) for any enquiries.</p>
                                </div>
                                <div class="modal-footer">
									
                                    
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<!-- forgot password LJTM MODAL -->
					<div class="modal fade bs-example-modal-lg" id="forpwLJTM" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="isLogin" name="isLogin">
                                    <input type="hidden" id="isRegister" value="isRegister">
                                    <p style="font-size: 12px;"> Forgot Password is not available for this agency. Please contact Lembaga Jurukur Bahan Malaysia (LJBM) for any enquiries.</p>
                                </div>
                                <div class="modal-footer">
                                    
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
				
				<?php include ('MyTray_Modal_Maklumat_Bisnes.php') ?>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- =========colappse #1 ===================================================== -->


    
