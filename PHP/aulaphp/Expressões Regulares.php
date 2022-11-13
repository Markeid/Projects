<!DOCTYPE html>
	<html>
		<body>
			<?php
				$texto1 = "Visite W3Schools";
				$padrao1 = "/w3SchOOls/i";
				$texto2 = "Onde digo digo digo Diogo";
				$padrao2 = "/digo/i";
				$texto3 = "O ano tem 300 dias";
				$padrao3 = "/300/i";
				echo "<h1>Usando preg_match()</h1><br>";
				echo "$texto1. Procurando: $padrao1<br>";
				echo "Encontrou: ".preg_match($padrao1,$texto1)." ocorrência.<br>";
				echo "<h1>Usando preg_match_all()</h1><br>";
				echo "$texto2. Procurando: $padrao2<br>";
				echo "Encontrou: ".preg_match_all($padrao2, $texto2)." ocorrências.<br>";
				echo "<h1>Usando preg_replace()</h1><br>";
				echo "$texto3. Substituindo $padrao3 por 365.<br>";
				echo "Depois de substituir: ".preg_replace($padrao3, '365', $texto3)."<br>";
			?>
		</body>
	</html>