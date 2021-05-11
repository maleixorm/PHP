<!DOCTYPE html>
<html>
<head>
	<?php
		$txt = isset($_POST["t"])?$_POST["t"]:"Sem texto";
		$tam = isset($_POST["tam"])?$_POST["tam"]:"12pt";
		$cor = isset($_POST["cor"])?$_POST["cor"]:"#0b132b";
	?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
	  span.texto {
	  	font-size: <?php echo $tam; ?>;
	  	color: <?php echo $cor; ?>;
	  }
  </style>
</head>
<body>
<div>
    <?php
        echo "<span class='texto'>$txt</span>";
    ?>
    <br><br>
    <a href="03-exercicio.html">Voltar</a>
</div>
</body>
</html>
 