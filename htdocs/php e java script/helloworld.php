<?php
$num1 = 4;
$num2 = 8;
$num3 = 10;

$media = ($num1 + $num2 + $num3)/3;

echo "Média: ". $media;

//imc = peso / altura * 

$peso = 75;
$altura = 1.75;

//$imc = $peso  /$altura ** 2;
$imc = $peso  / pow($altura,2 ) ;
echo "<br> IMC: $imc"



?>