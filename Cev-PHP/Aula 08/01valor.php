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
        $v = $_POST["n"];
        $rq = sqrt($v);
        echo "Você digitou: $v";
        echo "<br> A raiz quadrada de $v é: " . number_format($rq,2);
    ?>
    <br>
    <a href="01-exercicio.html">Voltar</a>
</div>
</body>
</html>
 