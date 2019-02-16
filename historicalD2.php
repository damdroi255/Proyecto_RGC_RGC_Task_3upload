<?php
include 'conexion.php';
$sql = "DELETE FROM historical WHERE id=".$indice;
if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

