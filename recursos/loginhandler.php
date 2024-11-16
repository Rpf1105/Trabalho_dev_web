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

//cadastro
    $email=$senha=$nome=$datanasc=$sexo="";
    function check_input($dado){
        $dado = trim($dado);
        $dado = htmlspecialchars($dado);
        return $dado;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = check_input($_POST["nome"]);
        $email = check_input($_POST["email"]);
        $senha = check_input($_POST["senha"]);
        $datanasc = check_input($_POST["datanasc"]);
    }
?>