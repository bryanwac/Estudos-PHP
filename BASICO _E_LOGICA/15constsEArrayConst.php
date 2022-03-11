<?php
//define é a função que cria variaveis constantes, para criar a constante aqui preciso passar 2 parametros, o nome dela, e o seu valor

//VAR CONSTANTE
define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;
//ARRAY CONSTANTE
define("BANCO_DE_DADOS",[
    '127.0.0.1',
    'root',
    'password',
    'test'
],); //true//true faz a const virar CaseSensitive, mas nao é necessário

echo "</br>";

print_r(BANCO_DE_DADOS);

echo PHP_VERSION; // CONSTANTE INTERNA - PRE DEFINIDA

echo "</br>";

echo DIRECTORY_SEPARATOR; // CONSTANTE INTERNA - PRE DEFINIDA


?>