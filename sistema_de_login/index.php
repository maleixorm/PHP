<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Login</title>
</head>
<body>
  <h1>Área restrita</h1>
  <?php
    if(isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
      unset ($_SESSION['msg']);
    }
    if(isset($_SESSION['msgcad'])) {
      echo $_SESSION['msgcad'];
      unset ($_SESSION['msgcad']);
    }
  ?>
  <form action="valida.php" method="POST">
    <label for="">Usuário: </label>
    <input type="text" name="usuario" id="usuario" placeholder="Digite o nome de usuario"><br><br>
    
    <label for="">Senha: </label>
    <input type="password" name="senha" id="senha" placeholder="Digite a senha"><br><br>

    <input type="submit" name="btnLogin" value="Acessar">

  </form>
  
  <h4>Ainda não possui conta? Clique abaixo para se cadastrar!</h4>
  <a href="cadastrar.php">Cadastrar</a>
</body>
</html>