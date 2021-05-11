<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Nometriz</title>
</head>
<body>
<div>
    <pre>
    <?php
    	$s = strtoupper(isset($_POST["nome"])?$_POST["nome"]:"Vazio");
        $p = utf8_decode(str_replace(" ", "", $s));
        $t = strlen($p);
    	$v = str_split($p);	
        $matriz = [];
    	for ($i=0; $i < $t ; $i++) { 
    		for ($j=0; $j < $t ; $j++) { 
    			if ($i == $j) {
    				$matriz[$i][$j]= $v[$i];
    				
    			} else {
    				$matriz[$i][$j] = "-";
    			}
    		}
    		
    	}
        echo "<br>";
        for ($k=0; $k < $t; $k++) { 
           for ($l=0; $l < $t; $l++) { 
               echo $matriz[$k][$l];
           }
           echo "<br>";
        }
    ?>
    </pre>
    <p><a href="index.html">Voltar</a></p>
</div>
</body>
</html>
 