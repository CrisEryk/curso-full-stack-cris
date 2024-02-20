<?php
include_once("./conta.php");
include_once("./conexao.php");

$c = new Conta($_POST["agencia"], $_POST["conta"], 0, $_POST["senha"]);
//conexao
$conn = new Conexao(); //criar objeto da classe conexao
$result = $c->criarConta($_POST["agencia"], $_POST["conta"], 0, $_POST["senha"], $conn);
echo $result;

?>


