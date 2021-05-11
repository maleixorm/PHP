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
        $ano = $_GET["a"];
        $idade = 2021 - $ano;
        echo "Quem nasceu em $ano tem $idade anos de Idade!";
        $tipo = ($idade>=18 and $idade<65)?"Obrigatório":"Não Obrigatório";
        echo "<br> Seu voto é: $tipo";
    ?>
</div>
</body>
</html>
 