<!DOCTYPE html>
<?php
extract($_REQUEST);
error_reporting(0);
include ('../../Connection/pg_connection.php');
if (!isset($agency_name)) {
    $agency_name = '0';
    echo "<script>location.href='MyTray.php?agency_name=0';</script>";
}

if ($agency_name === 'MBPP') {
    $system = 'eLesen';
} else if ($agency_name === 'JAKIM') {
    $system = 'MYeHALAL';
} else if ($agency_name === 'BLESS2.0') {
    $system = 'BLESS2.0';
} else if ($agency_name === 'BLESS1.0') {
    $system = 'BLESS1.0';
}
?>
<?php $page = 'MyTray';
include 'base.php';
?>

<!-- Accordian-part -->


	<div class ="noprint">
        <div class="row m-b-10">
            <div class="col-lg-12" >
                <div class="card filterbar">
                    <div class="card-body innerbar">
                        <div class="row">
                            <div class="col-md-6 m-t-20 m-b-10">
                                <a href="/pelesenan" title="Add New License" class="btn btn-info">
                                    <i class="ti-plus"></i> Add License </a>
                            </div>
                            <div class="col-md-2">
                                 <div class="form-group has-success m-b-0">
                                    <label style="font-size: 12px;"><i class="ti-filter"></i> Agency  &nbsp &nbsp </label>
                                    <select class="custom-select form-control form-control-sm" 
										id="business_reg_agency_name"
                                        onchange="goto('agency_name', this.value);"
                                        name="agency_name" >
                                        <option value="0" selected="">Show All</option>
									<?php foreach($allBusinessRegAgenciesTypes as $businessReg) : ?>
                                        <?php $businessReg = $businessReg['agency']; ?>
                                        <?php echo '<option value="'.$businessReg.'">'.$businessReg.'</option>'; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div> 
                            </div>
                            <div class="col-md-2">
                                <div class="form-group has-success m-b-10">
                                    <label style="font-size: 12px; display: block;"><i class="ti-filter"></i> Application Type</label>
                                    <select class="custom-select form-control form-control-sm" 
                                            id="application_type" 
                                            name="application_type" 
                                            onchange="goto('application_type', this.value);">
                                        <option value="0" @if($selection['application_type']  == '0') selected="selected" @endif>Show All</option>
                                        <option value="1" @if($selection['application_type']  == '1') selected="selected" @endif>New</option>
                                        <option value="2" @if($selection['application_type']  == '2') selected="selected" @endif>Renewal</option>
                                        <option value="3" @if($selection['application_type']  == '3') selected="selected" @endif>Request for Change</option>
                                        <option value="4" @if($selection['application_type']  == '4') selected="selected" @endif>Request for Cancellation</option>
                                        <option value="5" @if($selection['application_type']  == '5') selected="selected" @endif>Request for Print</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group has-success m-b-0">
                                    <label style="font-size: 12px; display: block;"><i class="ti-filter"></i> Status</label>
                                    <select class=" custom-select form-control form-control-sm" id="status" name="status" 
                                            onchange="goto('status', this.value);">
                                        <option value="0" @if($selection['status']  == '0') selected="selected" @endif>Show All</option>
                                        <option id="recent" value="1" @if($selection['status']  == '1') selected="selected" @endif>Recent</option>                
                                        <option value="2" @if($selection['status']  == '2') selected="selected" @endif>Completed</option>
                                        <option value="3" @if($selection['status']  == '3') selected="selected" @endif>Incomplete</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- ===================== -->
<!-- Business Registration -->
<!-- ===================== -->
<?php include('MyTray_Business_Registration.php')?>


