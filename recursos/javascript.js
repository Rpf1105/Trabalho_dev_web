//funcoes prontas
function openPopup(){
    document.getElementById("new_review").style.visibility= "visible";
}

function closePopup(){
    document.getElementById("new_review").style.visibility= "hidden";
}

function erroForm(){
    document.getElementById("erroform").style.display= "block";
}
function profileToggle(){
    const visible = document.getElementById('menu_perfil');
    if(visible.style.display == "none"){
        visible.style.display = "block";
    }
    else{
        visible.style.display = "none";
    }
}
function pictureToggle(){
    const visible = document.getElementById('form_foto');
    if(visible.style.display == "none"){
        visible.style.display = "block";
    }
    else{
        visible.style.display = "none";
    }
}
function allowReview(){
    document.getElementById("review_button").style.display = "none";
}
//terminar
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