<?php $page = 'mybisnes';include 'base.php'; ?>
                    <div class="row page-titles m-t-10">
                    <div class="col-lg-5 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="mybisnes.php">MyBusiness</a></li>
                            <li class="breadcrumb-item active">View Branch</li>
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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8 col-12">
                                            <h3 class="card-title"><i class="far fa-id-card m-r-5"></i> EMDIN QS CONSULT </h3>
                                            <h6 class="card-subtitle">Registration No: 2018-18-000342</h6>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="pull-right m-t-10">
                                                <a><button class="btn btn-sm waves-effect-light btn-info" data-toggle="modal" data-target="#tindakan-addbranch" data-whatever="@getbootstrap"><i class="ti-plus m-r-5"></i> Add Branch</button></a>
                                                <a href="business-registration.php"><button class="btn btn-sm waves-effect-light btn-info"><i class="ti-search m-r-5"></i> Business Registration</button></a>                                                
                                                 <a href="mybisnes.php"><button type="submit" class="btn btn-sm waves-effect-light btn-danger"> Back</button></a>
                                            </div>
                                        </div>
                                    </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table id="myTable" class="table table-bordered table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Branch / Location</th>
															<th>Expiry Date</th>
                                                            <th style="width: 110px !important;">Action</th> 
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Pulau Pinang</td>
																<td>31/01/2018</td>
                                                                <td>
                                                                   
																	<a>
                                                                    <button class="btn btn-sm waves-effect-light btn-info" data-toggle="modal" data-target="#tindakan-changedetails" data-whatever="@getbootstrap"><i class="ti-pencil-alt" ></i> &nbsp Change Details</button></a>
																	<br>
                                                                    <a>
																	 <button class="btn btn-sm waves-effect-light btn-info" data-toggle="modal" data-target="#tindakan-pembaharuanbranch" data-whatever="@getbootstrap" style=" margin-top: 5px;"><i class="ti-reload"></i> &nbsp; Renewal</button>
																	
																	
																	
																</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Kuala Lumpur</td>
																<td>31/01/2019</td>
                                                                <td>
                                                                    <a>
                                                                    <button class="btn btn-sm waves-effect-light btn-info" data-toggle="modal" data-target="#tindakan-changedetails" data-whatever="@getbootstrap"><i class="ti-pencil-alt" ></i> &nbsp Change Details</button></a>
                                                                    <a>
																	<br>
																	  <a>
																	 <button class="btn btn-sm waves-effect-light btn-info" data-toggle="modal" data-target="#tindakan-pembaharuanbranch" data-whatever="@getbootstrap" style=" margin-top: 5px;"><i class="ti-reload"></i> &nbsp; Renewal</button>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Negeri Sembilan</td>
																<td>31/01/2019</td>
                                                                <td>
                                                                    <a>
                                                                    <button class="btn btn-sm waves-effect-light btn-info" data-toggle="modal" data-target="#tindakan-changedetails" data-whatever="@getbootstrap"><i class="ti-pencil-alt" ></i> &nbsp Change Details</button></a>
                                                                    <a>
																	<br>
																	 <a>
																	 <button class="btn btn-sm waves-effect-light btn-info" data-toggle="modal" data-target="#tindakan-pembaharuanbranch" data-whatever="@getbootstrap" style=" margin-top: 5px;"><i class="ti-reload"></i> &nbsp; Renewal</button>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                       
					   
					   <!-- modal LJBM Add Branch -->
                   <div class="modal fade bs-example-modal-lg" id="tindakan-addbranch" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="align-self-center"><i class="ti-alert btn btn-warning btn-circle btn-m"></i> Attention!</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
					
					
					<div class="modal fade bs-example-modal-lg" id="iframe-addbranchljbm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-license modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Renewal</h4>

                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                        <iframe id="test" src="https://www.bqsm.gov.my/reqsys/t/reg/cqsp"  style="overflow: scroll; width:100%; height:400px"></iframe>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="actionHantar()">Submit</button>
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
                                    <p style="font-size: 12px;"> Do you want to change your details?</p>
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
                                        <iframe id="test" src="https://www.bqsm.gov.my/reqsys/t/reg/cqsp"  style="overflow: scroll; width:100%; height:400px"></iframe>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect text-left" data-dismiss="modal" onclick="actionHantar()">Submit</button>
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
            <script src="../assets/plugins/switchery/dist/switchery.min.js"></script>
            <script src="../assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
            <script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
            <script src="../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
            <script src="../assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
            <script src="../assets/plugins/dff/dff.js" type="text/javascript"></script>
            <script type="text/javascript" src="../assets/plugins/multiselect/js/jquery.multi-select.js"></script>
             <!-- This is data table -->
            <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
            <!-- start - This is for export functionality only -->
            <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
            <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
            <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
            
            <script> <!-- custom modal switch on/off -->
            function actionrenewalljbm() {
                                            $('#tindakan-pembaharuan').modal('hide');
                                            $('#iframe-renewalljbm').modal('show');
                                        }
                                        
            function actionchangedetailsljbm() {
                                            $('#tindakan-changedetails').modal('hide');
                                            $('#iframe-changedetailsljbm').modal('show');
                                        }       

            function actionaddbranchljbm() {
                                            $('#tindakan-addbranch').modal('hide');
                                            $('#iframe-addbranchljbm').modal('show');
                                        } 

			function actionrenewalbranchljbm() {
                                            $('#tindakan-pembaharuanbranch').modal('hide');
                                            $('#iframe-renewalbranchljbm').modal('show');
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
               <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
       //column setting
        $('#myTable').dataTable( {
              "columnDefs": [
                { "width": "15%", "targets": [0,2]},
                { "orderable": false, "targets": 2}
              ]
            } );

        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });


       
    </script>
    </body>

</html>
