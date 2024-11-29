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
if(isset($_GET['id'])){
    $_SESSION['id'] = $_GET['id'];    
}
$id = $_SESSION['id'];
$db = "SELECT AVG(nota) FROM reviews WHERE id = " . $id;
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
?>
<hr>
<div class="add_review">
    <h1>Reviews</h1><br>
    <button id=review_button class="button" onclick="openPopup()"><h1>adicionar review</h1></button>
    <div class="review_tab" id="new_review" style="visibility: hidden;">
        <div class="form_header">
            <h2>Compartilhe sua opinião</h2>
            <button onclick="closePopup()">X</button>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
            <label for="titulo">Titulo da sua review</label><br>
            <input type="text" id="titulo" name="titulo" class="titulo"><br>
            <label for="review">Descreva sua opiniao</label><br>
            <input type="text" id="review" name="review" class="review"><br>
            <p>Escolha a sua nota</p>
            <div class="nota_radio">
                <input type="radio" id="1" name="nota" value="1">
                <label for="1">1</label><br>
                <input type="radio" id="2" name="nota" value="2">
                <label for="2">2</label><br>
                <input type="radio" id="3" name="nota" value="3">
                <label for="3">3</label><br>
                <input type="radio" id="4" name="nota" value="4">
                <label for="4">4</label><br>
                <input type="radio" id="5" name="nota" value="5">
                <label for="5">5</label><br><br>
            </div>

            <input type="submit" value="Enviar">
            <p>Obs: Caso você ja tenha uma review sobre este produto ela sera substituida ao enviar esse formulario</p>
        </form>
    </div>
</div>
<?php
$titulo=$review="";
$nota=1;
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
}
else{
    $email="";
    echo "<script>allowReview();</script>";
}
$conex->query("USE trabalho");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $titulo = check_input($_POST["titulo"]);
    $review = check_input($_POST["review"]);
    $nota = $_POST["nota"];
}
$db = "INSERT into reviews(id, email, nota, review, titulo) VALUES (" . $_SESSION['id'] . ", '$email', $nota, '$review', '$titulo') 
        ON DUPLICATE KEY UPDATE nota='$nota', review='$review', titulo='$titulo'
        ";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $conex->query($db);
}
$db = "SELECT * FROM reviews WHERE id =" . $id; 
$result = $conex->query($db); 
if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) { 
        echo "<div class='produto'>
        <div class='left'>
            <h2>" . $row['titulo'] ."</h2>
            <p>". $row["review"] ."</p>
        </div>
    <div class='right'>
        <p>" . $row['nota']. "/5</p>
    </div>
    </div>"; 
    } 
}  
else { 
      echo "Ainda não foi feita nenhuma review"; 
} 
?>