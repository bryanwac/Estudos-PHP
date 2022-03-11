<?php
//PARAMETRO POR VALOR OU REFERENCIA


//VALOR
$a = 10;

function trocaValor($a){//passei por valor
    $a += 50;
    return $a;
};

echo trocaValor($a);
echo "</br>";
echo $a; //a var nao mudou o valor de 10, pq o escopo da função so existe na funcao, na altera a versao global
echo "</br>";

//REFERENCIA

//usando & ao lado do $ da variavel, trocamos a passagem de parametro de valor, por referencia, assim agora, referenciamos o local na memoria onde esta variavel está, ou seja , mudanças feitas nela afetarão no escopo global, visto que mudara o valor alocado no espaço de memoria diretamente

function trocaValora(&$a){//passei por referencia
    $a += 50;
    return $a;
};

echo $a;
 

?>