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
        $op = isset($_POST["op"])?$_POST["op"]:1;
        echo "<h1>Tabuada de: $op</h1>";
        $c = 1;
        do {
        	$r = $op * $c;
        	echo "$op x $c = $r <br>";
        	$c++;

        } while ($c <= 9);
    ?>
    <p><a href="04 - index.html">Voltar</a></p>
</div>
</body>
</html>
 