<?php

//OPERADORES DE ATRIBUIÇÃO

$nome = "Bryan"; // operador de atribuição
echo $nome . " mais alguma coisa </br>"; // operador de concatenação

$nome .= "treinamentos</br>";
//igual ao JS uso o .= pra juntar 2 operadores, significa que a minha var nome agora vai ter o valor dela msm definido pelo igual, porem concatenado com o string treinamentos;
echo $nome;


$valorTotal = 0;

$valorTotal += 100;
$valorTotal += 25;

$valorTotal *= .9; //desconto em porcentagem no valor total

echo $valorTotal;

//OPERADORES ARITMÉTICOS

/* 
    +   soma
    -   subtração
    *   mult.
    /   divisão
    %   resto
    **  potenciação

*/

//OPERADORES DE COMPARAÇÃO

/*
    =   ATRIBUIÇÃO
    ==  comparação de valor
    === COMPARA VALOR E TIPO
    !=  diferente de
    !== COMPARA SE O TIPO É DIFERENTE
    >   maior que
    <   menor que
    >=  maior ou igual
    <=  menor ou igual    
     
 */
/* 
    OPERADOR SPACESHIP

    X  <=>  Y  se X for maior que Y retorna 1
               se Y for maior que X retorna -1
               se forem iguais retorna 0
    
    
    OPERADOR NULL COALESING

    $a = NULL;
    $b = NULL;
    $c = 10;

    echo $a ?? $b ?? $c;
    exp: mostre a, se a for nulo, mostre b, se b for nulo mostre c


    INCREMENTO E DECREMENTO

    ++
    --
*/


?>