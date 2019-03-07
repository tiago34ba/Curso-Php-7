<?php

class Endereco {

    private $logradoro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c) {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct() {
        var_dump("destruir");
    }

    public function __toString() {
        return $this->logradouro.", " .$this->numero."," .$this->cidade;
    }

}

$meuEndereco = new Endereco("Rua do Tira Chapéu", "55", "Salvador");

echo $meuEndereco;
