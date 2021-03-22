<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form action="" method="get" accept-charset="utf-8">
		
		<select name="opcion">
			<option value="0">Seleccione una opción</option>
			<option value="1">Conocer el promedio del curso</option>
			<option value="2">Conocer el Rut de la persona con mayor promedio</option>
			<option value="3">Conocer la cantidad de alumnos aprobados</option>
			<option value="4">Conocer la cantidad de alumnos reprobados</option>
			<option value="5">Conocer el porcentaje de reprobados</option>
			<option value="6">Conocer la cantidad de alumnos procesados</option>
		</select>
		<br>
		<br>
		<button type="submit">Enviar</button>
		<br>
	</form>
</body>
</html>

<?php
	if (isset($_GET['opcion'])) {
		
		define('NOTA_APROVADOS',4.0);

		$alumnos1  = array('rut' => '15707727','nota' => '6.5');
		$alumnos2  = array('rut' => '15707728','nota' => '6.6');
		$alumnos3  = array('rut' => '15707729','nota' => '6.7');
		$alumnos4  = array('rut' => '15707726','nota' => '3.8');
		$alumnos5  = array('rut' => '15707725','nota' => '4.0');
		$alumnos6  = array('rut' => '15707724','nota' => '6.4');
		$alumnos7  = array('rut' => '15707723','nota' => '6.3');
		$alumnos8  = array('rut' => '15707722','nota' => '6.2');
		$alumnos9  = array('rut' => '15707721','nota' => '6.1');
		$alumnos10 = array('rut' => '15707720','nota' => '7.0');
		$alumnos   = [];
		
		array_push($alumnos,$alumnos1);
		array_push($alumnos,$alumnos2);
		array_push($alumnos,$alumnos3);
		array_push($alumnos,$alumnos4);
		array_push($alumnos,$alumnos5);
		array_push($alumnos,$alumnos6);
		array_push($alumnos,$alumnos7);
		array_push($alumnos,$alumnos8);
		array_push($alumnos,$alumnos9);
		array_push($alumnos,$alumnos10);

		//print_r($alumnos);

		$opcion = $_GET['opcion'];

		function promedio($array){
			$suma = 0;
			foreach ($array as $key => $value) {
				$suma = $suma + $value['nota'];
			}
			$resultado = $suma / count($array);
			return $resultado;
		}

		function mayorPromedio($array){
			$mayor = 0;
			$rut = 0;
			foreach ($array as $key => $value) {
				if($value['nota'] > $mayor)
				{
					$mayor = $value['nota'];
					$rut = $value['rut'];
				}
			}			
			return $rut;
		}

		function aprobados($array){
			$aprobados = 0;
			foreach ($array as $key => $value) {
				if($value['nota'] >= NOTA_APROVADOS)
				{
					$aprobados++;
				}
			}			
			return $aprobados;
		}

		function reprobados($array){
			$reprobados = 0;
			foreach ($array as $key => $value) {
				if($value['nota'] < NOTA_APROVADOS)
				{
					$reprobados++;
				}
			}			
			return $reprobados;
		}

		function porcentaje_reprobados($array){
			$reprobados = 0;
			foreach ($array as $key => $value) {
				if($value['nota'] < NOTA_APROVADOS)
				{
					$reprobados++;
				}
			}
			$porcentaje = count($array) / $reprobados;			
			return $porcentaje;
		}

		//print_r($opcion);

		if ($opcion == 0) {
			echo "Debe eligir una opcion valida.";
		}

		if ($opcion == 1) {
			echo "El promedio del curso es: " . promedio($alumnos);
		}

		if ($opcion == 2) {
			echo "El rut del mayor promedio es: " . mayorPromedio($alumnos);
		}

		if ($opcion == 3) {
			echo "El total de alumnos aprobados son: " . aprobados($alumnos);
		}

		if ($opcion == 4) {
			echo "El total de alumnos reprobados son: " . reprobados($alumnos);
		}

		if ($opcion == 5) {
			echo "El porcentaje de alumnos reprobados es: " . porcentaje_reprobados($alumnos) . "%";
		}

		if ($opcion == 6) {
			echo "Cantidad de Alumnos procesados: " . count($alumnos);
		}		
	}	
?>