Criação do DB Orientado a Objeto:

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	// Criando a conexão
	$conn = new mysqli($servername,
	$username, $password);
	// Verificando a conexão
	if ($conn->connect_error) {
		die("Falha na conexão: " . $conn-> connect_error);
	}
	// Criando o banco de dados
	$sql = "CREATE DATABASE MarcusSTK";
	if ($conn->query($sql) === TRUE) {
		echo "Banco de dados criado ok";
	} else {
		echo "Erro na criação do banco: " .
		$conn->error;
	}
	$conn->close();
?>