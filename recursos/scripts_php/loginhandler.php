<?php
//cadastro
    $email=$senha="";
    $conex->query("USE trabalho");
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = check_input($_POST["email"]);
        $senha = check_input($_POST["senha"]);
    }
    $db = "SELECT senha from dados_usuario where email = '" . $email .  "'";
    $result = $conex->query($db);

    if(mysqli_num_rows($result) == 0){
        echo 'email nao cadastrado';
    }
    $row = $result->fetch_assoc();
    if($senha == $row['senha'] && $senha!=""){
        $_SESSION['email'] = $email;
        $db = "SELECT prof_pic from dados_usuario where email = '" . $email .  "'";
        $result = $conex->query($db);
        $foto = $result->fetch_assoc();
        $_SESSION['foto'] = $foto['prof_pic'];
        header("Location: index.php");
    }
    else if($senha!=""){
        echo "<script>erroForm();</script>";
    }
?>