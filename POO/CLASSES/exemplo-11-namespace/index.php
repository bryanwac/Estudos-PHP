<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Bryan William");
$cad->setEmail("bryanwac@gmail.com");
$cad->setSenha("12345678");

$cad->registrarVenda();




?>