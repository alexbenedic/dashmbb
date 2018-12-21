<?php 
include('servers.php') ;
$str = "q97j2GvNEZq97j2GvNEZsoWcQHyVCpsoWcQHyVCp";
?>
<!DOCTYPE html>
<html dir="front" lang="en">

<?php include('inc.php') ?>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
   <?php include('header.php') ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include('sidebar.php') ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h2 class="page-title">Dashboard | IT Asset Status</h2>
                        <div class="ml-auto text-right">
<!--
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <?php include('data.php') ?>
    <script type="text/javascript">
                        //      google.load("visualization", "1", {packages:["corechart"]});
                        google.charts.load('current', {
                            packages: ['corechart', 'bar']
                        });
                        //      google.setOnLoadCallback(drawChart);
                        google.charts.setOnLoadCallback(drawChart1);
                        google.charts.setOnLoadCallback(drawChart2);
                        google.charts.setOnLoadCallback(drawChart3);
                        google.charts.setOnLoadCallback(drawChart4);
                        google.charts.setOnLoadCallback(drawChart5);
                        google.charts.setOnLoadCallback(drawChart6);

                        function drawChart1() {
                            var data = google.visualization.arrayToDataTable([
                                ['Type', 'link', 'Total'],
                                ['Desktop', 'desktop.php?id=<?php echo base64_encode('act') ?>&data=<?php echo $str?>', <?php echo $desktop?>
                                ],
                                ['Laptop', 'laptop.php?id=<?php echo base64_encode('act') ?>&data=<?php echo $str?>', <?php echo $laptop ?>
                                ],
                                ['Printer', 'printer.php?id=<?php echo base64_encode('act') ?>&data=<?php echo $str?>', <?php echo $printer ?>
                                ],
                                ['Server', 'server.php?id=<?php echo base64_encode('act') ?>&data=<?php echo $str?>', <?php echo $server ?>
                                ],
                                ['Storage', 'storage.php?id=<?php echo base64_encode('act') ?>&data=<?php echo $str?>', <?php echo $storage ?>
                                ],
                                ['Network', 'network.php?id=<?php echo base64_encode('act') ?>&data=<?php echo $str?>', <?php echo $network?>
                                ]
                            ]);
                            var view = new google.visualization.DataView(data);
                            view.setColumns([0, 2]);

                            var options = {
                                backgroundColor: 'transparent',
                                title: 'Active IT Asset',
                                'width': 400,
                                'height': 400,

                                is3D: true,
                                legend: {
                                    position: 'bottom',
                                    alignment: 'start',
                                    textStyle: {
                                        fontSize: '14'
                                    }
                                },
                                pieSliceTextStyle: {
                                    fontSize: '18'
                                },
                                titleTextStyle: {
                                    fontName: 'Nunito sans',
                                    fontSize: '25',



                                }

                            };

                            var chart = new google.visualization.PieChart(
                                document.getElementById('actchart'));
                            chart.draw(view, options);

                            var selectHandler = function(e) {
                                window.location = data.getValue(chart.getSelection()[0]['row'], 1);
                            }

                            // Add our selection handler.
                            google.visualization.events.addListener(chart, 'select', selectHandler);
                        }

                        ////      google.load("visualization", "1", {packages:["corechart"]});
                        //             google.charts.load('current', {packages: ['corechart','bar']});
                        //      google.setOnLoadCallback(drawChart);
                        function drawChart2() {
                            var data = google.visualization.arrayToDataTable([
                                ['Type', 'link', 'Total'],
                                ['Desktop', 'desktop.php?id=<?php echo base64_encode('dec') ?>&data=<?php echo $str?>', <?php echo $desktop_decom?>
                                ],
                                ['Laptop', 'laptop.php?id=<?php echo base64_encode('dec') ?>&data=<?php echo $str?>', <?php echo $laptop_decom ?>
                                ],
                                ['Printer', 'printer.php?id=<?php echo base64_encode('dec') ?>&data=<?php echo $str?>', <?php echo $printer_decom ?>
                                ],
                                ['Server', 'server.php?id=<?php echo base64_encode('dec') ?>&data=<?php echo $str?>', <?php echo $server_decom?>
                                ],
                                ['Storage', 'storage.php?id=<?php echo base64_encode('dec') ?>&data=<?php echo $str?>', <?php echo  $storage_decom ?>
                                ],
                                ['Network', 'network.php?id=<?php echo base64_encode('dec') ?>&data=<?php echo $str?>', <?php echo $network_decom?>
                                ]
                            ]);

                            var view = new google.visualization.DataView(data);
                            view.setColumns([0, 2]);

                            var options = {
                                backgroundColor: 'transparent',
                                title: 'Decomm IT Asset',
                                'width': 400,
                                'height': 400,
                                is3D: true,
                                legend: {
                                    position: 'bottom',
                                    alignment: 'start',
                                    textStyle: {
                                        fontSize: '14'
                                    }
                                },
                                pieSliceTextStyle: {
                                    fontSize: '18'
                                },
                                titleTextStyle: {
                                    fontName: 'Nunito sans',
                                    fontSize: '25',



                                }

                            };

                            var chart = new google.visualization.PieChart(
                                document.getElementById('decchart'));
                            chart.draw(view, options);

                            var selectHandler = function(e) {
                                window.location = data.getValue(chart.getSelection()[0]['row'], 1);
                            }

                            // Add our selection handler.
                            google.visualization.events.addListener(chart, 'select', selectHandler);
                        }

                        ////      google.load("visualization", "1", {packages:["corechart"]});
                        //        google.charts.load('current', {packages: ['corechart','bar']});
                        //      google.setOnLoadCallback(drawChart);
                        function drawChart3() {
                            var data = google.visualization.arrayToDataTable([
                                ['Type', 'link', 'Total'],
                                ['Desktop', 'desktop.php?id=<?php echo base64_encode('dist') ?>&data=<?php echo $str?>', <?php echo $desktop_dist?>],
                                ['Laptop', 'laptop.php?id=<?php echo base64_encode('dist') ?>&data=<?php echo $str?>', <?php echo $laptop_dist?>],
                                ['Printer', 'printer.php?id=<?php echo base64_encode('dist') ?>&data=<?php echo $str?>', <?php echo $printer_dist?>],
                                ['Server', 'server.php?id=<?php echo base64_encode('dist') ?>&data=<?php echo $str?>', <?php echo $server_dist?>],
                                ['Storage', 'storage.php?id=<?php echo base64_encode('dist') ?>&data=<?php echo $str?>', <?php echo $storage_dist?>],
                                ['Network', 'network.php?id=<?php echo base64_encode('dist') ?>&data=<?php echo $str?>', <?php echo $network_dist?>]
                            ]);

                            var view = new google.visualization.DataView(data);
                            view.setColumns([0, 2]);

                            var options = {
                                backgroundColor: 'transparent',
                                title: 'Dispose IT Asset',
                                'width': 400,
                                'height': 400,
                                is3D: true,
                                legend: {
                                    position: 'bottom',
                                    alignment: 'start',
                                    textStyle: {
                                        fontSize: '14'
                                    }
                                },
                                pieSliceTextStyle: {
                                    fontSize: '18'
                                },
                                titleTextStyle: {
                                    fontName: 'Nunito sans',
                                    fontSize: '25',



                                }

                            };

                            var chart = new google.visualization.PieChart(
                                document.getElementById('dischart'));
                            chart.draw(view, options);

                            var selectHandler = function(e) {
                                window.location = data.getValue(chart.getSelection()[0]['row'], 1);
                            }

                            // Add our selection handler.
                            google.visualization.events.addListener(chart, 'select', selectHandler);
                        }


                        function drawChart4() {
                            var data = google.visualization.arrayToDataTable([
                                ['Asset Type', 'Active', 'Decomm', 'Dispose'],
                                ['Desktop', <?php echo $desktop?>, <?php echo $desktop_decom?>, <?php echo $desktop_dist?>],
                                ['Laptop', <?php echo $laptop?>, <?php echo $laptop_decom?>, <?php echo $laptop_dist?>],
                                ['Printer', <?php echo $printer ?>, <?php echo $printer_decom ?>, <?php echo $printer_dist?>],
                                ['Server', <?php echo $server?>, <?php echo $server_decom?>, <?php echo $server_dist?>],
                                ['Storage', <?php echo  $storage_decom ?>, <?php echo $storage_decom?>, <?php echo $storage_dist?>],
                                ['Network', <?php echo $network ?>, <?php echo $network_decom?>, <?php echo $network_dist?> ]
                            ]);

                            var options = {
                                chart: {

                                }
                            };

                            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                            chart.draw(data, google.charts.Bar.convertOptions(options));
                        }

                        function drawChart5() {
                            var data = google.visualization.arrayToDataTable([
                                ['Type', 'link', 'Total'],
                                ['Desktop', 'desktop.php?id=<?php echo base64_encode('new') ?>&data=<?php echo $str?>', <?php echo $desktop_new ?>
                                ],
                                ['Laptop', 'laptop.php?id=<?php echo base64_encode('new') ?>&data=<?php echo $str?>', <?php echo $laptop_new ?>
                                ],
                                ['Printer', 'printer.php?id=<?php echo base64_encode('new') ?>&data=<?php echo $str?>', <?php echo $printer_new ?>
                                ],
                                ['Server', 'server.php?id=<?php echo base64_encode('new') ?>&data=<?php echo $str?>', <?php echo $server_new ?>
                                ],
                                ['Storage', 'storage.php?id=<?php echo base64_encode('new') ?>&data=<?php echo $str?>', <?php echo $storage_new ?>
                                ],
                                ['Network', 'network.php?id=<?php echo base64_encode('new') ?>&data=<?php echo $str?>', <?php echo $network_new ?>
                                ]
                            ]);

                            var view = new google.visualization.DataView(data);
                            view.setColumns([0, 2]);

                            var options = {
                                //          title: 'Dispose IT',
                                pieSliceText: 'value',
                                is3D: true,
                                legend: 'right',
                                titleTextStyle: {
                                    fontName: 'Nunito sans',
                                    fontSize: '18',



                                }

                            };

                            var chart = new google.visualization.PieChart(
                                document.getElementById('newchart'));
                            chart.draw(view, options);

                            var selectHandler = function(e) {
                                window.location = data.getValue(chart.getSelection()[0]['row'], 1);
                            }

                            // Add our selection handler.
                            google.visualization.events.addListener(chart, 'select', selectHandler);
                        }

                        function drawChart6() {
                            var data = google.visualization.arrayToDataTable([
                                ['Type', 'link', 'Total'],
                                ['Desktop', 'desktop.php?id=<?php echo base64_encode('xupd') ?>&data=<?php echo $str?>', <?php echo $desktop_xupd?>
                                ],
                                ['Laptop', 'laptop.php?id=<?php echo base64_encode('xupd') ?>&data=<?php echo $str?>', <?php echo $laptop_xupd ?>
                                ],
                                ['Printer', 'printer.php?id=<?php echo base64_encode('xupd') ?>&data=<?php echo $str?>', <?php echo $printer_xupd ?>
                                ],
                                ['Server', 'server.php?id=<?php echo base64_encode('xupd') ?>&data=<?php echo $str?>', <?php echo $server_xupd ?>
                                ],
                                ['Storage', 'storage.php?id=<?php echo base64_encode('xupd') ?>&data=<?php echo $str?>', <?php echo $storage_xupd?>
                                ],
                                ['Network', 'network.php?id=<?php echo base64_encode('xupd') ?>&data=<?php echo $str?>', <?php echo $network_xupd?>
                                ]
                            ]);

                            var view = new google.visualization.DataView(data);
                            view.setColumns([0, 2]);

                               var options = {
             backgroundColor: 'transparent',
    'width':400,
  'height':400,
       pieSliceText : 'value',
            is3D: true,
         legend: { position: 'bottom', alignment: 'start' , textStyle: {fontSize: '14'} },
             pieSliceTextStyle: {fontSize:'18'},
            titleTextStyle: {
            fontName: 'Nunito sans',
            fontSize: '18',
            
       
       
    }

        };

                            var chart = new google.visualization.PieChart(
                                document.getElementById('30chart'));
                            chart.draw(view, options);

                            var selectHandler = function(e) {
                                window.location = data.getValue(chart.getSelection()[0]['row'], 1);
                            }

                            // Add our selection handler.
                            google.visualization.events.addListener(chart, 'select', selectHandler);
                        }
                    </script> 

                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
