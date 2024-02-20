<?php
include_once("head.php");
include_once("conexao.php");
$c = new Conta();
$conn = new Conexao();
$result = $c->login($_POST["agencia"],$_POST["conta"], $_POST["senha"], $conn);
echo $result;


?>