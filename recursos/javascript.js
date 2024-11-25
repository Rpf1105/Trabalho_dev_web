function checkcadastro(){
    const senha = document.getElementById("senha").value;
    const user = document.getElementById("usuario").value;
    let erroLogin = document.getElementById("erroLogin");

    erroLogin.textContent = "";

    let isvalid = true;

    if (senha === "" || user === ""){
        erroSenha.textContent = "A senha ou usuário estão vazios"
        isvalid = false;
    }
    else if(senha){
        erroSenha.textContent = "Esse usuário ou senha está errado"
        isvalid = false;
    }   

    return isvalid
}

function erroCadastro(){
    let erro_cad = document.getElementById("erro-cadastro");
    document.getElementById("erro-cadastro").style.visibility= "visible";
    erro_cad.textContent ="Esse email ja foi utilizado, por favor entre outro email"
}

function getProfile(){
    //nome do usuario, placeholder, vai puxar do banco de dados
    let nome = "Rogerio Perso Filho";
    document.getElementById("nome").textContent=nome;
    //pegar imagem do usuario aqui, tambem banco
    let path = "";
    document.getElementById("foto").src=path;
}

function pageTheme(){
    
}

function validform(){
    let nome = document.getElementById("nome").value;
    let senha = document.getElementById("senha").value;
    let email = document.getElementById("email").value;
    let erroNome = document.getElementById("erronome");
    let erroSenha = document.getElementById("errosenha");
    let erroEmail = document.getElementById("erroemail");

    erroNome.textContent = "";
    erroSenha.textContent = "";
    erroEmail.textContent = "";
    let isvalid = true;

    if (usuario === "" || /\d/.test(nome)){
        erroNome.textContent = "Por favor, entre um nome válido"
        isvalid = false;
    }
    if (senha === "" || /\d/.test(endereco)){
        erroSenha.textContent = "Senha incorreta"
        isvalid = false;
    }
    if (email === "" || !email.include("@")){
        erroEmail.textContent = "Por favor entre com um email valido"
        isvalid = false;
    }
    return isvalid
}