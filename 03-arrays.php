<?php
// 03-arrays
/* Objetivos: como declarar, atribuir 
e acessar dados de vetores.*/

// Declaração do array (OPCIONAL)
$pessoas = []; // ou $pessoas = array()

// processo de atribuição de dados
//$pessoas[0] = "Jon Oliva";
//$pessoas[1] = "David Gilmour";
//$pessoas[2] = "Ozzy Osbourne";

$pessoas[0] = readline ("informe o nome da primeira pessoa: "); 
$pessoas[1] = readline ("informe o nome da segunda pessoa: ");
$pessoas[2] = readline ("informe o nome da terceira pessoa: ");

//Saída dos dados
echo "\nPrimeira pessoa: ".$pessoas[0];
echo "\nSegunda pessoa: ".$pessoas[1];
echo "\nTerceira pessoa: ".$pessoas[2];

echo PHP_EOL;

echo "Primeira pessoa: ".$pessoas[0].PHP_EOL;
echo "Segunda pessoa: ".$pessoas[1].PHP_EOL;
echo "Terceira pessoa: ".$pessoas[2].PHP_EOL;

/*lembrete: use \n (dentro da string)para criar
"quebras de linha" ou a constante PHP_OEL*/

