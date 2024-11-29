<?php
 //criacao do database
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
}
else{
    $email="";
    echo "<script>allowReview();</script>";
}
$conex->query("USE trabalho");
$db = "
    CREATE TABLE IF NOT EXISTS catalogo(
        id serial,
        titulo varchar(100),
        sinopse varchar(1000),
        path_imagem varchar(500),
        PRIMARY KEY(id)
    );
    ";
if ($conex->query($db) === TRUE){
}
else {
    echo "Erro ao criar tabela" . $conex->error;
}
//comando de inserir produto novo
$titulo = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && $titulo == ""){
    $titulo = check_input($_POST["titulo"]);
    $sinopse = check_input($_POST["sinopse"]);
    $path = check_input($_POST["path"]);
    $db = "insert into catalogo(titulo, sinopse, path_imagem) 
            VALUES ('$titulo', '$sinopse', '$path');";
    $conex->query($db);
    header("Location: index.php");
}


//gerar catalogo na pagina
$db = "SELECT *, AVG(nota) from reviews GROUP BY ID";
$media = $conex->query($db);
$db = "SELECT id, titulo, sinopse, path_imagem FROM catalogo"; 
$result = $conex->query($db); 
if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc() ) { 
        $nota = $media->fetch_assoc();
        error_reporting(E_ERROR | E_PARSE);
        if ($nota['AVG(nota)'] !== NULL) {
            $nota_prod = $nota['AVG(nota)'];
        }
        else {
            $nota_prod = "0.0000";
        }
        echo "<div class='produto'>
        <div class='left'>
            <a class='link_titulo' href=review.php?id=". $row["id"]. ">" . $row["titulo"] . "</a>
            <p>". $row["sinopse"] ."</p>
        </div>
    <div class='right'>
        <img class='preview' src=" . $row["path_imagem"] ."alt=''>
        <p>" . $nota_prod . "/5</p>
    </div>
    </div>"; 
    } 
}  
else { 
      echo "Não foi encontrado o conteúdo"; 
} 
