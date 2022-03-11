<?php
//MÉTODOS MÁGICOS

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct(){ // usa pra desconectar de bd ou matar vars

        //var_dump("DESTRUIR");

    }

    public function __toString(){
        return $this->logradouro.",".$this->numero." - ".$this->cidade;
    }
}

$meuEndereço = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");

echo $meuEndereço;
echo "</br>";

?>