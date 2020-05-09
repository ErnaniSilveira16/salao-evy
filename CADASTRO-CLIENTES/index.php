<?php
session_start();

if (!$_SESSION['usuario'] ){
    header('Location:/Login/');
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link   rel="stylesheet"  href="cadastro-cliente.css">
</head>
<body>

<form action="/CONTROLE/controle_cadastro.php"method="POST">
  <div class="container">
    <h1>Registar</h1>
    <p>Por favor, preencha este formulário para criar uma conta.</p>
    <hr>

    <label for="usuario"><b>usuario</b></label>
    <input type="text" placeholder="digite um usuario" name="usuario" required>

    <label for="senha"><b>senha</b></label>
    <input type="password" placeholder="digite sua senha" name="senha" required>

    <label for="repita-senha"><b>Repita sua senha</b></label>
    <input type="password" placeholder="repita sua senha" name="repita-senha" required>
    <hr>
    

    <button type="submit" class="cadastrarbtn">Cadastrar</button>
  </div>
  
  <div class="container entrar">
    <p>Você já tem uma conta? <a href="/LOGIN/">Entrar</a>.</p>
  </div>
</form>

</body>
</html>