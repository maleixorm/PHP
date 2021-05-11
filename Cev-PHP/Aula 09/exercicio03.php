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
        $n1 = isset($_POST["n1"])?$_POST["n1"]:0;
        $n2 = isset($_POST["n2"])?$_POST["n2"]:0;
        $m = ($n1 + $n2) / 2;
        if ($m < 4) {
        	$r = "Reprovado";
        }
        elseif ($m >=4 and $m < 6) {
        	$r = "Em Recuperação";
        }
        else {
        	$r = "Aprovado";
        }
        echo "A média entre $n1 e $n2 é: $m";
        echo "<br>Situação do Aluno: $r";
    ?>
</div>
</body>
</html>
 