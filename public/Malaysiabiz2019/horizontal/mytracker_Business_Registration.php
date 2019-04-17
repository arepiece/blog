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
SELECT "public"."myTracker_business_registration".agency 
FROM "public"."myTracker_business_registration" 
GROUP BY "public"."myTracker_business_registration".agency 
ORDER BY "public"."myTracker_business_registration".agency ASC
SQL;

$result = pg_query($pg_con, $sql);
$allBusinessRegAgenciesTypes = pg_fetch_all($result);


$where_agency_name = $agency_name && $agency_name !== "0" ? "WHERE \"agency\" = '$agency_name' ": "";
$where_agency_status = $status && $status !== "0" ? "WHERE \"status\" = '$status' ": "";
$where_application_type = $application_type && $application_type !== "0" ? "WHERE \"application_type\" = '$application_type' ": "";


$sql = <<<SQL
SELECT *
FROM "public"."myTracker_business_registration"
$where_agency_name
$where_agency_status
$where_application_type
ORDER BY "public"."myTracker_business_registration"."id" ASC 
SQL;


$result = pg_query($pg_con, $sql);
$allBusinessRegAgencies = pg_fetch_all($result);

$isRenderBusinessItems =  in_array($agency_name,arrayFlatten($allBusinessRegAgenciesTypes)) || !empty($allBusinessRegAgencies);

//redefined url params
$business_reg_agency_name = $agency_name;
$business_reg_application_type = $application_type;
$business_reg_status = $status;

//modal
$sql = <<<SQL
select json_agg(row_to_json(t))
from (
    SELECT *
    FROM "public"."myTracker_business_registration_modal"
    
    ORDER BY "public"."myTracker_business_registration_modal"."id" ASC 
) as t;
SQL;



$result = pg_query($pg_con, $sql);
$modalData = pg_fetch_all($result);
// var_dump($allModalData);



?>

                <!-- My Tracker cards -->
	<div class ="noprint">
        <div class="row nomargintop">        
            <div class="col-12">
				
                <?php foreach($allBusinessRegAgencies as $key=>$businessReg) : ?>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 col-6">
                                <?php $key++; echo "$key."; ?> &nbsp 
                                <?php if ($businessReg['reference_no']=='1458' || $businessReg['reference_no'] == 'CQSP-A1/2018/123263') { ?>

                                <button type="button" class="btn btn-default btn-sm" data-toggle="modal"data-target="#registration-status" data-reference="<?php echo $businessReg['reference_no']?>">
                                    <i class="ti-file" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reference No"></i>
                                    <?php echo $businessReg['reference_no'] ?>
                                </button>

                                    <?php }else { ?> 

                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                    data-target="#registration-status" data-reference="<?php echo $businessReg['reference_no']?>">
                                    <i class="ti-file" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reference No"></i>
                                    <?php echo $businessReg['reference_no'] ?>
                                </button>
                                <?php } ?> 
                                    
                            </div>
                            <div class="col-md-4 col-6 text-right">
                                <button type="button" class="btn btn-sm btn-info btn-circle" data-toggle="modal"
                                    data-target="#info-lesen"><i class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i> </button>
                                <button type="button" class="btn btn-sm btn-info btn-circle" data-toggle="modal"
                                    data-target="#help-desk<?php echo "$key"; ?>"><i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> </button>
                                <div class="btn-group">
                                    <div class="dropdown-menu dropdown-menu-right" x-placement="top-start" style="position: absolute; transform: translate3d(0px, -2px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item" data-toggle="modal" onclick="tindakanMohon('9', 'MBPP', 'Complete', 'New', 'Yes', 'Yes');">
                                            <i class="ti-pencil-alt"></i> Apply</a>
                                        <a class="dropdown-item" href="#" onclick="hideCard('b2a');"> <i class="ti-trash"></i>
                                            Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-6">
                                <h6 class="font-bold"><i class="far fa-file-alt"></i> Business Name</h6>
                                <p>
                                    <?php echo $businessReg['business_name'] ?>
                                </p>
                                <h6 class="font-bold"><i class="fas fa-braille"></i> Business Entity </h6>
                                <p>
                                    <?php echo $businessReg['business_entity']; ?>
                                </p>
                            </div>

                            <div class="col-lg-4 col-6">
                                <h6 class="font-bold"><i class="far fa-building"></i> Agency</h6>
                                <p>
                                    <?php echo $businessReg['agency_name'] ?> (
                                    <?php echo $businessReg['agency'];?>)</p>
                                <h6 class="font-bold"> <i class="far fa-window-restore"></i> System</h6>
                                <p>
                                    <?php echo $businessReg['system'];?>
                                </p>
                            </div>

                            <div class="col-lg-4 col-6">
                                <h6 class="font-bold"><i class="far fa-list-alt"></i> Application Type</h6>
                                <p>
                                    <?php echo $businessReg['application_type'] ?>
                                </p>
                                <h6 class="font-bold"><i class="fas fa-shipping-fast"></i> Status Application</h6>
                                <p>
                                    <?php echo $businessReg['status'];?> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
				
				
                <?php endforeach; ?>
				
			</div>
		</div>
	</div>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
           
