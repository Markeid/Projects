Criação do DB Procedural:

<?php
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	// Criando a conexão
	$conn = mysqli_connect
	($servername, $username, $password);
	// Verificando a conexão
	if (!$conn) {
		die("Falha na conexão: " .
		mysqli_connect_error());
	}
	// Criando o banco de dados
	$sql = "CREATE DATABASE MarcusMFK";
	if (mysqli_query($conn, $sql)) {
		echo "Banco de dados criado ok";
	} else {
		echo "Erro na criação do banco: " .
		mysqli_error($conn);
	}
mysqli_close($conn);
?>

