<?php

session_start();
    if(isset($_SESSION['atualizar'])){
        if($_SESSION['atualizar']== '1') {
            unset($_SESSION['atualizar']);
            echo("<script>alert('Atualizado com sucesso!');</script>");
        }elseif ($_SESSION['atualizar']== '2'){
            unset($_SESSION['atualizar']);
            echo("<script>alert('Nada atualizado!');</script>");
        }
    }elseif (isset($_SESSION['excluir'])){
        if($_SESSION['excluir']== '1') {
            unset($_SESSION['excluir']);
            echo("<script>alert('Excluido com sucesso!');</script>");
        }elseif ($_SESSION['excluir']== '2'){
            unset($_SESSION['excluir']);
            echo("<script>alert('Nada excluido!');</script>");
        }
    }elseif (isset($_SESSION['cadastrar'])){
        if($_SESSION['cadastrar']== '1') {
            unset($_SESSION['cadastrar']);
            echo("<script>alert('Cadastrado com sucesso!');</script>");
        }elseif ($_SESSION['cadastrar']== '2'){
            unset($_SESSION['cadastrar']);
            echo("<script>alert('Nada cadastrado!');</script>");
        }
    }

include_once('conexao.php');
include_once('head.php');

$sql = "SELECT * FROM produtos";
$result = mysqli_query($conn, $sql);

if ($result){
    echo ("
    <div class='container card mt-3'>
    <h2>Lista de produtos</h2>
    <a href='produtos.html' class='btn btn-primary mb-2 mt-2'>Cadastrar</a>
    <table class = 'table table-striped table-sm' id='tabela principal>
        <tr>
            <th>ID</th>
            <th>Produtos</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Validade</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </table>");

    while ($linha = mysqli_fetch_array(($result))){
        echo ("
        <tr id ='trCadastro'>
            <form action='pesquisa.php' method='POST'>
                <td data-label='ID'>$linha[id]</td>
                <td data-label='Produto'>$linha[produto]</td>
                <td data-label='Valor'>$linha[valor]</td>
                <td data-label='Quantidade'>$linha[quantidade]</td>
                <td data-label='Validade'>$linha[validade]</td>
                <td><input class='btn btn-warning' type='submit' name'comando' value='Editar'></input></td>
                <input type='hidden' name='id' value='$linha[id]'></input>
            </form>
            <form action ='excluir.php' method='POST'>
                <td><input class='btn btn-danger' type='submit' name'comando' value='Deletar' onclick=\"return confirm ('Deseja deletar o produto?')\"></input></td>
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