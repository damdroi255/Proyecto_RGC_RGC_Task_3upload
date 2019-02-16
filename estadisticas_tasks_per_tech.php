<?php
include 'conexion.php';
include 'cab_pag.php';
?>
<table class="table">
<caption>Statistics in task</caption>
    <thead>
        <tr>
            <th>id</th>
            <th>description asociated</th>
            <th>tasks</th>
        </tr>
    </thead>
    <tbody>
        <?php

		$sql="SELECT count(*) registrostotales 
from task,technician
where task.technician=technician.id
group by technician";

		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$total_registros=$row["registrostotales"];
		}


		$sql="select technician,technician.descripcion dtechnician,count(task.id) tasks
from task,technician
where task.technician=technician.id
group by technician
order by technician ASC LIMIT $inicio,$registros";

$result = mysqli_query($conn, $sql);
		$total_paginas=ceil($total_registros/$registros);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row["technician"]."</td>";
                echo "<td>".$row["dtechnician"]."</td>";
                echo "<td>".$row["tasks"]."</td>";
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
$variable_pie="estadisticas_tasks_per_tech";
include 'pie_pag.php';
?>

