<?php
//tratamento de erro de login para que não apreça pro usuario
ini_set('display_errors',0);

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="login.css">

</head>
<body>

<h2>Login</h2>

<form action="/controle/controle_login.php" method="post">
  <div class="imgcontainer">
    <img src="logo.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="Usuario"><b>Usuario</b></label>
    <input type="text" placeholder="Digite seu usuario" name="usuario" required>

    <label for="psw"><b>Senha</b></label>
    <input type="Senha" placeholder="Digite sua senha" name="senha" required>
        
    <button type="submit">Entrar</button>
    <label>
      <input type="checkbox" checked="checked" name="Lembre-me"> Lembre-me 
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
  
      <button class="button"><a href="/CADASTRO-CLIENTES/">Novo cadastro</a></button>
  
      <button class="button"><a href="#">Esqueceu senha?</a></button>

   
  </div>
  <?php
  //mensagem de erro
    $erro = $_GET['erro'];
    echo $erro;

  ?>
</form>


</body>
</html>
