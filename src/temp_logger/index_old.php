<?php
include 'db.php';
echo "<html>";
echo "<head>";
echo "</head>";
echo "<body>";
echo "<h1> TEMP LOGGER </h1>";
echo "<table><tr><th>TIME</th><th>Temperature</th><th>DELETE</th></tr>";


$sql = "SELECT * FROM `data` WHERE `visible`='1'";
$result = mysqli_query($mysqli,$sql);


while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" .$row["time"] ."</td><td><b>" .$row["temperature"] ." C</b></td><td><form method='GET' action='reset.php'><input type='hidden'name='id' value='".$row["id"]."'/><input type='submit' value='remove'/></form></td></tr>";
}

echo "</tbale>";

echo "<br><br><a href='exp.php'>EXPORT AS CSV</a>";



echo "<canvas id='line-chart' width='120px' height='75px'></canvas>";
echo "<script src='Chart.js'></script>";
echo "<script>";

echo "";
echo "var ctx = document.getElementById('myChart');";
//echo "var data = [{x:'1',y:'2'},];";
//echo "console.log(data);";

//echo EOF;
echo "var data_val = [";
$sql = "SELECT * FROM `data` WHERE `visible`='1'";
$result = mysqli_query($mysqli,$sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo  $row["temperature"] .",";
}
echo "";
echo "];";


echo "var data_lab = [";
$sql = "SELECT * FROM `data` WHERE `visible`='1'";
$result = mysqli_query($mysqli,$sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo  "'".$row["time"] ."',";
}
echo "";
echo "];";



echo "new Chart(document.getElementById('line-chart'), {type: 'line',data: {labels: data_lab,datasets: [{data: data_val,label: 'TEMP',borderColor: '#3e95cd',fill: false}]},options: {title: {display: true,text: 'Temperatur'}}});";




echo "</script>";


echo "</body>";
echo "</html>";
?>