<!--                                        <h4 class="card-title">Asset Status</h4>-->
                                        <h3 class="card-title">As of <?php echo $time; ?> </h3>
                                    </div>
                                </div>
                                <div class="row" id="columnchart_material" style="width: 100%; height: 300px;">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h3 class="card-title">Newly Discovered IT Asset | <?php echo $date_month." - ".$date_year; ?> </h3>
<!--                                        <h5 class="card-subtitle">for <?php echo $date_month." - ".$date_year; ?> </h5>-->
                                    </div>
                                </div>
                                              <div class="row">
                                    
                                   
<div class="col-lg-12">
                                        <div class="flot-chart">
                                            <?php 
                                            if ($desktop_new == '0' && $laptop_new == '0' && $printer_new == '0' &&  $server_new == '0' && $storage_new == '0' && $network_new == '0')
                                            {
                                            ?>
                                                <div class="flot-chart-content text-center"><br><br><br>No New IT Asset Discovered </div>
                                            <?php
                                            }
                                            else
                                            {
                                              ?>
                                               <div class="flot-chart-content" id="newchart"></div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>   

                                   
                                </div>
                            </div>
                        </div>
                    </div>
                             <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h3 class="card-title">IT Asset Not Reporting  From <?php echo $date; ?> </h3>
<!--                                        <h5 class="card-subtitle">From <?php echo $date; ?> </h5>-->
                                    </div>
                                </div>
                                              <div class="row">
                                   
                                   
<div class="col-lg-12">
                                        <div class="flot-chart">
                                            <div class="flot-chart-content" id="30chart"></div>
                                        </div>
                                    </div>   

                                   

                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
              
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
        <?php  include('footer.php'); ?>
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
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../../assets/libs/flot/excanvas.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../../assets/libs/chart/jquery.peity.min.js"></script>
      <script src="../../assets/libs/chart/matrix.charts.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../../assets/libs/chart/turning-series.js"></script>
    <script src="../../dist/js/pages/chart/chart-page-init.js"></script>
<script src="../../assets/libs/chart/matrix.interface.js"></script>
</body>

</html>