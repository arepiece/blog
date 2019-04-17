<!DOCTYPE html>
<?php
extract($_REQUEST);
error_reporting(0);
if (!isset($type_chart)) {
    echo "<script>location.href='mydashboard-r4.php?type_chart=0';</script>";
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
    <div class="col-12">
        <div class="card" style="border-radius: 10px;">
            <div class="card-body">
                <h4 class="card-title"></h4>
                <div class="row m-t-20">
                    <div class="col-md-12 col-12 text-right">
                        <div name="buttons" class="mr-2" role="group" aria-label="display-type">
                            <button type="button" class="btn btn-secondary btn-circle" onclick="renderSection(0)"><i
                                    class="fa ti-text"></i>
                            </button>
                            <button type="button" class="btn btn-secondary btn-circle" onclick="renderSection('doughnut')"><i
                                    class="fa ti-pie-chart"></i>
                            </button>
                            <button type="button" class="btn btn-secondary btn-circle" onclick="renderSection('bar')"><i
                                    class="fa ti-bar-chart"></i>
                            </button>
                        </div>

                    </div>

                </div>
                <div class="row m-t-20">
                    <!-- Column -->
                    <div class="col-md-4 col-4">
                        <div class="card card-inverse card-info">
                            <div class="box text-center">
                                <h1 class="font-light text-white">10</h1>
                                <h6 class="text-white">Business</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-4 col-4">
                        <div class="card card-primary card-inverse">
                            <div class="box text-center">
                                <h1 class="font-light text-white">1,160</h1>
                                <h6 class="text-white">Applications</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-4 col-4">
                        <div class="card card-inverse card-success">
                            <div class="box text-center">
                                <h1 class="font-light text-white">225</h1>
                                <h6 class="text-white">Licensing</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!--display mydashboard -->


                <div class="row m-t-20">
                    <!-- Column Business-->
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Business</h4>
                                <div class="business-chart" style="height: 300px;"></div>
                                <div class="text-center">
                                    <ul class="list-inline">
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column Applications-->
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Applications</h4>
                                <div class="applications-chart" style="height: 300px;"></div>
                                <div class="text-center">
                                    <ul class="list-inline">

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column Licensing-->
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Licensing</h4>
                                <div class="licensing-chart" style="height: 300px;"></div>
                                <div class="text-center">
                                    <ul class="list-inline">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<?php include('footer.php'); ?>

<?php include('base-script.php'); ?>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- chartist chart -->
<script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>

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

<!-- chart js -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>


<script>
    //change data here
    var data_statistic = {
        'business': [{
                name: 'Government Agencies',
                value: 2,
                color: '#00bbff'
            },
            {
                name: 'Company',
                value: 5,
                color: '#007bff'
            },
            {
                name: 'Individual',
                value: 3,
                color: '#003bff'
            }
        ],
        'applications': [{
                name: 'Dalam Proses',
                value: 10,
                color: '#4f42c1'

            },
            {
                name: 'Telah Diluluskan',
                value: 20,
                color: '#6f42c1'

            },
            {
                name: 'Tidak Diluluskan',
                value: 15,
                color: '#8f42c1'

            }
        ],
        'licensing': [{
                name: 'Active',
                value: 100,
                color: '#17b8a6'

            },
            {
                name: '7 days to expired',
                value: 75,
                color: '#17a2b8'

            },
            {
                name: 'Expired',
                value: 50,
                color: '#177ab8'

            },
        ]
    }

    var renderType0 = function (div, data = []) {
        var el = "";
        div.empty()
        data.forEach(
            function (item) {
                // el.push(
                //     `<div>
                //             ${item.name} ${item.value}
                //         </div>`

                // )
                el +=
                    `
                    <tr>
                        <td>${item.name}</td>
                        <td class="font-medium">${item.value}</td>
                    </tr>                
                    `

            })
        var table =
            `  <table class="table stylish-table" style="height: auto !important;">
                        ${el}
                        <tbody>
                    `
        div.html(table);
        div.css('height', '100')
        //custom legend
        var el_legend = div.next().find('ul');
        el_legend.html("")
        buttonActive(0)
    }

    var renderTypeChart = function (type = "bar", el, data = []) {

        el.empty()
        el = el.html('<canvas></canvas>')
        el.css('height', '250')

        var ctx = el.find('canvas').get(0).getContext("2d");

        var _data = [],
            _labels = [],
            _colors = []
        var _info_legend = []

        data.forEach(function (item) {
            _data.push(item.value)
            _labels.push(item.name)
            _colors.push(item.color)
            _info_legend.push(
                `   
                <li>
                    <h6 class="text-muted text-success" style="color:${item.color} !important;"><i class="fa fa-circle font-10 m-r-10 "></i>${item.name}</h6>
                </li>
                
                `
            )
        })

        ctx.fillText("Big smile!", 150, 150);

        var chart = new Chart(ctx, {
            type: type,
            data: {
                datasets: [{
                    data: _data,
                    backgroundColor: _colors
                }],
                labels: _labels
            },
            options: {
                legend: {
                    display: false
                },
                cutoutPercentage: 70,
                maintainAspectRatio: false,
                gridLines: {
                    offsetGridLines: false,

                },
                responsive: true,
                scales: {
                    yAxes: [{
                        display: type == 'bar',
                        ticks: {
                            beginAtZero: true,
                            min: 0
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
                        },
                        display: false
                    }]
                },
            }

        });

        //custom legend
        var el_legend = el.next().find('ul');
        console.log(el_legend.html(_info_legend))

        buttonActive(type == 'doughnut' ? 1 : 2)

    }


    function renderSection(type) {
        var components = [{
                el: $('div.business-chart'),
                data: data_statistic.business
            },
            {
                el: $('div.applications-chart'),
                data: data_statistic.applications
            },
            {
                el: $('div.licensing-chart'),
                data: data_statistic.licensing
            },
        ]

        components.forEach(function (section) {
            switch (type) {
                case 'bar':
                case 'doughnut':
                    renderTypeChart(type, section.el, section.data)
                    break;
                default:
                    renderType0(section.el, section.data)
            }

        })
    }

    function buttonActive(chart_type) {
        var buttons = $('[name=buttons]').find('button');
        for (i = 0; i < buttons.length; i++) {
            var button = $(buttons.get(i))
            button.removeClass('active')
            if (chart_type == i) {
                button.addClass('active')
            }
        }
    }

    $(function () {
        var chart_type = "<?php echo $type_chart; ?>";
        renderSection(chart_type);
    });
</script>
<style>
    .list-inline {
        margin-top: 20px;
        height: 50px
    }
</style>
</body>

</html>