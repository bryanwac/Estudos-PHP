<?php

//   IF

$qualSuaIdade = 22;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;


if( $qualSuaIdade < $idadeCrianca ){
    echo "Criança";
}else if($qualSuaIdade < $idadeMaior){
    echo "Adolescente";
}else if($qualSuaIdade <br $idadeMelhor){
    echo "Adulto.";
}else{
    echo "Idoso";
}

echo "</br>";

//OPERADOR TERNÁRIO
echo($qualSuaIdade < $idadeMaior)?"Menor de Idade":"Maior de idade";
/* faz a mesma coisa do IF, a interrogação ? pergunta se o parametro 
de compração é verdadeiro, se for, retorna o primeiro string, o dois 
pontos : indica oque sera retornado caso a afirmação no parametro seja
diferente, ou seja, se sua idade for menor que idade maior, retore 
que vc é menor de idade, senão for, retorne que é maior de idade.*/

?>