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
        	echo "<p>A soma vale $s</p>";
        }
       
        soma(2,5);
        soma(8,3);
        $x = 9;
        $y = 15;
        soma($x,$y);

    ?>
</div>
</body>
</html>
 