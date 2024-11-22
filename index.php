<!DOCTYPE html>
<html>
    <head>
        <title>Nome da pagina</title>
        <link rel="stylesheet" href="recursos/css/estilo.css">
    </head>
    <body>
       <?php include 'recursos/scripts_php/header.php' ?>
        <div class="content">
            <div class="main">
                <H1>CATALOGO</H1>
                <?php 
                include 'recursos/scripts_php/geradorcatalogo.php'
                ?>
            </div>
        </div>
    </body>
</html>