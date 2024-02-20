function V_nome(campo){
    if (campo.value.trim() == '') {
        p = document.getElementById("alertaNome").innerHTML = '*Campo obrigatório';
        document.getElementById("alertaNome").style.color = 'red';
    }else {
        document.getElementById("alertaNome").innerHTML = '';
    }
}
function V_curso(campo){
    if (campo.value.trim() == '') {
        p = document.getElementById("alertaCurso").innerHTML = '*Campo obrigatório';
        document.getElementById("alertaCurso").style.color = 'red';
    }else {
        document.getElementById("alertaCurso").innerHTML = '';
    }
}
function V_genero(campo){
    if (campo.value.trim() == '') {
        p = document.getElementById("alertaGenero").innerHTML = '*Campo obrigatório';
        document.getElementById("alertaGenero").style.color = 'red';
    }else {
        document.getElementById("alertaGenero").innerHTML = '';
    }
}

function V_idade(campo){
    if (campo.value.trim() == '') {
        p = document.getElementById("alertaIdade").innerHTML = '*Campo obrigatório';
        document.getElementById("alertaIdade").style.color = 'red';
    }else {
        document.getElementById("alertaIdade").innerHTML = '';
    }
}

function V_cadastrar() {
    n = document.getElementById("nome");
    c = document.getElementById("curso");
    g = document.getElementById("genero");
    i = document.getElementById("idade");
    V_nome(n);
    V_curso(c);
    V_genero(g);
    V_idade(i);
}