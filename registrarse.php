<?php
include 'conexion.php';
$exitoUsuario = "";
$errorUsuario = "";
$exitoContra = "";
$errorContra = "";
$exitoContraConfirmacion = "";
$errorContraConfirmacion = "";
$exitoTipoUsuario = "";
$errorTipoUsuario = "";
if (isset($_GET["usuario"]) && isset($_GET["contra"]) && isset($_GET["contraConfirmacion"]) && isset($_GET["tipoUsuario"])) {
    $usuario = $_GET["usuario"];
    $contra = $_GET["contra"];
    $contraConfirmacion = $_GET["contraConfirmacion"];
    $tipoUsuario = $_GET["tipoUsuario"];
    if (isset($usuario) && $usuario == "") {
        $exitoUsuario = "has-error";
        $errorUsuario = "Debe introducir el usuario";
    }
    if (isset($contra) && $contra == "") {
        $exitoContra = "has-error";
        $errorContra = "Debe introducir la contraseña";
    }
    if (isset($contraConfirmacion) && $contraConfirmacion == "") {
        $exitoContraConfirmacion = "has-error";
        $errorContraConfirmacion = "Debe introducir la contraseña";
    }
    if (isset($tipoUsuario) && $tipoUsuario == "") {
        $exitoTipoUsuario = "has-error";
        $errorTipoUsuario = "Debe introducir el tipo de usuario";
    }
    if (isset($usuario) && isset($contra) && isset($contraConfirmacion) && $usuario != "" && $contra != "" && $contraConfirmacion != "" && isset($tipoUsuario) && $tipoUsuario != "" ) {
        if ($contra != $contraConfirmacion) {
            $exitoContraConfirmacion = "has-error";
            $errorContraConfirmacion = "No coinciden las contraseñas";
        }
        //if (key_exists($usuario, $usuarios)) {
        //    $exitoUsuario = "has-error";
        //    $errorUsuario = "¡Usuario ya existe!";
        //}
        if ($errorUsuario == "" && $errorContraConfirmacion == "") {
            include "usuarioRegistrado.php";
            exit();
        }
    }
} else {
    $usuario = "";
    $contra = "";
    $contraConfirmacion = "";
    $tipoUsuario = "";
}
?>
<div class="well">
    <form role="form" method="get">
        <div class="form-group <?php echo $exitoUsuario; ?>">
            <label class="control-label" for="usuario">Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuario; ?>"/>
            <span class="help-block"><?php echo $errorUsuario; ?></span> 
        </div>
        <div class="form-group <?php echo $exitoContra; ?>">
            <label class="control-label" for="contra">Contraseña:</label>
            <input type="password" class="form-control" id="contra" name="contra" value="<?php echo $contra; ?>"/>
            <span class="help-block"><?php echo $errorContra; ?></span> 
        </div>
        <div class="form-group <?php echo $exitoContraConfirmacion; ?>">
            <label class="control-label" for="contraConfirmacion">Confirmar Contraseña:</label>
            <input type="password" class="form-control" id="contraConfirmacion" name="contraConfirmacion" value="<?php echo $contraConfirmacion; ?>"/>
            <span class="help-block"><?php echo $errorContraConfirmacion; ?></span> 
        </div>
        <div class="form-group <?php echo $exitoTipoUsuario; ?>">
            <label class="control-label" for="tipoUsuario">Tipo de Usuario:</label>
            <input type="text" class="form-control" id="tipoUsuario" name="tipoUsuario" value="<?php echo $tipoUsuario; ?>"/>
            <span class="help-block"><?php echo $errorTipoUsuario; ?></span> 
        </div>        
        <div class="checkbox">
            <label><input type="checkbox"> Recordar</label>
        </div>
        <input type="hidden" name="opcion" value="registrarse">
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>  
</div>



