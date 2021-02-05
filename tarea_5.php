<!--Tarea semana 5
	Autor: Sergio Montecinos M.
 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tarea Semana 5</title>
</head>
<body>
	<form action="" method="post" accept-charset="utf-8">
		<input type="text" name="uno" pattern="[0-9]+">
		<br>
		<br>
		<input type="text" name="dos" pattern="[0-9]+">
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
		<button type="submit">calcular</button>
	</form>
<?php 

$uno = $_POST['uno'];
$dos = $_POST['dos'];
$opcion = $_POST['opcion']; 

if (!empty($uno) && !empty($dos)) {
	if (is_numeric($uno) && is_numeric($dos)) {
		switch ($opcion) {
		 	case '1':
		 		echo "la suma es: " . sumar($uno,$dos);
		 		break;
			case '2':
		 		echo "la potencia de los valores es: " . potencia($uno,$dos);
		 		break;
			case 3:
		 		echo "el resultado de la multiplicacion es: " . multiplicar($uno,$dos);
		 		break;
			case 4:
		 		echo "el resultado de la divicion es: " . dividir($uno,$dos);
		 		break; 	
		 	default:
		 		break;
		 }
	}
	else
	{
		echo "Debe ingresar solo numeros.";
	}
}
else{
	echo "Debe ingresar un valor valido";
}
 

function sumar($a,$b){
   return $a + $b;
}

function potencia($a,$b){
	return pow($a,$b);
}

function multiplicar($a,$b){
	return $a * $b;
}

function dividir($a,$b){
	return $a / $b;
}
	
 ?>
</body>
</html>