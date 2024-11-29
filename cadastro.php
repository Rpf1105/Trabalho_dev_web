<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="recursos/css/login.css">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Conta</title>
</head>
<body>
    <?php include 'recursos/scripts_php/header.php'?>
    <div class="content">
    <div class="container">
        <h2>Faça sua conta</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" onsubmit="return validaform()">
            <label for="nome">Nome de Usuario</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>

            <label for="datanasc">Data de Nascimento</label>
            <input type="date" id="datanasc" name="datanasc" required>
            
            <div class="custom_select">
                <label for="sexo">Qual o seu sexo</label>
                <select name="sexo" id="sexo[]">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Indefinido">Prefiro não dizer</option>
                </select>
            </div>
            <div class='erro' id="erroform" style="display: none;"><p>Esse email ja foi utilizado, por favor entre outro email</p></div><br>
            <input type="submit" value="Cadastrar">
        </form>
        <div class="form-footer">
            <p>Já tem uma conta? <a href="login.html">Faça login aqui</a></p>
        </div>
    </div>
    </div>
    <?php include 'recursos/scripts_php/cadastrohandler.php'?>
    <script src="recursos/javascript.js">erroCadastro();</script>
</body>
</html>