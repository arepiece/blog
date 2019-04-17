<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
        <title>Search Entity Business</title>
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- chartist CSS -->
        <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
        <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
        <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- page CSS -->
        <link href="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link href="../assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- -->
        <script type="text/javascript" src="../assets/loader.js"></script>

<!-- <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> -->
<!-- <script type="text/javascript" src="js/Chart.js"></script> -->
<!-- <script type="text/javascript" src="js/script.js"></script> -->
        <!-- You can change the theme colors from here -->
        <link href="css/colors/mybiz-default-color.css" id="theme" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body class="fix-header card-no-border logo-center">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
         <?php include('portal-top-nav.php'); ?>

                            <!-- ============================================================== -->
                            <!-- Page wrapper  -->
                            <!-- ============================================================== -->
                            <div class="page-wrapper">
                                <!-- ============================================================== -->
                                <!-- Container fluid  -->
                                <!-- ============================================================== -->
                                <div class="container-fluid" style="padding: 0 50px;">


                                    <div class="row page-titles">
                                        <div class="col-md-5 col-8 align-self-center">
                                            <h3 class="text-themecolor m-b-0 m-t-0">Business Entity Profesional</h3>
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                                <li class="breadcrumb-item active">Business Entity Profesional</li>
                                            </ol>
                                        </div>

                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Please use these steps to perform the search:</h4>
                                            <h6 class="card-subtitle">Follow steps below : </h6>
                                            <div class="row" id="step1">
                                                <div class="col-md-4">
                                                    <h5 class="m-t-30 m-b-10">1. What is your professional qualifications?</h5>
                                                    <select class="selectpicker" data-style="form-control btn-secondary" id="qualification" name="qualification" onchange="displaySelect('2');"> 
                                                        <option >-Select-</option>
                                                        <option value="1">Registered Appraisers (A)</option>
                                                        <option value="2">Registered Estate Agents (E)</option>
                                                        <option value="3">Registered Property Management</option>
                                                        <option value="4">Consulting QS </option>
                                                        <option value="5">Interior Designer</option>
                                                        <option value="6">Arkitek</option>
                                                        <option value="7">Juruukur Tanah Berlesen</option>
                                                        <option value="8">Engineering Consultancy Practise</option>
                                                        <option value="9">Practising Certificate</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row" id="step2">
                                                <div class="col-md-4">
                                                    <h5 class="m-t-30 m-b-10">2. What is your service field?</h5>
                                                    <select class="selectpicker" data-style="form-control btn-secondary" id="service" name="service" onchange="displaySelect('3');"> 
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


                                            <div class="row" id="step3">
                                                <div class="col-md-4">
                                                    <h5 class="m-t-30 m-b-10">3. What is your type of business entity?</h5>
                                                    <select class="selectpicker" data-style="form-control btn-secondary" id="entity" name="entity"> 
                                                        <option value="1">Sole proprietorship</option>
                                                        <option value="1">Partnership</option>
                                                        <option value="1">Company</option>
                                                        <option value="1">Limited liability partnership </option>
                                                        <option value="1">Co-operative</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="button-box"> 
                                                        <a id="deselect-all" class="btn btn-info" href="#" onclick="goToEntity();">Search</a> 
                                                    </div>

                                                </div>
                                            </div>

                                        </div>



                                        <!-- ============================================================== -->
                                        <!-- Start Page Content -->
                                        <!-- ============================================================== -->

                                        <!-- Floating button -->




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
                            var qualification = $('#qualification').val();
                             var service = $('#service').val();
                              var entity = $('#entity').val();
                            location.href = 'searchEntityProfesionalBusinessResult.php?qualification='+qualification+'&service='+service+'&entity=' + entity;
                        }

                        function displaySelect(id) {
                            if (id == 2) {
                                $('#step' + id).show('slow');
                            } else if (id == 3) {
                                $('#step' + id).show('slow');
                            }

                        }
                    </script>
                    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>


                    </body>

                    </html>