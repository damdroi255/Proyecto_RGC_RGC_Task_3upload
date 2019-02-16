<?php
include 'conexion.php';
include 'cab_pag.php';
?>
<table class="table">
<caption>Mantenimiento de phase</caption>
    <thead>
        <tr>
            <th>id</th>
            <th>descripcion</th>
            <th>Modificar</th>
        </tr>
    </thead>
    <tbody>
        <?php
		$sql="SELECT count(*) registrostotales FROM phase";
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$total_registros=$row["registrostotales"];
		}
$sql = "SELECT id,descripcion FROM phase ORDER BY id ASC LIMIT $inicio,$registros";
$result = mysqli_query($conn, $sql);
		$total_paginas=ceil($total_registros/$registros);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["descripcion"]."</td>";
                echo '<td>'
                        . '<form method="get">'
                            . '<input type="hidden" name="opcion" value="phaseU2"/>'
                            . '<input type="hidden" name="pagina" value="'.$pagina.'"/>'
                            . '<input type="hidden" name="indice" value="'.$row["id"].'"/>'
                            . '<button type="submit" class="btn btn-xs">'
                                . '<span class="glyphicon glyphicon-pencil"></span>'
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
$variable_pie="phaseU";
include 'pie_pag.php';
?>

