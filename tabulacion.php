<?php
if(isset($_SESSION["usuarioActual"])){ //Si hay un usuario autentificado
?>
        <ul class="nav nav-tabs">
            <li class="active"><a class="btn" data-toggle="modal" data-target="#modalSinImplementar">
                    Inicio</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Consultas
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="/PRO_RGC_Task/index.php?opcion=consultar">Usuarios</a></li>
                  <li><a href="/PRO_RGC_Task/index.php?opcion=historicalS">historical</a></li>
                  <li><a href="/PRO_RGC_Task/index.php?opcion=phaseS">phase</a></li>
                  <li><a href="/PRO_RGC_Task/index.php?opcion=taskS">task</a></li>
                  <li><a href="/PRO_RGC_Task/index.php?opcion=technicianS">technician</a></li>
                  <li><a href="/PRO_RGC_Task/index.php?opcion=estadisticas">Estadisticas</a></li>
                  <li><a href="/PRO_RGC_Task/index.php?opcion=estadisticas_cambios">Estadisticas cambios</a></li>
                  <li><a href="/PRO_RGC_Task/index.php?opcion=estadisticas_tasks_per_tech">Tareas por Técnico</a></li>
                  <li><a href="/PRO_RGC_Task/index.php?opcion=estadisticas_tasks_phase">Tareas y fase actual</a></li>

				  <li><a href="/PRO_RGC_Task/index.php?opcion=fix_bd">Fix originTask</a></li>
                  <li><a href="/PRO_RGC_Task/index.php?opcion=borra">borra</a></li>
                <!--      
                <li><a data-toggle="modal" data-target="#modalSinImplementar">Categorías</a></li>
                -->
              </ul>
            </li>
            <?php
            if($_SESSION["usuarioActual"] == "admin"){ //Si hay un usuario autentificado y éste es admin
            ?>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Insertar
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="/PRO_RGC_Task/index.php?opcion=registrarse">Usuarios</a></li>


                    <li><a href="/PRO_RGC_Task/index.php?opcion=historicalI">historical</a></li>
                    <li><a href="/PRO_RGC_Task/index.php?opcion=phaseI">phase</a></li>
                    <li><a href="/PRO_RGC_Task/index.php?opcion=taskI">task</a></li>
                    <li><a href="/PRO_RGC_Task/index.php?opcion=technicianI">technician</a></li>


                  </ul>
                </li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Modificar
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="/PRO_RGC_Task/index.php?opcion=modificar">Usuarios</a></li>


                    <li><a href="/PRO_RGC_Task/index.php?opcion=historicalU">historical</a></li>
                    <li><a href="/PRO_RGC_Task/index.php?opcion=phaseU">phase</a></li>
                    <li><a href="/PRO_RGC_Task/index.php?opcion=taskU">task</a></li>
                    <li><a href="/PRO_RGC_Task/index.php?opcion=technicianU">technician</a></li>


                  </ul>
                </li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Borrar
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="/PRO_RGC_Task/index.php?opcion=borrar">Usuarios</a></li>


                    <li><a href="/PRO_RGC_Task/index.php?opcion=historicalD">historical</a></li>
                    <li><a href="/PRO_RGC_Task/index.php?opcion=phaseD">phase</a></li>
                    <li><a href="/PRO_RGC_Task/index.php?opcion=taskD">task</a></li>
                    <li><a href="/PRO_RGC_Task/index.php?opcion=technicianD">technician</a></li>


                  </ul>
                </li>
<!--      
                <li><a class="btn" data-toggle="modal" data-target="#modalSinImplementar">
                        Insertar</a></li>
                <li><a class="btn" data-toggle="modal" data-target="#modalSinImplementar">
                        Modificar</a></li>
                <li><a class="btn" data-toggle="modal" data-target="#modalSinImplementar">
                        Borrar</a></li>
-->
            <?php
            }
            ?>
        </ul>
<?php
    }
?>


