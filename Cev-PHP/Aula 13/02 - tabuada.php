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
    	echo "<h1>Tabuada de $op</h1>";
        
        for ($i=1; $i < 10 ; $i++) { 
        	$r = $op * $i;
        	echo "$op x $i = $r<br>";
        }
    ?>
    <p><a href="02 - index.html">Voltar</a></p>
</div>
</body>
</html>
 