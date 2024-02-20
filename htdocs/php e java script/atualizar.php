<?php
/*if(isset($_SESSION["result"])){
if($_SESSION["result"] == "1"){
    unset($_SESSION["result"]);
    echo "<script>alert('Atualização feita com sucesso');</script>";
}else if($_SESSION["result"] == "2"){
    unset($_SESSION["result"]);
    echo "<script>alert('Erro ao atualizar contrato');</script>";
}
}*/

include_once ("conexao.php");
include_once ("head.php");

$id = $_POST['id'];
$produto = $_POST['produto'];
$valor = $_POST ['valor'];
$quantidade = $_POST['quantidade'];
$validade = $_POST['validade'];

$sql = "UPDATE produtos SET produto = '$produto', valor = '$valor', quantidade ='$quantidade', validade = $validade WHERE id = '$id'";

mysqli_query($conn, $sql);
if(mysqli_affected_rows($conn)){
    $_SESSION["atualizar"] = "1";
    header('Location:./gerenciarProdutos.php');
}else{
    $_SESSION["atualizar"] = "2";
    header('Location:./gerenciarProdutos.php');
}
?>