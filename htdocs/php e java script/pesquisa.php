<?php

$id = $_POST['id'];

include_once('conexao.php');
include_once('head.php');

$sql = "SELECT * FROM produtos WHERE id = $id";
$resultado = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($resultado);

if($linha){
echo "  <body>
    <div class='card container mt-3 '>
        <div class='mt-2'>
            <h2 style='text-align: center;' class='mt-0'>PESQUISA DE PRODUTOS</h2>
        </div>
        <form action='produtos.php' method='POST'>
            <div class='mb-3'>
                <label class='form-label'>Produto*</label>
                <input value='$linha[produto]' type='text' class='form-control' id='produto' name='produto' onblur='V_produto(this)' required>
                <div id='alertaProduto' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Valor*</label>
                <input value='$linha[valor]' type='text' class='form-control' id='valor' name='valor' onblur='V_valor(this)' required>
                <div id='alertavalor' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Quantidade*</label>
                <input value='$linha[quantidade]' type='text' class='form-control' id='quantidade' name='quantidade' onblur='V_quantidade(this)' required>
                <div id='alertaQuantidade' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Validade*</label>
                <input value='$linha[validade]'type='date' class='form-control' id='validade' name='validade' onblur='V_validade(this)' required>
                <div id='alertaValidade' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <input type='submit' class='btn btn-primary' onblur='V_cadastrar(this)' value='Atualizar' >
            </div>
        </form>
        <div class='card container mt-3 '>
        </div>
    </div>
</body> ";
}else{
    echo 'Produto não localizado.';
}
?>

</html>