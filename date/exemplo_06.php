<?php

$dt = new DateTime();

$periodo = new DateInterval("P15D");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y h:i:s");

?>