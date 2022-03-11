<?php
//WHILE NORMAL
$condicao = true;

while($condicao){ // enquanto a cond for true ele vai executar

    $numero = rand(1,10);//funcao pra gerar num rand.
        if($numero ===3){
            echo "TRÊS!";
            $condicao = false;//controle pra virar o contador pra false
//qnd num for 3 vai falar TRES e mudar a cond para false, parando o while
        }
        echo $numero. " ";    
}

echo "</br>";
//DO WHILE

$total = 150;
$desconto = 0.9;

do{
    $total *= $desconto;
}while ($total > 100);
//sempre vou dar 10% de desconto quando o total for maior que 100, é exemplo de um sistema de desconto pra uma loja
echo $total;

?>