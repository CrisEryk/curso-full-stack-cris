<?php

//uma eleição com 18 pessoas
// dois candidatos (1, 2)
//contar a quantidade de votos para cada um
//informar o ganhador

/*$cont = 1;
while($cont <= 10){
    $n = rand(0, 10);
    echo "$n <br>";
    $cont++;
}*/

$cand1 = 0;
$cand2 = 0;
$cont = 1;

while ($cont <= 18){
    $voto = rand(1, 2);
    if ($voto == 1)
        $cand1++;
    else
        $cand2++;
    $cont++;
}
echo "Candidato 1: $cand1 <br> Candidato 2: $cand2<br>";
    if($cand1 > $cand2)
        echo "Candidato 1 venceu";
    else if ($cand1 < $cand2)
        echo "Candidato 2 venceu";
    else
        echo "Empate";

?>