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
    <title>Question</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../assets/plugins/css-chart/css-chart.css" rel="stylesheet">

    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
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
                        <h3 class="text-themecolor">Question</h3>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <h3 class="m-b-0">Add New Question </h3>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="text-right">
                                                    <a href="list-questions.php"><button type="button" class="btn btn-info waves-effect-light btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to save and back to the main page"><i
                                                                class="ti-check"></i> Save</button></a>
                                                    <a href="list-questions.php"><button type="button" class="btn btn-info waves-effect-light btn-danger btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to cancel and back to the main page"><i
                                                                class="ti-close"></i> Cancel</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div id="appen"></div>

                                        <div>
                                            <!--<a href="faq-add.php"><button type="submit" class="btn btn-info waves-effect-light btn-circle btn-info"><i class="ti-plus"></i></button></a>-->
                                            <p></p>
                                            <h6>Select Question Type :</h6>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <a href="javascript:void(0)" onclick="shortAnswer()">
                                                                <div class="card">
                                                                    <div class="d-flex flex-row">
                                                                        <div class="p-10 bg-info">
                                                                            <h3 class="text-white box m-b-0"><i class="ti-layout-list-post"></i></h3>
                                                                        </div>
                                                                        <div class="align-self-center m-l-20">
                                                                            <h5 class="m-b-0 text-info">Short Answer</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <a href="javascript:void(0)" onclick="multipleChoice()">
                                                                <div class="card">
                                                                    <div class="d-flex flex-row">
                                                                        <div class="p-10 bg-info">
                                                                            <h3 class="text-white box m-b-0"><i class="ti-menu-alt"></i></h3>
                                                                        </div>
                                                                        <div class="align-self-center m-l-20">
                                                                            <h5 class="m-b-0 text-info">Multiple
                                                                                Choices</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <a href="javascript:void(0)" onclick="linearScale()">
                                                                <div class="card">
                                                                    <div class="d-flex flex-row">
                                                                        <div class="p-10 bg-info">
                                                                            <h3 class="text-white box m-b-0"><i class="ti-layout-menu-separated"></i></h3>
                                                                        </div>
                                                                        <div class="align-self-center m-l-20">
                                                                            <h5 class="m-b-0 text-info">Linear Scale</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row m-t-10" style="display: none;" id="shortAnswer">
                                                    <div id="content"></div>

                                                    <div class="col-md-5 col-8 align-self-center">
                                                        <h4 class="m-b-10 m-t-0">Question <span class="label label-light-info"><i
                                                                    class="ti-layout-list-post m-r-10"></i> Short
                                                                Answer</span></h4>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <!-- Nav tabs -->
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li class="nav-item"> <a class="nav-link active"
                                                                    data-toggle="tab" href="#home" role="tab"><span
                                                                        class="hidden-sm-up"><i class="ti-home"></i></span>
                                                                    <span class="hidden-xs-down">EN</span></a> </li>
                                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab"
                                                                    href="#profile" role="tab"><span class="hidden-sm-up"><i
                                                                            class="ti-user"></i></span> <span class="hidden-xs-down">BM</span></a>
                                                            </li>
                                                        </ul>

                                                        <!-- Tab panes -->
                                                        <div class="tab-content tabcontent-border">
                                                            <div class="tab-pane active" id="home" role="tabpanel">
                                                                <div class="p-20">
                                                                    <div class="card">
                                                                        <form method="post">
                                                                            <textarea id="mymce" name="area"></textarea>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="profile" role="tabpanel">
                                                                <div class="p-20">
                                                                    <div class="card">
                                                                        <form method="post">
                                                                            <textarea id="mymce" name="area"></textarea>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row m-t-10" style="display: none;" id="linearScale">
                                                            <div id="content"></div>

                                                            <div class="col-md-5 col-8 align-self-center">
                                                                <h4 class="m-b-10 m-t-0">Question <span class="label label-light-info"><i
                                                                            class="ti-layout-menu-separated m-r-10"></i>
                                                                        Linear Scale</h4>
                                                            </div>
                                                            <div class="col-md-12">

                                                                <!-- Nav tabs -->
                                                                <ul class="nav nav-tabs" role="tablist">
                                                                    <li class="nav-item"> <a class="nav-link active"
                                                                            data-toggle="tab" href="#home" role="tab"><span
                                                                                class="hidden-sm-up"><i class="ti-home"></i></span>
                                                                            <span class="hidden-xs-down">EN</span></a>
                                                                    </li>
                                                                    <li class="nav-item"> <a class="nav-link"
                                                                            data-toggle="tab" href="#profile" role="tab"><span
                                                                                class="hidden-sm-up"><i class="ti-user"></i></span>
                                                                            <span class="hidden-xs-down">BM</span></a>
                                                                    </li>
                                                                </ul>

                                                                <!-- Tab panes -->
                                                                <div class="tab-content tabcontent-border">
                                                                    <div class="tab-pane active" id="home" role="tabpanel">
                                                                        <div class="p-20">
                                                                            <div class="card">
                                                                                <form method="post">
                                                                                    <textarea id="mymce" name="area"></textarea>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="profile" role="tabpanel">
                                                                        <div class="p-20">
                                                                            <div class="card">
                                                                                <form method="post">
                                                                                    <textarea id="mymce" name="area"></textarea>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="form-group">
                                                                <!--<label>2. &nbsp; Please tick in the box with the scale of 1-5 in grading the features of the portal:</label>-->
                                                                <div class="col-md-12"><br>
                                                                    <table class="">
                                                                        <tr>
                                                                            <th class="text-center" bgcolor="#F2FFFF">
                                                                                <div style="width: 120px;height: 30px;">1</div>
                                                                            </th>
                                                                            <th class="text-center" bgcolor="#E1F9F7">
                                                                                <div style="width: 120px;height: 30px;">2</div>
                                                                            </th>
                                                                            <th class="text-center" bgcolor="#A4EDE6">
                                                                                <div style="width: 120px;height: 30px;">3</div>
                                                                            </th>
                                                                            <th class="text-center" bgcolor="#53DCD0">
                                                                                <div style="width: 120px;height: 30px;">4</div>
                                                                            </th>
                                                                            <th class="text-center" bgcolor="#02CCBA">
                                                                                <div style="width: 120px;height: 30px;">5</div>
                                                                            </th>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <center><input name="group1" type="radio"
                                                                                        id="radio_1" checked />
                                                                                    <label for="radio_1"></label></center>
                                                                            </td>
                                                                            <td>
                                                                                <center><input name="group1" type="radio"
                                                                                        id="radio_2" />
                                                                                    <label for="radio_2"></label></center>
                                                                            </td>
                                                                            <td>
                                                                                <center><input name="group1" type="radio"
                                                                                        id="radio_3" />
                                                                                    <label for="radio_3"></label></center>
                                                                            </td>
                                                                            <td>
                                                                                <center><input name="group1" type="radio"
                                                                                        id="radio_4" />
                                                                                    <label for="radio_4"></label></center>
                                                                            </td>
                                                                            <td>
                                                                                <center><input name="group1" type="radio"
                                                                                        id="radio_5" />
                                                                                    <label for="radio_5"></label></center>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center text-info"><input
                                                                                    class="form-control form-control-sm"
                                                                                    type="text" name="" id="" value="Not Attractive"></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td class="text-center text-info"><input
                                                                                    class="form-control form-control-sm"
                                                                                    type="text" name="" id="" value="Attractive"></td>
                                                                        </tr>

                                                                    </table>
                                                                </div>
                                                                <p></p>


                                                            </div>
                                                        </div>



                                                        <!--                                                            <div class="form-actions text-right">                               
                                                                                                                            <button type="button" class="btn btn-info waves-effect waves-light btn-sm"><i class="ti-pencil-alt"></i> Edit</button>           
                                                                                                                        </div>-->
                                                    </div>


                                                </div>

                                                <!--                                                    <div class="card" style="display: none;">
                                                                                                            <div class="card-body">
                                                    
                                                                                                                <div id="content"></div>
                                                    
                                                                                                                <div class="col-md-5 col-8 align-self-center">
                                                                                                                    <h3 class="text-themecolor m-b-0 m-t-0">Question 2 - Edit</h3>
                                                                                                                </div>
                                                                                                                <p></p>
                                                    
                                                                                                                <div class="form-group">
                                                                                                                    <input type="text" id="Question2" class="form-control" placeholder="2. &nbsp; Please tick in the box with the scale of 1-5 in grading the features of the portal:">
                                                                                                                    <p></p>
                                                                                                                    <table class="">
                                                                                                                        <tr>
                                                                                                                            <th class="text-center" bgcolor="#F2FFFF"><div style="width: 120px;height: 30px;">1</div></th>
                                                                                                                            <th class="text-center" bgcolor="#E1F9F7"><div style="width: 120px;height: 30px;">2</div></th>
                                                                                                                            <th class="text-center" bgcolor="#A4EDE6"><div style="width: 120px;height: 30px;">3</div></th>
                                                                                                                            <th class="text-center" bgcolor="#53DCD0"><div style="width: 120px;height: 30px;">4</div></th>
                                                                                                                            <th class="text-center" bgcolor="#02CCBA"><div style="width: 120px;height: 30px;">5</div></th>											
                                                                                                                        </tr>
                                                                                                                        <tr>
                                                                                                                            <td>
                                                                                                                        <center><input name="group1" type="radio" id="radio_1" />
                                                                                                                            <label for="radio_1"></label></center>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                        <center><input name="group1" type="radio" id="radio_2"  />
                                                                                                                            <label for="radio_2"></label></center>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                        <center><input name="group1" type="radio" id="radio_3"  />
                                                                                                                            <label for="radio_3"></label></center>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                        <center><input name="group1" type="radio" id="radio_4"  />
                                                                                                                            <label for="radio_4"></label></center>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                        <center><input name="group1" type="radio" id="radio_5" />
                                                                                                                            <label for="radio_5"></label></center>
                                                                                                                        </td>
                                                                                                                        </tr>
                                                                                                                        <tr>
                                                                                                                            <td class="text-center text-info">Not Attractive</td>
                                                                                                                            <td></td>
                                                                                                                            <td></td>
                                                                                                                            <td></td>
                                                                                                                            <td class="text-center text-info">Attractive</td>
                                                                                                                        </tr>
                                                    
                                                                                                                    </table>
                                                                                                                    <p></p>
                                                    
                                                                                                                </div>
                                                    
                                                                                                                <div class="form-actions text-right">
                                                                                                                    <button type="button" class="btn btn-info waves-effect waves-light btn-sm"><i class="ti-check"></i> Save</button>
                                                                                                                    <a href="list-questions.php"><button type="button" class="btn btn-info waves-effect btn-danger waves-light btn-sm"><i class="ti-close"></i> Cancel</button></a> 
                                                                                                                </div>		
                                                    
                                                                                                            </div>
                                                    
                                                    
                                                                                                        </div>-->

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row m-t-10" style="display: none;" id="multipleChoice">
                                                            <div id="content"></div>
                                                            <div class="col-md-5 col-8 align-self-center">
                                                                <h4 class="m-b-10 m-t-0">Question <span class="label label-light-info"><i
                                                                            class="ti-menu-alt m-r-10"></i> Muliple
                                                                        Choises</span></h4>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <!-- Nav tabs -->
                                                                <ul class="nav nav-tabs" role="tablist">
                                                                    <li class="nav-item"> <a class="nav-link active"
                                                                            data-toggle="tab" href="#home" role="tab"><span
                                                                                class="hidden-sm-up"><i class="ti-home"></i></span>
                                                                            <span class="hidden-xs-down">EN</span></a>
                                                                    </li>
                                                                    <li class="nav-item"> <a class="nav-link"
                                                                            data-toggle="tab" href="#profile" role="tab"><span
                                                                                class="hidden-sm-up"><i class="ti-user"></i></span>
                                                                            <span class="hidden-xs-down">BM</span></a>
                                                                    </li>
                                                                </ul>

                                                                <!-- Tab panes -->
                                                                <div class="tab-content tabcontent-border">
                                                                    <div class="tab-pane active" id="home" role="tabpanel">
                                                                        <div class="p-20">
                                                                            <div class="card">
                                                                                <form method="post">
                                                                                    <textarea id="mymce" name="area"></textarea>
                                                                                </form>
                                                                            </div>
                                                                            <h4 class="text-themecolor m-b-0 m-t-0">Answer</h4>
                                                                            <div id="option_answer"></div>
                                                                            <div class="row">

                                                                                <div class="col-sm-6 nopadding">
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <input class="form-control form-control-sm"
                                                                                                type="text" id="option1"
                                                                                                name="option1" value=""
                                                                                                size="50">
                                                                                            <div class="input-group-append">
                                                                                                <button class="btn btn-success"
                                                                                                    type="button"
                                                                                                    onclick="option_answer();"><i
                                                                                                        class="fa fa-plus"></i></button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>


                                                                    </div>
                                                                    <div class="tab-pane" id="profile" role="tabpanel">
                                                                        <div class="p-20">
                                                                            <div class="card">
                                                                                <form method="post">
                                                                                    <textarea id="mymce" name="area"></textarea>
                                                                                </form>
                                                                            </div>
                                                                            <div id="option_answer"></div>
                                                                            <div class="row">
                                                                                <h4 class="text-themecolor m-b-0 m-t-0">Answer</h4>
                                                                                <div class="col-sm-3 nopadding">
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <input class="form-control form-control-sm"
                                                                                                type="text" id="option1"
                                                                                                name="option1" value=""
                                                                                                size="20">
                                                                                            <div class="input-group-append">
                                                                                                <button class="btn btn-success"
                                                                                                    type="button"
                                                                                                    onclick="option_answer();"><i
                                                                                                        class="fa fa-plus"></i></button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--                                                <div class="card" style="display: none;">
                                                                                                    <div class="card-body">
                                                
                                                                                                        <div id="content"></div>
                                                
                                                                                                        <div class="col-md-5 col-8 align-self-center">
                                                                                                            <h3 class="text-themecolor m-b-0 m-t-0">Question 3 - Edit</h3>
                                                                                                        </div>
                                                                                                        <p></p>
                                                
                                                                                                        <div class="form-group">
                                                
                                                                                                            <div class="form-group">
                                                                                                                <input type="text" id="firstName" class="form-control" placeholder="3. &nbsp; Your involvement in doing business please tick in the related box"><p></p>
                                                
                                                                                                                <div class="m-b-10">
                                                                                                                    <label class="custom-control custom-radio">
                                                                                                                        <input id="radio1" name="radio1" type="radio" class="custom-control-input">
                                                                                                                        <span class="custom-control-label">Haven’t started a business</span>
                                                                                                                    </label>
                                                                                                                </div>
                                                                                                                <div class="m-b-10">
                                                                                                                    <label class="custom-control custom-radio">
                                                                                                                        <input id="radio2" name="radio1" type="radio" class="custom-control-input">
                                                                                                                        <span class="custom-control-label">Less than 5 years</span>
                                                                                                                    </label>
                                                                                                                </div>
                                                                                                                <div class="m-b-10">
                                                                                                                    <label class="custom-control custom-radio">
                                                                                                                        <input id="radio3" name="radio1" type="radio" class="custom-control-input">
                                                                                                                        <span class="custom-control-label">More than 5 years</span>
                                                                                                                    </label>
                                                                                                                </div>
                                                
                                                                                                                <div class="m-b-10">
                                                                                                                    <label class="custom-control custom-radio">
                                                                                                                        <input id="radio3" name="radio3" type="radio" class="custom-control-input" checked disabled>
                                                                                                                        <span class="custom-control-label text-primary">ADD 'Other'</span>
                                                                                                                    </label>
                                                                                                                </div>										
                                                
                                                                                                            </div>	
                                                
                                                                                                        </div>
                                                
                                                                                                        <div class="form-actions text-right">
                                                                                                            <button type="button" class="btn btn-info waves-effect waves-light btn-sm"><i class="ti-check"></i> Save</button>
                                                                                                            <button type="button" class="btn btn-info waves-effect btn-danger waves-light btn-sm"><i class="ti-close"></i> Cancel</button>  
                                                                                                        </div>		
                                                
                                                                                                    </div>
                                                
                                                
                                                                                                </div>-->



                                            <!--                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label class="control-label"><h5>Category</h5></label>
                                                                                                            <div class="m-b-10">
                                                                                                                <div class="demo-checkbox">
                                                                                                                    <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-cyan" checked>
                                                                                                                    <label for="md_checkbox_21">Agency</label><br>                                                                    
                                                                                                                    <input type="checkbox" id="md_checkbox_23" class="filled-in chk-col-cyan"  />
                                                                                                                    <label for="md_checkbox_23">Public</label>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    /span
                                                                                                </div>-->

                                        </div>


                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group col-sm-4">
                                            <label class="control-label">
                                                <h5>Category</h5>
                                            </label>
                                            <div class="m-b-10">
                                                <div class="demo-checkbox">
                                                    <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-cyan"
                                                        checked>
                                                    <label for="md_checkbox_21">Agency</label><br>
                                                    <input type="checkbox" id="md_checkbox_23" class="filled-in chk-col-cyan" />
                                                    <label for="md_checkbox_23">Public</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">
                                            <h5>Part</h5>
                                        </label>
                                        <select class="custom-select col-12" id="inlineFormCustomSelect">
                                            <option selected="">Choose...</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>

                                <div class="col-md-12 col-12">
                                    <div class="text-right" style="
    padding-right: 1rem;
    padding-bottom: 2rem;>
                                        <a href="list-questions.php"><button type="button" class="btn btn-info waves-effect-light btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to save and back to the main page"><i
                                                    class="ti-check"></i> Save</button></a>
                                        <a href="list-questions.php"><button type="button" class="btn btn-info waves-effect-light btn-danger btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Click to cancel and back to the main page"><i
                                                    class="ti-close"></i> Cancel</button></a>
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
        $(this).parentSideNavbar('list-questions.php')
    </script>

    <!--<script src="../assets/plugins/dff/dff.js" type="text/javascript"></script>-->
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
    var room = 1;

    function option_answer() {

        room++;
        var objTo = document.getElementById('option_answer');
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass" + room);
        var rdiv = 'removeclass' + room;
        divtest.innerHTML =
            '<div class="row"><div class="col-sm-3 nopadding"><div><div class="input-group"> <input class="form-control form-control-sm" type="text" id="option1" name="option1" value=""><div class="input-group-append"> <button class="btn btn-danger" type="button" onclick="remove_option_answer(' +
            room + ');"> <i class="fa fa-minus"></i> </button></div></div></div></div></row>';

        objTo.appendChild(divtest);
    }

    function remove_option_answer(rid) {
        $('.removeclass' + rid).remove();
    }

    function shortAnswer() {
        //alert('xx');
        $("#multipleChoice").hide();
        $("#linearScale").hide();
        $("#shortAnswer").show();
    }

    function multipleChoice() {
        $("#shortAnswer").hide();
        $("#linearScale").hide();
        $("#multipleChoice").show();

    }

    function linearScale() {
        $("#shortAnswer").hide();
        $("#multipleChoice").hide();
        $("#linearScale").show();

    }
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


        $("#hide_q1").click(function () {
            $("#q1").hide();
        });
        $("#show_q1").click(function () {
            $("#edit_q1").show();
        });
    });
</script>

</html>