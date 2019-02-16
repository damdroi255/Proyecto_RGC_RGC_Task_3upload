<?php
$indice = $_GET["indice"];
$Id = $_GET["Id"];
$Usuario = $_GET["Usuario"];
$Clave = $_GET["Clave"];
$TipoUsuario = $_GET["TipoUsuario"];
include 'conexion.php';
$sql = "UPDATE usuarios SET Usuario='".$Usuario."',Clave='".$Clave."',TipoUsuario='".$TipoUsuario."' WHERE Id=".$indice;
if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
include 'usuariosU.php';
?>


