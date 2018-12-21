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
         $id = $_GET["id"];
//         echo $rawid;
        
         if ($id === 'MR')
         {
             $rpttitle = "Management Reporting";
         }
    else if ($id === 'ATR')
    {
        $rpttitle = "IT Asset Team Reporting";
    } 
    else if ($id === 'TTR')
    {
        $rpttitle = "Technical Team Reporting";
    } 
    else if ($id === 'BR')
    {
        $rpttitle = "Branch Reporting";
    } 
       if ($_GET["rpt"] == "SAA" && $_GET["id"] == "MR")
                           {
                               $colorSAA ='bg-success' ;
                                            $colorSDeA ='bg-info' ;
                                            $colorSDiA ='bg-info' ;
                                            $colorPG ='bg-info' ;

           $subtitle = "Summary of Active IT Assets";
                           }
    else if ($_GET["rpt"] == "SDeA"  && $_GET["id"] == "MR")
                           {
                               $colorSDeA ='bg-success' ;
                                         $colorSAA ='bg-info' ;
                                        $colorSDiA ='bg-info' ;
                                            $colorPG ='bg-info' ;
           $subtitle = "Summary of Decommission IT Asset";
                           } 
    else if ($_GET["rpt"] == "SDiA"  && $_GET["id"] == "MR")
                           {
                               $colorSDiA ='bg-success' ;
                                         $colorSAA ='bg-info' ;
                                        $colorSDeA ='bg-info' ;
                                            $colorPG ='bg-info' ;

           $subtitle = "Summary of Disposed IT Asset";
                           } else if ($_GET["rpt"] == "PG"  && $_GET["id"] == "MR")
                           {
                                $colorPG ='bg-success' ;
                                         $colorSAA ='bg-info' ;
                                        $colorSDeA ='bg-info' ;
                                            $colorSDiA ='bg-info' ;

           $subtitle = "Profit Gained from IT Asset Disposed";
                           }
                              else
                              {
                                 $colorSAA ='bg-info' ;
                                 $colorSDeA ='bg-info' ;  
                                  $colorSDiA ='bg-info' ;
                                 $colorPG ='bg-info' ;

                              } 
    
    
    
    if ($_GET["rpt"] == "NDA" && $_GET["id"] == "ATR")
                           {
                                           $colorNDA ='bg-success' ;
                                            $colorDeA ='bg-info' ;
                                            $colorDiA ='bg-info' ;
                                            $colorAAA ='bg-info' ;
                                            $colorUIA ='bg-info' ;

           $subtitle = "Newly Discovered  IT Asset of the Month";
                           }
    else if ($_GET["rpt"] == "AAA"  && $_GET["id"] == "ATR")
                           {
                               $colorDeA ='bg-info' ;
                                         $colorNDA ='bg-info' ;
                                        $colorDiA ='bg-info' ;
                                            $colorAAA ='bg-success' ;
                                        $colorUIA ='bg-info' ;
        $subtitle = "All Active  IT Asset";
                           } 
    else if ($_GET["rpt"] == "DeA"  && $_GET["id"] == "ATR")
                           {
                               $colorDiA ='bg-info' ;
                                         $colorNDA ='bg-info' ;
                                        $colorDeA ='bg-success' ;
                                            $colorAAA ='bg-info' ;
                                    $colorUIA ='bg-info' ;
            
           $subtitle = "Decommission  IT Asset of the Month";
                           } 
    else if ($_GET["rpt"] == "DiA"  && $_GET["id"] == "ATR")
                           {
                                $colorAAA ='bg-info' ;
                                         $colorNDA ='bg-info' ;
                                        $colorDeA ='bg-info' ;
                                            $colorDiA ='bg-success' ;
                                        $colorUIA ='bg-info' ;

           $subtitle = "Disposed IT Asset of the Month";
                           } 
    else if ($_GET["rpt"] == "UnInA"  && $_GET["id"] == "ATR")
                           {
                                $colorAAA ='bg-info' ;
                                         $colorNDA ='bg-info' ;
                                        $colorDeA ='bg-info' ;
                                            $colorDiA ='bg-info' ;
                                    $colorUIA ='bg-success' ;

           $subtitle = "Un-inventorised  IT Asset";
                           }
                              else
                              {
                                 $colorNDA ='bg-info' ;
                                 $colorDeA ='bg-info' ;  
                                  $colorDiA ='bg-info' ;
                                 $colorAAA ='bg-info' ;
                                 $colorUIA ='bg-info' ;

                              } 


