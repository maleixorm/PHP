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
    	$np = isset($_POST["np"])?$_POST["np"]:1;
    	$d = 0;
    	echo "<h2>Números Primos!</h2>";
        for ($c = 1; $c <= $np; $c++) {
        	if ($np % $c == 0) {
				$d++;
				echo "$c ";
        	}
        }
        echo "<br><br>O número $np tem $d divisores<br><br>";
        if ($d > 2) {
        		echo "$np não é um número primo!";
        	}	
        else {
        	echo "$np é um número primo!";
        }
    ?>
</div>
</body>
</html>
 