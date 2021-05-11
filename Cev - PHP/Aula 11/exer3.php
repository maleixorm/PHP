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
        $a = isset($_POST["a"])?$_POST["a"]:0;
        $b = isset($_POST["b"])?$_POST["b"]:0;
        $op = isset($_POST["op"])?$_POST["op"]:1;
        switch ($op) {
        	case '1':
        		if ($a < $b) {
					While ($a <= $b) {
        			echo $a . "<br>";
        			$a++;
        			}
        		} else {
        			While ($a >= $b) {
        			echo $a . "<br>";
        			$a--;
        		};
        		};
        		break;
        	case '2':
        		if ($a < $b) {
					While ($a <= $b) {
        			echo $a . "<br>";
        			$a += 2;
        			}
        		} else {
        			While ($a >= $b) {
        			echo $a . "<br>";
        			$a -= 2;
				};
        		};
        		break;
        	case '3':
        		if ($a < $b) {
					While ($a <= $b) {
        			echo $a . "<br>";
        			$a += 3;
        			}
        		} else {
        			While ($a >= $b) {
        			echo $a . "<br>";
        			$a -= 3;
        		};
        		};
        		break;
        	case '4':
        		if ($a < $b) {
					While ($a <= $b) {
        			echo $a . "<br>";
        			$a += 4;
        			}
        		} else {
        			While ($a >= $b) {
        			echo $a . "<br>";
        			$a -= 4;
        		};
        		};
        		break;
        	case '5':
        		if ($a < $b) {
					While ($a <= $b) {
        			echo $a . "<br>";
        			$a += 5;
        			}
        		} else {
        			While ($a >= $b) {
        			echo $a . "<br>";
        			$a -= 5;
        		};
        		};
        		break;
        		
        }
    ?>
</div>
</body>
</html>
 