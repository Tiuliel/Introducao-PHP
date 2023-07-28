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
 switch($opcao){
	case 1:
	$resultado = "Legal, o que deseja saber?";
	 break;
    case 2:
	$resultado = "Puxa, que pena... O que houve?";
	 break;
    case 3:
	$resultado = "Bacaba! pode falar :";
	 break;
    case 4:
	$resultado = "Ok, um momento enquanto verifico... :";
	break;
 default: 
	$resultado = "Lascou, vou chmar a Valeska";
	break;
}
echo PHP_EOL;

//saída de dados
echo $resultado;