<?php

$frutas = array("laranja", "abacaxi", "melancia");

print_r($frutas);
//comando print_r exibindo o array, mostra os indices e cada item no indice

//ARRAY BIDIMENSIONAL
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Ecosport";

echo "</br>";

echo $carros[0][3];

echo "</br>";

echo end($carros[1]);

echo "</br>";

//ARRAY DE PESSOAS

$pessoas = array();
array_push($pessoas, array( //array_push adiciona coisas no final do array
    'nome' => 'João',
    'idade'=> 20
));
array_push($pessoas, array( //array_push adiciona coisas no final do array
    'nome' => 'Glaucio',
    'idade'=> 25
));

print_r($pessoas[0]['nome']);

echo "</br>";

?>