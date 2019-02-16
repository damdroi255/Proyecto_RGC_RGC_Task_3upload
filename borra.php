	
	<hr>

		<?php
$valor="1.jpg";

echo "<img src='img/".$valor."' border='0' width='50' height='25'>"; 

?>

	<hr>



<form enctype="multipart/form-data" action="subir-archivos.php" method="POST"> 
	<input type="hidden" name="MAX_FILE_SIZE" value="250000" /> Elige el Archivo a Subir:
	<input name="archivo-a-subir" type="file" /><br />
	<input type="submit" value="Subir Archivo" />
</form>

	
	
	
	<hr>


		<?php
			if (isset($_GET["descripcion"])) {
				$descripcion = $_GET["descripcion"];
			}else{
				$descripcion = "sin valor";
			}

			if (isset($_GET["fecha"])) {
				$fecha = $_GET["fecha"];
			}else{
				$fecha = "sin valor";
			}
		?>

		<div class="well">
			<form role="form" method="get">
				<div class="form-group descripcion">
					<label class="control-label" for="descripcion">descripcion:</label>
					<input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $descripcion?>"/>
				</div>
				<div class="form-group fecha">
					<label class="control-label" for="fecha">fecha:</label>
					<input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $fecha?>"/>
				</div>
				<input type="hidden" name="opcion" value="borra">
				<button type="submit" class="btn btn-default">Enviar</button>
			</form>
		</div>


		<?php
			for ($i=1;$i<=10;$i++){
				echo "cosa ".$i." ".$descripcion." - ".$fecha."<br>";
			}
		?>



<br><input id="date" type="text">text
<br><input id="date" type="password">password
<br><input id="date" type="submit">submit
<br><input id="date" type="reset">reset
<br><input id="date" type="radio">radio
<br><input id="date" type="checkbox">checkbox
<br><input id "date" type="button" onclick="alert('Hello World!')" value="Click Me!">button
<br><input id="date" type="color">color
<br><input id="date" type="datetime-local">datetime-local
<br><input id="date" type="email">email
<br><input id="date" type="file">file
<br><input id="date" type="month">month
<br><input id="date" type="number">number
<br><input id="date" type="number" name="points" min="0" max="100" step="10" value="30">number
<br><input id="date" type="range">range
<br><input id="date" type="search" name="googlesearch">search
<br><input id="date" type="time">time
<br><input id="date" type="url">url
<br><input id="date" type="week">week






		<hr>
				<label> label
				<input type="text" name="">
			<hr>
				<select name="">
					<option value="a">A
					<option value="b" selected>B
					<option value="c">C
				</select>
			<hr>
				<input type="radio" name="radioA">A
				<input type="radio" name="radioA">B
				<input type="radio" name="radioA">C
			<hr>
				<input type="checkbox" name="">
			<hr>
				<textarea name="" rows="" cols=""></textarea>
			<hr>
				<input type="reset">
			<hr>
				<input type="submit">
			<hr>
				<input type="password" name="">
			<hr>
				<input type="hidden" name="">
			<hr>
				<input type="image" src="">
			<hr>
				<input type="button" value="miBoton" onclick="">
		<hr>








	<hr>  