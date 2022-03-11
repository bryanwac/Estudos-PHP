<?php
/* POLIMORFISMO
é ter métodos na classe pai e na clases filha
que fazem coisas distintas*/



abstract class Animal{

    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal{

    public function falar(){
        return "Late";
    }

}
class Gato extends Animal{
    public function falar(){
        return "Mia";
    }
}
class Passaro extends Animal{
    public function falar(){
        return "Canta";
    }
    public function mover(){
        return "Voa e". parent::mover();
    }
}


$pluto = new Cachorro();

echo $pluto->falar(). "</br>";
echo $pluto->mover(). "</br>";

echo "=============================<br/>";

$garfield = new Gato();

echo $garfield->falar(). "</br>";
echo $garfield->mover(). "</br>";

echo "=============================<br/>";

$picapau = new Gato();

echo $picapau->falar(). "</br>";
echo $picapau->mover(). "</br>";



?>