<?php

extract($_REQUEST);
error_reporting(0);
include ('../../Connection/pg_connection.php');

?>
<?php $page = 'MyTray';include 'base.php';?> 

<div class="row page-titles m-t-10">
<div class="col-lg-5 align-self-center">
    <!-- <h3 class="text-themecolor">View Branch</h3> -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="mydashboard.php">MyTray</a></li>
        <li class="breadcrumb-item active">MyTray Table</li>
    </ol>
</div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->                               
				<div class="row">
                    <div class="col-12">
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
                             <div class="col-lg-2 col-6">
                                 <div class="form-group has-success m-b-10">
                                    <label style="font-size: 12px;  display: block;"><i class="ti-filter"></i> Agency </label>
                                    <select class="custom-select form-control form-control-sm filter-w-responsive" id="business_reg_agency_name"
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
							
                            <div class="col-lg-2 col-6">
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
                            <div class="col-lg-2 col-6">
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
					
                        <div class="card">
                            <div class="card-body">
							
							

                                <div class="table-responsive">
                                    <table id="myTable-business" class="display nowrap table table-hover table-striped table-bordered"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>License Type</th>
                                                <th>Agency</th>
                                                <th>Business Name</th>
                                                <th>System</th>
                                                <th>Branch</th>
												<th>Application Type</th>
												<th>Status</th>
												<th>Refference No.</th>
												<td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>1</td>
                                                <td>KEBENARAN DI BAWAH AKTA KEMAJUAN PETROLEUM 1974 (PDA KOMERSIL)
												<br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#info-bisnes" title="<?php echo $businessReg['tooltip'] ?>"><i class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i>Info </button>
												</td>
                                                <td>Ministry of Domestic Trade, Co-operatives & Consumerism (MDTCC - HQ)</td>
                                                <td>IMPIAN KUKUH SDN. BHD.</td>
                                                <td>BLESS2.0 
												<br> <br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#help-desk3" ><i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> Helpdesk</button>
												</td>
												<td> - </td>
												<td>New</td>
												<td>Incomplete</td>
												<td>DN22018016170</td>
												<td>
                                                 <div class="btn-group">
												 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
												<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Apply</a>
												<a class="dropdown-item" href="#">Remove</a>
												</div>
												</div>
                                                </td>
                                            </tr>
											
											<tr>

                                                <td>2</td>
                                                <td>LESEN MENJUAL ALAT-ALAT TIMBANG DAN SUKAT
												<br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#info-bisnes" title="<?php echo $businessReg['tooltip'] ?>"><i class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i> Info</button>
												</td>
												</td>
                                                <td>-</td>
                                                <td>BILLIAN TRADERS SDN. BHD.</td>
                                                <td>BLESS2.0 
												<br> <br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#help-desk3" ><i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> Helpdesk</button>
												</td>
												<td> - </td>
												<td>New</td>
												<td>Incomplete</td>
												<td>DN22018016124</td>
												<td>
                                                 <div class="btn-group">
												 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
												 <div class="dropdown-menu">
												 <a class="dropdown-item" href="#">Apply</a>
												 <a class="dropdown-item" href="#">Remove</a>
												 </div>
												 </div>
                                                </td>
                                            </tr>
											
											<tr>

                                                <td>3</td>
                                                <td>KEBENARAN MENJALANKAN PERDAGANGAN PENGEDARAN DI MALAYSIA BAGI FORMAT SPECIALTY STORE DAN VARIOUS OTHER FORMAT
												<br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#info-bisnes" title="<?php echo $businessReg['tooltip'] ?>"><i class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i> Info</button>
												</td>
                                                <td>Ministry of Domestic Trade, Co-operatives & Consumerism (MDTCC - HQ)</td>
                                                <td>BILLIAN TRADERS SDN. BHD.</td>
                                                <td>BLESS2.0 
												<br> <br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#help-desk3" ><i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> Helpdesk</button>
												</td>
												<td> - </td>
												<td>New</td>
												<td>Incomplete</td>
												<td>DN22018016123</td>
												<td>
                                                 <div class="btn-group">
												 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
												 <div class="dropdown-menu">
												 <a class="dropdown-item" href="#">Apply</a>
												 <a class="dropdown-item" href="#">Remove</a>
												 </div>
												 </div>
                                                </td>
                                            </tr>
											
											<tr>

                                                <td>4</td>
                                                <td>KEBENARAN MENJALANKAN AKTIVITI DI BAWAH AKTA KEMAJUAN PETROLEUM 1974 (PDA) DAN AKTA KAWALAN BEKALAN 1961 (CSA)
												<br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#info-bisnes" title="<?php echo $businessReg['tooltip'] ?>"><i class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i> Info</button>
												</td>
                                                <td>Ministry of Domestic Trade, Co-operatives & Consumerism (MDTCC - HQ)</td>
                                                <td>IMPIAN KUKUH SDN. BHD.</td>
                                               <td>BLESS2.0 
												<br> <br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#help-desk3" ><i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> Helpdesk</button>
												</td>
												<td> - </td>
												<td>New</td>
												<td>Incomplete</td>
												<td>DN22018016116</td>
												<td>
                                                 <div class="btn-group">
												 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
												 <div class="dropdown-menu">
												 <a class="dropdown-item" href="#">Apply</a>
												 <a class="dropdown-item" href="#">Remove</a>
												 </div>
												 </div>
                                                </td>
                                            </tr>
											
											<tr>
                                                <td>5</td>
                                                <td>KEBENARAN MENJALANKAN AKTIVITI DI BAWAH AKTA KEMAJUAN PETROLEUM 1974 (PDA) DAN AKTA KAWALAN BEKALAN 1961 (CSA)
												<br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#info-bisnes" title="<?php echo $businessReg['tooltip'] ?>"><i class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i> Info</button>
												</td>
                                                <td>Ministry of Domestic Trade, Co-operatives & Consumerism (MDTCC - HQ)</td>
                                                <td>IMPIAN KUKUH SDN. BHD.</td>
                                                <td>BLESS2.0 
												<br> <br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#help-desk3" ><i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> Helpdesk</button>
												</td>
												<td> - </td>
												<td>New</td>
												<td>Incomplete</td>
												<td>DN22018016116</td>
												<td>
                                                 <div class="btn-group">
												 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
												 <div class="dropdown-menu">
												 <a class="dropdown-item" href="#">Apply</a>
												 <a class="dropdown-item" href="#">Remove</a>
												 </div>
												 </div>
                                                </td>
                                            </tr>
											
											<tr>
                                                <td>6</td>
                                                <td>PERMIT BARANG KAWALAN BERJADUAL
												<br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#info-bisnes" title="<?php echo $businessReg['tooltip'] ?>"><i class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i> Info</button>
												</td>
                                                <td>-</td>
                                                <td>IMPIAN KUKUH SDN. BHD.</td>
                                                <td>BLESS2.0 
												<br> <br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#help-desk3" ><i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> Helpdesk</button>
												</td>
												<td> - </td>
												<td>New</td>
												<td>Incomplete</td>
												<td>DN22018016113</td>
												<td>
                                                 <div class="btn-group">
												 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
												 <div class="dropdown-menu">
												 <a class="dropdown-item" href="#">Apply</a>
												 <a class="dropdown-item" href="#">Remove</a>
												 </div>
												 </div>
                                                </td>
                                            </tr>
											
											<tr>
                                                <td>7</td>
                                                <td>LESEN JUALAN LANGSUNG
												<br> <br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#info-bisnes" title="<?php echo $businessReg['tooltip'] ?>"><i class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i> Info</button>
												</td>
                                                <td>Ministry of Domestic Trade, Co-operatives & Consumerism (MDTCC - HQ)
												</td>
                                                <td>IMPIAN KUKUH SDN. BHD.</td>
                                                <td>BLESS2.0 
												<br> <br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#help-desk3" ><i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> Helpdesk</button>
												</td>
												<td> - </td>
												<td>New</td>
												<td>Incomplete</td>
												<td>DN22018016111</td>
												<td>
                                                 <div class="btn-group">
												 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
												 <div class="dropdown-menu">
												 <a class="dropdown-item" href="#">Apply</a>
												 <a class="dropdown-item" href="#">Remove</a>
												 </div>
												 </div>
                                                </td>
                                            </tr>
											
											<tr>
                                                <td>8</td>
                                                <td>LESEN BORONG BARANG KAWALAN BERJADUAL (CSA)
												<br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#info-bisnes" title="<?php echo $businessReg['tooltip'] ?>"><i class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i> Info</button>
												</td>
                                                <td>-</td>
                                                <td>IMPIAN KUKUH SDN. BHD.</td>
                                                <td>BLESS2.0 
												<br> <br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#help-desk3" ><i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> Helpdesk</button>
												</td>
												<td> - </td>
												<td>New</td>
												<td>Incomplete</td>
												<td>DN22018016104</td>
												<td>
                                                 <div class="btn-group">
												 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
												 <div class="dropdown-menu">
												 <a class="dropdown-item" href="#">Apply</a>
												 <a class="dropdown-item" href="#">Remove</a>
												 </div>
												 </div>
                                                </td>
                                            </tr>
											
											<tr>
                                                <td>9</td>
                                                <td>LESEN MEMBAIKI DAN MENJUAL ALAT-ALAT TIMBANG DAN SUKAT
												<br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#info-bisnes" title="<?php echo $businessReg['tooltip'] ?>"><i class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i> Info</button>
												</td>
                                                <td>-</td>
                                                <td>IMPIAN KUKUH SDN. BHD.</td>
                                                <td>BLESS2.0 
												<br> <br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#help-desk3" ><i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> Helpdesk</button>
												</td>
												<td> - </td>
												<td>New</td>
												<td>Incomplete</td>
												<td>DN22018016070</td>
												<td>
                                                 <div class="btn-group">
												 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
												 <div class="dropdown-menu">
												 <a class="dropdown-item" href="#">Apply</a>
												 <a class="dropdown-item" href="#">Remove</a>
												 </div>
												 </div>
                                                </td>
                                            </tr>
											
											<tr>
                                                <td>10</td>
                                                <td>LESEN MEMBAIKI DAN MENJUAL ALAT-ALAT TIMBANG DAN SUKAT
												<br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#info-bisnes" title="<?php echo $businessReg['tooltip'] ?>"><i class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i> Info</button>
												</td>
                                                <td>-</td>
                                                <td>IMPIAN KUKUH SDN. BHD.</td>
                                                <td>BLESS2.0 
												<br> <br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#help-desk3" ><i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> Helpdesk</button>
												</td>
												<td> - </td>
												<td>New</td>
												<td>Incomplete</td>
												<td>DN22018016069</td>
												<td>
                                                 <div class="btn-group">
												 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
												 <div class="dropdown-menu">
												 <a class="dropdown-item" href="#">Apply</a>
												 <a class="dropdown-item" href="#">Remove</a>
												 </div>
												 </div>
                                                </td>
                                            </tr>
											
											<tr>
                                                <td>11</td>
                                                <td>LESEN BORONG BARANG KAWALAN BERJADUAL (CSA)
												<br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#info-bisnes" title="<?php echo $businessReg['tooltip'] ?>"><i class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i> Info</button>
												</td>
                                                <td>-</td>
                                                <td>SP NORTHERN SUPPLY SDN. BHD.</td>
                                                <td>BLESS2.0 
												<br> <br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#help-desk3" ><i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> Helpdesk</button>
												</td>
												<td> - </td>
												<td>New</td>
												<td>Incomplete</td>
												<td>DN22018016057</td>
												<td>
                                                 <div class="btn-group">
												 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
												 <div class="dropdown-menu">
												 <a class="dropdown-item" href="#">Apply</a>
												 <a class="dropdown-item" href="#">Remove</a>
												 </div>
												 </div>
                                                </td>
                                            </tr>
											
											<tr>
                                                <td>12</td>
                                                <td>KEBENARAN DI BAWAH AKTA KEMAJUAN PETROLEUM 1974 (PDA KOMERSIL)
												<br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#info-bisnes" title="<?php echo $businessReg['tooltip'] ?>"><i class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i> Info</button>
												</td>
                                                <td>-</td>
                                                <td>SP NORTHERN SUPPLY SDN. BHD.</td>
                                                <td>BLESS2.0 
												<br> <br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#help-desk3" ><i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> Helpdesk</button>
												</td>
												<td> - </td>
												<td>New</td>
												<td>Incomplete</td>
												<td>DN22018016057</td>
												<td>
                                                 <div class="btn-group">
												 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
												 <div class="dropdown-menu">
												 <a class="dropdown-item" href="#">Apply</a>
												 <a class="dropdown-item" href="#">Remove</a>
												 </div>
												 </div>
                                                </td>
                                            </tr>
											
											<tr>
                                                <td>13</td>
                                                <td>LESEN BORONG BARANG KAWALAN BERJADUAL (CSA)
												<br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#info-bisnes" title="<?php echo $businessReg['tooltip'] ?>"><i class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i> Info</button>
												</td>
                                                <td>-</td>
                                                <td>IMPIAN KUKUH SDN. BHD.</td>
                                                <td>BLESS2.0 
												<br> <br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#help-desk3" ><i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> Helpdesk</button>
												</td>
												<td> - </td>
												<td>New</td>
												<td>Incomplete</td>
												<td>DN22018016040</td>
												<td>
                                                 <div class="btn-group">
												 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
												 <div class="dropdown-menu">
												 <a class="dropdown-item" href="#">Apply</a>
												 <a class="dropdown-item" href="#">Remove</a>
												 </div>
												 </div>
                                                </td>
                                            </tr>
											
											<tr>
                                                <td>14</td>
                                                <td> KEBENARAN DI BAWAH AKTA KEMAJUAN PETROLEUM 1974 (PDA KOMERSIL)
												<br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#info-bisnes" title="<?php echo $businessReg['tooltip'] ?>"><i class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i> Info</button>
												</td>
                                                <td>Ministry of Domestic Trade, Co-operatives & Consumerism (MDTCC - HQ)</td>
                                                <td>IMPIAN KUKUH SDN. BHD.</td>
                                                <td>BLESS2.0 
												<br> <br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#help-desk3" ><i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> Helpdesk</button>
												</td>
												<td> - </td>
												<td>New</td>
												<td>Incomplete</td>
												<td>DN22018016039</td>
												<td>
                                                 <div class="btn-group">
												 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
												 <div class="dropdown-menu">
												 <a class="dropdown-item" href="#">Apply</a>
												 <a class="dropdown-item" href="#">Remove</a>
												 </div>
												 </div>
                                                </td>
                                            </tr>
											
											<tr>
                                                <td>15</td>
                                                <td> LESEN MEMBAIKI DAN MENJUAL ALAT-ALAT TIMBANG DAN SUKAT
												<br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#info-bisnes" title="<?php echo $businessReg['tooltip'] ?>"><i class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i> Info</button>
												</td>
                                                <td>-</td>
                                                <td>SP NORTHERN SUPPLY SDN. BHD.</td>
                                                <td>BLESS2.0 
												<br> <br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#help-desk3" ><i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> Helpdesk</button>
												</td>
												<td> - </td>
												<td>New</td>
												<td>Incomplete</td>
												<td>DN22018016037</td>
												<td>
                                                 <div class="btn-group">
												 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
												 <div class="dropdown-menu">
												 <a class="dropdown-item" href="#">Apply</a>
												 <a class="dropdown-item" href="#">Remove</a>
												 </div>
												 </div>
                                                </td>
                                            </tr>
											
											<tr>
                                                <td>16</td>
                                                <td>KEBENARAN DI BAWAH AKTA KEMAJUAN PETROLEUM 1974 (PDA KOMERSIL)
												<br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#info-bisnes" title="<?php echo $businessReg['tooltip'] ?>"><i class="ti-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information"></i> Info</button>
												</td>
                                                <td>Ministry of Domestic Trade, Co-operatives & Consumerism (MDTCC - HQ)</td>
                                                <td>IMPIAN KUKUH SDN. BHD.</td>
                                                <td>BLESS2.0 
												<br> <br>
												<button type="button" class="btn btn-sm btn-info align-bottom pull-right" data-toggle="modal"data-target="#help-desk3" ><i class="icon-phone" data-toggle="tooltip" data-placement="top" title="" data-original-title="Helpdesk"></i> Helpdesk</button>
												</td>
												<td> - </td>
												<td>New</td>
												<td>Incomplete</td>
												<td>DN22018016023</td>
												<td>
                                                 <div class="btn-group">
												 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
												 <div class="dropdown-menu">
												 <a class="dropdown-item" href="#">Apply</a>
												 <a class="dropdown-item" href="#">Remove</a>
												 </div>
												 </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel1">Edit Menu</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="menu" class="control-label">Menu:</label>
                                                <input type="text" class="form-control" id="menu" value="License Search">
                                            </div>
                                            <div class="form-group">
                                                <label for="path" class="control-label">Path:</label>
                                                <input type="text" class="form-control" id="path" value="/pelesen">
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                    <!--                                                        <label for="active" class="control-label">Active:</label>-->
                                                    <input type="checkbox" class="filled-in chk-col-blue-grey" id="active"
                                                        checked>
                                                    <label for="active" class="control-label">Active</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="checkbox" class="filled-in chk-col-blue-grey" id="visible"
                                                        checked>
                                                    <label for="visible" class="control-label">Visible</label>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">

                                        <button type="button" class="btn btn-info btn-sm">Save</button>
                                        <button type="button" class="btn btn-googleplus" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal -->
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
 <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
    <link href="../assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
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
    <!-- ============================================================== -->

    <!-- This page plugins -->
    <!-- ============================================================== -->

    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/plugins/echarts/echarts-all.js"></script>
    <!-- Vector map JavaScript -->
    <script src="../assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Calendar JavaScript -->
    <script src="../assets/plugins/moment/moment.js"></script>
    <script src='../assets/plugins/calendar/dist/fullcalendar.min.js'></script>
    <script src="../assets/plugins/calendar/dist/jquery.fullcalendar.js"></script>
    <script src="../assets/plugins/calendar/dist/cal-init.js"></script>
    <!-- sparkline chart -->
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/dashboard4.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
	
    <!-- ============================================================== -->
    <!-- Mockup -->
    <!-- ============================================================== -->
    <script src="js/mockup/root.js"></script>
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


<script>
    var table = $('#myTable-business').DataTable( {  
		"drawCallback": function( settings ) {

			$('[data-toggle="tooltip"]').tooltip();;

			// add as many tooltips you want

		},
	});
	
	
	function deleteData(id) {
        swal({
            title: "Are you sure to perform this action?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {
            swal("Deleted!", "Your request has been deleted.", "success");
            $('#' + id).hide();
        });
    }
</script>
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
<!-- Sweet-Alert  -->
<script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="../assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>

<!-- end - This is for export functionality only -->
<script>

</body>

</html>
