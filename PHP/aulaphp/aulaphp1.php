<!DOCTYPE html>
<html>
<body>
	<h1>Funções Matemáticas</h1>
<?php
	echo "O valor de Pi é: " .pi()."<br>";
	$valores = array (0, 150, 30, 20, -8, -200);
	$minimo = min($valores);
	$maximo = max($valores);
	echo "Os valores do array são: | ";
	foreach ($valores as $valor) echo "$valor |";
	echo "<br>";
	echo "O valor minimo do array é: $minimo <br>"; 
	echo "O valor maximo do array é: $maximo <br>"; 
?>
</html>
</body>