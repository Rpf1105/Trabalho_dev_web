<?php
$conex->query("USE trabalho");
$db = "
    create table if NOT exists reviews(
        id int,
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
//insert review generico
$db = "
insert into catalogo(id, email, nota, review) VALUES (
        1,
        'rogeriofilho1105@gmail.com',
        5,
        'muito bom'
    );
";
?>