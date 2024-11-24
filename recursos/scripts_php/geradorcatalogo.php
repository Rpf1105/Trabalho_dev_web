<?php
 //criacao do database
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
$db = "SELECT id, titulo, sinopse, path_imagem FROM catalogo"; 
$result = $conex->query($db); 
if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) { 
        echo "<div class='produto'>
        <div class='left'>
            <a class='link_titulo' href=review.php?id=". $row["id"]. ">" . $row["titulo"] . "</a>
            <p>". $row["sinopse"] ."</p>
        </div>
    <div class='right'>
        <img class='preview' src=" . $row["path_imagem"] ."alt=''>
        <p>5/5</p>
    </div>
    </div>"; 
    } 
}  
else { 
      echo "No records has been found"; 
} 