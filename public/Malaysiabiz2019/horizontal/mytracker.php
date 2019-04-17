<!DOCTYPE html>
<?php
extract($_REQUEST);
error_reporting(0);
include ('../../Connection/pg_connection.php');
if (!isset($agency_name)) {
    $agency_name = 'MBPP';
    echo "<script>location.href='mytracker.php?agency_name=0';</script>";
}
?>
<?php $page = 'mytracker';
include 'base.php'; 
?>

<!-- Accordian-part -->

 <div class="card filterbar">
      <div class="card-body innerbar">
            <div class="row">
               <div class="col-md-6 col-12 m-t-20">
               </div>
                <div class="col-md-3 col-12">
                    <div class="form-group has-success m-b-0">
                        <label style="font-size: 12px; display: block;"><i class="ti-filter"></i> Application Type</label>
                        <select id="jenis_permohonan" onchange="parameter()" class="custom-select form-control form-control-sm" id="inlineFormCustomSelect">
                            <option value="1" selected="">Show All</option>
                            <option value="2"  @php if($jenis == 2){echo 'selected';}@endphp>New</option>
                            <option value="3" @php if($jenis == 3){echo 'selected';}@endphp>Renewal</option>
                            <option value="4" @php if($jenis == 4){echo 'selected';}@endphp>Request for Change</option>
                            <option value="5" @php if($jenis == 5){echo 'selected';}@endphp>Request for Cancellation</option>
                            <option value="6" @php if($jenis == 6){echo 'selected';}@endphp>Request for Print</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="form-group has-success m-b-0">
                        <label style="font-size: 12px; display: block;"><i class="ti-filter"></i> Current Status</label>
                        <select id="status_terkini" onchange="parameter()" class=" custom-select form-control form-control-sm" id="inlineFormCustomSelect">
                            <option value="1" selected="">Show All</option>
                            <option value="2" @php if($status == 2){echo 'selected';}@endphp>Processing</option>
                            <option value="3" @php if($status == 3){echo 'selected';}@endphp>Request Feedback</option>
                            <option value="4" @php if($status == 4){echo 'selected';}@endphp>Approved</option>
                            <option value="5" @php if($status == 5){echo 'selected';}@endphp>Rejected</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        </div>
		
	
<!-- --------------------- -->
<!-- BUSINESS REGISTRATION -->
<!-- --------------------- -->
<?php include ('mytracker_Business_Registration.php'); ?>

<!-- ------------------ -->
<!-- BUSINESS LICENSING -->
<!-- ------------------ -->
<!-- /.modal-dialog -->

