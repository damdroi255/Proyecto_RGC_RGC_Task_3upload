<?php
include 'conexion.php';
include 'cab_pag.php';
?>
<table class="table">
<caption>Mantenimiento de usuarios</caption>
    <thead>
        <tr>
            <th>Id</th>
            <th>Usuario</th>
            <th>Clave</th>
            <th>TipoUsuario</th>
            <th>Modificar</th>
        </tr>
    </thead>
    <tbody>
        <?php
		$sql="SELECT count(*) registrostotales FROM usuarios";
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$total_registros=$row["registrostotales"];
		}
$sql = "SELECT Id,Usuario,Clave,TipoUsuario FROM usuarios ORDER BY Id ASC LIMIT $inicio,$registros";
$result = mysqli_query($conn, $sql);
		$total_paginas=ceil($total_registros/$registros);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row["Id"]."</td>";
                echo "<td>".$row["Usuario"]."</td>";
                echo "<td>".$row["Clave"]."</td>";
                echo "<td>".$row["TipoUsuario"]."</td>";
                echo '<td>'
                        . '<form method="get">'
                            . '<input type="hidden" name="opcion" value="usuariosU2"/>'
                            . '<input type="hidden" name="pagina" value="'.$pagina.'"/>'
                            . '<input type="hidden" name="indice" value="'.$row["Id"].'"/>'
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
$variable_pie="usuariosU";
include 'pie_pag.php';
?>

