<?php

    $servidor= "localhost:3307";
    $user= "site";
    $pass= "1105";

    $conex = new mysqli(
        $servidor,
        $user,
        $pass
    );

    if($conex->connect_error){
        die("Conexao falhou: " . $conex->connect_error);
    }
?>