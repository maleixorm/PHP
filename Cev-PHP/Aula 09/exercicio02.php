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
       $a = isset($_POST["ano"])?$_POST["ano"]:1900;
       $i = date('Y') - $a;
       if ($i < 16) {
        	$v = "você não vota.";
        } 
        elseif (($i >= 16 and $i < 18) or ($i >= 65)) {
        		$v = "seu voto é opicional.";
        	} 
        else {
        		$v = "seu voto é obrigatório.";
        	}
        echo "<br> Com $i anos, $v";
    ?>
</div>
</body>
</html>
 