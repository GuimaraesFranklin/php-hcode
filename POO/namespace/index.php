<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad -> setNome("Thays Oliveira");
$cad -> setEmail("e.thaysoliveira@hotmail.com");
$cad -> setSenha("FranklinAmor");

$cad->registrarVenda();

?>