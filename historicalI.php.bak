<?php
include 'conexion.php';
$exitoid = "";
$exitotask_id = "";
$exitodescription = "";
$exitotimestamp_date = "";
$exitopriority = "";
$exitophase = "";
$exitophase_date = "";
$exitotechnician = "";
$exitocommitment_date = "";
$exitoorigin_task = "";
$errorid = "";
$errortask_id = "";
$errordescription = "";
$errortimestamp_date = "";
$errorpriority = "";
$errorphase = "";
$errorphase_date = "";
$errortechnician = "";
$errorcommitment_date = "";
$errororigin_task = "";
if (isset($_GET["id"]) && isset($_GET["task_id"]) && isset($_GET["description"]) && isset($_GET["timestamp_date"]) && isset($_GET["priority"]) && isset($_GET["phase"]) && isset($_GET["phase_date"]) && isset($_GET["technician"]) && isset($_GET["commitment_date"]) && isset($_GET["origin_task"])) {
    $id = $_GET["id"];
    $task_id = $_GET["task_id"];
    $description = $_GET["description"];
    $timestamp_date = $_GET["timestamp_date"];
    $priority = $_GET["priority"];
    $phase = $_GET["phase"];
    $phase_date = $_GET["phase_date"];
    $technician = $_GET["technician"];
    $commitment_date = $_GET["commitment_date"];
    $origin_task = $_GET["origin_task"];
    if (isset($id) && $id == "") {
        $exitoid = "has-error";
        $errorid = "Falta id";
    }
    if (isset($task_id) && $task_id == "") {
        $exitotask_id = "has-error";
        $errortask_id = "Falta task_id";
    }
    if (isset($description) && $description == "") {
        $exitodescription = "has-error";
        $errordescription = "Falta description";
    }
    if (isset($timestamp_date) && $timestamp_date == "") {
        $exitotimestamp_date = "has-error";
        $errortimestamp_date = "Falta timestamp_date";
    }
    if (isset($priority) && $priority == "") {
        $exitopriority = "has-error";
        $errorpriority = "Falta priority";
    }
    if (isset($phase) && $phase == "") {
        $exitophase = "has-error";
        $errorphase = "Falta phase";
    }
    if (isset($phase_date) && $phase_date == "") {
        $exitophase_date = "has-error";
        $errorphase_date = "Falta phase_date";
    }
    if (isset($technician) && $technician == "") {
        $exitotechnician = "has-error";
        $errortechnician = "Falta technician";
    }
    if (isset($commitment_date) && $commitment_date == "") {
        $exitocommitment_date = "has-error";
        $errorcommitment_date = "Falta commitment_date";
    }
    if (isset($origin_task) && $origin_task == "") {
        $exitoorigin_task = "has-error";
        $errororigin_task = "Falta origin_task";
    }
	if ($errorid == "" && $id != "" && $errortask_id == "" && $task_id != "" && $errordescription == "" && $description != "" && $errortimestamp_date == "" && $timestamp_date != "" && $errorpriority == "" && $priority != "" && $errorphase == "" && $phase != "" && $errorphase_date == "" && $phase_date != "" && $errortechnician == "" && $technician != "" && $errorcommitment_date == "" && $commitment_date != "" && $errororigin_task == "" && $origin_task != "") {
        include "historicalI2.php";
        exit();
    }
} else {
    $id = "";
    $task_id = "";
    $description = "";
    $timestamp_date = "";
    $priority = "";
    $phase = "";
    $phase_date = "";
    $technician = "";
    $commitment_date = "";
    $origin_task = "";
}
?>
<div class="well">
    <form role="form" method="get">
        <div class="form-group <?php echo $exitoid; ?>">
            <label class="control-label" for="id">id:</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $id; ?>"/>
            <span class="help-block"><?php echo $errorid; ?></span>
        </div>
        <div class="form-group <?php echo $exitotask_id; ?>">
            <label class="control-label" for="task_id">task_id:</label>
            <input type="text" class="form-control" id="task_id" name="task_id" value="<?php echo $task_id; ?>"/>
            <span class="help-block"><?php echo $errortask_id; ?></span>
        </div>
        <div class="form-group <?php echo $exitodescription; ?>">
            <label class="control-label" for="description">description:</label>
            <input type="text" class="form-control" id="description" name="description" value="<?php echo $description; ?>"/>
            <span class="help-block"><?php echo $errordescription; ?></span>
        </div>
        <div class="form-group <?php echo $exitotimestamp_date; ?>">
            <label class="control-label" for="timestamp_date">timestamp_date:</label>
            <input type="text" class="form-control" id="timestamp_date" name="timestamp_date" value="<?php echo $timestamp_date; ?>"/>
            <span class="help-block"><?php echo $errortimestamp_date; ?></span>
        </div>
        <div class="form-group <?php echo $exitopriority; ?>">
            <label class="control-label" for="priority">priority:</label>
            <input type="text" class="form-control" id="priority" name="priority" value="<?php echo $priority; ?>"/>
            <span class="help-block"><?php echo $errorpriority; ?></span>
        </div>
        <div class="form-group <?php echo $exitophase; ?>">
            <label class="control-label" for="phase">phase:</label>
            <input type="text" class="form-control" id="phase" name="phase" value="<?php echo $phase; ?>"/>
            <span class="help-block"><?php echo $errorphase; ?></span>
        </div>
        <div class="form-group <?php echo $exitophase_date; ?>">
            <label class="control-label" for="phase_date">phase_date:</label>
            <input type="text" class="form-control" id="phase_date" name="phase_date" value="<?php echo $phase_date; ?>"/>
            <span class="help-block"><?php echo $errorphase_date; ?></span>
        </div>
        <div class="form-group <?php echo $exitotechnician; ?>">
            <label class="control-label" for="technician">technician:</label>
            <input type="text" class="form-control" id="technician" name="technician" value="<?php echo $technician; ?>"/>
            <span class="help-block"><?php echo $errortechnician; ?></span>
        </div>
        <div class="form-group <?php echo $exitocommitment_date; ?>">
            <label class="control-label" for="commitment_date">commitment_date:</label>
            <input type="text" class="form-control" id="commitment_date" name="commitment_date" value="<?php echo $commitment_date; ?>"/>
            <span class="help-block"><?php echo $errorcommitment_date; ?></span>
        </div>
        <div class="form-group <?php echo $exitoorigin_task; ?>">
            <label class="control-label" for="origin_task">origin_task:</label>
            <input type="text" class="form-control" id="origin_task" name="origin_task" value="<?php echo $origin_task; ?>"/>
            <span class="help-block"><?php echo $errororigin_task; ?></span>
        </div>
		<input type="hidden" name="opcion" value="historicalI">
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>
</div>
