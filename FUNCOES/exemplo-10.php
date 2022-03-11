<?php

function test($callback){

    //processo lento
    $callback();

}

test(function(){
    echo "Terminou!";
});

$fn = function(){
    var_dump($a);
};

$fn("Oi");

?>