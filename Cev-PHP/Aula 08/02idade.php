<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $nome = $_POST["nome"];
        $anonasc = $_POST["ano"];
        $sexo = $_POST["sexo"];
        $idade = date("Y") - $anonasc;
        echo "Nome: $nome";
        echo "<br> Idade: $idade anos.";
        echo "<br> Sexo: $sexo";
    ?>
    <br>
    <a href="02-exercicio.html">Voltar</a>
</div>
</body>
</html>
 