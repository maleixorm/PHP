<?php 
  session_start();
  ob_start();
  $btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
  if($btnCadUsuario) {
    include_once 'conexao.php';
    $dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $erro = false;

    $dados_st = array_map('strip_tags', $dados_rc);
    $dados = array_map('trim', $dados_st);

    if(in_array('', $dados)) {
      $erro = true;
      $_SESSION['msg'] = "<p style='color: darkred;'>Necessário preencher todos os campos do formulário!</p>";
    } elseif((strlen($dados['senha'])) < 8) {
      $erro = true;
      $_SESSION['msg'] = "<p style='color: darkred;'>A senha deve ter no mínimo 8 caracteres!</p>";
    } elseif(stristr($dados['senha'], "'")) {
      $erro = true;
      $_SESSION['msg'] = "<p style='color: darkred;'>Caracter (') inválido!</p>";
    } else {
      $resul_user = "SELECT id FROM usuarios WHERE usuario='" .$dados['usuario']."'";
      $resultado_user = mysqli_query($conn, $resul_user);
      if(($resultado_user) AND ($resultado_user->num_rows != 0)) {
        $erro = true;
        $_SESSION['msg'] = "<p style='color: darkred;'>Usuário já cadastrado!</p>";
      }

      $resul_user = "SELECT id FROM usuarios WHERE email='" .$dados['email']."'";
      $resultado_user = mysqli_query($conn, $resul_user);
      if(($resultado_user) AND ($resultado_user->num_rows != 0)) {
        $erro = true;
        $_SESSION['msg'] = "<p style='color: darkred;'>E-mail já cadastrado!</p>";
      }
    }


    if(!$erro) {
        // var_dump($dados);
      $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

      $result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
        '".$dados['nome']."',
        '".$dados['email']."',
        '".$dados['usuario']."',
        '".$dados['senha']."'
      )";
      $resultado_usuario = mysqli_query($conn, $result_usuario);
      if(mysqli_insert_id($conn)) {
        $_SESSION['msgcad'] = "<p style='color: green;'>Usuário cadastrado com sucesso!</p>";
        header("Location: index.php");
      } else {
        $_SESSION['msgcad'] = "<p style='color: darkred;'>Erro ao cadastrar usuário!</p>";
      }
    }
    
  } 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Login - Cadastrar Usuário</title>
</head>
<body>
  <h1>Cadastro</h1>
  <?php
    if(isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
      unset ($_SESSION['msg']);
    }
  ?>
  <form action="" method="POST">
    <label for="">Nome: </label>
    <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
    
    <label for="">E-mail: </label>
    <input type="email" name="email" placeholder="Digite o e-mail"><br><br>

    <label for="">Usuário: </label>
    <input type="text" name="usuario" placeholder="Digite o usuário"><br><br>

    <label for="">Senha: </label>
    <input type="password" name="senha" placeholder="Digite a senha"><br><br>

    <input type="submit" name="btnCadUsuario" value="Cadastrar">

  </form>
  
  <h4>Lembrou? Clique abaixo para logar!</h4>
  <a href="index.php">Logar</a>
</body>
</html>