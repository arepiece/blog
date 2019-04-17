    <?php include('base-portal.php'); ?> 
    <div class="row page-titles" style="padding-top: 35px;">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Business Licensing </h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Business Licensing </li>
            </ol>
        </div>

    </div>

        <div class="card">
            <img class="" src="../assets/images/background/megamenubg.jpg" alt="Card image cap" style="height: 622px;">
            <div class="card-img-overlay">
            <div class="card-body">
                <h4 class="card-title">Business Licensing Search</h4>
                <h6 class="card-subtitle" style="padding-left:0">Please use these step to perform the search : </h6>
				
				 <div class="row">
                    <div class="col-md-4">
                        <h6 class="m-t-10 m-b-10"><span class="label label-info">Step 1</span> Define your business location</h6>
						</div>
						</div>
						
						<div class="row">
                    <div class="col-md-8">
                        <h6 class="m-t-10 m-b-10"><span class="label label-info">Step 2</span> Define your business activity</h6>
						</div>
						</div>
				
				 <div class="row" id="step1">
                <div class="col-md-4">
                    <div class="form-group">
                        <h5 class="text-info m-t-10 m-b-10">1. Where is your business location?</h5>
                        <h5 class="m-t-10 m-b-10">State :</h5>
                        <select class="select2" style="width:100%" data-style="form-control btn-secondary" id="state" name="state" onchange="displaySelect('2');">
                                <option >-Select-</option> 
                            <option value="1">Johor</option>
                            <option value="2">Kedah</option>
                            <option value="3">Kelantan</option>
                            <option value="4">Melaka</option>
                            <option value="5">Negeri Sembilan</option>
                            <option value="6">Pahang</option>
                            <option value="7">Perak</option>
                            <option value="8">Perlis</option>
                            <option value="9">Pulau Pinang</option>
                            <option value="10">Sabah</option>
                            <option value="11">Sarawak</option>
                            <option value="12">Selangor</option>
                            <option value="13">Terengganu</option>
                            <option value="14">Wilayah Persekutuan Kuala Lumpur</option>
                            <option value="15">Wilayah Persekutuan Labuan</option>
                            <option value="16">Wilayah Persekutuan Putrajaya</option>
                            </select>
                        </div>
                        </div>
                    
                </div>
				
				
			<div class="row" id="step2">
				<div class="col-md-4">
                    <div class="form-group">
					
                        <h5 class="m-t-10 m-b-10">City / District :</h5>
                        <select class="select2" style="width:100%" data-style="form-control btn-secondary" id="city" name="city" onchange="displaySelect('3');">
                            <option >-Select-</option>													
                            <option value="1">Batu Pahat/Batu Pahat</option>
                            <option value="1">Parit Raja/Batu Pahat</option>
                            <option value="1">Rengit/Batu Pahat</option>
                            <option value="1">Yong Peng/Batu Pahat</option>
                            <option value="1">Bukit Indah/Johor Bahru</option>
                            <option value="1">Gelang Patah/Johor Bahru</option>
                            <option value="1">Iskandar Puteri/Johor Bahru</option>
                            <option value="1">Johor Bahru/Johor Bahru</option>
                            <option value="1">Kangkar Pulai/Johor Bahru</option>
                            <option value="1">Lima Kedai/Johor Bahru</option>
                            <option value="1">Pasir Gudang/Johor Bahru</option>
                            <option value="1">Senai/Johor Bahru</option>
                            <option value="1">Skudai/Johor Bahru</option>
                            <option value="1">Tebrau/Johor Bahru</option>
                            <option value="1">Ulu Choh/Johor Bahru</option>
                            <option value="1">Ulu Tiram/Johor Bahru</option>
                        </select>
                    </div>
				</div>
            </div>
				
			<div class="row" id="step3">
				<div class="col-md-4">
                    <div class="form-group">
                        <h5 class="text-info m-t-10 m-b-10">2. What is your business activity</h5>
                        <select class="select2" style="width:100%" data-style="form-control btn-secondary" id="service" name="service" onchange="displaySelect('4');">
                            <option >-Select-</option>                                                  
                            <option value="1">Batu Pahat/Batu Pahat</option>
                            <option value="1">Parit Raja/Batu Pahat</option>
                            <option value="1">Rengit/Batu Pahat</option>  
                        </select>
					</div>
                </div>
            </div>

                        <br>
                        <div class="row" id="step4">
                            <div class="col-md-4">
                                <div class="button-box"> 
                                    <a class="btn btn-info" href="#" onclick="goToEntity();">Search</a> 
                                </div>

                            </div>
                        </div>

                    </div>



               </div>
                <!-- /.modal-dialog -->
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
        <footer class="footer">
            © 2018 Copyright Reserved by Government of Malaysia
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->

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
<!-- This page plugins -->
<!-- ============================================================== -->
<script src="../assets/plugins/switchery/dist/switchery.min.js"></script>
<script src="../assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script src="../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="../assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="../assets/plugins/dff/dff.js" type="text/javascript"></script>
<script type="text/javascript" src="../assets/plugins/multiselect/js/jquery.multi-select.js"></script>
<script>
jQuery(document).ready(function () {
    $('#step2').hide();
    $('#step3').hide();
    $('#step4').hide();
    $('#step5').hide();
    $('#deselect-all').hide();
    $('#deselect-all2').hide();
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
    function goToEntity() {
        var agency = $('#agency').val();
         var service = $('#service').val();
          var entity = $('#entity').val();
        location.href = 'SearchResult.php?&agency='+agency+'&service='+service+'&entity=' + entity;
    }   
        function goToEntity2() {
        
          var entity = $('#entity').val();
        location.href = 'searchEntityBusinessResult.php?&entity=' + entity;
    }

    function displaySelect(id) {
        if(id == 2 || id ==3 || id==4) { 
            $('#step' + id).show('slow');
        }
        
        if(id==4)
            $('#step4').show();
        
            
     
    }
    
</script>


<script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>


</body>

</html>