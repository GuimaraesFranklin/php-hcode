<?php
/*
*
*
*
**/
//Na proxima linha temos uma variavel do ano de nascimento
$anoNascimento = 1992;
//Na proxima linha temos a variavel com nome do usuario
$nomeUsuario = "Franklin";
$sobrenome = "Guimarães";

$nomeCompleto = $nomeUsuario." ".$sobrenome;

echo($nomeCompleto);

exit;

echo $nomeUsuario;
echo "<br/>";
echo $anoNascimento;
//unset($nomeUsuario);

if  (isset($nomeUsuario)) {
    echo $nomeUsuario;
}


?>