<?php

$usuario = 'Marcos';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segurança no PHP</title>
</head>
<body>
<input type="text" name="<?php echo addslashes($usuario) ?>" id="">

<!--
    addslashes = adiciona barras invertidas
    htmlentities = adiciona entidades no HTML
    htmlspecialchars = adiciona caracteres especiais no HTML
-->
</body>
</html>
