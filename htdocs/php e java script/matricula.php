<?php

$nome = $_POST["nome"];
$curso = $_POST["curso"];
$genero = $_POST["genero"];
$idade = $_POST["idade"];

/*echo "Nome: $nome <br>
        Curso: $curso <br>
        Gênero: $genero <br>
        Idade: $idade <br>";*/

//CONEXÃO COM BANCO DE DADOS
//$conn = new MySQli('localhost','root','password','test');

$conn = new MySQli('localhost','root','','bd');

if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
}else{
        $sql = "INSERT INTO matriculas (nome, curso, genero, idade)
                VALUE ('$nome', '$curso', '$genero', '$idade')";
        mysqli_query($conn, $sql);
        header('Location:./gerenciarMatricula.php');
}

?>