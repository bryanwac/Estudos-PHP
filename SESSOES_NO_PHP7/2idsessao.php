<?php

//para recuperar uma sessão anterior faço:
//session_id(PASSO O NUMERO DA SESSAO A SER RECUPERADA AQUI)

require_once("config.php");

echo "ESSE É O ID DA SESSÃO ATUAL: ". session_id();
//session_id() é a função que mostra o ID da sessão ativa, é um valor unico, que nunca vai se repetir, porque é unico
echo "</br>";

session_regenerate_id();
//função que gera um id de sessão diferente do anterior
echo "</br>";

var_dump($_SESSION);

//NÃO É LEGAL MOSTRAR O SESSION ID NO SITE
//ALGUEM PODE PEGAR SEU ID E ASSUMIR SUA SESSÃO

?>