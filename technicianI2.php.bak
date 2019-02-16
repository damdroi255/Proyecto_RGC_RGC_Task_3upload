<?php
include 'conexion.php';
$sql = "INSERT INTO technician (id,descripcion) VALUES ('".$id."','".$descripcion."')";
if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
include 'technicianS.php';
?>
