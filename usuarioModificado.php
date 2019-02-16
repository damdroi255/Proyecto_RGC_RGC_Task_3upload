<?php
$indice = $_GET["indice"];
$usuario = $_GET["usuario"];
$contra = $_GET["contra"];
$TipoUsuario = $_GET["TipoUsuario"];
include 'conexion.php';
$sql = "UPDATE usuarios SET clave='".$contra."', usuario='".$usuario."', tipousuario='".$TipoUsuario."' WHERE id=".$indice;
if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
include 'modificarUsuarios.php';
?>



