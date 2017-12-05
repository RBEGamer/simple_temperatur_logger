<?php
include 'db.php';

if(!isset($_GET["token"]) || $_GET["token"] != "1337"){
echo "wrong_token";
exit();
}


$temp = $_GET["temp"];
echo "ok maybe";

$rid = 0;

if(isset($_GET['room_id'])){
$rid = $_GET['room_id'];
}

$sql = "INSERT INTO `data` (`id`, `temperature`, `time`, `visible`, `room_id`) VALUES (NULL, '". $temp ."', CURRENT_TIMESTAMP, '1', '".$rid."');";
$result = mysqli_query($mysqli,$sql);

?>
