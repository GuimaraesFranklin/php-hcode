<?php

function __autoload ($nomeClasse) {
    require_once("$nomeClasse.php");
}

//require_once("SonicLTZ.php");

$carro = new SonicLTZ();
$carro->acelerar(138);

?>