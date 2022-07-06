<?php

abstract class Animal {

    public function falar() {
        return "som";
    }
    public function mover() {
        return "anda";
    }
}

class Cachorro extends Animal {
    public function falar () {
        return "Late";
    }
}

class Gato extends Animal {
    public function falar () {
        return "mia";
    }
    public function mover() {
        return "pula";
    }
}

class Passaro extends ANimal {
    public function falar () {
        return "canta";
    }
    public function mover () {
        return "voa e".parent::mover();
    }

}

$picapau = new passaro();
echo $picapau->falar()."<br/>";
echo $picapau->mover()."<br/>";

$tommas = new gato();
echo $tommas->falar()."<br/>";
echo $tommas->mover()."<br/>";

$pluto = new Cachorro();

echo $pluto->falar()."<br/>";
echo $pluto->mover();

?>