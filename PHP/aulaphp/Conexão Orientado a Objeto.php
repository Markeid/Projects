Conexão Orientado a Objeto:

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	// Criando a conexão
	$conn = new mysqli($servername,
	$username, $password);

	// Verificando a conexão
	if ($conn->connect_error) {
		die("Falha na conexão: " .
		$conn->connect_error);
	}
	echo "Conexão efetuada";
?>
