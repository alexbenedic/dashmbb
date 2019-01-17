<?php 
include('servers.php') ;
$str = "sdsq97j2GvsadNEZq97j2GvNEZsoWcQsfdHyVCpsoWcQHyVCp";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
     <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/mbblogo.png">
    <title>IT Asset Management</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="../../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/libs/quill/dist/quill.snow.css">
    <link href="../../dist/css/style.min.css" rel="stylesheet">
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
        <style>
        input[type=text] {
  border: 2px solid black;
  border-radius: 4px;
}        
#select_id { border:5px solid red !important; } 

        </style>
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
                        <h4 class="page-title">Software List Report</h4>
                       
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <form method="get" action="soft_compile.php"> 
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <div class="form-group row">
                                    <label class="col-md-1 m-t-15">Platform (OS) :</label>
                                    <div class="col-md-11">
                                        <select class="select2 form-control custom-select" name="os[]" multiple="multiple"  style=" width: 100%; height:36px;">

                            <?php
                                    include('login/db_configs.php');
                                $sql = "SELECT *
FROM `glpi_operatingsystems`
";
$result = $conn->query($sql);
        if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
       <option value="<?php echo $row['id']; ?>" ><?php echo $row['name']; ?></option> 
           <?php
    }
} 
    ?>
                                        </select>
                                    </div>
                                </div> 
                                <br>
                                <br>
                                <br>                
                                <div class="form-group row">
                                    <label class="col-md-1 m-t-15">Location :</label>
                                    <div class="col-md-11">
                                        <select class="select2 form-control custom-select" name="loc[]" multiple="multiple"  style="width: 100%; height:36px;">

                            <?php
                                    
                                $sql = "SELECT *
FROM `glpi_locations`
";
$result = $conn->query($sql);
        if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
       <option value="<?php echo $row['id']; ?>" ><?php echo $row['name']; ?></option> 
           <?php
    }
} 
    ?>
                                        </select>
                                    </div>
                                </div> 
                                  <br>
                                <br>
                                <br>  
                                <div class="form-group row">
                                    <label class="col-md-1 m-t-15">Entity :</label>
                                    <div class="col-md-11">
                                        <select class="select2 form-control custom-select" name="ent[[]]" multiple="multiple"  style="width: 100%; height:36px;">

                            <?php
                                    
                                $sql = "SELECT * FROM `dashboard_entity`";
$result = $conn->query($sql);
        if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
       <option value="<?php echo $row['id']; ?>" ><?php echo $row['name']; ?></option> 
           <?php
    }
} 
    ?>
                                        </select>
                                    </div>
                                </div> 
                                  <br>
                                <br>
                                <br>  
                                <div class="form-group row">
                                    <label class="col-md-1 m-t-15">Domain :</label>
                                    <div class="col-md-11">
                                        <select class="select2 form-control custom-select" name="dom[]" multiple="multiple"  style="width: 100%; height:36px;">

                            <?php
                                    
                                $sql = "SELECT *
FROM `glpi_domains`
where not id =0
";
$result = $conn->query($sql);
        if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
       <option value="<?php echo $row['id']; ?>" ><?php echo $row['name']; ?></option> 
           <?php
    }
} 
    ?>
                                        </select>
                                    </div>
                                </div>   
                                  <br>
                                <br>
                                <br>  
                                <div class="form-group row">
                                    <label class="col-md-1 m-t-15">Hostname :</label>
                                      <div class="col-sm-11">
                                            <input type="text" class="form-control" id="fname" name="host" placeholder="Hostname1,Hostname2,Hostname3">
                                        </div>
                                </div>  
                                  <br>
                                <br>
                                <br>  
                                <div class="form-group row">
                                    <label class="col-md-1 m-t-15">Group :</label>
                                    <div class="col-md-11">
                                        <select class="select2 form-control custom-select" name="grp[]" multiple="multiple"  style="width: 100%; height:36px;">

                            <?php
                                    
                                $sql = "SELECT id,name
FROM `glpi_groups`
LIMIT 50
";
$result = $conn->query($sql);
        if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
       <option value="<?php echo $row['id']; ?>" ><?php echo $row['name']; ?></option> 
           <?php
    }
} 
    ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-1">Filter Type:</label>
                                    <div class="col-md-11">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation1" name="type" value="and" required>
                                            <label class="custom-control-label" for="customControlValidation1">And</label>
                                        </div>
                                         <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="type" value="or" required>
                                            <label class="custom-control-label" for="customControlValidation2">Or</label>
                                        </div>
                                         
                                    </div>
                                </div>

                           
                             
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Generate</button>
                                </div>
                            </div>
                        </div>
</form>

                    </div>
                    <div class="col-md-6">
                       
                    </div>
                </div>
                <!-- editor -->
             
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
    <!-- This Page JS -->
    <script src="../../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="../../dist/js/pages/mask/mask.init.js"></script>
    <script src="../../assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="../../assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="../../assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="../../assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="../../assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="../../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="../../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../../assets/libs/quill/dist/quill.min.js"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>