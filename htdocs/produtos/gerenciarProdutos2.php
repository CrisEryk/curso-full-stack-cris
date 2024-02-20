
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
    <a href='dashboard.php' class='btn btn-success mb-2 mt-2'>Estatisticas</a>
    <section class='page-section' id='contact'>
    <div class='row mb-5 text-center d-none d-lg-block'>
        <div class='col-lg-12 col-sm-12'>
            <div class='m-2'>
                <button class='btn btn-warning' onclick='abrirModalFiltros()'>FiltrarProdutos</button>
            </div>
            <button class='btn btn-warning d-none' id='btnRemoverFiltros' onclick='removerFiltros()'>Remover Filtros</button>
        </div>
    </div>
</section>
    <table class = 'table table-striped table-sm' id='tabelaPrincipal>
        <tr>
            <th>ID</th>
            <th>Produtos</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Validade</th>
            <th>Editar</th>
            <th>Deletar</th>
            <th>Vender</th>
        </tr>
    ");
    while ($linha = mysqli_fetch_array(($result))){
        echo ("
        <tr id ='trCadastro'>
                <td data-label='ID'>$linha[id]</td>
                <td data-label='Produto'>$linha[produto]</td>
                <td data-label='Valor'>$linha[valor]</td>
                <td data-label='Quantidade'>$linha[quantidade]</td>
                <td data-label='Validade'>$linha[validade]</td>
                <td><button class='btn btn-warning' onclick='abrirModalEditar($linha[id])'>Editar</button></td>
                <input type='hidden' id='produto$linha[id]' value='$linha[produto]'></input>
                <input type='hidden' id='valor$linha[id]' value='$linha[valor]'></input>
                <input type='hidden' id='quantidade$linha[id]' value='$linha[quantidade]'></input>
                <input type='hidden' id='validade$linha[id]' value='$linha[validade]'></input>

            <form action ='excluir.php' method='POST'>
                <td><input class='btn btn-danger' type='submit' name'comando' value='Deletar' onclick=\"return confirm ('Deseja deletar o produto?')\"></input></td>
                <input type='hidden' name='id' value='$linha[id]'></input>
            </form>

            <td><button class='btn btn-success' onclick='abrirModalVenda($linha[id])'>Vender</button></td>
        </tr>");
    }
    echo "</table> 
    </div>";
}
else {
    echo "0 resultado";
}


?>
<div class='modal fade' id='modalEditar' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered' role='document'>
        <div class='modal-content'>
            <form action="atualizar2.php" method="POST">
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLongTitle'>Editar Produtos</h5>
                </div>
                <div class='modal-body'>
                    <div class='form-floating mb-3'>
                        <input type='text' id='editarId' name='id' class='form-control'>
                        <label>ID</label>
                    </div>
                    <div class='form-floating mb-3'>
                        <input type='text' id='editarProduto' name='produto' class='form-control'>
                        <label>Produto</label>
                    </div>
                    <div class='form-floating mb-3'>
                        <input type='text' id='editarValor' name='valor' class='form-control'>
                        <label>Valor</label>
                    </div>
                    <div class='form-floating mb-3'>
                        <input type='text' id='editarQuantidade' name='quantidade' class='form-control'>
                        <label>Quantidade</label>
                    </div>
                    <div class='form-floating mb-3'>
                        <input type='date' id='editarValidade' name='validade' class='form-control'>
                        <label>Validade</label>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' onclick='fecharModalEditar()'>Fechar</button>
                        <input type='submit' class='btn btn-primary' value="Editar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class='modal fade' id='modalVenda' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered' role='document'>
        <div class='modal-content'>
            <form action="atualizar2.php" method="POST">
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLongTitle'>Vender Produtos</h5>
                </div>
                <div class='modal-body'>
                    <div class='form-floating mb-3'>
                        <input type='text' id='vendasVerId' name='id' class='form-control'>
                        <label>ID</label>
                    </div>
                    <div class='form-floating mb-3'>
                        <input type='text' id='vendasVerProduto' name='produto' class='form-control' disabled>
                        <label>Produto</label>
                    </div>
                    <div class='form-floating mb-3'>
                        <input type='text' id='vendasVerQuantidade' name='quantidade' class='form-control'>
                        <label>Quantidade</label>
                    </div>
                    <div class='form-floating mb-3'>
                        <input type='date' id='vendasVerVenda' name='venda' class='form-control' disabled>
                        <label>Venda</label>
                    </div>
                    <div class='form-floating mb-3'>
                        <input type='hidden' name='vender' value='vender' disabled>
                        <input type='hidden' id='vendasHiddenQuantidade' name='quantidade' class='form-control' disable>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' onclick='fecharModalVenda()'>Fechar</button>
                        <input type='submit' class='btn btn-primary' value="Vender">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> 
