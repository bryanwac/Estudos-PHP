<?php

echo date("d/m/Y H:i:s");
        // FORMATO PARA DATA e hora
        //alguns sai maiusculos por padra
        //minutos = i  porque a letra m ja esta em uso
        //posso passar valores por padrão, em colchetes[]

echo"</br>";

echo time();
//função do timestamp, mostra em segundos, a quantidade de segundos existentes desde o momento 0( primeiro de janeiro de 1970)
//podemos buscar uma data especifica pelo timestamp
echo"</br>";
echo strtotime("2001-09-11");//pra achar o timestamp
$ts = strtotime("2001-09-11");//passei o time stamp pra uma variavel
//strtotime é uma função mt flexivel, se eu passar o parametro now, ela pega a data de agora, e posso usar contadores como +1/+2/+3 para somar ou diminuir dias/anos/meses/semanas etc


echo"</br>";
echo date("l,d/m/Y", $ts)
?>