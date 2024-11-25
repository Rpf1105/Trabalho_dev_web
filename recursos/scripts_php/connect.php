<?php

    $servidor= "localhost";
    $user= "root";
    $pass= "";

    $conex = new mysqli(
        $servidor,
        $user,
        $pass
    );

    if($conex->connect_error){
        die("Conexao falhou: " . $conex->connect_error);
    }
?>