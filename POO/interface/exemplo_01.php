<?php

interface Veiculo {
    
    public function acelerar ($velocidade);
    public function freiar ($velocidade);
    public function trocarMarcha ($marcha);

}

class Civic implements Veiculo {

    public function acelerar ($velocidade) {
        echo "Velocidade máxima: ".$velocidade." KM/h";
        echo "<br/>";
    }
    public function freiar ($velocidade) {
        echo "O veículo frenou até ".$velocidade." KM/h";
        echo "<br/>";
    }
    public function trocarMarcha($marcha) {
        echo "Transmissão é ".$marcha;
        echo "<br/>";
    }
}

$carro = new Civic(); 

$carro->trocarMarcha("Automática"); 
$carro->freiar("180");
$carro->acelerar("210");

?>