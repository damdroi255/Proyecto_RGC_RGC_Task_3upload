<?php
include 'conexion.php';
$sql = "INSERT INTO historical (id,task_id,description,timestamp_date,priority,phase,phase_date,technician,commitment_date,origin_task) VALUES ('".$id."','".$task_id."','".$description."','".$timestamp_date."','".$priority."','".$phase."','".$phase_date."','".$technician."','".$commitment_date."','".$origin_task."')";
if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
include 'historicalS.php';
?>
