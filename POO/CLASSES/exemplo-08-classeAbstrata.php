<?php
//CLASSE ABSTRATA


interface Veículo {

    public function acelerar($velocidade);
    public function frenar ($velocidade);
    public function trocarMarcha($marcha);

}
// QUANDO DEFINO UMA CLASSE COMO ABSTRATA, ELA NAO PODE SER INSTANCIADA, APENAS HERDADA, ou seja, eu nao posso criar um automovel por ex $carro = new Automovel, eu preciso criar outra classe, que vai herdar os métodos da minha classe automovel, e ai sim, usar essa classe nova que é herdeira, por ex class Monza extends Automovel, dizendo que monza é herdeiro do automovel

abstract class Automovel implements Veículo {

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

class DelRey extends Automovel {

    public function empurrar(){

    }

}
$carro = new DelRey();
$carro->acelerar(200);

?>