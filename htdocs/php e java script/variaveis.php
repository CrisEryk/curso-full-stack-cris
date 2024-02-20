<?php
 
 $altura = 1.5;
 $largura = 3;
 $comprimento = 5;

 $metrosCubicos = $altura * $largura * $comprimento;
 echo "<br> Capacidade da caixa d'agua: $metrosCubicos m³.";
 
 $litros = $metrosCubicos * 1000;
 echo"<br> Capacidade em litros é ".$litros;
 ?>