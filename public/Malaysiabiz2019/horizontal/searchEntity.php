                <?php include('base-portal.php'); ?> 
                <div class="row page-titles" style="padding-top: 35px;">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Business Entity </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Business Entity </li>
                        </ol>
                    </div>

                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Business Registration Search</h4>
                        <h6 class="card-subtitle" style="padding-left:0">Please use these step to perform the search : </h6>
						
						 <div class="row">
                            <div class="col-md-8">
                                <h6 class="m-t-10 m-b-10"><span class="label label-info">Step 1</span> Define your business registration type and choose agency</h6>
								</div>
								</div>
								
								<div class="row">
                            <div class="col-md-8">
                                <h6 class="m-t-10 m-b-10"><span class="label label-info">Step 2</span> Define your services field (Applicable for professional entity ONLY)</h6>
								</div>
								</div>
								
								<div class="row">
                            <div class="col-md-4">
                                <h6 class="m-t-10 m-b-10"><span class="label label-info">Step 3</span> Define your business type</h6>
								</div>
								</div>
						
						 <div class="row" id="step1">
                            <div class="col-md-4">
                                <h5 class="m-t-30 m-b-10">1. What is your business category?</h5>
                                <div class="form-group">
                                    <div class="m-b-10">
                                        <label class="custom-control custom-radio" style="display: inline-block; padding-right: 30px;">
                                            <input id="radio1" name="radio" type="radio" class="custom-control-input " id="category2" name="category2" onchange="displaySelect('5');">
                                            <span class="custom-control-label" title="Business registration with SSM or SKM">Business Entity</span>
                                        </label>
                                       <label class="custom-control custom-radio" style="display: inline-block; padding-right: 30px;">
                                            <input id="radio2" name="radio" type="radio" class="custom-control-input" id="category" name="category" onchange="displaySelect('2');">
                                            <span class="custom-control-label" title="Professional business registration with professional regulatary agency">Professional</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						
						<div class="row" id="step2">
						<div class="col-md-4">
                            <div class="form-group">
							
                                <h5 class="m-t-10 m-b-10">Choose Agency :</h5>
                                <select class="select2" style="width:100%" data-style="form-control btn-secondary" id="agency" name="agency" onchange="displaySelect('3');">
                                    <option >-Select-</option>													
                                    <option value="1">Lembaga Arkitek Malaysia (LAM)</option>
                                    <option value="2">Lembaga Juruukur Bahan Malaysia (LJBM)</option>
                                    <option value="3">Lembaga Juruukur Tanah Malaysia (LJTM)</option>
                                    </select>
                                </div>
								</div>
                            
                        </div>
						
						<div class="row" id="step3">
						<div class="col-md-4">
                            <div class="form-group">
                                <h5 class="m-t-10 m-b-10">2. What is your service field?</h5>
                                <select class="select2" style="width:100%" data-style="form-control btn-secondary" id="service" name="service" onchange="displaySelect('4');">
                                        <option >-Select-</option>													
                                    <option value="1">Property Management Consultancy Valuation</option>
                                    <option value="2">Property Management Valuation</option>
                                    <option value="3">Business Property - Buying, Selling and leasing property</option>
                                    <option value="4">Property Investment</option>
                                    <option value="5">Consulting QS</option>
                                    <option value="6">Interior design</option>
                                    <option value="7">Architectural</option>
                                    <option value="8">Ukur hakmilik</option>
                                    <option value="9">Ukur kejuruteraan</option>
                                    <option value="10">Ukur topografi</option>
                                    <option value="11">Pengukuran lain</option>
                                    <option value="12">Consultancy</option>
                                    <option value="13">Engineering services</option>
                                    <option value="14">Audit Services</option>
                                    <option value="15">Non Audit Services</option>
                                    </select>
                                </div>
								</div>
                            
                        </div>
					
					
                        <div class="row" id="step4">
                            <div class="col-md-4">
							<div class="form-group">
                                <h5 class="m-t-30 m-b-10">3. What is your business type?</h5>
                                <select class="select2" style="width:100%" data-style="form-control btn-secondary" id="entity" name="entity" onchange="displaySelect('7');"> 
                                    <option >-Select-</option>
									<option value="1">Show All</option>
									<option value="1">Sole proprietorship</option>
                                    <option value="1">Partnership</option>
                                    <option value="1">Company</option>
                                    <option value="1">Limited liability partnership </option>
                                    <option value="1">Sole proprietorship Sdn Bhd</option>
									<option value="1">Partnership Sdn Bhd</option>
                                </select>
							</div>
                            </div>
                        </div>
						
						
						<div class="row" id="step5">
						<div class="col-md-4">
                            <div class="form-group">
							
                                <h5 class="m-t-10 m-b-10">Choose Agency :</h5>
                                <select class="select2" style="width:100%" data-style="form-control btn-secondary" id="agency" name="agency" onchange="displaySelect('6');">
                                        <option >-Select-</option>													
                                    <option value="1">Suruhanjaya Syarikat Malaysia (SSM)</option>
                                    <option value="2">Suruhanjaya Koperasi Malaysia (SKM)</option>
                                    </select>
                                </div>
								</div>
                            
                        </div>
						
						<div class="row" id="step6">
                            <div class="col-md-4">
							<div class="form-group">
                                <h5 class="m-t-10 m-b-10">2. What is your business type?</h5>
                                <select class="select2" style="width:100%" data-style="form-control btn-secondary" id="entity2" name="entity2" onchange="displaySelect('8');"> 
                                    <option >-Select-</option>
									<option value="1">Sole proprietorship</option>
                                    <option value="1">Partnership</option>
                                    <option value="1">Company</option>
                                    <option value="1">Limited liability partnership </option>
                                    <option value="1">Co-operative</option>
                                </select>
							</div>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="button-box"> 
                                    <a id="deselect-all" class="btn btn-info" href="#" onclick="goToEntity();">Search</a> 
									<a id="deselect-all2" class="btn btn-info" href="#" onclick="goToEntity2();">Search</a> 
                                </div>

                            </div>
                        </div>

                    </div>



                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->	


            <!-- sample modal content -->




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
        <footer class="footer">
            © 2018 Copyright Reserved by Government of Malaysia
        </footer>
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
											$('#step6').hide();
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
        location.href = 'searchEntityProfesionalBusinessResult.php?&agency='+agency+'&service='+service+'&entity=' + entity;
	}	
		function goToEntity2() {
		
          var entity = $('#entity').val();
        location.href = 'searchEntityBusinessResult.php?&entity=' + entity;
    }

    function displaySelect(id) {
		if(id == 2 || id ==3 || id==4) { 
            $('#step' + id).show('slow');
			$('#step5').hide();
			$('#step6').hide();
            $('#deselect-all2').hide();
		}
		if(id == 5 || id ==6) { 
            $('#step' + id).show('slow');
			$('#step2').hide();
			$('#step3').hide();
			$('#step4').hide();
            $('#deselect-all').hide();
		}
		if(id==7)
            $('#deselect-all').show();
		if(id==8)
            $('#deselect-all2').show();
			
        //if (id == 2) {
        //    $('#step' + id).show('slow');
        //} else if (id == 4) {
        //    $('#step' + id).show('slow');
        //}

    }
	
</script>


<script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>


</body>

</html>