<?php

//carrega classes automaticamente sem precisar do require, de arquivo interno
spl_autoload_register(function($class){

    if (file_exists($class."DelRey.php")) {
    
    require_once($class."delrey.php");
    
    }
    
    });


$carro = new Delrey();

$carro




?>