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
            <th>changes</th>
        </tr>
    </thead>
    <tbody>
        <?php

		$sql="SELECT count(*) registrostotales 
		FROM historical
		group by task_id";

		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$total_registros=$row["registrostotales"];
		}

		$sql="select task_id,description,count(*) cambios
from historical
group by task_id
order by id ASC LIMIT $inicio,$registros";



$result = mysqli_query($conn, $sql);
		$total_paginas=ceil($total_registros/$registros);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row["task_id"]."</td>";
                echo "<td>".$row["description"]."</td>";
                echo "<td>".$row["cambios"]."</td>";
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
$variable_pie="estadisticas_cambios";
include 'pie_pag.php';
?>

