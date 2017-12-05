<?php



include 'db.php';


$sql = "SELECT * FROM `data` WHERE `visible`='1'";
if(isset($_GET['room_id'])){
$sql = "SELECT * FROM `data` WHERE `visible`='1' AND `room_id`='". $_GET['room_id']."'";
}


$result = mysqli_query($mysqli,$sql);
 $array = array();



class Info {
    public $lo = INF;
    public $hi  = 0.0;
    public $avg = 0.0;
    public $hic_avg = 0.0;
    public $hum_lo = INF;
    public $hum_hi = 0.0;
    public $hum_avg = 0.0;
}

$inf = new Info();

while ($row = mysqli_fetch_assoc($result)) {
//    echo  "'".$row["time"] ."',";
//
if($inf->lo > $row["temperature"]){
$inf->lo = $row["temperature"];
}


if($inf->hi < $row["temperature"]){ 
$inf->hi = $row["temperature"];
}

if($inf->hum_lo > $row["hum"]){
$inf->hum_lo = $row["hum"];
}


if($inf->hum_hi < $row["hum"]){ 
$inf->hum_hi = $row["hum"];
}

$inf->hic_avg +=  $row['hic'];
$inf->hic_avg /= 2.0;

$inf->avg += $row['temperature'];
$inf->avg /= 2.0;


$inf->hum_avg += $row['hum'];
$inf->hum_avg /= 2.0;
//$array[] = $row;
}
echo'{"temp_info":'.json_encode($inf).'}';
?>






