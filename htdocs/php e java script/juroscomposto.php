<?php

$c = 100;
$i = 0.1;
$t = 1;
echo "Saldo: $c <br>";
while ($t <= 10){
    $j = $c * $i;
    $m = $c + $j;
    echo "Saldo $m <br>";
    $c = $m;
    $t++;
}

?>