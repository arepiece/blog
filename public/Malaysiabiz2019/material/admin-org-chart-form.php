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
    <title>Chart of Government Edit</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/mybiz-admin-default-color.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Admin CSS default -->
    <link href="css/malaysiabiz-admin-default.css" id="malaysiabiz-default" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar card-no-border">
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
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-mbiz-mini.png" class="logo-mini-admin">
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <img src="../assets/images/logo-mbiz-text.png" style="width: 140px"></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <?php include('admin-logout.php'); ?>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">



                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <?php include('admin-sidebar-nav.php'); ?>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->

            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Chart of Government</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Configuration</a></li>
                            
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <h3 name="form-title" class="m-b-0">Add New Chart of Government</h3>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-right">
                                                    <a href="admin-org-chart.php"><button type="button" name="btnSave" class="btn  waves-effect-light btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to submit and back to the main page"><i
                                                                class="ti-check"></i>Submit</button></a>
                                                    <a href="admin-org-chart.php"><button type="button" class="btn waves-effect-light btn-danger btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to cancel and back to the main page"><i
                                                                class="ti-close"></i> Cancel</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row m-b-20">
                                            <div class="col-md-6">
                                                <div>
                                                    <label class="control-label">Agency Code</label>
                                                    <input type="text" id="name" class="form-control" readonly="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <label class="control-label">Agency Name <span class="text-danger">*</span></label>
                                                    <div class="input-group-prepend">                                                
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="">Select</option>
                                                        <option value="Name 1">JABATAN KEMAJUAN ISLAM MALAYSIA</option>
                                                        <option value="Name 2">MAJLIS BANDARAYA PULAU PINANG</option>
                                                        <option value="Name 3">KEMENTERIAN PEMBANGUNAN USAHAWAN</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-b-20">
										
										<div class="col-md-6">
                                                <div>
                                                    <label class="control-label">Agency Category <span class="text-danger">*</span></label>
                                                    <div class="input-group-prepend">                                                
                                                    <select class="company form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="">Select</option>
														<option value="Persekutuan">Persekutuan</option>
														<option value="Negeri">Negeri</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
										
                                            <div class="col-md-6" id="step1">
                                                <div>
                                                    <label class="control-label">Group <span class="text-danger">*</span></label>
                                                    <div class="input-group-prepend">                                                
                                                    <select class="ag_system form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                         <option>Select</option>															
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <label class="control-label">Parent Agency <span class="text-danger">*</span></label>
                                                    <div class="input-group-prepend">                                                
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="">Jabtan Perdana Menteri</option>
                                                         <option value="">Kementerian Dalam Negeri</option>                                                   
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Active <span class="text-danger">*</span></label>
                                                    <div class="m-b-10">
                                                        <label class="custom-control custom-radio form-item-inline">
                                                            <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                        <label class="custom-control custom-radio form-item-inline">
                                                            <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">No</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="text-right">
                                                    <a href="admin-org-chart.php"><button type="button" name="btnSave" class="btn  waves-effect-light btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to submit and back to the main page"><i
                                                                class="ti-check"></i>Submit</button></a>
                                                    <a href="admin-org-chart.php"><button type="button" class="btn waves-effect-light btn-danger btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to cancel and back to the main page"><i
                                                                class="ti-close"></i> Cancel</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include('admin-footer.php'); ?>
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
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <!-- ============================================================== -->
    <!-- Mockup -->
    <!-- ============================================================== -->
    <script src="js/mockup/root.js"></script>
    <script src="js/parentSideNavbar.js"></script>
    <script>
        $(this).parentSideNavbar('admin-org-chart.php')
		jQuery(document).ready(function () {
                                            $('#step2').hide();
                                            
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
	function displaySelect(id) {
		if(id == 2 || id ==3) { 
            $('#step' + id).show('slow');
			$('#step2').hide();
            
    }
	</script>
    <script>
        
         var series = [
{name: 'Persekutuan', ag_system: ['Kementerian','Jabatan','Badan Berkanun Persekutuan','Lain-lain']},
{name: 'Negeri', ag_system: ['Pejabat SUK','Pejabat Daerah & Tanah (PDT)','Pihak Berkuasa Tempatan (PBT)','Bagi Berkanun Negeri','Agensi Negeri','Lain-lain']}

]

$(".company").change(function(){
    var company = $(this).val();
    var options =  '<option value=""><strong>Select</strong></option>';
    $(series).each(function(index, value){
          value.ag_system.forEach(function(type) {
        if(value.name == company){
            options += '<option value="'+type+'">'+type+'</option>';

        }
    })
    });
    
    $('.ag_system').html(options);
});
    </script>
	
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

</html>