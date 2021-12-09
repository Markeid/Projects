<!DOCTYPE HTML>
<html>
 <head>
 </head>
 <body>
 <?php
$nome = $email = $website = $comentario =
$genero = "";
$nomeErro = $emailErro = $generoErro =
$websiteErro = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["nome"])) {
$nomeErro = "Nome é requerido";
} else {
$nome = test_input($_POST["nome"]);
if (!preg_match("/^[a-zA-Z ]*$/",$nome)) {
$nomeErro = "Somente letras e espaços";
}
}
if (empty($_POST["email"])) {
$emailErro = "e-mail é requerido";
} else {
$email = test_input($_POST["email"]);
if (!filter_var($email,
FILTER_VALIDATE_EMAIL)) {
$emailErro = "e-mail inválido";
}
}

if (empty($_POST["website"])) { $website = ""; }
else { $website = test_input($_POST["website"]);
if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-
a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-
9+&@#\/%=~_|]/i",$website)) {
$websiteErro = "URL inválida";} }
if (empty($_POST["comentario"])) {$comentario = "";
} else
{$comentario=test_input($_POST["comentario"]);}
if (empty($_POST["genero"]))
{$generoErro="Gênero é requerido"; }
else {$genero = test_input($_POST["genero"]); }
}
function test_input($dados) {
$dados = trim($dados);
$dados = stripslashes($dados);
$dados = htmlspecialchars($dados);
return $dados; }
?>

  <h2>Exemplo de formulário HTML validado</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Nome: <input type="text" name="nome" value="<?php echo $nome;?>"><span class="error"> * <?php echo $nomeErro;?></span><br>
   E-mail: <input type="text" name="email" value="<?php echo $email;?>"> <span class="error"> * <?php echo $emailErro;?></span><br>
   Website: <input type="text" name="website" value="<?php echo $website;?>"><span class="error"> <?php echo " $websiteErro";?></span><br><br>
   Comentário: <textarea name="comentario" rows="5" cols="40"><?php echo $comentario;?></textarea> <br>
   Gênero:
   <input type="radio" name="genero"<?php if (isset($genero) && $genero=="feminino") echo "checked='checked'";?>value="feminino">Feminino
   <input type="radio" name="genero"<?php if (isset($genero) && $genero=="masculino") echo "checked='checked'";?>value="masculino">Masculino
   <input type="radio" name="genero"<?php if (isset($genero) && $genero=="outro") echo "checked='checked'";?>value="outro">Outro
   <span class="error"> * <?php echo $generoErro;?></span><br>
   <input type="submit" name="submit" value="Enviar">
  </form>
 </body>
</html>