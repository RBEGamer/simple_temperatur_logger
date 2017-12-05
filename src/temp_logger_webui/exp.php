<?php
include 'db.php';





$sql = "SELECT * FROM `data` WHERE `visible`='1'";
$fn = "temp_logger_exp_";

if(isset($_GET['room_id'])){
$sql = $sql ." AND `room_id`='". $_GET['room_id']."'";
$fn = $fn . "room_" .$_GET['room_id'];
}



if(isset($_GET['dump'])){
$sql = "SELECT * FROM `data` WHERE 1";
$fn = $fn . "dump";
}


if(isset($_GET['limit'])){
$sql = $sql . "LIMIT " .$_GET['limit']; 
$fn = $fn . "limit_" .$_GET['limit'];
}


$fn = $fn . ".csv";

$result = mysqli_query($mysqli,$sql);

$fname = "temp_logger_export_all";



header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=" . $fn);
header("Pragma: no-cache");
header("Expires: 0");
header("Content-Transfer-Encoding: UTF-8");


echo "TIMESTAMP;TEMPERATURE;EINHEIT;" .PHP_EOL;
while ($row = mysqli_fetch_assoc($result)) {
    echo "" .$row["time"] .";" .$row["temperature"] .";C;".PHP_EOL;
}

die;
?>