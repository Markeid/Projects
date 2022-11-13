Conexão Procedural:

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	// Criando a conexão
	$conn = mysqli_connect($servername,
$username, $password);
	// Verificando a conexão
	if (!$conn) {
		die("Falha na conexão: " .
mysqli_connect_error());
	}
	echo "Conexão efetuada com sucesso.";
?>