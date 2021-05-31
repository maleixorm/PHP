<?php
session_start();
if(!empty($_SESSION['id'])) {
  echo "<p>Olá, ". $_SESSION['nome'] ."! Seja bem-vindo!</p>";
  echo "<p><a href='logout.php'><button>Sair</button></a></p>";
} else {
  $_SESSION['msg'] = "<p style='color: darkred;'>Página restrita. Digite seu usuário e senha!</p>";
  header("Location: index.php");
}