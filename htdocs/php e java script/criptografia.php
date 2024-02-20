<?php
$senha1 = "senac123";
$senha2 = "senac123";
$senha3 = "a";
echo "senha criptografada: ".md5($senha1,TRUE)."<br>";
echo "senha criptografada: ".md5($senha2,TRUE)."<br>";
echo "senha criptografada: ".md5($senha3)."<br>";

$csenha1 = md5($senha1);
$csenha2 = md5($senha2);

if($senha1 == $csenha2){
    echo "senha correta";
}else{
    
}
?>