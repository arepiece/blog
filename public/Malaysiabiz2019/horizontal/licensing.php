<?php $page = 'licensing';include 'base.php'; ?>

                    <div class="row page-titles">

                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">This page is under construction</h3>



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