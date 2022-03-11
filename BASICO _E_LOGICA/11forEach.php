<form> 
     <input type="text" name="nome">
     <input type="date" name="nascimento">
     <input type="submit" value="OK">

</form>

<?php
// por padrão, quando um FORM nao tem action, ele usa action GET
if (isset($_GET)){

    foreach($_GET as $key => $value){

        echo "Nome do campo : " . $key;
        echo "</br>";
        echo "Valor do campo : " . $value;
        echo "<hr>";
    }
}


// $meses = array(
//     "janeiro", "Fevereiro", "Março",
//     "Abril", "Maio", "Junho",
//     "Julho", "Agosto", "Setembro",
//     "Outubro", "Novembro", "Dezembro"
// );

// foreach ($meses as $index => $mes){

//     echo "Indice:".$index."</br>";
//     echo "O Mês é:".$mes;
//     echo "</br>";
// }



?>