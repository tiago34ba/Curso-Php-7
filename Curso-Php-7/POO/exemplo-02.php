<?php

class carro {

    private $modelo;
    private $ano;
    private $cor;

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    
public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }
    
    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }
    public function exibir(){
        return array(
            "Modelo"=> $this->getModelo(),
            "Ano"=> $this->getAno(),
            "Cor"=> $this->getCor()
        );
    }
    
    
    }
    $gol = new carro(); 
    $gol ->setModelo("Gol GT");
    $gol->setAno("vermelho"); 
    $gol->setCor("2018");
    print_r($gol->exibir());
    