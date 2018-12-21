<?php 
include('servers.php') ;
$str = "sdsq97j2GvsadNEZq97j2GvNEZsoWcQsfdHyVCpsoWcQHyVCp";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php include('inc.php') 
    
    

    ?>


<body>
    <?php
         $rawid = $_GET["id"];
//         echo $rawid;
         $id = base64_decode($rawid);
         if ($id === 'act')
         {
             $Type = "Active";
         }
    else if ($id === 'dist')
    {
        $Type = "Dispose";
    } 
    else if ($id === 'dec')
    {
        $Type = "Decomm";
    } 
    else if ($id === 'new')
    {
        $Type = "New";
    } 
    else if ($id === 'xupd')
    {
        $Type = "Not Reporting";
    }
    ?>
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
   <?php include('data.php');?>  
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
                        <h4 class="page-title"><?php echo $Type; ?> Network List</h4>
<!--
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
-->
                    </div>
                </div>
                     <h6>As of <?php echo $time; ?> </h6> 
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                      
                <div class="row">

                        <div class="col-md-6 col-lg-3 col-xlg-3">
                          <a style="text-decoration: none; color: #000;" href="network.php?id=YWN0&data=<?php echo $str?>">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-server-network"></i></h1>
                                 <h3 class="m-b-0 m-t-5"><?php echo $network ?></h3>
                              <h4 >Active IT Asset</h4>
                            </div>
                        </div>
                         </a> 
                    </div>     
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                          <a style="text-decoration: none; color: #000;" href="network.php?id=ZGVj&data=<?php echo $str?>">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-server-network"></i></h1>
                                 <h3 class="m-b-0 m-t-5"><?php echo $network_decom ?></h3>
                              <h4 >Decomm IT Asset</h4>
                            </div>
                        </div>
                         </a> 
                    </div>       
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                          <a style="text-decoration: none; color: #000;" href="network.php?id=bmV3&data=<?php echo $str?>">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-server-network"></i></h1>
                                 <h3 class="m-b-0 m-t-5"><?php echo $network_new ?></h3>
                              <h4 >New IT Asset</h4>
                            </div>
                        </div>
                         </a> 
                    </div>
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                          <a style="text-decoration: none; color: #000;" href="network.php?id=eHVwZA==&data=<?php echo $str?>">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-server-network"></i></h1>
                                 <h3 class="m-b-0 m-t-5"><?php echo $network_xupd ?></h3>
                              <h4 >Not Reporting IT Asset</h4>
                            </div>
                        </div>
                         </a> 
                    </div>
                                                                      
                                    

                                            </div>
                <div class="row">
                    <div class="col-12">
                        <?php 
    if ($id === 'dist')
  {
                        ?>
                        <div class="card">
                            <div class="card-body">
<!--                            <h5 class="card-title"> Desktop List</h5>-->

                                <div class="table-responsive">
                                           <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                 <th><b>Name</b></th>
                                                <th><b>Serial</b></th>
                                                <th><b>Model</b></th>
                                                <th><b>Manufacture</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                

$f = fopen("network_dist.csv", "r");
while (($line = fgetcsv($f , 100000, ";")) !== false) {
       echo "<tr>";
       foreach ($line as $cell) {
               echo "<td>" . htmlspecialchars($cell) .  "</td>";
       }
       echo "</tr>\n";
}
fclose($f);
        ?>
                              
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th><b>Name</b></th>
                                                <th><b>Serial</b></th>
                                                <th><b>Model</b></th>
                                                <th><b>Manufacture</b></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <?php
                        }

                        else if ($id === 'dec')
                        {
                        ?>
                        <div class="card">
                            <div class="card-body">
<!--                            <h5 class="card-title"> Desktop List</h5>-->

                                <div class="table-responsive">
                                           <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                 <th><b>Name</b></th>
                                                <th><b>Serial</b></th>
                                                <th><b>Model</b></th>
                                                <th><b>Manufacture</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                

$f = fopen("network_decom.csv", "r");
while (($line = fgetcsv($f , 100000, ";")) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
        ?>
                              
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th><b>Name</b></th>
                                                <th><b>Serial</b></th>
                                                <th><b>Model</b></th>
                                                <th><b>Manufacture</b></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <?php
                        }
    else if ($id === 'act')
    {


        ?>
                         <div class="card">
                            <div class="card-body">
<!--                             <h5 class="card-title"> Desktop List</h5>-->

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><b>Name</b></th>
                                                <th><b>Serial</b></th>
                                                <th><b>Model</b></th>
                                                <th><b>Manufacture</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                

$f = fopen("network.csv", "r");
while (($line = fgetcsv($f , 100000, ";")) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
        ?>
                              
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th><b>Name</b></th>
                                                <th><b>Serial</b></th>
                                                <th><b>Model</b></th>
                                                <th><b>Manufacture</b></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <?php 
    }
                             else if ($id === 'new')
    {


        ?>
                         <div class="card">
                            <div class="card-body">
<!--                             <h5 class="card-title"> Desktop List</h5>-->

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                 <th><b>Name</b></th>
                                                <th><b>Serial</b></th>
                                                <th><b>Model</b></th>
                                                <th><b>Manufacture</b></th>
                                                <th><b>Created on</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                

$f = fopen("network_new.csv", "r");
while (($line = fgetcsv($f , 100000, ";")) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
        ?>
                              
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th><b>Name</b></th>
                                                <th><b>Serial</b></th>
                                                <th><b>Model</b></th>
                                                <th><b>Manufacture</b></th>
                                                <th><b>Created on</b></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <?php 
    }                       
                             else if ($id === 'xupd')
    {


        ?>
                         <div class="card">
                            <div class="card-body">
<!--                             <h5 class="card-title"> Desktop List</h5>-->

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><b>Name</b></th>
                                                <th><b>Serial</b></th>
                                                <th><b>Model</b></th>
                                                <th><b>Manufacture</b></th>
                                                <th><b>Last Update</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                

$f = fopen("network_not_update.csv", "r");
while (($line = fgetcsv($f , 100000, ";")) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
        ?>
                              
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th><b>Name</b></th>
                                                <th><b>Serial</b></th>
                                                <th><b>Model</b></th>
                                                <th><b>Manufacture</b></th>
                                                <th><b>Last Update</b></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <?php 
    }
              
                            ?>
            
                       
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           <?php include('footer.php')?>
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
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="../../assets/libs/chart/jquery.peity.min.js"></script>
      <script src="../../assets/libs/chart/matrix.interface.js"></script>
    <script src="../../assets/libs/chart/excanvas.min.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../../assets/libs/chart/jquery.peity.min.js"></script>
    <script src="../../assets/libs/chart/matrix.charts.js"></script>
    <script src="../../assets/libs/chart/jquery.flot.pie.min.js"></script>
    <script src="../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../../assets/libs/chart/turning-series.js"></script>
    <script src="../../dist/js/pages/chart/chart-page-init.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>