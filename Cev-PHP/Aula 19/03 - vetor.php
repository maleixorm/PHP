<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<pre>
    <?php
        $v = array("a","j","m","x","k");
        array_unshift($v, "o");
        print_r($v);
        array_shift($v);
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
 