<!DOCTYPE html>
<html>
<body>
<h1>Array bidimensional</h1>
<?php
	$gibis = array (
		array("Quarteto Fantástico",22,18),
		array("X - Men",15,13),
		array("Demolidor",5,2),
		array("Hulk",17,15)
	);
	for ($linha = 0; $linha < 4; $linha++) {
		echo "<p><b>Linha número $linha</b></p>";
		echo "<ul>";
		for ($coluna = 0; $coluna < 3; $coluna++) {
			echo "<li>".$gibis[$linha][$coluna]."</li>";
		}
		echo "</ul>";
	}
?>
</body>
</html>