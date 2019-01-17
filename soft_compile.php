<?php
include('login/db_configs.php');

 if (!isset ($_GET['os']) && !isset($_GET['loc']) && !isset($_GET['ent']) && !isset($_GET['dom']) && isset($_GET['grp']) )
    {
    echo "5";
}
else if (!isset ($_GET['os']) && !isset($_GET['loc']) && !isset($_GET['ent']) && isset($_GET['dom']) && !isset($_GET['grp']) )
    {
    $sql = "SELECT `glpi_computers`.`name`,`glpi_computers`.`id`,`glpi_domains`.`name` AS domain 
FROM `glpi_computers`
INNER JOIN `glpi_domains`
ON `glpi_computers`.`domains_id` = `glpi_domains`.`id`
WHERE `glpi_computers`.`is_deleted` = 0  and `glpi_domains`.`id` ='".$_GET['dom']."'  order by `glpi_computers`.`id` ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
    // output data of each row
	$total = $result->num_rows;
    while($row = $result->fetch_assoc()) {
	$name[] = $row['name'];
	$id[] = $row['id'];
	//echo $name ."<br>";
        
} 
}

 else {
    echo "0 resultsaaa";
}
 $data1 = "";
$data1 .= "Hostname;Software Name;Version\n";
for ($x=0; $x<$total; $x++)
{
	     $sql = "SELECT `glpi_softwares`.`name` AS softname,
                       `glpi_softwareversions`.`name` AS version,
                       `glpi_computers_softwareversions`.`date_install` AS dateinstall
                FROM `glpi_computers_softwareversions`
                LEFT JOIN `glpi_softwareversions`
                     ON (`glpi_computers_softwareversions`.`softwareversions_id`
                           = `glpi_softwareversions`.`id`)
                LEFT JOIN `glpi_states`
                     ON (`glpi_states`.`id` = `glpi_softwareversions`.`states_id`)
                LEFT JOIN `glpi_softwares`
                     ON (`glpi_softwareversions`.`softwares_id` = `glpi_softwares`.`id`)
                WHERE `glpi_computers_softwareversions`.`computers_id` = ".$id[$x]."
                      AND `glpi_computers_softwareversions`.`is_deleted` = 0
                ORDER BY `softname`, `version`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
 $data1 .= $name[$x].";".$row['softname'].";".$row['version']."\n";
      //echo  ."---". $row['softname']."---". $row['version']."<br>";
    }
} else {
    echo "0 resultsqq";
}
}
$csv_handler = fopen ('ListOfSofware.csv','w');
fwrite ($csv_handler,$data1);
fclose ($csv_handler);

}
else if (!isset ($_GET['os']) && !isset($_GET['loc']) && !isset($_GET['ent']) && isset($_GET['dom']) && isset($_GET['grp']) )
    {
    echo "45";
}
else if (!isset ($_GET['os']) && !isset($_GET['loc']) && isset($_GET['ent']) && !isset($_GET['dom']) && !isset($_GET['grp']) )
    {
    echo "3";
}
else if (!isset ($_GET['os']) && !isset($_GET['loc']) && isset($_GET['ent']) && isset($_GET['dom']) && !isset($_GET['grp']) )
    {
    echo "3";
}
else if (!isset ($_GET['os']) && !isset($_GET['loc']) && isset($_GET['ent']) && !isset($_GET['dom']) && isset($_GET['grp']) )
    {
    echo "35";
}
else if (!isset ($_GET['os']) && !isset($_GET['loc']) && isset($_GET['ent']) && isset($_GET['dom']) && isset($_GET['grp']) )
    {
    echo "345";
}
else if (!isset ($_GET['os']) && isset($_GET['loc']) && !isset($_GET['ent']) && !isset($_GET['dom']) && !isset($_GET['grp']) )
    {
    echo "2";
}
else if (!isset ($_GET['os']) && isset($_GET['loc']) && !isset($_GET['ent']) && !isset($_GET['dom']) && !isset($_GET['grp']) )
    {
    echo "25";
}
else if (!isset ($_GET['os']) && isset($_GET['loc']) && !isset($_GET['ent']) && isset($_GET['dom']) && !isset($_GET['grp']) )
    {
    echo "24";
}
else if (!isset ($_GET['os']) && isset($_GET['loc']) && !isset($_GET['ent']) && isset($_GET['dom']) && isset($_GET['grp']) )
    {
    echo "245";
}
else if (!isset ($_GET['os']) && isset($_GET['loc']) && isset($_GET['ent']) && !isset($_GET['dom']) && !isset($_GET['grp']) )
    {
    echo "23";
}
else if (!isset ($_GET['os']) && isset($_GET['loc']) && isset($_GET['ent']) && !isset($_GET['dom']) && isset($_GET['grp']) )
    {
    echo "235";
}
else if (!isset ($_GET['os']) && isset($_GET['loc']) && isset($_GET['ent']) && isset($_GET['dom']) && !isset($_GET['grp']) )
    {
    echo "234";
}
else if (!isset ($_GET['os']) && isset($_GET['loc']) && isset($_GET['ent']) && isset($_GET['dom']) && isset($_GET['grp']) )
    {
    echo "2345";
}
else if (isset ($_GET['os']) && !isset($_GET['loc']) && !isset($_GET['ent']) && !isset($_GET['dom']) && !isset($_GET['grp']) )
{
    echo "1";
}
else if (isset ($_GET['os']) && !isset($_GET['loc']) && !isset($_GET['ent']) && !isset($_GET['dom']) && isset($_GET['grp']) )
{
    echo "15";
}
else if (isset ($_GET['os']) && !isset($_GET['loc']) && !isset($_GET['ent']) && isset($_GET['dom']) && !isset($_GET['grp']) )
{
    echo "14";
}
else if (isset ($_GET['os']) && !isset($_GET['loc']) && !isset($_GET['ent']) && isset($_GET['dom']) && isset($_GET['grp']) )
{
    echo "145";
}
else if (isset ($_GET['os']) && !isset($_GET['loc']) && isset($_GET['ent']) && !isset($_GET['dom']) && !isset($_GET['grp']) )
{
    echo "13";
}
else if (isset ($_GET['os']) && !isset($_GET['loc']) && isset($_GET['ent']) && !isset($_GET['dom']) && isset($_GET['grp']) )
{
    echo "135";
}
else if (isset ($_GET['os']) && !isset($_GET['loc']) && isset($_GET['ent']) && isset($_GET['dom']) && !isset($_GET['grp']) )
{
    echo "134";
}
else if (isset ($_GET['os']) && !isset($_GET['loc']) && isset($_GET['ent']) && isset($_GET['dom']) && isset($_GET['grp']) )
{
    echo "1345";
}
else if (isset ($_GET['os']) && isset($_GET['loc']) && !isset($_GET['ent']) && !isset($_GET['dom']) && !isset($_GET['grp']) )
{
    echo "12";
}
else if (isset ($_GET['os']) && isset($_GET['loc']) && !isset($_GET['ent']) && !isset($_GET['dom']) && isset($_GET['grp']) )
{
    echo "125";
}
else if (isset ($_GET['os']) && isset($_GET['loc']) && !isset($_GET['ent']) && isset($_GET['dom']) && !isset($_GET['grp']) )
{
    echo "124";
}
else if (isset ($_GET['os']) && isset($_GET['loc']) && !isset($_GET['ent']) && isset($_GET['dom']) && isset($_GET['grp']) )
{
    echo "1245";
}
else if (isset ($_GET['os']) && isset($_GET['loc']) && isset($_GET['ent']) && !isset($_GET['dom']) && !isset($_GET['grp']) )
{
    echo "123";
}
else if (isset ($_GET['os']) && isset($_GET['loc']) && isset($_GET['ent']) && !isset($_GET['dom']) && isset($_GET['grp']) )
{
    echo "1235";
}
else if (isset ($_GET['os']) && !sset($_GET['loc']) && isset($_GET['ent']) && isset($_GET['dom']) && !isset($_GET['grp']) )
{
    echo "1234";
}
else if (isset ($_GET['os']) && isset($_GET['loc']) && isset($_GET['ent']) && isset($_GET['dom']) && isset($_GET['grp']) )
{
    echo "12345";
}

?>