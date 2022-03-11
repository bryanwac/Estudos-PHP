<?php

//DateTime é melhor

$dt = new DateTime();
//new é um comando exclusivo para instanciar

$periodo = new DateInterval("P15D");
//cria um periodo que é um intervalo de datas
$dt->add($periodo);
//adiciona esse periodo extra em $dt que carrega minha date time

echo $dt->format("d/m/Y H:i:s");
// -> serve pra acessar um método
//passo o format atribuindo para dt o valor de data

?>