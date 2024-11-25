<?php
$conex->query("USE trabalho");
$db = "
    create table if NOT exists reviews(
        id serial,
        email varchar (100),
        nota int,
        review varchar(1000),
        PRIMARY KEY(id, email),
        FOREIGN KEY (id) REFERENCES catalogo(id),
        FOREIGN KEY (email) REFERENCES dados_usuario(email)
    );
";
if ($conex->query($db) === TRUE){
}
else {
    echo "Erro ao criar tabela" . $conex->error;
}
$db = "ALTER TABLE `trabalho`.`reviews` DROP INDEX `id`, ADD INDEX `id` (`id`) USING BTREE;";
if ($conex->query($db) === TRUE){
}
else {
    echo "Erro ao alterar a tabela" . $conex->error;
}
//Pegando produto pelo id
$id = $_GET["id"];

$db = "SELECT AVG(nota) FROM reviews";
$result = $conex->query($db);
$nota = $result->fetch_assoc();

$db = "SELECT * FROM catalogo WHERE ID = " . $id;
$result = $conex->query($db);

while($row = $result->fetch_assoc()) {
    echo "
    <div class='info'>
        <h1>" .$row['titulo'] . "</h1>
        <p> Nota:" . $nota['AVG(nota)'] . "/5</p>
        <p>". $row['sinopse'] . "</p>
        </div>
        <img src=". $row['path_imagem']. "alt='a'>
    </div>";
}

//insert review generico
$db = "
insert into reviews(id, email, nota, review) VALUES (
        1,
        'rogeriofilho1105@gmail.com',
        5,
        'muito bom'
    );
";
?>