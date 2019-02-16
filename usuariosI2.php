<?php
include 'conexion.php';
$sql = "INSERT INTO usuarios (Id,Usuario,Clave,TipoUsuario) VALUES ('".$Id."','".$Usuario."','".$Clave."','".$TipoUsuario."')";
if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
include 'usuariosS.php';
?>
