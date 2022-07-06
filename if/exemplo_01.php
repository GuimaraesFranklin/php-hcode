<?php

$qualASuaIdade = 125;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {
    echo "Criança.";
} elseif ($qualASuaIdade < $idadeMaior) {
    echo "Adolescente.";
} elseif ($qualASuaIdade < $idadeMelhor ) {
    echo "Adulto";
} else {
    echo "Idoso";
}

echo "<br>";

echo ($qualASuaIdade < $idadeCrianca)?"Nenê":"Maior de Idade";

?>