<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);



include 'db.php';




if(isset($_GET["id"])){
$sql = "UPDATE `data` SET `visible`='0' WHERE `id`='".$_GET['id']."'";
$result = mysqli_query($mysqli,$sql);
echo "DELETE ID=" . $_GET["id"];
exit();
}




$sql = "UPDATE `data` SET `visible`='0' WHERE 1";
$result = mysqli_query($mysqli,$sql);
echo "DELETE ALL DATA";
exit();


?>
