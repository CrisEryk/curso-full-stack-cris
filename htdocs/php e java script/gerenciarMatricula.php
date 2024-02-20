<?php

session_start();
if (isset($_SESSION['atualizar'])){
    if($_SESSION['atualizar']==1){
        unset($_SESSION['atualizar']);
        echo("<script>alert('Atualizado com sucesso!');</script>");
    }elseif ($_SESSION['atualizar'] == '2'){
        unset($_SESSION['atualizar']);
        echo("<script>alert('Nada atualizado!');</script>");
    }
}
session_destroy();

include_once('conexaomatricula.php');
include_once('head.php');

$sql = "SELECT * FROM matriculas";
$result = mysqli_query($conn, $sql);

if ($result){
    echo ("
    <div class='container card mt-3'>
    <h2>Lista de produtos</h2>
    <a href='matriculas.html' class='btn btn-primary mb-2 mt-2'>Cadastrar</a>
    <table class = 'table table-striped table-sm' id='tabela principal>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Curso</th>
            <th>Gênero</th>
            <th>Idade</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </table>");

    while ($linha = mysqli_fetch_array(($result))){
        echo ("
        <tr id ='trCadastro'>
            <form action='matriculapesquisa.php' method='POST'>
                <td data-label='ID'>$linha[id]</td>
                <td data-label='Nome'>$linha[nome]</td>
                <td data-label='Curso'>$linha[curso]</td>
                <td data-label='Gênero'>$linha[genero]</td>
                <td data-label='Idade'>$linha[idade]</td>
                <td><input class='btn btn-warning' type='submit' name'comando' value='Editar'></input></td>
            </form>
            <form action ='excluirmatricula.php' method='POST'>
                <td><input class='btn btn-danger' type='submit' name'comando' value='Deletar' onclick=\"return confirm ('Deseja deletar a matricula?')\"></input></td>
                <input type='hidden' name='id' value='$linha[id]'></input>
            </form>
        </tr>");
    }
    echo "</table> 
    </div>";
}
else {
    echo "0 resultado";
}


?>