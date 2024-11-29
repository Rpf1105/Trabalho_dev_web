<?php
//criacao do database
$db = "CREATE DATABASE IF NOT EXISTS trabalho";
    if ($conex->query($db) === TRUE){
    }
    else {
        echo "Erro ao criar banco de dados" . $conex->error;
    }
    $conex->query("USE trabalho");
    $db = "
        CREATE TABLE IF NOT EXISTS dados_usuario(
            nickname varchar(50),
            senha varchar(100),
            email varchar(100),
            nascimento date,
            sexo varchar(10),
            PRIMARY KEY (email)
        );
        ";
    if ($conex->query($db) === TRUE){
    }
    else {
        echo "Erro ao criar tabela" . $conex->error;
    }

//cadastro
    $email=$senha=$nome=$datanasc=$sexo="";
    $conex->query("USE trabalho");
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = check_input($_POST["nome"]);
        $email = check_input($_POST["email"]);
        $senha = check_input($_POST["senha"]);
        $datanasc = check_input($_POST["datanasc"]);
        $sexo = $_POST['sexo'];
    }
    $db = "INSERT IGNORE INTO dados_usuario(nickname, senha, email, nascimento, sexo) VALUES ('$nome', '$senha', '$email', '$datanasc', '$sexo')";
    if ($conex->query($db) === TRUE){
    }
    if($conex -> affected_rows == 0 && $email!=""){
        echo '<script> erroForm(); </script>';
    }
?>