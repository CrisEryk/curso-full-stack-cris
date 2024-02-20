<?php

include_once('head.php');

echo "  <body>
    <div class='card container mt-3 '>
        <div class='mt-2'>
            <h2 style='text-align: center;' class='mt-0'>CRIAR CONTA BANCARIA</h2>
        </div>
        <form action='criarConta.php' method='POST'>
            <div class='mb-3'>
                <label class='form-label'>Agencia*</label>
                <input value='' type='text' class='form-control' id='agencia' name='agencia' onblur='V_produto(this)' required>
                <div id='alertaAgencia' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Conta*</label>
                <input value='' type='text' class='form-control' id='conta' name='conta' onblur='V_valor(this)' required>
                <div id='alertaConta' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <label class='form-label'>Senha*</label>
                <input value='' type='text' class='form-control' id='senha' name='senha' onblur='V_quantidade(this)' required>
                <div id='alertaSenha' class='form-text'></div>
            </div>
            <div class='mb-3'>
                <input type='submit' class='btn btn-primary' onblur='V_cadastrar(this)' value='criar' >
            </div>
        </form> 
    </div>
</body> ";

?>