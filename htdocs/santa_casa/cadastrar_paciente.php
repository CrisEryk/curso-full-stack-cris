<?php

if (isset($_SESSION['cadastroPaciente'])){
    if ($_SESSION['cadastroPaciente'] == '1') {
        unset($_SESSION['cadastroPaciente']);
        echo ("<script>alert(Paciente cadastrado com sucesso!);</script>");
    }elseif ($_SESSION['cadastroPaciente'] == '2'){
            unset($_SESSION['cadastroPaciente']);
            echo ("<script>alert(Erro ao cadastrar paciente!);</script>");
    }
}

include_once('head_sc.php');

?>
<div class="container card mt-3">
    <div class="mt-2">
        <h2 style="text-align: center;" class="mt-0">CADASTRO DE PACIENTES</h2>
    </div>
    <form action="cadastrar_paciente.php" method="$_POST">
        <div class="mb-3">
            <label class="form-label">Nome do paciente</label>
            <input type="text" class="form-control" id="nome" name="nome" onblur="V_nome(this)" required>
            <div id="alertaNome" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Sexo do paciente</label>
            <select class="form-select" name="sexo" id="sexo" onblur="V_sexo(this)" required>
                <option value="M" selected>Masculino</option>
                <option value="F" selected>Feminino</option>
            </select>
            <div id="alertaSexo" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="data" name="data" onblur="V_data(this)" required>
            <div id="alertaData" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" onblur="V_cpf(this)" required>
            <div id="alertaCPF" class="form-text"></div>
        </div>
        <input value="Cadastrar" type="submit" class="btn btn-warning" onclick="V_cadastrar(this)">
    </form> 
</div>