<!-- ========================== -->
<!-- Business Licensing -->
<!-- =========================== -->
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
                <div class="col-lg-12">
                    <div class="row m-t-10">
                        <div class="col-lg-4 col-12">
                            <a href="/pelesenan"><button class="btn btn-sm waves-effect-light btn-info"><i class="ti-plus m-r-5"></i> Add Registration</button></a> 
                        </div>
                        <div class="col-lg-3 col-6">

                             <div class="form-group has-success m-b-0">
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
                            </div>
                            <input type="hidden" id="set-clicker" value="0">
                        </div>
                        <div class="col-lg-2 col-12">

                            <div class="form-group has-success m-b-0">
                                <label style="font-size: 12px;"><i class="ti-filter"></i> Application Type</label>
                                <select class="custom-select form-control form-control-sm" id="application_type"
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
                        <div class="col-lg-2 col-12">
                            <div class="form-group has-success m-b-0">
                                <label style="font-size: 12px;"><i class="ti-filter"></i> Status</label>
                                <select class=" custom-select form-control form-control-sm" id="status"
                                    name="status" onchange="goto('status', this.value);">
                                    <option value="0" selected="">Show All</option>
                                    <option value="Recent" <?php if ($status=="Recent" ) { ?>selected="true"
                                        <?php } ?>>Recent</option>
                                    <option value="Complete" <?php if ($status=="Complete" ) { ?>selected="true"
                                        <?php } ?>>Complete</option>
                                    <option value="Incomplete" <?php if ($status=="Incomplete" ) { ?>selected="true"
                                        <?php } ?>>Incomplete</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <?php
                    $sqlMyTray = "SELECT * FROM  \"public\".\"myTray\" LEFT JOIN \"public\".\"myBusiness\" ON \"myBusiness\".\"id_business\" = \"myTray\".business_id where 1=1 ";
                    if ($agency_name && $agency_name !== '') {
                        $sqlMyTray .= " and \"myTray\".agency='" . $agency_name . "' ";
                    }
                    if ($application_type && $application_type !== '') {
                        $sqlMyTray .= " and \"myTray\".application_type ='" . $application_type . "' ";
                    }
                    if ($status && $status !== '') {
                        $sqlMyTray .= " and \"myTray\".status ='" . $status . "' ";
                    }
                    $sqlMyTray .= " and \"myTray\".submit = 0 order by \"myTray\".id asc";
                    // echo 'X: ' . $sqlMyTray;
                    $result = pg_query($pg_con, $sqlMyTray);

                    $cntRow = pg_num_rows($result);
					$number = 1;
                    if ($cntRow > 0) {
                        while ($row = pg_fetch_assoc($result)) {
                            ?>
                <div class="card" id="b2a" style="border-radius: 10px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 col-6">
                                <h3 class="box-title m-t-10 m-b-10">
                                    <?php echo $number++; ?>.<i class="far fa-id-card m-r-10" style="margin-left:0.5rem"></i>
                                    <?php echo $row['licence_name']; ?>
                                </h3>
                            </div>
                            <div class="col-md-4 col-6 text-right">
                                <button type="button" class="btn btn-sm btn-info btn-circle" data-toggle="modal"
                                    data-target="#info-lesen" title="<?php echo $row['tooltip']; ?>"><i class="ti-info"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-info btn-circle" data-toggle="modal"
                                    data-target="#help-desk">
                                    <i class="ti-headphone-alt"></i> </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                   
								   <div class="dropdown-menu dropdown-menu-right" style="position: absolute; transform: translate3d(0px, -2px, 0px); top: 0px; left: 0px;" >
                                            <?php if ($row['status_register'] === 'Yes'): ?>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#modalIframeAgency" data-url="<?php echo $row['iframe_url']; ?>" >
                                            <i class="ti-pencil-alt"></i>
                                                Apply</a>
                                            <?php else: ?>
											
                                            <a class="dropdown-item" data-toggle="modal" data-target="#modalIframeAgency" data-url="<?php echo $row['iframe_url']; ?>" > <!--onclick="bizRegLogin('<?php echo $row['iframe_url'] ?>')"-->  <i
                                                    class="ti-pencil-alt"></i>
                                                Apply</a>
                                            <?php endif; ?>
                                            <!-- <a class="dropdown-item"> <i class="ti-printer"></i> Print</a> -->
                                            <a class="dropdown-item" onclick="hideCard('b2a');"> <i class="ti-trash"></i>
                                                Remove</a>
                                        </div>
								   
								   
								   
								   
								   
								   <!-- <div class="dropdown-menu dropdown-menu-right" x-placement="top-start" style="position: absolute; transform: translate3d(0px, -2px, 0px); top: 0px; left: 0px; will-change: transform;">
									   
									    <a class="dropdown-item" data-toggle="modal" onclick="tindakanMohon('<?php echo $row['id']; ?>', '<?php echo $row['agency']; ?>', '<?php echo $row['status']; ?>', '<?php echo $row['application_type']; ?>', '<?php echo $row['first_login']; ?>', '<?php echo $row['status_register']; ?>');">
                                            <i class="ti-pencil-alt"></i> Apply</a>
                                        <a class="dropdown-item" href="#" onclick="hideCard('b2a');"> <i class="ti-trash"></i>
                                            Remove</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-6">
                                <h6 class="font-bold"><i class="far fa-file-alt"></i> Business Name</h6>
                                <p>
                                    <?php if($row['nama'] != null){ echo $row['nama']; }else{ ?> -
                                    <?php } ?>
                                </p>
                                <h6 class="font-bold"><i class="fas fa-braille"></i> Business No. </h6>
                                <p>
                                    <?php if($row['business_no'] != null){ echo $row['business_no']; }else{ ?> -
                                    <?php } ?>
                                </p>
                                <h6 class="font-bold"> <i class="far fa-flag"></i> Branch</h6>
                                <p>
                                    <?php if($row['branch'] != null){ echo $row['branch']; }else{ ?> -
                                    <?php } ?>
                                </p>

                            </div>
                            <div class="col-lg-4 col-6">
                                <h6 class="font-bold"><i class="far fa-building"></i> Agency</h6>
                                <p>
                                    <?php echo $row['agency_name']; ?>
                                </p>
                                <h6 class="font-bold"> <i class="far fa-window-restore"></i> System</h6>
                                <p>
                                    <?php echo $row['system']; ?>
                                </p>
                            </div>

                            <!-- <div class="col-lg-3 col-12">                                                                

                                        </div> -->

                            <div class="col-lg-4 col-6">
                                <h6 class="font-bold"><i class="far fa-list-alt"></i> Application Type</h6>
                                <p>
                                    <?php echo $row['application_type']; ?>
                                </p>
                                <h6 class="font-bold"><i class="fas fa-shipping-fast"></i> Status</h6>
                                <p>
                                    <?php
                                                if ($row['status'] === 'Request Feedback') {
                                                    ?>
                                    <button type="button" class="btn btn-warning btn-rounded" data-toggle="modal"
                                        onclick="actionRequestFeedback('<?php echo $row['agency']; ?>', '<?php echo $row['id']; ?>')">
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
                                    <p class="m-b-0 font-weight-normal text-danger"><i class="ti-close"></i><span class="m-l-10">Rejected</span>
                                    </p>
                                    <?php
                                            } else {
                                                ?>
                                    <p class="m-b-0 font-weight-normal"><span>
                                            <?php echo $row['status']; ?></span>
                                    </p>
                                    <?php
                                            }
                                            ?>

                                </p>
                                <h6 class="font-bold"><i class="far fa-file"></i> Reference No</h6>
                                <p>
                                    <?php echo $row['reference_no']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } // end of while ?>



                <?php } else { ?>
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="card-title">No record found.</h3>
                        <a href="#" class="btn btn-info" onclick="location.href = 'MyTray.php'">Refresh</a>
                    </div>
                </div>
                <?php } // end no data return ?>
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
                <!-- modal perlu register-->
                <div class="modal fade bs-example-modal-lg" id="perlu-register" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i>
                                    Attention!</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <p style="text-align: center">You have not registered in BLESS1.0. <br>You can register
                                    now by clicking the <b>"YES"</b> button.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" onClick="actionPerluRegister()">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                            </div>
                        </div><!-- /.modal-content -->
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <!-- modal perlu register-bless2-->
                <div class="modal fade bs-example-modal-lg" id="perlu-register-bless2" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i>
                                    Attention!</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <p style="text-align: center">You have not registered in BLESS2.0. <br>You can register
                                    now by clicking the <b>"YES"</b> button.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" onClick="actionPerluRegisterBless2()">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                            </div>
                        </div><!-- /.modal-content -->
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <!-- modal tindakan login JAKIM-->
                <div class="modal fade bs-example-modal-lg" id="perlu-tindakan-login" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-login">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i>
                                    Attention!</p>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body text-center small-text">
                                <input type="hidden" id="agency_name2" name="agency_name2" value="<?php echo $agency_name; ?>">
                                <p><i class="ti-lock"></i> Username and password are required for first time login to
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
                                    <div class="row text-center">
                                        <div class="col-auto mr-auto"><a onclick="registerAccount()" class="font-bold m-r-40"><button
                                                    type="button" class="btn btn-rounded btn-block btn-outline-info btn-sm"><i
                                                        class="fas fa-user-plus m-r-5"></i>Register</button></a></div>
                                        <div class="col-auto"><a oncl href="http://elesen.mbpp.gov.my/mppplic/user_account/forget_password.jsp"
                                                target="blank" class="font-bold m-l-40"><button type="button" class="btn btn-rounded btn-block btn-outline-info btn-sm">Forgot
                                                    Password?</button></a></div>
                                    </div>
                                </p>
                            </div>
                            <div class="modal-footer">

                                <div class="text-right">
                                    <button type="button" class="btn btn-info waves-effect" onclick="actionLogin()">Submit</button>
                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal login failed-->
                <div class="modal fade bs-example-modal-lg" id="login-failed" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-login">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i>
                                    Attention!</p>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body text-center">
                                <p style="font-size: 12px;">Invalid username and password. Please try again!! </p>

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

                <!-- /.modal login failed-->
                <div class="modal fade bs-example-modal-lg" id="login-failed-3times" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-login">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i>
                                    Attention!</p>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body text-center">
                                <p style="font-size: 12px;">You have enter wrong password for (3) times. Please reset
                                    your password!! </p>

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

                <!--Modal Iframe Permohonan Baru BLESS2.0-->
                <form method="post" action="">
                    <div class="modal fade bs-example-modal-lg" id="iframe-borang-baru-bless2" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-register">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">New Application</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/demo-iframe/iframeDemo.html" style="height:400px;width:100%"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect text-left" onclick="submitApplication()">Submit</button>
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </form>
                <!-- /.modal -->

                <!--Modal Iframe Permohonan Baru JAKIM-->
                <form id="formPermohonanJakim" method="post" action="MyTray_insert.php">

                    <div class="modal fade bs-example-modal-lg" id="iframe-borang-baru-jakim" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-register">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">New Application</h4>
                                    <input type="hidden" id="agensiMemohonJakim" name="agensiMemohonJakim" value="">
                                    <input type="hidden" id="idPermohonanLesen" name="idPermohonanLesen" value="">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/demo-jakim/Sistem Pensijilan Halal Malaysia (e-Halal) - Baru.html"
                                        style="height:400px;width:100%"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect text-left" onclick="submitApplication()">Submit</button>
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </form>
                <!-- /.modal -->

                <!--Modal Iframe Permohonan Baru JAKIM COMPLETE-->
                <form id="formPermohonanJakimComplete" method="post" action="MyTray_insert.php">

                    <div class="modal fade bs-example-modal-lg" id="iframe-borang-baru-jakim-complete" tabindex="-1"
                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-register">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">New Application</h4>
                                    <input type="hidden" id="agensiMohonLoginComplete" name="agensiMohonLoginComplete"
                                        value="">
                                    <input type="hidden" id="idPermohonanLesenComplete" name="idPermohonanLesenComplete"
                                        value="">
                                    <input type="hidden" id="statusJakimComplete" name="statusJakimComplete" value="">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="/demo-jakim/Sistem Pensijilan Halal Malaysia (e-Halal) - Baru.html"
                                        style="height:400px;width:100%"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect text-left" onclick="submitApplication()">Submit</button>
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </form>
                <!-- /.modal -->

                <!--Modal Iframe Permohonan Baru MBPP-->
                <form id="formPermohonanMBPP" method="post" action="MyTray_insert.php">
                    <div class="modal fade bs-example-modal-lg" id="iframe-borang-baru-mbpp" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-register">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">New Application</h4>
                                    <input type="hidden" id="agensiMemohonMBPP" name="agensiMemohonMBPP" value="">
                                    <input type="hidden" id="idPermohonanLesenMBPP" name="idPermohonanLesenMBPP" value="">
                                    <input type="hidden" id="statusMBPP" name="statusMBPP" value="">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="http://elesen.mbpp.gov.my/mppplic/temporary_ad_license/temporary_ad_license.jsp?strLicType=TAD"
                                        style="height:400px;width:100%"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect text-left" onclick="submitApplication()">Submit</button>
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </form>
                <!-- /.modal -->

                <!--Modal Iframe Permohonan Baru MBPP COMPLETE-->
                <form id="formPermohonanMBPPComplete" method="post" action="MyTray_insert.php">
                    <div class="modal fade bs-example-modal-lg" id="iframe-borang-baru-mbpp-complete" tabindex="-1"
                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-register">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">New Application</h4>
                                    <input type="hidden" id="agensiMemohonMBPPComplete" name="agensiMemohonMBPPComplete"
                                        value="">
                                    <input type="hidden" id="idPermohonanLesenMBPPComplete" name="idPermohonanLesenMBPPComplete"
                                        value="">
                                    <input type="hidden" id="statusMBPPComplete" name="statusMBPPComplete" value="">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="http://elesen.mbpp.gov.my/mppplic/temporary_ad_license/temporary_ad_license.jsp?strLicType=TAD"
                                        style="height:400px;width:100%"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect text-left" onclick="submitApplication()">Submit</button>
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </form>
                <!-- /.modal -->

                <!--Modal Iframe Permohonan Baru BLESS1.0-->
                <div class="modal fade bs-example-modal-lg" id="iframe-borang-baru-bless1" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-register">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">New Application</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe src="https://training.bless.gov.my/bless/action/online/jbpmBombaNew?licenseSeq=652156&licenseId=JBPM0002"
                                    style="height:400px;width:100%"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect text-left" onclick="submitApplication()">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <!--Modal Iframe Cetakan Semula -->
                <div class="modal fade bs-example-modal-lg" id="iframe-cetakan" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-register">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Request For Print</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="https://training.bless.gov.my/bless/action/online/commonReqPrint?licenseSeq=652242&licenseId=MHLG030&licenseInfoMainId=326929"
                                    style="overflow: scroll; width:100%; height:400px"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                    onclick="actionHantar()">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                <!-- Modal Iframe Pindaan -->
                <div class="modal fade bs-example-modal-lg" id="iframe-pindaan" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-register">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Request For Change </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="https://training.bless.gov.my/bless/action/online/jpnLppChange?licenseSeq=652241&licenseId=MHLG029&licenseInfoMainId=326929"
                                    style="overflow: scroll; width:100%; height:400px"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                    onclick="actionHantar()">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                <!-- Modal Iframe Renewal Bless1.0 -->
                <div class="modal fade bs-example-modal-lg" id="iframe-renewal-bless1" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-register">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Renewal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="https://training.bless.gov.my/bless/action/online/jpnLpp?licenseSeq=652240&licenseId=MHLG028"
                                    style="overflow: scroll; width:100%; height:400px"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                    onclick="actionHantar()">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                <!-- Modal Iframe Renewal Bless2.0 -->
                <div class="modal fade bs-example-modal-lg" id="iframe-renewal-bless2" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-register">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Renewal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="/demo-bless/renewal-BLESS.html" style="overflow: scroll; width:100%; height:400px"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                    onclick="actionHantar()">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                <!-- Modal Iframe Renewal JAKIM -->
                <form id="formRenewalJakim" method="post" action="MyTray_insert.php">
                    <div class="modal fade bs-example-modal-lg" id="iframe-renewal-jakim" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-register">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Renewal</h4>
                                    <input type="hidden" id="idRenewLesenJakim" name="idRenewLesenJakim" value="">
                                    <input type="hidden" id="agensiRenew" name="agensiRenew" value="">
                                    <input type="hidden" id="appRenewType" name="appRenewType" value="">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <iframe id="test" src="/demo-jakim/Sistem Pensijilan Halal Malaysia (e-Halal) - Baru.html"
                                        style="overflow: scroll; width:100%; height:400px"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                        onclick="submitApplication()">Submit</button>
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </form>
                <!-- Modal Iframe Renewal MBPP -->
                <form id="formRenewalMBPP" method="post" action="MyTray_insert.php">
                    <div class="modal fade bs-example-modal-lg" id="iframe-renewal-mbpp" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-register">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Renewal</h4>
                                    <input type="hidden" id="idRenewLesenMBPP" name="idRenewLesenMBPP" value="">
                                    <input type="hidden" id="agensiRenewMBPP" name="agensiRenewMBPP" value="">
                                    <input type="hidden" id="appRenewTypeMBPP" name="appRenewTypeMBPP" value="">
                                    <input type="hidden" id="statusRenewal" name="statusRenewal" value="">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <iframe id="test" src="http://elesen.mbpp.gov.my/mppplic/temporary_ad_license/temporary_ad_license.jsp?strLicType=TAD"
                                        style="overflow: scroll; width:100%; height:400px"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                        onclick="submitApplication()">Submit</button>
                                    <!--<button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="saveApplication()">Save</button>-->
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </form>
                <!-- Modal Iframe Request for Change JAKIM -->
                <form id="formRFChangeJakim" method="post" action="MyTray_insert.php">
                    <div class="modal fade bs-example-modal-lg" id="iframe-requestforchange-jakim" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-register">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Request for Change</h4>
                                    <input type="hidden" id="idRFChangeLesenJakim" name="idRFChangeLesenJakim" value="">
                                    <input type="hidden" id="agensiRFChange" name="agensiRFChange" value="">
                                    <input type="hidden" id="appRFChangeType" name="appRFChangeType" value="">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <iframe id="test" src="/demo-jakim/Sistem Pensijilan Halal Malaysia (e-Halal) - Baru.html"
                                        style="overflow: scroll; width:100%; height:400px"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                        onclick="submitApplication()">Submit</button>
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </form>


                <!-- Modal Iframe Request for Change MBPP -->
                <form id="formRFChangeMBPP" method="post" action="MyTray_insert.php">
                    <div class="modal fade bs-example-modal-lg" id="iframe-requestforchange-mbpp" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-register">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Request for Change</h4>
                                    <input type="hidden" id="idRFChangeLesenMBPP" name="idRFChangeLesenMBPP" value="">
                                    <input type="hidden" id="agensiRFChangeMBPP" name="agensiRFChangeMBPP" value="">
                                    <input type="hidden" id="appRFChangeTypeMBPP" name="appRFChangeTypeMBPP" value="">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <iframe id="test" src="http://elesen.mbpp.gov.my/mppplic/temporary_ad_license/temporary_ad_license.jsp?strLicType=TAD"
                                        style="overflow: scroll; width:100%; height:400px"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                        onclick="submitApplication()">Submit</button>
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </form>

                <!-- Modal Iframe Request for Change BLESS2.0 -->
                <form id="formRFChangeBless2" method="post" action="MyTray_insert.php">
                    <div class="modal fade bs-example-modal-lg" id="iframe-requestforchange-bless2" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-register">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Request for Change</h4>
                                    <input type="hidden" id="idRFChangeLesenBless2" name="idRFChangeLesenBless2" value="">
                                    <input type="hidden" id="agensiRFChangeBless2" name="agensiRFChangeBless2" value="">
                                    <input type="hidden" id="appRFChangeTypeBless2" name="appRFChangeTypeBless2" value="">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <iframe id="test" src="http://trainingb2.bless.gov.my/BLESS2_PROD_TEST/private/licKpdnkkCsaMain/RFC/374569"
                                        style="overflow: scroll; width:100%; height:400px"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                        onclick="submitApplication()">Submit</button>
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </form>

                <!-- Modal Iframe Request for Change BLESS1.0 -->
                <form id="formRFChangeMBPP" method="post" action="MyTray_insert.php">
                    <div class="modal fade bs-example-modal-lg" id="iframe-requestforchange-bless1" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-register">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Request for Change</h4>
                                    <input type="hidden" id="idRFChangeLesenMBPP" name="idRFChangeLesenMBPP" value="">
                                    <input type="hidden" id="agensiRFChangeMBPP" name="agensiRFChangeMBPP" value="">
                                    <input type="hidden" id="appRFChangeTypeMBPP" name="appRFChangeTypeMBPP" value="">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <iframe id="test" src="http://elesen.mbpp.gov.my/mppplic/temporary_ad_license/temporary_ad_license.jsp?strLicType=TAD"
                                        style="overflow: scroll; width:100%; height:400px"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                        onclick="submitApplication()">Submit</button>
                                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </form>

                <!-- modal pilih bisnes-->
                <div class="modal fade bs-example-modal-lg" id="pilih-bisnes" tabindex="-1" role="dialog"
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
                                                        onclick="actionPilihBusiness()"><i class="ti-check"></i>
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


                <!-- sample modal register -->
                <div class="modal fade bs-example-modal-lg" id="iframe-register-bless1" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-register">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Registration with BLESS1.0</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="https://training.bless.gov.my/bless/action/login?show" style="overflow: scroll; width:100%; height:500px"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal"
                                    onclick="location.reload();">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- end of sample modal register -->

                <!-- sample modal register bless2 -->
                <div class="modal fade bs-example-modal-lg" id="iframe-register-bless2" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-register">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Registration with BLESS2.0</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="http://trainingb2.bless.gov.my/BLESS2_PROD_TEST/public/publicRegistration"
                                    style="overflow: scroll; width:100%; height:500px"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal"
                                    onclick="location.reload();">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- end of sample modal register -->

                <!-- IFrame Perlu Tindakan Register JAKIM -->
                <div class="modal fade bs-example-modal-lg" id="iframe-register-jakim" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-register">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Registration with MYeHALAL</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="/demo-jakim/Sistem Pensijilan Halal Malaysia (MYeHALAL).html"
                                    style="overflow: scroll; width:100%; height:500px"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- end of sample modal register -->

                <!-- IFrame Perlu Tindakan Register MBPP -->
                <div class="modal fade bs-example-modal-lg" id="iframe-register-mbpp" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-register">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Registration with eLesen</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="http://elesen.mbpp.gov.my/mppplic/user_account/account.jsp"
                                    style="overflow: scroll; width:100%; height:500px"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- end of sample modal register -->


                <div class="modal fade bs-example-modal-lg" id="tindakan-mohon" tabindex="-1" role="dialog"
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
                                <input type="hidden" id="agensiMohon" name="agensiMohon" value="">
                                <p>Do you want to apply for this license?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" onClick="actionTindakanPermohonan()">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->


                <!-- IFrame new request Bless1.0 -->
                <div class="modal fade bs-example-modal-lg" id="iframe-pembaharuan" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-register">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">New Request</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <iframe id="test" src="https://training.bless.gov.my/bless/action/online/jpnLpp?licenseSeq=652240&licenseId=MHLG028"
                                    style="overflow: scroll; width:100%; height:400px"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal"
                                    onclick="actionSubmit()">Submit</button>
                                <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- IFrame Perlu Register di Agency JAKIM -->
                <div class="modal fade bs-example-modal-lg" id="isRegisterInAgency" tabindex="-1" role="dialog"
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
                                <input type="hidden" id="agensiMohon" name="agensiMohon" value="">
                                <p>Have you registered in MYeHALAL?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" onClick="actionLoginAgency()">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal" onClick="actionTindakanRegisterAgency()">No</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- IFrame Perlu Register di Agency MBPP -->
                <div class="modal fade bs-example-modal-lg" id="isRegisterInAgencyMBPP" tabindex="-1" role="dialog"
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
                                <input type="hidden" id="agensiMohon" name="agensiMohon" value="">
                                <p>Have you registered in eLesen?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" onClick="actionLoginAgency()">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal" onClick="actionTindakanRegisterAgency()">No</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- IFrame Perlu Register di Agency BLESS2.0 -->
                <div class="modal fade bs-example-modal-lg" id="isRegisterInAgencyBLESS2.0" tabindex="-1" role="dialog"
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
                                <input type="hidden" id="agensiMohon" name="agensiMohon" value="">
                                <p>Have you registered in BLESS2.0?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" onClick="actionLoginAgency()">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal" onClick="actionTindakanRegisterAgency()">No</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- IFrame Perlu Register di Agency BLESS1.0 -->
                <div class="modal fade bs-example-modal-lg" id="isRegisterInAgencyBLESS1.0" tabindex="-1" role="dialog"
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
                                <input type="hidden" id="agensiMohon" name="agensiMohon" value="">
                                <p>Have you registered in BLESS1.0?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" onClick="actionLoginAgency()">Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal" onClick="actionTindakanRegisterAgency()">No</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <?php include ('MyTray_Modal_Maklumat_Lesen.php') ?>
                <?php include ('MyTray_Modal_Helpdesk.php') ?>


                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- =========colappse #1 ===================================================== -->
        </div>
    </div>
