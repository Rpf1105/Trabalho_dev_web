<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="recursos/login.css">
    <link rel="stylesheet" href="recursos/estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php include 'recursos/header.php'?>
    <div class="content">
    <div class="container">
        <h2>Login</h2>
        <form action="/login" method="POST">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>

            <input type="submit" value="Entrar">
        </form>
        <div class="form-footer">
            <p>Ainda não tem uma conta? <a href="cadastro.html">Cadastre-se aqui</a></p>
        </div>
    </div>
    </div>
</body>
</html>