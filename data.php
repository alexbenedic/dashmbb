<?php
include('login/db_configs.php');

$sql = "SELECT *
FROM `glpi_active_chart`
order by dateime desc limit 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     $desktop = $row["desktop"];
     $laptop = $row["laptop"];
     $server = $row["server"];
     $printer = $row["printer"];
     $network = $row["network"];
     $storage = $row["storage"];
     $time = $row["dateime"];
//        echo $desktop;
//        echo $time;
    }
} else {
    echo "0 results1";
}
$sql1 = "SELECT *
FROM `glpi_decom_chart`
order by dateime desc limit 1";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     $desktop_decom = $row["desktop"];
     $laptop_decom = $row["laptop"];
     $server_decom = $row["server"];
     $printer_decom = $row["printer"];
     $network_decom = $row["network"];
     $storage_decom = $row["storage"];
//     $time = $row["dateime"];
//        echo $desktop;
//        echo $time;
    }
} else {
    echo "0 results2";
}
$sql2 = "SELECT *
FROM `glpi_new_asset`
order by dateime desc limit 1";
$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     $desktop_new = $row["desktop"];
     $laptop_new = $row["laptop"];
     $server_new = $row["server"];
     $printer_new = $row["printer"];
     $network_new = $row["network"];
     $storage_new = $row["storage"];
//     $time = $row["dateime"];
//        echo $desktop;
//        echo $time;
    }
} else {
    echo "0 results3";
}
$sql3 = "SELECT *
FROM `glpi_noupdate_chart`
order by dateime desc limit 1";
$result = $conn->query($sql3);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     $desktop_xupd = $row["desktop"];
     $laptop_xupd = $row["laptop"];
     $server_xupd = $row["server"];
     $printer_xupd = $row["printer"];
     $network_xupd = $row["network"];
     $storage_xupd = $row["storage"];
//     $time = $row["dateime"];
//        echo $desktop;
//        echo $time;
    }
} else {
    echo "0 results4";
}

$sql4 = "SELECT *
FROM `glpi_dist_chart`
order by dateime desc limit 1";
$result = $conn->query($sql4);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     $desktop_dist = $row["desktop"];
     $laptop_dist  = $row["laptop"];
     $server_dist  = $row["server"];
     $printer_dist  = $row["printer"];
     $network_dist  = $row["network"];
     $storage_dist  = $row["storage"];
//     $time = $row["dateime"];
//        echo $desktop;
//        echo $time;
    }
} else {
    echo "0 results5";
}
$sql5 = "SELECT *
FROM `glpi_decom_chart_month`
order by dateime desc limit 1";
$result = $conn->query($sql5);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     $desktop_decom_month = $row["desktop"];
     $laptop_decom_month = $row["laptop"];
     $server_decom_month = $row["server"];
     $printer_decom_month = $row["printer"];
     $network_decom_month = $row["network"];
     $storage_decom_month = $row["storage"];
//     $time = $row["dateime"];
//        echo $desktop;
//        echo $time;
    }
} else {
    echo "0 results6";
}
$sql6 = "SELECT *
FROM `glpi_dist_chart_month`
order by dateime desc limit 1";
$result = $conn->query($sql6);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     $desktop_dist_month = $row["desktop"];
     $laptop_dist_month = $row["laptop"];
     $server_dist_month = $row["server"];
     $printer_dist_month = $row["printer"];
     $network_dist_month = $row["network"];
     $storage_dist_month = $row["storage"];
//     $time = $row["dateime"];
//        echo $desktop;
//        echo $time;
    }
} else {
    echo "0 results6";
}

date_default_timezone_set('Asia/Kuala_Lumpur');
$date_month = date("F");
$date_year = date("Y");
$date = date('Y-m-d', strtotime('today - 30 days'));

$conn->close();
?>