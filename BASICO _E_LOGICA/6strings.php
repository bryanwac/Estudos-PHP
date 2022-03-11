<?php

$nome = "Bryan";
$nomeCompleto = "Bryan William";
$nome2 = 'William';

//$var_dump($nome,$nome2);

//Ao usar aspas simples '' na hora de chamar a var no echo por ex, ele entende como se TUDO dentro das aspas fossem um texto.
//Ao usar as aspas duplas "" o PHP verifica a string, para fazer algum tipo de diferenciação, fazendo uma busca nesse código.

echo 'ABC $nome';//PHP nao reconheceu a variavel
echo "</br>";
echo "ABC $nome"; //podemos ver que assim o PHP reconhece a var dentro do string
echo "</br>";
echo strtoupper($nome); 
echo "</br>";
//   strtoupper converte a var no parentese para Uppercase
echo strtolower($nome);
//   strtolower converte a var no parentese para LowerCase
echo "</br>";
echo ucwords($nome);//Primeira letra de cada palavra fica CAPS
echo "</br>";
echo ucfirst($nomeCompleto);//Primeira letra da 1ªPalavra fica CAPS
echo "</br>";
$empresa = "Hcode";

$empresa = str_replace("o","0", $empresa);
         //str_replace troca um indice da string por outro
         //o indice a ser trocado é definido primeiro
         //depois definimos qual caractere entrará no lugar
         //depois dizemos em qual variável isso vai acontecer
echo $empresa;

//////////////////////////////////////////////////////////////
//BUSCAS NAS STRINGS
echo "</br>";

$frase = "A repetição é mãe da retenção.";

$q = strpos($frase, "mãe");
// strpos encontra um indice ou elemento dentro de um string, neste caso procuramos a palavra mão dentro da $frase.
var_dump($q);
//o dump da var nos motrou que a palavra pesquisada começa no índice 17 da string
$texto = substr($frase, 0,$q);
//substr vai retornar parte de uma string, nesse caso ele vai procurar na var $frase, a partir do indice 0, o que foi entregue para a variavel $q

//  a função strlen() conta quantas letras em em um string especifico

?>