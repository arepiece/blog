<?php
extract($_REQUEST);
error_reporting(0);
include ('../../Connection/pg_connection.php');
if (!isset($agency_name)) {
    $agency_name = 'MBPP';

    echo "<script>location.href='MyLicense.php?agency_name=MBPP';</script>";
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

//branch filter


$sql = <<<SQL
-- select json_agg(to_json(t))
-- from (

    SELECT "public"."myLicense".business_branch
    FROM "public"."myLicense" 
    GROUP BY "public"."myLicense".business_branch 
    ORDER BY "public"."myLicense".business_branch ASC
-- ) as t;
SQL;
$result = pg_query($pg_con, $sql);

$allBranches = pg_fetch_all($result);

?>



<?php $page = 'MyLicense';
include 'base.php'; ?>

	<div class="card filterbar">
      <div class="card-body innerbar">
            <div class="row m-t-10">
                <div class="col-lg-6 col-12 m-t-20">
                </div>
                <div class="col-md-3 col-12">
                    <div class="form-group has-success m-b-0">
                        <label style="font-size: 12px; display: block;"><i class="ti-filter"></i> Application Type</label>
                        <select id="application_type" onchange="goto('application_type', this.value)" class="custom-select form-control form-control-sm" id="inlineFormCustomSelect">
                            <option value="1" selected="">Show All</option>
                            <option value="2" @if($selection['application_type']  == '2') selected="selected" @endif>New</option>
                            <option value="3" @if($selection['application_type']  == '3') selected="selected" @endif>Renewal</option>
                            <option value="4" @if($selection['application_type']  == '4') selected="selected" @endif>Request for Change</option>
                            <option value="5" @if($selection['application_type']  == '5') selected="selected" @endif>Request for Cancellation</option>
                            <option value="6" @if($selection['application_type']  == '6') selected="selected" @endif>Request for Print</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="form-group has-success m-b-0">
                        <label style="font-size: 12px; display: block;"><i class="ti-filter"></i> Sorting By Expired Date</label>
                        <select id="expiration" onchange="goto('expiration', this.value)" class="custom-select form-control form-control-sm" id="inlineFormCustomSelect">
                            <option value="0" selected="">Show All</option>
                            <option value="1" @if($selection['expiration']  == '1') selected="selected" @endif> Expired</option>
                            <option value="7" @if($selection['expiration']  == '7') selected="selected" @endif> > 7 Days</option>
                            <option value="10" @if($selection['expiration']  == '10') selected="selected" @endif> > 10 Days</option>

                        </select>
                    </div>
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

<!--display licence -->
 <div class="row nomargintop">
	<div class="col-12">
    <?php
                    $where_branch_name = $branch_name && $branch_name !== "0" ? "WHERE \"business_branch\" = '$branch_name' ": "where 1=1";
                    $current_date = date("Y-m-d");
                    $sqlMyLicense = "SELECT * FROM  \"public\".\"myLicense\" INNER JOIN \"public\".\"myBusiness\" ON \"myBusiness\".\"id_business\" = \"myLicense\".business_id ".$where_branch_name;
                    if ($agency_name && $agency_name !== '') {
                        $sqlMyLicense .= " and \"myLicense\".agency='" . $agency_name . "' ";
                    }
                    if ($application_type && $application_type !== '') {
                        $sqlMyLicense .= " and \"myLicense\".application_type ='" . $application_type . "' ";
                    }
                    if ($status && $status !== '') {
                        $sqlMyLicense .= " and \"myLicense\".status ='" . $status . "' ";
                    }
                    $sqlMyLicense .= " order by \"myLicense\".id asc";
                    //echo 'X: ' . $sqlMyLicense;
                    $result = pg_query($pg_con, $sqlMyLicense);

                    $cntRow = pg_num_rows($result);
					$number = 1;
                    if ($cntRow > 0) {
                        while ($row = pg_fetch_assoc($result)) {
                            $dateExpired = $row['expired_date'];
                            ?>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 col-6">
                    <p class="label label-light-info font-bold m-b-0"><i class="ti-file"></i>
                        <?php echo $row['licence_no']; ?>
                    </p>
                    <h3 class="box-title m-b-20">
                        <?php echo $number++; ?>.
                        <?php echo $row['licence_name']; ?>
                    </h3>
                </div>
                <div class="col-md-4 col-6">
                    <div class="pull-right">
                        <button type="button" class="btn btn-info btn-sm btn-circle" data-toggle="modal" data-target="#info-lesen"><i
                                class="ti-info"></i> </button>
                        <button type="button" class="btn btn-info btn-sm btn-circle" data-toggle="modal" data-target="#help-desk"><i
                                class="icon-phone"></i> </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" id="jenisTindakan" name="jenisTindakan">
                                <?php if ($agency_name == "MBPP" || $agency_name == "JAKIM") { ?>
                                <a class="dropdown-item" data-toggle="modal" onclick="actionTindakanRenewal ('<?php echo $row['first_login']; ?>', '<?php echo $row['status_register']; ?>')"
                                    data-whatever="@getbootstrap">Renewal</a>
                                <a class="dropdown-item" data-toggle="modal" onclick="actionTindakanPindaan('<?php echo $row['first_login']; ?>', '<?php echo $row['status_register']; ?>')"
                                    data-whatever="@getbootstrap">Request for Change</a>
                                <?php } else { ?>
                                <?php if ($dateExpired < $current_date) { ?>
                                <a class="dropdown-item" data-toggle="modal" onclick="actionTindakanRenewal('<?php echo $row['first_login']; ?>', '<?php echo $row['status_register']; ?>')"
                                    data-whatever="@getbootstrap">Renewal</a>
                                <?php } ?>
                                <a class="dropdown-item" data-toggle="modal" onclick="actionTindakanPindaan('<?php echo $row['first_login']; ?>', '<?php echo $row['status_register']; ?>')"
                                    data-whatever="@getbootstrap">Request for Change</a>
                                <a class="dropdown-item" data-toggle="modal" onclick="actionTindakanPembatalan('<?php echo $row['first_login']; ?>', '<?php echo $row['status_register']; ?>')"
                                    data-whatever="@getbootstrap">Request for Cancellation</a>
                                <a class="dropdown-item" data-toggle="modal" onclick="actionTindakanCetak('<?php echo $row['first_login']; ?>', '<?php echo $row['status_register']; ?>')"
                                    data-whatever="@getbootstrap">Request for Print</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                
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
                        <?php echo $row['business_branch']; ?>
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
                        <h6 class="font-bold"> <i class="fas fa-shipping-fast"></i> Status</h6>
                        <p>
                            <?php echo $row['status']; ?>
                        </p>
                </div>
				
                <div class="col-lg-4 col-6">
                    <h6 class="font-bold"><i class="far fa-list-alt"></i> Application Type</h6>
                    <p>
                        <?php echo $row['application_type']; ?>
                    </p>
                    <h6 class="font-bold"><i class="far fa-calendar-alt"></i> Expiry Date</h6>
                    <p>
                        <?php echo $row['expired_date']; ?> <br>
                        <?php
                                                $date1 = date_create($current_date);
                                                $date2 = date_create($dateExpired);
                                                $diff = date_diff($date1, $date2);
                                                $date_diff = $diff->format("%a");
                                                ?>
                        <?php if ($dateExpired < $current_date) { ?>
                        <span class="label label-rounded label-danger font-bold">
                            <?php echo ' Has Expired '; ?></span>
                        <?php } else if ($dateExpired > $current_date) { ?>
                        <span class="label label-rounded label-warning font-bold">
                            <?php echo ' Expired in ' . $date_diff . ' days'; ?></span>
                        <?php
                                                } else {
                                                    
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
            <a href="#" class="btn btn-info" onclick="location.href = 'MyLicense.php'">Refresh</a>
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
	
	</div>
</div>

    <!-- Modal Iframe Request for change -->
    <div class="modal fade bs-example-modal-lg" id="iframe-pembaharuan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-license">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Renewal</h4>

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <?php if ($agency_name === 'BLESS1.0') { ?>
                    <iframe id="test" src="https://training.bless.gov.my/bless/action/online/jpnLpp?licenseSeq=652240&licenseId=MHLG028"
                        style="overflow: scroll; width:100%; height:400px"></iframe>
                    <?php } else if ($agency_name === 'MBPP') { ?>
                    <iframe id="test" src="/demo-mbpp/iframe-pembaharuan-mbpp.html" style="overflow: scroll; width:100%; height:400px"></iframe>
                    <?php } else if ($agency_name === 'JAKIM') { ?>
                    <iframe id="test" src="/demo-jakim/Sistem Pensijilan Halal Malaysia (e-Halal) - Baru.html" style="overflow: scroll; width:100%; height:400px"></iframe>
                    <?php } else if ($agency_name === 'BLESS2.0') { ?>
                    <iframe id="test" src="/demo-bless/renewal-BLESS.html" style="overflow: scroll; width:100%; height:400px"></iframe>
                    <?php } // end no data return  ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="actionHantar()">Submit</button>
                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- sample modal content -->
    <div class="modal fade bs-example-modal-lg" id="iframe-pembatalan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-license">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Request For Cancellation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body-license">

                    <?php if ($agency_name === 'BLESS1.0') { ?>
                    <iframe id="test" src="https://training.bless.gov.my/bless/action/online/jpnLpp?licenseSeq=652258&licenseId=MHLG041"
                        style="overflow: scroll; width:100%; height:400px"></iframe>
                    <?php } else if ($agency_name === 'BLESS2.0') { ?>
                    <iframe id="test" src="/demo-bless/Runcit - Cancel.html" style="overflow: scroll; width:100%; height:400px"></iframe>
                    <?php } // end no data return  ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="actionHantar()">Submit</button>
                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- Modal Iframe Pindaan -->
    <div class="modal fade bs-example-modal-lg" id="iframe-pindaan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-license">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Request for Change </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <?php if ($agency_name === 'BLESS1.0') { ?>
                    <iframe id="test" src="https://training.bless.gov.my/bless/action/online/jpnLppChange?licenseSeq=652241&licenseId=MHLG029&licenseInfoMainId=326929"
                        style="overflow: scroll; width:100%; height:400px"></iframe>
                    <?php } else if ($agency_name === 'BLESS2.0') { ?>
                    <iframe id="test" src="/demo-bless/(PDA) - Change.html" style="overflow: scroll; width:100%; height:400px"></iframe>
                    <?php } else if ($agency_name === 'JAKIM') { ?>
                    <iframe id="test" src="/demo-mbpp/iframe-changes-mbpp.html" style="overflow: scroll; width:100%; height:400px"></iframe>
                    <?php } else if ($agency_name === 'MBPP') { ?>
                    <iframe id="test" src="/demo-mbpp/iframe-changes-mbpp.html" style="overflow: scroll; width:100%; height:400px"></iframe>
                    <?php } // end no data return  ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="actionHantar()">Submit</button>
                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- sample modal content -->
    <div class="modal fade bs-example-modal-lg" id="iframe-cetak" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-license">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Request For Print</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <?php if ($agency_name === 'BLESS1.0') { ?>
                    <iframe id="test" src="https://training.bless.gov.my/bless/action/online/commonReqPrint?licenseSeq=652242&licenseId=MHLG030&licenseInfoMainId=326929"
                        style="overflow: scroll; width:100%; height:400px"></iframe>
                    <?php } else if ($agency_name === 'BLESS2.0') { ?>
                    <iframe id="test" src="/demo-bless/Re-print BLESS 2.0.html" style="overflow: scroll; width:100%; height:400px"></iframe>
                    <?php } // end no data return  ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="actionHantar()">Submit</button>
                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- sample modal content -->
    <div class="modal fade bs-example-modal-lg" id="perlu-tindakan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-license">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Perlu Tindakan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <iframe id="test" src="../../demo-bless/Re-print BLESS 2.0.html" width="100%" style="overflow: scroll;"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="actionHantar()">Submit</button>
                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!--                <div class="modal fade bs-example-modal-lg" id="tindakan-pembaharuan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                                <div class="modal-header">
                                                        <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Perhatian!</p>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                            <div class="modal-body">
                                              <p>Your license has expired. Do you want to renew this license?</p>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-info" onClick="actionTindakanPembaharuan()">Ya</button>
                                              <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                                            </div>
                                          </div> /.modal-content 
                                        </div> /.modal-dialog 
                                      </div> /.modal -->



    <div class="modal fade bs-example-modal-lg" id="tindakan-pembaharuan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="isLogin" name="isLogin">
                    <input type="hidden" id="isRegister" value="isRegister">
                    <p style="font-size: 12px;">Your license has expired. Do you want to renew this license?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" onClick="actionTindakanRenewal2()">Yes</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade bs-example-modal-lg" id="tindakan-pembatalan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="isLogin" name="isLogin">
                    <input type="hidden" id="isRegister" value="isRegister">
                    <p style="font-size: 12px;">Request for cancellation has been selected. Do you want to cancel this
                        license?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onClick="actionTindakanPembatalan2()">Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade bs-example-modal-lg" id="tindakan-pindaan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p style="font-size: 12px;">Request for change has been selected. Do you want to make amendments to
                        this license?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onClick="actionTindakanPindaan2()">Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade bs-example-modal-lg" id="tindakan-cetak" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p style="font-size: 12px;">Request for print has been selected. Do you want to reprint this
                        license?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onClick="actionTindakanCetak2()">Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade bs-example-modal-lg" id="tindakan-hantar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p style="font-size: 12px;">Selected licence(s) has been submitted.</p>
                </div>
                <div class="modal-footer">
                    <a href="MyTray.html"><button type="button" class="btn btn-primary">OK</button></a>
                </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <div class="modal fade bs-example-modal-lg" id="tindakan-success-hantar" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="btn btn-info btn-circle btn-m align-self-center"><i class="ti-info"></i> </p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p style="font-size: 12px;">Permohonan telah berjaya dihantar</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>


    <!-- modal helpdesk BlESS1.0-->
    <div class="modal fade bs-example-modal-lg" id="help-desk" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel"> <i class="btn btn-info btn-circle ti-headphone-alt"></i>
                        Helpdesk Agency</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <p style="font-size: 14px">Kindly contact MBPP Call Centre at <strong>04-2592020</strong> or email
                        us at <strong>aduan@mbpp.gov.my</strong> for any enquiries.</p>
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Helpdesk BLESS2.0</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <p style="font-size: 12px">Kindly contact BLESS Call Centre at 1-300-88-1020 or email us at
                        bless2.0@icu.gov.my for any enquiries.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal">Close</button>
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
												<div style="text-right;" class="printPage"><button type="button" class="btn btn-info btn-circle waves-effect text-right"
														onclick="window.print();"><i class="ti-printer" ></i></button></div>
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

    <!-- modal tindakan login JAKIM-->
    <div class="modal fade bs-example-modal-lg" id="perlu-tindakan-login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                    <input type="hidden" id="jnsTindakan" name="jnsTindakan" value="">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body text-center small-text">
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
                    <p>Note: User needs to reset password via
                        <?php echo $system; ?> <br>
                        <a href="http://elesen.mbpp.gov.my/mppplic/user_account/forget_password.jsp" target="blank"
                            class="font-bold">Click Here</a>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info waves-effect text-left" onclick="actionLogin()">Submit</button>
                    <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- /.modal login failed-->
    <div class="modal fade bs-example-modal-lg" id="login-failed" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
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
    <div class="modal fade bs-example-modal-lg" id="login-failed-3times" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body text-center">
                    <p style="font-size: 12px;">You have enter wrong password for (3) times. Please reset your
                        password!! </p>

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

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>
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

@stop

@section('scripts')
<script src="../assets/scrolltotop.js"></script>
<style>
    .modal-dialog-license {
        max-width: 1135px;
        margin: 1.75rem auto;
        overflow-y: auto;
    }
</style>
<script>
    function actionTindakanPembaharuan() {
        $('#tindakan-pembaharuan').modal('hide');
        $('#iframe-pembaharuan').modal('show');
    }

    function actionLogin() {
        var username = $('#username').val();
        var password = $('#password').val();
        var typeAction = $('#jnsTindakan').val();
        //alert('typeAction: '+typeAction);
        if (username === password) {
            $('#perlu-tindakan-login').modal('hide');
            if (typeAction === 'Pembaharuan') {
                $('#iframe-pembaharuan').modal('show');
            } else if (typeAction === 'Pindaan') {
                $('#iframe-pindaan').modal('show');
            }
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

    function actionTindakanRenewal2() {
        var isLogin = $('#isLogin').val();
        var isRegister = $('#isRegister').val();
        $('#jnsTindakan').val('Pembaharuan');
        //var agensiMohon = "<?php echo $agency_name; ?>";
        if (isLogin === 'No' && isRegister === 'Yes') {
            $('#tindakan-pembaharuan').modal('hide');
            $('#perlu-tindakan-login').modal('show');
        } else {
            $('#tindakan-pembaharuan').modal('hide');
            $('#iframe-pembaharuan').modal('show');
        }
    }

    function actionTindakanRenewal(isLogin, isRegister) {
        $('#isLogin').val(isLogin);
        $('#isRegister').val(isRegister);
        $('#tindakan-pembaharuan').modal('show');
        //$('#iframe-pembaharuan').modal('show');
    }

    function actionTindakanPindaan(isLogin, isRegister) {
        $('#isLogin').val(isLogin);
        $('#isRegister').val(isRegister);
        $('#tindakan-pindaan').modal('show');
        //$('#iframe-pembaharuan').modal('show');
    }

    function actionTindakanPindaan2() {
        var isLogin = $('#isLogin').val();
        var isRegister = $('#isRegister').val();
        $('#jnsTindakan').val('Pindaan');
        //var agensiMohon = "<?php echo $agency_name; ?>";
        if (isLogin === 'No' && isRegister === 'Yes') {
            $('#tindakan-pindaan').modal('hide');
            $('#perlu-tindakan-login').modal('show');
        } else {
            $('#tindakan-pindaan').modal('hide');
            $('#iframe-pindaan').modal('show');
        }
    }

    function actionTindakanPembatalan(isLogin, isRegister) {
        $('#isLogin').val(isLogin);
        $('#isRegister').val(isRegister);
        $('#tindakan-pembatalan').modal('show');
        //$('#iframe-pembaharuan').modal('show');
    }

    function actionTindakanPembatalan2() {
        var isLogin = $('#isLogin').val();
        var isRegister = $('#isRegister').val();
        $('#jnsTindakan').val('Cancellation');
        //var agensiMohon = "<?php echo $agency_name; ?>";
        if (isLogin === 'No' && isRegister === 'Yes') {
            $('#tindakan-pembatalan').modal('hide');
            $('#perlu-tindakan-login').modal('show');
        } else {
            $('#tindakan-pembatalan').modal('hide');
            $('#iframe-pembatalan').modal('show');
        }
    }

    function actionTindakanCetak(isLogin, isRegister) {
        $('#isLogin').val(isLogin);
        $('#isRegister').val(isRegister);
        $('#tindakan-cetak').modal('show');
        //$('#iframe-pembaharuan').modal('show');
    }

    function actionTindakanCetak2() {
        var isLogin = $('#isLogin').val();
        var isRegister = $('#isRegister').val();
        $('#jnsTindakan').val('Cetak');
        //var agensiMohon = "<?php echo $agency_name; ?>";
        if (isLogin === 'No' && isRegister === 'Yes') {
            $('#tindakan-cetak').modal('hide');
            $('#perlu-tindakan-login').modal('show');
        } else {
            $('#tindakan-cetak').modal('hide');
            $('#iframe-cetak').modal('show');
        }
    }



    function actionHantar() {
        $('#tindakan-hantar').modal('show');
    }

    function afterSend() {

    }


    function goto(field, value_field) {
        var valueUrl = field + "=" + value_field;
        var agencyName = $('#agency_name').val();
        var applicationType = $('#application_type').val();
        var status = $('#status').val();
        var branch_name = $('#branch_name').val();
        if (field === "agency_name") {
            valueUrl = valueUrl + "&application_type=" + applicationType + "&status=" + status +"&branch_name="+ branch_name;
        } else if (field === "application_type") {
            valueUrl = valueUrl + "&agency_name=" + agencyName + "&status=" + status;
        } else if (field === "status") {
            valueUrl = valueUrl + "&application_type=" + applicationType + "&agency_name=" + agencyName;
        } else if (field === "branch_name") {
            valueUrl = valueUrl + "&application_type=" + applicationType + "&agency_name=" + agencyName + "&status=" +
                status;
        }

        location.href = "MyLicense.php?" + valueUrl;
    }

</script>
</body>