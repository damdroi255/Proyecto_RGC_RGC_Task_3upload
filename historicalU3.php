<?php
$indice = $_GET["indice"];
$id = $_GET["id"];
$task_id = $_GET["task_id"];
$description = $_GET["description"];
$timestamp_date = $_GET["timestamp_date"];
$priority = $_GET["priority"];
$phase = $_GET["phase"];
$phase_date = $_GET["phase_date"];
$technician = $_GET["technician"];
$commitment_date = $_GET["commitment_date"];
$origin_task = $_GET["origin_task"];
include 'conexion.php';
$sql = "UPDATE historical SET task_id='".$task_id."',description='".$description."',timestamp_date='".$timestamp_date."',priority='".$priority."',phase='".$phase."',phase_date='".$phase_date."',technician='".$technician."',commitment_date='".$commitment_date."',origin_task='".$origin_task."' WHERE id=".$indice;
if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
include 'historicalU.php';
?>


