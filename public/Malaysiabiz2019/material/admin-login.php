<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include('meta.php');?>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
        <title>Dashboard</title>
        
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
<body>
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
    <section id="wrapper">
        <div class="login-register topbar">
            <div class="login-box card">
                <div class="card-body">
                    <h3 class="box-title m-b-20 text-center" id="loginform" action="index.html">
                        <img src="../assets/images/logo-mbiz.png" style="width: 360px">
                    </h3>
                    <h6 class="text-center text-muted m-t-10 m-b-40"> Welcome to MalaysiaBiz Administrator Login Page
                    </h6>

                    <form class="floating-labels m-t-40">
                        <div class="form-group m-b-40">
                            <input type="text" class="form-control" id="username">
                            <span class="bar"></span>
                            <label for="input1"><i class="ti-user"></i> Username</label>
                        </div>
                        <div class="form-group m-b-20 focused">
                            <input type="password" class="form-control" id="password">
                            <span class="bar"></span>
                            <label for="input2"><i class="ti-lock"></i> Password</label>
                        </div>
                        <div class="form-group m-t-20">
                            <div class="row">
                                <div class="col-6">
                                    <!-- <button type="button" class="btn  btn-rounded btn-warning" onclick="checkUserPassword();">Back to Main</button> -->
                                    <button type="button" class="btn btn-block btn-rounded btn-info" onclick="checkUserPassword();">Login</button>
                                </div>
                                <div class="col-6">
                                    <div class="text-pos-r-to-center">
                                        <a href="admin-forgot-password.html" class="" style="font-size: 12px">Forgot
                                            Password</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                    <form class="form-horizontal" id="recoverform" action="index.html">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email"> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light"
                                    type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
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
    <link href="../assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script>
        function checkUserPassword() {
            var user = $("#username").val();
            var password = $("#password").val();
            if (user == 'admin' && password == '123') {
                location.href = 'admin-dashboard.php';
            } else {
                swal({
                    title: "Your credential are mismatch",
                    text: "You will not be able to access this application!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Re-login",
                    closeOnConfirm: true
                }, function () {
                    location.href = 'admin-login.html';
                });
            }
        }
    </script>
</body>

</html>