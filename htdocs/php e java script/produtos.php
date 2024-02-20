<?php

$produto = $_POST["produto"];
$valor = $_POST["valor"];
$quantidade = $_POST["quantidade"];
$validade = $_POST["validade"];

echo "Produto cadastrado";

//CONEXÃO COM BANCO DE DADOS
//$conn = new MySQli('localhost','root','password','test');

$conn = new MySQli('localhost','root','','produtos_full');

$sql = "INSERT INTO produtos (produto, valor, quantidade, validade) VALUES ('$produto', '$valor', '$quantidade', '$validade')";

if(!$conn->connect_error){
    if(mysqli_query($conn, $sql)){
        if(mysqli_affected_rows($conn)){
            $_SESSION["result"] = "1";
         header('Location:./gerenciarProdutos.php');
        }else{
         $_SESSION["result"] = "2";
            header('Location:./gerenciarProdutos.php');
    }
        die("conection failed:" . $conn->connect_error);
    }
}
?>