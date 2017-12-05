<?php
include 'db.php';
echo "<h3>Last 10 Values</h3>";
$sql = "SELECT * FROM `data` ORDER BY `time` DESC LIMIT 10";
$title = " for all Rooms";
if(isset($_GET['room_id']) && $_GET['room_id'] >= 0){
    $sql = "SELECT * FROM `data` WHERE `visible`='1' AND `room_id`='".$_GET['room_id']."' ORDER BY `data`.`time` DESC LIMIT 10";
    $title = " for Room " .$_GET['room_id'];
}



echo "<table><tr><th>TIMESTAMP</th><th>Temperature" .$title ."</th><th>DELETE</th></tr>";


$result = mysqli_query($mysqli,$sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" .$row["time"] ."</td><td><b>" .$row["temperature"] ." C</b></td><td><form method='GET' action='reset.php'><input type='hidden'name='id' value='".$row["id"]."'/><input type='submit' value='reue='remove'/></form></td></tr>";
}
echo "</tbale>";
?>