<?php

include_once("./head.php");

echo ("
    <body>
    <div class='card container mt-3'>
        <div class='mt-2'>
            <h2 style='text-align: center;' class='mt-0'>OPERACÕES BANCÁRIAS</h2>
        </div>
        <form action='./operacoes.php' method='POST'>
            <div class='mb-3'>
                <label class='form-label'>Conta*</label>
                <input type='text' class='form-control mb-3' id='conta' name='conta' onblur='V_conta(this)'>
                <div id='alertaConta' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Operação</label>
                <select class='form-select' name='operacao' id='operacao'>
                    <option value='Saldo' selected>Saldo</option>
                    <option value='Saque' >Saque</option>
                    <option value='Deposito' >Depósito</option>
                </select>
                <div id='alertaOperacao' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Valor*</label>
                <input value='' type='text' class='form-control' id='valor' name='valor' onblur='V_valor(this)' required>
                <div id='alertaValor' class='form-text'></div>
            </div>
            <input type='hidden' name='id' value=''>
            <div class='mb-3'>
                <input type='submit' class='btn btn-primary' onblur='V_cadastrar(this)' value='Atualizar'>
            </div>
        </form>
    </div>
    </body>
")
    

?>

