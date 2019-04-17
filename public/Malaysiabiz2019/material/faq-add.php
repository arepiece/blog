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
    <title>FAQ</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../assets/plugins/css-chart/css-chart.css" rel="stylesheet">

    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <link href="../assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/mybiz-admin-default-color.css" id="theme" rel="stylesheet">
    <link href="../assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon -->
                        <b>
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Configuration</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">FAQ</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
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
                                                <h3 class="m-b-0"> Add New FAQ</h3>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="text-right">
                                                    <a href="faq-list.php"><button type="button" class="btn btn-info waves-effect-light btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to submit and back to the main page"><i
                                                                class="ti-check"></i> Submit</button></a>
                                                    <a href="faq-list.php"><button type="button" class="btn btn-info waves-effect-light btn-danger btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to cancel and back to the main page"><i
                                                                class="ti-close"></i> Cancel</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4 col-12">
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        <h5>Category <span class="text-danger">*</span></h5>
                                                    </label>
                                                    <div class="m-b-10">
                                                        <div class="demo-checkbox">
                                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-cyan"
                                                                checked>
                                                            <label for="md_checkbox_21">Agency</label><br>
                                                            <input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-cyan" />
                                                            <label for="md_checkbox_22">Public</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-12">
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        <h5>Publish <span class="text-danger">*</span></h5>
                                                    </label>
                                                    <div class="m-b-10">
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio1" name="radio" type="radio" class="custom-control-input "
                                                                checked>
                                                            <span class="custom-control-label">Yes</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">No</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4 col-12">
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        <h5>Order <span class="text-danger">*</span></h5>
                                                    </label>
                                                    <div class="m-b-10">
                                                        <select class="select2" style="width: 100%">
                                                            <option value="AK">First</option>
                                                            <option value="HI">Last</option>
                                                            <option value="CA">2</option>
                                                            <option value="NV">3</option>
                                                            <option value="OR">4</option>
                                                            <option value="WA">5</option>
                                                            <option value="AZ">6</option>
                                                            <option value="CO">7</option>
                                                            <option value="ID">8</option>
                                                            <option value="MT">9</option>
                                                            <option value="NE">10</option>
                                                            <option value="NM">11</option>
                                                            <option value="ND">12</option>
                                                            <option value="UT">13</option>
                                                            <option value="WY">14</option>
                                                            <option value="CA">15</option>
                                                            <option value="NV">16</option>
                                                            <option value="OR">17</option>
                                                            <option value="WA">18</option>
                                                            <option value="AZ">19</option>
                                                            <option value="CO">20</option>
                                                            <option value="ID">21</option>
                                                            <option value="MT">22</option>
                                                            <option value="NE">23</option>
                                                            <option value="NM">24</option>
                                                            <option value="ND">25</option>
                                                            <option value="UT">26</option>
                                                            <option value="WY">27</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row m-t-10">
                                            <div class="col-md-12">
                                                <label class="control-label">
                                                    <h5> Question <span class="text-danger">*</span></h5>
                                                </label>
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab"
                                                            href="#home" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span>
                                                            <span class="hidden-xs-down">EN</span></a> </li>
                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile"
                                                            role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span>
                                                            <span class="hidden-xs-down">BM</span></a> </li>
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content tabcontent-border">
                                                    <div class="tab-pane active" id="home" role="tabpanel">
                                                        <div class="p-20">
                                                            <div class="card">
                                                                <form method="post">
                                                                    <textarea id="mymce" name="area">What should I do to start a business?</textarea>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="profile" role="tabpanel">
                                                        <div class="p-20">
                                                            <div class="card">
                                                                <form method="post">
                                                                    <textarea id="mymce" name="area">Apakah yang saya perlu lakukan untuk memulakan perniagaan?</textarea>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <p><br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="control-label">
                                                        <h5>Answer <span class="text-danger">*</span></h5>
                                                    </label>
                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab"
                                                                href="#home2" role="tab"><span class="hidden-sm-up"><i
                                                                        class="ti-home"></i></span> <span class="hidden-xs-down">EN</span></a>
                                                        </li>
                                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab"
                                                                href="#profile2" role="tab"><span class="hidden-sm-up"><i
                                                                        class="ti-user"></i></span> <span class="hidden-xs-down">BM</span></a>
                                                        </li>

                                                    </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content tabcontent-border">
                                                        <div class="tab-pane active" id="home2" role="tabpanel">
                                                            <div class="p-20">
                                                                <div class="card">
                                                                    <form method="post">
                                                                        <textarea id="mymce" name="area">You should:<p>
																					* Register your business.<br> * Apply for business licenses</textarea>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="profile2" role="tabpanel">
                                                            <div class="p-20">
                                                                <div class="card">
                                                                    <form method="post">
                                                                        <textarea id="mymce" name="area">Anda perlu:<p>
																				* Mendaftar perniagaan.<br>
																				* Memohon lesen perniagaan.</textarea>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <p><br>
                                        <div class="row">
                                            <div class="col-md-8 col-8 align-self-center">
                                                <!-- <h3 class="card-title">Menu Configuration</h3> -->
                                            </div>
                                            <div class="col-md-4 col-4">
                                                <div class="text-right">
                                                    <a href="faq-list.php"><button type="submit" class="btn btn-info waves-effect-light btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to submit and back to the main page"><i
                                                                class="ti-check"></i> Submit</button></a>
                                                    <a href="faq-list.php"><button type="submit" class="btn btn-info waves-effect-light btn-danger btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to cancel and back to the main page"><i
                                                                class="ti-close"></i> Cancel</button></a>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->

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
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>

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
    <script src="../assets/plugins/tinymce/tinymce.min.js"></script>
    <script src="js/parentSideNavbar.js"></script>
    <script>
        $(this).parentSideNavbar('faq-list.php')
    </script>
    <script>
        $(document).ready(function () {

            if ($("#mymce").length > 0) {
                tinymce.init({
                    selector: "textarea#mymce",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
        });
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