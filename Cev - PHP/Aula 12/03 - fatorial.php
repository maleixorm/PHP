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
        $a = isset($_POST["val"])?$_POST["val"]:1;
        echo "<h1>Calculando o fatorial de $a</h1><br>";
        $c = $a;
        $fat = 1;
        do {
        	$fat = $fat * $c;
        	$c--;

        } while ($c >= 1);
        echo "<h2>$a ! = $fat";
    ?>
    <br><br><a href="03 - index.html">Voltar</a>
</div>
</body>
</html>
 