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
       $frase = "Eu vou estudar PHP";
       $c = str_word_count($frase, 1);
       print_r($c);
       print_r(count($c));
    ?>
</div>
</body>
</html>
 