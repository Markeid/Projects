<?php declare(strict_types=1);?>
<!DOCTYPE html>
	<html>
		<body>
		 <h1>Declarando tipo de retorno (int):</h1>
		 <?php
		  function somaFloats(float $a, float $b) : int {
		   return (int)($a + $b);
		  }
		  echo somaFloats(7.5, 45.2);
		 ?>
	</body>
 </html>