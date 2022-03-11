<?php
//Variaveis de sessão estao disponiveis enquanto o usuario esta online no site
//quando o usuario acessa um site, uma sessão é criada entre usuario e servidor
//a sessão dura pouco tempo, mas o tempo de duração de uma sessão é configuravel, e tbm pode ser parada via programação
//a sessão é encerrada automaticamente por inatividade
require_once("config.php");//importando arquivo de configurações
session_start();
//PRECISO USAR  session_start PARA INICIAR UMA SESSÃO

$_SESSION['nome'] = "Bryan";
//aqui defino uma variavel nome para a minha sessão
echo "SESSÃO ABERTA";




?>