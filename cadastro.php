<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="recursos/login.css">
    <link rel="stylesheet" href="recursos/estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Conta</title>
</head>
<body>
    <?php include 'recursos/header.php'?>
    <?php include 'recursos/loginhandler.php'?>
    <div class="container">
        <h2>Faça sua conta</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
            <label for="nome">Nome de Usuario</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>

            <label for="datanasc">Data de Nascimento</label>
            <input type="date" id="datanasc" name="datanasc" required>
            
            <select name="" id="tema">
                <option value="masc">Masculino</option>
                <option value="fem">Feminino</option>
                <option value="nao">Prefiro não dizer</option>
            </select>

            <input type="submit" value="Cadastrar">
        </form>
        <div class="form-footer">
            <p>Já tem uma conta? <a href="login.html">Faça login aqui</a></p>
        </div>
    </div>

</body>
</html>