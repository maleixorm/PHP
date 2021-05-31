<?php

session_start();
unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email']);
$_SESSION['msg'] = "<p style='color: darkblue;'>Logout efetuado com sucesso!</p>";
 echo "<p style='color: green;'>Logout efetuado!</p>";
header("refresh:3;url=index.php");