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
        $frase = "Gosto de estudar Matemática!!!";
        $nova = str_replace("Matemática", "PHP", $frase);
        print($nova);
    ?>
</div>
</body>
</html>
 