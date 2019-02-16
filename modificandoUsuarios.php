<?php
if(isset($_GET["indice"])){
	$indice = $_GET["indice"];
} 
include 'conexion.php';
$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $sql);
?>
<table class="table">
    <caption>Usuarios</caption>
    <thead>
        <tr>
            <th>Id</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>TipoUsuario</th>
            <th>Operación</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                if($indice == $row["Id"]){
                    echo '<td>'.$row["Id"].'</td>';
                    //echo '<td>'.$row["Usuario"].'</td>';
                    echo '<td><input type="text" name="usuario" form="formModificar" value="'.$row["Usuario"].'"/></td>';
                    echo '<td><input type="text" name="contra" form="formModificar" value="'.$row["Clave"].'"/></td>';
                    //echo '<td>'.$row["TipoUsuario"].'</td>';
                    echo '<td><input type="text" name="TipoUsuario" form="formModificar" value="'.$row["TipoUsuario"].'"/></td>';
                    echo '<td>'
                            . '<form method="get" id="formModificar">'
                                . '<input type="hidden" name="opcion" value="modificado"/>'
                                . '<input type="hidden" name="indice" value="'.$row["Id"].'"/>'
                                . '<button type="submit" class="btn btn-xs btn-success">'
                                    . '<span class="glyphicon glyphicon-ok"></span>'
                                . '</button>'
                            . '</form>'
                            . '<form method="get">'
                                . '<input type="hidden" name="opcion" value="modificar"/>'
                                . '<button type="submit" class="btn btn-xs btn-danger">'
                                    . '<span class="glyphicon glyphicon-remove"></span>'
                                . '</button>'
                            . '</form>'
                       . '</td>';
                } else {
                    echo '<td>'.$row["Id"].'</td>';
                    echo '<td>'.$row["Usuario"].'</td>';
                    //echo '<td>'.$row["Clave"].'</td>';
                    echo '<td>******</td>';
                    echo '<td>'.$row["TipoUsuario"].'</td>';
                    echo '<td></td>';
                }
                echo "</tr>";
            }
        }   
        mysqli_close($conn);
        ?>
    </tbody>
</table>


