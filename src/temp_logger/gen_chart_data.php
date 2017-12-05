
<?php



include 'db.php';
$sql = "SELECT * FROM `data` WHERE `visible`='1' ORDER BY `time` DESC LIMIT 100";
if(isset($_GET['room_id'])){
$sql = "SELECT * FROM `data` WHERE `visible`='1' AND `room_id`='". $_GET['room_id']."' ORDER BY `time` DESC LIMIT 100";
}


$result = mysqli_query($mysqli,$sql);
 $array = array();


while ($row = mysqli_fetch_assoc($result)) {
//    echo  "'".$row["time"] ."',";
$array[] = $row;
}
echo'{"chart":'.json_encode($array).'}';
?>
