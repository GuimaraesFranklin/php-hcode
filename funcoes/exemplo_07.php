<?php

function soma (float ...$valores):float {

    return array_sum($valores);

}

echo soma (2, 2);
echo "<br>";
echo "<br>";
echo soma (23, 42);
echo "<br>";
echo "<br>";
echo soma (21.54, 3.24);
echo "<br>";
echo "<br>";


?>