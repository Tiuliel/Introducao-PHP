<?php
// 02-caculo-de-desconto

//versão 1
//entrada
//echo "Informe o produto:";
//$produto = readline ();

//Versão 2
$produto = readline ("informe o produto: ");
$precoInicial = readline("preço inicial: ");
$desconto = readline("Desconto em reais: ");

//processamento
$precoFinal = $precoInicial - $desconto;

//Saída
echo "Preço final: ".$precoFinal;

?>