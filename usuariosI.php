<?php
include 'conexion.php';
$exitoId = "";
$exitoUsuario = "";
$exitoClave = "";
$exitoTipoUsuario = "";
$errorId = "";
$errorUsuario = "";
$errorClave = "";
$errorTipoUsuario = "";
if (isset($_GET["Id"]) && isset($_GET["Usuario"]) && isset($_GET["Clave"]) && isset($_GET["TipoUsuario"])) {
    $Id = $_GET["Id"];
    $Usuario = $_GET["Usuario"];
    $Clave = $_GET["Clave"];
    $TipoUsuario = $_GET["TipoUsuario"];
    if (isset($Id) && $Id == "") {
        $exitoId = "has-error";
        $errorId = "Falta Id";
    }
    if (isset($Usuario) && $Usuario == "") {
        $exitoUsuario = "has-error";
        $errorUsuario = "Falta Usuario";
    }
    if (isset($Clave) && $Clave == "") {
        $exitoClave = "has-error";
        $errorClave = "Falta Clave";
    }
    if (isset($TipoUsuario) && $TipoUsuario == "") {
        $exitoTipoUsuario = "has-error";
        $errorTipoUsuario = "Falta TipoUsuario";
    }
	if ($errorId == "" && $Id != "" && $errorUsuario == "" && $Usuario != "" && $errorClave == "" && $Clave != "" && $errorTipoUsuario == "" && $TipoUsuario != "") {
        include "usuariosI2.php";
        exit();
    }
} else {
    $Id = "";
    $Usuario = "";
    $Clave = "";
    $TipoUsuario = "";
}
?>
<div class="well">
    <form role="form" method="get">
        <div class="form-group <?php echo $exitoId; ?>">
            <label class="control-label" for="Id">Id:</label>
            <input type="text" class="form-control" id="Id" name="Id" value="<?php echo $Id; ?>"/>
            <span class="help-block"><?php echo $errorId; ?></span>
        </div>
        <div class="form-group <?php echo $exitoUsuario; ?>">
            <label class="control-label" for="Usuario">Usuario:</label>
            <input type="text" class="form-control" id="Usuario" name="Usuario" value="<?php echo $Usuario; ?>"/>
            <span class="help-block"><?php echo $errorUsuario; ?></span>
        </div>
        <div class="form-group <?php echo $exitoClave; ?>">
            <label class="control-label" for="Clave">Clave:</label>
            <input type="text" class="form-control" id="Clave" name="Clave" value="<?php echo $Clave; ?>"/>
            <span class="help-block"><?php echo $errorClave; ?></span>
        </div>
        <div class="form-group <?php echo $exitoTipoUsuario; ?>">
            <label class="control-label" for="TipoUsuario">TipoUsuario:</label>
            <input type="text" class="form-control" id="TipoUsuario" name="TipoUsuario" value="<?php echo $TipoUsuario; ?>"/>
            <span class="help-block"><?php echo $errorTipoUsuario; ?></span>
        </div>
		<input type="hidden" name="opcion" value="usuariosI">
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>
</div>
