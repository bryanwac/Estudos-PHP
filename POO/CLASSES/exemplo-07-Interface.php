<?php
//INTERFACE


//eu defino na interface os metodos e atributos que vou ter no meu codigo
interface Veículo {

    public function acelerar($velocidade);
    public function frenar ($velocidade);
    public function trocarMarcha($marcha);

}
//depois eu implemento oque foi definido na interface
class Civic implements Veículo {

    public function acelarar($velocidade){
        echo "O veículo acelerou até :" . $veloidade . "km/h";
    }

    public function frenar($velocidade){
        echo "O veículo frenou até :" . $velocidade . "km/h";
    }
    
    public function trocarMarcha($marcha){
        echo "O veículo engatou a marcha :".$marcha;
    }
}

$carro = new Civic();

$carro->trocarMarcha(1);

?>