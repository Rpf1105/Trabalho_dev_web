<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="recursos/css/estilo.css">
        <link rel="stylesheet" href="recursos/css/perfil.css">
        <script src="recursos/javascript.js"></script>
        <title>Perfil e Configurações</title>
        <meta charset="utf-8">
    </head>
    <body>
    <?php include 'recursos/scripts_php/header.php'?>
        <div class="content">
            <div class="main">
                <h1>Perfil</h1><br>
                <?php 
                $email = $_SESSION['email'];
                $db = "USE trabalho";
                $conex->query($db);
                $db = "SELECT nickname, sexo, nascimento, prof_pic FROM dados_usuario WHERE email ='" . $email. "'"; 
                $result = $conex->query($db);
                $row = $result->fetch_assoc();
                echo "
                    <div class='perfil'>
                        <div class='dados_pessoais'>
                            <h2> Suas informações </h2>
                            <h3 id='nome'>Nome de usuario: ". $row['nickname'] ."</h3>
                            <h3 id='nome'>Sexo: ". $row['sexo'] ."</h3>
                            <h3 id='nome'>Data de nascimento: ". $row['nascimento'] ."</h3>
                        </div>
                        <div class='foto_container'>
                            <img class='foto' src='" . $_SESSION['foto'] . "' alt='' id='foto'>
                            <button class='mudar_foto' id='mudar_foto' onclick='pictureToggle()'><p>Mudar foto</p></button>
                            <div class='form_foto' id='form_foto' style='display:none'>
                                <p>Insira o link da sua imagem aqui</p>
                                <form action='' method='POST'>
                                    <input type='text' id='link_foto' name='link_foto' class='link_foto'>
                                    <input type='submit' value='Entrar'>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                ";
                $db = "SELECT * FROM reviews WHERE email = '" . $_SESSION['email'] . "'";
                $result = $conex->query($db); 
                echo "<h1>Suas reviews</h1>";
                if ($result->num_rows > 0) { 
                    while($row = $result->fetch_assoc()) { 
                        $db = "SELECT id, titulo FROM catalogo WHERE id = " . $row['id'];
                        $resultaux = $conex->query($db);
                        $id = $resultaux->fetch_assoc(); 
                        echo "<div class='produto'>
                        <div class='left'>
                            <a class='link_titulo' href=review.php?id=". $id["id"]. ">" . $id["titulo"] . "</a>
                            <h2>" . $row['titulo'] ."</h2>
                            <p>". $row["review"] ."</p>
                        </div>
                        <div class='right'>
                            <p>" . $row['nota']. "/5</p>
                        </div>
                </div>"; 
                    } 
                }
                $foto="";
                $conex->query("USE trabalho");

                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $foto = check_input($_POST["link_foto"]);
                }
                $db = "INSERT into dados_usuario(email, prof_pic) VALUES ('" . $_SESSION['email'] . "', '$foto') 
                ON DUPLICATE KEY UPDATE prof_pic='" . $_SESSION['foto'] ."'
                ";
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $_SESSION['foto']=$foto;
                    $conex->query($db);
                }
                ?>
            </div>
        </div>

    </body>
</html>