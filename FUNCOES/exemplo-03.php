<?php
//PARAMETROS
//se eu nao passar o parametro padrão, o parametro se torna de passagem obrigatoria, caso eu passe um valor padrão para o parametro eu posso escolher ou não entregalo
function ola($texto='mundo', $periodo = "Bom dia"){//defini um valor padrão
    echo "Olá $texto! $periodo!</br>";
}

echo ola();
echo ola("Mundo","Bom noite");
echo ola("Bryan", "Boa tarde");
echo ola ("Galera");

?>