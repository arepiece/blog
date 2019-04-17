<?php

extract($_REQUEST);
error_reporting(0);
include ('../../Connection/pg_connection.php');

?>
<?php $page = 'mydashboard';include 'base.php'; ?>  

<div class="row page-titles m-t-10">
<div class="col-lg-5 align-self-center">
    <!-- <h3 class="text-themecolor">View Branch</h3> -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="mydashboard.php">MyDashboard</a></li>
        <li class="breadcrumb-item active">Login ID Directory</li>
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
                    <div class="col-md-12">
                        <a href="login-id-directory.php"><button class="btn btn-info">If ID = 1</button></a>
                    </div>
                </div>
                <div class="row blank_page bounceIn animated">
                    <div class="col-md-12 text-center">
                        <img  src="../assets/images/blank_page/data-table-no-data.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">

                        <h2 class="m-b-20"> 
                        <small>Hi There! You haven't add anything yet!</small><br>
                        Let's Get Started.</h2>
                        <button class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#add-login-id" data-whatever="@getbootstrap"><i class="ti-plus"></i> Add Login ID</button>
                    </div>
                </div>
                 
            </div>
        </div>

        <!-- Add Login ID -->
        <div class="modal fade" id="add-login-id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">Add New Agency Login ID</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">                                                                                                           
                        <form class="form-horizontal p-t-20" id="formLoginID" name="formLoginID" method="post" action="loginID_action.php">
                            <div class="form-group row">
                                <label for="exampleInputuname" class="col-sm-3 control-label">Agency: <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <!-- <div class="input-group">                                                                
                                        <input type="text" class="form-control form-control-sm" name="agency_name" id="agency_name" value="" readonly>
                                    </div> -->
                                    <select class="company custom-select form-control form-control-sm">
                                              <option value=''><strong>Name</strong></option>
                                              <option value="MED">MED</option>
                                              <option value="JAKIM">JAKIM</option>
                                              <option value="MBPP">MBPP</option>
                                              <option value="LAM">LAM</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname" class="col-sm-3 control-label">System: <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                        <select class="ag_system custom-select form-control form-control-sm">
                                             <option value=''><strong>System</strong></option>
                                        </select>
                                   <!--  <select class="custom-select form-control form-control-sm" id="system_name" name="system_name" onchange="pilihAgencySystem(this.value)">
                                        <option selected="">Choose...</option>
                                        <option value="BLESS1.0">BLESS1.0</option>
                                        <option value="BLESS2.0">BLESS2.0</option>
                                        <option value="eLesen">eLesen</option>
                                    </select> -->
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputuname" class="col-sm-3 control-label">Login ID Type: <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    
                                     <select class="loginid custom-select form-control form-control-sm">
                                          <option value=''><strong>Select</strong></option>                                                                       
                                    </select>
                                   <!--  <select class="form-control form-control-sm" id="login_id_type" name="login_id_type">
                                        <option value="0">Select</option>
                                        <option value="Company Registration No.">Company Registration No.</option>
                                        <option value="Identity Card No.">Identity Card No.</option>
                                        <option value="Username">Username</option>
                                        <option value="Passport No.">Passport No.</option>
                                        <option value="E-mail">E-mail</option>
                                    </select> -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname" class="col-sm-3 control-label">Login ID: <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <div class="input-group">                                                                
                                        <input type="text" class="form-control form-control-sm" name="login_id" id="login_id" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname" class="col-sm-3 control-label">Password: <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <div class="input-group">                                                                
                                        <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="">
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" onclick="saveLoginID()">Verify</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
<!-- Sweet-Alert  -->
    <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="../assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
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
    $(document).ready(function () {
        $('#myTable').DataTable();
        $(document).ready(function () {
            var table = $('#example').DataTable({
                "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
// Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

    function saveLoginID() {

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

            document.getElementById("formLoginID").submit();
            $('#add-login-id').modal('hide');
        });
    }
    function pilihAgencySystem(system){
        //alert('system: '+system);
        if(system === 'eLesen'){
             $('#agency_name').val('MBPP');
        }else if(system === 'MYeHALAL'){
            $('#agency_name').val('JAKIM');
        }else if(system === 'BLESS1.0'){
            $('#agency_name').val('BLESS1.0');
        }else if(system === 'BLESS2.0'){
            $('#agency_name').val('BLESS2.0');
        }
    }
    
  var series = [
{name: 'MED', ag_system: 'BLESS1.0', loginid: ['Passport No.', 'Identity Card No.']},
{name: 'MED', ag_system: 'BLESS2.0', loginid: ['Username']},
{name: 'JAKIM', ag_system: 'MYeHALAL', loginid: ['Company Registration','Passport No.']},
{name: 'MBPP', ag_system: 'eLesen', loginid: ['E-mail']},
{name: 'LAM', ag_system: 'MyLAM', loginid: ['Username']}
]

$(".company").change(function(){
    var company = $(this).val();
    var options =  '<option value=""><strong>System</strong></option>';
    $(series).each(function(index, value){
        if(value.name == company){
            options += '<option value="'+value.ag_system+'">'+value.ag_system+'</option>';

        }
    });
    
    $('.ag_system').html(options);
});


$(".ag_system").change(function(){
    var ag_system = $(this).val();
    var options =  '<option value=""><strong>Login ID Type</strong></option>';
    $(series).each(function(index, value){
        value.loginid.forEach(function(type) {
            if(value.ag_system == ag_system){
            options += '<option value="'+type+'">'+type+'</option>';
        }        
        })
    });
    
    $('.loginid').html(options);
});  
   
</script>
</body>

</html>
