<link href="assets/admin/plugins/chart.js/chart.js" rel="stylesheet">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" id="maincontent">

    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-chart-pie"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Orders</span>
                        <span class="info-box-number" id="TotalOrders"> -

                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-chart-bar"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Orders Pending</span>
                        <span class="info-box-number" id="TotalOrdersPending"> - </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Orders Processed Today</span>
                        <span class="info-box-number" id="OrdersProcessedToday">-</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users text-white"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Todays Collection</span>
                        <span class="info-box-number" id="TodaysCollection">-</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Orders(s)</h3>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <!--                                <span class="text-bold text-lg">$18,230.00</span>-->
                                <span>Statistics</span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-success">
                                    <i class="fas fa-arrow-up"></i>
                                </span>
                                <span class="text-muted">last 30 Days</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->

                        <div class="position-relative mb-4">
                            <canvas id="sales-chart" height="200"></canvas>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                                <i class="fas fa-square text-primary"></i> Total Order
                            </span>

                            <span>
                                <i class="fas fa-square text-gray"></i> Order Processed
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div>
    
</div>
<!-- /.content-wrapper -->


<script src="https://adminlte.io/themes/v3/plugins/chart.js/Chart.min.js"></script>

<script>
    $(function() {
        getDashboard();

    });

    function getDashboard() {

        let obj = {};
        obj.Module = "Settings";
        obj.Page_key = "getAdminDashboard";
        obj.JSON = {};
        TransportCall(obj);
    }

   function onSuccess(rc) { 
        if (rc.return_code) { 
            switch (rc.Page_key) {
                case "getAdminDashboard":
                    loaddata(rc.return_data);
                    notify('success',"Welcome to Don Bosco Technical VTA");
                    break;

                default:
                     notify('error',"Unable to process the request");     
                     break;  
             
            }
        }
        else{
           
            notify('error',rc.return_data);    
        
        }
    }
   function loaddata(data){
       // TotalOrders	TotalOrdersPending	OrdersProcessedToday	TodaysCollection

     $('#TotalOrders').text(data["TotalOrders"]);
     $('#TotalOrdersPending').text(data["TotalOrdersPending"]);
     $('#OrdersProcessedToday').text(data["OrdersProcessedToday"]);
     $('#TodaysCollection').text(data["TodaysCollection"]);
     
     loadChart();
    }



    function loadChart(){
        'use strict'
        var ticksStyle = {
            fontColor: '#495057',
            fontStyle: 'bold'
        }

        var mode = 'index'
        var intersect = true

        var $salesChart = $('#sales-chart')
        // eslint-disable-next-line no-unused-vars
        var salesChart = new Chart($salesChart, {
            type: 'bar',
            data: {
                labels: ['JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
                datasets: [
                    {
                        backgroundColor: '#007bff',
                        borderColor: '#007bff',
                        data: [1000, 2000, 3000, 2500, 2700, 2500, 3000]
                    },
                    {
                        backgroundColor: '#01e383',
                        borderColor: '#01e383',
                        data: [700, 1700, 2700, 2000, 1800, 1500, 2000]
                    }
                ]
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    mode: mode,
                    intersect: intersect
                },
                hover: {
                    mode: mode,
                    intersect: intersect
                },
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        // display: false,
                        gridLines: {
                            display: true,
                            lineWidth: '4px',
                            color: 'rgba(0, 0, 0, .2)',
                            zeroLineColor: 'transparent'
                        },
                        ticks: $.extend({
                            beginAtZero: true,

                            // Include a dollar sign in the ticks
                            callback: function (value) {
                                if (value >= 1000) {
                                    value /= 1000
                                    value += 'k'
                                }

                                return '' + value
                            }
                        }, ticksStyle)
                    }],
                    xAxes: [{
                        display: true,
                        gridLines: {
                            display: false
                        },
                        ticks: ticksStyle
                    }]
                }
            }
        })
    }


</script>
 
 