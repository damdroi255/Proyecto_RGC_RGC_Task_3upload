<?php
$usuarioActual = $_GET["usuarioActual"];
$contra = $_GET["contra"];
include 'conexion.php';
$sql = "select id,usuario,clave,tipousuario from usuarios where usuario='".$usuarioActual."' and clave='".$contra."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        if ($row["usuario"] == "admin"){
            $usuarioActual="admin";
        }else{
            $usuarioActual="usuario";
        }
        //echo 'Entrada correcta al sistema';
    }
    include 'iniciarSesion.php';
}else{
    $usuarioActual="";
    include 'fuera.php';
}
?>


