<?php

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$op = $_POST["num"];

switch($op){
    case 1:
        $resultado = $n1 + $n2;
        break;
    case 2:
        $resultado = $n1 - $n2;
        break;
    case 3:
        $resultado = $n1 * $n2;
        break;
    case 4:
        $resultado = $n1 / $n2;
    default:
        echo "opção invalida.";
        $resultado = 0;
        break;
}
echo "Resultado: $resultado";

?>