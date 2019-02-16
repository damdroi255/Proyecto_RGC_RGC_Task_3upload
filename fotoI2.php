
<?php

	$target_path = "img/"; 
	$target_path = $target_path . basename( $_FILES['archivo-a-subir']['name']); 

		if(move_uploaded_file($_FILES['archivo-a-subir']['tmp_name'], $target_path)) { 
			echo "El archivo ". basename( $_FILES['archivo-a-subir']['name'])." ha sido subido correctamente!"; 
		} else { 
			echo "Error al subir foto! Por favor intenta de nuevo."; 
		}

	echo("<input type='button' onclick='window.history.go(-2);' name='Volver' value='Aceptar'>");


?>




