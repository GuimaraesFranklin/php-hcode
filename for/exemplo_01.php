<?php

for ($i = 0; $i <= 1000; $i+=5) {
    if ($i > 203 && $i < 765) continue;
    if ($i === 905) break;
    echo $i . "<br>";
}


?>