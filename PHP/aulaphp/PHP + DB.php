<!DOCTYPE HTML>
<html>
	<body>
<h1><p>Formulário + Banco de Dados</h1></p>
		<h2>Preencha o Formulário abaixo:</h2>
		<form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
		Nome:<input type="text" name="nometemp"<br></br>
		Sobrenome:<input type="text" name="sobretemp"<br></br>
		E-Mail:<input type="text" name="emtemp"<br></br>
		Gênero:
		<input type="radio" name="gentemp" value=feminino>Feminino
		<input type="radio" name="gentemp" value=masculino>Masculino
		<input type="radio" name="gentemp" value=outro>Outro
		<br><br>
		<input type="submit" name="submit" value="Enviar">
		<input type="submit" name="analisedb" value="Listar Cadastros">
	</form><br>
<?php
error_reporting(E_ALL ^ E_NOTICE);  
//inserindo os dados do formulário com $_POST;

if (isset($_POST['submit'])) {
	$name=$sobren=$email=$genero="";
	$name = $_POST['nometemp'];
	$sobren=$_POST['sobretemp'];
	$email=$_POST['emtemp'];
	$genero =$_POST ['gentemp'];
}

?>
<?php
//Definindo variáveis de conexão;
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
echo "<br>*Conexão MySQL efetuada.";
?>
<?php
//criação do banco de dados;
$sql = "CREATE DATABASE IF NOT EXISTS IWGPdb;";
if ($conn->query($sql) === TRUE) {
echo "<br>*Banco de dados IWGPdb criado.";
} else {
echo "Erro na criação da do Banco: " .
$conn->error;
}
$conn->close();
?>
<?php
//conectando com o Banco de Dados;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "IWGPdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Falha na conexão: " . mysqli_connect_error());
}
?>
<?php
//criando tabela;
$sql="CREATE TABLE IF NOT EXISTS meusconvidados(
id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(35) NOT NULL,
sobrenome VARCHAR(35) NOT NULL,
email VARCHAR(50),
genero VARCHAR (10),
dataregistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);";
if ($conn->query($sql) === TRUE) {
echo "<br>*Tabela meusconvidados Criada.";
} else {
echo "<br>Erro na criação da tabela: " .$conn->error;
}
?>
<?php
//Inserindo dados.
if (isset($name,$sobren,$email,$genero)===TRUE){
	$sql="INSERT INTO meusconvidados (`nome`,`sobrenome`,`email`,`genero`) VALUE (\"$name\",\"$sobren\",\"$email\",\"$genero\")";
	if ($conn->query($sql) === TRUE) {
echo "<br>*Registro adicionado com sucesso!";
}
}
?>

<?php
if (isset($_POST['analisedb'])) {
	$sql = "SELECT id, nome, sobrenome, email, genero, dataregistro FROM meusconvidados";
	$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table><tr><th>ID</th><th>Nome</th><th>Sobrenome</th><th>E-Mail</th><th>Gênero</th><th>Data Registro</th></tr>";
while($row = $result->fetch_assoc()) {
echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["sobrenome"]."</td><td>".$row["email"]."</td><td>".$row["genero"]."</td><td>".$row["dataregistro"]."</td></tr>";
}
echo "</table>";
	}
	}

?>

	</body>
</html>