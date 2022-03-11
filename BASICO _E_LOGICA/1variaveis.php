<?php

//criação de variaveis
// PHP é fracamente tipada, ou seja, nao preciso definir o tipo da var na declaração, vai depender do que tem dentro da variável
// $nome = "Hcode";


// echo $nome; // exibe texto na tela, igual console.log
// var_dump($nome);// exibe o tipo e os indices da variavel

/*TIPOS DE DADOS EM PHP */

//criar vars com camelCase
// $anoNascimento = 1990;
// $nomeCompleto = "Bryan William";

// //unset($nome,$nomeCompleto); // unset apaga as variaveis que forem passadas no parametro
// echo $nome;
// echo $nomeCompleto;


// if(isset($nome)){// isset(Está definida) se a var em questao estiver definida, ela sera mostrada, senão, nao será
//     echo $nome;
// }

//CONCATENAÇÃO DE VARIAVEIS
$nome = "bryan";
$sobrenome = "William";
$nomeCompleto = $nome . " " . $sobrenome;
// usamos o . para concatenar, e as " " vazias para criar espaço entre os nomes
echo $nomeCompleto;
?>