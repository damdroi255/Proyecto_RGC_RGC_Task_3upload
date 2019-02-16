<?php
    if(isset($_GET["indice"])){
        $indice = $_GET["indice"];
    } 
include 'conexion.php';
include 'cab_pag.php';
?>
<table class="table">
<caption>Modificaci&oacute;n de phase</caption>
    <thead>
        <tr>
            <th>id</th>
            <th>descripcion</th>
            <th>Operación</th>
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
                if($indice == $row["id"]){
                    echo '<td>'.$row["id"].'</td>';
                    echo '<td><input type="text" name="descripcion" form="formphaseU" value="'.$row["descripcion"].'"/></td>';
                    echo '<td>'
                            . '<form method="get" id="formphaseU">'
                                . '<input type="hidden" name="id" value="idU3"/>'
                                . '<input type="hidden" name="pagina" value="'.$pagina.'"/>'
                                . '<input type="hidden" name="opcion" value="phaseU3"/>'
                                . '<input type="hidden" name="indice" value="'.$row["id"].'"/>'
                                . '<button type="submit" class="btn btn-xs btn-success">'
                                    . '<span class="glyphicon glyphicon-ok"></span>'
                                . '</button>'
                            . '</form>'
                            . '<form method="get">'
                                . '<input type="hidden" name="opcion" value="phaseU"/>'
                                . '<input type="hidden" name="pagina" value="'.$pagina.'"/>'
                                . '<button type="submit" class="btn btn-xs btn-danger">'
                                    . '<span class="glyphicon glyphicon-remove"></span>'
                                . '</button>'
                            . '</form>'
                       . '</td>';
                } else {
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["descripcion"]."</td>";
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
$variable_pie="phaseU2";
include 'pie_pag.php';
?>

