<?php
include 'db.php';
$sql = "SELECT * FROM `room_names` WHERE 1";

echo "<label>ROOM SELECTION<br><select width='100%' name='room_selection' id='room_selection' onClick='room_id_changed()'>";


$result = mysqli_query($mysqli,$sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='".$row["room_id"]."'>".$row["name"]."</option>"; // .$row["time"]
}
echo "</select></label>";
?>
