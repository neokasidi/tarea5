<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form action="" method="post" accept-charset="utf-8">
		<input type="text" name="campoUno">
		<br>
		<br>
		<input type="text" name="CampoDos">
		<br>
		<br>
		<select name="opcion">
			<option value="1">sumar</option>
			<option value="2">potencia</option>
			<option value="3">multiplicar</option>
			<option value="4">dividir</option>
		</select>
		<br>
		<br>
		<button type="submit">Enviar</button>
	</form>
</body>
</html>

<?php 
	
	$uno = isset($_POST['campoUno']) ;
	$dos = isset($_POST['CampoDos']);
	$opcion = isset($_POST['opcion']);

	if ($opcion == 1) {
		echo "El resultado es: " . sumar($uno,$dos);
	}

	if ($opcion == 2) {
		echo "El resultado es: " . potencia($uno,$dos);
	}

	if ($opcion == 3) {
		echo "El resultado es: " . multiplicar($uno,$dos);
	}
	if ($opcion == 4) {
		echo "El resultado es: " . dividir($uno,$dos);
	}

	function sumar($a,$b){
   $resultado = $a + $b;
   return $resultado;
}

function potencia($a,$b){
	$resultado = pow($a,$b);
	return $resultado;
}

function multiplicar($a,$b){
	$resultado = $a * $b;
	return $resultado;
}

function dividir($a,$b){
	$resultado = $a / $b;
	return $resultado;
}

?>