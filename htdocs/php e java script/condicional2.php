<?php
//Faça um sistema que gerêncie o estoque de uma empresa. Sabendo a quantidade estocada de um produto verifique o tipo de movimento (entrada ou saída) e realize o cálculo para atualizar o estoque.
//Quantidade estocada:
//Tipo da movimentação:
//Quantidade movimentada:
//Estoque atualizado:?

/*$estoque = 100;
$movimentação = "saida";
$quantidade = 30;

$estoqueAtualizado = $estoque - $quantidade;
echo "estoque atualizado é : $estoqueAtualizado. ";*/

$qtdEstocada = 100;
$tipoMovimentacao = "saída";
$qtdMovimentado = 30;

$estoqueAtual = $tipoMovimentação == "saída" ?
$qtdEstocada - $qtdMovimentado : $qtdEstocada + $qtdMovimentado;
//teste lógico ? valor se verdadeiro : valor se falso

/*echo "Estoque: $qtdEstocada <br>
        movimento: $tipoMovimentacao <br>
        Quantidade movimentada: $qtdMovimentado
        Estoque Atual:"$tipoMovimentacao == 'saída'? $qtdEstocada - $qtdMovimentado : $qtdEstocada*/
?>