<?php

include_once("head_sc.php");
include_once("conexao_sc.php");

if(isset($_SESSION['cadastrarPaciente'])){
    if($_SESSION['cadastrarPaciente'] == '1'){
        unset($_SESSION["cadastroPaciente"]);
        echo"<script>alert('Paciente cadastrado com sucesso!');</script>";
    } else if ($_SESSION["cadastroPaciente"] == "2"){
        unset($_SESSION["cadastroPaciente"]);
        echo"<script>alert('Erro ao cadastrar!');</script>";
    }
}
$sql = "SELECT nome FROM pacientes";
$resultado = mysqli_query($conn, $sql);

echo"<body>
<div class= 'card container mt-3'>
    <div class = 'mt-2'>
        <h2 style = 'text-aling:center'>Cadastro de Paciente</h2>
    </div>
<form action = 'cadastrar_paciente.php' method = 'POST'>
        <div class='mb-3'>
            <label class='form-label'>Nome*</label>
            <select class='form-select' id='nome' name'nome'>
            <div id='alertaNome' class='form-text'></div>
        </div>
        
        <div class='mb-3'>
            <label class='form-label'>Idade*</label>
            <select class='form-select' id='idade' name'idade'>
            <div id='alertaIdade' class='form-text'></div>
        </div>
        
        <div class='mb-3'>
            <label class='form-label'>triagem de Atendimento</label>
            <option value = 'U'>Urgência</option>
            <option value = 'E'>Emergência</option>
            <option value = 'M'>Moderado</option>
            <select class='form-select' id='triagem' name='triagem'>
        </div>
        
        <div class='mb-3'>
        <label class='form-label'>Nome do Paciente*</label>
        select class='form-select' id='nome' name='nome'>";
        if($resultado){
            while($linha = mysqli_fetch_array($resultado)){
                echo"<option value = '$linha[id]' selected> $linha[nome]</option>";
            }
        }
        echo"</select>"

?>