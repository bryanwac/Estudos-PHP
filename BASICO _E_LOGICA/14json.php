<?php

//ARRAY DE PESSOAS

$pessoas = array();
array_push($pessoas, array( //array_push adiciona coisas no final do array
    'nome' => 'João',
    'idade'=> 20
));
array_push($pessoas, array( //array_push adiciona coisas no final do array
    'nome' => 'Glaucio',
    'idade'=> 25
));
//json_encode transforma dados numa string de texto JSON para guardar eles
echo json_encode($pessoas);

echo "</br>";

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

//json_decode transforma um json em arquivo String
$data = json_decode($json, true);

?>