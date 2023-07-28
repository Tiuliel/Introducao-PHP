<?php

$preco = readline ("Qual o valor do produto? ");
if($preco >= 1000 && $preco <=1500){
	$resultado = "\nO preço: ".$preco." Esta no valor indicado e terá desconto de 10% ";
}else{
	$resultado = "\nO preço: ".$preco." O preço está fora do intervalo indicado, portanto terá um desconto 5%";
}
echo PHP_EOL;
echo $resultado;