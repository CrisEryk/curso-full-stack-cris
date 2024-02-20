<?php
/*$produtos1 = array (
    array(4.50, 50),
    array(6.50, 30),
    array(4.00, 35),
);
$soma = 0;
for ($i = 0; $i <3; $i++){
    echo ($produtos1[$i][1] . "<br>");
        $soma += $produtos1[$i][1];
}
echo "Soma = ".$soma;*/
//----------------------------------------------------------------------//

//----------------------------------------------------------------------//
//criar uma matriz que represente um conjunto de 4 times. Cada time terão pontos de acordo com o resultado do jogo. Verificar a pontuação final de cada um.
/*$times = array (
    array(3, 1, 1),
    array(1, 1, 3),
    array(1, 3, 0),
    array(0, 0, 1)
);

for($i = 0; $i < 4; $i++){
    $soma = $times [$i][0] + $times[$i][1] + $times[$i][2];
    echo "Pontuação do time". ($i+1) .": $soma<br>";
}*/

//----------------------------------------------------------------------//

$media = array(
    array("nota1"=>8, "nota2"=>9, "nota3"=>10),
    array("nota1"=>2, "nota2"=>7, "nota3"=>10),
    array("nota1"=>6, "nota2"=>3, "nota3"=>5),
    array("nota1"=>9, "nota2"=>9, "nota3"=>10),
    array("nota1"=>8, "nota2"=>10, "nota3"=>10),
);

foreach($media as $index => $notas){
    $media = 0;
    foreach($notas as $key => $value){
        $media += $value;
    }
    $media = round($media/3, 2);
    echo "Média do aluno". ($index + 1). " = $media<br>";
}
?> 