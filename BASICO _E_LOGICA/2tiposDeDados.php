<?php
//TIPOS DE DADOS
//DADOS PRIMITIVOS
$nome = "Bryan";                 //STRINGS
$site = 'www.bryanweb.com.br';

$ano = 1999;                     //NUMBER
$salario = 1500.99;              //FLOAT
$bloqueado = false;              //BOOLEAN
/////////////////////////////////////// 
//tipos compostos
$frutas = array("abacaxi", "laranja", "manga"); //cria array
$frutas [4]=("feijão");//adiciona coisa no array
echo $frutas [4];//exibe o array

$nascimento = new DateTime();

/////////////////////////////////////////
//tipo especial

//dado tipo resource
$arquivo = fopen("variaveis.php", "r"); // fopen = File Open comando pra abrir arquivos

//dado tipo null
$nulo = NULL; //variavel nula


?>