<!DOCTYPE html>
<html>
<body>
<h1>Classificando elementos de um array</h1>
<?php
	$gibis = array ("Guardiões da Galáxia","Hulk","Capitã Marvel","Campeões");
	echo "Ordem original:<br>";
	imprime($gibis);
	sort($gibis);
	echo "Classificado em ordem ascendente:<br>";
	imprime($gibis);
	rsort($gibis);
	echo "Classificado em ordem descendente:<br>";
	imprime($gibis);
	function imprime(array $gibis){
		foreach($gibis as $gibi){
			echo "$gibi, ";
		}
	echo"<br><br>";
	}
?>
</body>
</html>