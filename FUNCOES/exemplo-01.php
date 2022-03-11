<?php
//uma função sem return é apenas uma rotina que sera executada mais de uma vez
function ola(){

    return "Olá mundo</br>";

}
    echo ola();
    $frase = ola();
    
    echo strlen($frase);
    //strlen mostra o lenght da string
    

?>