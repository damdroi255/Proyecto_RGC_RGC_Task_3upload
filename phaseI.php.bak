<?php
include 'conexion.php';
$exitoid = "";
$exitodescripcion = "";
$errorid = "";
$errordescripcion = "";
if (isset($_GET["id"]) && isset($_GET["descripcion"])) {
    $id = $_GET["id"];
    $descripcion = $_GET["descripcion"];
    if (isset($id) && $id == "") {
        //$exitoid = "has-error";
        //$errorid = "Falta id";
    }
    if (isset($descripcion) && $descripcion == "") {
        $exitodescripcion = "has-error";
        $errordescripcion = "Falta descripcion";
    }
	if ($errorid == "" && $id != "" && $errordescripcion == "" && $descripcion != "") {
        include "phaseI2.php";
        exit();
    }
} else {
    $id = "";
    $descripcion = "";
}
?>
<div class="well">
    <form role="form" method="get">
        <div class="form-group <?php echo $exitoid; ?>">
            <label class="control-label" for="id">id:</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $id; ?>"/>
            <span class="help-block"><?php echo $errorid; ?></span>
        </div>
        <div class="form-group <?php echo $exitodescripcion; ?>">
            <label class="control-label" for="descripcion">descripcion:</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $descripcion; ?>"/>
            <span class="help-block"><?php echo $errordescripcion; ?></span>
        </div>
		<input type="hidden" name="opcion" value="phaseI">
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>
</div>
