<?php
/* NORMALMENTE TEMOS AS VARS:
        $_POST
        $_NET
    que são VARIÁVEIS PRÉ DEFINIDAS, usadas normalmente em forms ou para entregar ou recuperar informações em um formulário.

    e temos tambem VARIÁVEIS DE AMBIENTE que tbm são pré definidas e são conhecidas como SUPER-GLOBAIS,por que podem ser acessadas de QUALQUER lugar do php pelo escopo delas */


$nome = (int)$_GET["a"];
//^^ ALTEREI o tipo da var. acima para int, definindo antes da declaração da variável

// var_dump($nome);

//LEMBRANDO QUE: VAR_DUMP MOSTRA O TIPO DA VARIAVEL E OQUE ELA CONTEM EM INDICES

/*ABAIXO SÃO ARRAYS SUPER GLOBAIS */

$ip = $_SERVER["REMOTE_ADDR"];//pega o ip do ambiente do usuário

$name = $_SERVER["SCRIPT_NAME"]; //pega o local onde o script está



echo $ip;
echo "</br>";
echo $name;

?>