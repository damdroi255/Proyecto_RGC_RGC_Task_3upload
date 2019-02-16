<?php
include 'conexion.php';
//$sql = "INSERT INTO phase (id,descripcion) VALUES ('".$id."','".$descripcion."')";
$sql = "INSERT INTO phase (id,descripcion) VALUES (null,'".$descripcion."')";
if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
include 'phaseS.php';
?>
