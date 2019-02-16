<?php
if(isset($_GET["indice"])){
	$indice = $_GET["indice"];
	include 'historicalD2.php';
}
include 'conexion.php';
include 'cab_pag.php';
?>
<table class="table">
<caption>Borrado de historical</caption>
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
            <th>Borrar</th>
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
                echo '<td>'
                        . '<form method="get">'
                            . '<input type="hidden" name="opcion" value="historicalD"/>'
                            . '<input type="hidden" name="indice" value="'.$row["id"].'"/>'
                            . '<button type="submit" class="btn btn-xs btn-danger">'
                                . '<span class="glyphicon glyphicon-trash"></span>'
                            . '</button>'
                        . '</form>'
                   . '</td>';
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
$variable_pie="historicalD";
include 'pie_pag.php';
?>