</div>
<br>
<!-- ===================== -->
<!--End Licensing -->
<!-- ===================== -->
</div>
<br>



<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->


<div class="row">

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
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<!--<script src="/Malaysiabiz2019/assets/plugins/datatables/jquery.dataTables.min.js"></script>-->

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
<!-- Sweet-Alert  -->
<script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
<!--Business Registration -->
<script src="js/lodash.min.js"></script>
<script src="../assets/scrolltotop.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$(function() {
			var divcard = $(".filterbar");
			var divcardbody = $(".innerbar");
			var divcontent = $(".nomargintop");

			$(window).scroll(function() {    
				var scroll = $(window).scrollTop();
			
				if (scroll >= 100) {
					divcard.removeClass('filterbar').addClass("bigbar");
					// divcardbody.removeClass('innerbar').addClass("smallinnerbar");
					divcontent.removeClass('nomargintop').addClass("margintop50");                
				} else {
					divcard.removeClass("bigbar").addClass('filterbar');
					divcardbody.removeClass("smallinnerbar").addClass('innerbar');
					divcontent.removeClass("margintop50").addClass('nomargintop');               
				}
			});
		});
	});
	
    function registerAccount() {
        var agency = $('#agency_name2').val();
        //alert('agency: '+agency);
        $('#perlu-tindakan-login').modal('hide');
        if (agency === 'MBPP') {
            $('#iframe-register-mbpp').modal('show');
        } else if (agency === 'BLESS2.0') {
            $('#iframe-register-bless2').modal('show');
        }

    }

    function actionLogin() {
        var username = $('#username').val();
        var password = $('#password').val();
        if (username === password) {
            $('#perlu-tindakan-login').modal('hide');
            $('#pilih-bisnes').modal('show');
        } else {
            var count = $('#set-clicker').val();
            var countclick = parseInt(count) + 1;
            if (countclick < 3) {
                $('#login-failed').modal('show');
            } else {
                $('#login-failed').modal('hide');
            }
            $('#set-clicker').val(countclick);
            if (countclick >= 3) {
                $('#login-failed').modal('hide');
                $('#perlu-tindakan-login').modal('hide');
                $('#login-failed').modal('hide');
                $('#login-failed-3times').modal('show');
            }

        }
    }


    function actionLoginAgency() {

        $('#perlu-tindakan-login').modal('show');
        $('#isRegisterInAgency').modal('hide');
        $('#isRegisterInAgencyMBPP').modal('hide');
        $('#isRegisterInAgencyBLESS2.0').modal('hide');
        $('#isRegisterInAgencyBLESS1.0').modal('hide');
    }

    function actionTindakanRegisterAgency() {
        var agensiMohon = $('#agensiMohon').val();
        //alert('agensiMohon: '+agensiMohon);
        $('#isRegisterInAgency').modal('hide');
        $('#isRegisterInAgencyMBPP').modal('hide');
        $('#isRegisterInAgencyBLESS2.0').modal('hide');
        $('#isRegisterInAgencyBLESS1.0').modal('hide');
        if (agensiMohon === 'JAKIM') {
            $('#iframe-register-jakim').modal('show');
        } else if (agensiMohon === 'MBPP') {
            $('#isRegisterInAgencyMBPP').modal('hide');
            $('#iframe-register-mbpp').modal('show');
        } else if (agensiMohon === 'BLESS2.0') {
            $('#iframe-register-bless2').modal('show');
        } else if (agensiMohon === 'BLESS1.0') {
            $('#iframe-register-bless1').modal('show');
        }


    }



    function actionAction() {
        $('#perlu-tindakan-login').modal('hide');
        $('#iframe-borang-baru-bless1').modal('show');
    }

    function actionPilihBusiness() {
        var agensiMohon = $('#agensiMohon').val();
        var agensiMohonLogin = $('#agensiMohonLogin').val();
        var idLesen = $('#idLesen').val();
        $('#idPermohonanLesen').val(idLesen);
        $('#agensiMemohonJakim').val(agensiMohon);

        $('#agensiMemohonMBPP').val(agensiMohon);
        $('#idPermohonanLesenMBPP').val(idLesen);

        $('#agensiMemohonMBPPComplete').val(agensiMohon);
        $('#idPermohonanLesenMBPPComplete').val(idLesen);
        //alert('agensiMohonLogin: '+agensiMohonLogin);
        $('#pilih-bisnes').modal('hide');
        if (agensiMohon === 'BLESS1.0' || agensiMohonLogin === 'BLESS1.0') {
            $('#iframe-borang-baru-bless1').modal('show');
        } else if (agensiMohon === 'BLESS2.0' || agensiMohonLogin === 'BLESS2.0') {
            $('#iframe-borang-baru-bless2').modal('show');
        } else if (agensiMohon === 'JAKIM' || agensiMohonLogin === 'JAKIM') {
            $('#iframe-borang-baru-jakim').modal('show');
        } else if (agensiMohon === 'MBPP' || agensiMohonLogin === 'MBPP') {
            $('#iframe-borang-baru-mbpp').modal('show');
        }

    }

    function submitApplication() {

        var appType = $('#appRenewType').val();
        var appRFChangeType = $('#appRFChangeType').val();

        var agensiRenew = $('#agensiRenew').val();
        var agensiMohonLogin = $('#agensiMohonLogin').val();

        var status = "";
        var statusJakimComplete = $('#statusJakimComplete').val();

        if (statusJakimComplete !== null) {
            status = statusJakimComplete;
        }

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

            // if (agensiRenew === 'JAKIM' || agensiMohonLogin === 'JAKIM') {
            if (appType === 'Renewal' || appRFChangeType === 'Renewal') {
                if (status === 'Complete') {
                    if (agensiRenew === 'JAKIM' || agensiMohonLogin === 'JAKIM') {
                        document.getElementById("formRenewalJakim").submit();
                        $('#iframe-renewal-jakim').modal('hide');
                    } else if (agensiRenew === 'MBPP' || agensiMohonLogin === 'MBPP') {
                        document.getElementById("formRenewalMBPP").submit();
                        $('#iframe-renewal-mbpp').modal('hide');
                    }
                } else {
                    //utk incomplete
                }

            } else if (appType === 'Request for Change' || appRFChangeType === 'Request for Change') {
                if (agensiRenew === 'JAKIM' || agensiMohonLogin === 'JAKIM') {
                    document.getElementById("formRFChangeJakim").submit();
                    $('#iframe-borang-baru-jakim').modal('hide');
                } else if (agensiRenew === 'MBPP' || agensiMohonLogin === 'MBPP') {
                    document.getElementById("formRFChangeMBPP").submit();
                    $('#iframe-requestforchange-mbpp').modal('hide');
                } else if (agensiRenew === 'BLESS2.0' || agensiMohonLogin === 'BLESS2.0') {
                    document.getElementById("formRFChangeBless2").submit();
                    $('#iframe-requestforchange-bless2').modal('hide');
                }


            } else if (appType === 'New' || appRFChangeType === 'New') {
                if (status === 'Complete') {
                    if (agensiRenew === 'JAKIM' || agensiMohonLogin === 'JAKIM') {
                        document.getElementById("formPermohonanJakimComplete").submit();
                        $('#iframe-borang-baru-jakim-complete').modal('hide');
                    } else if (agensiRenew === 'MBPP' || agensiMohonLogin === 'MBPP') {
                        document.getElementById("formPermohonanMBPPComplete").submit();
                        $('#iframe-borang-baru-mbpp-complete').modal('hide');
                    }
                } else if (status === 'Recent') {
                    if (agensiRenew === 'JAKIM' || agensiMohonLogin === 'JAKIM') {
                        document.getElementById("formPermohonanJakim").submit();
                        $('#iframe-borang-baru-jakim').modal('hide');
                    } else if (agensiRenew === 'MBPP' || agensiMohonLogin === 'MBPP') {
                        document.getElementById("formPermohonanMBPP").submit();
                        $('#iframe-borang-baru-mbpp').modal('hide');
                    } else if (agensiRenew === 'BLESS2.0' || agensiMohonLogin === 'BLESS2.0') {
                        document.getElementById("formPermohonanbless2").submit();
                        $('#iframe-borang-baru-bless2').modal('hide');
                    } else if (agensiRenew === 'BLESS1.0' || agensiMohonLogin === 'BLESS1.0') {
                        document.getElementById("formPermohonanbless1").submit();
                        $('#iframe-borang-baru-bless1').modal('hide');
                    }
                } else {
                    //utk incomplete
                }
            }

        });
    }

    function saveApplication() {

        swal({
                title: "Are you sure?",
                text: "Your application will save as draft and not submitted yet. ",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, save it!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function (isConfirm) {
                if (isConfirm) {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
        //                                                                function () {
        //                                                                    swal("Saved!", "Your application request has been saved.", "success");
        //                                                                    $('#b1b').hide();
        //                                                                    $('#b1bb').show();
        //                                                                    $('#iframe-borang-baru-bless1').modal('hide');
        //                                                                });

    }

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
        location.href = "MyTray.php?" + valueUrl;
    }

    function hideCard(id) {
        swal({
            title: "Are you sure to perform this action?",

            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {
            swal("Deleted!", "Record successfully deleted.", "success");
            $('#' + id).hide();
        });
    }

    function actionPerluRegister() {
        $('#perlu-register').modal('hide');
        $('#iframe-register').modal('show');
    }

    function actionPerluRegisterBless2() {
        $('#perlu-register-bless2').modal('hide');
        $('#iframe-register-bless2').modal('show');
    }

    function tindakanMohon(idLesen, agensi, status, appType, firstLogin, isRegister) {

        $('#idLesen').val(idLesen);
        $('#agensiMohonLogin').val(agensi);
        $('#statusMohon').val(status);
        $('#agensiMohon').val(agensi);

        $('#idPermohonanLesen').val(idLesen);
        $('#agensiMohonLoginComplete').val(agensi);
        $('#idPermohonanLesenComplete').val(idLesen);
        $('#statusJakimComplete').val(status);

        $('#idRenewLesenJakim').val(idLesen);
        $('#agensiRenew').val(agensi);
        $('#appRenewType').val(appType);
        $('#statusRenewal').val(status);

        $('#idRFChangeLesenJakim').val(idLesen);
        $('#agensiRFChange').val(agensi);
        $('#appRFChangeType').val(appType);
        $('#statusRFChange').val(status);

        $('#agensiMemohonMBPP').val(agensi);
        $('#idPermohonanLesenMBPP').val(idLesen);
        $('#statusMBPP').val(status);

        $('#agensiMemohonMBPPComplete').val(agensi);
        $('#idPermohonanLesenMBPPComplete').val(idLesen);
        $('#statusMBPPComplete').val(status);

        $('#idRenewLesenMBPP').val(idLesen);
        $('#agensiRenewMBPP').val(agensi);
        $('#appRenewTypeMBPP').val(appType);
        $('#statusRenewalMBPP').val(status);

        $('#idRFChangeLesenMBPP').val(idLesen);
        $('#agensiRFChangeMBPP').val(agensi);
        $('#appRFChangeTypeMBPP').val(appType);
        $('#statusRFChangeMBPP').val(status);

        $('#idRFChangeLesenBless2').val(idLesen);
        $('#agensiRFChangeBless2').val(agensi);
        $('#appRFChangeTypeBless2').val(appType);
        $('#statusRFChangeBless2').val(status);



        if (appType === 'New' && status === 'Recent') {
            if (firstLogin === 'No' && isRegister === 'Yes') {
                $('#agensiMohonLogin').val(agensi);
                $('#perlu-tindakan-login').modal('show');
            } else if (firstLogin === 'No' && isRegister === 'No') {
                if (agensi === 'JAKIM') {
                    $('#perlu-tindakan-login').modal('show');
                } else if (agensi === 'MBPP') {
                    $('#perlu-tindakan-login').modal('show');
                } else if (agensi === 'BLESS2.0') {
                    $('#perlu-tindakan-login').modal('show');
                } else if (agensi === 'BLESS1.0') {
                    $('#perlu-tindakan-login').modal('show');
                }

            } else {
                $('#agensiMohon').val(agensi);
                $('#tindakan-mohon').modal('show');
            }
        } else if (appType === 'New' && status === 'Complete') {
            if (agensi === 'JAKIM') {
                $('#iframe-borang-baru-jakim-complete').modal('show');
            } else if (agensi === 'MBPP') {
                $('#iframe-borang-baru-mbpp-complete').modal('show');
            } else if (agensi === 'BLESS2.0') {
                $('#iframe-borang-baru-bless2').modal('show');
            } else if (agensi === 'BLESS1.0') {
                $('#iframe-borang-baru-bless1').modal('show');
            }
        } else if (appType === 'New' && status === 'Incomplete') {
            if (agensi === 'BLESS2.0') {
                $('#iframe-borang-baru-bless2').modal('show');
            } else if (agensi === 'BLESS1.0') {
                $('#iframe-borang-baru-bless1').modal('show');
            }

        } else if (appType === 'Renewal' && status === 'Complete') {

            if (agensi === 'JAKIM') {
                $('#iframe-renewal-jakim').modal('show');
            } else if (agensi === 'MBPP') {
                $('#iframe-renewal-mbpp').modal('show');
            } else if (agensi === 'BLESS2.0') {
                $('#iframe-renewal-bless2').modal('show');
            } else if (agensi === 'BLESS1.0') {
                $('#iframe-renewal-bless1').modal('show');
            }

        } else if (appType === 'Renewal' && status === 'Incomplete') {

        } else if (appType === 'Request for Change' && status === 'Complete') {
            if (agensi === 'JAKIM') {
                $('#iframe-requestforchange-jakim').modal('show');
            } else if (agensi === 'MBPP') {
                $('#iframe-requestforchange-mbpp').modal('show');
            } else if (agensi === 'BLESS1.0') {
                $('#iframe-requestforchange-bless1').modal('show');
            } else if (agensi === 'BLESS2.0') {
                $('#iframe-requestforchange-bless2').modal('show');
            }
        }


    }

    function pilihBisnes(id) {
        $('#agensiMohon').val(id);
        $('#agensiMohonMBPP').val(id);
        $('#pilih-bisnes').modal('show');
    }

    function actionTindakanPermohonan() {

        $('#tindakan-mohon').modal('hide');
        //$('#iframe-pembaharuan').modal('show');
        $('#pilih-bisnes').modal('show');
    }

// Business registration
    var IFRAME_URL = '';

    function bizRegLogin(url) {
        IFRAME_URL = url;
        $(".modal").modal('hide');
        $('#business-reg-login-required').modal('show');
       
    }

    function bizRegPilihUsiness() {
        $(".modal").modal('hide');
        var username = $('#business-reg-login-required').find('input#username').val()
        var password = $('#business-reg-login-required').find('input#password').val()

        if (username !== '' && password !== '' && username === password){
            // $('#business-reg-pilih-bisnes').modal('show');
            bizRegActionPilihBusiness()
        } else {
              $('#business-reg-login-failed').modal('show');
        }

    }
	
	function bizRegPilihBusiness2() {
        $(".modal").modal('hide');
        var username = $('#business-reg-login-failed').find('input#username').val()
        var password = $('#business-reg-login-failed').find('input#password').val()

        if (username !== '' && password !== '' && username === password){
            // $('#business-reg-pilih-bisnes').modal('show');
            bizRegActionPilihBusiness()
        } else {
              $('#business-reg-login-failed').modal('show');
        }

    }
	

    function bizRegActionPilihBusiness(){
        $(".modal").modal('hide');
        // $("#business-reg-iframe").attr('src',)
        $('#modalIframeAgency').modal('show');
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

    $(function(){
        
        //---------------------------------
        //Business register load functions
        //---------------------------------
        
        var business_reg_agency_name = <?php echo '"'.$business_reg_agency_name.'"'; ?>;
        var business_reg_application_type = <?php echo '"'.$business_reg_application_type.'"'; ?>;
        var business_reg_status  = <?php echo '"'.$business_reg_status.'"'; ?>;
       
        //----START-defined options value----
        bizRegDefineOptions($('#business_reg_agency_name'),business_reg_agency_name)
        bizRegDefineOptions($('#business_reg_application_type'),business_reg_application_type)
        bizRegDefineOptions($('#business_reg_status'),business_reg_status)

        //-END----defined options value----

        // Iframe modal shown
        $('#modalIframeAgency').on('show.bs.modal', function (e) {
                
                if(e&&e.relatedTarget&&e.relatedTarget.dataset){
                    $('#business-reg-iframe').attr('src',e.relatedTarget.dataset.url)
                }else{
                    $('#business-reg-iframe').attr('src',IFRAME_URL)
                }
                    
                
        });

    })

</script>
</body>

</html>
