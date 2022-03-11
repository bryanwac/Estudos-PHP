<?php

//FOR

for( $i = 0; $i <1000; $i+=5){//condições
    if($i > 200 && $i < 800) continue;//condição interna pra pular 200-800
    if($i === 900) break; // parando o laço qnd i for 900
    echo $i."</br>"; //escreve $i e quebra linha
                    
}

?>