<?php

	$operador1 = $_POST['operador1'];
	$operador2 = $_POST['operador2'];
	$operacion = $_POST['operacion'];

	if(empty($operador1) || empty($operador2)){
		echo "Falta un dato";
	} else{
		if($operacion == 1){
			echo "La suma de los Numeros ". $operador1 . " + " . $operador2 . " = " . ($operador1 + $operador2);
		}
		if($operacion == 2){
			echo "La resta de los Numeros ". $operador1 . " - " . $operador2 . " = " . ($operador1 - $operador2);
		}
		if($operacion == 3){
			echo "La multiplicacion de los Numeros ". $operador1 . " * " . $operador2 . " = " . ($operador1 * $operador2);
		}
		if($operacion == 4){
			echo "La raiz cuadrada de los Numeros ". $operador1 . " / " . $operador2 . " = " . ($operador1 / $operador2);
		}
		if($operacion == 5){
			echo "La division de los Numeros ". $operador1 . " % " . $operador2 . " = " . ($operador1 % $operador2);
		}
	}

?>