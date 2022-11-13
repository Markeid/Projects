<!DOCTYPE html>
<html>
<body>
<h1>Classificando pelo valor ascendente e descendente</h1>
	<?php
		$pessoasIdade=array("Giulia"=>"27","Syuri"=>"32","Himeka"=>"23");
		echo "Imprimindo sem classificar<br>";
		imprime($pessoasIdade);
		asort($pessoasIdade);
		echo "Classificação asort(), ascendente pela chave.<br>";
		imprime($pessoasIdade);
		arsort($pessoasIdade);
		echo "Classificação arsort(), descendente pela chave.<br>";
		imprime($pessoasIdade);
		function imprime(array $pessoasIdade){
			foreach($pessoasIdade as $pessoaIdade => $idade){
				echo "$pessoaIdade tem: $idade<br>";
			}
		echo"<br><br>";
		}
	?>
</body>
</html>