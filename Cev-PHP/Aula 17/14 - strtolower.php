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
        $nome = "Marcos Aleixo";
        $n = strtolower($nome);
        $m = strtoupper($nome);
        echo "Seu nome é $n<br>";
        echo "Seu nome é $m";
    ?>
</div>
</body>
</html>
 