<div class="card m-b-0">
    <div class="card-header" role="tab" id="headingTwo2">
        <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo2" aria-expanded="false"
                aria-controls="collapseTwo2">
                <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to expand this panel or click again to close this panel">Business Licensing</span>
            </a>
        </h5>
    </div>
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">


        <div class="card-body">
            <div class="row page-titles">

                <!-- <div class="col-md-6 col-6 align-self-center">
                   <h3 class="text-themecolor m-b-0 m-t-0">MyTracker</h3>
                </div>
                <div class="col-md-6 col-6  text-right">	                    	
                            <button type="button" class="btn waves-effect waves-light btn-rounded btn-xs btn-info">
                                    <i class="ti-help"></i> Bantuan </button>						            
                                    </div>

                                    <div class="col-lg-12" >
                                            <div style="border-top: 1px solid #009efb; ">
                                            </div>
                                    </div> -->


                <div class="col-lg-12">
                    <div class="row m-t-10">
                        <div class="col-md-4 col-12"></div>
                        <div class="col-md-3 col-s-12">

                            <!-- <div class="form-group has-success m-b-0">
                                <label style="font-size: 12px;"><i class="ti-filter"></i> Agency </label>
                                <select class="custom-select form-control form-control-sm filter-w-responsive" id="agency_name"
                                    name="agency_name" onchange="goto('agency_name', this.value);">
                                    <option value="0" selected="">Show All</option>
                                    <option value="BLESS1.0" <?php if ($agency_name=="BLESS1.0" ) { ?>selected="true"
                                        <?php } ?>>BLESS1.0</option>
                                    <option value="BLESS2.0" <?php if ($agency_name=="BLESS2.0" ) { ?>selected="true"
                                        <?php } ?>>BLESS2.0</option>
                                    <option value="JAKIM" <?php if ($agency_name=="JAKIM" ) { ?>selected="true"
                                        <?php } ?>>JAKIM</option>
                                    <option value="MBPP" <?php if ($agency_name=="MBPP" ) { ?>selected="true"
                                        <?php } ?>>MBPP</option>
                                </select>
                            </div> -->
                        </div>
                        <div class="col-md-3 col-xs-12">

                            <div class="form-group has-success m-b-0">
                                <label style="font-size: 12px;"><i class="ti-filter"></i> Application Type</label>
                                <select class="custom-select form-control form-control-sm filter-w-responsive" id="application_type"
                                    name="application_type" onchange="goto('application_type', this.value);">
                                    <option value="0" selected="">Show All</option>
                                    <option value="New" <?php if ($application_type=="New" ) { ?>selected="true"
                                        <?php } ?>>New</option>
                                    <option value="Renewal" <?php if ($application_type=="Renewal" ) { ?>selected="true"
                                        <?php } ?>>Renewal</option>
                                    <option value="Request for Change" <?php if ($application_type=="Request for Change"
                                        ) { ?>selected="true"
                                        <?php } ?>>Request for Change</option>
                                    <option value="Request for Cancellation" <?php if ($application_type=="Request for Cancellation"
                                        ) { ?>selected="true"
                                        <?php } ?>>Request for Cancellation</option>
                                    <option value="Request for Print" <?php if ($application_type=="Request for Print"
                                        ) { ?>selected="true"
                                        <?php } ?>>Request for Print</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <div class="form-group has-success m-b-0">
                                <label style="font-size: 12px;"><i class="ti-filter"></i> Status</label>
                                <select class="custom-select form-control form-control-sm filter-w-responsive" id="status"
                                    name="status" onchange="goto('status', this.value);">
                                    <option value="0" selected="">Show All</option>
                                    <option value="Processing" <?php if ($application_type=="Processing" ) { ?>selected="true"
                                        <?php } ?>>Processing</option>
                                    <option value="Need Action" <?php if ($application_type=="Need Action" )
                                        { ?>selected="true"
                                        <?php } ?>>Need Action</option>
                                    <option value="Approved" <?php if ($application_type=="Approved" ) { ?>selected="true"
                                        <?php } ?>>Approved</option>
                                    <option value="Rejected" <?php if ($application_type=="Rejected" ) { ?>selected="true"
                                        <?php } ?>>Rejected</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- start display licence -->
                    <?php
                        $sqlMyTracker = "SELECT * FROM  \"public\".\"myTracker\" INNER JOIN \"public\".\"myBusiness\" ON \"myBusiness\".\"id_business\" = \"myTracker\".business_id where 1=1 ";
                        if ($agency_name && $agency_name !== '') {
                            $sqlMyTracker .= " and \"myTracker\".agency='" . $agency_name . "' ";
                        }
                        if ($application_type && $application_type !== '') {
                            $sqlMyTracker .= " and \"myTracker\".application_type ='" . $application_type . "' ";
                        }
                        if ($status && $status !== '') {
                            $sqlMyTracker .= " and \"myTracker\".status ='" . $status . "' ";
                        }
                        $sqlMyTracker .= " order by \"myTracker\".id asc";
                        //echo $sqlMyTracker;
                        $result2 = pg_query($pg_con, $sqlMyTracker);
                        $cntRow = pg_num_rows($result2);
						$number = 1;
                        if ($cntRow > 0) {
                            while ($row = pg_fetch_assoc($result2)) {
                                $refNo = $row['reference_no'];
                                ?>
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-9 col-9">
                                    <h3 class="box-title"><?php echo $number++; ?>. &nbsp <button type="button" class="btn btn-info btn-sm statusPermohonan"
                                        data-toggle="modal" data-id="<?php echo $row['id']; ?>" data-target="#status-permohonan">
                                        <i class="ti-file"></i>
                                        <?php echo $row['reference_no']; ?></button></h3>
                                </div>
                                <div class="col-sm-3 col-3">
                                    <div class="pull-right">
                                        <button type="button" class="btn btn-info btn-circle btn-sm" data-toggle="modal"
                                            data-target="#info-lesen"><i class="ti-info"></i> </button>
                                        <button type="button" class="btn btn-info btn-circle btn-sm" data-toggle="modal"
                                            data-target="#help-desk"><i class="icon-phone"></i> </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-lg-4 col-6">
                                    <h6 class="font-bold"><i class="far fa-file-alt"></i> Business Name</h6>
                                    <p>
                                        <?php echo $row['nama']; ?>
                                    </p>
                                    <h6 class="font-bold"><i class="far fa-file-alt"></i> Business No. </h6>
                                    <p>
                                        <?php echo $row['business_no']; ?>
                                    </p>
                                    <h6 class="font-bold"> <i class="far fa-flag"></i> Branch</h6>
                                    <p>
                                        <?php echo $row['branch']; ?>
                                    </p>

                                </div>
                                <div class="col-lg-4 col-6">

                                    <h6 class="font-bold"><i class="far fa-building"></i> Agency</h3>
                                        <p>
                                            <?php echo $row['agency_name']; ?>
                                        </p>

                                        <h6 class="font-bold"> <i class="far fa-window-restore"></i> System</h6>
                                        <p>
                                            <?php echo $row['system']; ?>
                                        </p>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <h6 class="font-bold"><i class="far fa-list-alt"></i> Application Type</h6>
                                    <p>
                                        <?php echo $row['application_type']; ?>
                                    </p>
                                    <h6 class="font-bold"><i class="far fa-calendar-alt"></i> Status</h6>
                                    <p>
                                        <?php
                                                    if ($row['status'] === 'Need Action') {
                                                        ?>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" onclick="actionRequestFeedback('<?php echo $row['agency']; ?>', '<?php echo $row['id']; ?>')">
                                            <i class="ti-pencil-alt"></i>
                                            <?php echo $row['status']; ?></button>
                                        <?php
                                                    } else if ($row['status'] === 'Approved') {
                                                        ?>
                                        <p class="m-b-0 font-weight-normal text-success"><i class="ti-check"></i><span
                                                class="m-l-10">Approve</span>
                                        </p>
                                        <?php
                                                } else if ($row['status'] === 'Rejected') {
                                                    ?>
                                        <p class="card-subtitle m-b-0 text-danger"><i class="ti-close"></i><span class="m-l-10">Rejected</span>
                                        </p>
                                        <?php
                                                } else {
                                                    ?>
                                        <p><span>
                                                <?php echo $row['status']; ?></span>
                                        </p>
                                        <?php
                                                }
                                                ?>

                                    </p>
                                </div>


                            </div>
                        </div>
                    </div>
					
					
					
					
					
                    <!-- modal permohonan -->
                    <div class="modal fade bs-example-modal-lg" id="status-permohonan" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">
                                        <div class="round align-self-center round-success"><i class="ti-info"></i></div>
                                        Application Information Details
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body-lesen">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <?php } // end of while ?>
                    <?php } else { ?>
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title">No record found.</h3>
                            <a href="#" class="btn btn-info" onclick="location.href = 'mytracker.php'">Refresh</a>
                        </div>
                    </div>
                    <?php } // end no data return  ?>
                    <div class="row m-b-10 text-center">
                        <div class="col-lg-12">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-outline-info">First</button>
                                <button type="button" class="btn btn-outline-info"><i class="ti-angle-double-left"></i></button>
                                <button type="button" class="btn btn-outline-info">1</button>
                                <button type="button" class="btn btn-outline-info">2</button>
                                <button type="button" class="btn btn-outline-info">3</button>
                                <button type="button" class="btn btn-outline-info"><i class="ti-angle-double-right"></i></button>
                                <button type="button" class="btn btn-outline-info">Last</button>
                            </div>
                        </div>
                    </div>

                    <!-- /.modal-dialog -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End accordian-part -->
<!-- Iframe Request Feedback JAKIM -->
					<div class="modal fade bs-example-modal-lg" id="iframe-requestfeedbackjakim" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-license modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Request Feedback</h4>

                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                        <iframe id="test" src="/demo-jakim/Sistem Pensijilan Halal Malaysia (e-Halal)-request feedback.html"  style="overflow: scroll; width:100%; height:400px"></iframe>

                                </div>
                                <div class="modal-footer">
                                   
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
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

<!-- /.modal -->


<!-- modal need action bless1.0-->
<div class="modal fade bs-example-modal-lg" id="perlu-tindakan-bless1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-tracker">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Need Action</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <iframe src="https://training.bless.gov.my/bless/action/main?tabs=MT&redirectUrl=/bless/action/intMyTask%3Fhome%3D1%26showCurrentTaskDetail%3D1%26licenseKey%3D652233-JBPM0002-BL2018000701-66833-0-36014350&stabs=MT-APP"
                    style="height:400px;width:100%"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal">Hantar</button>
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- modal need action jakim-->
<div class="modal fade bs-example-modal-lg" id="perlu-tindakan-jakim" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-tracker">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Need Action</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <iframe src="/demo-jakim/Request to amend - Jakim.html" style="height:500px;width:100%"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal">Submit</button>
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- modal need action mbpp-->
<form id="formRequestFeedbackMBPP" method="post" action="MyTracker_insert.php">
    <div class="modal fade bs-example-modal-lg" id="perlu-tindakan-mbpp" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-tracker">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Need Action</h4>
                    <input type="hidden" id="agensiMemohonMBPP" name="agensiMemohonMBPP" value="">
                    <input type="hidden" id="idReqFeedbackMBPP" name="idReqFeedbackMBPP" value="">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <iframe src="http://elesen.mbpp.gov.my/mppplic/temporary_ad_license/temporary_ad_license.jsp?strLicType=TAD"
                        style="height:500px;width:100%"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info waves-effect text-left" onclick="submitRequestFeedback()">Submit</button>
                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</form>
<!-- /.modal -->

<!-- modal helpdesk BlESS1.0-->
<div class="modal fade bs-example-modal-lg" id="help-desk" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Helpdesk System Agency</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Kindly contact MBPP Call Centre at 04-2592020 or email us at aduan@mbpp.gov.my for any enquiries.</p>
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

<!-- modal helpdesk BlESS2.0-->
<div class="modal fade bs-example-modal-lg" id="help-desk2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-tracker">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Helpdesk System BLESS2.0</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Kindly contact BLESS Call Centre at 1-300-88-1020 or email us at bless2.0@icu.gov.my for any
                    enquiries.</p>
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

<!-- modal helpdesk Lembaga Arkitek Malaysia---->
<div class="modal fade bs-example-modal-lg" id="help-desk3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Helpdesk System Agency</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Kindly contact Lembaga Arkitek Malaysia at 03-2698 2878 or email at info@lam.gov.my for any
                    enquiries.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal -->
	
	<!-- modal helpdesk Lembaga Juruukur Bahan Malaysia---->
    <div class="modal fade bs-example-modal-lg" id="help-desk4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Helpdesk System Agency</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                     <p>Kindly contact Lembaga Juruukur Bahan Malaysia at : <br> 
						 603 2610 8140 (Consulting QS Practice) / 603 2610 8147 (IT)
						or <br> email at <a href="info@bqsm.gov.my">info@bqsm.gov.my </a>for any enquiries.</p>
                </div>
                <div class="modal-footer">                                
                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- modal helpdesk Lembaga Juruukur Tanah Malaysia---->
<div class="modal fade bs-example-modal-lg" id="help-desk5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Helpdesk System Agency</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Kindly contact Lembaga Juruukur Tanah Malaysia at 03-4108 5191 or email at secretary@ljt.org.my for
                    any enquiries.</p>
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

<!-- modal pengesahan-->
<div class="modal fade bs-example-modal-lg" id="perlu-tindakan-login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-tracker">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Need Action</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body text-center">
                <h3><i class="ti-lock"></i> Login kali pertama ke sistem BLESS1.0! <br>Pengesahan kata laluan
                    diperlukan.</h3>
                <form>
                    <div class="form-group">

                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="actionTindakan()">Hantar</button>
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



<!-- modal info lesen-->
			<div class="modal fade bs-example-modal-lg" id="info-lesen" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
				aria-hidden="true" style="display: none;">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header" style="background:#222">
							<h4 class="modal-title" id="myLargeModalLabel" style="color:#ffff">
								<div class="round align-self-center round-success m-r-10"><i class="ti-info"></i></div>
								Business Information
							</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ffff;opacity: 1;">×</button>
						</div>
						<div class="modal-body" style="padding-top: 0">


							<div style="font-size: 12px">
								<table class="table color-table primary-table">

									<tbody>

										<tr>
											<td><b>Agency Name</b></td>

											<td>Lembaga Juruukur Bahan Malaysia (LJBM)<br><br>
											</td>
											<td>
												<div style="text-right;" class="printPage"><button type="button" class="btn btn-info btn-circle waves-effect text-right" onclick="window.print();"><i class="ti-printer" ></i></button></div>
											</td>
										</tr>
										<tr>
											<td><b>Profession</b></td>

											<td>Arkitek<br><br>
											</td>
										</tr>
										<tr>
											<td><b>Survice Field</b></td>

											<td>Seni Bina</td>
											<td><br><br>
											</td>
										</tr>
										<tr>
											<td><b>Business Entity</b></td>

											<td>Milikan Tunggal<br><br>
											</td>
										</tr>

										<tr>
											<td><b>Registration Type</b></td>

											<td>Baru<br><br>
											</td>
										</tr>
										<tr>
											<td><b>Activity Description</b></td>

											<td>Aktiviti untuk menjalankan perniagaan yang berasaskan aktiviti
												berkaitan arkitek dan seni bina dalaman kebenaran untuk entiti
												perniagaan menjalankan aktiviti yang berkaitan arkitek dan seni
												bina dalaman<br><br>
											</td>
										</tr>
										<tr>
											<td><b>Address
												</b></td>

											<td>Tingkat 17, Block F, <br>
												Ibu Pejabat JKR, Jalan Sultan Salahuddin, <br>
												50582 Kuala Lumpur, Malaysia<br><br>
											</td>
										</tr>
										<tr>
											<td><b>Rules</b></td>

											<td>Profesional Arkitek <br>
												Jam Perkhidmatan melebihi 40 Jam <br>
												Sudah bekerja lebih daripada 5 tahun <br>
												<br><br>
											</td>
										</tr>
										<tr>
											<td><b>Fee</b></td>

											<td>Bayaran Pendaftaran RM 400.00 <br>
												Bayaran Pengurusan RM 50.00<br><br>
											</td>
										</tr>
										<tr>
											<td><b>Validity Period</b></td>

											<td>Setahun Sahaja<br><br>
											</td>
										</tr>
										<tr>
											<td><b>Acts & Regulations</b></td>

											<td>The Architects Act 1967 <br>
												Act 117 And Architects Rules 1996<br><br>
											</td>
										</tr>
										<tr>
											<td><b>Online Service URL</b></td>

											<td><a href="http://www.lam.gov.my/" target="_blank">http://www.lam.gov.my/</a><br><br>
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
				<!-- /.modal-dialog -->
			</div>
<!-- /.modal -->



<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
</div>
<br>
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

@stop

@section('scripts')
<script src="../assets/scrolltotop.js"></script>

<style>
    .modal-dialog-tracker {
        max-width: 1135px;
        margin: 1.75rem auto;
        overflow-y: auto;
    }
</style>
<script>
    $('.statusPermohonan').on('click', function () {
        var id = $(this).data('id');
        //alert('id: '+id);
        $('.modal-body-lesen').load('getContent.php?id=' + id, function () {
            $('#status-permohonan').modal({
                show: true
            });
        });
    });

    $('.infoLesen').on('click', function () {
        var id = $(this).data('id2');
        //alert('Id: '+id);
        $('.modal-body-info-lesen').load('getContentLesen.php?id=' + id, function () {
            //$('#info-lesen').modal({show: true});
            $('#info-lesen').modal({
                show: true
            });
        });
    });

    //                                            $(document).ready(function () {
    //                                                $(document).on('click', '.btn-rounded', function () {
    //                                                    var id = $(this).data('id');
    //                                                    alert('id: '+id);
    //                                                    $("#usermanagment").html('<iframe src="getContent.php?id=' + id + '"></iframe>');
    //                                                });
    //                                            });

    function goto(field, value_field) {
        var valueUrl = field + "=" + value_field;
        var agencyName = $('#agency_name').val();
        var applicationType = $('#application_type').val();
        var status = $('#status').val();
        if (field === "agency_name") {
            valueUrl = valueUrl + "&application_type=" + applicationType + "&status=" + status;
        } else if (field === "application_type") {
            valueUrl = valueUrl + "&agency_name=" + agencyName + "&status=" + status;
        } else if (field === "status") {
            valueUrl = valueUrl + "&application_type=" + applicationType + "&agency_name=" + agencyName;
        }
        location.href = "mytracker.php?" + valueUrl;
    }

    function actionTindakan() {
        $('#perlu-tindakan-login').modal('hide');
        $('#perlu-tindakan').modal('show');
    }

    function actionRequestFeedback(agency, id) {
        $('#agensiMemohonMBPP').val(agency);
        $('#idReqFeedbackMBPP').val(id);
        if (agency === 'BLESS1.0') {
            $('#perlu-tindakan-bless1').modal('show');
        } else if (agency === 'JAKIM') {
            $('#perlu-tindakan-jakim').modal('show');
        } else if (agency === 'MBPP') {
            $('#perlu-tindakan-mbpp').modal('show');
        } else if (agency === 'BLESS2.0') {
            $('#perlu-tindakan-bless1').modal('show');
        }
    }

    function getDetailTracker() {
        $('#status-permohonan').modal('show');
    }

    function submitRequestFeedback() {

        //var idMBPP = $('#idReqFeedbackMBPP').val();
        //var agensiMemohonMBPP = $('#agensiMemohonMBPP').val();

        swal({
            title: "Are you sure?",
            text: "Your application will submit for processing. ",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, Submit it!",
            closeOnConfirm: false
        }, function () {
            swal("Submit!", "Your application request has been submitted.", "success");

            document.getElementById("formRequestFeedbackMBPP").submit();
            $('#perlu-tindakan-mbpp').modal('hide');
        });
    }

    //                                            jQuery(document).ready(function () {
    //                                                // Switchery
    //                                                var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    //                                                $('.js-switch').each(function () {
    //                                                    new Switchery($(this)[0], $(this).data());
    //                                                });
    //                                                // For select 2
    //                                                $(".select2").select2();
    //                                                $('.selectpicker').selectpicker();
    //                                                //Bootstrap-TouchSpin
    //                                                $(".vertical-spin").TouchSpin({
    //                                                    verticalbuttons: true,
    //                                                    verticalupclass: 'ti-plus',
    //                                                    verticaldownclass: 'ti-minus'
    //                                                });
    //                                                var vspinTrue = $(".vertical-spin").TouchSpin({
    //                                                    verticalbuttons: true
    //                                                });
    //                                                if (vspinTrue) {
    //                                                    $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
    //                                                }
    //                                                $("input[name='tch1']").TouchSpin({
    //                                                    min: 0,
    //                                                    max: 100,
    //                                                    step: 0.1,
    //                                                    decimals: 2,
    //                                                    boostat: 5,
    //                                                    maxboostedstep: 10,
    //                                                    postfix: '%'
    //                                                });
    //                                                $("input[name='tch2']").TouchSpin({
    //                                                    min: -1000000000,
    //                                                    max: 1000000000,
    //                                                    stepinterval: 50,
    //                                                    maxboostedstep: 10000000,
    //                                                    prefix: '$'
    //                                                });
    //                                                $("input[name='tch3']").TouchSpin();
    //                                                $("input[name='tch3_22']").TouchSpin({
    //                                                    initval: 40
    //                                                });
    //                                                $("input[name='tch5']").TouchSpin({
    //                                                    prefix: "pre",
    //                                                    postfix: "post"
    //                                                });
    //                                                // For multiselect
    //                                                $('#pre-selected-options').multiSelect();
    //                                                $('#optgroup').multiSelect({
    //                                                    selectableOptgroup: true
    //                                                });
    //                                                $('#public-methods').multiSelect();
    //                                                $('#select-all').click(function () {
    //                                                    $('#public-methods').multiSelect('select_all');
    //                                                    return false;
    //                                                });
    //                                                $('#deselect-all').click(function () {
    //                                                    $('#public-methods').multiSelect('deselect_all');
    //                                                    return false;
    //                                                });
    //                                                $('#refresh').on('click', function () {
    //                                                    $('#public-methods').multiSelect('refresh');
    //                                                    return false;
    //                                                });
    //                                                $('#add-option').on('click', function () {
    //                                                    $('#public-methods').multiSelect('addOption', {
    //                                                        value: 42,
    //                                                        text: 'test 42',
    //                                                        index: 0
    //                                                    });
    //                                                    return false;
    //                                                });
    //                                                $(".ajax").select2({
    //                                                    ajax: {
    //                                                        url: "https://api.github.com/search/repositories",
    //                                                        dataType: 'json',
    //                                                        delay: 250,
    //                                                        data: function (params) {
    //                                                            return {
    //                                                                q: params.term, // search term
    //                                                                page: params.page
    //                                                            };
    //                                                        },
    //                                                        processResults: function (data, params) {
    //                                                            // parse the results into the format expected by Select2
    //                                                            // since we are using custom formatting functions we do not need to
    //                                                            // alter the remote JSON data, except to indicate that infinite
    //                                                            // scrolling can be used
    //                                                            params.page = params.page || 1;
    //                                                            return {
    //                                                                results: data.items,
    //                                                                pagination: {
    //                                                                    more: (params.page * 30) < data.total_count
    //                                                                }
    //                                                            };
    //                                                        },
    //                                                        cache: true
    //                                                    },
    //                                                    escapeMarkup: function (markup) {
    //                                                        return markup;
    //                                                    }, // let our custom formatter work
    //                                                    minimumInputLength: 1,
    //                                                    templateResult: formatRepo, // omitted for brevity, see the source of this page
    //                                                    templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
    //                                                });
    //                                            }
    //                                            );


    // START - Business_Registration_functions

    var registration_modal_data = <?php echo $modalData[0]["json_agg"] ?>;

    var find_modal_data = function (reference_no) {
        return _.find(registration_modal_data, {
            'reference_no': reference_no
        })
    }

    var renderTracker = function (data) {
        $('.tracker-point').empty()
        //put all aliments
        var var_tracker = ['my_tray', 'submit', 'complete', 'process', 'approved', 'active']

        var el_trackers = _.reduce(data, function (el, item, key) {
            if (var_tracker.indexOf(key) != -1) {
                var k = key == 'my_tray' ? 'MyTray' : key.toUpperCase()
				 var k = key == 'approved' ? 'APPROVAL' : key.toUpperCase()
                var is_done = el.length < data['current_track']
                var ti = is_done ? `<i class="ti-check"></i>` : `<i class="ti-close"></i>`
                var process_class =  is_done ? 'round-success' : 'round-danger'
                var dates  =  item.split('-')
                el.push(
                    `<div class="col-2 text-center">
                        <p><small>${k}</small> <br> <span class="round round-sm ${process_class}">
                            ${ti}
                            </span>
                            <br><small>${dates[2]}/${dates[1]}/${dates[0]}</small></p>
                    </div>`
                );
            }
            return el;
        }, []);

        return el_trackers;
    }

    var renderProgressBar =  function(current_status){
        var status = parseInt((current_status-1)*20)
        // status = status%2 == 0 ? status+10 : status
        $('[name=progress-bar]').attr('style',`width:${status}% ; height:6px;`);
    }

    var renderInfo = function(data){
        _.each(data,function(val,key){
            $(`td[name=${key}]`).html(val)
        })
    }

    function bizRegDefineOptions(selectElement,optValue){
        var arrayItems = [];
        var options  = selectElement.find('option');
        $.each(options,function(index,opt){
            arrayItems.push($(opt).val())
        }) 

        if( arrayItems.indexOf(optValue) > -1 ){
            selectElement.val(optValue)
        }else{
            selectElement.val('0')
        }
    }

    $(function () {

        //---------------------------------
        //Business register load functions
        //---------------------------------

        var business_reg_agency_name = <?php echo '"'.$business_reg_agency_name.'"'; ?>;
        var business_reg_application_type = <?php echo '"'.$business_reg_application_type.'"'; ?>;
        var business_reg_status = <?php echo '"'.$business_reg_status.'"'; ?>;

         //----START-defined options value----
        bizRegDefineOptions($('#business_reg_agency_name'),business_reg_agency_name)
        bizRegDefineOptions($('#business_reg_application_type'),business_reg_application_type)
        bizRegDefineOptions($('#business_reg_status'),business_reg_status)

        $("#registration-status").on('show.bs.modal', function (e) {
            var data = find_modal_data(e.relatedTarget.dataset.reference)
            $('.tracker-point').empty()
            $('.tracker-point').html(renderTracker(data));
            renderProgressBar(data['current_track']);
            renderInfo(data);
        });

       

    });
</script>
</body>

</html>