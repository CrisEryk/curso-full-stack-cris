<?php

/*Chico tem 1,50 metro e cresce 2 centímetros por ano, enquanto Zé tem 1,10 metro e cresce 3 centímetros por ano.
Construa um algoritimo que calcule e imprima quantos anos serão necessário para que Zé seja maior que Chico.*/

$chico = 1.50;
$zé = 1.10;
$ano = 0;

while($zé <= $chico){
    $chico += 2;
    $zé += 3;
    $ano++;
}
echo "Ano: $ano - Zé: $zé e Chico: $chico";
?>