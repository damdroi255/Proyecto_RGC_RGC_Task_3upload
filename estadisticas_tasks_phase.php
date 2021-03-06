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
            <th>phase</th>
        </tr>
    </thead>
    <tbody>
        <?php

		$sql="SELECT count(*) registrostotales 
from task,phase
where task.phase=phase.id";

		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$total_registros=$row["registrostotales"];
		}

		$sql="select task.id,task.description,phase.descripcion dphase
from task,phase
where task.phase=phase.id
order by task.id ASC LIMIT $inicio,$registros";

$result = mysqli_query($conn, $sql);
		$total_paginas=ceil($total_registros/$registros);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["description"]."</td>";
                echo "<td>".$row["dphase"]."</td>";
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
$variable_pie="estadisticas_tasks_phase";
include 'pie_pag.php';
?>

