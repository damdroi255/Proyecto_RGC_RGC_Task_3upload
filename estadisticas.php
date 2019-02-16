<?php
include 'conexion.php';
include 'cab_pag.php';
?>
<table class="table">
<caption>Statistics in task</caption>
    <thead>
        <tr>
            <th>id</th>
            <th>description</th>
            <th>timestamp_date</th>
            <th>priority</th>
            <th>phase</th>
            <th>descripcion Phase</th>
            <th>technician</th>
            <th>descripcion Technician</th>
            <th>foto</th>
            <th>commitment_date</th>
            <th>origin_task</th>
            <th>dependiente_de</th>
        </tr>
    </thead>
    <tbody>
        <?php
		$sql="SELECT count(*) registrostotales FROM task ,phase,technician
where task.phase=phase.id
and task.technician=technician.id";
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$total_registros=$row["registrostotales"];
		}

$sql  = "select task.id,task.description,task.timestamp_date,task.priority,task.phase,phase.descripcion dphase,task.technician,technician.descripcion dtechnician,task.commitment_date,task.origin_task,
(select description from task SECUNDARIA where SECUNDARIA.id=task.origin_task) dependiente_de
from task ,phase,technician
where task.phase=phase.id
and task.technician=technician.id
order by task.id ASC LIMIT $inicio,$registros";


$result = mysqli_query($conn, $sql);
		$total_paginas=ceil($total_registros/$registros);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["description"]."</td>";
                echo "<td>".$row["timestamp_date"]."</td>";
                echo "<td>".$row["priority"]."</td>";
                echo "<td>".$row["phase"]."</td>";
                echo "<td>".$row["dphase"]."</td>";
                echo "<td>".$row["technician"]."</td>";
                echo "<td>".$row["dtechnician"]."</td>";
				echo "<td>"."<img src='img/".$row["technician"].".jpg' border='0' width='50' height='50'>"."</td>";
                echo "<td>".$row["commitment_date"]."</td>";
                echo "<td>".$row["origin_task"]."</td>";
                echo "<td>".$row["dependiente_de"]."</td>";
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
$variable_pie="estadisticas";
include 'pie_pag.php';
?>

