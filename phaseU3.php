<?php
$indice = $_GET["indice"];
$id = $_GET["id"];
$descripcion = $_GET["descripcion"];
include 'conexion.php';
$sql = "UPDATE phase SET descripcion='".$descripcion."' WHERE id=".$indice;
if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
include 'phaseU.php';
?>


