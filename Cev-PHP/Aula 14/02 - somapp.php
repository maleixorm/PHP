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
        function soma($a,$b) {
        	$s = $a + $b;
        	return $s;
        }
       
        $x = soma(2,5);
        $y = soma(8,3);
        echo "$x e $y";
        

    ?>
</div>
</body>
</html>
 