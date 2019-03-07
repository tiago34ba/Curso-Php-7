<?php



class Pessoa{
    public $nome = "Paulo Tiago";
    protected $idade ="36";
    private $senha = "13456";
    
    public function verDados(){
        echo $this->nome. "<br/>";
        echo $this->idade."<br/>"; 
        echo $this->senha. "<br/>";
    }
}$objeto = new Pessoa();
 $objeto->verDados();