<?php

abstract class Animal {

    public function falar() {
        return "som";
    }

    public function mover() {
        return "caminhar";
    }

}

class Cachorro extends Animal {

    public function falar() {
        return "Late";
    }

}

class Gato extends Animal {

    public function falar() {
        return "Mia";
    }

}

class Passaro extends Animal {

    public function falar() {
        return "cantar";
    }




 public function mover() {
        return "Voa e " .parent::mover();
    }

}


$pluto = new Cachorro();
echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";
echo "<br/>";

$jerry = new Gato();
echo $jerry->falar() . "<br/>";
echo $jerry->mover() . "<br/>";

echo "<br/>";

$Lora = new Passaro();
echo $Lora->falar() . "<br/>";
echo $Lora->mover() . "<br/>";