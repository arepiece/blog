<!DOCTYPE html>
<?php
extract($_REQUEST);
error_reporting(0);
if (!isset($type_chart)) {
    echo "<script>location.href='mydashboard_blank.php</script>";
}
?>
<?php $page = 'mydashboard';include 'base.php'; ?>
                <div class="row page-titles m-t-10">
                    <div class="col-lg-12 align-self-center">
                                <!-- <h3 class="text-themecolor">View Branch</h3> -->
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="mydashboard.php">MyDashboard</a></li>
                                </ol>
                    </div>
                </div>
                    
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">                             
                                <div class="row blank_page bounceIn animated">
                                    <div class="col-md-12 text-center">
                                        <img src="../assets/images/blank_page/data-table-no-data.png">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                       <h2 class="m-b-20"> 
                                        <small>You don't have any application right now. <br></h2>
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
<!-- chart js -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
<script src="../assets/plugins/chartjs-plugins/chartjs-plugin-datalabels.min.js"></script>


<script>
    //change data here
    var data_statistic = {
/*        'business': [{
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
        ],*/
        'applications': [{
                icon: '<i class="ti-pencil-alt text-primary"></i>',
                name: 'Processing',
                value: 10,
                color: '#007bff',
                class:'text-primary'

            },
            {
                icon: '<i class="ti-check text-success"></i>',
                name: 'Approved',
                value: 20,
                color: '#26c6da',
                class: 'text-success'

            },
            {
                icon: '<i class="ti-close text-danger"></i>',
                name: 'Rejected',
                value: 15,
                color: '#fc4b6c',
                class: 'text-danger'

            }
        ],
        'licensing': [{
                icon: '<i class="far fa-calendar-check text-success"></i>',
                name: 'Active',
                value: 100,
                color: '#26c6da',
                class: 'text-success'

            },
            {
                icon: '<i class="far fa-calendar-alt text-warning"></i>',    
                name: '7 days to expired',
                value: 75,
                color: '#ff9105',
                class: 'text-warning'                

            },
            {
                icon: '<i class="far fa-calendar-times text-danger"></i>',    
                name: 'Expired',
                value: 50,
                color: '#fc4b6c',
                class: 'text-danger'
            },
        ]
    }

    var renderType0 = function (div,data) {
        data = data||[]
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
                    <tr class="${item.class}">
                        <td style="width:8%">${item.icon}</td>
                        <td>${item.name}</td>
                        <td class="font-medium">${item.value}</td>
                    </tr>               
                    `

            })
        var table =
            `  <table class="table stylish-table" style="font-weight: 500; height: auto !important;">
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

    var renderTypeChart = function (type, el,data) {
        type = type || "bar"
        data = data || []
        el.empty()
        el = el.html('<canvas></canvas>')
        el.css('height', '300')

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

        ctx.fillText("", 150, 150);

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
                plugins: {
            // Change options for ALL labels of THIS CHART
                datalabels: {
                        color: function(context) {
                            var index = context.dataIndex
                            var color = context.dataset.backgroundColor[index]
                            if(color)
                                return color
                            return '#455a64'
                        },
                        anchor: 'end',
                        align: 'end',
                        offset: 5,
                        font :{
                            size:15
                        }
                    }
                },
                layout: {
                    padding: {
                        bottom: 25,
                        top: 25,
                        left: 30,
                        right: 30

                    },
                    margin: {
                        
                    }
                }
                
            }

        });

        //custom legend
        var el_legend = el.next().find('ul');
        el_legend.html(_info_legend);

        buttonActive(type == 'doughnut' ? 1 : 2)

    }


    function renderSection(type) {
        var components = [{
/*                el: $('div.business-chart'),
                data: data_statistic.business
            },
            {*/
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
</body>

</html>