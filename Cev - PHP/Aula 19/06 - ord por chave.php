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
        $v = array(2=>"a",5=>"j",0=>"m",3=>"x",4=>"k");
        print_r($v);
        ksort($v);
        print_r($v);
        krsort($v);
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
 