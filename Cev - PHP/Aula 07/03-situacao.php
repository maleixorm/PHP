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
        $nota1 = $_GET["a"];
        $nota2 = $_GET["b"];
        $m = ($nota1 + $nota2) / 2;
        echo "A média entra $nota1 e $nota2 é: $m";
        echo "<br> O Aluno foi: ". (($m < 6)?"REPROVADO":"APROVADO");
    ?>
</div>
</body>
</html>
 