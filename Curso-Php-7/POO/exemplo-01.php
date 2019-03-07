<?php

class pessoa{ // Atributo
    public $nome;
    public function falar(){//Metodo
        return"o meu nome é: ".$this->nome;
    }
}
$tiago = new pessoa();
$tiago-> nome = "Tiago";
echo $tiago->falar();