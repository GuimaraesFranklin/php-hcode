<?php

$json = '[{"nome":"Franklin","idade":"25"},{"nome":"Fernanda","idade":"22"}]';

$data = json_encode($json, true);

var_dump($data);

?>