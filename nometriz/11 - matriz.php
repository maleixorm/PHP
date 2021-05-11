<?php

$tamanho = strlen($_POST['nome']);
$nome = str_split($_POST['nome']); // converte o nome que eh string para array (vetor)
$matriz = []; // inicializamos um vetor em branco. Uma matriz eh um vetor com varios vetores

for($linha = 0; $linha < $tamanho; $linha += 1) { // porque em dev na maioria das vezes comecamos em 0
    for($coluna = 0; $coluna < $tamanho; $coluna += 1) { // para cada linha, percorremos as colunas
        if($linha == $coluna) {
            $matriz[$linha][$coluna] = $nome[$linha]; // ou $coluna, tanto faz, so entra aqui quando forem igual mesmo
        } else {
            $matriz[$linha][$coluna] = '-'; // se nao for, preenche com -
        }

    }
}
// Novo for para imprimir o conteudo da matriz
for($nova_linha = 0; $nova_linha < $tamanho; $nova_linha +=1) {
    for($nova_coluna = 0; $nova_coluna < $tamanho; $nova_coluna += 1){
        echo $matriz[$nova_linha][$nova_coluna];
    }
    echo '<br>';
}
/*foreach ($matriz as $v1) {
	foreach ($v1 as $v2) {
		$x = $v2;
		print_r(wordwrap($x, $linha, "<br>\n", true)); 
	}
}*/


?>