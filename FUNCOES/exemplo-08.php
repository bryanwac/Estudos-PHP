<?php

function soma(string ...$valores):string{//agr o array é string
    return array_sum($valores);
    //array_sum soma os valores do vetor
}

echo soma(2,2);
echo "</br>";
echo soma(25,33);
echo "</br>";
echo soma(1.5,3.2);
echo "</br>";


?>