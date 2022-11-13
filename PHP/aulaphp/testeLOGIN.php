<!DOCTYPE HTML>
<html>

<?php
include "connection.php";
?>

 <main>
 <meta charset="UTF-8"> 
	<head>
  	<title>Chrysalis Login</title>
  <div style="text-align: center"><img src="https://i.ibb.co/VDC4G6T/logochrys.png" height="141" width="600"></div>
  </head>

  <body>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      
      div.center-form {
      position: relative;
      min-height: 100vh;
      }

      div.center-form > form {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translateY(-80%) translateX(-50%);
      } 
      
      html {
      background-color: #d6f0ff;
      }
        form {
        display: flex;
        justify-content: center;
        font-family: Roboto, Arial, sans-serif;
        font-size: 15px;
        background-color: #ffffff;
        border: 5px solid #ffffff;
        width: 400px;
        margin: 0 auto;
        
        }
      
        input[type=text], input[type=password] {
        width: 100%;
        padding: 16px 8px;
        margin: 8px 0;
        display: inside-block;
        border: 1px solid #ccc;
        box-sizing: border-box;

        }
        button {
        background-color: #2419e6;
        color: white;
        padding: 14px 0;
        margin: 10px 0;
        border: none;
        cursor: grabbing;
        width: 100%;
        }
        h1 {
        text-align:center;
        fone-size:18;
        }
        button:hover {
        opacity: 0.8;
        }
        .formcontainer {
        text-align: left;
        margin: 24px 50px 12px;

      }
        div.errorword{
        text-align: center;
        color: red;
        }

        .container {
        padding: 16px 0;
        text-align:left;
      
      }
        span.psw {
        float: right;
        padding-top: 0;
        padding-right: 15px;
      }
        /* Change styles for span on extra small screens */
        @media screen and (max-width: 300px) {
        span.psw {
        display: block;
        float: none;
      }   
    </style>
    
      <div class="center-form">
      <form method="post" action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);?>">
      <div class="formcontainer">
      <div class="container">
        <input type="text" placeholder="Usuário ou e-mail" name="email" required>
        <input type="password" placeholder="Senha" name="sen" required>
      </div>
      <button type="submit" name="botaoentrada">Entrar</button>
      <div class="container" style="background-color: #eee">
        <label style="padding-left: 15px">
        <input type="checkbox"  checked="checked" name="remember"> Lembrar senha
        </label>
        <span class="psw"><a href="#"> Esqueceu a senha?</a></span>
      </div>
      
      <?php
      //Verificar se o botão foi ativado, e usar a global POST para jogar os dados das caixas nas variáveis.
      if (isset ($_POST['botaoentrada'])){
        $email=$conn->real_escape_string ($_POST['email']);
        $senha=$conn->real_escape_string ($_POST['sen']);
      
      //caso o usuário ou senha não seja vazio, olhar no DB se existe;
        if ($email!="" && $senha!=""){
          $sql="SELECT COUNT(*) AS contador FROM gerenciamentos WHERE EMAIL='$email' AND SENHA='$senha';";
          $result=$conn->query($sql); //resultado da query, usando a instrução $sql como atributo (mandando a ordem para o db);
          $row=$result->fetch_array(); //criando um array de resultados após a pesquisa no db;
          $cont=$row['contador']; //pegando a contagem do array. Pode usar o index ou o nome. Nesse caso o nome foi usado;

            //caso exista, vá para home.php.
            if ($cont>0){
              $_SESSION ['uname']=$usuario; //pegando o nome da variável e criando a global SESSION com ele.
              header('location: home.php');
              } //redirecionando para o home.php.
            else{
              echo "<div class=\"errorword\">Usuário ou Senha Inválidos.</div>";
              }
        }
      }
      ?>
      
     </form>
    </div>
</main>

<footer>
  <style>
  .footer1 {
    position: fixed;
    font-family: Roboto, Arial, sans-serif;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: cyan;
    color: black;
    text-align: center;
    }
  </style>
<div class="footer1">
    <p>©2021. Chrysalis Team. All Rights Reserved.</p>

</div>
</footer>

</body>
</html>

