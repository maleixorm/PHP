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
        for ($i=1; $i <= 10 ; $i++) { 
        	echo "$i ";
        };

        echo "<br>";
        
        for ($c=10; $c >= 1 ; $c--) { 
        	echo "$c ";
        };

        echo "<br>";
        
        for ($d=0; $d <= 50 ; $d+=5) { 
        	echo "$d ";
        };

        echo "<br>";
        
        for ($a=20; $a >= 0 ; $a--) { 
        	echo "$a ";
        };
    ?>
</div>
</body>
</html>
 