<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
	<div>
		<?php
			$atual = $_GET["aa"]; //Essa linha recebe a variavel aa por parametro
			echo "O ano atual é: " . $atual;
			echo "<br>O próximo ano é: " . ++$atual;
			echo "<br>O ano anterior é: " . ($atual - 2);
		?>
	</div>	
</body>
</html>