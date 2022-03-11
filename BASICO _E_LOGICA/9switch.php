<?php

$diaDaSemana = 8;//date("w");
// função date retorna o dia da semana!!!!!!

switch($diaDaSemana){//retorna o dia da semana baseado no numero do dia da semana começando de 0 até 6
    case 0:
        echo "Domingo";
    break;
    case 1:
        echo "Segunda-Feira";
    break;
    case 2:
        echo "Terça-Feira";
    break;
    case 3:
        echo "Quarta-Feira";
    break;
    case 4:
        echo "Quinta-Feira";
    break;
    case 5:
        echo "Sexta-Feira";
    break;
    case 6:
        echo "Sábado";
    break;

    default:
    echo "Data inválida"; //padrão caso o valor a comparar seja errado.
    break;
}


?>