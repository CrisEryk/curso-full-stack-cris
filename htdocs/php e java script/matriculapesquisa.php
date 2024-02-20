
<?php

$id = $_POST['id'];

include_once('conexaomatricula.php');
include_once('head.php');
$sql = "SELECT * FROM matriculas where id = $id";
$resultado = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($resultado);

if($linha){
echo "  <div class='card container mt-3 '>
<div class='mt-2'>
    <h2 style='text-align: center;' class='mt-0'>MATRICULAS</h2>
</div>
<form action='matricula.php' method='POST'>
    <div class='mb-3'>
        <label class='form-label'>Nome*</label>
        <input value='$linha[nome]' type='text' class='form-control' id='nome' name='nome' onblur='V_nome(this)' required>
        <div id='alertaNome' class='form-text'></div>
    </div>
    <div class='mb-3'>
        <label class='form-label'>Curso*</label>
        <input value='$linha[curso]' type='text' class='form-control' id='curso' name='curso' onblur='V_curso(this)' required>
        <div id='alertaCurso' class='form-text'></div>
    </div>
    <div class='mb-3'>
        <label class='form-label'>Gênero*</label>
        <input value='$linha[genero]' type='text' class='form-control' id='genero' name='genero' onblur='V_genero(this)' required>
        <div id='alertaGenero' class='form-text'></div>
    </div>
    <div class='mb-3'>
        <label class='form-label'>Idade*</label>
        <input value='$linha[idade]' type='number' class='form-control' id='idade' name='idade' onblur='V_idade(this)' required>
        <div id='alertaIdade' class='form-text'></div>
    </div>
</body> ";
}else{
    echo 'Matricula não localizada.';
}
?>

</html>