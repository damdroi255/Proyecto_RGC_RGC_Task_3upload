<?php
include 'cabecera.php';





$target_path = "img/"; 
$target_path = $target_path . basename( $_FILES['archivo-a-subir']['name']); 

echo "<div class='form-group img'><br><br><br><br><br>";

	if(move_uploaded_file($_FILES['archivo-a-subir']['tmp_name'], $target_path)) { 
		echo "El archivo ". basename( $_FILES['archivo-a-subir']['name'])." ha sido subido correctamente!"; 
	} else { 
		echo "Error al subir foto! Por favor intenta de nuevo."; 
	}

echo "<hr>";


//para borrar
$idf="203";
$jpg_borrar = "img/".$idf.".jpg";

if (is_file($jpg_borrar)){
	unlink($jpg_borrar);
	echo $idf." borrado satisfactorio.";
} else {
	echo "no existe ".$idf;
}

echo "<hr>";



echo("<input type='button' onclick='history.back()' name='Volver' value='Volver'>");




echo("</div>");
include 'pie.php';
?>


