<?php


/* query string é o lugar do URL onde passamos variaveis no navegador*/



$nome = "Bryan";
// a var nome, nao é encontrada dentro da função pq está fora do seu escopo, para eu conseguir acessar preciso ir dentro da função e definir um acesso global na variável que eu desejo usar.
function teste(){
    global $nome;//só vai funcionar nessa função
    echo $nome;
};

function teste2(){
    $nome = "Batata"; // posso até criar outra var com o msm nome aqui, que não vai atrapalhar a nome do escopo global, pois o escopo é bloqueado.
    echo $nome;
}

teste();
echo "</br>";
teste2();


?>