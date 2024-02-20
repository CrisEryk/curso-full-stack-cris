<?php
include_once ("conexaomatricula.php");

$id = $_POST['id'];


$sql = "DELETE FROM matriculas WHERE id = '$id'";

mysqli_query($conn, $sql);
if(mysqli_affected_rows($conn)){
    echo "Matricula deletada com sucesso.";
}else{
    echo "Nenhuma matricula foi deletada.";
}

?>