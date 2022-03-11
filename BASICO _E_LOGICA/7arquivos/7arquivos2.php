<?php
/*
REALIZANDO UM INCLUDE NO PHP, TENHO UMA FUNÇÃO PRONTA EM OUTRO
DOCUMENTO, E ESTOU INCLUINDO ESTA FUNÇÃO AQUI NESSE ARQUIVO
PARA NAO TER QUE CRIAR A FUNÇÃO NOVAMENTE.
*/
//include "7arquivos.php"; //inclui o arquivo que tem a função

require "7arquivos.php";
// OU
// require_once "7arquivos.php";
// require_once faz com que, caso o arquivo tenha sido require uma vez, ele ignore a segunda chamada pro mesmo arquivo


/* A DIFERENÇA ENTRE INCLUDE E REQUIRE, É QUE O REQUIRE EXIGE
QUE O ARQUIVO EXISTA E ESTEJA FUNFANDO CORRETAMENTE, CASO NAO ESTEJA ELE GERA UM ERRO FATAL, O INCLUDE TEM MAIS RECURSOS COMO O INCLUDE PATH PODENDO POR EX, PEGAR ARQUIVOS POR PADRÃO DE UM ARQ FUNCOES.PHP*/
//SE NAO FOR USAR OS RECURSOS ACIMA, É MELHOR USAR O REQUIRE, PORQUE ELE EVITA QUE TENHAM ERROS FATAIS NO CÓDIGO, VISTO QUE O ARQUIVO PRECISA EXISTIR E FUNCIONAR BEM

$resultado = somar(10,20); //chamei a função do oto arquivo

echo $resultado; // funcionou :)



?>