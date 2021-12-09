<!DOCTYPE html>
	<html>
	 <body>
	  <h1>Array associativo</h1>
	  <?php
	   $pessoas = array ("Tam"=>"32", "Mina"=>"33", "Unagi"=>"31");
	   echo "Mina tem " . $pessoas['Mina'] . " anos.<br>";
	   foreach($pessoas as $pessoa => $idade){
	    echo "A chave = '$pessoa' tem o valor = '$idade'<br>";
	   }
	  ?>
	 </body>
	</html>