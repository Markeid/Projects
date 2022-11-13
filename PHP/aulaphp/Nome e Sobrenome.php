<!DOCTYPE html>

	<html>
		<body>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				Name: <input type="text" name="fname">
				Outro nome: <input type="text" name="outro">
				<input type="submit" value="Enviar">
			</form>
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$nome=$_REQUEST['fname'];
					$sobrenome=$_REQUEST['outro'];
					if (empty($nome)) {
						echo "Nome está vazio";
					} else {
						echo $nome." ".$sobrenome;
					}
				}
			?>
		</body>
	</html>