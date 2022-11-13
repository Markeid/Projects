<!DOCTYPE html>
	<html>
	 <body>
	  <h1>Criando e exibindo um array</h1>
	  <?php
	   $herois = array ("Hulk", "Ms. Marvel", "Falcão");
	   echo "Eu gosto de ".$herois[0]." e ".$herois[2].".<br>";
	   $tamanhoArray = count($herois);
	   for($x=0; $x<$tamanhoArray; $x++){
	    echo "$herois[$x]<br>";
	   }
	  ?>
	 </body>
	</html>