<?php
include 'conexion.php';
$sql = "INSERT INTO usuarios (usuario, clave, tipousuario) VALUES ('".$usuario."', '".$contra."' , '".$tipoUsuario."')";
if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
include 'consultarUsuarios.php';
?>


