<?php
if (isset($_GET['opcion'])) {
    $opcion = $_GET['opcion'];
    switch ($opcion) {
        case "historicalS":
            include 'historicalS.php';
            break;
        case "historicalI":
            include 'historicalI.php';
            break;
        case "historicalU":
            include 'historicalU.php';
            break;
        case "historicalU2":
            include 'historicalU2.php';
            break;
        case "historicalU3":
            include 'historicalU3.php';
            break;
        case "historicalD":
            include 'historicalD.php';
            break;
        case "phaseS":
            include 'phaseS.php';
            break;
        case "estadisticas":
            include 'estadisticas.php';
            break;

        case "estadisticas_cambios":
            include 'estadisticas_cambios.php';
            break;
        case "estadisticas_tasks_per_tech":
            include 'estadisticas_tasks_per_tech.php';
            break;
        case "estadisticas_tasks_phase":
            include 'estadisticas_tasks_phase.php';
            break;



        case "phaseI":
            include 'phaseI.php';
            break;
        case "phaseU":
            include 'phaseU.php';
            break;
        case "phaseU2":
            include 'phaseU2.php';
            break;
        case "phaseU3":
            include 'phaseU3.php';
            break;
        case "phaseD":
            include 'phaseD.php';
            break;
        case "taskS":
            include 'taskS.php';
            break;
        case "taskI":
            include 'taskI.php';
            break;
        case "taskU":
            include 'taskU.php';
            break;
        case "taskU2":
            include 'taskU2.php';
            break;
        case "taskU3":
            include 'taskU3.php';
            break;
        case "taskD":
            include 'taskD.php';
            break;
        case "technicianS":
            include 'technicianS.php';
            break;
        case "technicianI":
            include 'technicianI.php';
            break;
        case "technicianU":
            include 'technicianU.php';
            break;
        case "technicianU2":
            include 'technicianU2.php';
            break;
        case "technicianU3":
            include 'technicianU3.php';
            break;
        case "technicianD":
            include 'technicianD.php';
            break;
        case "usuariosS":
            include 'usuariosS.php';
            break;
        case "usuariosI":
            include 'usuariosI.php';
            break;
        case "usuariosU":
            include 'usuariosU.php';
            break;
        case "usuariosU2":
            include 'usuariosU2.php';
            break;
        case "usuariosU3":
            include 'usuariosU3.php';
            break;
        case "usuariosD":
            include 'usuariosD.php';
            break;

        case "consultar":
            include 'consultarUsuarios.php';
            break;	
        case "registrarse":
            include 'registrarse.php';
            break;	
        case "modificar":
            include 'modificarUsuarios.php';
            break;
        case "modificando":
            include 'modificandoUsuarios.php';
            break;
        case "modificado":
            include 'usuarioModificado.php';
            break;
		case "borrar":
            include 'borrarUsuarios.php';
            break;		
			
        case "fix_bd":
            include 'fix_bd.php';
            break;

        case "borra":
            include 'borra.php';
            break;

        case "fotoS":
            include 'fotoS.php';
            break;
        case "fotoI":
            include 'fotoI.php';
            break;
        case "fotoU":
            include 'fotoU.php';
            break;
        case "fotoU2":
            include 'fotoU2.php';
            break;
        case "fotoU3":
            include 'fotoU3.php';
            break;
        case "fotoD":
            include 'fotoD.php';
            break;



    }
}
?>