<!-- modal LJTM Request Feedback -->
                    <div class="modal fade bs-example-modal-lg" id="requestfeedback" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="isLogin" name="isLogin">
                                    <input type="hidden" id="isRegister" value="isRegister">
                                    <p style="font-size: 12px;">Your firm has expired. Do you want to renew this firm?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" onClick="actionRequestFeedback()">Yes</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					<div class="modal fade bs-example-modal-lg" id="iframe-requestfeedback" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-license modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Request Feedback</h4>

                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                        <iframe id="test" src="/demo-ljtm/RF.png"  style="overflow: scroll; width:100%; height:400px"></iframe>

                                </div>
                                <div class="modal-footer">
                                   <!-- <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="actionHantar()">Submit</button> -->
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>


<!-- Modal SECTION -->
		<div class="modal fade bs-example-modal-lg" id="registration-status" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
			aria-hidden="true" style="display: none;">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myLargeModalLabel">
							<div class="round align-self-center round-success"><i class="ti-info"></i></div> Application Information Details
							   
						</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<div class="row tracker-progress">
							<div class="col-12">
								<div class="progress-bar bg-success wow animated progress-animated" style="width: 60%; height:6px;"
									role="progressbar" name="progress-bar"> <span class="sr-only">100% Complete</span>
								</div>
							</div>
						</div>
						<div class="row tracker-point">
							<div class="col-2 text-center">
								<p><small >MyTray</small> <br> <span class="round round-sm round-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information" >
										<i class="ti-check" ></i>
									</span>
									<br><small>10/09/2018</small></p>
							</div>
							<div class="col-2 text-center">
								<p><small>Submit</small> <br> <span class="round round-sm round-success">
										<i class="ti-check"></i>
									</span>
									<br><small>10/10/2018</small></p>
							</div>
							<div class="col-2 text-center">
								<p><small>Complete</small> <br> <span class="round round-sm round-success">
										<i class="ti-check"></i>
									</span>
									<br><small>10/11/2018</small></p>
							</div>
							<div class="col-2 text-center">
								<p><small>Process</small> <br> <span class="round round-sm round-success">
										<i class="ti-check"></i>
									</span>
									<br><small>10/12/2018</small></p>
							</div>
							<div class="col-2 text-center">
								<p><small>Approval</small> <br> <span class="round round-sm round-danger">
										<i class="ti-close"></i>
									</span>
									<br><small>10/01/2019</small></p>
							</div>
							<div class="col-2 text-center">
								<p><small>Active</small> <br> <span class="round round-sm round-danger">
										<i class="ti-close"></i>
									</span>
									<br><small>10/18/2019</small></p>
							</div>
						</div>
						<div class="row m-t-10">
							<div class="col-12">
							<div class="row">
								<h4 class="col-md-8 col-6 text-right m-b-10">
									Applicant Information
								</h4>
								<!--<div style="margin-left:184px">	
								<button type="button" class="btn btn-sm btn-info btn-circle" data-toggle="modal" 
										data-target="#iframe-printljbm"><i class="ti-printer"></i> 
								</button>
								</div> -->
									<div class="row col-6" style="left:420px">
									 <div class="col-6" style="padding-right: 0px; padding-left: 72px;"> <button type="button" class="btn btn-info btn-xs waves-effect text-right" data-toggle="modal" data-target="#iframe-printbil"><i class="ti-printer" onclick="window.print();"></i>&nbsp; Print Registration Bill</button></div>
									  <div class="col-6" style="padding-right: 0px;padding-left: 33px;"><button type="button" class="btn btn-info btn-xs waves-effect text-right" data-toggle="modal" data-target="#iframe-printapp"><i class="ti-printer" onclick="window.print();"></i>&nbsp; Print Application Form</button></div>
									 </div>
									 
									<!-- <div class="row col-6" style="left:420px">
									 <div class="col-6" style="padding-right: 0px; padding-left: 72px;"> <button type="button" class="btn btn-info btn-xs waves-effect text-right" data-toggle="modal" data-target="#iframe-printbiljakim"><i class="ti-printer" onclick="window.print();"></i>&nbsp; Print Bil Pendaftaran</button></div>
									 </div> -->
							</div>
									 
								<div class="table-responsive" style="font-size: 12px;">
									<table class="table">
										<tbody id="info">
											<tr>
												<td class="font-bold"> Business Name</td>
												<td name="business_name"></td>
											</tr>
											<tr>
												<td class="font-bold">Reference No.</td>
												<td name="business_no"> </td>
											</tr>
											<tr>
												<td class="font-bold">Registration Type</td>
												<td name="registration_type"> </td>
											</tr>
											<tr>
												<td class="font-bold">Business Entity</td>
												<td name="business_entity"> </td>
											</tr>

											<tr>
												<td class="font-bold">Agency</td>
												<td name="agency_name"> </td>
											</tr>
											<tr>
												<td class="font-bold">Category</td>
												<td name="category"> </td>
											</tr>
											<tr>
												<td class="font-bold">Application Status (Agency)</td>
												<td name="status_detail"> </td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					
					<div>
					<p class="font-weight-normal" style="margin-left: 29px;font-size: 11px;margin-bottom:3px;"> <a class="font-bold" style="color:#fc4b6c">Note:</a><a> The date for each point (Application Information Details) above referring to :</a></p>
					</div>
					
					<dl class="row">
						<dt class="col-sm-1 font-weight-light" style="margin-left: 29px;margin-bottom:0px;font-size: 10px; color:#1e88e5;">My_Tray</dt>
						<dd class="col-sm-10" style="padding:0;margin-bottom:0px;font-size: 10px;">The application form been saved in My_Tray.</dd>
						
						<dt class="col-sm-1 font-weight-light" style="margin-left: 29px;margin-bottom:0px;font-size: 10px; color:#1e88e5;">Submit</dt>
						<dd class="col-sm-10" style="padding:0;margin-bottom:0px;font-size: 10px;">The application form been submitted to agencies.</dd>
						
						<dt class="col-sm-1 font-weight-light" style="margin-left: 29px;margin-bottom:0px;font-size: 10px; color:#1e88e5;">Complete</dt>
						<dd class="col-sm-10" style="padding:0;margin-bottom:0px;font-size: 10px;">The application form been verified by agencies.</dd>
						
						<dt class="col-sm-1 font-weight-light" style="margin-left: 29px;margin-bottom:0px;font-size: 10px; color:#1e88e5;">Process</dt>
						<dd class="col-sm-10" style="padding:0;margin-bottom:0px;font-size: 10px;">Latest application has been processed.</dd>
						
						<dt class="col-sm-1 font-weight-light" style="margin-left: 29px;margin-bottom:0px;font-size: 10px; color:#1e88e5;">Approval</dt>
						<dd class="col-sm-10" style="padding:0;margin-bottom:0px;font-size: 10px;">The application form been approved or rejected.</dd>
						
						<dt class="col-sm-1 font-weight-light" style="margin-left: 29px;margin-bottom:0px;font-size: 10px; color:#1e88e5;">Active</dt>
						<dd class="col-sm-10" style="padding:0;margin-bottom:0px;font-size: 10px;">The application form been activated.</dd>

					</dl>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
			<!-- /.modal-content -->
		</div>


					<div class="modal mobile-nav-modal fade bd-example-modal-lg" id="iframe-printbil" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-license modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Print Bil Pendaftaran</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                        <iframe id="test" src="/demo-ljtm/printbilljtm.pdf"  style="overflow: scroll; width:100%; height:400px"></iframe>
								</div>
                                <div class="modal-footer">
                                     <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="modal mobile-nav-modal fade bd-example-modal-lg" id="iframe-printapp" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-license modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Print Application Form</h4>

                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                        <iframe id="test" src="/demo-ljtm/printappljtm.pdf"  style="overflow: scroll; width:100%; height:400px"></iframe>
										</div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="modal mobile-nav-modal fade bd-example-modal-lg" id="iframe-printbiljakim" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-license modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Print Maklumat</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                        <iframe id="test" src="/demo-jakim/printjakim.pdf"  style="overflow: scroll; width:100%; height:400px"></iframe>
								</div>
                                <div class="modal-footer">
                                     <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="modal mobile-nav-modal fade bd-example-modal-lg" id="iframe-printljbm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-license modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Cetak LJBM</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                        <iframe id="test" src="/demo-ljbm/FormCQSP-A1.pdf"  style="overflow: scroll; width:100%; height:400px"></iframe>
								</div>
                                <div class="modal-footer">
                                     <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<?php foreach($allBusinessRegAgencies as $key=>$businessReg) : ?><?php $key++; ?>
				<div class="modal fade bs-example-modal-lg" id="help-desk<?php echo "$key"; ?>" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myLargeModalLabel">Helpdesk System Agency</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>
							<div class="modal-body">
								<p>
								<?php echo $businessReg['helpdesk'] ?>
								
								</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>

					
<script>
$(document).ready(function(){
    $('input[rel="txtTooltip"]').tooltip();
});
</script>
<script> <!-- custom modal switch on/off -->
			function actionRequestFeedback() {
                                            $('#requestfeedback').modal('hide');
                                            $('#iframe-requestfeedback').modal('show');
                                        }
										</script>