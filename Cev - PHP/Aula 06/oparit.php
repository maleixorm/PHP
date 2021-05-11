<?php
	$v1 = $_GET["x"];
	$v2 = $_GET["y"];
	$sm = ($v1 + $v2) / 2;
	echo "<h2>Valores Recebidos: $v1 e $v2 </h2>";
	echo "A soma vale " . ($v1 + $v2);
	echo "<br>A subtração vale " . ($v1 - $v2);
	echo "<br>A multiplicação vale " . ($v1 * $v2);
	echo "<br>A divisão vale " . ($v1 / $v2);
	echo "<br>O módulo de $v1 e $v2 é " . ($v1 % $v2);
	echo "<br>A média vale $sm";
?>

<?php
	$v1 = $_GET["x"];
	$v2 = $_GET["y"];
	echo "<h2>Valores Recebidos: $v1 e $v2 </h2>";
	echo "O valor absoluto de $v2 é " . abs($v2);
	echo "<br>O valor de $v1<sup>$v2</sup> é " . pow($v1, $v2);
	echo "<br>A raiz de $v1 é " . sqrt($v1);
	echo "<br>O valor de $v2 arredondado é " . round($v2); //ceil arredonda pra cima e floor arredonda pra baixo
	echo "<br>A parte inteira de $v2 é " . intval($v2);
	echo "<br>O valor de $v1 em moeda é R$ " . number_format($v1,2, ",", ".");
?>
	