if ($_GET["rpt"] == "NDA" && $_GET["id"] == "TTR")
                           {
                                           $colortNDA ='bg-success' ;
                                            $colortDeA ='bg-info' ;
                                            $colortDiA ='bg-info' ;
                                            $colortAAA ='bg-info' ;
                                            $colortUIA ='bg-info' ;

           $subtitle = "Newly Discovered  IT Asset of the Month";
                           }
    else if ($_GET["rpt"] == "AAA"  && $_GET["id"] == "TTR")
                           {
                               $colortDeA ='bg-info' ;
                                         $colortNDA ='bg-info' ;
                                        $colortDiA ='bg-info' ;
                                            $colortAAA ='bg-success' ;
                                        $colortUIA ='bg-info' ;
        $subtitle = "All Active  IT Asset";
                           } 
    else if ($_GET["rpt"] == "DeA"  && $_GET["id"] == "TTR")
                           {
                               $colortDiA ='bg-info' ;
                                         $colortNDA ='bg-info' ;
                                        $colortDeA ='bg-success' ;
                                            $colortAAA ='bg-info' ;
                                    $colortUIA ='bg-info' ;
            
           $subtitle = "Decommission  IT Asset of the Month";
                           } 
  else
                              {
                                 $colortNDA ='bg-info' ;
                                 $colortDeA ='bg-info' ;  
                                  $colortDiA ='bg-info' ;
                                 $colortAAA ='bg-info' ;
                                 $colortUIA ='bg-info' ;

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
                        <h4 class="page-title"><?php echo $rpttitle." | ".$subtitle ;?> </h4>
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
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                   <?php include('data.php');?>  
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                         <div class="row">
<?php
                          if ($id === 'MR')
   {
                              if ($_SESSION['credential'][0] != '1' && $_SESSION['credential'][1] != '2' && $_SESSION['credential'][2] != '3' && $_SESSION['credential'][3] != '4' )
                              {
                                    $message = "You are not authorized to view the reports" ;
echo "<script type='text/javascript'>alert('$message');</script>";
                                   ?>
<meta http-equiv="refresh" content="0;url=index.php"/> 
<?php 
                              }
                        if ($_SESSION['credential'][0] == '1')
                        {
                            
                        
                             ?>
                             <div class="col-md-6 col-lg-2 col-xlg-3">
                                 <a style="text-decoration: none !important; color: #fff;" href="reports.php?id=MR&rpt=SAA">
                        <div class="card card-hover">
                            <div class="box <?php echo $colorSAA; ?> text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-grid"></i></h1>
                                <h6 class="text-white">Active IT Assets</h6>
                            </div>
                        </div>
                                     </a>
                    </div>
  <?php 
                        } 
                              if ($_SESSION['credential'][1] == '2')
                              {
                                  
                              
                             ?>
                      <div class="col-md-6 col-lg-2 col-xlg-3">
                           <a style="text-decoration: none !important; color: #fff;" href="reports.php?id=MR&rpt=SDeA">
                        <div class="card card-hover">
                            <div class="box <?php echo $colorSDeA; ?>  text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-grid"></i></h1>
                                <h6 class="text-white">Decommission IT Asset of the Month</h6>
                            </div>
                        </div>
                          </a>
                    </div>
      <?php } 
                              if ($_SESSION['credential'][2] == '3')
                              {
                                  
                              
                             ?>
                       <div class="col-md-6 col-lg-2 col-xlg-3">
                           <a style="text-decoration: none !important; color: #fff;" href="reports.php?id=MR&rpt=SDiA">
                        <div class="card card-hover">
                            <div class="box <?php echo $colorSDiA; ?> text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-grid"></i></h1>
                                <h6 class="text-white">Disposed IT Asset of the Month</h6>
                            </div>
                        </div>
                           </a>
                    </div>
                             <?php 
                              } 
                               if ($_SESSION['credential'][3] == '4')
                               {
                                   
                               
                              ?>

                   <div class="col-md-6 col-lg-2 col-xlg-3">
                       <a style="text-decoration: none !important; color: #fff;" href="reports.php?id=MR&rpt=PG">
                        <div class="card card-hover">
                            <div class="box <?php echo $colorPG; ?> text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-grid"></i></h1>
                                <h6 class="text-white">Profit Gained from IT Asset Disposed </h6>
                            </div>
                        </div>
                       </a>
                    </div> 
                         
                             <?php
                               }
}
                            else if ($id === 'ATR')
                            {
                                ?>
                                  <div class="col-md-6 col-lg-3 col-xlg-3">
                                       <a style="text-decoration: none !important; color: #fff;" href="reports.php?id=ATR&rpt=NDA">
                        <div class="card card-hover">
                            <div class="box <?php echo $colorNDA; ?> text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-grid"></i></h1>
                                <h6 class="text-white">Newly Discovered  IT Asset of the Month </h6>
                            </div>
                        </div>
                                      </a>
                    </div>    
                             <div class="col-md-6 col-lg-2 col-xlg-3">
                                     <a style="text-decoration: none !important; color: #fff;" href="reports.php?id=ATR&rpt=AAA">
                        <div class="card card-hover">
                            <div class="box <?php echo $colorAAA; ?> text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-grid"></i></h1>
                                <h6 class="text-white">All Active  IT Asset</h6>
                            </div>
                        </div>
                                 </a>
                    </div>     
                             <div class="col-md-6 col-lg-2 col-xlg-3">
                                     <a style="text-decoration: none !important; color: #fff;" href="reports.php?id=ATR&rpt=DeA">
                        <div class="card card-hover">
                            <div class="box <?php echo $colorDeA; ?> text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-grid"></i></h1>
                                <h6 class="text-white">Decommission  IT Asset of the Month</h6>
                            </div>
                        </div>
                                 </a>
                    </div> 
                             <div class="col-md-6 col-lg-2 col-xlg-3">
                                     <a style="text-decoration: none !important; color: #fff;" href="reports.php?id=ATR&rpt=DiA">
                        <div class="card card-hover">
                            <div class="box <?php echo $colorDiA; ?> text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-grid"></i></h1>
                                <h6 class="text-white">Disposed  IT Asset of the Month</h6>
                            </div>
                        </div>
                                 </a>
                    </div>   
                             <div class="col-md-6 col-lg-2 col-xlg-3">
                                     <a style="text-decoration: none !important; color: #fff;" href="reports.php?id=ATR&rpt=UnInA">
                        <div class="card card-hover">
                            <div class="box <?php echo $colorUIA; ?> text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-grid"></i></h1>
                                <h6 class="text-white">Un-inventorised  IT Asset</h6>
                            </div>
                        </div>
                                 </a>
                    </div>
                                <?php
                            }
else if ($id === 'TTR')
                            {
                                ?>
                                  <div class="col-md-6 col-lg-3 col-xlg-3">
                                       <a style="text-decoration: none !important; color: #fff;" href="reports.php?id=TTR&rpt=NDA">
                        <div class="card card-hover">
                            <div class="box <?php echo $colortNDA; ?> text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-grid"></i></h1>
                                <h6 class="text-white">Newly Discovered  IT Asset of the Month </h6>
                            </div>
                        </div>
                                      </a>
                    </div>    
                             <div class="col-md-6 col-lg-2 col-xlg-3">
                                     <a style="text-decoration: none !important; color: #fff;" href="reports.php?id=TTR&rpt=AAA">
                        <div class="card card-hover">
                            <div class="box <?php echo $colortAAA; ?> text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-grid"></i></h1>
                                <h6 class="text-white">All Active  IT Asset</h6>
                            </div>
                        </div>
                                 </a>
                    </div>     
                             <div class="col-md-6 col-lg-2 col-xlg-3">
                                     <a style="text-decoration: none !important; color: #fff;" href="reports.php?id=TTR&rpt=DeA">
                        <div class="card card-hover">
                            <div class="box <?php echo $colortDeA; ?> text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-grid"></i></h1>
                                <h6 class="text-white">Decommission  IT Asset of the Month</h6>
                            </div>
                        </div>
                                 </a>
                    </div> 
                             
                             
                                <?php
                            }

                             ?>
                                                                      
                                    

                                            </div>
                
<?php 
            if (isset ($_GET["rpt"]))
            {
                if ($_GET["rpt"] == "SAA")
                { 

                    ?>

                <br><br>

                    <div class="card col-lg-10" style="background-color:#EEEEEE !important;">
                            <div class="card-body" >
                                
                                 <a style="text-decoration:none; color:floralwhite;" href="generate.php?gen=SAA"><button type="submit" class="btn btn-info btn-sm " style="float:right !important;"><i class="mdi mdi-download"></i> CSV</button></a>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th> IT Asset Type</th>
                                                <th>Total Active  IT Asset</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                              <th><b>Desktop</b></th>
                                              <th><?php echo $desktop ?></th>
                                            </tr>
                                            <tr>
                                              <th><b>Laptop</b></th>
                                              <th><?php echo $laptop ?></th>
                                            </tr>
                                            <tr>
                                              <th><b>Server</b></th>
                                              <th><?php echo $server ?></th>
                                            </tr>
                                            <tr>
                                              <th><b>Printer</b></th>
                                              <th><?php echo $printer ?></th>
                                            </tr> 
                                            <tr>
                                              <th><b>Storage</b></th>
                                              <th><?php echo $storage ?></th>
                                            </tr>
                                            <tr>
                                              <th><b>Network Devices</b></th>
                                              <th><?php echo $network ?></th>
                                            </tr>
                                           
                              
                                        </tbody>
<!--
                                        <tfoot>
                                          <tr>
                                                <th>Asset Type</th>
                                                <th>Total Active Asset</th>
                                                
                                            </tr>
                                        </tfoot>
-->
                                    </table>
                                </div>

                            </div>
                        </div>
                <?php
                }
                else if ($_GET["rpt"] == "SDeA")
                {
                           ?>

                <br><br>

                    <div class="card col-lg-10">
                            <div class="card-body">
                                
                                 <a style="text-decoration:none; color:floralwhite;" href="generate.php?gen=SDeA"><button type="submit" class="btn btn-info btn-sm " style="float:right !important;"><i class="mdi mdi-download"></i> CSV</button></a>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th> IT Asset Type</th>
                                                <th>Total Decommission IT Asset Month of <?php echo  date("F"); ?> </th>
                    
                                            </tr>
                                        </thead>
                                        <tbody>
                                             
                                            <tr>
                                              <th><b>Desktop</b></th>
                                              <th><?php echo $desktop_decom_month ?></th>
                                            </tr>
                                            <tr>
                                              <th><b>Laptop</b></th>
                                              <th><?php echo $laptop_decom_month ?></th>
                                            </tr>
                                            <tr>
                                              <th><b>Server</b></th>
                                              <th><?php echo $server_decom_month ?></th>
                                            </tr>
                                            <tr>
                                              <th><b>Printer</b></th>
                                              <th><?php echo $printer_decom_month ?></th>
                                            </tr> 
                                            <tr>
                                              <th><b>Storage</b></th>
                                              <th><?php echo $storage_decom_month ?></th>
                                            </tr>
                                            <tr>
                                              <th><b>Network Devices</b></th>
                                              <th><?php echo $network_decom_month ?></th>
                                            </tr>
                                           
                              
                                        </tbody>
<!--
                                        <tfoot>
                                          <tr>
                                                <th>Asset Type</th>
                                                <th>Total Active Asset</th>
                                                
                                            </tr>
                                        </tfoot>
-->
                                    </table>
                                </div>

                            </div>
                        </div>
                <?php     
                }  
                else if ($_GET["rpt"] == "SDiA")
                {
                     ?>

                <br><br>

                    <div class="card col-lg-10">
                            <div class="card-body">
                                
                                 <a style="text-decoration:none; color:floralwhite;" href="generate.php?gen=SDiA"><button type="submit" class="btn btn-info btn-sm " style="float:right !important;"><i class="mdi mdi-download"></i> CSV</button></a>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th> IT Asset Type</th>
                                                <th>Total Disposed IT Asset Month of <?php echo  date("F"); ?> </th>
                    
                                            </tr>
                                        </thead>
                                        <tbody>
                                             
                                            <tr>
                                              <th><b>Desktop</b></th>
                                              <th><?php echo $desktop_dist_month ?></th>
                                            </tr>
                                            <tr>
                                              <th><b>Laptop</b></th>
                                              <th><?php echo $laptop_dist_month ?></th>
                                            </tr>
                                            <tr>
                                              <th><b>Server</b></th>
                                              <th><?php echo $server_dist_month ?></th>
                                            </tr>
                                            <tr>
                                              <th><b>Printer</b></th>
                                              <th><?php echo $printer_dist_month ?></th>
                                            </tr> 
                                            <tr>
                                              <th><b>Storage</b></th>
                                              <th><?php echo $storage_dist_month ?></th>
                                            </tr>
                                            <tr>
                                              <th><b>Network Devices</b></th>
                                              <th><?php echo $network_dist_month ?></th>
                                            </tr>
                                           
                              
                                        </tbody>
<!--
                                        <tfoot>
                                          <tr>
                                                <th>Asset Type</th>
                                                <th>Total Active Asset</th>
                                                
                                            </tr>
                                        </tfoot>
-->
                                    </table>
                                </div>

                            </div>
                        </div>
                <?php     
                }
                else if ($_GET["rpt"] == "PG")
                {
                     
                     ?>

                <br><br>

                    <div class="card col-lg-10">
                            <div class="card-body">
                                
                                 <a style="text-decoration:none; color:floralwhite;" href="generate.php?gen=PG "><button type="submit" class="btn btn-info btn-sm " style="float:right !important;"><i class="mdi mdi-download"></i> CSV</button></a>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th> IT Asset Type</th>
                                                <th>Profit Gained from IT Asset Disposed</th>
                    
                                            </tr>
                                        </thead>
                                        <tbody>
                                             
                                            <tr>
                                              <th><b>Desktop</b></th>
                                              <th>0.00</th>
                                            </tr>
                                            <tr>
                                              <th><b>Laptop</b></th>
                                              <th>0.00</th>
                                            </tr>
                                            <tr>
                                              <th><b>Server</b></th>
                                              <th>0.00</th>
                                            </tr>
                                            <tr>
                                              <th><b>Printer</b></th>
                                              <th>0.00</th>
                                            </tr> 
                                            <tr>
                                              <th><b>Storage</b></th>
                                              <th>0.00</th>
                                            </tr>
                                            <tr>
                                              <th><b>Network Devices</b></th>
                                              <th>0.00</th>
                                            </tr>
                                           
                              
                                        </tbody>
<!--
                                        <tfoot>
                                          <tr>
                                                <th>Asset Type</th>
                                                <th>Total Active Asset</th>
                                                
                                            </tr>
                                        </tfoot>
-->
                                    </table>
                                </div>

                            </div>
                        </div>
                <?php 
                }  
                else if ($_GET["rpt"] == "NDA")
                {
                     
                     ?>

                <div class="card col-lg-12">
                                           <div class="card">
                            <div class="card-body">
                            <a style="text-decoration:none; color:floralwhite;" href="compile.php?id=nda"><button type="submit" class="btn btn-info btn-sm " style="float:right !important;"><i class="mdi mdi-download"></i> CSV</button></a>

                                <div class="table-responsive">
                                           <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><b>Hostname</b></th>
                                                <th><b>Serial Number</b></th>
                                                <th><b>Model </b></th>
                                                <th><b>Type </b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                

$f = fopen("nda.csv", "r");
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
                                                 <th><b>Hostname</b></th>
                                               <th><b>Serial Number</b></th>
                                                <th><b>Model </b></th>
                                                <th><b>Type </b></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                            
                        </div>
                <?php 
                }  
                else if ($_GET["rpt"] == "AAA")
                {
                    ?>
                <div class="card col-lg-12">
                                           <div class="card">
                            <div class="card-body">
                            <a style="text-decoration:none; color:floralwhite;" href="compile.php?id=allasset"><button type="submit" class="btn btn-info btn-sm " style="float:right !important;"><i class="mdi mdi-download"></i> CSV</button></a>

                                <div class="table-responsive">
                                           <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><b>Hostname</b></th>
                                                <th><b>Serial Number</b></th>
                                                <th><b>MBB Tag</b></th>
                                                <th><b>Model </b></th>
                                                <th><b>Type </b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                

$f = fopen("allasset.csv", "r");
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
                                                 <th><b>Hostname</b></th>
                                               <th><b>Serial Number</b></th>
                                                <th><b>MBB Tag</b></th>
                                                <th><b>Model </b></th>
                                                <th><b>Type </b></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                            
                        </div>
<!--
                <div class="card col-lg-10">
                                           <div class="card">
                            <div class="card-body">
                             <a style="text-decoration:none; color:floralwhite;" href="unin.csv"><button type="submit" class="btn btn-info btn-sm " style="float:right !important;"><i class="mdi mdi-download"></i> CSV</button></a>

                                <div class="table-responsive">
                                           <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
<th>Name</th>
                                                <th>Manufacture</th>
                                                <th>Alternative Username</th>
                                                <th>Serial Number</th>
                                                <th>Network IP1</th>
                                                <th>Network IP2</th>
                                                <th>Network IP3</th>
                                                <th>Network IP4</th>
                                                <th>Domain</th>
                                                <th>UUID</th>
                                                <th>OS NAme</th>
                                                <th>Location</th>
                                                <th>MAC 1</th>
                                                <th>MAC 2</th>
                                                <th>MAC 3</th>
                                                <th>MAC 4</th>
<th>Firmware</th> 
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                

$f = fopen("aaa.csv", "r");
while (($line = fgetcsv($f)) !== false) {
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
<th>Name</th>
                                                <th>Manufacture</th>
                                                <th>Alternative Username</th>
                                                <th>Serial Number</th>
                                                <th>Network IP1</th>
                                                <th>Network IP2</th>
                                                <th>Network IP3</th>
                                                <th>Network IP4</th>
                                                <th>Domain</th>
                                                <th>UUID</th>
                                                <th>OS NAme</th>
                                                <th>Location</th>
                                                <th>MAC 1</th>
                                                <th>MAC 2</th>
                                                <th>MAC 3</th>
                                                <th>MAC 4</th>
<th>Firmware</th> 
                                               
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                            
                        </div>
-->
                <?php
                    
                } 
                else if ($_GET["rpt"] == "DeA")
                {
                    
                } 
                else if ($_GET["rpt"] == "DiA")
                {
                    
                }
                else if ($_GET["rpt"] == "UnInA")
                {
                     ?>

                <br><br>

                    <div class="card col-lg-10">
                                           <div class="card">
                            <div class="card-body">
                             <a style="text-decoration:none; color:floralwhite;" href="unin.csv"><button type="submit" class="btn btn-info btn-sm " style="float:right !important;"><i class="mdi mdi-download"></i> CSV</button></a>

                                <div class="table-responsive">
                                           <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><b>IP Address</b></th>
                                                <th><b>MAC</b></th>
                                                <th><b>MASK</b></th>
                                                <th><b>DATE</b></th>
                                                <th><b>DNS</b></th>
                                                <th><b>NAME</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                

$f = fopen("unin.csv", "r");
while (($line = fgetcsv($f)) !== false) {
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
                                                 <th><b>IP Address</b></th>
                                                <th><b>MAC</b></th>
                                                <th><b>MASK</b></th>
                                                <th><b>DATE</b></th>
                                                <th><b>DNS</b></th>
                                                <th><b>NAME</b></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                            
                        </div>
                <?php
                }
                
            }
                ?>
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