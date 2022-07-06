<?php

class Pessoa {

    public $nome = "Franklin Guimarães";
    protected $idade = 48;
    private $senha = 123456;

    public function verDados () { //Método ('função dentro da classe, e tipo de recurso, por exemplo: public')

        echo $this->nome."<br/>";
        echo $this->idade."<br/>";
        echo $this->senha."<br/>";
    }

}

$objeto = new Pessoa();

$objeto->verDados();


?>
