<!DOCTYPE html>
<html>
<body>
<h1>Classificando pela chave ascendente e descendente</h1>
	<?php
		$pessoasIdade=array("Utami"=>"22","Momo"=>"20","Azumi"=>"18");
		echo "Imprimindo sem classificar<br>";
		imprime($pessoasIdade);
		ksort($pessoasIdade);
		echo "Classificação ksort(), ascendente pela chave.<br>";
		imprime($pessoasIdade);
		krsort($pessoasIdade);
		echo "Classificação krsort(), descendente pela chave.<br>";
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