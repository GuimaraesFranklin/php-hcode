<?php

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'Franklin',
    'idade'=>'25'
));

array_push($pessoas, array(
    'nome'=>'Fernanda',
    'idade'=>'22'
));

echo json_encode($pessoas);

?>