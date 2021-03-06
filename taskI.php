<?php
include 'conexion.php';
$exitoid = "";
$exitodescription = "";
$exitopriority = "";
$exitophase = "";
$exitophase_date = "";
$exitotechnician = "";
$exitocommitment_date = "";
$exitoorigin_task = "";
$errorid = "";
$errordescription = "";
$errorpriority = "";
$errorphase = "";
$errorphase_date = "";
$errortechnician = "";
$errorcommitment_date = "";
$errororigin_task = "";

//$exitoidf = "";
//$erroridf = "";

if (isset($_GET["id"]) && isset($_GET["description"]) && isset($_GET["priority"]) && isset($_GET["phase"]) && isset($_GET["phase_date"]) && isset($_GET["technician"]) && isset($_GET["commitment_date"]) && isset($_GET["origin_task"])) {

//if (isset($_GET["id"]) && isset($_GET["idf"]) && isset($_GET["description"]) && isset($_GET["priority"]) && isset($_GET["phase"]) && isset($_GET["phase_date"]) && isset($_GET["technician"]) && isset($_GET["commitment_date"]) && isset($_GET["origin_task"])) {
	
	$id = $_GET["id"];
//    $idf = $_GET["idf"];
    $description = $_GET["description"];
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

//    if (isset($idf) && $idf == "") {
//        $exitoidf = "has-error";
//        $erroridf = "Falta idf";
//    }

    if (isset($description) && $description == "") {
        $exitodescription = "has-error";
        $errordescription = "Falta description";
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

	if ($errorid == "" && $id != "" &&$errordescription == "" && $description != "" && $errorpriority == "" && $priority != "" && $errorphase == "" && $phase != "" && $errorphase_date == "" && $phase_date != "" && $errortechnician == "" && $technician != "" && $errorcommitment_date == "" && $commitment_date != "" && $errororigin_task == "" && $origin_task != "") {

//	if ($errorid == "" && $id != "" && $erroridf == "" && $idf != "" && $errordescription == "" && $description != "" && $errorpriority == "" && $priority != "" && $errorphase == "" && $phase != "" && $errorphase_date == "" && $phase_date != "" && $errortechnician == "" && $technician != "" && $errorcommitment_date == "" && $commitment_date != "" && $errororigin_task == "" && $origin_task != "") {

        include "taskI2.php";
        exit();
    }
} else {
    $id = "";
    $idf = "";
    $description = "";
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


<!--
		<div class="form-group <?php echo $exitoidf; ?>">
			<form enctype="multipart/form-data" action="subir-archivos.php" method="POST"> 
				<label class="control-label" for="idf">photo:</label>
				<input type="hidden" name="MAX_FILE_SIZE" value="250000" />
				<input name="archivo-a-subir" type="file" /><br/>
				<input type="submit" value="Subir Archivo" />
				<span class="help-block"><?php echo $erroridf; ?></span>
			</form>
		</div>
-->

        <div class="form-group <?php echo $exitodescription; ?>">
            <label class="control-label" for="description">description:</label>
            <input type="text" class="form-control" id="description" name="description" value="<?php echo $description; ?>"/>
            <span class="help-block"><?php echo $errordescription; ?></span>
        </div>
        <div class="form-group <?php echo $exitopriority; ?>">
            <label class="control-label" for="priority">priority:</label>
            <input type="text" class="form-control" id="priority" name="priority" value="<?php echo $priority; ?>"/>
            <span class="help-block"><?php echo $errorpriority; ?></span>
        </div>


        <div class="form-group <?php echo $exitophase; ?>">
            <label class="control-label" for="phase">phase:</label>

			<!--<input type="text" class="form-control" id="phase" name="phase" value="<?php echo $phase; ?>"/>-->
            <select class="form-control" id="phase" name="phase">
                <?php
                    $sql = "select id,descripcion from phase";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $phase=$row["id"];
                            if ($phase==$_GET["descripcion"]){
                                echo "<option value=".$phase." selected>".$row["descripcion"]."</option>";
                            }else{
                                echo "<option value=".$phase.">".$row["descripcion"]."</option>";
                            }
                        }
                    }
                ?>                 
            </select>   

            <span class="help-block"><?php echo $errorphase; ?></span>
        </div>




        <div class="form-group <?php echo $exitophase_date; ?>">
            <label class="control-label" for="phase_date">phase_date:</label>
            <input type="date" class="form-control" id="phase_date" name="phase_date" value="<?php echo $phase_date; ?>"/>
            <span class="help-block"><?php echo $errorphase_date; ?></span>
        </div>
        <div class="form-group <?php echo $exitotechnician; ?>">
            <label class="control-label" for="technician">technician:</label>
            
			<!--<input type="text" class="form-control" id="technician" name="technician" value="<?php echo $technician; ?>"/>-->
            <select class="form-control" id="technician" name="technician">
                <?php
                    $sql = "select id,descripcion from technician";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $phase=$row["id"];
                            if ($phase==$_GET["descripcion"]){
                                echo "<option value=".$phase." selected>".$row["descripcion"]."</option>";
                            }else{
                                echo "<option value=".$phase.">".$row["descripcion"]."</option>";
                            }
                        }
                    }
                ?>                 
            </select>   

            <span class="help-block"><?php echo $errortechnician; ?></span>
        </div>
        <div class="form-group <?php echo $exitocommitment_date; ?>">
            <label class="control-label" for="commitment_date">commitment_date:</label>
            <input type="date" class="form-control" id="commitment_date" name="commitment_date" value="<?php echo $commitment_date; ?>"/>
            <span class="help-block"><?php echo $errorcommitment_date; ?></span>
        </div>
        <div class="form-group <?php echo $exitoorigin_task; ?>">
            <label class="control-label" for="origin_task">origin_task:</label>
            
			<!--<input type="text" class="form-control" id="origin_task" name="origin_task" value="<?php echo $origin_task; ?>"/>-->
            <select class="form-control" id="origin_task" name="origin_task">
                <?php
                    $sql = "select id,description from task";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
						echo "<option value=".$id." selected>".$id."</option>";
                        while($row = mysqli_fetch_assoc($result)) {
                            $origin_task=$row["id"];
                            if ($origin_task==$_GET["description"]){
                                echo "<option value=".$origin_task." selected>".$row["description"]."</option>";
                            }else{
                                echo "<option value=".$origin_task.">".$row["description"]."</option>";
                            }
                        }
                    }
                ?>                 
            </select> 

            <span class="help-block"><?php echo $errororigin_task; ?></span>
        </div>
		<input type="hidden" name="opcion" value="taskI">
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>
</div>
