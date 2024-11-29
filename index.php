<!DOCTYPE html>
<html>
    <head>
        <title>Catalogo</title>
        <link rel="stylesheet" href="recursos/css/estilo.css">
    </head>
    <body>
       <?php include 'recursos/scripts_php/header.php' ?>
        <div class="content">
            <div class="main">
                <div class="new_prod">
                    <H1>CATALOGO</H1>
                    <button id='review_button' class="button" onclick="openPopup()" style="width: 60px; height: 60px;"><h1>+</h1></button>
                </div>
                <div class="review_tab" id="new_review" style="visibility: hidden;">
                    <div class="form_header">
                        <h2>Entre o novo item</h2>
                        <button onclick="closePopup()">X</button>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" style="text-align: center;">
                        <label for="titulo">Titulo do produto</label><br>
                        <input type="text" id="titulo" name="titulo"><br>
                        <label for="review">Sinopse do produto</label><br>
                        <input type="text" id="sinopse" name="sinopse"><br>
                        <label for="review">Path da imagem</label><br>
                        <input type="text" id="path" name="path"><br>
                        <input type="submit" value="Enviar">
                    </form>
                </div>
                <?php 
                include 'recursos/scripts_php/geradorcatalogo.php'
                ?>
            </div>
        </div>
    </body>
</html>