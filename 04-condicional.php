<?php
// 04-condicional

/*Protótipo de Chatbot*/
echo "\n== chatbot da empresa Biribinha == \n";
echo "Opções válidas: \n\n";
echo "1 - Informação\n";
echo "2 - Reclamações\n";
echo "3 - Elogios\n";
echo "4 - Status";

echo PHP_EOL;
$opcao = readline("Digite uma opção: ");

// Condicional encadeada
if($opcao == 1){
	$resultado = "Legal, o que deseja saber?";
} elseif($opcao == 2){
	$resultado = "Puxa, que pena... O que houve?";
}elseif($opcao == 3){
	$resultado = "Bacaba! pode falar :";
}elseif($opcao == 4){
	$resultado = "Ok, um momento enquanto verifico... :";
}else {
	$resultado = "Lascou, vou chmar a Valeska";
}
echo PHP_EOL;

//saída de dados
echo $resultado;