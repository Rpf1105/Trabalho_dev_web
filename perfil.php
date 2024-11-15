<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="recursos/estilo.css">
        <link rel="stylesheet" href="recursos/perfil.css">
        <script src="recursos/javascript.js"></script>
        <title>Perfil e Configurações</title>
        <meta charset="utf-8">
    </head>
    <body>
    <?php include 'recursos/header.php'?>
        <div class="content">
            <div class="main">
                <h1>Configurações</h1><br>
                <div class="perfil">
                    <h2 id="nome">placeholder nome</h2>
                    <div class="foto">
                        <img src="" alt="" id="foto">
                    </div>
                </div>
                <script>getProfile()</script>
                <div class="config">
                    <p>Tema de cor</p>
                    <select name="" id="tema">
                        <option value="claro">Claro</option>
                        <option value="escuro">Escuro</option>
                        <option value="contraste">Alto Contraste</option>
                    </select>
                </div>


            </div>
        </div>



    </body>
</html>