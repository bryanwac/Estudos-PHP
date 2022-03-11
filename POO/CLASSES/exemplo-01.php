<?php

// uma classe é um conjunto de atributos e métodos
// oque eu preciso guardar, eu coloco nos atributos
// oque eu preciso executar, coloco nos métodos
// para usar uma classe, são necessários os objetos
// objeto é uma variavel, que representa uma classe

// atributos são variaveis com mais recursos
// métodos, são funções, com mais recursos

// no PHP usamos new para instanciar objetos

// CRIANDO UMA CLASSE

//usar class para definir como classe, e camel case porque
//classes começam com letra maiúscula

class Pessoa{

    public $nome; //Atributo
    public function falar(){ //Método = função dentro de uma classe
        return "O meu nome é : ".$this->nome;
        // this representa uma classe já instanciada
        // é muito usada para referenciar algo dentro 
        // de uma função/objeto
        // usamos o $this apenas dentro do método! É var interna
    }

}

$glaucio = new Pessoa();          // criei um novo objeto do tipo pessoa
$glaucio ->nome = "Bryan William";// acessei o atributo nome desse objeto, e
                                  // atribui pra ele um valor
                                  
echo $glaucio-> falar();          // como minha função nao exibe na tela, utilizei
                                  // echo para exibir o return da função falar

?>