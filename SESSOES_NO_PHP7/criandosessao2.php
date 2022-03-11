<?php
require_once("config.php");

session_start();

session_unset($_SESSION['nome']);
//session_unset apaga variavel de sessão
//se eu passar o nome da variavel, ela apaga especifica
//se eu nao passar o nome, apaga todas ativas

session_destroy($_SESSION['nome']);
//destroy é diferente de unset, unset apenas desativa/apaga a sessao, mas voce continua sendo voce pro acesso, com o destroy, vc é completamente apagado da sessão

echo $_SESSION['nome'];

?>