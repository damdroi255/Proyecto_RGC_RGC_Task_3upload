<?php
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
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row["Id"]."</td>";
                echo "<td>".$row["Usuario"]."</td>";
                //echo "<td>".$row["Clave"]."</td>"; 
                echo "<td>******<td>";
                echo "<td>".$row["TipoUsuario"]."</td>"; 
                echo '<td>'
                        . '<form method="get">'
                            . '<input type="hidden" name="opcion" value="modificando"/>'
                            . '<input type="hidden" name="indice" value="'.$row["Id"].'"/>'
                            . '<button type="submit" class="btn btn-xs">'
                                . '<span class="glyphicon glyphicon-pencil"></span>'
                            . '</button>'
                        . '</form>'
                   . '</td>';
                echo "</tr>";
            }
        }
        mysqli_close($conn);
        ?>
    </tbody>
</table>
