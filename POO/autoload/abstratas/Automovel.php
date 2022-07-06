<?php


interface Veiculo {
    
    public function acelerar ($velocidade);
    public function frenar ($velocidade);
    public function trocarMarcha ($marcha);

}

abstract class Automovel implements Veiculo {

    public function acelerar ($velocidade) {
        echo "Velocidade máxima: ".$velocidade." KM/h";
        echo "<br/>";
    }
    public function frenar ($velocidade) {
        echo "O veículo frenou até ".$velocidade." KM/h";
        echo "<br/>";
    }
    public function trocarMarcha($marcha) {
        echo "Transmissão é ".$marcha;
        echo "<br/>";
    }
}


?>