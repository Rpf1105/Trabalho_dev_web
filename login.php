<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="recursos/css/login.css">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php include 'recursos/scripts_php/header.php'?>
    <div class="content">
    <div class="container">
        <h2>Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>

            <input type="submit" value="Entrar">
            <div class="erro" id="erroform" style="display: none;"><p>Esse login não foi encontrado, tente digitar novamente ou cadastre o email</p></div>
        </form>
        <div class="form-footer">
            <p>Ainda não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a></p>
        </div>
    </div>
    </div>
    <?php include 'recursos\scripts_php\loginhandler.php' ?>
</body>
</html>