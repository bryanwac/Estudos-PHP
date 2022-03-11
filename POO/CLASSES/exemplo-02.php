<?php

// temos os modificadores de acesso public e private
// o public pode ser acessado por qualquer classe
// o private apenas pela classe que o implementa
class Carro{

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo() {

        return $this->modelo;

    }

    public function setModelo($modelo) {

        $this->modelo = $modelo;

    }

    public function getMotor():float {

        return $this->motor;

    }

    public function setMotor($motor) {

        $this->motor = $motor;

    }

    public function getAno(){

        return $this->ano;

    }

    public function setAno($ano) {

        $this->ano = $ano;

    }


    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
}

$gol = new Carro();
                          // $gol -> modelo = "Gol GT";// NÃO VAI FUNCIONAR porque estou tentando atribuir
                          // a força, sem usar o getter um valor para um atributo privado
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

print_r($gol->exibir());

?>