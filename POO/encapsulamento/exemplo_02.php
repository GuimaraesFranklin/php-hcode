<?php


class Pessoa {

    public $nome = "Franklin Guimarães";
    protected $idade = 25;
    private $senha = "92Franklin";

    public function verDados() {

        echo $this ->nome ."<br>";
        echo $this ->idade ."<br>";
        echo $this ->senha ."<br>";
    }

}

class Programador extends Pessoa {

    public function verDados() {

        echo get_class($this)."<br/>";

        echo $this ->nome ."<br>";
        echo $this ->idade ."<br>";
        echo $this ->senha ."<br>";
    }
}


$objeto = new Programador();

//echo $objeto->nome . "<br>";
//echo $objeto->idade . "<br>";
//echo $objeto->senha . "<br>";

$objeto->verDados();


?>