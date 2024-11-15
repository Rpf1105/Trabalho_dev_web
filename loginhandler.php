<?php

    $servidor= "localhost";
    $user= "roger";
    $pass= "";

    $conex = new mysqli(
        $servidor,
        $user,
        $pass
    );

    if($conex->connect_error){
        die("Conexao falhou: " . $conex->connect_error);
    }

    $db = "CREATE DATABASE IF NOT EXISTS trabalho";
    if ($conex->query($db) === TRUE){
        echo "Banco de dados criado com sucesso";
    }
    else {
        echo "Erro ao criar banco de dados" . $conex->error;
    }
    $conex->query("USE trabalho");
    $db = "
        CREATE TABLE IF NOT EXISTS dados(
            email varchar(100),
            senha varchar(100)
        );
        ";
    if ($conex->query($db) === TRUE){
        echo "Tabela criado com sucesso";
    }
    else {
        echo "Erro ao criar tabela" . $conex->error;
    }
    $conex->query("USE trabalho");
    
    $db = "INSERT INTO dados(email, senha) VALUES ('rogerio@email.com', 'a12345678')";
    if ($conex->query($db) === TRUE){
        echo "Dados inseridos com sucesso";
    }
    else {
        echo "Erro ao inserir dados" . $conex->error;
    }
?>