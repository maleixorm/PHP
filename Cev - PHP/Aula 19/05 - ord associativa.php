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
        print_r($v);
        asort($v);
        print_r($v);
        arsort($v);
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
 