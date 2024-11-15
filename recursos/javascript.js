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