<div class='modal fade' id='modalFiltro' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered' role='document'>
        <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLongTitle'>Filtrar produtos</h5>
                </div>
                <div class='modal-body'>
                    <h5>Filtrar por...</h5>
                    <div class='form-floating mb-3'>
                        <input type='text' id='filtroId' name='id' class='form-control'>
                        <label>ID</label>
                    </div>
                    <div class='form-floating mb-3'>
                        <input type='text' id='filtroProduto' name='produto' class='form-control'>
                        <label>Produto</label>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' onclick='fecharModalFiltros()'>Fechar</button>
                        <button type='button' class='btn btn-primary' onclick='aplicarFiltros()'>Filtro</button>
                    </div>
                </div>
        </div>
    </div>
</div>


    
    <script>
    //-----------------------------Editar----------------------------------    
        function abrirModalEditar(id){
            //limpar campos editar();
            $("#modalEditar").modal("show");
            //obtem o input hidden produto id
            produto = document.getElementById("produto"+id);
            valor = document.getElementById("valor"+id);
            quantidade = document.getElementById("quantidade"+id);
            validade = document.getElementById("validade"+id);
            //obtem os input do modal 
            editarId = document.getElementById("editarId");
            editarProduto = document.getElementById("editarProduto");
            editarValor = document.getElementById("editarValor");
            editarQuantidade = document.getElementById("editarQuantidade");
            editarValidade = document.getElementById("editarValidade");
            //preenche o modal
            editarId.value = id;
            editarProduto.value = produto.value;
            editarValor.value = valor.value;
            editarQuantidade.value = quantidade.value;
            editarValidade.value = validade.value;
        }
        function fecharModalEditar(){
            $("#modalEditar").modal("hide");
        }
    //----------------------------------------------------------------------    
    </script>



    <script>
    //-----------------------------Venda-------------------------------------
        function abrirModalVenda(id){
            //limpar campos editar();
            $("#modalVenda").modal("show");
            //obtem o input hidden produto id
            produto = document.getElementById("produto"+id);
           // valor = document.getElementById("valor"+id);
            quantidade = document.getElementById("quantidade"+id);
            //validade = document.getElementById("validade"+id);
            //obtem os input do modal 
            verId = document.getElementById("vendasVerId");
            verProduto = document.getElementById("vendasVerProduto");
            hiddenQuantidade = document.getElementById("vendasVerQuantidade");
            venda = document.getElementById("vendasVerValidade");
            //preenche o modal
            verId.value = id;
            verProduto.value = produto.value;
            verQuantidade.value = quantidade.value;
            hiddenQuantidade.value = quantidade.value;

            venda.max = quantidade.value;
            venda.min = 1;
        }
        function limparCampoVendas(){
            document.getElementById("vendasEditarVenda").value = "";
        }
        function fecharModalVenda(){
            $("#modalVenda").modal("hide");
        }    
    //-----------------------------------------------------------------------
    </script>



    <script>
    //----------------------------quantidade----------------------------------
        function habilitarCampoQuantidade(){
            document.getElementById("verQuantidade").disabled = false;
        }
    //------------------------------------------------------------------------
    </script>



    <script>
    //------------------------------Filtro--------------------------------------
        //abre o modal filtros
        function abrirModalFiltros(){
            limparCampos();
            $("#modalFiltro").modal("show");
        }
        // Fecha o modal filtros
        function fecharModalFiltros(){
            $("#modalFiltro").modal("hide");
        }
        //limpar campos do modal
        function limparCampos(){
            document.getElementById("filtroId").value = "";
            document.getElementById("filtroProduto").value = "";
        }

        const btnRemoverFiltros = document.querySelectorAll("#btnRemoverFiltros");

        function aplicarFiltros(){
            
            let idProduto = document.getElementById("filtroId").value;
            let produto = document.getElementById("filtroProduto").value;
            let tabela = document.getElementById("tabelaPrincipal");
            let json = {};

            if(idProduto != ""){json.idProduto = idProduto;}
            if (produto != ""){json.produto = produto;}

            // alert(json.idProduto);
            // alert(json.produto);

            if (idProduto != "" || produto != "") {
                $.ajax({
                    url:"./querys.php",
                    method: "POST",
                    data: {
                        filtroTabela: "sim", 
                        tabela: "produtos_full", 
                        filtroData: JSON.stringify(json)
                    },
                    success: (data) => {
                        tabela.innerHTML = data;
                            btnRemoverFiltros[0].classList.remove ("d-none");
                            $("#modalFiltro").modal("hide");
                    }
                })
            }
        }

        function removerFiltros(){
            let tabela = document.getElementById("tabelaPrincipal");
            $.ajax({
                url: "querys.php",
                method: "POST",
                data: {tabelaNormal: "sim", tabela : "produtos", removerFiltros: "sim"},
                success: (data) => {
                    tabela.innerHTML = data;
                    btnRemoverFiltros[0].classList.add("d-none");
                }
            })
        }
        //-----------------------------------------------------------------------------------
    </script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieQieOmAZNXB
    eQyjo21dadwR+8ZaIJV8EE2iyI61OV8e6M8PP2/4hpQINQ/=="crossorigin="anonymous" referrerpolicy="no-referrer"></script>