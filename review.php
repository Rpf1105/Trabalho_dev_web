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
                <?php 
                $id = $_GET["id"];
                
                include 'recursos\scripts_php\listareview.php'
                ?>
            </div>
        </div>
    </body>
</html>