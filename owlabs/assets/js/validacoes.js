function validarCadastroUsuario() {
    var nome = document.getElementById('nome').value
    var email = document.getElementById('email').value
    var senha = document.getElementById('senha').value
    if (nome == "" || email == "" || senha == ""){
        document.getElementById('retorno-cadastro').removeAttribute('hidden')
        document.getElementById('retorno-cadastro').setAttribute('class','alert alert-danger')
        document.getElementById('retorno-cadastro').innerHTML="Informe todos os dados para continuar!"
    }
    else{
        document.getElementById('form-cadastro-usuario').removeAttribute('onsubmit');
    }
}
function validarLogin() {
    var email = document.getElementById('email').value
    var senha = document.getElementById('senha').value
    if (email == "" || senha == ""){
        
        document.getElementById('retorno-login').removeAttribute('hidden')
        document.getElementById('retorno-login').setAttribute('class','alert alert-danger')
        document.getElementById('retorno-login').innerHTML="Informe todos os dados para continuar!"
        document.getElementById('mensagem-externa').hidden = true;
    }
    else{
        document.getElementById('form-login').removeAttribute('onsubmit');
    }
}
function validarLogin() {
    var titulo = document.getElementById('email').value
    var senha = document.getElementById('senha').value
    if (email == "" || senha == ""){
        
        document.getElementById('retorno-login').removeAttribute('hidden')
        document.getElementById('retorno-login').setAttribute('class','alert alert-danger')
        document.getElementById('retorno-login').innerHTML="Informe todos os dados para continuar!"
        document.getElementById('mensagem-externa').hidden = true;
    }
    else{
        document.getElementById('form-login').removeAttribute('onsubmit');
    }
}

function validarCadastroResumo() {
    var titulo = document.getElementById('titulo').value
    var autor = document.getElementById('autor').value
    var link = document.getElementById('link').value
    var personagens = document.getElementById('personagens').value
    var resumo = document.getElementById('resumo').value
    var analise = document.getElementById('analise').value
    if (titulo == "" || autor == "" || link == "" || personagens == "" || resumo == "" || analise == ""){
        document.getElementById('labelTitulo').setAttribute('style','color:red; font-weight: bolder;')
        document.getElementById('labelAutor').setAttribute('style','color:red; font-weight: bolder;')
        document.getElementById('labelLink').setAttribute('style','color:red; font-weight: bolder;')
        document.getElementById('labelPersonagens').setAttribute('style','color:red; font-weight: bolder;')
        document.getElementById('labelResumo').setAttribute('style','color:red; font-weight: bolder;')
        document.getElementById('labelAnalise').setAttribute('style','color:red; font-weight: bolder;')
        
        document.getElementById('retorno-cadastro').removeAttribute('hidden')
        document.getElementById('retorno-cadastro').setAttribute('class','alert alert-danger')
        document.getElementById('retorno-cadastro').innerHTML="Informe todos os dados para continuar!"
        document.getElementById('mensagem-externa').hidden = true;
    }
    else{
        document.getElementById('form-cadastro-resumo').removeAttribute('onsubmit');
    }
}