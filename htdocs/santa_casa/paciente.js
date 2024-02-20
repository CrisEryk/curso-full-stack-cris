function V_produto(campo){
    if (campo.value.trim() == '') {
        p = document.getElementById("alertaProduto").innerHTML = '*Campo obrigatório';
        document.getElementById("alertaProduto").style.color = 'red';
    }else {
        document.getElementById("alertaProduto").innerHTML = '';
    }
}

function V_valor(campo){
    if (campo.value.trim() == '') {
        p = document.getElementById("alertaValor").innerHTML = '*Campo obrigatório';
        document.getElementById("alertaValor").style.color = 'red';
    }else if (campo.value <0){
        document.getElementById("alertaValor").innerHTML = '* O valor não pode ser negativo';
        document.getElementById("alertaValor").style.color = 'red';
        campo.value = "";
        campo.focus();
    }else {
        document.getElementById("alertaValor").innerHTML = '';
    }
}

function V_quantidade(campo){
    if (campo.value.trim() == '') {
        p = document.getElementById("alertaQuantidade").innerHTML = '*Campo obrigatório';
        document.getElementById("alertaQuantidade").style.color = 'red';
    }
    else if (campo.value <0){
        document.getElementById("alertaQuantidade").innerHTML = '* A quantidade não pode ser negativa';
        document.getElementById("alertaQuantidade").style.color = 'red';
        campo.value = "";
        campo.focus();
    }else {
        document.getElementById("alertaQuantidade").innerHTML = '';
    }
}

function V_validade(campo){
    if (campo.value.trim() == '') {
        p = document.getElementById("alertaValidade").innerHTML = '*Campo obrigatório';
        document.getElementById("alertaValidade").style.color = 'red';
    }else {
        document.getElementById("alertaValidade").innerHTML = '';
    }
}

function V_cadastrar() {
    p = document.getElementById("produto");
    v = document.getElementById("valor");
    q = document.getElementById("quantidade");
    d = document.getElementById("validade");
    V_produto(p);
    V_valor(v);
    V_quantidade(q);
    V_validade(d);
}