<!DOCTYPE html>
<?php
extract($_REQUEST);
error_reporting(0);
if (!isset($type_chart)) {
    echo "<script>location.href='mydashboard-loading.php?type_chart=0';</script>";
}
?>
<?php $page = 'mydashboard';include 'base.php'; ?>


                    <div class="row page-titles">

                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-lg-10 col-md-6"></div>
                            <div class="col-lg-2 col-md-6 p-20">
                              <!--   <h5 class="font-mid"><i class="ti-email m-r-10"></i> E-mail</h5> 
                                <p>nurain@magnaprima.com.my</p> <hr> 
                                <h5 class="font-mid"><i class="ti-user m-r-10"></i> Name</h5>  
                                <p>Muhammad Izzat Zulfeka Bin Mohd Mokhlas</p> <hr> 
                                <h5 class="font-mid"><i class="icon-phone m-r-10"></i> Phone No.</h5> 
                                <p>+0350225555</p> <hr> -->

                                                                                            
                                <button type="button" class="btn btn-info btn-block" data-toggle="modal"><i class="ti-loop m-r-5"></i> Sync Profile</button>
                                 
                            </div>
                    </div>                        
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="border-radius: 10px;">
                                <div class="card-body">
                                    <?php include 'loader.php'; ?>
                                    <h4 class="card-title"></h4>
                                    <div class="row m-t-20">
                                        <!-- Column -->
                                        <div class="col-md-4 col-4">
                                            <div class="card card-inverse card-info">
                                                <div class="box text-center">
                                                    <a href="mydashboard.php?type_chart=0"><h1 class="font-light text-white">10</h1>
                                                        <h6 class="text-white">Business</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Column -->
                                        <div class="col-md-4 col-4">
                                            <div class="card card-primary card-inverse">
                                                <div class="box text-center">
                                                    <a href="mydashboard.php?type_chart=1"><h1 class="font-light text-white">1,160</h1>
                                                        <h6 class="text-white">Applications</h6></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Column -->
                                        <div class="col-md-4 col-4">
                                            <div class="card card-inverse card-success">
                                                <div class="box text-center">
                                                    <a href="mydashboard.php?type_chart=2"><h1 class="font-light text-white">225</h1>
                                                        <h6 class="text-white">Licensing</h6></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Column -->
                                    </div>
                                    <!--display mydashboard -->
                                    <div class="row">                                        
                                        <?php if ($type_chart == 0) { ?>
                                            <div class="col-md-12 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Business Statistics</h4>
                                                        <div id="morris-donut-chart"></div>
                                                        
                                                    </div>
                                                    
                                                    
                                                         <div class="card-body">
                                                         <div class="table-responsive">
                                                            <table class="table" id="detailsSyarikat">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>First Name</th>
                                                                        <th>Last Name</th>
                                                                        <th>Username</th>
                                                                        <th>Role</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Deshmukh</td>
                                                                        <td>Prohaska</td>
                                                                        <td>@Genelia</td>
                                                                        <td><span class="label label-danger">admin</span> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Deshmukh</td>
                                                                        <td>Gaylord</td>
                                                                        <td>@Ritesh</td>
                                                                        <td><span class="label label-info">member</span> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>Sanghani</td>
                                                                        <td>Gusikowski</td>
                                                                        <td>@Govinda</td>
                                                                        <td><span class="label label-warning">developer</span> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td>Roshan</td>
                                                                        <td>Rogahn</td>
                                                                        <td>@Hritik</td>
                                                                        <td><span class="label label-success">supporter</span> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5</td>
                                                                        <td>Joshi</td>
                                                                        <td>Hickle</td>
                                                                        <td>@Maruti</td>
                                                                        <td><span class="label label-info">member</span> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>6</td>
                                                                        <td>Nigam</td>
                                                                        <td>Eichmann</td>
                                                                        <td>@Sonu</td>
                                                                        <td><span class="label label-success">supporter</span> </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                         </div>
                                                </div>
                                            </div>

                                           
                                        <?php } ?>
                                        <?php if ($type_chart == 1) { ?>
                                            <div class="col-md-8 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Applications Statistics</h4>
                                                        <div id="morris-bar-chart"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if ($type_chart == 2) { ?>
                                            <div class="col-md-8 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Licensing Statistics</h4>
                                                        <div id="morris-bar-chart-v2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="../assets/plugins/raphael/raphael-min.js"></script>
    <script src="../assets/plugins/morrisjs/morris.js"></script>
    <!-- Flot Charts JavaScript -->
    <script src="../assets/plugins/flot/excanvas.js"></script>
    <script src="../assets/plugins/flot/jquery.flot.js"></script>
    <script src="../assets/plugins/flot/jquery.flot.pie.js"></script>
    <script src="../assets/plugins/flot/jquery.flot.time.js"></script>
    <script src="../assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="../assets/plugins/flot/jquery.flot.crosshair.js"></script>
    <script src="../assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script>
        // Dashboard 1 Morris-chart
        $(function () {
            $( "#detailsSyarikat" ).hide();

            "use strict";
            // Morris donut chart

            Morris.Donut({
                element: 'morris-donut-chart',
                data: [{
                        label: "\xa0 \xa0 \xa0 Individual \xa0 \xa0 \xa0",
                        value: 3,

                    }, {
                        label: "\xa0 \xa0 \xa0 Company \xa0 \xa0 \xa0",
                        value: 5
                    },
                    {
                        label: "Government Agencies",
                        value: 2
                    }],
                resize: true,
                colors: ['#009efb', '#55ce63', '#2f3d4a']
            }).on('click', function (i, row) {
                console.log(i, row);
                //alert(i);
                if(i===1){
                   $( "#detailsSyarikat" ).show();  
                }
                 else{
                    $( "#detailsSyarikat" ).hide();   
                }
               
            });

        });


        $(function () {
            //some data
            "use strict";

// Morris bar chart
            Morris.Bar({
                element: 'morris-bar-chart',
                data: [{
                        y: 'New',
                        a: 100,
                        b: 90,
                        c: 60,
                        d: 80
                    }, {
                        y: 'Renewal',
                        a: 75,
                        b: 65,
                        c: 40,
                        d: 40
                    }, {
                        y: 'Request for Change',
                        a: 50,
                        b: 40,
                        c: 30,
                        d: 60
                    }, {
                        y: 'Request fro Cancellation',
                        a: 75,
                        b: 65,
                        c: 40,
                        d: 70
                    }, {
                        y: 'Request for Print',
                        a: 50,
                        b: 40,
                        c: 30,
                        d: 60
                    }],
                xkey: 'y',
                ykeys: ['a', 'b', 'c', 'd'],
                labels: ['Processing', 'Request Feedback', 'Approved', 'Rejected'],
                barColors: ['#55ce63', '#2f3d4a', '#009efb', '#2f3d4c'],
                hideHover: 'auto',
                gridLineColor: '#eef0f2',
                resize: true
            });
        });


        $(function () {
            //some data
            "use strict";

// Morris bar chart
            Morris.Bar({
                element: 'morris-bar-chart-v2',
                data: [{
                        y: 'Active',
                        a: 100,
                        b: 90,
                        c: 60
                    }, {
                        y: '7 days to expired',
                        a: 75,
                        b: 65,
                        c: 40
                    }, {
                        y: 'Expired',
                        a: 50,
                        b: 40,
                        c: 30
                    }],
                xkey: 'y',
                ykeys: ['a'],
                labels: ['No'],
                barColors: ['#55ce63'],
                hideHover: 'auto',
                gridLineColor: '#eef0f2',
                resize: true
            });
        });


    </script>

</body>

</html>