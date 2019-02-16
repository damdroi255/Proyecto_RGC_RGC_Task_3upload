<?php
    if(isset($_GET["indice"])){
        $indice = $_GET["indice"];
    } 
include 'conexion.php';
include 'cab_pag.php';
?>
<table class="table">
<caption>Modificaci&oacute;n de historical</caption>
    <thead>
        <tr>
            <th>id</th>
            <th>task_id</th>
            <th>description</th>
            <th>timestamp_date</th>
            <th>priority</th>
            <th>phase</th>
            <th>phase_date</th>
            <th>technician</th>
            <th>commitment_date</th>
            <th>origin_task</th>
            <th>Operación</th>
        </tr>
    </thead>
    <tbody>
        <?php
		$sql="SELECT count(*) registrostotales FROM historical";
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$total_registros=$row["registrostotales"];
		}
$sql = "SELECT id,task_id,description,timestamp_date,priority,phase,phase_date,technician,commitment_date,origin_task FROM historical ORDER BY id ASC LIMIT $inicio,$registros";
$result = mysqli_query($conn, $sql);
		$total_paginas=ceil($total_registros/$registros);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                if($indice == $row["id"]){
                    echo '<td>'.$row["id"].'</td>';
                    echo '<td><input type="text" name="task_id" form="formhistoricalU" value="'.$row["task_id"].'"/></td>';
                    echo '<td><input type="text" name="description" form="formhistoricalU" value="'.$row["description"].'"/></td>';
                    echo '<td><input type="text" name="timestamp_date" form="formhistoricalU" value="'.$row["timestamp_date"].'"/></td>';
                    echo '<td><input type="text" name="priority" form="formhistoricalU" value="'.$row["priority"].'"/></td>';
                    echo '<td><input type="text" name="phase" form="formhistoricalU" value="'.$row["phase"].'"/></td>';
                    echo '<td><input type="text" name="phase_date" form="formhistoricalU" value="'.$row["phase_date"].'"/></td>';
                    echo '<td><input type="text" name="technician" form="formhistoricalU" value="'.$row["technician"].'"/></td>';
                    echo '<td><input type="text" name="commitment_date" form="formhistoricalU" value="'.$row["commitment_date"].'"/></td>';
                    echo '<td><input type="text" name="origin_task" form="formhistoricalU" value="'.$row["origin_task"].'"/></td>';
                    echo '<td>'
                            . '<form method="get" id="formhistoricalU">'
                                . '<input type="hidden" name="id" value="idU3"/>'
                                . '<input type="hidden" name="pagina" value="'.$pagina.'"/>'
                                . '<input type="hidden" name="opcion" value="historicalU3"/>'
                                . '<input type="hidden" name="indice" value="'.$row["id"].'"/>'
                                . '<button type="submit" class="btn btn-xs btn-success">'
                                    . '<span class="glyphicon glyphicon-ok"></span>'
                                . '</button>'
                            . '</form>'
                            . '<form method="get">'
                                . '<input type="hidden" name="opcion" value="historicalU"/>'
                                . '<input type="hidden" name="pagina" value="'.$pagina.'"/>'
                                . '<button type="submit" class="btn btn-xs btn-danger">'
                                    . '<span class="glyphicon glyphicon-remove"></span>'
                                . '</button>'
                            . '</form>'
                       . '</td>';
                } else {
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["task_id"]."</td>";
                echo "<td>".$row["description"]."</td>";
                echo "<td>".$row["timestamp_date"]."</td>";
                echo "<td>".$row["priority"]."</td>";
                echo "<td>".$row["phase"]."</td>";
                echo "<td>".$row["phase_date"]."</td>";
                echo "<td>".$row["technician"]."</td>";
                echo "<td>".$row["commitment_date"]."</td>";
                echo "<td>".$row["origin_task"]."</td>";
                echo '<td></td>';
                }
                echo "</tr>";
            }

		}else{
			echo "<font color='darkgray'>(Sin resultados)</font>";
		}

        mysqli_close($conn);
        ?>
    </tbody>
</table>


<?php
$variable_pie="historicalU2";
include 'pie_pag.php';
?>

