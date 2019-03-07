<?php

interface Veiculo {

    public function acelerar($velocidade);

    public function freiar($velocidade);

    public function trocaMacha($marcha);
}

class Civic implements Veiculo {

    public function acelerar($velocidade) {
        echo "O Veiculo Aclero até a Velocidade:" . $velocidade . "Km/h";
    }

    public function freiar($velocidade) {
        echo "O Veiculo freiar até a Velocidade:" . $velocidade . "Km/h";
    }

    public function trocaMacha($marcha) {


        echo "O Veiculo engatou a Macha até a Velocidade:" . $marcha . "Km/h";
    }

}

$carro = new Civic();
$carro ->trocaMacha(1);