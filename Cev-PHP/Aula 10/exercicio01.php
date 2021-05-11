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
        $n = isset($_POST["num"])?$_POST["num"]:0;
        $op = isset($_POST["op"])?$_POST["op"]:1;
        switch ($op) {
        	case '1':
        		$r = $n * 2;
        		break;
        	
        	case '2':
        		$r = $n ^ 3;
        		break;
        	case '3':
        		$r = sqrt($n);
        		break;
        		
        }
        echo "O resultado da operação solicitada foi: <span class='foco'>$r</span>";
    ?>
    <br><a href="exercicio01.html">Voltar</a>
</div>
</body>
</html>
 