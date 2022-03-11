<?php
//encapsulamento
// é uma forma de proteção, modificação de acesso
// ele permite definir quem pode acessar/alterar dados

class Pessoa{

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){
        echo $this->nome.  "</br>";
        echo $this->idade. "</br>";
        echo $this->senha. "</br>";
    }
}

$objeto = new Pessoa();

// echo $objeto->nome. "</br>"; // vai abrir porque o nome tem chave publica

// echo $objeto->idade. "</br>"; // nao vai abrir pq é protected só metodos dessa classe diretamente ligadas e declaradas em mesmo escopo terão acesso a esse atributo, mas pode ser acessado por seus herdeiros

// echo $objeto->senha. "</br>"; // o privado diferencia do protected, porque nem mesmo os herdeiros dessa classe conseguirão acessala, somente a própria classe

class Programador extends Pessoa {
// programador extends pessoa, ou seja vai ter acesso a tudo de pessoa, menos oque for protegido


}


$objeto->verDados(); // funciona porque: o método é publico e esse método publico tem acesso aos dados privados porque esta no mesmo escopo, entao, por herança de nivel de segurança, ele consegue acesso direto aos dados e os exibe

?>